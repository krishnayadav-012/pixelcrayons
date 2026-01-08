
            // Initialize Lucide Icons
            lucide.createIcons();

            // Chart Initialization
            const ctx = document.getElementById('profitChart').getContext('2d');
            let profitChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['P&L Breakdown'],
                    datasets: [
                        { label: 'COGS', data: [0], backgroundColor: '#6366f1' },
                        { label: 'OPEX', data: [0], backgroundColor: '#94a3b8' },
                        { label: 'Net Profit', data: [0], backgroundColor: '#10b981' }
                    ]
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: { stacked: true, display: false },
                        y: { stacked: true }
                    },
                    plugins: { legend: { position: 'bottom' } }
                }
            });

            function calculate() {
                // Get values
                const monthlyRevenue = parseFloat(document.getElementById('monthlyRevenue').value) || 0;
                const projectRevenue = parseFloat(document.getElementById('projectRevenue').value) || 0;
                const retainerPercent = parseFloat(document.getElementById('retainerPercent').value) || 0;
                const deliverySalaries = parseFloat(document.getElementById('deliverySalaries').value) || 0;
                const freelancerSpend = parseFloat(document.getElementById('freelancerSpend').value) || 0;
                const deliveryTools = parseFloat(document.getElementById('deliveryTools').value) || 0;
                const outsourcingCosts = parseFloat(document.getElementById('outsourcingCosts').value) || 0;
                const leadershipSalaries = parseFloat(document.getElementById('leadershipSalaries').value) || 0;
                const salesMarketing = parseFloat(document.getElementById('salesMarketing').value) || 0;
                const activeClients = parseFloat(document.getElementById('activeClients').value) || 1;
                const podCost = parseFloat(document.getElementById('podCost').value) || 0;
                const clientsPerPod = parseFloat(document.getElementById('clientsPerPod').value) || 1;

                // Logic
                document.getElementById('retainerVal').innerText = retainerPercent;
                const totalRev = monthlyRevenue + projectRevenue;
                const totalCogs = deliverySalaries + freelancerSpend + deliveryTools + outsourcingCosts;
                const totalOpex = leadershipSalaries + salesMarketing + 7000; // adding constant for admin/office

                const grossProfit = totalRev - totalCogs;
                const netProfit = grossProfit - totalOpex;

                const grossMargin = totalRev > 0 ? (grossProfit / totalRev) * 100 : 0;
                const netMargin = totalRev > 0 ? (netProfit / totalRev) * 100 : 0;

                // Pod Logic
                const podsNeeded = Math.ceil(activeClients / clientsPerPod);
                const podNewCogs = (podsNeeded * podCost) + deliveryTools;
                const podNetMargin = totalRev > 0 ? ((totalRev - podNewCogs - totalOpex) / totalRev) * 100 : 0;
                const annualUplift = (podNetMargin - netMargin) * totalRev * 0.12;

                // Update UI
                document.getElementById('grossMarginText').innerText = grossMargin.toFixed(1) + '%';
                document.getElementById('netMarginText').innerText = netMargin.toFixed(1) + '%';

                document.getElementById('grossLabel').className = grossMargin >= 55 ? 'mt-2 inline-block px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700' : 'mt-2 inline-block px-3 py-1 rounded-full text-xs font-bold bg-red-100 text-red-700';
                document.getElementById('grossLabel').innerText = grossMargin >= 55 ? 'Healthy' : 'Below Average';

                document.getElementById('revPerClientText').innerText = '$' + Math.round(totalRev / activeClients).toLocaleString();
                document.getElementById('costPerClientText').innerText = '$' + Math.round(totalCogs / activeClients).toLocaleString();
                document.getElementById('profitPerClientText').innerText = '$' + Math.round((totalRev - totalCogs) / activeClients).toLocaleString();

                document.getElementById('currentNetCompare').innerText = Math.round(netMargin) + '%';
                document.getElementById('podNetCompare').innerText = Math.round(podNetMargin) + '%';
                document.getElementById('annualUpliftText').innerText = '$' + Math.round(Math.abs(annualUplift)).toLocaleString();

                // Update Chart
                profitChart.data.datasets[0].data = [totalCogs];
                profitChart.data.datasets[1].data = [totalOpex];
                profitChart.data.datasets[2].data = [Math.max(0, netProfit)];
                profitChart.update();
            }

            // Add Listeners
            document.querySelectorAll('.calc-trigger').forEach(input => {
                input.addEventListener('input', calculate);
            });

            // Initial Run
            calculate();


            if (document.querySelector(".header-two")) {
                var lastScrollTop = 0; window.addEventListener("scroll", function () {
                    window.pageYOffset > 10 ? document.querySelector(".header-two").classList.add("header-bg") : document.querySelector(".header-two").classList.remove("header-bg"); let scrollST = window.pageYOffset || document.documentElement.scrollTop; if (scrollST > lastScrollTop) { document.querySelector(".header-two").classList.remove("sc-up"); document.querySelector(".header-two").classList.add("sc-down") } else { document.querySelector(".header-two").classList.remove("sc-down"); document.querySelector(".header-two").classList.add("sc-up") }
                    lastScrollTop = scrollST <= 0 ? 0 : scrollST
                })
            }


        