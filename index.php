/**
 * Panda Express Nutrition Calculator
 */

// Nutrition data
$nutrition_items = [
  // CHICKEN ENTREES
  [
    "id" => "orange-chicken",
    "name" => "Orange Chicken",
    "category" => "Chicken",
    "servingSizeOz" => 5.92,
    "calories" => 510,
    "caloriesFromFat" => 220,
    "totalFat" => 24,
    "saturatedFat" => 5,
    "transFat" => 0,
    "cholesterol" => 86,
    "sodium" => 850,
    "totalCarbs" => 53,
    "fiber" => 2,
    "sugars" => 20,
    "protein" => 26,
    "allergens" => ["wheat", "soy", "egg"]
  ],
  [
    "id" => "kung-pao-chicken",
    "name" => "Kung Pao Chicken",
    "category" => "Chicken",
    "servingSizeOz" => 6.3,
    "calories" => 320,
    "caloriesFromFat" => 190,
    "totalFat" => 21,
    "saturatedFat" => 3.5,
    "transFat" => 0,
    "cholesterol" => 65,
    "sodium" => 940,
    "totalCarbs" => 14,
    "fiber" => 2,
    "sugars" => 7,
    "protein" => 19,
    "allergens" => ["peanut", "wheat", "soy"]
  ],
  [
    "id" => "string-bean-chicken",
    "name" => "String Bean Chicken Breast",
    "category" => "Chicken",
    "servingSizeOz" => 6,
    "calories" => 210,
    "caloriesFromFat" => 90,
    "totalFat" => 10,
    "saturatedFat" => 2,
    "transFat" => 0,
    "cholesterol" => 50,
    "sodium" => 740,
    "totalCarbs" => 13,
    "fiber" => 4,
    "sugars" => 5,
    "protein" => 18,
    "allergens" => ["wheat", "soy"]
  ],
  [
    "id" => "grilled-teriyaki-chicken",
    "name" => "Grilled Teriyaki Chicken",
    "category" => "Chicken",
    "servingSizeOz" => 6,
    "calories" => 300,
    "caloriesFromFat" => 110,
    "totalFat" => 13,
    "saturatedFat" => 3,
    "transFat" => 0,
    "cholesterol" => 115,
    "sodium" => 530,
    "totalCarbs" => 15,
    "fiber" => 1,
    "sugars" => 9,
    "protein" => 36,
    "allergens" => ["wheat", "soy"]
  ],
  [
    "id" => "sweetfire-chicken",
    "name" => "SweetFire Chicken Breast",
    "category" => "Chicken",
    "servingSizeOz" => 5.8,
    "calories" => 380,
    "caloriesFromFat" => 140,
    "totalFat" => 16,
    "saturatedFat" => 3,
    "transFat" => 0,
    "cholesterol" => 80,
    "sodium" => 380,
    "totalCarbs" => 42,
    "fiber" => 1,
    "sugars" => 19,
    "protein" => 19,
    "allergens" => ["wheat", "soy"]
  ],

  // BEEF ENTREES
  [
    "id" => "broccoli-beef",
    "name" => "Broccoli Beef",
    "category" => "Beef",
    "servingSizeOz" => 5.4,
    "calories" => 150,
    "caloriesFromFat" => 60,
    "totalFat" => 7,
    "saturatedFat" => 2,
    "transFat" => 0,
    "cholesterol" => 30,
    "sodium" => 660,
    "totalCarbs" => 13,
    "fiber" => 2,
    "sugars" => 7,
    "protein" => 9,
    "allergens" => ["wheat", "soy"]
  ],
  [
    "id" => "beijing-beef",
    "name" => "Beijing Beef",
    "category" => "Beef",
    "servingSizeOz" => 5.6,
    "calories" => 480,
    "caloriesFromFat" => 240,
    "totalFat" => 26,
    "saturatedFat" => 5,
    "transFat" => 0,
    "cholesterol" => 50,
    "sodium" => 890,
    "totalCarbs" => 48,
    "fiber" => 3,
    "sugars" => 24,
    "protein" => 14,
    "allergens" => ["wheat", "soy"]
  ],
  [
    "id" => "black-pepper-angus-steak",
    "name" => "Black Pepper Angus Steak",
    "category" => "Beef",
    "servingSizeOz" => 5.9,
    "calories" => 180,
    "caloriesFromFat" => 60,
    "totalFat" => 7,
    "saturatedFat" => 2,
    "transFat" => 0,
    "cholesterol" => 40,
    "sodium" => 850,
    "totalCarbs" => 15,
    "fiber" => 2,
    "sugars" => 6,
    "protein" => 16,
    "allergens" => ["wheat", "soy"]
  ],

  // SEAFOOD ENTREES
  [
    "id" => "honey-walnut-shrimp",
    "name" => "Honey Walnut Shrimp",
    "category" => "Seafood",
    "servingSizeOz" => 3.7,
    "calories" => 510,
    "caloriesFromFat" => 290,
    "totalFat" => 32,
    "saturatedFat" => 6,
    "transFat" => 0,
    "cholesterol" => 115,
    "sodium" => 380,
    "totalCarbs" => 42,
    "fiber" => 3,
    "sugars" => 22,
    "protein" => 14,
    "allergens" => ["shellfish", "tree nut", "wheat", "egg"]
  ],

  // SIDES
  [
    "id" => "fried-rice",
    "name" => "Fried Rice",
    "category" => "Sides",
    "servingSizeOz" => 9.4,
    "calories" => 520,
    "caloriesFromFat" => 140,
    "totalFat" => 16,
    "saturatedFat" => 3,
    "transFat" => 0,
    "cholesterol" => 115,
    "sodium" => 820,
    "totalCarbs" => 80,
    "fiber" => 3,
    "sugars" => 4,
    "protein" => 12,
    "allergens" => ["wheat", "soy", "egg"]
  ],
  [
    "id" => "chow-mein",
    "name" => "Chow Mein",
    "category" => "Sides",
    "servingSizeOz" => 9.4,
    "calories" => 510,
    "caloriesFromFat" => 180,
    "totalFat" => 20,
    "saturatedFat" => 3.5,
    "transFat" => 0,
    "cholesterol" => 0,
    "sodium" => 980,
    "totalCarbs" => 72,
    "fiber" => 6,
    "sugars" => 9,
    "protein" => 12,
    "allergens" => ["wheat", "soy"]
  ],
  [
    "id" => "white-steamed-rice",
    "name" => "White Steamed Rice",
    "category" => "Sides",
    "servingSizeOz" => 8.1,
    "calories" => 380,
    "caloriesFromFat" => 0,
    "totalFat" => 0,
    "saturatedFat" => 0,
    "transFat" => 0,
    "cholesterol" => 0,
    "sodium" => 0,
    "totalCarbs" => 87,
    "fiber" => 0,
    "sugars" => 0,
    "protein" => 7,
    "allergens" => []
  ],
  [
    "id" => "super-greens",
    "name" => "Super Greens",
    "category" => "Sides",
    "servingSizeOz" => 7.6,
    "calories" => 90,
    "caloriesFromFat" => 25,
    "totalFat" => 3,
    "saturatedFat" => 0,
    "transFat" => 0,
    "cholesterol" => 0,
    "sodium" => 530,
    "totalCarbs" => 10,
    "fiber" => 5,
    "sugars" => 3,
    "protein" => 6,
    "allergens" => ["wheat"]
  ],

  // APPETIZERS
  [
    "id" => "chicken-egg-roll",
    "name" => "Chicken Egg Roll (1 roll)",
    "category" => "Appetizers",
    "servingSizeOz" => 3,
    "calories" => 200,
    "caloriesFromFat" => 90,
    "totalFat" => 10,
    "saturatedFat" => 2,
    "transFat" => 0,
    "cholesterol" => 20,
    "sodium" => 390,
    "totalCarbs" => 20,
    "fiber" => 2,
    "sugars" => 2,
    "protein" => 8,
    "allergens" => ["wheat", "soy", "egg"]
  ],
  [
    "id" => "veggie-spring-roll",
    "name" => "Veggie Spring Roll (2 rolls)",
    "category" => "Appetizers",
    "servingSizeOz" => 3.4,
    "calories" => 190,
    "caloriesFromFat" => 70,
    "totalFat" => 8,
    "saturatedFat" => 1.5,
    "transFat" => 0,
    "cholesterol" => 0,
    "sodium" => 520,
    "totalCarbs" => 26,
    "fiber" => 2,
    "sugars" => 2,
    "protein" => 4,
    "allergens" => ["wheat", "soy"]
  ],
  [
    "id" => "cream-cheese-rangoon",
    "name" => "Cream Cheese Rangoon (3 pieces)",
    "category" => "Appetizers",
    "servingSizeOz" => 2.4,
    "calories" => 190,
    "caloriesFromFat" => 70,
    "totalFat" => 8,
    "saturatedFat" => 5,
    "transFat" => 0,
    "cholesterol" => 35,
    "sodium" => 180,
    "totalCarbs" => 24,
    "fiber" => 2,
    "sugars" => 1,
    "protein" => 5,
    "allergens" => ["wheat", "milk", "soy"]
  ]
];
?>

