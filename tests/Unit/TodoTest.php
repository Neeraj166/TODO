<?php

namespace Tests\Unit;
use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class TodoTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_todo()
    {

        $ab=user::factory()->create();
        $this->actingAs($ab);

    }
}
