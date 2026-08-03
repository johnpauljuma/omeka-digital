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
<!-- Note: names, roles and bios below are placeholders — replace with your real team. -->
<section class="py-20 md:py-28 bg-surface">
  <div class="container mx-auto px-4 md:px-6">
    <div class="text-center max-w-2xl mx-auto mb-16 reveal">
      <span class="section-eyebrow">Our People</span>
      <h2 class="text-3xl md:text-4xl font-display font-bold mt-4 text-navy">Meet The Team</h2>
      <p class="text-slate mt-4">The professionals behind Omeka Digital's work. (Sample profiles — swap in your real team.)</p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <div class="card rounded-2xl overflow-hidden reveal">
        <div class="h-56 bg-navy flex items-center justify-center">
          <i class="fas fa-user-tie text-white/80 text-5xl"></i>
        </div>
        <div class="p-6 text-center">
          <h3 class="text-lg font-display font-semibold text-navy">Team Member</h3>
          <p class="text-accent text-sm mb-3">CEO &amp; Founder</p>
          <p class="text-slate text-sm">Years of experience in software development and digital strategy.</p>
        </div>
      </div>

      <div class="card rounded-2xl overflow-hidden reveal">
        <div class="h-56 bg-navy flex items-center justify-center">
          <i class="fas fa-code text-white/80 text-5xl"></i>
        </div>
        <div class="p-6 text-center">
          <h3 class="text-lg font-display font-semibold text-navy">Team Member</h3>
          <p class="text-accent text-sm mb-3">CTO</p>
          <p class="text-slate text-sm">Full-stack developer specializing in scalable architectures.</p>
        </div>
      </div>

      <div class="card rounded-2xl overflow-hidden reveal">
        <div class="h-56 bg-navy flex items-center justify-center">
          <i class="fas fa-palette text-white/80 text-5xl"></i>
        </div>
        <div class="p-6 text-center">
          <h3 class="text-lg font-display font-semibold text-navy">Team Member</h3>
          <p class="text-accent text-sm mb-3">Creative Director</p>
          <p class="text-slate text-sm">UX/UI specialist with a passion for human-centered design.</p>
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