<?php

/**
 * @see \App\Console\Commands\SyncTorrentSeasonEpisode
 */
it('runs successfully', function (): void {
    $this->artisan('auto:sync_torrent_season_episode')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
