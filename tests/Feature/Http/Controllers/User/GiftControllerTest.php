<?php

use App\Http\Controllers\User\GiftController;
use App\Http\Requests\StoreGiftRequest;
use App\Models\BonTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('create returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->get(route('gifts.create', ['username' => $username]));

    $response->assertOk();
    $response->assertViewIs('user.gift.create');
    $response->assertViewHas('user');
    $response->assertViewHas('userbon');

    // TODO: perform additional assertions
});

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $bonTransactions = BonTransactions::factory()->times(3)->create();

    $response = $this->get(route('gifts.index', ['username' => $username]));

    $response->assertOk();
    $response->assertViewIs('user.gift.index');
    $response->assertViewHas('user');
    $response->assertViewHas('gifttransactions');
    $response->assertViewHas('userbon');
    $response->assertViewHas('gifts_sent');
    $response->assertViewHas('gifts_received');

    // TODO: perform additional assertions
});

test('store returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->post(route('gifts.store', ['username' => $username]), [
        // TODO: send request data
    ]);

    $response->assertRedirect(withSuccess(trans('bon.gift-sent')));

    // TODO: perform additional assertions
});

test('store validates with a form request', function (): void {
    $this->assertActionUsesFormRequest(
        GiftController::class,
        'store',
        StoreGiftRequest::class
    );
});

// test cases...