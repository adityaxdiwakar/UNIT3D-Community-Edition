<?php

use App\Http\Requests\Staff\UpdateGroupRequest;

beforeEach(function (): void {
    $this->subject = new UpdateGroupRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'name'             => 'required|string',
        'position'         => 'required|integer',
        'level'            => 'required|integer',
        'download_slots'   => 'integer',
        'color'            => 'required',
        'icon'             => 'required',
        'effect'           => 'sometimes',
        'is_internal'      => 'required|boolean',
        'is_modo'          => 'required|boolean',
        'is_admin'         => 'required|boolean',
        'is_owner'         => 'required|boolean',
        'is_trusted'       => 'required|boolean',
        'is_immune'        => 'required|boolean',
        'is_freeleech'     => 'required|boolean',
        'is_double_upload' => 'required|boolean',
        'is_incognito'     => 'required|boolean',
        'can_upload'       => 'required|boolean',
        'autogroup'        => 'required|boolean',
    ], $actual);
});
