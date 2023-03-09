<?php

/**
 * @see \App\Console\Commands\AutoFlushPeers
 */
it('runs successfully', function (): void {
    $this->artisan('auto:flush_peers')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
