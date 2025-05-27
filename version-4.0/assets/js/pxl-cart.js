const data = {
  "field-1": {
    "label": "Monthly Email Marketing Packages",
    'elmclass': 'marketing-packages',
    "type": "radio",
    "name": "Monthly Email Marketing Packages",
    "hasdom": true,
    "options": [
      {
        "name": "Starter",
        "price": "20000",
        "selected": true,
        "campaigns": "Up to 2 Campaigns/month",
        "desc": "Ideal For Early-stage brand nurturing leads"
      },
      {
        "name": "Growth",
        "price": "40000",
        "campaigns": "4-6 Campaigns/month",
        "desc": "Ideal For D2C, SaaS, or service companies"
      },
      {
        "name": "Pro",
        "price": "60000",
        "campaigns": "8-10 Campaigns/month",
        "desc": "Ideal For mid-sized businesses with growing lists"
      },
      {
        "name": "Elite",
        "price": "80000",
        "campaigns": "12+ automations Campaigns/month",
        "desc": "Ideal For E-commerce, B2B with segmentation"
      },
      {
        "name": "Enterprise",
        "price": " Custom",
        "campaigns": "Full-scale Campaigns/month",
        "desc": "Ideal For Multi-brand, multi-language campaigns"
      },
    ]
  },

  "field-2": {
    "label": "Types of Emails We Create",
    'elmclass': 'emails-packages',
    "type": "checkbox",
    "name": "addons",
    "options": [
      { 
        "name": "Welcome & onboarding flows", 
        "price": "25", 
        "tooltip": "This option hides your project from public view."
      },
      { 
        "name": "Newsletter Archive on Website", 
        "price": "10",
        "tooltip": "This option includes an archive of all newsletters on your website."
      },
      { "name": "Product/feature announcements", "price": "39" },
      { "name": "Cart abandonment (e-commerce)", "price": "39" },
      { "name": "Drip campaigns & lead nurturing", "price": "39" },
      { "name": " Re-engagement & win-back", "price": "39" },
      { "name": "Survey & feedback campaigns", "price": "39" },
      { "name": "Event/invite series", "price": "69" }
    ]
  },

  "field-3": {
    "label": "Add-Ons (Optional)",
    "type": "checkbox",
    'elmclass': 'group-addon',
    "name": "additional-services",
    "options": [
      { 
        "name": "Don't Showcase my Project.", 
        "price": "5000", 
        "pricerange": true,
        "tooltip": "This option hides your project from public view."
      },
      { 
        "name": "Newsletter Archive on Website", 
        "price": "12,000/month",
        "tooltip": "This option includes an archive of all newsletters on your website."
      },
      { "name": "Advanced Automations (flows)", "price": "16,000/flow" },
      { "name": "CRM/ESP Integration.", "price": "8,000/setup" },
      { "name": "Multi-language Campaigns", "price": "Custom quote" },
      { "name": "Visual Asset Creation (GIFs, etc.)", "price": "4,000/asset" }
    ]
  }
};

const formElm = document.getElementById('gen-form-elm');
const totalPriceDisplay = document.getElementById('total-price');

