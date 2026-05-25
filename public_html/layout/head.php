<?php
if (!defined('FRESHBITE_SITE_SECURE_ACCESS')) {
    http_response_code(403);
    exit('Direct access not allowed');
}
$app_name = $app_name ?? "FreshBite";
$meta_title = $meta_title ?? "FreshBite - Fresh Food Restaurant | Dine In & Takeaway";
$meta_description = $meta_description ?? "FreshBite is a family-run restaurant in Colombo, Sri Lanka. Quality ingredients, expert preparation, served fresh daily. Dine in or call for takeaway.";
$meta_keywords = $meta_keywords ?? "FreshBite, restaurant, fresh food, Sri Lankan food, Colombo restaurant, dine in, takeaway, burgers, kottu, pizza";
$meta_author = $meta_author ?? "FreshBite";
$meta_robots = $meta_robots ?? "index, follow";

$og_title = $og_title ?? "FreshBite | Fresh Food Restaurant";
$og_description = $og_description ?? "FreshBite is a family-run restaurant in Colombo, Sri Lanka. Quality ingredients, expert preparation. Dine in or call for takeaway.";
$og_image = $og_image ?? "https://freshbite.lk/images/logo.png";
$og_type = $og_type ?? "website";

$twitter_title = $twitter_title ?? "FreshBite - Fresh Food Restaurant";
$twitter_description = $twitter_description ?? "FreshBite restaurant in Colombo — fresh food, made to order. Dine in or call for takeaway.";
$twitter_image = $twitter_image ?? "https://freshbite.lk/images/logo.png";
$twitter_card = $twitter_card ?? "summary_large_image";

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$domain = $_SERVER['HTTP_HOST'];
$requestUri = $_SERVER['REQUEST_URI'];

$normalizedUri = rtrim($requestUri, '/');
$normalizedUri = preg_replace('/\.php$/', '', $normalizedUri);

if ($normalizedUri === '' || $normalizedUri === '/index') {
    $canonicalUrl = "https://freshbite.lk/";
} else {
    $canonicalUrl = "$protocol://$domain$normalizedUri";
}

$canonical_url = $canonical_url ?? $canonicalUrl;
$og_url = $og_url ?? $canonical_url;
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover, maximum-scale=5, user-scalable=yes">
    <meta name="theme-color" content="#22c55e">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($meta_keywords); ?>">
    <meta name="robots" content="<?php echo htmlspecialchars($meta_robots); ?>">
    <meta name="language" content="en">
    <meta name="author" content="<?php echo htmlspecialchars($meta_author); ?>">

    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">

    <meta property="og:type" content="<?php echo htmlspecialchars($og_type); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($og_url); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($og_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($og_description); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($og_image); ?>">

    <meta name="twitter:card" content="<?php echo htmlspecialchars($twitter_card); ?>">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($twitter_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($twitter_description); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($twitter_image); ?>">

    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//www.google.com">
    <link rel="dns-prefetch" href="//www.gstatic.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://www.google.com" crossorigin>
    <link rel="preconnect" href="https://www.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <title><?php echo htmlspecialchars($app_name); ?> | <?php echo htmlspecialchars($page_name ?? $meta_title); ?></title>

    <link rel="icon" type="image/png" href="images/logo.png">
    <link rel="apple-touch-icon" href="images/logo.png">
    <meta name="apple-mobile-web-app-title" content="FreshBite">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="./css/tailwind-output.css?v=15">
</head>
