<?php

/**
 * @see \App\Console\Commands\AutoRemovePersonalFreeleech
 */
it('runs successfully', function (): void {
    $this->artisan('auto:remove_personal_freeleech')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
