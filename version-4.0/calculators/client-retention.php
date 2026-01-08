<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=" stylesheet" type="text/css"
        href="https://www.pixelcrayons.com/wp-content/cache/min/1/wp-content/themes/pixelcrayons/dev-style.css?ver=1766056420"
        defer />

    <title>Agency Retention vs Acquisition Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>

        .gradient-bg {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

    </style>
    <link rel=" stylesheet" type="text/css" href="../assets/css/cal-layout.css" defer />



</head>

<body class="bg-slate-50 text-slate-900   mt-24">
    <main>
        <?php require_once '../assets/include/menu-v5.php'; ?>
 
       <div class="bg-white border-b border-slate-200 pt-16 pb-20 px-4">
        <div class="max-w-6xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 border border-blue-100 text-blue-600 text-xs font-semibold mb-6">
                AGENCY PROFITABILITY ENGINE
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6 tracking-tight">
                See How Much Losing Clients Is <span class="text-red-500">Really</span> Costing Your Agency
            </h1>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto mb-10 leading-relaxed">
                Compare the true cost of churn vs replacing clients — and see how consistent delivery increases lifetime value and profit.
            </p>
            <a href="#calculator" class="px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-bold shadow-lg shadow-blue-200 transition-all inline-block">
                Calculate My Retention Cost
            </a>
        </div>
    </div>


        <div class=" container">
            <?php require_once 'inc/client-retention.php'; ?>
        </div>
    </main>
<script src="js/client-retention.js"></script>
</body>
</html>