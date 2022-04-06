<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogger;
use App\Models\Role;

class BloggerController extends Controller
{
    public function roles()
    {
        return Blogger::find(5)->roles; //id alapján lehet szűrni
    }

    public function getBloggers(){
        return Role::find(1)->bloggers; //egy adott szerephez kik tartoznak (a 3-as az a bloggereket mutatja)
    }
}
