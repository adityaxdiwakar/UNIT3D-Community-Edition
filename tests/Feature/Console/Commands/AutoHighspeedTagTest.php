<?php

/**
 * @see \App\Console\Commands\AutoHighspeedTag
 */
it('runs successfully', function (): void {
    $this->artisan('auto:highspeed_tag')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
