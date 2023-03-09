<?php

/**
 * @see \App\Console\Commands\FetchReleaseYears
 */
it('runs successfully', function (): void {
    $this->artisan('fetch:release_years')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
