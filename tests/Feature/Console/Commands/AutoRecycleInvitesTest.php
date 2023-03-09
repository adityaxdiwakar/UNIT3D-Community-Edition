<?php

/**
 * @see \App\Console\Commands\AutoRecycleInvites
 */
it('runs successfully', function (): void {
    $this->artisan('auto:recycle_invites')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
