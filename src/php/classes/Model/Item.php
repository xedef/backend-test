<?php

class Model_Item extends ORM
{
	protected $_belongs_to = [
		'venue' => ['model' => 'Venue'],
	];
	protected $_has_one = [
		'space' => ['model' => 'Space'],
		'product' => ['model' => 'Product'],
	];

	public function get($column)
	{
		$field = parent::get($column);

		if (in_array($column, ['product', 'space'])) {
			if (empty($field->id)) {
				return null;
			}
		}

		return $field;
	}
}
