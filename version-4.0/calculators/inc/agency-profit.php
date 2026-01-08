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