<?php

/**
 * @see \App\Console\Commands\AutoBanDisposableUsers
 */
it('runs successfully', function (): void {
    $this->artisan('auto:ban_disposable_users')
        ->assertExitCode(0)
        ->run();
});
