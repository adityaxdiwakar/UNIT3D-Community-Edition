<?php

/**
 * @see \App\Console\Commands\AutoRemoveFeaturedTorrent
 */
it('runs successfully', function (): void {
    $this->artisan('auto:remove_featured_torrent')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
