<?php

/**
 * @see \App\Console\Commands\AutoGraveyard
 */
it('runs successfully', function (): void {
    $this->artisan('auto:graveyard')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