<div id="nutrition-calculator-app">
  <!-- Search & Filter Section -->
  <div class="nc-controls">
    <div class="nc-search-wrapper">
      <input 
        type="text" 
        id="nc-search-input" 
        placeholder="Search menu items..."
        aria-label="Search nutrition items"
      />
    </div>
    
    <div class="nc-category-filters" role="group" aria-label="Category filters">
      <button class="nc-category-chip active" data-category="all">All Items</button>
      <button class="nc-category-chip" data-category="chicken">Chicken</button>
      <button class="nc-category-chip" data-category="beef">Beef</button>
      <button class="nc-category-chip" data-category="seafood">Seafood</button>
      <button class="nc-category-chip" data-category="sides">Sides</button>
      <button class="nc-category-chip" data-category="appetizers">Appetizers</button>
    </div>
  </div>

  <!-- Food Items Container -->
  <div id="nc-items-container"></div>

  <!-- Empty State -->
  <div id="nc-empty-state" style="display: none;">
    <p>No items found. Try a different search term or category.</p>
  </div>

  <!-- Bottom Drawer -->
  <div id="nc-meal-drawer" class="nc-drawer hidden" role="region" aria-label="Your meal summary" tabindex="-1">
    <div class="nc-drawer-header">
      <h3>Your Meal (<span id="nc-item-count">0</span>)</h3>
      
      <div class="nc-drawer-summary" id="nc-drawer-summary">
        <!-- Summary will be rendered here -->
      </div>
      
      <button id="nc-drawer-toggle" aria-label="Toggle meal details">▼</button>
    </div>
    
    <div class="nc-drawer-content">
      <div id="nc-meal-items-list"></div>
      
      <div class="nc-totals-grid" id="nc-totals">
        <!-- Totals will be rendered here -->
      </div>
      
      <div class="nc-drawer-actions">
        <button id="nc-clear-meal" class="nc-btn nc-btn-secondary">Clear Meal</button>
        <button id="nc-copy-link" class="nc-btn nc-btn-primary">Copy Share Link</button>
      </div>
    </div>
  </div>
