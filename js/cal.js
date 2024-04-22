// Global variables to hold the selected price and caravan name
let selectedPrice = 0;
let selectedCaravan = '';

// Function to redirect to the reservation page with query parameters
function redirectToReservation(element) {
    const price = element.dataset.price;
    const name = element.dataset.name;
    const queryParams = new URLSearchParams({ price, name }).toString();
    // Redirects to the reservation page with query parameters
    window.location.href = `Reservation.html?${queryParams}`;
}

// Event listener for when the DOM content is fully loaded
document.addEventListener("DOMContentLoaded", function() {
    // Select the form element and add an event listener for the submit event
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        // Prevent the form from submitting the traditional way
        event.preventDefault();

        // Collect user input from the form
        const phone = document.querySelector('[name="phone"]').value;
        const fullName = document.querySelector('[name="Name"]').value;
        const date = document.querySelector('[name="date"]').value;
        const time = document.querySelector('[name="time"]').value;
        const days = parseInt(document.querySelector('[name="days"]').value);
        // Retrieve the price from the URL query parameters
        const price = parseInt(new URLSearchParams(window.location.search).get('price'));

        // Initialize the total price
        var totalPrice = price * days;

        // Apply discounts based on the number of days
        if (days === 1) {
            // No discount for a single day
            totalPrice = price;
        } else if (days === 2) {
            // Special discount formula for two days
            totalPrice = (price * 4) / 3;
        } else {
            // Another discount formula for more than two days
            totalPrice = (price * 5) / 4;
        }

        // Save the reservation data to localStorage
        localStorage.setItem('reservationData', JSON.stringify({
            name: new URLSearchParams(window.location.search).get('name'),
            phone: phone,
            fullName: fullName,
            date: date,
            time: time,
            days: days,
            totalPrice: totalPrice
        }));

        // Redirect to the bill summary page
        window.location.href = 'billSummary.html';
    });
});
