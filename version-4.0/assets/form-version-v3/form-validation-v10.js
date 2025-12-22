const phone 		= document.getElementById('phone');
document.addEventListener('DOMContentLoaded', function() {	
	window.scrollTo({ top: 60, behavior: 'smooth' });
	const iti = window.intlTelInput(phone, { initialCountry: "IN", utilsScript: vcObj.tpl_url+"/js/intl-utils.js" });
	function updatePhoneFields() {
	const countryData = iti.getSelectedCountryData();  
	document.querySelector("#phone_code").value = "+" + countryData.dialCode;
	const nationalNumber = iti.getNumber(intlTelInputUtils.numberFormat.NATIONAL);
	if (nationalNumber) {
		phone.value = nationalNumber;
	}
	console.log("Code:", "+" + countryData.dialCode);
	console.log("Number:", nationalNumber);
	}
	phone.addEventListener("blur", updatePhoneFields);
	phone.addEventListener("input", updatePhoneFields);
	phone.addEventListener("countrychange", updatePhoneFields);
});

var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","zMonaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
function autocomplete(inp, arr) {
  var currentFocus;
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      //cont_countryautocomplete-list
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      this.parentNode.appendChild(a);
      var sCounter = 0;
      for (i = 0; i < arr.length; i++){
        var re = new RegExp(val, 'i');
        if (arr[i].match(re)){
 		 sCounter++;	
          b = document.createElement("DIV");
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          b.addEventListener("click", function(e) {
              inp.value = this.getElementsByTagName("input")[0].value;
              closeAllLists();
          });
          a.appendChild(b);
          //a.setAttribute("class", "autocomplete-items has-item");
        }else{
          //a.setAttribute("class", "autocomplete-items has-noitm");
        }
      }
      if( sCounter > 0 ){
      	a.setAttribute("class", "autocomplete-items has-item");
      }else{
      	a.setAttribute("class", "autocomplete-items");
      }
  });
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        currentFocus++;
        addActive(x);
      } else if (e.keyCode == 38) { //up
        currentFocus--;
        addActive(x);
      } else if (e.keyCode == 13) {
        e.preventDefault();
        if (currentFocus > -1) {
          if (x) x[currentFocus].click();
        }
      }
  });
  
  phone.addEventListener('focusin',function(e){
  	closeAllLists(e.target);
  });
  email.addEventListener('focusin',function(e){
  	closeAllLists(e.target);
  });

  function addActive(x) {
    if (!x) return false;
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
autocomplete(document.getElementById("cont_country"), countries);

/*Handle File uploader*/
function upload_file(e){
    e.preventDefault();
    ajax_file_upload(e.dataTransfer.files);
}
  
function file_explorer() {
    document.getElementById('selectfile').click();
    document.getElementById('selectfile').onchange = function() {
        files = document.getElementById('selectfile').files;
        ajax_file_upload(files);
    };
}
  
function ajax_file_upload(files_obj) {
    let gloader = document.getElementById('gloader');
    gloader.classList.add("active");
    if(files_obj != undefined) {
        var form_data = new FormData();
        for(i=0; i<files_obj.length; i++) {
            form_data.append('file[]', files_obj[i]);
        }
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "ajax.php", true);
        xhttp.onload = function(event) {
            if (xhttp.status == 200) {
                alert(this.responseText);
            } else {
                alert("Error " + xhttp.status + " occurred when trying to upload your file.");
            }
            gloader.classList.add("active");
        }
 
        xhttp.send(form_data);
    }
}

// ************************ Drag and drop ***************** //
// let dropArea = document.getElementById("drop-area")

// // Prevent default drag behaviors
// ;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
//   dropArea.addEventListener(eventName, preventDefaults, false)   
//   document.body.addEventListener(eventName, preventDefaults, false)
// })

// // Highlight drop area when item is dragged over it
// ;['dragenter', 'dragover'].forEach(eventName => {
//   dropArea.addEventListener(eventName, highlight, false)
// })

// ;['dragleave', 'drop'].forEach(eventName => {
//     //console.log(eventName);
//     dropArea.addEventListener(eventName, unhighlight, false)
// })

// // Handle dropped files
// dropArea.addEventListener('drop', handleDrop, false)

function preventDefaults (e) {
  e.preventDefault()
  e.stopPropagation()
}

function highlight(e) {
  //dropArea.classList.add('highlight')
}

