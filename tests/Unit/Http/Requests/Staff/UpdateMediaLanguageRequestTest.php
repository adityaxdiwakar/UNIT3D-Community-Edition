<?php

use App\Http\Requests\Staff\UpdateMediaLanguageRequest;

beforeEach(function (): void {
    $this->subject = new UpdateMediaLanguageRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'name' => 'required|string|unique:media_languages',
        'code' => 'required|string|unique:media_languages',
    ], $actual);
});

