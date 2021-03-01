<body>

	<!-- Header Area wrapper Starts -->
	<header id="header-wrap">
		<!-- Team Section Start -->
		<section id="team" class="section-padding bg-gray">
			<div class="container mt-5">
				<div class="row">
					<div class="container-fluid p-4 mb-4 text-center bg-white" id="changeFilterUbis" onchange="setSelectedUbis()">
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

					<div class="col-md-4 float-right">
						<label for="changeFilter">Select Ubis</label>
						<select class="form-control" id="changeFilterUbis" onchange="setSelectedUbis()" style="font-size:14px">
							<option value="FU NITS : DIREKTORAT NETWORK IT & SOLUTION">FU NITS : DIREKTORAT NETWORK IT & SOLUTION
							</option>
							<option value="FU NITS : DIVISI SERVICE OPERATION">FU NITS : DIVISI SERVICE OPERATION</option>
							<option value="CFU CONS : PT. TELKOM AKSES">CFU CONS : PT. TELKOM AKSES</option>
							<option value="FU NITS : DIVISI SERVICE & SOLUTION">FU NITS : DIVISI SERVICE & SOLUTION</option>
							<option value="FU NITS : DIVISI INFORMATION TECHNOLOGY">FU NITS : DIVISI INFORMATION TECHNOLOGY</option>
							<option value="FU NITS : DIVISI PLANNING & DEPLOYMENT">FU NITS : DIVISI PLANNING & DEPLOYMENT</option>
						</select>
					</div>

					<div class="col-md-2 float-right" >
						<label for="changeFilter">Filter Tahun</label>
						<select class="form-control" id="changeFilterTahun" onchange="getValueAcademyUbisYear()" style="font-size:14px">
							<option value="2019">2019</option>
							<option value="2020">2020</option>
						</select>
					</div>

					<div id="myBtnContainer" class="col-md-9 mb-2 mt-3">
						<div class="float-left">
							<a href="<?= base_url() ?>detail/training_recommendation" class="btn btn-primary active" role="button"
								aria-pressed="true">Training Recommendation</a>
						</div>
					</div>
				</div>

				<div class="row text-center">
					<div class="col-sm-12 col-md-3 mb-5 mt-4">
						<div class="card cs-card">
							<div class="card-body ">
								<h6 class="text-center cs-title">On Request (New)</h6>
								<hr class="cs-hr-green">
								<h5 class="text-center mt-4" id="onRequestNewTop">9</h5>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-3 mb-5 mt-4">
						<div class="card cs-card">
							<div class="card-body ">
								<h6 class="text-center cs-title">On Request (Replacement)</h6>
								<hr class="cs-hr-red">
								<h5 class="text-center mt-4" id="replacementTop">3</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-3 mb-5 mt-4">
						<div class="card cs-card">
							<div class="card-body ">
								<h6 class="text-center cs-title">Planned</h6>
								<hr class="cs-hr-green">
								<h5 class="text-center mt-4" id="plannedTop">0</h5>
							</div>
						</div>
					</div>


					<div class="col-sm-12 col-md-3 mb-5 mt-4">
						<div class="card cs-card">
							<div class="card-body ">
								<h6 class="text-center cs-title">Cancelled</h6>
								<hr class="cs-hr-red">
								<h5 class="text-center mt-4" id="cancelledTop">0</h5>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-6 mb-5">
						<div class="card cs-card">
							<div class="card-body ">
								<div class="info-text text-center">
									<h3>Delivery Training by UBIS</h3>
								</div>
								<canvas id="getDelivTraining"></canvas>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-6 mb-5">
						<div class="card cs-card">
							<div class="card-body ">
								<div class="info-text text-center">
									<h3>Topic Training by UBIS</h3>
								</div>
								<canvas id="getTopicTrainingUbis"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</section>
		<!-- Team Section End -->
	</header>
	<!-- Header Area wrapper End -->
</body>