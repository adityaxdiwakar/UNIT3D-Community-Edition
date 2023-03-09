<?php

use App\Http\Requests\Staff\UpdateTypeRequest;

beforeEach(function (): void {
    $this->subject = new UpdateTypeRequest();
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
