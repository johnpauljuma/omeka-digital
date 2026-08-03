<?php
$pageTitle       = 'Our Services | Omeka Digital';
$pageDescription = 'Custom software systems, websites, mobile apps, API integrations, cloud solutions, and ongoing technical support from Omeka Digital.';
$currentPage     = 'services.php';
require 'partials/header.php';
require 'partials/navbar.php';
?>

<!-- ============================ Page hero ============================ -->
<section class="relative overflow-hidden text-white py-20 md:py-28">
  <!-- Background image -->
  <img src="assets/images/s-hero.png" alt=""
       class="absolute inset-0 w-full h-full object-cover" loading="eager">

  <!-- Dark overlay for text legibility — reuses your navy brand gradient -->
  <div class="absolute inset-0 bg-gradient-to-b from-navy/30 via-navy/85 to-navy-soft/30"></div>

  <div class="container relative z-10 mx-auto px-4 md:px-6 text-center reveal">
    <span class="section-eyebrow bg-white/10 text-white">
      <i class="fas fa-layer-group"></i> What We Offer
    </span>
    <h1 class="text-4xl md:text-5xl font-display font-bold mt-6 mb-4">Services Built Around Your Business</h1>
    <p class="text-lg text-white/75 max-w-2xl mx-auto mb-10">We turn complex technical challenges into reliable, well-designed solutions that help your business grow.</p>
    <div class="flex flex-wrap justify-center gap-3">
      <a href="#system-dev" class="btn-primary px-5 py-2.5 rounded-full text-sm font-semibold">Systems</a>
      <a href="#web-dev" class="btn-outline px-5 py-2.5 rounded-full text-sm font-semibold">Websites</a>
      <a href="#mobile-dev" class="btn-outline px-5 py-2.5 rounded-full text-sm font-semibold">Mobile Apps</a>
      <a href="#api-integrations" class="btn-outline px-5 py-2.5 rounded-full text-sm font-semibold">Integrations</a>
      <a href="#cloud-solutions" class="btn-outline px-5 py-2.5 rounded-full text-sm font-semibold">Cloud</a>
      <a href="#tech-support" class="btn-outline px-5 py-2.5 rounded-full text-sm font-semibold">Support</a>
    </div>
  </div>
</section>

<!-- ============================ System Development ============================ -->
<section id="system-dev" class="py-20 md:py-28 bg-white">
  <div class="container mx-auto px-4 md:px-6 grid md:grid-cols-2 gap-14 items-center">
    <div class="reveal">
      <div class="icon-tile bg-primary mb-5"><i class="fas fa-server"></i></div>
      <h2 class="text-3xl font-display font-bold text-navy mb-4">System Development</h2>
      <p class="text-lg text-slate mb-6">Custom-built software solutions designed to streamline your business operations and drive efficiency.</p>

      <div class="space-y-4 mb-8">
        <div class="flex items-start gap-3">
          <i class="fas fa-circle-check text-accent mt-1"></i>
          <p class="text-slate"><span class="font-semibold text-navy">Enterprise Systems:</span> Custom ERPs, CRMs, and inventory management tailored to your workflow.</p>
        </div>
        <div class="flex items-start gap-3">
          <i class="fas fa-circle-check text-accent mt-1"></i>
          <p class="text-slate"><span class="font-semibold text-navy">Business Process Automation:</span> Eliminate repetitive tasks with intelligent automation.</p>
        </div>
        <div class="flex items-start gap-3">
          <i class="fas fa-circle-check text-accent mt-1"></i>
          <p class="text-slate"><span class="font-semibold text-navy">Data Analytics:</span> Turn your business data into actionable insights.</p>
        </div>
      </div>

      <a href="contact.php" class="inline-flex items-center text-primary font-semibold group">
        Get a custom system quote
        <i class="fas fa-arrow-right ml-2 text-sm transition-transform group-hover:translate-x-1"></i>
      </a>
    </div>
    <div class="reveal">
      <img src="assets/icons/system-dev2.png" alt="System development illustration" class="w-full rounded-2xl shadow-xl">
    </div>
  </div>
