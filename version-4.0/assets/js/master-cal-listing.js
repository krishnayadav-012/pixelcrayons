let activeFilter = 'All';
let visibleCount = 6;

const gridElement = document.querySelector('.calculator-grid');
const filterItems = document.querySelectorAll('.filters-group ul li');
const loadMoreBtn = document.querySelector('.load-more-btn');
const allCards = Array.from(gridElement.querySelectorAll('.card'));

function updateGrid() {
  // Sort cards by popularity initially (if needed, though they are static now)
  // For static filtering, we just show/hide based on category
  
  let visibleInFiltered = 0;
  let totalFiltered = 0;

  allCards.forEach(card => {
    const category = card.dataset.category;
    const matchesFilter = activeFilter === 'All' || category === activeFilter;
    
    if (matchesFilter) {
      totalFiltered++;
      if (visibleInFiltered < visibleCount) {
        card.style.display = 'flex';
        visibleInFiltered++;
      } else {
        card.style.display = 'none';
      }
    } else {
      card.style.display = 'none';
    }
  });

  if (visibleInFiltered >= totalFiltered) {
    loadMoreBtn.parentElement.style.display = 'none';
  } else {
    loadMoreBtn.parentElement.style.display = 'flex';
  }
}

// Event Listeners
filterItems.forEach(item => {
  item.addEventListener('click', () => {
    filterItems.forEach(i => i.classList.remove('active'));
    item.classList.add('active');
    activeFilter = item.dataset.filter;
    visibleCount = 6;
    updateGrid();
  });
});

loadMoreBtn.addEventListener('click', () => {
  visibleCount += 3;
  updateGrid();
});

// Initial Render
updateGrid();
ssss