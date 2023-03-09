<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $users = User::factory()->times(3)->create();

    $response = $this->get(route('staff.cheaters.index'));

    $response->assertOk();
    $response->assertViewIs('Staff.cheater.index');
    $response->assertViewHas('cheaters');

    // TODO: perform additional assertions
});

// test cases...