</section>

<!-- ============================ Web Design & Development ============================ -->
<section id="web-dev" class="py-20 md:py-28 bg-surface">
  <div class="container mx-auto px-4 md:px-6 grid md:grid-cols-2 gap-14 items-center">
    <div class="md:order-2 reveal">
      <div class="icon-tile bg-navy mb-5"><i class="fas fa-globe"></i></div>
      <h2 class="text-3xl font-display font-bold text-navy mb-4">Website Design &amp; Development</h2>
      <p class="text-lg text-slate mb-6">Beautiful, high-performance websites that convert visitors into customers and showcase your brand.</p>

      <div class="grid grid-cols-2 gap-4 mb-8">
        <div class="card rounded-xl p-4">
          <h3 class="font-semibold text-navy text-sm mb-1">Responsive Design</h3>
          <p class="text-slate text-xs">Flawless on every device, from desktop to mobile.</p>
        </div>
        <div class="card rounded-xl p-4">
          <h3 class="font-semibold text-navy text-sm mb-1">E-Commerce</h3>
          <p class="text-slate text-xs">Online stores that drive sales and manage inventory.</p>
        </div>
        <div class="card rounded-xl p-4">
          <h3 class="font-semibold text-navy text-sm mb-1">SEO Optimized</h3>
          <p class="text-slate text-xs">Built to rank well in search engines from day one.</p>
        </div>
        <div class="card rounded-xl p-4">
          <h3 class="font-semibold text-navy text-sm mb-1">CMS Integration</h3>
          <p class="text-slate text-xs">Easy content updates with WordPress or a custom CMS.</p>
        </div>
      </div>

      <div class="flex flex-wrap gap-4">
        <a href="portfolio.php" class="btn-outline on-light px-5 py-2.5 rounded-lg font-semibold text-sm">View Web Portfolio</a>
        <a href="contact.php" class="btn-primary px-5 py-2.5 rounded-lg font-semibold text-sm">Start Your Project</a>
      </div>
    </div>

    <div class="md:order-1 relative reveal">
      <div class="card rounded-2xl p-6">
        <img src="assets/icons/web-design.png" alt="Web design illustration" class="w-full rounded-lg mb-4">
        <div class="flex justify-between items-center">
          <div>
            <h4 class="font-semibold text-navy">Modern Business Website</h4>
            <p class="text-sm text-slate">Responsive &middot; Fast &middot; Conversion-focused</p>
          </div>
          <!-- Placeholder price — replace with your real starting rate -->
          <span class="bg-accent/10 text-accent px-3 py-1 rounded-full text-sm font-semibold whitespace-nowrap">From $400</span>
        </div>
      </div>
      <div class="absolute -bottom-4 -right-4 bg-navy text-white px-3 py-1 rounded-full text-sm shadow-lg">
        Popular Choice
      </div>
    </div>
  </div>
</section>

