<?php

use App\AiAgents\DealBreakerAgent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dealbreakers', function () {
    // Create an instance for a specific user or chat session
    $agent = DealBreakerAgent::for('user-123');

    $data = view('userprofile')->render();
    // Get a response
    $response = $agent->respond($data);

    echo $response;
});
