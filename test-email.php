<?php

require_once 'vendor/autoload.php';

use App\Mail\ContactFormSubmission;
use Illuminate\Support\Facades\Mail;

// Test data
$testData = [
    'name' => 'Test User',
    'email' => 'test@example.com',
    'subject' => 'Test Email from Portfolio',
    'message' => 'This is a test message to check if email functionality is working properly.'
];

try {
    // Test sending email
    Mail::to('pankaj09d@gmail.com')->send(new ContactFormSubmission($testData));
    echo "✅ Email sent successfully to pankaj09d@gmail.com!\n";
    echo "📧 Check your email inbox for the test message.\n";
} catch (Exception $e) {
    echo "❌ Email failed to send: " . $e->getMessage() . "\n";
    echo "🔧 Check your email configuration in .env file.\n";
}