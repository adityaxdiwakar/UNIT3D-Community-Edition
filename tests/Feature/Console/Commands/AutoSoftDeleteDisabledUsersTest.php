<?php

/**
 * @see \App\Console\Commands\AutoSoftDeleteDisabledUsers
 */
it('runs successfully', function (): void {
    $this->artisan('auto:softdelete_disabled_users')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