function createFieldset(key, field, index) {
  const checksection = document.createElement('div');
  let boxClass = 'box' + (index + 1);
  boxClass += (field.elmclass) ? ' ' + field.elmclass : '';
  checksection.className = `checksection ${boxClass}`.trim();

  const legend = document.createElement('h3');
  legend.textContent = field.label;
  checksection.appendChild(legend);

  const optionWrapper = document.createElement('div');
  optionWrapper.className = field.type === "radio" ? "custom-radio-group" : "checkbox-group";

  field.options.forEach((opt, idx) => {
    const id = `${key}-${idx}`;

    const input = document.createElement('input');
    input.type = field.type;
    input.name = field.type === 'radio' ? field.name : `${field.name}`;
    input.value = opt.name;
    input.dataset.price = opt.price;
    input.id = id;
    if (opt.selected) input.checked = true;

    input.addEventListener('change', updateCart);

    if (field.type === 'radio') {
      const customLabel = document.createElement('label');
      customLabel.setAttribute('for', id);
      customLabel.className = 'custom-radio';

      const inputContainer = document.createElement('div');
      inputContainer.className = 'radio-content';

      const topRow = document.createElement('div');
      topRow.className = 'radio-top';
      topRow.style.display = "flex";
      topRow.style.justifyContent = "space-between";
      topRow.style.alignItems = "center";

      const namePrice = document.createElement('div');
      namePrice.className = 'radio-title';
      namePrice.innerHTML = `<strong>${opt.name}</strong>`;

      const price = document.createElement('div');
      price.className = 'radio-price';
      price.innerHTML = opt.price.trim().toLowerCase() === 'custom' ?
        `<strong>${opt.price}</strong>` :
        `<strong>₹${parseInt(opt.price).toLocaleString()}</strong> <span>/month</span>`;

      topRow.appendChild(namePrice);
      topRow.appendChild(price);

      const bottomRow = document.createElement('div');
      bottomRow.className = 'radio-desc';
      bottomRow.style.display = "flex";
      bottomRow.style.justifyContent = "space-between";
      bottomRow.style.gap = "20px";
      bottomRow.style.marginTop = "5px";

      const campaigns = document.createElement('div');
      campaigns.className = 'radio-campaigns';

      let highlightText = '';
      let restText = '';
      if (opt.campaigns) {
        const match = opt.campaigns.match(/^(.+?\d+)/);
        highlightText = match ? match[1] : '';
        restText = opt.campaigns.replace(highlightText, '').trim();
      }
      campaigns.innerHTML = `<span class="highlight">${highlightText}</span> ${restText}`;
      const description = document.createElement('div');
      description.className = 'radio-description';
      description.textContent = opt.desc;

      bottomRow.appendChild(campaigns);
      bottomRow.appendChild(description);

      inputContainer.appendChild(topRow);
      inputContainer.appendChild(bottomRow);

      customLabel.appendChild(input);
      customLabel.appendChild(inputContainer);
      optionWrapper.appendChild(customLabel);
    } else {
      const label = document.createElement('label');
      label.appendChild(input);

      const nameDiv = document.createElement('div');
      nameDiv.className = 'left';
      const infoToolTip = (opt.info) ? '' : '';
      nameDiv.innerHTML = opt.name + infoToolTip;

      // Add tooltip if it exists
      if (opt.tooltip) {
        const tooltipSpan = document.createElement('span');
        tooltipSpan.className = 'tooltip';
        tooltipSpan.textContent = ''; 
        const tooltipText = document.createElement('span');
        tooltipText.className = 'tooltip-text';
        tooltipText.textContent = opt.tooltip;
        tooltipSpan.appendChild(tooltipText);
        nameDiv.appendChild(tooltipSpan);
      }

      const priceDiv = document.createElement('div');
      priceDiv.className = 'right';
      if (opt.pricerange === true) {
        //priceDiv.textContent =  `${opt.price}`;
      } else {
        priceDiv.textContent = `₹${opt.price}`;
      }

      label.appendChild(nameDiv);
      label.appendChild(priceDiv);

      optionWrapper.appendChild(label);
    }
  });

  checksection.appendChild(optionWrapper);

  if (field.hasdom === true) {
    const compElm = document.createElement('div');
    compElm.className = "comp-table";
    const elmTable = `
      <a class='elm-comp' href='javascript:void(0);'>View Full Plan Comparison</a>
      <div class="comparison-table" style="display: none;">
    <div class="table-container">
    <table class="responsive-table">
        <thead>
            <tr>
                <th>Feature</th>
                <th>Starter</th>
                <th>Growth</th>
                <th>Pro</th>
                <th>Elite</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td data-label="feature">Email Strategy & Calendar</td>
                <td data-label="starter"><i></i></td>
                <td data-label="growth"><i></i></td>
                <td data-label="pro"><i></i></td>
                <td data-label="elite"><i></i></td>
            </tr>
            <tr>
                <td data-label="feature">Copywriting (per campaign)</td>
                <td data-label="starter"><i></i></td>
                <td data-label="growth"><i></i></td>
                <td data-label="pro"><i></i></td>
                <td data-label="elite"><i></i></td>
            </tr>
            <tr>
                <td data-label="feature">Design (HTML or builder-based)</td>
                <td data-label="starter"><i></i></td>
                <td data-label="growth"><i></i></td>
                <td data-label="pro"><i></i></td>
                <td data-label="elite"><i></i></td>
            </tr>

            <tr>
                <td data-label="feature">List Segmentation</td>
                <td data-label="starter">Basic</td>
                <td data-label="growth"><i></i></td>
                <td data-label="pro"><i></i></td>
                <td data-label="elite">Advanced</td>
            </tr>

                 <tr>
                <td data-label="feature">Automation Setup</td>
                <td data-label="starter">--</td>
                <td data-label="growth">--</td>
                <td data-label="pro">Basic</td>
                <td data-label="elite">Advanced</td>
            </tr>

             <tr>
                <td data-label="feature">A/B Testing (Subject/Content)</td>
                <td data-label="starter">--</td>
                <td data-label="growth"><i></i></td>
                <td data-label="pro"><i></i></td>
                <td data-label="elite"><i></i></td>
            </tr>

             <tr>
                <td data-label="feature">Performance Reporting</td>
                <td data-label="starter">Monthly</td>
                <td data-label="growth">Bi-weekly</td>
                <td data-label="pro">Weekly</td>
                <td data-label="elite">Real-time dashboard</td>
            </tr>

            <tr>
                <td data-label="feature">Dedicated Account Manager</td>
                <td data-label="starter">--</td>
                <td data-label="growth"><i></i></td>
                <td data-label="pro"><i></i></td>
                <td data-label="elite"><i></i></td>
            </tr>
        </tbody>
    </table>
</div>
      </div>`;
    compElm.innerHTML = elmTable;
    checksection.appendChild(compElm);

    // Add toggle functionality with active class toggling
    const toggleLink = compElm.querySelector('.elm-comp');
    const comparisonTable = compElm.querySelector('.comparison-table');
    toggleLink.addEventListener('click', () => {
      const isVisible = comparisonTable.style.display === 'block';
      comparisonTable.style.display = isVisible ? 'none' : 'block';
      if (isVisible) {
        toggleLink.classList.remove('active');
      } else {
        toggleLink.classList.add('active');
      }
    });
  }

  formElm.appendChild(checksection);
}

