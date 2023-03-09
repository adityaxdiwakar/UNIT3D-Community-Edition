<?php

use App\Http\Controllers\Staff\PollController;
use App\Http\Requests\StorePoll;
use App\Models\Option;
use App\Models\Poll;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('create returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->get(route('staff.polls.create'));

    $response->assertOk();
    $response->assertViewIs('Staff.poll.create');

    // TODO: perform additional assertions
});

test('destroy returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $poll = Poll::factory()->create();

    $response = $this->delete(route('staff.polls.destroy', ['id' => $poll->id]));

    $response->assertOk();
    $this->assertModelMissing($staff.poll);

    // TODO: perform additional assertions
});

test('edit returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $poll = Poll::factory()->create();

    $response = $this->get(route('staff.polls.edit', ['id' => $poll->id]));

    $response->assertOk();
    $response->assertViewIs('Staff.poll.edit');
    $response->assertViewHas('poll', $poll);

    // TODO: perform additional assertions
});

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $polls = Poll::factory()->times(3)->create();

    $response = $this->get(route('staff.polls.index'));

    $response->assertOk();
    $response->assertViewIs('Staff.poll.index');
    $response->assertViewHas('polls', $polls);

    // TODO: perform additional assertions
});

test('show returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $poll = Poll::factory()->create();

    $response = $this->get(route('staff.polls.show', ['id' => $poll->id]));

    $response->assertOk();
    $response->assertViewIs('Staff.poll.show');
    $response->assertViewHas('poll', $poll);

    // TODO: perform additional assertions
});

test('store returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->post(route('staff.polls.store'), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('store validates with a form request', function (): void {
    $this->assertActionUsesFormRequest(
        PollController::class,
        'store',
        StorePoll::class
    );
});

test('update returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $poll = Poll::factory()->create();
    $option = Option::factory()->create();

    $response = $this->post(route('staff.polls.update', ['id' => $poll->id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('update validates with a form request', function (): void {
    $this->assertActionUsesFormRequest(
        PollController::class,
        'update',
        StorePoll::class
    );
});

// test cases...
