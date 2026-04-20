<?php
// 1. Define specific SEO data for the Homepage
$pageTitle = "C&A Dumpsters | Affordable Residential Dumpster Rental in El Paso";
$metaDescription = "El Paso's top choice for affordable residential roll-off dumpsters. We offer driveway-friendly delivery, flat-rate pricing, and completely hassle-free pickup.";

// 2. Include the header (which injects the SEO data into the <head>)
include 'includes/header.php';
?>

<section class="hero">
    <div class="container hero-grid">
        <div class="hero-text reveal-up">
            <h1>Rent a Bin.<br><span>Trash It.</span></h1>
            <p>El Paso's most affordable residential roll-off dumpster rentals. Driveway-friendly delivery,
                transparent flat-rate pricing, and completely hassle-free pickup.</p>
            <div style="display: flex; gap: 15px; align-items: center; margin-bottom: 20px;">
                <span style="display: flex; color: #facc15; font-size: 1.2rem;">★★★★★</span>
                <span style="color: var(--white); font-weight: 600; font-size: 0.9rem;">Trusted Local Service</span>
            </div>
        </div>

        <?php
        $formStyle = 'solid';
        include 'includes/quote-form.php';
        ?>

    </div>
</section>

<div class="trust-wrapper">
    <div class="trust-bar reveal-up" style="transition-delay: 0.2s;">
        <div class="trust-item">
            <div class="trust-icon">🏡</div>
            <div class="trust-text">
                <h4>Driveway Safe</h4>
                <p>Protected Property Drop-off</p>
            </div>
        </div>
        <div class="trust-item">
            <div class="trust-icon">💲</div>
            <div class="trust-text">
                <h4>Flat-Rate Pricing</h4>
                <p>No Hidden Fees or Surprises</p>
            </div>
        </div>
        <div class="trust-item">
            <div class="trust-icon">🤝</div>
            <div class="trust-text">
                <h4>Friendly Service</h4>
                <p>Local & Customer-Focused</p>
            </div>
        </div>
    </div>
</div>

<section id="process" class="process-section">
    <div class="container">
        <div class="section-header reveal-up">
            <h2>Rentals Made Simple.</h2>
            <p>We handle the heavy equipment. You handle your cleanup at your own pace, on your own budget.</p>
        </div>
        <div class="process-grid">
            <div class="process-step reveal-up">
                <div class="step-number">1</div>
                <h3>Choose Your Size</h3>
                <p>Contact us with your project details and we will help you select the perfectly sized container to
                    keep costs low and efficiency high.</p>
            </div>
            <div class="process-step reveal-up" style="transition-delay: 0.1s;">
                <div class="step-number">2</div>
                <h3>We Deliver It</h3>
                <p>Our drivers carefully place the roll-off dumpster exactly where you need it on your property.</p>
            </div>
            <div class="process-step reveal-up" style="transition-delay: 0.2s;">
                <div class="step-number">3</div>
                <h3>You Fill, We Pick Up</h3>
                <p>Load up the container at your own pace. Once you're done, just give us a call and we'll haul it
                    away to the proper facilities.</p>
            </div>
        </div>
    </div>
</section>

