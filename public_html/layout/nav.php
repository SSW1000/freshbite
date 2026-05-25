<?php
if (!defined('FRESHBITE_SITE_SECURE_ACCESS')) {
    http_response_code(403);
    exit('Direct access not allowed');
}

$active_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="fixed top-0 left-0 right-0 z-50 bg-green-800">
    <div class="max-w-6xl mx-auto px-[5%] py-3 flex justify-between items-center">
        <a href="/" class="flex items-center gap-3">
            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center border border-green-200">
                <img src="images/logo.png" alt="FreshBite Logo" class="w-8 h-8">
            </div>
            <span class="text-2xl font-bold text-white">FreshBite</span>
        </a>

        <button id="mobileMenuBtn" class="md:hidden text-white focus:outline-none">
            <svg id="menuIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="closeIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <ul class="hidden md:flex list-none gap-2">
            <li><a href="/" class="px-4 py-2 rounded-full text-white font-medium nav-link <?= $active_page === 'index.php' ? 'active' : '' ?>">Home</a></li>
            <li><a href="/about.php" class="px-4 py-2 rounded-full text-white font-medium nav-link <?= $active_page === 'about.php' ? 'active' : '' ?>">About</a></li>
            <li><a href="/menu.php" class="px-4 py-2 rounded-full text-white font-medium nav-link <?= $active_page === 'menu.php' ? 'active' : '' ?>">Menu</a></li>
            <li><a href="/contact.php" class="px-4 py-2 rounded-full text-white font-medium nav-link <?= $active_page === 'contact.php' ? 'active' : '' ?>">Contact</a></li>
        </ul>
    </div>

    <div id="mobileMenu" class="md:hidden hidden bg-green-800">
        <ul class="flex flex-col list-none gap-2 px-[5%] py-4">
            <li><a href="/" class="block text-white font-medium nav-link <?= $active_page === 'index.php' ? 'active' : '' ?>">Home</a></li>
            <li><a href="/about.php" class="block text-white font-medium nav-link <?= $active_page === 'about.php' ? 'active' : '' ?>">About</a></li>
            <li><a href="/menu.php" class="block text-white font-medium nav-link <?= $active_page === 'menu.php' ? 'active' : '' ?>">Menu</a></li>
            <li><a href="/contact.php" class="block text-white font-medium nav-link <?= $active_page === 'contact.php' ? 'active' : '' ?>">Contact</a></li>
        </ul>
    </div>
</nav>

<style>.nav-link:hover,.nav-link.active{text-decoration:underline!important}</style>

<script>
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');

    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });
</script>
