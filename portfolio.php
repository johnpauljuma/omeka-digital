<?php
$pageTitle       = 'Our Work | Omeka Digital';
$pageDescription = 'Explore projects built by Omeka Digital, including EcoClean Kenya, a maintenance management system, and a health information system.';
$currentPage     = 'portfolio.php';
require 'partials/header.php';
require 'partials/navbar.php';
?>

<!-- ============================ Page hero ============================ -->
<section class="relative overflow-hidden text-white py-20 md:py-32">

  <!-- Background image -->
  <img src="assets/portfolio/p-hero2.png" alt=""
       class="absolute inset-0 w-full h-full object-cover"
       loading="eager">

  <!-- Dark overlay for text legibility -->
  <div class="absolute inset-0 bg-gradient-to-b from-navy/85 via-navy/50 to-navy-soft/85"></div>

  <div class="container relative z-10 mx-auto px-4 md:px-6 text-center reveal">
    <span class="section-eyebrow bg-white/10 text-white">
      <i class="fas fa-diagram-project"></i> Our Work
    </span>
    <h1 class="text-4xl md:text-5xl font-display font-bold mt-6 mb-4">Our Digital <span class="text-accent">Creations</span></h1>
    <p class="text-lg text-white/75 max-w-2xl mx-auto mb-10">Where practical ideas meet solid execution — a look at solutions we've built and shipped.</p>
    <div class="flex flex-wrap justify-center gap-3">
      <a href="#ecoclean" class="btn-primary px-5 py-2.5 rounded-full text-sm font-semibold">EcoClean</a>
      <a href="#mms" class="btn-outline px-5 py-2.5 rounded-full text-sm font-semibold">Maintenance System</a>
      <a href="#his" class="btn-outline px-5 py-2.5 rounded-full text-sm font-semibold">Health System</a>
      <a href="#unity" class="btn-outline px-5 py-2.5 rounded-full text-sm font-semibold">Unity Tailors</a>
    </div>
  </div>
</section>

<!-- ============================ EcoClean Kenya ============================ -->
<section id="ecoclean" class="py-20 md:py-28 bg-white">
  <div class="container mx-auto px-4 md:px-6 grid md:grid-cols-2 gap-14 items-center">
    <div class="reveal">
      <div class="icon-tile bg-primary mb-5"><i class="fas fa-globe"></i></div>
      <h2 class="text-3xl font-display font-bold text-navy mb-4">EcoClean Kenya</h2>
      <p class="text-lg text-slate mb-5">A modern website for Kenya's eco-friendly cleaning service provider, showcasing their services and commitment to sustainability.</p>

      <a href="https://ecoclean.co.ke" target="_blank" rel="noopener" class="inline-flex items-center text-primary font-semibold mb-5 group">
        Visit Live Site
        <i class="fas fa-arrow-up-right-from-square ml-2 text-sm transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5"></i>
      </a>

      <div class="flex flex-wrap gap-2 mb-6">
        <span class="bg-accent/10 text-accent px-3 py-1 rounded-full text-sm font-medium">Responsive Design</span>
        <span class="bg-accent/10 text-accent px-3 py-1 rounded-full text-sm font-medium">SEO Optimized</span>
        <span class="bg-accent/10 text-accent px-3 py-1 rounded-full text-sm font-medium">Fast Loading</span>
      </div>

      <div class="space-y-3">
        <div class="flex items-start gap-3">
          <i class="fas fa-circle-check text-accent mt-1"></i>
          <p class="text-slate">Modern, clean design reflecting the brand's eco-friendly values</p>
        </div>
        <div class="flex items-start gap-3">
          <i class="fas fa-circle-check text-accent mt-1"></i>
          <p class="text-slate">Service pages with detailed information and pricing</p>
        </div>
        <div class="flex items-start gap-3">
          <i class="fas fa-circle-check text-accent mt-1"></i>
          <p class="text-slate">Contact form with automatic notifications</p>
        </div>
      </div>
    </div>

    <div class="card rounded-2xl overflow-hidden reveal">
      <img src="assets/portfolio/eco-clean.png" alt="EcoClean Kenya website preview" class="w-full h-75 object-cover">
      <div class="p-5 flex justify-between items-center">
        <span class="text-sm text-slate">Live Production Site</span>
        <a href="https://ecoclean.co.ke" target="_blank" rel="noopener" class="text-primary hover:text-primary-dark text-sm font-semibold flex items-center">
          Visit Site <i class="fas fa-arrow-right ml-1 text-xs"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============================ Maintenance Management System ============================ -->
