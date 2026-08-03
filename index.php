<?php
$pageTitle       = 'Omeka Digital | Custom Software, Web & Mobile Development in Nairobi';
$pageDescription = 'We design, build, and support reliable business systems, websites, and mobile apps.';
$currentPage     = 'index.php';
require 'partials/header.php';
require 'partials/navbar.php';
?>

<!-- ============================ Hero ============================ -->
<section class="hero-section text-white pt-16 pb-24 md:pt-24 md:pb-32 overflow-hidden">
  <div class="container mx-auto px-4 md:px-6 grid lg:grid-cols-2 gap-16 items-center">

    <div>
      <span class="section-eyebrow bg-white/10 text-white">
        <i class="fas fa-circle-nodes"></i> Software &amp; Digital Solutions
      </span>

      <h1 class="text-4xl md:text-5xl xl:text-[3.25rem] font-display font-bold leading-[1.1] mt-6 mb-6 fade-up" style="animation-delay:0.1s">
        Custom Software, Built to <span class="text-accent">Scale With You</span>
      </h1>

      <p class="text-lg text-white/75 mb-8 max-w-xl fade-up" style="animation-delay:0.25s">
        We design, build, and support reliable business systems, websites, and mobile apps —
        so your team can work smarter and grow with confidence.
      </p>

      <div class="flex flex-col sm:flex-row gap-4 fade-up" style="animation-delay:0.4s">
        <a href="contact.php" class="btn-primary px-8 py-3.5 rounded-lg font-semibold text-center">
          Start a Project
        </a>
        <a href="portfolio.php" class="btn-outline px-8 py-3.5 rounded-lg font-semibold text-center">
          View Our Work
        </a>
      </div>

      <div class="mt-12 flex items-center gap-5 fade-up" style="animation-delay:0.55s">
        <div class="flex -space-x-3">
          <img src="assets/images/hero-icon1.png" class="w-11 h-11 rounded-full border-2 border-navy object-cover" alt="Client">
          <img src="assets/images/hero-icon2.png" class="w-11 h-11 rounded-full border-2 border-navy object-cover" alt="Client">
          <img src="assets/images/hero-icon4.png" class="w-11 h-11 rounded-full border-2 border-navy object-cover" alt="Client">
        </div>
        <div>
          <div class="flex gap-0.5 text-sm">
            <i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i>
          </div>
          <p class="text-sm text-white/70 mt-1">Trusted by growing businesses</p>
        </div>
      </div>
    </div>

    <!-- Visual: photo + signature terminal card -->
    <div class="relative hero-visual">
      <div class="rounded-2xl overflow-hidden shadow-2xl border border-white/10">
        <img src="assets/images/hero3.png" alt="Omeka Digital engineers at work" class="w-full h-80 md:h-96 object-cover">
      </div>

      <!-- Signature element: mock deploy terminal -->
      <div class="terminal-card absolute -bottom-10 -left-6 md:-left-10 w-72 md:w-80">
        <div class="terminal-chrome">
          <span class="terminal-dot" style="background:#FF5F56"></span>
          <span class="terminal-dot" style="background:#FFBD2E"></span>
          <span class="terminal-dot" style="background:#27C93F"></span>
        </div>
        <div class="p-4 text-[13px] leading-relaxed text-white/90">
          <p class="terminal-line" style="animation-delay:0.9s"><span class="text-accent">$</span> omeka deploy --env production</p>
          <p class="terminal-line" style="animation-delay:1.3s"><i class="fas fa-check text-green-400 mr-1"></i> build passed &middot; 128/128 tests</p>
          <p class="terminal-line" style="animation-delay:1.7s"><i class="fas fa-check text-green-400 mr-1"></i> deployed in 41s</p>
          <p class="terminal-line cursor-blink" style="animation-delay:2.1s"><span class="text-green-400">●</span> status: live</p>
        </div>
      </div>

      <div class="absolute -top-6 -right-4 md:-right-8 bg-white text-ink p-4 rounded-xl shadow-lg hidden sm:flex items-center gap-3">
        <div class="bg-green-100 p-2 rounded-full">
          <i class="fas fa-arrow-trend-up text-green-600"></i>
        </div>
        <div>
          <p class="text-xs text-slate">Client outcome</p>
          <p class="font-bold text-sm">+42% efficiency</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================ Stats strip ============================ -->
