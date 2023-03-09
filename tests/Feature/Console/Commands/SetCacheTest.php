<?php

/**
 * @see \App\Console\Commands\SetCache
 */
it('runs successfully', function (): void {
    $this->artisan('set:all_cache')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
