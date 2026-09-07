<?php
define('ABSPATH', dirname(__DIR__));

$title = "Jual Beli Saldo Paypal";
$desc = "Jual beli Saldo paypal murah, terpercaya dan tanpa biaya admin.";

require_once ABSPATH . '/config.php';

$meta = [
    "title" => "$title - $name",
    "desc" => "$desc - $name",
    "img" => "$domain/img/jual-beli-paypal.webp",

];

$topUp = [
    [1, 9.99, 18500],
    [10, 49.99, 18250],
    [50, 99.99, 18000],
    [100, 200, 17750],
];

$convert = [
    [1, 9.99, 14000],
    [10, 49.99, 14250],
    [50, 99.99, 14500],
    [100, 200, 14750],
];

require_once ABSPATH . '/layout/head.php';



?>

<main>
    <?php require_once ABSPATH . '/layout/header.php'; ?>

    <div class="text-gray-300 container mx-auto p-8 md:p-10 lg:p-12 overflow-hidden md:rounded-lg ">


        <h1 class=" text-4xl font-bold text-gray-200 max-w-5xl lg:text-7xl lg:pr-24 md:text-6xl">
            <?= $title ?>
        </h1>
        <div class="h-10"></div>
        <p class="max-w-2xl  text-xl text-gray-400 md:text-2xl [&_span]:bg-slate-100/10 [&_span]:text-lg [&_span]:border [&_span]:border-slate-700 [&_span]:rounded [&_span]:whitespace-nowrap">
            <?= $desc ?>
        </p>

        <div class="flex gap-6">

            <a target="_blank" href="<?= $whatsapp ?>"
                class="inline-flex mt-8 self-start p-3 leading-none text-gray-200 border border-gray-800 rounded-lg focus:outline-none focus:shadow-outline bg-gradient-to-b from-indigo-900 hover:from-gray-900 to-black ">
                Whatsapp
            </a>

            <a href="#kalkulator-harga"
                class="inline-flex mt-8 self-start p-3 leading-none text-gray-200 border border-gray-800 rounded-lg focus:outline-none focus:shadow-outline bg-gradient-to-b hover:from-indigo-900 from-gray-900 to-black">
                Kalkulator Harga
            </a>
        </div>

        <div class="h-32 md:h-40"></div>
        <div class="grid gap-8 md:grid-cols-2 scroll-mt-[200px] items-center">
            <div class="flex flex-col justify-center">
                <p class="self-start inline text-xl font-medium text-transparent bg-clip-text bg-gradient-to-br from-green-400 to-green-600">
                    Terpercaya dan Cepat
                </p>
                <h2 class="text-4xl font-bold">Topup dan Convert Saldo Paypal</h2>
                <div class="h-6"></div>
                <p class="text-xl text-gray-400 md:pr-10">
                    Top Up atau convert saldo PayPal dengan proses mudah, cepat, dan transparan untuk berbagai kebutuhan transaksi online. </p>
                <div class="h-8"></div>
                <div class="grid sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 gap-10 sm:gap-4 pt-8 border-t border-gray-800 text-gray-400">
                    <div>
                        <p class="font-semibold ">Top Up</p>
                        <div class="h-4"></div>
                        <p class="">
                            Rate Membeli saldo paypal:
                        </p>
                        <ul>
                            <?php foreach ($topUp as $key => $value) : ?>
                                <li><span class="text-blue-500 mr-2">•</span><?= "$$value[0] ~ $$value[1] = Rp" . number_format($value[2], 0, ',', '.') ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <div>
                        <p class="font-semibold ">Convert</p>
                        <div class="h-4"></div>
                        <p class="">
                            Rate Menjual saldo paypal:
                        </p>
                        <ul>
                            <?php foreach ($convert as $key => $value) : ?>
                                <li><span class="text-blue-500 mr-2">•</span><?= "$$value[0] ~ $$value[1] = Rp" . number_format($value[2], 0, ',', '.') ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="relative">
                <img loading="lazy" onclick="window.open('<?= $meta['img'] ?>')" class="cursor-pointer rounded-lg" src="<?= $meta['img'] ?>" alt="Harga <?= $title ?>">
            </div>
        </div>
        <div class="h-32 md:h-40"></div>
        <div class="grid gap-8 md:grid-cols-3 scroll-mt-[200px]" id="kalkulator-harga">
            <div class="flex flex-col justify-center md:col-span-2">
                <p
                    class="self-start inline text-xl font-medium text-transparent bg-clip-text bg-gradient-to-br from-green-400 to-green-600">
                    Kalkulator
                </p>
                <h2 class="text-4xl font-bold">Hitung Total Biaya Top Up / Convert</h2>
                <div class="h-6"></div>
                <p class="text-xl text-gray-400 md:pr-10">
                    Hitung total biaya jasa topup atau jasa convert saldo paypal tanpa biaya admin.
                </p>
                <div class="h-8"></div>

            </div>
            <div class="rounded-lg bg-gradient-to-br from-gray-900 to-black p-5 border-t border-gray-800 md:col-span-full">
                <form class="flex flex-col gap-5 max-w-[350px]  [&>div]:flex  [&>div]:flex-col  [&>div]:gap-2  [&>div]:text-gray-300">
                    <div>
                        <label for="">Pilih Jenis Transaksi</label>
                        <div class="flex gap-5">
                            <label class="inline-flex self-start p-3 leading-none text-gray-200 border border-gray-800 rounded-lg focus:outline-none focus:shadow-outline bg-gradient-to-b hover:from-indigo-900 from-gray-900 to-black has-checked:from-indigo-900! has-checked:hover:from-gray-900! has-checked:border-slate-600!" for="topup">
                                Top Up
                                <input type="radio" name="type" required class="hidden" value="Top Up" id="topup">
                            </label>
                            <label class="inline-flex self-start p-3 leading-none text-gray-200 border border-gray-800 rounded-lg focus:outline-none focus:shadow-outline bg-gradient-to-b hover:from-indigo-900 from-gray-900 to-black has-checked:from-indigo-900! has-checked:hover:from-gray-900! has-checked:border-slate-600!" for="convert">
                                Convert
                                <input type="radio" name="type" required class="hidden" value="Convert" id="convert">
                            </label>
                        </div>
                    </div>

                    <div>
                        <label for="nominal">Nominal Paypal</label>
                        <div class="relative">
                            <input type="number" name="nominal" required min="1" max="100" disabled id="nominal" class="p-2 px-5 leading-none font-semibold text-gray-300 border border-gray-800 rounded-lg focus:outline-2 focus:outline-indigo-900 focus:shadow-outline disabled:bg-slate-900! disabled:cursor-not-allowed w-full">
                            <div class="absolute top-1/2 left-2 -translate-y-1/2">$</div>
                        </div>
                    </div>

                    <div>
                        <label for="totalCost">Total Biaya</label>
                        <div class="relative">
                            <input type="number" required name="nominal" min="1" max="100" disabled id="totalCost" class="p-2 px-5 pl-8! leading-none font-semibold text-gray-300 border border-gray-800 rounded-lg focus:outline-2 focus:outline-indigo-900 focus:shadow-outline bg-slate-900 cursor-not-allowed w-full">
                            <div class="absolute top-1/2 left-2 -translate-y-1/2">Rp</div>
                        </div>
                    </div>

                    <div class="">
                        <button
                            class="flex items-center gap-3 mt-2 self-start p-3 leading-none text-gray-200 border border-gray-800 rounded-lg focus:outline-none focus:shadow-outline bg-gradient-to-b hover:from-indigo-900 from-gray-900 to-black text-sm">

                            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-whatsapp w-4 h-4 fill-green-600" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg>
                            <div class="">
                                <span id="buttonType">Top Up</span>&nbsp;Sekarang
                            </div>
                        </button>
                    </div>

                </form>
            </div>

        </div>


    </div>
