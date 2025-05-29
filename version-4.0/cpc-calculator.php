
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cost-Per-Click Calculator</title>
    <style>
        /* Reset and base styles for CPC Calculator */
        .cpc-calculator * {
            box-sizing: border-box;
        }

        .cpc-calculator {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Hero Section */
        .cpc-hero {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            color: white;
            padding: 60px 20px;
            position: relative;
            overflow: hidden;
        }

        .cpc-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="white" opacity="0.1"/><circle cx="80" cy="40" r="1" fill="white" opacity="0.1"/><circle cx="40" cy="80" r="1.5" fill="white" opacity="0.1"/></svg>');
            pointer-events: none;
        }

        .cpc-hero-container {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .cpc-hero-text {
            text-align: center;
            margin-bottom: 50px;
        }

        .cpc-hero-text h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 10px;
            line-height: 1.2;
        }

        .cpc-hero-text h2 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 10px;
            opacity: 0.9;
        }

        .cpc-hero-text p {
            font-size: 1.1rem;
            opacity: 0.8;
            margin: 0;
        }

        .cpc-hero-main {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: start;
        }

        .cpc-calculator-card {
            background: white;
            color: #333;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .cpc-calculator-card h3 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 25px;
            color: #1f2937;
        }

        .cpc-form-group {
            margin-bottom: 20px;
        }

        .cpc-form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #374151;
        }

        .cpc-form-group input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.2s ease;
            box-sizing: border-box;
        }

        .cpc-form-group input:focus {
            outline: none;
            border-color: #6366f1;
        }

        .cpc-solve-btn {
            width: 100%;
            background: #10b981;
            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .cpc-solve-btn:hover {
            background: #059669;
        }

        .cpc-result {
            margin-top: 20px;
            padding: 15px;
            background: #f0fdf4;
            border: 2px solid #10b981;
            border-radius: 8px;
            text-align: center;
            font-size: 1.2rem;
            color: #059669;
            display: none;
        }

        .cpc-result.show {
            display: block;
        }

        .cpc-instructions-steps {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .cpc-step {
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }

        .cpc-step-number {
            width: 40px;
            height: 40px;
            background: #10b981;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .cpc-step-content h4 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 8px;
            line-height: 1.3;
        }

        .cpc-step-content p {
            opacity: 0.9;
            line-height: 1.6;
            margin: 0;
        }

        /* Instructions Section */
        .cpc-instructions {
            padding: 80px 20px;
            background: white;
        }

        .cpc-instructions-container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .cpc-instructions h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #1f2937;
            margin-bottom: 50px;
        }

        .cpc-instructions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .cpc-instruction-card {
            padding: 40px 30px;
            background: #f9fafb;
            border-radius: 16px;
            border: 1px solid #e5e7eb;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .cpc-instruction-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .cpc-instruction-number {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.5rem;
            margin: 0 auto 20px;
        }

        .cpc-instruction-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 15px;
        }

        .cpc-instruction-card p {
            color: #6b7280;
            line-height: 1.6;
            font-size: 1.1rem;
            margin: 0;
        }

        /* Bottom section layout */
        .cpc-bottom-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
        }

        /* FAQ Section */
        .cpc-faq {
            padding: 80px 20px;
            background: #f9fafb;
        }

        .cpc-faq-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .cpc-faq h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #1f2937;
            text-align: center;
            margin-bottom: 10px;
        }

        .cpc-faq-subtitle {
            font-size: 1.2rem;
            color: #6b7280;
            text-align: center;
            margin-bottom: 50px;
        }

        .cpc-faq-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .cpc-faq-item {
            background: white;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            overflow: hidden;
            transition: box-shadow 0.2s ease;
        }

        .cpc-faq-item:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .cpc-faq-question {
            width: 100%;
            padding: 25px 30px;
            background: none;
            border: none;
            text-align: left;
            font-size: 1.1rem;
            font-weight: 600;
            color: #1f2937;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.2s ease;
        }

        .cpc-faq-question:hover {
            background: #f9fafb;
        }

        .cpc-faq-icon {
            transition: transform 0.2s ease;
            color: #6366f1;
            font-size: 0.9rem;
        }

        .cpc-faq-icon.open {
            transform: rotate(180deg);
        }

        .cpc-faq-answer {
            padding: 0 30px 30px;
            border-top: 1px solid #f3f4f6;
            display: none;
        }

        .cpc-faq-answer.show {
            display: block;
        }

        .cpc-faq-answer p {
            color: #6b7280;
            line-height: 1.7;
            margin: 20px 0 0;
            font-size: 1rem;
        }

        /* Resources Section */
        .cpc-resources {
            padding: 80px 20px;
            background: white;
        }

        .cpc-resources-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .cpc-resources h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #1f2937;
            text-align: center;
            margin-bottom: 10px;
        }

        .cpc-resources-subtitle {
            font-size: 1.2rem;
            color: #6b7280;
            text-align: center;
            margin-bottom: 50px;
        }

        .cpc-resources-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .cpc-resource-card {
            padding: 30px;
            background: #f9fafb;
            border-radius: 16px;
            border: 1px solid #e5e7eb;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .cpc-resource-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .cpc-resource-card h3 {
            font-size: 1.3rem;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 15px;
            line-height: 1.4;
        }

        .cpc-resource-card p {
            color: #6b7280;
            line-height: 1.6;
            margin-bottom: 20px;
            font-size: 1rem;
        }

        .cpc-resource-link {
            background: none;
            border: none;
            color: #6366f1;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: color 0.2s ease;
        }

        .cpc-resource-link:hover {
            color: #4f46e5;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .cpc-bottom-section {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .cpc-hero {
                padding: 40px 20px;
            }

            .cpc-hero-text h1 {
                font-size: 2rem;
            }

            .cpc-hero-text h2 {
                font-size: 1.2rem;
            }

            .cpc-hero-main {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .cpc-calculator-card {
                padding: 25px;
            }

            .cpc-step {
                gap: 15px;
            }

            .cpc-step-number {
                width: 35px;
                height: 35px;
                font-size: 1.1rem;
            }

            .cpc-instructions {
                padding: 60px 20px;
            }

            .cpc-instructions h2 {
                font-size: 2rem;
            }

            .cpc-instruction-card {
                padding: 30px 20px;
            }

            .cpc-faq {
                padding: 60px 20px;
            }

            .cpc-faq h2 {
                font-size: 2rem;
            }

            .cpc-faq-question {
                padding: 20px;
                font-size: 1rem;
            }

            .cpc-faq-answer {
                padding: 0 20px 20px;
            }

            .cpc-resources {
                padding: 60px 20px;
            }

            .cpc-resources h2 {
                font-size: 2rem;
            }

            .cpc-resource-card {
                padding: 25px;
            }
        }
    </style>
