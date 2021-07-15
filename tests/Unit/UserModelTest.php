<?php

namespace Tests\Unit;

use App\Models\User;
use Carbon\Factory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UserModelTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_user_has_name()
    {
        $ab=User::factory()->create();
        $name= $ab->name;
        $this->assertNotEmpty($name);
    }
}
