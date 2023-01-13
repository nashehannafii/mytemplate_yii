<?php

namespace app\helpers;

use Yii;
use yii\helpers\Json;
use yii\httpclient\Client;


if (!defined('STDIN')) {
    define('STDIN', fopen('php://stdin', 'r'));
}

class MyHelper
{


    public static function listAkreditasi()
    {
        $list = [
            'U' => 'Unggul',
            'BS' => 'Baik Sekali',
            'BK' => 'Baik',
            'A' => 'A',
            'B' => 'B',
            'C' => 'C'

        ];

        return $list;
    }

    public static function listJenjangStudi()
    {
        $list_kriteria = [
            'D' => [
                'jenjang' => 'Diploma 4',
                'singkatan' => 'D4',
            ],
            'C' => [
                'jenjang' => 'Sarjana',
                'singkatan' => 'S1',
            ],
            'B' => [
                'jenjang' => 'Magister',
                'singkatan' => 'S2',
            ],
            'A' => [
                'jenjang' => 'Doktoral',
                'singkatan' => 'S3',
            ],
        ];

        return $list_kriteria;
    }
    public static function getStatusAktif()
    {
        $roles = [
            '1' => 'Aktif', '0' => 'Non-Aktif'
        ];


        return $roles;
    }

    public static function setStatusAktif($status)
    {
        switch ($status) {
            case 1:
                $status = 'Aktif';
                break;
            case 0:
                $status = 'Non-Aktif';
                break;
            default:
                break;
        }

        return $status;
    }

    public static function getSkor($skor)
    {
        switch ($skor) {
            case 100:
                $skor = 'Sesuai';
                break;
            case 101:
                $skor = 'Tidak Sesuai';
                break;
            case 102:
                $skor = 'Tidak Ada';
                break;

            default:
                break;
        }

        return $skor;
    }

    public static function getLabel($skor)
    {
        switch ($skor) {
            case 100:
                $skor = 'blue';
                break;
            case 101:
                $skor = 'orange';
                break;
            case 102:
                $skor = 'red';
                break;
            case 0:
                $skor = 'red';
                break;

            default:
                break;
        }

        return $skor;
    }

    public static function getSkorPdf($skor)
    {
        switch ($skor) {
            case 100:
                $skor = '<td style="text-align: center;background-color: #74992e;">✓</td><td></td><td></td>';
                break;
            case 101:
                $skor = '<td></td><td style="text-align: center;background-color: orange;">✓</td><td></td>';
                break;
            case 102:
                $skor = '<td></td><td></td><td style="text-align: center;background-color: red;">✓</td>';
                break;
            case 0:
                $skor = '<td></td><td></td><td></td>';
                break;

            default:
                break;
        }

        return $skor;
    }


    public static function getLabelAuditor($urutan)
    {
        switch ($urutan) {
            case 1:
                $urutan = 'a. Ketua';
                break;
            case 2:
                $urutan = 'b. Anggota 1';
                break;
            case 3:
                $urutan = 'c. Anggota 2';
                break;

            default:
                break;
        }

        return $urutan;
    }


    public static function getKategoriKts()
    {
        $roles = [
            '0' => 'Observasi',
            '1' => 'KTS/Minor',
            '2' => 'KTS/Major',
        ];

        return $roles;
    }

    public static function getJenisKriteria()
    {
        $roles = [
            '0' => 'Fakultas-prodi',
            '1' => 'Satuan Kerja',
            // '2' => 'KTS/Major',
        ];

        return $roles;
    }

    public static function getKhusus()
    {
        $roles = [
            '0' => 'Umum',
            '1' => 'Khusus',
            // '2' => 'KTS/Major',
        ];

        return $roles;
    }

    public static function setJenisKriteria($status)
    {
        switch ($status) {

            case 0:
                $status = 'Fakultas - Prodi';
                break;
            case 1:
                $status = 'Satuan Kerja';
                break;
            default:
                break;
        }

        return $status;
    }

    public static function setKategoriKts($status)
    {
        switch ($status) {

            case 2:
                $status = 'KTS/Major';
                break;
            case 1:
                $status = 'KTS/Minor';
                break;
            case 0:
                $status = 'Observasi';
                break;
            default:
                break;
        }

        return $status;
    }

    public static function getJenisUnit()
    {

        $unit = [
            'satker' => 3, 'prodi' => 2, 'fakultas' => 1
        ];

        return $unit;
    }

