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
 
        <div class="py-20 px-3 banner bg-white ">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight text-slate-900 mb-6">See How Much Profit
                    You Gain by <span class="text-blue-600">Staying Lean</span></h1>
                <p class="text-xl text-slate-600 mb-10 max-w-2xl mx-auto">Compare the full cost of an in-house team vs a
                    white-label pod — including salaries, ramp time, hidden overhead, and profit impact.</p><button
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-10 rounded-full text-lg shadow-lg transition-all transform hover:scale-105 active:scale-95 mb-8">Start
                    Calculating</button>
                <div class="flex flex-wrap justify-center gap-6 text-sm text-slate-500 font-medium"><span
                        class="flex items-center gap-1"><svg class="w-4 h-4 text-emerald-500" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7">
                            </path>
                        </svg> No email required</span><span class="flex items-center gap-1"><svg
                            class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7">
                            </path>
                        </svg> Takes 30 seconds</span><span class="flex items-center gap-1"><svg
                            class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7">
                            </path>
                        </svg> Realistic agency assumptions</span></div>
            </div>
        </div>


        <div class=" container">
            <?php require_once 'inc/team-revenue.php'; ?>
        </div>
    </main>
<script src="js/team-revenue.js"></script>
</body>
</html>