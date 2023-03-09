<?php

use App\Http\Requests\StoreTransactionRequest;

beforeEach(function (): void {
    $this->subject = new StoreTransactionRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'exchange' => [
            'bail',
            'required',
            'exists:bon_exchange,id',
        ],
    ], $actual);
});

