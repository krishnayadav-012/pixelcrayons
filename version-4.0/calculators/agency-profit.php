<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=" stylesheet" type="text/css"
        href="https://www.pixelcrayons.com/wp-content/cache/min/1/wp-content/themes/pixelcrayons/dev-style.css?ver=1766056420"
        defer />

    <title>Agency Profitability Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .sticky-results {
            position: sticky;
            top: 2rem;
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

        <section class="bg-gradient-to-br from-indigo-900 via-indigo-800 to-blue-900 text-white py-20 px-4 text-center">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight">
                    Find Out Your Real Agency Profit Margin <br>
                    <span class="text-indigo-300">(Not the One in Your Head)</span>
                </h1>
                <p class="text-lg md:text-xl text-indigo-100 mb-10 max-w-2xl mx-auto">
                    Calculate gross vs net margins, see what each client actually costs you, and model how pods improve
                    profitability.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#calc-main"
                        class="bg-indigo-500 hover:bg-indigo-400 text-white font-bold py-4 px-8 rounded-full shadow-lg transition-all text-center">
                        Calculate My Profit
                    </a>
                    <button
                        class="bg-transparent border border-indigo-300 hover:bg-indigo-800 text-white font-bold py-4 px-8 rounded-full transition-all">
                        How Our Pods Improve Margins
                    </button>
                </div>
            </div>
        </section>



        <div class=" container">
            <?php require_once 'inc/agency-profit.php'; ?>
        </div>
    </main>
    <script src="js/agency-profit.js"></script>
</body>

</html>