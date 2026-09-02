<?php
define('ABSPATH', dirname(__DIR__));


$meta = [
    'title' => 'Halaman 404',
    'desc' => 'Maaf, halaman tidak ditemukan',
    'robots' => "noindex, nofollow"
];

require_once ABSPATH . '/layout/head.php';
?>

<main>
    <?php require_once ABSPATH . '/layout/header.php'; ?>

    <div class="text-gray-300 container mx-auto p-8 overflow-hidden md:rounded-lg md:p-10 lg:p-12">


        <h1 class=" text-4xl font-bold text-gray-200 max-w-5xl lg:text-7xl lg:pr-24 md:text-6xl">
            <?= $meta['title'] ?>
        </h1>
        <div class="h-10"></div>
        <p class="max-w-2xl  text-xl text-gray-400 md:text-2xl">
            <?= $meta['desc'] ?>.
        </p>

        <a href="<?= $domain ?>"
            class="inline-flex mt-8 self-start p-3 leading-none text-gray-200 border border-gray-800 rounded-lg focus:outline-none focus:shadow-outline bg-gradient-to-b hover:from-indigo-500 from-gray-900 to-black">
            Beranda
        </a>





    </div>
</main>


<?php require_once ABSPATH . '/layout/footer.php'; ?>