    public static function getStatusDocument()
    {
        $roles = [
            100 => 'Sesuai',
            101 => 'Tidak Sesuai',
            102 => 'Tidak Ada',
        ];


        return $roles;
    }

    public static function getJenisIndikator()
    {
        $roles = [
            '0' => 'Umum',
            '1' => 'Khusus',
        ];


        return $roles;
    }

    public static function listStatusBAP()
    {
        return [
            '0' => [
                'label' => 'Menunggu persetujuan Kaprodi',
                'color' => 'warning'
            ],
            '1' => [
                'label' => 'Sudah disetujui',
                'color' => 'success'
            ],
        ];
    }

    public static function getJenisHasilPustaka()
    {
        return ['0' => 'Bukan Hasil Riset/Abdimas Sendiri', '1' => 'Hasil Penelitian', '2' => 'Hasil Pengabdian kepada Masyarakat'];
    }

    public static function cleanSpecialChars($string)
    {
        // $string = str_replace(' ', '-', $string);
        return preg_replace('/[^A-Za-z0-9\-]/', ' ', $string); // Removes special chars.
    }

    public static function getStatusHapus()
    {
        return [
            '1' => 'Hapus',
            '0' => 'Aktif'
        ];
    }

    public static function clean($string)
    {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }

    public static function split_name($name)
    {
        $name = trim($name);
        $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
        $first_name = trim(preg_replace('#' . preg_quote($last_name, '#') . '#', '', $name));
        return array($first_name, $last_name);
    }
    public static function getJenisMBKM()
    {
        return [
            '1' => 'Dalam PT',
            '2' => 'PT Lain',
            '3' => 'Non-PT',
            '0' => 'Non-MBKM'
        ];
    }
    public static function endsWith($haystack, $needle)
    {
        $length = strlen($needle);
        if (!$length) {
            return true;
        }
        return substr($haystack, -$length) === $needle;
    }

    public static function logDebug($error)
    {
        echo '<pre>';
        print_r($error);
        echo '</pre>';
        die();
    }

    public static function getJenisFileClassroom()
    {
        return [
            'driveFile' => 'Google Drive',
            // 'youtubeVideo' => 'YouTube',
            'link' => 'Link',
            // 'form' => 'Form'
        ];
    }

    public static function getStatusAktifDosen()
    {
        $roles = [
            'aktif' => 'AKTIF',
            'cuti' => 'CUTI',
            'tugasbelajar' => 'Tugas Belajar',
            'resign' => 'Resign',
            'nonaktif' => 'Non-Aktif'
        ];


        return $roles;
    }

    public static function getListHariEn()
    {
        $list_hari = [
            'SABTU' => 'Saturday',
            'AHAD' => 'Sunday',
            'SENIN' => 'Monday',
            'SELASA' => 'Tuesday',
            'RABU' => 'Wednesday',
            'KAMIS' => 'Thursday'
        ];

        return $list_hari;
    }

    public static function getBagian()
    {
        $list_bagian = [
            '1' => 'Auditee',
            '2' => 'Auditor',
            '3' => 'Admin',
        ];

        return $list_bagian;
    }

    public static function getListHari()
    {
        $list_hari = [
            'SABTU' => 'SABTU',
            'AHAD' => 'AHAD',
            'SENIN' => 'SENIN',
            'SELASA' => 'SELASA',
            'RABU' => 'RABU',
            'KAMIS' => 'KAMIS'
        ];

        return $list_hari;
    }


    public static function getStatusBeasiswa()
    {
        return ['0' => 'Belum Diproses', '1' => 'Diterima', '2' => 'Ditolak'];
    }

    public static function getJenisBeasiswa()
    {
        return ['1' => 'Pemerintah', '2' => 'Universitas', '3' => 'Pondok'];
    }

    public static function getListJenjang()
    {
        return ['A' => 'Ph.D - S3', 'B' => 'Magister - S2', 'C' => 'Bachelor - S1', 'D' => 'Diploma 4 - D4'];
    }

    public static function gen_uuid()
    {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),

            // 16 bits for "time_mid"
            mt_rand(0, 0xffff),

            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand(0, 0x0fff) | 0x4000,

            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand(0, 0x3fff) | 0x8000,

