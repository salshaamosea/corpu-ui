<body>

  <!-- Header Area wrapper Starts -->
  <header id="header-wrap">


    <!-- Team Section Start -->
    <section id="team" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-left">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">DSP</h2>
        </div>

        <div class="row">

        	<div class="col-md-12 col-sm-12 mb-10">
        		<div class="col-md-2 float-right">
        			<label for="changeFilter">Filter Ubis</label>
        			<select class="form-control" id="changeFilterUbis" onchange="setSelectedUbis()">
                <option value="">-</option>
        				<option value="FU NITS : DIREKTORAT NETWORK IT & SOLUTION">FU NITS : DIREKTORAT NETWORK IT & SOLUTION</option>
        				<option value="FU NITS : DIVISI SERVICE OPERATION">FU NITS : DIVISI SERVICE OPERATION</option>
        				<option value="CFU CONS : PT. TELKOM AKSES">CFU CONS : PT. TELKOM AKSES</option>
        				<option value="FU NITS : DIVISI SERVICE & SOLUTION">FU NITS : DIVISI SERVICE & SOLUTION</option>
        				<option value="FU NITS : DIVISI INFORMATION TECHNOLOGY">FU NITS : DIVISI INFORMATION TECHNOLOGY</option>
        				<option value="FU NITS : DIVISI PLANNING & DEPLOYMENT">FU NITS : DIVISI PLANNING & DEPLOYMENT</option>
        			</select>
        		</div>

        		<div class="col-md-2 float-right">
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
        		</div>
        		<div class="col-md-2 float-right">
        			<label for="changeFilter">Filter Tahun</label>
        			<select class="form-control" id="changeFilterTahun" onchange="getValueAcademyUbisYear()">
        				<option value="2019">2019</option>
        				<option value="2020">2020</option>
        			</select>
        		</div>
        	</div>

        	<div class="col-md-12 col-sm-12 mb-5">
        		<div class="col-md-2 float-right">
        			<label for="changeFilter"></label>
        			<button class="form-control btn-primary" onclick="filterUbisPerformance()"> Submit </button>
        		</div>
        	</div>


        <!-- Chart Content -->
        <div class="row text-center">
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