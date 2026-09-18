<?php

define('ABSPATH', dirname(__DIR__));


require_once ABSPATH . '/redirect.php';

$meta = [
    'title' => 'Halaman Sedang Dipindahkan',
    'desc' => 'Maaf, halaman sedang dipindahkan',
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
            <?= $meta['desc'] ?> ke <a class="underline" rel="noopener noreferrer sponsored" href="<?= $urlRedirectFinal ?>"><?= $urlRedirectFinal ?></a>.
            <br>Otomatis redirect dalam dalam <span class="font-bold">
                <span id="time">5</span> detik.
            </span>
        </p>


        <div class="flex gap-6">

            <a target="_blank" href="<?= $whatsapp ?>"
                class="inline-flex mt-8 self-start p-3 leading-none text-gray-200 border border-gray-800 rounded-lg focus:outline-2 focus:outline-indigo-900 bg-gradient-to-b from-indigo-900 hover:from-gray-900 to-black ">
                Whatsapp
            </a>

            <a href="<?= $urlRedirectFinal ?>"
                class="inline-flex mt-8 self-start p-3 leading-none text-gray-200 border border-gray-800 rounded-lg focus:outline-2 focus:outline-indigo-900 bg-gradient-to-b hover:from-indigo-900 from-gray-900 to-black">
                Pindah Manual
            </a>
        </div>

    </div>

    <script>
        const time = document.querySelector("#time")
        const urlRedirectFinal = <?= json_encode($urlRedirectFinal) ?>;
        if (urlRedirectFinal) {
            let seconds = 5;

            const countdown = setInterval(() => {
                seconds--;
                time.textContent = seconds;

                if (seconds <= 0) {
                    clearInterval(countdown);
                    window.location.replace(urlRedirectFinal);
                }
            }, 1000);
        }
    </script>

</main>


<?php require_once ABSPATH . '/layout/footer.php'; ?>