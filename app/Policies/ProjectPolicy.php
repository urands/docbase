<?php

namespace App\Policies;

class ProjectPolicy
{
    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }



    public function manage(User $user, Project $project)
    {
    	dd($project);
    	return true;
        //return $project->hasUser($user->id) || $user->role( 'admin' );
    }
}
