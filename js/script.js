let ctx = document.getElementById("myChart").getContext("2d");
let myChart = new Chart(ctx, {
  type: "line",
  data: {
    labels: [ 
      "10:00",
      "11:00",
      "12:00",
      "13:00",
      "14:00",
      "15:00",
      "16:00",
    ],
    datasets: [
      {
        label: "work load",
        data: [2, 9, 3, 17, 6, 3, 7],
        backgroundColor: "rgb(197, 197, 197,0.5)",
      },
      {
        label: "free hours",
        data: [2, 2, 5, 5, 2, 1, 10],
        backgroundColor: "rgb(245, 245, 245,0.7)",
      },
    ],
  },
});
var categories = ['Jan', 'Fab', 'Mar', 'Apr'];
var values = [25, 50, 75, 100];

 var ctr = document.getElementById("myChart2");
var myChart2 = new Chart(ctr, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Fab', 'Mar', 'Apr', 'Jun', 'Jul'],
        datasets: [
            {
                label: 'Savings',
                data: [105, 124, 78, 91, 62, 56],
                backgroundColor: ['rgba(255, 99, 132, 0.2)',
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
                borderWidth: 1
            }
        ]
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

