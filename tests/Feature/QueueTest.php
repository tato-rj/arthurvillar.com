<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Mail;
use App\Jobs\ConquerTheWorld;
use App\Mail\TestMail;

class QueueTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function testing_queue()
    {
        Queue::fake();

        $this->get('queue-test');

        Queue::assertPushed(ConquerTheWorld::class);
    }

    /** @test */
    public function testing_job()
    {
        $this->expectsJobs(ConquerTheWorld::class);

        $this->get('queue-test');
    }

    /** @test */
    public function testing_action()
    {
        $this->get('queue-test')->assertSuccessful();
    }
}
