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
								<li class="breadcrumb-item"><a href="#">Details</a></li>
								<li class="breadcrumb-item active" aria-current="page">UBPP</li>
							</ol>
						</nav>
					</div>
				</div>

				
				<!-- filter tahun -->
				<!-- <div class="row">
					<div id="myBtnContainer" for="changeFilter" class="col-md-12 mb-3 mt-3">
						<div class="float-right">
							<button class="btn" id="changeFilter" onchange="filter()"> 2019</button>
							<button class="btn" id="changeFilter" onchange="filter()"> 2020</button>
						</div>
					</div>
				</div> -->

				<!-- chart content -->
				<div class="row">

				<div class="col-md-12 col-sm-12 mb-10">
                   <div class="col-md-3 float-right">
                       <label for="changeFilter">Filter Unit Bisnis</label>

                       <select class="form-control" id="changeFilterUbis">
                                                          <option value="FU NITS : DIREKTORAT NETWORK IT & SOLUTION">FU NITS : DIREKTORAT NETWORK IT & SOLUTION</option>
                                                          <option value="CFU CONS : PT. TELKOM AKSES">CFU CONS : PT. TELKOM AKSES</option>
                                                  </select>
                   </div>

                   <div class="col-md-2 float-right">
                       <label for="changeFilter">Filter Academy</label>
                       <select class="form-control" id="changeFilterAcademy" onchange="filterUbis()">
                                                          <option value="NITS">NITS</option>
                                                          <option value="BUSINNESS ENABLER">BUSINNESS ENABLER</option>
                                                  </select>
                   </div>

                   <div class="col-md-2 float-right">
                       <label for="exampleFormControlSelect1">Filter Tahun</label>
                       <select class="form-control" id="changeFilterTahun" onchange="getValueAcademyUbisYear()">
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                   </select>
                   </div>
               </div>

               <div class="col-md-12 col-sm-12 mb-5">
                   <div class="col-md-2 float-right">
                       <label for="changeFilter"></label>
                       <button class="form-control btn btn-primary" onclick="filterAll()"> Submit </button>
                   </div>
               </div>
					<!-- <div class="col-lg-4 col-md-4 col-xs-12"> 
						<div class="team-item wow fadeInLeft" data-wow-delay="0.2s">
							<div class="contetn">
								<div class="info-text text-center">
									<h5 class="cs-title mt-5">Avg UBPP Total</h5>
									<hr class="cs-hr-red">
									<h5 class="mt-4" id="totalUbppTop">000000</h5>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-xs-12">
						<div class="team-item wow fadeInDown" data-wow-delay="0.2s">
							<div class="contetn">
								<div class="info-text text-center">
									<h5 class="cs-title mt-5">Avg UBPP Instruktur</h5>
									<hr class="cs-hr-red">
									<h5 class="text-center mt-4" id="avgInstrukturTop">00000000</h5>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-xs-12">
						<div class="team-item wow fadeInRight" data-wow-delay="0.2s">
							<div class="contetn">
								<div class="info-text text-center">
									<h5 class="cs-title mt-5">Avg UBPP Penyelenggara</h5>
									<hr class="hr-red">
									<h5 class="text-center mt-4" id="avgPenyelenggaraTop">000000</h5>
								</div>
							</div>
						</div>
					</div>

                    <div class="col-lg-12 col-md-12 col-xs-12">
						<div class="team-item wow fadeInRight" data-wow-delay="0.2s">
							<div class="contetn">
								<div class="info-text text-center">
									<h3><a href="#">Nilai UBPP</a></h3>
								</div>
							</div>
						</div>
					</div> -->

					<div class="col-sm-12 col-md-4 mb-5">
						<div class="card cs-card">
							<div class="card-body ">
								<h5 class="text-center cs-title">Avg UBPP Total</h5>
								<hr class="cs-hr-green">
								<h5 class="text-center mt-4" id="avgTotal">78.0814117647</h5>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-4 mb-5">
						<div class="card cs-card">
							<div class="card-body ">
								<h5 class="text-center cs-title">Avg UBPP Instruktur</h5>
								<hr class="cs-hr-red">
								<h5 class="text-center mt-4" id="avgInstrultur">79.560000</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 mb-5">
						<div class="card cs-card">
							<div class="card-body ">
								<h5 class="text-center cs-title">Avg UBPP Penyelenggara</h5>
								<hr class="cs-hr-green">
								<h5 class="text-center mt-4" id="avgPenyelenggara">77.0570000000</h5>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-12 mb-5">
						<div class="card cs-card">
							<h5 class="cs-title mb-3 mt-3 text-center" id="saranaUbis">UBPP Sarana <br> FU NITS :
								DIREKTORAT NETWORK IT & SOLUTION</h5>
							<div class="row">
								<div class="card-body table-wrapper col-sm-12 col-md-6">
									<table class="table  align-center text-center">
								
										<thead class="thead-light text-center">
											<tr>
												<th scope="col">No</th>
												<th scope="col">Sarana</th>
												<th scope="col">Nilai</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Akomodasi</td>
												<td id="instrukturCs">79.560000</h3>
												</td>

											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Sarana</td>
												<td id="instrukturMetode">83.048000</td>

											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Laborat</td>
												<td id="instrukturKom">80.952000</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>Penyelenggaraan</td>
												<td id="instrukturTimeMan">74.632000</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>Kafe</td>
												<td id="instrukturProses">81.412000</td>
											</tr>
											<tr>
												<th scope="row">6</th>
												<td>Materi</td>
												<td id="instrukturPemahaman">76.352000</td>
											</tr>
											<tr>
												<th scope="row">7</th>
												<td>NPS</td>
												<td id="instrukturCulture">80.858000</td>
											</tr>
											<tr>
												<th scope="row">8</th>
												<td>CS</td>
												<td id="instrukturCulture">80.858000</td>
											</tr>
											<tr>
												<th scope="row">9</th>
												<td>Fr Ah</td>
												<td id="instrukturCulture">80.858000</td>
											</tr>
											<tr>
												<th scope="row">10</th>
												<td>CES</td>
												<td id="instrukturCulture">80.858000</td>
											</tr>
										</tbody>
									</table>
								</div>


								<div class="col-sm-12 col-md-6 mb-5">


									<div class="card-body ">
										<div class="row">
											<div class="col-md-8">
												<!-- <h5 class="cs-title">Evaluasi Sarana </h5> -->
											</div>
											<div class="col-md-4 ">
												<label for="exampleFormControlSelect1">Filter Sarana</label>
												<select class="form-control " id="changeFilterSaranaN"
													onchange="updateGetGraphSaranaN()">
													<option value="n_ubpp_akom" selected>n_ubpp_akom</option>
													<option value="n_ubpp_sarana">n_ubpp_sarana</option>
													<option value="n_ubpp_laborat">n_ubpp_laborat</option>
													<option value="n_ubpp_pnylnggr">n_ubpp_pnylnggr</option>
													<option value="n_ubpp_kafe">n_ubpp_kafe</option>
													<option value="n_ubpp_materi">n_ubpp_materi</option>
													<option value="n_nps">n_nps</option>
													<option value="n_cs">n_cs</option>
													<option value="n_fr_ah">n_fr_ah</option>
													<option value="n_ces">n_ces</option>
												</select>
											</div>
										</div>
										<canvas id="ubppPenyelenggara" style="height: 500px" width="100%"
											height="70%"></canvas>
									</div>

								</div>

							</div>
						</div>
					</div>




					<div class="col-sm-12 col-md-12 mb-5">
						<div class="card cs-card">
							<h5 class="cs-title mb-3 mt-3 text-center" id="instrukturUbis">UBPP Instruktur <br> FU NITS
								: DIREKTORAT NETWORK IT & SOLUTION</h5>
							<div class="row ">
								<div class="card-body table-wrapper col-sm-12 col-md-6">
									<table class="table align-center text-center">
										<thead class="thead-light text-center">
											<tr>
												<th scope="col">No</th>
												<th scope="col">Sarana</th>
												<th scope="col">Nilai</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>CS</td>
												<td id="instrukturCs">79.560000</h3>
												</td>

											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Metode</td>
												<td id="instrukturMetode">83.048000</td>

											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Kom</td>
												<td id="instrukturKom">80.952000</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>Time Management</td>
												<td id="instrukturTimeMan">74.632000</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>Proses</td>
												<td id="instrukturProses">81.412000</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>Pemahaman</td>
												<td id="instrukturPemahaman">76.352000</td>
											</tr>
											<tr>
												<th scope="row">7</th>
												<td>Culture</td>
												<td id="instrukturCulture">80.858000</td>
											</tr>
										</tbody>
									</table>
							</div>

							<div class="col-sm-12 col-md-6 mb-5">
								<div class="card-body ">
									<div class="row">
										<div class="col-md-8">
											<!-- <h5 class="cs-title">Evaluasi Instruktur </h5> -->
										</div>
										<div class="col-md-4 ">
											<label for="exampleFormControlSelect1">Filter Sarana</label>
											<select class="form-control " id="changeFilterInstrukturN"
												onchange="updateGetGraphInstrukturN()">
												<option value="n_cs" selected>n_cs</option>
												<option value="n_metode">n_metode</option>
												<option value="n_kom">n_kom</option>
												<option value="n_time_man">n_time_man</option>
												<option value="n_proses">n_proses</option>
												<option value="n_pemahaman">n_pemahaman</option>
												<option value="n_culture">n_culture</option>
											</select>
										</div>
									</div>

									<canvas id="ubppInstruktur" style="height: 500px" width="100%"
											height="70%"></canvas>
								</div>

							</div>
						</div>

					</div>


					<div class="col-sm-12 col-md-12 mb-5 mt-5">
						<div class="card cs-card">
							<div class="card-body ">
								<div class="row">
									<div class="col-md-9">
										<h5 class="cs-title">Evaluasi Instruktur </h5>
									</div>
									<div class="col-md-3 ">
										<label for="exampleFormControlSelect1">Filter Pelatihan</label>
										<select class="form-control " id="changeFilterPelatihan"
											onchange="updateGetGraphEvaluasiInstrukturPel()">
											<option value="Fast Data Visualization Analytic">Fast Data Visualization
												Analytic</option>
											<option value="IP FUNDAMENTAL & BOOTCAMP TCIF">IP FUNDAMENTAL & BOOTCAMP
												TCIF</option>

										</select>
									</div> 
								</div>
								<canvas id="evaluasiInstrukturPel"></canvas>
							</div>
						</div>
					</div>

		
				</div>



			</div>

			
            

			

			</div>
			</div>
		</section>
		<!-- Chart Section End -->
	</header>
	<!-- Header Area wrapper End -->

	<script type="text/javascript">
        // function myLoad(){
        //     document.getElementById("loader").style.display = "block";
        // }
        $(window).on('unload',function() {
            document.getElementById("loader").style.display = "block";
        });
        $(window).on('load',function() {
            document.getElementById("loader").style.display = "none";
        });

       
            $(document).ready(function () {
                $("#sidebarCollapse").on("click", function () {
                    $("#sidebar").toggleClass("active");
                    $(this).toggleClass("active");
                });
            });
        </script>
        
        <script type="text/javascript">
            
            $(document).ready(function(){
                $("#selector1").change(function(){
                    $("#selector1").find("option:selected").each(function(){
                        var optionValue = $(this).attr("value");
                        if(optionValue){
                            $(".box1").not("." + optionValue).hide();
                            $("." + optionValue).show();
                        } else{
                            $(".box1").hide();
                        }
                    });
                }).change();
            });

            $(document).ready(function(){
                $("#selector2").change(function(){
                    $("#selector2").find("option:selected").each(function(){
                        var optionValue = $(this).attr("value");
                        if(optionValue){
                            $(".box2").not("." + optionValue).hide();
                            $("." + optionValue).show();
                        } else{
                            $(".box2").hide();
                        }
                    });
                }).change();
            });
        </script>

        <script>
    var globalTahun = document.getElementById("changeFilterTahun").value;    
    var globalUbis = document.getElementById("changeFilterUbis").value;
    var globalAcademy = document.getElementById("changeFilterAcademy").value;
    
    function filterAll(){
        var dropTahun = document.getElementById("changeFilterTahun").value;
        var dropUbis = document.getElementById("changeFilterUbis").value;
        var dropAcademy = document.getElementById("changeFilterAcademy").value;
        globalTahun = dropTahun;
        globalUbis = dropUbis;
        globalAcademy = dropAcademy;
        console.log(globalTahun);
        console.log(globalUbis);
        console.log(globalAcademy);

        $.ajax({
        url: "http://192.168.64.3/corpu-dacs/pages/UbisUbpp/ubisUppJson",
        method: 'post',
        data: {
            'tahun':globalTahun, 
            'academy':globalAcademy,
            'ubis':globalUbis,
            },
        async: false,
        success: function(data){
             var obj = JSON.parse(data)
             console.log(obj)
             updateTotalSarana(obj.totalSaranaByUbis)
             updateTotalInstruktur(obj.totalInstrukturByUbis)
             updateGraphSaranaN(obj.graphNUbisSarana)
             updateGraphInstrukturN(obj.graphNInstruktur)
             updateGraphEvaluasiInstrukturPel(obj.garphEvaluasiIntruturPel)
             setPelatihan(obj.namaPelatihan)
             updateAvgUbbp(obj.totalAvgUbpp)
        },
        });
    }

    function updateTotalSarana(data){
        var dataRes = data[0]
        var saranaUbis = document.getElementById('saranaUbis');
        var saranaAkomodasi = document.getElementById('saranaAkomodasi');
        var saranaSarana = document.getElementById('saranaSarana');
        var saranaLaborat = document.getElementById('saranaLaborat');
        var saranaPenyelenggara = document.getElementById('saranaPenyelenggara');
        var saranaKafe = document.getElementById('saranaKafe');
        var saranaMateri = document.getElementById('saranaMateri');
        var saranaNps = document.getElementById('saranaNps');
        var saranaCs = document.getElementById('saranaCs');
        var saranaFrAh = document.getElementById('saranaFrAh');
        var saranaCes = document.getElementById('saranaCes');

        if(data.length == 0){
            saranaUbis.innerText = "UBPP Sarana - "+globalUbis
            saranaAkomodasi.innerText = 0
            saranaSarana.innerText = 0
            saranaLaborat.innerText = 0
            saranaPenyelenggara.innerText = 0
            saranaKafe.innerText = 0
            saranaMateri.innerText = 0
            saranaNps.innerText = 0
            saranaCs.innerText = 0
            saranaFrAh.innerText = 0
            saranaCes.innerText = 0
        } else {
            saranaUbis.innerText = "UBPP Sarana - "+globalUbis
            saranaAkomodasi.innerText = dataRes.n_ubpp_akom_sarana
            saranaSarana.innerText = dataRes.n_cs_sarana
            saranaLaborat.innerText = dataRes.n_ubpp_laborat_sarana
            saranaPenyelenggara.innerText = dataRes.n_ubpp_pnylnggr_sarana
            saranaKafe.innerText = dataRes.n_ubpp_kafe_sarana
            saranaMateri.innerText = dataRes.n_ubpp_materi_sarana
            saranaNps.innerText = dataRes.n_nps_sarana
            saranaCs.innerText = dataRes.n_cs_sarana
            saranaFrAh.innerText = dataRes.n_fr_ah_sarana
            saranaCes.innerText = dataRes.n_ces_sarana
        }

    }
    function updateTotalInstruktur(data){
        var dataRes = data[0]
        var instrukturUbis = document.getElementById('instrukturUbis');
        var instrukturCs = document.getElementById('instrukturCs');
        var instrukturMetode = document.getElementById('instrukturMetode');
        var instrukturKom = document.getElementById('instrukturKom');
        var instrukturTimeMan = document.getElementById('instrukturTimeMan');
        var instrukturProses = document.getElementById('instrukturProses');
        var instrukturPemahaman = document.getElementById('instrukturPemahaman');
        var instrukturCulture = document.getElementById('instrukturCulture');

        if(data.length == 0){
            instrukturUbis.innerText = "UBPP Instruktur - "+globalUbis
            instrukturCs.innerText = 0
            instrukturMetode.innerText = 0
            instrukturKom.innerText = 0
            instrukturTimeMan.innerText = 0
            instrukturProses.innerText = 0
            instrukturPemahaman.innerText = 0
            instrukturCulture.innerText = 0
        } else {
            instrukturUbis.innerText = "UBPP Instruktur - "+globalUbis
            instrukturCs.innerText = dataRes.n_cs_instruktur
            instrukturMetode.innerText = dataRes.n_metode_instruktur
            instrukturKom.innerText = dataRes.n_n_kom_instruktur
            instrukturTimeMan.innerText = dataRes.n_time_man_instruktur
            instrukturProses.innerText = dataRes.n_proses_instruktur
            instrukturPemahaman.innerText = dataRes.n_pemahaman_instruktur
            instrukturCulture.innerText = dataRes.n_cs_instruktur
        }
    }

    function updateAvgUbbp(data){
        console.log(data)
        var dataRes = data[0]
        var total = document.getElementById('avgTotal');
        var instruktur = document.getElementById('avgInstrultur');
        var penyelenggara = document.getElementById('avgPenyelenggara');

        if(data.length == 0){
            total.innerText = 0
            instruktur.innerText = 0
            penyelenggara.innerText = 0
        } else {
            total.innerText = dataRes.avg_total
            instruktur.innerText = dataRes.avg_instruktur
            penyelenggara.innerText = dataRes.avg_penyelenggara
        }

    }
