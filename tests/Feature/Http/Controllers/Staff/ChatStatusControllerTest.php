<?php

uses(RefreshDatabase::class);

test('create returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->get(route('staff.statuses.create'));

    $response->assertOk();
    $response->assertViewIs('Staff.chat.status.create');

    // TODO: perform additional assertions
});

test('destroy returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $chatStatus = \App\Models\ChatStatus::factory()->create();

    $response = $this->delete(route('staff.statuses.destroy', ['id' => $chatStatus->id]));

    $response->assertOk();
    $this->assertModelMissing($staff.status);

    // TODO: perform additional assertions
});

test('edit returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $chatStatus = \App\Models\ChatStatus::factory()->create();

    $response = $this->get(route('staff.statuses.edit', ['id' => $chatStatus->id]));

    $response->assertOk();
    $response->assertViewIs('Staff.chat.status.edit');
    $response->assertViewHas('chatstatus');

    // TODO: perform additional assertions
});

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->get(route('staff.statuses.index'));

    $response->assertOk();
    $response->assertViewIs('Staff.chat.status.index');
    $response->assertViewHas('chatstatuses');

    // TODO: perform additional assertions
});

test('store returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->post(route('staff.statuses.store'), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('store validates with a form request', function (): void {
    $this->assertActionUsesFormRequest(
        \App\Http\Controllers\Staff\ChatStatusController::class,
        'store',
        \App\Http\Requests\Staff\StoreChatStatusRequest::class
    );
});

test('update returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $chatStatus = \App\Models\ChatStatus::factory()->create();

    $response = $this->post(route('staff.statuses.update', ['id' => $chatStatus->id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('update validates with a form request', function (): void {
    $this->assertActionUsesFormRequest(
        \App\Http\Controllers\Staff\ChatStatusController::class,
        'update',
        \App\Http\Requests\Staff\UpdateChatStatusRequest::class
    );
});

// test cases...