</head>
<body>
    <div class="cpc-calculator">
        <!-- Hero Section -->
        <div class="cpc-hero">
            <div class="cpc-hero-container">
                <div class="cpc-hero-content">
                    <div class="cpc-hero-text">
                        <h1>Cost-Per-Click Calculator</h1>
                        <h2>The Best Place to Get Your Estimated CPC</h2>
                        <p>Quick and easy way to calculate the CPC of your ads.</p>
                    </div>

                    <div class="cpc-hero-main">
                        <div class="cpc-calculator-card">
                            <h3>CPC Calculator</h3>
                            
                            <div class="cpc-form-group">
                                <label for="total-cost">Total cost $:</label>
                                <input type="number" id="total-cost" placeholder="$100">
                            </div>

                            <div class="cpc-form-group">
                                <label for="clicks">Clicks:</label>
                                <input type="number" id="clicks" placeholder="Clicks:">
                            </div>

                            <button onclick="calculateCPC()" class="cpc-solve-btn">
                                Solve!
                            </button>

                            <div id="result" class="cpc-result"></div>
                        </div>

                        <div class="cpc-instructions-steps">
                            <div class="cpc-step">
                                <div class="cpc-step-number">1</div>
                                <div class="cpc-step-content">
                                    <h4>Determine the total cost of your clicks</h4>
                                    <p>Calculate how much you spent on all ad clicks on the ad that you're calculating for. That means if your ad got two clicks and one of your ad clicks was $0.25 and the other was $0.20, you'd input $0.45 as your total cost in our CPC calculator.</p>
                                </div>
                            </div>

                            <div class="cpc-step">
                                <div class="cpc-step-number">2</div>
                                <div class="cpc-step-content">
                                    <h4>Determine how many clicks your ad received</h4>
                                    <p>How many clicks did your ad receive? If we use the example above, you'd input 2 in the "clicks" field of our CPC calculator.</p>
                                </div>
                            </div>

                            <div class="cpc-step">
                                <div class="cpc-step-number">3</div>
                                <div class="cpc-step-content">
                                    <h4>Use your new-found CPC metric to improve your campaigns!</h4>
                                    <p>When you click "solve" on our CPC calculator, you'll get an immediate cost-per-click calculation that can help improve your campaigns moving forward!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Section -->
        <div class="cpc-bottom-section">
            <!-- FAQ Section -->
            <div class="cpc-faq">
                <div class="cpc-faq-container">
                    <h2>All About CPC</h2>
                    <p class="cpc-faq-subtitle">Frequently Asked Questions</p>
                    
                    <div class="cpc-faq-list">
                        <div class="cpc-faq-item">
                            <button class="cpc-faq-question" onclick="toggleFAQ(0)">
                                <span>What is CPC?</span>
                                <span class="cpc-faq-icon">▼</span>
                            </button>
                            <div class="cpc-faq-answer">
                                <p>CPC stands for Cost-Per-Click. It's a digital advertising metric that represents the amount an advertiser pays each time a user clicks on their ad.</p>
                            </div>
                        </div>

                        <div class="cpc-faq-item">
                            <button class="cpc-faq-question" onclick="toggleFAQ(1)">
                                <span>What is a CPC calculator?</span>
                                <span class="cpc-faq-icon">▼</span>
                            </button>
                            <div class="cpc-faq-answer">
                                <p>A CPC calculator is a tool that helps you determine the cost-per-click of your advertising campaigns by dividing your total advertising spend by the number of clicks received.</p>
                            </div>
                        </div>

                        <div class="cpc-faq-item">
                            <button class="cpc-faq-question" onclick="toggleFAQ(2)">
                                <span>How to calculate CPC?</span>
                                <span class="cpc-faq-icon">▼</span>
                            </button>
                            <div class="cpc-faq-answer">
                                <p>CPC is calculated using the formula: CPC = Total Cost ÷ Number of Clicks. For example, if you spent $100 and received 50 clicks, your CPC would be $2.00.</p>
                            </div>
                        </div>

                        <div class="cpc-faq-item">
                            <button class="cpc-faq-question" onclick="toggleFAQ(3)">
                                <span>What is a good return on ad spend?</span>
                                <span class="cpc-faq-icon">▼</span>
                            </button>
                            <div class="cpc-faq-answer">
                                <p>A good ROAS typically ranges from 4:1 to 10:1, meaning for every dollar spent on advertising, you should generate $4-$10 in revenue. However, this varies by industry and business model.</p>
                            </div>
                        </div>

                        <div class="cpc-faq-item">
                            <button class="cpc-faq-question" onclick="toggleFAQ(4)">
                                <span>Benefits of using a CPC calculator</span>
                                <span class="cpc-faq-icon">▼</span>
                            </button>
                            <div class="cpc-faq-answer">
                                <p>CPC calculators help optimize ad spend, compare campaign performance, set realistic budgets, and make data-driven decisions to improve your advertising ROI.</p>
                            </div>
                        </div>

                        <div class="cpc-faq-item">
                            <button class="cpc-faq-question" onclick="toggleFAQ(5)">
                                <span>When should I use an online CPC calculator?</span>
                                <span class="cpc-faq-icon">▼</span>
                            </button>
                            <div class="cpc-faq-answer">
                                <p>Use a CPC calculator when planning new campaigns, analyzing existing campaign performance, comparing different advertising platforms, or optimizing your advertising budget allocation.</p>
                            </div>
                        </div>

                        <div class="cpc-faq-item">
                            <button class="cpc-faq-question" onclick="toggleFAQ(6)">
                                <span>Why is CPC important?</span>
                                <span class="cpc-faq-icon">▼</span>
                            </button>
                            <div class="cpc-faq-answer">
                                <p>CPC is crucial for understanding the efficiency of your advertising spend, comparing different campaigns, and optimizing your budget to achieve better results and higher ROI.</p>
                            </div>
                        </div>

                        <div class="cpc-faq-item">
                            <button class="cpc-faq-question" onclick="toggleFAQ(7)">
                                <span>What affects your CPC?</span>
                                <span class="cpc-faq-icon">▼</span>
                            </button>
                            <div class="cpc-faq-answer">
                                <p>CPC is influenced by factors including keyword competition, ad quality score, target audience, industry, geographic location, time of day, and overall market demand.</p>
                            </div>
                        </div>

                        <div class="cpc-faq-item">
                            <button class="cpc-faq-question" onclick="toggleFAQ(8)">
                                <span>How can you lower your CPC?</span>
                                <span class="cpc-faq-icon">▼</span>
                            </button>
                            <div class="cpc-faq-answer">
                                <p>Lower CPC by improving ad quality scores, using long-tail keywords, optimizing landing pages, refining target audiences, testing ad copy, and adjusting bidding strategies.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Resources Section -->
            <div class="cpc-resources">
                <div class="cpc-resources-container">
                    <h2>Additional Resources</h2>
                    <p class="cpc-resources-subtitle">Learn more about CPC and digital advertising</p>
                    
                    <div class="cpc-resources-grid">
                        <div class="cpc-resource-card">
                            <h3>What Is Cost Per Click (CPC)?</h3>
                            <p>Complete guide to understanding CPC metrics and their importance in digital advertising.</p>
                            <button class="cpc-resource-link">Read More →</button>
                        </div>

                        <div class="cpc-resource-card">
                            <h3>5 Benefits of Using a Cost Per Click (CPC) Calculator</h3>
                            <p>Discover how CPC calculators can improve your advertising strategy and ROI.</p>
                            <button class="cpc-resource-link">Read More →</button>
                        </div>

                        <div class="cpc-resource-card">
                            <h3>Cost Per Click on Facebook - The Important Numbers Behind Your Ads</h3>
                            <p>Learn about Facebook advertising costs and how to optimize your social media campaigns.</p>
                            <button class="cpc-resource-link">Read More →</button>
                        </div>

                        <div class="cpc-resource-card">
                            <h3>How Much Does Social Media Advertising Cost in 2024?</h3>
                            <p>Current pricing trends and benchmarks for social media advertising across platforms.</p>
                            <button class="cpc-resource-link">Read More →</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // CPC Calculator functionality
        function calculateCPC() {
            const totalCost = parseFloat(document.getElementById('total-cost').value);
            const clicks = parseInt(document.getElementById('clicks').value);
            const resultDiv = document.getElementById('result');
            
            if (totalCost > 0 && clicks > 0) {
                const cpc = totalCost / clicks;
                resultDiv.innerHTML = '<strong>CPC: $' + cpc.toFixed(2) + '</strong>';
                resultDiv.classList.add('show');
            } else {
                resultDiv.classList.remove('show');
            }
        }

        // FAQ functionality
        let openQuestion = null;

        function toggleFAQ(index) {
            const faqItems = document.querySelectorAll('.cpc-faq-item');
            const currentAnswer = faqItems[index].querySelector('.cpc-faq-answer');
            const currentIcon = faqItems[index].querySelector('.cpc-faq-icon');
            
            // Close previously open question
            if (openQuestion !== null && openQuestion !== index) {
                const prevAnswer = faqItems[openQuestion].querySelector('.cpc-faq-answer');
                const prevIcon = faqItems[openQuestion].querySelector('.cpc-faq-icon');
                prevAnswer.classList.remove('show');
                prevIcon.classList.remove('open');
            }
            
            // Toggle current question
            if (openQuestion === index) {
                currentAnswer.classList.remove('show');
                currentIcon.classList.remove('open');
                openQuestion = null;
            } else {
                currentAnswer.classList.add('show');
                currentIcon.classList.add('open');
                openQuestion = index;
            }
        }
    </script>
</body>
</html>
