<?php

uses(RefreshDatabase::class);

test('create returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = \App\Models\Torrent::factory()->create();
    $categories = \App\Models\Category::factory()->times(3)->create();
    $types = \App\Models\Type::factory()->times(3)->create();
    $resolutions = \App\Models\Resolution::factory()->times(3)->create();
    $regions = \App\Models\Region::factory()->times(3)->create();
    $distributors = \App\Models\Distributor::factory()->times(3)->create();

    $response = $this->get(route('upload_form', ['category_id' => $torrent->category_id]));

    $response->assertOk();
    $response->assertViewIs('torrent.upload');
    $response->assertViewHas('categories', $categories);
    $response->assertViewHas('types', $types);
    $response->assertViewHas('resolutions', $resolutions);
    $response->assertViewHas('regions', $regions);
    $response->assertViewHas('distributors', $distributors);
    $response->assertViewHas('user');
    $response->assertViewHas('category_id');
    $response->assertViewHas('title');
    $response->assertViewHas('imdb');
    $response->assertViewHas('tmdb');

    // TODO: perform additional assertions
});

test('destroy returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = \App\Models\Torrent::factory()->create();
    $histories = \App\Models\History::factory()->times(3)->create();

    $response = $this->post(route('delete'), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('edit returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = \App\Models\Torrent::factory()->create();
    $categories = \App\Models\Category::factory()->times(3)->create();
    $types = \App\Models\Type::factory()->times(3)->create();
    $resolutions = \App\Models\Resolution::factory()->times(3)->create();
    $regions = \App\Models\Region::factory()->times(3)->create();
    $distributors = \App\Models\Distributor::factory()->times(3)->create();

    $response = $this->get(route('edit_form', ['id' => $torrent->id]));

    $response->assertOk();
    $response->assertViewIs('torrent.edit_torrent');
    $response->assertViewHas('categories', $categories);
    $response->assertViewHas('types', $types);
    $response->assertViewHas('resolutions', $resolutions);
    $response->assertViewHas('regions', $regions);
    $response->assertViewHas('distributors', $distributors);
    $response->assertViewHas('keywords');
    $response->assertViewHas('torrent', $torrent);
    $response->assertViewHas('user');

    // TODO: perform additional assertions
});

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->get(route('torrents'));

    $response->assertOk();
    $response->assertViewIs('torrent.torrents');

    // TODO: perform additional assertions
});

test('preview returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->post('upload/preview', [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('show returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = \App\Models\Torrent::factory()->create();
    $history = \App\Models\History::factory()->create();
    $tv = \App\Models\Tv::factory()->create();
    $movie = \App\Models\Movie::factory()->create();
    $featuredTorrent = \App\Models\FeaturedTorrent::factory()->create();
    $audits = \App\Models\Audit::factory()->times(3)->create();

    $response = $this->get(route('torrent', ['id' => $torrent->id]));

    $response->assertOk();
    $response->assertViewIs('torrent.torrent');
    $response->assertViewHas('torrent', $torrent);
    $response->assertViewHas('user');
    $response->assertViewHas('personal_freeleech');
    $response->assertViewHas('freeleech_token');
    $response->assertViewHas('meta');
    $response->assertViewHas('trailer');
    $response->assertViewHas('platforms');
    $response->assertViewHas('total_tips');
    $response->assertViewHas('user_tips');
    $response->assertViewHas('featured');
    $response->assertViewHas('mediaInfo');
    $response->assertViewHas('last_seed_activity');
    $response->assertViewHas('playlists');
    $response->assertViewHas('audits', $audits);

    // TODO: perform additional assertions
});

test('store returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $category = \App\Models\Category::factory()->create();

    $response = $this->post(route('upload'), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('update returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrent = \App\Models\Torrent::factory()->create();
    $category = \App\Models\Category::factory()->create();

    $response = $this->post(route('edit', ['id' => $torrent->id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

// test cases...
