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
    
    <div class="nc-category-card">
      <h3 class="nc-category-title">Quick Jump to Categories</h3>
      <div class="nc-category-filters" role="group" aria-label="Category filters">
        <button class="nc-category-chip active" data-category="all">All Items</button>
        <button class="nc-category-chip" data-category="chicken">Chicken</button>
        <button class="nc-category-chip" data-category="beef">Beef</button>
        <button class="nc-category-chip" data-category="seafood">Seafood</button>
        <button class="nc-category-chip" data-category="sides">Sides</button>
        <button class="nc-category-chip" data-category="appetizers">Appetizers</button>
      </div>
      <p class="nc-category-note">Click any category to Filter that Category Meals</p>
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
      <h3>Your Meal (<span id="nc-item-count">0</span> <span id="nc-item-count-text">items</span>)</h3>
      
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

/* Category Card */
.nc-category-card {
  background: linear-gradient(to bottom left, #f5f5f5, #ffffff);
  border: 1px solid #dcdcdc;
  border-radius: 12px;
  padding: 16px;
  margin-top: 16px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.nc-category-card h3 {
  margin: 0 0 12px 0;
  color: #E3242B;
  text-align: center;
  font-size: 18px;
  font-weight: 600;
}

.nc-category-note {
  text-align: center;
  font-size: 12px;
  color: #666;
  margin: 12px 0 0 0;
  font-style: italic;
  padding-top: 5px;
}

/* Controls Section */
.nc-controls {
  margin-bottom: 24px;
  background: #FFFFFF;
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
  font-size: 16px;
  border: 2px solid #E3242B;
  border-radius: 8px;
  color: #000;
  background: #FFFFFF;
  box-shadow: 0 4px 6px rgba(227, 36, 43, 0.1);
}

#nc-search-input:focus {
  outline: none;
  border-color: #C11E24;
  box-shadow: 0 4px 12px rgba(227, 36, 43, 0.2);
}

#nc-search-input::placeholder {
  color: #999;
}

/* Category Filters */
.nc-category-filters {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  padding: 6px 2px;
  scrollbar-width: thin;
  scrollbar-color: #E3242B #f0f0f0;
}

.nc-category-filters::-webkit-scrollbar {
  height: 6px;
}

.nc-category-filters::-webkit-scrollbar-track {
  background: #f0f0f0;
  border-radius: 10px;
}

.nc-category-filters::-webkit-scrollbar-thumb {
  background: #E3242B;
  border-radius: 10px;
}

.nc-category-chip {
  padding: 8px 16px !important;
  border: 2px solid #E3242B !important;
  background: #FFFFFF !important;
  color: #E3242B !important;
  border-radius: 10px !important;
  cursor: pointer;
  font-size: 14px !important;
  font-weight: 600 !important;
  white-space: nowrap;
  transition: all 0.3s ease;
  box-shadow: 0 2px 2px rgba(0,0,0,0.1) !important;
  min-height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 80px;
  text-align: center;
}

.nc-category-chip:hover {
  background: #fffcfcff !important;
  transform: translateY(-2px);
  box-shadow: 0 4px 4px rgba(227, 36, 43, 0.25) !important;
}

.nc-category-chip.active {
  background: #E3242B !important;
  color: #FFFFFF !important;
  box-shadow: 0 4px 6px rgba(227, 36, 43, 0.4) !important;
}

/* Category Sections */
.nc-category-section {
  margin-bottom: 32px;
}

.nc-category-title {
  font-size: 24px;
  font-weight: 700 !important;
  margin-bottom: 16px;
  color: #E3242B;
  padding-bottom: 8px;
}

/* Nutrition Table */
.nc-table-container {
  overflow: auto;
  -webkit-overflow-scrolling: touch;
  margin-bottom: 16px;
  border: 2px solid #ccc;
  border-radius: 12px;
  position: relative;
  max-height: 600px;
  box-shadow: 0 6px 16px rgba(0,0,0,0.08);
}

.nc-table-container::-webkit-scrollbar {
  height: 10px;
  width: 10px;
}

.nc-table-container::-webkit-scrollbar-track {
  background: #f0f0f0;
  border-radius: 10px;
}

.nc-table-container::-webkit-scrollbar-thumb {
  background: #E3242B;
  border-radius: 10px;
}

