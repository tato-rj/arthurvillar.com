<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function authenticated_users_can_see_their_projects()
    {
        $this->signIn();
        $project = create('App\Project', [
            'user_id' => auth()->user()->id
        ]);
        
        $this->get(auth()->user()->path().'/dashboard')
            ->assertSee($project->name);
    }

    /** @test */
    public function authenticated_users_cannot_see_other_users_projects_on_their_dashboard()
    {
        $this->signIn();

        $another_user = create('App\User');
        $project_by_some_other_user = create('App\Project', [
            'user_id' => $another_user->id
        ]);

        $this->get(auth()->user()->path().'/dashboard')
            ->assertDontSee($project_by_some_other_user->name);
    }

    /** @test */
    public function users_can_delete_their_profiles()
    {
        $user = create('App\User', [
            'password' => Hash::make('mypass')
        ]);
        $this->signIn($user);

        $this->delete($user->path(), [
            'password' => 'mypass'
        ]);
        
        $this->assertDatabaseMissing('users', $user->toArray());
    }
}
