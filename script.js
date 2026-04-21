function loadTab(page) {
    fetch(page)
        .then(response => response.text())
        .then(data => {
            document.getElementById('content-section').innerHTML = data;
        })
        .catch(error => {
            console.log('Error loading tab:', error);
        });
}

// Grab elements
const tabButtons = document.querySelectorAll('.tab-button');
const contentSection = document.getElementById('content-section');
const cartSection = document.getElementById('cart-section');

// Tab click handling
tabButtons.forEach(button => {
    button.addEventListener('click', () => {

        // 1. Active state handling
        tabButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        // 2. Check if it's MAIN tab
        const isMain = button.classList.contains('main');

       if (isMain) {
            contentSection.style.width = '65%';
            cartSection.style.display = 'block';
        } else {
            contentSection.style.width = '85%';
            cartSection.style.display = 'none';
        }

        // 3. Load tab content (NO inline onclick needed)
        const tabMap = {
            'point_of_sale.php': 'pos',
            'inventory.php': 'inventory',
            'orders.php': 'orders',
            'customers.php': 'customers',
            'dashboard.php': 'dashboard'
        };

        // figure out which page to load
        const page = button.getAttribute('data-page');

        if (page) {
            loadTab(page);
        }
    });
});



// load default tab
loadTab('point_of_sale.php');