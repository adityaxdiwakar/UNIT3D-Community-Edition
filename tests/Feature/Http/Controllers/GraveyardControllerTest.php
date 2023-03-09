<?php

use App\Models\Graveyard;
use App\Models\Torrent;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('destroy returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $graveyard = Graveyard::factory()->create();

    $response = $this->delete(route('graveyard.destroy', ['id' => $graveyard->id]));

    $response->assertOk();
    $this->assertModelMissing($graveyard);

    // TODO: perform additional assertions
});

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->get(route('graveyard.index'));

    $response->assertOk();
    $response->assertViewIs('graveyard.index');

    // TODO: perform additional assertions
});

test('store returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = Torrent::factory()->create();
    $graveyard = Graveyard::factory()->create();

    $response = $this->post(route('graveyard.store', ['id' => $graveyard->id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

// test cases...