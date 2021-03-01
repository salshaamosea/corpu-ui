<body>

  <!-- Header Area wrapper Starts -->
  <header id="header-wrap">


    <!-- Team Section Start -->
    <section id="team" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-left">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Distribution Skill</h2>
        </div>
    
        <div class="row"> 
          <div class="col-md-6 ml-0 pl-0">
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Overview</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Distribution Skill</li>
                </ol>
                </nav>
            </div>
            <div id="myBtnContainer" class="col-md-6 mb-3 ">
                <div class="float-right">
                    <button class="btn active" onclick="filterSelection('all')"> 2019</button>
                    <button class="btn" onclick="filterSelection('cars')"> 2020</button>
                </div>
            </div>
        </div>

        <!-- chart content -->
		<div class="row">
			<div class="col-sm-12 col-md-12 mb-4">
				<div class="card cs-card">
					<div class="card-body">
					<div class="info-text text-center">
						<h3>Skill Distribution and Skill Population</h3>
					</div>
					<canvas id=""> </canvas>
					</div>
				</div>
			</div>
		</div>

        <div class="row">
        	<div class="col-sm-4 col-md-4 mb-4 float-left mt-5">
        		<select class="form-control" id="filterUbis" name="ubisdesc">
        			<option value="" selected="selected">Select UBIS</option>
        			<option value="KOPTEL">KOPTEL</option>
        			<option value="PT. ADMEDIKA">PT. ADMEDIKA</option>
        			<option value="PT. GRAHA SARANA DUTA">PT. GRAHA SARANA DUTA</option>
        			<option value="PT. GRAHA TELKOMSIGMA">PT. GRAHA TELKOMSIGMA</option>
        			<option value="PT. GRATIKA">PT. GRATIKA</option>
        			<option value="PT. INFOMEDIA NUSANTARA">PT. INFOMEDIA NUSANTARA</option>
        			<option value="PT. SIGMA CIPTA CARAKA">PT. SIGMA CIPTA CARAKA</option>
        			<option value="PT. SIGMA SOLUSI INTEGRASI">PT. SIGMA SOLUSI INTEGRASI</option>
        			<option value="PT. SIGNET PRATAMA">PT. SIGNET PRATAMA</option>
        			<option value="PT. TELTRANET APLIKASI SOLUSI">PT. TELTRANET APLIKASI SOLUSI</option>
        			<option value="YAYASAN PENDIDIKAN TELKOM">YAYASAN PENDIDIKAN TELKOM</option>
        			<option value="ASSESSMENT CENTER INDONESIA">ASSESSMENT CENTER INDONESIA</option>
        			<option value="ASSET MANAGEMENT CENTER">ASSET MANAGEMENT CENTER</option>
        			<option value="COMMUNITY DEVELOPMENT CENTER">COMMUNITY DEVELOPMENT CENTER</option>
        			<option value="CORPORATE SECRETARY DEPARTMENT">CORPORATE SECRETARY DEPARTMENT</option>
        			<option value="DIREKTORAT CONSUMER">DIREKTORAT CONSUMER</option>
        			<option value="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO">DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO</option>
        			<option value="DIREKTORAT ENTERPRISE & BUSINESS SERVICE">DIREKTORAT ENTERPRISE & BUSINESS SERVICE</option>
        			<option value="DIREKTORAT HUMAN CAPITAL MANAGEMENT">DIREKTORAT HUMAN CAPITAL MANAGEMENT</option>
        			<option value="DIREKTORAT KEUANGAN">DIREKTORAT KEUANGAN</option>
        			<option value="DIREKTORAT WHOLESALE&INTERNATIONAL SERV">DIREKTORAT WHOLESALE&INTERNATIONAL SERV</option>
        			<option value="DIVISI BUSINESS SERVICE">DIVISI BUSINESS SERVICE</option>
        			<option value="DIVISI DIGITAL SERVICE">DIVISI DIGITAL SERVICE</option>
        			<option value="DIVISI ENTERPRISE SERVICE">DIVISI ENTERPRISE SERVICE</option>
        			<option value="Divisi Government Service">Divisi Government Service</option>
        		</select>
        	</div>

        	<div class="col-sm-4 col-md-4 mb-4 float-left mt-5">
        		<select class="form-control" id="filterSkillsGroup" name="ccgroup">
        			<option value="" selected="selected">Select Skills Group</option>
        			<option class="KOPTEL" value="FIN">FIN</option>
        			<option class="KOPTEL" value="LEAD">LEAD</option>
        			<option class="KOPTEL" value="PROF">PROF</option>
        			<option class="KOPTEL" value="M">M</option>
        			<option class="KOPTEL" value="REL">REL</option>
        			<option class="KOPTEL" value="BE">BE</option>
        			<option class="KOPTEL" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="KOPTEL" value="GA">GA</option>
        			<option class="KOPTEL" value="HC">HC</option>
        			<option class="KOPTEL" value="BD">BD</option>
        			<option class="KOPTEL" value="PRO">PRO</option>
        			<option class="KOPTEL" value="CC">CC</option>
        			<option class="KOPTEL" value="M_DPS">M_DPS</option>
        			<option class="KOPTEL" value="LC">LC</option>
        			<option class="KOPTEL" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="KOPTEL" value="GA_CC">GA_CC</option>
        			<option class="KOPTEL" value="S">S</option>
        			<option class="KOPTEL" value="DPS">DPS</option>
        			<option class="KOPTEL" value="IT_FIN">IT_FIN</option>
        			<option class="KOPTEL" value="SC">SC</option>
        			<option class="PT. ADMEDIKA" value="GA">GA</option>
        			<option class="PT. ADMEDIKA" value="GA_CC">GA_CC</option>
        			<option class="PT. ADMEDIKA" value="HE">HE</option>
        			<option class="PT. ADMEDIKA" value="LEAD">LEAD</option>
        			<option class="PT. ADMEDIKA" value="PROF">PROF</option>
        			<option class="PT. GRAHA SARANA DUTA" value="BE">BE</option>
        			<option class="PT. GRAHA SARANA DUTA" value="GA_CC">GA_CC</option>
        			<option class="PT. GRAHA SARANA DUTA" value="RM">RM</option>
        			<option class="PT. GRAHA SARANA DUTA" value="LEAD">LEAD</option>
        			<option class="PT. GRAHA SARANA DUTA" value="PROF">PROF</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="BD">BD</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="DPS">DPS</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="HC">HC</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="IT">IT</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="M">M</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="PRO">PRO</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="RM">RM</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="LEAD">LEAD</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="PROF">PROF</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="SC">SC</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="SP">SP</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="SP_IA">SP_IA</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="SP_IA_">SP_IA_</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="IT_DPS">IT_DPS</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="BE">BE</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="GA">GA</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="GA_CC">GA_CC</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="REL">REL</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="S">S</option>
        			<option class="PT. GRATIKA" value="FIN">FIN</option>
        			<option class="PT. GRATIKA" value="FIN_IA">FIN_IA</option>
        			<option class="PT. GRATIKA" value="HC">HC</option>
        			<option class="PT. GRATIKA" value="SC">SC</option>
        			<option class="PT. GRATIKA" value="LEAD">LEAD</option>
        			<option class="PT. GRATIKA" value="PROF">PROF</option>
        			<option class="PT. INFOMEDIA NUSANTARA" value="HC">HC</option>
        			<option class="PT. INFOMEDIA NUSANTARA" value="LEAD">LEAD</option>
        			<option class="PT. INFOMEDIA NUSANTARA" value="PROF">PROF</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="FIN">FIN</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="HC">HC</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="SP">SP</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="LEAD">LEAD</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="PROF">PROF</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="BD">BD</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="BE">BE</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="DPS">DPS</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="IT">IT</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="IT_DPS">IT_DPS</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="SC">SC</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="IT_TEL">IT_TEL</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="IT_TEL_RM">IT_TEL_RM</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="TEL">TEL</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="GA_CC">GA_CC</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="PRO">PRO</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="REL">REL</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="S">S</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="SP_IA">SP_IA</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="SP_IA_">SP_IA_</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="BD_DPS">BD_DPS</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="M">M</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="IT_IA">IT_IA</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="GA">GA</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="FIN_IA">FIN_IA</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="RM">RM</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="RMG">RMG</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="BD_PRO">BD_PRO</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="EDU">EDU</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="IA_LC">IA_LC</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="LC">LC</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="DPS_BD">DPS_BD</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="CC">CC</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="CC_RMG">CC_RMG</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="FIN_RM">FIN_RM</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="BE_IA">BE_IA</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="DPS">DPS</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="IT">IT</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="IT_DPS">IT_DPS</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="LEAD">LEAD</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="PROF">PROF</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="BD">BD</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="REL">REL</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="S">S</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="BE">BE</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="SC">SC</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="FIN">FIN</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="GA">GA</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="GA_CC">GA_CC</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="M">M</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="PRO">PRO</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="HC">HC</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="RM">RM</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="IT_TEL">IT_TEL</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="SP">SP</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="SP_IA">SP_IA</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="SP_IA_">SP_IA_</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="IT_IA">IT_IA</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="TEL">TEL</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="RMG">RMG</option>
        			<option class="PT. SIGNET PRATAMA" value="IT">IT</option>
        			<option class="PT. SIGNET PRATAMA" value="IT_DPS">IT_DPS</option>
        			<option class="PT. SIGNET PRATAMA" value="IT_IA">IT_IA</option>
        			<option class="PT. SIGNET PRATAMA" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="PT. SIGNET PRATAMA" value="TEL">TEL</option>
        			<option class="PT. SIGNET PRATAMA" value="LEAD">LEAD</option>
        			<option class="PT. SIGNET PRATAMA" value="PROF">PROF</option>
        			<option class="PT. SIGNET PRATAMA" value="BD">BD</option>
        			<option class="PT. SIGNET PRATAMA" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="PT. SIGNET PRATAMA" value="DPS">DPS</option>
        			<option class="PT. SIGNET PRATAMA" value="HC">HC</option>
        			<option class="PT. SIGNET PRATAMA" value="M">M</option>
        			<option class="PT. SIGNET PRATAMA" value="PRO">PRO</option>
        			<option class="PT. SIGNET PRATAMA" value="RM">RM</option>
        			<option class="PT. SIGNET PRATAMA" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="PT. SIGNET PRATAMA" value="BE">BE</option>
        			<option class="PT. SIGNET PRATAMA" value="GA_CC">GA_CC</option>
        			<option class="PT. SIGNET PRATAMA" value="SC">SC</option>
        			<option class="PT. SIGNET PRATAMA" value="GA">GA</option>
        			<option class="PT. SIGNET PRATAMA" value="S">S</option>
        			<option class="PT. SIGNET PRATAMA" value="FIN">FIN</option>
        			<option class="PT. SIGNET PRATAMA" value="IT_TEL">IT_TEL</option>
        			<option class="PT. SIGNET PRATAMA" value="REL">REL</option>
        			<option class="PT. SIGNET PRATAMA" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="PT. SIGNET PRATAMA" value="RMG">RMG</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="BD">BD</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="BD">BD</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="BD_DPS">BD_DPS</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="BD_DPS">BD_DPS</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="DPS">DPS</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="DPS">DPS</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="M">M</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="M">M</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="SP_IA">SP_IA</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="SP_IA">SP_IA</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="LEAD">LEAD</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="LEAD">LEAD</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="PROF">PROF</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="PROF">PROF</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="SP">SP</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="SP">SP</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="REL">REL</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="REL">REL</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="S">S</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="S">S</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="SC">SC</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="SC">SC</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="TEL">TEL</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="TEL">TEL</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="EDU">EDU</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="LEAD">LEAD</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="PROF">PROF</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="FIN">FIN</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="GA">GA</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="GA_CC">GA_CC</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="HC">HC</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="SC">SC</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="FIN_IA">FIN_IA</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="BD">BD</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="M">M</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="BE">BE</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="IT">IT</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="M_DPS">M_DPS</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="REL">REL</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="IT_IA">IT_IA</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="SP">SP</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="PRO">PRO</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="IA">IA</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="LC">LC</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="RM">RM</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="IT_TEL">IT_TEL</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="BD_DPS">BD_DPS</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="BD">BD</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="HC">HC</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="LEAD">LEAD</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="PROF">PROF</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="GA">GA</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="SC">SC</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="M_DPS">M_DPS</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="IT">IT</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="IT_IA">IT_IA</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="REL">REL</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="GA_CC">GA_CC</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="S">S</option>
        			<option class="ASSET MANAGEMENT CENTER" value="BD_DPS">BD_DPS</option>
        			<option class="ASSET MANAGEMENT CENTER" value="FIN">FIN</option>
        			<option class="ASSET MANAGEMENT CENTER" value="LEAD">LEAD</option>
        			<option class="ASSET MANAGEMENT CENTER" value="PROF">PROF</option>
        			<option class="ASSET MANAGEMENT CENTER" value="BE">BE</option>
        			<option class="ASSET MANAGEMENT CENTER" value="GA">GA</option>
        			<option class="ASSET MANAGEMENT CENTER" value="GA_CC">GA_CC</option>
        			<option class="ASSET MANAGEMENT CENTER" value="SC">SC</option>
        			<option class="ASSET MANAGEMENT CENTER" value="PRO">PRO</option>
        			<option class="ASSET MANAGEMENT CENTER" value="CC">CC</option>
        			<option class="ASSET MANAGEMENT CENTER" value="IT">IT</option>
        			<option class="ASSET MANAGEMENT CENTER" value="IT_IA">IT_IA</option>
        			<option class="ASSET MANAGEMENT CENTER" value="LC">LC</option>
        			<option class="ASSET MANAGEMENT CENTER" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="BD">BD</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="BE">BE</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="CC">CC</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="SCD">SCD</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="LEAD">LEAD</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="PROF">PROF</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="FIN">FIN</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="FIN_IA">FIN_IA</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="BE_IA">BE_IA</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="RM">RM</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="GA">GA</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="GA_CC">GA_CC</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="IT">IT</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="IT_IA">IT_IA</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="SC">SC</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="CC">CC</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="GA">GA</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="PRO">PRO</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="LEAD">LEAD</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="PROF">PROF</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="CC_RMG">CC_RMG</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="LC">LC</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="IT">IT</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="IA_LC">IA_LC</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="GA_CC">GA_CC</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="SC">SC</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="FIN_IA">FIN_IA</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="BD">BD</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="BE">BE</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="RM">RM</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="SP_IA">SP_IA</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="FIN">FIN</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="M_DPS">M_DPS</option>
        			<option class="DIREKTORAT CONSUMER" value="M">M</option>
        			<option class="DIREKTORAT CONSUMER" value="REL">REL</option>
        			<option class="DIREKTORAT CONSUMER" value="LEAD">LEAD</option>
        			<option class="DIREKTORAT CONSUMER" value="PROF">PROF</option>
        			<option class="DIREKTORAT CONSUMER" value="BD">BD</option>
        			<option class="DIREKTORAT CONSUMER" value="SP">SP</option>
        			<option class="DIREKTORAT CONSUMER" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="DIREKTORAT CONSUMER" value="BD_DPS">BD_DPS</option>
        			<option class="DIREKTORAT CONSUMER" value="CC">CC</option>
        			<option class="DIREKTORAT CONSUMER" value="FIN_IA">FIN_IA</option>
        			<option class="DIREKTORAT CONSUMER" value="GA">GA</option>
        			<option class="DIREKTORAT CONSUMER" value="GA_CC">GA_CC</option>
        			<option class="DIREKTORAT CONSUMER" value="BE">BE</option>
        			<option class="DIREKTORAT CONSUMER" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="DIREKTORAT CONSUMER" value="BE_IA">BE_IA</option>
        			<option class="DIREKTORAT CONSUMER" value="RM">RM</option>
        			<option class="DIREKTORAT CONSUMER" value="S">S</option>
        			<option class="DIREKTORAT CONSUMER" value="IT_DPS">IT_DPS</option>
        			<option class="DIREKTORAT CONSUMER" value="RM_IA">RM_IA</option>
        			<option class="DIREKTORAT CONSUMER" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="DIREKTORAT CONSUMER" value="SP_IA">SP_IA</option>
        			<option class="DIREKTORAT CONSUMER" value="FIN">FIN</option>
        			<option class="DIREKTORAT CONSUMER" value="IT_FIN">IT_FIN</option>
        			<option class="DIREKTORAT CONSUMER" value="IT">IT</option>
        			<option class="DIREKTORAT CONSUMER" value="IT_IA">IT_IA</option>
        			<option class="DIREKTORAT CONSUMER" value="BD_PRO">BD_PRO</option>
        			<option class="DIREKTORAT CONSUMER" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="DIREKTORAT CONSUMER" value="IA">IA</option>
        			<option class="DIREKTORAT CONSUMER" value="IA_LC">IA_LC</option>
        			<option class="DIREKTORAT CONSUMER" value="LC">LC</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="BD">BD</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="BE">BE</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="SP">SP</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="LEAD">LEAD</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="PROF">PROF</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="DPS">DPS</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="HC">HC</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="REL">REL</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="SP_IA">SP_IA</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="CC">CC</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="FIN_IA">FIN_IA</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="GA">GA</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="GA_CC">GA_CC</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="BD_PRO">BD_PRO</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="DPS_BD">DPS_BD</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="IT_DPS">IT_DPS</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="LC">LC</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="BE">BE</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="BE_IA">BE_IA</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="M">M</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="S">S</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="LEAD">LEAD</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="PROF">PROF</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="BD">BD</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="BD_PRO">BD_PRO</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="RM">RM</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="REL">REL</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="SP">SP</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="SP_IA">SP_IA</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="M_DPS">M_DPS</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="CC">CC</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="FIN_IA">FIN_IA</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="GA">GA</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="GA_CC">GA_CC</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="HC">HC</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="IT">IT</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="CC">CC</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="HC">HC</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="LEAD">LEAD</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="PROF">PROF</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="IT">IT</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="IT_IA">IT_IA</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="SC">SC</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="FIN_IA">FIN_IA</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="GA">GA</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="GA_CC">GA_CC</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="FIN">FIN</option>
        			<option class="DIREKTORAT KEUANGAN" value="FIN">FIN</option>
        			<option class="DIREKTORAT KEUANGAN" value="LEAD">LEAD</option>
        			<option class="DIREKTORAT KEUANGAN" value="PROF">PROF</option>
        			<option class="DIREKTORAT KEUANGAN" value="BD_DPS">BD_DPS</option>
        			<option class="DIREKTORAT KEUANGAN" value="BE">BE</option>
        			<option class="DIREKTORAT KEUANGAN" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="DIREKTORAT KEUANGAN" value="FIN_IA">FIN_IA</option>
        			<option class="DIREKTORAT KEUANGAN" value="FIN_PRO">FIN_PRO</option>
        			<option class="DIREKTORAT KEUANGAN" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="DIREKTORAT KEUANGAN" value="RM">RM</option>
        			<option class="DIREKTORAT KEUANGAN" value="SC">SC</option>
        			<option class="DIREKTORAT KEUANGAN" value="IT">IT</option>
        			<option class="DIREKTORAT KEUANGAN" value="IT_DPS">IT_DPS</option>
        			<option class="DIREKTORAT KEUANGAN" value="BE_IA">BE_IA</option>
        			<option class="DIREKTORAT KEUANGAN" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="DIREKTORAT KEUANGAN" value="M">M</option>
        			<option class="DIREKTORAT KEUANGAN" value="CC">CC</option>
        			<option class="DIREKTORAT KEUANGAN" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="DIREKTORAT KEUANGAN" value="RM_IA">RM_IA</option>
        			<option class="DIREKTORAT KEUANGAN" value="GA">GA</option>
        			<option class="DIREKTORAT KEUANGAN" value="GA_CC">GA_CC</option>
        			<option class="DIREKTORAT KEUANGAN" value="IT_IA">IT_IA</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="BD">BD</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="M">M</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="REL">REL</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="SP_IA">SP_IA</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="LEAD">LEAD</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="PROF">PROF</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="S">S</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="BE">BE</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="SP">SP</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="CC">CC</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="FIN_IA">FIN_IA</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="GA">GA</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="GA_CC">GA_CC</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="RM">RM</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="BE_IA">BE_IA</option>
        			<option class="Divisi Business Service" value="BE">BE</option>
        			<option class="DIVISI BUSINESS SERVICE" value="BE">BE</option>
        			<option class="Divisi Business Service" value="M">M</option>
        			<option class="DIVISI BUSINESS SERVICE" value="M">M</option>
        			<option class="Divisi Business Service" value="REL">REL</option>
        			<option class="DIVISI BUSINESS SERVICE" value="REL">REL</option>
        			<option class="Divisi Business Service" value="S">S</option>
        			<option class="DIVISI BUSINESS SERVICE" value="S">S</option>
        			<option class="Divisi Business Service" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="DIVISI BUSINESS SERVICE" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="Divisi Business Service" value="LEAD">LEAD</option>
        			<option class="DIVISI BUSINESS SERVICE" value="LEAD">LEAD</option>
        			<option class="Divisi Business Service" value="PROF">PROF</option>
        			<option class="DIVISI BUSINESS SERVICE" value="PROF">PROF</option>
        			<option class="Divisi Business Service" value="BD">BD</option>
        			<option class="DIVISI BUSINESS SERVICE" value="BD">BD</option>
        			<option class="Divisi Business Service" value="IT_DPS">IT_DPS</option>
        			<option class="DIVISI BUSINESS SERVICE" value="IT_DPS">IT_DPS</option>
        			<option class="Divisi Business Service" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="DIVISI BUSINESS SERVICE" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="Divisi Business Service" value="SP">SP</option>
        			<option class="DIVISI BUSINESS SERVICE" value="SP">SP</option>
        			<option class="Divisi Business Service" value="SP_IA">SP_IA</option>
        			<option class="DIVISI BUSINESS SERVICE" value="SP_IA">SP_IA</option>
        			<option class="Divisi Business Service" value="FIN_IA">FIN_IA</option>
        			<option class="DIVISI BUSINESS SERVICE" value="FIN_IA">FIN_IA</option>
        			<option class="Divisi Business Service" value="SC">SC</option>
        			<option class="DIVISI BUSINESS SERVICE" value="SC">SC</option>
        			<option class="Divisi Business Service" value="FIN_RM">FIN_RM</option>
        			<option class="DIVISI BUSINESS SERVICE" value="FIN_RM">FIN_RM</option>
        			<option class="Divisi Business Service" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="DIVISI BUSINESS SERVICE" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="Divisi Business Service" value="RM">RM</option>
        			<option class="DIVISI BUSINESS SERVICE" value="RM">RM</option>
        			<option class="Divisi Business Service" value="IT">IT</option>
        			<option class="DIVISI BUSINESS SERVICE" value="IT">IT</option>
        			<option class="Divisi Business Service" value="IT_IA">IT_IA</option>
        			<option class="DIVISI BUSINESS SERVICE" value="IT_IA">IT_IA</option>
        			<option class="Divisi Business Service" value="BD_PRO">BD_PRO</option>
        			<option class="DIVISI BUSINESS SERVICE" value="BD_PRO">BD_PRO</option>
        			<option class="Divisi Business Service" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="DIVISI BUSINESS SERVICE" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="Divisi Business Service" value="M_DPS">M_DPS</option>
        			<option class="DIVISI BUSINESS SERVICE" value="M_DPS">M_DPS</option>
        			<option class="Divisi Business Service" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="DIVISI BUSINESS SERVICE" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="Divisi Business Service" value="LC">LC</option>
        			<option class="DIVISI BUSINESS SERVICE" value="LC">LC</option>
        			<option class="Divisi Business Service" value="GA">GA</option>
        			<option class="DIVISI BUSINESS SERVICE" value="GA">GA</option>
        			<option class="Divisi Business Service" value="GA_CC">GA_CC</option>
        			<option class="DIVISI BUSINESS SERVICE" value="GA_CC">GA_CC</option>
        			<option class="Divisi Business Service" value="FIN">FIN</option>
        			<option class="DIVISI BUSINESS SERVICE" value="FIN">FIN</option>
        			<option class="DIVISI DIGITAL SERVICE" value="DPS">DPS</option>
        			<option class="DIVISI DIGITAL SERVICE" value="DPS_BD">DPS_BD</option>
        			<option class="DIVISI DIGITAL SERVICE" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="DIVISI DIGITAL SERVICE" value="LEAD">LEAD</option>
        			<option class="DIVISI DIGITAL SERVICE" value="PROF">PROF</option>
        			<option class="DIVISI DIGITAL SERVICE" value="IT_DPS">IT_DPS</option>
        			<option class="DIVISI DIGITAL SERVICE" value="TEL">TEL</option>
        			<option class="DIVISI DIGITAL SERVICE" value="IT">IT</option>
        			<option class="DIVISI DIGITAL SERVICE" value="BD">BD</option>
        			<option class="DIVISI DIGITAL SERVICE" value="SP">SP</option>
        			<option class="DIVISI DIGITAL SERVICE" value="SP_IA">SP_IA</option>
        			<option class="DIVISI DIGITAL SERVICE" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="DIVISI DIGITAL SERVICE" value="BE">BE</option>
        			<option class="DIVISI DIGITAL SERVICE" value="GA">GA</option>
        			<option class="DIVISI DIGITAL SERVICE" value="GA_CC">GA_CC</option>
        			<option class="DIVISI DIGITAL SERVICE" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="DIVISI DIGITAL SERVICE" value="SC">SC</option>
        			<option class="DIVISI DIGITAL SERVICE" value="BD_DPS">BD_DPS</option>
        			<option class="DIVISI DIGITAL SERVICE" value="RM">RM</option>
        			<option class="DIVISI DIGITAL SERVICE" value="REL">REL</option>
        			<option class="DIVISI DIGITAL SERVICE" value="CC">CC</option>
        			<option class="DIVISI DIGITAL SERVICE" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="DIVISI DIGITAL SERVICE" value="FIN">FIN</option>
        			<option class="DIVISI DIGITAL SERVICE" value="IT_TEL">IT_TEL</option>
        			<option class="DIVISI DIGITAL SERVICE" value="BE_IA">BE_IA</option>
        			<option class="DIVISI DIGITAL SERVICE" value="LC">LC</option>
        			<option class="DIVISI DIGITAL SERVICE" value="BD_PRO">BD_PRO</option>
        			<option class="Divisi Enterprise Service" value="BD">BD</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="BD">BD</option>
        			<option class="Divisi Enterprise Service" value="M">M</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="M">M</option>
        			<option class="Divisi Enterprise Service" value="REL">REL</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="REL">REL</option>
        			<option class="Divisi Enterprise Service" value="S">S</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="S">S</option>
        			<option class="Divisi Enterprise Service" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="Divisi Enterprise Service" value="LEAD">LEAD</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="LEAD">LEAD</option>
        			<option class="Divisi Enterprise Service" value="PROF">PROF</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="PROF">PROF</option>
        			<option class="Divisi Enterprise Service" value="BE">BE</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="BE">BE</option>
        			<option class="Divisi Enterprise Service" value="BE_IA">BE_IA</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="BE_IA">BE_IA</option>
        			<option class="Divisi Enterprise Service" value="GA">GA</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="GA">GA</option>
        			<option class="Divisi Enterprise Service" value="HC">HC</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="HC">HC</option>
        			<option class="Divisi Enterprise Service" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="Divisi Enterprise Service" value="SC">SC</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="SC">SC</option>
        			<option class="Divisi Enterprise Service" value="SP">SP</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="SP">SP</option>
        			<option class="Divisi Enterprise Service" value="FIN">FIN</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="FIN">FIN</option>
        			<option class="Divisi Enterprise Service" value="IT_FIN">IT_FIN</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="IT_FIN">IT_FIN</option>
        			<option class="Divisi Enterprise Service" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="Divisi Enterprise Service" value="M_DPS">M_DPS</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="M_DPS">M_DPS</option>
        			<option class="Divisi Enterprise Service" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="Divisi Enterprise Service" value="IT">IT</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="IT">IT</option>
        			<option class="Divisi Enterprise Service" value="GA_CC">GA_CC</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="GA_CC">GA_CC</option>
        			<option class="Divisi Enterprise Service" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="Divisi Enterprise Service" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="Divisi Enterprise Service" value="SP_IA">SP_IA</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="SP_IA">SP_IA</option>
        			<option class="Divisi Enterprise Service" value="RM">RM</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="RM">RM</option>
        			<option class="Divisi Enterprise Service" value="LC">LC</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="LC">LC</option>
        			<option class="Divisi Enterprise Service" value="CC">CC</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="CC">CC</option>
        			<option class="Divisi Enterprise Service" value="BD_PRO">BD_PRO</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="BD_PRO">BD_PRO</option>
        			<option class="Divisi Government Service" value="BD">BD</option>
        			<option class="Divisi Government Service" value="M">M</option>
        			<option class="Divisi Government Service" value="REL">REL</option>
        			<option class="Divisi Government Service" value="S">S</option>
        			<option class="Divisi Government Service" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="Divisi Government Service" value="LEAD">LEAD</option>
        			<option class="Divisi Government Service" value="PROF">PROF</option>
        			<option class="Divisi Government Service" value="SP">SP</option>
        			<option class="Divisi Government Service" value="SP_IA">SP_IA</option>
        			<option class="Divisi Government Service" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="Divisi Government Service" value="LC">LC</option>
        			<option class="Divisi Government Service" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="Divisi Government Service" value="BE_IA">BE_IA</option>
        			<option class="Divisi Government Service" value="IT_FIN">IT_FIN</option>
        			<option class="Divisi Government Service" value="FIN">FIN</option>
        			<option class="Divisi Government Service" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="Divisi Government Service" value="BE">BE</option>
        			<option class="Divisi Government Service" value="HC">HC</option>
        			<option class="Divisi Government Service" value="RM">RM</option>
        			<option class="Divisi Government Service" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="Divisi Government Service" value="SC">SC</option>
        			<option class="Divisi Government Service" value="GA">GA</option>
        			<option class="Divisi Government Service" value="GA_CC">GA_CC</option>
        			<option class="Divisi Government Service" value="IT">IT</option>
        			<option class="Divisi Government Service" value="IT_DPS">IT_DPS</option>
        			<option class="Divisi Government Service" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="Divisi Government Service" value="BD_PRO">BD_PRO</option>
        		</select>
        	</div>

          <div class="col-sm-2 col-md-2 float-left mt-5">
            <button class="form-control btn-primary">Submit</button>
          </div>


		<div class="col-sm-12 col-md-12 mb-4">
            <div class="card cs-card wow fadeInLeft" data-wow-delay="0.2s">
                <div class="card-body">
                  <div class="info-text text-center">
                    <h3>Average Score Skill by Age(Academy)</h3>
                  </div>
                  <canvas id=""> </canvas>
                </div>
            </div>
        </div>
		
		<div class="col-sm-12 col-md-12 mb-4">
            <div class="card cs-card wow fadeInLeft" data-wow-delay="0.2s">
                <div class="card-body">
                  <div class="info-text text-center">
                    <h3>Distribution Skill by Age(Academy)</h3>
                  </div>
                  <canvas id=""> </canvas>
                </div>
            </div>
        </div>

        <hr>
        
        	<div class="col-sm-4 col-md-4  float-left mt-5 mb-4">
        		<select class="form-control" id="filterUbis" name="ubisdesc">
        			<option value="" selected="selected">Select UBIS</option>
        			<option value="KOPTEL">KOPTEL</option>
        			<option value="PT. ADMEDIKA">PT. ADMEDIKA</option>
        			<option value="PT. GRAHA SARANA DUTA">PT. GRAHA SARANA DUTA</option>
        			<option value="PT. GRAHA TELKOMSIGMA">PT. GRAHA TELKOMSIGMA</option>
        			<option value="PT. GRATIKA">PT. GRATIKA</option>
        			<option value="PT. INFOMEDIA NUSANTARA">PT. INFOMEDIA NUSANTARA</option>
        			<option value="PT. SIGMA CIPTA CARAKA">PT. SIGMA CIPTA CARAKA</option>
        			<option value="PT. SIGMA SOLUSI INTEGRASI">PT. SIGMA SOLUSI INTEGRASI</option>
        			<option value="PT. SIGNET PRATAMA">PT. SIGNET PRATAMA</option>
        			<option value="PT. TELTRANET APLIKASI SOLUSI">PT. TELTRANET APLIKASI SOLUSI</option>
        			<option value="YAYASAN PENDIDIKAN TELKOM">YAYASAN PENDIDIKAN TELKOM</option>
        			<option value="ASSESSMENT CENTER INDONESIA">ASSESSMENT CENTER INDONESIA</option>
        			<option value="ASSET MANAGEMENT CENTER">ASSET MANAGEMENT CENTER</option>
        			<option value="COMMUNITY DEVELOPMENT CENTER">COMMUNITY DEVELOPMENT CENTER</option>
        			<option value="CORPORATE SECRETARY DEPARTMENT">CORPORATE SECRETARY DEPARTMENT</option>
        			<option value="DIREKTORAT CONSUMER">DIREKTORAT CONSUMER</option>
        			<option value="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO">DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO</option>
        			<option value="DIREKTORAT ENTERPRISE & BUSINESS SERVICE">DIREKTORAT ENTERPRISE & BUSINESS SERVICE</option>
        			<option value="DIREKTORAT HUMAN CAPITAL MANAGEMENT">DIREKTORAT HUMAN CAPITAL MANAGEMENT</option>
        			<option value="DIREKTORAT KEUANGAN">DIREKTORAT KEUANGAN</option>
        			<option value="DIREKTORAT WHOLESALE&INTERNATIONAL SERV">DIREKTORAT WHOLESALE&INTERNATIONAL SERV</option>
        			<option value="DIVISI BUSINESS SERVICE">DIVISI BUSINESS SERVICE</option>
        			<option value="DIVISI DIGITAL SERVICE">DIVISI DIGITAL SERVICE</option>
        			<option value="DIVISI ENTERPRISE SERVICE">DIVISI ENTERPRISE SERVICE</option>
        			<option value="Divisi Government Service">Divisi Government Service</option>
        		</select>
        	</div>

        	<div class="col-sm-4 col-md-4 float-left mt-5">
        		<select class="form-control" id="filterSkillsGroup" name="ccgroup">
        			<option value="" selected="selected">Select Skills Group</option>
        			<option class="KOPTEL" value="FIN">FIN</option>
        			<option class="KOPTEL" value="LEAD">LEAD</option>
        			<option class="KOPTEL" value="PROF">PROF</option>
        			<option class="KOPTEL" value="M">M</option>
        			<option class="KOPTEL" value="REL">REL</option>
        			<option class="KOPTEL" value="BE">BE</option>
        			<option class="KOPTEL" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="KOPTEL" value="GA">GA</option>
        			<option class="KOPTEL" value="HC">HC</option>
        			<option class="KOPTEL" value="BD">BD</option>
        			<option class="KOPTEL" value="PRO">PRO</option>
        			<option class="KOPTEL" value="CC">CC</option>
        			<option class="KOPTEL" value="M_DPS">M_DPS</option>
        			<option class="KOPTEL" value="LC">LC</option>
        			<option class="KOPTEL" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="KOPTEL" value="GA_CC">GA_CC</option>
        			<option class="KOPTEL" value="S">S</option>
        			<option class="KOPTEL" value="DPS">DPS</option>
        			<option class="KOPTEL" value="IT_FIN">IT_FIN</option>
        			<option class="KOPTEL" value="SC">SC</option>
        			<option class="PT. ADMEDIKA" value="GA">GA</option>
        			<option class="PT. ADMEDIKA" value="GA_CC">GA_CC</option>
        			<option class="PT. ADMEDIKA" value="HE">HE</option>
        			<option class="PT. ADMEDIKA" value="LEAD">LEAD</option>
        			<option class="PT. ADMEDIKA" value="PROF">PROF</option>
        			<option class="PT. GRAHA SARANA DUTA" value="BE">BE</option>
        			<option class="PT. GRAHA SARANA DUTA" value="GA_CC">GA_CC</option>
        			<option class="PT. GRAHA SARANA DUTA" value="RM">RM</option>
        			<option class="PT. GRAHA SARANA DUTA" value="LEAD">LEAD</option>
        			<option class="PT. GRAHA SARANA DUTA" value="PROF">PROF</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="BD">BD</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="DPS">DPS</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="HC">HC</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="IT">IT</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="M">M</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="PRO">PRO</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="RM">RM</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="LEAD">LEAD</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="PROF">PROF</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="SC">SC</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="SP">SP</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="SP_IA">SP_IA</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="SP_IA_">SP_IA_</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="IT_DPS">IT_DPS</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="BE">BE</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="GA">GA</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="GA_CC">GA_CC</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="REL">REL</option>
        			<option class="PT. GRAHA TELKOMSIGMA" value="S">S</option>
        			<option class="PT. GRATIKA" value="FIN">FIN</option>
        			<option class="PT. GRATIKA" value="FIN_IA">FIN_IA</option>
        			<option class="PT. GRATIKA" value="HC">HC</option>
        			<option class="PT. GRATIKA" value="SC">SC</option>
        			<option class="PT. GRATIKA" value="LEAD">LEAD</option>
        			<option class="PT. GRATIKA" value="PROF">PROF</option>
        			<option class="PT. INFOMEDIA NUSANTARA" value="HC">HC</option>
        			<option class="PT. INFOMEDIA NUSANTARA" value="LEAD">LEAD</option>
        			<option class="PT. INFOMEDIA NUSANTARA" value="PROF">PROF</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="FIN">FIN</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="HC">HC</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="SP">SP</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="LEAD">LEAD</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="PROF">PROF</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="BD">BD</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="BE">BE</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="DPS">DPS</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="IT">IT</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="IT_DPS">IT_DPS</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="SC">SC</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="IT_TEL">IT_TEL</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="IT_TEL_RM">IT_TEL_RM</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="TEL">TEL</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="GA_CC">GA_CC</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="PRO">PRO</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="REL">REL</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="S">S</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="SP_IA">SP_IA</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="SP_IA_">SP_IA_</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="BD_DPS">BD_DPS</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="M">M</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="IT_IA">IT_IA</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="GA">GA</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="FIN_IA">FIN_IA</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="RM">RM</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="RMG">RMG</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="BD_PRO">BD_PRO</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="EDU">EDU</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="IA_LC">IA_LC</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="LC">LC</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="DPS_BD">DPS_BD</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="CC">CC</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="CC_RMG">CC_RMG</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="FIN_RM">FIN_RM</option>
        			<option class="PT. SIGMA CIPTA CARAKA" value="BE_IA">BE_IA</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="DPS">DPS</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="IT">IT</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="IT_DPS">IT_DPS</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="LEAD">LEAD</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="PROF">PROF</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="BD">BD</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="REL">REL</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="S">S</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="BE">BE</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="SC">SC</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="FIN">FIN</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="GA">GA</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="GA_CC">GA_CC</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="M">M</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="PRO">PRO</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="HC">HC</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="RM">RM</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="IT_TEL">IT_TEL</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="SP">SP</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="SP_IA">SP_IA</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="SP_IA_">SP_IA_</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="IT_IA">IT_IA</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="TEL">TEL</option>
        			<option class="PT. SIGMA SOLUSI INTEGRASI" value="RMG">RMG</option>
        			<option class="PT. SIGNET PRATAMA" value="IT">IT</option>
        			<option class="PT. SIGNET PRATAMA" value="IT_DPS">IT_DPS</option>
        			<option class="PT. SIGNET PRATAMA" value="IT_IA">IT_IA</option>
        			<option class="PT. SIGNET PRATAMA" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="PT. SIGNET PRATAMA" value="TEL">TEL</option>
        			<option class="PT. SIGNET PRATAMA" value="LEAD">LEAD</option>
        			<option class="PT. SIGNET PRATAMA" value="PROF">PROF</option>
        			<option class="PT. SIGNET PRATAMA" value="BD">BD</option>
        			<option class="PT. SIGNET PRATAMA" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="PT. SIGNET PRATAMA" value="DPS">DPS</option>
        			<option class="PT. SIGNET PRATAMA" value="HC">HC</option>
        			<option class="PT. SIGNET PRATAMA" value="M">M</option>
        			<option class="PT. SIGNET PRATAMA" value="PRO">PRO</option>
        			<option class="PT. SIGNET PRATAMA" value="RM">RM</option>
        			<option class="PT. SIGNET PRATAMA" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="PT. SIGNET PRATAMA" value="BE">BE</option>
        			<option class="PT. SIGNET PRATAMA" value="GA_CC">GA_CC</option>
        			<option class="PT. SIGNET PRATAMA" value="SC">SC</option>
        			<option class="PT. SIGNET PRATAMA" value="GA">GA</option>
        			<option class="PT. SIGNET PRATAMA" value="S">S</option>
        			<option class="PT. SIGNET PRATAMA" value="FIN">FIN</option>
        			<option class="PT. SIGNET PRATAMA" value="IT_TEL">IT_TEL</option>
        			<option class="PT. SIGNET PRATAMA" value="REL">REL</option>
        			<option class="PT. SIGNET PRATAMA" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="PT. SIGNET PRATAMA" value="RMG">RMG</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="BD">BD</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="BD">BD</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="BD_DPS">BD_DPS</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="BD_DPS">BD_DPS</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="DPS">DPS</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="DPS">DPS</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="M">M</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="M">M</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="SP_IA">SP_IA</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="SP_IA">SP_IA</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="LEAD">LEAD</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="LEAD">LEAD</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="PROF">PROF</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="PROF">PROF</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="SP">SP</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="SP">SP</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="REL">REL</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="REL">REL</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="S">S</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="S">S</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="SC">SC</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="SC">SC</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="TEL">TEL</option>
        			<option class="PT. TELTRANET APLIKASI SOLUSI" value="TEL">TEL</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="EDU">EDU</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="LEAD">LEAD</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="PROF">PROF</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="FIN">FIN</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="GA">GA</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="GA_CC">GA_CC</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="HC">HC</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="SC">SC</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="FIN_IA">FIN_IA</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="BD">BD</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="M">M</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="BE">BE</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="IT">IT</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="M_DPS">M_DPS</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="REL">REL</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="IT_IA">IT_IA</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="SP">SP</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="PRO">PRO</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="IA">IA</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="LC">LC</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="RM">RM</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="IT_TEL">IT_TEL</option>
        			<option class="YAYASAN PENDIDIKAN TELKOM" value="BD_DPS">BD_DPS</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="BD">BD</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="HC">HC</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="LEAD">LEAD</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="PROF">PROF</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="GA">GA</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="SC">SC</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="M_DPS">M_DPS</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="IT">IT</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="IT_IA">IT_IA</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="REL">REL</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="GA_CC">GA_CC</option>
        			<option class="ASSESSMENT CENTER INDONESIA" value="S">S</option>
        			<option class="ASSET MANAGEMENT CENTER" value="BD_DPS">BD_DPS</option>
        			<option class="ASSET MANAGEMENT CENTER" value="FIN">FIN</option>
        			<option class="ASSET MANAGEMENT CENTER" value="LEAD">LEAD</option>
        			<option class="ASSET MANAGEMENT CENTER" value="PROF">PROF</option>
        			<option class="ASSET MANAGEMENT CENTER" value="BE">BE</option>
        			<option class="ASSET MANAGEMENT CENTER" value="GA">GA</option>
        			<option class="ASSET MANAGEMENT CENTER" value="GA_CC">GA_CC</option>
        			<option class="ASSET MANAGEMENT CENTER" value="SC">SC</option>
        			<option class="ASSET MANAGEMENT CENTER" value="PRO">PRO</option>
        			<option class="ASSET MANAGEMENT CENTER" value="CC">CC</option>
        			<option class="ASSET MANAGEMENT CENTER" value="IT">IT</option>
        			<option class="ASSET MANAGEMENT CENTER" value="IT_IA">IT_IA</option>
        			<option class="ASSET MANAGEMENT CENTER" value="LC">LC</option>
        			<option class="ASSET MANAGEMENT CENTER" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="BD">BD</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="BE">BE</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="CC">CC</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="SCD">SCD</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="LEAD">LEAD</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="PROF">PROF</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="FIN">FIN</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="FIN_IA">FIN_IA</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="BE_IA">BE_IA</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="RM">RM</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="GA">GA</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="GA_CC">GA_CC</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="IT">IT</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="IT_IA">IT_IA</option>
        			<option class="COMMUNITY DEVELOPMENT CENTER" value="SC">SC</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="CC">CC</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="GA">GA</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="PRO">PRO</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="LEAD">LEAD</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="PROF">PROF</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="CC_RMG">CC_RMG</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="LC">LC</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="IT">IT</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="IA_LC">IA_LC</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="GA_CC">GA_CC</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="SC">SC</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="FIN_IA">FIN_IA</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="BD">BD</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="BE">BE</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="RM">RM</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="SP_IA">SP_IA</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="FIN">FIN</option>
        			<option class="CORPORATE SECRETARY DEPARTMENT" value="M_DPS">M_DPS</option>
        			<option class="DIREKTORAT CONSUMER" value="M">M</option>
        			<option class="DIREKTORAT CONSUMER" value="REL">REL</option>
        			<option class="DIREKTORAT CONSUMER" value="LEAD">LEAD</option>
        			<option class="DIREKTORAT CONSUMER" value="PROF">PROF</option>
        			<option class="DIREKTORAT CONSUMER" value="BD">BD</option>
        			<option class="DIREKTORAT CONSUMER" value="SP">SP</option>
        			<option class="DIREKTORAT CONSUMER" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="DIREKTORAT CONSUMER" value="BD_DPS">BD_DPS</option>
        			<option class="DIREKTORAT CONSUMER" value="CC">CC</option>
        			<option class="DIREKTORAT CONSUMER" value="FIN_IA">FIN_IA</option>
        			<option class="DIREKTORAT CONSUMER" value="GA">GA</option>
        			<option class="DIREKTORAT CONSUMER" value="GA_CC">GA_CC</option>
        			<option class="DIREKTORAT CONSUMER" value="BE">BE</option>
        			<option class="DIREKTORAT CONSUMER" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="DIREKTORAT CONSUMER" value="BE_IA">BE_IA</option>
        			<option class="DIREKTORAT CONSUMER" value="RM">RM</option>
        			<option class="DIREKTORAT CONSUMER" value="S">S</option>
        			<option class="DIREKTORAT CONSUMER" value="IT_DPS">IT_DPS</option>
        			<option class="DIREKTORAT CONSUMER" value="RM_IA">RM_IA</option>
        			<option class="DIREKTORAT CONSUMER" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="DIREKTORAT CONSUMER" value="SP_IA">SP_IA</option>
        			<option class="DIREKTORAT CONSUMER" value="FIN">FIN</option>
        			<option class="DIREKTORAT CONSUMER" value="IT_FIN">IT_FIN</option>
        			<option class="DIREKTORAT CONSUMER" value="IT">IT</option>
        			<option class="DIREKTORAT CONSUMER" value="IT_IA">IT_IA</option>
        			<option class="DIREKTORAT CONSUMER" value="BD_PRO">BD_PRO</option>
        			<option class="DIREKTORAT CONSUMER" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="DIREKTORAT CONSUMER" value="IA">IA</option>
        			<option class="DIREKTORAT CONSUMER" value="IA_LC">IA_LC</option>
        			<option class="DIREKTORAT CONSUMER" value="LC">LC</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="BD">BD</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="BE">BE</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="SP">SP</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="LEAD">LEAD</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="PROF">PROF</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="DPS">DPS</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="HC">HC</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="REL">REL</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="SP_IA">SP_IA</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="CC">CC</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="FIN_IA">FIN_IA</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="GA">GA</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="GA_CC">GA_CC</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="BD_PRO">BD_PRO</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="DPS_BD">DPS_BD</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="IT_DPS">IT_DPS</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="LC">LC</option>
        			<option class="DIREKTORAT DIGITAL & STRATEGIC PORTFOLIO" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="BE">BE</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="BE_IA">BE_IA</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="M">M</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="S">S</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="LEAD">LEAD</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="PROF">PROF</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="BD">BD</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="BD_PRO">BD_PRO</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="RM">RM</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="REL">REL</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="SP">SP</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="SP_IA">SP_IA</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="M_DPS">M_DPS</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="CC">CC</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="FIN_IA">FIN_IA</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="GA">GA</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="GA_CC">GA_CC</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="HC">HC</option>
        			<option class="DIREKTORAT ENTERPRISE & BUSINESS SERVICE" value="IT">IT</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="CC">CC</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="HC">HC</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="LEAD">LEAD</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="PROF">PROF</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="IT">IT</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="IT_IA">IT_IA</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="SC">SC</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="FIN_IA">FIN_IA</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="GA">GA</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="GA_CC">GA_CC</option>
        			<option class="DIREKTORAT HUMAN CAPITAL MANAGEMENT" value="FIN">FIN</option>
        			<option class="DIREKTORAT KEUANGAN" value="FIN">FIN</option>
        			<option class="DIREKTORAT KEUANGAN" value="LEAD">LEAD</option>
        			<option class="DIREKTORAT KEUANGAN" value="PROF">PROF</option>
        			<option class="DIREKTORAT KEUANGAN" value="BD_DPS">BD_DPS</option>
        			<option class="DIREKTORAT KEUANGAN" value="BE">BE</option>
        			<option class="DIREKTORAT KEUANGAN" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="DIREKTORAT KEUANGAN" value="FIN_IA">FIN_IA</option>
        			<option class="DIREKTORAT KEUANGAN" value="FIN_PRO">FIN_PRO</option>
        			<option class="DIREKTORAT KEUANGAN" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="DIREKTORAT KEUANGAN" value="RM">RM</option>
        			<option class="DIREKTORAT KEUANGAN" value="SC">SC</option>
        			<option class="DIREKTORAT KEUANGAN" value="IT">IT</option>
        			<option class="DIREKTORAT KEUANGAN" value="IT_DPS">IT_DPS</option>
        			<option class="DIREKTORAT KEUANGAN" value="BE_IA">BE_IA</option>
        			<option class="DIREKTORAT KEUANGAN" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="DIREKTORAT KEUANGAN" value="M">M</option>
        			<option class="DIREKTORAT KEUANGAN" value="CC">CC</option>
        			<option class="DIREKTORAT KEUANGAN" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="DIREKTORAT KEUANGAN" value="RM_IA">RM_IA</option>
        			<option class="DIREKTORAT KEUANGAN" value="GA">GA</option>
        			<option class="DIREKTORAT KEUANGAN" value="GA_CC">GA_CC</option>
        			<option class="DIREKTORAT KEUANGAN" value="IT_IA">IT_IA</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="BD">BD</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="M">M</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="REL">REL</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="SP_IA">SP_IA</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="LEAD">LEAD</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="PROF">PROF</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="S">S</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="BE">BE</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="SP">SP</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="CC">CC</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="FIN_IA">FIN_IA</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="GA">GA</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="GA_CC">GA_CC</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="RM">RM</option>
        			<option class="DIREKTORAT WHOLESALE&INTERNATIONAL SERV" value="BE_IA">BE_IA</option>
        			<option class="Divisi Business Service" value="BE">BE</option>
        			<option class="DIVISI BUSINESS SERVICE" value="BE">BE</option>
        			<option class="Divisi Business Service" value="M">M</option>
        			<option class="DIVISI BUSINESS SERVICE" value="M">M</option>
        			<option class="Divisi Business Service" value="REL">REL</option>
        			<option class="DIVISI BUSINESS SERVICE" value="REL">REL</option>
        			<option class="Divisi Business Service" value="S">S</option>
        			<option class="DIVISI BUSINESS SERVICE" value="S">S</option>
        			<option class="Divisi Business Service" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="DIVISI BUSINESS SERVICE" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="Divisi Business Service" value="LEAD">LEAD</option>
        			<option class="DIVISI BUSINESS SERVICE" value="LEAD">LEAD</option>
        			<option class="Divisi Business Service" value="PROF">PROF</option>
        			<option class="DIVISI BUSINESS SERVICE" value="PROF">PROF</option>
        			<option class="Divisi Business Service" value="BD">BD</option>
        			<option class="DIVISI BUSINESS SERVICE" value="BD">BD</option>
        			<option class="Divisi Business Service" value="IT_DPS">IT_DPS</option>
        			<option class="DIVISI BUSINESS SERVICE" value="IT_DPS">IT_DPS</option>
        			<option class="Divisi Business Service" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="DIVISI BUSINESS SERVICE" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="Divisi Business Service" value="SP">SP</option>
        			<option class="DIVISI BUSINESS SERVICE" value="SP">SP</option>
        			<option class="Divisi Business Service" value="SP_IA">SP_IA</option>
        			<option class="DIVISI BUSINESS SERVICE" value="SP_IA">SP_IA</option>
        			<option class="Divisi Business Service" value="FIN_IA">FIN_IA</option>
        			<option class="DIVISI BUSINESS SERVICE" value="FIN_IA">FIN_IA</option>
        			<option class="Divisi Business Service" value="SC">SC</option>
        			<option class="DIVISI BUSINESS SERVICE" value="SC">SC</option>
        			<option class="Divisi Business Service" value="FIN_RM">FIN_RM</option>
        			<option class="DIVISI BUSINESS SERVICE" value="FIN_RM">FIN_RM</option>
        			<option class="Divisi Business Service" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="DIVISI BUSINESS SERVICE" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="Divisi Business Service" value="RM">RM</option>
        			<option class="DIVISI BUSINESS SERVICE" value="RM">RM</option>
        			<option class="Divisi Business Service" value="IT">IT</option>
        			<option class="DIVISI BUSINESS SERVICE" value="IT">IT</option>
        			<option class="Divisi Business Service" value="IT_IA">IT_IA</option>
        			<option class="DIVISI BUSINESS SERVICE" value="IT_IA">IT_IA</option>
        			<option class="Divisi Business Service" value="BD_PRO">BD_PRO</option>
        			<option class="DIVISI BUSINESS SERVICE" value="BD_PRO">BD_PRO</option>
        			<option class="Divisi Business Service" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="DIVISI BUSINESS SERVICE" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="Divisi Business Service" value="M_DPS">M_DPS</option>
        			<option class="DIVISI BUSINESS SERVICE" value="M_DPS">M_DPS</option>
        			<option class="Divisi Business Service" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="DIVISI BUSINESS SERVICE" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="Divisi Business Service" value="LC">LC</option>
        			<option class="DIVISI BUSINESS SERVICE" value="LC">LC</option>
        			<option class="Divisi Business Service" value="GA">GA</option>
        			<option class="DIVISI BUSINESS SERVICE" value="GA">GA</option>
        			<option class="Divisi Business Service" value="GA_CC">GA_CC</option>
        			<option class="DIVISI BUSINESS SERVICE" value="GA_CC">GA_CC</option>
        			<option class="Divisi Business Service" value="FIN">FIN</option>
        			<option class="DIVISI BUSINESS SERVICE" value="FIN">FIN</option>
        			<option class="DIVISI DIGITAL SERVICE" value="DPS">DPS</option>
        			<option class="DIVISI DIGITAL SERVICE" value="DPS_BD">DPS_BD</option>
        			<option class="DIVISI DIGITAL SERVICE" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="DIVISI DIGITAL SERVICE" value="LEAD">LEAD</option>
        			<option class="DIVISI DIGITAL SERVICE" value="PROF">PROF</option>
        			<option class="DIVISI DIGITAL SERVICE" value="IT_DPS">IT_DPS</option>
        			<option class="DIVISI DIGITAL SERVICE" value="TEL">TEL</option>
        			<option class="DIVISI DIGITAL SERVICE" value="IT">IT</option>
        			<option class="DIVISI DIGITAL SERVICE" value="BD">BD</option>
        			<option class="DIVISI DIGITAL SERVICE" value="SP">SP</option>
        			<option class="DIVISI DIGITAL SERVICE" value="SP_IA">SP_IA</option>
        			<option class="DIVISI DIGITAL SERVICE" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="DIVISI DIGITAL SERVICE" value="BE">BE</option>
        			<option class="DIVISI DIGITAL SERVICE" value="GA">GA</option>
        			<option class="DIVISI DIGITAL SERVICE" value="GA_CC">GA_CC</option>
        			<option class="DIVISI DIGITAL SERVICE" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="DIVISI DIGITAL SERVICE" value="SC">SC</option>
        			<option class="DIVISI DIGITAL SERVICE" value="BD_DPS">BD_DPS</option>
        			<option class="DIVISI DIGITAL SERVICE" value="RM">RM</option>
        			<option class="DIVISI DIGITAL SERVICE" value="REL">REL</option>
        			<option class="DIVISI DIGITAL SERVICE" value="CC">CC</option>
        			<option class="DIVISI DIGITAL SERVICE" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="DIVISI DIGITAL SERVICE" value="FIN">FIN</option>
        			<option class="DIVISI DIGITAL SERVICE" value="IT_TEL">IT_TEL</option>
        			<option class="DIVISI DIGITAL SERVICE" value="BE_IA">BE_IA</option>
        			<option class="DIVISI DIGITAL SERVICE" value="LC">LC</option>
        			<option class="DIVISI DIGITAL SERVICE" value="BD_PRO">BD_PRO</option>
        			<option class="Divisi Enterprise Service" value="BD">BD</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="BD">BD</option>
        			<option class="Divisi Enterprise Service" value="M">M</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="M">M</option>
        			<option class="Divisi Enterprise Service" value="REL">REL</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="REL">REL</option>
        			<option class="Divisi Enterprise Service" value="S">S</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="S">S</option>
        			<option class="Divisi Enterprise Service" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="Divisi Enterprise Service" value="LEAD">LEAD</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="LEAD">LEAD</option>
        			<option class="Divisi Enterprise Service" value="PROF">PROF</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="PROF">PROF</option>
        			<option class="Divisi Enterprise Service" value="BE">BE</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="BE">BE</option>
        			<option class="Divisi Enterprise Service" value="BE_IA">BE_IA</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="BE_IA">BE_IA</option>
        			<option class="Divisi Enterprise Service" value="GA">GA</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="GA">GA</option>
        			<option class="Divisi Enterprise Service" value="HC">HC</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="HC">HC</option>
        			<option class="Divisi Enterprise Service" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="Divisi Enterprise Service" value="SC">SC</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="SC">SC</option>
        			<option class="Divisi Enterprise Service" value="SP">SP</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="SP">SP</option>
        			<option class="Divisi Enterprise Service" value="FIN">FIN</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="FIN">FIN</option>
        			<option class="Divisi Enterprise Service" value="IT_FIN">IT_FIN</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="IT_FIN">IT_FIN</option>
        			<option class="Divisi Enterprise Service" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="Divisi Enterprise Service" value="M_DPS">M_DPS</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="M_DPS">M_DPS</option>
        			<option class="Divisi Enterprise Service" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="Divisi Enterprise Service" value="IT">IT</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="IT">IT</option>
        			<option class="Divisi Enterprise Service" value="GA_CC">GA_CC</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="GA_CC">GA_CC</option>
        			<option class="Divisi Enterprise Service" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="Divisi Enterprise Service" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="Divisi Enterprise Service" value="SP_IA">SP_IA</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="SP_IA">SP_IA</option>
        			<option class="Divisi Enterprise Service" value="RM">RM</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="RM">RM</option>
        			<option class="Divisi Enterprise Service" value="LC">LC</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="LC">LC</option>
        			<option class="Divisi Enterprise Service" value="CC">CC</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="CC">CC</option>
        			<option class="Divisi Enterprise Service" value="BD_PRO">BD_PRO</option>
        			<option class="DIVISI ENTERPRISE SERVICE" value="BD_PRO">BD_PRO</option>
        			<option class="Divisi Government Service" value="BD">BD</option>
        			<option class="Divisi Government Service" value="M">M</option>
        			<option class="Divisi Government Service" value="REL">REL</option>
        			<option class="Divisi Government Service" value="S">S</option>
        			<option class="Divisi Government Service" value="SP_IA_PRO">SP_IA_PRO</option>
        			<option class="Divisi Government Service" value="LEAD">LEAD</option>
        			<option class="Divisi Government Service" value="PROF">PROF</option>
        			<option class="Divisi Government Service" value="SP">SP</option>
        			<option class="Divisi Government Service" value="SP_IA">SP_IA</option>
        			<option class="Divisi Government Service" value="BD_IT_DPS">BD_IT_DPS</option>
        			<option class="Divisi Government Service" value="LC">LC</option>
        			<option class="Divisi Government Service" value="LC_IA_RMG">LC_IA_RMG</option>
        			<option class="Divisi Government Service" value="BE_IA">BE_IA</option>
        			<option class="Divisi Government Service" value="IT_FIN">IT_FIN</option>
        			<option class="Divisi Government Service" value="FIN">FIN</option>
        			<option class="Divisi Government Service" value="IT_SC_PRO">IT_SC_PRO</option>
        			<option class="Divisi Government Service" value="BE">BE</option>
        			<option class="Divisi Government Service" value="HC">HC</option>
        			<option class="Divisi Government Service" value="RM">RM</option>
        			<option class="Divisi Government Service" value="REL_DPS_SP">REL_DPS_SP</option>
        			<option class="Divisi Government Service" value="SC">SC</option>
        			<option class="Divisi Government Service" value="GA">GA</option>
        			<option class="Divisi Government Service" value="GA_CC">GA_CC</option>
        			<option class="Divisi Government Service" value="IT">IT</option>
        			<option class="Divisi Government Service" value="IT_DPS">IT_DPS</option>
        			<option class="Divisi Government Service" value="SP_DPS_IA">SP_DPS_IA</option>
        			<option class="Divisi Government Service" value="BD_PRO">BD_PRO</option>
        		</select>
        	</div>
          <div class="col-sm-2 col-md-2 float-left mt-5">
            <button class="form-control btn-primary">Submit</button>
          </div>


		  <div class="col-sm-12 col-md-12 mb-4">
            <div class="card cs-card wow fadeInLeft" data-wow-delay="0.2s">
                <div class="card-body">
                  <div class="info-text text-center">
                    <h3>Average Score Skill by Age(Academy)</h3>
                  </div>
                  <canvas id=""> </canvas>
                </div>
            </div>
          </div>

		  <div class="col-sm-12 col-md-12 mb-4">
            <div class="card cs-card wow fadeInLeft" data-wow-delay="0.2s">
                <div class="card-body">
                  <div class="info-text text-center">
                    <h3>Distibution Skill by Age(Academy)</h3>
                  </div>
                  <canvas id=""> </canvas>
                </div>
            </div>
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