<!-- Note: figures below are placeholders — swap in Omeka Digital's real numbers before launch. -->
<section class="bg-white border-b border-border">
  <div class="container mx-auto px-4 md:px-6 py-10 grid grid-cols-2 md:grid-cols-4 gap-8">
    <div class="stat-card pl-4">
      <p class="text-3xl font-display font-bold text-navy">30+</p>
      <p class="text-sm text-slate mt-1">Projects delivered</p>
    </div>
    <div class="stat-card pl-4">
      <p class="text-3xl font-display font-bold text-navy">98%</p>
      <p class="text-sm text-slate mt-1">Client satisfaction</p>
    </div>
    <div class="stat-card pl-4">
      <p class="text-3xl font-display font-bold text-navy">&lt;24h</p>
      <p class="text-sm text-slate mt-1">Support response time</p>
    </div>
    <div class="stat-card pl-4">
      <p class="text-3xl font-display font-bold text-navy">10+</p>
      <p class="text-sm text-slate mt-1">Technologies mastered</p>
    </div>
  </div>
</section>

<!-- ============================ About preview ============================ -->
<section class="py-20 md:py-28 bg-surface">
  <div class="container mx-auto px-4 md:px-6">
    <div class="flex flex-col lg:flex-row items-center gap-16">

      <div class="lg:w-1/2 reveal">
        <span class="section-eyebrow">Who We Are</span>
        <h2 class="text-3xl md:text-4xl font-display font-bold mt-4 mb-6 leading-tight text-navy">
          Building Reliable <span class="text-primary">Digital Products</span>
        </h2>
        <p class="text-lg text-slate mb-8">
          Omeka Digital is a Nairobi-based software development studio focused on building
          practical, scalable, and user-friendly solutions. We work closely with our clients
          to understand their needs and turn ideas into working products.
        </p>

        <div class="space-y-4">
          <div class="flex items-start gap-3">
            <div class="h-6 w-6 rounded-full bg-primary/10 flex items-center justify-center mt-0.5 flex-shrink-0">
              <i class="fas fa-check text-primary text-xs"></i>
            </div>
            <p class="text-slate">Client-focused approach with clear communication</p>
          </div>
          <div class="flex items-start gap-3">
            <div class="h-6 w-6 rounded-full bg-primary/10 flex items-center justify-center mt-0.5 flex-shrink-0">
              <i class="fas fa-check text-primary text-xs"></i>
            </div>
            <p class="text-slate">Modern technologies and clean, maintainable code</p>
          </div>
          <div class="flex items-start gap-3">
            <div class="h-6 w-6 rounded-full bg-primary/10 flex items-center justify-center mt-0.5 flex-shrink-0">
              <i class="fas fa-check text-primary text-xs"></i>
            </div>
            <p class="text-slate">Flexible, agile, and always improving</p>
          </div>
        </div>

        <a href="about.php" class="inline-flex items-center mt-10 text-primary font-semibold group">
          Learn more about us
          <i class="fas fa-arrow-right ml-2 text-sm transition-transform group-hover:translate-x-1"></i>
        </a>
      </div>

      <div class="lg:w-1/2 relative reveal">
        <div class="relative rounded-2xl overflow-hidden shadow-xl">
          <img src="assets/images/who-we-are.png" alt="The Omeka Digital team collaborating" class="w-full h-96 object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-navy/70 via-navy/10 to-transparent flex items-end p-6">
            <div>
              <p class="text-white/80 text-sm mb-1">Behind the scenes</p>
              <h3 class="text-white text-xl font-display font-semibold">Building Together</h3>
            </div>
          </div>
        </div>

        <div class="absolute -bottom-8 -left-8 bg-white p-5 rounded-xl shadow-lg hidden lg:flex items-center gap-4">
          <div class="icon-tile bg-accent">
            <i class="fas fa-bolt"></i>
          </div>
          <div>
            <p class="text-xs text-slate">What we value</p>
            <p class="font-semibold text-ink">Quality &middot; Trust &middot; Growth</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================ Services preview ============================ -->