.nc-table-container::-webkit-scrollbar-corner {
  background: #f0f0f0;
}

.nc-nutrition-table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  font-size: 14px;
  min-width: 1500px;
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
  width: 250px;
  border-right: 2px solid #ccc;
}

.nc-allergens-column {
  width: 120px;
  white-space: nowrap;
}

.nc-nutrition-table th {
  background: #E3242B;
  color: #FFFFFF;
  padding: 10px 8px;
  text-align: center;
  font-weight: 700;
  position: sticky;
  top: 0;
  z-index: 3;
  width: 140px;
  white-space: nowrap;
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 0.8px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.nc-nutrition-table th.nc-name-column {
  width: 240px;
}

@media (max-width: 768px) {
  .nc-nutrition-table th.nc-name-column {
    width: 150px;
  }
  
  .nc-nutrition-table th.nc-add-column {
    width: 60px;
  }
  
  .nc-nutrition-table th:not(.nc-name-column):not(.nc-add-column) {
    width: auto; /* Allow columns to adjust to header text width */
  }
  
  .nc-nutrition-table td:not(.nc-name-column):not(.nc-add-column) {
    width: auto; /* Match the header width */
  }
  
  .nc-nutrition-table th {
    padding: 8px 4px; /* Reduced padding to save space */
    font-size: 10px !important;
  }

  .nc-nutrition-table td {
    padding: 8px 4px; /* Reduced padding to save space */
    font-size: 14px !important;
  }
  
  .nc-item-name {
    white-space: normal;
    font-size: 12px !important;
  }
}

@media (max-width: 480px) {
  .nc-nutrition-table th.nc-name-column {
    width: 130px;
  }
  
  .nc-nutrition-table th.nc-add-column {
    width: 60px;
  }
  
  .nc-nutrition-table th:not(.nc-name-column):not(.nc-add-column) {
    width: auto; /* Allow columns to adjust to header text width */
  }
  
  .nc-nutrition-table td:not(.nc-name-column):not(.nc-add-column) {
    width: auto; /* Match the header width */
  }
  
  .nc-nutrition-table th {
    padding: 6px 3px; /* Reduced padding to save space */
    font-size: 10px !important;
  }

  .nc-nutrition-table td {
    padding: 6px 3px; /* Reduced padding to save space */
    font-size: 12px !important;
  }
  
  .nc-item-name {
    white-space: normal;
    font-size: 11px !important;
  }
}

.nc-nutrition-table td {
  padding: 10px 8px;
  border-bottom: 1px solid #e0e0e0;
  text-align: center;
  vertical-align: middle;
  background: inherit;
  transition: background-color 0.3s ease;
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
  width: 60px;
}

.nc-nutrition-table td.nc-name-column {
  text-align: left;
  border-right: 2px solid #ccc;
  box-shadow: 2px 0 12px rgba(0,0,0,0.1);
  background: #FFFFFF;
}

.nc-nutrition-table td.nc-add-column {
  right: 0;
  border-left: 2px solid #ccc;
  box-shadow: -2px 0 12px rgba(0,0,0,0.1);
  width: 60px;
  background: #FFFFFF;
}

/* Ensure header corners stay on top */
.nc-nutrition-table thead th {
  background: #E3242B;
}

/* Hover effect for better readability */
.nc-nutrition-table tbody tr:hover td {
  background-color: #f0f0f0;
}

.nc-nutrition-table tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

.nc-nutrition-table tbody tr:nth-child(even):hover td {
  background-color: #e8e8e8;
}

/* .nc-nutrition-table th.nc-add-column {
  border-left: none;
} */

/* Item Name Cell */
.nc-item-name {
  font-weight: 700;
  color: #E3242B;
  text-decoration: none;
  cursor: default;
  display: block;
  font-size: 14px;
  white-space: nowrap;
}

@media (max-width: 768px) {
  .nc-item-name {
    white-space: normal;
    word-wrap: break-word;
  }
}

@media (max-width: 480px) {
  .nc-item-name {
    white-space: normal;
    word-wrap: break-word;
  }
}

.nc-item-serving {
  font-size: 13px;
  color: #666;
  display: block;
  margin-top: 4px;
}

/* Allergens – Icons */
.nc-allergens {
  display: flex;
  gap: 6px;
  margin-top: 6px;
  flex-wrap: wrap;
  justify-content: center;
}

.nc-allergen-icon {
  width: 22px;
  height: 22px;
  cursor: help;
  vertical-align: middle;
}

/* Add Button */
.nc-add-btn {
  width: 36px;
  height: 36px;
  border: 2px solid #E3242B;
  background: #FFFFFF;
  color: #E3242B;
  border-radius: 10px;
  cursor: pointer;
  font-weight: bold;
  font-size: 18px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
  box-shadow: 0 4px 8px rgba(0,0,0,0.2);
  min-height: 36px;
}

.nc-add-btn:hover {
  background: #E3242B;
  color: white;
  transform: scale(1.1);
  box-shadow: 0 6px 12px rgba(227, 36, 43, 0.4);
}

.nc-add-btn.added {
  background: #E3242B;
  color: white;
  border-color: #C11E24;
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
  box-shadow: 0 -6px 24px rgba(0, 0, 0, 0.25);
  transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  z-index: 1000;
  max-height: 80vh;
  border-top-left-radius: 16px;
  border-top-right-radius: 16px;
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
  padding: 18px 24px;
  background: #C11E24;
  cursor: pointer;
  position: relative;
  border-top-left-radius: 16px;
  border-top-right-radius: 16px;
}

.nc-drawer-header h3 {
  margin: 0;
  font-size: 18px;
  font-weight: 700;
  flex: 1;
  color: #FFFFFF;
}

#nc-drawer-toggle {
  background: none;
  border: none;
  color: white;
  font-size: 20px;
  cursor: pointer;
  padding: 6px;
  margin-left: 12px;
  flex-shrink: 0;
  transition: transform 0.3s ease;
}

