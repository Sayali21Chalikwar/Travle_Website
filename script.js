document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Gather form data
    const formData = new FormData(this);

    // Make a POST request to the PHP file
    fetch('contact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('response').innerHTML = data; // Display response message
        document.getElementById('contactForm').reset(); // Reset the form
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById('response').innerHTML = 'An error occurred. Please try again.';
    });
});