<section class="py-20 md:py-28 bg-white">
  <div class="container mx-auto px-4 md:px-6">
    <div class="text-center max-w-2xl mx-auto mb-16 reveal">
      <span class="section-eyebrow">What We Do</span>
      <h2 class="text-3xl md:text-4xl font-display font-bold mt-4 text-navy">Software Services That Fit Your Business</h2>
      <p class="text-slate mt-4">From a first prototype to a full production system — we cover the whole stack.</p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

      <div class="card rounded-2xl p-8 reveal">
        <img src="assets/icons/system-dev2.png" alt="" class="w-16 h-16 rounded-xl mb-5 object-cover" />
        <h3 class="text-lg font-display font-semibold mb-2 text-navy">System Development</h3>
        <p class="text-slate text-sm">We build reliable business systems, from CRMs to ERPs, tailored to your operations.</p>
      </div>

      <div class="card rounded-2xl p-8 reveal">
        <img src="assets/icons/web-design.png" alt="" class="w-16 h-16 rounded-xl mb-5 object-cover" />
        <h3 class="text-lg font-display font-semibold mb-2 text-navy">Web Design &amp; Development</h3>
        <p class="text-slate text-sm">Clean, responsive, and engaging websites that work across every device.</p>
      </div>

      <div class="card rounded-2xl p-8 reveal">
        <img src="assets/icons/api.png" alt="" class="w-16 h-16 rounded-xl mb-5 object-cover" />
        <h3 class="text-lg font-display font-semibold mb-2 text-navy">API &amp; Integrations</h3>
        <p class="text-slate text-sm">We connect your systems to the APIs, payment gateways, and tools you already use.</p>
      </div>

      <div class="card rounded-2xl p-8 reveal">
        <img src="assets/icons/mobile-dev.png" alt="" class="w-16 h-16 rounded-xl mb-5 object-cover" />
        <h3 class="text-lg font-display font-semibold mb-2 text-navy">Mobile App Development</h3>
        <p class="text-slate text-sm">Robust Android &amp; iOS apps with clean UI and scalable architecture.</p>
      </div>

      <div class="card rounded-2xl p-8 reveal">
        <img src="assets/icons/cloud.png" alt="" class="w-16 h-16 rounded-xl mb-5 object-cover" />
        <h3 class="text-lg font-display font-semibold mb-2 text-navy">Cloud Solutions</h3>
        <p class="text-slate text-sm">We deploy cloud-first systems that are secure, scalable, and cost-effective.</p>
      </div>

      <div class="card rounded-2xl p-8 reveal">
        <div class="icon-tile bg-navy mb-5">
          <i class="fas fa-headset"></i>
        </div>
        <h3 class="text-lg font-display font-semibold mb-2 text-navy">Technical Support</h3>
        <p class="text-slate text-sm">Ongoing maintenance, updates, and real-time support for everything we build.</p>
      </div>
    </div>

    <div class="text-center mt-12 reveal">
      <a href="services.php" class="inline-flex items-center text-primary font-semibold group">
        See all services
        <i class="fas fa-arrow-right ml-2 text-sm transition-transform group-hover:translate-x-1"></i>
      </a>
    </div>
  </div>
</section>

