@extends('layouts.app')
@section('content')
<div class="max-w-4xl mx-auto px-4 lg:px-0">
  <h1 class="text-3xl sm:text-4xl font-bold mb-6 text-center lg:text-left">About Me</h1>
  
  <!-- Professional Summary -->
  <section class="mb-8 sm:mb-12">
    <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-2xl p-4 sm:p-6 lg:p-8">
      <h2 class="text-xl sm:text-2xl font-semibold mb-4 text-indigo-800 text-center lg:text-left">Professional Summary</h2>
      <p class="text-slate-700 leading-relaxed text-base sm:text-lg mb-4">
        Motivated Full-Stack Web Developer with expertise in PHP, ReactJS, MySQL, Java, and modern web technologies. 
        Experienced in database management, responsive web design, and team leadership. Passionate about problem-solving 
        and adapting to new technologies to deliver efficient software solutions.
      </p>
      <p class="text-slate-700 leading-relaxed text-base sm:text-lg mb-4">
        <strong>API Development Specialist:</strong> Extensive experience in designing and developing RESTful APIs and API endpoints. 
        Proficient in creating scalable backend services, implementing secure authentication systems, and optimizing API performance 
        for various web and mobile applications.
      </p>
      <div class="bg-white rounded-xl p-4 sm:p-6 border-l-4 border-indigo-500">
        <h3 class="text-base sm:text-lg font-semibold text-indigo-800 mb-2">Featured Project: Devddotvanarsena</h3>
        <p class="text-slate-700">
          Developed <strong>Devddotvanarsena</strong>, a comprehensive API-centric application showcasing advanced backend development skills. 
          This project demonstrates my expertise in creating robust API architectures, implementing complex business logic, 
          and ensuring seamless data flow between frontend and backend systems.
        </p>
      </div>
    </div>
  </section>

  <!-- Skills Section -->
  <section class="mb-8 sm:mb-12">
    <h2 class="text-2xl sm:text-3xl font-bold mb-6 sm:mb-8 text-center lg:text-left">Key Skills</h2>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
      <!-- Programming Languages -->
      <div class="bg-white border rounded-xl p-4 sm:p-6 shadow-sm hover:shadow-md transition-shadow">
        <h3 class="text-base sm:text-lg font-semibold mb-3 sm:mb-4 text-indigo-600">Programming Languages</h3>
        <div class="flex flex-wrap gap-1.5 sm:gap-2">
          <span class="bg-blue-100 text-blue-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">C</span>
          <span class="bg-blue-100 text-blue-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">Java</span>
          <span class="bg-blue-100 text-blue-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">PHP</span>
          <span class="bg-blue-100 text-blue-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">HTML</span>
          <span class="bg-blue-100 text-blue-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">CSS</span>
          <span class="bg-blue-100 text-blue-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">JavaScript</span>
        </div>
      </div>
      
      <!-- Database Management -->
      <div class="bg-white border rounded-xl p-4 sm:p-6 shadow-sm hover:shadow-md transition-shadow">
        <h3 class="text-base sm:text-lg font-semibold mb-3 sm:mb-4 text-green-600">Database Management</h3>
        <div class="flex flex-wrap gap-1.5 sm:gap-2">
          <span class="bg-green-100 text-green-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">MySQL</span>
          <span class="bg-green-100 text-green-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">Database Design</span>
          <span class="bg-green-100 text-green-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">Optimization</span>
        </div>
      </div>
      
      <!-- Web Development -->
      <div class="bg-white border rounded-xl p-4 sm:p-6 shadow-sm hover:shadow-md transition-shadow">
        <h3 class="text-base sm:text-lg font-semibold mb-3 sm:mb-4 text-purple-600">Web Development</h3>
        <div class="flex flex-wrap gap-1.5 sm:gap-2">
          <span class="bg-purple-100 text-purple-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">Full-Stack</span>
          <span class="bg-purple-100 text-purple-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">ReactJS</span>
          <span class="bg-purple-100 text-purple-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">Responsive Design</span>
          <span class="bg-purple-100 text-purple-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">Bootstrap</span>
        </div>
      </div>
      
      <!-- API Development -->
      <div class="bg-white border rounded-xl p-4 sm:p-6 shadow-sm hover:shadow-md transition-shadow">
        <h3 class="text-base sm:text-lg font-semibold mb-3 sm:mb-4 text-indigo-600">API Development</h3>
        <div class="flex flex-wrap gap-1.5 sm:gap-2">
          <span class="bg-indigo-100 text-indigo-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">RESTful APIs</span>
          <span class="bg-indigo-100 text-indigo-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">API Endpoints</span>
          <span class="bg-indigo-100 text-indigo-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">Backend Services</span>
          <span class="bg-indigo-100 text-indigo-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">Authentication</span>
        </div>
      </div>
      
      <!-- Frameworks & Tools -->
      <div class="bg-white border rounded-xl p-4 sm:p-6 shadow-sm hover:shadow-md transition-shadow">
        <h3 class="text-base sm:text-lg font-semibold mb-3 sm:mb-4 text-red-600">Frameworks & Tools</h3>
        <div class="flex flex-wrap gap-1.5 sm:gap-2">
          <span class="bg-red-100 text-red-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">Laravel</span>
          <span class="bg-red-100 text-red-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">Git</span>
          <span class="bg-red-100 text-red-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">Version Control</span>
        </div>
      </div>
      
      <!-- Core Competencies -->
      <div class="bg-white border rounded-xl p-4 sm:p-6 shadow-sm hover:shadow-md transition-shadow">
        <h3 class="text-base sm:text-lg font-semibold mb-3 sm:mb-4 text-orange-600">Core Competencies</h3>
        <div class="flex flex-wrap gap-1.5 sm:gap-2">
          <span class="bg-orange-100 text-orange-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">Problem Solving</span>
          <span class="bg-orange-100 text-orange-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">New Technologies</span>
        </div>
      </div>
      
      <!-- Soft Skills -->
      <div class="bg-white border rounded-xl p-4 sm:p-6 shadow-sm hover:shadow-md transition-shadow">
        <h3 class="text-base sm:text-lg font-semibold mb-3 sm:mb-4 text-teal-600">Soft Skills</h3>
        <div class="flex flex-wrap gap-1.5 sm:gap-2">
          <span class="bg-teal-100 text-teal-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">Communication</span>
          <span class="bg-teal-100 text-teal-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">Teamwork</span>
          <span class="bg-teal-100 text-teal-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">Time Management</span>
          <span class="bg-teal-100 text-teal-800 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm">Leadership</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Experience Section -->
  <section class="mb-8 sm:mb-12">
    <h2 class="text-2xl sm:text-3xl font-bold mb-6 sm:mb-8 text-center lg:text-left">Experience</h2>
    
    <div class="bg-white border rounded-xl p-4 sm:p-6 lg:p-8 shadow-sm">
      <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-4">
        <div class="text-center lg:text-left">
          <h3 class="text-lg sm:text-xl font-semibold text-indigo-600">Web Development Intern</h3>
          <p class="text-base sm:text-lg text-slate-700">ConsultIT Technology Pvt. Ltd.</p>
        </div>
        <div class="text-slate-500 mt-2 lg:mt-0 text-center lg:text-right">
          <span class="bg-slate-100 px-3 py-1 rounded-full text-xs sm:text-sm">June 2024 – August 2024</span>
        </div>
      </div>
      
      <ul class="list-disc list-inside space-y-2 text-slate-700 ml-0 sm:ml-4 text-sm sm:text-base">
        <li>Completed a 45-day intensive internship focusing on full-stack web development.</li>
        <li>Gained hands-on experience in building and designing web applications using HTML, CSS, and MySQL.</li>
        <li>Developed proficiency in database integration and responsive web design principles.</li>
      </ul>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="text-center bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-2xl p-6 sm:p-8">
    <h2 class="text-xl sm:text-2xl font-bold mb-4">Let's Work Together</h2>
    <p class="mb-6 text-indigo-100 text-sm sm:text-base">Ready to bring your web development project to life?</p>
    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center">
      <a href="{{ route('projects') }}" class="px-4 sm:px-6 py-3 bg-white text-indigo-600 rounded-xl hover:bg-indigo-50 transition-colors font-medium text-sm sm:text-base">View My Projects</a>
      <a href="{{ route('contact') }}" class="px-4 sm:px-6 py-3 border border-white/30 rounded-xl hover:bg-white/10 transition-colors font-medium text-sm sm:text-base">Get In Touch</a>
    </div>
  </section>
</div>
@endsection
