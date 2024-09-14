<?php

namespace App\Http\Controllers;

use App\Mail\CareerEmail;
use App\Mail\ContactUsEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Exception;

class ContactUsController extends Controller
{
    public function sendContactUsEmail(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('description'),
            'phone' => $request->input('phone'),
            'agency_county' => $request->input('agency_county'),
        ];
        try {
            Mail::to(env('MAIL_FROM_ADDRESS', 'info@allyconsult.org'))->send(new ContactUsEmail($data));
            Session::put('type', 'success');
            Session::put('message', 'Email sent successfully. We will contact you soon.');
            return redirect()->to('/contact#form');

        } catch (Exception $e) {
            Session::put('type', 'danger');
            Session::put('message', 'There is an error');
            return redirect()->to('/contact#form');
        }

    }

    public function sendCareerEmail(Request $request)
    {
        $filePath ='';
        if($request->file('file')){
            $file=$request->file('file');
            $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $filePath = 'uploads/career/' . $fileName;
            $file->move(public_path('uploads/career/'), $fileName);
        }

        $data = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'position' => $request->input('position'),
            'file_path' => '/'.$filePath,
            'description' => $request->input('description'),
        ];
        try {
            Mail::to(env('CAREER_EMAIL', 'carrers@allyconsult.org'))->send(new CareerEmail($data));
            Session::put('type', 'success');
            Session::put('message', 'Email sent successfully. We will contact you soon.');
            return redirect()->to('/career#form')->with('input');

        } catch (Exception $e) {
            Session::put('type', 'danger');
            Session::put('message', 'There is an error');
            return redirect()->to('/career#form')->with('input');
        }

    }
}
