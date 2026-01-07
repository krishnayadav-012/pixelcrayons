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
    <link rel=" stylesheet" type="text/css" href="assets/css/contact-v3.css" defer />

</head>

<body class="bg-slate-50 text-slate-900 mt-28">
    <main>
        <?php require_once 'assets/include/menu-v5.php'; ?>

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
            <div id="calculator" class="max-w-7xl mx-auto px-4 -mt-10 pb-20">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                    <div class="lg:col-span-5 space-y-6 lg:sticky lg:top-8">
                        <div class="bg-slate-800 text-white p-6 rounded-2xl shadow-xl">
                            <h2 class="text-xl font-bold mb-2">Agency Parameters</h2>
                            <p class="text-slate-400 text-sm">Update these values to see your custom report.</p>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 space-y-4">
                            <h3 class="font-bold text-slate-800 uppercase text-xs tracking-wider">Snapshot</h3>
                            <div class="space-y-3">
                                <div>
                                    <label class="text-sm font-medium text-slate-600">Active Clients</label>
                                    <input type="number" id="activeClients" value="25"
                                        class="w-full px-3 py-2 rounded-lg border border-slate-300 outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-slate-600">Avg Monthly Revenue ($)</label>
                                    <input type="number" id="avgMonthlyRevenue" value="5000"
                                        class="w-full px-3 py-2 rounded-lg border border-slate-300 outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-slate-600">Avg Client Lifetime
                                        (Months)</label>
                                    <input type="number" id="avgLifetimeMonths" value="12"
                                        class="w-full px-3 py-2 rounded-lg border border-slate-300 outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 space-y-4">
                            <h3 class="font-bold text-slate-800 uppercase text-xs tracking-wider">Churn & Retention</h3>
                            <div class="space-y-3">
                                <div>
                                    <label class="text-sm font-medium text-slate-600">Monthly Churn Rate (%)</label>
                                    <input type="number" id="monthlyChurnRate" value="5"
                                        class="w-full px-3 py-2 rounded-lg border border-slate-300 outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                                <div class="flex justify-between items-center text-sm bg-slate-50 p-3 rounded-lg">
                                    <span class="text-slate-600 font-medium">Clients lost / month</span>
                                    <span id="displayLostPerMonth" class="text-red-600 font-bold">1.3</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 space-y-4">
                            <h3 class="font-bold text-slate-800 uppercase text-xs tracking-wider">Cost to Replace (CAC)
                            </h3>
                            <div class="space-y-3">
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="text-sm font-medium text-slate-600">Cost per Lead</label>
                                        <input type="number" id="costPerLead" value="150"
                                            class="w-full px-3 py-2 rounded-lg border border-slate-300">
                                    </div>
                                    <div>
                                        <label class="text-sm font-medium text-slate-600">Leads per Close</label>
                                        <input type="number" id="leadsToClose" value="10"
                                            class="w-full px-3 py-2 rounded-lg border border-slate-300">
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="text-sm font-medium text-slate-600">Sales Hrs/Mo</label>
                                        <input type="number" id="salesTeamHours" value="20"
                                            class="w-full px-3 py-2 rounded-lg border border-slate-300">
                                    </div>
                                    <div>
                                        <label class="text-sm font-medium text-slate-600">Sales Rate/Hr</label>
                                        <input type="number" id="blendedSalesRate" value="75"
                                            class="w-full px-3 py-2 rounded-lg border border-slate-300">
                                    </div>
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-slate-600">Onboarding Cost</label>
                                    <input type="number" id="onboardingCost" value="2000"
                                        class="w-full px-3 py-2 rounded-lg border border-slate-300">
                                </div>
                            </div>
                        </div>

                        <input type="hidden" id="expectedChurnReduction" value="25">
                        <input type="hidden" id="accountManagerHoursPerClient" value="4">
                        <input type="hidden" id="blendedSupportRate" value="60">
                    </div>

                    <div class="lg:col-span-7 space-y-8">
                        <div class="bg-white rounded-3xl shadow-xl p-8 border border-slate-200">
                            <div class="text-center mb-10">
                                <h2 class="text-3xl font-bold text-slate-900 mb-2">Your Reality Check</h2>
                                <p class="text-slate-500">Financial impact of churn and replacement.</p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
                                <div class="p-4 rounded-xl border bg-red-50 border-red-200 shadow-sm">
                                    <p class="text-xs font-medium text-slate-500 mb-1">Clients Lost Per Year</p>
                                    <p id="resClientsLostYear" class="text-2xl font-bold text-red-700">15</p>
                                </div>
                                <div class="p-4 rounded-xl border bg-red-50 border-red-200 shadow-sm">
                                    <p class="text-xs font-medium text-slate-500 mb-1">Annual Churn Revenue Loss</p>
                                    <p id="resAnnualChurnLoss" class="text-2xl font-bold text-red-700">$0</p>
                                </div>
                            </div>

                            <div class="mb-12">
                                <h3 class="font-bold text-slate-800 mb-6 text-center">Cost to Retain vs. Acquire (Per
                                    Client)</h3>
                                <div class="h-64">
                                    <canvas id="costChart"></canvas>
                                </div>
                                <div id="savingsMessage"
                                    class="mt-6 p-4 bg-green-50 border border-green-100 rounded-xl text-center text-green-800 font-bold">
                                    Retaining costs 0% less than replacing.
                                </div>
                            </div>

                            <div class="bg-indigo-900 text-white rounded-2xl p-8 shadow-xl">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="p-2 bg-indigo-700 rounded-lg">🛡️</div>
                                    <h3 class="text-xl font-bold">Recovery Potential</h3>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <div>
                                        <p class="text-indigo-200 text-sm mb-2">Recoverable Revenue / Year</p>
                                        <p id="resRecoveryPotential" class="text-4xl font-black">$0</p>
                                        <p class="text-indigo-300 text-xs mt-2">By optimizing delivery consistency.</p>
                                    </div>
                                    <div class="space-y-3 text-sm text-indigo-100">
                                        <div>✅ Higher Lifetime Value</div>
                                        <div>✅ Lower Sales Pressure</div>
                                        <div>✅ Increased Referrals</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <section class="bg-white rounded-3xl shadow-xl p-8 border border-slate-200">
                            <h3 class="text-2xl font-bold text-slate-900 text-center mb-8">Get Your Detailed Roadmap
                            </h3>
                            <form onsubmit="event.preventDefault(); alert('Report requested!');" class="space-y-4">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <input type="text" placeholder="Full Name"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-300 outline-none focus:ring-2 focus:ring-blue-500">
                                    <input type="email" placeholder="Work Email"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-300 outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                                <button
                                    class="w-full py-4 bg-slate-900 text-white rounded-xl font-bold text-lg hover:bg-slate-800 transition-all">
                                    Email My Retention Report
                                </button>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <script>
           // DOM Elements
        const inputs = [
            'activeClients', 'avgMonthlyRevenue', 'avgLifetimeMonths', 
            'monthlyChurnRate', 'costPerLead', 'leadsToClose', 
            'salesTeamHours', 'blendedSalesRate', 'onboardingCost'
        ];

        let myChart;

        function formatCurrency(num) {
            return new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD', maximumFractionDigits: 0 }).format(num);
        }

        function calculate() {
            // Get Values
            const activeClients = parseFloat(document.getElementById('activeClients').value) || 0;
            const avgRev = parseFloat(document.getElementById('avgMonthlyRevenue').value) || 0;
            const lifetime = parseFloat(document.getElementById('avgLifetimeMonths').value) || 0;
            const churnRate = parseFloat(document.getElementById('monthlyChurnRate').value) || 0;
            const costPerLead = parseFloat(document.getElementById('costPerLead').value) || 0;
            const leadsToClose = parseFloat(document.getElementById('leadsToClose').value) || 0;
            const salesHrs = parseFloat(document.getElementById('salesTeamHours').value) || 0;
            const salesRate = parseFloat(document.getElementById('blendedSalesRate').value) || 0;
            const onboarding = parseFloat(document.getElementById('onboardingCost').value) || 0;
            
            const expectedChurnReduct = 25;
            const accManagerHrs = 4;
            const supportRate = 60;

            // Logic
            const lostMonth = activeClients * (churnRate / 100);
            const lostYear = lostMonth * 12;
            
            const salesLaborPerClient = (salesHrs * salesRate) / (lostMonth || 1);
            const cac = (costPerLead * leadsToClose) + salesLaborPerClient + onboarding;
            
            const ltv = avgRev * lifetime;
            const ltvDestroyed = lostYear * ltv;
            
            const costToRetain = (accManagerHrs * supportRate) * lifetime;
            const savingsPercent = cac > 0 ? Math.max(0, (1 - (costToRetain / (cac + costToRetain))) * 100) : 0;
            
            const recoveryPotential = (churnRate * (expectedChurnReduct / 100) / 100) * 12 * activeClients * ltv;

            // Update UI
            document.getElementById('displayLostPerMonth').innerText = lostMonth.toFixed(1);
            document.getElementById('resClientsLostYear').innerText = Math.round(lostYear);
            document.getElementById('resAnnualChurnLoss').innerText = formatCurrency(ltvDestroyed);
            document.getElementById('resRecoveryPotential').innerText = formatCurrency(recoveryPotential);
            document.getElementById('savingsMessage').innerText = `Retaining costs ${Math.round(savingsPercent)}% less than replacing.`;

            updateChart(costToRetain, cac);
        }

        function updateChart(retain, acquire) {
            const ctx = document.getElementById('costChart').getContext('2d');
            
            if (myChart) {
                myChart.data.datasets[0].data = [retain, acquire];
                myChart.update();
            } else {
                myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Retain Existing', 'Acquire New (CAC)'],
                        datasets: [{
                            data: [retain, acquire],
                            backgroundColor: ['#3b82f6', '#ef4444'],
                            borderRadius: 8
                        }]
                    },
                    options: {
                        indexAxis: 'y',
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: { legend: { display: false } },
                        scales: { x: { display: false }, y: { grid: { display: false } } }
                    }
                });
            }
        }

        // Event Listeners
        inputs.forEach(id => {
            document.getElementById(id).addEventListener('input', calculate);
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