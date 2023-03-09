<?php

use App\Http\Requests\Staff\StoreChatRoomRequest;

beforeEach(function (): void {
    $this->subject = new StoreChatRoomRequest();
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

