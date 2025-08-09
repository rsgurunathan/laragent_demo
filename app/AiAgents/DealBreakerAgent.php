<?php

namespace App\AiAgents;

use LarAgent\Agent;

class DealBreakerAgent extends Agent
{
    protected $model = 'gpt-4.1-nano';

    protected $history = 'in_memory';

    protected $provider = 'default';

    protected $tools = [];

    public function instructions()
    {
        return "Matchmaker should find out the dealbreakers for a given user data. The final output should be a short summary";
    }

    public function prompt($message)
    {
        return $message;
    }
}
