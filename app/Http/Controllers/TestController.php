<?php

namespace App\Http\Controllers;

use App\Services\FirebaseService;
use Illuminate\Http\Request;
use Kreait\Firebase\Auth\UserQuery;
use Kreait\Firebase\Contract\Auth;
use Kreait\Laravel\Firebase\Facades\Firebase;

class TestController extends Controller
{
    private $database;
    protected $auth;

    public function __construct()
    {
        $this->database = FirebaseService::connect();

        $this->auth = Firebase::auth();
    }

    public function index()
    {
        $userQuery = UserQuery::all()
        ->inDescendingOrder()
            // ->inAscendingOrder() # this is the default
            ->withOffset(1)
            ->withLimit(499);

        $users = $this->auth->queryUsers($userQuery);
        // dd($users);
    }
}
