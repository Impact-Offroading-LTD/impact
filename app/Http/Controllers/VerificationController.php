<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiscordVerification;
use Auth;
use Illuminate\Support\Facades\Validator;
use Input;
use Illuminate\Support\Facades\Redirect;

class VerificationController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function check_bot(Request $request)
    {
        
    
        if($request->input('g-recaptcha-response')) {

            if(DiscordVerification::where('discord_id', $request->input('discord_id'))->get()->count() == 1) {
                return redirect('/');
            } else {
                $verification = new DiscordVerification;
                $verification->discord_id = $request->input('discord_id');
                $verification->save();
                return redirect('/');
            }
        } else {
            $obj = (object) [
                'name' => 'LynxAPI',
                'version' => 1.7,
                'status' => 5000,
                'data' => 'fail',
                'result' => $request->input('g-recaptcha-response')
            ];
        }

        return json_encode($obj);



    }

    public function render($id)
    {


        return view('auth.livewire.verify')->with([
            'id' => $id
        ]);
    }
}