<!-- ============================ Process ============================ -->
<section class="py-20 md:py-28 bg-surface">
  <div class="container mx-auto px-4 md:px-6">
    <div class="text-center max-w-2xl mx-auto mb-16 reveal">
      <span class="section-eyebrow"><i class="fas fa-diagram-project"></i> Our Process</span>
      <h2 class="text-3xl md:text-4xl font-display font-bold mt-4 text-navy">How We Bring Ideas to Life</h2>
      <p class="text-slate mt-4">A simple, transparent process designed to deliver quality and clarity at every stage.</p>
    </div>

    <div class="relative max-w-3xl mx-auto">
      <div class="timeline-line absolute left-6 top-0 bottom-0 w-px md:left-1/2"></div>

      <div class="space-y-10">
        <!-- Step 1 -->
        <div class="relative flex items-start gap-6 reveal">
          <div class="step-badge w-12 h-12 rounded-full flex items-center justify-center text-white font-display font-bold flex-shrink-0 z-10">1</div>
          <div class="pt-1.5">
            <h3 class="text-lg font-display font-semibold text-navy flex items-center gap-2">
              <i class="fas fa-magnifying-glass text-accent text-sm"></i> Discovery &amp; Planning
            </h3>
            <p class="text-slate mt-2">We start by understanding your vision, goals, and challenges, turning them into a clear, actionable roadmap.</p>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="relative flex items-start gap-6 reveal">
          <div class="step-badge w-12 h-12 rounded-full flex items-center justify-center text-white font-display font-bold flex-shrink-0 z-10">2</div>
          <div class="pt-1.5">
            <h3 class="text-lg font-display font-semibold text-navy flex items-center gap-2">
              <i class="fas fa-palette text-accent text-sm"></i> Design &amp; Prototyping
            </h3>
            <p class="text-slate mt-2">We craft intuitive designs and interactive prototypes so you can see and shape the solution early.</p>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="relative flex items-start gap-6 reveal">
          <div class="step-badge w-12 h-12 rounded-full flex items-center justify-center text-white font-display font-bold flex-shrink-0 z-10">3</div>
          <div class="pt-1.5">
            <h3 class="text-lg font-display font-semibold text-navy flex items-center gap-2">
              <i class="fas fa-code text-accent text-sm"></i> Development
            </h3>
            <p class="text-slate mt-2">Using modern technologies and best practices, we build scalable, secure, and maintainable software.</p>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="relative flex items-start gap-6 reveal">
          <div class="step-badge w-12 h-12 rounded-full flex items-center justify-center text-white font-display font-bold flex-shrink-0 z-10">4</div>
          <div class="pt-1.5">
            <h3 class="text-lg font-display font-semibold text-navy flex items-center gap-2">
              <i class="fas fa-vial text-accent text-sm"></i> Testing &amp; Quality Assurance
            </h3>
            <p class="text-slate mt-2">We test thoroughly across devices and scenarios to ensure stability, performance, and security.</p>
          </div>
        </div>

        <!-- Step 5 -->
        <div class="relative flex items-start gap-6 reveal">
          <div class="step-badge w-12 h-12 rounded-full flex items-center justify-center text-white font-display font-bold flex-shrink-0 z-10">5</div>
          <div class="pt-1.5">
            <h3 class="text-lg font-display font-semibold text-navy flex items-center gap-2">
              <i class="fas fa-rocket text-accent text-sm"></i> Deployment &amp; Training
            </h3>
            <p class="text-slate mt-2">Seamless deployment and hands-on training so your team is confident using the new solution.</p>
          </div>
        </div>

        <!-- Step 6 -->
        <div class="relative flex items-start gap-6 reveal">
          <div class="step-badge w-12 h-12 rounded-full flex items-center justify-center text-white font-display font-bold flex-shrink-0 z-10">6</div>
          <div class="pt-1.5">
            <h3 class="text-lg font-display font-semibold text-navy flex items-center gap-2">
              <i class="fas fa-headset text-accent text-sm"></i> Ongoing Support
            </h3>
            <p class="text-slate mt-2">We continue to support, improve, and optimize your product as your business grows.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================ Why choose us ============================ -->
