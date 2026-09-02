<?php
define('ABSPATH', dirname(__DIR__));


require_once ABSPATH . '/layout/head.php';

$service = [
    ["Jasa Pembuatan Web", "$domain/jasa-web"],
    ["Jasa Pembuatan Iklan", "$domain/jasa-iklan"],
    ["Jual Beli Saldo Paypal", "$domain/jual-beli-paypal"],
];
?>

<main>
    <?php require_once ABSPATH . '/layout/header.php'; ?>

    <div class="text-gray-300 container mx-auto p-8 md:p-10 lg:p-12 overflow-hidden md:rounded-lg ">


        <p class=" text-4xl font-bold text-gray-200 max-w-5xl lg:text-7xl lg:pr-24 md:text-6xl">
            Halo, saya <?= $name ?>
        </p>
        <div class="h-10"></div>
        <p class="max-w-2xl  text-xl text-gray-400 md:text-2xl [&_span]:bg-slate-100/10 [&_span]:text-xl [&_span]:border [&_span]:border-slate-700 [&_span]:rounded [&_span]:whitespace-nowrap">
            Simple web <?= $fullname ?>. Menawarkan <span>&nbsp;jasa web&nbsp;</span>, <span>&nbsp;jasa iklan&nbsp;</span>, dan <span>&nbsp;jual beli saldo Paypal&nbsp;</span>.
        </p>

        <div class="flex gap-6">

            <a target="_blank" href="<?= $whatsapp ?>"
                class="inline-flex mt-8 self-start p-3 leading-none text-gray-200 border border-gray-800 rounded-lg focus:outline-none focus:shadow-outline bg-gradient-to-b from-indigo-900 hover:from-gray-900 to-black ">
                Whatsapp
            </a>

            <a target="_blank" href="<?= $domain ?>/CV Dion Zebua.pdf"
                class="inline-flex mt-8 self-start p-3 leading-none text-gray-200 border border-gray-800 rounded-lg focus:outline-none focus:shadow-outline bg-gradient-to-b hover:from-indigo-900 from-gray-900 to-black">
                C. Vitae
            </a>
        </div>

        <div class="h-32 md:h-40"></div>

        <p class=" text-4xl">
            <span class="text-gray-400">Membangun layanan digital,</span>

            <span class="text-gray-600">melalui website profesional, iklan terukur, dan transaksi yang aman.</span>
        </p>

        <div class="h-32 md:h-40"></div>

        <div class="grid gap-4 md:grid-cols-3">
            <?php foreach ($service as $key => $value) : ?>
                <div class="flex-col p-8 py-16 rounded-lg shadow-2xl md:p-12 <?= ($key == 1) ? 'bg-gradient-to-b' : 'bg-gradient-to-br' ?> from-gray-900 to-black">
                    <p
                        class="text-slate-100 hue-rotate-[<?= ($key + 1) * 70 ?>deg] flex items-center justify-center text-4xl font-semibold text-green-400 bg-green-800 rounded-full shadow-lg w-14 h-14">
                        <?= $key + 1 ?>
                    </p>
                    <div class="h-6"></div>
                    <p class="text-3xl"><?= $value[0] ?></p>
                    <a class="hover:[&_svg]:ml-2 mt-5 ml-auto inline-flex text-slate-300 p-2 rounded border border-slate-500/20" href="<?= $value[1] ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-4 w-4 bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                        </svg>
                    </a>
                </div>
            <?php endforeach; ?>

        </div>


    </div>
</main>


<?php require_once ABSPATH . '/layout/footer.php'; ?>