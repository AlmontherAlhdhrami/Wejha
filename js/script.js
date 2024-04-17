// Array for reservation eleistics
var reservationData = [
    { month: "January", averageReservations: 50, lowestPeriod: "5th - 10th", highReservationPeriods: "Winter" },
    { month: "February", averageReservations: 60, lowestPeriod: "12th - 15th", highReservationPeriods: "Summer" },
    // Add more data as needed
];

// Array for monthly eleistics
var monthlyData = [
    { month: "January", highestPeriod: "20th - 25th", lowestPeriod: "1st - 5th" },
    { month: "February", highestPeriod: "10th - 15th", lowestPeriod: "26th - 28th" },
    // Add more data as needed
];

// Function to generate table rows for reservation eleistics
function generateReservationRows() {
    var rowsHTML = "";
    reservationData.forEach(function(ele) {
        rowsHTML += "<tr>";
        rowsHTML += "<td>" + ele.month + "</td>";
        rowsHTML += "<td>" + ele.averageReservations + "</td>";
        rowsHTML += "<td>" + ele.lowestPeriod + "</td>";
        rowsHTML += "<td>" + ele.highReservationPeriods + "</td>";
        rowsHTML += "</tr>";
    });
    return rowsHTML;
}

// Function to generate table rows for monthly eleistics
function generateMonthlyRows() {
    var rowsHTML = "";
    monthlyData.forEach(function(ele) {
        rowsHTML += "<tr>";
        rowsHTML += "<td>" + ele.month + "</td>";
        rowsHTML += "<td>" + ele.highestPeriod + "</td>";
        rowsHTML += "<td>" + ele.lowestPeriod + "</td>";
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
    reservationData.forEach(function(ele) {
        if (ele.month.toLowerCase().includes(searchInput) ||
            ele.averageReservations.toString().includes(searchInput) ||
            ele.lowestPeriod.toLowerCase().includes(searchInput) ||
            ele.highReservationPeriods.toLowerCase().includes(searchInput)) {
            searchResults.push(ele);
        }
    });

    // Search in monthly data
    monthlyData.forEach(function(ele) {
        if (ele.month.toLowerCase().includes(searchInput) ||
            ele.highestPeriod.toLowerCase().includes(searchInput) ||
            ele.lowestPeriod.toLowerCase().includes(searchInput)) {
             
            searchResults.push(ele); 
              
        }

       
       
    });

    // Display search results
    displaySearchResults(searchResults);
}

// Function to display search results
function displaySearchResults(results) {
    var resultsHTML = "<h2>Search Results</h2>";
    if (results.length === 0) {
        alert("no data about this !");
        resultsHTML += "<p>No results found.</p>";
    } else {
        alert("exits data");
        resultsHTML += "<ul>";
        results.forEach(function(result) {
            resultsHTML += "<li>" + JSON.stringify(result) + "</li>";
        });
        resultsHTML += "</ul>";
    }
    document.getElementById("searchResults").innerHTML = resultsHTML;
}

 
