<div class=" container">
<div id="calculator" class="max-w-7xl mx-auto px-4  pb-20">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start py-16">

                    <div class="lg:col-span-5 space-y-6 lg:sticky lg:top-8">
                        <div class="bg-slate-800 text-white p-6 rounded-2xl shadow-xl">
                            <h2 class="text-xl font-bold mb-2 text-white">Agency Parameters</h2>
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
                                    <h3 class="text-xl font-bold text-white">Recovery Potential</h3>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <div>
                                        <p class="text-indigo-200 text-sm mb-2">Recoverable Revenue / Year</p>
                                        <p id="resRecoveryPotential" class="text-4xl font-black text-white">$0</p>
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