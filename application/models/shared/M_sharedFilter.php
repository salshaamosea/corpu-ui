<?php
defined('BASEPATH') || exit('No direct script access allowed');

class M_sharedFilter extends CI_Model 
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getUbppTahun(){
        $data = $this->db->query("
        SELECT DISTINCT(m_coe.tahun)
        FROM report_lim1_penyelenggara
        INNER JOIN m_coe ON m_coe.objid_pelatihan=report_lim1_penyelenggara.objid
        INNER JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id=m_coe.ubis_id
        INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi=t_namingconvention.kode
        WHERE
        report_lim1_penyelenggara.academy IS NOT NULL AND 
        (report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana + report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr + report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi + report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs + report_lim1_penyelenggara.n_fr_ah + report_lim1_penyelenggara.n_ces) != 0
        order by m_coe.tahun
        ")->result();
        return $data;
    }

    public function getUbppAcademy($tahun){
        $data = $this->db->query("
        SELECT DISTINCT(t_namingconvention.deskripsi)
        FROM report_lim1_penyelenggara
        INNER JOIN m_coe ON m_coe.objid_pelatihan=report_lim1_penyelenggara.objid
        INNER JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id=m_coe.ubis_id
        INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi=t_namingconvention.kode
        WHERE
        report_lim1_penyelenggara.academy IS NOT NULL AND 
        (report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana + report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr + report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi + report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs + report_lim1_penyelenggara.n_fr_ah + report_lim1_penyelenggara.n_ces) != 0 AND
        m_coe.tahun = $tahun
        ")->result();
        return $data;
    }

    public function getUbppUbis($tahun, $ubis){
        $data = $this->db->query("
        SELECT DISTINCT(a_hcd_plan_ubis.ubis)
        FROM report_lim1_penyelenggara
        INNER JOIN m_coe ON m_coe.objid_pelatihan = report_lim1_penyelenggara.objid
        INNER JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id = m_coe.ubis_id
        INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
        WHERE report_lim1_penyelenggara.academy IS NOT NULL
        AND (report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
        report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
        report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
        report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs + report_lim1_penyelenggara.n_fr_ah +
        report_lim1_penyelenggara.n_ces) != 0
        AND m_coe.tahun = $tahun
        and t_namingconvention.deskripsi = '$ubis'
        ")->result();
        return $data;
    }
}