<body>
  <!-- Header Area wrapper Starts -->
  <header id="header-wrap">


    <!-- Team Section Start -->
    <section id="team" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-left">
          <h1 class="section-title wow fadeInDown" data-wow-delay="0.3s">Performance</h1>
        </div>
        
        <div class="row"> 
          <div class="col-md-6 ml-0 pl-0">
              <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Overview</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Performance</li>
              </ol>
              </nav>
          </div>
        </div>
    
        <!-- filter tahun -->
        <div class="row">
          <div id="myBtnContainer" class="col-md-12 mb-3 mt-3">
              <div class="float-right">
                  <button class="btn" onclick="filterSelection('#')"> 2019</button>
                  <button class="btn" onclick="filterSelection('#')"> 2020</button>
              </div>
          </div>
        </div>

        <!-- chart content -->
        <div class="row">

        <div class="col-sm-12 col-md-6 mb-4">
            <div class="card cs-card">
                <div class="card-body">
                  <div class="info-text text-center">
                    <h3>Delivered Training</h3>
                  </div>
                  <canvas id="delivTrainingManagement"> </canvas>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 mb-4">
            <div class="card cs-card">
                <div class="card-body">
                  <div class="info-text text-center">
                    <h3>Training (Planned)</h3>
                  </div>
                  <canvas id=""> </canvas>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 mb-4">
            <div class="card cs-card">
                <div class="card-body">
                  <div class="info-text text-center">
                    <h3>Learners</h3>
                  </div>
                  <canvas id=""> </canvas>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 mb-4">
            <div class="card cs-card">
                <div class="card-body">
                  <div class="info-text text-center">
                    <h3>Training by Category</h3>
                  </div>
                  <canvas id=""> </canvas>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 mb-4">
            <div class="card cs-card">
                <div class="card-body">
                  <div class="info-text text-center">
                    <h3>Training Academy (CFU)</h3>
                  </div>
                  <canvas id="trainingAcademyCfu"> </canvas>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 mb-4">
            <div class="card cs-card">
                <div class="card-body">
                  <div class="info-text text-center">
                    <h3>Training Academy (FU)</h3>
                  </div>
                  <canvas id="trainingAcademyFu"> </canvas>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 mb-4">
            <div class="card cs-card">
                <div class="card-body">
                  <div class="info-text text-center">
                    <h3>Training (Planned & Realization)</h3>
                  </div>
                  <canvas id=""> </canvas>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 mb-4">
            <div class="card cs-card">
                <div class="card-body">
                  <div class="info-text text-center">
                    <h3>Budget (Planned & Realization)</h3>
                  </div>
                  <canvas id=""> </canvas>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 mb-4">
            <div class="card cs-card">
                <div class="card-body">
                  <div class="info-text text-center">
                    <h3>Academy Learning Plan</h3>
                  </div>
                  <canvas id="academyLearning"> </canvas>
                </div>
            </div>
        </div>
        </div>
      </div>
    </section>
    <!-- Chart Section End -->
  </header>
  <!-- Header Area wrapper End -->

<!-- chart.js -->
<script>
var ctxTrainingAcademyFu = document.getElementById('trainingAcademyFu');
var chartTrainingAcademyFu = new Chart(ctxTrainingAcademyFu, {
    type: 'bar',
    data: {
    labels:  <?php echo json_encode($academyFu['ubis']) ?> ,
    datasets: [
      {
        label: 'Delivered',
        data: <?php echo json_encode($academyFu['delivered']) ?>,
        backgroundColor: '#ffa36c',
        borderColor: '#ffa36c',
        stack: "Ubis",
      },
      {
        label: 'Non Delivered',
        data: <?php echo json_encode($academyFu['nondelivered']) ?>,
        backgroundColor: '#d54062',
        borderColor:  '#d54062',
        stack: "Ubis",
      }
      
    ]
  },
  options: {
    scales: {
      xAxes: [{ stacked: true }],
      yAxes: [{ stacked: true, ticks: {beginAtZero: true }}]
    },
    title: {
        display: true,
        text: 'Training Academy - FU',
        fontSize: 18,
        fontColor: '#000'
    }
  }

});

function updateTrainingAcademyAcademyFu(data){
  chartTrainingAcademyFu.data.labels = data.ubis
  chartTrainingAcademyFu.data.datasets[0].data = data.delivered;
  chartTrainingAcademyFu.data.datasets[1].data = data.nondelivered;
  chartTrainingAcademyFu.update();
}
</script>

