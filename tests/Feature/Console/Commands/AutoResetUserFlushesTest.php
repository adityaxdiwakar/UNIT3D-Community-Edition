<?php

/**
 * @see \App\Console\Commands\AutoResetUserFlushes
 */
it('runs successfully', function (): void {
    $this->artisan('auto:reset_user_flushes')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
