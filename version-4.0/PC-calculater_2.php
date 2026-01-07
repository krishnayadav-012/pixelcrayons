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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; scroll-behavior: smooth; }
        .gradient-bg { background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); }
        input[type=range] { height: 6px; -webkit-appearance: none; border-radius: 5px; background: #e2e8f0; }
        input[type=range]::-webkit-slider-thumb { -webkit-appearance: none; height: 18px; width: 18px; border-radius: 50%; background: #2563eb; cursor: pointer; }
    </style>
    <link rel=" stylesheet" type="text/css" href="assets/css/contact-v3.css" defer />

</head>

<body class="bg-slate-50 text-slate-900 overflow-x-hidden mt-24" x-data="calculatorApp()" x-init="initCharts()">

    <?php require_once 'assets/include/menu-v5.php'; ?>

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

<main id="calculator-section" class="max-w-7xl mx-auto px-4 mt-16 relative z-20 pb-20">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start ">
            
            <aside class="lg:col-span-5 lg:sticky lg:top-8 space-y-4 pb-12">
                <h2 class="text-xl font-bold text-slate-900 mb-6 flex items-center gap-2">
                    <span class="bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center text-sm">1</span>
                    Team Delivery Specs
                </h2>

                <div class="bg-white p-5 rounded-xl shadow-sm border border-slate-200 transition-all hover:shadow-md">
                    <h3 class="text-sm font-bold text-slate-800 uppercase tracking-wider mb-4 border-b pb-2 border-slate-100">Team Structure</h3>
                    <div class="space-y-4">
                        <div class="flex flex-col gap-1">
                            <label class="text-sm font-medium text-slate-700">Total team members</label>
                            <input type="number" id="totalTeam" value="10" class="border border-slate-300 rounded-md p-2 text-sm focus:ring-2 focus:ring-blue-500 outline-none">
                        </div>
                        <div class="flex flex-col gap-1">
                            <label class="text-sm font-medium text-slate-700">Billable roles (%): <span id="billablePctVal">80</span>%</label>
                            <input type="range" id="billableRolePct" min="0" max="100" value="80" class="w-full">
                        </div>
                        <div class="flex flex-col gap-1">
                            <label class="text-sm font-medium text-slate-700">Avg hourly rate ($)</label>
                            <input type="number" id="avgHourlyRate" value="150" class="border border-slate-300 rounded-md p-2 text-sm focus:ring-2 focus:ring-blue-500 outline-none">
                        </div>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-xl shadow-sm border border-slate-200 transition-all hover:shadow-md">
                    <h3 class="text-sm font-bold text-slate-800 uppercase tracking-wider mb-4 border-b pb-2 border-slate-100">Current Workload</h3>
                    <div class="space-y-4">
                        <div class="flex flex-col gap-1">
                            <label class="text-sm font-medium text-slate-700">Actual Utilization (%): <span id="actualUtilVal">95</span>%</label>
                            <input type="range" id="actualUtilization" min="0" max="120" value="95" class="w-full accent-red-500">
                        </div>
                        <div class="flex flex-col gap-1">
                            <label class="text-sm font-medium text-slate-700">Missed deadlines / mo</label>
                            <input type="number" id="missedDeadlinesPerMonth" value="2" class="border border-slate-300 rounded-md p-2 text-sm">
                        </div>
                    </div>
                </div>

                <div class="bg-white p-5 rounded-xl shadow-sm border border-slate-200 transition-all hover:shadow-md">
                    <h3 class="text-sm font-bold text-slate-800 uppercase tracking-wider mb-4 border-b pb-2 border-slate-100">Hidden Friction</h3>
                    <div class="space-y-4">
                        <div class="flex flex-col gap-1">
                            <label class="text-sm font-medium text-slate-700">Avg projects per person</label>
                            <input type="number" id="avgProjectsPerPerson" value="4" class="border border-slate-300 rounded-md p-2 text-sm">
                        </div>
                        <div class="flex flex-col gap-1">
                            <label class="text-sm font-medium text-slate-700">Annual Turnover (%): <span id="turnoverVal">25</span>%</label>
                            <input type="range" id="turnoverPct" min="0" max="100" value="25" class="w-full accent-red-600">
                        </div>
                    </div>
                </div>
            </aside>

            <section class="lg:col-span-7 space-y-8">
                <div class="flex flex-col gap-1">
                    <h2 class="text-xl font-bold text-slate-900 flex items-center gap-2">
                       <span class="bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center text-sm">2</span>
                       Your Capacity Reality Check
                    </h2>
                    <p class="text-slate-500 text-sm">Based on your current engine settings.</p>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
                    <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6 divide-y md:divide-y-0 md:divide-x divide-slate-100">
                        <div class="text-center">
                            <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Current Utilization</p>
                            <p id="resUtilization" class="text-4xl font-black text-red-600">95%</p>
                        </div>
                        <div class="text-center pt-6 md:pt-0">
                            <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Overload Gap</p>
                            <p id="resOverload" class="text-4xl font-black text-red-600">+15%</p>
                        </div>
                        <div class="text-center pt-6 md:pt-0">
                            <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-2">Annual Hidden Cost</p>
                            <p id="resHiddenCost" class="text-4xl font-black text-slate-900">$0</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
                    <h3 class="text-lg font-bold mb-6">Annual Hidden Cost Breakdown</h3>
                    <div class="h-64">
                        <canvas id="costBreakdownChart"></canvas>
                    </div>
                </div>

                <div class="bg-slate-900 text-white p-6 rounded-2xl shadow-xl border border-slate-800">
                    <h3 class="text-lg font-bold text-white mb-4 italic">The Capacity Ceiling</h3>
                    <div class="flex flex-col gap-4">
                        <div class="relative h-4 bg-slate-800 rounded-full overflow-hidden">
                            <div id="capacityBar" class="absolute top-0 left-0 h-full bg-blue-500 transition-all duration-700" style="width: 70%"></div>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span>Safe Sustainable Limit</span>
                            <span id="resSustainableProj" class="font-bold">0 Projects</span>
                        </div>
                        <p class="text-xs text-slate-400">Operating above this level causes exponential increases in rework and burnout.</p>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-2xl border border-blue-100">
                    <div class="flex justify-between items-start mb-6">
                        <h3 class="text-lg font-bold text-slate-900">Pod-Based Delivery Savings</h3>
                        <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-[10px] font-bold uppercase">Recommended Model</span>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white p-4 rounded-xl shadow-sm border border-blue-100 text-center">
                            <p class="text-[10px] text-slate-500 font-bold uppercase mb-1">Recovered Annual Profit</p>
                            <p id="resPodSavings" class="text-2xl font-black text-blue-600">$0</p>
                        </div>
                        <div class="bg-white p-4 rounded-xl shadow-sm border border-blue-100 text-center flex flex-col justify-center">
                            <p class="text-[10px] text-slate-500 font-bold uppercase mb-1">Burnout Risk</p>
                            <p class="text-xl font-bold text-green-600 uppercase tracking-tight">Minimal</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl border-2 border-blue-600 shadow-xl relative overflow-hidden">
                    <div class="relative z-10 text-center">
                        <h3 class="text-2xl font-bold text-slate-900 mb-2">Get the Full Report</h3>
                        <p class="text-slate-600 mb-6">Receive a detailed PDF breakdown + Pod transition blueprint.</p>
                        <form class="space-y-4" onsubmit="event.preventDefault(); alert('Report requested!');">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <input type="text" placeholder="Full Name" class="w-full border p-3 rounded-lg text-sm outline-none focus:ring-2 focus:ring-blue-500" required>
                                <input type="email" placeholder="Work Email" class="w-full border p-3 rounded-lg text-sm outline-none focus:ring-2 focus:ring-blue-500" required>
                            </div>
                            <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-xl shadow-lg transition-transform hover:-translate-y-1">
                                Email Me My Full Report
                            </button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        </div>
    </main>





   <script>
        // --- CONSTANTS & INITIAL STATE ---
        const CONSTANTS = {
            targetUtilization: 80,
            costPerMissedDeadline: 5000,
            reworkPct: 15,
            replacementCost: 35000,
            rampTimeMonths: 3,
            avgHoursPerWeek: 45,
            productivityLossPct: 20
        };

        let costChart;

        // --- CALCULATION LOGIC ---
        function calculate() {
            // Inputs
            const totalTeam = parseFloat(document.getElementById('totalTeam').value) || 0;
            const billableRolePct = parseFloat(document.getElementById('billableRolePct').value) || 0;
            const avgHourlyRate = parseFloat(document.getElementById('avgHourlyRate').value) || 0;
            const actualUtilization = parseFloat(document.getElementById('actualUtilization').value) || 0;
            const missedDeadlines = parseFloat(document.getElementById('missedDeadlinesPerMonth').value) || 0;
            const projectsPerPerson = parseFloat(document.getElementById('avgProjectsPerPerson').value) || 0;
            const turnoverPct = parseFloat(document.getElementById('turnoverPct').value) || 0;

            // UI Label Updates
            document.getElementById('billablePctVal').innerText = billableRolePct;
            document.getElementById('actualUtilVal').innerText = actualUtilization;
            document.getElementById('turnoverVal').innerText = turnoverPct;

            // Math
            const billableStaff = totalTeam * (billableRolePct / 100);
            const weeklyHours = CONSTANTS.avgHoursPerWeek;
            const totalBillableHoursYear = billableStaff * weeklyHours * 52 * (actualUtilization / 100);

            // 1. Lost Revenue
            const lostRevenueDeadlines = missedDeadlines * CONSTANTS.costPerMissedDeadline * 12;

            // 2. Cost of Rework
            const reworkHours = totalBillableHoursYear * (CONSTANTS.reworkPct / 100);
            const costOfRework = reworkHours * avgHourlyRate;

            // 3. Context Switching Inefficiency
            const costOfContextSwitching = totalBillableHoursYear * (CONSTANTS.productivityLossPct / 100) * avgHourlyRate;

            // 4. Attrition
            const peopleLeavingYear = totalTeam * (turnoverPct / 100);
            const attritionCost = peopleLeavingYear * CONSTANTS.replacementCost;

            // 5. Ramp Loss (50% efficiency during ramp)
            const rampLossCost = peopleLeavingYear * (avgHourlyRate * (40 * 4 * CONSTANTS.rampTimeMonths)) * 0.5;

            const annualHiddenCost = lostRevenueDeadlines + costOfRework + costOfContextSwitching + attritionCost + rampLossCost;
            const overloadGap = Math.max(0, actualUtilization - CONSTANTS.targetUtilization);
            const currentSustainableProjects = (billableStaff * projectsPerPerson * (CONSTANTS.targetUtilization / (actualUtilization || 1)));

            // Results Update
            document.getElementById('resUtilization').innerText = `${actualUtilization}%`;
            document.getElementById('resUtilization').className = `text-4xl font-black ${actualUtilization > 90 ? 'text-red-600' : 'text-green-600'}`;
            document.getElementById('resOverload').innerText = `+${overloadGap}%`;
            document.getElementById('resHiddenCost').innerText = formatCurrency(annualHiddenCost);
            document.getElementById('resSustainableProj').innerText = `${currentSustainableProjects.toFixed(1)} Projects`;
            document.getElementById('resPodSavings').innerText = formatCurrency(annualHiddenCost * 0.65);

            // Bar update
            const capPercent = Math.min(100, (currentSustainableProjects / (totalTeam * projectsPerPerson || 1)) * 100);
            document.getElementById('capacityBar').style.width = `${capPercent}%`;

            updateChart([lostRevenueDeadlines, costOfRework, costOfContextSwitching, attritionCost, rampLossCost]);
        }

        // --- CHARTING ---
        function updateChart(dataValues) {
            const ctx = document.getElementById('costBreakdownChart').getContext('2d');
            
            if (costChart) {
                costChart.data.datasets[0].data = dataValues;
                costChart.update();
            } else {
                costChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Deadlines', 'Rework', 'Context Switching', 'Turnover', 'Ramp Loss'],
                        datasets: [{
                            label: 'Annual Cost ($)',
                            data: dataValues,
                            backgroundColor: ['#ef4444', '#f97316', '#8b5cf6', '#334155', '#94a3b8'],
                            borderRadius: 6
                        }]
                    },
                    options: {
                        indexAxis: 'y',
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: { legend: { display: false } },
                        scales: {
                            x: { grid: { display: false }, ticks: { display: false } },
                            y: { grid: { display: false } }
                        }
                    }
                });
            }
        }

        function formatCurrency(val) {
            return new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD', maximumFractionDigits: 0 }).format(val);
        }

        // --- LISTENERS ---
        const inputIds = ['totalTeam', 'billableRolePct', 'avgHourlyRate', 'actualUtilization', 'missedDeadlinesPerMonth', 'avgProjectsPerPerson', 'turnoverPct'];
        inputIds.forEach(id => {
            document.getElementById(id).addEventListener('input', calculate);
        });

        // Initialize
        calculate();

         if (document.querySelector(".header-two")) {
                var lastScrollTop = 0; window.addEventListener("scroll", function () {
                    window.pageYOffset > 10 ? document.querySelector(".header-two").classList.add("header-bg") : document.querySelector(".header-two").classList.remove("header-bg"); let scrollST = window.pageYOffset || document.documentElement.scrollTop; if (scrollST > lastScrollTop) { document.querySelector(".header-two").classList.remove("sc-up"); document.querySelector(".header-two").classList.add("sc-down") } else { document.querySelector(".header-two").classList.remove("sc-down"); document.querySelector(".header-two").classList.add("sc-up") }
                    lastScrollTop = scrollST <= 0 ? 0 : scrollST
                })
            }
    </script>
</body>

</html>