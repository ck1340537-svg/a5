<?php
// Crochet Bounty — homepage
$m = (int) date('n');
$focus = in_array($m, [5, 6, 7, 8]) ? ['Summer', 'raffia beach baskets and airy shell-stitch totes']
       : (in_array($m, [9, 10, 11]) ? ['Autumn', 'cotton tapestry totes in warm, earthy tones']
       : (in_array($m, [12, 1, 2]) ? ['Winter', 'compact evening bags in fine cotton and silk-blend yarns'] : ['Spring', 'granny-square market bags in fresh, bright colours']));
$msg = ''; $ok = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nl_email'])) {
    $email = trim((string) filter_input(INPUT_POST, 'nl_email', FILTER_SANITIZE_EMAIL));
    if (!empty($_POST['website'])) { $ok = true; $msg = 'Thank you!'; }
    elseif ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        @file_put_contents(__DIR__ . '/subscribers.txt', date('c') . "\t" . $email . PHP_EOL, FILE_APPEND | LOCK_EX);
        $ok = true; $msg = 'Thank you! The next Loop Letter will arrive at the start of the month.';
    } else { $msg = 'Please enter a valid email address.'; }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Crochet Bounty | Handmade Luxury Crochet &amp; Woven Bag Guide</title>
<meta name="description" content="Discover handmade luxury crochet and woven bags: stitches, raffia, jute and cotton yarns, a bag style finder, quality checklist, styling ideas and care tips.">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="https://www.crochetbounty.com/">
<meta property="og:type" content="website"><meta property="og:site_name" content="Crochet Bounty">
<meta property="og:title" content="Crochet Bounty | Handmade Luxury Crochet &amp; Woven Bag Guide"><meta property="og:description" content="Discover handmade luxury crochet and woven bags: stitches, raffia, jute and cotton yarns, a bag style finder, quality checklist, styling ideas and care tips.">
<meta property="og:url" content="https://www.crochetbounty.com/"><meta property="og:image" content="https://images.unsplash.com/photo-1565592284032-d3c08f2a53e9?auto=format&fit=crop&w=1200&q=75">
<meta name="twitter:card" content="summary_large_image"><meta name="theme-color" content="#A4553A">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 46 46'%3E%3Cpath d='M13 16 C13 6 33 6 33 16' fill='none' stroke='%23A4553A' stroke-width='3'/%3E%3Cpath d='M6 16 H40 L36 42 H10 Z' fill='%23D9B77E'/%3E%3C/svg%3E">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link rel="preconnect" href="https://images.unsplash.com">
<link href="https://fonts.googleapis.com/css2?family=Gilda+Display&family=Red+Hat+Text:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-0LY0HY7L01');
</script>
<script type="application/ld+json">[{"@context": "https://schema.org", "@type": "Organization", "name": "Crochet Bounty", "url": "https://www.crochetbounty.com/", "email": "hello@crochetbounty.com", "telephone": "+1-888-777-5845", "address": {"@type": "PostalAddress", "streetAddress": "181 Mercer Street", "addressLocality": "New York", "addressRegion": "NY", "postalCode": "10012", "addressCountry": "US"}}, {"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "What makes a crochet bag “luxury”?", "acceptedAnswer": {"@type": "Answer", "text": "Luxury in crochet comes from time, skill and materials rather than a label. A well-made bag may take many hours of handwork, uses high-quality fibres such as long-staple cotton, fine raffia or silk blends, and is finished with care: tight, even stitches, a fitted lining and strong, comfortable handles."}}, {"@type": "Question", "name": "What is raffia?", "acceptedAnswer": {"@type": "Answer", "text": "Raffia is a natural fibre made from the leaves of raffia palms, which grow mainly in tropical Africa and Madagascar. The leaves are split into long strands and dried. It is light, strong and has a beautiful natural sheen. Many “raffia” yarns are actually paper or synthetic alternatives, so check the label."}}, {"@type": "Question", "name": "Will a crochet bag stretch?", "acceptedAnswer": {"@type": "Answer", "text": "Crochet fabric can stretch over time, especially with heavy loads or loose, tall stitches. Dense stitches, firm yarns like jute or cotton cord, and a fabric lining all help a bag keep its shape."}}, {"@type": "Question", "name": "Can I wash a crochet bag?", "acceptedAnswer": {"@type": "Answer", "text": "It depends on the fibre. Cotton bags can usually be hand washed gently; raffia, straw and jute should only be spot-cleaned and never soaked. Always check the maker’s care advice first."}}, {"@type": "Question", "name": "How long does it take to crochet a bag?", "acceptedAnswer": {"@type": "Answer", "text": "A small, simple pouch might take a few hours, while a large tapestry tote can take twenty hours or more. That time is a big part of what makes handmade bags special."}}, {"@type": "Question", "name": "Do you sell bags or patterns?", "acceptedAnswer": {"@type": "Answer", "text": "No. Crochet Bounty is an independent guide. We do not sell bags, kits or patterns, and we are not affiliated with any brand."}}]}]</script>
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<div class="stitch-line" aria-hidden="true"></div>
<header class="hdr">
  <div class="wrap">
    <a class="logo" href="index.php" aria-label="Crochet Bounty home"><svg viewBox="0 0 46 46" aria-hidden="true"><path d="M13 16 C13 6 33 6 33 16" fill="none" stroke="#A4553A" stroke-width="2.5"/><path d="M6 16 H40 L36 42 H10 Z" fill="#D9B77E"/><circle cx="14" cy="22" r="1.6" fill="#7E3E28"/><circle cx="19" cy="22" r="1.6" fill="#7E3E28"/><circle cx="24" cy="22" r="1.6" fill="#7E3E28"/><circle cx="29" cy="22" r="1.6" fill="#7E3E28"/><circle cx="34" cy="22" r="1.6" fill="#7E3E28"/><circle cx="12" cy="28" r="1.6" fill="#7E3E28"/><circle cx="17" cy="28" r="1.6" fill="#7E3E28"/><circle cx="22" cy="28" r="1.6" fill="#7E3E28"/><circle cx="27" cy="28" r="1.6" fill="#7E3E28"/><circle cx="32" cy="28" r="1.6" fill="#7E3E28"/><circle cx="14" cy="34" r="1.6" fill="#7E3E28"/><circle cx="19" cy="34" r="1.6" fill="#7E3E28"/><circle cx="24" cy="34" r="1.6" fill="#7E3E28"/><circle cx="29" cy="34" r="1.6" fill="#7E3E28"/><circle cx="34" cy="34" r="1.6" fill="#7E3E28"/></svg><span>Crochet Bounty<small>Handmade luxury bags</small></span></a>
    <nav aria-label="Main navigation"><ul class="nav" id="nav"><li><a href="index.php" aria-current="page">Home</a></li><li><a href="yarn-guide.html">Yarn Guide</a></li><li><a href="care-styling.html">Care &amp; Styling</a></li><li><a href="about.html">About</a></li><li><a href="contact.html">Contact</a></li></ul></nav>
    <a class="btn" href="index.php#finder-sec">Find your style</a>
    <button class="burger" aria-label="Open menu" aria-expanded="false" aria-controls="nav"><span></span><span></span><span></span></button>
  </div>
</header>
<main id="main">
<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <span class="eyebrow"><?php echo $focus[0]; ?> edit</span>
      <h1>Luxury, <em>one loop</em> at a time.</h1>
      <p class="lead">Crochet Bounty celebrates the handmade bag: the fibres, stitches and hours of skilled work behind a piece you will carry for years. Learn what makes a crochet or woven bag truly special and how to choose and care for one.</p>
      <div class="ctas"><a class="btn" href="#finder-sec">Find your bag style</a><a class="btn btn--o" href="yarn-guide.html">Explore yarns</a></div>
      <div class="hours"><div><b>6&ndash;20+</b><span>hours to hand-crochet a bag</span></div><div><b>1</b><span>hook, endless stitches</span></div><div><b>100%</b><span>made by hand, never by machine</span></div></div>
    </div>
    <div class="duo-pics">
      <div class="a"><img src="https://images.unsplash.com/photo-1565592284032-d3c08f2a53e9?auto=format&fit=crop&w=800&q=75" alt="brown knitted handbag" width="800" height="1000" fetchpriority="high"></div>
      <div class="b"><img src="https://images.unsplash.com/photo-1787432131008-c754654978a4?auto=format&fit=crop&w=600&q=75" alt="small yellow crocheted bag with fabric flowers hanging on a dark door" width="600" height="600"></div>
      <span class="badge">Hand<br>made<br>with time</span>
    </div>
  </div>
</section>

<section class="craft" aria-labelledby="cr-t">
  <div class="wrap craft-grid">
    <div class="pics">
      <div class="pic"><img src="https://images.unsplash.com/photo-1789654498607-61ff1edff021?auto=format&fit=crop&w=600&q=75" alt="hands working a crochet hook through colourful twisted yarn" width="600" height="800" loading="lazy"></div>
      <div class="pic"><img src="https://images.unsplash.com/photo-1648005539099-709d5be525fb?auto=format&fit=crop&w=600&q=75" alt="three balls of yarn and a crochet hook on a blanket" width="600" height="800" loading="lazy"></div>
    </div>
    <div>
      <span class="eyebrow">The craft</span>
      <h2 id="cr-t">Why crochet can never be rushed</h2>
      <p>Unlike knitting, crochet has never been successfully replicated by machines. Every true crochet stitch is made by hand, one loop pulled through another with a single hook. That is why a crochet bag carries the time and touch of the person who made it.</p>
      <ul class="why">
        <li><span class="ic">i</span><p><strong>Truly handmade.</strong> Machine &ldquo;crochet-look&rdquo; fabrics exist, but genuine crochet is always made by hand.</p></li>
        <li><span class="ic">ii</span><p><strong>Structural by nature.</strong> Crochet creates a thicker, sturdier fabric than knitting, ideal for bags.</p></li>
        <li><span class="ic">iii</span><p><strong>Infinitely varied.</strong> Stitch, yarn and tension can be combined to create anything from a rigid basket to a delicate pouch.</p></li>
      </ul>
    </div>
  </div>
</section>

<section class="stitch" id="stitches" aria-labelledby="st-t">
  <div class="wrap">
    <div class="head"><div><span class="eyebrow">Stitch explorer</span><h2 id="st-t">Six stitches you&#8217;ll see on fine bags</h2></div><p>The stitch decides how a bag looks, feels and holds its shape. Select one to see what it is best for.</p></div>
    <div class="st-tabs" role="group" aria-label="Stitches"><button type="button" data-st="sc" aria-pressed="true">Single crochet</button><button type="button" data-st="dc" aria-pressed="false">Double crochet</button><button type="button" data-st="moss" aria-pressed="false">Moss stitch</button><button type="button" data-st="shell" aria-pressed="false">Shell stitch</button><button type="button" data-st="granny" aria-pressed="false">Granny square</button><button type="button" data-st="tap" aria-pressed="false">Tapestry</button></div>
    <div class="st-panel" id="st-panel" aria-live="polite">
      <div class="swatch sw-sc" aria-hidden="true"></div>
      <div><h3>Single crochet</h3><p data-k="d">The shortest, densest basic stitch. It creates a firm, almost woven fabric that holds its shape well.</p><dl><dt>Texture</dt><dd data-k="f">Firm and dense</dd><dt>Best for</dt><dd data-k="u">Structured bag bodies, bases, handles</dd></dl></div>
    </div>
  </div>
</section>

<section class="yarns" aria-labelledby="ya-t">
  <div class="wrap">
    <div class="head"><div><span class="eyebrow">Materials</span><h2 id="ya-t">Three fibres that define the look</h2></div><p>Most crochet bags are made from one of these families. Each brings its own strength, texture and care needs.</p></div>
    <div class="y-grid">
      <article class="yarn"><div class="pic"><img src="https://images.unsplash.com/photo-1777332546462-1622ade436a6?auto=format&fit=crop&w=700&q=75" alt="close-up of woven natural raffia fibre texture" width="700" height="525" loading="lazy"></div><div class="t"><h3>Raffia &amp; straw</h3><p class="muted">Light, crisp and naturally glossy. The classic summer material.</p><div class="meter"><span>Structure</span><i style="--v:80%"></i><span>Softness</span><i style="--v:30%"></i><span>Water tolerance</span><i style="--v:25%"></i></div></div></article>
      <article class="yarn"><div class="pic"><img src="https://images.unsplash.com/photo-1662401877245-466af64c3315?auto=format&fit=crop&w=700&q=75" alt="close-up of twisted natural rope" width="700" height="525" loading="lazy"></div><div class="t"><h3>Jute &amp; cord</h3><p class="muted">Rustic, strong and earthy. Makes sturdy, upright baskets.</p><div class="meter"><span>Structure</span><i style="--v:90%"></i><span>Softness</span><i style="--v:20%"></i><span>Water tolerance</span><i style="--v:35%"></i></div></div></article>
      <article class="yarn"><div class="pic"><img src="https://images.unsplash.com/photo-1517490970599-197965fbcef4?auto=format&fit=crop&w=700&q=75" alt="single ball of soft yarn" width="700" height="525" loading="lazy"></div><div class="t"><h3>Cotton</h3><p class="muted">Soft, smooth and colourful. Versatile for totes and evening bags.</p><div class="meter"><span>Structure</span><i style="--v:55%"></i><span>Softness</span><i style="--v:80%"></i><span>Water tolerance</span><i style="--v:70%"></i></div></div></article>
    </div>
    <p style="margin-top:26px;text-align:center"><a class="btn btn--o" href="yarn-guide.html">Read the full yarn guide</a></p>
  </div>
</section>

<section class="finder" id="finder-sec" aria-labelledby="fi-t">
  <div class="wrap">
    <div class="head"><div><span class="eyebrow">Style finder</span><h2 id="fi-t">Which crochet bag suits you?</h2></div><p>Answer three quick questions and we&#8217;ll suggest the bag style that fits your life. Results update as you choose.</p></div>
    <div class="f-box">
      <form class="f-q" id="finder" onsubmit="return false"><fieldset><legend>1. When will you carry it most?</legend><div class="opts"><label><input type="radio" name="q0" value="tote" checked><span>Every day, to work or class</span></label><label><input type="radio" name="q0" value="basket,market"><span>At the beach or on holiday</span></label><label><input type="radio" name="q0" value="mini"><span>Evenings and special events</span></label><label><input type="radio" name="q0" value="market,tote"><span>Weekend errands and markets</span></label></div></fieldset><fieldset><legend>2. What do you usually carry?</legend><div class="opts"><label><input type="radio" name="q1" value="tote" checked><span>Laptop, notebook, water bottle</span></label><label><input type="radio" name="q1" value="basket"><span>Towel, sunscreen, a book</span></label><label><input type="radio" name="q1" value="mini"><span>Phone, keys, lipstick</span></label><label><input type="radio" name="q1" value="market"><span>Groceries and odds and ends</span></label></div></fieldset><fieldset><legend>3. Which look do you love?</legend><div class="opts"><label><input type="radio" name="q2" value="tote,mini" checked><span>Clean and minimal</span></label><label><input type="radio" name="q2" value="basket"><span>Natural and rustic</span></label><label><input type="radio" name="q2" value="market"><span>Colourful and bold</span></label><label><input type="radio" name="q2" value="mini"><span>Delicate and pretty</span></label></div></fieldset></form>
      <div class="f-res" aria-live="polite"><div class="res" data-r="tote"><div class="pic"><img src="https://images.unsplash.com/photo-1594638963668-52eb9798e8ca?auto=format&fit=crop&w=700&q=75" alt="person holding a brown and white crochet tote bag" width="700" height="520" loading="lazy"></div><div class="t"><span class="tag">Your match</span><h3>The structured tote</h3><p>Roomy, upright and practical. Look for a dense stitch such as single crochet or tapestry, sturdy handles and a fabric lining with an inner pocket.</p></div></div><div class="res" data-r="basket"><div class="pic"><img src="https://images.unsplash.com/photo-1563739789-d7bed2c7a04e?auto=format&fit=crop&w=700&q=75" alt="brown and blue woven wicker handbag" width="700" height="520" loading="lazy"></div><div class="t"><span class="tag">Your match</span><h3>The beach basket</h3><p>Natural raffia or jute in an open, airy weave. Wide handles, a flat base and a drawstring or simple cotton lining keep sand where it belongs.</p></div></div><div class="res" data-r="mini"><div class="pic"><img src="https://images.unsplash.com/photo-1664151101806-b5ce45e37fb1?auto=format&fit=crop&w=700&q=75" alt="small purse with a floral pattern" width="700" height="520" loading="lazy"></div><div class="t"><span class="tag">Your match</span><h3>The mini evening bag</h3><p>A compact shape in fine cotton or silky yarn, perhaps with a metal frame, chain strap or delicate shell-stitch trim.</p></div></div><div class="res" data-r="market"><div class="pic"><img src="https://images.unsplash.com/photo-1785704440157-ac28234e2010?auto=format&fit=crop&w=700&q=75" alt="colourful striped bag with a woven straw base" width="700" height="520" loading="lazy"></div><div class="t"><span class="tag">Your match</span><h3>The colourful market bag</h3><p>Bold stripes, granny squares or tapestry patterns in durable cotton. Stretchy enough to fit a surprising amount.</p></div></div></div>
    </div>
  </div>
</section>

<section class="quality" aria-labelledby="qu-t">
  <div class="wrap q-grid">
    <div class="pic"><img src="https://images.unsplash.com/photo-1534953342533-7711c98712be?auto=format&fit=crop&w=800&q=75" alt="person weaving beige straw by hand" width="800" height="1000" loading="lazy"></div>
    <div>
      <span class="eyebrow">Quality checklist</span>
      <h2 id="qu-t">How to recognise a beautifully made bag</h2>
      <div class="checks">
        <div class="chk"><h3>Even tension</h3><p>Stitches are the same size throughout, with no loose or tight patches.</p></div>
        <div class="chk"><h3>Neat joins</h3><p>Rounds and seams are hard to spot, and yarn ends are woven in securely.</p></div>
        <div class="chk"><h3>Strong handles</h3><p>Handles are reinforced, lined or made from leather, wood or rope.</p></div>
        <div class="chk"><h3>A fitted lining</h3><p>Fabric lining prevents stretching and stops small items slipping through.</p></div>
        <div class="chk"><h3>Flat, firm base</h3><p>The bag stands upright on its own without sagging.</p></div>
        <div class="chk"><h3>Quality fibre</h3><p>Natural fibres feel smooth, look consistent and don&#8217;t shed excessively.</p></div>
      </div>
    </div>
  </div>
</section>

<section class="look" aria-labelledby="lk-t">
  <div class="wrap">
    <span class="eyebrow">Wear it</span>
    <h2 id="lk-t" style="margin-bottom:36px">Four ways to style a handmade bag</h2>
    <div class="look-grid">
      <figure><div class="pic"><img src="https://images.unsplash.com/photo-1719386217480-2c2e80467165?auto=format&fit=crop&w=500&q=75" alt="hat, sunglasses and a straw bag on a rocky beach" width="500" height="667" loading="lazy"></div><figcaption>Seaside<small>Straw basket, linen, sandals</small></figcaption></figure>
      <figure><div class="pic"><img src="https://images.unsplash.com/photo-1789110520784-3845cb0d0694?auto=format&fit=crop&w=500&q=75" alt="woman wearing a lavender crochet top and white trousers" width="500" height="667" loading="lazy"></div><figcaption>Crochet on crochet<small>Match a top in a toning shade</small></figcaption></figure>
      <figure><div class="pic"><img src="https://images.unsplash.com/photo-1752993199361-e51d6de1ec41?auto=format&fit=crop&w=500&q=75" alt="beach essentials laid out on a towel" width="500" height="667" loading="lazy"></div><figcaption>Holiday kit<small>Everything in one roomy tote</small></figcaption></figure>
      <figure><div class="pic"><img src="https://images.unsplash.com/photo-1701704678718-a909b11b157e?auto=format&fit=crop&w=500&q=75" alt="woman walking down a city street carrying a brown bag" width="500" height="667" loading="lazy"></div><figcaption>City<small>A structured tote with leather handles</small></figcaption></figure>
    </div>
  </div>
</section>

<section class="care" aria-labelledby="ca-t">
  <div class="wrap c-grid">
    <div>
      <span class="eyebrow">Care in five steps</span>
      <h2 id="ca-t">Keep your bag looking hand-finished</h2>
      <ol class="c-steps">
        <li><p><strong>Empty it often.</strong> Sand, crumbs and heavy objects stretch and wear the stitches.</p></li>
        <li><p><strong>Spot-clean gently.</strong> Use a soft brush or a barely damp cloth; never soak raffia or jute.</p></li>
        <li><p><strong>Reshape while drying.</strong> Stuff with tissue paper and let it dry naturally, away from direct heat.</p></li>
        <li><p><strong>Store it stuffed.</strong> Keep it in a breathable cotton bag, lightly filled so it keeps its shape.</p></li>
        <li><p><strong>Fix loose ends quickly.</strong> A snagged loop can be eased back with a crochet hook before it spreads.</p></li>
      </ol>
      <a class="btn" href="care-styling.html" style="margin-top:20px">Full care &amp; styling guide</a>
    </div>
    <div class="pic"><img src="https://images.unsplash.com/photo-1596913426691-660945d833ff?auto=format&fit=crop&w=800&q=75" alt="woven basket on a blue and white checked cloth" width="800" height="880" loading="lazy"></div>
  </div>
</section>

<section class="market" aria-label="Artisan markets">
  <div class="wrap m-box">
    <div class="pic"><img src="https://images.unsplash.com/photo-1779088470584-f6a5eb7c14a2?auto=format&fit=crop&w=700&q=75" alt="display of many woven straw bags with colourful designs" width="700" height="700" loading="lazy"></div>
    <div class="txt"><span class="eyebrow" style="color:#FBE9E0">This season</span><h2>Buy from the makers</h2><p>Right now we love <?php echo htmlspecialchars($focus[1], ENT_QUOTES, 'UTF-8'); ?>. Wherever you shop, ask who made the bag, what it is made from and how long it took. Makers are usually delighted to tell you.</p></div>
    <div class="pic"><img src="https://images.unsplash.com/photo-1768734836548-5be5fd6ef617?auto=format&fit=crop&w=700&q=75" alt="colourful woven bags and baskets displayed at a market" width="700" height="700" loading="lazy"></div>
  </div>
</section>

<section class="faq" aria-labelledby="fq-t">
  <div class="wrap faq-grid">
    <div><span class="eyebrow">Questions</span><h2 id="fq-t">Everything you wanted to ask</h2><p class="muted">Curious about something else? We love hearing from fellow crochet fans.</p><a class="btn btn--o" href="contact.html">Ask us</a><div class="pic"><img src="https://images.unsplash.com/photo-1777283316185-9eff9eac098c?auto=format&fit=crop&w=800&q=75" alt="assortment of colourful handmade bags hanging on display" width="800" height="600" loading="lazy"></div></div>
    <div><details open><summary>What makes a crochet bag &ldquo;luxury&rdquo;?</summary><p>Luxury in crochet comes from time, skill and materials rather than a label. A well-made bag may take many hours of handwork, uses high-quality fibres such as long-staple cotton, fine raffia or silk blends, and is finished with care: tight, even stitches, a fitted lining and strong, comfortable handles.</p></details><details><summary>What is raffia?</summary><p>Raffia is a natural fibre made from the leaves of raffia palms, which grow mainly in tropical Africa and Madagascar. The leaves are split into long strands and dried. It is light, strong and has a beautiful natural sheen. Many &ldquo;raffia&rdquo; yarns are actually paper or synthetic alternatives, so check the label.</p></details><details><summary>Will a crochet bag stretch?</summary><p>Crochet fabric can stretch over time, especially with heavy loads or loose, tall stitches. Dense stitches, firm yarns like jute or cotton cord, and a fabric lining all help a bag keep its shape.</p></details><details><summary>Can I wash a crochet bag?</summary><p>It depends on the fibre. Cotton bags can usually be hand washed gently; raffia, straw and jute should only be spot-cleaned and never soaked. Always check the maker&#8217;s care advice first.</p></details><details><summary>How long does it take to crochet a bag?</summary><p>A small, simple pouch might take a few hours, while a large tapestry tote can take twenty hours or more. That time is a big part of what makes handmade bags special.</p></details><details><summary>Do you sell bags or patterns?</summary><p>No. Crochet Bounty is an independent guide. We do not sell bags, kits or patterns, and we are not affiliated with any brand.</p></details></div>
  </div>
</section>

<section class="nl" id="loop-letter" aria-labelledby="nl-t">
  <div class="pic"><img src="https://images.unsplash.com/photo-1756725519484-f5aff6ca6bc7?auto=format&fit=crop&w=1000&q=75" alt="sunglasses and a vinyl record inside a straw bag" width="1000" height="700" loading="lazy"></div>
  <div class="in">
    <span class="eyebrow">Monthly</span>
    <h2 id="nl-t">The Loop Letter</h2>
    <p>A monthly note on stitches, fibres, care tips and the artisans behind beautiful handmade bags. No spam, ever.</p>
    <?php if ($msg): ?><p class="<?php echo $ok ? 'ok' : 'err'; ?>" role="status"><?php echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8'); ?></p><?php endif; ?>
    <form method="post" action="index.php#loop-letter">
      <label for="le" class="skip">Email address</label>
      <input type="email" id="le" name="nl_email" placeholder="you@example.com" required autocomplete="email">
      <input type="text" name="website" tabindex="-1" autocomplete="off" style="display:none" aria-hidden="true">
      <button class="btn" type="submit">Subscribe</button>
    </form>
    <p class="small">Read our <a href="privacy-policy.html">Privacy Policy</a>. Unsubscribe any time.</p>
  </div>
</section>
</main>
<footer class="ftr">
  <div class="stitch-line" aria-hidden="true" style="margin-top:-70px;margin-bottom:60px"></div>
  <div class="wrap">
    <div class="ftr-grid">
      <div><a class="logo" href="index.php"><svg viewBox="0 0 46 46" aria-hidden="true"><path d="M13 16 C13 6 33 6 33 16" fill="none" stroke="#A4553A" stroke-width="2.5"/><path d="M6 16 H40 L36 42 H10 Z" fill="#D9B77E"/><circle cx="14" cy="22" r="1.6" fill="#7E3E28"/><circle cx="19" cy="22" r="1.6" fill="#7E3E28"/><circle cx="24" cy="22" r="1.6" fill="#7E3E28"/><circle cx="29" cy="22" r="1.6" fill="#7E3E28"/><circle cx="34" cy="22" r="1.6" fill="#7E3E28"/><circle cx="12" cy="28" r="1.6" fill="#7E3E28"/><circle cx="17" cy="28" r="1.6" fill="#7E3E28"/><circle cx="22" cy="28" r="1.6" fill="#7E3E28"/><circle cx="27" cy="28" r="1.6" fill="#7E3E28"/><circle cx="32" cy="28" r="1.6" fill="#7E3E28"/><circle cx="14" cy="34" r="1.6" fill="#7E3E28"/><circle cx="19" cy="34" r="1.6" fill="#7E3E28"/><circle cx="24" cy="34" r="1.6" fill="#7E3E28"/><circle cx="29" cy="34" r="1.6" fill="#7E3E28"/><circle cx="34" cy="34" r="1.6" fill="#7E3E28"/></svg><span>Crochet Bounty<small>Handmade luxury bags</small></span></a><p>An independent guide to the craft, materials and care of handmade crochet and woven bags, celebrating slow, skilled work you can carry every day.</p></div>
      <div><h4>Explore</h4><a href="yarn-guide.html">Yarn Guide</a><a href="care-styling.html">Care &amp; Styling</a><a href="index.php#stitches">Stitch Explorer</a><a href="index.php#finder-sec">Style Finder</a></div>
      <div><h4>Policies</h4><a href="privacy-policy.html">Privacy Policy</a><a href="terms-and-conditions.html">Terms &amp; Conditions</a><a href="cookie-policy.html">Cookie Policy</a><a href="disclaimer.html">Disclaimer</a><a href="editorial-policy.html">Editorial Policy</a></div>
      <div><h4>Studio</h4><p>181 Mercer Street, New York, NY 10012, United States</p><a href="tel:+18887775845">+1-888-777-5845</a><a href="mailto:hello@crochetbounty.com">hello@crochetbounty.com</a></div>
    </div>
    <div class="ftr-base"><span>&copy; <?php echo date("Y"); ?> Crochet Bounty. All rights reserved.</span><span>Photography from Unsplash under the Unsplash License.</span></div>
  </div>
</footer>
<div class="cookie" id="cookie" role="dialog" aria-label="Cookie notice"><p>We use essential cookies and, with your consent, analytics cookies to improve our guides. <a href="cookie-policy.html">Cookie Policy</a></p><button class="y" data-cookie="accepted">Accept</button><button data-cookie="declined">Essential only</button></div>
<script src="assets/js/main.js" defer></script>
</body>
</html>
