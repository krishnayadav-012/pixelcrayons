<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=" stylesheet" type="text/css"
        href="https://www.pixelcrayons.com/wp-content/cache/min/1/wp-content/themes/pixelcrayons/dev-style.css?ver=1766056420"
        defer />
    <title>PodCalc | Agency Capacity & Burnout Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        
        .gradient-bg { background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); }
        input[type=range] { height: 6px; -webkit-appearance: none; border-radius: 5px; background: #e2e8f0; }
        input[type=range]::-webkit-slider-thumb { -webkit-appearance: none; height: 18px; width: 18px; border-radius: 50%; background: #2563eb; cursor: pointer; }
    </style>
    <link rel=" stylesheet" type="text/css" href="../assets/css/cal-layout.css" defer />

</head>

<body class="bg-slate-50 text-slate-900 overflow-x-hidden mt-24" x-data="calculatorApp()" x-init="initCharts()">

    <main>
        <?php require_once '../assets/include/menu-v5.php'; ?>
 
       <div class="gradient-bg text-white pt-24 pb-32 px-4 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
            <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                        <path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="1"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid)" />
            </svg>
        </div>
        
        <div class="max-w-6xl mx-auto text-center relative z-10">
            <span class="bg-blue-600/30 text-blue-300 text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-widest mb-6 inline-block border border-blue-500/20">
                For Agency Founders & Operations Leaders
            </span>
            <h1 class="text-4xl md:text-6xl font-black mb-6 leading-tight max-w-4xl mx-auto">
                Find Out What Overloading Your Team Is <span class="text-blue-400">Really Costing You</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-300 mb-10 max-w-2xl mx-auto leading-relaxed">
                See your true delivery capacity, hidden burnout cost, and the revenue lost to missed deadlines — then compare it to a high-performance pod model.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#calculator-section" class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 py-4 rounded-xl shadow-2xl transition-all hover:scale-105 w-full sm:w-auto text-center">
                    Calculate My Capacity
                </a>
                <button class="text-slate-300 hover:text-white font-bold px-8 py-4 w-full sm:w-auto border border-slate-700 hover:border-slate-500 rounded-xl transition-all">
                    Learn How Delivery Pods Work
                </button>
            </div>
        </div>
    </div>

        <div class=" container">
            <?php require_once 'inc/agency-delivery.php'; ?>
        </div>

    </main>
<script src="js/agency-delivery.js"></script>
</body>
</html>