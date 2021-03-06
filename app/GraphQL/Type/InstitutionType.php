<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

use App\Institution;

class InstitutionType extends GraphQLType {
	protected $attributes = [
		'name' => 'Institution',
		'description' => 'An institution',
		'model' => Institution::class,
	];

	public function fields() {
		return [
			'name' => [
				'type' => Type::string(),
				'description' => 'Name of Institution',
            ],
			'color' => [
				'type' => Type::string(),
				'description' => 'Hex color code of Institution',
            ]
		];
	}
}
