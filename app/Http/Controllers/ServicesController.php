<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use Mail;
use App\Mail\contact;
use Illuminate\Support\Facades\Log;
class ServicesController extends Controller
{
    public function index($id){
    //  $service
       $details = Services::where('slug',$id)->first();
       return view('services', ['details'=>$details]);
    }

    public function contactForm(Request $request){
       
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        try {
            Mail::to('himanshuthakur619619@gmail.com')->send(new contact($request));
            Log::debug('contactForm: client email sent.');
        } catch (\Exception $e) {
            Log::error('contactForm: failed to send client email.', [
                $e->getMessage(),
                $validatedData
            ]);
            // @TODO handle error
        }
        //  $service
        toastr()->success('Contact Form successfully sent');
        return back();
    }
}
