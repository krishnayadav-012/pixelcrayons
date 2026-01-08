<div class=" container">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 py-16">
    <div class="lg:col-span-7 space-y-8">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
            <h2 class="text-xl font-bold flex items-center gap-2 mb-6 text-slate-800">
                <svg class="text-indigo-600" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                    <circle cx="9" cy="7" r="4" />
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg>
                Team & Revenue Configuration
            </h2>

            <section class="space-y-10">
                <div>
                    <h3 class="text-sm font-bold uppercase tracking-wider text-slate-400 mb-4">Roles Needed
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4" id="roles-container"></div>
                </div>

                <div>
                    <h3 class="text-sm font-bold uppercase tracking-wider text-slate-400 mb-4">Avg Annual
                        Salary</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4" id="salaries-container"></div>
                </div>

                <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200">
                    <h3 class="text-sm font-bold uppercase tracking-wider text-slate-500 mb-4">Agency
                        Revenue Impact</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-500 mb-1">Avg Monthly
                                Retainer ($)</label>
                            <input type="number" id="input-rev-retainer" value="2500"
                                class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-500 mb-1">Clients per
                                Pod</label>
                            <input type="number" id="input-rev-clients" value="10"
                                class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-500 mb-1">Expected Margin
                                Uplift (%)</label>
                            <input type="number" id="input-rev-margin" value="15"
                                class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-sm">
                        </div>
                    </div>
                </div>

                <div class="p-6 bg-indigo-50/50 rounded-2xl border border-indigo-100">
                    <h3 class="text-sm font-bold text-indigo-800 uppercase mb-4">White-Label Pod
                        Configuration</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-500 mb-1">Monthly Pod
                                Cost</label>
                            <input type="number" id="input-pod-cost" value="12000"
                                class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-sm font-bold">
                        </div>
                        <div class="flex items-center gap-3 mt-6">
                            <input type="checkbox" id="input-pod-bonus-check"
                                class="w-4 h-4 rounded text-indigo-600">
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
                        <h3 class="text-xs font-bold text-slate-400 uppercase tracking-widest">Annual
                            Savings</h3>
                        <p id="res-annual-savings" class="text-4xl font-black text-white">$0</p>
                    </div>
                    <div class="text-right">
                        <h3 class="text-xs font-bold text-emerald-400 uppercase tracking-widest">Pod Total
                            Cost</h3>
                        <p id="res-pod-total" class="text-xl font-bold text-emerald-400">$0</p>
                    </div>
                </div>

                <div class="space-y-3 border-t border-white/10 pt-4">
                    <div class="flex justify-between text-sm"><span class="text-slate-400">In-House Loaded
                            Cost</span><span id="res-inhouse-total">$0</span></div>
                    <div class="flex justify-between text-sm"><span class="text-slate-400">Timeline
                            Productivity Gap</span><span id="res-inhouse-ramp"
                            class="text-amber-400">$0</span></div>
                </div>
            </div>

            <div
                class="bg-gradient-to-br from-indigo-600 to-indigo-800 text-white rounded-2xl p-6 shadow-xl">
                <h3 class="font-bold flex items-center gap-2 mb-6 text-white">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                    </svg>
                    Total Profit & Margin Uplift
                </h3>
                <div class="grid grid-cols-2 gap-6 mb-6 text-white">
                    <div>
                        <p class="text-xs text-indigo-200 font-medium mb-1">Additional Profit Impact</p>
                        <p id="res-total-profit" class="text-2xl font-bold text-white">$0</p>
                    </div>
                    <div>
                        <p class="text-xs text-indigo-200 font-medium mb-1">Margin Improvement</p>
                        <p id="res-margin-display" class="text-2xl font-bold text-white">+0%</p>
                    </div>
                </div>
                <div class="p-3 bg-white/10 rounded-lg text-xs leading-tight">
                    By switching to a Pod, your agency gains <span id="res-capacity-text"
                        class="font-bold text-emerald-300">0</span> more client capacity without hiring more
                    internal management.
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