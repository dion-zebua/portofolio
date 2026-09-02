<?php

if (!defined('ABSPATH')) {
    header("Location: /404", true, 302);
}

require_once ABSPATH . '/config.php';


$meta = array_merge([
    "title" => "Portofolio $name",
    "desc" => "$fullname Menawarkan Jasa Pembuatan Web, Pembuatan Iklan GoogleAds, dan Jual Beli Saldo Paypal",
    "img" => $foto,
    'robots' => "index, follow",
], $meta ?? []);


$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$fullUrl = "https://" . $_SERVER['HTTP_HOST'] . $path;

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta name="google-site-verification" content="lHRvgIqUV1lFB3zMBJJWX3J7LRN_O9F9sPsoT2Z2hMQ" />
    <meta name="robots" content="<?= $meta['robots'] ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TITLE & DESC -->
    <title><?= $meta["title"]; ?></title>
    <meta name="description" content="<?= $meta["desc"]; ?>" />

    <!-- Open Graph -->
    <meta property="og:title" content="<?= $meta["title"]; ?>" />
    <meta property="og:description" content="<?= $meta["desc"]; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= $fullUrl ?>" />
    <meta property="og:image" content="<?= $meta["img"]; ?>" />

    <!-- ICON -->
    <link rel="apple-touch-icon" href="<?= $foto; ?>" />
    <link rel="icon" size="16x16" href="<?= $foto; ?>" />
    <link rel="icon" size="32x32" href="<?= $foto; ?>" />
    <link rel="icon" size="180x180" href="<?= $foto; ?>" />
    <link rel="shortcut icon" href="<?= $foto; ?>" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:site_name" content="<?= $meta["title"]; ?>" />
    <link rel="canonical" href="<?= $fullUrl ?>" />


    <style>
        html {
            scroll-behavior: smooth;
        }

        a,
        label,
        button,
        input[type=radio] {
            cursor: pointer;
        }

        .swiper {
            height: auto;
        }

        .swiper-pagination-bullet {
            background: white !important;
        }
    </style>
    <!-- Tailiwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="bg-gradient-to-br from-gray-900 to-black text-white min-h-screen">