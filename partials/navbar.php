<?php
// $currentPage lets the nav highlight the right link. Set it before
// requiring this file, e.g. $currentPage = 'services.php';
// Falls back to auto-detecting the current filename if not set.
$currentPage = $currentPage ?? basename($_SERVER['PHP_SELF']);

function navLinkClass($page, $current) {
    return $page === $current ? 'nav-link is-active' : 'nav-link';
}
?>
<header class="site-header text-white sticky top-0 z-50">
  <div class="container mx-auto px-4 md:px-6 py-4 flex justify-between items-center">

    <a href="index.php" class="flex items-center">
        <span class="logo-text">
            <span class="logo-omeka">Omek<span class="logo-a-accent">A</span></span><span class="logo-digital">Digital</span>
        </span>
    </a>

    <!-- Desktop nav -->
    <nav class="hidden md:flex items-center space-x-8">
      <a href="index.php" class="<?php echo navLinkClass('index.php', $currentPage); ?>">Home</a>
      <a href="about.php" class="<?php echo navLinkClass('about.php', $currentPage); ?>">About</a>
      <a href="services.php" class="<?php echo navLinkClass('services.php', $currentPage); ?>">Services</a>
      <a href="portfolio.php" class="<?php echo navLinkClass('portfolio.php', $currentPage); ?>">Portfolio</a>
      <a href="contact.php" class="<?php echo navLinkClass('contact.php', $currentPage); ?>">Contact</a>
      <a href="contact.php" class="btn-primary px-5 py-2.5 rounded-lg font-medium text-sm">
        Start a Project
      </a>
    </nav>

    <!-- Mobile menu button -->
    <button id="menu-toggle" aria-label="Toggle menu" aria-expanded="false" class="md:hidden text-white text-2xl">
      <i id="icon-open" class="fas fa-bars"></i>
      <i id="icon-close" class="fas fa-xmark hidden"></i>
    </button>
  </div>

  <!-- Mobile nav -->
  <nav id="mobile-menu" class="md:hidden px-4">
    <div class="flex flex-col space-y-1 pb-4 border-t border-white/10 pt-3">
      <a href="index.php" class="<?php echo navLinkClass('index.php', $currentPage); ?> py-2">Home</a>
      <a href="about.php" class="<?php echo navLinkClass('about.php', $currentPage); ?> py-2">About</a>
      <a href="services.php" class="<?php echo navLinkClass('services.php', $currentPage); ?> py-2">Services</a>
      <a href="portfolio.php" class="<?php echo navLinkClass('portfolio.php', $currentPage); ?> py-2">Portfolio</a>
      <a href="contact.php" class="<?php echo navLinkClass('contact.php', $currentPage); ?> py-2">Contact</a>
      <a href="contact.php" class="btn-primary text-center px-5 py-2.5 rounded-lg font-medium text-sm mt-2">
        Start a Project
      </a>
    </div>
  </nav>
</header>