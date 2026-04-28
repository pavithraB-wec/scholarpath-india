<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php the_title(); ?> — ScholarPath India</title>
<?php wp_head(); ?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&family=DM+Sans:wght@400;500;600&display=swap');
*,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
html,body{width:100%;overflow-x:hidden;}
:root{--navy:#0D1B2A;--saffron:#E8871A;--teal:#1A7A6E;--light:#F4F6F9;--white:#FFFFFF;--text:#2C3E50;--muted:#6B7A8D;--border:#E2E8F0;}
body{font-family:'DM Sans',sans-serif;color:var(--text);background:var(--light);}

/* HEADER */
.sp-header{display:flex;align-items:center;justify-content:space-between;padding:0 40px;height:68px;background:var(--white);border-bottom:1px solid var(--border);position:sticky;top:0;z-index:1000;box-shadow:0 1px 8px rgba(0,0,0,0.06);}
.sp-logo{font-family:'Playfair Display',serif;font-size:20px;font-weight:800;color:var(--navy);text-decoration:none;}
.sp-logo span{color:var(--saffron);}
.sp-nav{display:flex;gap:32px;list-style:none;}
.sp-nav a{text-decoration:none;font-size:15px;font-weight:500;color:var(--text);transition:color 0.2s;}
.sp-nav a:hover,.sp-nav a.active{color:var(--saffron);}

/* BREADCRUMB */
.sp-breadcrumb{background:var(--white);border-bottom:1px solid var(--border);padding:12px 40px;font-size:13px;color:var(--muted);}
.sp-breadcrumb a{color:var(--muted);text-decoration:none;transition:color 0.2s;}
.sp-breadcrumb a:hover{color:var(--saffron);}
.sp-breadcrumb span{margin:0 8px;}

/* HERO BAND */
.sp-detail-hero{background:var(--navy);padding:52px 40px 40px;}
.sp-detail-hero-inner{max-width:960px;margin:0 auto;}
.sp-ministry-badge{display:inline-block;background:rgba(232,135,26,0.15);color:var(--saffron);border:1px solid rgba(232,135,26,0.3);border-radius:100px;padding:5px 16px;font-size:12px;font-weight:700;letter-spacing:0.05em;text-transform:uppercase;margin-bottom:16px;}
.sp-detail-hero h1{font-family:'Playfair Display',serif;font-size:clamp(24px,3.5vw,42px);font-weight:800;color:var(--white);line-height:1.2;margin-bottom:24px;max-width:780px;}
.sp-hero-pills{display:flex;flex-wrap:wrap;gap:12px;}
.sp-hero-pill{background:rgba(255,255,255,0.1);color:rgba(255,255,255,0.9);border-radius:8px;padding:8px 16px;font-size:13px;font-weight:600;}
.sp-hero-pill.highlight{background:rgba(232,135,26,0.2);color:var(--saffron);}

/* DEADLINE BANNER */
.sp-deadline-banner{background:var(--saffron);padding:14px 40px;text-align:center;}
.sp-deadline-banner p{font-size:14px;font-weight:600;color:var(--white);}
.sp-deadline-banner strong{font-size:16px;}

/* MAIN LAYOUT */
.sp-detail-body{max-width:960px;margin:40px auto 80px;padding:0 24px;display:grid;grid-template-columns:1fr 300px;gap:32px;align-items:start;}
@media(max-width:768px){.sp-detail-body{grid-template-columns:1fr;}}

/* LEFT CONTENT */
.sp-main-content{display:flex;flex-direction:column;gap:24px;}

.sp-card{background:var(--white);border-radius:16px;padding:32px;border:1px solid var(--border);}
.sp-card-title{font-size:11px;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:var(--teal);margin-bottom:16px;}
.sp-card h2{font-family:'Playfair Display',serif;font-size:22px;color:var(--navy);margin-bottom:16px;}

/* DESCRIPTION */
.sp-description{font-size:15px;color:var(--text);line-height:1.8;}
.sp-description p{margin-bottom:14px;}

/* ELIGIBILITY TABLE */
.sp-elig-table{width:100%;border-collapse:collapse;}
.sp-elig-table tr{border-bottom:1px solid var(--border);}
.sp-elig-table tr:last-child{border-bottom:none;}
.sp-elig-table td{padding:13px 0;font-size:14px;vertical-align:top;}
.sp-elig-table td:first-child{font-weight:600;color:var(--navy);width:42%;padding-right:16px;}
.sp-elig-table td:last-child{color:var(--text);}

/* CATEGORY PILLS */
.sp-cat-pills{display:flex;flex-wrap:wrap;gap:8px;}
.sp-cat-pill{background:var(--light);border-radius:100px;padding:4px 12px;font-size:12px;font-weight:600;color:var(--navy);}

/* DOCUMENT CHECKLIST */
.sp-checklist{list-style:none;display:flex;flex-direction:column;gap:10px;}
.sp-checklist li{display:flex;align-items:flex-start;gap:12px;font-size:14px;color:var(--text);line-height:1.5;}
.sp-checklist li::before{content:'☐';font-size:18px;color:var(--teal);flex-shrink:0;margin-top:-1px;cursor:pointer;}
.sp-checklist li.checked::before{content:'✅';font-size:16px;}

/* HOW TO APPLY STEPS */
.sp-apply-steps{display:flex;flex-direction:column;gap:16px;}
.sp-apply-step{display:flex;gap:16px;align-items:flex-start;}
.sp-step-num{width:32px;height:32px;background:var(--navy);color:var(--white);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:700;flex-shrink:0;}
.sp-step-text h4{font-size:14px;font-weight:700;color:var(--navy);margin-bottom:4px;}
.sp-step-text p{font-size:13px;color:var(--muted);line-height:1.5;}

/* RIGHT SIDEBAR */
.sp-sidebar{display:flex;flex-direction:column;gap:20px;position:sticky;top:90px;}

.sp-apply-card{background:var(--saffron);border-radius:16px;padding:28px;text-align:center;}
.sp-apply-card h3{font-family:'Playfair Display',serif;font-size:20px;color:var(--white);margin-bottom:8px;}
.sp-apply-card p{font-size:13px;color:rgba(255,255,255,0.8);margin-bottom:20px;line-height:1.5;}
.sp-apply-official{display:block;background:var(--white);color:var(--saffron);font-weight:700;font-size:15px;padding:14px 20px;border-radius:10px;text-decoration:none;transition:transform 0.2s;}
.sp-apply-official:hover{transform:translateY(-2px);}
.sp-apply-note{font-size:11px;color:rgba(255,255,255,0.65);margin-top:12px;}

.sp-sidebar-card{background:var(--white);border-radius:16px;padding:24px;border:1px solid var(--border);}
.sp-sidebar-card h4{font-size:13px;font-weight:700;color:var(--navy);margin-bottom:14px;text-transform:uppercase;letter-spacing:0.05em;}
.sp-sidebar-row{display:flex;justify-content:space-between;align-items:center;padding:9px 0;border-bottom:1px solid var(--border);font-size:13px;}
.sp-sidebar-row:last-child{border-bottom:none;}
.sp-sidebar-row .label{color:var(--muted);}
.sp-sidebar-row .value{font-weight:600;color:var(--navy);text-align:right;}
.sp-sidebar-row .value.red{color:#E53E3E;}
.sp-sidebar-row .value.green{color:var(--teal);}

.sp-back-link{display:flex;align-items:center;gap:8px;color:var(--muted);text-decoration:none;font-size:14px;font-weight:500;padding:14px 20px;background:var(--white);border-radius:10px;border:1px solid var(--border);justify-content:center;transition:all 0.2s;}
.sp-back-link:hover{border-color:var(--navy);color:var(--navy);}

/* FOOTER */
.sp-footer{background:var(--navy);color:rgba(255,255,255,0.5);text-align:center;padding:28px 24px;font-size:14px;}
.sp-footer a{color:var(--saffron);text-decoration:none;}

@media(max-width:480px){.sp-nav{display:none;}.sp-header{padding:0 20px;}.sp-breadcrumb{padding:12px 20px;}.sp-detail-hero{padding:40px 20px;}}
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

<?php if (have_posts()) : while (have_posts()) : the_post();

$amount    = get_field('award_amount');
$deadline  = get_field('deadline');
$ministry  = get_field('ministry_name');
$url       = get_field('official_url');
$gender    = get_field('eligible_gender');
$marks     = get_field('min_marks');
$income    = get_field('max_income');
$docs      = get_field('document_checklist');
$category  = get_field('eligible_category');

// Gender label
$gender_label = 'All Genders';
if ($gender === 'female') $gender_label = 'Female Only';
if ($gender === 'male')   $gender_label = 'Male Only';

// Category labels
$cat_labels = array('GEN'=>'General','OBC'=>'OBC','SC'=>'Scheduled Caste','ST'=>'Scheduled Tribe');
?>

<!-- BREADCRUMB -->
<div class="sp-breadcrumb">
  <a href="<?php echo home_url('/'); ?>">Home</a>
  <span>›</span>
  <a href="<?php echo home_url('/scholarships/'); ?>">Scholarships</a>
  <span>›</span>
  <?php the_title(); ?>
</div>

<!-- HERO -->
<section class="sp-detail-hero">
  <div class="sp-detail-hero-inner">
    <?php if ($ministry) : ?>
      <div class="sp-ministry-badge"><?php echo esc_html($ministry); ?></div>
    <?php endif; ?>
    <h1><?php the_title(); ?></h1>
    <div class="sp-hero-pills">
      <?php if ($amount) : ?>
        <div class="sp-hero-pill highlight">💰 <?php echo esc_html($amount); ?></div>
      <?php endif; ?>
      <?php if ($marks) : ?>
        <div class="sp-hero-pill">📊 Min <?php echo esc_html($marks); ?>% Marks</div>
      <?php endif; ?>
      <div class="sp-hero-pill">👤 <?php echo esc_html($gender_label); ?></div>
      <?php if ($income) : ?>
        <div class="sp-hero-pill">🏠 Income ≤ <?php echo esc_html($income); ?></div>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php if ($deadline) : ?>
<div class="sp-deadline-banner">
  <p>⏰ Application Deadline: <strong><?php echo esc_html($deadline); ?></strong> — Apply before it closes!</p>
</div>
<?php endif; ?>

<!-- BODY -->
<div class="sp-detail-body">

  <!-- LEFT -->
  <div class="sp-main-content">

    <!-- Overview -->
    <div class="sp-card">
      <div class="sp-card-title">About this Scholarship</div>
      <div class="sp-description">
        <?php the_content(); ?>
      </div>
    </div>

    <!-- Eligibility -->
    <div class="sp-card">
      <div class="sp-card-title">Eligibility Criteria</div>
      <table class="sp-elig-table">
        <?php if ($ministry) : ?>
        <tr>
          <td>Awarding Body</td>
          <td><?php echo esc_html($ministry); ?></td>
        </tr>
        <?php endif; ?>
        <?php if ($category && count($category) > 0) : ?>
        <tr>
          <td>Eligible Categories</td>
          <td>
            <div class="sp-cat-pills">
              <?php foreach ($category as $cat) :
                $label = isset($cat_labels[$cat]) ? $cat_labels[$cat] : $cat;
              ?>
                <span class="sp-cat-pill"><?php echo esc_html($label); ?></span>
              <?php endforeach; ?>
            </div>
          </td>
        </tr>
        <?php endif; ?>
        <tr>
          <td>Gender</td>
          <td><?php echo esc_html($gender_label); ?></td>
        </tr>
        <?php if ($marks) : ?>
        <tr>
          <td>Minimum Marks</td>
          <td><?php echo esc_html($marks); ?>% in Class 12 / Board Exam</td>
        </tr>
        <?php endif; ?>
        <?php if ($income) : ?>
        <tr>
          <td>Max Family Income</td>
          <td><?php echo esc_html($income); ?> per annum</td>
        </tr>
        <?php endif; ?>
        <?php if ($deadline) : ?>
        <tr>
          <td>Application Deadline</td>
          <td><strong style="color:#E53E3E;"><?php echo esc_html($deadline); ?></strong></td>
        </tr>
        <?php endif; ?>
      </table>
    </div>

    <!-- Document Checklist -->
    <?php if ($docs) : ?>
    <div class="sp-card">
      <div class="sp-card-title">Document Checklist</div>
      <p style="font-size:13px;color:var(--muted);margin-bottom:16px;">Click each item to mark it as collected.</p>
      <ul class="sp-checklist" id="sp-checklist">
        <?php
        $doc_items = explode(',', $docs);
        foreach ($doc_items as $i => $doc) :
          $doc = trim($doc);
          if ($doc) :
        ?>
          <li id="doc-<?php echo $i; ?>" onclick="toggleDoc(<?php echo $i; ?>)"><?php echo esc_html($doc); ?></li>
        <?php endif; endforeach; ?>
      </ul>
    </div>
    <?php endif; ?>

    <!-- How to Apply -->
    <div class="sp-card">
      <div class="sp-card-title">How to Apply</div>
      <div class="sp-apply-steps">
        <div class="sp-apply-step">
          <div class="sp-step-num">1</div>
          <div class="sp-step-text">
            <h4>Collect All Documents</h4>
            <p>Gather all documents from the checklist above before starting. Incomplete applications are rejected.</p>
          </div>
        </div>
        <div class="sp-apply-step">
          <div class="sp-step-num">2</div>
          <div class="sp-step-text">
            <h4>Register on the Official Portal</h4>
            <p>Visit the official application portal using the "Apply Now" button. Create an account with your Aadhaar number and mobile.</p>
          </div>
        </div>
        <div class="sp-apply-step">
          <div class="sp-step-num">3</div>
          <div class="sp-step-text">
            <h4>Fill the Application Form</h4>
            <p>Enter your personal, academic, and bank account details carefully. Double-check your IFSC code and account number.</p>
          </div>
        </div>
        <div class="sp-apply-step">
          <div class="sp-step-num">4</div>
          <div class="sp-step-text">
            <h4>Upload Scanned Documents</h4>
            <p>Upload clear scans (PDF or JPG) of all required documents. File size is usually limited to 200KB per document.</p>
          </div>
        </div>
        <div class="sp-apply-step">
          <div class="sp-step-num">5</div>
          <div class="sp-step-text">
            <h4>Submit & Save Acknowledgement</h4>
            <p>After submitting, save or print your acknowledgement slip. This is your proof of application — keep it safe.</p>
          </div>
        </div>
      </div>
    </div>

  </div><!-- end left -->

  <!-- RIGHT SIDEBAR -->
  <div class="sp-sidebar">

    <!-- Apply Button -->
    <div class="sp-apply-card">
      <h3>Ready to Apply?</h3>
      <p>Click below to go to the official government application portal for this scheme.</p>
      <?php if ($url) : ?>
        <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener" class="sp-apply-official">
          Apply on Official Portal →
        </a>
      <?php else : ?>
        <a href="https://scholarships.gov.in" target="_blank" rel="noopener" class="sp-apply-official">
          Visit NSP Portal →
        </a>
      <?php endif; ?>
      <p class="sp-apply-note">You will be redirected to the official government website. ScholarPath India does not process applications.</p>
    </div>

    <!-- Quick Facts -->
    <div class="sp-sidebar-card">
      <h4>Quick Facts</h4>
      <?php if ($amount) : ?>
      <div class="sp-sidebar-row">
        <span class="label">Award Amount</span>
        <span class="value green"><?php echo esc_html($amount); ?></span>
      </div>
      <?php endif; ?>
      <?php if ($deadline) : ?>
      <div class="sp-sidebar-row">
        <span class="label">Deadline</span>
        <span class="value red"><?php echo esc_html($deadline); ?></span>
      </div>
      <?php endif; ?>
      <?php if ($marks) : ?>
      <div class="sp-sidebar-row">
        <span class="label">Min Marks</span>
        <span class="value"><?php echo esc_html($marks); ?>%</span>
      </div>
      <?php endif; ?>
      <div class="sp-sidebar-row">
        <span class="label">Gender</span>
        <span class="value"><?php echo esc_html($gender_label); ?></span>
      </div>
      <?php if ($income) : ?>
      <div class="sp-sidebar-row">
        <span class="label">Max Income</span>
        <span class="value"><?php echo esc_html($income); ?></span>
      </div>
      <?php endif; ?>
    </div>

    <!-- Back link -->
    <a href="<?php echo home_url('/scholarships/'); ?>" class="sp-back-link">
      ← Back to All Scholarships
    </a>

    <!-- Eligibility Checker CTA -->
    <div class="sp-sidebar-card" style="text-align:center;">
      <h4>Not Sure You Qualify?</h4>
      <p style="font-size:13px;color:var(--muted);margin:8px 0 16px;line-height:1.6;">Use our free eligibility checker to see all schemes matching your profile.</p>
      <a href="<?php echo home_url('/eligibility-checker/'); ?>" style="display:block;background:var(--navy);color:var(--white);padding:12px 16px;border-radius:8px;font-size:13px;font-weight:700;text-decoration:none;transition:background 0.2s;" onmouseover="this.style.background='#E8871A'" onmouseout="this.style.background='#0D1B2A'">
        Check My Eligibility →
      </a>
    </div>

  </div><!-- end sidebar -->

</div><!-- end body -->

<?php endwhile; endif; ?>

<footer class="sp-footer">
  <p>© <?php echo date('Y'); ?> ScholarPath India &nbsp;·&nbsp; Data sourced from official government portals &nbsp;·&nbsp; <a href="<?php echo home_url('/contact/'); ?>">Report an Error</a></p>
</footer>

<script>
function toggleDoc(i) {
  var el = document.getElementById('doc-' + i);
  el.classList.toggle('checked');
}
</script>
<?php wp_footer(); ?>
</body>
</html>