<section id="mms" class="py-20 md:py-28 bg-surface">
  <div class="container mx-auto px-4 md:px-6 grid md:grid-cols-2 gap-14 items-center">
    <div class="md:order-2 reveal">
      <div class="icon-tile bg-navy mb-5"><i class="fas fa-screwdriver-wrench"></i></div>
      <h2 class="text-3xl font-display font-bold text-navy mb-4">Maintenance Management System</h2>
      <p class="text-lg text-slate mb-5">A comprehensive web-based platform for tracking, assigning, and completing maintenance requests with real-time updates.</p>

      <a href="https://maintenance-management-system-two.vercel.app/" target="_blank" rel="noopener" class="inline-flex items-center text-primary font-semibold mb-5 group">
        Visit Live Demo
        <i class="fas fa-arrow-up-right-from-square ml-2 text-sm transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5"></i>
      </a>

      <div class="flex flex-wrap gap-2 mb-6">
        <span class="bg-accent/10 text-accent px-3 py-1 rounded-full text-sm font-medium">Next.js</span>
        <span class="bg-accent/10 text-accent px-3 py-1 rounded-full text-sm font-medium">Supabase</span>
        <span class="bg-accent/10 text-accent px-3 py-1 rounded-full text-sm font-medium">Ant Design</span>
        <span class="bg-accent/10 text-accent px-3 py-1 rounded-full text-sm font-medium">Role-Based Access</span>
      </div>

      <!-- Demo credentials redacted for security — do not publish real logins publicly.
           Swap this for a "request access" link, or rotate the passwords on the
           live demo and only share credentials privately with prospective clients. -->
      <div class="card rounded-xl p-5 mb-6">
        <div class="flex items-start gap-3">
          <i class="fas fa-shield-halved text-primary mt-1"></i>
          <div>
            <h3 class="font-semibold text-navy text-sm mb-1">Want to explore the demo?</h3>
            <p class="text-slate text-sm">Admin and technician login access is available on request.</p>
            <a href="contact.php" class="text-primary text-sm font-semibold mt-1 inline-block">Request demo access &rarr;</a>
          </div>
        </div>
      </div>

      <div class="space-y-3">
        <h3 class="font-semibold text-navy">Key Features:</h3>
        <div class="space-y-2">
          <div class="flex items-start gap-3">
            <span class="bg-accent text-white rounded-full w-5 h-5 flex items-center justify-center flex-shrink-0 text-xs mt-0.5">1</span>
            <p class="text-slate text-sm">Automated technician assignment based on availability</p>
          </div>
          <div class="flex items-start gap-3">
            <span class="bg-accent text-white rounded-full w-5 h-5 flex items-center justify-center flex-shrink-0 text-xs mt-0.5">2</span>
            <p class="text-slate text-sm">Real-time notifications via email and in-app alerts</p>
          </div>
          <div class="flex items-start gap-3">
            <span class="bg-accent text-white rounded-full w-5 h-5 flex items-center justify-center flex-shrink-0 text-xs mt-0.5">3</span>
            <p class="text-slate text-sm">Client feedback and rating system for completed jobs</p>
          </div>
          <div class="flex items-start gap-3">
            <span class="bg-accent text-white rounded-full w-5 h-5 flex items-center justify-center flex-shrink-0 text-xs mt-0.5">4</span>
            <p class="text-slate text-sm">Comprehensive admin dashboard with analytics</p>
          </div>
        </div>
      </div>
    </div>

    <div class="md:order-1 relative reveal">
      <div class="card rounded-2xl overflow-hidden">
        <img src="assets/portfolio/maintenance.png" alt="Maintenance Management System dashboard preview" class="w-full h-75 object-cover">
        <div class="p-5 flex justify-between items-center gap-3">
          <div>
            <h4 class="font-semibold text-navy text-sm">Maintenance Dashboard</h4>
            <p class="text-xs text-slate">Real-time tracking &middot; Automated workflows</p>
          </div>
          <span class="bg-navy text-white px-3 py-1 rounded-full text-xs whitespace-nowrap">Full Stack</span>
        </div>
      </div>
      <div class="absolute -bottom-4 -left-4 bg-accent text-white px-3 py-1 rounded-full text-sm shadow-lg">
        Complex Workflow
      </div>
    </div>
  </div>
</section>

