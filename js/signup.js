// Get all input elements
const inputs = document.querySelectorAll('.input');

// Add click event listener to each label
inputs.forEach(input => {
    const label = input.parentElement.querySelector('h5');

    label.addEventListener('click', function() {
        // Move the label upwards
        this.style.transform = 'translateY(-20px)';
        this.style.transition = 'transform 0.3s ease';
    });

    // Add blur event listener to each input
    input.addEventListener('blur', function() {
        // Reset the label position
        label.style.transform = 'translateY(0)';
    });
});
