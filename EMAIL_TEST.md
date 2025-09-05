# Email System Test Commands

## Quick Email Test
To test if your email system is working, run this command in Laravel Tinker:

```bash
# Start Tinker
php artisan tinker

# Test email functionality
use App\Mail\ContactFormSubmission;
use Illuminate\Support\Facades\Mail;

$testData = [
    'name' => 'Test User',
    'email' => 'test@example.com',
    'subject' => 'Test Message',
    'message' => 'This is a test message to verify email functionality.'
];

Mail::to('pankaj09d@gmail.com')->send(new ContactFormSubmission($testData));
```

## Production Checklist
Before using the contact form in production:

1. ✅ Set up proper email provider credentials in .env
2. ✅ Test email sending with above command
3. ✅ Verify emails are delivered to your inbox
4. ✅ Check spam folder if emails don't appear
5. ✅ Test the actual contact form on website

## Email Flow Summary
1. User fills contact form → Form data validated
2. Data saved to database → Always happens (backup)
3. Email sent to pankaj09d@gmail.com → You get notified
4. Auto-reply sent to user → User gets confirmation
5. Success message shown → User feedback

## Current Status
✅ Email system is configured and ready to use!
⚠️ Remember to update MAIL_PASSWORD in .env with your actual app password