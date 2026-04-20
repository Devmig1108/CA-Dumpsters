<?php
// 1. Define specific SEO data for the Services page
$pageTitle = "Services & Pricing | C&A Dumpsters El Paso";
$metaDescription = "Review our flat-rate pricing for 14-yard and 20-yard dumpster rentals in El Paso. No hidden fees. See allowed materials and standard rental terms.";

// 2. Include the header file from the parent directory
include '../includes/header.php';
?>

<section class="hero" style="padding: 150px 0 100px;">
    <div class="container hero-grid" style="grid-template-columns: 1fr; text-align: center;">
        <div class="hero-text reveal-up">
            <h1 style="font-size: clamp(3rem, 5vw, 4.5rem);">Transparent Pricing.<br><span>Clear Guidelines.</span></h1>
            <p style="margin: 0 auto 20px; max-width: 700px;">No hidden fees, no surprises. Review our flat-rate pricing, included rental terms, and material guidelines to ensure a smooth, hassle-free cleanup for your project.</p>
        </div>
    </div>
</section>

<section class="process-section" style="padding: 80px 0; background: var(--white);">
    <div class="container">
        <div class="section-header reveal-up" style="margin-bottom: 50px;">
            <h2>Standard Rental Terms</h2>
            <p>Every roll-off dumpster rental includes the following standard terms.</p>
        </div>

        <div class="trust-bar reveal-up" style="margin-top: 0;">
            <div class="trust-item">
                <div class="trust-icon">📅</div>
                <div class="trust-text">
                    <h4>7-Day Rental</h4>
                    <p>Need more time? Just $20/day after.</p>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">⚖️</div>
                <div class="trust-text">
                    <h4>Up to 3 Tons Included</h4>
                    <p>Overage billed at $30 per ton.</p>
                </div>
            </div>
            <div class="trust-item">
                <div class="trust-icon">💳</div>
                <div class="trust-text">
                    <h4>Payment on Delivery</h4>
                    <p>Unless agreed upon in writing.</p>
                </div>
            </div>
        </div>

        <div class="bento-grid" style="grid-template-columns: repeat(2, 1fr); margin-top: 60px;">
            <div class="bento-card reveal-up" style="text-align: center; padding: 50px;">
                <h3 style="font-size: 2.5rem; color: var(--brand-navy);">14-Yard Bin</h3>
                <p style="color: var(--text-light); margin-bottom: 20px;">Ideal for mid-sized cleanouts, garage purges, and flooring removal.</p>
                <div style="font-family: 'Montserrat', sans-serif; font-size: 3.5rem; font-weight: 900; color: var(--brand-green); margin-bottom: 20px;">$300 <span style="font-size: 1.2rem; color: var(--text-light); font-weight: 600;">+ tax</span></div>
                <a href="tel:9153834682" class="btn-call" style="width: 100%;">Reserve 14-Yard</a>
            </div>

            <div class="bento-card reveal-up" style="text-align: center; padding: 50px; background: var(--brand-navy); color: var(--white);">
                <h3 style="font-size: 2.5rem; color: var(--white);">20-Yard Bin</h3>
                <p style="color: rgba(255,255,255,0.7); margin-bottom: 20px;">Our most popular size. Perfect for whole-home decluttering and renovations.</p>
                <div style="font-family: 'Montserrat', sans-serif; font-size: 3.5rem; font-weight: 900; color: var(--brand-green-light); margin-bottom: 20px;">$380 <span style="font-size: 1.2rem; color: rgba(255,255,255,0.5); font-weight: 600;">+ tax</span></div>
                <a href="tel:9153834682" class="btn-call" style="width: 100%; background: var(--white); color: var(--brand-navy);">Reserve 20-Yard</a>
            </div>
        </div>
    </div>
</section>

