@extends('layouts.app')
@section('content')
<section class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center fade-in">
  <div class="order-2 lg:order-1 space-y-6">
    <div class="text-center lg:text-left">
      <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight">
        Hi, I'm <span class="text-professional">Pankaj Kumar</span>
      </h1>
      <h2 class="text-xl sm:text-2xl lg:text-3xl font-semibold text-gray-700 mt-2">
        Full-Stack Web Developer
      </h2>
      <p class="text-lg text-gray-600 mt-2">Software Engineer</p>
    </div>
    
    <div class="space-y-4 text-center lg:text-left">
      <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
        Motivated Full-Stack Web Developer with expertise in <strong>PHP</strong>, <strong>ReactJS</strong>, <strong>MySQL</strong>, 
        and modern web technologies. Experienced in database management, responsive web design, and team leadership.
      </p>
      <p class="text-base sm:text-lg text-gray-600">
        Passionate about problem-solving and adapting to new technologies to deliver efficient software solutions.
      </p>
    </div>
    
    <!-- Contact Info -->
    <div class="flex flex-col sm:flex-row flex-wrap gap-4 text-sm text-gray-600 justify-center lg:justify-start">
      <div class="flex items-center gap-2 card-professional px-4 py-2 rounded-lg">
        <svg class="w-4 h-4 text-blue-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
          <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
        </svg>
        <span>+91 6203454484</span>
      </div>
      <div class="flex items-center gap-2 card-professional px-4 py-2 rounded-lg">
        <svg class="w-4 h-4 text-blue-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
          <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
          <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
        </svg>
        <span class="break-all">pankaj09d@gmail.com</span>
      </div>
      <div class="flex items-center gap-2 card-professional px-4 py-2 rounded-lg">
        <svg class="w-4 h-4 text-blue-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
        </svg>
        <span>Mirapur, Varanasi, UP</span>
      </div>
    </div>
    
    <!-- Action Buttons -->
    <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-start">
      <a href="{{ route('projects') }}" class="btn-primary px-6 py-3 rounded-xl font-semibold text-center">
        💼 View Projects
      </a>
      <a href="/documents/resume.pdf" download class="btn-success px-6 py-3 rounded-xl font-semibold text-center">
        📄 Download Resume
      </a>
      <a href="{{ route('contact') }}" class="card-professional px-6 py-3 rounded-xl font-semibold text-center border border-gray-300 hover:border-blue-500 hover:text-blue-600 transition-all">
        💬 Contact Me
      </a>
    </div>
  </div>
  
  <div class="order-1 lg:order-2 fade-in">
    <div class="max-w-md mx-auto">
      <div class="card-professional p-8 rounded-2xl gradient-professional text-white hover-lift">
        <div class="text-center">
          <div class="w-24 h-24 bg-white/20 rounded-full mx-auto mb-6 flex items-center justify-center backdrop-blur-sm">
            <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <h3 class="text-2xl font-bold mb-2">Ready to Build</h3>
          <p class="text-white/90 mb-6">Full-Stack Solutions</p>
          
          <!-- Tech Stack Pills -->
          <div class="flex flex-wrap justify-center gap-2">
            <span class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full text-sm font-medium hover:bg-white/30 transition-all">PHP</span>
            <span class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full text-sm font-medium hover:bg-white/30 transition-all">React</span>
            <span class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full text-sm font-medium hover:bg-white/30 transition-all">MySQL</span>
            <span class="bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full text-sm font-medium hover:bg-white/30 transition-all">Laravel</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Key Skills Preview -->
<section class="mt-16 lg:mt-20 pt-16 border-t border-gray-200 fade-in">
  <div class="text-center mb-12">
    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Core Technologies</h2>
    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
      Proficient in modern web development technologies with a focus on scalable and maintainable solutions.
    </p>
  </div>
  
  <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 lg:gap-6">
    <div class="card-professional p-6 rounded-xl text-center hover-lift stagger-1">
      <div class="text-4xl mb-3">🐘</div>
      <h4 class="font-semibold text-gray-900 mb-1">PHP</h4>
      <p class="text-xs text-gray-500">Backend</p>
    </div>
    <div class="card-professional p-6 rounded-xl text-center hover-lift stagger-2">
      <div class="text-4xl mb-3">⚛️</div>
      <h4 class="font-semibold text-gray-900 mb-1">React</h4>
      <p class="text-xs text-gray-500">Frontend</p>
    </div>
    <div class="card-professional p-6 rounded-xl text-center hover-lift stagger-3">
      <div class="text-4xl mb-3">🗄️</div>
      <h4 class="font-semibold text-gray-900 mb-1">MySQL</h4>
      <p class="text-xs text-gray-500">Database</p>
    </div>
    <div class="card-professional p-6 rounded-xl text-center hover-lift stagger-4">
      <div class="text-4xl mb-3">☕</div>
      <h4 class="font-semibold text-gray-900 mb-1">Java</h4>
      <p class="text-xs text-gray-500">Programming</p>
    </div>
    <div class="card-professional p-6 rounded-xl text-center hover-lift stagger-5">
      <div class="text-4xl mb-3">🚀</div>
      <h4 class="font-semibold text-gray-900 mb-1">Laravel</h4>
      <p class="text-xs text-gray-500">Framework</p>
    </div>
    <div class="card-professional p-6 rounded-xl text-center hover-lift stagger-6">
      <div class="text-4xl mb-3">🎨</div>
      <h4 class="font-semibold text-gray-900 mb-1">Bootstrap</h4>
      <p class="text-xs text-gray-500">CSS Framework</p>
    </div>
  </div>
</section>
@endsection
