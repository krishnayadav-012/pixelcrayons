
           // DOM Elements
        const inputs = [
            'activeClients', 'avgMonthlyRevenue', 'avgLifetimeMonths', 
            'monthlyChurnRate', 'costPerLead', 'leadsToClose', 
            'salesTeamHours', 'blendedSalesRate', 'onboardingCost'
        ];

        let myChart;

        function formatCurrency(num) {
            return new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD', maximumFractionDigits: 0 }).format(num);
        }

        function calculate() {
            // Get Values
            const activeClients = parseFloat(document.getElementById('activeClients').value) || 0;
            const avgRev = parseFloat(document.getElementById('avgMonthlyRevenue').value) || 0;
            const lifetime = parseFloat(document.getElementById('avgLifetimeMonths').value) || 0;
            const churnRate = parseFloat(document.getElementById('monthlyChurnRate').value) || 0;
            const costPerLead = parseFloat(document.getElementById('costPerLead').value) || 0;
            const leadsToClose = parseFloat(document.getElementById('leadsToClose').value) || 0;
            const salesHrs = parseFloat(document.getElementById('salesTeamHours').value) || 0;
            const salesRate = parseFloat(document.getElementById('blendedSalesRate').value) || 0;
            const onboarding = parseFloat(document.getElementById('onboardingCost').value) || 0;
            
            const expectedChurnReduct = 25;
            const accManagerHrs = 4;
            const supportRate = 60;

            // Logic
            const lostMonth = activeClients * (churnRate / 100);
            const lostYear = lostMonth * 12;
            
            const salesLaborPerClient = (salesHrs * salesRate) / (lostMonth || 1);
            const cac = (costPerLead * leadsToClose) + salesLaborPerClient + onboarding;
            
            const ltv = avgRev * lifetime;
            const ltvDestroyed = lostYear * ltv;
            
            const costToRetain = (accManagerHrs * supportRate) * lifetime;
            const savingsPercent = cac > 0 ? Math.max(0, (1 - (costToRetain / (cac + costToRetain))) * 100) : 0;
            
            const recoveryPotential = (churnRate * (expectedChurnReduct / 100) / 100) * 12 * activeClients * ltv;

            // Update UI
            document.getElementById('displayLostPerMonth').innerText = lostMonth.toFixed(1);
            document.getElementById('resClientsLostYear').innerText = Math.round(lostYear);
            document.getElementById('resAnnualChurnLoss').innerText = formatCurrency(ltvDestroyed);
            document.getElementById('resRecoveryPotential').innerText = formatCurrency(recoveryPotential);
            document.getElementById('savingsMessage').innerText = `Retaining costs ${Math.round(savingsPercent)}% less than replacing.`;

            updateChart(costToRetain, cac);
        }

        function updateChart(retain, acquire) {
            const ctx = document.getElementById('costChart').getContext('2d');
            
            if (myChart) {
                myChart.data.datasets[0].data = [retain, acquire];
                myChart.update();
            } else {
                myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Retain Existing', 'Acquire New (CAC)'],
                        datasets: [{
                            data: [retain, acquire],
                            backgroundColor: ['#3b82f6', '#ef4444'],
                            borderRadius: 8
                        }]
                    },
                    options: {
                        indexAxis: 'y',
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: { legend: { display: false } },
                        scales: { x: { display: false }, y: { grid: { display: false } } }
                    }
                });
            }
        }

        // Event Listeners
        inputs.forEach(id => {
            document.getElementById(id).addEventListener('input', calculate);
        });

        // Initial Run
        calculate();


            if (document.querySelector(".header-two")) {
                var lastScrollTop = 0; window.addEventListener("scroll", function () {
                    window.pageYOffset > 10 ? document.querySelector(".header-two").classList.add("header-bg") : document.querySelector(".header-two").classList.remove("header-bg"); let scrollST = window.pageYOffset || document.documentElement.scrollTop; if (scrollST > lastScrollTop) { document.querySelector(".header-two").classList.remove("sc-up"); document.querySelector(".header-two").classList.add("sc-down") } else { document.querySelector(".header-two").classList.remove("sc-down"); document.querySelector(".header-two").classList.add("sc-up") }
                    lastScrollTop = scrollST <= 0 ? 0 : scrollST
                })
            }

