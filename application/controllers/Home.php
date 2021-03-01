<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('overview/Model_all_in_one');
		$this->load->model('overview/Model_performance');
		// $this->load->model('overview/Model_ubpp_overview');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = [
			'judul' => 'Home - Learning Analytics',

			'konten' => 'usr_views/home',
			'footerGraph' => []

		];
		$this->load->view('usr_layout/master', $data);
		//$this->load->view('welcome_message');
	}



	public function all_in_one()
	{
	
		$data = [

			'judul' => 'Management All in One',
			'konten' => 'overview/all_in_one',
			'graph' => [],
			'footerGraph' => []

		];
		$this->load->view('usr_layout/master', $data);
	}

	public function performance()
	{

		$selectedTahun = $this->getTahunSelected();
		$indexFirstTahun = $selectedTahun[0]->tahun;
		$academyCfu = $this->getAcademyCfu($indexFirstTahun);
		$academyFu = $this->getAcademyFu($indexFirstTahun);
		$deliveryTraining = $this->getDeliveryTraining($indexFirstTahun);
		$academyLearning = $this->getAcademyLearning($indexFirstTahun);
		$data = [
			'academyCfu' => $academyCfu,
			'academyFu' => $academyFu,
			'deliveryTraining' => $deliveryTraining,
			'academyLearning' => $academyLearning,
			'judul' => 'Management Performance',
			'konten' => 'overview/performance',
			'graph' => [],
			'footerGraph' => []

		];
		$this->load->view('usr_layout/master', $data);
	}

	public function getAcademyCfu($tahun)
	{
		$academyCfu = $this->Model_performance->getAcademyCfu($tahun);
		$ubis = [];
		$requestnew = [];
		$replacement = [];
		$planned = [];
		$cancelled = [];

		foreach ($academyCfu as $ac) {
			//var_dump($ac);
			array_push($ubis, $ac->deskripsi);
			array_push($requestnew, $ac->requestnew);
			array_push($replacement, $ac->replacement);
			array_push($planned, $ac->planned);
			array_push($cancelled, $ac->cancelled);
		}

		//die();
		$data = [
			'ubis' => $ubis,
			'requestnew' => $requestnew,
			'replacement' => $replacement,
			'planned' => $planned,
			'cancelled' => $cancelled,

		];
		return $data;
	}

	public function getAcademyFu($tahun){
        $academyFu = $this->Model_performance->getAcademyFu($tahun);
        $ubis = [];
        $delivered = [];
        $nondelivered = [];

        foreach ($academyFu as $ac) {
            //var_dump($ac);
            array_push($ubis, $ac->deskripsi);
            array_push($delivered, $ac->delivered);
            array_push($nondelivered, $ac->nondelivered);
        }

        //die();
        $data = [
            'ubis' => $ubis,
            'delivered' => $delivered,
            'nondelivered' => $nondelivered,

        ];
        return $data;
    }

	public function getDeliveryTraining($tahun)
	{
		$nilaiDelivTraining = $this->Model_performance->getDeliveryTraining($tahun);
		$delivery = [];
		foreach ($nilaiDelivTraining as $dt) {
			array_push($delivery, $dt->delivered);
			array_push($delivery, $dt->nondelivered);
		}
		$data = [
			'delivery' => $delivery
		];
		return $data;
	}

	public function getAcademyLearning($tahun){
        $academyLearning = $this->Model_performance->getAcademyLearning($tahun);
        
        $ubis= [];
        $tes1= [];
        $tes2= [];
        $tes3= [];
        $tes4= [];

        foreach($academyLearning as $dt) {
             //var_dump($dt);
             array_push($ubis, $dt->deskripsi);
             array_push($tes1, $dt->tes1);
             array_push($tes2, $dt->tes2);
             array_push($tes3, $dt->tes3);
             array_push($tes4, $dt->tes4);

        }

        //die();
        $data = [
            'ubis' => $ubis,
            'tes1' => $tes1,
            'tes2' => $tes2,
            'tes3' => $tes3,
            'tes4' => $tes4

        ];
        return $data;
    }

	public function getTahunSelected()
	{
		$selectedTahun = $this->Model_performance->getTahunSelected();
		return $selectedTahun;
	}


	public function distributionSkill()
	{
		$data = [
			'judul' => 'Overview - Distributin Skill',
			'konten' => 'overview/distributionSkill',
			'footerGraph' => []
		];
		$this->load->view('usr_layout/master', $data);
	}

	public function trainingSummary()
	{
		$data = [
			'judul' => 'Overview - Training Summary',
			'konten' => 'overview/trainingSummary',
			'footerGraph' => []
		];
		$this->load->view('usr_layout/master', $data);
	}

	public function ubpp_overview()
	{
		$data = [
			'judul' => 'Overview - UBPP',
			'konten' => 'overview/ubpp_overview',
			'footerGraph' => []
		];
		$this->load->view('usr_layout/master', $data);
	}

	public function academy1()
	{
		$data = [
			'judul' => 'Detail - NITS',
			'konten' => 'academy/academy1',
			'footerGraph' => []
		];
		$this->load->view('usr_layout/master', $data);
	}

	public function academy2()
	{
		$data = [
			'judul' => 'Detail - CONSUMER',
			'konten' => 'academy/academy2',
			'footerGraph' => []
		];
		$this->load->view('usr_layout/master', $data);
	}

	public function academy3()
	{
		$data = [
			'judul' => 'Detail - WS & INTERNATIONAL',
			'konten' => 'academy/academy3',
			'footerGraph' => []
		];
		$this->load->view('usr_layout/master', $data);
	}

	public function academy4()
	{
		$data = [
			'judul' => 'Detail - ENTERPRISE',
			'konten' => 'academy/academy4',
			'footerGraph' => []
		];
		$this->load->view('usr_layout/master', $data);
	}

	public function details()
	{
		$data = [
			'judul' => 'Details',
			'konten' => 'detail/details',
			'footerGraph' => []
		];
		$this->load->view('usr_layout/master', $data);
	}

	public function ubpp_detail()
	{
		$data = [
			'judul' => 'Detail - UBPP',
			'konten' => 'detail/ubpp_detail',
			'footerGraph' => []
		];
		$this->load->view('usr_layout/master', $data);
	}

	public function academy7()
	{
		$data = [
			'judul' => 'Detail - BUSINESS ENABLER',
			'konten' => 'academy/academy7',
			'footerGraph' => []
		];
		$this->load->view('usr_layout/master', $data);
	}

	// public function academy2()
	// {
	// 	$data = [
	// 		'judul' => 'Detail - Academy 1',
	// 		'konten' => 'academy/academy2',
	// 	];
	// 	$this->load->view('usr_layout/master', $data);
	// }
}
