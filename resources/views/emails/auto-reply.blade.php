<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Pankaj Kumar</title>
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif;
            line-height: 1.6;
            color: #374151;
            background-color: #f9fafb;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .email-header {
            background: linear-gradient(135deg, #0ea5e9 0%, #0369a1 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }
        .email-header h1 {
            margin: 0;
            font-size: 1.75rem;
            font-weight: 700;
        }
        .email-header p {
            margin: 0.5rem 0 0 0;
            opacity: 0.9;
            font-size: 1.1rem;
        }
        .email-body {
            padding: 2rem;
        }
        .greeting {
            font-size: 1.125rem;
            margin-bottom: 1.5rem;
            color: #1f2937;
        }
        .message-summary {
            background: #f8fafc;
            padding: 1rem;
            border-radius: 8px;
            border-left: 4px solid #22c55e;
            margin: 1.5rem 0;
        }
        .response-time {
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
            color: white;
            padding: 1rem;
            border-radius: 8px;
            text-align: center;
            margin: 1.5rem 0;
        }
        .contact-options {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin: 1.5rem 0;
        }
        .contact-option {
            text-align: center;
            padding: 1rem;
            background: #f8fafc;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
        }
        .contact-option-icon {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }
        .contact-option h4 {
            margin: 0 0 0.25rem 0;
            color: #1f2937;
            font-size: 0.875rem;
            font-weight: 600;
        }
        .contact-option p {
            margin: 0;
            color: #6b7280;
            font-size: 0.75rem;
        }
        .contact-option a {
            color: #0ea5e9;
            text-decoration: none;
            font-weight: 500;
        }
        .email-footer {
            background: #f3f4f6;
            padding: 1.5rem 2rem;
            text-align: center;
            color: #6b7280;
            font-size: 0.875rem;
        }
        .footer-logo {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }
        .footer-logo-icon {
            width: 32px;
            height: 32px;
            background: linear-gradient(135deg, #0ea5e9 0%, #0369a1 100%);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 0.875rem;
        }
        .social-links {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 1rem;
        }
        .social-link {
            color: #6b7280;
            text-decoration: none;
            font-size: 0.75rem;
        }
        @media (max-width: 640px) {
            .email-container {
                margin: 1rem;
                border-radius: 8px;
            }
            .email-header, .email-body {
                padding: 1.5rem;
            }
            .contact-options {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>🙏 Thank You!</h1>
            <p>Your message has been received</p>
        </div>
        
        <!-- Body -->
        <div class="email-body">
            <div class="greeting">
                Hi <strong>{{ $contactData['name'] }}</strong>,
            </div>
            
            <p>Thank you for reaching out through my portfolio website! I've received your message and I'm excited to connect with you.</p>
            
            <div class="message-summary">
                <h4 style="margin: 0 0 0.5rem 0; color: #1f2937;">📝 Your Message Summary:</h4>
                @if(!empty($contactData['subject']))
                    <p style="margin: 0; color: #4b5563;"><strong>Subject:</strong> {{ $contactData['subject'] }}</p>
                @endif
                <p style="margin: 0.25rem 0 0 0; color: #4b5563;"><strong>Received:</strong> {{ now()->format('M d, Y \a\t h:i A') }} IST</p>
            </div>
            
            <div class="response-time">
                <h3 style="margin: 0 0 0.5rem 0;">⚡ Quick Response Promise</h3>
                <p style="margin: 0; opacity: 0.9;">I'll get back to you within <strong>24 hours</strong> with a detailed response!</p>
            </div>
            
            <p>In the meantime, feel free to:</p>
            
            <div class="contact-options">
                <div class="contact-option">
                    <div class="contact-option-icon">📱</div>
                    <h4>WhatsApp Me</h4>
                    <p><a href="https://wa.me/916203454484">+91 6203454484</a></p>
                </div>
                <div class="contact-option">
                    <div class="contact-option-icon">📧</div>
                    <h4>Direct Email</h4>
                    <p><a href="mailto:pankaj09d@gmail.com">pankaj09d@gmail.com</a></p>
                </div>
            </div>
            
            <p>I'm looking forward to discussing your project and exploring how we can work together to bring your ideas to life!</p>
            
            <p style="margin-top: 1.5rem;">
                Best regards,<br>
                <strong>Pankaj Kumar</strong><br>
                <span style="color: #6b7280; font-size: 0.875rem;">Full-Stack Web Developer</span>
            </p>
        </div>
        
        <!-- Footer -->
        <div class="email-footer">
            <div class="footer-logo">
                <div class="footer-logo-icon">PK</div>
                <div>
                    <strong>Pankaj Kumar</strong><br>
                    <span style="font-size: 0.75rem; opacity: 0.8;">Full-Stack Web Developer</span>
                </div>
            </div>
            
            <p style="margin: 0.5rem 0;">
                📍 Mirapur, Varanasi, UP | 💻 PHP, React, MySQL Expert | 🚀 Laravel Specialist
            </p>
            
            <div class="social-links">
                <span class="social-link">🌐 Portfolio Website</span>
                <span class="social-link">💼 Available for Projects</span>
                <span class="social-link">🤝 Open to Collaborations</span>
            </div>
        </div>
    </div>
</body>
</html>