<!-- ============================ Mobile App Development ============================ -->
<section id="mobile-dev" class="py-20 md:py-28 bg-white">
  <div class="container mx-auto px-4 md:px-6">
    <div class="text-center max-w-2xl mx-auto mb-16 reveal">
      <div class="icon-tile bg-primary mb-5 mx-auto"><i class="fas fa-mobile-screen-button"></i></div>
      <h2 class="text-3xl font-display font-bold text-navy mb-4">Mobile App Development</h2>
      <p class="text-lg text-slate">Native and cross-platform apps that engage users and deliver exceptional experiences.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
      <div class="card rounded-2xl p-6 reveal">
        <div class="icon-tile bg-navy mb-4"><i class="fab fa-apple"></i></div>
        <h3 class="text-lg font-display font-semibold text-navy mb-2">iOS Development</h3>
        <p class="text-slate text-sm mb-4">Beautiful, high-performance apps built with Swift for all Apple devices.</p>
        <ul class="space-y-2 text-sm text-slate">
          <li class="flex items-start gap-2"><i class="fas fa-circle-check text-accent mt-0.5 text-xs"></i> Optimized for iPhone and iPad</li>
          <li class="flex items-start gap-2"><i class="fas fa-circle-check text-accent mt-0.5 text-xs"></i> App Store submission support</li>
          <li class="flex items-start gap-2"><i class="fas fa-circle-check text-accent mt-0.5 text-xs"></i> Apple Watch and Apple TV options</li>
        </ul>
      </div>

      <div class="card rounded-2xl p-6 reveal">
        <div class="icon-tile bg-navy mb-4"><i class="fab fa-android"></i></div>
        <h3 class="text-lg font-display font-semibold text-navy mb-2">Android Development</h3>
        <p class="text-slate text-sm mb-4">Robust apps built with Kotlin for the diverse Android ecosystem.</p>
        <ul class="space-y-2 text-sm text-slate">
          <li class="flex items-start gap-2"><i class="fas fa-circle-check text-accent mt-0.5 text-xs"></i> Optimized for all screen sizes</li>
          <li class="flex items-start gap-2"><i class="fas fa-circle-check text-accent mt-0.5 text-xs"></i> Google Play Store deployment</li>
          <li class="flex items-start gap-2"><i class="fas fa-circle-check text-accent mt-0.5 text-xs"></i> Material Design implementation</li>
        </ul>
      </div>

      <div class="card rounded-2xl p-6 reveal">
        <div class="icon-tile bg-navy mb-4"><i class="fas fa-shuffle"></i></div>
        <h3 class="text-lg font-display font-semibold text-navy mb-2">Cross-Platform</h3>
        <p class="text-slate text-sm mb-4">Single codebase apps for iOS and Android using Flutter.</p>
        <ul class="space-y-2 text-sm text-slate">
          <li class="flex items-start gap-2"><i class="fas fa-circle-check text-accent mt-0.5 text-xs"></i> Faster development timeline</li>
          <li class="flex items-start gap-2"><i class="fas fa-circle-check text-accent mt-0.5 text-xs"></i> Consistent UI across platforms</li>
          <li class="flex items-start gap-2"><i class="fas fa-circle-check text-accent mt-0.5 text-xs"></i> Cost-effective solution</li>
        </ul>
      </div>
    </div>

    <div class="text-center mt-12 reveal">
      <a href="contact.php" class="btn-primary inline-flex items-center px-6 py-3 rounded-lg font-semibold">
        Discuss Your App Idea <i class="fas fa-arrow-right ml-2 text-sm"></i>
      </a>
    </div>
  </div>
</section>

