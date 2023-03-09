<?php

use App\Http\Requests\Staff\UpdateModerationRequest;

beforeEach(function (): void {
    $this->subject = new UpdateModerationRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'old_status' => 'required|in:0,1,2,3',
        'status'     => 'required|in:1,2,3',
        'message'    => 'required_if:status,2,3|string',
    ], $actual);
});

