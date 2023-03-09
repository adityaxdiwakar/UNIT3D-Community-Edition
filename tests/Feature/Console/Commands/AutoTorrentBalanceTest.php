<?php

/**
 * @see \App\Console\Commands\AutoTorrentBalance
 */
it('runs successfully', function (): void {
    $this->artisan('auto:torrent_balance')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
