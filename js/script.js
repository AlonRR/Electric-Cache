window.onload = function () {

  $(document).ready(function () {
    // Handle image click event
    $('.img-thumbnail').click(function () {
      const imagePath = $(this).attr('src');
      $('#lightbox-img').attr('src', imagePath);
    });

    // Clear image source when the modal is closed
    $('#lightboxModal').on('hidden.bs.modal', function () {
      $('#lightbox-img').attr('src', '');
    });
  });


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


  // Get the context of the new chart canvas
  var ctxnew = document.getElementById('newChart').getContext('2d');

  // Set the chart data and options
  var chartData = {
    labels: ['Label 1', 'Label 2', 'Label 3'],  // Replace with your data labels
    datasets: [
      {
        label: 'Dataset 1',  // Replace with your dataset label
        data: [10, 20, 30],  // Replace with your dataset values
        backgroundColor: 'rgba(75, 192, 192, 0.2)',  // Replace with desired color
        borderColor: 'rgba(75, 192, 192, 1)',  // Replace with desired color
        borderWidth: 1
      }
    ]
  };

  var chartOptions = {
    // Set chart options as needed
  };

  // Create and render the new line chart
  new Chart(ctxnew, {
    type: 'line',
    data: chartData,
    options: chartOptions
  })


};


document.addEventListener('DOMContentLoaded', function () {
  document.getElementById('edit-btn').addEventListener('click', function () {
    document.getElementById('viewMode').style.display = 'block';
    document.getElementById('editMode').style.display = 'block';
  });

  document.getElementById('save-btn').addEventListener('click', function () {
    document.getElementById('editMode').style.display = 'none';
    document.getElementById('viewMode').style.display = 'block';
  });
});

// const submit = document.querySelector('#sumbmit');
// const form = document.querySelector('#form');


// submit.addEventListener('click', (e) => {
//   e.preventDefault();
//   saveName();

// });

// const saveName = async () => {
//   try {
//     let response = await fetch('action.php', {
//       method: 'POST',
//       body: new FormData(form),
//     });
//     const result = await response.json();
//     console.log(result);
//   } catch (erroe) {
//     console.log(error);
//   }
// };





import a from "./locations.json" assert { type: "json" };

document.addEventListener("DOMContentLoaded", function () {

  const locations = a.locations;
  const container = document.getElementById('locationsContainer');
  
  locations.forEach(location => {
    const div = document.createElement('div');
    console.log(div);

    // console.log(div);
    div.className = "TLVbusDepot div1";
    div.innerHTML = `
    <h3>${location.name}</h3>
    <h4>&nbsp;&nbsp;${location.address.number} ${location.address.streetName}, ${location.address.city}, ${location.address.state}
    <i class="bi bi-sign-turn-slight-right"></i>
    </h4>`;
    
    container.appendChild(div);

  });


});

// <!-- <div class="TLVbusDepot div1">&nbsp;

//                                 <h3>&nbsp;TLV bus depot</h3>
//                                 <h4>&nbsp;&nbsp;23 HaDag, Tel-Aviv, Israel
//                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
//                                         class="bi bi-sign-turn-slight-right-fill" viewBox="0 0 16 16">
//                                         <path
//                                             d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435Zm1.385 6.547.8 1.386a.25.25 0 0 0 .451-.039l1.06-2.882a.25.25 0 0 0-.192-.333l-3.026-.523a.25.25 0 0 0-.26.371l.667 1.154-.621.373A2.5 2.5 0 0 0 6 8.632V11h1V8.632a1.5 1.5 0 0 1 .728-1.286l.607-.364Z" />
//                                     </svg>
//                                 </h4>

//                             </div> -->