</div>

<style>
/* ============================================
   Panda Express Nutrition Calculator – Updated Visuals
   Brand: #E3242B (red), #FFFFFF (white), #000 (black)
   ============================================ */

#nutrition-calculator-app {
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
  color: #000;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  padding-bottom: 200px; /* Space for drawer */
  background: #FFFFFF;
}

/* Controls Section */
.nc-controls {
  margin-bottom: 24px;
  position: sticky;
  top: 0;
  background: #FFFFFF;
  z-index: 100;
  padding: 16px 0;
  border-bottom: 2px solid #E3242B;
}

.nc-search-wrapper {
  display: flex;
  gap: 8px;
  margin-bottom: 16px;
}

#nc-search-input {
  flex: 1;
  padding: 12px 16px;
  font-size: 14px;
  border: 1px solid #E3242B;
  border-radius: 8px;
  color: #000;
  background: #F8F8F8;
}

#nc-search-input::placeholder {
  color: #666;
}

/* Category Filters */
.nc-category-filters {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  padding: 4px 0;
}

.nc-category-chip {
  padding: 8px 16px;
  border: 1px solid #E3242B;
  background: #FFFFFF;
  color: #E3242B;
  border-radius: 8px;
  cursor: pointer;
  font-size: 14px;
  font-weight: 600;
  white-space: nowrap;
  transition: all 0.2s;
}

.nc-category-chip:hover,
.nc-category-chip.active {
  background: #E3242B;
  color: #FFFFFF;
}

/* Category Sections */
.nc-category-section {
  margin-bottom: 32px;
}

.nc-category-title {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 16px;
  color: #E3242B;
  padding-bottom: 8px;
}

/* Nutrition Table */
.nc-table-container {
  overflow: auto;
  -webkit-overflow-scrolling: touch;
  margin-bottom: 16px;
  border: 1px solid #E3242B;
  border-radius: 8px;
  position: relative;
  max-height: 600px; /* Add max height to make the table scrollable vertically */
}

.nc-nutrition-table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  font-size: 14px;
  min-width: 1400px;
  table-layout: fixed;
  background: #FFFFFF;
}

