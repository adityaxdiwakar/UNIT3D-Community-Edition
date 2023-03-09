<?php

use App\Http\Requests\Staff\StoreBonExchangeRequest;

beforeEach(function (): void {
    $this->subject = new StoreBonExchangeRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'description' => 'required|string',
        'value'       => 'required|numeric',
        'cost'        => 'required|numeric',
        'type'        => 'required|string|in:upload,download,personal_freeleech,invite|exclude',
    ], $actual);
});
