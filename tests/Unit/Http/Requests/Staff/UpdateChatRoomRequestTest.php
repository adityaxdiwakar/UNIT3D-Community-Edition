<?php

use App\Http\Requests\Staff\UpdateChatRoomRequest;

beforeEach(function (): void {
    $this->subject = new UpdateChatRoomRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'name' => 'required|string|max:255',
    ], $actual);
});

