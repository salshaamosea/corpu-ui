<?php
defined('BASEPATH') || exit('No direct script access allowed');

class M_management extends CI_Model {
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getDeliveryTraining($tahun){
        $data = $this->db->query("
        SELECT m_coe.tahun,
        SUM(CASE WHEN m_coe.status_coe_id = 1 THEN 1 ELSE 0 END) as 'delivered',
        sum(CASE WHEN m_coe.status_coe_id = 2 THEN 1 ELSE 0 END) as 'nondelivered'
        FROM m_coe
        INNER JOIN a_hcd_plan_ubis ON m_coe.ubis_id = a_hcd_plan_ubis.id
        INNER JOIN t_namingconvention ON m_coe.kode_akademi = t_namingconvention.kode
        WHERE a_hcd_plan_ubis.jenis_ubis IS NOT NULL and m_coe.tahun = '$tahun'
        GROUP BY m_coe.tahun
        ")->result();
        
        return $data;
    }

    public function getTrainingCategory($tahun){
        $data = $this->db->query("
        SELECT m_coe.tahun,
        a_hcd_plan_ubis.jenis_ubis,
        SUM(CASE WHEN m_coe.status_coe_id = 1 THEN 1 ELSE 0 END) as 'delivered',
        SUM(CASE WHEN m_coe.status_coe_id = 2 THEN 1 ELSE 0 END) as 'nondelivered'
        FROM m_coe
          INNER JOIN a_hcd_plan_ubis ON m_coe.ubis_id = a_hcd_plan_ubis.id
          INNER JOIN t_namingconvention ON m_coe.kode_akademi = t_namingconvention.kode
        WHERE a_hcd_plan_ubis.jenis_ubis IS NOT NULL and m_coe.tahun = '$tahun'
        GROUP BY m_coe.tahun, a_hcd_plan_ubis.jenis_ubis
        ")->result();

        return $data;
    }

    public function getAcademyCfu($tahun) {
        $data = $this->db->query("
        SELECT t_namingconvention.deskripsi                             AS deskripsi,
        m_coe.tahun,
        a_hcd_plan_ubis.jenis_ubis,
        SUM(CASE WHEN m_coe.status_coe_id = 1 THEN 1 ELSE 0 END) as 'delivered',
        SUM(CASE WHEN m_coe.status_coe_id = 2 THEN 1 ELSE 0 END) as 'nondelivered'
        FROM m_coe
        INNER JOIN a_hcd_plan_ubis ON m_coe.ubis_id = a_hcd_plan_ubis.id
        INNER JOIN t_namingconvention ON m_coe.kode_akademi = t_namingconvention.kode
        WHERE  a_hcd_plan_ubis.jenis_ubis = 'CFU' and m_coe.tahun = '$tahun'
        GROUP BY m_coe.tahun, t_namingconvention.deskripsi, a_hcd_plan_ubis.jenis_ubis
        ")->result();

        return $data;
    }

    public function getAcademyFu($tahun) {
        $data = $this->db->query("
        SELECT t_namingconvention.deskripsi                             AS deskripsi,
        m_coe.tahun,
        a_hcd_plan_ubis.jenis_ubis,
        SUM(CASE WHEN m_coe.status_coe_id = 1 THEN 1 ELSE 0 END) as 'delivered',
        SUM(CASE WHEN m_coe.status_coe_id = 2 THEN 1 ELSE 0 END) as 'nondelivered'
        FROM m_coe
        INNER JOIN a_hcd_plan_ubis ON m_coe.ubis_id = a_hcd_plan_ubis.id
        INNER JOIN t_namingconvention ON m_coe.kode_akademi = t_namingconvention.kode
        WHERE  a_hcd_plan_ubis.jenis_ubis = 'FU' and m_coe.tahun = '$tahun'
        GROUP BY m_coe.tahun, t_namingconvention.deskripsi, a_hcd_plan_ubis.jenis_ubis
        ")->result();

        return $data;
    }

    public function getAcademyLearning($tahun) {
        
        $data = $this->db->query("
        SELECT t_namingconvention.deskripsi,
        COUNT(CASE WHEN lnd_learning_plan.id_status_plan=1 THEN 1 END) as tes1,
        COUNT(CASE WHEN lnd_learning_plan.id_status_plan=2 THEN 1 END) as tes2,
        COUNT(CASE WHEN lnd_learning_plan.id_status_Plan=3 THEN 1 END) as tes3,
        COUNT(CASE WHEN lnd_learning_plan.id_status_plan=4 THEN 1 END) as tes4
        FROM lnd_learning_plan
        INNER JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id = lnd_learning_plan.id_ubis
        INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
        where lnd_learning_plan.kode = $tahun
        GROUP BY deskripsi
        ")->result();

        return $data;
    }

    public function getTahunSelected(){
        $data = $this->db->query("
        SELECT DISTINCT tahun
        FROM m_coe
         INNER JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id = m_coe.ubis_id
         INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
         INNER JOIN lnd_learning_plan ON a_hcd_plan_ubis.id = lnd_learning_plan.id_ubis
        ")->result();
        
        return $data;
    }

}
