<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();

    $response = $this->get(route('users.bans.index', [$user]));

    $response->assertOk();
    $response->assertViewIs('user.ban.index');
    $response->assertViewHas('bans');
    $response->assertViewHas('user', $user);

    // TODO: perform additional assertions
});

// test cases...
