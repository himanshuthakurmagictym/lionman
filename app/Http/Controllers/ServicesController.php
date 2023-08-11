<?php

namespace App\Http\Controllers;
use File;
use Illuminate\Http\Request;
use App\Models\Services;
use Mail;
use App\Mail\contact;
use App\Mail\career;
use App\Mail\getaquote;
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
            Mail::to(env("MAIL_FROM_ADDRESS"))->send(new contact($request));
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

    public function applyForm(Request $request){
       
        $validatedData = $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        $resume = $request->file('resume');
        $name = time().'.'.$resume->getClientOriginalExtension();;
        $path = public_path('uploads');
        // create folder
        if(!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        $resume->move($path, $name);

        $filename = $path.'/'.$name;

        try {
            Mail::to(env("MAIL_FROM_ADDRESS"))->send(new career($request, $filename));
        } catch (\Exception $e) {
            Log::error('contactForm: failed to send client email.', [
                $e->getMessage(),
                $validatedData
            ]);
            // @TODO handle error
        }
        //  $service
        toastr()->success('Career Form successfully sent');
        return back();
    }

    public function getaquoteForm(Request $request){
       
        $validatedData = $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'company' => 'required',
            'officeSecurity' => 'required',
            'area' => 'required',
            'facility' => 'required',
            'guards' => 'required',
            'service' => 'required',
            'message' => 'required',
        ]);
        try {
            Mail::to(env("MAIL_FROM_ADDRESS"))->send(new getaquote($request));
        } catch (\Exception $e) {
            Log::error('getqueote: failed to send client email.', [
                $e->getMessage(),
                $validatedData
            ]);
            // @TODO handle error
        }
        //  $service
        toastr()->success('GetAQueote Form successfully sent');
        return back();
    }

    
}
