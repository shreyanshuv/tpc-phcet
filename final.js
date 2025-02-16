document.addEventListener('DOMContentLoaded', () => {
    const years = ['2019', '2020', '2021', '2022', '2023'];
    const growthData = [120, 150, 170, 200, 230];

    const ctx = document.getElementById('growthChart').getContext('2d');
    const growthChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: years,
            datasets: [{
                label: 'Student Placements',
                data: growthData,
                backgroundColor: 'rgba(0, 123, 255, 0.5)',
                borderColor: '#007bff',
                fill: true,
                tension: 0.4, // for smooth line curves
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            responsive: true
        }
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const companyNames = ['TCS', 'Wipro', 'Accenture', 'Cap gemini', 'Others'];
    const studentCounts = [25, 30, 10, 20, 15];

    const ctx = document.getElementById('placementChart').getContext('2d');
    const placementChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: companyNames,
            datasets: [{
                data: studentCounts,
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'],
            }]
        },
        options: {
            responsive: true,
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            const total = studentCounts.reduce((acc, count) => acc + count, 0);
                            const percentage = ((tooltipItem.raw / total) * 100).toFixed(2);
                            return `${tooltipItem.label}: ${percentage}% (${tooltipItem.raw} students)`;
                        }
                    }
                }
            }
        }
    });
});
