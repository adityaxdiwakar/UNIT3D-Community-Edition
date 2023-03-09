<?php

/**
 * @see \App\Console\Commands\AutoRecycleFailedLogins
 */
it('runs successfully', function (): void {
    $this->artisan('auto:recycle_failed_logins')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
