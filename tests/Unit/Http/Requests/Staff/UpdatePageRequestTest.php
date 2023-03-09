<?php

use App\Http\Requests\Staff\UpdatePageRequest;

beforeEach(function (): void {
    $this->subject = new UpdatePageRequest();
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
        'name'    => 'required|string',
        'content' => 'required|string',
    ], $actual);
});

// test cases...