function unhighlight(e) {
  //dropArea.classList.remove('active')
}

function handleDrop(e) {
  var dt = e.dataTransfer
  var files = dt.files

  handleFiles(files)
}

function setFileError( msg ){
    let fcontainer = document.getElementById('file-type-error');
    fcontainer.innerHTML = msg;
    setTimeout(function(){
        fcontainer.innerHTML = "";
    }, 3000);
}

function handleFiles(files){
    //alert( files.length );
    setFileError("");
    let uldCounter  = document.getElementById("uplcounter");
    if( parseInt(uldCounter.value) >= 10 ){
        setFileError( "You can not upload more then 10 media files." );
        return;
    }
    let allFcount = (files.length + parseInt(uldCounter.value))
    if( parseInt(allFcount) > 10 ){
        setFileError( "You can not upload more then 10 media files." );
        return;
    }

    let preuploaded = document.getElementById('Uploadedfilename').value;
    if( preuploaded ){
        let prefiles = preuploaded.split(",");
        if( prefiles.length > 10 ){
            setFileError( "You can not upload more then 10 media files." );
            return; 
        }
    }   
    if( files.length > 10 ){
        setFileError( "You can not upload more then 10 media files." );
        return;
    }
    files = [...files]
    files.forEach(uploadFile)
    //files.forEach(previewFile)
}
//Remove Fle
function removeMe(e,imageName){
    let uldCounter = document.getElementById("uplcounter");
    let gloader     = document.getElementById('gloader');
    let gallery     = document.getElementById('gallery');   
    //gloader.classList.add("show-me");
    setFileError("");
    const xhttp = new XMLHttpRequest(); 
    xhttp.open("GET", vcObj.web_url+"/delete_file.php?delete=1&imageName="+imageName, true);
    xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let counterValue = parseInt(uldCounter.value);
                counterValue--;
                uldCounter.value = counterValue;

                var fileName=document.getElementById('Uploadedfilename').value;
                newStr = fileName.replace(imageName, '');
                document.getElementById('Uploadedfilename').value=newStr;
                console.log(this.responseText);
                e.parentNode.remove();
                if(!gallery.hasChildNodes()){gloader.classList.remove("show-me");}
            }
        }
    xhttp.send();
 
}
//End Remove Fle

function uploadFile(file, i) {
    setFileError("");
    let uldCounter  = document.getElementById("uplcounter");
    if( parseInt(uldCounter.value) >= 10 ){
        setFileError( "You can not upload more then 10 media files." );
        return;
    }

    let gloader     = document.getElementById('gloader');
    gloader.classList.add("show-me");
    gloader.classList.add("active");
    
    const fileSize = file.size / 1024 / 1024;
    if( fileSize > 20 ){
        setFileError("ERROR Uploaded document exceeds the maximum size limit of 20 MB");
        gloader.classList.remove("active");
        return;
    }

    var form_data = new FormData();
    form_data.append('file', file)
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", vcObj.web_url+"/file-uploader.php", true);
    xhttp.onload = function(event){
        if (xhttp.status == 200) {
            let response =  JSON.parse(xhttp.responseText);             
            console.log( file.name );
            const fileName = file.name;
            const dotIndex = fileName.lastIndexOf('.');
            const baseName = fileName.substring(0, dotIndex);
            const extension = fileName.substring(dotIndex);
            
            let trimmedBaseName = baseName;
            if (baseName.length > 60) {
                trimmedBaseName = baseName.substring(0, 60);
            }
            const trimmedFileName = trimmedBaseName + extension;

            //console.log( response );
            if( response.status == true ){
                let counterValue = parseInt(uldCounter.value);
                counterValue++;
                uldCounter.value = counterValue;
                let existingVal = document.getElementById('Uploadedfilename').value;
                if( existingVal == '' ){
                    document.getElementById('Uploadedfilename').value = response.file;                      
                }else{
                    document.getElementById('Uploadedfilename').value = existingVal + response.file;
                }

            let reader = new FileReader()
              reader.readAsDataURL(file)
              reader.onloadend = function() {
                let indiv       = document.createElement('div');
                indiv.classList.add("ad-file");
                indiv.innerHTML = '<span class="up-file">'+trimmedFileName+'</span><button type="button" onclick="return removeMe(this,this.value);" value="'+response.file+'"></button>';
                document.getElementById('gallery').appendChild(indiv);
                }
            }else{
                setFileError( response.message );
            }
        }else{
            console.log("error");
        }
        gloader.classList.remove("active");
    }
    xhttp.send(form_data);
}