<section class="services-section">
    <div class="container">
        <div class="section-header reveal-up">
            <h2>Material Guidelines</h2>
            <p>For environmental safety and transportation laws, strict guidelines apply to what can go in our bins.</p>
        </div>

        <div class="bento-grid" style="grid-template-columns: repeat(2, 1fr);">
            <div class="bento-card reveal-up" style="border-top: 6px solid var(--brand-green);">
                <h3 style="display: flex; align-items: center; gap: 10px;"><span style="font-size: 2rem;">✅</span> Approved Materials</h3>
                <p style="margin-bottom: 20px; color: var(--text-light);">You may load the following common residential and construction items:</p>
                <ul class="service-list" style="columns: 2;">
                    <li>Cardboard Boxes</li>
                    <li>Furniture</li>
                    <li>Household Junk</li>
                    <li>Flooring</li>
                    <li>Drywall</li>
                    <li>Sinks & Bathtubs</li>
                    <li>Countertops</li>
                    <li>Glass & Wood</li>
                    <li>Rocks</li>
                    <li>Faucets & Fixtures</li>
                </ul>
            </div>

            <div class="bento-card reveal-up" style="border-top: 6px solid #ef4444; background: #fff5f5;">
                <h3 style="display: flex; align-items: center; gap: 10px; color: #991b1b;"><span style="font-size: 2rem;">🚫</span> Prohibited Items</h3>
                <p style="margin-bottom: 20px; color: #7f1d1d;">The following hazardous items are <strong>strictly prohibited</strong> by law:</p>
                <ul class="service-list" style="columns: 2;">
                    <li style="color: #991b1b;">Hazardous Materials</li>
                    <li style="color: #991b1b;">Batteries</li>
                    <li style="color: #991b1b;">Wet Paint Cans</li>
                    <li style="color: #991b1b;">Chemicals/Cleaners</li>
                    <li style="color: #991b1b;">Tires</li>
                    <li style="color: #991b1b;">Aerosol Cans</li>
                    <li style="color: #991b1b;">Pesticides/Herbicides</li>
                    <li style="color: #991b1b;">Flammable Liquids</li>
                    <li style="color: #991b1b;">Mercury Materials</li>
                    <li style="color: #991b1b;">Appliances</li>
                    <li style="color: #991b1b;">Propane Tanks</li>
                    <li style="color: #991b1b;">Solvents & Asbestos</li>
                    <li style="color: #991b1b;">Oil Filters</li>
                    <li style="color: #991b1b;">Biohazards</li>
                    <li style="color: #991b1b;">Lightbulbs</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="pricing-section">
    <div class="container">
        <div class="section-header reveal-up">
            <h2>Important Rules & Potential Fees</h2>
            <p>Please review these guidelines to avoid extra charges or service delays.</p>
        </div>

        <div class="bento-grid" style="grid-template-columns: repeat(3, 1fr); text-align: left;">

            <div class="bento-card reveal-up">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">🧱</div>
                <h3 style="font-size: 1.4rem;">Heavy Materials Rule</h3>
                <p style="color: var(--text-main); font-size: 0.95rem;">If dumping extremely heavy materials (concrete, dirt, fill, or topsoil), you must <strong>only fill the dumpster 2 feet above the bin floor</strong>. Overfilling these materials creates dangerous overweight loads.</p>
                <p style="color: #ef4444; font-weight: 700; margin-top: 15px;">Fee: $100 - $150</p>
            </div>

            <div class="bento-card reveal-up" style="transition-delay: 0.1s;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">📏</div>
                <h3 style="font-size: 1.4rem;">Fill Line & Tarping</h3>
                <p style="color: var(--text-main); font-size: 0.95rem;">Do not fill the dumpster above the white fill line. Loads must be distributed evenly so our drivers can safely and securely tarp the container for transport.</p>
                <p style="color: #ef4444; font-weight: 700; margin-top: 15px;">Overweight/Unsafe loads must be unloaded by customer.</p>
            </div>

            <div class="bento-card reveal-up" style="transition-delay: 0.2s;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">🚧</div>
                <h3 style="font-size: 1.4rem;">Accessibility (Dry Run)</h3>
                <p style="color: var(--text-main); font-size: 0.95rem;">It is the customer's sole responsibility to ensure the container is accessible at the time of pick-up. Blocking the bin with vehicles, locked gates, or trailers will result in a dry run fee.</p>
                <p style="color: #ef4444; font-weight: 700; margin-top: 15px;">Fee: $100 - $150</p>
            </div>

            <div class="bento-card reveal-up">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">🏗️</div>
                <h3 style="font-size: 1.4rem;">Do Not Move the Bin</h3>
                <p style="color: var(--text-main); font-size: 0.95rem;">Attempting to move the dumpster yourself using heavy machinery or trucks is strictly prohibited and highly dangerous.</p>
                <p style="color: #ef4444; font-weight: 700; margin-top: 15px;">Fee: $100 - $150</p>
            </div>

            <div class="bento-card reveal-up" style="transition-delay: 0.1s;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">🚪</div>
                <h3 style="font-size: 1.4rem;">Door Safety</h3>
                <p style="color: var(--text-main); font-size: 0.95rem;">Please ensure the hinged door on the dumpster is properly closed and secured prior to pick-up. Leaving it open is subject to damages and/or extra time.</p>
            </div>

            <div class="bento-card reveal-up" style="transition-delay: 0.2s;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">🎨</div>
                <h3 style="font-size: 1.4rem;">Damage & Graffiti</h3>
                <p style="color: var(--text-main); font-size: 0.95rem;">Property owners or contractors assume all liability for the dumpster during the rental period. Any graffiti, denting, or damage to the bin is subject to the cost of repairs.</p>
            </div>

        </div>
    </div>
</section>

<?php
// Include the final CTA strip and footer from the parent directory
include '../includes/footer.php';
?>