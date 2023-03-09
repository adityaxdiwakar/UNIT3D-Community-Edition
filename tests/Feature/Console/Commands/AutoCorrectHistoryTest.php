<?php

/**
 * @see \App\Console\Commands\AutoCorrectHistory
 */
it('runs successfully', function (): void {
    $this->artisan('auto:correct_history')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
