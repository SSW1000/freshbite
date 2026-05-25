<?php
if (!defined('FRESHBITE_SITE_SECURE_ACCESS')) {
    http_response_code(403);
    exit('Direct access not allowed');
}
?>

<footer class="bg-green-800 text-green-100">
    <div class="max-w-6xl mx-auto px-[5%] py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mb-12">
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center">
                        <img src="images/logo.png" alt="FreshBite" class="w-8 h-8">
                    </div>
                    <span class="text-2xl font-bold text-white">FreshBite</span>
                </div>
                <p class="text-green-200 leading-relaxed mb-6">Fresh food made to order. Dine in or call for takeaway. Quality meals served daily.</p>
                <div class="flex gap-3">
                    <a href="https://facebook.com/freshbite" target="_blank" rel="noopener" class="w-10 h-10 bg-green-700 rounded-full flex items-center justify-center hover:bg-white hover:text-green-800 transition-colors">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://instagram.com/freshbite" target="_blank" rel="noopener" class="w-10 h-10 bg-green-700 rounded-full flex items-center justify-center hover:bg-white hover:text-green-800 transition-colors">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com/freshbite" target="_blank" rel="noopener" class="w-10 h-10 bg-green-700 rounded-full flex items-center justify-center hover:bg-white hover:text-green-800 transition-colors">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>

            <div>
                <h3 class="text-lg font-bold text-white mb-6">Quick Links</h3>
                <ul class="space-y-3">
                    <li><a href="/" class="hover:text-white transition-colors">Home</a></li>
                    <li><a href="/about.php" class="hover:text-white transition-colors">About</a></li>
                    <li><a href="/menu.php" class="hover:text-white transition-colors">Menu</a></li>
                    <li><a href="/contact.php" class="hover:text-white transition-colors">Contact</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-bold text-white mb-6">Contact</h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-phone-alt text-white mt-1"></i>
                        <a href="tel:+94112345678" class="hover:text-white transition-colors">0112 345 678</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-envelope text-white mt-1"></i>
                        <a href="mailto:hello@freshbite.lk" class="hover:text-white transition-colors">hello@freshbite.lk</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-map-marker-alt text-white mt-1"></i>
                        <span>42 Galle Road,<br>Colombo 00300</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-green-700 pt-8 text-center">
            <p>&copy; <?= date('Y') ?> FreshBite. All rights reserved.</p>
        </div>
    </div>
</footer>
