<?php

namespace Tests\Todo\Feature\Http\Controllers;

use App\Models\User;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\StatsController
 */
class StatsControllerTest extends TestCase
{
    /**
     * @test
     */
    public function bankers_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('bankers'));

        $response->assertOk();
        $response->assertViewIs('stats.users.bankers');
        $response->assertViewHas('bankers');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function bountied_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('bountied'));

        $response->assertOk();
        $response->assertViewIs('stats.requests.bountied');
        $response->assertViewHas('bountied');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function completed_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('completed'));

        $response->assertOk();
        $response->assertViewIs('stats.torrents.completed');
        $response->assertViewHas('completed');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function dead_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('dead'));

        $response->assertOk();
        $response->assertViewIs('stats.torrents.dead');
        $response->assertViewHas('dead');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function downloaded_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('downloaded'));

        $response->assertOk();
        $response->assertViewIs('stats.users.downloaded');
        $response->assertViewHas('downloaded');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function dying_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('dying'));

        $response->assertOk();
        $response->assertViewIs('stats.torrents.dying');
        $response->assertViewHas('dying');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function group_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('group', ['id' => $id]));

        $response->assertOk();
        $response->assertViewIs('stats.groups.group');
        $response->assertViewHas('users');
        $response->assertViewHas('group');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function groups_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('groups'));

        $response->assertOk();
        $response->assertViewIs('stats.groups.groups');
        $response->assertViewHas('groups');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function index_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('stats'));

        $response->assertOk();
        $response->assertViewIs('stats.index');
        $response->assertViewHas('all_user');
        $response->assertViewHas('active_user');
        $response->assertViewHas('disabled_user');
        $response->assertViewHas('pruned_user');
        $response->assertViewHas('banned_user');
        $response->assertViewHas('num_torrent');
        $response->assertViewHas('categories');
        $response->assertViewHas('num_hd');
        $response->assertViewHas('num_sd');
        $response->assertViewHas('torrent_size');
        $response->assertViewHas('num_seeders');
        $response->assertViewHas('num_leechers');
        $response->assertViewHas('num_peers');
        $response->assertViewHas('actual_upload');
        $response->assertViewHas('actual_download');
        $response->assertViewHas('actual_up_down');
        $response->assertViewHas('credited_upload');
        $response->assertViewHas('credited_download');
        $response->assertViewHas('credited_up_down');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function languages_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('languages'));

        $response->assertOk();
        $response->assertViewIs('stats.languages.languages');
        $response->assertViewHas('languages');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function leeched_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('leeched'));

        $response->assertOk();
        $response->assertViewIs('stats.torrents.leeched');
        $response->assertViewHas('leeched');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function leechers_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('leechers'));

        $response->assertOk();
        $response->assertViewIs('stats.users.leechers');
        $response->assertViewHas('leechers');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function seeded_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('seeded'));

        $response->assertOk();
        $response->assertViewIs('stats.torrents.seeded');
        $response->assertViewHas('seeded');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function seeders_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('seeders'));

        $response->assertOk();
        $response->assertViewIs('stats.users.seeders');
        $response->assertViewHas('seeders');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function seedsize_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('seedsize'));

        $response->assertOk();
        $response->assertViewIs('stats.users.seedsize');
        $response->assertViewHas('seedsize');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function seedtime_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('seedtime'));

        $response->assertOk();
        $response->assertViewIs('stats.users.seedtime');
        $response->assertViewHas('seedtime');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function uploaded_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('uploaded'));

        $response->assertOk();
        $response->assertViewIs('stats.users.uploaded');
        $response->assertViewHas('uploaded');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function uploaders_returns_an_ok_response(): void
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('uploaders'));

        $response->assertOk();
        $response->assertViewIs('stats.users.uploaders');
        $response->assertViewHas('uploaders');

        // TODO: perform additional assertions
    }

    // test cases...
}