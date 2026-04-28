<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('name'); ?> — Find Your Scholarship</title>
<?php wp_head(); ?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&family=DM+Sans:wght@400;500;600&display=swap');
*, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }
html, body { width: 100%; overflow-x: hidden; }
:root {
  --navy:#0D1B2A; --saffron:#E8871A; --teal:#1A7A6E;
  --light:#F4F6F9; --white:#FFFFFF; --text:#2C3E50;
  --muted:#6B7A8D; --border:#E2E8F0;
}
body { font-family:'DM Sans',sans-serif; color:var(--text); background:var(--white); }
 
/* HEADER */
.sp-header { display:flex; align-items:center; justify-content:space-between; padding:0 40px; height:68px; background:var(--white); border-bottom:1px solid var(--border); position:sticky; top:0; z-index:1000; box-shadow:0 1px 8px rgba(0,0,0,0.06); }
.sp-logo { font-family:'Playfair Display',serif; font-size:20px; font-weight:800; color:var(--navy); text-decoration:none; }
.sp-logo span { color:var(--saffron); }
.sp-nav { display:flex; gap:32px; list-style:none; }
.sp-nav a { text-decoration:none; font-size:15px; font-weight:500; color:var(--text); transition:color 0.2s; }
.sp-nav a:hover, .sp-nav a.active { color:var(--saffron); }
 
