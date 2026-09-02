<?php
if (!defined('ABSPATH')) {
    header("Location: /404", true, 302);
}

?>

<header class="z-9 sticky top-0 text-gray-300 container mx-auto p-8 overflow-hidden md:rounded-lg md:p-10 lg:p-12">
    <div class="flex justify-between">
        <a href="<?= $domain ?>" class="z-[10] text-3xl font-bold"><?= $name ?></a>
        <a id="menuButton" href="#!"
            class="z-[10] self-start p-3 leading-none text-gray-200 border border-gray-800 rounded-lg focus:outline-none focus:shadow-outline bg-gradient-to-b hover:from-indigo-500 from-gray-900 to-black">
            Open Menu
        </a>
    </div>
    <nav class="hidden p-8 pt-30 z-[9] fixed inset-0 bg-gradient-to-br from-gray-900 to-black">
        <ul class="text-center text-xl flex flex-col gap-10 [&_a]:hover:underline">
            <li><a href="<?= $domain ?>">Beranda</a></li>
            <li><a href="<?= $domain ?>/jasa-web">Jasa Web</a></li>
            <li><a href="<?= $domain ?>/jasa-iklan">Jasa Iklan</a></li>
            <li><a href="<?= $domain ?>/jual-beli-paypal">Jual Beli Paypal</a></li>
        </ul>
    </nav>
</header>