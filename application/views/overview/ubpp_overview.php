<body>

  <!-- Header Area wrapper Starts -->
  <header id="header-wrap">


    <!-- Team Section Start -->
    <section id="team" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-left">
          <h5 class="section-title wow fadeInDown" data-wow-delay="0.3s">UBPP</h5>
        </div>

        <div class="row"> 
          <div class="col-md-6 ml-0 pl-0">
              <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Overview</a></li>
                  <li class="breadcrumb-item active" aria-current="page">UBPP</li>
              </ol>
              </nav>
          </div>
        </div>
    
        <!-- filter tahun -->
        <div class="row">
          <div id="myBtnContainer" for="changeFilter" class="col-md-12 mb-3 mt-3">  
              <div class="float-right">
                  <button class="btn" id="changeFilter" onchange="filter()"> 2019</button>
                  <button class="btn" id="changeFilter" onchange="filter()"> 2020</button>
              </div>
          </div>
        </div>

        <!-- chart content -->
        <div class="row">
          
        <div class="col-sm-12 col-md-4 mb-4">
            <div class="card cs-card">
                <div class="card-body ">
                    <h5 class="info-text text-center cs-title">Avg UBPP Total</h5>
                    <hr class="cs-hr-green">
                    <h5 class="text-center mt-4" id="avgTotal">78.0814117647</h5>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 mb-4">
            <div class="card cs-card">
                <div class="card-body ">
                    <h5 class="info-text text-center cs-title">Avg UBPP Instruktur</h5>
                    <hr class="cs-hr-red">
                    <h5 class="text-center mt-4" id="avgInstrultur">79.560000</h5>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 mb-4">
            <div class="card cs-card">
                <div class="card-body ">
                    <h5 class="info-text text-center cs-title">Avg UBPP Penyelenggara</h5>
                    <hr class="cs-hr-green">
                    <h5 class="text-center mt-4" id="avgPenyelenggara">77.0570000000</h5>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 mb-4">
            <div class="card cs-card">
                <div class="card-body">
                  <div class="info-text text-center">
                    <h3>NPS UBPP Penyelenggara</h3>
                  </div>
                  <canvas id="piechart"> </canvas>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 mb-4">
            <div class="card cs-card">
                <div class="card-body">
                  <div class="info-text text-center">
                    <h3>UBPP Penyelenggara</h3>
                  </div>
                  <canvas id=""> </canvas>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 mb-4">
            <div class="card cs-card">
                <div class="card-body">
                  <div class="info-text text-center">
                    <h3>Nilai UBPP</h3>
                  </div>
                  <canvas id="nilaiUbpp"> </canvas>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 mb-4">
            <div class="card cs-card">
                <div class="card-body">
                  <div class="info-text text-center">
                    <h3>Evaluasi Sarana</h3>
                  </div>
                  <canvas id="evaluasiSarana"> </canvas>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 mb-4">
            <div class="card cs-card">
                <div class="card-body">
                  <div class="info-text text-center">
                    <h3>Evaluasi Instruktur</h3>
                  </div>
                  <canvas id="evaluasiInstruktur"> </canvas>
                </div>
            </div>
        </div>

     
      


        </div>
      </div>
    </section>
    <!-- Chart Section End -->
  </header>
  <!-- Header Area wrapper End -->

  <script>
