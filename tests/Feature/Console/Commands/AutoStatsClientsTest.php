<?php

/**
 * @see \App\Console\Commands\AutoStatsClients
 */
it('runs successfully', function (): void {
    $this->artisan('auto:stats_clients')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
