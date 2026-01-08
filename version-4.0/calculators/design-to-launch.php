<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=" stylesheet" type="text/css"
        href="https://www.pixelcrayons.com/wp-content/cache/min/1/wp-content/themes/pixelcrayons/dev-style.css?ver=1766056420"
        defer />

    <title>Design-to-Launch Delay Cost Calculator</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js for lightweight reactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        [x-cloak] {
            display: none !important;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    </style>
    <link rel=" stylesheet" type="text/css" href="../assets/css/cal-layout.css" defer />
</head>

<body class="bg-slate-50 text-slate-900 mt-24" x-data="calculatorApp()" x-cloak>
    <main>
        <?php require_once '../assets/include/menu-v5.php'; ?>
        <div class=" banner bg-white ">

            <div class="bg-slate-900 py-20 px-4 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
                    <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <path d="M0 100 C 20 0 50 0 100 100 Z" fill="white"></path>
                    </svg>
                </div>
                <div class="max-w-6xl mx-auto text-center relative z-10">
                    <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                        See How Much <span class="text-red-500">Delayed Launches</span> Are Actually Costing You
                    </h1>
                    <p class="text-xl text-slate-300 mb-10 max-w-2xl mx-auto font-light leading-relaxed">
                        Quantify lost revenue, missed campaign windows, and the real cost of endless revisions — then
                        see
                        how faster execution changes everything.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="#calculator"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-full shadow-lg hover:shadow-xl transition-all flex items-center gap-2 text-lg">
                            Calculate My Delay Cost
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        <button class="text-slate-400 hover:text-white font-medium py-4 px-8 transition-colors">
                            How Design-to-Code Works
                        </button>
                    </div>
                </div>
            </div>



            <div class=" container">
                <?php require_once 'inc/design-to-launch.php'; ?>
            </div>
    </main>
    <script src="js/design-to-launch.js"></script>
</body>

</html>