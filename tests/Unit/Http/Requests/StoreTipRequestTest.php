<?php

use App\Http\Requests\StoreTipRequest;

beforeEach(function (): void {
    $this->subject = new StoreTipRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'torrent' => [
            'bail',
            'prohibits:post',
            'required_without:post',
            'exists:torrents,id',
        ],
        'post' => [
            'bail',
            'prohibits:torrent',
            'required_without:torrent',
            'exists:posts,id',
        ],
        'tip' => [
            'required',
            'numeric',
            'min:1',
        ],
    ], $actual);
});

test('messages', function (): void {
    $actual = $this->subject->messages();

    $this->assertEquals([], $actual);
});
