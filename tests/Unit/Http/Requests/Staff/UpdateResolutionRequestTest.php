<?php

use App\Http\Requests\Staff\UpdateResolutionRequest;

beforeEach(function (): void {
    $this->subject = new UpdateResolutionRequest();
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