.nc-drawer.open #nc-drawer-toggle {
  transform: rotate(180deg);
}

.nc-drawer-content {
  padding: 20px;
  background: white;
  color: #000;
  max-height: calc(80vh - 60px);
  overflow-y: auto;
  display: none;
  border-bottom-left-radius: 12px;
  border-bottom-right-radius: 12px;
}

.nc-drawer.open .nc-drawer-content {
  display: block;
}

.nc-drawer-content::-webkit-scrollbar {
  width: 8px;
}

.nc-drawer-content::-webkit-scrollbar-track {
  background: #f0f0f0;
  border-radius: 10px;
}

.nc-drawer-content::-webkit-scrollbar-thumb {
  background: #E3242B;
  border-radius: 10px;
}

/* Meal Items List – Horizontal Scroll on Mobile */
#nc-meal-items-list {
  display: flex;
  gap: 16px;
  overflow-x: auto;
  padding: 16px 0;
  -webkit-overflow-scrolling: touch;
  margin-bottom: 20px;
  scrollbar-width: thin;
  scrollbar-color: #E3242B #f0f0f0;
}

#nc-meal-items-list::-webkit-scrollbar {
  height: 8px;
}

#nc-meal-items-list::-webkit-scrollbar-track {
  background: #f0f0f0;
  border-radius: 10px;
}

#nc-meal-items-list::-webkit-scrollbar-thumb {
  background: #E3242B;
  border-radius: 10px;
}

.nc-meal-item {
  min-width: 240px;
  background: #FFFFFF;
  border: 2px solid #E3242B;
  border-radius: 12px;
  padding: 18px;
  display: flex;
  flex-direction: column;
  position: relative;
  box-shadow: 0 6px 16px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
  border: 1px solid #E3242B;
}

.nc-meal-item:hover {
  transform: translateY(-4px);
  box-shadow: 0 10px 20px rgba(227, 36, 43, 0.2);
}

.nc-meal-item-name {
  font-weight: 700;
  color: #E3242B;
  margin-bottom: 8px;
  word-break: break-word;
  font-size: 16px;
}

/* Style for item count */
.nc-meal-item-name count {
  color: #E3242B;
  font-weight: 700;
}

/* Style for highlighted item count */
.nc-item-count-highlight {
  color: #E3242B;
  font-weight: 700;
}

.nc-meal-item-remove {
  background: #C11E24;
  color: white;
  border: none;
  padding: 12px 18px;
  border-radius: 8px;
  cursor: pointer;
  font-size: 14px;
  font-weight: 600;
  align-self: flex-start;
  margin-top: auto;
  transition: all 0.3s ease;
  box-shadow: 0 4px 6px rgba(0,0,0,0.2);
}

