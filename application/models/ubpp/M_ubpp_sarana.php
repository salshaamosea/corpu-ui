<?php
defined('BASEPATH') || exit('No direct script access allowed');

class M_ubpp_sarana extends CI_Model {
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    

    public function getUbppSaranaNAkom($tahun){
        $data = $this->db->query("
        SELECT t_namingconvention.deskripsi                   as academy,
       YEAR(report_lim1_penyelenggara.tanggal_mulai)  as tahun,
       AVG(report_lim1_penyelenggara.n_ubpp_akom)     AS n_ubpp_akom,
       (
           SELECT AVG(report_lim1_penyelenggara.n_ubpp_akom) AS n_ubpp_akom
           FROM report_lim1_penyelenggara,
                m_coe,
                a_hcd_plan_ubis
                    INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
           WHERE report_lim1_penyelenggara.academy IS NOT NULL
             AND (m_coe.objid_pelatihan = report_lim1_penyelenggara.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
             AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
                   report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
                   report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
                   report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs +
                   report_lim1_penyelenggara.n_fr_ah + report_lim1_penyelenggara.n_ces) != 0)
             AND (YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun)
           GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai)
       )                                              AS seluruh_akademi_avg_n_ubpp_akom

FROM report_lim1_penyelenggara,
     m_coe,
     a_hcd_plan_ubis
         INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
WHERE report_lim1_penyelenggara.academy IS NOT NULL
  AND (m_coe.objid_pelatihan = report_lim1_penyelenggara.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
  AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
        report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
        report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
        report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs + report_lim1_penyelenggara.n_fr_ah +
        report_lim1_penyelenggara.n_ces) != 0)
  AND (YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun)
GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai), t_namingconvention.deskripsi
        ")->result();
        return $data;
    }

    public function getUbppSaranaNSarana($tahun){
        $data = $this->db->query("
        SELECT t_namingconvention.deskripsi                   as academy,
       YEAR(report_lim1_penyelenggara.tanggal_mulai)  as tahun,
        AVG(report_lim1_penyelenggara.n_ubpp_sarana)   AS n_ubpp_sarana,
       (
           SELECT AVG(report_lim1_penyelenggara.n_ubpp_sarana) AS n_ubpp_sarana
           FROM report_lim1_penyelenggara,
                m_coe,
                a_hcd_plan_ubis
                    INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
           WHERE report_lim1_penyelenggara.academy IS NOT NULL
             AND (m_coe.objid_pelatihan = report_lim1_penyelenggara.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
             AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
                   report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
                   report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
                   report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs +
                   report_lim1_penyelenggara.n_fr_ah + report_lim1_penyelenggara.n_ces) != 0)
             AND (YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun)
           GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai)
       )                                              AS seluruh_akademi_avg_n_ubpp_sarana
FROM report_lim1_penyelenggara,
     m_coe,
     a_hcd_plan_ubis
         INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
WHERE report_lim1_penyelenggara.academy IS NOT NULL
  AND (m_coe.objid_pelatihan = report_lim1_penyelenggara.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
  AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
        report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
        report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
        report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs + report_lim1_penyelenggara.n_fr_ah +
        report_lim1_penyelenggara.n_ces) != 0)
  AND (YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun)
GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai), t_namingconvention.deskripsi
        ")->result();

        return $data;
    }

    public function getUbppSaranaNLaborat($tahun){
        $data = $this->db->query("
        SELECT t_namingconvention.deskripsi                   as academy,
       YEAR(report_lim1_penyelenggara.tanggal_mulai)  as tahun,
       AVG(report_lim1_penyelenggara.n_ubpp_laborat)  AS n_ubpp_laborat,
       (
           SELECT AVG(report_lim1_penyelenggara.n_ubpp_laborat) AS n_ubpp_laborat
           FROM report_lim1_penyelenggara,
                m_coe,
                a_hcd_plan_ubis
                    INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
           WHERE report_lim1_penyelenggara.academy IS NOT NULL
             AND (m_coe.objid_pelatihan = report_lim1_penyelenggara.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
             AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
                   report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
                   report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
                   report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs +
                   report_lim1_penyelenggara.n_fr_ah + report_lim1_penyelenggara.n_ces) != 0)
             AND (YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun)
           GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai)
       )                                              AS seluruh_akademi_avg_n_ubpp_laborat
