<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

// Sertakan autoload mPDF
require_once APPPATH . '../vendor/autoload.php';

class Mpdf
{
    public $pdf;

    public function __construct($params = [])
    {
        // Set parameter default atau sesuaikan kebutuhan ukuran kertas
        $defaultParams = [
            'mode' => 'utf-8',
            'format' => [210, 210], // Ganti sesuai ukuran kertas yang diinginkan, misal 'A4', 'A5', atau ['100', '150'] untuk ukuran kertas khusus (dalam mm)
            'orientation' => 'P' // P = Portrait, L = Landscape
        ];
        $params = array_merge($defaultParams, $params);

        // Inisialisasi mPDF dengan parameter
        $this->pdf = new \Mpdf\Mpdf($params);
    }

    public function load($html, $filename = 'document.pdf', $output = 'I')
    {
        $this->pdf->WriteHTML($html);
        return $this->pdf->Output($filename, $output);
    }

    public function save($html, $filepath)
    {
        $this->pdf->WriteHTML($html);
        $this->pdf->Output($filepath, 'F'); // 'F' untuk menyimpan file ke folder
    }
}
