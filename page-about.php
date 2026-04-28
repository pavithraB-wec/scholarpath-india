<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About Us — ScholarPath India</title>
<?php wp_head(); ?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&family=DM+Sans:wght@400;500;600&display=swap');
*,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
html,body{width:100%;overflow-x:hidden;}
:root{--navy:#0D1B2A;--saffron:#E8871A;--teal:#1A7A6E;--light:#F4F6F9;--white:#FFFFFF;--text:#2C3E50;--muted:#6B7A8D;--border:#E2E8F0;}
body{font-family:'DM Sans',sans-serif;color:var(--text);background:var(--white);}
.sp-header{display:flex;align-items:center;justify-content:space-between;padding:0 40px;height:68px;background:var(--white);border-bottom:1px solid var(--border);position:sticky;top:0;z-index:1000;box-shadow:0 1px 8px rgba(0,0,0,0.06);}
.sp-logo{font-family:'Playfair Display',serif;font-size:20px;font-weight:800;color:var(--navy);text-decoration:none;}
.sp-logo span{color:var(--saffron);}
.sp-nav{display:flex;gap:32px;list-style:none;}
.sp-nav a{text-decoration:none;font-size:15px;font-weight:500;color:var(--text);transition:color 0.2s;}
.sp-nav a:hover,.sp-nav a.active{color:var(--saffron);}
.sp-page-hero{background:var(--navy);padding:72px 40px;text-align:center;}
.sp-page-hero h1{font-family:'Playfair Display',serif;font-size:clamp(32px,4vw,52px);color:var(--white);margin-bottom:14px;}
.sp-page-hero h1 span{color:var(--saffron);}
.sp-page-hero p{color:rgba(255,255,255,0.65);font-size:17px;max-width:520px;margin:0 auto;line-height:1.7;}
.sp-mission{max-width:820px;margin:72px auto;padding:0 24px;text-align:center;}
.sp-section-label{font-size:12px;font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--teal);margin-bottom:12px;}
.sp-mission h2{font-family:'Playfair Display',serif;font-size:clamp(26px,3vw,38px);font-weight:700;color:var(--navy);margin-bottom:20px;}
.sp-mission p{font-size:17px;color:var(--muted);line-height:1.8;margin-bottom:16px;}
.sp-stats-band{background:var(--navy);padding:56px 24px;}
.sp-stats-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:32px;max-width:900px;margin:0 auto;text-align:center;}
.sp-stat-num{font-family:'Playfair Display',serif;font-size:42px;font-weight:800;color:var(--saffron);display:block;}
.sp-stat-label{font-size:14px;color:rgba(255,255,255,0.6);margin-top:6px;}
.sp-problem{background:var(--light);padding:72px 24px;}
.sp-problem-inner{max-width:960px;margin:0 auto;}
.sp-problem h2{font-family:'Playfair Display',serif;font-size:clamp(24px,3vw,36px);color:var(--navy);margin-bottom:40px;text-align:center;}
.sp-problem-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:24px;}
.sp-problem-card{background:var(--white);border-radius:16px;padding:32px 28px;border:1px solid var(--border);}
.sp-problem-card .icon{font-size:32px;margin-bottom:16px;}
.sp-problem-card h3{font-size:17px;font-weight:700;color:var(--navy);margin-bottom:10px;}
.sp-problem-card p{font-size:14px;color:var(--muted);line-height:1.7;}
.sp-values{max-width:960px;margin:72px auto;padding:0 24px;}
.sp-values h2{font-family:'Playfair Display',serif;font-size:clamp(24px,3vw,36px);color:var(--navy);margin-bottom:40px;text-align:center;}
.sp-values-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:24px;}
.sp-value{text-align:center;padding:28px 20px;}
.sp-value .icon{font-size:36px;margin-bottom:14px;}
.sp-value h3{font-size:16px;font-weight:700;color:var(--navy);margin-bottom:8px;}
.sp-value p{font-size:13px;color:var(--muted);line-height:1.65;}
.sp-cta{background:var(--teal);padding:72px 24px;text-align:center;}
.sp-cta h2{font-family:'Playfair Display',serif;font-size:clamp(24px,3vw,38px);color:var(--white);margin-bottom:14px;}
.sp-cta p{color:rgba(255,255,255,0.8);font-size:17px;margin-bottom:32px;}
.sp-cta-btn{display:inline-block;background:var(--white);color:var(--teal);font-weight:700;font-size:16px;padding:16px 36px;border-radius:10px;text-decoration:none;transition:transform 0.2s;}
.sp-cta-btn:hover{transform:translateY(-2px);}
.sp-footer{background:var(--navy);color:rgba(255,255,255,0.5);text-align:center;padding:28px 24px;font-size:14px;}
.sp-footer a{color:var(--saffron);text-decoration:none;}
@media(max-width:480px){.sp-nav{display:none;}.sp-header{padding:0 20px;}}
</style>
</head>
<body>
<header class="sp-header">
  <a href="<?php echo home_url('/'); ?>" class="sp-logo">Scholar<span>Path</span> India</a>
  <nav><ul class="sp-nav">
    <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
    <li><a href="<?php echo home_url('/scholarships/'); ?>">Scholarships</a></li>
    <li><a href="<?php echo home_url('/eligibility-checker/'); ?>">Eligibility Checker</a></li>
    <li><a href="<?php echo home_url('/about/'); ?>" class="active">About</a></li>
    <li><a href="<?php echo home_url('/contact/'); ?>">Contact</a></li>
  </ul></nav>
