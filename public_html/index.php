<?php
define('FRESHBITE_SITE_SECURE_ACCESS', true);

$page_name = 'Home';

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
                Fresh Food, Made to Order
            </h1>
            <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl">
                Quality ingredients. Expert preparation. Served fresh daily.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="/menu.php" class="px-8 py-4 bg-primary text-white font-semibold rounded-xl hover:bg-primary-dark transition-colors">
                    Browse Our Menu
                </a>
                <a href="tel:+94112345678" class="px-8 py-4 bg-white text-dark font-semibold rounded-xl hover:bg-gray-100 transition-colors">
                    Call 0112 345 678
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-16 md:py-20 px-[5%] bg-white">
    <div class="max-w-5xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-dark mb-12">
            Featured Menu
        </h2>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl overflow-hidden border border-primary hover:shadow-md transition-all">
                <img src="images/burger.jpg" alt="Burgers" class="w-full h-48 object-cover">
                <div class="p-8 text-left">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="text-xl font-bold text-dark">Grilled Burger</h3>
                        <span class="bg-primary-light/30 text-primary font-bold text-lg inline-block px-4 py-1 rounded-full">Rs. 850</span>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">Juicy flame-grilled beef patty with lettuce, tomato, and our signature sauce. Served with golden fries.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden border border-primary hover:shadow-md transition-all">
                <img src="images/kottu.jpg" alt="Kottu" class="w-full h-48 object-cover">
                <div class="p-8 text-left">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="text-xl font-bold text-dark">Chicken Kottu</h3>
                        <span class="bg-primary-light/30 text-primary font-bold text-lg inline-block px-4 py-1 rounded-full">Rs. 650</span>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">Classic Sri Lankan kottu roti with tender chicken, vegetables, and aromatic spices. Made fresh to order.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden border border-primary hover:shadow-md transition-all">
                <img src="images/pizza.jpg" alt="Pizza" class="w-full h-48 object-cover">
                <div class="p-8 text-left">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="text-xl font-bold text-dark">Veggie Pizza</h3>
                        <span class="bg-primary-light/30 text-primary font-bold text-lg inline-block px-4 py-1 rounded-full">Rs. 990</span>
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">Stone-baked thin crust topped with fresh seasonal vegetables, mozzarella, and basil.</p>
                </div>
            </div>
        </div>

        <a href="/menu.php" class="inline-block mt-12 px-8 py-4 bg-primary text-white font-semibold rounded-full hover:bg-primary-dark transition-colors">
            View Full Menu
        </a>
    </div>
</section>

<section class="py-16 md:py-20 px-[5%] bg-light">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">
            About FreshBite
        </h2>
        <p class="text-lg text-gray-600 mb-6 max-w-3xl mx-auto">
            FreshBite began in 2018 as a small kitchen on Galle Road, Colombo. What started as a family passion for cooking quickly grew into a neighborhood favorite. Our founder, inspired by the rich culinary traditions of Sri Lanka, set out to create a place where every meal feels like home.
        </p>
        <a href="/about.php" class="inline-block px-8 py-3 bg-primary text-white font-semibold rounded-full hover:bg-primary-dark transition-colors">
            Read our full story
        </a>
    </div>
</section>

<section class="py-16 md:py-20 px-[5%] bg-white">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-dark mb-12">
            What Our Customers Say
        </h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-light rounded-xl p-8 text-left shadow-sm">
                <div class="flex items-center gap-1 mb-4 text-primary text-sm">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    "FreshBite delivers consistent quality every time. The food is always fresh, well-packaged, and arrives right on time. My go-to for a reliable meal."
                </p>
                <p class="font-semibold text-dark">Hasini Perera</p>
                <p class="text-sm text-gray-400">Regular customer</p>
            </div>

            <div class="bg-light rounded-xl p-8 text-left shadow-sm">
                <div class="flex items-center gap-1 mb-4 text-primary text-sm">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    "The chicken kottu here is the best I have had outside home cooking. Friendly staff, clean restaurant, and fair prices. Highly recommend."
                </p>
                <p class="font-semibold text-dark">Dinesh Fernando</p>
                <p class="text-sm text-gray-400">Dine-in customer</p>
            </div>

            <div class="bg-light rounded-xl p-8 text-left shadow-sm">
                <div class="flex items-center gap-1 mb-4 text-primary text-sm">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    "Great variety and the portions are generous. The staff is always polite and the food arrives piping hot. Will definitely order again."
                </p>
                <p class="font-semibold text-dark">Kamala Wijesinghe</p>
                <p class="text-sm text-gray-400">Online order</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 md:py-20 px-[5%] bg-light">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-dark mb-12">
            Visit Us Today
        </h2>

        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <div class="bg-white rounded-xl p-8 border border-primary hover:shadow-md transition-all">
                <div class="w-14 h-14 bg-primary-light/30 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-map-marker-alt text-xl text-primary"></i>
                </div>
                <h3 class="font-bold text-dark mb-2">Address</h3>
                <p class="text-gray-600 text-sm">42 Galle Road<br>Colombo 00300</p>
            </div>

            <div class="bg-white rounded-xl p-8 border border-primary hover:shadow-md transition-all">
                <div class="w-14 h-14 bg-primary-light/30 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-clock text-xl text-primary"></i>
                </div>
                <h3 class="font-bold text-dark mb-2">Hours</h3>
                <p class="text-gray-600 text-sm">Monday - Sunday<br>9:00 AM - 10:00 PM</p>
            </div>

            <div class="bg-white rounded-xl p-8 border border-primary hover:shadow-md transition-all">
                <div class="w-14 h-14 bg-primary-light/30 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-phone text-xl text-primary"></i>
                </div>
                <h3 class="font-bold text-dark mb-2">Phone</h3>
                <p class="text-gray-600 text-sm">
                    <a href="tel:+94112345678" class="text-gray-600 hover:underline">0112 345 678</a>
                </p>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/layout/footer.php'; ?>
</body>
</html>
