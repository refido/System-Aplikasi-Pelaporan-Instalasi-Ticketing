<?php

namespace App\Conversations;

use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Outgoing\Question as BotManQuestion;
use BotMan\BotMan\Messages\Incoming\Answer as BotManAnswer;


class MainConversation extends Conversation
{
    protected $problem = 'jaringan';
    /**
     * First question
     */
    public function askProblems()
    {
        $question = Question::create("Silahkan pilih kategori permasalahan / aduan.")
            ->fallback('Unable to ask question')
            ->callbackId('ask_reason')
            ->addButtons([
                Button::create('Ticketing')->value('tiket'),
                Button::create('Caller')->value('caller'),
                Button::create('Siganage')->value('siganage'),
                Button::create('Hardware')->value('hardware'),
                Button::create('Jaringan')->value('jaringan'),
            ]);

        return $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                switch ($answer->getValue()) {
                    case 'tiket':
                        $this->problem = 'tiket';
                        $this->jawabanNya('Ticketing');
                        break;
                    case 'caller':
                        $this->problem = 'caller';
                        $this->jawabanNya('Caller');
                        break;
                    case 'siganage':
                        $this->problem = 'siganage';
                        $this->jawabanNya('Siganage');
                        break;
                    case 'hardware':
                        $this->problem = 'hardware';
                        $this->jawabanNya('Hardware');
                        break;
                    case 'jaringan':
                        $this->problem = 'jaringan';
                        $this->jawabanNya('Jaringan');
                        break;
                    default:
                        # code...
                        break;
                }
            }
        });
    }

    public function jawabanNya($kategori)
    {
        $this->ask(
            'Anda memilih kategori ' . $kategori . '. Silahkan menjelaskan permasalahan yang dialami secara ringkas.',
            function (Answer $answer) {
                $keluhan = $answer->getText();
                $jawaban = sprintf("Permasalahan anda '" . $keluhan . "' akan di proses oleh teknisi. \r\t\n\n Mohon ditunggu dalam waktu 3x24jam, Terimakasih 😊.");
                $this->say($jawaban);
            }
        );
    }

    /**
     * Start the conversation
     */
    public function run()
    {
        $this->askProblems();
    }
}
