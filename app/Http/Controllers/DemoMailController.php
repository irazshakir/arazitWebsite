<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use App\Mail\DemoRequestMail;
use App\Mail\ContactFormMail;
use App\Services\RecaptchaService;

class DemoMailController extends Controller
{
    protected $recaptcha;

    public function __construct(RecaptchaService $recaptcha)
    {
        $this->recaptcha = $recaptcha;
    }

    public function submitDemo(Request $request)
    {
        try {
            // Verify reCAPTCHA
            if (!$this->recaptcha->verify($request->input('recaptcha_response'))) {
                return back()
                    ->withInput()
                    ->with('error', 'Invalid reCAPTCHA. Please try again.');
            }

            // Validate the request
            $details = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'industry' => 'required|string|max:255'
            ]);

            // Send email
            Mail::to('irzshakir@gmail.com')
                ->cc('info@arazit.com')
                ->send(new DemoRequestMail($details));

            return redirect()
                ->route('thanks')
                ->with('success', 'Thank you for your interest! We will contact you soon.');

        } catch (\Exception $e) {
            // Log the error with more details
            \Log::error('Demo submission failed: ' . $e->getMessage(), [
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);
            
            // Return with a more specific error message in development
            if (config('app.debug')) {
                return back()
                    ->withInput()
                    ->with('error', 'Error: ' . $e->getMessage());
            }
            
            return back()
                ->withInput()
                ->with('error', 'Sorry, there was an error processing your request. Please try again later.');
        }
    }

    public function testEmail()
    {
        try {
            Mail::raw('Test email from Arazit website', function($message) {
                $message->from('info@arazit.com', 'Arazit')
                    ->to('irzshakir@gmail.com')
                    ->subject('Test Email Configuration');
            });

            return "Test email sent successfully!";
        } catch (\Exception $e) {
            return "Error sending email: " . $e->getMessage();
        }
    }

    public function submitContact(Request $request)
    {
        try {
            // Verify reCAPTCHA
            if (!$this->recaptcha->verify($request->input('recaptcha_response'))) {
                return back()
                    ->withInput()
                    ->with('error', 'Invalid reCAPTCHA. Please try again.');
            }

            // Validate the request
            $details = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'product' => 'required|string|max:255'
            ]);

            // Send email
            Mail::to('irzshakir@gmail.com')
                ->cc('info@arazit.com')
                ->send(new ContactFormMail($details));

            return redirect()
                ->route('thanks')
                ->with('success', 'Thank you for contacting us! We will get back to you soon.');

        } catch (\Exception $e) {
            // Log the error with details
            \Log::error('Contact form submission failed: ' . $e->getMessage(), [
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);
            
            // Return with a more specific error message in development
            if (config('app.debug')) {
                return back()
                    ->withInput()
                    ->with('error', 'Error: ' . $e->getMessage());
            }
            
            return back()
                ->withInput()
                ->with('error', 'Sorry, there was an error processing your request. Please try again later.');
        }
    }
}
