<?php

use App\Http\Requests\VoteOnPoll;

beforeEach(function (): void {
    $this->subject = new VoteOnPoll();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'option' => 'required|min:1',
    ], $actual);
});

test('messages', function (): void {
    $actual = $this->subject->messages();

    $this->assertEquals([
        'option.required' => 'You must select an answer',
    ], $actual);
});