</script><script>

    function getValueAcademyUbisYear() {
        var tahunParam = document.getElementById("changeFilterTahun").value
        globalTahun = tahunParam
        $.ajax({
            url: "http://192.168.64.3/corpu-dacs/pages/UbisUbpp/getAcademyUbisYearJson",
            method: 'post',
            data: {
                'tahun': tahunParam
            },
            async: false,
            success: function(data) {
                var obj = JSON.parse(data)
                console.log(obj)
                globalAcademy = obj.academy[0].deskripsi
                globalUbis = obj.ubis[0].ubis
                setAcademy(obj.academy)
                setUbis(obj.ubis)
            },
        });
        console.log(globalTahun)
        console.log(globalAcademy)
        console.log(globalUbis)
    }

    function filterUbis() {
        var academy = document.getElementById("changeFilterAcademy").value;
        globalAcademy = academy
        $.ajax({
            url: "http://192.168.64.3/corpu-dacs/pages/UbisUbpp/getSelecUbisJson",
            method: 'post',
            data: {
                'tahun' : globalTahun,
                'academy': academy
            },
            async: false,
            success: function(data) {
                var obj = JSON.parse(data)
                //console.log(obj)
                globalUbis = obj[0].ubis
                setUbis(obj)
            },
        });
        console.log(globalTahun)
        console.log(globalAcademy)
        console.log(globalUbis)
    }

    function setAcademy(data){
        var sel = document.getElementById('changeFilterAcademy');
        var option;
        var length = sel.options.length;

        for (i = length - 1; i >= 0; i--) {
            sel.options[i] = null;
        }

        data.map(res => {
            option = document.createElement("option");
            option.text = res.deskripsi
            option.value = res.deskripsi
            sel.add(option)
        })
    }

    function setUbis(data) {
        console.log(data)
        var sel = document.getElementById('changeFilterUbis');
        var option;
        var length = sel.options.length;

        for (i = length - 1; i >= 0; i--) {
            sel.options[i] = null;
        }

        data.map(res => {
            option = document.createElement("option");
            option.text = res.ubis
            option.value = res.ubis
            sel.add(option)
        })
    }

    function setPelatihan(data){
        console.log(data.length)
        var sel = document.getElementById('changeFilterPelatihan');
        var option;
        var length = sel.options.length;
        
        for (i = length - 1; i >= 0; i--) {
            sel.options[i] = null;
        }

        data.map(res => {
            option = document.createElement("option");
            option.text = res.nama_pelatihan
            option.value = res.nama_pelatihan
            sel.add(option)
        })
    }
