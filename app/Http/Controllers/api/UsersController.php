<?php

namespace App\Http\Controllers\api;

use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        return UserResource::collection(User::paginate(10));
    }
}
