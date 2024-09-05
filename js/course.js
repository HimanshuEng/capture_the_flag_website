// JavaScript code to handle modal opening, data population, and dynamic content
const openModalButtons = document.querySelectorAll('.open-modal-button');
const modalTitle = document.getElementById('modal-title');
const modalPoints = document.querySelector('#modal-points span');
const overlay = document.getElementById('overlay');

openModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal = document.querySelector(button.dataset.modalTarget);
        openModal(modal);
    });
});

// Function to open modal
function openModal(modal) {
    if (modal == null) return;
    modal.classList.add('active');
    overlay.classList.add('active');
}

// Close modal button functionality
const closeModalButtons = document.querySelectorAll('[data-close-button]');

closeModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal = button.closest('.modal');
        closeModal(modal);
    });
});

// Function to close modal
function closeModal(modal) {
    if (modal == null) return;
    modal.classList.remove('active');
    overlay.classList.remove('active');
}
document.addEventListener('DOMContentLoaded', function() {
    const submitButtons = document.querySelectorAll('#btn');

    submitButtons.forEach(button => {
        button.addEventListener('click', function() {
            const flagInput = button.previousElementSibling.value.trim();
            const modalTitle = button.parentElement.parentElement.querySelector('.modal-header h2').textContent;
            const challengeID = button.parentElement.parentElement.id.replace('modal', '');

            // Validate user input here if needed

            // Send the request with challenge ID and user flag as data
            const data = `challengeID=${challengeID}&userFlag=${encodeURIComponent(flagInput)}`;
            fetch('check_flag.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: data
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    alert('Congratulations! Your answer is correct.');
                    const modal = button.parentElement.parentElement;
                    modal.classList.remove('active');
                    document.getElementById('overlay').classList.remove('active');
                    // Optionally, update UI or perform other actions here
                } else {
                    alert('Sorry, your answer is incorrect. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while processing your request. Please try again later.');
            });
        });
    });
});
// Assuming you have the challenge ID available in JavaScript
const challengeID = 1; // Example ID

// Send the request with challenge ID and user flag as data
const data = `challengeID=${challengeID}&userFlag=${encodeURIComponent(userFlag)}`;
fetch('check_flag.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
    },
    body: data
})
.then(response => {
    // Handle response...
})
.catch(error => {
    console.error('Error:', error);
    alert('An error occurred while processing your request. Please try again later.');
});
