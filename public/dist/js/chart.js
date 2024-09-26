const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'line', // Change to 'bar', 'pie', etc., for different chart types
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'], // X-axis labels
        datasets: [
            {
                label: 'Sales',
                data: [65, 59, 80, 81, 56, 55, 40, 55, 84, 97, 25, 120], // Y-axis data for Sales
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 1,
                fill: true, // Fill area under the line
            },
            {
                label: 'Expenses',
                data: [50, 40, 70, 65, 60, 45, 30, 55, 60, 70, 50, 90], // Y-axis data for Expenses
                borderColor: 'rgba(255, 99, 132, 1)',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderWidth: 1,
                fill: true, // Fill area under the line
            },
            {
                label: 'Item NG',
                data: [50, 42, 52, 10, 67, 45, 78, 4, 9, 20, 11, 20], // Y-axis data for Expenses
                borderColor: 'rgba(255, 159, 64, 1)', // New border color
                backgroundColor: 'rgba(255, 159, 64, 0.2)', // New background color
                borderWidth: 1,
                fill: true, // Fill area under the line

            }
        ]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
