<body>

  <!-- Header Area wrapper Starts -->
  <header id="header-wrap">


    <!-- Team Section Start -->
    <section id="team" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-left">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Business Enabler</h2>
        </div>
    
        <div class="row">
        <div class="col ">
                <div class="btn-group float-right mb-3">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                        Select UBIS
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item" type="button">UBIS 1</button>
                        <button class="dropdown-item" type="button">UBIS 2</button>
                        <button class="dropdown-item" type="button">UBIS 3</button>
                        <button class="dropdown-item" type="button">UBIS 4</button>
                        <button class="dropdown-item" type="button">UBIS 5</button>
                        <button class="dropdown-item" type="button">UBIS 6</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row"> 
            <div class="col-md-6">
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Details</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Academy 5</li>
                </ol>
                </nav>
            </div>
            <div id="myBtnContainer" class="col-md-3 mb-3 ">
                <div class="float-right">
                    <button class="btn active" onclick="filterSelection('all')"> 2019</button>
                    <button class="btn" onclick="filterSelection('cars')"> 2020</button>
                </div>
                
            </div>
            <div id="myBtnContainer" class="col-md-3 mb-3 ">
            <div class="float-right">
                <button type="button" class="btn btn-success" data-display="static">
                    Submit
                </button>
            </div>    
            
           
            </div>
        </div>
        
      
        
        
        
        <div class="row">
            <div class="col-md-6 wow fadeInRight" data-wow-delay="0.2s">
                <div id="chart_div"></div>
            
            </div>
            <div class="col-md-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div id="piechart"></div>
            </div>

            <div  class="col-lg-12 col-md-12 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInRight" data-wow-delay="0.2s">

              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">DATA TRAINING DELIVERED</a></h3>
                  
                </div>
                <!-- <div id="piechart"></div> -->
                <!--  -->
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-lg-12 col-md-12 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInRight" data-wow-delay="0.4s">

              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">DATA TRAINING PLANED/REALIZATION</a></h3>
                  
                </div>
                
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInRight" data-wow-delay="0.6s">
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">DATA BUDGET PLANED/REALIZATION</a></h3>
                  
                </div>
               
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInRight" data-wow-delay="0.8s">
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">DATA NET PROMOTOR SCORE PELATIHAN</a></h3>
               
                </div>
                
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
        </div>
      </div>
    </section>
    <!-- Team Section End -->

  </header>
  <!-- Header Area wrapper End -->

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Work', 8],
  ['Eat', 2],
  ['TV', 4],
  ['Gym', 2],
  ['Sleep', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Data Delivery', 'width':525, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</body>