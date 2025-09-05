<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
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
            font-size: 1.5rem;
            font-weight: 700;
        }
        .email-header p {
            margin: 0.5rem 0 0 0;
            opacity: 0.9;
        }
        .email-body {
            padding: 2rem;
        }
        .field-group {
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: #f8fafc;
            border-radius: 8px;
            border-left: 4px solid #0ea5e9;
        }
        .field-label {
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 0.5rem;
            display: block;
        }
        .field-value {
            color: #4b5563;
            word-wrap: break-word;
        }
        .message-content {
            background: white;
            padding: 1rem;
            border-radius: 6px;
            border: 1px solid #e5e7eb;
            margin-top: 0.5rem;
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
            width: 24px;
            height: 24px;
            background: linear-gradient(135deg, #0ea5e9 0%, #0369a1 100%);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 0.75rem;
        }
        .contact-info {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
            margin-top: 1rem;
        }
        .contact-item {
            display: flex;
            align-items: center;
            gap: 0.25rem;
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
            .contact-info {
                flex-direction: column;
                gap: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>📧 New Contact Message</h1>
            <p>Portfolio Website Contact Form</p>
        </div>
        
        <!-- Body -->
        <div class="email-body">
            <div class="field-group">
                <span class="field-label">👤 Name:</span>
                <div class="field-value">{{ $contactData['name'] }}</div>
            </div>
            
            <div class="field-group">
                <span class="field-label">📧 Email:</span>
                <div class="field-value">
                    <a href="mailto:{{ $contactData['email'] }}" style="color: #0ea5e9; text-decoration: none;">
                        {{ $contactData['email'] }}
                    </a>
                </div>
            </div>
            
            @if(!empty($contactData['subject']))
            <div class="field-group">
                <span class="field-label">📝 Subject:</span>
                <div class="field-value">{{ $contactData['subject'] }}</div>
            </div>
            @endif
            
            <div class="field-group">
                <span class="field-label">💬 Message:</span>
                <div class="message-content">{{ $contactData['message'] }}</div>
            </div>
            
            <div class="field-group">
                <span class="field-label">🕒 Received:</span>
                <div class="field-value">{{ now()->format('M d, Y \a\t h:i A') }} (IST)</div>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="email-footer">
            <div class="footer-logo">
                <div class="footer-logo-icon">PK</div>
                <strong>Pankaj Kumar Portfolio</strong>
            </div>
            
            <p>This message was sent through your portfolio contact form.</p>
            
            <div class="contact-info">
                <div class="contact-item">
                    <span>📞</span>
                    <span>+91 6203454484</span>
                </div>
                <div class="contact-item">
                    <span>📍</span>
                    <span>Mirapur, Varanasi, UP</span>
                </div>
                <div class="contact-item">
                    <span>🌐</span>
                    <span>Full-Stack Developer</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>