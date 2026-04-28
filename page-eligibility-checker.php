<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Eligibility Checker — ScholarPath India</title>
<?php wp_head(); ?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&family=DM+Sans:wght@400;500;600&display=swap');
*, *::before, *::after { margin:0; padding:0; box-sizing:border-box; }
html, body { width:100%; overflow-x:hidden; }
:root {
  --navy:#0D1B2A; --saffron:#E8871A; --teal:#1A7A6E;
  --light:#F4F6F9; --white:#FFFFFF; --text:#2C3E50;
  --muted:#6B7A8D; --border:#E2E8F0;
}
body { font-family:'DM Sans',sans-serif; color:var(--text); background:var(--light); }
 
/* HEADER */
.sp-header { display:flex; align-items:center; justify-content:space-between; padding:0 40px; height:68px; background:var(--white); border-bottom:1px solid var(--border); position:sticky; top:0; z-index:1000; box-shadow:0 1px 8px rgba(0,0,0,0.06); }
.sp-logo { font-family:'Playfair Display',serif; font-size:20px; font-weight:800; color:var(--navy); text-decoration:none; }
.sp-logo span { color:var(--saffron); }
.sp-nav { display:flex; gap:32px; list-style:none; }
.sp-nav a { text-decoration:none; font-size:15px; font-weight:500; color:var(--text); transition:color 0.2s; }
.sp-nav a:hover, .sp-nav a.active { color:var(--saffron); }
 
/* PAGE HERO */
.sp-page-hero { background:var(--navy); padding:56px 40px; text-align:center; }
.sp-page-hero h1 { font-family:'Playfair Display',serif; font-size:clamp(28px,4vw,48px); color:var(--white); margin-bottom:12px; }
.sp-page-hero h1 span { color:var(--saffron); }
.sp-page-hero p { color:rgba(255,255,255,0.65); font-size:16px; max-width:480px; margin:0 auto; }
 
/* CHECKER CONTAINER */
.sp-checker-wrap {
  max-width: 680px;
  margin: 48px auto 80px;
  padding: 0 24px;
}
 
/* PROGRESS BAR */
.sp-progress {
  display: flex;
  align-items: center;
  margin-bottom: 36px;
  gap: 0;
}
.sp-progress-step {
  display: flex;
  align-items: center;
  flex: 1;
}
.sp-step-circle {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: var(--white);
  border: 2px solid var(--border);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 13px;
  font-weight: 700;
  color: var(--muted);
  flex-shrink: 0;
  transition: all 0.3s;
}
.sp-step-circle.active {
  background: var(--saffron);
  border-color: var(--saffron);
  color: var(--white);
}
.sp-step-circle.done {
  background: var(--teal);
  border-color: var(--teal);
  color: var(--white);
}
.sp-step-line {
  flex: 1;
  height: 2px;
  background: var(--border);
  transition: background 0.3s;
}
.sp-step-line.done { background: var(--teal); }
.sp-step-label {
  font-size: 11px;
  font-weight: 600;
  color: var(--muted);
  text-align: center;
  margin-top: 6px;
  white-space: nowrap;
}
 
/* PROGRESS LABELS ROW */
.sp-progress-labels {
  display: flex;
  justify-content: space-between;
  margin-bottom: 32px;
  padding: 0 2px;
}
.sp-progress-labels span {
  font-size: 11px;
  font-weight: 600;
  color: var(--muted);
  text-transform: uppercase;
  letter-spacing: 0.04em;
  flex: 1;
  text-align: center;
}
.sp-progress-labels span.active { color: var(--saffron); }
.sp-progress-labels span.done { color: var(--teal); }
 
/* FORM CARD */
.sp-form-card {
  background: var(--white);
  border-radius: 20px;
  padding: 40px;
  box-shadow: 0 4px 24px rgba(0,0,0,0.08);
}
.sp-step-content { display:none; }
.sp-step-content.active { display:block; }
 