.nc-meal-item-remove:hover {
  background: #a01a1f;
  transform: translateY(-1px);
  box-shadow: 0 6px 10px rgba(0,0,0,0.25);
}

/* Totals Table Container */
.nc-totals-table-container {
  margin-bottom: 12px;
  overflow-x: auto;
  border: 2px solid #ccc;
  border-radius: 12px;
  box-shadow: 0 6px 16px rgba(0,0,0,0.08);
}

.nc-totals-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 14px;
  min-width: 600px;
}

.nc-totals-table th,
.nc-totals-table td {
  padding: 10px 8px;
  text-align: center;
  border-right: 1px solid #e0e0e0;
}

.nc-totals-table th:last-child,
.nc-totals-table td:last-child {
  border-right: none;
}

.nc-totals-table thead th {
  background: #E3242B;
  color: #FFFFFF;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.8px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.nc-totals-table tbody td {
  border-bottom: 1px solid #e0e0e0;
  background: #FFFFFF;
}

.nc-totals-table tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

.nc-totals-table tbody tr:hover td {
  background-color: #f0f0f0;
}

.nc-totals-table tbody tr:last-child td {
  border-bottom: none;
}

.nc-nutrient-name {
  text-align: left;
  font-weight: 600;
  color: #333;
}

.nc-nutrient-value {
  font-weight: 700;
  color: #E3242B;
}

.nc-nutrient-unit {
  font-size: 12px;
  color: #666;
  margin-left: 4px;
}



/* Drawer Actions */
.nc-drawer-actions {
  display: flex;
  gap: 16px;
  padding-top: 16px;
  flex-wrap: wrap;
}

.nc-btn {
  flex: 1;
  padding: 12px 16px;
  border: none;
  border-radius: 8px;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  box-shadow: 0 4px 8px rgba(0,0,0,0.15);
  min-width: 100px;
}

.nc-btn-primary {
  background: #E3242B;
  color: white;
}

.nc-btn-primary:hover {
  background: #C11E24;
  transform: translateY(-2px);
  box-shadow: 0 6px 12px rgba(227, 36, 43, 0.35);
}

.nc-btn-secondary {
  background: #FFFFFF;
  color: #E3242B;
  border: 2px solid #E3242B;
}

.nc-btn-secondary:hover {
  background: #FFF2F2;
  color: #C11E24;
  transform: translateY(-2px);
  box-shadow: 0 6px 12px rgba(227, 36, 43, 0.25);
}

/* Responsive button adjustments */
@media (max-width: 768px) {
  .nc-drawer-actions {
    flex-direction: column;
  }
  
  .nc-btn {
    width: 100%;
    padding: 14px;
    font-size: 16px;
    min-width: auto;
  }
}

@media (max-width: 480px) {
  .nc-btn {
    padding: 12px;
    font-size: 15px;
  }
}

/* Compact summary in drawer header */
.nc-drawer-summary {
  display: flex;
  gap: 20px;
  flex: 1;
}

.nc-summary-item {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.nc-summary-label {
  font-size: 12px;
  color: #FFCOCF;
  margin-bottom: 4px;
}

.nc-summary-value {
  font-size: 16px;
  font-weight: 700;
  color: #FFFFFF;
}



/* Empty State */
#nc-empty-state {
  text-align: center;
  padding: 40px 20px;
  color: #666;
}

#nc-empty-state p {
  font-size: 18px;
  margin: 0;
}

