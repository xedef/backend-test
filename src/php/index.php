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
        $result = ORM::factory('Venue')
        ->find_all();
        $this->response->json($result);
    }

    /**
        * Get a venue
        *
        * @see Controller_API::rows
        */
    public function action_venue()
    {
        $result = ORM::factory('Venue')
            ->where('Venue.id', '=', (int) $this->request->param('id'))
            ->find();

        $items = $result
            ->items
            ->find_all();
        
        $venue = [
            'bookingId' => $result->id,
            'bookerName' => $result->name,
            'items' => []
        ];

        foreach ($items as $item) {
            $venue['items'][] = [
                'id' => $item->id,
                'name' => $item->name,
                $item->space,
                $item->product
            ];
        }

        $this->response->json($venue);
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
