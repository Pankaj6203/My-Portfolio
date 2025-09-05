@extends('layouts.app')
@section('content')
<div class="max-w-6xl mx-auto px-4 lg:px-0">
  <div class="text-center mb-8 sm:mb-12">
    <h1 class="text-3xl sm:text-4xl font-bold mb-4">Documents & Achievements</h1>
    <p class="text-lg sm:text-xl text-slate-600">My certificates, achievements, and professional credentials</p>
  </div>

  <!-- Documents Grid -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
    
    <!-- Web Development Internship Certificate -->
    <div class="bg-white border rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow group">
      <div class="bg-gradient-to-r from-blue-500 to-indigo-600 p-4 sm:p-6 text-white">
        <div class="flex items-center justify-between mb-3 sm:mb-4">
          <span class="bg-white/20 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-medium">Certificate</span>
          <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 2L3 7v11c0 5.55 3.84 8 7 8s7-2.45 7-8V7l-7-5zM8 14l-2-2 1.41-1.41L8 11.17l2.59-2.58L12 10l-4 4z" clip-rule="evenodd"></path>
          </svg>
        </div>
        <h3 class="text-lg sm:text-xl font-bold mb-2">Web Development Internship</h3>
        <p class="text-blue-100 text-xs sm:text-sm">ConsultIT Technology Pvt. Ltd.</p>
      </div>
      
      <div class="p-4 sm:p-6">
        <div class="mb-3 sm:mb-4">
          <p class="text-slate-600 text-xs sm:text-sm mb-2"><strong>Duration:</strong> June 2024 - August 2024</p>
          <p class="text-slate-700 leading-relaxed text-sm sm:text-base">
            45-day intensive internship certificate focusing on full-stack web development with hands-on experience in HTML, CSS, MySQL, and responsive design.
          </p>
        </div>
        
        <div class="flex flex-wrap gap-1.5 sm:gap-2 mb-3 sm:mb-4">
          <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">45 Days</span>
          <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Full-Stack</span>
          <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">Professional</span>
        </div>
        
        <button onclick="openDocument('internship-cert')" class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors text-sm sm:text-base">
          View Certificate
        </button>
      </div>
    </div>

    <!-- Techmarathon Award -->
    <div class="bg-white border rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow group">
      <div class="bg-gradient-to-r from-yellow-500 to-orange-600 p-4 sm:p-6 text-white">
        <div class="flex items-center justify-between mb-3 sm:mb-4">
          <span class="bg-white/20 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-medium">Award</span>
          <span class="bg-yellow-400 text-yellow-900 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-bold">3rd Place</span>
        </div>
        <h3 class="text-lg sm:text-xl font-bold mb-2">Techmarathon 2025</h3>
        <p class="text-yellow-100 text-xs sm:text-sm">24-Hour Hackathon Competition</p>
      </div>
      
      <div class="p-4 sm:p-6">
        <div class="mb-3 sm:mb-4">
          <p class="text-slate-600 text-xs sm:text-sm mb-2"><strong>Project:</strong> Gruh Utpaad E-Commerce</p>
          <p class="text-slate-700 leading-relaxed text-sm sm:text-base">
            Third place achievement certificate for leading a team in developing a complete e-commerce platform within 24 hours.
          </p>
        </div>
        
        <div class="flex flex-wrap gap-1.5 sm:gap-2 mb-3 sm:mb-4">
          <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Team Leader</span>
          <span class="bg-orange-100 text-orange-800 px-2 py-1 rounded text-xs">24 Hours</span>
          <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs">Competition</span>
        </div>
        
        <button onclick="openDocument('hackathon-award')" class="w-full bg-orange-600 text-white px-4 py-2 rounded-lg hover:bg-orange-700 transition-colors text-sm sm:text-base">
          View Award
        </button>
      </div>
    </div>

    <!-- Academic Transcripts -->
    <div class="bg-white border rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow group">
      <div class="bg-gradient-to-r from-green-500 to-emerald-600 p-4 sm:p-6 text-white">
        <div class="flex items-center justify-between mb-3 sm:mb-4">
          <span class="bg-white/20 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-medium">Academic</span>
          <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
          </svg>
        </div>
        <h3 class="text-lg sm:text-xl font-bold mb-2">Academic Records</h3>
        <p class="text-green-100 text-xs sm:text-sm">Educational Achievements</p>
      </div>
      
      <div class="p-4 sm:p-6">
        <div class="mb-3 sm:mb-4">
          <p class="text-slate-700 leading-relaxed text-sm sm:text-base">
            Complete academic transcripts including 10th grade marks, college records, and educational achievements throughout my academic journey.
          </p>
        </div>
        
        <div class="space-y-2 mb-3 sm:mb-4 text-xs sm:text-sm">
          <div class="flex justify-between">
            <span class="text-slate-600">10th Grade:</span>
            <span class="font-semibold">85.2%</span>
          </div>
          <div class="flex justify-between">
            <span class="text-slate-600">12th Grade:</span>
            <span class="font-semibold">82.8%</span>
          </div>
          <div class="flex justify-between">
            <span class="text-slate-600">College (Current):</span>
            <span class="font-semibold">8.1 CGPA</span>
          </div>
        </div>
        
        <button onclick="openDocument('academic-records')" class="w-full bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors text-sm sm:text-base">
          View Transcripts
        </button>
      </div>
    </div>

    <!-- Programming Certificates -->
    <div class="bg-white border rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow group">
      <div class="bg-gradient-to-r from-purple-500 to-violet-600 p-4 sm:p-6 text-white">
        <div class="flex items-center justify-between mb-3 sm:mb-4">
          <span class="bg-white/20 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-medium">Skills</span>
          <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </div>
        <h3 class="text-lg sm:text-xl font-bold mb-2">Programming Certifications</h3>
        <p class="text-purple-100 text-xs sm:text-sm">Technical Skill Certificates</p>
      </div>
      
      <div class="p-4 sm:p-6">
        <div class="mb-3 sm:mb-4">
          <p class="text-slate-700 leading-relaxed text-sm sm:text-base">
            Collection of programming and technical skill certificates including Laravel, PHP, MySQL, and modern web development technologies.
          </p>
        </div>
        
        <div class="flex flex-wrap gap-1.5 sm:gap-2 mb-3 sm:mb-4">
          <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs">Laravel</span>
          <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">PHP</span>
          <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">MySQL</span>
          <span class="bg-cyan-100 text-cyan-800 px-2 py-1 rounded text-xs">React</span>
        </div>
        
        <button onclick="openDocument('programming-certs')" class="w-full bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors text-sm sm:text-base">
          View Certificates
        </button>
      </div>
    </div>

    <!-- Project Documentation -->
    <div class="bg-white border rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow group">
      <div class="bg-gradient-to-r from-teal-500 to-cyan-600 p-4 sm:p-6 text-white">
        <div class="flex items-center justify-between mb-3 sm:mb-4">
          <span class="bg-white/20 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-medium">Documentation</span>
          <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 0v12h8V4H6z" clip-rule="evenodd"></path>
          </svg>
        </div>
        <h3 class="text-lg sm:text-xl font-bold mb-2">Project Documentation</h3>
        <p class="text-teal-100 text-xs sm:text-sm">Technical Specifications & Reports</p>
      </div>
      
      <div class="p-4 sm:p-6">
        <div class="mb-3 sm:mb-4">
          <p class="text-slate-700 leading-relaxed text-sm sm:text-base">
            Detailed project documentation including technical specifications, API documentation, and project reports for major development work.
          </p>
        </div>
        
        <div class="flex flex-wrap gap-1.5 sm:gap-2 mb-3 sm:mb-4">
          <span class="bg-teal-100 text-teal-800 px-2 py-1 rounded text-xs">API Docs</span>
          <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Technical</span>
          <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Reports</span>
        </div>
        
        <button onclick="openDocument('project-docs')" class="w-full bg-teal-600 text-white px-4 py-2 rounded-lg hover:bg-teal-700 transition-colors text-sm sm:text-base">
          View Documentation
        </button>
      </div>
    </div>

    <!-- Resume -->
    <div class="bg-white border rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow group">
      <div class="bg-gradient-to-r from-slate-700 to-slate-900 p-4 sm:p-6 text-white">
        <div class="flex items-center justify-between mb-3 sm:mb-4">
          <span class="bg-white/20 px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-medium">Resume</span>
          <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </div>
        <h3 class="text-lg sm:text-xl font-bold mb-2">Professional Resume</h3>
        <p class="text-slate-300 text-xs sm:text-sm">Complete CV & Portfolio Summary</p>
      </div>
      
      <div class="p-4 sm:p-6">
        <div class="mb-3 sm:mb-4">
          <p class="text-slate-700 leading-relaxed text-sm sm:text-base">
            Download my complete professional resume with detailed experience, skills, projects, and achievements in PDF format.
          </p>
        </div>
        
        <div class="flex flex-wrap gap-1.5 sm:gap-2 mb-3 sm:mb-4">
          <span class="bg-slate-100 text-slate-800 px-2 py-1 rounded text-xs">PDF Format</span>
          <span class="bg-indigo-100 text-indigo-800 px-2 py-1 rounded text-xs">Updated</span>
        </div>
        
        <a href="/resume/pankaj-kumar-resume.pdf" download class="w-full bg-slate-800 text-white px-4 py-2 rounded-lg hover:bg-slate-900 transition-colors inline-block text-center text-sm sm:text-base">
          Download Resume
        </a>
      </div>
    </div>
  </div>

  <!-- Document Modal -->
  <div id="documentModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
      <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-auto">
        <div class="p-4 sm:p-6 border-b">
          <div class="flex justify-between items-center">
            <h3 id="modalTitle" class="text-lg sm:text-xl font-bold">Document Viewer</h3>
            <button onclick="closeDocument()" class="text-slate-500 hover:text-slate-700 text-xl sm:text-2xl">&times;</button>
          </div>
        </div>
        <div id="modalContent" class="p-4 sm:p-6">
          <!-- Document content will be loaded here -->
        </div>
      </div>
    </div>
  </div>

  <!-- Call to Action -->
  <div class="mt-12 sm:mt-16 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-2xl p-6 sm:p-8 text-center">
    <h2 class="text-xl sm:text-2xl font-bold mb-4">Impressive Credentials</h2>
    <p class="mb-6 text-indigo-100 text-sm sm:text-base">These achievements showcase my dedication to professional growth and technical excellence.</p>
    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center">
      <a href="{{ route('projects') }}" class="px-6 py-3 bg-white text-indigo-600 rounded-xl hover:bg-indigo-50 transition-colors font-medium text-sm sm:text-base">
        View My Projects
      </a>
      <a href="{{ route('contact') }}" class="px-6 py-3 border border-white/30 rounded-xl hover:bg-white/10 transition-colors font-medium text-sm sm:text-base">
        Get In Touch
      </a>
    </div>
  </div>