function updateCart() {
  const inputs = formElm.querySelectorAll('input');
  let total = 0;

  const cartSummary = document.getElementById('cart-summary');
  cartSummary.innerHTML = '';

  const selectedGroups = {};

  inputs.forEach(input => {
    if (input.checked) {
      const price = parseInt(input.dataset.price, 10);
      total += price;

      const fieldKey = Object.keys(data).find(key => {
        const field = data[key];
        return input.name === field.name || input.name === `${field.name}-${key}`;
      });

      if (!fieldKey) return;

      const fieldData = data[fieldKey];
      if (!selectedGroups[fieldKey]) {
        selectedGroups[fieldKey] = {
          label: fieldData.label,
          items: [],
        };
      }

      selectedGroups[fieldKey].items.push({
        name: input.value,
        price
      });
    }
  });

  for (const key in data) {
    if (selectedGroups[key]) {
      const group = selectedGroups[key];

      const groupDiv = document.createElement('div');
      groupDiv.className = 'cart-group';

      const title = document.createElement('h4');
      title.textContent = group.label;
      groupDiv.appendChild(title);

      group.items.forEach(item => {
        const itemDiv = document.createElement('div');
        itemDiv.className = 'cart-item';
        itemDiv.innerHTML = `<span>${item.name}</span><span>₹${item.price}</span>`;
        groupDiv.appendChild(itemDiv);
      });

      cartSummary.appendChild(groupDiv);
    }
  }
  totalPriceDisplay.textContent = total.toLocaleString();
}

