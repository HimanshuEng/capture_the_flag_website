    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('challengeForm');
        const successMessage = document.getElementById('successMessage');

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            // Get form data
            const formData = new FormData(form);

            // Send AJAX request
            fetch('submit_challenge.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                console.log("Response from server:", data);
                if (data.trim() === "Challenge added successfully") {
                    successMessage.style.display = 'block';
                    setTimeout(function() {
                        successMessage.style.display = 'none';
                        form.reset();
                    }, 5000); // Hide message after 5 seconds
                } else {
                    console.error("Unexpected response from server.");
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });
