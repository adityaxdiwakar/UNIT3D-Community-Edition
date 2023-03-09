<?php

use App\Http\Requests\StorePoll;

beforeEach(function (): void {
    $this->subject = new StorePoll();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'title'     => 'required|min:10',
        'options.*' => 'filled',
        'options'   => 'min:2',
    ], $actual);
});

test('messages', function (): void {
    $actual = $this->subject->messages();

    $this->assertEquals([
        'options.*.filled' => 'You must fill in all options fields',
    ], $actual);
});
