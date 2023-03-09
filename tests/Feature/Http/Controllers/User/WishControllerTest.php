<?php

use App\Models\User;
use App\Models\Wish;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('destroy returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $wish = Wish::factory()->create();

    $response = $this->delete(route('wishes.destroy', ['id' => $wish->id]));

    $response->assertOk();
    $this->assertModelMissing($wish);

    // TODO: perform additional assertions
});

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $user = User::factory()->create();
    $wish = Wish::factory()->create();

    $response = $this->get(route('wishes.index', ['username' => $wish->username]));

    $response->assertOk();
    $response->assertViewIs('user.wish.index');
    $response->assertViewHas('user', $user);
    $response->assertViewHas('wishes');
    $response->assertViewHas('route');

    // TODO: perform additional assertions
});

test('store returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->post(route('wishes.store'), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

// test cases...
