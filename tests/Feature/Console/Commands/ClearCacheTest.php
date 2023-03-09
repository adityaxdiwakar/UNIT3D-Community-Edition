<?php

/**
 * @see \App\Console\Commands\ClearCache
 */
it('runs successfully', function (): void {
    $this->artisan('clear:all_cache')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
