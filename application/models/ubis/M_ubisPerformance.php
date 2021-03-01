<?php
defined('BASEPATH') || exit('No direct script access allowed');

class M_ubisPerformance extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getTahun(){
        $data = $this->db->query("
        SELECT DISTINCT m_coe.tahun
        FROM lnd_learning_plan_topic
        JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id=lnd_learning_plan_topic.id_ubis
        JOIN m_coe ON m_coe.ubis_id = a_hcd_plan_ubis.id
        JOIN t_namingconvention ON m_coe.kode_akademi = t_namingconvention.kode
        WHERE a_hcd_plan_ubis.jenis_ubis IS NOT NULL
        ")->result();

        return $data;
    }

    public function getAcademy($tahun){
        $data = $this->db->query("
        SELECT DISTINCT t_namingconvention.deskripsi
				FROM lnd_learning_plan_topic
				JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id=lnd_learning_plan_topic.id_ubis
                JOIN m_coe ON m_coe.ubis_id = a_hcd_plan_ubis.id
				JOIN t_namingconvention ON m_coe.kode_akademi = t_namingconvention.kode
				WHERE a_hcd_plan_ubis.jenis_ubis IS NOT NULL and m_coe.tahun = $tahun
        ")->result();

        return $data;
    }

    public function getUbis($tahun, $academy){
        $data = $this->db->query("
        SELECT DISTINCT a_hcd_plan_ubis.ubis
				FROM lnd_learning_plan_topic
				JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id=lnd_learning_plan_topic.id_ubis
                JOIN m_coe ON m_coe.ubis_id = a_hcd_plan_ubis.id
				JOIN t_namingconvention ON m_coe.kode_akademi = t_namingconvention.kode
				WHERE a_hcd_plan_ubis.jenis_ubis IS NOT NULL and m_coe.tahun = $tahun and t_namingconvention.deskripsi = '$academy'
        ")->result();

        return $data;
    }

    public function getTopicTrainingUbis($tahun, $academy, $ubis){
        $data = $this->db->query("
        SELECT
        t_namingconvention.deskripsi, a_hcd_plan_ubis.ubis as 'UBIS',
        SUM(CASE WHEN lnd_learning_plan_topic.topics_name='Strategy?&?Planning' THEN 1 ELSE 0 END) as strategy,
        SUM(CASE WHEN lnd_learning_plan_topic.topics_name='Network?Infrastructre' THEN 1 ELSE 0 END) as network,
        SUM(CASE WHEN lnd_learning_plan_topic.topics_name='Business?Development' THEN 1 ELSE 0 END) as bisdev,
        SUM(CASE WHEN lnd_learning_plan_topic.topics_name='Finance' THEN 1 ELSE 0 END) as finance,
        SUM(CASE WHEN lnd_learning_plan_topic.topics_name='Sales,?Marketing,?Customer?Relation' THEN 1 ELSE 0 END) as sales,
        SUM(CASE WHEN lnd_learning_plan_topic.topics_name='Support' THEN 1 ELSE 0 END) as support,
        SUM(CASE WHEN lnd_learning_plan_topic.topics_name='Product?Development/Design' THEN 1 ELSE 0 END) as product,
        SUM(CASE WHEN lnd_learning_plan_topic.topics_name='Data?Science' THEN 1 ELSE 0 END) as datasci
    FROM lnd_learning_plan_topic
    JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id=lnd_learning_plan_topic.id_ubis
    JOIN m_coe ON m_coe.ubis_id = a_hcd_plan_ubis.id
    JOIN t_namingconvention ON m_coe.kode_akademi = t_namingconvention.kode
    WHERE a_hcd_plan_ubis.jenis_ubis IS NOT NULL and m_coe.tahun = $tahun and t_namingconvention.deskripsi = '$academy' AND a_hcd_plan_ubis.ubis = '$ubis'
    GROUP BY lnd_learning_plan_topic.id_ubis
        ")->result();

        return $data;
    }

    public function getDeliveryTraining($tahun, $academy, $ubis){
        $data = $this->db->query("
        SELECT m_coe.tahun,
        t_namingconvention.deskripsi,
        a_hcd_plan_ubis.ubis,
        SUM(CASE WHEN m_coe.status_coe_id = 1 THEN 1 ELSE 0 END) as 'delivered',
        SUM(CASE WHEN m_coe.status_coe_id = 2 THEN 1 ELSE 0 END) as 'nondelivered'
				FROM lnd_learning_plan_topic
				JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id=lnd_learning_plan_topic.id_ubis
                JOIN m_coe ON m_coe.ubis_id = a_hcd_plan_ubis.id
				JOIN t_namingconvention ON m_coe.kode_akademi = t_namingconvention.kode
				WHERE a_hcd_plan_ubis.jenis_ubis IS NOT NULL and m_coe.tahun = $tahun and t_namingconvention.deskripsi = '$academy' AND a_hcd_plan_ubis.ubis = '$ubis'
        GROUP BY m_coe.tahun, a_hcd_plan_ubis.ubis
        ")->result();

        return $data;
    }

    public function getSummaryTop($tahun, $academy, $ubis){
        $data = $this->db->query("
        SELECT t_namingconvention.deskripsi as Akademi,
        a_hcd_plan_ubis.ubis,
        COUNT(CASE WHEN lnd_learning_plan.id_status_plan=1 THEN 1 END) as tes1,
        COUNT(CASE WHEN lnd_learning_plan.id_status_plan=2 THEN 1 END) as tes2,
        COUNT(CASE WHEN lnd_learning_plan.id_status_Plan=3 THEN 1 END) as tes3,
        COUNT(CASE WHEN lnd_learning_plan.id_status_plan=4 THEN 1 END) as tes4
        FROM lnd_learning_plan
        INNER JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id = lnd_learning_plan.id_ubis
        INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
        where lnd_learning_plan.kode = $tahun and t_namingconvention.deskripsi = '$academy' and a_hcd_plan_ubis.ubis = '$ubis'
        GROUP BY a_hcd_plan_ubis.ubis
        ")->result();

        return $data;
    }

    
}

?>