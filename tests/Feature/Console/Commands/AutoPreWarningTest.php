<?php

/**
 * @see \App\Console\Commands\AutoPreWarning
 */
it('runs successfully', function (): void {
    $this->artisan('auto:prewarning')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
