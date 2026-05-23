<?php
// 1. Define specific SEO data for the Contact page
$pageTitle = "Contact Us | C&A Dumpsters El Paso";
$metaDescription = "Get in touch with C&A Dumpsters. Call, text, or use our quick quote form to schedule your affordable residential roll-off dumpster rental in the El Paso area.";

// 2. Include the header file from the parent directory
include '../includes/header.php';
?>

<section class="hero" style="padding: 150px 0 100px;">
    <div class="container hero-grid centered" style="grid-template-columns: 1fr; text-align: center;">
        <div class="hero-text reveal-up">
            <h1 style="font-size: clamp(3rem, 5vw, 4.5rem);">Let's Get to<br><span>Work.</span></h1>
            <p style="margin: 0 auto; max-width: 700px;">Ready to clear out the clutter? Have a question about restricted materials or our delivery zones? Reach out to our local team today for a fast, friendly response.</p>
        </div>
    </div>
</section>

<section class="services-section" style="padding: 80px 0; background: var(--white); background-image: none;">
    <div class="container">

        <div class="bento-grid">

            <div class="bento-card reveal-up" style="background: var(--brand-navy); color: var(--white);">
                <h3 style="color: var(--white); margin-bottom: 30px; font-size: 1.5rem;">Contact Details</h3>

                <div style="margin-bottom: 30px; background: rgba(255,255,255,0.05); padding: 20px; border-radius: 12px; text-align: center;">
                    <p style="color: var(--brand-green-light); font-size: 0.95rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px; font-weight: 700;">Fastest Way to Reach Us</p>
                    
                    <a href="tel:9153834682" class="google-tracking-phone" style="display: inline-block; background: var(--brand-green); color: var(--white); font-size: 1.6rem; font-weight: 800; text-decoration: none; padding: 12px 24px; border-radius: 50px; box-shadow: var(--shadow-glow); transition: transform 0.3s ease;">(915) 383-4682</a>
                    
                    <p style="color: rgba(255,255,255,0.6); font-size: 0.8rem; margin-top: 10px;">Tap to Call or Text</p>
                </div>

                <div style="margin-bottom: 25px;">
                    <p style="color: rgba(255,255,255,0.6); font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 5px; font-weight: 600;">Email Us</p>
                    <a href="mailto:ca.dumpsters.ep@gmail.com" style="color: var(--white); font-size: 1.1rem; font-weight: 500; text-decoration: none;">ca.dumpsters.ep@gmail.com</a>
                </div>

                <div>
                    <p style="color: rgba(255,255,255,0.6); font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 5px; font-weight: 600;">Service Area</p>
                    <p style="color: var(--white); font-size: 1.1rem; font-weight: 500; line-height: 1.5;">El Paso, Socorro, Sunland Park,<br>Clint, & Santa Teresa</p>
                </div>
            </div>

            <div class="floating-card reveal-up" style="transition-delay: 0.1s;">
                <h3 style="margin-bottom: 30px; font-size: 1.5rem; color: var(--brand-navy);">Operating Hours</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="display: flex; justify-content: space-between; border-bottom: 1px solid var(--border-light); padding-bottom: 15px; margin-bottom: 15px;">
                        <span style="font-weight: 600; color: var(--text-main);">Monday</span>
                        <span style="color: var(--text-light);">8:00 AM - 5:00 PM</span>
                    </li>
                    <li style="display: flex; justify-content: space-between; border-bottom: 1px solid var(--border-light); padding-bottom: 15px; margin-bottom: 15px;">
                        <span style="font-weight: 600; color: var(--text-main);">Tuesday</span>
                        <span style="color: var(--text-light);">8:00 AM - 5:00 PM</span>
                    </li>
                    <li style="display: flex; justify-content: space-between; border-bottom: 1px solid var(--border-light); padding-bottom: 15px; margin-bottom: 15px;">
                        <span style="font-weight: 600; color: var(--text-main);">Wednesday</span>
                        <span style="color: var(--text-light);">8:00 AM - 5:00 PM</span>
                    </li>
                    <li style="display: flex; justify-content: space-between; border-bottom: 1px solid var(--border-light); padding-bottom: 15px; margin-bottom: 15px;">
                        <span style="font-weight: 600; color: var(--text-main);">Thursday</span>
                        <span style="color: var(--text-light);">8:00 AM - 5:00 PM</span>
                    </li>
                    <li style="display: flex; justify-content: space-between; border-bottom: 1px solid var(--border-light); padding-bottom: 15px; margin-bottom: 15px;">
                        <span style="font-weight: 600; color: var(--text-main);">Friday</span>
                        <span style="color: var(--text-light);">8:00 AM - 5:00 PM</span>
                    </li>
                    <li style="display: flex; justify-content: space-between; border-bottom: 1px solid var(--border-light); padding-bottom: 15px; margin-bottom: 15px;">
                        <span style="font-weight: 600; color: var(--brand-green);">Saturday</span>
                        <span style="color: var(--brand-green); font-weight: 600;">9:00 AM - 12:00 PM</span>
                    </li>
                    <li style="display: flex; justify-content: space-between;">
                        <span style="font-weight: 600; color: #ef4444;">Sunday</span>
                        <span style="color: #ef4444; font-weight: 600;">Closed</span>
                    </li>
                </ul>
            </div>

            <?php
            $formStyle = 'floating';
            include '../includes/quote-form.php';
            ?>

            <div class="bento-card reveal-up" style="grid-column: 1 / -1; padding: 0; overflow: hidden; border: none; box-shadow: var(--shadow-card); margin-top: 20px;">
                <div style="padding: 30px 40px; border-bottom: 1px solid var(--border-light); background: var(--white);">
                    <h3 style="color: var(--brand-navy); margin-bottom: 5px; font-size: 1.5rem;">Service Area</h3>
                    <p style="color: var(--text-light); font-weight: 500;">Proudly dispatching residential and construction dumpsters across El Paso, Socorro, Sunland Park, and Santa Teresa.</p>
                </div>
                <iframe
                    src="http://googleusercontent.com/maps.google.com/8"
                    width="100%"
                    height="450"
                    style="border:0; display: block;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </div>
</section>

<?php
// Include the footer file from the parent directory
include '../includes/footer.php';
?>