<section class="py-20 md:py-28 bg-white">
  <div class="container mx-auto px-4 md:px-6">
    <div class="text-center max-w-2xl mx-auto mb-16 reveal">
      <span class="section-eyebrow">Why Omeka</span>
      <h2 class="text-3xl md:text-4xl font-display font-bold mt-4 text-navy">Why Choose Omeka Digital?</h2>
      <p class="text-slate mt-4">We combine solid engineering with thoughtful design to build software your users actually enjoy.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
      <div class="card rounded-2xl p-8 reveal">
        <div class="icon-tile bg-primary mb-6">
          <i class="fas fa-swatchbook"></i>
        </div>
        <h3 class="text-lg font-display font-semibold mb-2 text-navy">Thoughtful Design</h3>
        <p class="text-slate text-sm">Every screen is crafted with care to create interfaces that are clear, usable, and easy to love.</p>
      </div>

      <div class="card rounded-2xl p-8 reveal">
        <div class="icon-tile bg-navy mb-6">
          <i class="fas fa-bolt"></i>
        </div>
        <h3 class="text-lg font-display font-semibold mb-2 text-navy">Built for Speed</h3>
        <p class="text-slate text-sm">Optimized performance that keeps your users happy and your business running smoothly.</p>
      </div>

      <div class="card rounded-2xl p-8 reveal">
        <div class="icon-tile bg-accent mb-6">
          <i class="fas fa-handshake"></i>
        </div>
        <h3 class="text-lg font-display font-semibold mb-2 text-navy">Long-Term Partnership</h3>
        <p class="text-slate text-sm">We stick around after launch — quality, communication, and support you can count on.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================ Portfolio preview ============================ -->
<section class="py-20 md:py-28 bg-surface">
  <div class="container mx-auto px-4 md:px-6">
    <div class="text-center max-w-2xl mx-auto mb-12 reveal">
      <span class="section-eyebrow">Our Work</span>
      <h2 class="text-3xl md:text-4xl font-display font-bold mt-4 text-navy">Recent Projects</h2>
      <p class="text-slate mt-4">A few of the solutions we've built and shipped for real clients.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-6 mb-12">

      <a href="portfolio.php#ecoclean" class="card rounded-2xl overflow-hidden reveal block group">
        <div class="relative">
          <img src="assets/portfolio/eco-clean.png" alt="EcoClean Kenya website" class="w-full h-60 object-cover">
          <span class="absolute top-3 left-3 bg-navy/90 text-white text-xs font-medium px-3 py-1 rounded-full">Website</span>
        </div>
        <div class="p-6">
          <h3 class="text-lg font-display font-semibold text-navy mb-1">EcoClean Kenya</h3>
          <p class="text-slate text-sm mb-4">A modern site for an eco-friendly cleaning service provider.</p>
          <span class="text-primary text-sm font-semibold inline-flex items-center">
            View case study
            <i class="fas fa-arrow-right ml-2 text-xs transition-transform group-hover:translate-x-1"></i>
          </span>
        </div>
      </a>

      <a href="portfolio.php#mms" class="card rounded-2xl overflow-hidden reveal block group">
        <div class="relative">
          <img src="assets/portfolio/maintenance.png" alt="Maintenance Management System dashboard" class="w-full h-60 object-cover">
          <span class="absolute top-3 left-3 bg-navy/90 text-white text-xs font-medium px-3 py-1 rounded-full">Web App</span>
        </div>
        <div class="p-6">
          <h3 class="text-lg font-display font-semibold text-navy mb-1">Maintenance Management System</h3>
          <p class="text-slate text-sm mb-4">Real-time request tracking and automated technician assignment.</p>
          <span class="text-primary text-sm font-semibold inline-flex items-center">
            View case study
            <i class="fas fa-arrow-right ml-2 text-xs transition-transform group-hover:translate-x-1"></i>
          </span>
        </div>
      </a>

      <a href="portfolio.php#unity" class="card rounded-2xl overflow-hidden reveal block group">
        <div class="relative">
          <img src="assets/portfolio/unity2.png" alt="Unity Tailors Initiative website" class="w-full h-60 object-cover">
          <span class="absolute top-3 left-3 bg-accent/90 text-white text-xs font-medium px-3 py-1 rounded-full">Luxury Brand</span>
        </div>
        <div class="p-6">
          <h3 class="text-lg font-display font-semibold text-navy mb-1">Unity Tailors Initiative</h3>
          <p class="text-slate text-sm mb-4">A digital atelier for a Nairobi bespoke tailoring house.</p>
          <span class="text-primary text-sm font-semibold inline-flex items-center">
            View case study
            <i class="fas fa-arrow-right ml-2 text-xs transition-transform group-hover:translate-x-1"></i>
          </span>
        </div>
      </a>
    </div>

    <div class="text-center reveal">
      <a href="portfolio.php" class="btn-primary inline-block px-8 py-3.5 rounded-lg font-semibold">
        See Full Portfolio
      </a>
    </div>
  </div>
