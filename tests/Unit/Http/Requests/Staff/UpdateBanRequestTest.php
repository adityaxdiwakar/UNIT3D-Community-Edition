<?php

use App\Http\Requests\Staff\UpdateBanRequest;

beforeEach(function (): void {
    $this->subject = new UpdateBanRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'unban_reason' => 'required|string|max:65536',
        'group_id'     => 'required|integer|exists:groups,id',
    ], $actual);
});
