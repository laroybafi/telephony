<?php

namespace App\Http\Controllers;

use Twilio\Rest\Client;
use Illuminate\Http\Request;

class VoiceLogController extends Controller
{
    public function __construct() {
        // Twilio credentials
        $this->account_sid = env('ACCOUNT_SID');
        $this->auth_token = env('AUTH_TOKEN');
        //the twilio number you purchased
        $this->from = env('TWILIO_PHONE_NUMBER');
    
        // Initialize the Programmable Voice API
        $this->client = new Client($this->account_sid, $this->auth_token);
    }

    public function getLogs(){
        $twilio = new Client($this->account_sid, $this->auth_token);

        $calls = $twilio->calls
                ->read([], 20);
        //dd($calls);
        $this->client->calls->read();

        return view('call-logs', [
            'calls' => $calls,
        ]);

    }

}
