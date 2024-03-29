<?php

namespace App\Http\Controllers;

use App\Events\MsgEvent;
use App\Mail\emailMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send()
    {
        event(new MsgEvent());
    }
};