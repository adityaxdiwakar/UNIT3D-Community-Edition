<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();

    $response = $this->get(route('users.achievements.index', [$user]));

    $response->assertOk();
    $response->assertViewIs('user.achievement.index');
    $response->assertViewHas('route');
    $response->assertViewHas('user', $user);
    $response->assertViewHas('achievements');
    $response->assertViewHas('pending');

    // TODO: perform additional assertions
});

// test cases...
