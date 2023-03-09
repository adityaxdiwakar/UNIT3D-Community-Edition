<?php

use App\Http\Requests\Staff\UpdatePageRequest;

beforeEach(function (): void {
    $this->subject = new UpdatePageRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'name'    => 'required|string',
        'content' => 'required|string',
    ], $actual);
});

