<?php

use App\Http\Requests\Staff\StoreInternalRequest;

beforeEach(function (): void {
    $this->subject = new StoreInternalRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'name'   => 'required',
        'icon'   => 'required',
        'effect' => 'required',
    ], $actual);
});