FROM report_lim1_penyelenggara,
     m_coe,
     a_hcd_plan_ubis
         INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
WHERE report_lim1_penyelenggara.academy IS NOT NULL
  AND (m_coe.objid_pelatihan = report_lim1_penyelenggara.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
  AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
        report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
        report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
        report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs + report_lim1_penyelenggara.n_fr_ah +
        report_lim1_penyelenggara.n_ces) != 0)
  AND (YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun)
GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai), t_namingconvention.deskripsi
        ")->result();
        return $data;
    }

    public function getUbppSaranaNPenyelenggara($tahun){
        $data = $this->db->query("
        SELECT t_namingconvention.deskripsi                   as academy,
       YEAR(report_lim1_penyelenggara.tanggal_mulai)  as tahun,
       AVG(report_lim1_penyelenggara.n_ubpp_pnylnggr) AS n_ubpp_pnylnggr,
       (
           SELECT AVG(report_lim1_penyelenggara.n_ubpp_pnylnggr) AS n_ubpp_pnylnggr
           FROM report_lim1_penyelenggara,
                m_coe,
                a_hcd_plan_ubis
                    INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
           WHERE report_lim1_penyelenggara.academy IS NOT NULL
             AND (m_coe.objid_pelatihan = report_lim1_penyelenggara.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
             AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
                   report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
                   report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
                   report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs +
                   report_lim1_penyelenggara.n_fr_ah + report_lim1_penyelenggara.n_ces) != 0)
             AND (YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun)
           GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai)
       )                                              AS seluruh_akademi_avg_n_ubpp_pnylnggr
FROM report_lim1_penyelenggara,
     m_coe,
     a_hcd_plan_ubis
         INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
WHERE report_lim1_penyelenggara.academy IS NOT NULL
  AND (m_coe.objid_pelatihan = report_lim1_penyelenggara.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
  AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
        report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
        report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
        report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs + report_lim1_penyelenggara.n_fr_ah +
        report_lim1_penyelenggara.n_ces) != 0)
  AND (YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun)
GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai), t_namingconvention.deskripsi
        ")->result();
        return $data;
    }

    public function getUbppSaranaNKafe($tahun){
        $data = $this->db->query("
        SELECT t_namingconvention.deskripsi                   as academy,
       YEAR(report_lim1_penyelenggara.tanggal_mulai)  as tahun,
       AVG(report_lim1_penyelenggara.n_ubpp_kafe)     AS n_ubpp_kafe,
       (
           SELECT AVG(report_lim1_penyelenggara.n_ubpp_kafe) AS n_ubpp_kafe
           FROM report_lim1_penyelenggara,
                m_coe,
                a_hcd_plan_ubis
                    INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
           WHERE report_lim1_penyelenggara.academy IS NOT NULL
             AND (m_coe.objid_pelatihan = report_lim1_penyelenggara.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
             AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
                   report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
                   report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
                   report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs +
                   report_lim1_penyelenggara.n_fr_ah + report_lim1_penyelenggara.n_ces) != 0)
             AND (YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun)
           GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai)
       )                                              AS seluruh_akademi_avg_n_ubpp_kafe
FROM report_lim1_penyelenggara,
     m_coe,
     a_hcd_plan_ubis
         INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
WHERE report_lim1_penyelenggara.academy IS NOT NULL
  AND (m_coe.objid_pelatihan = report_lim1_penyelenggara.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
  AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
        report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
        report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
        report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs + report_lim1_penyelenggara.n_fr_ah +
        report_lim1_penyelenggara.n_ces) != 0)
  AND (YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun)
GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai), t_namingconvention.deskripsi
        ")->result();
        return $data;
    }

    public function getUbppSaranaNMateri($tahun){
        $data = $this->db->query("
        SELECT t_namingconvention.deskripsi                   as academy,
       YEAR(report_lim1_penyelenggara.tanggal_mulai)  as tahun,

       AVG(report_lim1_penyelenggara.n_ubpp_materi)   AS n_ubpp_materi,
       (
           SELECT AVG(report_lim1_penyelenggara.n_ubpp_materi) AS n_ubpp_materi
           FROM report_lim1_penyelenggara,
                m_coe,
                a_hcd_plan_ubis
                    INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
           WHERE report_lim1_penyelenggara.academy IS NOT NULL
             AND (m_coe.objid_pelatihan = report_lim1_penyelenggara.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
             AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
                   report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
                   report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
                   report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs +
                   report_lim1_penyelenggara.n_fr_ah + report_lim1_penyelenggara.n_ces) != 0)
             AND (YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun)
           GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai)
       )                                              AS seluruh_akademi_avg_n_ubpp_materi

FROM report_lim1_penyelenggara,
     m_coe,
     a_hcd_plan_ubis
         INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
WHERE report_lim1_penyelenggara.academy IS NOT NULL
  AND (m_coe.objid_pelatihan = report_lim1_penyelenggara.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
  AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
        report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
        report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
        report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs + report_lim1_penyelenggara.n_fr_ah +
        report_lim1_penyelenggara.n_ces) != 0)
  AND (YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun)
GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai), t_namingconvention.deskripsi
        ")->result();
        return $data;
    }

    public function getUbppSaranaNNps($tahun){
        $data = $this->db->query("
        SELECT t_namingconvention.deskripsi                   as academy,
       YEAR(report_lim1_penyelenggara.tanggal_mulai)  as tahun,
       AVG(report_lim1_penyelenggara.n_nps)           AS n_nps,
       (
           SELECT AVG(report_lim1_penyelenggara.n_nps) AS n_nps
           FROM report_lim1_penyelenggara,
                m_coe,
                a_hcd_plan_ubis
                    INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
           WHERE report_lim1_penyelenggara.academy IS NOT NULL
             AND (m_coe.objid_pelatihan = report_lim1_penyelenggara.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
             AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
                   report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
                   report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
                   report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs +
                   report_lim1_penyelenggara.n_fr_ah + report_lim1_penyelenggara.n_ces) != 0)
             AND (YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun)
           GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai)
       )                                              AS seluruh_akademi_avg_n_nps

FROM report_lim1_penyelenggara,
     m_coe,
     a_hcd_plan_ubis
         INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
WHERE report_lim1_penyelenggara.academy IS NOT NULL
  AND (m_coe.objid_pelatihan = report_lim1_penyelenggara.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
  AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
        report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
        report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
        report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs + report_lim1_penyelenggara.n_fr_ah +
        report_lim1_penyelenggara.n_ces) != 0)
  AND (YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun)
GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai), t_namingconvention.deskripsi
        ")->result();
        return $data;
    }

    public function getUbppSaranaNCs($tahun){
        $data = $this->db->query("
        SELECT t_namingconvention.deskripsi                   as academy,
       YEAR(report_lim1_penyelenggara.tanggal_mulai)  as tahun,
       AVG(report_lim1_penyelenggara.n_cs)            AS n_cs,
       (
           SELECT AVG(report_lim1_penyelenggara.n_cs) AS n_cs
           FROM report_lim1_penyelenggara,
                m_coe,
                a_hcd_plan_ubis
                    INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
           WHERE report_lim1_penyelenggara.academy IS NOT NULL
             AND (m_coe.objid_pelatihan = report_lim1_penyelenggara.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
             AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
                   report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
                   report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
                   report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs +
                   report_lim1_penyelenggara.n_fr_ah + report_lim1_penyelenggara.n_ces) != 0)
             AND (YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun)
           GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai)
       )                                              AS seluruh_akademi_avg_n_cs

