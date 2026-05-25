<?php
define('FRESHBITE_SITE_SECURE_ACCESS', true);

$page_name = 'About Us';

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
                About FreshBite
            </h1>
            <p class="text-lg md:text-xl text-gray-200 max-w-2xl">
                Family-run since 2018
            </p>
        </div>
    </div>
</section>

<section class="py-16 md:py-20 px-[5%] bg-light">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-dark mb-12">
            Our Story
        </h2>
        <div class="space-y-8 text-left">
            <div class="flex gap-6">
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white font-bold text-sm flex-shrink-0">
                        1
                    </div>
                    <div class="w-px h-full bg-gray-300 mt-2"></div>
                </div>
                <div class="pb-8">
                    <h3 class="text-lg font-bold text-dark mb-1">2018 - The Beginning</h3>
                    <p class="text-gray-600">FreshBite was established in 2018 as a humble kitchen at the end of the road known as Galle, in Colombo. The love and passion that our founder had towards cooking resulted in a place that soon became a popular establishment in the neighborhood. Inspired by the culinary culture of Sri Lanka, our founder decided to open up a restaurant that would remind our customers of the food of their childhood.</p>
                </div>
            </div>
            <div class="flex gap-6">
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white font-bold text-sm flex-shrink-0">
                        2
                    </div>
                    <div class="w-px h-full bg-gray-300 mt-2"></div>
                </div>
                <div class="pb-8">
                    <h3 class="text-lg font-bold text-dark mb-1">2020 - Growth</h3>
                    <p class="text-gray-600">When we first opened, our menu comprised a limited number of items which included our mouth-watering flame grilled burgers, tossed pizzas, and rice and curry. However, after gaining immense popularity among the locals, in just two years' time, we were able to expand ourselves and move to the place that we occupy today.</p>
                </div>
            </div>
            <div class="flex gap-6">
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white font-bold text-sm flex-shrink-0">
                        3
                    </div>
                </div>
                <div class="pb-8">
                    <h3 class="text-lg font-bold text-dark mb-4">Today</h3>
                    <p class="text-gray-600 mb-4">
                        Currently, we offer an extensive menu of five items that include burgers, pizza, rice and curry, kottu and drinks. Everything that goes into making your food is always fresh and everything we do comes straight from the heart.
                    </p>
                    <p class="text-gray-600">
                        The people that work at FreshBite have all joined with the intention of serving delicious meals. Right from our cooks to our service team, we all aim at bringing happiness to our customers.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/layout/footer.php'; ?>
</body>

</html>