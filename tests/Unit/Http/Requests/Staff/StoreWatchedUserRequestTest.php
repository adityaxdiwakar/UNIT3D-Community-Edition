<?php

use App\Http\Requests\Staff\StoreWatchedUserRequest;

beforeEach(function (): void {
    $this->subject = new StoreWatchedUserRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'message' => 'required|string|min:3',
    ], $actual);
});
