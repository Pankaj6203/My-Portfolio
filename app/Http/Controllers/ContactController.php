<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactFormSubmission;
use App\Mail\ContactAutoReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:150',
            'message' => 'required|string|max:2000',
        ]);

        try {
            // Save to database
            Contact::create($data);
            
            // Send email notification to you
            Mail::to('pankaj09d@gmail.com')
                ->send(new ContactFormSubmission($data));
            
            // Send auto-reply to the person who submitted the form
            Mail::to($data['email'])
                ->send(new ContactAutoReply($data));
            
            return back()->with('success', '✅ Thank you! Your message has been sent successfully. You should receive a confirmation email shortly, and I\'ll get back to you within 24 hours.');
            
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Contact form error: ' . $e->getMessage());
            
            // Still save to database even if email fails
            try {
                Contact::create($data);
                return back()->with('success', '✅ Thank you! Your message has been received. I\'ll get back to you soon.');
            } catch (\Exception $dbError) {
                return back()->with('error', '❌ Sorry, there was an issue sending your message. Please try again or contact me directly.');
            }
        }
    }
}
