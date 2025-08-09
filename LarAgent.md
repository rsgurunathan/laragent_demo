Installation
You can install LarAgent via Composer:
composer require maestroerror/laragent

After installing the package, publish the configuration file:
php artisan vendor:publish --tag="laragent-config"
This will create a config/laragent.php file in your application.

Create an Agent by using the command:
php artisan make:agent DealBreakerAgent
This will create a app/AiAgents/DealBreakerAgent.php file in your application.

Add the OPENAI_API_KEY in the .env file:
OPENAI_API_KEY={key}
