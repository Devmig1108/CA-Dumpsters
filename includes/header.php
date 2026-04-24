<?php
// 1. Define your Base URL for the demo environment. 
// When you go live on the root domain, just change this to: $baseURL = '';
$baseURL = '/demo/c-a-dumpsters';

// Dynamic SEO Variables
if (!isset($pageTitle)) {
    $pageTitle = "C&A Dumpsters | Affordable Residential Dumpster Rental in El Paso";
}
if (!isset($metaDescription)) {
    $metaDescription = "El Paso's most affordable residential roll-off dumpster rentals. Driveway-friendly delivery, flat-rate pricing, and hassle-free pickup in El Paso & Santa Teresa.";
}

// Generate the dynamic Canonical URL for the current page
// We also prepend the baseURL here so the canonical tags are accurate on the demo!
$currentURL = "/" . $baseURL . str_replace($baseURL, '', $_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $metaDescription; ?>">
    <meta name="keywords" content="dumpster rental El Paso, roll off dumpsters, residential dumpster rental, cheap dumpsters El Paso, yard waste removal, C&A Dumpsters">
    <meta name="author" content="C&A Dumpsters">

    <link rel="canonical" href="<?php echo $currentURL; ?>">

    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $currentURL; ?>">
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $metaDescription; ?>">
    <meta property="og:image" content="/<?php echo $baseURL; ?>/images/hero.jpg">

    <link rel="icon" type="image/png" href="<?php echo $baseURL; ?>/images/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;0,800;0,900;1,800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $baseURL; ?>/style.css">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "C&A Dumpsters",
            "image": "https://www.ca-dumpsters.com/images/logo.png",
            "@id": "https://www.ca-dumpsters.com",
            "url": "https://www.ca-dumpsters.com",
            "telephone": "915-383-4682",
            "email": "ca.dumpsters.ep@gmail.com",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "1640 West Bourne Dr",
                "addressLocality": "Clint",
                "addressRegion": "TX",
                "postalCode": "79836",
                "addressCountry": "US"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 31.5947,
                "longitude": -106.1843
            },
            "openingHoursSpecification": [{
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday"
                    ],
                    "opens": "08:00",
                    "closes": "17:00"
                },
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "Saturday",
                    "opens": "09:00",
                    "closes": "12:00"
                }
            ],
            "areaServed": ["El Paso, TX", "Santa Teresa, NM", "Clint, TX"],
            "priceRange": "$$"
        }
    </script>
</head>

<body>

    <div class="header-wrapper" id="navWrapper">
        <header class="main-header">
            <a href="<?php echo $baseURL; ?>/" class="brand-logo">
                <img src="<?php echo $baseURL; ?>/images/logo.png" alt="C&A Dumpsters Logo" id="headerLogo">
            </a>

            <nav class="nav-links">
                <a href="<?php echo $baseURL; ?>/">Home</a>
                <a href="<?php echo $baseURL; ?>/about/">About Us</a>
                <a href="<?php echo $baseURL; ?>/services/">Services</a>
                <a href="<?php echo $baseURL; ?>/gallery/">Gallery</a>
                <a href="<?php echo $baseURL; ?>/contact/">Contact Us</a>
            </nav>

            <div class="magnetic-wrap">
                <a href="tel:9153834682" class="btn-call">📞 (915) 383-4682</a>
            </div>

            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </header>
    </div>

    <div class="mobile-drawer" id="mobileDrawer">
        <a href="<?php echo $baseURL; ?>/" class="mobile-link">Home</a>
        <a href="<?php echo $baseURL; ?>/about/" class="mobile-link">About Us</a>
        <a href="<?php echo $baseURL; ?>/services/" class="mobile-link">Services</a>
        <a href="<?php echo $baseURL; ?>/gallery/" class="mobile-link">Gallery</a>
        <a href="<?php echo $baseURL; ?>/contact/" class="mobile-link">Contact Us</a>
        <a href="tel:9153834682" class="btn-call">📞 (915) 383-4682</a>
    </div>