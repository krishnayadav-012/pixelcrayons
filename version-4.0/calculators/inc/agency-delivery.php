
 <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 py-16 items-start ">
            
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







