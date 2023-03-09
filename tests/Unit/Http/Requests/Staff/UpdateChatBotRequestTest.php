<?php

use App\Http\Requests\Staff\UpdateChatBotRequest;

beforeEach(function (): void {
    $this->subject = new UpdateChatBotRequest();
});

test('authorize', function (): void {
    $actual = $this->subject->authorize();

    $this->assertTrue($actual);
});

test('rules', function (): void {
    $actual = $this->subject->rules();

    $this->assertValidationRules([
        'name'     => 'required|min:1|max:255',
        'command'  => 'required|alpha_dash|min:1|max:255',
        'position' => 'required',
        'color'    => 'required',
        'icon'     => 'required',
        'emoji'    => 'required',
        'help'     => 'sometimes|max:9999',
        'info'     => 'sometimes|max:9999',
        'about'    => 'sometimes|max:9999',
    ], $actual);
});

