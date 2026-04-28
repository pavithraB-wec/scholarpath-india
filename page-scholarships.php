<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>All Scholarships — ScholarPath India</title>
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
body { font-family:'DM Sans',sans-serif; color:var(--text); background:var(--white); }
 
/* HEADER */
.sp-header { display:flex; align-items:center; justify-content:space-between; padding:0 40px; height:68px; background:var(--white); border-bottom:1px solid var(--border); position:sticky; top:0; z-index:1000; box-shadow:0 1px 8px rgba(0,0,0,0.06); }
.sp-logo { font-family:'Playfair Display',serif; font-size:20px; font-weight:800; color:var(--navy); text-decoration:none; }
.sp-logo span { color:var(--saffron); }
.sp-nav { display:flex; gap:32px; list-style:none; }
.sp-nav a { text-decoration:none; font-size:15px; font-weight:500; color:var(--text); transition:color 0.2s; }
.sp-nav a:hover, .sp-nav a.active { color:var(--saffron); }
 
/* PAGE HERO */
.sp-page-hero {
  background: var(--navy);
  padding: 60px 40px;
  text-align: center;
}
.sp-page-hero h1 {
  font-family:'Playfair Display',serif;
  font-size: clamp(32px, 4vw, 52px);
  color: var(--white);
  margin-bottom: 12px;
}
.sp-page-hero h1 span { color:var(--saffron); }
.sp-page-hero p {
  color: rgba(255,255,255,0.65);
  font-size: 17px;
  max-width: 500px;
  margin: 0 auto;
}
 
