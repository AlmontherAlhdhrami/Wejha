document.addEventListener("DOMContentLoaded", function() {
    // Retrieve the reservation data from localStorage
    const reservationData = JSON.parse(localStorage.getItem('reservationData'));

    if (reservationData) {
        const detailsElement = document.getElementById('billDetails');
        detailsElement.innerHTML = `
            <p>resrevation in : ${reservationData.name}</p>
            <p>Name: ${reservationData.fullName}</p>
            <p>Phone: ${reservationData.phone}</p>
            <p>Date: ${reservationData.date}</p>
            <p>Time: ${reservationData.time}</p>
            <p>Days: ${reservationData.days}</p>
            <p>Total Price: ${reservationData.totalPrice} R.O</p>
        `;
    } else {
        // Handle the case where there is no reservation data
        document.getElementById('billDetails').textContent = 'No reservation data found.';
    }
});