<section id="projects" class="services-section">
    <div class="container">
        <div class="section-header reveal-up">
            <h2>Perfect For Any Home Project.</h2>
            <p>Whether you are gutting a bathroom or moving out of a 4-bedroom house, we have an affordable bin
                ready for you.</p>
        </div>

        <div class="bento-grid">
            <div class="bento-card bento-large reveal-up">
                <div class="card-decorator">🔨</div>
                <h3>DIY Home Remodeling</h3>
                <ul class="service-list">
                    <li>Bathroom & Kitchen Gutting</li>
                    <li>Flooring Tear-outs (Tile, Carpet, Wood)</li>
                    <li>Drywall & Plaster Disposal</li>
                    <li>Roofing Shingles (Requires specific bins)</li>
                </ul>
            </div>

            <div class="bento-card reveal-up" style="transition-delay: 0.1s;">
                <div class="card-decorator">📦</div>
                <h3>Moving & Downsizing</h3>
                <ul class="service-list">
                    <li>Decluttering Before Listing</li>
                    <li>Getting Rid of Old Furniture</li>
                    <li>Estate Cleanouts</li>
                    <li>Basement & Attic Purges</li>
                </ul>
            </div>

            <div class="bento-card reveal-up" style="transition-delay: 0.2s;">
                <div class="card-decorator">🧹</div>
                <h3>Garage Cleanouts</h3>
                <ul class="service-list">
                    <li>Tossing Old Cardboard & Junk</li>
                    <li>Clearing Out Broken Equipment</li>
                    <li>Making Room for Vehicles</li>
                    <li>Spring Cleaning Projects</li>
                </ul>
            </div>

            <div class="bento-card bento-large reveal-up"
                style="transition-delay: 0.3s; background: var(--brand-green); color: var(--white);">
                <div class="card-decorator" style="color: rgba(255,255,255,0.2);">🌳</div>
                <h3 style="color: var(--white);">Landscaping & Yard Debris</h3>
                <ul class="service-list">
                    <li style="color: var(--white);">Heavy Brush & Branch Removal</li>
                    <li style="color: var(--white);">Fencing Tear-downs</li>
                    <li style="color: var(--white);">Dirt & Concrete Removal (Call for limits)</li>
                    <li style="color: var(--white);">Storm Damage Cleanup</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="pricing" class="pricing-section">
    <div class="container">
        <div class="section-header reveal-up">
            <h2>Find Your Dumpster Size.</h2>
            <p>Select a container below to see what fits inside and find the most cost-effective option for your
                project.</p>
        </div>

        <div class="estimator-container reveal-up">
            <div class="size-selector" id="sizeSelector">
                <button class="size-btn active" data-size="14">14-Yard Bin</button>
                <button class="size-btn" data-size="20">20-Yard Bin</button>
            </div>

            <div class="size-details">
                <div class="size-image">
                    <img id="dumpsterImage" src="images/14yard.jpg" alt="14-Yard Dumpster">
                </div>
                <div class="size-info">
                    <h3 id="sizeTitle">14-Yard Dumpster</h3>
                    <p id="sizeDesc">The versatile bin for mid-sized home cleanouts and remodels.</p>
                    <ul class="size-specs" id="sizeSpecs">
                        <li>Holds about 4-5 pickup truck loads</li>
                        <li>Great for 2-car garage cleanouts</li>
                        <li>Perfect for flooring and carpet removal</li>
                    </ul>

                    <div class="price-tag" id="priceDisplay">$300 <span>+ tax</span></div>
                    <p style="font-size: 0.85rem; color: var(--text-light); margin-bottom: 15px;">*Some extra costs apply. See services page for details.</p>
                    <a href="/services/"
                        style="display:inline-block; margin-top: 5px; color: var(--brand-green); text-decoration: none; font-weight: 700; text-transform: uppercase;">View Service Details &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="gallery" class="gallery-section">
    <div class="container">
        <div class="section-header reveal-up">
            <h2>Our Fleet in Action.</h2>
            <p>Real drops, real equipment. See why El Paso homeowners trust C&A Dumpsters.</p>
        </div>

        <div class="gallery-grid">
            <div class="gallery-item reveal-up">
                <img src="images/yard.jpg" alt="C&A Dumpster parked safely in a residential yard">
                <div class="gallery-overlay">
                    <h4>Yard Drop-off</h4>
                    <p>Safe, careful placement on unpaved areas</p>
                </div>
            </div>

            <div class="gallery-item reveal-up" style="transition-delay: 0.1s;">
                <img src="images/yard-dropoff.jpg" alt="Dumpster delivered for backyard landscaping project">
                <div class="gallery-overlay">
                    <h4>Landscaping Project</h4>
                    <p>Perfect for heavy brush and yard waste</p>
                </div>
            </div>

            <div class="gallery-item reveal-up" style="transition-delay: 0.2s;">
                <img src="images/containers.jpg" alt="Multiple C&A Dumpster containers ready for rent">
                <div class="gallery-overlay">
                    <h4>Multiple Sizes Available</h4>
                    <p>Clean, well-maintained roll-off bins</p>
                </div>
            </div>

            <div class="gallery-item reveal-up" style="transition-delay: 0.3s;">
                <img src="images/driveway.jpg" alt="C&A Dumpster delivered on a residential driveway">
                <div class="gallery-overlay">
                    <h4>Driveway Safe Delivery</h4>
                    <p>Professional placement right where you need it</p>
                </div>
            </div>

            <div class="gallery-item reveal-up" style="transition-delay: 0.4s;">
                <img src="images/hero.jpg" alt="C&A Dumpsters truck delivering a roll-off bin">
                <div class="gallery-overlay">
                    <h4>On-Time Delivery</h4>
                    <p>Reliable logistics across the Borderland</p>
                </div>
            </div>

            <div class="gallery-item reveal-up" style="transition-delay: 0.5s;">
                <img src="images/truck.jpg" alt="C&A Dumpsters heavy duty delivery truck at a commercial site">
                <div class="gallery-overlay">
                    <h4>Professional Fleet</h4>
                    <p>Equipped to handle any size job</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Include the footer file
include 'includes/footer.php';
?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sizeSelector = document.getElementById('sizeSelector');
        if (sizeSelector) {
            const sizeData = {
                '14': {
                    title: '14-Yard Dumpster',
                    desc: 'The versatile bin for mid-sized home cleanouts and remodels.',
                    specs: ['Holds about 4-5 pickup truck loads', 'Great for 2-car garage cleanouts', 'Perfect for flooring and carpet removal'],
                    img: 'images/14yard.jpg',
                    price: '$300'
                },
                '20': {
                    title: '20-Yard Dumpster',
                    desc: 'Our most popular size. Excellent for whole-home decluttering and major remodels.',
                    specs: ['Holds about 6-8 pickup truck loads', 'Ideal for full kitchen & bath renovations', 'Perfect for moving & estate cleanouts'],
                    img: 'images/20yard.jpg',
                    price: '$380'
                }
            };

            const buttons = document.querySelectorAll('.size-btn');
            const titleEl = document.getElementById('sizeTitle');
            const descEl = document.getElementById('sizeDesc');
            const specsEl = document.getElementById('sizeSpecs');
            const imgEl = document.getElementById('dumpsterImage');
            const priceEl = document.getElementById('priceDisplay');

            buttons.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    buttons.forEach(b => b.classList.remove('active'));
                    e.target.classList.add('active');
                    const size = e.target.getAttribute('data-size');
                    const data = sizeData[size];

                    titleEl.textContent = data.title;
                    descEl.textContent = data.desc;
                    imgEl.src = data.img;
                    imgEl.alt = data.title;

                    priceEl.innerHTML = `${data.price} <span>+ tax</span>`;

                    specsEl.innerHTML = '';
                    data.specs.forEach(spec => {
                        const li = document.createElement('li');
                        li.textContent = spec;
                        specsEl.appendChild(li);
                    });
                });
            });
        }
    });
</script>