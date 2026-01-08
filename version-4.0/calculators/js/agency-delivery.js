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
    