<?php

namespace Tests\Feature\Livewire;

use App\Livewire\RecuirerInfo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class RecuirerInfoTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(RecuirerInfo::class)
            ->assertStatus(200);
    }
}
