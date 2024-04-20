let selectedPrice = 0;
let selectedCaravan = '';

function redirectToReservation(element) {
    const price = element.dataset.price;
    const name = element.dataset.name;
    const queryParams = new URLSearchParams({ price, name }).toString();
    window.location.href = `Reservation.html?${queryParams}`;  // Redirects to the reservation page with query parameters
}

document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting traditionally

        const phone = document.querySelector('[name="phone"]').value;
        const fullName = document.querySelector('[name="Name"]').value;
        const date = document.querySelector('[name="date"]').value;
        const time = document.querySelector('[name="time"]').value;
        const days = parseInt(document.querySelector('[name="days"]').value);
        const price = parseInt(new URLSearchParams(window.location.search).get('price'));

        const totalPrice = price * days;

        // Save the data to localStorage
        localStorage.setItem('reservationData', JSON.stringify({
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