<!-- ============================ API & Integrations ============================ -->
<section id="api-integrations" class="py-20 md:py-28 bg-surface">
  <div class="container mx-auto px-4 md:px-6 grid md:grid-cols-2 gap-14 items-center">
    <div class="reveal">
      <div class="icon-tile bg-accent mb-5"><i class="fas fa-plug"></i></div>
      <h2 class="text-3xl font-display font-bold text-navy mb-4">API &amp; Integrations</h2>
      <p class="text-lg text-slate mb-6">Connect your systems with third-party services and build powerful custom APIs to extend functionality.</p>

      <div class="space-y-5">
        <div class="flex items-start gap-3">
          <div class="bg-navy text-white p-2 rounded-lg flex-shrink-0"><i class="fas fa-credit-card text-sm"></i></div>
          <div>
            <h3 class="font-semibold text-navy mb-1">Payment Gateway Integration</h3>
            <p class="text-slate text-sm">Secure connections with Stripe, PayPal, M-Pesa and other payment processors.</p>
          </div>
        </div>
        <div class="flex items-start gap-3">
          <div class="bg-navy text-white p-2 rounded-lg flex-shrink-0"><i class="fas fa-code text-sm"></i></div>
          <div>
            <h3 class="font-semibold text-navy mb-1">Custom API Development</h3>
            <p class="text-slate text-sm">Build secure, documented APIs for your applications.</p>
          </div>
        </div>
        <div class="flex items-start gap-3">
          <div class="bg-navy text-white p-2 rounded-lg flex-shrink-0"><i class="fas fa-building text-sm"></i></div>
          <div>
            <h3 class="font-semibold text-navy mb-1">CRM &amp; ERP Integrations</h3>
            <p class="text-slate text-sm">Connect with Salesforce, HubSpot, SAP and other enterprise systems.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-navy text-white p-8 rounded-2xl shadow-xl reveal">
      <h3 class="text-xl font-display font-bold mb-5">Common Integration Partners</h3>
      <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
        <div class="bg-white/10 p-3 rounded-lg text-center text-sm font-medium">Stripe</div>
        <div class="bg-white/10 p-3 rounded-lg text-center text-sm font-medium">M-Pesa</div>
        <div class="bg-white/10 p-3 rounded-lg text-center text-sm font-medium">Twilio</div>
        <div class="bg-white/10 p-3 rounded-lg text-center text-sm font-medium">Salesforce</div>
        <div class="bg-white/10 p-3 rounded-lg text-center text-sm font-medium">Google Maps</div>
        <div class="bg-white/10 p-3 rounded-lg text-center text-sm font-medium">Zapier</div>
      </div>
      <p class="mt-6 text-white/70 text-sm">Don't see your preferred service? We can integrate with virtually any API.</p>
    </div>
  </div>
</section>

<!-- ============================ Cloud Solutions ============================ -->
<section id="cloud-solutions" class="py-20 md:py-28 bg-white">
  <div class="container mx-auto px-4 md:px-6">
    <div class="text-center max-w-2xl mx-auto mb-16 reveal">
      <div class="icon-tile bg-primary mb-5 mx-auto"><i class="fas fa-cloud"></i></div>
      <h2 class="text-3xl font-display font-bold text-navy mb-4">Cloud Solutions</h2>
      <p class="text-lg text-slate">Scalable, secure cloud infrastructure and services to power your digital transformation.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
      <div class="card rounded-2xl p-6 reveal">
        <h3 class="text-lg font-display font-semibold text-navy mb-3">Cloud Migration</h3>
        <p class="text-slate text-sm mb-4">Seamlessly move your systems to AWS, Azure, or Google Cloud with minimal downtime.</p>
        <ul class="space-y-2 text-sm text-slate">
          <li class="flex items-start gap-2"><i class="fas fa-circle-check text-accent mt-0.5 text-xs"></i> Assessment and planning</li>
          <li class="flex items-start gap-2"><i class="fas fa-circle-check text-accent mt-0.5 text-xs"></i> Data migration strategies</li>
          <li class="flex items-start gap-2"><i class="fas fa-circle-check text-accent mt-0.5 text-xs"></i> Cost optimization</li>
        </ul>
      </div>
      <div class="card rounded-2xl p-6 reveal">
        <h3 class="text-lg font-display font-semibold text-navy mb-3">Cloud-Native Development</h3>
        <p class="text-slate text-sm mb-4">Build applications designed specifically for cloud environments from the start.</p>
        <ul class="space-y-2 text-sm text-slate">
          <li class="flex items-start gap-2"><i class="fas fa-circle-check text-accent mt-0.5 text-xs"></i> Microservices architecture</li>
          <li class="flex items-start gap-2"><i class="fas fa-circle-check text-accent mt-0.5 text-xs"></i> Serverless computing</li>
          <li class="flex items-start gap-2"><i class="fas fa-circle-check text-accent mt-0.5 text-xs"></i> Containerization with Docker</li>
        </ul>
      </div>
      <div class="card rounded-2xl p-6 reveal">
        <h3 class="text-lg font-display font-semibold text-navy mb-3">Managed Cloud Services</h3>
        <p class="text-slate text-sm mb-4">Let us handle your cloud infrastructure so you can focus on your business.</p>
        <ul class="space-y-2 text-sm text-slate">
          <li class="flex items-start gap-2"><i class="fas fa-circle-check text-accent mt-0.5 text-xs"></i> 24/7 monitoring</li>
          <li class="flex items-start gap-2"><i class="fas fa-circle-check text-accent mt-0.5 text-xs"></i> Security patching</li>
          <li class="flex items-start gap-2"><i class="fas fa-circle-check text-accent mt-0.5 text-xs"></i> Performance optimization</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ============================ Technical Support ============================ -->