const locations = [
{ 
    id: 'us', 
    name: 'New York', 
    country: 'USA', 
    flag: 'https://flagcdn.com/w40/us.png',
    address: '5900 Balcones Drive, STE 100, Austin , TX 78731, USA', 
    phone: '+1 628 600 5055', 
    timeZone: 'America/New_York', 
    email: 'sales.us@valuecoders.com' 
},
{ 
    id: 'uk', 
    name: 'London', 
    country: 'UK', 
    flag: 'https://flagcdn.com/w40/gb.png',
    address: '167-169 Great Portland Street, 5th Floor, London W1W 5PF, United Kingdom', 
    phone: '+44 20 3239 2299', 
    timeZone: 'Europe/London', 
    email: 'sales.uk@valuecoders.com' 
},
{ 
    id: 'ae', 
    name: 'Dubai', 
    country: 'UAE', 
    flag: 'https://flagcdn.com/w40/ae.png',
    address: '541, 8W, Level 5, Dubai Airport Free Zone, Dubai, United Arab Emirates', 
    phone: '+971 544954255', 
    timeZone: 'Asia/Dubai', 
    email: 'sales.ae@valuecoders.com' 
},
{ 
    id: 'in', 
    name: 'Noida', 
    country: 'India', 
    flag: 'https://flagcdn.com/w40/in.png',
    address: '11th Floor, Max Square, Noida-Greater Noida Expy, Sector 129, Noida, Uttar Pradesh 201304', 
    phone: '+91 987 654 3210', 
    timeZone: 'Asia/Kolkata', 
    email: 'sales@valuecoders.com' 
},
{ 
    id: 'au', 
    name: 'Sydney', 
    country: 'Australia', 
    flag: 'https://flagcdn.com/w40/au.png',
    address: '', 
    phone: '+61 2 8005 8080', 
    timeZone: 'Australia/Sydney', 
    email: 'sales.au@valuecoders.com' 
}
];

const scopeOptions = [
    { id: 'staff', title: 'Add Engineers to My Team', subtitle: '(Staff Augmentation)', req: 'STAFF_AUGMENTATION' },
    { id: 'dedicated', title: 'Set Up a Dedicated Team / ODC', subtitle: '', req: 'DEDICATED_TEAM_ODC' },
    { id: 'mvp', title: 'Build a New Product / MVP', subtitle: '', req: 'PRODUCT_DEVELOPMENT_MVP' },
    { id: 'modernize', title: 'Modernize or Rebuild Existing Systems', subtitle: '', req: 'MODERNIZATION_REBUILD' },
    { id: 'ai', title: 'AI, Data & Automation Projects', subtitle: '', req: 'AI_DATA_AUTOMATION' },
    { id: 'cloud', title: 'Cloud, DevOps & Enterprise Platforms', subtitle: '', req: 'CLOUD_ENTERPRISE_PLATFORMS' },
    { id: 'qa', title: 'QA & Testing', subtitle: '(Quality Engineering)', req: 'QUALITY_ENGINEERING' },
    { id: 'security', title: 'Cybersecurity & Compliance', subtitle: '', req: 'CYBERSECURITY_COMPLIANCE' },
    { id: 'guidance', title: 'Not Sure Yet – I Need Guidance', subtitle: '', req: 'ADVISORY_DISCOVERY' }
];

const logos = [
    "Google", "Estee Lauder", "Dubai Police", "RedBull", 
    "Panasonic", "Capgemini", "Thomas Cook", "SelectSpecs"
];

// === State Management ===
let selectedScopes = new Set();
let activeLocation = locations[0];
let currentTheme = 'dark';

// === Theme Management ===
function initTheme() {
    const savedTheme = localStorage.getItem('theme');
    const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    
    if (savedTheme) {
        currentTheme = savedTheme;
    } else if (systemPrefersDark) {
        currentTheme = 'dark';
    } else {
        currentTheme = 'light';
    }
    
    //applyTheme();
}

