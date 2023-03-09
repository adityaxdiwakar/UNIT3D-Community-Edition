<?php

use App\Http\Requests\Staff\StoreGiftRequest;

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
        'username'  => 'required|exists:users,username|max:180',
        'seedbonus' => 'required|integer|min:0',
        'invites'   => 'required|integer|min:0',
        'fl_tokens' => 'required|integer|min:0',
    ], $actual);
});
