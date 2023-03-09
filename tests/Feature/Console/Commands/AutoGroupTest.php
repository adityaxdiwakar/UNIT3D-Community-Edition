<?php

/**
 * @see \App\Console\Commands\AutoGroup
 */
it('runs successfully', function (): void {
    $this->artisan('auto:group')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