</main>



<script>
    const formCalculator = document.querySelector('form')
    const formCalculatorButton = document.querySelector('form button')
    const buttonType = document.querySelector('#buttonType')
    const transcationType = document.querySelectorAll('input[type=radio]')
    const transcationNominal = document.querySelector('#nominal')
    const totalCost = document.querySelector('#totalCost')

    const topUp = <?php echo json_encode($topUp); ?>;
    const convert = <?php echo json_encode($convert); ?>;

    transcationType.forEach(e => {
        e.addEventListener('click', () => {
            transcationNominal.removeAttribute("disabled");
            transcationNominal.value = ""
            totalCost.value = ""
            buttonType.innerHTML = e.value
        })
    });

    transcationNominal.addEventListener('input', () => {
        const total = count(transcationNominal.value)
        totalCost.value = total

    })


    const count = (nominal) => {
        const selectedButtonType = document.querySelector("input[name='type']:checked");
        const data = selectedButtonType.value === "Top Up" ? topUp : convert;

        const matched = data.find((e) => {
            return nominal >= e[0] && nominal <= e[1];
        });

        if (matched) {
            return nominal * matched[2]
        }

        return 0;
    }



    formCalculator.addEventListener('submit', (e) => {
        e.preventDefault()

        const selectedButtonType = document.querySelector("input[name='type']:checked");


        const message = `Halo Dion Zebua.
Saya ingin ${selectedButtonType.value} Paypal: 

Nominal : $${transcationNominal.value}
Total : Rp${totalCost.value}`

        window.open(`https://wa.me/6288289317870?text=${encodeURIComponent(message)}`, '_blank');

    })
</script>
<?php require_once ABSPATH . '/layout/footer.php'; ?>