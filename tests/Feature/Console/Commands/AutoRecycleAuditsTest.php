<?php

/**
 * @see \App\Console\Commands\AutoRecycleAudits
 */
it('runs successfully', function (): void {
    $this->artisan('auto:recycle_activity_log')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
