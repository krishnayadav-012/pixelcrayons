<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=" stylesheet" type="text/css"
        href="https://www.pixelcrayons.com/wp-content/cache/min/1/wp-content/themes/pixelcrayons/dev-style.css?ver=1766056420"
        defer />

    <title>Agency Profit Margin Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #c7d2fe;
            border-radius: 10px;
        }

        input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }
    </style>
    <link rel=" stylesheet" type="text/css" href="assets/css/contact-v3.css" defer />

</head>

<body class="bg-gray-50 text-gray-900 mt-24">


    <main>
        <?php require_once 'assets/include/menu-v5.php'; ?>


        <section class="bg-gradient-to-br from-indigo-900 via-indigo-800 to-blue-900 text-white py-20 px-4 text-center">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight">
                Find Out Your Real Agency Profit Margin <br>
                <span class="text-indigo-300">(Not the One in Your Head)</span>
            </h1>
            <p class="text-lg md:text-xl text-indigo-100 mb-10 max-w-2xl mx-auto">
                Calculate gross vs net margins, see what each client actually costs you, and model how pods improve profitability.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#calc-main" class="bg-indigo-500 hover:bg-indigo-400 text-white font-bold py-4 px-8 rounded-full shadow-lg transition-all text-center">
                    Calculate My Profit
                </a>
                <button class="bg-transparent border border-indigo-300 hover:bg-indigo-800 text-white font-bold py-4 px-8 rounded-full transition-all">
                    How Our Pods Improve Margins
                </button>
            </div>
        </div>
    </section>


        <div class=" container">
            <div id="calc-main" class="max-w-7xl mx-auto px-4 ">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start  py-16">

                    <div
                        class="lg:col-span-5 lg:sticky lg:top-8 overflow-y-auto max-h-[calc(100vh-4rem)] pr-2 custom-scrollbar space-y-6">
                        <div class="bg-indigo-50 p-4 rounded-lg border border-indigo-100">
                            <h2 class="text-indigo-900 font-bold text-lg mb-1 flex items-center gap-2">
                                <i data-lucide="dollar-sign" class="w-5 h-5"></i> Agency Financials
                            </h2>
                            <p class="text-sm text-indigo-700">Adjust the numbers below to see your live breakdown.</p>
                        </div>

                        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                            <div class="flex items-center gap-2 mb-4">
                                <i data-lucide="bar-chart-3" class="w-4 h-4 text-indigo-500"></i>
                                <h3 class="font-bold text-gray-800 uppercase tracking-wider text-xs">Revenue Overview
                                </h3>
                            </div>
                            <div class="space-y-4">
                                <div>
                                    <label class="text-sm font-medium text-gray-700 block mb-1">Monthly Agency
                                        Revenue</label>
                                    <input type="number" id="monthlyRevenue" value="100000"
                                        class="calc-trigger w-full border border-gray-300 rounded-md p-2 bg-white focus:ring-2 focus:ring-indigo-500 outline-none">
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-700 block mb-2">Recurring Retainers %
                                        (<span id="retainerVal">70</span>%)</label>
                                    <input type="range" id="retainerPercent" min="0" max="100" value="70"
                                        class="calc-trigger w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-indigo-600">
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-700 block mb-1">Project Revenue per
                                        Month</label>
                                    <input type="number" id="projectRevenue" value="30000"
                                        class="calc-trigger w-full border border-gray-300 rounded-md p-2 bg-white outline-none">
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                            <div class="flex items-center gap-2 mb-4">
                                <i data-lucide="check-circle" class="w-4 h-4 text-green-500"></i>
                                <h3 class="font-bold text-gray-800 uppercase tracking-wider text-xs">Cost of Delivery
                                    (COGS)</h3>
                            </div>
                            <div class="space-y-4">
                                <div><label class="text-xs font-bold text-gray-500">Delivery Salaries</label>
                                    <input type="number" id="deliverySalaries" value="40000"
                                        class="calc-trigger w-full border rounded-md p-2 outline-none">
                                </div>
                                <div><label class="text-xs font-bold text-gray-500">Freelancer Spend</label>
                                    <input type="number" id="freelancerSpend" value="5000"
                                        class="calc-trigger w-full border rounded-md p-2 outline-none">
                                </div>
                                <div><label class="text-xs font-bold text-gray-500">Delivery Tools</label>
                                    <input type="number" id="deliveryTools" value="2000"
                                        class="calc-trigger w-full border rounded-md p-2 outline-none">
                                </div>
                                <div><label class="text-xs font-bold text-gray-500">Outsourcing Costs</label>
                                    <input type="number" id="outsourcingCosts" value="3000"
                                        class="calc-trigger w-full border rounded-md p-2 outline-none">
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                            <div class="flex items-center gap-2 mb-4">
                                <i data-lucide="alert-triangle" class="w-4 h-4 text-orange-500"></i>
                                <h3 class="font-bold text-gray-800 uppercase tracking-wider text-xs">Overhead (OPEX)
                                </h3>
                            </div>
                            <div class="space-y-4">
                                <div><label class="text-xs font-bold text-gray-500">Leadership Salaries</label>
                                    <input type="number" id="leadershipSalaries" value="15000"
                                        class="calc-trigger w-full border rounded-md p-2 outline-none">
                                </div>
                                <div><label class="text-xs font-bold text-gray-500">Sales & Marketing</label>
                                    <input type="number" id="salesMarketing" value="8000"
                                        class="calc-trigger w-full border rounded-md p-2 outline-none">
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                            <div class="flex items-center gap-2 mb-4">
                                <i data-lucide="users" class="w-4 h-4 text-blue-500"></i>
                                <h3 class="font-bold text-gray-800 uppercase tracking-wider text-xs">Client Distribution
                                </h3>
                            </div>
                            <div class="space-y-4">
                                <div><label class="text-xs font-bold text-gray-500">Active Clients</label>
                                    <input type="number" id="activeClients" value="15"
                                        class="calc-trigger w-full border rounded-md p-2 outline-none">
                                </div>
                                <div><label class="text-xs font-bold text-gray-500">Pod Cost per Month</label>
                                    <input type="number" id="podCost" value="15000"
                                        class="calc-trigger w-full border rounded-md p-2 outline-none">
                                </div>
                                <div><label class="text-xs font-bold text-gray-500">Clients Per Pod</label>
                                    <input type="number" id="clientsPerPod" value="6"
                                        class="calc-trigger w-full border rounded-md p-2 outline-none">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-7">
                        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                            <div class="p-8 border-b border-gray-100">
                                <h2 class="text-2xl font-bold text-gray-900">Your Profit Margin Breakdown</h2>
                                <p class="text-gray-500">Real-time analysis based on your financial inputs.</p>
                            </div>

                            <div class="p-8 space-y-8">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="bg-indigo-50 p-6 rounded-2xl text-center">
                                        <p class="text-indigo-600 text-sm font-semibold uppercase mb-2">Gross Margin</p>
                                        <p id="grossMarginText" class="text-4xl font-extrabold text-indigo-900">0%</p>
                                        <div id="grossLabel"
                                            class="mt-2 inline-block px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700">
                                            Healthy</div>
                                    </div>
                                    <div class="bg-blue-50 p-6 rounded-2xl text-center">
                                        <p class="text-blue-600 text-sm font-semibold uppercase mb-2">Net Margin</p>
                                        <p id="netMarginText" class="text-4xl font-extrabold text-blue-900">0%</p>
                                        <div id="netLabel"
                                            class="mt-2 inline-block px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700">
                                            Healthy</div>
                                    </div>
                                </div>

                                <div class="h-64 w-full">
                                    <canvas id="profitChart"></canvas>
                                </div>

                                <div class="bg-gray-50 p-6 rounded-2xl border border-gray-100">
                                    <h4 class="font-bold text-gray-800 mb-4 flex items-center justify-between">
                                        Delivery Cost Per Client
                                        <span
                                            class="bg-green-500 text-white text-[10px] px-2 py-0.5 rounded-full uppercase tracking-tighter">Unit
                                            Economics</span>
                                    </h4>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                        <div class="text-center">
                                            <p class="text-xs text-gray-500 uppercase">Avg Rev / Client</p>
                                            <p id="revPerClientText" class="text-xl font-bold text-gray-800">$0</p>
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xs text-gray-500 uppercase">Avg Cost / Client</p>
                                            <p id="costPerClientText" class="text-xl font-bold text-red-600">$0</p>
                                        </div>
                                        <div class="text-center">
                                            <p class="text-xs text-gray-500 uppercase">Profit / Client</p>
                                            <p id="profitPerClientText" class="text-xl font-bold text-green-600">$0</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-indigo-900 text-white p-8 rounded-2xl relative overflow-hidden">
                                    <h4 class="text-xl font-bold mb-6 flex text-white items-center gap-2">
                                        <i data-lucide="trending-up " class="w-6 h-6 text-indigo-300"></i> Pod Scenario
                                        Comparison
                                    </h4>
                                    <div class="grid grid-cols-2 gap-8 mb-8">
                                        <div class="space-y-3">
                                            <p class="text-indigo-300 text-xs font-bold uppercase">Current Model</p>
                                            <div class="flex justify-between border-b border-indigo-800 pb-1">
                                                <span class="text-sm">Net Margin</span>
                                                <span id="currentNetCompare" class="font-bold">0%</span>
                                            </div>
                                        </div>
                                        <div class="space-y-3">
                                            <p class="text-green-400 text-xs font-bold uppercase">With Pods</p>
                                            <div class="flex justify-between border-b border-indigo-800 pb-1">
                                                <span class="text-sm">New Net</span>
                                                <span id="podNetCompare" class="font-bold text-green-400">0%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-indigo-800/50 p-4 rounded-xl text-center">
                                        <p class="text-sm text-indigo-100 mb-1">Estimated Annual Profit Increase</p>
                                        <p id="annualUpliftText" class="text-3xl font-black text-green-400">$0</p>
                                        <p class="text-xs text-indigo-300 mt-2 font-medium uppercase tracking-widest">
                                            More profit. Less staffing risk.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <script>
            // Initialize Lucide Icons
            lucide.createIcons();

            // Chart Initialization
            const ctx = document.getElementById('profitChart').getContext('2d');
            let profitChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['P&L Breakdown'],
                    datasets: [
                        { label: 'COGS', data: [0], backgroundColor: '#6366f1' },
                        { label: 'OPEX', data: [0], backgroundColor: '#94a3b8' },
                        { label: 'Net Profit', data: [0], backgroundColor: '#10b981' }
                    ]
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: { stacked: true, display: false },
                        y: { stacked: true }
                    },
                    plugins: { legend: { position: 'bottom' } }
                }
            });

            function calculate() {
                // Get values
                const monthlyRevenue = parseFloat(document.getElementById('monthlyRevenue').value) || 0;
                const projectRevenue = parseFloat(document.getElementById('projectRevenue').value) || 0;
                const retainerPercent = parseFloat(document.getElementById('retainerPercent').value) || 0;
                const deliverySalaries = parseFloat(document.getElementById('deliverySalaries').value) || 0;
                const freelancerSpend = parseFloat(document.getElementById('freelancerSpend').value) || 0;
                const deliveryTools = parseFloat(document.getElementById('deliveryTools').value) || 0;
                const outsourcingCosts = parseFloat(document.getElementById('outsourcingCosts').value) || 0;
                const leadershipSalaries = parseFloat(document.getElementById('leadershipSalaries').value) || 0;
                const salesMarketing = parseFloat(document.getElementById('salesMarketing').value) || 0;
                const activeClients = parseFloat(document.getElementById('activeClients').value) || 1;
                const podCost = parseFloat(document.getElementById('podCost').value) || 0;
                const clientsPerPod = parseFloat(document.getElementById('clientsPerPod').value) || 1;

                // Logic
                document.getElementById('retainerVal').innerText = retainerPercent;
                const totalRev = monthlyRevenue + projectRevenue;
                const totalCogs = deliverySalaries + freelancerSpend + deliveryTools + outsourcingCosts;
                const totalOpex = leadershipSalaries + salesMarketing + 7000; // adding constant for admin/office

                const grossProfit = totalRev - totalCogs;
                const netProfit = grossProfit - totalOpex;

                const grossMargin = totalRev > 0 ? (grossProfit / totalRev) * 100 : 0;
                const netMargin = totalRev > 0 ? (netProfit / totalRev) * 100 : 0;

                // Pod Logic
                const podsNeeded = Math.ceil(activeClients / clientsPerPod);
                const podNewCogs = (podsNeeded * podCost) + deliveryTools;
                const podNetMargin = totalRev > 0 ? ((totalRev - podNewCogs - totalOpex) / totalRev) * 100 : 0;
                const annualUplift = (podNetMargin - netMargin) * totalRev * 0.12;

                // Update UI
                document.getElementById('grossMarginText').innerText = grossMargin.toFixed(1) + '%';
                document.getElementById('netMarginText').innerText = netMargin.toFixed(1) + '%';

                document.getElementById('grossLabel').className = grossMargin >= 55 ? 'mt-2 inline-block px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700' : 'mt-2 inline-block px-3 py-1 rounded-full text-xs font-bold bg-red-100 text-red-700';
                document.getElementById('grossLabel').innerText = grossMargin >= 55 ? 'Healthy' : 'Below Average';

                document.getElementById('revPerClientText').innerText = '$' + Math.round(totalRev / activeClients).toLocaleString();
                document.getElementById('costPerClientText').innerText = '$' + Math.round(totalCogs / activeClients).toLocaleString();
                document.getElementById('profitPerClientText').innerText = '$' + Math.round((totalRev - totalCogs) / activeClients).toLocaleString();

                document.getElementById('currentNetCompare').innerText = Math.round(netMargin) + '%';
                document.getElementById('podNetCompare').innerText = Math.round(podNetMargin) + '%';
                document.getElementById('annualUpliftText').innerText = '$' + Math.round(Math.abs(annualUplift)).toLocaleString();

                // Update Chart
                profitChart.data.datasets[0].data = [totalCogs];
                profitChart.data.datasets[1].data = [totalOpex];
                profitChart.data.datasets[2].data = [Math.max(0, netProfit)];
                profitChart.update();
            }

            // Add Listeners
            document.querySelectorAll('.calc-trigger').forEach(input => {
                input.addEventListener('input', calculate);
            });

            // Initial Run
            calculate();


            if (document.querySelector(".header-two")) {
                var lastScrollTop = 0; window.addEventListener("scroll", function () {
                    window.pageYOffset > 10 ? document.querySelector(".header-two").classList.add("header-bg") : document.querySelector(".header-two").classList.remove("header-bg"); let scrollST = window.pageYOffset || document.documentElement.scrollTop; if (scrollST > lastScrollTop) { document.querySelector(".header-two").classList.remove("sc-up"); document.querySelector(".header-two").classList.add("sc-down") } else { document.querySelector(".header-two").classList.remove("sc-down"); document.querySelector(".header-two").classList.add("sc-up") }
                    lastScrollTop = scrollST <= 0 ? 0 : scrollST
                })
            }


        </script>


    </main>



</body>

</html>