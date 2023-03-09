<?php

use App\Http\Requests\Staff\StoreRegionRequest;

beforeEach(function (): void {
    $this->subject = new StoreRegionRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'name'     => 'required|unique:regions,name',
        'position' => 'required',
    ], $actual);
});

