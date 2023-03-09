<?php

use App\Http\Controllers\User\TransactionController;
use App\Http\Requests\StoreTransactionRequest;
use App\Models\BonExchange;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('create returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $bonExchanges = BonExchange::factory()->times(3)->create();

    $response = $this->get(route('transactions.create', ['username' => $username]));

    $response->assertOk();
    $response->assertViewIs('user.transaction.create');
    $response->assertViewHas('user');
    $response->assertViewHas('userbon');
    $response->assertViewHas('activefl');
    $response->assertViewHas('items');

    // TODO: perform additional assertions
});

test('store returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $bonExchange = BonExchange::factory()->create();

    $response = $this->post(route('transactions.store', ['username' => $username]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('store validates with a form request', function (): void {
    $this->assertActionUsesFormRequest(
        TransactionController::class,
        'store',
        StoreTransactionRequest::class
    );
});

// test cases...