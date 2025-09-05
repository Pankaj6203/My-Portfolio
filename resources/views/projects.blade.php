@extends('layouts.app')
@section('content')
<div class="max-w-6xl mx-auto px-4 lg:px-0">
  <div class="text-center mb-8 sm:mb-12">
    <h1 class="text-3xl sm:text-4xl font-bold mb-4">My Projects</h1>
    <p class="text-lg sm:text-xl text-slate-600">A showcase of my web development projects and achievements</p>
  </div>

  <!-- Featured Projects -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
    
    <!-- Gruh Utpaad - E-Commerce Platform -->
    <div class="bg-white border rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
      <div class="bg-gradient-to-r from-indigo-500 to-purple-600 p-4 sm:p-6 text-white">
        <div class="flex items-center justify-between mb-3 sm:mb-4">
          <span class="bg-white/20 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-medium">Team Leader</span>
          <span class="bg-yellow-400 text-yellow-900 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-bold">3rd Position</span>
        </div>
        <h3 class="text-lg sm:text-xl font-bold mb-2">Gruh Utpaad</h3>
        <p class="text-indigo-100 text-xs sm:text-sm">Local E-Commerce Platform</p>
      </div>
      
      <div class="p-4 sm:p-6">
        <div class="mb-3 sm:mb-4">
          <p class="text-slate-600 text-xs sm:text-sm mb-2"><strong>Event:</strong> Techmarathon 2025 (24-hour hackathon)</p>
          <p class="text-slate-700 leading-relaxed text-sm sm:text-base">
            Led a team to develop a complete local e-commerce platform for home-based sellers. 
            Built user management system, dynamic product listings, and admin control panel.
          </p>
        </div>
        
        <div class="mb-4">
          <h4 class="font-semibold mb-2 text-slate-800">Key Features:</h4>
          <ul class="text-sm text-slate-600 list-disc list-inside space-y-1">
            <li>User management system</li>
            <li>Dynamic product listings</li>
            <li>Admin control panel</li>
            <li>Secure login system</li>
            <li>Optimized database structure</li>
          </ul>
        </div>
        
        <div class="flex flex-wrap gap-1.5 sm:gap-2 mb-3 sm:mb-4">
          <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">PHP</span>
          <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">MySQL</span>
          <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">Bootstrap</span>
        </div>
        
        <div class="text-sm text-slate-500">
          <span class="inline-flex items-center gap-1">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            Competition Winner
          </span>
        </div>
      </div>
    </div>

    <!-- Devddotvanarsena - API Application -->
    <div class="bg-white border rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
      <div class="bg-gradient-to-r from-cyan-500 to-blue-600 p-4 sm:p-6 text-white">
        <div class="flex items-center justify-between mb-3 sm:mb-4">
          <span class="bg-white/20 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-medium">API Specialist</span>
          <span class="bg-green-400 text-green-900 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-bold">Featured</span>
        </div>
        <h3 class="text-lg sm:text-xl font-bold mb-2">Devddotvanarsena</h3>
        <p class="text-cyan-100 text-xs sm:text-sm">Advanced API-Centric Application</p>
      </div>
      
      <div class="p-4 sm:p-6">
        <div class="mb-4">
          <p class="text-slate-700 leading-relaxed text-sm sm:text-base">
            Comprehensive API-centric application showcasing advanced backend development skills. 
            Features robust API architecture with complex business logic and seamless data flow.
          </p>
        </div>
        
        <div class="mb-4">
          <h4 class="font-semibold mb-2 text-slate-800 text-sm sm:text-base">Key Features:</h4>
          <ul class="text-xs sm:text-sm text-slate-600 list-disc list-inside space-y-1">
            <li>RESTful API design</li>
            <li>Advanced authentication system</li>
            <li>Real-time data processing</li>
            <li>Scalable backend architecture</li>
            <li>API documentation & testing</li>
          </ul>
        </div>
        
        <div class="flex flex-wrap gap-1.5 sm:gap-2 mb-3 sm:mb-4">
          <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">PHP</span>
          <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs">Laravel</span>
          <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">API</span>
          <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">MySQL</span>
        </div>
        
        <div class="text-xs sm:text-sm text-slate-500">
          <span class="inline-flex items-center gap-1">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
            API Excellence
          </span>
        </div>
      </div>
    </div>

    <!-- Hospital Management System -->
    <div class="bg-white border rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
      <div class="bg-gradient-to-r from-green-500 to-teal-600 p-4 sm:p-6 text-white">
        <div class="flex items-center justify-between mb-3 sm:mb-4">
          <span class="bg-white/20 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-medium">Academic Project</span>
        </div>
        <h3 class="text-lg sm:text-xl font-bold mb-2">Hospital Management System</h3>
        <p class="text-green-100 text-xs sm:text-sm">Healthcare Management Solution</p>
      </div>
      
      <div class="p-4 sm:p-6">
        <div class="mb-3 sm:mb-4">
          <p class="text-slate-700 leading-relaxed text-sm sm:text-base">
            Developed a comprehensive hospital management system with patient registration and appointment scheduling.
          </p>
        </div>
        
        <div class="mb-3 sm:mb-4">
          <h4 class="font-semibold mb-2 text-slate-800 text-sm sm:text-base">Key Features:</h4>
          <ul class="text-xs sm:text-sm text-slate-600 list-disc list-inside space-y-1">
            <li>Patient registration system</li>
            <li>Appointment scheduling</li>
            <li>Database normalization</li>
            <li>Responsive user interface</li>
            <li>Efficient data storage & retrieval</li>
          </ul>
        </div>
        
        <div class="flex flex-wrap gap-1.5 sm:gap-2 mb-3 sm:mb-4">
          <span class="bg-orange-100 text-orange-800 px-2 py-1 rounded text-xs">HTML</span>
          <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">CSS</span>
          <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">MySQL</span>
        </div>
        
        <div class="text-xs sm:text-sm text-slate-500">
          <span class="inline-flex items-center gap-1">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
            </svg>
            Academic Excellence
          </span>
        </div>
      </div>
    </div>

    <!-- Image Search Application -->
    <div class="bg-white border rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
      <div class="bg-gradient-to-r from-pink-500 to-rose-600 p-4 sm:p-6 text-white">
        <div class="flex items-center justify-between mb-3 sm:mb-4">
          <span class="bg-white/20 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-medium">Personal Project</span>
        </div>
        <h3 class="text-lg sm:text-xl font-bold mb-2">Image Search Application</h3>
        <p class="text-pink-100 text-xs sm:text-sm">Custom Search Solution</p>
      </div>
      
      <div class="p-4 sm:p-6">
        <div class="mb-3 sm:mb-4">
          <p class="text-slate-700 leading-relaxed text-sm sm:text-base">
            Built an image search application with custom styling and database integration, focusing on user interface design and optimized search functionality.
          </p>
        </div>
        
        <div class="mb-3 sm:mb-4">
          <h4 class="font-semibold mb-2 text-slate-800 text-sm sm:text-base">Key Features:</h4>
          <ul class="text-xs sm:text-sm text-slate-600 list-disc list-inside space-y-1">
            <li>Custom image search functionality</li>
            <li>Database integration</li>
            <li>Optimized search algorithms</li>
            <li>User-friendly interface design</li>
            <li>Custom styling implementation</li>
          </ul>
        </div>
        
        <div class="flex flex-wrap gap-1.5 sm:gap-2 mb-3 sm:mb-4">
          <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">MySQL</span>
          <span class="bg-pink-100 text-pink-800 px-2 py-1 rounded text-xs">Custom Styling</span>
        </div>
        
        <div class="text-xs sm:text-sm text-slate-500">
          <span class="inline-flex items-center gap-1">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
            Innovation Focus
          </span>
        </div>
      </div>
    </div>
    
    <!-- Social Media Dashboard -->
    <div class="bg-white border rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
      <div class="bg-gradient-to-r from-emerald-500 to-teal-600 p-4 sm:p-6 text-white">
        <div class="flex items-center justify-between mb-3 sm:mb-4">
          <span class="bg-white/20 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-medium">Full-Stack</span>
          <span class="bg-blue-400 text-blue-900 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-bold">Modern</span>
        </div>
        <h3 class="text-lg sm:text-xl font-bold mb-2">Social Media Dashboard</h3>
        <p class="text-emerald-100 text-xs sm:text-sm">Analytics & Management Platform</p>
      </div>
      
      <div class="p-4 sm:p-6">
        <div class="mb-3 sm:mb-4">
          <p class="text-slate-700 leading-relaxed text-sm sm:text-base">
            Comprehensive social media management dashboard with real-time analytics, content scheduling, and engagement tracking across multiple platforms.
          </p>
        </div>
        
        <div class="mb-3 sm:mb-4">
          <h4 class="font-semibold mb-2 text-slate-800 text-sm sm:text-base">Key Features:</h4>
          <ul class="text-xs sm:text-sm text-slate-600 list-disc list-inside space-y-1">
            <li>Real-time analytics dashboard</li>
            <li>Multi-platform integration</li>
            <li>Content scheduling system</li>
            <li>Engagement tracking</li>
            <li>Performance reporting</li>
          </ul>
        </div>
        
        <div class="flex flex-wrap gap-1.5 sm:gap-2 mb-3 sm:mb-4">
          <span class="bg-cyan-100 text-cyan-800 px-2 py-1 rounded text-xs">React</span>
          <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs">Laravel</span>
          <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">API</span>
          <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">Chart.js</span>
        </div>
        
        <div class="flex gap-2 text-xs sm:text-sm">
          <a href="#" class="text-indigo-600 hover:text-indigo-800 transition-colors">Live Demo</a>
          <span class="text-slate-300">|</span>
          <a href="#" class="text-indigo-600 hover:text-indigo-800 transition-colors">GitHub</a>
        </div>
      </div>
    </div>
    
    <!-- E-Learning Platform -->
    <div class="bg-white border rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
      <div class="bg-gradient-to-r from-violet-500 to-purple-600 p-4 sm:p-6 text-white">
        <div class="flex items-center justify-between mb-3 sm:mb-4">
          <span class="bg-white/20 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-medium">Educational</span>
          <span class="bg-orange-400 text-orange-900 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-bold">Scalable</span>
        </div>
        <h3 class="text-lg sm:text-xl font-bold mb-2">E-Learning Platform</h3>
        <p class="text-violet-100 text-xs sm:text-sm">Online Education System</p>
      </div>
      
      <div class="p-4 sm:p-6">
        <div class="mb-3 sm:mb-4">
          <p class="text-slate-700 leading-relaxed text-sm sm:text-base">
            Complete e-learning platform with course management, video streaming, progress tracking, and interactive quizzes for enhanced learning experience.
          </p>
        </div>
        
        <div class="mb-3 sm:mb-4">
          <h4 class="font-semibold mb-2 text-slate-800 text-sm sm:text-base">Key Features:</h4>
          <ul class="text-xs sm:text-sm text-slate-600 list-disc list-inside space-y-1">
            <li>Course management system</li>
            <li>Video streaming integration</li>
            <li>Progress tracking</li>
            <li>Interactive quizzes</li>
            <li>Student dashboard</li>
          </ul>
        </div>
        
        <div class="flex flex-wrap gap-1.5 sm:gap-2 mb-3 sm:mb-4">
          <span class="bg-cyan-100 text-cyan-800 px-2 py-1 rounded text-xs">React</span>
          <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs">Laravel</span>
          <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">Video.js</span>
          <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">MySQL</span>
        </div>
        
        <div class="text-xs sm:text-sm text-slate-500">
          <span class="inline-flex items-center gap-1">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
            </svg>
            Educational Innovation
          </span>
        </div>
      </div>
    </div>
    
    <!-- Real Estate Portal -->
    <div class="bg-white border rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
      <div class="bg-gradient-to-r from-amber-500 to-orange-600 p-4 sm:p-6 text-white">
        <div class="flex items-center justify-between mb-3 sm:mb-4">
          <span class="bg-white/20 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-medium">Commercial</span>
          <span class="bg-green-400 text-green-900 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-bold">Complex</span>
        </div>
        <h3 class="text-lg sm:text-xl font-bold mb-2">Real Estate Portal</h3>
        <p class="text-amber-100 text-xs sm:text-sm">Property Management System</p>
      </div>
      
      <div class="p-4 sm:p-6">
        <div class="mb-3 sm:mb-4">
          <p class="text-slate-700 leading-relaxed text-sm sm:text-base">
            Comprehensive real estate platform with property listings, advanced search filters, virtual tours, and integrated booking system for buyers and sellers.
          </p>
        </div>
        
        <div class="mb-3 sm:mb-4">
          <h4 class="font-semibold mb-2 text-slate-800 text-sm sm:text-base">Key Features:</h4>
          <ul class="text-xs sm:text-sm text-slate-600 list-disc list-inside space-y-1">
            <li>Advanced property search</li>
            <li>Interactive map integration</li>
            <li>Virtual tour system</li>
            <li>Booking & scheduling</li>
            <li>Agent management portal</li>
          </ul>
        </div>
        
        <div class="flex flex-wrap gap-1.5 sm:gap-2 mb-3 sm:mb-4">
          <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">PHP</span>
          <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs">Laravel</span>
          <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Maps API</span>
          <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">Bootstrap</span>
        </div>
        
        <div class="flex gap-2 text-xs sm:text-sm">
          <a href="#" class="text-indigo-600 hover:text-indigo-800 transition-colors">Live Demo</a>
          <span class="text-slate-300">|</span>
          <a href="#" class="text-indigo-600 hover:text-indigo-800 transition-colors">GitHub</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Skills & Technologies Summary -->
  <section class="mt-12 sm:mt-16 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-2xl p-6 sm:p-8">
    <h2 class="text-2xl sm:text-3xl font-bold mb-6 sm:mb-8 text-center">Technologies Used</h2>
    
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3 sm:gap-4">
      <div class="bg-white rounded-xl p-3 sm:p-4 text-center shadow-sm">
        <span class="text-xl sm:text-2xl">⚛️</span>
        <p class="text-xs sm:text-sm font-medium mt-1 sm:mt-2">React</p>
      </div>
      <div class="bg-white rounded-xl p-3 sm:p-4 text-center shadow-sm">
        <span class="text-xl sm:text-2xl">🐘</span>
        <p class="text-xs sm:text-sm font-medium mt-1 sm:mt-2">PHP</p>
      </div>
      <div class="bg-white rounded-xl p-3 sm:p-4 text-center shadow-sm">
        <span class="text-xl sm:text-2xl">🅱️</span>
        <p class="text-xs sm:text-sm font-medium mt-1 sm:mt-2">Bootstrap</p>
      </div>
      <div class="bg-white rounded-xl p-3 sm:p-4 text-center shadow-sm">
        <span class="text-xl sm:text-2xl">🗄️</span>
        <p class="text-xs sm:text-sm font-medium mt-1 sm:mt-2">MySQL</p>
      </div>
      <div class="bg-white rounded-xl p-3 sm:p-4 text-center shadow-sm">
        <span class="text-xl sm:text-2xl">🔗</span>
        <p class="text-xs sm:text-sm font-medium mt-1 sm:mt-2">APIs</p>
      </div>
      <div class="bg-white rounded-xl p-3 sm:p-4 text-center shadow-sm">
        <span class="text-xl sm:text-2xl">🎨</span>
        <p class="text-xs sm:text-sm font-medium mt-1 sm:mt-2">UI/UX</p>
      </div>
    </div>
    
    <div class="text-center mt-6 sm:mt-8">
      <p class="text-slate-600 mb-4 text-sm sm:text-base">Ready to discuss your next project?</p>
      <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center">
        <a href="{{ route('contact') }}" class="px-6 py-3 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700 transition-colors font-medium text-sm sm:text-base">
          Get In Touch
        </a>
        <a href="{{ route('about') }}" class="px-6 py-3 border border-indigo-600 text-indigo-600 rounded-xl hover:bg-indigo-50 transition-colors font-medium text-sm sm:text-base">
          Learn More
        </a>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="mt-16 text-center bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-2xl p-12">
    <h2 class="text-3xl font-bold mb-4">Ready to Start Your Project?</h2>
    <p class="text-xl text-indigo-100 mb-8">Let's discuss how I can help bring your ideas to life</p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="{{ route('contact') }}" class="px-8 py-4 bg-white text-indigo-600 rounded-xl hover:bg-indigo-50 transition-colors font-semibold text-lg">Start a Conversation</a>
      <a href="{{ route('about') }}" class="px-8 py-4 border border-white/30 rounded-xl hover:bg-white/10 transition-colors font-semibold text-lg">Learn More About Me</a>
    </div>
  </section>
</div>
@endsection