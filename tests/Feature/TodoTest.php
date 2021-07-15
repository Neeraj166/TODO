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
        $login=User::factory()->create();
        $this->actingAs($login);
        $task=Task::factory()->create();
        $this->assertDatabaseHas('Tasks',['description'=>$task->description,'user_id'=>$task->user_id]);
        
    }
}
 