</header>

<section class="sp-page-hero">
  <h1>About <span>ScholarPath India</span></h1>
  <p>We believe every eligible student in India deserves to know about — and access — the financial support that exists for them.</p>
</section>

<div class="sp-mission">
  <div class="sp-section-label">Our Mission</div>
  <h2>Closing the Information Gap in Higher Education</h2>
  <p>India has over 3,000 central and state government scholarships — yet millions of eligible students never apply for a single one. Not because they don't qualify, but because they simply don't know these opportunities exist.</p>
  <p>ScholarPath India was built to change that. We aggregate scholarship data from the National Scholarship Portal, AICTE, UGC, state governments, and ministry-level schemes into one searchable, filterable, student-friendly platform — completely free to use, forever.</p>
</div>

<section class="sp-stats-band">
  <div class="sp-stats-grid">
    <div><span class="sp-stat-num">3,000+</span><div class="sp-stat-label">Scholarships tracked</div></div>
    <div><span class="sp-stat-num">28</span><div class="sp-stat-label">States & UTs covered</div></div>
    <div><span class="sp-stat-num">200M+</span><div class="sp-stat-label">Eligible students in India</div></div>
    <div><span class="sp-stat-num">₹0</span><div class="sp-stat-label">Cost to students, always</div></div>
  </div>
</section>

<section class="sp-problem">
  <div class="sp-problem-inner">
    <h2>The Problem We're Solving</h2>
    <div class="sp-problem-grid">
      <div class="sp-problem-card"><div class="icon">🗂️</div><h3>Scattered Information</h3><p>Scholarships are listed across 50+ government portals in different formats, languages, and update cycles — impossible to track manually.</p></div>
      <div class="sp-problem-card"><div class="icon">⏰</div><h3>Missed Deadlines</h3><p>Students discover schemes after the application window closes. No centralized deadline tracker means opportunities are lost every year.</p></div>
      <div class="sp-problem-card"><div class="icon">📋</div><h3>Document Confusion</h3><p>Each scheme requires a different set of documents. Without a clear checklist, students arrive at application portals completely unprepared.</p></div>
    </div>
  </div>
</section>

<section class="sp-values">
  <h2>Our Principles</h2>
  <div class="sp-values-grid">
    <div class="sp-value"><div class="icon">🔓</div><h3>Always Free</h3><p>No paywalls, no premium tiers. Every student deserves equal access to this information.</p></div>
    <div class="sp-value"><div class="icon">✅</div><h3>Verified Data</h3><p>Every scheme is sourced directly from official government portals and cross-checked regularly.</p></div>
    <div class="sp-value"><div class="icon">🌐</div><h3>Inclusive Design</h3><p>Built for students in Tier 2 and Tier 3 cities — mobile-first, fast, and accessible.</p></div>
    <div class="sp-value"><div class="icon">🛡️</div><h3>No Data Selling</h3><p>We never sell your data to colleges, coaching institutes, or advertisers.</p></div>
  </div>
</section>

<section class="sp-cta">
  <h2>Ready to Find Your Scholarship?</h2>
  <p>Use our free Eligibility Checker — takes under 2 minutes.</p>
  <a href="<?php echo esc_url(home_url('/eligibility-checker/')); ?>" class="sp-cta-btn">Check My Eligibility — Free →</a>
</section>

<footer class="sp-footer">
  <p>© <?php echo date('Y'); ?> ScholarPath India &nbsp;·&nbsp; Built with ❤️ for students across India &nbsp;·&nbsp; <a href="<?php echo home_url('/contact/'); ?>">Contact</a></p>
</footer>
<?php wp_footer(); ?>
</body>
</html>