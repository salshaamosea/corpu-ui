<body>

  <!-- Header Area wrapper Starts -->
  <header id="header-wrap">


    <!-- Team Section Start -->
    <section id="team" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-left">
          <h1 class="section-title wow fadeInDown" data-wow-delay="0.3s">Training Summary</h1>
        </div>

        <div class="row"> 
          <div class="col-md-6 ml-0 pl-0">
              <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Overview</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Training Summary</li>
              </ol>
              </nav>
          </div>
        </div>
          

        <!-- chart content -->
        <div class="row">
          <div class="col-md-12 col-sm-12">
          
          <form role="form" method="post" action="http://corpu-dacs-web-dev.vsan-apps.playcourt.id/pages/trainingSummary">
            <div class="col-sm-4 col-md-4 float-left">
              <select class="form-control" id="filterTahun" name="tahun_training">
                <option value="" selected="selected">Select Year</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
              </select>
            </div>

            <div class="col-sm-4 col-md-4 float-left">
              <select class="form-control" id="filterTipe" name="nama_tipe">
                <option value="" selected="selected">Select Type</option>
                <option class="Reading Kampiun" value="Reading Kampiun">Reading Kampiun</option>
                <option class="Reading Books" value="Reading Books">Reading Books</option>
                <option class="Video Learning" value="Video Learning">Video Learning</option>
                <option class="External Resource" value="External Resource">External Resource</option>
                <option class="E-learning" value="E-learning">E-learning</option>
                <option class="Certification" value="Certification">Certification</option>
                <option class="Classroom" value="Classroom">Classroom</option>
                <option class="Virtual Classroom" value="Virtual Classroom">Virtual Classroom</option>
                <option class="TOT" value="TOT">TOT</option>
                <option class="Built in Training" value="Built in Training">Built in Training</option>
                <option class="Coaching" value="Coaching">Coaching</option>
                <option class="Mentoring" value="Mentoring">Mentoring</option>
                <option class="Job Assignment" value="Job Assignment">Job Assignment</option>
                <option class="GTP" value="GTP">GTP</option>
                <option class="Sharing Session" value="Sharing Session">Sharing Session</option>
                <option class="COP" value="COP">COP</option>
                <option class="Online Forum" value="Online Forum">Online Forum</option>
                <option class="Blog" value="Blog">Blog</option>
                <option class="Wiki" value="Wiki">Wiki</option>
                <option class="Submit Kampiun" value="Submit Kampiun">Submit Kampiun</option>
                <option class="Benchmark" value="Benchmark">Benchmark</option>
                <option class="COP (Business Recommendation)" value="COP (Business Recommendation)">COP (Business Recommendation)</option>
                <option class="Culture Meeting" value="Culture Meeting">Culture Meeting</option>
                <option class="Lomba Dinas" value="Lomba Dinas">Lomba Dinas</option>
                <option class="Pengembangan Materi" value="Pengembangan Materi">Pengembangan Materi</option>
                <option class="Project" value="Project">Project</option>
                <option class="Purnabhakti" value="Purnabhakti">Purnabhakti</option>
                <option class="Seminar" value="Seminar">Seminar</option>
                <option class="Bedah Buku" value="Bedah Buku">Bedah Buku</option>
                <option class="Spiritual Capital" value="Spiritual Capital">Spiritual Capital</option>
                <option class="Test Online" value="Test Online">Test Online</option>
                <option class="Workshop" value="Workshop">Workshop</option>
                <option class="Full ILC" value="Full ILC">Full ILC</option>
              </select>
            </div>

            <div class="col-sm-2 col-md-2 float-left">
              <button class="form-control btn-primary">Submit</button>
            </div>
          
            
          </form>


          </div>
          

          <div  class="col-lg-12 col-md-12 col-xs-12">
            <div class="team-item wow fadeInLeft" data-wow-delay="0.2s">
              <div class="contetn">
                <div class="info-text text-center">
                  <h3><a href="#">Training Event Summary</a></h3>
                </div>
                <!-- masukin chart -->
                <!-- <div id="piechart"></div> -->
                <!-- <canvas id="chart-bar-events" class="chartjs-render-monitor card"></canvas> -->
              </div>
            </div>
          </div>

          <div  class="col-lg-12 col-md-12 col-xs-12">
            <div class="team-item wow fadeInLeft" data-wow-delay="0.2s">
              <div class="contetn">
                <div class="info-text text-center">
                  <h3><a href="#">Training Learners Summary</a></h3>
                </div>
                <!-- masukin chart -->
                <!-- <div id="piechart"></div> -->
                <!-- <canvas id="chart-bar-learners" class="chartjs-render-monitor card"></canvas> -->
              </div>
            </div>
          </div>

          <div  class="col-lg-12 col-md-12 col-xs-12">
            <div class="team-item wow fadeInLeft" data-wow-delay="0.2s">
              <div class="contetn">
                <div class="info-text text-center">
                  <h3><a href="#">Training Budgets Summary</a></h3>
                </div>
                <!-- masukin chart -->
                <!-- <div id="piechart"></div> -->
                <!-- <canvas id="chart-bar-budgets" class="chartjs-render-monitor card"></canvas> -->
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- Chart Section End -->
  </header>
  <!-- Header Area wrapper End -->