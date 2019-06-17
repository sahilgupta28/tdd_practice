<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;

class SessionTwoPracticeTest extends TestCase
{
    public function setUp(): void 
    {
        parent::setUp();
        $this->user = factory(User::class)->create();
    }

    public function testUserInstance()
    {
        $this->assertInstanceOf(User::class, $this->user);
    }
}
