<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingMail;
use App\Models\User;
use App\Models\CarWashes;
use App\Models\AutoDetailings;
use App\Models\PaintJobs;


class ServiceController extends Controller
{

    public function crProcess (Request $request){
        $validate = $request->only([
        'first_name',
        'last_name',
        'contact',
        'car_make',
        'car_model',
        'plate_no',
        'body_type',
        'amount',
        'date',
        'selectedTime_1'
                ]);
          dd($validate);
    }

    public function carwash()
    {
        return view('services.carwash.index');
    }

    public function autodetailing()
    {
        return view('services.auto-detailing.index');
    }

    public function paintjob()
    {
        return view('services.paintjob.index');
    }

    public function check(Request $request) //Car Wash
    {
        $user_id = $request->input('user_id');
        $plate_no = $request->input('plate_no');
        $requestedDate = $request->input('date');
        $requestedTime = $request->input('time');

        // Check if the requested date and time already exist in the database
        $excwBook = Carwashes::where('date', $requestedDate)
        ->where('time', $requestedTime)
        ->first();

        $excwUser = Carwashes::where('user_id', $user_id)->first();

        $excwPlateno = Carwashes::where('plate_no', $plate_no)->first();

        $exadUser = AutoDetailings::where('user_id', $user_id)->first();

        $exadPlateno = AutoDetailings::where('plate_no', $plate_no)->first();

        $expjUser = Paintjobs::where('user_id', $user_id)->first();

        $expjPlateno = Paintjobs::where('plate_no', $plate_no)->first();
        
        if ($excwUser) {
            return redirect()->back()->with('error', 'You have already book a slot for Car Wash.');
        }
        elseif ($excwPlateno) {
            return redirect()->back()->with('error', 'The unit is already book a slot for Car Wash.');
        } 
        elseif ($exadPlateno) {
            return redirect()->back()->with('error', 'The unit is already book a slot for Auto Detailing.');
        } 
        elseif ($exadUser) {
            return redirect()->back()->with('error', 'You have already book a slot for Auto Detailing.');
        }
        elseif ($expjUser) {
            return redirect()->back()->with('error', 'You have already book a slot for Paint Job.');
        }
        elseif ($expjPlateno) {
            return redirect()->back()->with('error', 'The unit is already book a slot for Paint Job.');
        } 
        elseif ($excwBook) {
            return redirect()->back()->with('error', 'The selected Time are already taken. Please choose another slot.');
        } 
        else {

        // Save the appointment to the database if it is available
        $cwInfo = CarWashes::create([
            'user_id'=> $request->input('user_id'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
            'car_make' => $request->input('car_make'),
            'car_model' => $request->input('car_model'),
            'plate_no' => $request->input('plate_no'),
            'body_type' => $request->input('body_type'),
            'amount' => $request->input('amount'),
            'date' => $requestedDate,
            'time' => $requestedTime,
            'special_request' => $request->input('special_request')
        ]);
        
        $details = [
            'title' => 'Booking Car Wash Service Complete',
            'body' => 'Your car wash form is successfully submitted, please present it on your arrival.'
        ];

        Mail::to($cwInfo->userCarWashes->email)->send(new BookingMail($details, 'services.mail'));

        return redirect('/services/carwash/done')
        ->with('title', 'Carwash')
        ->with('success', 'Carwash booked successfully! please check your email');
    }
}


    public function check1(Request $request) //Auto Detailing
        {
        $request->validate([  
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,heif|max:2048', // Validate each photo file
            ]);
            
        $user_id = $request->input('user_id');
        $plate_no = $request->input('plate_no');
        $requestedDate = $request->input('date');
        $requestedTime = $request->input('time');

        // Check if the requested date and time already exist in the database
        $exadBook = AutoDetailings::where('date', $requestedDate)
        ->where('time', $requestedTime)
        ->first();

        $excwUser = Carwashes::where('user_id', $user_id)->first();

        $excwPlateno = Carwashes::where('plate_no', $plate_no)->first();

        $exadUser = AutoDetailings::where('user_id', $user_id)->first();

        $exadPlateno = AutoDetailings::where('plate_no', $plate_no)->first();
        
        if ($excwUser) {
            return redirect()->back()->with('error', 'You have already book a slot for Car Wash.');
        }
        elseif ($excwPlateno) {
            return redirect()->back()->with('error', 'The unit is already book a slot for Car Wash.');
        } 
        elseif ($exadUser) {
            return redirect()->back()->with('error', 'You have already book a slot for Auto Detailing.');
        }
        elseif ($exadPlateno) {
            return redirect()->back()->with('error', 'The unit is already book a slot for Auto Detailing.');
        }
        elseif ($exadBook) {
            return redirect()->back()->with('error', 'The selected Time are already taken. Please choose another slot.');
        } 
        else if ($request->hasFile('photos')) {
            $photoDetails = [];
            foreach ($request->file('photos') as $index => $photoFile) {
                $originalFilename = $photoFile->getClientOriginalName();

                $folderPath = 'auto-detailing';
                $path = $photoFile->store($folderPath, 'public');

                $photoDetails[] = $originalFilename;
                $photoDetails[] = $path;
            }

            $adInfo = AutoDetailings::create([
                'user_id' => $request->input('user_id'),
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'contact' => $request->input('contact'),
                'email' => $request->input('email'),
                'car_year' => $request->input('car_year'),
                'car_make' => $request->input('car_make'),
                'car_model' => $request->input('car_model'),
                'car_variant' => $request->input('car_variant'),
                'plate_no' => $request->input('plate_no'),
                'date' => $requestedDate,
                'time' => $requestedTime,
                'special_request' => $request->input('special_request'),
                'photo_1' => isset($photoDetails[0]) ? $photoDetails[0] : null,
                'photo_2' => isset($photoDetails[1]) ? $photoDetails[1] : null,
                'photo_3' => isset($photoDetails[2]) ? $photoDetails[2] : null,
                'photo_4' => isset($photoDetails[3]) ? $photoDetails[3] : null,
                'photo_5' => isset($photoDetails[4]) ? $photoDetails[4] : null,
                'photo_6' => isset($photoDetails[5]) ? $photoDetails[5] : null,
                'status' => $request->input('status'),
            ]);

            $details = [
                'title' => 'Booking Auto Detailing Service Complete',
                'body' => 'Your auto detailing form is successfully submitted, please wait for the approval.'
            ];

            Mail::to($adInfo->userAutoDetailings->email)->send(new BookingMail($details, 'services.mail'));

            return redirect('/services/auto-detailing/done');
        }
       
    }
    

    public function check2(Request $request) //Paintjob
        {
        $request->validate([  
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,heif|max:2048', // Validate each photo file
            ]);
            
        $user_id = $request->input('user_id');
        $plate_no = $request->input('plate_no');
        $requestedDate = $request->input('date');
        $requestedTime = $request->input('time');

        // Check if the requested date and time already exist in the database
        $expjBook = Paintjobs::where('date', $requestedDate)
        ->where('time', $requestedTime)
        ->first();

        $excwUser = Carwashes::where('user_id', $user_id)->first();

        $excwPlateno = Carwashes::where('plate_no', $plate_no)->first();

        $expjUser = Paintjobs::where('user_id', $user_id)->first();

        $expjPlateno = Paintjobs::where('plate_no', $plate_no)->first();
        
        if ($excwUser) {
            return redirect()->back()->with('error', 'You have already book a slot for Car Wash.');
        }
        elseif ($excwPlateno) {
            return redirect()->back()->with('error', 'The unit is already book a slot for Car Wash.');
        } 
        elseif ($expjUser) {
            return redirect()->back()->with('error', 'You have already book a slot for Paint Job.');
        }
        elseif ($expjPlateno) {
            return redirect()->back()->with('error', 'The unit is already book a slot for Paint Job.');
        } 
        elseif ($expjBook) {
            return redirect()->back()->with('error', 'The selected Time are already taken. Please choose another slot.');
        } 
        else if ($request->hasFile('photos')) {
            $photoDetails = [];
            foreach ($request->file('photos') as $index => $photoFile) {
                $originalFilename = $photoFile->getClientOriginalName();
                
                $folderPath = 'paint-job';
                $path = $photoFile->store($folderPath, 'public');

                $photoDetails[] = $originalFilename;
                $photoDetails[] = $path;
            }

            $pjInfo = Paintjobs::create([
                'user_id' => $request->input('user_id'),
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'contact' => $request->input('contact'),
                'email' => $request->input('email'),
                'car_year' => $request->input('car_year'),
                'car_make' => $request->input('car_make'),
                'car_model' => $request->input('car_model'),
                'car_variant' => $request->input('car_variant'),
                'plate_no' => $request->input('plate_no'),
                'date' => $requestedDate,
                'time' => $requestedTime,
                'special_request' => $request->input('special_request'),
                'photo_1' => isset($photoDetails[0]) ? $photoDetails[0] : null,
                'photo_2' => isset($photoDetails[1]) ? $photoDetails[1] : null,
                'photo_3' => isset($photoDetails[2]) ? $photoDetails[2] : null,
                'photo_4' => isset($photoDetails[3]) ? $photoDetails[3] : null,
                'photo_5' => isset($photoDetails[4]) ? $photoDetails[4] : null,
                'photo_6' => isset($photoDetails[5]) ? $photoDetails[5] : null,
                'status' => $request->input('status'),
            ]);

            $details = [
                'title' => 'Booking Paint Job Service Complete',
                'body' => 'Your paint job form is successfully submitted, please wait for the approval.'
            ];

            Mail::to($pjInfo->userPaintjobs->email)->send(new BookingMail($details, 'services.mail'));

            return redirect('/services/paintjob/done');
        }
       
    }

}