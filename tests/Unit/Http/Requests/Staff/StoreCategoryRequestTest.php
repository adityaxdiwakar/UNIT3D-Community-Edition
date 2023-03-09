<?php

use App\Http\Requests\Staff\StoreCategoryRequest;

beforeEach(function (): void {
    $this->subject = new StoreCategoryRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'name'     => 'required|string',
        'position' => 'required|numeric',
        'icon'     => 'required|string',
        'meta'     => 'required|string|in:movie,tv,game,music,no|exclude',
        'image'    => 'max:10240',
    ], $actual);
});
