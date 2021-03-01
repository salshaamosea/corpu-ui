<?php
defined('BASEPATH') || exit('No direct script access allowed');

class M_ubisUbpp extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getSelectAcademy(){
        $data = $this->db->query("
        SELECT DISTINCT(t_namingconvention.deskripsi) as Akademi
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
        ")->result();

        return $data;
    }

    public function getSelecUbis($academy){
        $data = $this->db->query("
        SELECT DISTINCT(a_hcd_plan_ubis.ubis), t_namingconvention.deskripsi
        FROM report_lim1_penyelenggara
        INNER JOIN m_coe ON m_coe.objid_pelatihan=report_lim1_penyelenggara.objid
        INNER JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id=m_coe.ubis_id
        INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi=t_namingconvention.kode
        WHERE
        report_lim1_penyelenggara.academy IS NOT NULL AND
        (report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana + report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr + report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi + report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs + report_lim1_penyelenggara.n_fr_ah + report_lim1_penyelenggara.n_ces) != 0 AND
        t_namingconvention.deskripsi = '$academy'
        ")->result();

        return $data;
    }

    public function graphNUbisSarana($sarana, $academy, $tahun, $ubis){
        $data = $this->db->query("
        SELECT m_coe.ubis_id,
       t_namingconvention.deskripsi                  as academy,
       a_hcd_plan_ubis.ubis                          as ubis,
       YEAR(report_lim1_penyelenggara.tanggal_mulai) as tahun,
       report_lim1_penyelenggara.nama_pelatihan,
       AVG(report_lim1_penyelenggara.$sarana)  AS n_sarana
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
  AND t_namingconvention.deskripsi = '$academy'
  AND YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun
  AND a_hcd_plan_ubis.ubis = '$ubis'
GROUP BY report_lim1_penyelenggara.nama_pelatihan
        ")->result();

        return $data;
    }

    public function graphAvgNUbisSarana($sarana, $academy, $tahun, $ubis){
        $data = $this->db->query("
        SELECT m_coe.ubis_id,
       t_namingconvention.deskripsi                  as academy,
       a_hcd_plan_ubis.ubis                          as ubis,
       YEAR(report_lim1_penyelenggara.tanggal_mulai) as tahun,
       'Total',
       AVG(report_lim1_penyelenggara.$sarana)  AS n_avg_sarana
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
  AND t_namingconvention.deskripsi = '$academy'
  AND YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun
  AND a_hcd_plan_ubis.ubis = '$ubis'
GROUP BY t_namingconvention.deskripsi
        ")->result();

        return $data;
    }

    public function graphNInstruktur($instruktur, $academy, $tahun, $ubis){
        $data = $this->db->query("
        SELECT m_coe.ubis_id,
        t_namingconvention.deskripsi as academy,
        a_hcd_plan_ubis.ubis as ubis,
        YEAR(report_lim1_instruktur.tanggal_mulai) as tahun,
        report_lim1_instruktur.nama_pelatihan,
        AVG(report_lim1_instruktur.$instruktur) AS n_instruktur
        FROM report_lim1_instruktur
        INNER JOIN m_coe ON m_coe.objid_pelatihan=report_lim1_instruktur.objid
        INNER JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id=m_coe.ubis_id
        INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi=t_namingconvention.kode
        WHERE
        report_lim1_instruktur.academy IS NOT NULL AND
        (report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom + report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses + report_lim1_instruktur.n_pemahaman + report_lim1_instruktur.n_culture) != 0 AND
        t_namingconvention.deskripsi = '$academy' AND YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun AND
        a_hcd_plan_ubis.ubis = '$ubis'
        GROUP BY report_lim1_instruktur.nama_pelatihan
        ")->result();

        return $data;
    }

    public function graphAvgNInstruktur($instruktur, $academy, $tahun, $ubis){
        $data = $this->db->query("
        SELECT m_coe.ubis_id,
        t_namingconvention.deskripsi as academy,
        a_hcd_plan_ubis.ubis as ubis,
        YEAR(report_lim1_instruktur.tanggal_mulai) as tahun,
        'Total',
        AVG(report_lim1_instruktur.$instruktur) AS n_avag_instruktur
        FROM report_lim1_instruktur
        INNER JOIN m_coe ON m_coe.objid_pelatihan=report_lim1_instruktur.objid
        INNER JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id=m_coe.ubis_id
        INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi=t_namingconvention.kode
        WHERE
        report_lim1_instruktur.academy IS NOT NULL AND
        (report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom + report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses + report_lim1_instruktur.n_pemahaman + report_lim1_instruktur.n_culture) != 0 AND
        t_namingconvention.deskripsi = '$academy' AND YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun AND
        a_hcd_plan_ubis.ubis = '$ubis'
        GROUP BY t_namingconvention.deskripsi
        ")->result();

        return $data;
    }

    public function getTotalSaranaByUbis($academy, $tahun, $ubis){
        $data = $this->db->query("
        SELECT m_coe.ubis_id,
       t_namingconvention.deskripsi                   as academy,
       a_hcd_plan_ubis.ubis                           as ubis,
       YEAR(report_lim1_penyelenggara.tanggal_mulai)  as tahun,
       'Total',
       AVG(report_lim1_penyelenggara.n_ubpp_akom)     AS n_ubpp_akom_sarana,
       AVG(report_lim1_penyelenggara.n_ubpp_sarana)   AS n_ubpp_sarana_sarana,
       AVG(report_lim1_penyelenggara.n_ubpp_laborat)  AS n_ubpp_laborat_sarana,
       AVG(report_lim1_penyelenggara.n_ubpp_pnylnggr) AS n_ubpp_pnylnggr_sarana,
       AVG(report_lim1_penyelenggara.n_ubpp_kafe)     AS n_ubpp_kafe_sarana,
       AVG(report_lim1_penyelenggara.n_ubpp_materi)   AS n_ubpp_materi_sarana,
       AVG(report_lim1_penyelenggara.n_nps)           AS n_nps_sarana,
       AVG(report_lim1_penyelenggara.n_cs)            AS n_cs_sarana,
       AVG(report_lim1_penyelenggara.n_fr_ah)         AS n_fr_ah_sarana,
       AVG(report_lim1_penyelenggara.n_ces)           AS n_ces_sarana
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
  AND t_namingconvention.deskripsi = '$academy'
  AND YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun
  AND a_hcd_plan_ubis.ubis = '$ubis'
GROUP BY t_namingconvention.deskripsi
        ")->result();

        return $data;
    }

    public function getTotalInstrukturByUbis($academy, $tahun, $ubis){
        $data = $this->db->query("
        SELECT m_coe.ubis_id,
       t_namingconvention.deskripsi               as academy,
       a_hcd_plan_ubis.ubis                       as ubis,
       YEAR(report_lim1_instruktur.tanggal_mulai) as tahun,
       'Total',
       AVG(report_lim1_instruktur.n_cs)           AS n_cs_instruktur,
       AVG(report_lim1_instruktur.n_metode)       AS n_metode_instruktur,
       AVG(report_lim1_instruktur.n_kom)          AS n_n_kom_instruktur,
       AVG(report_lim1_instruktur.n_time_man)     AS n_time_man_instruktur,
       AVG(report_lim1_instruktur.n_proses)       AS n_proses_instruktur,
       AVG(report_lim1_instruktur.n_pemahaman)    AS n_pemahaman_instruktur,
       AVG(report_lim1_instruktur.n_culture)      AS n_culture_instruktur
FROM report_lim1_instruktur
         INNER JOIN m_coe ON m_coe.objid_pelatihan = report_lim1_instruktur.objid
         INNER JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id = m_coe.ubis_id
         INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
WHERE report_lim1_instruktur.academy IS NOT NULL
  AND (report_lim1_instruktur.n_cs + report_lim1_instruktur.n_metode + report_lim1_instruktur.n_kom +
       report_lim1_instruktur.n_time_man + report_lim1_instruktur.n_proses + report_lim1_instruktur.n_pemahaman +
       report_lim1_instruktur.n_culture) != 0
  AND t_namingconvention.deskripsi = '$academy'
  AND YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun
  AND a_hcd_plan_ubis.ubis = '$ubis'
GROUP BY t_namingconvention.deskripsi
        ")->result();

        return $data;
    }

    public function getNamaPelatihan($academy, $tahun, $ubis){
        $data = $this->db->query("
        SELECT DISTINCT
                report_lim1_instruktur.nama_pelatihan
FROM report_lim1_instruktur
         INNER JOIN m_coe ON m_coe.objid_pelatihan = report_lim1_instruktur.objid
         INNER JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id = m_coe.ubis_id
         INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
WHERE (academy != 'NULL')
  AND (nama_pelatihan != 'NULL')
  AND (inst_name != 'NULL')
  AND (jml_ubpp != 'NULL')
  AND t_namingconvention.deskripsi = '$academy'
  AND YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun
  AND a_hcd_plan_ubis.ubis = '$ubis'
GROUP BY a_hcd_plan_ubis.ubis, report_lim1_instruktur.nama_pelatihan, report_lim1_instruktur.inst_name
        ")->result();

        return $data;
    }

    public function getEvaluasiInstruktur($academy, $tahun, $ubis, $pelatihan){
        $data = $this->db->query("
        SELECT DISTINCT
        report_lim1_instruktur.inst_name,
        AVG(report_lim1_instruktur.n_cs)        AS n_cs,
        AVG(report_lim1_instruktur.n_metode)    AS n_metode,
        AVG(report_lim1_instruktur.n_kom)       AS n_kom,
        AVG(report_lim1_instruktur.n_time_man)  AS n_time_man,
        AVG(report_lim1_instruktur.n_proses)    AS n_proses,
        AVG(report_lim1_instruktur.n_pemahaman) AS n_pemahaman,
        AVG(report_lim1_instruktur.n_culture)   AS n_culture,
        AVG(report_lim1_instruktur.n_total)     AS n_total
FROM report_lim1_instruktur
 INNER JOIN m_coe ON m_coe.objid_pelatihan = report_lim1_instruktur.objid
 INNER JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id = m_coe.ubis_id
 INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
WHERE (academy != 'NULL')
AND (nama_pelatihan != 'NULL')
AND (inst_name != 'NULL')
AND (jml_ubpp != 'NULL')

AND t_namingconvention.deskripsi = '$academy'
AND YEAR(report_lim1_instruktur.tanggal_mulai) = $tahun
AND a_hcd_plan_ubis.ubis = '$ubis'
AND report_lim1_instruktur.nama_pelatihan = '$pelatihan'
GROUP BY a_hcd_plan_ubis.ubis, report_lim1_instruktur.nama_pelatihan, report_lim1_instruktur.inst_name
        ")->result();

        return $data;
    }

    public function getAvgUbpp($academy, $tahun, $ubis){
        $data = $this->db->query("
        SELECT m_coe.ubis_id,
       t_namingconvention.deskripsi                                                         as academy,
       a_hcd_plan_ubis.ubis                                                                 as ubis,
       YEAR(report_lim1_penyelenggara.tanggal_mulai)                                        as tahun,
       (avg(report_lim1_penyelenggara.n_ubpp_akom) +
        avg(report_lim1_penyelenggara.n_ubpp_sarana) +
        avg(report_lim1_penyelenggara.n_ubpp_laborat) +
        avg(report_lim1_penyelenggara.n_ubpp_pnylnggr) +
        avg(report_lim1_penyelenggara.n_ubpp_kafe) +
        avg(report_lim1_penyelenggara.n_ubpp_materi) +
        avg(report_lim1_penyelenggara.n_nps) +
        avg(report_lim1_penyelenggara.n_cs) +
        avg(report_lim1_penyelenggara.n_fr_ah) +
        avg(report_lim1_penyelenggara.n_ces) +
        avg(report_lim1_instruktur.n_cs) +
        avg(report_lim1_instruktur.n_metode) +
        avg(report_lim1_instruktur.n_kom) +
        avg(report_lim1_instruktur.n_time_man) +
        avg(report_lim1_instruktur.n_proses) +
        avg(report_lim1_instruktur.n_pemahaman) +
        avg(report_lim1_instruktur.n_culture)) / 17                                         as avg_total,
       (avg(report_lim1_penyelenggara.n_ubpp_akom) + avg(report_lim1_penyelenggara.n_ubpp_sarana) +
        avg(report_lim1_penyelenggara.n_ubpp_laborat) + avg(report_lim1_penyelenggara.n_ubpp_pnylnggr) +
        avg(report_lim1_penyelenggara.n_ubpp_kafe) + avg(report_lim1_penyelenggara.n_ubpp_materi) +
        avg(report_lim1_penyelenggara.n_nps) + avg(report_lim1_penyelenggara.n_cs) +
        avg(report_lim1_penyelenggara.n_fr_ah) + avg(report_lim1_penyelenggara.n_ces)) / 10 as avg_penyelenggara,
       AVG(report_lim1_instruktur.n_total)                                                  as avg_instruktur
FROM report_lim1_penyelenggara
         INNER JOIN m_coe ON m_coe.objid_pelatihan = report_lim1_penyelenggara.objid
         INNER JOIN report_lim1_instruktur ON m_coe.objid_pelatihan = report_lim1_instruktur.objid
         INNER JOIN a_hcd_plan_ubis ON a_hcd_plan_ubis.id = m_coe.ubis_id
         INNER JOIN t_namingconvention ON a_hcd_plan_ubis.kode_akademi = t_namingconvention.kode
WHERE report_lim1_penyelenggara.academy IS NOT NULL
  AND (report_lim1_penyelenggara.n_ubpp_akom + report_lim1_penyelenggara.n_ubpp_sarana +
       report_lim1_penyelenggara.n_ubpp_laborat + report_lim1_penyelenggara.n_ubpp_pnylnggr +
       report_lim1_penyelenggara.n_ubpp_kafe + report_lim1_penyelenggara.n_ubpp_materi +
       report_lim1_penyelenggara.n_nps + report_lim1_penyelenggara.n_cs + report_lim1_penyelenggara.n_fr_ah +
       report_lim1_penyelenggara.n_ces) != 0
  AND t_namingconvention.deskripsi = '$academy'
  AND YEAR(report_lim1_penyelenggara.tanggal_mulai) = $tahun
  AND a_hcd_plan_ubis.ubis = '$ubis'
        ")->result();

        return $data;
    }
}
?>   