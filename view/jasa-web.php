<?php
define('ABSPATH', dirname(__DIR__));

$title = "Jasa Pembuatan Website";
$desc = "Jasa pembuatan website murah dan terpercaya.";

require_once ABSPATH . '/config.php';

$meta = [
    "title" => "$title - $name",
    "desc" => "$desc - $name",
    "img" => "$domain/img/jasa-web.jpeg",
];

if (isset($_GET['hit'])) {
    $apiUrl = "https://script.google.com/macros/s/AKfycbwbPMymcZ7SlRgEjTy6Z_QHbxps_hSuLUyNOhkmBp5ARBv2WiW_w4U6XvdgCaVhdqfq/exec";

    try {
        $ch = curl_init($apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');

        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curlError = curl_error($ch);

        curl_close($ch);

        if ($response === false || !empty($curlError)) {
            throw new Exception("cURL Error: " . $curlError);
        }

        if ($httpCode !== 200) {
            throw new Exception("API Error: Server mengembalikan HTTP Code " . $httpCode);
        }
        $data = json_decode($response, true);
        unset($data["values"][0]);

        file_put_contents(
            ABSPATH . '\rute.json',
            json_encode($data["values"], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
        );
    } catch (Exception $e) {
        file_put_contents(
            ABSPATH . '\rute.json',
            json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
        );
    }
}

$web = json_decode(
    file_get_contents(ABSPATH . "\\rute.json"),
    true
);

$web = is_array($web) ? $web : [];



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

            <a href="#harga-dan-contoh"
                class="inline-flex mt-8 self-start p-3 leading-none text-gray-200 border border-gray-800 rounded-lg focus:outline-none focus:shadow-outline bg-gradient-to-b hover:from-indigo-900 from-gray-900 to-black">
                Harga & Contoh
            </a>
        </div>

        <div class="h-32 md:h-40"></div>
        <div class="grid gap-8 md:grid-cols-2 scroll-mt-[200px] items-center" id="harga-dan-contoh">
            <div class="flex flex-col justify-center">
                <p class="self-start inline text-xl font-medium text-transparent bg-clip-text bg-gradient-to-br from-green-400 to-green-600">
                    Murah dan All in One
                </p>
                <h2 class="text-4xl font-bold">Layanan Website Lengkap</h2>
                <div class="h-6"></div>
                <p class="text-xl text-gray-400 md:pr-10">
                    Setiap website yang kami kembangkan sudah dibekali fitur SEO dan digital marketing modern untuk memaksimalkan konversi bisnis Anda.
                </p>
                <div class="h-8"></div>
                <div class="grid grid-cols-2 gap-4 pt-8 border-t border-gray-800">
                    <div>
                        <p class="font-semibold text-gray-400">Bisa Request Fitur</p>
                        <div class="h-4"></div>
                        <p class="text-gray-400">
                            Website bisa disesuaikan dengan kebutuhan bisnis anda.
                        </p>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-400">Include Google Ads</p>
                        <div class="h-4"></div>
                        <p class="text-gray-400">
                            Include pembuatan iklan untuk meningkatkan prospek bisnis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <img loading="lazy" onclick="window.open('<?= $meta['img'] ?>')" class="cursor-pointer invert rounded-lg" src="<?= $meta['img'] ?>" alt="Harga <?= $title ?>">
            </div>
        </div>
        <div class="h-32 md:h-40"></div>
        <div class="grid gap-8 md:grid-cols-3 scroll-mt-[200px]">
            <div class="flex flex-col justify-center md:col-span-2">
                <p
                    class="self-start inline text-xl font-medium text-transparent bg-clip-text bg-gradient-to-br from-green-400 to-green-600">
                    Portofolio
                </p>
                <h2 class="text-4xl font-bold">Contoh Web Yang Telah Dikembangkan</h2>
                <div class="h-6"></div>
                <p class="text-xl text-gray-400 md:pr-10">
                    Berpengalaman membangun lebih dari
                    <span id="jumlahWeb"><?= count($web) == 0 ? 195 : count($web) ?></span>+ sistem digital, mulai dari landing page perusahaan, travel, toko online,
                    hingga dashboard manajemen umrah.
                </p>
                <div class="h-8"></div>

            </div>
            <ul id="domain-list" class="rounded-lg bg-gradient-to-br from-gray-900 to-black grid sm:grid-cols-2 lg:grid-cols-3 gap-4 p-5 border-t border-gray-800 md:col-span-full">
                <?php if (count($web) < 1): ?>
                    <li class="text-sm md:text-base">Data tidak ditemukan</li>

                <?php else : ?>
                    <?php foreach ($web as $key => $value) : ?>
                        <li class="flex items-center gap-2 text-sm md:text-base">
                            <span class="text-blue-500">•</span>
                            <a class="hover:underline" href="https://<?= str_replace(' ', '?', $value) ?>" target="_blank">
                                <?= $value ?>
                            </a>
                        </li>
                    <?php endforeach ?>
                <?php endif; ?>
            </ul>

        </div>


    </div>
</main>

<?php require_once ABSPATH . '/layout/footer.php'; ?>