<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=" stylesheet" type="text/css"
    href="https://www.pixelcrayons.com/wp-content/cache/min/1/wp-content/themes/pixelcrayons/dev-style.css?ver=1766056420"
    defer />

    <title>Agency Capacity & Burnout Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        [x-cloak] { display: none !important; }
        .slider { -webkit-appearance: none; width: 100%; height: 6px; background: #e2e8f0; border-radius: 5px; outline: none; }
        .slider::-webkit-slider-thumb { -webkit-appearance: none; appearance: none; width: 18px; height: 18px; background: #2563eb; cursor: pointer; border-radius: 50%; border: 2px solid white; box-shadow: 0 1px 3px rgba(0,0,0,0.2); }
    </style>
        <link rel=" stylesheet" type="text/css" href="assets/css/contact-v3.css" defer />
    
</head>

<body class="bg-slate-50 text-slate-900 overflow-x-hidden mt-28" x-data="calculatorApp()" x-init="initCharts()">
 
         <?php require_once 'assets/include/menu-v5.php'; ?>
        
 
    <section class="bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-950 text-white py-20 px-4">
        <div class="max-w-6xl mx-auto text-center space-y-8">
            <h1 class="text-4xl md:text-6xl font-bold tracking-tight max-w-4xl mx-auto leading-tight">
                Find Out What Overloading Your Team Is <span class="text-blue-400">Really Costing You</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-300 max-w-2xl mx-auto">
                See your true delivery capacity, hidden burnout cost, and the revenue lost to missed deadlines.
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 pt-4">
                <button @click="scrollToCalc()" class="bg-blue-600 hover:bg-blue-500 text-white font-bold py-4 px-8 rounded-full transition-all transform hover:scale-105 shadow-lg">
                    Calculate My Capacity
                </button>
            </div>
        </div>
    </section>

    <main id="calculator" class="container px-4 py-16">
        <div class="flex flex-col lg:flex-row gap-8 ">
            
            <div class="lg:w-1/2 space-y-6">
            

                <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 space-y-4">
                    <h3 class="text-lg font-semibold text-slate-800 border-b border-slate-100 pb-2">Team Structure</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <label class="text-sm font-medium text-slate-700">Total team members</label>
                            <input type="number" x-model.number="inputs.totalTeamMembers" class="w-24 text-right pr-2 py-1 border border-slate-300 rounded-md text-sm">
                        </div>
                        <div class="space-y-2">
                            <div class="flex justify-between"><label class="text-sm font-medium text-slate-700">Avg billable roles %</label><span x-text="inputs.avgBillableRolesPercent + '%'" class="text-sm font-bold text-blue-600"></span></div>
                            <input type="range" min="0" max="100" x-model.number="inputs.avgBillableRolesPercent" class="slider">
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 space-y-4">
                    <h3 class="text-lg font-semibold text-slate-800 border-b border-slate-100 pb-2">Workload & Utilization</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="text-xs font-bold text-slate-400 uppercase">Target Util %</label>
                            <input type="number" x-model.number="inputs.targetUtilization" class="w-full mt-1 p-2 border border-slate-300 rounded-md text-sm">
                        </div>
                        <div>
                            <label class="text-xs font-bold text-slate-400 uppercase">Actual Util %</label>
                            <input type="number" x-model.number="inputs.actualUtilization" class="w-full mt-1 p-2 border border-slate-300 rounded-md text-sm">
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 space-y-4">
                    <h3 class="text-lg font-semibold text-slate-800 border-b border-slate-100 pb-2">Context Switching Drag</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <label class="text-sm font-medium text-slate-700">Avg projects per person</label>
                            <input type="number" x-model.number="inputs.avgProjectsPerPerson" class="w-24 text-right pr-2 py-1 border border-slate-300 rounded-md text-sm">
                        </div>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <label class="text-sm font-medium text-slate-700">Productivity Loss %</label>
                                <span x-text="inputs.productivityLossPercent + '%'" class="text-sm font-bold text-orange-600"></span>
                            </div>
                            <input type="range" min="0" max="50" x-model.number="inputs.productivityLossPercent" class="slider">
                            <p class="text-[10px] text-slate-400 italic">Estimated time lost to "toggling" between multiple client contexts.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 space-y-4">
                    <h3 class="text-lg font-semibold text-slate-800 border-b border-slate-100 pb-2">Deadlines & Rework</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <label class="text-sm font-medium text-slate-700">Missed deadlines/mo</label>
                            <input type="number" x-model.number="inputs.missedDeadlinesPerMonth" class="w-24 text-right pr-2 py-1 border border-slate-300 rounded-md text-sm">
                        </div>
                        <div class="space-y-2">
                            <div class="flex justify-between"><label class="text-sm font-medium text-slate-700">Work requiring rework %</label><span x-text="inputs.reworkPercent + '%'" class="text-sm font-bold text-blue-600"></span></div>
                            <input type="range" min="0" max="100" x-model.number="inputs.reworkPercent" class="slider">
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 space-y-4">
                    <h3 class="text-lg font-semibold text-slate-800 border-b border-slate-100 pb-2">Burnout & Attrition</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <label class="text-sm font-medium text-slate-700">Annual turnover %</label>
                            <input type="number" x-model.number="inputs.annualTurnoverPercent" class="w-24 text-right pr-2 py-1 border border-slate-300 rounded-md text-sm">
                        </div>
                        <div class="flex justify-between items-center">
                            <label class="text-sm font-medium text-slate-700">Cost to replace a hire ($)</label>
                            <input type="number" x-model.number="inputs.replacementCostPerHire" class="w-32 text-right pr-2 py-1 border border-slate-300 rounded-md text-sm">
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/2 space-y-8">
                <div class="bg-white rounded-2xl shadow-xl border border-slate-200 overflow-hidden">
                    <div class="bg-slate-900 p-8 text-white">
                        <h2 class="text-3xl font-bold">Reality Check</h2>
                        <p class="text-slate-400 mt-2">Here is the hidden cost of your current delivery model.</p>
                    </div>

                    <div class="p-8 space-y-12">
                        <div>
                            <h3 class="text-xl font-bold text-slate-800 mb-6">Current Utilization Snapshot</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                                    <div class="text-xs text-slate-500 uppercase font-semibold">Target</div>
                                    <div class="text-3xl font-bold text-blue-600" x-text="inputs.targetUtilization + '%'"></div>
                                </div>
                                <div class="p-4 rounded-xl bg-slate-50 border border-slate-100">
                                    <div class="text-xs text-slate-500 uppercase font-semibold">Actual</div>
                                    <div class="text-3xl font-bold text-indigo-600" x-text="inputs.actualUtilization + '%'"></div>
                                </div>
                                <div class="p-4 rounded-xl bg-red-50 border border-red-100">
                                    <div class="text-xs text-red-600 uppercase font-semibold">Overload Gap</div>
                                    <div class="text-3xl font-bold text-red-700" x-text="'+' + overloadGap() + '%'"></div>
                                </div>
                            </div>
                            
                            <div class="mt-6">
                                <div class="w-full bg-slate-200 h-4 rounded-full overflow-hidden flex">
                                    <div class="bg-blue-500 h-full transition-all duration-500" :style="`width: ${Math.min(inputs.targetUtilization, 100)}%` text-sm"></div>
                                    <div class="bg-red-500 h-full animate-pulse transition-all duration-500" :style="`width: ${Math.min(inputs.actualUtilization - inputs.targetUtilization, 100 - inputs.targetUtilization)}%`" x-show="inputs.actualUtilization > inputs.targetUtilization"></div>
                                </div>
                                <p class="text-sm text-slate-500 mt-3 italic" x-show="inputs.actualUtilization > 85">
                                    Operating in the <span class="text-red-600 font-bold">danger zone</span>. High burnout risk.
                                </p>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between items-end mb-4">
                                <h3 class="text-xl font-bold text-slate-800">Annual Hidden Leakage</h3>
                                <div class="text-right">
                                    <div class="text-2xl font-black text-red-600" x-text="'$' + totalHiddenCost().toLocaleString()"></div>
                                </div>
                            </div>
                            
                            <div class="h-80 relative">
                                <canvas id="costChart"></canvas>
                            </div>
                        </div>

                        <div class="bg-blue-50 rounded-2xl p-6 border border-blue-100">
                            <h4 class="font-bold text-blue-800 uppercase text-xs mb-4">Strategic Impact</h4>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <div class="text-xs text-slate-500">Lost Capacity (Annual)</div>
                                    <div class="text-lg font-bold text-slate-800" x-text="Math.round(inputs.totalTeamMembers * (inputs.productivityLossPercent/100)) + ' FTEs'"></div>
                                </div>
                                <div>
                                    <div class="text-xs text-slate-500">Pod Savings Potential</div>
                                    <div class="text-lg font-bold text-green-600" x-text="'$' + Math.round(totalHiddenCost() * 0.7).toLocaleString()"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        function calculatorApp() {
            return {
                inputs: {
                    totalTeamMembers: 10,
                    avgBillableRolesPercent: 80,
                    avgHourlyRate: 150,
                    targetUtilization: 75,
                    actualUtilization: 88,
                    avgProjectsPerPerson: 4,
                    productivityLossPercent: 20,
                    missedDeadlinesPerMonth: 2,
                    avgCostPerMissedDeadline: 5000,
                    reworkPercent: 15,
                    annualTurnoverPercent: 20,
                    replacementCostPerHire: 25000
                },
                
                overloadGap() {
                    return Math.max(0, this.inputs.actualUtilization - this.inputs.targetUtilization);
                },

                totalHiddenCost() {
                    const i = this.inputs;
                    const deadlines = i.missedDeadlinesPerMonth * i.avgCostPerMissedDeadline * 12;
                    const rework = (i.totalTeamMembers * 40 * 52 * (i.reworkPercent/100)) * (i.avgHourlyRate * 0.4);
                    const burnout = (i.totalTeamMembers * (i.annualTurnoverPercent/100)) * i.replacementCostPerHire;
                    // Context switching cost: total billable potential * productivity loss
                    const switching = (i.totalTeamMembers * (i.avgBillableRolesPercent/100) * 40 * 52 * i.avgHourlyRate) * (i.productivityLossPercent/100);
                    
                    return deadlines + rework + burnout + switching;
                },

                scrollToCalc() {
                    document.getElementById('calculator').scrollIntoView({ behavior: 'smooth' });
                },

                chart: null,
                initCharts() {
                    const ctx = document.getElementById('costChart').getContext('2d');
                    this.chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Missed Deadlines', 'Rework Cost', 'Context Switching', 'Burnout/Churn'],
                            datasets: [{
                                data: [0, 0, 0, 0],
                                backgroundColor: ['#3b82f6', '#6366f1', '#f59e0b', '#ef4444'],
                                borderRadius: 8
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

                    this.$watch('inputs', () => this.updateChart(), { deep: true });
                    this.updateChart();
                },

                updateChart() {
                    const i = this.inputs;
                    const deadlines = i.missedDeadlinesPerMonth * i.avgCostPerMissedDeadline * 12;
                    const rework = (i.totalTeamMembers * 40 * 52 * (i.reworkPercent/100)) * (i.avgHourlyRate * 0.4);
                    const burnout = (i.totalTeamMembers * (i.annualTurnoverPercent/100)) * i.replacementCostPerHire;
                    const switching = (i.totalTeamMembers * (i.avgBillableRolesPercent/100) * 40 * 52 * i.avgHourlyRate) * (i.productivityLossPercent/100);
                    
                    this.chart.data.datasets[0].data = [deadlines, rework, switching, burnout];
                    this.chart.update();
                }
            }
        }
          if (document.querySelector(".header-two")) {
            var lastScrollTop = 0; window.addEventListener("scroll", function () {
                window.pageYOffset > 10 ? document.querySelector(".header-two").classList.add("header-bg") : document.querySelector(".header-two").classList.remove("header-bg"); let scrollST = window.pageYOffset || document.documentElement.scrollTop; if (scrollST > lastScrollTop) { document.querySelector(".header-two").classList.remove("sc-up"); document.querySelector(".header-two").classList.add("sc-down") } else { document.querySelector(".header-two").classList.remove("sc-down"); document.querySelector(".header-two").classList.add("sc-up") }
                lastScrollTop = scrollST <= 0 ? 0 : scrollST
            })
        }
    </script>
</body>

</html>