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

// load default tab
loadTab('point_of_sale.php');