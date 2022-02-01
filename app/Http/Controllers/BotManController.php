<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use App\Conversations\MainConversation;
use BotMan\BotMan\Cache\LaravelCache;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        // Load the driver(s) you want to use
        DriverManager::loadDriver(\BotMan\Drivers\Telegram\TelegramDriver::class);

        $config = [
            // Your driver-specific configuration
            "telegram" => [
                "token" => "5061489644:AAFxXKKzVh8IkGtYvlqJ3Zeh_t-Elo0vGWE"
            ]
        ];
        $botman = BotManFactory::create($config, new LaravelCache());

        $botman->hears('/start|start|mulai', function (BotMan $bot) {
            $user = $bot->getUser();
            $bot->reply('Halloo! ' . $user->getFirstName() . ', Selamat datang di tiketing NakulaSadewa Telegram Bot!. ');
            $bot->startConversation(new MainConversation());
        })->stopsConversation();
        
        // $botman->hears('/report|report|lapor', function (BotMan $bot) {
        //     $user = $bot->getUser();
        //     $bot->reply('Halloo! ' . $user->getFirstName() . ', Selamat datang di tiketing NakulaSadewa Telegram Bot!. ');
        //     $bot->startConversation(new MainConversation());
        // })->stopsConversation();

        $botman->listen();
    }
}
