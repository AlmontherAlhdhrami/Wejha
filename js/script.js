// Array for reservation statistics
var reservationData = [
    { month: "January", averageReservations: 50, lowestPeriod: "5th - 10th", highReservationPeriods: "Winter" },
    { month: "February", averageReservations: 60, lowestPeriod: "12th - 15th", highReservationPeriods: "Summer" },
    // Add more data as needed
];

// Array for monthly statistics
var monthlyData = [
    { month: "January", highestPeriod: "20th - 25th", lowestPeriod: "1st - 5th" },
    { month: "February", highestPeriod: "10th - 15th", lowestPeriod: "26th - 28th" },
    // Add more data as needed
];

// Function to generate table rows for reservation statistics
function generateReservationRows() {
    var rowsHTML = "";
    reservationData.forEach(function(stat) {
        rowsHTML += "<tr>";
        rowsHTML += "<td>" + stat.month + "</td>";
        rowsHTML += "<td>" + stat.averageReservations + "</td>";
        rowsHTML += "<td>" + stat.lowestPeriod + "</td>";
        rowsHTML += "<td>" + stat.highReservationPeriods + "</td>";
        rowsHTML += "</tr>";
    });
    return rowsHTML;
}

// Function to generate table rows for monthly statistics
function generateMonthlyRows() {
    var rowsHTML = "";
    monthlyData.forEach(function(stat) {
        rowsHTML += "<tr>";
        rowsHTML += "<td>" + stat.month + "</td>";
        rowsHTML += "<td>" + stat.highestPeriod + "</td>";
        rowsHTML += "<td>" + stat.lowestPeriod + "</td>";
        rowsHTML += "</tr>";
    });
    return rowsHTML;
}

// Function to display tables
function displayTables() {
    document.getElementById("reservationTable").getElementsByTagName("tbody")[0].innerHTML = generateReservationRows();
    document.getElementById("monthlyTable").getElementsByTagName("tbody")[0].innerHTML = generateMonthlyRows();
}

// Function to search for information
function search() {
    var searchInput = document.getElementById("searchInput").value.toLowerCase();
    var searchResults = [];

    // Search in reservation data
    reservationData.forEach(function(stat) {
        if (stat.month.toLowerCase().includes(searchInput) ||
            stat.averageReservations.toString().includes(searchInput) ||
            stat.lowestPeriod.toLowerCase().includes(searchInput) ||
            stat.highReservationPeriods.toLowerCase().includes(searchInput)) {
            searchResults.push(stat);
        }
    });

    // Search in monthly data
    monthlyData.forEach(function(stat) {
        if (stat.month.toLowerCase().includes(searchInput) ||
            stat.highestPeriod.toLowerCase().includes(searchInput) ||
            stat.lowestPeriod.toLowerCase().includes(searchInput)) {
            searchResults.push(stat);
        }
    });

    // Display search results
    displaySearchResults(searchResults);
}

// Function to display search results
function displaySearchResults(results) {
    var resultsHTML = "<h2>Search Results</h2>";
    if (results.length === 0) {
        resultsHTML += "<p>No results found.</p>";
    } else {
        resultsHTML += "<ul>";
        results.forEach(function(result) {
            resultsHTML += "<li>" + JSON.stringify(result) + "</li>";
        });
        resultsHTML += "</ul>";
    }
    document.getElementById("searchResults").innerHTML = resultsHTML;
}


