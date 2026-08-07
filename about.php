<?php
$pageTitle       = 'About Us | Omeka Digital';
$pageDescription = 'Meet the team behind Omeka Digital and learn about our mission, vision, and values as a Nairobi-based software development studio.';
$currentPage     = 'about.php';
require 'partials/header.php';
require 'partials/navbar.php';
?>

<!-- ============================ Page hero ============================ -->
<section class="relative text-white py-20 md:py-40 overflow-hidden">

  <!-- Background image -->
  <img src="assets/images/hero4.png" alt=""
       class="absolute inset-0 w-full h-full object-cover" loading="eager">

  <!-- Dark overlay for text legibility — reuses your navy brand gradient -->
  <div class="absolute inset-0 bg-gradient-to-b from-navy/30 via-navy/85 to-navy-soft/30"></div>

  <!-- Content sits above both -->
  <div class="container relative z-10 mx-auto px-4 md:px-6 text-center reveal">
    <span class="section-eyebrow bg-white/85 text-accent">
      <i class="fas fa-people-group"></i> About Omeka Digital
    </span>
    <h1 class="text-4xl md:text-5xl font-display font-bold mt-6 mb-4">Our Story</h1>
    <p class="text-lg text-white/75 max-w-2xl mx-auto">Building digital solutions with purpose, for businesses across Africa.</p>
  </div>
</section>

<!-- ============================ Who we are ============================ -->
<section class="py-20 md:py-28 bg-surface">
  <div class="container mx-auto px-4 md:px-6 grid lg:grid-cols-2 gap-16 items-center">
    <div class="reveal">
      <span class="section-eyebrow">Who We Are</span>
      <h2 class="text-3xl md:text-4xl font-display font-bold mt-4 mb-6 text-navy">A Team Driven by Purpose</h2>
      <p class="text-lg text-slate mb-5">
        At <span class="text-accent font-semibold">Omeka Digital</span>, we're a team of software engineers, designers, and
        digital strategists dedicated to building scalable, efficient, and well-crafted web applications.
      </p>
      <p class="text-lg text-slate mb-8">
        Our mission is to empower startups and businesses in Africa with world-class digital solutions that solve
        real-world problems. We thrive on innovation, collaboration, and excellence.
      </p>
      <div class="flex flex-wrap gap-4">
        <a href="#mission" class="btn-primary px-6 py-3 rounded-lg font-semibold">Our Mission &amp; Values</a>
        <a href="services.php" class="btn-outline on-light px-6 py-3 rounded-lg font-semibold">Explore Our Services</a>
      </div>
    </div>

    <div class="reveal">
      <img src="assets/images/about-us.png" alt="The Omeka Digital team working together" class="rounded-2xl shadow-xl w-full h-auto" loading="lazy">
    </div>
  </div>
</section>

<!-- ============================ Mission / Vision / Values ============================ -->
<section class="py-20 md:py-28 bg-white" id="mission">
  <div class="container mx-auto px-4 md:px-6 grid lg:grid-cols-2 gap-16 items-center">
    <div class="reveal">
      <span class="section-eyebrow">Why We Exist</span>
      <h2 class="text-3xl md:text-4xl font-display font-bold mt-4 mb-8 text-navy">What Drives Us</h2>

      <div class="space-y-6">
        <div class="flex items-start gap-4">
          <div class="icon-tile bg-accent flex-shrink-0">
            <i class="fas fa-bolt"></i>
          </div>
          <div>
            <h3 class="text-lg font-display font-semibold mb-1 text-navy">Our Mission</h3>
            <p class="text-slate">To empower businesses through digital solutions that solve real problems and drive measurable growth.</p>
          </div>
        </div>
        <div class="flex items-start gap-4">
          <div class="icon-tile bg-primary flex-shrink-0">
            <i class="fas fa-eye"></i>
          </div>
          <div>
            <h3 class="text-lg font-display font-semibold mb-1 text-navy">Our Vision</h3>
            <p class="text-slate">To be the most trusted digital partner for SMEs looking to transform their operations through technology.</p>
          </div>
        </div>
        <div class="flex items-start gap-4">
          <div class="icon-tile bg-navy flex-shrink-0">
            <i class="fas fa-compass"></i>
          </div>
          <div>
            <h3 class="text-lg font-display font-semibold mb-1 text-navy">Our Values</h3>
            <p class="text-slate">Integrity, innovation, a client-centric approach, continuous learning, and excellence in execution.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="rounded-2xl overflow-hidden shadow-xl reveal">
      <img src="assets/images/hero6.png" alt="Team collaborating on a project" class="w-full h-96 object-cover">
    </div>
  </div>
</section>