<script>

  var dataDelivTraining = {"delivery":[4,126]}
  console.log(dataDelivTraining.delivery);  

  var ctxDelivTrainingManagement = document.getElementById('delivTrainingManagement');
  var chartDelivTrainingManagement = new Chart(ctxDelivTrainingManagement, {
     type: 'doughnut',
     data: { 

     labels:  ["Delivered Training", "Un-Delivered Training"],
     datasets: [
       {
         backgroundColor: ["#120078", "#9d0191"],
         data: dataDelivTraining.delivery,
         borderWidth:1,
         borderColor:'#777',
         hoverBorderWidth:2,
         hoverBorderColor:'#000'
       },
     ]
   },
   options: {
    title: {
        display: true,
        text: 'Delivery Training',
        fontSize: 18,
        fontColor: '#000'
    }
  }
 });


 function updateDelivTraining(data){
   chartDelivTrainingManagement.data.datasets[0].data = data.delivery;
   chartDelivTrainingManagement.update();
 }

</script>

  <script>
    var ctxTrainingAcademyCfu = document.getElementById('trainingAcademyCfu');
    var chartTrainingAcademyCfu = new Chart(ctxTrainingAcademyCfu, {
      type: 'bar',
      data: {
        labels: <?php echo json_encode($academyCfu['ubis']) ?>,
        datasets: [{
            label: 'On Request (New)',
            data: <?php echo json_encode($academyCfu['requestnew']) ?>,
            backgroundColor: '#46D282',
            stack: "Ubis",
          },
          {
            label: 'On Request (Replacement)',
            data: <?php echo json_encode($academyCfu['replacement']) ?>,
            backgroundColor: '#FADC71',
            stack: "Ubis",
          },
          {
            label: 'Planned',
            data: <?php echo json_encode($academyCfu['planned']) ?>,
            backgroundColor: '#FADC71',
            stack: "Ubis",
          },
          {
            label: 'Cancelled',
            data: <?php echo json_encode($academyCfu['cancelled']) ?>,
            backgroundColor: '#FADC71',
            stack: "Ubis",
          }

        ]
      },
      options: {
        scales: {
          xAxes: [{
            stacked: true
          }],
          yAxes: [{
            stacked: true,
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }

    });

    function updateTrainingAcademyAcademyCFu(data) {
      chartTrainingAcademyCfu.data.labels = data.ubis
      chartTrainingAcademyCfu.data.datasets[0].data = data.requestnew;
      chartTrainingAcademyCfu.data.datasets[1].data = data.replacement;
      chartTrainingAcademyCfu.data.datasets[2].data = data.planned;
      chartTrainingAcademyCfu.data.datasets[3].data = data.cancelled;
      chartTrainingAcademyCfu.update();
    }
  </script>


<script>

var ctxAcademyLearning = document.getElementById('academyLearning');
var chartAcademyLearning = new Chart(ctxAcademyLearning, {
    type: 'horizontalBar',
    data: {
    labels:  ["BUSINNESS ENABLER","CONSUMER","DSP","ENTERPRISE","LEADERSHIP","MOBILE","NITS","WS & INTERNATIONAL"] ,
    datasets: [
      {
        label: 'On Request (New)',
        data: ["94","35","72","102","13","8","81","63"],
        backgroundColor: '#726a95',
        stack: "Ubis",
      },

      {
        label: 'On Request (Replacement)',
        data: ["58","8","48","14","0","0","6","2"],
        backgroundColor: '#709fb0',
        stack: "Ubis",
      },

      {
        label: 'Planned',
        data: ["0","0","0","9","0","0","0","0"],
        backgroundColor: '#a0c1b8',
        stack: "Ubis",
      },

      {
        label: 'Cancelled',
        data: ["0","0","10","0","0","0","0","0"],
        backgroundColor: '#f4ebc1',
        stack: "Ubis",
      }
      
    ]
  },
  options: {
    scales: {
      xAxes: [{ stacked: true }],
      yAxes: [{ stacked: true, ticks: {beginAtZero: true }}]
    },
    title: {
        display: true,
        text: 'Academy Learning Plan',
        fontSize: 18,
        fontColor: '#000'
    }
  } 

});

function updateTrainingAcademyLearningPlan(data){
  chartAcademyLearning.data.labels = data.ubis
  chartAcademyLearning.data.datasets[0].data = data.tes1;
  chartAcademyLearning.data.datasets[1].data = data.tes2;
  chartAcademyLearning.data.datasets[2].data = data.tes3;
  chartAcademyLearning.data.datasets[3].data = data.tes4;
  chartAcademyLearning.update();
}

</script>

</body>