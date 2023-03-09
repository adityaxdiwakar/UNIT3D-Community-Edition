<?php

/**
 * @see \App\Console\Commands\AutoBonAllocation
 */
it('runs successfully', function (): void {
    $this->artisan('auto:bon_allocation')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