<!-- ============================ Team ============================ -->
<section class="py-20 md:py-28 bg-surface">
  <div class="container mx-auto px-4 md:px-6">
    <div class="text-center max-w-2xl mx-auto mb-16 reveal">
      <span class="section-eyebrow">Our People</span>
      <h2 class="text-3xl md:text-4xl font-display font-bold mt-4 text-navy">Meet The Founders</h2>
      <p class="text-slate mt-4">A small, hands-on team — every project gets our direct attention.</p>
    </div>

    <div class="grid md:grid-cols-2 gap-8 max-w-3xl mx-auto">

      <!-- John Paul -->
      <div class="card rounded-2xl p-8 text-center reveal">
        <img src="assets/images/about/team/john-paul.png" alt="John Paul, Founder & CEO"
             class="w-40 h-40 rounded-full object-cover object-top border-4 border-white shadow-md mx-auto mb-5">
        <h3 class="text-xl font-display font-semibold text-navy">John Paul</h3>
        <p class="text-accent text-sm font-medium mb-3">Founder &amp; CEO &middot; Core Developer</p>
        <p class="text-slate text-sm mb-4">Leads Omeka Digital's vision and stays hands-on in the codebase, building the core systems behind every project we ship.</p>
        <div class="flex justify-center gap-3">
          <a href="#" class="social-icon !bg-navy/10 !text-navy hover:!bg-accent hover:!text-white" aria-label="LinkedIn"><i class="fab fa-linkedin-in text-sm"></i></a>
          <a href="#" class="social-icon !bg-navy/10 !text-navy hover:!bg-accent hover:!text-white" aria-label="GitHub"><i class="fab fa-github text-sm"></i></a>
        </div>
      </div>

      <!-- Arnold Ekaka Rinyo -->
      <div class="card rounded-2xl p-8 text-center reveal">
        <div class="w-40 h-40 rounded-full bg-gradient-to-br from-navy via-navy-soft to-primary-dark border-4 border-white shadow-md mx-auto mb-5 flex items-center justify-center">
          <span class="font-display text-3xl font-bold text-white/90">AE</span>
        </div>
        <h3 class="text-xl font-display font-semibold text-navy">Arnold Ekaka Rinyo</h3>
        <p class="text-accent text-sm font-medium mb-3">CTO &amp; Marketing Officer</p>
        <p class="text-slate text-sm mb-4">Drives the technical architecture behind our products and shapes how Omeka Digital's work reaches the businesses we serve.</p>
        <div class="flex justify-center gap-3">
          <a href="#" class="social-icon !bg-navy/10 !text-navy hover:!bg-accent hover:!text-white" aria-label="LinkedIn"><i class="fab fa-linkedin-in text-sm"></i></a>
          <a href="#" class="social-icon !bg-navy/10 !text-navy hover:!bg-accent hover:!text-white" aria-label="GitHub"><i class="fab fa-github text-sm"></i></a>
        </div>
      </div>
    </div>

    <div class="text-center mt-12 reveal">
      <a href="contact.php" class="btn-outline on-light inline-block px-8 py-3.5 rounded-lg font-semibold">
        Interested in Joining Us?
      </a>
    </div>
  </div>
</section>

<!-- ============================ Stats ============================ -->
<!-- Note: figures below are placeholders — swap in Omeka Digital's real numbers before launch. -->
<section class="py-20 hero-section text-white">
  <div class="container mx-auto px-4 md:px-6">
    <h2 class="text-3xl font-display font-bold mb-16 text-center reveal">By The Numbers</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center reveal">
      <div>
        <p class="text-4xl md:text-5xl font-display font-bold mb-2 text-accent">50+</p>
        <p class="text-white/70 text-sm">Happy Clients</p>
      </div>
      <div>
        <p class="text-4xl md:text-5xl font-display font-bold mb-2 text-accent">120+</p>
        <p class="text-white/70 text-sm">Projects Completed</p>
      </div>
      <div>
        <p class="text-4xl md:text-5xl font-display font-bold mb-2 text-accent">15</p>
        <p class="text-white/70 text-sm">Team Members</p>
      </div>
      <div>
        <p class="text-4xl md:text-5xl font-display font-bold mb-2 text-accent">5</p>
        <p class="text-white/70 text-sm">Countries Served</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================ CTA ============================ -->
<section class="py-20 md:py-28 bg-white text-center">
  <div class="container mx-auto px-4 md:px-6 reveal">
    <h2 class="text-3xl md:text-4xl font-display font-bold mb-6 text-navy">Ready to Start Your Project?</h2>
    <p class="text-lg text-slate mb-8 max-w-2xl mx-auto">We'd love to hear about your ideas and how we can help bring them to life.</p>
    <a href="contact.php" class="btn-primary inline-block px-10 py-4 rounded-full text-lg font-bold">
      Get in Touch
    </a>
  </div>
</section>

<?php require 'partials/footer.php'; ?>