function applyTheme() {
    const sunIcon = document.getElementById('sunIcon');
    const moonIcon = document.getElementById('moonIcon');
    
    if (currentTheme === 'dark') {
        document.body.classList.add('dark');
        sunIcon.classList.remove('hidden');
        moonIcon.classList.add('hidden');
    } else {
        document.body.classList.remove('dark');
        sunIcon.classList.add('hidden');
        moonIcon.classList.remove('hidden');
    }
    
    localStorage.setItem('theme', currentTheme);
}

// === Global Hubs ===
function renderLocationTabs(containerId) {
    const container = document.getElementById(containerId);
    container.innerHTML = locations.map(loc => `
        <button 
            class="location-tab ${loc.id === activeLocation.id ? 'active' : ''}" 
            data-location="${loc.id}"
            aria-label="Show ${loc.name} office details"
        >
            <img src="${loc.flag}" alt="${loc.country}" class="flag-icon">
            <span>${loc.id.toUpperCase()}</span>
        </button>
    `).join('');

    container.querySelectorAll('.location-tab').forEach(tab => {
        tab.addEventListener('click', () => {
            activeLocation = locations.find(l => l.id === tab.dataset.location);
            renderLocationTabs(containerId);
            renderLocationContent(containerId.replace('Tabs', 'Content'));
        });
    });
}

function renderLocationContent(containerId) {
    const container = document.getElementById(containerId);
    const time = getLocationTime(activeLocation.timeZone);
    
    container.innerHTML = `
        <div class="location-header">
            <h4 class="location-title">${activeLocation.name}, ${activeLocation.country}</h4>
            <div class="time-badge">
                <svg class="icon-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                ${time}
            </div>
        </div>
        <address class="location-address">${activeLocation.address}</address>
        <a href="tel:${activeLocation.phone}" class="location-phone">
            <div class="phone-icon-wrapper">
                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
            </div>
            ${activeLocation.phone}
        </a>
    `;
}

function getLocationTime(timeZone) {
    try {
        return new Date().toLocaleTimeString('en-US', {
            timeZone,
            hour: '2-digit',
            minute: '2-digit',
            hour12: true
        });
    } catch (e) {
        return '';
    }
}

function updateLocationTimes() {
    ['locationContent', 'locationContentMobile'].forEach(id => {
        const container = document.getElementById(id);
        if (container && !container.classList.contains('hidden')) {
            renderLocationContent(id);
        }
    });
}

// === Scope Selection ===
function renderScopeGridOLD() {
    const grid = document.getElementById('scopeGrid');
    grid.innerHTML = scopeOptions.map(option => `
        <button type="button" class="scope-button ${selectedScopes.has(option.id) ? 'selected' : ''}" data-scope="${option.id}">
            <div class="scope-button-content">
                <span class="scope-title">${option.title}</span>
                <span class="scope-subtitle">${option.subtitle}</span>
            </div>
            <div class="scope-checkbox">
                ${selectedScopes.has(option.id) ? `
                    <svg class="icon-sm" fill="white" viewBox="0 0 24 24">
                        <path d="M5 13l4 4L19 7"></path>
                    </svg>
                ` : ''}
            </div>
        </button>
    `).join('');

    grid.querySelectorAll('.scope-button').forEach(btn => {
        btn.addEventListener('click', () => {
            const scope = btn.dataset.scope;
            if (selectedScopes.has(scope)) {
                selectedScopes.delete(scope);
            } else {
                selectedScopes.add(scope);
            }
            renderScopeGrid();
            hideError('scopeError');
        });
    });
}
let selectedScope = null;
function renderScopeGrid() {
    const grid = document.getElementById('scopeGrid');

    grid.innerHTML = scopeOptions.map(option => `
        <button 
            type="button" 
            class="scope-button ${selectedScope === option.id ? 'selected' : ''}" 
            data-scope="${option.id}"
            data-requirement="${option.req}"
        >
            <div class="scope-button-content">
                <span class="scope-title">${option.title}</span>
                ${option.subtitle ? `<span class="scope-subtitle">${option.subtitle}</span>` : ''}
            </div>
            <div class="scope-checkbox">
                ${selectedScope === option.id ? `
                    <svg class="icon-sm" fill="white" viewBox="0 0 24 24">
                        <path d="M5 13l4 4L19 7"></path>
                    </svg>
                ` : ''}
            </div>
        </button>
    `).join('');

    grid.querySelectorAll('.scope-button').forEach(btn => {
        btn.addEventListener('click', () => {
            let reqType = btn.dataset.requirement;
            let reqHD = document.getElementById("tw-reqtype");
            if( reqHD ){ reqHD.value = reqType; }

            selectedScope = btn.dataset.scope;
            renderScopeGrid();
            hideError('scopeError');
        });
    });
}


