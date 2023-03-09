<?php

/**
 * @see \App\Console\Commands\CheckForStaleTickets
 */
it('runs successfully', function (): void {
    $this->artisan('tickets:stale')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
