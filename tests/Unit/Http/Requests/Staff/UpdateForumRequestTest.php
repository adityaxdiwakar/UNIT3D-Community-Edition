<?php

beforeEach(function (): void {
    $this->subject = new \App\Http\Requests\Staff\UpdateForumRequest();
});

test('authorize', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'name'                      => 'required',
        'position'                  => 'required',
        'description'               => 'required',
        'parent_id'                 => 'required|integer',
        'permissions'               => 'array',
        'permissions.*'             => 'exists:groups,id',
        'permissions.*.show_forum'  => 'boolean',
        'permissions.*.read_topic'  => 'boolean',
        'permissions.*.reply_topic' => 'boolean',
        'permissions.*.start_topic' => 'boolean',
        'forum_type'                => 'in:category,forum',
    ], $actual);
});

// test cases...