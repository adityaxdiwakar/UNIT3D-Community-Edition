<?php

use App\Http\Requests\Staff\UpdateRegionRequest;

beforeEach(function (): void {
    $this->subject = new UpdateRegionRequest();
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
