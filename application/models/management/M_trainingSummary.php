<?php
defined('BASEPATH') || exit('No direct script access allowed');

class M_trainingSummary extends CI_Model {
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getTahunTraining(){
        $data = $this->db->query("SELECT DISTINCT tahun FROM tpelatihan_new")->result();
        return $data;
    }

    public function getTipeTraining(){
        $data = $this->db->query("
        SELECT DISTINCT p_tipe_delivery_method_catalog.nama_tipe, tpelatihan_new.tahun
        FROM tpelatihan_new
        JOIN t_katalog2 ON tpelatihan_new.objid_catalog = t_katalog2.objid_id
        JOIN p_tipe_delivery_method_catalog ON t_katalog2.tipe = p_tipe_delivery_method_catalog.id_tipe_catalog
        ")->result();
        return $data;
    }

    public function getEvents($tipe, $tahun){
        $data = $this->db->query("
        SELECT t_namingconvention.deskripsi, COUNT(lde_pelatihan_cost_m_r.total) as total
        FROM tpelatihan_new
        INNER JOIN lde_pelatihan_cost_m_r
        ON tpelatihan_new.objid = lde_pelatihan_cost_m_r.id_pelatihan
        INNER JOIN lde_pelatihan_lp
        ON tpelatihan_new.objid = lde_pelatihan_lp.id_pelatihan
        INNER JOIN t_namingconvention
        ON lde_pelatihan_lp.kode_akademi = t_namingconvention.kode
        INNER JOIN t_katalog2
        ON tpelatihan_new.objid_catalog = t_katalog2.objid_id
        INNER JOIN p_tipe_delivery_method_catalog
        ON t_katalog2.tipe = p_tipe_delivery_method_catalog.id_tipe_catalog
        WHERE p_tipe_delivery_method_catalog.nama_tipe = '$tipe' AND tpelatihan_new.tahun = '$tahun'
        GROUP BY t_namingconvention.kode
        ")->result();
        
        return $data;
    }

    public function getLearners($tipe, $tahun){
        $data = $this->db->query("
        SELECT t_namingconvention.deskripsi, count(t_peserta.id) as total
        FROM t_peserta
        INNER JOIN tpelatihan_new
        ON t_peserta.t_pelatihan_objid = tpelatihan_new.objid
        INNER JOIN lde_pelatihan_cost_m_r
        ON tpelatihan_new.objid = lde_pelatihan_cost_m_r.id_pelatihan
        INNER JOIN lde_pelatihan_lp
        ON tpelatihan_new.objid = lde_pelatihan_lp.id_pelatihan
        INNER JOIN t_namingconvention
        ON lde_pelatihan_lp.kode_akademi = t_namingconvention.kode
        INNER JOIN t_katalog2
        ON tpelatihan_new.objid_catalog = t_katalog2.objid_id
        INNER JOIN p_tipe_delivery_method_catalog
        ON t_katalog2.tipe = p_tipe_delivery_method_catalog.id_tipe_catalog
        WHERE p_tipe_delivery_method_catalog.nama_tipe = '$tipe' AND tpelatihan_new.tahun = '$tahun'
        GROUP BY t_namingconvention.kode
        ")->result();
        
        return $data;
    }

    public function getBudgets($tipe, $tahun){
        $data = $this->db->query("
        SELECT t_namingconvention.deskripsi, SUM(lde_pelatihan_cost_m_r.total) as total
        FROM tpelatihan_new
        INNER JOIN lde_pelatihan_cost_m_r
        ON tpelatihan_new.objid = lde_pelatihan_cost_m_r.id_pelatihan
        INNER JOIN lde_pelatihan_lp
        ON tpelatihan_new.objid = lde_pelatihan_lp.id_pelatihan
        INNER JOIN t_namingconvention
        ON lde_pelatihan_lp.kode_akademi = t_namingconvention.kode
        INNER JOIN t_katalog2
        ON tpelatihan_new.objid_catalog = t_katalog2.objid_id
        INNER JOIN p_tipe_delivery_method_catalog
        ON t_katalog2.tipe = p_tipe_delivery_method_catalog.id_tipe_catalog
        WHERE p_tipe_delivery_method_catalog.nama_tipe = '$tipe' AND tpelatihan_new.tahun = '$tahun'
        GROUP BY t_namingconvention.kode
        ")->result();
        
        return $data;
    }
}
