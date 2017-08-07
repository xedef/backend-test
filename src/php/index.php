<?php
require_once(__DIR__ . '/bootstrap.php');


// Because SQLite doesn't allow ':' in table/column names
// we need to replace this char for something else: __
ORM::setWithSeparator('__');

/**
 * Basic API controller
 *
 * This controller contains some basic API functionalities.
 * By the routes at the bottom of this page the controller's actions become accessible.
 */
class Controller_API extends Controller
{
    /**
    * Get list of venues
    *
    * @see Controller_API::rows
    */
    public function action_venues()
    {
        // Another option would be to build the query by hand like
        //      ORM::factory('Venue')->join('items', 'INNER')->on('venue_id', '=', 'venues.id')
        // I went with this one to take advantadge of ORM relations
        $results = ORM::factory('Item')->with('venue')->find_all();

        $venues = [];
        foreach ($results as $item) {
            $venue = @$venues[$item->venue->id];
            if (empty($venue)) {
                $venue = new stdClass;
                $venue->id = $item->venue->id;
                $venue->name = $item->venue->name;
                $venue->items = [];
            }

            $venue->items[] = $item->name;
            $venues[$item->venue->id] = $venue;
        }

        $this->response->json(array_values($venues));
    }

    /**
    * Get a venue
    *
    * @see Controller_API::rows
    */
    public function action_venue()
    {
        $venue = new stdClass;
        $venue->bookingId = null;
        $venue->bookerName = null;
        $venue->items = [];

        // Changed this query to perform only one call
        $results = ORM::factory('Item')
            ->with('venue')
            ->with('product')
            ->with('space')
            ->where('venue_id', '=', (int) $this->request->param('id'))
            ->find_all();


        if (count($results) === 0) {
            return $this->response->json($venue);
        }
        $venue->bookingId = $results[0]->get('venue')->id;
        $venue->bookerName = $results[0]->get('venue')->name;

        foreach($results as $result) {
            $item = new stdClass();
            $item->id = $result->id;
            $item->name = $result->name;
            $item->space = $result->get('space');
            $item->product = $result->get('product');

            $venue->items[] = $item;
        }

        return $this->response->json($venue);
    }

    /**
        * Error 404 handler
        */
    public function action_404()
    {
        $this->response
            ->status(404)
            ->json([
                'error' => __('Page not found'),
            ])
        ;
    }
}

/**
 * The routes for controller
 *
 * The routes are accessible using a (properly setup) webserver requesting 'index.php'.
 *
 * The routes are also testable using the CLI. This works as following:
 *  - php index.php '/path?a=b&c=d'               Similar to: GET /path?a=b&c=d
 *  - echo 'a=b&c=d' | php index.php POST /path   Similar to: POST /path  with post data 'a=b&c=d'
 */

//////////////////////////////
// Venue routes
//////////////////////////////

// /venue or /venues
Route::set('venues', 'venue(s)')->defaults([
    'controller' => 'API',
    'action' => 'venues',
]);

// /venues/<id> or /venue/<id>
Route::set('venue', 'venue(s)/<id>', ['id' => '\d+'])->defaults([
    'controller' => 'API',
    'action' => 'venue'
]);

//////////////////////////////
// Error routes
//////////////////////////////

// Error 404 handler
Route::set('404', '<uri>', ['uri' => '.*'])->defaults([
    'controller' => 'API',
    'action' => '404',
]);

//////////////////////////////////////////////////////////////
// Run request (handles both web requests and CLI requests)
//////////////////////////////////////////////////////////////

$request = Request::factory(Request::detect_uri(), [], false);
echo $request
    ->execute()
    ->send_headers()
    ->body()
;
