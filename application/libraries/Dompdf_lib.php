<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Memanggil autoload DomPDF
require_once APPPATH . 'third_party/dompdf/autoload.inc.php'; // Sesuaikan path jika berbeda

use Dompdf\Dompdf;

class Dompdf_lib {

    protected $dompdf;

    public function __construct()
    {
        $this->dompdf = new Dompdf();
    }

    public function load_html($html)
    {
        $this->dompdf->loadHtml($html);
    }

    public function set_paper($size = 'A4', $orientation = 'portrait')
    {
        $this->dompdf->setPaper($size, $orientation);
    }

    public function render()
    {
        $this->dompdf->render();
    }

    public function stream($filename = 'document.pdf', $options = array())
    {
        $this->dompdf->stream($filename, $options);
    }

    public function output($filename)
    {
        file_put_contents($filename, $this->dompdf->output());
    }
}
