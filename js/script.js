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

// // Get the canvas element
// var canvas = document.getElementById('barChart');
// Chart.defaults.global.defaultFontColor = "white";
// // Create the bar chart
// var barChart = new Chart(canvas, {
//     type: 'bar',
//     data: {
//         labels: categories,
//         datasets: [{
//             label: 'Money',
//             data: values,
//             backgroundColor: 'rgba(0, 123, 255, 0.5)',
//             borderColor: 'rgba(0, 120, 255, 9)',
//             borderWidth: 1
//         }]
//     },
//     options: {
//         scales: {
//             y: {
//                 beginAtZero: true
//             }
//         },
//         responsive: true,
//         maintainAspectRatio: false
//     }
// });

        // Get the canvas element
        var canvas = document.getElementById('barChart');

        // Create the bar chart
        var barChart = new Chart(canvas, {
            type: 'bar',
            data: {
                labels: categories,
                datasets: [{
                    label: 'Values',
                    data: values,
                    backgroundColor: 'rgba(0, 123, 255, 0.5)',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                responsive: true,
                maintainAspectRatio: false
            }
        });