<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact Us — ScholarPath India</title>
<?php wp_head(); ?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&family=DM+Sans:wght@400;500;600&display=swap');
*,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
html,body{width:100%;overflow-x:hidden;}
:root{--navy:#0D1B2A;--saffron:#E8871A;--teal:#1A7A6E;--light:#F4F6F9;--white:#FFFFFF;--text:#2C3E50;--muted:#6B7A8D;--border:#E2E8F0;}
body{font-family:'DM Sans',sans-serif;color:var(--text);background:var(--light);}
.sp-header{display:flex;align-items:center;justify-content:space-between;padding:0 40px;height:68px;background:var(--white);border-bottom:1px solid var(--border);position:sticky;top:0;z-index:1000;box-shadow:0 1px 8px rgba(0,0,0,0.06);}
.sp-logo{font-family:'Playfair Display',serif;font-size:20px;font-weight:800;color:var(--navy);text-decoration:none;}
.sp-logo span{color:var(--saffron);}
.sp-nav{display:flex;gap:32px;list-style:none;}
.sp-nav a{text-decoration:none;font-size:15px;font-weight:500;color:var(--text);transition:color 0.2s;}
.sp-nav a:hover,.sp-nav a.active{color:var(--saffron);}
.sp-page-hero{background:var(--navy);padding:72px 40px;text-align:center;}
.sp-page-hero h1{font-family:'Playfair Display',serif;font-size:clamp(32px,4vw,52px);color:var(--white);margin-bottom:14px;}
.sp-page-hero h1 span{color:var(--saffron);}
.sp-page-hero p{color:rgba(255,255,255,0.65);font-size:17px;max-width:480px;margin:0 auto;line-height:1.7;}

/* CONTACT LAYOUT */
.sp-contact-wrap{max-width:1000px;margin:64px auto 80px;padding:0 24px;display:grid;grid-template-columns:1fr 1.6fr;gap:40px;align-items:start;}
@media(max-width:768px){.sp-contact-wrap{grid-template-columns:1fr;}}

/* INFO PANEL */
.sp-contact-info{display:flex;flex-direction:column;gap:24px;}
.sp-info-card{background:var(--white);border-radius:16px;padding:28px;border:1px solid var(--border);}
.sp-info-card .icon{font-size:28px;margin-bottom:12px;}
.sp-info-card h3{font-size:15px;font-weight:700;color:var(--navy);margin-bottom:6px;}
.sp-info-card p,.sp-info-card a{font-size:14px;color:var(--muted);line-height:1.65;text-decoration:none;}
.sp-info-card a:hover{color:var(--saffron);}

.sp-faq{background:var(--white);border-radius:16px;padding:28px;border:1px solid var(--border);}
.sp-faq h3{font-size:15px;font-weight:700;color:var(--navy);margin-bottom:16px;}
.sp-faq-item{border-bottom:1px solid var(--border);padding:12px 0;}
.sp-faq-item:last-child{border-bottom:none;}
.sp-faq-q{font-size:13px;font-weight:600;color:var(--navy);margin-bottom:6px;}
.sp-faq-a{font-size:13px;color:var(--muted);line-height:1.6;}

/* FORM */
.sp-form-card{background:var(--white);border-radius:20px;padding:40px;box-shadow:0 4px 24px rgba(0,0,0,0.08);}
.sp-form-title{font-family:'Playfair Display',serif;font-size:26px;font-weight:700;color:var(--navy);margin-bottom:6px;}
.sp-form-subtitle{font-size:14px;color:var(--muted);margin-bottom:28px;line-height:1.6;}
.sp-field{margin-bottom:18px;}
.sp-field label{display:block;font-size:12px;font-weight:700;color:var(--navy);margin-bottom:7px;text-transform:uppercase;letter-spacing:0.05em;}
.sp-field input,.sp-field textarea,.sp-field select{width:100%;border:1.5px solid var(--border);border-radius:10px;padding:12px 16px;font-size:15px;font-family:'DM Sans',sans-serif;color:var(--text);background:var(--white);outline:none;transition:border-color 0.2s,box-shadow 0.2s;}
.sp-field input:focus,.sp-field textarea:focus,.sp-field select:focus{border-color:var(--saffron);box-shadow:0 0 0 3px rgba(232,135,26,0.1);}
.sp-field textarea{resize:vertical;min-height:120px;}
.sp-field-row{display:grid;grid-template-columns:1fr 1fr;gap:16px;}
@media(max-width:480px){.sp-field-row{grid-template-columns:1fr;}}
.sp-submit-btn{width:100%;background:var(--saffron);color:var(--white);border:none;padding:15px 24px;border-radius:10px;font-size:16px;font-weight:700;cursor:pointer;font-family:'DM Sans',sans-serif;transition:background 0.2s;margin-top:8px;}
.sp-submit-btn:hover{background:#d4770f;}
.sp-success{display:none;text-align:center;padding:32px;background:#EDF7F2;border-radius:12px;border:1px solid #A8DFC0;}
.sp-success h3{font-size:20px;color:var(--teal);margin-bottom:8px;}
.sp-success p{font-size:14px;color:var(--muted);}

.sp-footer{background:var(--navy);color:rgba(255,255,255,0.5);text-align:center;padding:28px 24px;font-size:14px;}
.sp-footer a{color:var(--saffron);text-decoration:none;}
@media(max-width:480px){.sp-nav{display:none;}.sp-header{padding:0 20px;}.sp-form-card{padding:28px 20px;}}
</style>
</head>
<body>

<header class="sp-header">
  <a href="<?php echo home_url('/'); ?>" class="sp-logo">Scholar<span>Path</span> India</a>
  <nav><ul class="sp-nav">
    <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
    <li><a href="<?php echo home_url('/scholarships/'); ?>">Scholarships</a></li>
    <li><a href="<?php echo home_url('/eligibility-checker/'); ?>">Eligibility Checker</a></li>
    <li><a href="<?php echo home_url('/about/'); ?>">About</a></li>
    <li><a href="<?php echo home_url('/contact/'); ?>" class="active">Contact</a></li>
  </ul></nav>
</header>

<section class="sp-page-hero">
  <h1>Get in <span>Touch</span></h1>
  <p>Have a question about a scholarship? Found incorrect information? We'd love to hear from you.</p>
</section>

<div class="sp-contact-wrap">

  <!-- LEFT: INFO + FAQ -->
  <div class="sp-contact-info">
    <div class="sp-info-card">
      <div class="icon">📧</div>
      <h3>Email Us</h3>
      <p><a href="mailto:hello@scholarpathIndia.in">hello@scholarpathIndia.in</a></p>
      <p style="margin-top:6px;">We respond within 24–48 hours.</p>
    </div>
    <div class="sp-info-card">
      <div class="icon">🏫</div>
      <h3>College Partnerships</h3>
      <p>Are you a college counselor or NGO? We offer free embeddable scholarship widgets for your institution's website.</p>
    </div>
    <div class="sp-info-card">
      <div class="icon">📝</div>
      <h3>Submit a Scholarship</h3>
      <p>Know of a government scholarship not listed here? Submit the details and we'll verify and add it within 7 days.</p>
    </div>

    <div class="sp-faq">
      <h3>Frequently Asked Questions</h3>
      <div class="sp-faq-item">
        <div class="sp-faq-q">Is ScholarPath India free to use?</div>
        <div class="sp-faq-a">Yes — 100% free, always. We don't charge students anything, ever.</div>
      </div>
      <div class="sp-faq-item">
        <div class="sp-faq-q">Do you help with the application process?</div>
        <div class="sp-faq-a">We link you directly to the official government portal for each scheme. We don't process applications ourselves.</div>
      </div>
      <div class="sp-faq-item">
        <div class="sp-faq-q">How often is the data updated?</div>
        <div class="sp-faq-a">We update scholarship data monthly and whenever a new scheme is announced by a ministry.</div>
      </div>
      <div class="sp-faq-item">
        <div class="sp-faq-q">I found wrong information on a scheme page.</div>
        <div class="sp-faq-a">Please report it using the contact form — we'll correct it within 48 hours. Thank you!</div>
      </div>
    </div>
  </div>

  <!-- RIGHT: CONTACT FORM -->
  <div class="sp-form-card">
    <h2 class="sp-form-title">Send Us a Message</h2>
    <p class="sp-form-subtitle">For scholarship queries, correction requests, or partnership inquiries — fill the form below.</p>

    <div id="sp-success" class="sp-success">
      <h3>✅ Message Sent!</h3>
      <p>Thank you for reaching out. We'll get back to you within 24–48 hours.</p>
    </div>

    <div id="sp-contact-form">
      <div class="sp-field-row">
        <div class="sp-field">
          <label>First Name</label>
          <input type="text" id="f-fname" placeholder="Priya">
        </div>
        <div class="sp-field">
          <label>Last Name</label>
          <input type="text" id="f-lname" placeholder="Sharma">
        </div>
      </div>
      <div class="sp-field">
        <label>Email Address</label>
        <input type="email" id="f-email" placeholder="priya@example.com">
      </div>
      <div class="sp-field">
        <label>Subject</label>
        <select id="f-subject">
          <option value="">— What is this about? —</option>
          <option>Scholarship information query</option>
          <option>Report incorrect data</option>
          <option>Submit a new scholarship</option>
          <option>College / NGO partnership</option>
          <option>Technical issue on the site</option>
          <option>Other</option>
        </select>
      </div>
      <div class="sp-field">
        <label>Your State</label>
        <select id="f-state">
          <option value="">— Select your state (optional) —</option>
          <option>Andhra Pradesh</option><option>Assam</option><option>Bihar</option>
          <option>Delhi</option><option>Gujarat</option><option>Karnataka</option>
          <option>Kerala</option><option>Madhya Pradesh</option><option>Maharashtra</option>
          <option>Punjab</option><option>Rajasthan</option><option>Tamil Nadu</option>
          <option>Telangana</option><option>Uttar Pradesh</option><option>West Bengal</option>
          <option>Puducherry</option><option>Other</option>
        </select>
      </div>
      <div class="sp-field">
        <label>Message</label>
        <textarea id="f-message" placeholder="Describe your query or the scholarship information you'd like to report..."></textarea>
      </div>
      <button class="sp-submit-btn" onclick="submitForm()">Send Message →</button>
    </div>
  </div>
</div>

<footer class="sp-footer">
  <p>© <?php echo date('Y'); ?> ScholarPath India &nbsp;·&nbsp; Built with ❤️ for students across India</p>
</footer>

<script>
function submitForm() {
  var fname = document.getElementById('f-fname').value.trim();
  var email = document.getElementById('f-email').value.trim();
  var subject = document.getElementById('f-subject').value;
  var message = document.getElementById('f-message').value.trim();
  if (!fname) { alert('Please enter your first name.'); return; }
  if (!email || !email.includes('@')) { alert('Please enter a valid email address.'); return; }
  if (!subject) { alert('Please select a subject.'); return; }
  if (!message) { alert('Please write your message.'); return; }
  document.getElementById('sp-contact-form').style.display = 'none';
  document.getElementById('sp-success').style.display = 'block';
  window.scrollTo({ top: document.getElementById('sp-success').offsetTop - 120, behavior: 'smooth' });
}
</script>
<?php wp_footer(); ?>
</body>
</html>
