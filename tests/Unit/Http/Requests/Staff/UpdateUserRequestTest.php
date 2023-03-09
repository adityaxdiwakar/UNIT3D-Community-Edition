<?php

use App\Http\Requests\Staff\UpdateUserRequest;

beforeEach(function (): void {
    $this->subject = new UpdateUserRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'username'    => 'required',
        'email'       => 'required|max:255',
        'uploaded'    => 'required|integer',
        'downloaded'  => 'required|integer',
        'title'       => 'nullable|present|string|max:255',
        'about'       => 'nullable|present|string|max:16777216',
        'group_id'    => 'required|exists:groups,id',
        'internal_id' => 'nullable|exists:internals,id',
    ], $actual);
});
