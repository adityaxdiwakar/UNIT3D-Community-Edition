<?php

use App\Http\Requests\Staff\StoreBlacklistClientRequest;

beforeEach(function (): void {
    $this->subject = new StoreBlacklistClientRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'name'   => 'required|string|unique:blacklist_clients',
        'reason' => 'sometimes|string',
    ], $actual);
});