/* HERO */
.sp-hero { background:var(--navy); background-image:radial-gradient(ellipse at 70% 50%,#1a3a5c 0%,var(--navy) 60%); padding:90px 24px 80px; text-align:center; position:relative; overflow:hidden; }
.sp-hero::before { content:''; position:absolute; top:-60px; right:-60px; width:400px; height:400px; border-radius:50%; border:60px solid rgba(232,135,26,0.06); }
.sp-hero::after { content:''; position:absolute; bottom:-80px; left:-40px; width:300px; height:300px; border-radius:50%; border:50px solid rgba(26,122,110,0.07); }
.sp-hero-badge { display:inline-block; background:rgba(232,135,26,0.15); color:var(--saffron); border:1px solid rgba(232,135,26,0.3); border-radius:100px; padding:6px 20px; font-size:13px; font-weight:600; letter-spacing:0.04em; text-transform:uppercase; margin-bottom:28px; position:relative; z-index:2; }
.sp-hero h1 { font-family:'Playfair Display',serif; font-size:clamp(36px,5vw,64px); font-weight:800; color:var(--white); line-height:1.15; margin-bottom:22px; max-width:820px; margin-left:auto; margin-right:auto; position:relative; z-index:2; }
.sp-hero h1 span { color:var(--saffron); }
.sp-hero > p { font-size:18px; color:rgba(255,255,255,0.7); max-width:560px; margin:0 auto 40px; line-height:1.7; position:relative; z-index:2; }
.sp-search-bar { display:flex; max-width:580px; margin:0 auto 48px; background:var(--white); border-radius:12px; overflow:hidden; box-shadow:0 8px 40px rgba(0,0,0,0.3); position:relative; z-index:2; }
.sp-search-bar input { flex:1; border:none; outline:none; padding:16px 20px; font-size:15px; font-family:'DM Sans',sans-serif; color:var(--text); }
.sp-search-bar button { background:var(--saffron); color:var(--white); border:none; padding:16px 28px; font-size:15px; font-weight:600; cursor:pointer; font-family:'DM Sans',sans-serif; transition:background 0.2s; }
.sp-search-bar button:hover { background:#d4770f; }
.sp-stats { display:flex; justify-content:center; gap:48px; flex-wrap:wrap; position:relative; z-index:2; }
.sp-stat-item { text-align:center; }
.sp-stat-num { font-family:'Playfair Display',serif; font-size:32px; font-weight:700; color:var(--saffron); display:block; }
.sp-stat-label { font-size:13px; color:rgba(255,255,255,0.55); margin-top:4px; }
 
/* HOW IT WORKS */
.sp-how { background:var(--light); padding:80px 24px; text-align:center; }
.sp-section-label { font-size:12px; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; color:var(--teal); margin-bottom:12px; }
.sp-section-title { font-family:'Playfair Display',serif; font-size:clamp(26px,3vw,38px); font-weight:700; color:var(--navy); margin-bottom:48px; }
.sp-steps { display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:24px; max-width:960px; margin:0 auto; }
.sp-step { background:var(--white); border-radius:16px; padding:36px 28px; text-align:center; border:1px solid var(--border); transition:transform 0.2s,box-shadow 0.2s; }
.sp-step:hover { transform:translateY(-4px); box-shadow:0 12px 32px rgba(0,0,0,0.08); }
.sp-step-icon { width:56px; height:56px; background:var(--navy); border-radius:14px; display:flex; align-items:center; justify-content:center; margin:0 auto 20px; font-size:24px; }
.sp-step h3 { font-size:17px; font-weight:600; color:var(--navy); margin-bottom:10px; }
.sp-step p { font-size:14px; color:var(--muted); line-height:1.65; }
 
/* CARDS */
.sp-listings { padding:80px 24px; max-width:1100px; margin:0 auto; }
.sp-listings-header { display:flex; justify-content:space-between; align-items:flex-end; margin-bottom:36px; flex-wrap:wrap; gap:16px; }
.sp-view-all { background:var(--navy); color:var(--white); text-decoration:none; padding:12px 24px; border-radius:8px; font-size:14px; font-weight:600; transition:background 0.2s; }
.sp-view-all:hover { background:var(--saffron); }
.sp-cards { display:grid; grid-template-columns:repeat(auto-fill,minmax(300px,1fr)); gap:24px; }
.sp-card { background:var(--white); border:1px solid var(--border); border-radius:16px; padding:28px; transition:transform 0.2s,box-shadow 0.2s; text-decoration:none; color:inherit; display:block; }
.sp-card:hover { transform:translateY(-4px); box-shadow:0 16px 40px rgba(0,0,0,0.1); border-color:var(--saffron); }
.sp-card-ministry { font-size:12px; font-weight:600; color:var(--teal); text-transform:uppercase; letter-spacing:0.05em; margin-bottom:10px; }
.sp-card h3 { font-size:16px; font-weight:600; color:var(--navy); margin-bottom:16px; line-height:1.4; }
.sp-card-meta { display:flex; gap:12px; flex-wrap:wrap; margin-bottom:20px; }
.sp-meta-pill { background:var(--light); border-radius:100px; padding:5px 12px; font-size:12px; font-weight:500; color:var(--text); }
.sp-meta-pill.amount { background:#FEF3E7; color:#B8641A; }
.sp-card-footer { display:flex; justify-content:space-between; align-items:center; padding-top:16px; border-top:1px solid var(--border); }
.sp-deadline { font-size:12px; color:var(--muted); }
.sp-deadline strong { color:#E53E3E; }
.sp-apply-btn { background:var(--navy); color:var(--white); padding:8px 16px; border-radius:8px; font-size:13px; font-weight:600; text-decoration:none; transition:background 0.2s; }
.sp-apply-btn:hover { background:var(--saffron); }
 
/* CTA */
.sp-cta { background:var(--teal); padding:72px 24px; text-align:center; }
.sp-cta h2 { font-family:'Playfair Display',serif; font-size:clamp(26px,3vw,40px); color:var(--white); margin-bottom:16px; }
.sp-cta p { color:rgba(255,255,255,0.8); font-size:17px; margin-bottom:32px; }
.sp-cta-btn { display:inline-block; background:var(--white); color:var(--teal); font-weight:700; font-size:16px; padding:16px 36px; border-radius:10px; text-decoration:none; transition:transform 0.2s; }
.sp-cta-btn:hover { transform:translateY(-2px); }
 
/* FOOTER */
.sp-footer { background:var(--navy); color:rgba(255,255,255,0.5); text-align:center; padding:28px 24px; font-size:14px; }
.sp-footer a { color:var(--saffron); text-decoration:none; }
 
/* RESPONSIVE */
@media(max-width:600px) {
  .sp-stats { gap:28px; }
  .sp-search-bar { flex-direction:column; }
  .sp-nav { gap:16px; }
  .sp-nav a { font-size:13px; }
}
</style>
</head>
<body>
 
<header class="sp-header">
  <a href="<?php echo home_url('/'); ?>" class="sp-logo">Scholar<span>Path</span> India</a>
  <nav><ul class="sp-nav">
    <li><a href="<?php echo home_url('/'); ?>" class="active">Home</a></li>
    <li><a href="<?php echo home_url('/scholarships/'); ?>">Scholarships</a></li>
    <li><a href="<?php echo home_url('/eligibility-checker/'); ?>">Eligibility Checker</a></li>
    <li><a href="<?php echo home_url('/about/'); ?>">About</a></li>
    <li><a href="<?php echo home_url('/contact/'); ?>">Contact</a></li>
  </ul></nav>
</header>
 
<section class="sp-hero">
  <div class="sp-hero-badge">🇮🇳 India's Scholarship Discovery Portal</div>
  <h1>Find the Scholarship<br><span>You Deserve</span></h1>
  <p>Over 3,000 government scholarships in one place. Filter by state, category, income, and course — apply before the deadline.</p>
  <div class="sp-search-bar">
    <input type="text" placeholder="Search by scheme name, ministry, or course..." id="sp-search-input">
    <button onclick="doSearch()">Search →</button>
  </div>
  <div class="sp-stats">
    <div class="sp-stat-item"><span class="sp-stat-num">3,000+</span><div class="sp-stat-label">Scholarships tracked</div></div>
    <div class="sp-stat-item"><span class="sp-stat-num">28</span><div class="sp-stat-label">States covered</div></div>
    <div class="sp-stat-item"><span class="sp-stat-num">₹54,000</span><div class="sp-stat-label">Highest annual award</div></div>
    <div class="sp-stat-item"><span class="sp-stat-num">Free</span><div class="sp-stat-label">Always free to use</div></div>
  </div>
</section>
 
<section class="sp-how">
  <div class="sp-section-label">Simple Process</div>
  <h2 class="sp-section-title">How ScholarPath Works</h2>
  <div class="sp-steps">
    <div class="sp-step"><div class="sp-step-icon">📋</div><h3>Fill Your Profile</h3><p>Enter your state, course, income bracket, and category once — we remember it for every search.</p></div>
    <div class="sp-step"><div class="sp-step-icon">🔍</div><h3>Discover Schemes</h3><p>See only the scholarships you're actually eligible for — no irrelevant results, no confusion.</p></div>
    <div class="sp-step"><div class="sp-step-icon">📁</div><h3>Prepare Documents</h3><p>Every scheme shows a complete document checklist so you can get ready before applying.</p></div>
    <div class="sp-step"><div class="sp-step-icon">✅</div><h3>Apply & Track</h3><p>Apply on the official portal and track your application status right here on your dashboard.</p></div>
  </div>
</section>
 
<section class="sp-listings">
  <div class="sp-listings-header">
    <div>
      <div class="sp-section-label">Latest Schemes</div>
      <h2 class="sp-section-title" style="margin-bottom:0;">Featured Scholarships</h2>
    </div>
    <a href="<?php echo esc_url(home_url('/scholarships/')); ?>" class="sp-view-all">View All Scholarships →</a>
  </div>
  <div class="sp-cards">
    <?php
    $args = array('post_type'=>'scholarship','posts_per_page'=>6,'post_status'=>'publish','orderby'=>'date','order'=>'DESC');
    $scholarships = new WP_Query($args);
    if ($scholarships->have_posts()) :
      while ($scholarships->have_posts()) : $scholarships->the_post();
        $amount = get_field('award_amount');
        $deadline = get_field('deadline');
        $ministry = get_field('ministry_name');
        $gender = get_field('eligible_gender');
        $marks = get_field('min_marks');
    ?>
    <a href="<?php the_permalink(); ?>" class="sp-card">
      <?php if ($ministry) : ?><div class="sp-card-ministry"><?php echo esc_html($ministry); ?></div><?php endif; ?>
      <h3><?php the_title(); ?></h3>
      <div class="sp-card-meta">
        <?php if ($amount) : ?><span class="sp-meta-pill amount">💰 <?php echo esc_html($amount); ?></span><?php endif; ?>
        <?php if ($marks) : ?><span class="sp-meta-pill">📊 <?php echo esc_html($marks); ?>% min</span><?php endif; ?>
        <?php if ($gender && $gender !== 'all') : ?><span class="sp-meta-pill">👩 <?php echo esc_html(ucfirst($gender)); ?></span><?php endif; ?>
      </div>
      <div class="sp-card-footer">
        <div class="sp-deadline"><?php if ($deadline) : ?>Deadline: <strong><?php echo esc_html($deadline); ?></strong><?php else : ?>Check portal for deadline<?php endif; ?></div>
        <span class="sp-apply-btn">View →</span>
      </div>
    </a>
    <?php endwhile; wp_reset_postdata();
    else : ?><p style="color:var(--muted);grid-column:1/-1;text-align:center;padding:48px 0;">No scholarships found.</p><?php endif; ?>
  </div>
</section>
 
<section class="sp-cta">
  <h2>Not Sure Which Scholarship to Apply For?</h2>
  <p>Use our free Eligibility Checker — answer 4 questions and see every scheme you qualify for.</p>
  <a href="<?php echo esc_url(home_url('/eligibility-checker/')); ?>" class="sp-cta-btn">Check My Eligibility — Free →</a>
</section>
 
<footer class="sp-footer">
  <p>© <?php echo date('Y'); ?> ScholarPath India &nbsp;·&nbsp; Built with ❤️ for students across India &nbsp;·&nbsp; <a href="<?php echo home_url('/contact/'); ?>">Contact</a></p>
</footer>
 
<script>
function doSearch() {
  var q = document.getElementById('sp-search-input').value;
  if (q.trim()) window.location.href = '<?php echo esc_url(home_url('/')); ?>?s=' + encodeURIComponent(q) + '&post_type=scholarship';
}
document.getElementById('sp-search-input').addEventListener('keypress', function(e){ if (e.key==='Enter') doSearch(); });
</script>
<?php wp_footer(); ?>
</body>
</html>