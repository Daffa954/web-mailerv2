<?php

namespace App\Http\Controllers;

use App\Mail\WebsiteEmail;
use App\Models\EmailMessage;
use Illuminate\Http\Request;
use Mail;

class EmailMessageController extends Controller
{
    public function create()
    {
        return view('sendEmail');
    }

    /**
     * Send the email
     */
    public function send(Request $request)
    {
        $validated = $request->validate([
            'student_email' => 'required|email',
            'full_name' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            'password_confirm' => 'required|string|same:password',
            'birth_date' => 'required|date',
        ]);

        try {

            $emailData = EmailMessage::create([
                'student_email' => $validated['student_email'],
                'full_name' => $validated['full_name'],
                'password' => bcrypt($validated['password']),
                'birth_date' => $validated['birth_date']
            ]);


            Mail::to($validated['student_email'])->send(new WebsiteEmail($emailData));



            return redirect()
                ->route('emails.create')
                ->with('success', 'Email sent successfully!');

        } catch (\Exception $e) {

            return redirect()->back()
                ->withInput()
                ->withErrors(['error' => 'Failed to send email. Please try again. Error: ' . $e->getMessage()]);
        }
    }

}
