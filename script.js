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

const tabButtons = document.querySelectorAll('.tab-button');

tabButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Remove active class from all buttons
        tabButtons.forEach(btn => btn.classList.remove('active'));
        
        // Add active class to clicked button
        button.classList.add('active');
    });
});


// load default tab
loadTab('point_of_sale.php');