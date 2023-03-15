<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Exceptions\RestException;
use Twilio\Rest\Client;
use App\Models\Customer;

class VoiceController extends Controller
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

  /**
   * Making an outgoing call
   */
  public function initiateCall(Request $request,$id) {
    // Validate form input
    $customer = Customer::find($id);
    $cust_phone_number = $customer->phone_number;

    //dd($cust_phone_number);

    try {
      //Lookup phone number to make sure it is valid before initiating call
      $phone_number = $this->client->lookups->v1->phoneNumbers($cust_phone_number)->fetch();

      // If phone number is valid and exists
      if($phone_number) {
        // Initiate call and record call
        $call = $this->client->account->calls->create(
          $cust_phone_number, // Destination phone number
          $this->from, // Valid Twilio phone number
          array(
              "record" => True,
              "url" => "http://demo.twilio.com/docs/voice.xml")
          );

        if($call) {
          return redirect()->back()->with('success', 'Call triggered successfully.');
        } else {
          echo 'Call failed!';
        }
      }
    } catch (Exception $e) {
      echo 'Error: ' . $e->getMessage();
    } catch (RestException $rest) {
      echo 'Error: ' . $rest->getMessage();
    }
  }
}
