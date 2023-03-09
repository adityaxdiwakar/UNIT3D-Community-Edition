<?php

uses(RefreshDatabase::class);

test('destroy returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $audit = \App\Models\Audit::factory()->create();

    $response = $this->delete(route('staff.audits.destroy', ['id' => $audit->id]));

    $response->assertOk();
    $this->assertModelMissing($staff.audit);

    // TODO: perform additional assertions
});

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $audits = \App\Models\Audit::factory()->times(3)->create();

    $response = $this->get(route('staff.audits.index'));

    $response->assertOk();
    $response->assertViewIs('Staff.audit.index');
    $response->assertViewHas('audits', $audits);

    // TODO: perform additional assertions
});

// test cases...
