<?php
defined('BASEPATH') || exit('No direct script access allowed');

class M_emergingTopic extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getNamaDomain()
    {
        $data = $this->db->query("SELECT * FROM domain")->result();
        return $data;
    }

    public function getNamaSubject()
    {
        $data = $this->db->query("SELECT *
        FROM subject
        JOIN domain ON domain.domain_id = subject.domain_id")->result();
        return $data;
    }

    public function getNamaSection()
    {
        $data = $this->db->query("SELECT *
        FROM section
        JOIN domain ON domain.domain_id = section.domain_id
        JOIN subject ON subject.subject_id = section.subject_id
        ")->result();
        return $data;
    }

    public function getKeyword($section_selected)
    {
        $data = $this->db->query("
        SELECT domain.domain_id AS domain_id, subject.subject_id AS subject_id, section.section_id AS section_id,
        SUBSTRING_INDEX(keyword_section, ',', 1) AS keyword1,
        SUBSTRING_INDEX(SUBSTRING_INDEX(keyword_section, ',', 2), ',', -1) AS keyword2,
        SUBSTRING_INDEX(SUBSTRING_INDEX(keyword_section, ',', 3), ',', -1) AS keyword3,
        SUBSTRING_INDEX(SUBSTRING_INDEX(keyword_section, ',', 4), ',', -1) AS keyword4,
        SUBSTRING_INDEX(SUBSTRING_INDEX(keyword_section, ',', 5), ',', -1) AS keyword5,
        SUBSTRING_INDEX(SUBSTRING_INDEX(keyword_section, ',', 6), ',', -1) AS keyword6
        FROM section
        JOIN domain ON section.domain_id = domain.domain_id
        JOIN subject ON section.subject_id = subject.subject_id
        WHERE section.section_id = '$section_selected'
        ")->result();
        return $data;
    }
}
?>   