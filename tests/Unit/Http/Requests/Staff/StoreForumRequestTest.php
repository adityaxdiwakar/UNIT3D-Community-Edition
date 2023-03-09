<?php

use App\Http\Requests\Staff\StoreForumRequest;

beforeEach(function (): void {
    $this->subject = new StoreForumRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'name'                      => 'required',
        'position'                  => 'required',
        'description'               => 'required',
        'parent_id'                 => 'required|integer',
        'permissions'               => 'sometimes|array',
        'permissions.*'             => 'sometimes|exists:groups,id',
        'permissions.*.show_forum'  => 'sometimes|boolean',
        'permissions.*.read_topic'  => 'sometimes|boolean',
        'permissions.*.reply_topic' => 'sometimes|boolean',
        'permissions.*.start_topic' => 'sometimes|boolean',
    ], $actual);
});

