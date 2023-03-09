<?php

use App\Models\Movie;
use App\Models\Playlist;
use App\Models\PlaylistTorrent;
use App\Models\Torrent;
use App\Models\Tv;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('create returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->get(route('playlists.create'));

    $response->assertOk();
    $response->assertViewIs('playlist.create');

    // TODO: perform additional assertions
});

test('destroy returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $playlist = Playlist::factory()->create();

    $response = $this->delete(route('playlists.destroy', ['id' => $playlist->id]));

    $response->assertOk();
    $this->assertModelMissing($playlist);

    // TODO: perform additional assertions
});

test('download playlist returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $playlist = Playlist::factory()->create();
    $torrents = Torrent::factory()->times(3)->create();

    $response = $this->get(route('playlists.download', ['id' => $playlist->id]));

    $response->assertOk();

    // TODO: perform additional assertions
});

test('edit returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $playlist = Playlist::factory()->create();

    $response = $this->get(route('playlists.edit', ['id' => $playlist->id]));

    $response->assertOk();
    $response->assertViewIs('playlist.edit');
    $response->assertViewHas('playlist', $playlist);

    // TODO: perform additional assertions
});

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $playlists = Playlist::factory()->times(3)->create();

    $response = $this->get(route('playlists.index'));

    $response->assertOk();
    $response->assertViewIs('playlist.index');
    $response->assertViewHas('playlists', $playlists);

    // TODO: perform additional assertions
});

test('show returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $playlist = Playlist::factory()->create();
    $playlistTorrent = PlaylistTorrent::factory()->create();
    $torrent = Torrent::factory()->create();
    $tv = Tv::factory()->create();
    $movie = Movie::factory()->create();
    $playlistTorrents = PlaylistTorrent::factory()->times(3)->create();

    $response = $this->get(route('playlists.show', ['id' => $playlist->id]));

    $response->assertOk();
    $response->assertViewIs('playlist.show');
    $response->assertViewHas('playlist', $playlist);
    $response->assertViewHas('meta');
    $response->assertViewHas('torrents');

    // TODO: perform additional assertions
});

test('store returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->post(route('playlists.store'), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('update returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $playlist = Playlist::factory()->create();

    $response = $this->patch(route('playlists.update', ['id' => $playlist->id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

// test cases...