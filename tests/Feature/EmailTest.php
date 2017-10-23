<?php

// THIS TEST PASSES. KEEP THIS DISABLED, OTHERWISE IT WILL FIRE A NEW EMAIL ON EVERY TEST RUN.

namespace Tests\Feature;

use Tests\TestCase;
use Faker\Factory as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EmailTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_guest_can_send_me_an_email_via_contact_form()
    {
        $faker = Faker::create();
        $data = [
            'name' => $faker->name,
            'email' => $faker->email,
            'message' => $faker->paragraph
        ];
        $this->post('/contact', $data)->assertSessionHas('email', 'Thank you for your contact!');
    }
}