var ctxUbpp = document.getElementById('nilaiUbpp');
var chartUbpp = new Chart(ctxUbpp, {
    type: 'bar',
    data: {
    labels:  ["BUSINNESS ENABLER","CONSUMER","DSP","ENTERPRISE","LEADERSHIP","NITS","WS & INTERNATIONAL"] ,
    datasets: [
      {
        label: 'Avg UBPP Instruktur',
        data: ["85.000000","78.332857","93.890000","87.750000","89.732857","90.000000","88.777143"],
        backgroundColor: '#0278ae',
        hoverBorderWidth: 3,
        stack: "Instruktur",
      },
      
      {
        label: 'Avg UBPP Instruktur keseluruhan',
        data: ["90.000000","90.000000","90.000000","90.000000","90.000000","90.000000","90.000000"],
        // backgroundColor: 'transparent',
        backgroundColor: '#51adcf',
        // borderWidth: 1,
        hoverBorderWidth: 3,
        stack: "InstrukturKeseluruhan",
        
      },

      {
        label: 'Avg UBPP Penyelenggara',
        data: ["79.630000","69.850000","72.800000","78.662000","78.863000","72.793000","67.038000"],
        backgroundColor: '#e40017',
        hoverBorderWidth: 3,
        stack: "Penyelenggara",
      },

      {
        label: 'Avg UBPP Penyelenggara keseluruhan',
        data: ["72.793000","72.793000","72.793000","72.793000","72.793000","72.793000","72.793000"],
        // backgroundColor: 'transparent',
        backgroundColor: '#e58a8a',
        // borderWidth: 1,
        hoverBorderWidth: 3,
        stack: "PenyelenggaraKeseluruhan",
      }
    ]
    
  },
  options: {
    scales: {
      xAxes: [{ stacked: true }],
      yAxes: [{ stacked: false, ticks: {beginAtZero: true }}]
    },
    title: {
        display: true,
        text: 'Nilai UBPP',
        fontSize: 18,
        fontColor: '#000'

    }
  }

});

function updateNilaiUbpp(data){
  chartUbpp.data.labels = data.academy
  chartUbpp.data.datasets[0].data = data.avgInstruktur;
  chartUbpp.data.datasets[1].data = data.avgPenyelenggara;
  chartUbpp.data.datasets[2].data = data.allAvgInstruktur;
  chartUbpp.data.datasets[3].data = data.allAvgAkademik;
  chartUbpp.update();
}
</script>

<script>
var ctxEvaluasiSarana = document.getElementById('evaluasiSarana');
var chartEvaluasiSarana = new Chart(ctxEvaluasiSarana, {
    type: 'bar',
    data: {
    labels:  ["BUSINNESS ENABLER","NITS"]  ,
    datasets: [
      {
        label: 'Avg UBPP Sarana per Akademi',
        data: ["80.770000","88.810000"],
        backgroundColor: '#6a2c70',
        stack: "Sarana per Akademi",
        hoverBorderWidth:2,
         hoverBorderColor:'#000'
      },

      {
        label: 'Avg UBPP Sarana keseluruhan',
        data: ["86.800000","86.800000"],
        backgroundColor: '#b83b5e',
        borderWidth: 1,
        stack: "Sarana Keseluruhan",
        hoverBorderWidth:2,
         hoverBorderColor:'#000'
      },
    ]
  },
  options: {
    scales: {
      xAxes: [{ stacked: false, ticks: {min: 0 } }],
      yAxes: [{ stacked: true}]
    },
    title: {
        display: true,
        text: 'Evaluasi Sarana',
        fontSize: 18,
        fontColor: '#000'
    }
  }

});

function updateEvaluasiSarana(data){
    chartEvaluasiSarana.data.labels = data.academy
    chartEvaluasiSarana.data.datasets[0].data = data.n_value;
    chartEvaluasiSarana.data.datasets[1].data = data.avg;
    chartEvaluasiSarana.update()
}
</script>



<script>
var ctxEvaluasiInstruktur = document.getElementById('evaluasiInstruktur');
var chartEvaluasiInstruktur = new Chart(ctxEvaluasiInstruktur, {
    type: 'horizontalBar',
    data: {
    labels:  ["BUSINNESS ENABLER","NITS"] ,
    datasets: [
      {
        label: 'Avg UBPP Instruktur',
        data: ["87.745000","79.560000"],
        backgroundColor: '#5F4B8BFF',
        stack: "Instruktur",
      },

      {
        label: 'Avg UBPP Instruktur keseluruhan',
        data: ["81.898571","81.898571"],
        backgroundColor: '#E69A8DFF',
        borderWidth: 1,
        stack: "Instruktur Keseluruhan",
      },
    ]
  },
  options: {
    scales: {
      xAxes: [{ stacked: false, ticks: {min: 0 } }],
      yAxes: [{ stacked: true}]
    },
    title: {
        display: true,
        text: 'Evaluasi Instruktur',
        fontSize: 18,
        fontColor: '#000'
    }
  }

});


function updateEvaluasiInstruktur(data){
    chartEvaluasiInstruktur.data.labels = data.academy
    chartEvaluasiInstruktur.data.datasets[0].data = data.n_value;
    chartEvaluasiInstruktur.data.datasets[1].data = data.avg;
    chartEvaluasiInstruktur.update();
}
</script>


