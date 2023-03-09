<?php

/**
 * @see \App\Console\Commands\TestMailSettings
 */
it('runs successfully', function (): void {
    $this->artisan('test:email')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
