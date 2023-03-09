<?php

use App\Http\Requests\Staff\StoreDistributorRequest;

beforeEach(function (): void {
    $this->subject = new StoreDistributorRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'name'     => 'required|unique:distributors,name',
        'position' => 'required',
    ], $actual);
});
