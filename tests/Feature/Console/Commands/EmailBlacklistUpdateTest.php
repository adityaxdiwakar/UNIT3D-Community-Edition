<?php

/**
 * @see \App\Console\Commands\EmailBlacklistUpdate
 */
it('runs successfully', function (): void {
    $this->artisan('auto:email-blacklist-update')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