<script>
    function filter(){
        
        var x = document.getElementById("changeFilter").value;
        
        $.ajax({
        url: "http://192.168.64.3/corpu-dacs/pages/Ubpp/filterByYear",
        method: 'post',
        data: {'tahun':x},
        // async: false,
        beforeSend: function(){
            $("#loader").show();
        },
        complete: function(){
            $("#loader").hide();
        },
        success: function(data3){
            $('#changeNvalueInstruktur').val('n_cs');
            $('#changeNvalue').val('n_akom');
             var obj = JSON.parse(data3)
             console.log(obj)
             updateNilaiUbpp(obj.nama_academy)
            //  updateUbppInstruktur(obj.ubppInstrukturCs)
            //  updateUbppInstrukturCulture(obj.ubppInstrukturCulture)
            //  updateUbppInstrukturKom(obj.ubppInstrukturKom)
            //  updateUbppInstrukturMetode(obj.ubppInstrukturMetode)
            //  updateUbppInstrukturPemahaman(obj.ubppInstrukturPemahaman)
            //  updateUbppInstrukturProses(obj.ubppInstrukturProses)
            //  updateUbppInstrukturTimeMan(obj.ubppInstrukturTimeMan)
            //  updateUbppSarana(obj.ubppSarana)
            //  updateUbppSaranaAkom(obj.ubppSaranaAkom)
            //  updateUbppSaranaKafe(obj.ubppSaranaKafe)
            //  updateUbppSaranaLaborat(obj.ubppSaranaLaborat)
            //  updateUbppSaranaMateri(obj.ubppSaranaMater)
            //  updateUbppSaranaCes(obj.ubppSarananNCes)
            //  updateUbppSaranaCs(obj.ubppSaranaNcs)
            //  updateSaranaFrah(obj.ubppSaranaNFrah)
            //  updateSaranaNps(obj.ubppSaranaNps)
            //  updateSaranaPenyelenggara(obj.ubppSaranaPenyelenggara)
             updateTotalAvg(obj.totalAvg)
             updateEvaluasiSarana(obj.garaphEvaluasiSarana)
             updateEvaluasiInstruktur(obj.graphEvaluasiInstruktur)
        },
        });
    }


    function changeEvaluasiSarana(){
        
        var x = document.getElementById("changeFilter").value;
        var nValue = document.getElementById("changeNvalue").value;
        console.log(x)
        console.log(nValue)
        $.ajax({
        url: "http://192.168.64.3/corpu-dacs/pages/Ubpp/selectedNSaranaJson",
        method: 'post',
        data: {'nValue' : nValue,'tahun':x},
        async: false,
        success: function(data3){
             var obj = JSON.parse(data3)
             console.log(obj)
             updateEvaluasiSarana(obj)
             
        },

        

        });
    }

    function changeEvaluasiInstruktur(){
        
        var x = document.getElementById("changeFilter").value;
        var nValue = document.getElementById("changeNvalueInstruktur").value;
        console.log(x)
        console.log(nValue)
        $.ajax({
        url: "http://192.168.64.3/corpu-dacs/pages/Ubpp/selectedNInstrukturJson",
        method: 'post',
        data: {'nValue' : nValue,'tahun':x},
        async: false,
        success: function(data3){
             var obj = JSON.parse(data3)
             console.log(obj)
             updateEvaluasiInstruktur(obj)
             
        },
        });
    }

    function updateTotalAvg(data){
        var dataRes = data[0]
        var getidTotalUbppTop = document.getElementById("totalUbppTop");
        var getidAvgInstrukturTop = document.getElementById("avgInstrukturTop");
        var getidAvgPenyelenggaraTop = document.getElementById("avgPenyelenggaraTop");
           
        if(data.length == 0) {
            getidTotalUbppTop.innerText = 0
            getidAvgInstrukturTop.innerText = 0
            getidAvgPenyelenggaraTop.innerText = 0
        } else {
            getidTotalUbppTop.innerText = dataRes.avg_ubpp_total
            getidAvgInstrukturTop.innerText = dataRes.avg_instruktur
            getidAvgPenyelenggaraTop.innerText = dataRes.avg_penyelenggara
        }
    }

</script>



</body>