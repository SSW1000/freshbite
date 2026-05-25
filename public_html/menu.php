<?php
define('FRESHBITE_SITE_SECURE_ACCESS', true);

$page_name = 'Menu';

require_once __DIR__ . '/layout/head.php';
require_once __DIR__ . '/layout/nav.php';
?>

<section class="relative w-full h-[50vh] md:h-[60vh] bg-dark">
    <div class="relative w-full h-full">
        <img
            src="images/hero.jpg"
            alt="FreshBite Restaurant"
            class="absolute inset-0 w-full h-full object-cover"
        />
        <div class="absolute inset-0 bg-dark/70"></div>

        <div class="relative z-10 h-full flex flex-col items-center justify-center text-center px-6">
            <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold text-white mb-4 max-w-4xl">
                Our Menu
            </h1>
            <p class="text-lg md:text-xl text-gray-200 max-w-2xl">
                Fresh, delicious meals made to order
            </p>
        </div>
    </div>
</section>

<section class="py-16 md:py-20 px-[5%] bg-white">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-dark mb-4">
                Our Menu
            </h2>
            <p class="text-lg text-gray-600">
                Freshly prepared with quality ingredients
            </p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl overflow-hidden border border-primary hover:shadow-md transition-all">
                <img src="images/burger.jpg" alt="Burgers" class="w-full h-48 object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-xl font-bold text-dark mb-2">Burgers</h3>
                    <p class="text-gray-600 mb-3">Juicy, flame-grilled burgers with fresh toppings and crispy fries.</p>
                    <p class="bg-primary-light/30 text-primary font-semibold inline-block px-4 py-1 rounded-full">Rs. 850</p>
                </div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden border border-primary hover:shadow-md transition-all">
                <img src="images/pizza.jpg" alt="Pizza" class="w-full h-48 object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-xl font-bold text-dark mb-2">Pizza</h3>
                    <p class="text-gray-600 mb-3">Hand-tossed pizza with premium toppings and melted cheese.</p>
                    <p class="bg-primary-light/30 text-primary font-semibold inline-block px-4 py-1 rounded-full">Rs. 1,200</p>
                </div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden border border-primary hover:shadow-md transition-all">
                <img src="images/rice-and-curry.jpg" alt="Rice & Curry" class="w-full h-48 object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-xl font-bold text-dark mb-2">Rice & Curry</h3>
                    <p class="text-gray-600 mb-3">Traditional Sri Lankan rice with a selection of flavorful curries.</p>
                    <p class="bg-primary-light/30 text-primary font-semibold inline-block px-4 py-1 rounded-full">Rs. 650</p>
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-3xl mx-auto mt-8">
            <div class="bg-white rounded-xl overflow-hidden border border-primary hover:shadow-md transition-all">
                <img src="images/kottu.jpg" alt="Kottu" class="w-full h-48 object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-xl font-bold text-dark mb-2">Kottu</h3>
                    <p class="text-gray-600 mb-3">Sri Lanka favorite street food - chopped roti with veggies and meat.</p>
                    <p class="bg-primary-light/30 text-primary font-semibold inline-block px-4 py-1 rounded-full">Rs. 750</p>
                </div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden border border-primary hover:shadow-md transition-all">
                <img src="images/drinks.jpg" alt="Drinks" class="w-full h-48 object-cover">
                <div class="p-8 text-center">
                    <h3 class="text-xl font-bold text-dark mb-2">Drinks</h3>
                    <p class="text-gray-600 mb-3">Refreshing beverages including juices, soft drinks, and iced tea.</p>
                    <p class="bg-primary-light/30 text-primary font-semibold inline-block px-4 py-1 rounded-full">Rs. 250</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 md:py-20 px-[5%] bg-light">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">
            How to Get Your Meal
        </h2>
        <p class="text-lg text-gray-600 mb-12">
            Two simple ways to enjoy FreshBite
        </p>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl p-8 border border-primary hover:shadow-md transition-all">
                <div class="w-14 h-14 bg-primary-light/30 rounded-xl flex items-center justify-center mx-auto mb-5">
                    <i class="fas fa-phone text-xl text-primary"></i>
                </div>
                <h3 class="text-xl font-bold text-dark mb-3">Call for Takeaway</h3>
                <p class="text-gray-600 mb-5 leading-relaxed">Phone us your order and pick it up hot and fresh. Fast, friendly, and reliable service.</p>
                <a href="tel:+94112345678" class="inline-block px-6 py-3 bg-primary text-white font-semibold rounded-xl hover:bg-primary-dark transition-colors">
                    0112 345 678
                </a>
            </div>

            <div class="bg-white rounded-xl p-8 border border-primary hover:shadow-md transition-all">
                <div class="w-14 h-14 bg-primary-light/30 rounded-xl flex items-center justify-center mx-auto mb-5">
                    <i class="fas fa-store text-xl text-primary"></i>
                </div>
                <h3 class="text-xl font-bold text-dark mb-3">Dine In</h3>
                <p class="text-gray-600 mb-5 leading-relaxed">Walk in and enjoy a freshly prepared meal at our restaurant. Comfortable setting, great service.</p>
                <p class="text-white text-sm font-medium bg-primary inline-block px-4 py-2 rounded-xl">Open daily: 9:00 AM - 10:00 PM</p>
            </div>
        </div>
    </div>
</section>
<?php require_once __DIR__ . '/layout/footer.php'; ?>
</body>
</html>
