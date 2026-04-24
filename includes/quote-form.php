<div class="form-container">
    <h3 style="margin-bottom: 20px; font-family: 'Inter', sans-serif; color: #1e293b;">Request a Dumpster Quote</h3>
    
    <form action="process-quote.php" method="POST" id="dumpsterForm">
        <div class="form-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
            <div class="form-group">
                <label for="name" style="display: block; font-size: 0.85rem; font-weight: 600; margin-bottom: 5px;">Full Name *</label>
                <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 4px;">
            </div>
            <div class="form-group">
                <label for="email" style="display: block; font-size: 0.85rem; font-weight: 600; margin-bottom: 5px;">Email Address *</label>
                <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 4px;">
            </div>

            <div class="form-group">
                <label for="phone" style="display: block; font-size: 0.85rem; font-weight: 600; margin-bottom: 5px;">Phone Number *</label>
                <input type="tel" id="phone" name="phone" required style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 4px;">
            </div>
            <div class="form-group">
                <label for="date" style="display: block; font-size: 0.85rem; font-weight: 600; margin-bottom: 5px;">Desired Delivery Date</label>
                <input type="date" id="date" name="date" style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 4px;">
            </div>
        </div>

        <div class="form-group" style="margin-top: 15px;">
            <label for="size" style="display: block; font-size: 0.85rem; font-weight: 600; margin-bottom: 5px;">Dumpster Size Needed</label>
            <select id="size" name="size" style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 4px; background: #fff;">
                <option value="Unsure / Need Recommendation">Not sure, I need a recommendation</option>
                <option value="10 Yard">10 Yard (Small cleanouts, heavy debris)</option>
                <option value="20 Yard">20 Yard (Medium renovations, roofing)</option>
                <option value="30 Yard">30 Yard (Large renovations, cleanouts)</option>
                <option value="40 Yard">40 Yard (Major construction, commercial)</option>
            </select>
        </div>

        <div class="form-group" style="margin-top: 15px;">
            <label for="address" style="display: block; font-size: 0.85rem; font-weight: 600; margin-bottom: 5px;">Delivery Address</label>
            <input type="text" id="address" name="address" placeholder="123 Main St, City, State, ZIP" style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 4px;">
        </div>

        <div class="form-group" style="margin-top: 15px;">
            <label for="details" style="display: block; font-size: 0.85rem; font-weight: 600; margin-bottom: 5px;">What are you disposing of?</label>
            <textarea id="details" name="details" rows="3" placeholder="e.g., Household junk, construction debris, concrete..." style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 4px; resize: vertical;"></textarea>
        </div>

        <button type="submit" style="margin-top: 20px; width: 100%; padding: 12px; background-color: #0f172a; color: #fff; font-weight: bold; border: none; border-radius: 4px; cursor: pointer; text-transform: uppercase;">Get My Quote</button>
    </form>
</div>