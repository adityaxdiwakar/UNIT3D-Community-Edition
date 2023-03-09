<?php

uses(RefreshDatabase::class);

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $invites = \App\Models\Invite::factory()->times(3)->create();

    $response = $this->get(route('staff.invites.index'));

    $response->assertOk();
    $response->assertViewIs('Staff.invite.index');
    $response->assertViewHas('invites', $invites);
    $response->assertViewHas('invitecount');

    // TODO: perform additional assertions
});

// test cases...
