<?php

/**
 * @see \App\Console\Commands\AutoNerdStat
 */
it('runs successfully', function (): void {
    $this->artisan('auto:nerdstat')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
