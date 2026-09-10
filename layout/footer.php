<?php
if (!defined('ABSPATH')) {
    header("Location: /404", true, 301);
}



?>

<div class="h-10 md:h-40"></div>

<footer class="relative grid gap-4 grid-cols-2 md:grid-cols-4 container mx-auto p-8 md:p-10 lg:p-12 text-gray-400">

    <div class="col-span-full md:col-span-2 mb-5 sm:pr-10 lg:pr-20">
        <p>
            Kalo ada yang lebih tinggi dari langit, mungkin itu cita-cita saya yang pengen jadi programmer. 😎
        </p>
    </div>

    <ul class="md:col-span-1 space-y-2 text-gray-400 [&_a]:hover:underline">
        <li class="pb-4  text-gray-200">Halaman</li>
        <li><a href="<?= $domain ?>">Beranda</a></li>
        <li><a href="<?= $domain ?>/jasa-web">Jasa Web</a></li>
        <li><a href="<?= $domain ?>/jasa-iklan">Jasa Iklan</a></li>
        <li><a href="<?= $domain ?>/jual-beli-saldo-paypal">Jual Beli Saldo Paypal</a></li>
    </ul>

    <ul class="md:col-span-1 space-y-2 text-gray-400 [&_a]:hover:underline">
        <li class="pb-4 text-gray-200">Kontak</li>
        <li><a rel="noopener noreferrer nofollow" target="_blank" href="<?= $whatsapp ?>">Whatsapp</a></li>
        <li><a rel="noopener noreferrer nofollow" target="_blank" href="<?= $instagram ?>">Instagram</a></li>
        <li><a rel="noopener noreferrer nofollow" target="_blank" href="<?= $tiktok ?>">Tiktok</a></li>
        <li><a rel="noopener noreferrer nofollow" target="_blank" href="<?= $github ?>">Github</a></li>
    </ul>

    <div class="h-12 col-span-full">
    </div>

    <div class="col-span-full">
        *Saya memodifikasi template dari github <a class="hover:underline" rel="noopener noreferrer nofollow" target="_blank" href="https://github.com/gary149/tailwindcss-landing-gradients">@gary149</a>
    </div>
</footer>

<script>
    const menuButton = document.querySelector('#menuButton')
    const menuNav = document.querySelector('nav')

    menuButton.addEventListener('click', () => {

        menuNav.classList.toggle('hidden')

        if (menuNav.classList.contains('hidden')) {
            menuButton.innerHTML = 'Open Menu'
        } else {
            menuButton.innerHTML = 'Close Menu'
        }
    })



    window.addEventListener('scroll', () => {
        const header = document.querySelector('header');

        if (window.scrollY > 80) {
            header.classList.add('bg-gradient-to-br', 'from-gray-900', 'to-black');
        } else {
            header.classList.remove('bg-gradient-to-br', 'from-gray-900', 'to-black');
        }
    });
</script>
</body>

</html>