<section id="tech-support" class="py-20 md:py-28 hero-section text-white">
  <div class="container mx-auto px-4 md:px-6 grid md:grid-cols-2 gap-14 items-center">
    <div class="reveal">
      <div class="icon-tile bg-accent mb-5"><i class="fas fa-headset"></i></div>
      <h2 class="text-3xl font-display font-bold mb-4">Technical Support</h2>
      <p class="text-lg text-white/75 mb-6">Ongoing maintenance and support to keep your systems running smoothly.</p>

      <div class="space-y-4">
        <div class="bg-white/10 p-5 rounded-xl flex items-start gap-4">
          <i class="fas fa-medal text-accent mt-1"></i>
          <div>
            <h3 class="font-semibold mb-1">Support Plans</h3>
            <p class="text-white/70 text-sm">Choose from Bronze, Silver, or Gold support packages tailored to your needs.</p>
          </div>
        </div>
        <div class="bg-white/10 p-5 rounded-xl flex items-start gap-4">
          <i class="fas fa-stopwatch text-accent mt-1"></i>
          <div>
            <h3 class="font-semibold mb-1">Response Times</h3>
            <p class="text-white/70 text-sm">Guaranteed response times from 1 hour (critical) to 24 hours (standard).</p>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-white text-ink p-8 rounded-2xl shadow-2xl reveal">
      <h3 class="text-xl font-display font-bold mb-6 text-navy">Our Support Coverage</h3>
      <div class="space-y-5">
        <div>
          <h4 class="font-semibold mb-1 flex items-center gap-2 text-navy"><i class="fas fa-circle-check text-accent text-sm"></i> Application Maintenance</h4>
          <p class="text-slate text-sm">Regular updates, bug fixes, and performance tuning.</p>
        </div>
        <div>
          <h4 class="font-semibold mb-1 flex items-center gap-2 text-navy"><i class="fas fa-circle-check text-accent text-sm"></i> Emergency Support</h4>
          <p class="text-slate text-sm">Priority assistance for critical system issues.</p>
        </div>
        <div>
          <h4 class="font-semibold mb-1 flex items-center gap-2 text-navy"><i class="fas fa-circle-check text-accent text-sm"></i> Feature Enhancements</h4>
          <p class="text-slate text-sm">Continual improvement of your digital products.</p>
        </div>
        <div>
          <h4 class="font-semibold mb-1 flex items-center gap-2 text-navy"><i class="fas fa-circle-check text-accent text-sm"></i> Training &amp; Documentation</h4>
          <p class="text-slate text-sm">Empower your team to use systems effectively.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================ Final CTA ============================ -->
<section class="py-20 bg-accent text-white text-center">
  <div class="container mx-auto px-4 md:px-6 reveal">
    <h2 class="text-3xl md:text-4xl font-display font-bold mb-6">Ready to Transform Your Business?</h2>
    <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">Let's discuss how we can help you achieve your digital goals with the right technology solutions.</p>
    <div class="flex flex-wrap justify-center gap-4">
      <a href="contact.php" class="inline-block bg-white text-accent hover:bg-gray-100 px-8 py-4 rounded-lg text-lg font-semibold transition">
        Get Started Today
      </a>
      <a href="tel:+254700123456" class="inline-block border-2 border-white text-white hover:bg-white/10 px-8 py-4 rounded-lg text-lg font-semibold transition">
        Call Us Now
      </a>
    </div>
  </div>
</section>

<?php require 'partials/footer.php'; ?>