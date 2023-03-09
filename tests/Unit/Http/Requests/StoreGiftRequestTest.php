<?php

use App\Http\Requests\StoreGiftRequest;

beforeEach(function (): void {
    $this->subject = new StoreGiftRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'to_username' => [
            'required',
            'exists:users,username',
        ],
        'bonus_points' => [
            'required',
            'numeric',
            'min:1',
        ],
        'bonus_message' => [
            'required',
            'string',
        ],
    ], $actual);
});

test('messages', function (): void {
    $actual = $this->subject->messages();

    $this->assertEquals([
        'to_username.not_in' => 'You cannot gift yourself',
    ], $actual);
});
