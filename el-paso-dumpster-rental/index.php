<?php
// 1. Define specific SEO data for the Ad Landing page
$pageTitle = "Affordable Dumpster Rental El Paso | C&A Dumpsters";
$metaDescription = "Flat-rate residential roll-off dumpster rentals in El Paso. Get a fast quote today.";

// Include your header (Ensure your Google Ads DNI script is inside this file!)
include '../includes/header.php';
?>

<style>
    /* LANDING PAGE SPECIFIC CSS */
    .nav-links {
        display: none !important;
    }

    /* The Mobile Sticky Call Button */
    .sticky-mobile-cta {
        display: none;
    }

    /* Hero Pricing Badge */
    .hero-price-badge {
        display: inline-block;
        background: rgba(22, 163, 74, 0.15);
        border: 1px solid var(--brand-green);
        color: var(--brand-green-light);
        padding: 8px 16px;
        border-radius: 50px;
        font-weight: 800;
        font-size: 1.1rem;
        margin-bottom: 5px; /* Reduced margin to pull the subtext closer */
        letter-spacing: 1px;
    }

    /* Hero Grid Desktop Layout */
    .hero-grid.centered {
        display: grid;
        grid-template-columns: 1.2fr 0.8fr;
        align-items: center;
        gap: 40px;
    }

    @media (max-width: 768px) {
        /* Force the grid to stack into one column on phones */
        .hero-grid.centered {
            grid-template-columns: 1fr;
            text-align: center;
        }

        /* Force text to center on mobile instead of the left-align */
        .hero-text h1,
        .hero-text p,
        .hero-text div {
            text-align: center !important;
            justify-content: center !important;
        }

        .sticky-mobile-cta {
            display: flex;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--brand-green);
            color: var(--white);
            text-align: center;
            padding: 18px 20px;
            font-size: 1.3rem;
            font-weight: 800;
            text-decoration: none;
            justify-content: center;
            align-items: center;
            box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.2);
            z-index: 99999;
            text-transform: uppercase;
        }

        body {
            padding-bottom: 70px;
        }

        #floatingWidget {
            display: none !important;
        }
    }
</style>

<section class="hero" style="padding: 150px 0 100px;">
    <div class="container hero-grid centered">
        <div class="hero-text reveal-up">
            <div class="hero-price-badge">Flat-Rate Rentals Starting at $350</div>
            
            <p style="font-size: 0.9rem; font-weight: 700; color: #d1d5db; margin-bottom: 20px; text-align: left;">
                ✅ No Hidden Tonnage Fees &nbsp;|&nbsp; ✅ No Delivery Fees
            </p>

            <h1 style="font-size: clamp(3rem, 5vw, 4.5rem); text-align: left;">El Paso's Most Reliable<br><span>Dumpster Rental.</span></h1>
            <p style="text-align: left;">Driveway-friendly delivery, transparent flat-rate pricing, and completely hassle-free pickup. Call now or get a fast quote below.</p>

            <div style="margin-top: 30px; margin-bottom: 30px; text-align: left;">
                <p style="color: var(--brand-green-light); font-size: 0.95rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px; font-weight: 700;">Fastest Way to Reach Us</p>
                <a href="tel:9153834682" class="google-tracking-phone" style="display: inline-block; background: var(--brand-green); color: var(--white); font-size: 1.6rem; font-weight: 800; text-decoration: none; padding: 12px 24px; border-radius: 50px; box-shadow: var(--shadow-glow); transition: transform 0.3s ease;">(915) 383-4682</a>
            </div>

            <div style="display: flex; gap: 15px; align-items: center; justify-content: flex-start;">
                <span style="display: flex; color: #facc15; font-size: 1.2rem;">★★★★★</span>
                <span style="color: var(--white); font-weight: 600; font-size: 0.9rem;">Trusted Local Service</span>
            </div>
        </div>

        <div class="ad-form">
            <?php
            $formStyle = 'default';
            $leadSource = 'Google Ads Landing Page';
            include '../includes/quote-form.php';
            ?>
        </div>
    </div>
</section>

