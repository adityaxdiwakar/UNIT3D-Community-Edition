<?php

use App\Http\Requests\Staff\StoreCategoryRequest;

beforeEach(function (): void {
    $this->subject = new StoreCategoryRequest();
});

test('authorize', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'name'     => 'required|string',
        'position' => 'required|numeric',
        'icon'     => 'required|string',
        'meta'     => 'required|string|in:movie,tv,game,music,no|exclude',
        'image'    => 'max:10240',
    ], $actual);
});

// test cases...
