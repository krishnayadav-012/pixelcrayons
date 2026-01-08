
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


        