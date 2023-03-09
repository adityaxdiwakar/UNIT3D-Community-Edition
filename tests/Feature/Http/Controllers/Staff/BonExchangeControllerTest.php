<?php

use App\Http\Controllers\Staff\BonExchangeController;
use App\Http\Requests\Staff\StoreBonExchangeRequest;
use App\Http\Requests\Staff\UpdateBonExchangeRequest;
use App\Models\BonExchange;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('create returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->get(route('staff.bon_exchanges.create'));

    $response->assertOk();
    $response->assertViewIs('Staff.bon_exchange.create');

    // TODO: perform additional assertions
});

test('destroy returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $bonExchange = BonExchange::factory()->create();

    $response = $this->delete(route('staff.bon_exchanges.destroy', [$bonExchange]));

    $response->assertOk();
    $this->assertModelMissing($bonExchange);

    // TODO: perform additional assertions
});

test('edit returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $bonExchange = BonExchange::factory()->create();

    $response = $this->get(route('staff.bon_exchanges.edit', [$bonExchange]));

    $response->assertOk();
    $response->assertViewIs('Staff.bon_exchange.edit');
    $response->assertViewHas('bonExchange', $bonExchange);

    // TODO: perform additional assertions
});

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $bonExchanges = BonExchange::factory()->times(3)->create();

    $response = $this->get(route('staff.bon_exchanges.index'));

    $response->assertOk();
    $response->assertViewIs('Staff.bon_exchange.index');
    $response->assertViewHas('bonExchanges', $bonExchanges);

    // TODO: perform additional assertions
});

test('store returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->post(route('staff.bon_exchanges.store'), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('store validates with a form request', function (): void {
    $this->assertActionUsesFormRequest(
        BonExchangeController::class,
        'store',
        StoreBonExchangeRequest::class
    );
});

test('update returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $bonExchange = BonExchange::factory()->create();

    $response = $this->patch(route('staff.bon_exchanges.update', [$bonExchange]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('update validates with a form request', function (): void {
    $this->assertActionUsesFormRequest(
        BonExchangeController::class,
        'update',
        UpdateBonExchangeRequest::class
    );
});

// test cases...
