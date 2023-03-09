<?php

use App\Models\Genre;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $genres = Genre::factory()->times(3)->create();

    $response = $this->get(route('mediahub.genres.index'));

    $response->assertOk();
    $response->assertViewIs('mediahub.genre.index');
    $response->assertViewHas('genres', $genres);

    // TODO: perform additional assertions
});

// test cases...