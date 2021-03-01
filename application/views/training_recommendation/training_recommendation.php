<body>

  <!-- Header Area wrapper Starts -->
  <header id="header-wrap">


    <!-- Team Section Start -->
    <section id="team" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-left">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">DSP</h2>
        </div>
    
        <!-- <div class="row">
        <div class="col ">
                <div class="btn-group float-right mb-3">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                        Select UBIS
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item" type="button">FU NITS : DIREKTORAT NETWORK IT & SOLUTION</button>
                        <button class="dropdown-item" type="button">FU NITS : DIVISI SERVICE OPERATION</button>
                        <button class="dropdown-item" type="button">CFU CONS : PT.TELKOM AKSES</button>
                        <button class="dropdown-item" type="button">FU NITS : DIVISI SERVICE & SOLUTION</button>
                        <button class="dropdown-item" type="button">FU NITS : DIVISI INFORMATION TECHNOLOGY</button>
                        <button class="dropdown-item" type="button">FU NITS : DIVISI PLANNING & DEPLOYMENT</button>
                    </div>
                </div>
            </div>
        </div> -->
        
        <div class="row">
          <!-- <div class="col-md-12 col-sm-12 mb-10"> -->
            <!-- <div class="col-md-2 float-right">
              <label for="changeFilter">Filter Ubis</label>
              <select class="form-control" id="changeFilterUbis" onchange="setSelectedUbis()">
                <option value="FU NITS : DIREKTORAT NETWORK IT & SOLUTION">FU NITS : DIREKTORAT NETWORK IT & SOLUTION</option>
                <option value="FU NITS : DIVISI SERVICE OPERATION">FU NITS : DIVISI SERVICE OPERATION</option>
                <option value="CFU CONS : PT. TELKOM AKSES">CFU CONS : PT. TELKOM AKSES</option>
                <option value="FU NITS : DIVISI SERVICE & SOLUTION">FU NITS : DIVISI SERVICE & SOLUTION</option>
                <option value="FU NITS : DIVISI INFORMATION TECHNOLOGY">FU NITS : DIVISI INFORMATION TECHNOLOGY</option>
                <option value="FU NITS : DIVISI PLANNING & DEPLOYMENT">FU NITS : DIVISI PLANNING & DEPLOYMENT</option>
              </select>
            </div> -->
            <!-- <div class="section-header ">
              <h4 class="section-title wow fadeInDown text-center" data-wow-delay="0.3s">Select UBIS :</h4>
            </div> -->

            <div class="container-fluid p-4 mb-4 text-center bg-white" id="changeFilterUbis" onchange="setSelectedUbis()" >
              <h6><b>Select Academy</b></h6>
              <hr>
              <div class="row">
                
                <a class="col-md-4" href="#" value="FU NITS : DIREKTORAT NETWORK IT & SOLUTION">NITS</a>
                <a class="col-md-4" href="#" value="FU NITS : DIVISI SERVICE OPERATION">CONSUMER</a>
                <a class="col-md-4" href="#" value="CFU CONS : PT. TELKOM AKSES">WS & INTERNATIONAL</a>
                <a class="col-md-4" href="#" value="FU NITS : DIVISI SERVICE & SOLUTION">ENTERPRISE</a>
                <a class="col-md-4" href="#" value="FU NITS : DIVISI INFORMATION TECHNOLOGY">DSP</a>
                <a class="col-md-4" href="#" value="FU NITS : DIVISI PLANNING & DEPLOYMENT">LEADERSHIP</a>
                <a class="col-md-4" href="#" value="FU NITS : DIVISI PLANNING & DEPLOYMENT">BUSINESS ENABLER</a>
              </div>  
            </div>

            <div class="container-fluid p-4 text-center bg-white" id="changeFilterUbis" onchange="setSelectedUbis()" >
              <h6><b>Select UBIS</b></h6>
              <hr>
              <div class="row">
                <a class="col-md-4" href="#" value="FU NITS : DIREKTORAT NETWORK IT & SOLUTION">FU NITS : DIREKTORAT NETWORK IT & SOLUTION</a>
                <a class="col-md-4" href="#" value="FU NITS : DIVISI SERVICE OPERATION">FU NITS : DIVISI SERVICE OPERATION</a>
                <a class="col-md-4" href="#" value="CFU CONS : PT. TELKOM AKSES">CFU CONS : PT. TELKOM AKSES</a>
                <a class="col-md-4" href="#" value="FU NITS : DIVISI SERVICE & SOLUTION">FU NITS : DIVISI SERVICE & SOLUTION</a>
                <a class="col-md-4" href="#" value="FU NITS : DIVISI INFORMATION TECHNOLOGY">FU NITS : DIVISI INFORMATION TECHNOLOGY</a>
                <a class="col-md-4" href="#" value="FU NITS : DIVISI PLANNING & DEPLOYMENT">FU NITS : DIVISI PLANNING & DEPLOYMENT</a>
              </div>  
            </div>

            <div class="container-fluid">
              
            </div>
            <!-- <div class="col-md-2 float-right">
              <label for="exampleFormControlSelect1">Filter Academy</label>
              <select class="form-control" id="changeFilterAcademy" onchange="setValueUbisByAcademy()">
                <option value="NITS">NITS</option>
                <option value="CONSUMER">CONSUMER</option>
                <option value="WS & INTERNATIONAL">WS & INTERNATIONAL</option>
                <option value="ENTERPRISE">ENTERPRISE</option>
                <option value="DSP">DSP</option>
                <option value="LEADERSHIP">LEADERSHIP</option>
                <option value="BUSINNESS ENABLER">BUSINNESS ENABLER</option>
              </select>
            </div> -->
            
            <!-- <div class="col-md-2 float-right">
              <label for="changeFilter">Filter Tahun</label>
              <select class="form-control" id="changeFilterTahun" onchange="getValueAcademyUbisYear()">
                <option value="2019">2019</option>
                <option value="2020">2020</option>
              </select>
            </div> -->
            <div id="myBtnContainer" class="col-md-9 mb-2 mt-3">
                <div class="float-left">
                    <button class="btn" onclick="#"> Training Recommendation</button>
                </div>
            </div>

            <div id="myBtnContainer" class="col-md-3 mb-3 mt-3">
                <div class="float-right">
                    <button class="btn active" onclick="filterSelection('all')"> 2019</button>
                    <button class="btn" onclick="filterSelection('cars')"> 2020</button>
                </div>
            </div>
          </div>

          <!-- <div class="col-md-12 col-sm-12 mb-5"> 
            <div class="col-md-2 float-right"> 
              <label for="changeFilter"></label> 
              <button class="form-control btn btn-primary" onclick="filterUbisPerformance()"> Submit </button>
            </div>
          </div> -->


      
            <!-- <div class="col-md-6">
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
            
           
            </div> -->
        
        
      
        
        
        
        <div class="row text-center">
            <!-- <div class="col-md-6 wow fadeInRight" data-wow-delay="0.2s">
                <div id="chart_div"></div>
            
            </div>
            <div class="col-md-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div id="piechart"></div>
            </div> -->

            
          

          <div class="col-lg-3 col-md-3 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInLeft" data-wow-delay="0.4s">

              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">On Request</a></h3>
                  
                </div>
                
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>

          <div class="col-lg-3 col-md-3 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInLeft" data-wow-delay="0.4s">

              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">On Request (Replacement)</a></h3>
                  
                </div>
                
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>

          <div class="col-lg-3 col-md-3 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInRight" data-wow-delay="0.4s">

              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">Planned</a></h3>
                  
                </div>
                
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>

          <div class="col-lg-3 col-md-3 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInRight" data-wow-delay="0.4s">

              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">Cancelleds</a></h3>
                  
                </div>
                
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>


          <div class="col-lg-6 col-md-6 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInLeft" data-wow-delay="0.4s">
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">Delivery Training by Academy</a></h3>                  
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
                  <h3><a href="#">Training Academy by Unit Bisnis</a></h3>
                </div>   
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>

          <div class="col-lg-12 col-md-12 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUp" data-wow-delay="0.8s">
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">Academy Learning Plan by Unit Bisnis</a></h3>               
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