<?php
$pageTitle       = 'Contact Us | Omeka Digital';
$pageDescription = "Get in touch with Omeka Digital. Tell us about your project and we'll get back to you within a day.";
$currentPage     = 'contact.php';
require 'partials/header.php';
require 'partials/navbar.php';

// Read the status flag set by php/contact-form.php after it processes a submission.
$formStatus = $_GET['status'] ?? null;
?>

<!-- ============================ Page hero ============================ -->
<section class="hero-section text-white py-20 md:py-28">
  <div class="container mx-auto px-4 md:px-6 text-center reveal">
    <span class="section-eyebrow bg-white/10 text-white">
      <i class="fas fa-comments"></i> Get In Touch
    </span>
    <h1 class="text-4xl md:text-5xl font-display font-bold mt-6 mb-4">Let's Connect</h1>
    <p class="text-lg text-white/75 max-w-2xl mx-auto">We'd love to hear about your project and explore how we can help bring your vision to life.</p>
  </div>
</section>

<!-- ============================ Contact content ============================ -->
<section class="py-20 md:py-28 bg-white">
  <div class="container mx-auto px-4 md:px-6">

    <?php if ($formStatus === 'success'): ?>
      <div class="max-w-3xl mx-auto mb-10 bg-green-50 border border-green-200 text-green-800 px-6 py-4 rounded-xl flex items-start gap-3 reveal">
        <i class="fas fa-circle-check mt-0.5"></i>
        <p>Thanks for reaching out! Your message has been sent — we'll get back to you within 24 hours.</p>
      </div>
    <?php elseif ($formStatus === 'error'): ?>
      <div class="max-w-3xl mx-auto mb-10 bg-red-50 border border-red-200 text-red-800 px-6 py-4 rounded-xl flex items-start gap-3 reveal">
        <i class="fas fa-circle-exclamation mt-0.5"></i>
        <p>Something went wrong sending your message. Please check your details and try again, or email us directly at <a href="mailto:hello@omekadigital.com" class="font-semibold underline">hello@omekadigital.com</a>.</p>
      </div>
    <?php endif; ?>

    <div class="flex flex-col md:flex-row gap-14">

      <!-- Contact form -->
      <div class="md:w-1/2 reveal">
        <h2 class="text-2xl font-display font-bold text-navy mb-8">Send Us a Message</h2>
        <form action="php/contact-form.php" method="POST" class="space-y-6" novalidate>

          <!-- Honeypot field — invisible to real visitors, bots tend to fill every field -->
          <div class="absolute -left-[9999px]" aria-hidden="true">
            <label for="website">Leave this field empty</label>
            <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
          </div>

          <div>
            <label for="name" class="block text-slate mb-2 text-sm">Your Name</label>
            <input type="text" id="name" name="name" required
                   class="w-full py-3 px-1 bg-transparent border-b-2 border-border focus:border-accent outline-none transition-colors">
          </div>

          <div>
            <label for="email" class="block text-slate mb-2 text-sm">Email Address</label>
            <input type="email" id="email" name="email" required
                   class="w-full py-3 px-1 bg-transparent border-b-2 border-border focus:border-accent outline-none transition-colors">
          </div>

          <div>
            <label for="subject" class="block text-slate mb-2 text-sm">Subject</label>
            <input type="text" id="subject" name="subject" required
                   class="w-full py-3 px-1 bg-transparent border-b-2 border-border focus:border-accent outline-none transition-colors">
          </div>

          <div>
            <label for="message" class="block text-slate mb-2 text-sm">Your Message</label>
            <textarea id="message" name="message" rows="5" required
                      class="w-full py-3 px-1 bg-transparent border-b-2 border-border focus:border-accent outline-none transition-colors"></textarea>
          </div>

          <button type="submit" class="btn-primary px-8 py-3 rounded-lg font-semibold">
            Send Message
          </button>
        </form>
      </div>

      <!-- Contact info -->
      <div class="md:w-1/2 reveal">
        <div class="bg-surface p-8 rounded-2xl">
          <h2 class="text-2xl font-display font-bold text-navy mb-8">Contact Information</h2>

          <div class="space-y-6">
            <div class="flex items-start gap-4">
              <div class="icon-tile bg-accent flex-shrink-0"><i class="fas fa-phone"></i></div>
              <div>
                <h3 class="text-lg font-display font-semibold text-navy mb-1">Phone</h3>
                <p class="text-slate">+254 700 123 456</p>
                <p class="text-slate text-sm">Mon&ndash;Fri, 9am&ndash;5pm EAT</p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div class="icon-tile bg-primary flex-shrink-0"><i class="fas fa-envelope"></i></div>
              <div>
                <h3 class="text-lg font-display font-semibold text-navy mb-1">Email</h3>
                <p class="text-slate">hello@omekadigital.com</p>
                <p class="text-slate text-sm">Typically reply within 24 hours</p>
              </div>
            </div>

            <div class="flex items-start gap-4">
              <div class="icon-tile bg-navy flex-shrink-0"><i class="fas fa-location-dot"></i></div>
              <div>
                <h3 class="text-lg font-display font-semibold text-navy mb-1">Office</h3>
                <p class="text-slate">Nairobi, Kenya</p>
                <p class="text-slate text-sm">By appointment only</p>
              </div>
            </div>
          </div>

          <div class="mt-8 pt-6 border-t border-border">
            <h3 class="text-lg font-display font-semibold text-navy mb-4">Follow Us</h3>
            <div class="flex space-x-3">
              <a href="#" class="social-icon !bg-navy/10 !text-navy hover:!bg-accent hover:!text-white" aria-label="Twitter / X"><i class="fab fa-x-twitter"></i></a>
              <a href="#" class="social-icon !bg-navy/10 !text-navy hover:!bg-accent hover:!text-white" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
              <a href="#" class="social-icon !bg-navy/10 !text-navy hover:!bg-accent hover:!text-white" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================ Map ============================ -->
<!-- Note: the map below is a generic Nairobi city-centre pin — update the embed src
     with your real office coordinates before launch. -->
<section class="bg-surface py-16">
  <div class="container mx-auto px-4 md:px-6">
    <h2 class="text-2xl font-display font-bold text-navy mb-8 text-center reveal">Our Location</h2>
    <div class="bg-white p-4 rounded-2xl shadow-sm max-w-4xl mx-auto reveal">
      <div class="rounded-xl overflow-hidden">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.808206583456!2d36.82115931475399!3d-1.292385835979873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d664f6d3a9%3A0x9f2415859e6e7b1a!2sNairobi%20City%20Centre%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1620000000000!5m2!1sen!2ske"
          width="100%" height="400" style="border:0;" allowfullscreen loading="lazy" class="w-full">
        </iframe>
      </div>
      <div class="mt-4 text-center text-slate text-sm">
        <p>Visit our office in Nairobi City Centre</p>
        <p>Please schedule an appointment before visiting</p>
      </div>
    </div>
  </div>
</section>

<?php require 'partials/footer.php'; ?>