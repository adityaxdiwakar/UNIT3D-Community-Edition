<?php

/**
 * @see \App\Console\Commands\SyncPeers
 */
it('runs successfully', function (): void {
    $this->artisan('auto:sync_peers')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