/* Fixed columns */
.nc-name-column,
.nc-add-column {
  position: sticky;
  background: inherit;
  z-index: 2;
}

.nc-name-column {
  left: 0;
  width: 200px;
  border-right: 1px solid #E3242B;
}

.nc-allergens-column {
  width: 100px;
  white-space: nowrap;
}

.nc-nutrition-table th {
  background: #E3242B;
  color: #FFFFFF;
  padding: 10px 12px;
  text-align: center;
  font-weight: 700;
  position: sticky;
  top: 0;
  z-index: 3;
  width: 100px;
  white-space: nowrap;
}

.nc-nutrition-table td {
  padding: 10px 12px;
  border-bottom: 1px solid #E3242B;
  text-align: center;
  vertical-align: middle;
  background: inherit;
}

.nc-nutrition-table tr:last-child td {
  border-bottom: none;
}

/* Fixed columns styling */
.nc-nutrition-table th.nc-name-column {
  left: 0;
  z-index: 4;
  background: #E3242B;
}

.nc-nutrition-table th.nc-add-column {
  right: 0;
  z-index: 4;
  background: #E3242B;
}

.nc-nutrition-table td.nc-name-column {
  text-align: left;
  border-right: 2px solid #E3242B;
  box-shadow: 2px 0 5px rgba(0,0,0,0.1);
  background: #FFFFFF;
}

.nc-nutrition-table td.nc-add-column {
  right: 0;
  border-left: 2px solid #E3242B;
  box-shadow: -2px 0 5px rgba(0,0,0,0.1);
  width: 80px;
  background: #FFFFFF;
}

/* Ensure header corners stay on top */
.nc-nutrition-table thead th {
  background: #E3242B;
}

/* Hover effect for better readability */
.nc-nutrition-table tbody tr:hover td {
  background-color: #f8f8f8;
}

.nc-nutrition-table th.nc-add-column {
  border-left: none;
}

/* Item Name Cell */
.nc-item-name {
  font-weight: 700;
  color: #E3242B;
  text-decoration: underline;
  cursor: default;
}

.nc-item-serving {
  font-size: 12px;
  color: #666;
  display: block;
  margin-top: 2px;
}

/* Allergens – Icons */
.nc-allergens {
  display: flex;
  gap: 4px;
  margin-top: 6px;
  flex-wrap: wrap;
}

.nc-allergen-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 20px;
  height: 20px;
  background: #E3242B;
  color: white;
  border-radius: 50%;
  font-size: 10px;
  font-weight: bold;
  line-height: 1;
  title: attr(data-allergen);
}

/* Add Button */
.nc-add-btn {
  width: 24px;
  height: 24px;
  border: 1px solid #E3242B;
  background: #FFFFFF;
  color: #E3242B;
  border-radius: 50%;
  cursor: pointer;
  font-weight: bold;
  font-size: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.2s;
}

.nc-add-btn:hover {
  background: #E3242B;
  color: white;
}

.nc-add-btn.added {
  background: #E3242B;
  color: white;
}

.nc-add-btn.added::after {
  content: "✓";
  font-size: 12px;
}

/* Bottom Drawer */
.nc-drawer {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  background: #E3242B;
  color: #FFFFFF;
  box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s ease;
  z-index: 1000;
  max-height: 80vh;
}

.nc-drawer.open {
  transform: translateY(0);
}

.nc-drawer.hidden {
  display: none;
}

.nc-drawer-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 12px 16px;
  background: #E3242B;
  cursor: pointer;
  position: relative;
}

.nc-drawer-header h3 {
  margin: 0;
  font-size: 16px;
  font-weight: 700;
  flex: 1;
}

#nc-drawer-toggle {
  background: none;
  border: none;
  color: white;
  font-size: 18px;
  cursor: pointer;
  padding: 4px;
  margin-left: 12px;
  flex-shrink: 0;
}

.nc-drawer-content {
  padding: 16px;
  background: white;
  color: #000;
  max-height: calc(80vh - 60px);
  overflow-y: auto;
  display: none;
}

.nc-drawer.open .nc-drawer-content {
  display: block;
}

/* Meal Items List – Horizontal Scroll on Mobile */
#nc-meal-items-list {
  display: flex;
  gap: 12px;
  overflow-x: auto;
  padding: 8px 0;
  -webkit-overflow-scrolling: touch;
  margin-bottom: 16px;
}

.nc-meal-item {
  min-width: 220px;
  background: #F8F8F8;
  border: 1px solid #E3242B;
  border-radius: 8px;
  padding: 12px;
  display: flex;
  flex-direction: column;
  position: relative;
}

