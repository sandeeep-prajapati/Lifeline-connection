<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Twilio\Rest\Client;

class api extends Controller
{
    function helpme(Request $req){
        $contact1 = $req->input('contact1');
        $contact2 = $req->input('contact2');
        $bed = $req->input('bed');

        // Do whatever you need to do with the contacts
        // For example, you can save them to the database
        DB::table('phone_call')->insert([
            'contact1' => $contact1,
            'contact2' => $contact2,
            'bed' => $bed,
        ]);
//active accout start here

         // Your Twilio credentials
         $sid = "AC6a03426b941f48a706ace25c536c524b";
         $token = "9082f2de9633f926f5dcd3835eb467d4";
 
         // Initialize Twilio client
         $twilio = new Client($sid, $token);
 
         try {
             // Send SMS message
             $message = $twilio->messages->create(
                "+918222074647", // to
                 [
                     "from" => "+19382010664",
                     "body" => "Your patient is in danger at bed number 11"
                 ]
             );
 
             // Output the SID for testing
             echo $message->sid;
         } catch (\Exception $e) {
             // Handle exception
             echo "Error: " . $e->getMessage();
         }
 
// active code end

        // $country = "+91";
        // $pnumber = $contact1;
        // try {
        //     $account_sid = getenv('TWILIO_SID');
        //     $account_token = getenv('TWILIO_TOKEN');
        //     $number = getenv('TWILIO_NUMBER'); // Assuming this is your Twilio phone number
    
        //     // Log the values for debugging
        //     Log::info("Twilio SID: $account_sid");
        //     Log::info("Twilio Token: $account_token");
        //     Log::info("Twilio Number: $number");
    
        //     $client = new Client($account_sid, $account_token);
        //     $sessionId = session()->get('loginId');
            
        //     $message = "Your family member XYZ is in danger";
        //     $client->messages->create($pnumber, [
        //     'from' => $number,
        //     'body' => $message
        //     ]);
        // } catch (\Exception $e) {
        //     return $e->getMessage();
        // }
        // $alert = "message is sent successfully...";
        
        return response()->json(['message' => 'Contacts received', 'contact1' => $contact1, 'contact2' => $contact2]);
    }
    function buynow(Request $req){
        $d1 = DB::table('phone_call')->get();
        if($d1!=NULL){
            return view('buynow',['data'=>$d1]);
        }
    }
}
