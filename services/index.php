<?php
// 1. Define specific SEO data for the Services page
$pageTitle = "Dumpster Rental Services & Pricing | C&A Dumpsters El Paso";
$metaDescription = "Fast, affordable dumpster rentals in El Paso. Review our flat-rate pricing for small and large bins. Perfect for roofing, construction, and residential cleanouts.";

// 2. Include the header file from the parent directory
include '../includes/header.php';
?>

<style>
    /* Responsive 2-column grid specifically for the Services page */
    .grid-2-col {
        grid-template-columns: repeat(2, 1fr) !important;
    }

    @media (max-width: 1024px) {
        .grid-2-col {
            grid-template-columns: 1fr !important;
        }
    }
    
    /* Added subtle styling for the new use-case text blocks */
    .service-use-case {
        margin-top: 15px;
        font-size: 0.95rem;
        line-height: 1.6;
        text-align: left;
    }
</style>

<section class="hero" style="padding: 150px 0 100px;">
    <div class="container hero-grid" style="text-align: center;">
        <div class="hero-text reveal-up">
            <h1 style="font-size: clamp(3rem, 5vw, 4.5rem);">El Paso Dumpster Rental<br><span>Services & Pricing</span></h1>
            <p style="margin: 0 auto 20px; max-width: 700px;">Transparent pricing. Clear guidelines. Fast local delivery. Review our flat-rate pricing, included rental terms, and service options for your next project.</p>
        </div>
    </div>
</section>

<section class="use-cases-section" style="padding: 40px 0; background: var(--white);">
    <div class="container">
        <div class="section-header reveal-up" style="margin-bottom: 40px;">
            <h2>Roll-Off Dumpsters for Every Project</h2>
        </div>
        <div class="bento-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); text-align: left;">
            <div class="bento-card white-card reveal-up">
                <h3 style="font-size: 1.4rem; color: var(--brand-navy);">🏠 Residential Cleanouts</h3>
                <p class="service-use-case" style="color: var(--text-main);">Moving out, spring cleaning, or handling an estate? Our residential dumpster rentals are driveway-friendly and easy to load. Throw out old furniture, cardboard, household junk, and yard waste hassle-free.</p>
            </div>
            <div class="bento-card white-card reveal-up" style="transition-delay: 0.1s;">
                <h3 style="font-size: 1.4rem; color: var(--brand-navy);">🔨 Roofing Dumpsters</h3>
                <p class="service-use-case" style="color: var(--text-main);">Tearing off an old roof? We provide dedicated roofing dumpsters in El Paso designed specifically for asphalt shingles, underlayment, and roofing nails. Properly sized to handle residential roof replacements safely.</p>
            </div>
            <div class="bento-card white-card reveal-up" style="transition-delay: 0.2s;">
                <h3 style="font-size: 1.4rem; color: var(--brand-navy);">🏗️ Construction & Concrete</h3>
                <p class="service-use-case" style="color: var(--text-main);">Perfect for contractors or DIY renovations. Need a dirt dumpster rental or a bin for concrete? We accept heavy materials like concrete, dirt, fill, and topsoil (heavy materials must be kept 2 feet below the fill line).</p>
            </div>
        </div>
    </div>
</section>

<section class="process-section" style="padding: 80px 0; background: var(--light-bg);">
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

        <div class="bento-grid grid-2-col" style="margin-top: 60px;">
            <div class="bento-card reveal-up" style="text-align: center; padding: 50px;">
                <h3 style="font-size: 2.5rem; color: var(--brand-navy);">14-Yard Bin<br><span style="font-size: 1.2rem; font-weight: 500; color: var(--text-light);">(Small/Medium Dumpster)</span></h3>
                <p style="color: var(--text-light); margin-bottom: 20px;">Ideal for mid-sized cleanouts, garage purges, small roofing repairs, and flooring removal.</p>
                <div style="font-family: 'Montserrat', sans-serif; font-size: 3.5rem; font-weight: 900; color: var(--brand-green); margin-bottom: 20px;">$300 <span style="font-size: 1.2rem; color: var(--text-light); font-weight: 600;">+ tax</span></div>
                <a href="tel:9153834682" class="btn-call" style="width: 100%;">Reserve 14-Yard</a>
            </div>

            <div class="bento-card reveal-up" style="text-align: center; padding: 50px; background: var(--brand-navy); color: var(--white);">
                <h3 style="font-size: 2.5rem; color: var(--white);">20-Yard Bin<br><span style="font-size: 1.2rem; font-weight: 500; color: rgba(255,255,255,0.7);">(Large Dumpster)</span></h3>
                <p style="color: rgba(255,255,255,0.7); margin-bottom: 20px;">Our most popular large roll-off. Perfect for whole-home decluttering, construction debris, and major renovations.</p>
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

        <div class="bento-grid grid-2-col">
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

        <div class="bento-grid" style="text-align: left;">

            <div class="bento-card white-card reveal-up">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">🧱</div>
                <h3 style="font-size: 1.4rem;">Heavy Materials Rule</h3>
                <p style="color: var(--text-main); font-size: 0.95rem;">If dumping extremely heavy materials (concrete, dirt, fill, or topsoil), you must <strong>only fill the dumpster 2 feet above the bin floor</strong>. Overfilling these materials creates dangerous overweight loads.</p>
                <p style="color: #ef4444; font-weight: 700; margin-top: 15px;">Fee: $100 - $150</p>
            </div>

            <div class="bento-card white-card reveal-up" style="transition-delay: 0.1s;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">📏</div>
                <h3 style="font-size: 1.4rem;">Fill Line & Tarping</h3>
                <p style="color: var(--text-main); font-size: 0.95rem;">Do not fill the dumpster above the white fill line. Loads must be distributed evenly so our drivers can safely and securely tarp the container for transport.</p>
                <p style="color: #ef4444; font-weight: 700; margin-top: 15px;">Overweight/Unsafe loads must be unloaded by customer.</p>
            </div>

            <div class="bento-card white-card reveal-up" style="transition-delay: 0.2s;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">🚧</div>
                <h3 style="font-size: 1.4rem;">Accessibility (Dry Run)</h3>
                <p style="color: var(--text-main); font-size: 0.95rem;">It is the customer's sole responsibility to ensure the container is accessible at the time of pick-up. Blocking the bin with vehicles, locked gates, or trailers will result in a dry run fee.</p>
                <p style="color: #ef4444; font-weight: 700; margin-top: 15px;">Fee: $100 - $150</p>
            </div>

            <div class="bento-card white-card reveal-up">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">🏗️</div>
                <h3 style="font-size: 1.4rem;">Do Not Move the Bin</h3>
                <p style="color: var(--text-main); font-size: 0.95rem;">Attempting to move the dumpster yourself using heavy machinery or trucks is strictly prohibited and highly dangerous.</p>
                <p style="color: #ef4444; font-weight: 700; margin-top: 15px;">Fee: $100 - $150</p>
            </div>

            <div class="bento-card white-card reveal-up" style="transition-delay: 0.1s;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">🚪</div>
                <h3 style="font-size: 1.4rem;">Door Safety</h3>
                <p style="color: var(--text-main); font-size: 0.95rem;">Please ensure the hinged door on the dumpster is properly closed and secured prior to pick-up. Leaving it open is subject to damages and/or extra time.</p>
            </div>

            <div class="bento-card white-card reveal-up" style="transition-delay: 0.2s;">
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