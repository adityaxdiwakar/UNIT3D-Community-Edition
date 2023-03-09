<?php

use App\Models\Forum;
use App\Models\Topic;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('add form returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $forum = Forum::factory()->create();
    $topic = Topic::factory()->create();

    $response = $this->get(route('forum_new_topic_form', ['id' => $topic->id]));

    $response->assertOk();
    $response->assertViewIs('forum.forum_topic.create');
    $response->assertViewHas('forum', $forum);
    $response->assertViewHas('category');
    $response->assertViewHas('title');

    // TODO: perform additional assertions
});

test('close topic returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $topic = Topic::factory()->create();

    $response = $this->post(route('forum_close', ['id' => $topic->id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('delete topic returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $topic = Topic::factory()->create();

    $response = $this->delete(route('forum_delete_topic', ['id' => $topic->id]));

    $response->assertOk();

    // TODO: perform additional assertions
});

test('edit form returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $topic = Topic::factory()->create();
    $forums = Forum::factory()->times(3)->create();

    $response = $this->get(route('forum_edit_topic_form', ['id' => $topic->id]));

    $response->assertOk();
    $response->assertViewIs('forum.topic.edit');
    $response->assertViewHas('topic', $topic);
    $response->assertViewHas('categories');

    // TODO: perform additional assertions
});

test('edit topic returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $topic = Topic::factory()->create();
    $forum = Forum::factory()->create();

    $response = $this->post(route('forum_edit_topic', ['id' => $topic->id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('new topic returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $forum = Forum::factory()->create();
    $topic = Topic::factory()->create();

    $response = $this->post(route('forum_new_topic', ['id' => $topic->id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('open topic returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $topic = Topic::factory()->create();

    $response = $this->post(route('forum_open', ['id' => $topic->id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('pin topic returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $topic = Topic::factory()->create();

    $response = $this->post(route('forum_pin_topic', ['id' => $topic->id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('topic returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $topic = Topic::factory()->create();

    $response = $this->get(route('forum_topic', ['id' => $topic->id]));

    $response->assertOk();
    $response->assertViewIs('forum.topic.show');
    $response->assertViewHas('topic', $topic);
    $response->assertViewHas('forum');

    // TODO: perform additional assertions
});

test('unpin topic returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $topic = Topic::factory()->create();

    $response = $this->post(route('forum_unpin_topic', ['id' => $topic->id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

// test cases...