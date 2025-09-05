@extends('layouts.app')
@section('content')
<div class="max-w-6xl mx-auto px-4 lg:px-0">
  <div class="text-center mb-8 sm:mb-12">
    <h1 class="text-3xl sm:text-4xl font-bold mb-4">Get In Touch</h1>
    <p class="text-lg sm:text-xl text-slate-600">Let's discuss your next web development project</p>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-12">
    <!-- Contact Information -->
    <div class="space-y-6 sm:space-y-8">
      <div>
        <h2 class="text-xl sm:text-2xl font-semibold mb-4 sm:mb-6">Contact Information</h2>
        
        <!-- Contact Cards -->
        <div class="space-y-3 sm:space-y-4">
          <!-- Phone -->
          <div class="flex items-center p-3 sm:p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl">
            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-500 rounded-full flex items-center justify-center text-white mr-3 sm:mr-4">
              <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
              </svg>
            </div>
            <div class="flex-1">
              <h3 class="font-semibold text-slate-800 text-sm sm:text-base">Phone</h3>
              <p class="text-slate-600 text-sm sm:text-base">+91 6203454484</p>
              <p class="text-xs text-slate-500">Available for calls and WhatsApp</p>
            </div>
            <a href="https://wa.me/916203454484?text=Hi%20Pankaj%2C%20I%20would%20like%20to%20discuss%20a%20web%20development%20project%20with%20you." target="_blank" class="bg-green-500 text-white px-3 sm:px-4 py-2 rounded-lg hover:bg-green-600 transition-colors flex items-center gap-2 text-xs sm:text-sm">
              <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.787"></path>
              </svg>
              WhatsApp
            </a>
          </div>
          
          <!-- Email -->
          <div class="flex items-center p-3 sm:p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl">
            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-green-500 rounded-full flex items-center justify-center text-white mr-3 sm:mr-4">
              <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 20 20">
                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
              </svg>
            </div>
            <div>
              <h3 class="font-semibold text-slate-800 text-sm sm:text-base">Email</h3>
              <p class="text-slate-600 text-sm sm:text-base">pankaj09d@gmail.com</p>
              <p class="text-xs text-slate-500">Professional inquiries welcome</p>
            </div>
          </div>
          
          <!-- Location -->
          <div class="flex items-center p-3 sm:p-4 bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl">
            <div class="w-10 h-10 sm:w-12 sm:h-12 bg-purple-500 rounded-full flex items-center justify-center text-white mr-3 sm:mr-4">
              <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
              </svg>
            </div>
            <div>
              <h3 class="font-semibold text-slate-800 text-sm sm:text-base">Location</h3>
              <p class="text-slate-600 text-sm sm:text-base">Mirapur, Varanasi, UP</p>
              <p class="text-xs text-slate-500">Open to remote opportunities</p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Professional Status -->
      <div class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-2xl p-4 sm:p-6">
        <h3 class="text-base sm:text-lg font-semibold mb-3">Professional Status</h3>
        <div class="space-y-2 sm:space-y-3">
          <div class="flex items-center">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <span class="text-sm sm:text-base">Available for new projects</span>
          </div>
          <div class="flex items-center">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <span class="text-sm sm:text-base">Open to remote work</span>
          </div>
          <div class="flex items-center">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <span class="text-sm sm:text-base">Full-stack development focus</span>
          </div>
        </div>
      </div>
      
      <!-- Quick Links -->
      <div>
        <h3 class="text-base sm:text-lg font-semibold mb-3 sm:mb-4">Quick Links</h3>
        <div class="grid grid-cols-2 gap-2 sm:gap-3">
          <a href="{{ route('about') }}" class="p-2 sm:p-3 border rounded-lg text-center hover:border-indigo-600 hover:text-indigo-600 transition-colors">
            <div class="text-xs sm:text-sm font-medium">About Me</div>
            <div class="text-xs text-slate-500">My experience</div>
          </a>
          <a href="{{ route('projects') }}" class="p-2 sm:p-3 border rounded-lg text-center hover:border-indigo-600 hover:text-indigo-600 transition-colors">
            <div class="text-xs sm:text-sm font-medium">Projects</div>
            <div class="text-xs text-slate-500">View portfolio</div>
          </a>
        </div>
      </div>
    </div>

    <!-- Contact Form -->
    <div>
      <div class="bg-white border rounded-2xl p-6 sm:p-8 shadow-lg">
        <h2 class="text-xl sm:text-2xl font-semibold mb-4 sm:mb-6">Send me a message</h2>
        
        <form action="{{ route('contact.store') }}" method="POST" class="space-y-4 sm:space-y-6">
          @csrf
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
            <div>
              <label for="name" class="block text-sm font-medium text-slate-700 mb-2">Full Name *</label>
              <input type="text" id="name" name="name" placeholder="Your full name" class="w-full p-3 sm:p-4 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors text-sm sm:text-base" required>
            </div>
            
            <div>
              <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Email Address *</label>
              <input type="email" id="email" name="email" placeholder="your.email@example.com" class="w-full p-3 sm:p-4 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors text-sm sm:text-base" required>
            </div>
          </div>
          
          <div>
            <label for="subject" class="block text-sm font-medium text-slate-700 mb-2">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Project inquiry, collaboration, etc." class="w-full p-3 sm:p-4 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors text-sm sm:text-base">
          </div>
          
          <div>
            <label for="message" class="block text-sm font-medium text-slate-700 mb-2">Message *</label>
            <textarea id="message" name="message" rows="6" placeholder="Tell me about your project requirements, timeline, and any specific technologies you'd like to use..." class="w-full p-3 sm:p-4 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors resize-none text-sm sm:text-base" required></textarea>
          </div>
          
          <button type="submit" class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-lg hover:from-indigo-700 hover:to-purple-700 transition-colors font-semibold text-base sm:text-lg shadow-lg">
            Send Message
          </button>
        </form>
        
        <div class="mt-4 sm:mt-6 text-center text-xs sm:text-sm text-slate-500">
          <p>I typically respond within 24 hours. Looking forward to hearing from you!</p>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Location Map -->
  <div class="mt-8 sm:mt-12">
    <div class="text-center mb-6">
      <h3 class="text-xl sm:text-2xl font-semibold mb-2">Find Me Here</h3>
      <p class="text-slate-600">Mirapur, Varanasi, Uttar Pradesh, India</p>
    </div>
    
    <div class="bg-white rounded-2xl shadow-lg p-4 sm:p-6">
      <div class="w-full overflow-hidden rounded-xl">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14017.670803353498!2d77.36689595!3d28.55721725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1757086039849!5m2!1sen!2sin" 
          width="100%" 
          height="400" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade"
          class="w-full h-64 sm:h-80 lg:h-96">
        </iframe>
      </div>
      
      <div class="mt-4 text-center text-sm text-slate-600">
        <p>📍 Available for remote work worldwide and local meetings in Varanasi area</p>
      </div>
    </div>
  </div>

  <!-- Response Time Info -->
  <div class="mt-8 sm:mt-12 text-center bg-slate-50 rounded-xl p-6 sm:p-8">
    <h3 class="text-base sm:text-lg font-semibold mb-4">What to expect after contacting me:</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6 text-xs sm:text-sm">
      <div class="flex flex-col items-center">
        <div class="w-10 h-10 sm:w-12 sm:h-12 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600 mb-3">
          <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
          </svg>
        </div>
        <h4 class="font-medium mb-1 text-sm sm:text-base">Quick Response</h4>
        <p class="text-slate-600 text-xs sm:text-sm">I'll respond within 24 hours with initial thoughts</p>
      </div>
      <div class="flex flex-col items-center">
        <div class="w-10 h-10 sm:w-12 sm:h-12 bg-green-100 rounded-full flex items-center justify-center text-green-600 mb-3">
          <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
          </svg>
        </div>
        <h4 class="font-medium mb-1 text-sm sm:text-base">Detailed Discussion</h4>
        <p class="text-slate-600 text-xs sm:text-sm">We'll discuss requirements, timeline, and approach</p>
      </div>
      <div class="flex flex-col items-center">
        <div class="w-10 h-10 sm:w-12 sm:h-12 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 mb-3">
          <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
          </svg>
        </div>
        <h4 class="font-medium mb-1 text-sm sm:text-base">Project Kickoff</h4>
        <p class="text-slate-600 text-xs sm:text-sm">We'll start building your vision into reality</p>
      </div>
    </div>
  </div>
</div>
@endsection