/* FILTERS BAR */
.sp-filter-bar {
  background: var(--white);
  border-bottom: 1px solid var(--border);
  padding: 20px 40px;
  display: flex;
  gap: 16px;
  flex-wrap: wrap;
  align-items: center;
}
.sp-filter-bar label {
  font-size: 13px;
  font-weight: 600;
  color: var(--muted);
  text-transform: uppercase;
  letter-spacing: 0.05em;
}
.sp-filter-select {
  border: 1px solid var(--border);
  border-radius: 8px;
  padding: 8px 14px;
  font-size: 14px;
  font-family: 'DM Sans', sans-serif;
  color: var(--text);
  background: var(--white);
  cursor: pointer;
  outline: none;
  transition: border-color 0.2s;
}
.sp-filter-select:focus { border-color: var(--saffron); }
.sp-filter-btn {
  background: var(--saffron);
  color: var(--white);
  border: none;
  padding: 9px 20px;
  border-radius: 8px;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  font-family: 'DM Sans', sans-serif;
  transition: background 0.2s;
  margin-left: auto;
}
.sp-filter-btn:hover { background: #d4770f; }
 
/* SEARCH BAR */
.sp-search-wrap {
  max-width: 1100px;
  margin: 32px auto 0;
  padding: 0 24px;
}
.sp-search-inline {
  display: flex;
  background: var(--white);
  border: 1px solid var(--border);
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 2px 12px rgba(0,0,0,0.06);
}
.sp-search-inline input {
  flex: 1;
  border: none;
  outline: none;
  padding: 14px 18px;
  font-size: 15px;
  font-family: 'DM Sans', sans-serif;
  color: var(--text);
}
.sp-search-inline button {
  background: var(--navy);
  color: var(--white);
  border: none;
  padding: 14px 24px;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  font-family: 'DM Sans', sans-serif;
  transition: background 0.2s;
}
.sp-search-inline button:hover { background: var(--saffron); }
 
/* RESULTS COUNT */
.sp-results-meta {
  max-width: 1100px;
  margin: 24px auto 0;
  padding: 0 24px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.sp-results-count {
  font-size: 14px;
  color: var(--muted);
}
.sp-results-count strong { color: var(--navy); }
 
/* CARDS GRID */
.sp-grid {
  max-width: 1100px;
  margin: 24px auto 80px;
  padding: 0 24px;
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
  gap: 24px;
}
.sp-card {
  background: var(--white);
  border: 1px solid var(--border);
  border-radius: 16px;
  padding: 28px;
  transition: transform 0.2s, box-shadow 0.2s, border-color 0.2s;
  text-decoration: none;
  color: inherit;
  display: flex;
  flex-direction: column;
}
.sp-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 16px 40px rgba(0,0,0,0.1);
  border-color: var(--saffron);
}
.sp-card-top { flex: 1; }
.sp-card-ministry {
  font-size: 11px;
  font-weight: 700;
  color: var(--teal);
  text-transform: uppercase;
  letter-spacing: 0.06em;
  margin-bottom: 10px;
}
.sp-card h3 {
  font-size: 16px;
  font-weight: 600;
  color: var(--navy);
  margin-bottom: 16px;
  line-height: 1.45;
}
.sp-card-meta { display:flex; gap:8px; flex-wrap:wrap; margin-bottom:20px; }
.sp-meta-pill {
  background: var(--light);
  border-radius: 100px;
  padding: 5px 12px;
  font-size: 12px;
  font-weight: 500;
  color: var(--text);
}
.sp-meta-pill.amount { background:#FEF3E7; color:#B8641A; }
.sp-meta-pill.gender { background:#EDF7F6; color:#1A7A6E; }
.sp-card-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-top: 16px;
  border-top: 1px solid var(--border);
  margin-top: auto;
}
.sp-deadline { font-size: 12px; color: var(--muted); }
.sp-deadline strong { color: #E53E3E; font-weight: 600; }
.sp-view-btn {
  background: var(--navy);
  color: var(--white);
  padding: 8px 18px;
  border-radius: 8px;
  font-size: 13px;
  font-weight: 600;
  text-decoration: none;
  transition: background 0.2s;
  white-space: nowrap;
}
.sp-view-btn:hover { background: var(--saffron); color:var(--white); }
 
/* EMPTY STATE */
.sp-empty {
  grid-column: 1/-1;
  text-align: center;
  padding: 80px 24px;
  color: var(--muted);
}
.sp-empty h3 { font-size: 20px; margin-bottom: 8px; color: var(--navy); }
 
/* FOOTER */
.sp-footer { background:var(--navy); color:rgba(255,255,255,0.5); text-align:center; padding:28px 24px; font-size:14px; }
.sp-footer a { color:var(--saffron); text-decoration:none; }
 
@media(max-width:768px) {
  .sp-header { padding:0 20px; }
  .sp-filter-bar { padding:16px 20px; }
  .sp-nav { gap:16px; }
  .sp-nav a { font-size:13px; }
}
@media(max-width:480px) { .sp-nav { display:none; } }
</style>
</head>
<body>
 
<header class="sp-header">
  <a href="<?php echo home_url('/'); ?>" class="sp-logo">Scholar<span>Path</span> India</a>
  <nav><ul class="sp-nav">
    <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
    <li><a href="<?php echo home_url('/scholarships/'); ?>" class="active">Scholarships</a></li>
    <li><a href="<?php echo home_url('/eligibility-checker/'); ?>">Eligibility Checker</a></li>
    <li><a href="<?php echo home_url('/about/'); ?>">About</a></li>
    <li><a href="<?php echo home_url('/contact/'); ?>">Contact</a></li>
  </ul></nav>
</header>
 
<section class="sp-page-hero">
  <h1>All <span>Scholarships</span></h1>
  <p>Browse government scholarships from ministries across India — filtered for your profile.</p>
</section>
 
<!-- SEARCH -->
<div class="sp-search-wrap">
  <div class="sp-search-inline">
    <input type="text" id="sp-search" placeholder="Search by scheme name or ministry..." value="<?php echo esc_attr(get_search_query()); ?>">
    <button onclick="doSearch()">Search →</button>
  </div>
</div>
 
<!-- RESULTS COUNT -->
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
  'post_type'      => 'scholarship',
  'posts_per_page' => 9,
  'post_status'    => 'publish',
  'orderby'        => 'date',
  'order'          => 'DESC',
  'paged'          => $paged,
);
$scholarships = new WP_Query($args);
$total = $scholarships->found_posts;
?>
<div class="sp-results-meta">
  <div class="sp-results-count">Showing <strong><?php echo $total; ?></strong> scholarships</div>
</div>
 
<!-- CARDS -->
<div class="sp-grid">
  <?php if ($scholarships->have_posts()) :
    while ($scholarships->have_posts()) : $scholarships->the_post();
      $amount   = get_field('award_amount');
      $deadline = get_field('deadline');
      $ministry = get_field('ministry_name');
      $gender   = get_field('eligible_gender');
      $marks    = get_field('min_marks');
      $income   = get_field('max_income');
  ?>
  <a href="<?php the_permalink(); ?>" class="sp-card">
    <div class="sp-card-top">
      <?php if ($ministry) : ?>
        <div class="sp-card-ministry"><?php echo esc_html($ministry); ?></div>
      <?php endif; ?>
      <h3><?php the_title(); ?></h3>
      <div class="sp-card-meta">
        <?php if ($amount) : ?>
          <span class="sp-meta-pill amount">💰 <?php echo esc_html($amount); ?></span>
        <?php endif; ?>
        <?php if ($marks) : ?>
          <span class="sp-meta-pill">📊 <?php echo esc_html($marks); ?>% min marks</span>
        <?php endif; ?>
        <?php if ($gender && $gender !== 'all') : ?>
          <span class="sp-meta-pill gender">👩 <?php echo esc_html(ucfirst($gender)); ?> Only</span>
        <?php endif; ?>
        <?php if ($income) : ?>
          <span class="sp-meta-pill">🏠 Income ≤ <?php echo esc_html($income); ?></span>
        <?php endif; ?>
      </div>
    </div>
    <div class="sp-card-footer">
      <div class="sp-deadline">
        <?php if ($deadline) : ?>
          Deadline: <strong><?php echo esc_html($deadline); ?></strong>
        <?php else : ?>
          Check portal for deadline
        <?php endif; ?>
      </div>
      <span class="sp-view-btn">View Details →</span>
    </div>
  </a>
  <?php endwhile; wp_reset_postdata();
  else : ?>
  <div class="sp-empty">
    <h3>No scholarships found</h3>
    <p>Try a different search or check back soon.</p>
  </div>
  <?php endif; ?>
</div>
 
<footer class="sp-footer">
  <p>© <?php echo date('Y'); ?> ScholarPath India &nbsp;·&nbsp; <a href="<?php echo home_url('/contact/'); ?>">Contact</a></p>
</footer>
 
<script>
function doSearch() {
  var q = document.getElementById('sp-search').value;
  if (q.trim()) window.location.href = '<?php echo esc_url(home_url('/')); ?>?s=' + encodeURIComponent(q) + '&post_type=scholarship';
  else window.location.href = '<?php echo esc_url(home_url('/scholarships/')); ?>';
}
document.getElementById('sp-search').addEventListener('keypress', function(e){ if(e.key==='Enter') doSearch(); });
</script>
<?php wp_footer(); ?>
</body>
</html>
 