// === Logo Marquee ===
function renderMarquee() {
    const content = document.getElementById('marqueeContent');
    const repeatedLogos = [...logos, ...logos, ...logos, ...logos];
    content.innerHTML = repeatedLogos.map(logo => 
        `<span class="marquee-item">${logo}</span>`
    ).join('');
}

// === Form Validation ===
function showError(elementId, message) {
    const element = document.getElementById(elementId);
    if (element) {
        element.textContent = message || 'This field is required';
        element.classList.remove('hidden');
        
        if (elementId.includes('Error') && !elementId.includes('scope')) {
            const inputId = elementId.replace('Error', '');
            const input = document.getElementById(inputId);
            if (input) input.classList.add('error');
        }
    }
}

function hideError(elementId) {
    const element = document.getElementById(elementId);
    if (element) {
        element.classList.add('hidden');
        
        if (elementId.includes('Error') && !elementId.includes('scope')) {
            const inputId = elementId.replace('Error', '');
            const input = document.getElementById(inputId);
            if (input) input.classList.remove('error');
        }
    }
}

function validateEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

// === Form Submission ===
async function handleSubmit(e) {
    e.preventDefault();
    const prScope = document.getElementById("tw-reqtype").value.trim();
    // Clear all errors
    ['scopeError', 'fullNameError', 'emailError'].forEach(hideError);
    
    // Validate scope
    if (prScope === "") {
        showError('scopeError', 'Please select Project scope.');
        return;
    }
    
    // Get form data
    const formData = {
        fullName: document.getElementById('fullName').value.trim(),
        email: document.getElementById('email').value.trim(),
        company: document.getElementById('cont_country').value.trim(),
        phone: document.getElementById('phone').value.trim(),
        message: document.getElementById('message').value.trim(),
        scopes: Array.from(selectedScopes)
    };
    
    // Validate required fields
    let hasError = false;
    
    if (!formData.fullName) {
        showError('fullNameError', 'Name is required');
        hasError = true;
        
    }
    
    if (!formData.email) {
        showError('emailError', 'Email is required');
        hasError = true;
    } else if (!validateEmail(formData.email)) {
        showError('emailError', 'Invalid email format');
        hasError = true;
    }
    
    if (hasError) return;
    
    // Show loading state
    const btn = document.getElementById('submitBtn');
    const btnText = document.getElementById('btnText');
    const btnArrow = document.getElementById('btnArrow');
    const btnSpinner = document.getElementById('btnSpinner');
    
    btn.disabled = true;
    btnText.textContent = 'Sending...';
    btnArrow.classList.add('hidden');
    btnSpinner.classList.remove('hidden');
    
    // Simulate API call
    await new Promise(resolve => setTimeout(resolve, 2000));
    
    // Show success
    document.getElementById('successName').textContent = formData.fullName;
    document.getElementById('formView').classList.add('hidden');
    document.getElementById('successView').classList.remove('hidden');
    
    // Reset button
    btn.disabled = false;
    btnText.textContent = 'Send Inquiry';
    btnArrow.classList.remove('hidden');
    btnSpinner.classList.add('hidden');
    
    console.log('Form submitted:', formData);
}

function resetForm() {
    document.getElementById('contactForm').reset();
    selectedScopes.clear();
    renderScopeGrid();
    document.getElementById('successView').classList.add('hidden');
    document.getElementById('formView').classList.remove('hidden');
}

// === Initialization ===
document.addEventListener('DOMContentLoaded', () => {
    // Initialize theme
    initTheme();
    
    // Render components
    renderLocationTabs('locationTabs');
    renderLocationContent('locationContent');
    renderLocationTabs('locationTabsMobile');
    renderLocationContent('locationContentMobile');
    renderScopeGrid();
    renderMarquee();
    
    // Update times every minute
    setInterval(updateLocationTimes, 60000);
    
    document.getElementById('contactForm').addEventListener('submit', handleSubmit);
    document.getElementById('resetBtn').addEventListener('click', resetForm);
    
    // Input validation
    ['fullName', 'email'].forEach(id => {
        const input = document.getElementById(id);
        input.addEventListener('input', () => hideError(id + 'Error'));
    });
});