<!-- ============================ Health Information System ============================ -->
<section id="his" class="py-20 md:py-28 bg-white">
  <div class="container mx-auto px-4 md:px-6">
    <div class="text-center max-w-2xl mx-auto mb-16 reveal">
      <div class="icon-tile bg-accent mb-5 mx-auto"><i class="fas fa-notes-medical"></i></div>
      <h2 class="text-3xl font-display font-bold text-navy mb-4">Health Information System</h2>
      <p class="text-lg text-slate">A specialized system for managing health programs (TB, Malaria, HIV) with client registration and API integration.</p>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
      <div class="card rounded-2xl p-6 md:p-8 reveal">
        <h3 class="text-xl font-display font-semibold text-navy mb-4">System Overview</h3>
        <p class="text-slate mb-6">Designed to help doctors manage health programs and register clients, with API access for integration with other healthcare systems.</p>

        <a href="https://cema-health-information-system.vercel.app/" target="_blank" rel="noopener" class="inline-flex items-center text-primary font-semibold mb-2 group">
          Access Demo Site
          <i class="fas fa-arrow-up-right-from-square ml-2 text-sm transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5"></i>
        </a>
        <!-- Demo credentials redacted — see note in the MMS section above. -->
        <p class="text-sm text-slate mb-6">Demo login available on request — <a href="contact.php" class="text-primary font-medium">contact us</a>.</p>

        <div class="flex flex-wrap gap-2 mb-6">
          <span class="bg-accent/10 text-accent px-3 py-1 rounded-full text-sm font-medium">Next.js</span>
          <span class="bg-accent/10 text-accent px-3 py-1 rounded-full text-sm font-medium">Supabase</span>
          <span class="bg-accent/10 text-accent px-3 py-1 rounded-full text-sm font-medium">Tailwind CSS</span>
          <span class="bg-accent/10 text-accent px-3 py-1 rounded-full text-sm font-medium">REST API</span>
        </div>

        <h3 class="font-semibold text-navy mb-3">Core Functionality:</h3>
        <div class="space-y-2">
          <div class="flex items-start gap-3">
            <i class="fas fa-circle-check text-accent mt-1 text-sm"></i>
            <p class="text-slate text-sm">Create and manage health programs (TB, Malaria, HIV)</p>
          </div>
          <div class="flex items-start gap-3">
            <i class="fas fa-circle-check text-accent mt-1 text-sm"></i>
            <p class="text-slate text-sm">Register clients and enroll them in programs</p>
          </div>
          <div class="flex items-start gap-3">
            <i class="fas fa-circle-check text-accent mt-1 text-sm"></i>
            <p class="text-slate text-sm">API endpoints for client data access</p>
          </div>
          <div class="flex items-start gap-3">
            <i class="fas fa-circle-check text-accent mt-1 text-sm"></i>
            <p class="text-slate text-sm">Search and filter capabilities</p>
          </div>
        </div>
      </div>

      <!-- Signature terminal-style API doc mockup, matching the homepage hero -->
      <div class="terminal-card reveal">
        <div class="terminal-chrome">
          <span class="terminal-dot" style="background:#FF5F56"></span>
          <span class="terminal-dot" style="background:#FFBD2E"></span>
          <span class="terminal-dot" style="background:#27C93F"></span>
          <span class="text-white/40 text-xs ml-2 self-center">API Reference</span>
        </div>
        <div class="p-6 text-[13px] text-white/90">
          <div class="flex items-center gap-3 mb-3">
            <span class="bg-accent text-white px-2 py-1 rounded text-xs font-mono">GET</span>
            <span class="font-mono text-white/80">/api/clients/:id</span>
          </div>
          <p class="text-white/60 mb-4">Retrieve a client's full profile, including enrolled programs.</p>
          <pre class="bg-black/30 rounded-lg p-4 text-white/80 overflow-x-auto mb-4"><code>{
            "id": "client-id",
            "name": "John Doe",
            "phone": "0700000000",
            "programs": ["TB", "Malaria"]
            }</code></pre>
          <p class="text-white/50 text-xs mb-5">Future enhancements will include JWT authentication and more endpoints.</p>

          <h4 class="font-semibold text-white mb-3 text-sm">Future Roadmap</h4>
          <div class="space-y-2">
            <div class="flex items-start gap-3">
              <span class="bg-accent text-white rounded-full w-5 h-5 flex items-center justify-center flex-shrink-0 text-xs mt-0.5">1</span>
              <span class="text-white/70">Role-based access (Doctor, Admin, Nurse)</span>
            </div>
            <div class="flex items-start gap-3">
              <span class="bg-accent text-white rounded-full w-5 h-5 flex items-center justify-center flex-shrink-0 text-xs mt-0.5">2</span>
              <span class="text-white/70">Appointment and visit scheduling</span>
            </div>
            <div class="flex items-start gap-3">
              <span class="bg-accent text-white rounded-full w-5 h-5 flex items-center justify-center flex-shrink-0 text-xs mt-0.5">3</span>
              <span class="text-white/70">Advanced search and reporting</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================ Unity Tailors Initiative ============================ -->
