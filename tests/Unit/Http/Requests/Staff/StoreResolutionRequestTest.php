<?php

use App\Http\Requests\Staff\StoreResolutionRequest;

beforeEach(function (): void {
    $this->subject = new StoreResolutionRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'name'     => 'required',
        'position' => 'required',
    ], $actual);
});

