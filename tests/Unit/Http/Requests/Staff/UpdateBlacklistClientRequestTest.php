<?php

use App\Http\Requests\Staff\UpdateBlacklistClientRequest;

beforeEach(function (): void {
    $this->subject = new UpdateBlacklistClientRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'name'   => 'required|string|max:255',
        'reason' => 'required|string|max:65536',
    ], $actual);
});