FROM report_lim1_penyelenggara,
     m_coe,
     a_hcd_plan_ubis
         INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
WHERE report_lim1_penyelenggara.academy IS NOT NULL
  AND (m_coe.objid_pelatihan = report_lim1_penyelenggara.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
  AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
        report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
        report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
        report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs + report_lim1_penyelenggara.n_fr_ah +
        report_lim1_penyelenggara.n_ces) != 0)
  AND (YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun)
GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai), t_namingconvention.deskripsi
        ")->result();
        return $data;
    }

    public function getUbppSaranaNFrah($tahun){
        $data = $this->db->query("
        SELECT t_namingconvention.deskripsi                   as academy,
       YEAR(report_lim1_penyelenggara.tanggal_mulai)  as tahun,
AVG(report_lim1_penyelenggara.n_fr_ah)         AS n_fr_ah,
       (
           SELECT AVG(report_lim1_penyelenggara.n_fr_ah) AS n_fr_ah
           FROM report_lim1_penyelenggara,
                m_coe,
                a_hcd_plan_ubis
                    INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
           WHERE report_lim1_penyelenggara.academy IS NOT NULL
             AND (m_coe.objid_pelatihan = report_lim1_penyelenggara.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
             AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
                   report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
                   report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
                   report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs +
                   report_lim1_penyelenggara.n_fr_ah + report_lim1_penyelenggara.n_ces) != 0)
             AND (YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun)
           GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai)
       )                                              AS seluruh_akademi_avg_n_fr_ah
FROM report_lim1_penyelenggara,
     m_coe,
     a_hcd_plan_ubis
         INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
WHERE report_lim1_penyelenggara.academy IS NOT NULL
  AND (m_coe.objid_pelatihan = report_lim1_penyelenggara.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
  AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
        report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
        report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
        report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs + report_lim1_penyelenggara.n_fr_ah +
        report_lim1_penyelenggara.n_ces) != 0)
  AND (YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun)
GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai), t_namingconvention.deskripsi
        ")->result();
        return $data;
    }
    
    
    public function getUbppSaranaNCes($tahun){
        $data = $this->db->query("
        SELECT t_namingconvention.deskripsi                   as academy,
       YEAR(report_lim1_penyelenggara.tanggal_mulai)  as tahun,
AVG(report_lim1_penyelenggara.n_ces)           AS n_ces,
       (
           SELECT AVG(report_lim1_penyelenggara.n_ces) AS n_ces
           FROM report_lim1_penyelenggara,
                m_coe,
                a_hcd_plan_ubis
                    INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
           WHERE report_lim1_penyelenggara.academy IS NOT NULL
             AND (m_coe.objid_pelatihan = report_lim1_penyelenggara.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
             AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
                   report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
                   report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
                   report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs +
                   report_lim1_penyelenggara.n_fr_ah + report_lim1_penyelenggara.n_ces) != 0)
             AND (YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun)
           GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai)
       )                                              AS seluruh_akademi_avg_n_ces
FROM report_lim1_penyelenggara,
     m_coe,
     a_hcd_plan_ubis
         INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
WHERE report_lim1_penyelenggara.academy IS NOT NULL
  AND (m_coe.objid_pelatihan = report_lim1_penyelenggara.objid AND a_hcd_plan_ubis.id = m_coe.ubis_id)
  AND ((report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
        report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
        report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
        report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs + report_lim1_penyelenggara.n_fr_ah +
        report_lim1_penyelenggara.n_ces) != 0)
  AND (YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun)
GROUP BY YEAR(report_lim1_penyelenggara.tanggal_mulai), t_namingconvention.deskripsi
        ")->result();
        return $data;
    }


}

?>