.nc-meal-item-name {
  font-weight: 700;
  color: #E3242B;
  margin-bottom: 8px;
  word-break: break-word;
}

.nc-meal-item-remove {
  background: #E3242B;
  color: white;
  border: none;
  padding: 6px 12px;
  border-radius: 6px;
  cursor: pointer;
  font-size: 12px;
  font-weight: 600;
  align-self: flex-start;
  margin-top: auto;
}

/* Totals Grid */
.nc-totals-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
  gap: 12px;
  margin-bottom: 20px;
}

.nc-total-item {
  background: #F8F8F8;
  padding: 12px;
  border-radius: 6px;
  text-align: center;
  border: 1px solid #E3242B;
}

.nc-total-label {
  font-size: 11px;
  color: #666;
  margin-bottom: 4px;
  text-transform: uppercase;
}

.nc-total-value {
  font-size: 18px;
  font-weight: 700;
  color: #000;
}

.nc-total-unit {
  font-size: 11px;
  color: #666;
}

/* Drawer Actions */
.nc-drawer-actions {
  display: flex;
  gap: 12px;
}

.nc-btn {
  flex: 1;
  padding: 10px 16px;
  border-radius: 8px;
  font-weight: 600;
  cursor: pointer;
  font-size: 14px;
  transition: all 0.2s;
}

.nc-btn-primary {
  background: #FFFFFF;
  color: #E3242B;
  border: 1px solid #E3242B;
}

.nc-btn-primary:hover {
  background: #E3242B;
  color: white;
}

.nc-btn-secondary {
  background: #E3242B;
  color: white;
  border: 1px solid #E3242B;
}

.nc-btn-secondary:hover {
  background: #c01a1f;
}

/* Empty State */
#nc-empty-state {
  text-align: center;
  padding: 40px 20px;
  color: #666;
}

/* Mobile Responsive */
@media (max-width: 768px) {
  #nutrition-calculator-app {
    padding: 12px;
    padding-bottom: 120px;
  }

  .nc-controls {
    padding: 12px 0;
  }

  .nc-category-title {
    font-size: 18px;
  }

  .nc-nutrition-table {
    font-size: 12px;
    min-width: 800px;
  }

  .nc-nutrition-table th,
  .nc-nutrition-table td {
    padding: 8px 6px;
  }

  .nc-add-btn {
    width: 22px;
    height: 22px;
    font-size: 14px;
  }

  .nc-totals-grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .nc-drawer-actions {
    flex-direction: column;
  }

  /* Ensure Add column stays visible */
  .nc-add-column {
    right: -1px;
  }
}
</style>

<script>
// ============================================
// Panda Express Nutrition Calculator JS
// ============================================