</script><script>
var ctxUbppPenyelenggara = document.getElementById('ubppPenyelenggara');
var chartUbppPenyelenggara = new Chart(ctxUbppPenyelenggara, {
    type: 'bar',
    data: {
    labels:  ["Fast Data Visualization Analytic","IP FUNDAMENTAL & BOOTCAMP TCIF"] ,
    datasets: [
      {
        label: 'Avg UBPP Sarana per Akademi',
        data: ["74.290000","92.140000"],
        backgroundColor: '#E69A8DFF',
        stack: "1",
      },

      {
        label: 'Avg UBPP Sarana keseluruhan',
        data: ["83.215000","83.215000"],
        backgroundColor: '#5F4B8BFF',
        // borderColor: '#5F4B8BFF',
        borderWidth: 1,
        stack: "2",
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

function updateGetGraphSaranaN(){
        var sarana = document.getElementById("changeFilterSaranaN").value;
        $.ajax({
        url: "http://192.168.64.3/corpu-dacs/pages/UbisUbpp/getNSaranaJson",
        method: 'post',
        data: {
          'sarana':sarana,
          'academy': globalAcademy,
          'tahun': globalTahun,
          'ubis' : globalUbis,
           },
        async: false,
        success: function(data){
             var obj = JSON.parse(data)
             updateGraphSaranaN(obj)
        },
        });
}


function updateGraphSaranaN(data){
    chartUbppPenyelenggara.data.labels = data.namaPelatihan
    chartUbppPenyelenggara.data.datasets[0].data = data.nilai;
    chartUbppPenyelenggara.data.datasets[1].data = data.avgNilai;
    chartUbppPenyelenggara.update();
  
}
</script><script>
var ctxUbppInstruktur= document.getElementById('ubppInstruktur');
var chartUbppInstruktur = new Chart(ctxUbppInstruktur, {
    type: 'bar',
    data: {
    labels:  ["Fast Data Visualization Analytic","IP FUNDAMENTAL & BOOTCAMP TCIF"] ,
    datasets: [
      {
        label: 'Avg UBPP Instruktur per Akademi',
        data: ["65.933333","100.000000"],
        backgroundColor: '#0278ae',
        stack: "1",
      },

      {
        label: 'Avg UBPP Instruktur keseluruhan',
        data: ["79.560000","79.560000"],
        backgroundColor: '#51adcf',
        // borderColor: '#46D282',
        borderWidth: 1,
        stack: "2",
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

function updateGetGraphInstrukturN(){
        var instruktur = document.getElementById("changeFilterInstrukturN").value;
        $.ajax({
        url: "http://192.168.64.3/corpu-dacs/pages/UbisUbpp/getNInstrukturJson",
        method: 'post',
        data: {
            'instruktur':instruktur, 
            'academy': globalAcademy,
            'tahun': globalTahun,
            'ubis' : globalUbis,
            },
        async: false,
        success: function(data){
             var obj = JSON.parse(data)
             updateGraphInstrukturN(obj)
        },
        });
}


function updateGraphInstrukturN(data){
    chartUbppInstruktur.data.labels = data.namaPelatihan
    chartUbppInstruktur.data.datasets[0].data = data.nilai;
    chartUbppInstruktur.data.datasets[1].data = data.avgNilai;
    chartUbppInstruktur.update();
  
}
</script><script>
  console.log({"nameInstruktur":["ALDRIE VINANDITYO","NADHIRA FIDELIA","YULI SARIFAH"],"n_cs":["84.640000","29.320000","83.840000"],"n_metode":["92.380000","30.000000","92.860000"],"n_kom":["87.620000","30.000000","87.140000"],"n_time_man":["75.710000","26.500000","70.950000"],"n_proses":["85.710000","34.210000","87.140000"],"n_pemahaman":["78.500000","25.260000","78.000000"],"n_culture":["87.620000","30.000000","86.670000"],"n_total":["84.640000","29.320000","83.840000"]});
var ctxUbppInstrukturPel= document.getElementById('evaluasiInstrukturPel');
var chartUbppInstrukturPel = new Chart(ctxUbppInstrukturPel, {
    type: 'horizontalBar',
    data: {
    labels:  ["ALDRIE VINANDITYO","NADHIRA FIDELIA","YULI SARIFAH"] ,
    datasets: [
      {
        label: 'n_cs',
        data: ["84.640000","29.320000","83.840000"],
        backgroundColor: '#80BAFF',
        stack: "1",
      },

      {
        label: 'n_metode',
        data: ["92.380000","30.000000","92.860000"],
        backgroundColor: '#46D282',
        stack: "2",
      },

      {
        label: 'n_kom',
        data: ["87.620000","30.000000","87.140000"],
        backgroundColor: '#FF5C6B',
        stack: "3",
      },

      {
        label: 'n_time_man',
        data: ["75.710000","26.500000","70.950000"],
        backgroundColor: '#709fb0',
        stack: "4",
      },

      {
        label: 'n_proses',
        data: ["85.710000","34.210000","87.140000"],
        backgroundColor: '#F29071',
        stack: "5",
      },

      {
        label: 'n_pemahaman',
        data: ["78.500000","25.260000","78.000000"],
        backgroundColor: '#ee6f57',
        stack: "6",
      },

      {
        label: 'n_culture',
        data: ["87.620000","30.000000","86.670000"],
        backgroundColor: '#5eaaa8',
        stack: "7",
      },

      {
        label: 'n_total',
        data: ["84.640000","29.320000","83.840000"],
        backgroundColor: '#145374',
        stack: "8",
      },
    ]
  },
  options: {
    scales: {
      xAxes: [{ stacked: true, ticks: {min: 0 } }],
      yAxes: [{ stacked: true}]
    },
    title: {
      display: true,
      text: 'Nilai Evaluasi Instruktur',
      fontSize: 18,
      fontColor: '#000'

    }
  }

});

function updateGetGraphEvaluasiInstrukturPel(){
        var pelatihan = document.getElementById("changeFilterPelatihan").value;
        $.ajax({
        url: "http://192.168.64.3/corpu-dacs/pages/UbisUbpp/getEvaluasiInstrukturJson",
        method: 'post',
        data: {
            'pelatihan':pelatihan, 
            'academy': globalAcademy,
            'tahun': globalTahun,
            'ubis' : globalUbis,
            },
        async: false,
        success: function(data){
             var obj = JSON.parse(data)
             updateGraphEvaluasiInstrukturPel(obj)
        },
        });
}


function updateGraphEvaluasiInstrukturPel(data){
  chartUbppInstrukturPel.data.labels = data.nameInstruktur
  chartUbppInstrukturPel.data.datasets[0].data = data.n_cs;
  chartUbppInstrukturPel.data.datasets[1].data = data.n_metode;
  chartUbppInstrukturPel.data.datasets[2].data = data.n_kom;
  chartUbppInstrukturPel.data.datasets[3].data = data.n_time_man;
  chartUbppInstrukturPel.data.datasets[4].data = data.n_proses;
  chartUbppInstrukturPel.data.datasets[5].data = data.n_pemahaman;
  chartUbppInstrukturPel.data.datasets[6].data = data.n_culture;
  chartUbppInstrukturPel.data.datasets[7].data = data.n_total;
  chartUbppInstrukturPel.update();
  
}
</script>
</body>