<section id="unity" class="py-20 md:py-28 bg-navy text-white relative overflow-hidden">

  <!-- Subtle decorative texture, keeps the luxury tone without a stock photo -->
  <div class="absolute inset-0 opacity-[0.04] pointer-events-none"
       style="background-image: radial-gradient(circle, #fff 1px, transparent 1px); background-size: 24px 24px;"></div>

  <div class="container relative mx-auto px-4 md:px-6 grid md:grid-cols-2 gap-14 items-center">

    <div class="reveal">
      <span class="section-eyebrow bg-white/10 text-accent">
        <i class="fas fa-scissors"></i> Bespoke E-Commerce
      </span>
      <h2 class="font-display text-3xl font-bold mt-5 mb-4 tracking-tight">
        Unity Tailors <span class="text-accent">Initiative</span>
      </h2>
      <p class="text-lg text-white/70 mb-5 leading-relaxed">
        A digital atelier for a Nairobi-based bespoke tailoring house — built to carry the same
        precision online that Unity Tailors brings to every hand-finished garment.
      </p>

      <a href="https://unity-tailors-initiative.vercel.app/about" target="_blank" rel="noopener"
         class="inline-flex items-center text-accent font-semibold mb-6 group">
        Visit Live Site
        <i class="fas fa-arrow-up-right-from-square ml-2 text-sm transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5"></i>
      </a>

      <div class="flex flex-wrap gap-2 mb-8">
        <span class="bg-white/10 text-white px-3 py-1 rounded-full text-sm font-medium">Next.js</span>
        <span class="bg-white/10 text-white px-3 py-1 rounded-full text-sm font-medium">Waitlist System</span>
        <span class="bg-white/10 text-white px-3 py-1 rounded-full text-sm font-medium">Digital Lookbook</span>
        <span class="bg-white/10 text-white px-3 py-1 rounded-full text-sm font-medium">Video-Led Design</span>
      </div>

      <div class="space-y-3">
        <div class="flex items-start gap-3">
          <i class="fas fa-circle-check text-accent mt-1"></i>
          <p class="text-white/75">Cinematic, video-led storytelling that mirrors the brand's craftsmanship</p>
        </div>
        <div class="flex items-start gap-3">
          <i class="fas fa-circle-check text-accent mt-1"></i>
          <p class="text-white/75">Digital lookbook and service/pricing pages for a fully self-serve experience</p>
        </div>
        <div class="flex items-start gap-3">
          <i class="fas fa-circle-check text-accent mt-1"></i>
          <p class="text-white/75">Waitlist capture for early access ahead of the full digital atelier launch</p>
        </div>
      </div>
    </div>

    <div class="relative reveal">
      <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden shadow-2xl backdrop-blur-sm">
        <img src="assets/portfolio/unity2.png" alt="Unity Tailors Initiative website preview" class="w-full h-80 object-cover">
        <div class="p-5 flex justify-between items-center">
          <div>
            <h4 class="font-display font-semibold text-white text-sm">Unity Tailors Initiative</h4>
            <p class="text-white/50 text-xs">Bespoke Tailoring &middot; Nairobi</p>
          </div>
          <a href="https://unity-tailors-initiative.vercel.app/about" target="_blank" rel="noopener"
             class="text-accent hover:text-white text-sm font-semibold flex items-center transition-colors">
            Visit Site <i class="fas fa-arrow-right ml-1 text-xs"></i>
          </a>
        </div>
      </div>
      <div class="absolute -top-4 -right-4 bg-accent text-white px-3 py-1 rounded-full text-sm shadow-lg font-medium">
        Luxury Brand
      </div>
    </div>
  </div>
</section>

<!-- ============================ Final CTA ============================ -->
<section class="py-20 hero-section text-white text-center">
  <div class="container mx-auto px-4 md:px-6 reveal">
    <h2 class="text-3xl md:text-4xl font-display font-bold mb-6">Have a Project in Mind?</h2>
    <p class="text-lg text-white/75 mb-8 max-w-2xl mx-auto">Let's collaborate to bring your digital ideas to life with our expertise.</p>
    <div class="flex flex-wrap justify-center gap-4">
      <a href="contact.php" class="btn-primary inline-block px-8 py-4 rounded-lg text-lg font-semibold">
        Get in Touch
      </a>
      <a href="services.php" class="btn-outline inline-block px-8 py-4 rounded-lg text-lg font-semibold">
        View Our Services
      </a>
    </div>
  </div>
</section>

<?php require 'partials/footer.php'; ?>