// Build form with indexes so classes are assigned in order
let index = 0;
for (const key in data) {
  createFieldset(key, data[key], index);
  index++;
}
updateCart();

// Field validation
const pcFrmFields = [
  { selector: '#co-name', rules: { required: true } },
  { selector: '#co-phone', rules: { required: true } },
  { selector: '#co-email', rules: { required: true, email: true } }
];

function validateFieldOnEvent(selector, rules) {
  const input = document.querySelector(selector);
  if (!input) return;

  input.addEventListener('input', () => validateField(input, rules));
  input.addEventListener('blur', () => validateField(input, rules));
}

function setupRealTimeValidation() {
  pcFrmFields.forEach(({ selector, rules }) => validateFieldOnEvent(selector, rules));
}
document.addEventListener('DOMContentLoaded', setupRealTimeValidation);

function validateField(input, rules) {
  const value = input.value.trim();
  const container = input.closest('.input-field');
  const errorEl = container?.querySelector('.error-message');
  let error = '';

  if (rules.required && value === '') {
    error = input.getAttribute("data-err") || 'This field is required';
  } else if (rules.email && value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
    error = 'Enter a valid email';
  } else if (rules.phone && value && !/^[0-9+\-\s()]+$/.test(value)) {
    error = 'Enter a valid phone number';
  }

  if (error) {
    container?.classList.add('verror');
    if (errorEl) errorEl.textContent = error;
    return false;
  } else {
    container?.classList.remove('verror');
    if (errorEl) errorEl.textContent = '';
    return true;
  }
}

function validateFields(fields) {
  let isValid = true;
  fields.forEach(({ selector, rules }) => {
    const input = document.querySelector(selector);
    if (!input) return;
    if (!validateField(input, rules)) isValid = false;
  });
  return isValid;
}

function vcGetName(name) {
  name = name.trim();
  let lastName = name.includes(' ') ? name.replace(/.*\s([\w-]*)$/, '$1') : '';
  let firstName = name.replace(new RegExp(lastName + '$'), '').trim();
  return [firstName, lastName];
}

const stripe = Stripe('pk_test_51RJuaTQ4783sVy6UHp69sUmCmPue3hLy5r7UcL787uv3zrQP3IY19lQi0PcYIEKPNnI9RfxubObKboIvwO1O7Fuk00snnFyzeA');

async function validateCheckoutProcess(e) {
  if (validateFields(pcFrmFields)) {
    try {
      const inputs = e.querySelectorAll('input:checked');
      const lineItems = [];
      inputs.forEach(input => {
        const name = input.value;
        const price = parseInt(input.dataset.price, 10);
        if (price > 0) {
          lineItems.push({ name, amount: price * 100, quantity: 1 });
        }
      });

      const formData = {
        name: document.getElementById("co-name").value,
        email: document.getElementById("co-email").value,
        phone: parseInt(document.getElementById("co-phone").value)
      };

      const res = await fetch(pxlObj.web_url + '/wp-json/stripe/v1/gen-checkout-session', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ items: lineItems, data: formData })
      });

      const json = await res.json();
      if (json.id) {
        const result = await stripe.redirectToCheckout({ sessionId: json.id });
        if (result.error) {
          alert('Stripe Error: ' + result.error.message);
        }
      } else {
        alert('Failed to create checkout session.');
        console.error(json);
      }
    } catch (error) {
      alert('Error: ' + error.message);
      console.error(error);
    }
  } else {
    const cdElm = document.getElementById("cd-form");
    cdElm.scrollIntoView({ behavior: 'smooth', block: 'center' });
    cdElm.focus({ preventScroll: true });
  }

  return false;
}
