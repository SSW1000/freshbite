<?php
define('FRESHBITE_SITE_SECURE_ACCESS', true);

$page_name = 'Contact Us';

require_once __DIR__ . '/layout/head.php';
require_once __DIR__ . '/layout/nav.php';
?>

<section class="relative w-full h-[50vh] md:h-[60vh] bg-dark">
    <div class="relative w-full h-full">
        <img
            src="images/hero.jpg"
            alt="FreshBite Restaurant"
            class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-dark/70"></div>

        <div class="relative z-10 h-full flex flex-col items-center justify-center text-center px-6">
            <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold text-white mb-4 max-w-4xl">
                Contact Us
            </h1>
            <p class="text-lg md:text-xl text-gray-200 max-w-2xl">
                Have questions or feedback? We'd love to hear from you.
            </p>
        </div>
    </div>
</section>

<section class="py-16 md:py-20 px-[5%] bg-light">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-2xl font-bold text-dark mb-8 text-center">Contact Information</h2>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="flex items-start gap-4 p-4 bg-white rounded-xl border border-primary hover:shadow-md transition-all">
                <div class="w-10 h-10 bg-primary-light/30 rounded-xl flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-phone-alt text-primary"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-dark mb-1">Phone</h4>
                    <a href="tel:+94112345678" class="text-gray-600 hover:text-primary transition-colors">0112 345 678</a>
                    <p class="text-sm text-gray-500 mt-1">Mon-Sun: 9:00 AM - 10:00 PM</p>
                </div>
            </div>

            <div class="flex items-start gap-4 p-4 bg-white rounded-xl border border-primary hover:shadow-md transition-all">
                <div class="w-10 h-10 bg-primary-light/30 rounded-xl flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-envelope text-primary"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-dark mb-1">Email</h4>
                    <a href="mailto:hello@freshbite.lk" class="text-gray-600 hover:text-primary transition-colors">hello@freshbite.lk</a>
                    <p class="text-sm text-gray-500 mt-1">We reply within 24 hours</p>
                </div>
            </div>

            <div class="flex items-start gap-4 p-4 bg-white rounded-xl border border-primary hover:shadow-md transition-all">
                <div class="w-10 h-10 bg-primary-light/30 rounded-xl flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-map-marker-alt text-primary"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-dark mb-1">Address</h4>
                    <p class="text-gray-600">42 Galle Road,<br>Colombo 00300<br>Sri Lanka</p>
                </div>
            </div>

            <div class="p-4 bg-white rounded-xl border border-primary hover:shadow-md transition-all">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 bg-primary-light/30 rounded-xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-share-alt text-primary"></i>
                    </div>
                    <h4 class="font-semibold text-dark">Follow Us</h4>
                </div>
                <div class="flex gap-4">
                    <a href="https://facebook.com/freshbite" target="_blank" rel="noopener"
                        class="w-10 h-10 bg-primary-light/30 rounded-xl flex items-center justify-center hover:bg-primary transition-colors">
                        <i class="fab fa-facebook-f text-primary hover:text-white"></i>
                    </a>
                    <a href="https://instagram.com/freshbite" target="_blank" rel="noopener"
                        class="w-10 h-10 bg-primary-light/30 rounded-xl flex items-center justify-center hover:bg-primary transition-colors">
                        <i class="fab fa-instagram text-primary hover:text-white"></i>
                    </a>
                    <a href="https://twitter.com/freshbite" target="_blank" rel="noopener"
                        class="w-10 h-10 bg-primary-light/30 rounded-xl flex items-center justify-center hover:bg-primary transition-colors">
                        <i class="fab fa-twitter text-primary hover:text-white"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/layout/footer.php'; ?>
</body>

</html>