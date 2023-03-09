<?php

use App\Http\Requests\Staff\StoreBanRequest;

beforeEach(function (): void {
    $this->subject = new StoreBanRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'ban_reason' => 'required|string|max:65536',
    ], $actual);
});