(function() {
  'use strict';

  // Embed nutrition data from PHP
  const NUTRITION_DATA = <?php echo json_encode($nutrition_items); ?>;

  // State management
  let mealList = [];
  let currentCategory = 'all';
  let searchQuery = '';

  // Initialize app
  document.addEventListener('DOMContentLoaded', function() {
    initializeApp();
  });

  function initializeApp() {
    // Load saved meal from localStorage
    loadMealFromStorage();

    // Parse URL parameters
    parseURLParams();

    // Render initial view
    renderItems();
    renderDrawer(); // Render drawer with loaded data

    // Setup event listeners
    setupEventListeners();

    // Show drawer if meal exists
    if (mealList.length > 0) {
      showDrawer();
    }
  }

  // ============================================
  // Data & Storage
  // ============================================

  function loadMealFromStorage() {
    try {
      const saved = localStorage.getItem('panda_nutrition_meal');
      if (saved) {
        mealList = JSON.parse(saved);
      }
    } catch (e) {
      console.error('Error loading meal from storage:', e);
    }
  }

  function saveMealToStorage() {
    try {
      localStorage.setItem('panda_nutrition_meal', JSON.stringify(mealList));
    } catch (e) {
      console.error('Error saving meal to storage:', e);
    }
  }

  function parseURLParams() {
    const params = new URLSearchParams(window.location.search);
    
    // Search query
    if (params.has('q')) {
      searchQuery = params.get('q');
      document.getElementById('nc-search-input').value = searchQuery;
    }

    // Category filter
    if (params.has('cat')) {
      currentCategory = params.get('cat');
      updateCategoryChips();
    }

    // Shared meal
    if (params.has('meal')) {
      const mealIds = params.get('meal').split(',');
      loadSharedMeal(mealIds);
    }
  }

  function loadSharedMeal(itemIds) {
    mealList = [];
    itemIds.forEach(id => {
      const item = NUTRITION_DATA.find(i => i.id === id);
      if (item) {
        mealList.push(item);
      }
    });
    saveMealToStorage();
  }

  function updateURLParams(params) {
    const url = new URL(window.location);
    Object.keys(params).forEach(key => {
      if (params[key]) {
        url.searchParams.set(key, params[key]);
      } else {
        url.searchParams.delete(key);
      }
    });
    window.history.replaceState({}, '', url);
  }

  // ============================================
  // Rendering
  // ============================================

  function renderItems() {
    const container = document.getElementById('nc-items-container');
    const filtered = getFilteredItems();

    // Group by category
    const grouped = {};
    filtered.forEach(item => {
      if (!grouped[item.category]) {
        grouped[item.category] = [];
      }
      grouped[item.category].push(item);
    });

    // Render sections
    if (Object.keys(grouped).length === 0) {
      container.innerHTML = '';
      document.getElementById('nc-empty-state').style.display = 'block';
      return;
    }

    document.getElementById('nc-empty-state').style.display = 'none';
    
    let html = '';
    Object.keys(grouped).forEach(category => {
      html += renderCategorySection(category, grouped[category]);
    });

    container.innerHTML = html;
  }

  function renderCategorySection(category, items) {
    return `
      <div class="nc-category-section" data-category="${category.toLowerCase()}">
        <h2 class="nc-category-title">${category}</h2>
        <div class="nc-table-container">
          <table class="nc-nutrition-table">
            <thead>
              <tr>
                <th class="nc-name-column">DISH</th>
                <th>SIZE (oz)</th>
                <th>CALORIES</th>
                <th>CALORIES FROM FAT</th>
                <th>TOTAL FAT (g)</th>
                <th>SATURATED FAT (g)</th>
                <th>TRANS FAT (g)</th>
                <th>CHOLESTEROL (mg)</th>
                <th>SODIUM (mg)</th>
                <th>TOTAL CARBS (g)</th>
                <th>DIETARY FIBER (g)</th>
                <th>SUGARS (g)</th>
                <th>PROTEIN (g)</th>
                <th>ALLERGENS</th>
                <th class="nc-add-column">Add</th>
              </tr>
            </thead>
            <tbody>
              ${items.map(item => renderItemRow(item)).join('')}
            </tbody>
          </table>
        </div>
      </div>
    `;
  }

  function renderItemRow(item) {
    const isInMeal = mealList.some(i => i.id === item.id);
    const allergenIcons = item.allergens && item.allergens.length > 0
      ? `<div class="nc-allergens">${item.allergens.map(a => 
          `<span class="nc-allergen-icon" title="${a}">${a.charAt(0).toUpperCase()}</span>`
        ).join('')}</div>`
      : '';

    return `
      <tr>
        <td class="nc-name-column">
          <div class="nc-item-name">${item.name}</div>
        </td>
        <td>${item.servingSizeOz}</td>
        <td>${item.calories}</td>
        <td>${item.caloriesFromFat}</td>
        <td>${item.totalFat}</td>
        <td>${item.saturatedFat}</td>
        <td>${item.transFat}</td>
        <td>${item.cholesterol}</td>
        <td>${item.sodium}</td>
        <td>${item.totalCarbs}</td>
        <td>${item.fiber}</td>
        <td>${item.sugars}</td>
        <td>${item.protein}</td>
        <td class="nc-allergens-column">${allergenIcons}</td>
        <td class="nc-add-column">
          <button 
            class="nc-add-btn ${isInMeal ? 'added' : ''}" 
            data-item-id="${item.id}"
            aria-label="Add ${item.name} to meal"
          >
            ${isInMeal ? '' : '+'}
          </button>
        </td>
      </tr>
    `;
	}

  function getFilteredItems() {
    let filtered = NUTRITION_DATA;

    // Filter by category
    if (currentCategory !== 'all') {
      filtered = filtered.filter(item => 
        item.category.toLowerCase() === currentCategory.toLowerCase()
      );
    }

    // Filter by search
    if (searchQuery) {
      const query = searchQuery.toLowerCase();
      filtered = filtered.filter(item =>
        item.name.toLowerCase().includes(query) ||
        item.category.toLowerCase().includes(query)
      );
    }

    return filtered;
  }

  // ============================================
  // Meal Management
  // ============================================

  function addToMeal(itemId) {
    const item = NUTRITION_DATA.find(i => i.id === itemId);
    if (!item) return;

    mealList.push(item);
    saveMealToStorage();
    renderItems();
    renderDrawer();
    showDrawer();

    // Analytics
    trackEvent('add_to_meal', { item_id: itemId, item_name: item.name });
  }

  function removeFromMeal(index) {
    mealList.splice(index, 1);
    saveMealToStorage();
    renderItems();
    renderDrawer();

    if (mealList.length === 0) {
      hideDrawer();
    }
  }

  function clearMeal() {
    if (!confirm('Clear your entire meal?')) return;

    const itemCount = mealList.length;
    mealList = [];
    saveMealToStorage();
    renderItems();
    renderDrawer();
    hideDrawer();

    trackEvent('clear_meal', { meal_item_count: itemCount });
  }

  function renderDrawer() {
    const itemCount = mealList.length;
    document.getElementById('nc-item-count').textContent = itemCount;

    // Calculate totals
    const totals = calculateTotals();

    // Render compact summary in header
    const summaryHTML = itemCount > 0 ? `
      <div class="nc-summary-item">
        <span class="nc-summary-label">Calories</span>
        <span class="nc-summary-value">${totals.calories}</span>
      </div>
      <div class="nc-summary-item">
        <span class="nc-summary-label">Protein</span>
        <span class="nc-summary-value">${totals.protein}g</span>
      </div>
      <div class="nc-summary-item">
        <span class="nc-summary-label">Carbs</span>
        <span class="nc-summary-value">${totals.totalCarbs}g</span>
      </div>
    ` : '<span style="color: #757575; font-size: 14px;">No items added</span>';
    
    document.getElementById('nc-drawer-summary').innerHTML = summaryHTML;

    // Render meal items list
    const itemsList = document.getElementById('nc-meal-items-list');
    if (itemCount === 0) {
      itemsList.innerHTML = '<p style="text-align: center; color: #757575;">No items added yet</p>';
    } else {
      itemsList.innerHTML = mealList.map((item, index) => `
        <div class="nc-meal-item">
          <span class="nc-meal-item-name">${item.name}</span>
          <button 
            class="nc-meal-item-remove" 
            data-index="${index}"
            aria-label="Remove ${item.name} from meal"
          >
            Remove
          </button>
        </div>
      `).join('');
    }

    // Render detailed totals in expanded view
    const totalsHTML = `
      <div class="nc-total-item">
        <div class="nc-total-label">Calories</div>
        <div class="nc-total-value">${totals.calories}<span class="nc-total-unit"></span></div>
      </div>
      <div class="nc-total-item">
        <div class="nc-total-label">Protein</div>
        <div class="nc-total-value">${totals.protein}<span class="nc-total-unit">g</span></div>
      </div>
      <div class="nc-total-item">
        <div class="nc-total-label">Total Fat</div>
        <div class="nc-total-value">${totals.totalFat}<span class="nc-total-unit">g</span></div>
      </div>
      <div class="nc-total-item">
        <div class="nc-total-label">Carbs</div>
        <div class="nc-total-value">${totals.totalCarbs}<span class="nc-total-unit">g</span></div>
      </div>
      <div class="nc-total-item">
        <div class="nc-total-label">Sodium</div>
        <div class="nc-total-value">${totals.sodium}<span class="nc-total-unit">mg</span></div>
      </div>
      <div class="nc-total-item">
        <div class="nc-total-label">Fiber</div>
        <div class="nc-total-value">${totals.fiber}<span class="nc-total-unit">g</span></div>
      </div>
    `;
    document.getElementById('nc-totals').innerHTML = totalsHTML;
  }

  function calculateTotals() {
    return mealList.reduce((acc, item) => {
      acc.calories += item.calories || 0;
      acc.totalFat += item.totalFat || 0;
      acc.saturatedFat += item.saturatedFat || 0;
      acc.cholesterol += item.cholesterol || 0;
      acc.sodium += item.sodium || 0;
      acc.totalCarbs += item.totalCarbs || 0;
      acc.fiber += item.fiber || 0;
      acc.sugars += item.sugars || 0;
      acc.protein += item.protein || 0;
      return acc;
    }, {
      calories: 0,
      totalFat: 0,
      saturatedFat: 0,
      cholesterol: 0,
      sodium: 0,
      totalCarbs: 0,
      fiber: 0,
      sugars: 0,
      protein: 0
    });
  }

  // ============================================
  // Drawer Control
  // ============================================

	function showDrawer() {
	  console.log("SHOWING DRAWER");
	  const drawer = document.getElementById('nc-meal-drawer');
	  drawer.classList.remove('hidden');
	}

  function hideDrawer() {
    const drawer = document.getElementById('nc-meal-drawer');
    drawer.classList.add('hidden');
    drawer.classList.remove('open');
  }

  function toggleDrawer() {
    const drawer = document.getElementById('nc-meal-drawer');
    drawer.classList.toggle('open');
  }

  // ============================================
  // Share Functionality
  // ============================================

  function copyShareLink() {
    if (mealList.length === 0) {
      alert('Add items to your meal first!');
      return;
    }

    const mealIds = mealList.map(item => item.id).join(',');
    const url = new URL(window.location.href);
    url.searchParams.set('meal', mealIds);
    
    const shareUrl = url.toString();

    // Copy to clipboard
    if (navigator.clipboard) {
      navigator.clipboard.writeText(shareUrl).then(() => {
        alert('Share link copied to clipboard!');
        trackEvent('share_meal', { method: 'copy_link', item_count: mealList.length });
      }).catch(err => {
        console.error('Failed to copy:', err);
        fallbackCopy(shareUrl);
      });
    } else {
      fallbackCopy(shareUrl);
    }
  }

  function fallbackCopy(text) {
    const textarea = document.createElement('textarea');
    textarea.value = text;
    textarea.style.position = 'fixed';
    textarea.style.opacity = '0';
    document.body.appendChild(textarea);
    textarea.select();
    try {
      document.execCommand('copy');
      alert('Share link copied to clipboard!');
      trackEvent('share_meal', { method: 'copy_link', item_count: mealList.length });
    } catch (err) {
      alert('Failed to copy. Please copy manually: ' + text);
    }
    document.body.removeChild(textarea);
  }

  // ============================================
  // Search & Filters
  // ============================================

  function debounce(func, wait) {
    let timeout;
    return function(...args) {
      clearTimeout(timeout);
      timeout = setTimeout(() => func.apply(this, args), wait);
    };
  }

  function handleSearch(query) {
    searchQuery = query.trim();
    renderItems();
    updateURLParams({ q: searchQuery || undefined });
    
    if (searchQuery) {
      trackEvent('search', { search_term: searchQuery });
    }
  }

  function handleCategoryFilter(category) {
    currentCategory = category;
    updateCategoryChips();
    renderItems();
    updateURLParams({ cat: category === 'all' ? undefined : category });
  }

  function updateCategoryChips() {
    document.querySelectorAll('.nc-category-chip').forEach(chip => {
      const chipCategory = chip.dataset.category;
      if (chipCategory === currentCategory) {
        chip.classList.add('active');
      } else {
        chip.classList.remove('active');
      }
    });
  }

  // ============================================
  // Event Listeners
  // ============================================

  function setupEventListeners() {
    // Search
    const searchInput = document.getElementById('nc-search-input');
    const debouncedSearch = debounce(handleSearch, 300);
    searchInput.addEventListener('input', (e) => debouncedSearch(e.target.value));

    // Category filters
    document.querySelectorAll('.nc-category-chip').forEach(chip => {
      chip.addEventListener('click', (e) => {
        handleCategoryFilter(e.target.dataset.category);
      });
    });

    // Add to meal buttons (delegated)
    document.getElementById('nc-items-container').addEventListener('click', (e) => {
      if (e.target.classList.contains('nc-add-btn')) {
        const itemId = e.target.dataset.itemId;
        addToMeal(itemId);
      }
    });

    // Remove from meal buttons (delegated)
    document.getElementById('nc-meal-items-list').addEventListener('click', (e) => {
      if (e.target.classList.contains('nc-meal-item-remove')) {
        const index = parseInt(e.target.dataset.index);
        removeFromMeal(index);
      }
    });

    // Drawer toggle
    document.getElementById('nc-drawer-toggle').addEventListener('click', toggleDrawer);
    document.querySelector('.nc-drawer-header').addEventListener('click', toggleDrawer);

    // Clear meal
    document.getElementById('nc-clear-meal').addEventListener('click', clearMeal);

    // Copy share link
    document.getElementById('nc-copy-link').addEventListener('click', copyShareLink);
  }

  // ============================================
  // Analytics
  // ============================================

  function trackEvent(eventName, params) {
    // Google Analytics 4
    if (typeof gtag !== 'undefined') {
      gtag('event', eventName, params);
    }

    // Console log for debugging
    console.log('Analytics Event:', eventName, params);
  }

})();
</script>