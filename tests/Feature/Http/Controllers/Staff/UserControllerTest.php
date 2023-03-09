<?php

use App\Http\Controllers\Staff\UserController;
use App\Http\Requests\Staff\UpdateUserRequest;
use App\Models\Group;
use App\Models\Internal;
use App\Models\Note;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('edit returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();
    $group = Group::factory()->create();

    $response = $this->post(route('user_edit', ['username' => $user->username]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('edit validates with a form request', function (): void {
    $this->assertActionUsesFormRequest(
        UserController::class,
        'edit',
        UpdateUserRequest::class
    );
});

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->get(route('user_search'));

    $response->assertOk();
    $response->assertViewIs('Staff.user.index');

    // TODO: perform additional assertions
});

test('permissions returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();

    $response = $this->post(route('user_permissions', ['username' => $user->username]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('settings returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();
    $groups = Group::factory()->times(3)->create();
    $internals = Internal::factory()->times(3)->create();
    $notes = Note::factory()->times(3)->create();

    $response = $this->get(route('user_setting', ['username' => $user->username]));

    $response->assertOk();
    $response->assertViewIs('Staff.user.edit');
    $response->assertViewHas('user', $user);
    $response->assertViewHas('groups', $groups);
    $response->assertViewHas('internals', $internals);
    $response->assertViewHas('notes', $notes);

    // TODO: perform additional assertions
});

// test cases...
