<?php

namespace App\GraphQL\Type;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;
use Vinkla\Hashids\Facades\Hashids;

use App\Question;

class QuestionType extends GraphQLType {
	protected $attributes = [
		'name' => 'Question',
		'description' => 'A Question',
		'model' => Question::class,
	];

	public function fields() {
		return [
			'id' => [
				'type' => Type::nonNull(Type::string()),
                'description' => 'Question ID',
                'selectable' => false
			],
			'title' => [
				'type' => Type::nonNull(Type::string()),
				'description' => 'Title of the question',
            ],
			'type' => [
				'type' => Type::nonNull(GraphQL::type('QuestionEnum')),
				'description' => 'Type of the question',
            ],
			'feedback' => [
				'type' => Type::string(),
				'description' => 'Feedback to the question',
            ],
			'answers' => [
				'type' => Type::nonNull(Type::listOf(GraphQL::type('QuestionAnswer'))),
				'description' => 'Answers of the question',
            ]
		];
    }

    protected function resolveHashIdField($root, $args) {
        return Hashids::connection('question')->encode($root->id);
    }
}