/* Responsive design adjustments */
@media (max-width: 768px) {
  #nutrition-calculator-app {
    padding: 12px;
    padding-bottom: 240px;
  }
  
  .nc-controls {
    padding: 16px 0;
  }
  
  .nc-category-filters {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
    padding: 8px 2px;
    overflow-x: visible;
  }
  
  .nc-category-chip {
    padding: 10px 20px;
    font-size: 14px;
    min-height: 40px;
    width: 100%;
    margin: 0;
  }
  
  #nc-search-input {
    padding: 14px 16px;
    font-size: 16px;
  }
  
  .nc-nutrition-table {
    font-size: 12px;
    min-width: 1200px;
  }
  
  .nc-name-column {
    width: 180px;
  }
  
  .nc-allergens-column {
    width: 100px;
  }
  
  .nc-nutrition-table th,
  .nc-nutrition-table td {
    padding: 12px 8px;
  }
  
  .nc-add-btn {
    width: 40px;
    height: 40px;
    font-size: 20px;
  }
  
  .nc-drawer-header {
    padding: 16px 18px;
  }
  
  .nc-drawer-header h3 {
    font-size: 16px;
  }
  
  .nc-drawer-content {
    padding: 20px;
  }
  
  #nc-meal-items-list {
    gap: 16px;
    padding: 16px 0;
  }
  
  .nc-meal-item {
    min-width: 240px;
    padding: 16px;
  }
  
  .nc-totals-table-container {
    overflow-x: auto;
    margin-bottom: 12px;
  }
  
  .nc-drawer-actions {
    flex-direction: column;
    gap: 16px;
  }
  
  .nc-btn {
    padding: 16px;
    font-size: 16px;
  }
}

@media (max-width: 480px) {
  #nutrition-calculator-app {
    padding: 10px;
    padding-bottom: 220px;
  }
  
  .nc-controls {
    padding: 12px 0;
  }
  
  .nc-category-filters {
    gap: 8px;
  }
  
  .nc-category-chip {
    padding: 8px 18px;
    font-size: 13px;
    min-height: 38px;
  }
  
  .nc-category-title {
    font-size: 20px;
  }
  
  .nc-nutrition-table {
    font-size: 11px;
    min-width: 1200px;
  }
  
  .nc-name-column {
    width: 150px;
  }
  
  .nc-allergens-column {
    width: 80px;
  }
  
  .nc-nutrition-table th,
  .nc-nutrition-table td {
    padding: 10px 6px;
  }
  
  .nc-add-btn {
    width: 36px;
    height: 36px;
    font-size: 18px;
  }
  
  .nc-drawer-header {
    padding: 12px 14px;
  }
  
  .nc-drawer-header h3 {
    font-size: 12px;
  }
  
  .nc-drawer-content {
    padding: 16px;
  }
  
  #nc-meal-items-list {
    gap: 12px;
    padding: 12px 0;
  }
  
  .nc-meal-item {
    min-width: 220px;
    padding: 12px;
  }
  
  .nc-totals-table-container {
    overflow-x: auto;
    margin-bottom: 12px;
  }
  .nc-totals-table {
    font-size: 11px;
  }

  .nc-btn {
    padding: 16px;
    font-size: 14px;
    min-width: auto;
  }
}
</style>

<script>
// ============================================
// Panda Express Nutrition Calculator JS
// ============================================