<div class="trust-wrapper">
    <div class="trust-bar reveal-up" style="transition-delay: 0.2s;">
        <div class="trust-item">
            <div class="trust-icon">🛣️</div>
            <div class="trust-text">
                <h4>Driveway Safe</h4>
                <p>Protected Property Drop-off</p>
            </div>
        </div>
        <div class="trust-item">
            <div class="trust-icon">💲</div>
            <div class="trust-text">
                <h4>No Hidden Fees</h4>
                <p>Tonnage Included in Price</p>
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

<section id="pricing" class="pricing-section" style="padding-top: 120px;">
    <div class="container">
        <div class="section-header reveal-up">
            <h2>Find Your Dumpster Size.</h2>
            <p>Select a container below to view flat-rate pricing for your project.</p>
        </div>

        <div class="estimator-container reveal-up">
            <div class="size-selector" id="sizeSelector">
                <button class="size-btn active" data-size="14">14-Yard Bin</button>
                <button class="size-btn" data-size="20">20-Yard Bin</button>
            </div>

            <div class="size-details">
                <div class="size-image">
                    <img id="dumpsterImage" src="/images/14yard.jpg" alt="14-Yard Dumpster">
                </div>
                <div class="size-info">
                    <h3 id="sizeTitle">14-Yard Dumpster</h3>
                    <p id="sizeDesc">The versatile bin for mid-sized home cleanouts and remodels.</p>
                    <ul class="size-specs" id="sizeSpecs">
                        <li>Holds about 4-5 pickup truck loads</li>
                        <li>Great for 2-car garage cleanouts</li>
                        <li>Perfect for flooring and carpet removal</li>
                    </ul>

                    <div class="price-tag" id="priceDisplay" style="margin-bottom: 0;">$350 <span>/ Flat Fee</span></div>
                    
                    <p style="font-size: 0.85rem; font-weight: 700; color: #4b5563; margin-top: 5px; margin-bottom: 15px;">
                        Flat-Rate Pricing. Zero Hidden Tonnage Fees.
                    </p>

                    <a href="tel:9153834682" class="google-tracking-phone" style="display:inline-block; margin-top: 5px; color: var(--brand-green); text-decoration: none; font-weight: 700; text-transform: uppercase;">Book This Size →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-section" style="padding: 80px 0; background: var(--white); background-image: none;">
    <div class="container">
        <div class="bento-card reveal-up" style="padding: 0; overflow: hidden; border: none; box-shadow: var(--shadow-card);">
            <div style="padding: 30px 40px; border-bottom: 1px solid var(--border-light); background: var(--white);">
                <h3 style="color: var(--brand-navy); margin-bottom: 5px; font-size: 1.5rem;">Service Area</h3>
                <p style="color: var(--text-light); font-weight: 500;">Proudly dispatching residential and construction dumpsters across El Paso, Socorro, Sunland Park, and Santa Teresa.</p>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d108422.38883653138!2d-106.53617387140833!3d31.803734002011033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e73f8bc5fe3b69%3A0xe39180e6eba336fa!2sEl%20Paso%2C%20TX!5e0!3m2!1sen!2sus!4v1716301389803!5m2!1sen!2sus"
                width="100%" height="450" style="border:0; display: block;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<a href="tel:9153834682" class="sticky-mobile-cta google-tracking-phone">
    📞 TAP TO CALL: (915) 383-4682
</a>

<?php include '../includes/footer.php'; ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sizeData = {
            '14': {
                title: '14-Yard Dumpster',
                desc: 'The versatile bin for mid-sized home cleanouts and remodels.',
                specs: ['Holds about 4-5 pickup truck loads', 'Great for 2-car garage cleanouts', 'Perfect for flooring and carpet removal'],
                price: '$350',
                img: '/images/14yard.jpg'
            },
            '20': {
                title: '20-Yard Dumpster',
                desc: 'Our most popular size. Excellent for whole-home decluttering and major remodels.',
                specs: ['Holds about 6-8 pickup truck loads', 'Ideal for full kitchen & bath renovations', 'Perfect for moving & estate cleanouts'],
                price: '$450',
                img: '/images/20yard.jpg'
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

                priceEl.innerHTML = `${data.price} <span>/ Flat Fee</span>`;

                specsEl.innerHTML = '';
                data.specs.forEach(spec => {
                    const li = document.createElement('li');
                    li.textContent = spec;
                    specsEl.appendChild(li);
                });
            });
        });
    });
</script>