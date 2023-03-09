<?php

use App\Models\MediaLanguage;
use App\Models\Subtitle;
use App\Models\Torrent;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('create returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = Torrent::factory()->create();
    $subtitle = Subtitle::factory()->create();
    $mediaLanguages = MediaLanguage::factory()->times(3)->create();

    $response = $this->get(route('subtitles.create', ['torrent_id' => $subtitle->torrent_id]));

    $response->assertOk();
    $response->assertViewIs('subtitle.create');
    $response->assertViewHas('torrent', $torrent);
    $response->assertViewHas('media_languages');

    // TODO: perform additional assertions
});

test('destroy returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $subtitle = Subtitle::factory()->create();

    $response = $this->delete(route('subtitles.destroy', ['id' => $subtitle->id]));

    $response->assertOk();
    $this->assertModelMissing($subtitle);

    // TODO: perform additional assertions
});

test('download returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $subtitle = Subtitle::factory()->create();

    $response = $this->get(route('subtitles.download', ['id' => $subtitle->id]));

    $response->assertOk();

    // TODO: perform additional assertions
});

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->get(route('subtitles.index'));

    $response->assertOk();
    $response->assertViewIs('subtitle.index');

    // TODO: perform additional assertions
});

test('store returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->post(route('subtitles.store'), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('update returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $subtitle = Subtitle::factory()->create();

    $response = $this->post(route('subtitles.update', ['id' => $subtitle->id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

// test cases...