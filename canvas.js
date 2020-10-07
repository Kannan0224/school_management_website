
                var ctxB = document.getElementById("mycanvas").getContext('2d');
                var myBarChart = new Chart(ctxB, {
                type: 'bar',
                data: {
                labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                datasets: [{
                label: '# of StudentPresent',
                data: [1024, 709, 1100, 995, 580, 870],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 2
                }]
                },
                options: {
                scales: {
                yAxes: [{
                ticks: {
                beginAtZero: true
                }
                }]
                }
                }
                });
                var ctxB = document.getElementById("mycanvas1").getContext('2d');
                var myBarChart = new Chart(ctxB, {
                type: 'bar',
                data: {
                labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                datasets: [{
                label: '# of Teacher Present',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 2
                }]
                },
                options: {
                scales: {
                yAxes: [{
                ticks: {
                beginAtZero: true
                }
                }]
                }
                }
                });