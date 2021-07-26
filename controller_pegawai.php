<?php

// Class pegawai (CRUD pegawai)
class pegawai
{

    // Property
    var $db;
    var $con;
    var $query;
    var $data;
    var $result;

    // Method untuk mengambil semua data dari table
    function getData_All()
    {

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con = $this->db->Connect();

        // perintah Get data
        $this->query = mysqli_query($this->con, "SELECT * FROM data_pegawai");
        while ($this->data = mysqli_fetch_array($this->query)) {
            $this->result[] = $this->data;
        }
        return $this->result;
    }

    // Method untuk mengambil data pegawai berjenis kelamin laki-laki

    function getData_lelaki()
    {

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con = $this->db->Connect();

        // perintah Get data
        $this->query = mysqli_query($this->con, "SELECT * FROM data_pegawai WHERE jns_kel = 'L' ");
        while ($this->data = mysqli_fetch_array($this->query)) {
            $this->result[] = $this->data;
        }
        return $this->result;
    }

    // Method untuk mengambil data pegawai dengan status menikah

    function getData_SM()
    {

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con = $this->db->Connect();

        // perintah Get data
        $this->query = mysqli_query($this->con, "SELECT * FROM data_pegawai WHERE status = 'M' ");
        while ($this->data = mysqli_fetch_array($this->query)) {
            $this->result[] = $this->data;
        }
        return $this->result;
    }

    // Method untuk mengambil data pegawai dengan status belum menikah

    function getData_BM()
    {

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con = $this->db->Connect();

        // perintah Get data
        $this->query = mysqli_query($this->con, "SELECT * FROM data_pegawai WHERE status = 'B' ");
        while ($this->data = mysqli_fetch_array($this->query)) {
            $this->result[] = $this->data;
        }
        return $this->result;
    }

    // Method untuk mengambil data pegawai yang usianya diantara 20 sampai dengan 30 tahun

    function getData_RU1()
    {

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con = $this->db->Connect();

        // perintah Get data
        $this->query = mysqli_query($this->con, "SELECT *, YEAR(CURDATE()) - YEAR(tgl_lahir) AS age FROM data_pegawai");
        while ($this->data = mysqli_fetch_array($this->query)) {

            if (($this->data['age'] >= 20) && ($this->data['age'] <= 30)) {
                $this->result[] = $this->data;
            }
        }
        return $this->result;
    }

    // Method untuk mengambil data pegawai yang usianya diantara 31 sampai dengan 45 tahun

    function getData_RU2()
    {

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con = $this->db->Connect();

        // perintah Get data
        $this->query = mysqli_query($this->con, "SELECT *, YEAR(CURDATE()) - YEAR(tgl_lahir) AS age FROM data_pegawai");
        while ($this->data = mysqli_fetch_array($this->query)) {

            if (($this->data['age'] >= 31) && ($this->data['age'] <= 45)) {
                $this->result[] = $this->data;
            }
        }
        return $this->result;
    }

    // Method untuk mengambil data pegawai yang masa kerjanya diantara 1 sampai 5 tahun

    function getData_MK1()
    {

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con = $this->db->Connect();

        // perintah Get data
        $this->query = mysqli_query($this->con, "SELECT *, YEAR(CURDATE()) - YEAR(mulai_kerja) AS masa_kerja FROM data_pegawai");
        while ($this->data = mysqli_fetch_array($this->query)) {

            if (($this->data['masa_kerja'] >= 1) && ($this->data['masa_kerja'] <= 5)) {
                $this->result[] = $this->data;
            }
        }
        return $this->result;
    }

    // Method untuk mengambil data pegawai yang masa kerjanya diantara 6 sampai 10 tahun

    function getData_MK2()
    {

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con = $this->db->Connect();

        // perintah Get data
        $this->query = mysqli_query($this->con, "SELECT *, YEAR(CURDATE()) - YEAR(mulai_kerja) AS masa_kerja FROM data_pegawai");
        while ($this->data = mysqli_fetch_array($this->query)) {

            if (($this->data['masa_kerja'] >= 6) && ($this->data['masa_kerja'] <= 10)) {
                $this->result[] = $this->data;
            }
        }
        return $this->result;
    }

    // Method untuk mengambil data pegawai yang masa kerjanya diantara 11 sampai 25 tahun

    function getData_MK3()
    {

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con = $this->db->Connect();

        // perintah Get data
        $this->query = mysqli_query($this->con, "SELECT *, YEAR(CURDATE()) - YEAR(mulai_kerja) AS masa_kerja FROM data_pegawai");
        while ($this->data = mysqli_fetch_array($this->query)) {

            if (($this->data['masa_kerja'] >= 11) && ($this->data['masa_kerja'] <= 25)) {
                $this->result[] = $this->data;
            }
        }
        return $this->result;
    }
}
