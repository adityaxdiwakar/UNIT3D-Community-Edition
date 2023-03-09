<?php

use App\Models\Tv;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->get(route('mediahub.shows.index'));

    $response->assertOk();
    $response->assertViewIs('mediahub.tv.index');

    // TODO: perform additional assertions
});

test('show returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $tv = Tv::factory()->create();

    $response = $this->get(route('mediahub.shows.show', ['id' => $id]));

    $response->assertOk();
    $response->assertViewIs('mediahub.tv.show');
    $response->assertViewHas('show');

    // TODO: perform additional assertions
});

// test cases...
