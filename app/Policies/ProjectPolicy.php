<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Project;

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
    	//dd($project);
    	//return true;
        //dd( $user->role( 'admin' ));
        return ($project->hasUser($user->id) || $user->role( 'admin' ));
    }
}
