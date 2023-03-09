<?php

/**
 * @see \App\Console\Commands\VendorCleanup
 */
it('runs successfully', function (): void {
    $this->artisan('vendor:cleanup')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
