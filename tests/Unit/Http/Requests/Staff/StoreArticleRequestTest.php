<?php

use App\Http\Requests\Staff\StoreArticleRequest;

beforeEach(function (): void {
    $this->subject = new StoreArticleRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'title'   => 'required|string|max:255',
        'content' => 'required|string|max:65536',
        'image'   => 'max:10240',
    ], $actual);
});
