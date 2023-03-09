<?php

use App\Models\BlacklistClient;
use App\Models\Group;
use App\Models\Internal;
use App\Models\Page;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('about returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->get(route('about'));

    $response->assertOk();
    $response->assertViewIs('page.aboutus');

    // TODO: perform additional assertions
});

test('clientblacklist returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $blacklistClients = BlacklistClient::factory()->times(3)->create();

    $response = $this->get(route('client_blacklist'));

    $response->assertOk();
    $response->assertViewIs('page.blacklist.client');
    $response->assertViewHas('clients');

    // TODO: perform additional assertions
});

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $pages = Page::factory()->times(3)->create();

    $response = $this->get(route('pages.index'));

    $response->assertOk();
    $response->assertViewIs('page.index');
    $response->assertViewHas('pages', $pages);

    // TODO: perform additional assertions
});

test('internal returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $internals = Internal::factory()->times(3)->create();

    $response = $this->get(route('internal'));

    $response->assertOk();
    $response->assertViewIs('page.internal');
    $response->assertViewHas('internals', $internals);

    // TODO: perform additional assertions
});

test('show returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $page = Page::factory()->create();

    $response = $this->get(route('pages.show', ['id' => $page->id]));

    $response->assertOk();
    $response->assertViewIs('page.page');
    $response->assertViewHas('page', $page);

    // TODO: perform additional assertions
});

test('staff returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $groups = Group::factory()->times(3)->create();

    $response = $this->get(route('staff'));

    $response->assertOk();
    $response->assertViewIs('page.staff');
    $response->assertViewHas('staff');

    // TODO: perform additional assertions
});

// test cases...
