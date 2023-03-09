<?php

/**
 * @see \App\Console\Commands\AutoDeactivateWarning
 */
it('runs successfully', function (): void {
    $this->artisan('auto:deactivate_warning')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
