<?php

/**
 * @see \App\Console\Commands\AutoRecycleClaimedTorrentRequests
 */
it('runs successfully', function (): void {
    $this->artisan('auto:recycle_claimed_torrent_requests')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
