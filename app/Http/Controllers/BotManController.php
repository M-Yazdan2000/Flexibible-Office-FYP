<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {

            if ($message == 'hi') {
                $this->askName($botman);
                $this->askPhoneNumber($botman);

            } 
        });

        $botman->listen();
    }

    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Please provide your name with complete details', function (Answer $answer) {

            $name = $answer->getText();
        

            $this->say('Nice to meet you ' . $name );
            $this->say('We will get back to you as soon as possible ');
        });
    }
public function askPhoneNumber($botman)
{
    $botman->ask('😇',function (Answer $answer) {

        $name = $answer->getText();
        $number = $answer->getText();

        $this->say('Nice to meet you ' . $name ,'I have submitted your request to our team' .$number);


        $this->say('Thanks for contacting us, we will get back to you as soon as possible ' . $name);
    });
}
 }