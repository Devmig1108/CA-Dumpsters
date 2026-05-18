<?php
// Determine which class to use based on $formStyle variable
$formClass = 'hero-form'; // Default
if (isset($formStyle)) {
    if ($formStyle === 'solid') $formClass = 'solid-form';
    if ($formStyle === 'floating') $formClass = 'floating-form';
}

// Adjust text based on the layout
$titleText = (isset($formStyle) && ($formStyle === 'solid' || $formStyle === 'floating')) ? 'Send a Message' : 'Get a Quick Quote';
$showSubtitle = (isset($formStyle) && ($formStyle === 'solid' || $formStyle === 'floating')) ? false : true;

// Swap title color to dark navy if it's on the light floating background
$titleColor = ($formClass === 'floating-form') ? 'var(--brand-navy)' : 'var(--white)';
?>
<div class="<?php echo $formClass; ?> reveal-up" style="transition-delay: 0.1s;">
    <h3 style="color: <?php echo $titleColor; ?>; font-size: 1.5rem; margin-bottom: <?php echo ($showSubtitle) ? '5px' : '20px'; ?>;">
        <?php echo $titleText; ?>
    </h3>

    <?php if ($showSubtitle): ?>
        <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 25px;">Budget-friendly options with no hidden fees.</p>
    <?php endif; ?>

    <form action="/process-quote.php" method="POST" style="<?php echo ($formClass === 'solid-form' || $formClass === 'floating-form') ? 'display: flex; flex-direction: column; gap: 15px;' : ''; ?>">
        
        <div style="position: absolute; left: -9999px; top: -9999px;" aria-hidden="true">
            <label for="company_website">Leave this field blank if you are human:</label>
            <input type="text" name="company_website" id="company_website" tabindex="-1" autocomplete="off">
        </div>
        
        <div class="input-group">
            <input type="text" name="name" placeholder="Your Name" required>
        </div>
        <div class="input-group">
            <input type="email" name="email" placeholder="Email Address" required>
        </div>
        <div class="input-group">
            <input type="tel" name="phone" placeholder="Phone Number" required>
        </div>
        
        <div class="input-group">
            <select name="project_type" required>
                <option value="" disabled selected>What do you need a dumpster for?</option>
                <option value="Residential Cleanout">Residential Cleanout (Furniture, Junk, Yard Waste)</option>
                <option value="Roofing">Roofing (Shingles, Nails, Underlayment)</option>
                <option value="Construction">Construction / Concrete / Dirt</option>
                <option value="Other">Other / General Inquiry</option>
            </select>
        </div>

        <?php if (isset($formStyle) && ($formStyle === 'solid' || $formStyle === 'floating')): ?>
            <div class="input-group">
                <textarea name="message" rows="4" placeholder="Tell us about your project or required bin size (if known)..." required style="resize: vertical;"></textarea>
            </div>
        <?php endif; ?>

        <button type="submit" class="btn-submit" style="margin-top: <?php echo ($formClass === 'hero-form') ? '10px' : '5px'; ?>;">
            <?php echo ($formClass === 'solid-form' || $formClass === 'floating-form') ? 'Send Message' : 'Check Pricing & Availability'; ?>
        </button>
    </form>
</div>