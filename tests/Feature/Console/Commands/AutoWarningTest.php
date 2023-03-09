<?php

/**
 * @see \App\Console\Commands\AutoWarning
 */
it('runs successfully', function (): void {
    $this->artisan('auto:warning')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
