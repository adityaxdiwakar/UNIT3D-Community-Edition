<?php

use App\Http\Requests\Staff\UpdateReportRequest;

beforeEach(function (): void {
    $this->subject = new UpdateReportRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'verdict' => 'required|min:3',
    ], $actual);
});