</div>

<script>
function openDocument(type) {
  const modal = document.getElementById('documentModal');
  const title = document.getElementById('modalTitle');
  const content = document.getElementById('modalContent');
  
  // Show modal
  modal.classList.remove('hidden');
  
  // Set content based on document type
  switch(type) {
    case 'internship-cert':
      title.textContent = 'Web Development Internship Certificate';
      content.innerHTML = `
        <div class="text-center">
          <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white p-8 rounded-xl mb-6">
            <h2 class="text-2xl font-bold mb-4">Certificate of Completion</h2>
            <p class="text-lg">This is to certify that</p>
            <h3 class="text-3xl font-bold my-4">Pankaj Kumar</h3>
            <p class="text-lg">has successfully completed the</p>
            <h4 class="text-xl font-semibold my-2">Web Development Internship Program</h4>
            <p>at ConsultIT Technology Pvt. Ltd.</p>
            <p class="mt-4">Duration: June 2024 - August 2024 (45 days)</p>
          </div>
          <p class="text-slate-600">This certificate validates proficiency in HTML, CSS, MySQL, and responsive web design principles.</p>
        </div>
      `;
      break;
    case 'hackathon-award':
      title.textContent = 'Techmarathon 2025 Award';
      content.innerHTML = `
        <div class="text-center">
          <div class="bg-gradient-to-r from-yellow-500 to-orange-600 text-white p-8 rounded-xl mb-6">
            <h2 class="text-2xl font-bold mb-4">🏆 Third Place Award</h2>
            <h3 class="text-3xl font-bold my-4">Techmarathon 2025</h3>
            <p class="text-lg">24-Hour Hackathon Competition</p>
            <div class="my-6">
              <h4 class="text-xl font-semibold">Team Leader: Pankaj Kumar</h4>
              <p class="mt-2">Project: Gruh Utpaad - Local E-Commerce Platform</p>
            </div>
            <p class="text-yellow-100">Awarded for exceptional teamwork, innovation, and technical excellence</p>
          </div>
        </div>
      `;
      break;
    case 'academic-records':
      title.textContent = 'Academic Transcripts';
      content.innerHTML = `
        <div class="space-y-6">
          <div class="bg-green-50 p-6 rounded-xl">
            <h3 class="text-xl font-semibold mb-4">Academic Performance</h3>
            <div class="grid md:grid-cols-2 gap-4">
              <div class="bg-white p-4 rounded-lg">
                <h4 class="font-semibold">10th Grade (CBSE)</h4>
                <p class="text-2xl font-bold text-green-600">85.2%</p>
                <p class="text-slate-600">High School Certificate</p>
              </div>
              <div class="bg-white p-4 rounded-lg">
                <h4 class="font-semibold">12th Grade (CBSE)</h4>
                <p class="text-2xl font-bold text-green-600">82.8%</p>
                <p class="text-slate-600">Senior Secondary Certificate</p>
              </div>
              <div class="bg-white p-4 rounded-lg">
                <h4 class="font-semibold">Bachelor's (Current)</h4>
                <p class="text-2xl font-bold text-green-600">8.1 CGPA</p>
                <p class="text-slate-600">Computer Science Engineering</p>
              </div>
              <div class="bg-white p-4 rounded-lg">
                <h4 class="font-semibold">College</h4>
                <p class="text-lg font-semibold">Engineering College</p>
                <p class="text-slate-600">Varanasi, UP</p>
              </div>
            </div>
          </div>
        </div>
      `;
      break;
    case 'programming-certs':
      title.textContent = 'Programming Certificates';
      content.innerHTML = `
        <div class="grid md:grid-cols-2 gap-6">
          <div class="bg-red-50 p-6 rounded-xl">
            <h4 class="font-semibold text-red-800">Laravel Framework</h4>
            <p class="text-slate-600">Advanced PHP Framework Certificate</p>
          </div>
          <div class="bg-blue-50 p-6 rounded-xl">
            <h4 class="font-semibold text-blue-800">PHP Development</h4>
            <p class="text-slate-600">Server-side Programming Certificate</p>
          </div>
          <div class="bg-green-50 p-6 rounded-xl">
            <h4 class="font-semibold text-green-800">MySQL Database</h4>
            <p class="text-slate-600">Database Management Certificate</p>
          </div>
          <div class="bg-cyan-50 p-6 rounded-xl">
            <h4 class="font-semibold text-cyan-800">React.js</h4>
            <p class="text-slate-600">Frontend Development Certificate</p>
          </div>
        </div>
      `;
      break;
    case 'project-docs':
      title.textContent = 'Project Documentation';
      content.innerHTML = `
        <div class="space-y-6">
          <div class="bg-teal-50 p-6 rounded-xl">
            <h4 class="font-semibold mb-4">Available Documentation</h4>
            <ul class="space-y-3">
              <li class="flex items-center gap-3">
                <span class="w-2 h-2 bg-teal-600 rounded-full"></span>
                <span>Gruh Utpaad - Technical Specification Document</span>
              </li>
              <li class="flex items-center gap-3">
                <span class="w-2 h-2 bg-teal-600 rounded-full"></span>
                <span>Devddotvanarsena - API Documentation</span>
              </li>
              <li class="flex items-center gap-3">
                <span class="w-2 h-2 bg-teal-600 rounded-full"></span>
                <span>Hospital Management System - Project Report</span>
              </li>
              <li class="flex items-center gap-3">
                <span class="w-2 h-2 bg-teal-600 rounded-full"></span>
                <span>Image Search Application - Technical Guide</span>
              </li>
            </ul>
          </div>
        </div>
      `;
      break;
  }
}

function closeDocument() {
  document.getElementById('documentModal').classList.add('hidden');
}

// Close modal when clicking outside
document.getElementById('documentModal').addEventListener('click', function(e) {
  if (e.target === this) {
    closeDocument();
  }
});
</script>
@endsection