# Nutrition Calculator – Project Overview

## 🎯 Objective

Build a **fast, mobile-friendly, and user-centric nutrition calculator** for Panda Express menu items that improves upon the existing third-party site (`pandaexpressnutrition.org`) in **usability, accessibility, visual design, and maintainability**—while being fully hosted within WordPress using the **WPCode plugin**.

---

## ✅ What We Wanted

### Core Functional Requirements
- Display **complete nutrition facts** for all Panda Express menu items (70+ initially, scalable to 150+)
- Allow users to **add items to a meal list** with a single click
- Show **real-time nutritional totals** (calories, protein, sodium, etc.) in a **bottom drawer**
- Support **search** (`?q=`) and **category filtering** (`?cat=`)
- Enable **shareable meal URLs** (`?meal=item1,item2`)
- Persist meal list using **`localStorage`**
- Ensure **WCAG 2.1 AA accessibility compliance**
- Integrate **GA4 event tracking** (add, search, clear, share)

### UX & Visual Requirements
- Replicate and **enhance** the competitor’s layout with **official Panda Express branding**
- Use **official brand colors**:  
  - Primary Red: `#E3242B`  
  - Background: `#FFFFFF`  
  - Text: `#000000`  
  - Light UI background: `#F8F8F8`
- Make the **“Add” column sticky** so the `+` button is always visible during horizontal scroll
- Display **allergens clearly** using **icon-based visual indicators**
- Ensure **mobile-first responsiveness**, especially for the meal drawer
- Make the **drawer header fully clickable** to toggle open/close

### Technical Constraints
- **No external hosting** – 100% embedded via **WPCode**
- **No user accounts** – `localStorage` only
- **Static data** maintained as inline JSON in PHP
- **Zero paid dependencies** – only vanilla JS + lightweight CSS
- **Fast load** (<1s), SEO-friendly, secure

---

## 🛠️ What We Built

### ✅ Fully Implemented Features
| Feature | Status |
|-------|--------|
| Category-based nutrition tables | ✅ |
| “Add to Meal” with visual feedback | ✅ |
| Persistent `localStorage` meal list | ✅ |
| Bottom drawer with macro totals | ✅ |
| Search with URL sync (`?q=`) | ✅ |
| Category filters (`?cat=`) | ✅ |
| Shareable meal URLs (`?meal=...`) | ✅ |
| GA4 event tracking | ✅ |
| WCAG 2.1 AA compliant markup | ✅ |
| Responsive on mobile & desktop | ✅ |

### 🎨 Visual & UX Enhancements
- **Brand-aligned UI** using `#E3242B`, `#FFFFFF`, `#000`
- **Sticky “Add” column** – always visible during horizontal scroll
- **Allergen icons**: circular red badges with first-letter labels (e.g., **W** = wheat, **S** = soy)
- **Clickable drawer header** – entire top bar toggles drawer
- **Mobile-optimized drawer**:
  - Horizontal scroll for meal items
  - Each item card shows name + “Remove” button
  - Totals in compact grid below
- **Clean, accessible tables** with proper contrast, spacing, and focus states

### 💾 Data & Architecture
- **Data source**: Inline PHP array → JSON embedded in `<script>`
- **Editable by non-devs**: Update `$nutrition_items` directly in WPCode
- **No external APIs** – all logic client-side
- **Page weight**: ~45KB (HTML+JS+CSS+data) → loads instantly

---

## 🚧 Challenges & Fixes

| Issue | Root Cause | Resolution |
|------|-----------|-----------|
| Blank page after CSS update | JS `ReferenceError`: `allergenTags` undefined | Renamed variable to `allergenIcons` |
| Drawer not appearing | `showDrawer()` only removed `.hidden` but didn’t add `.open` | Updated `showDrawer()` to also add `.open` class |
| Add column not sticky | Missing `position: sticky; right: 0` in CSS | Added `.nc-add-column` styles |
| Allergens not visible | Used text tags instead of icons | Replaced with red circular icon badges |

---

## 🎨 Design System

### Color Palette
| Usage | Hex | Notes |
|------|-----|------|
| Primary (buttons, headers, accents) | `#E3242B` | Official Panda Express red |
| Background | `#FFFFFF` | Clean white |
| Text | `#000000` | High-contrast black |
| UI Background (search, chips) | `#F8F8F8` | Light gray per spec |
| Disabled / Placeholder | `#666666` | Subtle gray |

### Typography
- **Font**: System stack (`-apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif`)
- **Base size**: `14px`
- **Headers**: `16–20px`, bold, red (`#E3242B`)
- **Table cells**: Right-aligned numbers, left-aligned names

### Component Styles
| Component | Style |
|--------|------|
| Search input | `border: 1px solid #E3242B`, `bg: #F8F8F8`, `radius: 8px` |
| Category chips | Red border, white bg, red text → red fill on active |
| Table header | Red background, white bold text |
| Add button | `24x24px` circle, red border, `+` icon |
| Drawer | Red header (`#E3242B`), white content, shadow |
| Allergen icon | `20x20px` red circle, white uppercase letter |

---

## ▶️ Next Steps (v1 → v2)

### Short-Term (Next 2 Weeks)
- [ ] Add **missing nutrition columns**:  
  `SIZE (oz)`, `CALORIES FROM FAT`, `TRANS FAT`, `DIETARY FIBER`, `SUGARS`
- [ ] Include **Cub Meal** variants in data
- [ ] Add **allergen legend** (hover or modal: “W = Wheat, S = Soy…”)
- [ ] Improve **empty states** and loading feedback

### Medium-Term (v2)
- [ ] **Export meal as CSV**
- [ ] **Print-friendly view**
- [ ] **Sortable columns** (click header to sort by calories, protein, etc.)
- [ ] **Keyboard navigation** enhancements (arrow keys in table)

### Long-Term (Future)
- Migrate to **Custom Post Types** for easier data management
- Add **multi-language support** (Spanish, Chinese)
- Introduce **user accounts** for cross-device meal sync

---

## 📊 Analytics & Monitoring

### Tracked Events (GA4)
| Event | Parameters |
|------|-----------|
| `add_to_meal` | `item_id`, `item_name` |
| `search` | `search_term` |
| `clear_meal` | `meal_item_count` |
| `share_meal` | `method: "copy_link"`, `item_count` |

> All events fire via `gtag('event', ...)` with fallback console logging.

---

## 📁 Deliverables

- **Single WPCode snippet** (HTML + PHP + CSS + JS)
- **Editable nutrition data** in PHP array format
- **Fully responsive**, accessible, brand-compliant UI
- **Zero external dependencies**

---

## ✅ Acceptance Criteria (MVP Sign-off)

The project is complete when:
1. All 70+ menu items render in categorized tables
2. “+” button adds item → drawer opens with correct totals
3. Drawer is **toggleable** by clicking header or arrow
4. Search and category filters work with URL sync
5. Share link copies and restores meal correctly
6. Mobile view shows horizontal-scrolling meal items
7. Lighthouse score: **Accessibility ≥ 95**, **Performance ≥ 90**

---

> **Status**: ✅ MVP Complete  
> **Ready for deployment via WPCode** on any WordPress page.