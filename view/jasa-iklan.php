<?php
define('ABSPATH', dirname(__DIR__));

$title = "Jasa Pembuatan Iklan Google Ads";
$desc = "Jasa pembuatan iklan Google Ads teratas dan prospek tinggi.";

require_once ABSPATH . '/config.php';

$meta = [
    "title" => "$title - $name",
    "desc" => "$desc - $name",
    "img" => "$domain/jasa-iklan.webp",
];

require_once ABSPATH . '/layout/head.php';



?>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />


<main>
    <?php require_once ABSPATH . '/layout/header.php'; ?>

    <div class="text-gray-300 container mx-auto p-8 md:p-10 lg:p-12 overflow-hidden md:rounded-lg ">


        <p class=" text-4xl font-bold text-gray-200 max-w-5xl lg:text-7xl lg:pr-24 md:text-6xl">
            <?= $title ?>
        </p>
        <div class="h-10"></div>
        <p class="max-w-2xl  text-xl text-gray-400 md:text-2xl [&_span]:bg-slate-100/10 [&_span]:text-lg [&_span]:border [&_span]:border-slate-700 [&_span]:rounded [&_span]:whitespace-nowrap">
            <?= $desc ?>
        </p>

        <div class="flex gap-6">

            <a target="_blank" href="<?= $whatsapp ?>"
                class="inline-flex mt-8 self-start p-3 leading-none text-gray-200 border border-gray-800 rounded-lg focus:outline-none focus:shadow-outline bg-gradient-to-b from-indigo-900 hover:from-gray-900 to-black ">
                Whatsapp
            </a>

            <a href="#harga-dan-contoh"
                class="inline-flex mt-8 self-start p-3 leading-none text-gray-200 border border-gray-800 rounded-lg focus:outline-none focus:shadow-outline bg-gradient-to-b hover:from-indigo-900 from-gray-900 to-black">
                Harga & Contoh
            </a>
        </div>

        <div class="h-32 md:h-40"></div>
        <div class="grid gap-8 md:grid-cols-2 scroll-mt-[200px] items-center" id="harga-dan-contoh">
            <div class="flex flex-col justify-center">
                <p class="self-start inline text-xl font-medium text-transparent bg-clip-text bg-gradient-to-br from-green-400 to-green-600">
                    Budget Efisien & Hasil Instan
                </p>
                <h2 class="text-4xl font-bold">Paket <?= $title ?></h2>
                <div class="h-6"></div>
                <p class="text-xl text-gray-400 md:pr-10">
                    Pilih layanan Jasa Google Ads yang sesuai dengan kebutuhan bisnis Anda. Dapatkan strategi iklan yang tepat untuk membantu meningkatkan jangkauan dan performa bisnis Anda di Google.
                </p>
                <div class="h-8"></div>
                <div class="grid grid-cols-2 gap-4 pt-8 border-t border-gray-800">
                    <div>
                        <p class="font-semibold text-gray-400">Riset & Strategi
                        </p>
                        <div class="h-4"></div>
                        <p class="text-gray-400">
                            Melakukan riset keyword, konten iklan, dan budget untuk bisnis anda.
                        </p>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-400">Biaya Jasa Termurah</p>
                        <div class="h-4"></div>
                        <p class="text-gray-400">
                            Terdapat banyak pilihan paket dengah harga terjangkau dan bisa saldo isi sendiri.
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <img onclick="window.open('<?= $domain ?>/jasa-iklan.webp')" class="cursor-pointer invert rounded-lg" src="<?= $domain ?>/jasa-iklan.webp" alt="Harga <?= $title ?>">
            </div>
        </div>
        <div class="h-32 md:h-40"></div>
        <div class="grid gap-8 md:grid-cols-3 scroll-mt-[200px]">
            <div class="flex flex-col justify-center md:col-span-2">
                <p
                    class="self-start inline text-xl font-medium text-transparent bg-clip-text bg-gradient-to-br from-green-400 to-green-600">
                    Portofolio
                </p>
                <h2 class="text-4xl font-bold">Contoh Iklan Yang Pernah Teratas</h2>
                <div class="h-6"></div>
                <p class="text-xl text-gray-400 md:pr-10">
                    Berpengalaman mengelola Google Ads untuk membantu bisnis menjangkau audiens yang tepat, meningkatkan traffic, dan menghasilkan lebih banyak peluang.
                </p>
                <div class="h-8"></div>

            </div>

            <div class="swiper w-full rounded-lg bg-gradient-to-br from-gray-900 to-black md:col-span-full gap-4 p-5! border-t border-gray-800 md:col-span-full pb-10!">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper ">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img class="rounded invert" src="<?= $domain ?>/1.jpeg" alt="Contoh Iklan">
                    </div>
                    <div class="swiper-slide">
                        <img class="rounded invert" src="<?= $domain ?>/2.jpeg" alt="Contoh Iklan">
                    </div>
                    <div class="swiper-slide">
                        <img class="rounded invert" src="<?= $domain ?>/3.jpeg" alt="Contoh Iklan">
                    </div>
                    <div class="swiper-slide">
                        <img class="rounded invert" src="<?= $domain ?>/4.jpeg" alt="Contoh Iklan">
                    </div>
                </div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>


                <div class="swiper-pagination"></div>
            </div>

        </div>


    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

    });
</script>


<?php require_once ABSPATH . '/layout/footer.php'; ?>