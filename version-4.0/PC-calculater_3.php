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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
    <link rel=" stylesheet" type="text/css" href="assets/css/contact-v3.css" defer />

</head>

<body class="bg-slate-50 text-slate-900 mt-24" x-data="calculatorApp()" x-cloak>
    <main>
        <?php require_once 'assets/include/menu-v5.php'; ?>

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
                    Quantify lost revenue, missed campaign windows, and the real cost of endless revisions — then see
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
            <main id="calculator" class="   py-16">
                <div class="flex flex-col lg:flex-row gap-8">

                    <!-- Left Column: Inputs -->
                    <div class="lg:w-1/2">
                        <div class="lg:sticky lg:top-6">
                            <div class="mb-8">
                                <h2 class="text-2xl font-bold text-slate-800 mb-2">Delivery Inputs</h2>
                                <p class="text-slate-500">Tell us about your projects and delivery timelines</p>
                            </div>

                            <div class="space-y-6">
                                <!-- Card 1 -->
                                <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-5">
                                    <div class="flex items-center gap-2 mb-4 border-b border-slate-50 pb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <h3 class="text-lg font-semibold text-slate-800">Project Volume & Value</h3>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-slate-700 mb-1">Web launches
                                                per month</label>
                                            <input type="number" x-model.number="launchesPerMonth"
                                                class="block w-full rounded-lg border border-slate-200 py-2.5 px-4 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                            <p class="mt-1 text-xs text-slate-500 italic">Live pages/projects</p>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-slate-700 mb-1">Avg revenue
                                                impact</label>
                                            <div class="relative">
                                                <span
                                                    class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-500">$</span>
                                                <input type="number" x-model.number="revImpactPerLaunch"
                                                    class="block w-full rounded-lg border border-slate-200 py-2.5 pl-7 pr-4 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                            </div>
                                            <p class="mt-1 text-xs text-slate-500 italic">Direct + indirect revenue</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 2 -->
                                <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-5">
                                    <div class="flex items-center gap-2 mb-4 border-b border-slate-50 pb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <h3 class="text-lg font-semibold text-slate-800">Planned vs Actual Timelines
                                        </h3>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-slate-700 mb-1">Planned
                                                design-to-launch</label>
                                            <div class="relative">
                                                <input type="number" x-model.number="plannedWeeks"
                                                    class="block w-full rounded-lg border border-slate-200 py-2.5 px-4 pr-16 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                                <span
                                                    class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-500 text-xs">weeks</span>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-slate-700 mb-1">Actual average
                                                time</label>
                                            <div class="relative">
                                                <input type="number" x-model.number="actualWeeks"
                                                    class="block w-full rounded-lg border border-slate-200 py-2.5 px-4 pr-16 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                                <span
                                                    class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-500 text-xs">weeks</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 3 -->
                                <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-5">
                                    <div class="flex items-center gap-2 mb-4 border-b border-slate-50 pb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <h3 class="text-lg font-semibold text-slate-800">Campaign Delays</h3>
                                    </div>
                                    <div class="space-y-4">
                                        <div>
                                            <label class="block text-sm font-medium text-slate-700 mb-1">Campaigns
                                                delayed per quarter</label>
                                            <input type="number" x-model.number="campaignsDelayedPerQuarter"
                                                class="block w-full rounded-lg border border-slate-200 py-2.5 px-4 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div>
                                                <label class="block text-sm font-medium text-slate-700 mb-1">Avg loss
                                                    per campaign</label>
                                                <div class="relative">
                                                    <span
                                                        class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-500">$</span>
                                                    <input type="number" x-model.number="lossPerDelayedCampaign"
                                                        class="block w-full rounded-lg border border-slate-200 py-2.5 pl-7 pr-4 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                                </div>
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-slate-700 mb-1">Dev
                                                    bottleneck %</label>
                                                <div class="relative">
                                                    <input type="number" x-model.number="bottleneckPercentage"
                                                        class="block w-full rounded-lg border border-slate-200 py-2.5 px-4 pr-10 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                                    <span
                                                        class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-500">%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 4 -->
                                <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-5">
                                    <div class="flex items-center gap-2 mb-4 border-b border-slate-50 pb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                        </svg>
                                        <h3 class="text-lg font-semibold text-slate-800">Revisions & QA Rework</h3>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-sm font-medium text-slate-700 mb-1">QA Return
                                                Rate</label>
                                            <div class="relative">
                                                <input type="number" x-model.number="qaReturnRate"
                                                    class="block w-full rounded-lg border border-slate-200 py-2.5 px-4 pr-10 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                                <span
                                                    class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-500">%</span>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-slate-700 mb-1">Blended Hourly
                                                Rate</label>
                                            <div class="relative">
                                                <span
                                                    class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-500">$</span>
                                                <input type="number" x-model.number="hourlyCost"
                                                    class="block w-full rounded-lg border border-slate-200 py-2.5 pl-7 pr-4 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Results -->
                    <div class="lg:w-1/2">
                        <div class="lg:sticky lg:top-6">
                            <div class="mb-8">
                                <h2 class="text-2xl font-bold text-slate-800 mb-2">Calculated Impact</h2>
                                <p class="text-slate-500">The financial cost of your current delivery speed.</p>
                            </div>

                            <!-- Result Block 1: Launch Delay -->
                            <div class="bg-white rounded-2xl border border-slate-200 shadow-xl overflow-hidden mb-8">
                                <div class="bg-red-50 p-6 border-b border-red-100">
                                    <h3 class="text-xl font-bold text-red-900 flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Launch Delay Loss
                                    </h3>
                                </div>
                                <div class="p-6">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                                        <div>
                                            <p class="text-sm text-slate-500 uppercase font-semibold mb-1">Timeline
                                                Difference</p>
                                            <p class="text-3xl font-bold text-slate-800"
                                                x-text="`+${delayWeeks()} Weeks`"></p>
                                        </div>
                                        <div>
                                            <p class="text-sm text-slate-500 uppercase font-semibold mb-1">Annual Lost
                                                Revenue</p>
                                            <p class="text-3xl font-bold text-red-600"
                                                x-text="formatCurrency(annualDelayLoss())"></p>
                                        </div>
                                    </div>

                                    <!-- Simplified CSS Visual Chart -->
                                    <div class="space-y-4 mb-6">
                                        <div>
                                            <div class="flex justify-between text-xs font-bold text-slate-400 mb-1">
                                                <span>PLANNED</span> <span x-text="`${plannedWeeks} wks`"></span></div>
                                            <div class="w-full bg-slate-100 h-4 rounded-full overflow-hidden">
                                                <div class="bg-slate-400 h-full transition-all duration-500"
                                                    :style="`width: ${Math.min(100, (plannedWeeks/actualWeeks)*100)}%`">
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between text-xs font-bold text-red-500 mb-1">
                                                <span>ACTUAL</span> <span x-text="`${actualWeeks} wks`"></span></div>
                                            <div class="w-full bg-slate-100 h-4 rounded-full overflow-hidden">
                                                <div class="bg-red-500 h-full transition-all duration-500"
                                                    style="width: 100%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex justify-between text-xs font-bold text-green-500 mb-1">
                                                <span>POD MODEL</span> <span>1 wk</span></div>
                                            <div class="w-full bg-slate-100 h-4 rounded-full overflow-hidden">
                                                <div class="bg-green-500 h-full transition-all duration-500"
                                                    :style="`width: ${Math.min(100, (1/actualWeeks)*100)}%`"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-center text-slate-500 text-sm">Slow launches = money left on the
                                        table.</p>
                                </div>
                            </div>

                            <!-- Small Impact Cards -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                                <div class="bg-white rounded-xl border border-slate-200 p-6 shadow-sm">
                                    <h4 class="text-slate-800 font-bold mb-4 flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        Campaign Loss
                                    </h4>
                                    <p class="text-xs text-slate-400 uppercase font-bold mb-1">Annual Impact</p>
                                    <p class="text-2xl font-bold text-red-600"
                                        x-text="formatCurrency(annualCampaignLoss())"></p>
                                </div>

                                <div class="bg-white rounded-xl border border-slate-200 p-6 shadow-sm">
                                    <h4 class="text-slate-800 font-bold mb-4 flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-500"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                        Rework Waste
                                    </h4>
                                    <p class="text-xs text-slate-400 uppercase font-bold mb-1">Annual Hidden Cost</p>
                                    <p class="text-2xl font-bold text-orange-600"
                                        x-text="formatCurrency(annualWaste())"></p>
                                </div>
                            </div>

                            <!-- Comparison Section -->
                            <div
                                class="bg-slate-900 rounded-2xl p-8 text-white mb-12 shadow-2xl relative overflow-hidden">
                                <div class="absolute top-0 right-0 p-4">
                                    <span
                                        class="bg-green-500 text-white text-[10px] font-bold px-2 py-1 rounded uppercase tracking-wider">The
                                        Pod Advantage</span>
                                </div>
                                <h3 class="text-2xl font-bold mb-8 text-white">Compare With Pod Model</h3>

                                <div class="bg-white/10 border border-white/20 rounded-xl p-6 backdrop-blur-sm">
                                    <p class="text-lg font-semibold mb-1">Total Recovered Potential</p>
                                    <p class="text-4xl md:text-5xl font-bold text-green-400 mb-2"
                                        x-text="formatCurrency(netImpact())"></p>
                                    <p class="text-slate-400 text-sm">Recovered revenue + saved waste per year.</p>
                                </div>

                                <div class="mt-8">
                                    <button
                                        class="w-full bg-white text-slate-900 font-bold py-4 px-6 rounded-lg hover:bg-slate-100 transition-colors text-center text-lg shadow-lg">
                                        Launch Faster. Earn Sooner.
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>

        <script>
            function calculatorApp() {
                return {
                    // Inputs
                    launchesPerMonth: 4,
                    revImpactPerLaunch: 5000,
                    plannedWeeks: 2,
                    actualWeeks: 6,
                    campaignsDelayedPerQuarter: 2,
                    lossPerDelayedCampaign: 15000,
                    bottleneckPercentage: 70,
                    qaReturnRate: 40,
                    hourlyCost: 120,

                    // Helper logic
                    delayWeeks() {
                        return Math.max(0, this.actualWeeks - this.plannedWeeks);
                    },

                    annualDelayLoss() {
                        const weeklyRev = this.revImpactPerLaunch / 4;
                        return this.launchesPerMonth * this.delayWeeks() * weeklyRev * 12;
                    },

                    annualCampaignLoss() {
                        return (this.campaignsDelayedPerQuarter * 4) * this.lossPerDelayedCampaign * (this.bottleneckPercentage / 100);
                    },

                    annualWaste() {
                        // Estimates 8 hours rework per QA return and 5 hours friction per project
                        const reworkPerProj = (this.qaReturnRate / 100) * 8 * this.hourlyCost;
                        const frictionPerProj = 5 * this.hourlyCost;
                        return (reworkPerProj + frictionPerProj) * this.launchesPerMonth * 12;
                    },

                    netImpact() {
                        // Logic: Pods recover ~85% of delay/campaign loss and ~90% of waste
                        const podCost = 12000 * 12; // Assuming standard pod pricing
                        const recovery = (this.annualDelayLoss() + this.annualCampaignLoss()) * 0.85;
                        const savings = this.annualWaste() * 0.9;
                        return Math.max(0, recovery + savings);
                    },

                    formatCurrency(value) {
                        return new Intl.NumberFormat('en-US', {
                            style: 'currency',
                            currency: 'USD',
                            maximumFractionDigits: 0
                        }).format(value);
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


    </main>



</body>

</html>