<?php
// Per-page variables — set these BEFORE requiring this file.
$pageTitle       = $pageTitle       ?? 'Omeka Digital | Custom Software, Web & Mobile Development in Nairobi';
$pageDescription = $pageDescription ?? 'Omeka Digital designs, builds and supports custom software, websites, mobile apps and cloud solutions for growing businesses in Nairobi and beyond.';
$ogImage         = $ogImage         ?? 'assets/images/omeka-nevy-2.png';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo $pageTitle; ?></title>
<meta name="description" content="<?php echo $pageDescription; ?>" />

<!-- Open Graph -->
<meta property="og:title" content="<?php echo $pageTitle; ?>" />
<meta property="og:description" content="<?php echo $pageDescription; ?>" />
<meta property="og:type" content="website" />
<meta property="og:image" content="<?php echo $ogImage; ?>" />

<link rel="icon" type="image/png" href="assets/images/omeka-orange.png" />

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

<!-- Tailwind CSS (CDN) -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Site design system + config -->
<link rel="stylesheet" href="css/style.css">
<script src="js/main.js"></script>
</head>
<body class="bg-white text-ink font-sans antialiased">