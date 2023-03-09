<?php

use App\Models\Torrent;
use App\Models\TorrentDownload;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('show returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = Torrent::factory()->create();
    $torrentDownload = TorrentDownload::factory()->create();

    $response = $this->get(route('download_check', ['id' => $torrentDownload->id]));

    $response->assertOk();
    $response->assertViewIs('torrent.download_check');
    $response->assertViewHas('torrent', $torrent);
    $response->assertViewHas('user');

    // TODO: perform additional assertions
});

test('store returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();
    $torrent = Torrent::factory()->create();
    $torrentDownload = TorrentDownload::factory()->create();

    $response = $this->get(route('download', ['id' => $torrentDownload->id]));

    $response->assertOk();

    // TODO: perform additional assertions
});

// test cases...