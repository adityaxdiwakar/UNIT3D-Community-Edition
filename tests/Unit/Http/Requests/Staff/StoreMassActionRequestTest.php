<?php

use App\Http\Requests\Staff\StoreMassActionRequest;

beforeEach(function (): void {
    $this->subject = new StoreMassActionRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'subject' => 'required|string|max:255',
        'message' => 'required|string|max:65536',
    ], $actual);
});

