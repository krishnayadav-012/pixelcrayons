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
        .sticky-results { position: sticky; top: 2rem; }
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { -webkit-appearance: none; margin: 0; }
    </style>
        <link rel=" stylesheet" type="text/css" href="assets/css/contact-v3.css" defer />
    
</head>

<body class="bg-slate-50 text-slate-900 p-4 md:p-8 mt-28">
    <main>
         <?php require_once 'assets/include/menu-v5.php'; ?>
        
        <div class=" container">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <div class="lg:col-span-7 space-y-8">
                <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
                    <h2 class="text-xl font-bold flex items-center gap-2 mb-6 text-slate-800">
                        <svg class="text-indigo-600" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        Team & Revenue Configuration
                    </h2>

                    <section class="space-y-10">
                        <div>
                            <h3 class="text-sm font-bold uppercase tracking-wider text-slate-400 mb-4">Roles Needed</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4" id="roles-container"></div>
                        </div>

                        <div>
                            <h3 class="text-sm font-bold uppercase tracking-wider text-slate-400 mb-4">Avg Annual Salary</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4" id="salaries-container"></div>
                        </div>

                        <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200">
                            <h3 class="text-sm font-bold uppercase tracking-wider text-slate-500 mb-4">Agency Revenue Impact</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-500 mb-1">Avg Monthly Retainer ($)</label>
                                    <input type="number" id="input-rev-retainer" value="2500" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-sm">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-slate-500 mb-1">Clients per Pod</label>
                                    <input type="number" id="input-rev-clients" value="10" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-sm">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-slate-500 mb-1">Expected Margin Uplift (%)</label>
                                    <input type="number" id="input-rev-margin" value="15" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-sm">
                                </div>
                            </div>
                        </div>

                        <div class="p-6 bg-indigo-50/50 rounded-2xl border border-indigo-100">
                            <h3 class="text-sm font-bold text-indigo-800 uppercase mb-4">White-Label Pod Configuration</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-500 mb-1">Monthly Pod Cost</label>
                                    <input type="number" id="input-pod-cost" value="12000" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-sm font-bold">
                                </div>
                                <div class="flex items-center gap-3 mt-6">
                                    <input type="checkbox" id="input-pod-bonus-check" class="w-4 h-4 rounded text-indigo-600">
                                    <span class="text-sm font-semibold text-slate-700">Include Bonus Pool</span>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="lg:col-span-5 relative">
                <div class="sticky-results space-y-6">
                    <div class="bg-slate-900 text-white rounded-2xl shadow-xl overflow-hidden p-6">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h3 class="text-xs font-bold text-slate-400 uppercase tracking-widest">Annual Savings</h3>
                                <p id="res-annual-savings" class="text-4xl font-black text-white">$0</p>
                            </div>
                            <div class="text-right">
                                <h3 class="text-xs font-bold text-emerald-400 uppercase tracking-widest">Pod Total Cost</h3>
                                <p id="res-pod-total" class="text-xl font-bold text-emerald-400">$0</p>
                            </div>
                        </div>
                        
                        <div class="space-y-3 border-t border-white/10 pt-4">
                            <div class="flex justify-between text-sm"><span class="text-slate-400">In-House Loaded Cost</span><span id="res-inhouse-total">$0</span></div>
                            <div class="flex justify-between text-sm"><span class="text-slate-400">Timeline Productivity Gap</span><span id="res-inhouse-ramp" class="text-amber-400">$0</span></div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-indigo-600 to-indigo-800 text-white rounded-2xl p-6 shadow-xl">
                        <h3 class="font-bold flex items-center gap-2 mb-6">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                            Total Profit & Margin Uplift
                        </h3>
                        <div class="grid grid-cols-2 gap-6 mb-6">
                            <div>
                                <p class="text-xs text-indigo-200 font-medium mb-1">Additional Profit Impact</p>
                                <p id="res-total-profit" class="text-2xl font-bold">$0</p>
                            </div>
                            <div>
                                <p class="text-xs text-indigo-200 font-medium mb-1">Margin Improvement</p>
                                <p id="res-margin-display" class="text-2xl font-bold">+0%</p>
                            </div>
                        </div>
                        <div class="p-3 bg-white/10 rounded-lg text-xs leading-tight">
                            By switching to a Pod, your agency gains <span id="res-capacity-text" class="font-bold text-emerald-300">0</span> more client capacity without hiring more internal management.
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
                        <h3 class="font-bold text-slate-800 mb-4 text-sm uppercase">Productivity Timeline</h3>
                        <div class="h-[180px] w-full">
                            <canvas id="productivityChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const state = {
            roles: { mediaBuyer: 1, seo: 1, cro: 0, analytics: 0 },
            salaries: { mediaBuyer: 75000, seo: 65000, cro: 70000, analytics: 80000 },
            overhead: { benefits: 25, tools: 150, training: 2000, management: 10, attrition: 15 },
            ramp: { months: 3, productivity: 30 },
            pod: { monthlyCost: 12000, includeBonus: false, bonusAmount: 5000 },
            revenue: { clientRetainer: 2500, clientsPerPod: 10, marginUplift: 15 }
        };

        function init() {
            const rCont = document.getElementById('roles-container');
            const sCont = document.getElementById('salaries-container');
            
            Object.keys(state.roles).forEach(key => {
                rCont.innerHTML += `
                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-xl border border-slate-100">
                        <span class="text-sm font-semibold text-slate-700 capitalize">${key}</span>
                        <div class="flex items-center gap-3">
                            <button onclick="updateRole('${key}', -1)" class="w-7 h-7 rounded-full bg-white border border-slate-200">-</button>
                            <span id="role-val-${key}" class="w-4 text-center font-bold">${state.roles[key]}</span>
                            <button onclick="updateRole('${key}', 1)" class="w-7 h-7 rounded-full bg-white border border-slate-200">+</button>
                        </div>
                    </div>`;
                sCont.innerHTML += `
                    <div>
                        <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">${key}</label>
                        <input type="number" oninput="updateSalary('${key}', this.value)" value="${state.salaries[key]}" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm">
                    </div>`;
            });

            // Revenue Listeners
            document.getElementById('input-rev-retainer').oninput = (e) => { state.revenue.clientRetainer = Number(e.target.value); calculate(); };
            document.getElementById('input-rev-clients').oninput = (e) => { state.revenue.clientsPerPod = Number(e.target.value); calculate(); };
            document.getElementById('input-rev-margin').oninput = (e) => { state.revenue.marginUplift = Number(e.target.value); calculate(); };
            document.getElementById('input-pod-cost').oninput = (e) => { state.pod.monthlyCost = Number(e.target.value); calculate(); };
            document.getElementById('input-pod-bonus-check').onchange = (e) => { state.pod.includeBonus = e.target.checked; calculate(); };
            
            calculate();
        }

        function updateRole(k, d) { state.roles[k] = Math.max(0, state.roles[k] + d); document.getElementById(`role-val-${k}`).innerText = state.roles[k]; calculate(); }
        function updateSalary(k, v) { state.salaries[k] = Number(v); calculate(); }

        const fmt = (n) => '$' + Math.round(n).toLocaleString();

        let myChart;
        function calculate() {
            // 1. In-House Costs
            let rawSalaries = 0;
            let totalHeadcount = 0;
            Object.keys(state.roles).forEach(k => {
                rawSalaries += state.roles[k] * state.salaries[k];
                totalHeadcount += state.roles[k];
            });

            const overhead = rawSalaries * ((state.overhead.benefits + state.overhead.management + state.overhead.attrition) / 100) 
                            + (state.overhead.tools * 12 * totalHeadcount) 
                            + (state.overhead.training * totalHeadcount);
            
            const rampLoss = (rawSalaries / 12) * state.ramp.months * (1 - (state.ramp.productivity / 100));
            const inHouseTotal = rawSalaries + overhead + rampLoss;

            // 2. Pod Costs
            const podTotal = (state.pod.monthlyCost * 12) + (state.pod.includeBonus ? state.pod.bonusAmount : 0);
            const annualSavings = inHouseTotal - podTotal;

            // 3. Revenue Impact
            const annualRevenue = state.revenue.clientRetainer * state.revenue.clientsPerPod * 12;
            const marginUpliftValue = annualRevenue * (state.revenue.marginUplift / 100);
            const totalProfitImpact = annualSavings + marginUpliftValue;

            // Update UI
            document.getElementById('res-annual-savings').innerText = fmt(annualSavings);
            document.getElementById('res-pod-total').innerText = fmt(podTotal);
            document.getElementById('res-inhouse-total').innerText = fmt(rawSalaries + overhead);
            document.getElementById('res-inhouse-ramp').innerText = fmt(rampLoss);
            document.getElementById('res-total-profit').innerText = fmt(totalProfitImpact);
            document.getElementById('res-margin-display').innerText = `+${state.revenue.marginUplift}%`;
            document.getElementById('res-capacity-text').innerText = state.revenue.clientsPerPod;

            updateChart();
        }

        function updateChart() {
            const ctx = document.getElementById('productivityChart').getContext('2d');
            const dataIn = Array.from({length: 13}, (_, i) => {
                if (i === 0) return 0;
                if (i <= state.ramp.months) {
                    const slope = (100 - state.ramp.productivity) / state.ramp.months;
                    return state.ramp.productivity + (slope * (i - 1));
                }
                return 100;
            });

            if (myChart) myChart.destroy();
            myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: Array.from({length: 13}, (_, i) => i === 0 ? 'Start' : 'M'+i),
                    datasets: [
                        { label: 'In-House', data: dataIn, borderColor: '#f59e0b', backgroundColor: 'rgba(245,158,11,0.1)', fill: true, tension: 0.3 },
                        { label: 'Pod', data: Array(13).fill(100), borderColor: '#6366f1', backgroundColor: 'rgba(99,102,241,0.1)', fill: true, tension: 0.3 }
                    ]
                },
                options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, scales: { y: { display: false } } }
            });
        }

        init();


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