            // 48 bits for "node"
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff)
        );
    }

    public static function getStatusSkripsi()
    {
        return [
            '1' => 'Belum Sidang Akhir', '2' => 'Sudah Sidang Akhir Belum Revisi', '3' => 'Sudah Sidang Akhir Sudah Revisi', '4' => 'Ganti Topik'
        ];
    }

    public static function getRubrikCatatanHarian()
    {
        return ['1' => 'Tidak ada catatan', '2' => 'Sudah ada catatan, namun hanya laporan', '3' => 'Sudah ada catatan, namun hanya laporan dan evaluasi', '4' => 'Sudah ada catatan dan lengkap, namun kemajuan tidak/kurang signifikan', '5' => 'Sudah ada catatan, lengkap, dan ada kemajuan signifikan'];
    }

    public static function getStatusProposal()
    {
        return [
            '1' => 'Belum Sidang', '2' => 'Sudah Sidang Belum Revisi', '3' => 'Sudah Sidang Sudah Revisi', '4' => 'Ganti Topik'
        ];
    }

    public static function getLamaHari()
    {
        return [
            '1' => '1 hari', '3' => '3 hari', '7' => '1 minggu', '14' => '2 minggu', '21' => '3 minggu', '30' => '1 bulan'
        ];
    }

    public static function appendZeros($str, $charlength = 6)
    {

        return str_pad($str, $charlength, '0', STR_PAD_LEFT);
    }

    public static function konversiEkdAngkaHuruf($skor)
    {
        $huruf = 'F';
        $ket  = '-';
        $color = 'default';
        if ($skor >= 126) {
            $huruf = 'A';
            $color = 'success';
            $ket  = 'Dilaporkan kepada Rektor untuk diberi reward sertifikat dan insentif tertentu penambah semangat kerja.';
        } else if ($skor >= 101) {

            $huruf = 'B';
            $color = 'warning';
            $ket  = 'Dilaporkan kepada Rektor untuk diberi reward sertifikat.';
        } else if ($skor >= 76) {
            $huruf = 'C';
            $color = 'warning';
            $ket  = 'Dilaporkan kepada Rektor bahwa yang bersangkutan telah mencukupi kinerjanya.';
        } else if ($skor >= 51) {
            $huruf = 'D';
            $color = 'warning';
            $ket  = 'Dilaporkan kepada Rektor untuk diberi peringatan.';
        } else if ($skor >= 30) {
            $huruf = 'E';
            $color = 'danger';
            $ket  = 'Dilaporkan kepada Rektor untuk diberikan sanksi tertentu yang mendukung peningkatan kinerjanya.';
        }

        return ['huruf' => $huruf, 'ket' => $ket, 'color' => $color];
    }

    public static function numberToAlphabet($index)
    {
        $alphabet = range('A', 'Z');

        return $alphabet[$index]; // returns D
    }

    public static function getListAbsensiFull()
    {
        $list = [
            '1' => 'Hadir',
            '2' => 'Izin',
            '3' => 'Saki',
            '4' => 'Ghoib'

        ];

        return $list;
    }

    public static function getListAbsensi()
    {
        $list = [
            '1' => 'H',
            '2' => 'I',
            '3' => 'S',
            '4' => 'G'

        ];

        return $list;
    }

    public static function getListIzin()
    {
        $list = [
            '1' => 'Belum Disetujui',
            '2' => 'Disetujui',
            '3' => 'Ditolak'

        ];

        return $list;
    }

    public static function sendEmail($userMail)
    {
        if (Yii::$app->user->identity->access_role == 'theCreator')
            $userMail = 'nashehannafii@unida.gontor.ac.id';

        // echo '<pre>';print_r($userMail);die;

        return $userMail;
    }

    public static function emailBpm()
    {
        $emailBpm = 'qa@unida.gontor.ac.id';
        if (Yii::$app->user->identity->access_role == 'theCreator')
            $emailBpm = 'nashehannafii@unida.gontor.ac.id';

        return $emailBpm;
    }

    public static function getListSemester()
    {
        $list_semester = [
            1 => 'Semester 1',
            2 => 'Semester 2',
            3 => 'Semester 3',
            4 => 'Semester 4',
            5 => 'Semester 5',
            6 => 'Semester 6',
            7 => 'Semester 7',
            8 => 'Semester 8',
            9 => 'Semester 9 ke atas',
        ];

        return $list_semester;
    }

    public static function getSemester()
    {
        $list_semester = [
            0 => [1 => 1, 2 => 2],
            1 => [3 => 3, 4 => 4],
            2 => [5 => 5, 6 => 6],
            3 => [7 => 7, 8 => 8],
        ];

        return $list_semester;
    }

    public static function convertTanggalIndo($date)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $date);

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
        if (!empty($pecahkan[2]) && !empty($pecahkan[1]) && !empty($pecahkan[0]))
            return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
        else
            return 'invalid date format';
    }


    public static function getStatusAktivitas()
    {
        $roles = [
            'A' => 'AKTIF', 'C' => 'CUTI', 'D' => 'DO', 'K' => 'KELUAR', 'L' => 'LULUS', 'N' => 'NON-AKTIF', 'G' => 'DOUBLE DEGREE', 'M' => 'MUTASI'
        ];


        return $roles;
    }

    public static function getStatusAmi()
    {
        $roles = [
            '0' => 'PROSES', '1' => 'SELESAI'
        ];


        return $roles;
    }

    public static function getJenisAmi()
    {
        $roles = [
            '1' => 'Fakultas',
            '2' => 'Program Studi',
            '3' => 'Satuan Kerja',
        ];


        return $roles;
    }

    public static function isBetween($sd, $ed)
    {
        return (($sd >= $ed) && ($sd <= $ed));
    }

    public static function dmYtoYmd($tgl)
    {
        $date = str_replace('/', '-', $tgl);
        return date('Y-m-d H:i:s', strtotime($date));
    }

    public static function YmdtodmY($tgl)
    {
        return date('d-m-Y H:i:s', strtotime($tgl));
    }


    public static function hitungDurasi($date1, $date2)
    {
        $date1 = new \DateTime($date1);
        $date2 = new \DateTime($date2);
        $interval = $date1->diff($date2);

        $elapsed = '';
        if ($interval->d > 0)
            $elapsed = $interval->format('%a hari %h jam %i menit %s detik');
        else if ($interval->h > 0)
            $elapsed = $interval->format('%h jam %i menit %s detik');
        else
            $elapsed = $interval->format('%i menit %s detik');


        return $elapsed;
    }

    public static function hitungUmur($tgl_lahir)
    {
        $tanggal = new \DateTime($tgl_lahir);

        $today = new \DateTime('today');

        // tahun
        $y = $today->diff($tanggal)->y;

        // bulan
        $m = $today->diff($tanggal)->m;

        // hari
        $d = $today->diff($tanggal)->d;
        return $y;
    }

    public static function logError($model)
    {
        $errors = '';
        foreach ($model->getErrors() as $attribute) {
            foreach ($attribute as $error) {
                $errors .= $error . ' ';
            }
        }

        return $errors;
    }

    public static function formatRupiah($value, $decimal = 0)
    {
        return number_format($value, $decimal, ',', '.');
    }

    public static function getSelisihHari($old, $new)
    {
        $date1 = strtotime($old);
        $date2 = strtotime($new);
        $interval = $date2 - $date1;
        return round($interval / (60 * 60 * 24)) + 1;
    }

    public static function terbilang($x)
    {
        $abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");

        if ($x < 12)                return " " . $abil[$x];
        elseif ($x < 20)            return MyHelper::terbilang($x - 10) . " belas";
        elseif ($x < 100)           return MyHelper::terbilang($x / 10) . " puluh" . MyHelper::terbilang($x % 10);
        elseif ($x < 200)           return " seratus" . MyHelper::terbilang($x - 100);
        elseif ($x < 1000)          return MyHelper::terbilang($x / 100) . " ratus" . MyHelper::terbilang($x % 100);
        elseif ($x < 2000)          return " seribu" . MyHelper::terbilang($x - 1000);
        elseif ($x < 1000000)       return MyHelper::terbilang($x / 1000) . " ribu" . MyHelper::terbilang($x % 1000);
        elseif ($x < 1000000000)    return MyHelper::terbilang($x / 1000000) . " juta" . MyHelper::terbilang($x % 1000000);
        elseif ($x < 1000000000000) return MyHelper::terbilang($x / 1000000000) . " milyar" . MyHelper::terbilang($x % 1000000000);
    }

    public static function getRandomString($minlength = 12, $maxlength = 12, $useupper = true, $usespecial = false, $usenumbers = true)
    {
        $key = '';
        $charset = "abcdefghijklmnopqrstuvwxyz";

        if ($useupper) $charset .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

        if ($usenumbers) $charset .= "0123456789";

        if ($usespecial) $charset .= "~@#$%^*()_±={}|][";

        for ($i = 0; $i < $maxlength; $i++) $key .= $charset[(mt_rand(0, (strlen($charset) - 1)))];

        return $key;
    }
}
