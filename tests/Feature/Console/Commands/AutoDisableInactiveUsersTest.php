<?php

/**
 * @see \App\Console\Commands\AutoDisableInactiveUsers
 */
it('runs successfully', function (): void {
    $this->artisan('auto:disable_inactive_users')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
