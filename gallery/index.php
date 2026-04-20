<?php
// 1. Define specific SEO data for the Gallery page
$pageTitle = "Project Gallery | C&A Dumpsters El Paso";
$metaDescription = "View our fleet in action across El Paso and Santa Teresa. See real examples of our driveway-safe roll-off dumpster deliveries for residential and commercial projects.";

// 2. Include the header file from the parent directory
include '../includes/header.php';
?>

<section class="hero" style="padding: 150px 0 100px;">
    <div class="container hero-grid" style="grid-template-columns: 1fr; text-align: center;">
        <div class="hero-text reveal-up">
            <h1 style="font-size: clamp(3rem, 5vw, 4.5rem);">Our Fleet.<br><span>In Action.</span></h1>
            <p style="margin: 0 auto; max-width: 700px;">We take pride in our equipment and our careful delivery process. Browse our recent drop-offs across the Borderland to see why homeowners trust C&A Dumpsters.</p>
        </div>
    </div>
</section>

<section class="gallery-section" style="padding: 80px 0; background: var(--white);">
    <div class="container">

        <div class="reveal-up filter-container" style="display: flex; justify-content: center; gap: 15px; margin-bottom: 40px; flex-wrap: wrap;">
            <button class="filter-btn active-filter" data-filter="all">All Projects</button>
            <button class="filter-btn" data-filter="residential">Residential Drops</button>
            <button class="filter-btn" data-filter="landscaping">Landscaping</button>
            <button class="filter-btn" data-filter="fleet">Our Fleet</button>
        </div>

        <div class="bento-grid" id="galleryGrid" style="grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 30px;">

            <div class="bento-card reveal-up gallery-item" data-category="residential" style="padding: 0; overflow: hidden; aspect-ratio: 4/3;">
                <div style="position: relative; width: 100%; height: 100%; cursor: pointer;" class="gallery-hover-wrap">
                    <img src="../images/gallery/driveway-dropoff.jpg" alt="C&A Dumpster carefully placed on a residential driveway in El Paso" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s var(--ease-out-expo);">
                    <div class="gallery-overlay">
                        <h4>Driveway Safe Delivery</h4>
                        <p>Perfect placement for home renovations.</p>
                    </div>
                </div>
            </div>

            <div class="bento-card reveal-up gallery-item" data-category="landscaping" style="padding: 0; overflow: hidden; aspect-ratio: 4/3; transition-delay: 0.1s;">
                <div style="position: relative; width: 100%; height: 100%; cursor: pointer;" class="gallery-hover-wrap">
                    <img src="../images/gallery/landscape.jpg" alt="Dumpster delivered for backyard landscaping project with tree branches" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s var(--ease-out-expo);">
                    <div class="gallery-overlay">
                        <h4>Landscaping Cleanup</h4>
                        <p>Ideal for heavy brush and yard debris.</p>
                    </div>
                </div>
            </div>

            <div class="bento-card reveal-up gallery-item" data-category="fleet" style="padding: 0; overflow: hidden; aspect-ratio: 4/3; transition-delay: 0.2s;">
                <div style="position: relative; width: 100%; height: 100%; cursor: pointer;" class="gallery-hover-wrap">
                    <img src="../images/gallery/multi.jpg" alt="Multiple C&A Dumpster containers ready for dispatch" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s var(--ease-out-expo);">
                    <div class="gallery-overlay">
                        <h4>Inventory Ready</h4>
                        <p>Clean bins ready for immediate dispatch.</p>
                    </div>
                </div>
            </div>

            <div class="bento-card reveal-up gallery-item" data-category="residential" style="padding: 0; overflow: hidden; aspect-ratio: 4/3;">
                <div style="position: relative; width: 100%; height: 100%; cursor: pointer;" class="gallery-hover-wrap">
                    <img src="../images/gallery/home-side.jpg" alt="C&A Dumpster delivered on the side of a residential home" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s var(--ease-out-expo);">
                    <div class="gallery-overlay">
                        <h4>Tight Space Delivery</h4>
                        <p>Expert placement exactly where you need it.</p>
                    </div>
                </div>
            </div>

            <div class="bento-card reveal-up gallery-item" data-category="fleet" style="padding: 0; overflow: hidden; aspect-ratio: 4/3; transition-delay: 0.1s;">
                <div style="position: relative; width: 100%; height: 100%; cursor: pointer;" class="gallery-hover-wrap">
                    <img src="../images/gallery/pickup.jpg" alt="C&A Dumpsters heavy duty delivery truck picking up a load" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s var(--ease-out-expo);">
                    <div class="gallery-overlay">
                        <h4>Heavy-Duty Fleet</h4>
                        <p>Equipped to haul away heavy materials securely.</p>
                    </div>
                </div>
            </div>

            <div class="bento-card reveal-up gallery-item" data-category="landscaping" style="padding: 0; overflow: hidden; aspect-ratio: 4/3; transition-delay: 0.2s;">
                <div style="position: relative; width: 100%; height: 100%; cursor: pointer;" class="gallery-hover-wrap">
                    <img src="../images/gallery/landscape-debris.jpg" alt="Dumpster on driveway loaded with yard waste and landscaping debris" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s var(--ease-out-expo);">
                    <div class="gallery-overlay">
                        <h4>Yard Waste Removal</h4>
                        <p>Keeping driveways clean during major yard overhauls.</p>
                    </div>
                </div>
            </div>

            <div class="bento-card reveal-up gallery-item" data-category="residential" style="padding: 0; overflow: hidden; aspect-ratio: 4/3;">
                <div style="position: relative; width: 100%; height: 100%; cursor: pointer;" class="gallery-hover-wrap">
                    <img src="../images/gallery/driveway-safe.jpg" alt="C&A Dumpster placed carefully near a residential garage" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s var(--ease-out-expo);">
                    <div class="gallery-overlay">
                        <h4>Garage Cleanout Drop</h4>
                        <p>Positioned for optimal loading efficiency.</p>
                    </div>
                </div>
            </div>

            <div class="bento-card reveal-up gallery-item" data-category="fleet" style="padding: 0; overflow: hidden; aspect-ratio: 4/3; transition-delay: 0.1s;">
                <div style="position: relative; width: 100%; height: 100%; cursor: pointer;" class="gallery-hover-wrap">
                    <img src="/images/gallery/flee-multi.jpg" alt="C&A Dumpsters truck delivering multiple roll-off bins" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s var(--ease-out-expo);">
                    <div class="gallery-overlay">
                        <h4>Commercial Capacity</h4>
                        <p>Able to supply multiple bins for large-scale sites.</p>
                    </div>
                </div>
            </div>

            <div class="bento-card reveal-up gallery-item" data-category="residential" style="padding: 0; overflow: hidden; aspect-ratio: 4/3; transition-delay: 0.2s;">
                <div style="position: relative; width: 100%; height: 100%; cursor: pointer;" class="gallery-hover-wrap">
                    <img src="../images/gallery/multi-driveway.jpg" alt="Multiple dumpsters positioned in a wide residential driveway" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s var(--ease-out-expo);">
                    <div class="gallery-overlay">
                        <h4>Multi-Bin Projects</h4>
                        <p>Scaling our service to fit massive home renovations.</p>
                    </div>
                </div>
            </div>

            <div class="bento-card reveal-up gallery-item" data-category="fleet" style="padding: 0; overflow: hidden; aspect-ratio: 4/3;">
                <div style="position: relative; width: 100%; height: 100%; cursor: pointer;" class="gallery-hover-wrap">
                    <img src="../images/gallery/flee-dropoff.jpg" alt="C&A Dumpsters truck dropping off a bin at a new location" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s var(--ease-out-expo);">
                    <div class="gallery-overlay">
                        <h4>Reliable Logistics</h4>
                        <p>On-time, precise deliveries across the Borderland.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    /* Hover Effects */
    .gallery-hover-wrap:hover img {
        transform: scale(1.08) !important;
    }

    .gallery-hover-wrap:hover .gallery-overlay {
        opacity: 1 !important;
    }

    .gallery-hover-wrap:hover .gallery-overlay h4,
    .gallery-hover-wrap:hover .gallery-overlay p {
        transform: translateY(0) !important;
    }

    .gallery-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.2) 60%, transparent 100%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 30px;
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .gallery-overlay h4 {
        color: var(--brand-green);
        font-size: 1.3rem;
        margin-bottom: 5px;
        transform: translateY(20px);
        transition: transform 0.4s var(--ease-out-expo);
    }

    .gallery-overlay p {
        color: var(--white);
        font-size: 0.95rem;
        font-weight: 500;
        transform: translateY(20px);
        transition: transform 0.4s var(--ease-out-expo) 0.05s;
    }

    /* Filter Button Styles */
    .filter-btn {
        background: var(--surface-bg);
        color: var(--text-main);
        padding: 8px 20px;
        border-radius: 100px;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 0.9rem;
        border: 1px solid var(--border-light);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .filter-btn:hover {
        border-color: var(--brand-green);
        color: var(--brand-green);
    }

    .filter-btn.active-filter {
        background: var(--brand-navy);
        color: var(--white);
        border-color: var(--brand-navy);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active state from all buttons
                filterBtns.forEach(b => b.classList.remove('active-filter'));
                // Add active state to clicked button
                btn.classList.add('active-filter');

                const filterValue = btn.getAttribute('data-filter');

                // Show/Hide items based on category
                galleryItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                        // Small animation reset
                        item.style.animation = 'none';
                        item.offsetHeight; // trigger reflow
                        item.style.animation = null;
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    });
</script>

<?php
// Include the final CTA strip and footer from the parent directory
include '../includes/footer.php';
?>