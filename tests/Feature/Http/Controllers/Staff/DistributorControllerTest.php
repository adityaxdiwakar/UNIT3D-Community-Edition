<?php

use App\Http\Controllers\Staff\DistributorController;
use App\Http\Requests\Staff\StoreDistributorRequest;
use App\Http\Requests\Staff\UpdateDistributorRequest;
use App\Models\Distributor;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('create returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->get(route('staff.distributors.create'));

    $response->assertOk();
    $response->assertViewIs('Staff.distributor.create');

    // TODO: perform additional assertions
});

test('delete returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $distributor = Distributor::factory()->create();
    $distributors = Distributor::factory()->times(3)->create();

    $response = $this->get(route('staff.distributors.delete', ['id' => $distributor->id]));

    $response->assertOk();
    $response->assertViewIs('Staff.distributor.delete');
    $response->assertViewHas('distributors', $distributors);
    $response->assertViewHas('distributor', $distributor);

    // TODO: perform additional assertions
});

test('destroy returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $distributor = Distributor::factory()->create();

    $response = $this->delete(route('staff.distributors.destroy', ['id' => $distributor->id]));

    $response->assertOk();
    $this->assertModelMissing($staff.distributor);

    // TODO: perform additional assertions
});

test('edit returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $distributor = Distributor::factory()->create();

    $response = $this->get(route('staff.distributors.edit', ['id' => $distributor->id]));

    $response->assertOk();
    $response->assertViewIs('Staff.distributor.edit');
    $response->assertViewHas('distributor', $distributor);

    // TODO: perform additional assertions
});

test('index returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $distributors = Distributor::factory()->times(3)->create();

    $response = $this->get(route('staff.distributors.index'));

    $response->assertOk();
    $response->assertViewIs('Staff.distributor.index');
    $response->assertViewHas('distributors', $distributors);

    // TODO: perform additional assertions
});

test('store returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');



    $response = $this->post(route('staff.distributors.store'), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('store validates with a form request', function (): void {
    $this->assertActionUsesFormRequest(
        DistributorController::class,
        'store',
        StoreDistributorRequest::class
    );
});

test('update returns an ok response', function (): void {
    $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

    $distributor = Distributor::factory()->create();

    $response = $this->patch(route('staff.distributors.update', ['id' => $distributor->id]), [
        // TODO: send request data
    ]);

    $response->assertOk();

    // TODO: perform additional assertions
});

test('update validates with a form request', function (): void {
    $this->assertActionUsesFormRequest(
        DistributorController::class,
        'update',
        UpdateDistributorRequest::class
    );
});

// test cases...