</section>

<!-- ============================ Testimonials ============================ -->
<!-- Note: sample quotes below are placeholders — replace with real client testimonials. -->
<section class="py-20 md:py-28 bg-white">
  <div class="container mx-auto px-4 md:px-6">
    <div class="text-center max-w-2xl mx-auto mb-16 reveal">
      <span class="section-eyebrow">Testimonials</span>
      <h2 class="text-3xl md:text-4xl font-display font-bold mt-4 text-navy">What Clients Say</h2>
      <p class="text-slate mt-4">Placeholder quotes — swap these for real feedback from your clients.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
      <div class="card rounded-2xl p-8 reveal">
        <div class="flex gap-0.5 mb-4 text-sm">
          <i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i>
        </div>
        <p class="text-slate mb-6">"The team took the time to understand our workflow before writing a single line of code. The final system fit exactly how we work."</p>
        <div class="flex items-center gap-3">
          <img src="assets/images/testimonials/tito.png" alt="Tito" class="w-11 h-11 rounded-full object-cover">
          <div>
            <p class="font-semibold text-ink text-sm">Tito</p>
            <p class="text-slate text-xs">Placeholder client</p>
          </div>
        </div>
      </div>

      <div class="card rounded-2xl p-8 reveal">
        <div class="flex gap-0.5 mb-4 text-sm">
          <i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i>
        </div>
        <p class="text-slate mb-6">"Communication was clear from day one, and support after launch has been fast whenever we've needed it."</p>
        <div class="flex items-center gap-3">
          <img src="assets/images/testimonials/mercy.png" alt="Mercy" class="w-11 h-11 rounded-full object-cover">
          <div>
            <p class="font-semibold text-ink text-sm">Mercy</p>
            <p class="text-slate text-xs">Placeholder client</p>
          </div>
        </div>
      </div>

      <div class="card rounded-2xl p-8 reveal">
        <div class="flex gap-0.5 mb-4 text-sm">
          <i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i><i class="fas fa-star star"></i>
        </div>
        <p class="text-slate mb-6">"Our new platform is faster and far easier to manage than what we had before. It's made a real difference day to day."</p>
        <div class="flex items-center gap-3">
          <img src="assets/images/testimonials/jp.png" alt="JP" class="w-11 h-11 rounded-full object-cover">
          <div>
            <p class="font-semibold text-ink text-sm">JP</p>
            <p class="text-slate text-xs">Placeholder client</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================ CTA ============================ -->
<section class="py-20 px-4 md:px-6 hero-section text-center">
  <div class="container mx-auto reveal">
    <h2 class="text-3xl md:text-4xl font-display font-bold text-white mb-6">Ready to Build Something Great?</h2>
    <p class="text-white/75 mb-8 max-w-2xl mx-auto">
      Let's turn your idea into a working product. Tell us about your project and our team will get back to you within a day.
    </p>
    <a href="contact.php" class="btn-primary inline-block px-10 py-4 rounded-full text-lg font-bold">
      Contact Us Today
    </a>
  </div>
</section>

<!-- ============================ Footer ============================ -->
<?php require 'partials/footer.php'; ?>

</body>
</html>
