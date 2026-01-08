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
    const dataIn = Array.from({ length: 13 }, (_, i) => {
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
            labels: Array.from({ length: 13 }, (_, i) => i === 0 ? 'Start' : 'M' + i),
            datasets: [
                { label: 'In-House', data: dataIn, borderColor: '#f59e0b', backgroundColor: 'rgba(245,158,11,0.1)', fill: true, tension: 0.3 },
                { label: 'Pod', data: Array(13).fill(100), borderColor: '#6366f1', backgroundColor: 'rgba(99,102,241,0.1)', fill: true, tension: 0.3 }
            ]
        },
        options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, scales: { y: { display: false } } }
    });
}

init();