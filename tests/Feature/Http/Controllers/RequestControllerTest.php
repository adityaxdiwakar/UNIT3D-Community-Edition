<?php

uses(RefreshDatabase::class);

test('add bonus returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrentRequest = \App\Models\TorrentRequest::factory()->create();

    $response = $this->post(route('add_votes', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('add request form returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $categories = \App\Models\Category::factory()->times(3)->create();
    $types = \App\Models\Type::factory()->times(3)->create();
    $resolutions = \App\Models\Resolution::factory()->times(3)->create();

    $response = $this->get(route('add_request_form'));

    $response->assertOk();
    $response->assertViewIs('requests.add_request');
    $response->assertViewHas('categories', $categories);
    $response->assertViewHas('types', $types);
    $response->assertViewHas('resolutions', $resolutions);
    $response->assertViewHas('user');
    $response->assertViewHas('title');
    $response->assertViewHas('imdb');
    $response->assertViewHas('tmdb');

    // TODO: perform additional assertions
});

test('approve request returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrentRequest = \App\Models\TorrentRequest::factory()->create();
    $user = \App\Models\User::factory()->create();

    $response = $this->post(route('approveRequest', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('claim request returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrentRequest = \App\Models\TorrentRequest::factory()->create();

    $response = $this->post(route('claimRequest', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('delete request returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrentRequest = \App\Models\TorrentRequest::factory()->create();

    $response = $this->post(route('deleteRequest', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('edit request form returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrentRequest = \App\Models\TorrentRequest::factory()->create();
    $categories = \App\Models\Category::factory()->times(3)->create();
    $types = \App\Models\Type::factory()->times(3)->create();
    $resolutions = \App\Models\Resolution::factory()->times(3)->create();

    $response = $this->get(route('edit_request_form', ['id' => $id]));

    $response->assertOk();
    $response->assertViewIs('requests.edit_request');
    $response->assertViewHas('categories', $categories);
    $response->assertViewHas('types', $types);
    $response->assertViewHas('resolutions', $resolutions);
    $response->assertViewHas('user');
    $response->assertViewHas('torrentRequest', $torrentRequest);

    // TODO: perform additional assertions
});

test('fill request returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrentRequest = \App\Models\TorrentRequest::factory()->create();
    $torrent = \App\Models\Torrent::factory()->create();

    $response = $this->post(route('fill_request', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->get(route('requests.index'));

    $response->assertOk();
    $response->assertViewIs('torrent_request.index');

    // TODO: perform additional assertions
});

test('reject request returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrentRequest = \App\Models\TorrentRequest::factory()->create();
    $user = \App\Models\User::factory()->create();

    $response = $this->post(route('rejectRequest', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('request returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrentRequest = \App\Models\TorrentRequest::factory()->create();
    $torrentRequestClaim = \App\Models\TorrentRequestClaim::factory()->create();
    $tv = \App\Models\Tv::factory()->create();
    $movie = \App\Models\Movie::factory()->create();

    $response = $this->get(route('request', ['id' => $id]));

    $response->assertOk();
    $response->assertViewIs('requests.request');
    $response->assertViewHas('torrentRequest', $torrentRequest);
    $response->assertViewHas('voters');
    $response->assertViewHas('user');
    $response->assertViewHas('carbon');
    $response->assertViewHas('meta');
    $response->assertViewHas('torrentRequestClaim', $torrentRequestClaim);

    // TODO: perform additional assertions
});

test('reset request returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrentRequest = \App\Models\TorrentRequest::factory()->create();

    $response = $this->post(route('resetRequest', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('unclaim request returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $torrentRequest = \App\Models\TorrentRequest::factory()->create();
    $torrentRequestClaim = \App\Models\TorrentRequestClaim::factory()->create();

    $response = $this->post(route('unclaimRequest', ['id' => $id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

// test cases...
