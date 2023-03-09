<?php

use App\Http\Requests\Staff\StoreNoteRequest;

beforeEach(function (): void {
    $this->subject = new StoreNoteRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'message' => 'required|string',
    ], $actual);
});
