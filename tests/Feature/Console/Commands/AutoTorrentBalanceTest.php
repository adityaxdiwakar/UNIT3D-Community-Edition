<?php

/**
 * @see \App\Console\Commands\AutoTorrentBalance
 */
it('runs successfully', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $this->artisan('auto:torrent_balance')
        ->assertExitCode(0)
        ->run();

    // TODO: perform additional assertions to ensure the command behaved as expected
});
