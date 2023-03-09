<?php

uses(RefreshDatabase::class);

test('create returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $categories = \App\Models\Category::factory()->times(3)->create();
    $types = \App\Models\Type::factory()->times(3)->create();
    $resolutions = \App\Models\Resolution::factory()->times(3)->create();
    $genres = \App\Models\Genre::factory()->times(3)->create();

    $response = $this->get(route('staff.rss.create'));

    $response->assertOk();
    $response->assertViewIs('Staff.rss.create');
    $response->assertViewHas('categories', $categories);
    $response->assertViewHas('types', $types);
    $response->assertViewHas('resolutions', $resolutions);
    $response->assertViewHas('genres', $genres);
    $response->assertViewHas('user');

    // TODO: perform additional assertions
});

test('destroy returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $rss = \App\Models\Rss::factory()->create();

    $response = $this->delete(route('staff.rss.destroy', ['id' => $rss->id]));

    $response->assertOk();
    $this->assertModelMissing($staff.rss);

    // TODO: perform additional assertions
});

test('edit returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $rss = \App\Models\Rss::factory()->create();
    $categories = \App\Models\Category::factory()->times(3)->create();
    $types = \App\Models\Type::factory()->times(3)->create();
    $resolutions = \App\Models\Resolution::factory()->times(3)->create();
    $genres = \App\Models\Genre::factory()->times(3)->create();

    $response = $this->get(route('staff.rss.edit', ['id' => $rss->id]));

    $response->assertOk();
    $response->assertViewIs('Staff.rss.edit');
    $response->assertViewHas('categories', $categories);
    $response->assertViewHas('types', $types);
    $response->assertViewHas('resolutions', $resolutions);
    $response->assertViewHas('genres', $genres);
    $response->assertViewHas('user');
    $response->assertViewHas('rss', $rss);

    // TODO: perform additional assertions
});

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $rsses = \App\Models\Rss::factory()->times(3)->create();

    $response = $this->get(route('staff.rss.index'));

    $response->assertOk();
    $response->assertViewIs('Staff.rss.index');
    $response->assertViewHas('hash');
    $response->assertViewHas('public_rss');

    // TODO: perform additional assertions
});

test('store returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->post(route('staff.rss.store'), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('store validates with a form request', function (): void {
    $this->assertActionUsesFormRequest(
        \App\Http\Controllers\Staff\RssController::class,
        'store',
        \App\Http\Requests\Staff\StoreRssRequest::class
    );
});

test('update returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $rss = \App\Models\Rss::factory()->create();

    $response = $this->patch(route('staff.rss.update', ['id' => $rss->id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('update validates with a form request', function (): void {
    $this->assertActionUsesFormRequest(
        \App\Http\Controllers\Staff\RssController::class,
        'update',
        \App\Http\Requests\Staff\UpdateRssRequest::class
    );
});

// test cases...
