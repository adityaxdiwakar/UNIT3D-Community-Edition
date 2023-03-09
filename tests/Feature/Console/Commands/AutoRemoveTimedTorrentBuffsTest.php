<?php

/**
 * @see \App\Console\Commands\AutoRemoveTimedTorrentBuffs
 */
it('runs successfully', function (): void {
    $this->artisan('auto:remove_torrent_buffs')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
