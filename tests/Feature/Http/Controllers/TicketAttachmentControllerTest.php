<?php

uses(RefreshDatabase::class);

test('download returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $ticketAttachment = \App\Models\TicketAttachment::factory()->create();

    $response = $this->post(route('tickets.attachment.download', ['attachment' => $ticketAttachment->attachment]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

// test cases...