(function() {
  'use strict';

  // Configuration for allergen icons
  const ALLERGEN_ICON_CONFIG = {
    basePath: 'https://dev-my-semakan-str.pantheonsite.io/wp-content/uploads/2025/10/',  // Base path for allergen icons
    defaultIcon: 'https://dev-my-semakan-str.pantheonsite.io/wp-content/uploads/2025/10/default-allergen.png',  // Default icon for missing allergen images
    extension: '.png'  // Default file extension for allergen icons
  };

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
          `<img class="nc-allergen-icon" src="${ALLERGEN_ICON_CONFIG.basePath}${a.toLowerCase().replace(/\s+/g, '-')}${ALLERGEN_ICON_CONFIG.extension}" alt="${a}" title="${a}" onerror="this.onerror=null; this.src='${ALLERGEN_ICON_CONFIG.basePath}${ALLERGEN_ICON_CONFIG.defaultIcon}';">`
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
    document.getElementById('nc-item-count-text').textContent = itemCount === 1 ? 'item' : 'items';

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

    // Render meal items list with grouping and counts
    const itemsList = document.getElementById('nc-meal-items-list');
    if (itemCount === 0) {
      itemsList.innerHTML = '<p style="text-align: center; color: #757575;">No items added yet</p>';
    } else {
      // Group items by ID and count them
      const groupedItems = mealList.reduce((acc, item) => {
        if (!acc[item.id]) {
          acc[item.id] = {
            ...item,
            count: 0,
            indices: []
          };
        }
        acc[item.id].count++;
        acc[item.id].indices.push(mealList.indexOf(item));
        return acc;
      }, {});
      
      // Create HTML for grouped items
      const groupedItemsArray = Object.values(groupedItems);
      itemsList.innerHTML = groupedItemsArray.map((groupedItem, groupIndex) => {
        const displayName = groupedItem.count > 1 
          ? `${groupedItem.name} <span class="nc-item-count-highlight">× ${groupedItem.count}</span>` 
          : groupedItem.name;
          
        return `
          <div class="nc-meal-item">
            <span class="nc-meal-item-name">${displayName}</span>
            <button 
              class="nc-meal-item-remove" 
              data-indices="${groupedItem.indices.join(',')}"
              aria-label="Remove ${groupedItem.name} from meal"
            >
              Remove
            </button>
          </div>
        `;
      }).join('');
    }

    // Render detailed totals in expanded view as a compact table with nutrients in rows
    const allTotalsHTML = `
      <div class="nc-totals-table-container">
        <table class="nc-totals-table">
          <thead>
            <tr>
              <th>DISH</th>
              <th>SIZE (oz)</th>
              <th>CALORIES</th>
              <th>FAT CAL</th>
              <th>FAT (g)</th>
              <th>SAT FAT (g)</th>
              <th>TRANS (g)</th>
              <th>CHOL (mg)</th>
              <th>SODIUM (mg)</th>
              <th>CARBS (g)</th>
              <th>FIBER (g)</th>
              <th>SUGAR (g)</th>
              <th>PROTEIN (g)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="nc-nutrient-name">TOTAL (${mealList.length})</td>
              <td class="nc-nutrient-value">${totals.servingSizeOz.toFixed(2)}</td>
              <td class="nc-nutrient-value">${totals.calories}</td>
              <td class="nc-nutrient-value">${totals.caloriesFromFat}</td>
              <td class="nc-nutrient-value">${totals.totalFat}g</td>
              <td class="nc-nutrient-value">${totals.saturatedFat}g</td>
              <td class="nc-nutrient-value">${totals.transFat}g</td>
              <td class="nc-nutrient-value">${totals.cholesterol}mg</td>
              <td class="nc-nutrient-value">${totals.sodium}mg</td>
              <td class="nc-nutrient-value">${totals.totalCarbs}g</td>
              <td class="nc-nutrient-value">${totals.fiber}g</td>
              <td class="nc-nutrient-value">${totals.sugars}g</td>
              <td class="nc-nutrient-value">${totals.protein}g</td>
            </tr>
          </tbody>
        </table>
      </div>
    `;
    document.getElementById('nc-totals').innerHTML = allTotalsHTML;
  }

  function calculateTotals() {
    // Initialize with default values including servingSizeOz
    const totals = {
      servingSizeOz: 0,
      calories: 0,
      caloriesFromFat: 0,
      totalFat: 0,
      saturatedFat: 0,
      transFat: 0,
      cholesterol: 0,
      sodium: 0,
      totalCarbs: 0,
      fiber: 0,
      sugars: 0,
      protein: 0
    };

    // Sum up all nutritional values
    return mealList.reduce((acc, item) => {
      acc.servingSizeOz += item.servingSizeOz || 0;
      acc.calories += item.calories || 0;
      acc.caloriesFromFat += item.caloriesFromFat || 0;
      acc.totalFat += item.totalFat || 0;
      acc.saturatedFat += item.saturatedFat || 0;
      acc.transFat += item.transFat || 0;
      acc.cholesterol += item.cholesterol || 0;
      acc.sodium += item.sodium || 0;
      acc.totalCarbs += item.totalCarbs || 0;
      acc.fiber += item.fiber || 0;
      acc.sugars += item.sugars || 0;
      acc.protein += item.protein || 0;
      return acc;
    }, totals);
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
        const indicesStr = e.target.dataset.indices;
        if (indicesStr) {
          // Handle grouped items removal
          const indices = indicesStr.split(',').map(i => parseInt(i));
          // Remove items in reverse order to maintain correct indices
          indices.sort((a, b) => b - a).forEach(index => removeFromMeal(index));
        } else {
          const index = parseInt(e.target.dataset.index);
          removeFromMeal(index);
        }
      }
    });

    // Drawer toggle
    document.getElementById('nc-drawer-toggle').addEventListener('click', toggleDrawer);
    document.querySelector('.nc-drawer-header').addEventListener('click', function(event) {
      // Prevent toggling when clicking on the toggle button itself
      if (event.target.id !== 'nc-drawer-toggle') {
        toggleDrawer();
      }
    });

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