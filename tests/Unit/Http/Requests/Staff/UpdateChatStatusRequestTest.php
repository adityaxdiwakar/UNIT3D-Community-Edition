<?php

use App\Http\Requests\Staff\UpdateChatStatusRequest;

beforeEach(function (): void {
    $this->subject = new UpdateChatStatusRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'name'  => 'required',
        'color' => 'required',
        'icon'  => 'required',
    ], $actual);
});

