// Constructor function for ReservationStatistics object
function ReservationStatistics(month, averageReservations, lowestPeriod, highReservationPeriods) {
    this.month = month;
    this.averageReservations = averageReservations;
    this.lowestPeriod = lowestPeriod;
    this.highReservationPeriods = highReservationPeriods;
}

// Constructor function for MonthlyStatistics object
function MonthlyStatistics(month, highestPeriod, lowestPeriod) {
    this.month = month;
    this.highestPeriod = highestPeriod;
    this.lowestPeriod = lowestPeriod;
}

//  data for ReservationStatistics
var reservationData = [
    new ReservationStatistics("January", 50, "5th - 10th", "Winter"),
    new ReservationStatistics("February", 60, "12th - 15th", "Summer"),
  
];

// data for MonthlyStatistics
var monthlyData = [
    new MonthlyStatistics("January", "20th - 25th", "1st - 5th"),
    new MonthlyStatistics("February", "10th - 15th", "26th - 28th"),
    // Add more data as needed
];

// Function to generate HTML table from ReservationStatistics data
function generateReservationTable() {
    var tableHTML = "<h2>Reservation Statistics</h2><table class='table table-bordered'><thead><tr><th>Month</th><th>Average Reservations</th><th>Lowest Reservation Period</th><th>High Reservation Periods</th></tr></thead><tbody>";
    
    reservationData.forEach(function(ele) {
        tableHTML += "<tr>";
        tableHTML += "<td>" + ele.month + "</td>";
        tableHTML += "<td>" + ele.averageReservations + "</td>";
        tableHTML += "<td>" + ele.lowestPeriod + "</td>";
        tableHTML += "<td>" + ele.highReservationPeriods + "</td>";
        tableHTML += "</tr>";
    });
    
    tableHTML += "</tbody></table>";
    
    document.getElementById("reservationTable").innerHTML = tableHTML;
}

// Function to generate HTML table from MonthlyStatistics data
function generateMonthlyTable() {
    var tableHTML = "<h2>Monthly Statistics</h2><table class='table table-bordered'><thead><tr><th>Month</th><th>Highest Period</th><th>Lowest Period</th></tr></thead><tbody>";
    
    monthlyData.forEach(function(ele) {
        tableHTML += "<tr>";
        tableHTML += "<td>" + ele.month + "</td>";
        tableHTML += "<td>" + ele.highestPeriod + "</td>";
        tableHTML += "<td>" + ele.lowestPeriod + "</td>";
        tableHTML += "</tr>";
    });
    
    tableHTML += "</tbody></table>";
    
    document.getElementById("monthlyTable").innerHTML = tableHTML;
}
function reset(){
    document.getElementById("monthlyTable").innerHTML =' ';
    document.getElementById("reservationTable").innerHTML =' ';
    
}