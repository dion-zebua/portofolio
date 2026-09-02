<?php
define('ABSPATH', dirname(__DIR__));

$title = "Jasa Pembuatan Website";
$desc = "Jasa pembuatan website murah dan terpercaya.";

require_once ABSPATH . '/config.php';

$meta = [
    "title" => "$title - $name",
    "desc" => "$desc - $name",
    "img" => "$domain/jasa-web.jpeg",
];

// $url = "https://sheets.googleapis.com/v4/spreadsheets/1kh6_KP0VPCiHMuFTQiNS0TwEsXPzHvxHghcY6hp_-P0/values/Domain!A:E?key=AIzaSyAkjLLGuoaJ0IkFQTSlxsLH2mhI1Rl6kVc";

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// $result = curl_exec($ch);
// // curl_close($ch);
// $client = json_decode($result, true);

require_once ABSPATH . '/layout/head.php';



?>

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
                <img onclick="window.open('<?= $domain ?>/jasa-web.jpeg')" class="cursor-pointer invert rounded-lg" src="<?= $domain ?>/jasa-web.jpeg" alt="Harga <?= $title ?>">
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
                    Berpengalaman membangun lebih dari <span id="jumlahWeb">195</span>+ sistem digital, mulai dari landing page perusahaan, travel, toko online,
                    hingga dashboard manajemen umrah.
                </p>
                <div class="h-8"></div>

            </div>
            <ul id="domain-list" class="rounded-lg bg-gradient-to-br from-gray-900 to-black grid sm:grid-cols-2 lg:grid-cols-3 gap-4 p-5 border-t border-gray-800 md:col-span-full">
                <li id="loading-state" class="text-gray-500 animate-pulse">Memuat data domain...</li>
            </ul>

        </div>


    </div>
</main>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        const apiUrl = "https://script.google.com/macros/s/AKfycbwbPMymcZ7SlRgEjTy6Z_QHbxps_hSuLUyNOhkmBp5ARBv2WiW_w4U6XvdgCaVhdqfq/exec";
        const ulContainer = document.getElementById("domain-list");
        const loadingState = document.getElementById("loading-state");
        const jumlahWeb = document.getElementById("jumlahWeb");

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Hapus teks loading

                jumlahWeb.innerHTML = data.values.length

                if (loadingState) loadingState.remove();

                const rows = data.values || [];

                // Jika mau lewati baris pertama/Header (sama seperti array_slice(..., 1))
                const listData = rows.slice(1);

                if (listData.length === 0) {
                    ulContainer.innerHTML = '<li class="text-gray-500">Data kosong.</li>';
                    return;
                }

                // Looping data Kolom A ke dalam <li>
                listData.forEach(item => {
                    const li = document.createElement("li");
                    li.className = "flex items-center gap-2 text-sm md:text-base";
                    li.innerHTML = `
                    <span class="text-blue-500">•</span>
                    <a class="hover:underline" href="https://${item.trim().replace(/ /g, '?')}" target="_blank">${item}</a>
                `;
                    ulContainer.appendChild(li);
                });
            })
            .catch(error => {
                console.error("Error fetching data:", error);
                if (loadingState) {
                    loadingState.textContent = "Gagal memuat data.";
                    loadingState.classList.replace("text-gray-500", "text-red-400");
                    loadingState.classList.remove("animate-pulse");
                }
            });
    });
</script>
<?php require_once ABSPATH . '/layout/footer.php'; ?>