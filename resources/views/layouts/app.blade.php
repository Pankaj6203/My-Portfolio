<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - Pankaj Kumar | Full-Stack Web Developer</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Pankaj Kumar - Professional Full-Stack Web Developer specializing in PHP, Laravel, ReactJS, and API development. Available for web development projects and consultations.">
    <meta name="keywords" content="Pankaj Kumar, Full-Stack Developer, PHP Developer, Laravel, ReactJS, API Development, Web Developer Varanasi, MySQL, JavaScript">
    <meta name="author" content="Pankaj Kumar">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Pankaj Kumar - Full-Stack Web Developer">
    <meta property="og:description" content="Professional Full-Stack Web Developer specializing in PHP, Laravel, ReactJS, and API development. Available for web development projects.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Pankaj Kumar Portfolio">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Pankaj Kumar - Full-Stack Web Developer">
    <meta name="twitter:description" content="Professional Full-Stack Web Developer specializing in PHP, Laravel, ReactJS, and API development.">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style> 
        body { 
            font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif;
            line-height: 1.6;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        }
        html { 
            scroll-behavior: smooth;
        }
        
        /* Professional animations */
        .fade-in {
            animation: fadeInUp 0.8s ease-out;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .hover-lift:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-medium);
        }
        
        .card-professional {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(226, 232, 240, 0.8);
            box-shadow: var(--shadow-soft);
            transition: all 0.3s ease;
        }
        .card-professional:hover {
            box-shadow: var(--shadow-medium);
            transform: translateY(-2px);
        }
        
        .gradient-professional {
            background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 50%, #0369a1 100%);
        }
        
        .gradient-accent {
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
        }
        
        .text-professional {
            background: linear-gradient(135deg, #0ea5e9, #0369a1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Improved responsive navigation */
        .nav-link {
            position: relative;
            overflow: hidden;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #0ea5e9, #0369a1);
            transition: width 0.3s ease;
        }
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        
        /* Professional button styles */
        .btn-primary {
            background: linear-gradient(135deg, #0ea5e9 0%, #0369a1 100%);
            border: none;
            color: white;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-soft);
        }
        .btn-primary:hover {
            box-shadow: var(--shadow-medium);
            transform: translateY(-1px);
        }
        
        .btn-success {
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
            border: none;
            color: white;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-soft);
        }
        .btn-success:hover {
            box-shadow: var(--shadow-medium);
            transform: translateY(-1px);
        }
        
        /* Responsive utilities */
        @media (max-width: 640px) {
            .mobile-padding {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }
        
        /* Professional scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
        
        /* Stagger animations */
        .stagger-animation {
            animation: staggerFade 0.6s ease-out forwards;
            opacity: 0;
            transform: translateY(20px);
        }
        @keyframes staggerFade {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .stagger-1 { animation-delay: 0.1s; }
        .stagger-2 { animation-delay: 0.2s; }
        .stagger-3 { animation-delay: 0.3s; }
        .stagger-4 { animation-delay: 0.4s; }
        .stagger-5 { animation-delay: 0.5s; }
        .stagger-6 { animation-delay: 0.6s; }
    </style>
</head>
<body class="bg-gray-50 text-gray-900">
    <header class="sticky top-0 bg-white/95 backdrop-blur-lg border-b border-gray-200/50 z-50">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 hover-lift">
                    <div class="w-10 h-10 gradient-professional rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-lg">PK</span>
                    </div>
                    <div class="hidden sm:block">
                        <span class="font-bold text-xl text-gray-900">Pankaj Kumar</span>
                        <div class="text-xs text-gray-500 font-medium">Full-Stack Developer</div>
                    </div>
                </a>
                
                <!-- Desktop Navigation -->
                <ul class="hidden lg:flex items-center space-x-8">
                    <li><a href="{{ route('home') }}" class="nav-link text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors {{ request()->routeIs('home') ? 'text-blue-600 active' : '' }}">Home</a></li>
                    <li><a href="{{ route('about') }}" class="nav-link text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors {{ request()->routeIs('about') ? 'text-blue-600 active' : '' }}">About</a></li>
                    <li><a href="{{ route('projects') }}" class="nav-link text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors {{ request()->routeIs('projects') ? 'text-blue-600 active' : '' }}">Projects</a></li>
                    <li><a href="{{ route('documents') }}" class="nav-link text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors {{ request()->routeIs('documents') ? 'text-blue-600 active' : '' }}">Documents</a></li>
                    <li><a href="{{ route('contact') }}" class="nav-link text-gray-700 hover:text-blue-600 font-medium py-2 transition-colors {{ request()->routeIs('contact') ? 'text-blue-600 active' : '' }}">Contact</a></li>
                </ul>
                
                <!-- CTA Button -->
                <div class="hidden lg:block">
                    <a href="{{ route('contact') }}" class="btn-primary px-6 py-2.5 rounded-xl font-medium text-sm">
                        Let's Connect
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button class="lg:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors" onclick="toggleMobileMenu()">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Navigation -->
            <div id="mobileMenu" class="hidden lg:hidden mt-4 py-4 border-t border-gray-200">
                <div class="space-y-3">
                    <a href="{{ route('home') }}" class="block px-4 py-2 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors {{ request()->routeIs('home') ? 'text-blue-600 bg-blue-50' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="block px-4 py-2 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors {{ request()->routeIs('about') ? 'text-blue-600 bg-blue-50' : '' }}">About</a>
                    <a href="{{ route('projects') }}" class="block px-4 py-2 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors {{ request()->routeIs('projects') ? 'text-blue-600 bg-blue-50' : '' }}">Projects</a>
                    <a href="{{ route('documents') }}" class="block px-4 py-2 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors {{ request()->routeIs('documents') ? 'text-blue-600 bg-blue-50' : '' }}">Documents</a>
                    <a href="{{ route('contact') }}" class="block px-4 py-2 text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors {{ request()->routeIs('contact') ? 'text-blue-600 bg-blue-50' : '' }}">Contact</a>
                    <div class="pt-3 mt-3 border-t border-gray-200">
                        <a href="{{ route('contact') }}" class="block btn-primary px-4 py-2.5 rounded-xl font-medium text-sm text-center">
                            Let's Connect
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12 min-h-screen">
        @if(session('success'))
            <div class="mb-8 p-4 bg-green-50 border border-green-200 text-green-800 rounded-xl card-professional">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    {{ session('success') }}
                </div>
            </div>
        @endif
        @yield('content')
    </main>

    <footer class="bg-white border-t border-gray-200 mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
                <!-- Brand Section -->
                <div class="lg:col-span-1">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 gradient-professional rounded-xl flex items-center justify-center">
                            <span class="text-white font-bold text-lg">PK</span>
                        </div>
                        <div>
                            <div class="font-bold text-xl text-gray-900">Pankaj Kumar</div>
                            <div class="text-sm text-gray-500">Full-Stack Developer</div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Passionate about creating exceptional web experiences with modern technologies. 
                        Available for freelance projects and collaborations.
                    </p>
                </div>
                
                <!-- Quick Links -->
                <div class="lg:col-span-1">
                    <h4 class="font-semibold text-gray-900 mb-4">Quick Links</h4>
                    <div class="space-y-2">
                        <a href="{{ route('home') }}" class="block text-gray-600 hover:text-blue-600 text-sm transition-colors">Home</a>
                        <a href="{{ route('about') }}" class="block text-gray-600 hover:text-blue-600 text-sm transition-colors">About Me</a>
                        <a href="{{ route('projects') }}" class="block text-gray-600 hover:text-blue-600 text-sm transition-colors">Projects</a>
                        <a href="{{ route('documents') }}" class="block text-gray-600 hover:text-blue-600 text-sm transition-colors">Documents</a>
                        <a href="{{ route('contact') }}" class="block text-gray-600 hover:text-blue-600 text-sm transition-colors">Contact</a>
                    </div>
                </div>
                
                <!-- Contact Info -->
                <div class="lg:col-span-1">
                    <h4 class="font-semibold text-gray-900 mb-4">Get in Touch</h4>
                    <div class="space-y-3">
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                            </svg>
                            <span>+91 6203454484</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                            <span>pankaj09d@gmail.com</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <svg class="w-4 h-4 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Mirapur, Varanasi, UP</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Bottom Bar -->
            <div class="mt-8 pt-8 border-t border-gray-200">
                <div class="flex flex-col sm:flex-row justify-between items-center text-sm text-gray-500">
                    <div class="mb-2 sm:mb-0">
                        © {{ date('Y') }} Pankaj Kumar. All rights reserved.
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="flex items-center">
                            <span class="mr-1">⚡</span> Built with Laravel & TailwindCSS
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Floating Action Buttons -->
    <div class="fixed bottom-6 right-6 flex flex-col space-y-3 z-50">
        <!-- WhatsApp Button -->
        <a href="https://wa.me/916203454484?text=Hi%20Pankaj%2C%20I%20would%20like%20to%20discuss%20a%20web%20development%20project%20with%20you." 
           target="_blank" 
           class="gradient-accent p-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 group">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.787"></path>
            </svg>
            <div class="absolute -top-2 -left-2 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <span class="animate-pulse">!</span>
            </div>
        </a>
        
        <!-- AI Chatbot Button -->
        <button onclick="toggleChatbot()" 
                class="btn-primary p-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110">
            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
    
    <!-- AI Chatbot Modal -->
    <div id="chatbotModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-end justify-end p-6">
        <div class="bg-white rounded-2xl w-96 h-[600px] shadow-2xl flex flex-col">
            <!-- Chatbot Header -->
            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white p-4 rounded-t-2xl flex justify-between items-center">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center">
                        <span class="text-sm font-bold">AI</span>
                    </div>
                    <div>
                        <h3 class="font-semibold">Pankaj's Assistant</h3>
                        <p class="text-xs text-indigo-100">Ask me anything about Pankaj!</p>
                    </div>
                </div>
                <button onclick="toggleChatbot()" class="text-white/80 hover:text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Chat Messages -->
            <div id="chatMessages" class="flex-1 p-4 overflow-y-auto space-y-4 bg-slate-50">
                <div class="bg-white p-3 rounded-lg shadow-sm">
                    <p class="text-sm text-slate-700">👋 <strong>Hello! I'm Pankaj's AI Assistant!</strong><br><br>I can answer detailed questions about:<br><br>• 👤 Personal info (name, birthday, location)<br>• 🎓 Education (10th marks, college details)<br>• 💼 Work experience & current status<br>• 💻 Technical skills & projects<br>• 📱 Social media (GitHub, Instagram)<br>• 📞 Contact information<br>• 🎯 Future goals & hobbies<br><br><strong>Try asking:</strong> "What's his birthday?", "Where does he work?", "What's his GitHub?", or anything else about Pankaj!</p>
                </div>
            </div>
            
            <!-- Quick Questions -->
            <div class="p-4 border-t bg-white">
                <div class="flex flex-wrap gap-2 mb-3">
                    <button onclick="askQuestion('What is his name and birthday?')" class="text-xs bg-indigo-100 text-indigo-700 px-2 py-1 rounded-full hover:bg-indigo-200">Name & Birthday</button>
                    <button onclick="askQuestion('What are his skills?')" class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full hover:bg-green-200">Skills</button>
                    <button onclick="askQuestion('Tell me about his education')" class="text-xs bg-blue-100 text-blue-700 px-2 py-1 rounded-full hover:bg-blue-200">Education</button>
                    <button onclick="askQuestion('What projects has he worked on?')" class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded-full hover:bg-purple-200">Projects</button>
                    <button onclick="askQuestion('What is his GitHub account?')" class="text-xs bg-gray-100 text-gray-700 px-2 py-1 rounded-full hover:bg-gray-200">GitHub</button>
                    <button onclick="askQuestion('What is his Instagram account?')" class="text-xs bg-pink-100 text-pink-700 px-2 py-1 rounded-full hover:bg-pink-200">Instagram</button>
                    <button onclick="askQuestion('Where does he work currently?')" class="text-xs bg-orange-100 text-orange-700 px-2 py-1 rounded-full hover:bg-orange-200">Current Work</button>
                    <button onclick="askQuestion('How to contact him?')" class="text-xs bg-teal-100 text-teal-700 px-2 py-1 rounded-full hover:bg-teal-200">Contact</button>
                </div>
                
                <!-- Chat Input -->
                <div class="flex gap-2">
                    <input type="text" id="chatInput" placeholder="Ask me anything..." class="flex-1 p-2 border rounded-lg text-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" onkeypress="handleEnter(event)">
                    <button onclick="sendMessage()" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('hidden');
        }
        
        function toggleChatbot() {
            const chatbotModal = document.getElementById('chatbotModal');
            chatbotModal.classList.toggle('hidden');
        }
        
        // Enhanced Chatbot FAQ Data with comprehensive information
        const faqData = {
            'personal': {
                keywords: ['name', 'naam', 'pankaj', 'who are you', 'introduction', 'introduce'],
                response: '👋 Hi! I\'m <strong>Pankaj Kumar</strong>, a passionate Full-Stack Web Developer from Mirapur, Varanasi, Uttar Pradesh. I specialize in creating modern web applications using cutting-edge technologies like PHP, Laravel, ReactJS, and MySQL.'
            },
            'birthday': {
                keywords: ['birthday', 'birth date', 'date of birth', 'dob', 'janmdin', 'birth'],
                response: '🎂 Pankaj\'s Date of Birth: <strong>September 9, 2001</strong><br><br>He\'s currently 23 years old and brings youthful energy and fresh perspectives to every project he works on!'
            },
            '10th_passing': {
                keywords: ['10th', 'tenth', 'passing year', 'matriculation', '10th class', 'high school'],
                response: '🎓 10th Grade Information:<br><br>• <strong>Passing Year:</strong> 2018<br>• <strong>Percentage:</strong> 85.2%<br>• <strong>Board:</strong> CBSE<br>• <strong>Achievement:</strong> Excellent performance with distinction in Mathematics and Science subjects.'
            },
            'current_work': {
                keywords: ['current work', 'job','current working company', 'company', 'working', 'employer', 'current company', 'kaam'],
                response: '💼 Current Work Status:<br><br>• <strong>Status:</strong> Freelance Full-Stack Developer<br>• <strong>Focus:</strong> Taking on exciting web development projects<br>• <strong>Recent:</strong> Just completed internship at ConsultIT Technology Pvt. Ltd.<br>• <strong>Available:</strong> Open for new opportunities and collaborations<br><br>🚀 Looking for challenging projects in Laravel, ReactJS, and API development!'
            },
            'github': {
                keywords: ['github', 'git', 'repository', 'code', 'source code', 'githubprojects'],
                response: '💻 GitHub Information:<br><br>• <strong>GitHub Username:</strong> @Pankaj6203<br>• <strong>Profile:</strong> github.com/Pankaj6203<br>• <strong>Repositories:</strong> 25+ projects<br>• <strong>Languages:</strong> PHP, JavaScript, HTML, CSS, Java<br>• <strong>Featured:</strong> Gruh Utpaad, Devddotvanarsena, Hospital Management System<br><br>📂 Check out my open-source contributions and project showcases!'
            },
            'instagram': {
                keywords: ['instagram', 'insta','insta account','account', 'social media', 'photos', 'ig'],
                response: '📸 Instagram Information:<br><br>• <strong>Handle:</strong> @withpankuu_<br>• <strong>Profile:</strong> instagram.com/withpankuu<br>• <strong>Content:</strong> Development journey, tech tips, project updates<br>• <strong>Followers:</strong> 500+ tech enthusiasts<br><br>🌟 Follow for behind-the-scenes development content and tech inspiration!'
            },
            'skills': {
                keywords: ['skill', 'technology', 'programming', 'language', 'framework', 'tech stack'],
                response: '💻 Pankaj\'s Complete Skill Set:<br><br><strong>Programming Languages:</strong><br>• PHP, Java, C, JavaScript, HTML5, CSS3<br><br><strong>Frameworks & Libraries:</strong><br>• Laravel, ReactJS, Bootstrap, TailwindCSS<br><br><strong>Database:</strong><br>• MySQL, Database Design & Optimization<br><br><strong>API Development:</strong><br>• RESTful APIs, API Endpoints, Authentication<br><br><strong>Tools & Technologies:</strong><br>• Git, GitHub, VS Code, Postman, Composer<br><br><strong>Soft Skills:</strong><br>• Leadership, Problem Solving, Team Collaboration, Time Management'
            },
            'education': {
                keywords: ['education', 'college', 'school', 'degree', 'marks', '12th', 'graduation', 'study'],
                response: '🎓 Complete Educational Background:<br><br><strong>Current Education:</strong><br>• <strong>Degree:</strong> Bachelor of Technology (B.Tech)<br>• <strong>Branch:</strong> Computer Science Engineering<br>• <strong>College:</strong> Government Engineering College, Varanasi<br>• <strong>CGPA:</strong> 8.1/10 (Ongoing)<br>• <strong>Expected Graduation:</strong> 2025<br><br><strong>Previous Education:</strong><br>• <strong>12th Grade:</strong> 82.8% (CBSE, 2020)<br>• <strong>10th Grade:</strong> 85.2% (CBSE, 2018)<br><br>🏆 Consistent academic performance with focus on practical learning!'
            },
            'projects': {
                keywords: ['project', 'work', 'gruh utpaad', 'devddotvanarsena', 'hospital', 'portfolio', 'app'],
                response: '🚀 Pankaj\'s Project Portfolio:<br><br><strong>Featured Projects:</strong><br><br>1️⃣ <strong>Gruh Utpaad</strong> (2025)<br>• E-commerce platform for local sellers<br>• 🏆 3rd place in 24-hour Techmarathon<br>• Tech: PHP, MySQL, Bootstrap<br><br>2️⃣ <strong>Devddotvanarsena</strong> (2024)<br>• Advanced API-centric application<br>• Focus: Backend architecture & APIs<br>• Tech: Laravel, PHP, RESTful APIs<br><br>3️⃣ <strong>Hospital Management System</strong><br>• Complete healthcare solution<br>• Features: Patient registration, appointments<br>• Tech: HTML, CSS, MySQL<br><br>4️⃣ <strong>Portfolio Website</strong> (Current)<br>• This responsive Laravel-based portfolio<br>• Features: AI chatbot, document management<br>• Tech: Laravel, TailwindCSS, JavaScript'
            },
            'location': {
                keywords: ['location', 'place', 'village', 'city', 'where', 'from', 'address', 'varanasi'],
                response: '📍 Location Details:<br><br>• <strong>Village:</strong> Mirapur<br>• <strong>City:</strong> Varanasi (Kashi)<br>• <strong>State:</strong> Uttar Pradesh<br>• <strong>Country:</strong> India<br>• <strong>PIN Code:</strong> 221001<br><br>🌟 Based in the spiritual city of Varanasi, open to remote work opportunities worldwide. The rich cultural heritage inspires creativity in every project!'
            },
            'experience': {
                keywords: ['experience', 'internship', 'work experience', 'job experience', 'consultit'],
                response: '💼 Professional Experience:<br><br><strong>Web Development Intern</strong><br>• <strong>Company:</strong> ConsultIT Technology Pvt. Ltd.<br>• <strong>Duration:</strong> June 2024 - August 2024 (45 days)<br>• <strong>Role:</strong> Full-Stack Development<br>• <strong>Technologies:</strong> HTML, CSS, JavaScript, MySQL<br>• <strong>Projects:</strong> 3 web applications<br>• <strong>Learning:</strong> Database integration, responsive design<br><br><strong>Freelance Projects:</strong><br>• Multiple client projects (2023-2024)<br>• Focus: E-commerce & business websites<br>• Technologies: Laravel, PHP, MySQL'
            },
            'contact': {
                keywords: ['contact', 'phone', 'email', 'whatsapp', 'reach', 'hire', 'connect'],
                response: '📞 Contact Information:<br><br>• <strong>Phone/WhatsApp:</strong> +91 6203454484<br>• <strong>Email:</strong> pankaj09d@gmail.com<br>• <strong>Location:</strong> Mirapur, Varanasi, UP<br>• <strong>GitHub:</strong> github.com/pankaj09d<br>• <strong>Instagram:</strong> @pankaj_kumar_dev<br><br>💬 <strong>Best Time to Contact:</strong> 9 AM - 8 PM (IST)<br>🚀 Available for freelance projects, full-time opportunities, and technical consultations!'
            },
            'api': {
                keywords: ['api', 'backend', 'rest', 'endpoint', 'devddotvanarsena', 'server'],
                response: '🔗 API Development Expertise:<br><br><strong>Specializations:</strong><br>• RESTful API Design & Development<br>• Custom API Endpoints Creation<br>• JWT Authentication Implementation<br>• Database Integration with APIs<br>• API Performance Optimization<br><br><strong>Featured Project:</strong><br>• <strong>Devddotvanarsena:</strong> Complete API-centric application<br>• Real-time data processing<br>• Scalable backend architecture<br>• Comprehensive API documentation<br><br><strong>Technologies Used:</strong><br>• Laravel for API framework<br>• MySQL for data management<br>• Postman for API testing'
            },
            'achievements': {
                keywords: ['achievement', 'award', 'recognition', 'success', 'accomplishment', 'certificate'],
                response: '🏆 Achievements & Recognition:<br><br><strong>Competition Success:</strong><br>• 🥉 3rd Place - Techmarathon 2025 (24-hour hackathon)<br>• Team Leader for winning project "Gruh Utpaad"<br><br><strong>Academic Excellence:</strong><br>• 8.1 CGPA in Computer Science Engineering<br>• 85.2% in 10th Grade (2018)<br>• 82.8% in 12th Grade (2020)<br><br><strong>Professional Certifications:</strong><br>• Web Development Internship Completion<br>• Laravel Framework Proficiency<br>• Database Management Expertise<br><br><strong>Technical Accomplishments:</strong><br>• 25+ GitHub repositories<br>• 6+ completed web applications<br>• API development specialist'
            },
            'hobbies': {
                keywords: ['hobby', 'hobbies', 'interest', 'free time', 'pastime', 'entertainment'],
                response: '🎯 Hobbies & Interests:<br><br><strong>Technical Interests:</strong><br>• 💻 Open Source Contributions<br>• 📱 Mobile App Development Learning<br>• 🤖 Exploring AI/ML Technologies<br>• 📖 Reading Tech Blogs & Documentation<br><br><strong>Creative Pursuits:</strong><br>• 🎵 Listening to Music while Coding<br>• 📸 Photography (especially tech setups)<br>• ✍️ Writing Technical Articles<br><br><strong>Personal Development:</strong><br>• 🏏 Playing Cricket<br>• 🚶 Morning Walks<br>• 🧘 Meditation for Focus<br>• 👥 Networking with Fellow Developers'
            },
            'future_goals': {
                keywords: ['future', 'goals', 'plans', 'ambition', 'career', 'aspiration', 'dream'],
                response: '🎯 Future Goals & Aspirations:<br><br><strong>Short-term Goals (2025):</strong><br>• Complete B.Tech with excellent grades<br>• Land a full-time developer position<br>• Contribute to major open-source projects<br>• Build 5+ commercial applications<br><br><strong>Medium-term Goals (2025-2027):</strong><br>• Become a Senior Full-Stack Developer<br>• Specialize in cloud technologies (AWS/Azure)<br>• Start a tech consultancy firm<br>• Mentor junior developers<br><br><strong>Long-term Vision (2027+):</strong><br>• Launch a successful tech startup<br>• Create innovative solutions for Indian markets<br>• Establish a development training institute<br>• Contribute to India\'s digital transformation'
            },
            'favorite_tech': {
                keywords: ['favorite', 'preferred', 'best', 'like', 'love', 'enjoy', 'passion'],
                response: '❤️ Favorite Technologies & Tools:<br><br><strong>Most Loved Framework:</strong><br>• 🚀 <strong>Laravel:</strong> "The elegance of PHP made simple"<br>• Reason: Clean syntax, powerful features, great community<br><br><strong>Preferred Frontend:</strong><br>• ⚛️ <strong>ReactJS:</strong> "Component-based magic"<br>• Reason: Reusable components, virtual DOM, huge ecosystem<br><br><strong>Database Choice:</strong><br>• 🗄️ <strong>MySQL:</strong> "Reliable and fast"<br>• Reason: ACID compliance, great performance, widespread support<br><br><strong>Development Environment:</strong><br>• 💻 VS Code with custom extensions<br>• 🐙 Git for version control<br>• 🔧 Postman for API testing<br><br><strong>Why I Love Coding:</strong><br>"Every line of code is a step toward solving real-world problems!"'
            },
            // 'father': {
                // keyword: ['pankaj father','father name', 'father','parent name'],
                // response: ' Pankaj\'s :<br><br><strong>Father Name:</strong><br>• Lalbabu sah'
            // },
            // 'girlfriend': {
                // keywords: ['wife','girlfriend','mehraru'],
                // response:  '❤️Pankaj\'s Girlfriend Name:</strong><br>• AI🤞'
            // },
            'default': {
                keywords: [],
                response: '🤔 I\'m sorry, I didn\'t quite understand that question. Here\'s what I can help you with:<br><br><strong>Personal Information:</strong><br>• Name, birthday, location, hobbies<br>• Current work status, future goals<br><br><strong>Education & Career:</strong><br>• 10th/12th marks, college details<br>• Work experience, achievements<br><br><strong>Technical Expertise:</strong><br>• Skills, technologies, projects<br>• API development, GitHub profile<br><br><strong>Contact & Social:</strong><br>• Phone, email, WhatsApp<br>• Instagram, GitHub accounts<br><br>💡 Try asking: "What\'s his birthday?", "Tell me about his projects", "What are his skills?", or "How to contact him?"'
            }
        };
        
        function findBestMatch(userMessage) {
            const message = userMessage.toLowerCase();
            let bestMatch = null;
            let maxScore = 0;
            let bestCategory = null;
            
            // Check for exact matches first
            for (const [category, data] of Object.entries(faqData)) {
                if (category === 'default') continue;
                
                let score = 0;
                data.keywords.forEach(keyword => {
                    if (message.includes(keyword.toLowerCase())) {
                        score += keyword.length; // Longer keywords get higher scores
                    }
                });
                
                if (score > maxScore) {
                    maxScore = score;
                    bestMatch = data.response;
                    bestCategory = category;
                }
            }
            
            // If no good match found, return default response
            if (maxScore === 0) {
                return faqData.default.response;
            }
            
            return bestMatch;
        }
        
        function addMessage(message, isUser = false) {
            const chatMessages = document.getElementById('chatMessages');
            const messageDiv = document.createElement('div');
            
            if (isUser) {
                messageDiv.className = 'bg-indigo-600 text-white p-3 rounded-lg ml-8 shadow-sm';
                messageDiv.innerHTML = `<p class="text-sm">${message}</p>`;
            } else {
                messageDiv.className = 'bg-white p-3 rounded-lg shadow-sm';
                messageDiv.innerHTML = `<p class="text-sm text-slate-700">${message}</p>`;
            }
            
            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }
        
        function askQuestion(question) {
            addMessage(question, true);
            
            setTimeout(() => {
                const response = findBestMatch(question);
                addMessage(response);
            }, 500);
        }
        
        function sendMessage() {
            const chatInput = document.getElementById('chatInput');
            const message = chatInput.value.trim();
            
            if (message) {
                addMessage(message, true);
                chatInput.value = '';
                
                setTimeout(() => {
                    const response = findBestMatch(message);
                    addMessage(response);
                }, 500);
            }
        }
        
        function handleEnter(event) {
            if (event.key === 'Enter') {
                sendMessage();
            }
        }
    </script>
</body>
</html>
