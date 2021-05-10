<?php

namespace MohamedElshazlyEida\Unifonic;

interface AppContract
{
    public function send($recipient, $message);
    public function sendBulk(array $recipient, $message);
    public function getMessageIDStatus(int $messageId);
    public function getBalance();
}