.sp-form-icon { font-size: 36px; margin-bottom: 16px; }
.sp-form-title {
  font-family: 'Playfair Display', serif;
  font-size: 26px;
  font-weight: 700;
  color: var(--navy);
  margin-bottom: 8px;
}
.sp-form-subtitle {
  font-size: 14px;
  color: var(--muted);
  margin-bottom: 32px;
  line-height: 1.6;
}
 
/* FORM FIELDS */
.sp-field { margin-bottom: 20px; }
.sp-field label {
  display: block;
  font-size: 13px;
  font-weight: 600;
  color: var(--navy);
  margin-bottom: 8px;
  text-transform: uppercase;
  letter-spacing: 0.04em;
}
.sp-field select,
.sp-field input {
  width: 100%;
  border: 1.5px solid var(--border);
  border-radius: 10px;
  padding: 13px 16px;
  font-size: 15px;
  font-family: 'DM Sans', sans-serif;
  color: var(--text);
  background: var(--white);
  outline: none;
  transition: border-color 0.2s, box-shadow 0.2s;
}
.sp-field select:focus,
.sp-field input:focus {
  border-color: var(--saffron);
  box-shadow: 0 0 0 3px rgba(232,135,26,0.12);
}
 
/* CHECKBOX OPTIONS */
.sp-options { display:grid; grid-template-columns:1fr 1fr; gap:12px; }
.sp-option {
  border: 1.5px solid var(--border);
  border-radius: 10px;
  padding: 14px 16px;
  cursor: pointer;
  transition: all 0.2s;
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 14px;
  font-weight: 500;
}
.sp-option:hover { border-color: var(--saffron); background: #FEF9F4; }
.sp-option.selected { border-color: var(--saffron); background: #FEF3E7; color: var(--navy); }
.sp-option input[type=checkbox] { width:16px; height:16px; accent-color: var(--saffron); }
 
/* BUTTONS */
.sp-btn-row {
  display: flex;
  gap: 12px;
  margin-top: 32px;
}
.sp-btn-next, .sp-btn-submit {
  flex: 1;
  background: var(--saffron);
  color: var(--white);
  border: none;
  padding: 15px 24px;
  border-radius: 10px;
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  font-family: 'DM Sans', sans-serif;
  transition: background 0.2s;
}
.sp-btn-next:hover, .sp-btn-submit:hover { background: #d4770f; }
.sp-btn-back {
  background: var(--light);
  color: var(--navy);
  border: none;
  padding: 15px 24px;
  border-radius: 10px;
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  font-family: 'DM Sans', sans-serif;
  transition: background 0.2s;
}
.sp-btn-back:hover { background: var(--border); }
 
/* RESULTS */
#sp-results { display:none; }
.sp-result-header {
  text-align: center;
  padding: 32px 0 24px;
}
.sp-result-header h2 {
  font-family: 'Playfair Display', serif;
  font-size: 28px;
  color: var(--navy);
  margin-bottom: 8px;
}
.sp-result-count {
  display: inline-block;
  background: var(--teal);
  color: var(--white);
  font-size: 15px;
  font-weight: 600;
  padding: 8px 20px;
  border-radius: 100px;
  margin-bottom: 16px;
}
.sp-result-sub { font-size:14px; color:var(--muted); }
 
.sp-result-cards { display:grid; grid-template-columns:1fr; gap:16px; margin-top:24px; }
.sp-result-card {
  background: var(--white);
  border: 1px solid var(--border);
  border-radius: 14px;
  padding: 24px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 16px;
  text-decoration: none;
  color: inherit;
  transition: border-color 0.2s, box-shadow 0.2s;
}
.sp-result-card:hover { border-color:var(--saffron); box-shadow:0 4px 16px rgba(0,0,0,0.08); }
.sp-result-card-info h4 { font-size:15px; font-weight:600; color:var(--navy); margin-bottom:6px; }
.sp-result-card-info p { font-size:13px; color:var(--muted); }
.sp-result-card-amount {
  background: #FEF3E7;
  color: #B8641A;
  padding: 8px 16px;
  border-radius: 8px;
  font-size: 13px;
  font-weight: 700;
  white-space: nowrap;
  flex-shrink: 0;
}
.sp-retry-btn {
  display: block;
  text-align: center;
  margin: 28px auto 0;
  background: var(--navy);
  color: var(--white);
  padding: 13px 28px;
  border-radius: 10px;
  font-size: 14px;
  font-weight: 600;
  text-decoration: none;
  width: fit-content;
  cursor: pointer;
  border: none;
  font-family: 'DM Sans', sans-serif;
  transition: background 0.2s;
}
.sp-retry-btn:hover { background: var(--saffron); color:var(--white); }
 
/* FOOTER */
.sp-footer { background:var(--navy); color:rgba(255,255,255,0.5); text-align:center; padding:28px 24px; font-size:14px; }
.sp-footer a { color:var(--saffron); text-decoration:none; }
 
@media(max-width:480px) {
  .sp-form-card { padding:28px 20px; }
  .sp-options { grid-template-columns:1fr; }
  .sp-nav { display:none; }
  .sp-header { padding:0 20px; }
}
</style>
</head>
<body>
 
<header class="sp-header">
  <a href="<?php echo home_url('/'); ?>" class="sp-logo">Scholar<span>Path</span> India</a>
  <nav><ul class="sp-nav">
    <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
    <li><a href="<?php echo home_url('/scholarships/'); ?>">Scholarships</a></li>
    <li><a href="<?php echo home_url('/eligibility-checker/'); ?>" class="active">Eligibility Checker</a></li>
    <li><a href="<?php echo home_url('/about/'); ?>">About</a></li>
    <li><a href="<?php echo home_url('/contact/'); ?>">Contact</a></li>
  </ul></nav>
</header>
 
<section class="sp-page-hero">
  <h1>Check Your <span>Eligibility</span></h1>
  <p>Answer 4 quick questions and we'll show you every scholarship you qualify for — instantly.</p>
</section>
 
<div class="sp-checker-wrap">
 
  <!-- PROGRESS BAR -->
  <div class="sp-progress" id="sp-progress">
    <div class="sp-progress-step">
      <div class="sp-step-circle active" id="circle-1">1</div>
      <div class="sp-step-line" id="line-1"></div>
    </div>
    <div class="sp-progress-step">
      <div class="sp-step-circle" id="circle-2">2</div>
      <div class="sp-step-line" id="line-2"></div>
    </div>
    <div class="sp-progress-step">
      <div class="sp-step-circle" id="circle-3">3</div>
      <div class="sp-step-line" id="line-3"></div>
    </div>
    <div class="sp-progress-step">
      <div class="sp-step-circle" id="circle-4">4</div>
    </div>
  </div>
  <div class="sp-progress-labels">
    <span class="active" id="label-1">Location</span>
    <span id="label-2">Category</span>
    <span id="label-3">Academics</span>
    <span id="label-4">Income</span>
  </div>
 
  <!-- FORM CARD -->
  <div class="sp-form-card" id="sp-form-card">
 
    <!-- STEP 1: State & Gender -->
    <div class="sp-step-content active" id="step-1">
      <div class="sp-form-icon">📍</div>
      <h2 class="sp-form-title">Where are you from?</h2>
      <p class="sp-form-subtitle">Select your state and gender to find state-specific and gender-specific schemes.</p>
      <div class="sp-field">
        <label>Your State</label>
        <select id="f-state">
          <option value="">— Select your state —</option>
          <option>Andhra Pradesh</option><option>Arunachal Pradesh</option>
          <option>Assam</option><option>Bihar</option><option>Chhattisgarh</option>
          <option>Goa</option><option>Gujarat</option><option>Haryana</option>
          <option>Himachal Pradesh</option><option>Jharkhand</option>
          <option>Karnataka</option><option>Kerala</option><option>Madhya Pradesh</option>
          <option>Maharashtra</option><option>Manipur</option><option>Meghalaya</option>
          <option>Mizoram</option><option>Nagaland</option><option>Odisha</option>
          <option>Punjab</option><option>Rajasthan</option><option>Sikkim</option>
          <option>Tamil Nadu</option><option>Telangana</option><option>Tripura</option>
          <option>Uttar Pradesh</option><option>Uttarakhand</option><option>West Bengal</option>
          <option>Delhi</option><option>Puducherry</option>
        </select>
      </div>
      <div class="sp-field">
        <label>Gender</label>
        <select id="f-gender">
          <option value="">— Select gender —</option>
          <option value="female">Female</option>
          <option value="male">Male</option>
          <option value="other">Other / Prefer not to say</option>
        </select>
      </div>
      <div class="sp-btn-row">
        <button class="sp-btn-next" onclick="nextStep(1)">Next — Category →</button>
      </div>
    </div>
 
    <!-- STEP 2: Category -->
    <div class="sp-step-content" id="step-2">
      <div class="sp-form-icon">🪪</div>
      <h2 class="sp-form-title">What is your category?</h2>
      <p class="sp-form-subtitle">Many government schemes are exclusively for SC/ST/OBC students. Select all that apply to you.</p>
      <div class="sp-field">
        <label>Reservation Category (select all that apply)</label>
        <div class="sp-options">
          <label class="sp-option" onclick="toggleOption(this, 'GEN')">
            <input type="checkbox" value="GEN"> General (Open)
          </label>
          <label class="sp-option" onclick="toggleOption(this, 'OBC')">
            <input type="checkbox" value="OBC"> OBC
          </label>
          <label class="sp-option" onclick="toggleOption(this, 'SC')">
            <input type="checkbox" value="SC"> SC (Scheduled Caste)
          </label>
          <label class="sp-option" onclick="toggleOption(this, 'ST')">
            <input type="checkbox" value="ST"> ST (Scheduled Tribe)
          </label>
        </div>
      </div>
      <div class="sp-field" style="margin-top:20px;">
        <label>Course Type</label>
        <select id="f-course">
          <option value="">— Select your course —</option>
          <option value="engineering">B.Tech / B.E. (Engineering)</option>
          <option value="medical">MBBS / BDS (Medical)</option>
          <option value="arts">B.A. / B.Sc. / B.Com (Arts & Science)</option>
          <option value="diploma">Diploma / Polytechnic</option>
          <option value="postgrad">Postgraduate (M.Tech / MBA / M.Sc)</option>
          <option value="law">LLB (Law)</option>
          <option value="other">Other Professional Course</option>
        </select>
      </div>
      <div class="sp-btn-row">
        <button class="sp-btn-back" onclick="prevStep(2)">← Back</button>
        <button class="sp-btn-next" onclick="nextStep(2)">Next — Academics →</button>
      </div>
    </div>
 
    <!-- STEP 3: Marks -->
    <div class="sp-step-content" id="step-3">
      <div class="sp-form-icon">📊</div>
      <h2 class="sp-form-title">Your academic performance</h2>
      <p class="sp-form-subtitle">Most scholarships have a minimum marks requirement. Enter your Class 12 percentage to filter accurately.</p>
      <div class="sp-field">
        <label>Class 12 / Board Exam Percentage (%)</label>
        <input type="number" id="f-marks" min="0" max="100" placeholder="e.g. 78">
      </div>
      <div class="sp-field">
        <label>College / University Type</label>
        <select id="f-college-type">
          <option value="">— Select college type —</option>
          <option value="government">Government College</option>
          <option value="private">Private College</option>
          <option value="deemed">Deemed University</option>
          <option value="central">Central University / IIT / NIT</option>
        </select>
      </div>
      <div class="sp-btn-row">
        <button class="sp-btn-back" onclick="prevStep(3)">← Back</button>
        <button class="sp-btn-next" onclick="nextStep(3)">Next — Income →</button>
      </div>
    </div>
 
    <!-- STEP 4: Income -->
    <div class="sp-step-content" id="step-4">
      <div class="sp-form-icon">🏠</div>
      <h2 class="sp-form-title">Family income details</h2>
      <p class="sp-form-subtitle">Annual family income is the most common eligibility criterion for government scholarships.</p>
      <div class="sp-field">
        <label>Annual Family Income (₹)</label>
        <select id="f-income">
          <option value="">— Select income range —</option>
          <option value="1">Below ₹1,00,000</option>
          <option value="2.5">₹1,00,000 – ₹2,50,000</option>
          <option value="4.5">₹2,50,000 – ₹4,50,000</option>
          <option value="6">₹4,50,000 – ₹6,00,000</option>
          <option value="8">₹6,00,000 – ₹8,00,000</option>
          <option value="99">Above ₹8,00,000</option>
        </select>
      </div>
      <div class="sp-field">
        <label>Are you a first-generation college student?</label>
        <select id="f-firstgen">
          <option value="">— Select —</option>
          <option value="yes">Yes — first in family to attend college</option>
          <option value="no">No — parents also attended college</option>
        </select>
      </div>
      <div class="sp-btn-row">
        <button class="sp-btn-back" onclick="prevStep(4)">← Back</button>
        <button class="sp-btn-submit" onclick="checkEligibility()">🔍 Check My Eligibility</button>
      </div>
    </div>
 
  </div><!-- end .sp-form-card -->
 
  <!-- RESULTS SECTION -->
  <div id="sp-results">
    <div class="sp-result-header">
      <h2>Your Eligible Scholarships</h2>
      <div class="sp-result-count" id="result-count">Loading...</div>
      <p class="sp-result-sub" id="result-sub"></p>
    </div>
    <div class="sp-result-cards" id="result-cards"></div>
    <button class="sp-retry-btn" onclick="retryChecker()">← Check Again with Different Details</button>
  </div>
 
</div><!-- end .sp-checker-wrap -->
 
<footer class="sp-footer">
  <p>© <?php echo date('Y'); ?> ScholarPath India &nbsp;·&nbsp; <a href="<?php echo home_url('/contact/'); ?>">Contact</a></p>
</footer>
 
<?php
// Get all scholarships with ACF fields for JavaScript
$all_scholarships = new WP_Query(array(
  'post_type'      => 'scholarship',
  'posts_per_page' => -1,
  'post_status'    => 'publish',
));
$scholarships_data = array();
if ($all_scholarships->have_posts()) {
  while ($all_scholarships->have_posts()) {
    $all_scholarships->the_post();
    $scholarships_data[] = array(
      'title'    => get_the_title(),
      'url'      => get_permalink(),
      'amount'   => get_field('award_amount'),
      'deadline' => get_field('deadline'),
      'ministry' => get_field('ministry_name'),
      'gender'   => get_field('eligible_gender'),
      'marks'    => (int) get_field('min_marks'),
      'income'   => get_field('max_income'),
      'category' => get_field('eligible_category'),
    );
  }
  wp_reset_postdata();
}
?>
<script>
var SCHOLARSHIPS = <?php echo json_encode($scholarships_data); ?>;
var currentStep = 1;
var selectedCategories = [];
 
function toggleOption(el, val) {
  el.classList.toggle('selected');
  var cb = el.querySelector('input[type=checkbox]');
  cb.checked = !cb.checked;
  if (cb.checked) {
    if (!selectedCategories.includes(val)) selectedCategories.push(val);
  } else {
    selectedCategories = selectedCategories.filter(function(c){ return c !== val; });
  }
}
 
function nextStep(from) {
  // Validate
  if (from === 1) {
    if (!document.getElementById('f-state').value) { alert('Please select your state.'); return; }
    if (!document.getElementById('f-gender').value) { alert('Please select your gender.'); return; }
  }
  if (from === 2) {
    if (selectedCategories.length === 0) { alert('Please select at least one category.'); return; }
    if (!document.getElementById('f-course').value) { alert('Please select your course type.'); return; }
  }
  if (from === 3) {
    var marks = document.getElementById('f-marks').value;
    if (!marks || marks < 0 || marks > 100) { alert('Please enter a valid marks percentage (0–100).'); return; }
  }
  goToStep(from + 1);
}
 
function prevStep(from) { goToStep(from - 1); }
 
function goToStep(n) {
  document.getElementById('step-' + currentStep).classList.remove('active');
  currentStep = n;
  document.getElementById('step-' + currentStep).classList.add('active');
  updateProgress(n);
  window.scrollTo({ top: document.getElementById('sp-form-card').offsetTop - 100, behavior: 'smooth' });
}
 
function updateProgress(n) {
  for (var i = 1; i <= 4; i++) {
    var circle = document.getElementById('circle-' + i);
    var label = document.getElementById('label-' + i);
    circle.classList.remove('active', 'done');
    label.classList.remove('active', 'done');
    if (i < n) { circle.classList.add('done'); circle.innerHTML = '✓'; label.classList.add('done'); }
    else if (i === n) { circle.classList.add('active'); circle.innerHTML = i; label.classList.add('active'); }
    else { circle.innerHTML = i; }
    if (i < 4) {
      var line = document.getElementById('line-' + i);
      if (line) { line.classList.toggle('done', i < n); }
    }
  }
}
 
function checkEligibility() {
  var income = document.getElementById('f-income').value;
  if (!income) { alert('Please select your family income range.'); return; }
 
  var gender = document.getElementById('f-gender').value;
  var marks = parseInt(document.getElementById('f-marks').value);
  var incomeVal = parseFloat(income);
 
  var matches = SCHOLARSHIPS.filter(function(s) {
    // Gender check
    if (s.gender && s.gender !== 'all') {
      if (s.gender === 'female' && gender !== 'female') return false;
      if (s.gender === 'male' && gender !== 'male') return false;
    }
    // Marks check
    if (s.marks && marks < s.marks) return false;
    // Category check
    if (s.category && s.category.length > 0) {
      var hasMatch = s.category.some(function(c){ return selectedCategories.includes(c); });
      if (!hasMatch) return false;
    }
    return true;
  });
 
  // Show results
  document.getElementById('sp-form-card').style.display = 'none';
  document.getElementById('sp-progress').style.display = 'none';
  document.querySelector('.sp-progress-labels').style.display = 'none';
  document.getElementById('sp-results').style.display = 'block';
 
  var countEl = document.getElementById('result-count');
  var subEl = document.getElementById('result-sub');
  var cardsEl = document.getElementById('result-cards');
 
  countEl.textContent = matches.length + ' scholarship' + (matches.length !== 1 ? 's' : '') + ' found';
  subEl.textContent = matches.length > 0
    ? 'Based on your profile — click any scheme to view full details and apply.'
    : 'Try adjusting your filters or browse all scholarships.';
 
  if (matches.length === 0) {
    cardsEl.innerHTML = '<div style="text-align:center;padding:40px;color:var(--muted);"><p>No exact matches — <a href="<?php echo home_url('/scholarships/'); ?>" style="color:var(--saffron);">browse all scholarships</a> instead.</p></div>';
    return;
  }
 
  cardsEl.innerHTML = matches.map(function(s) {
    return '<a href="' + s.url + '" class="sp-result-card">' +
      '<div class="sp-result-card-info">' +
        '<h4>' + s.title + '</h4>' +
        '<p>' + (s.ministry || 'Government of India') + (s.deadline ? ' &nbsp;·&nbsp; Deadline: ' + s.deadline : '') + '</p>' +
      '</div>' +
      (s.amount ? '<div class="sp-result-card-amount">💰 ' + s.amount + '</div>' : '') +
    '</a>';
  }).join('');
 
  window.scrollTo({ top: 0, behavior: 'smooth' });
}
 
function retryChecker() {
  selectedCategories = [];
  currentStep = 1;
  document.getElementById('sp-form-card').style.display = 'block';
  document.getElementById('sp-progress').style.display = 'flex';
  document.querySelector('.sp-progress-labels').style.display = 'flex';
  document.getElementById('sp-results').style.display = 'none';
  document.querySelectorAll('.sp-step-content').forEach(function(el){ el.classList.remove('active'); });
  document.getElementById('step-1').classList.add('active');
  document.querySelectorAll('.sp-option').forEach(function(el){ el.classList.remove('selected'); el.querySelector('input').checked = false; });
  updateProgress(1);
}
</script>
<?php wp_footer(); ?>
</body>
</html>
 