<?php

Class Fungsi {

    protected $ci;

    function __construct() {
        $this->ci =& get_instance();
    }

    function PdfGenerator($html, $filename){
        // instantiate and use the dompdf class
        $dompdf = new \Dompdf\Dompdf();

        // load HTML content
        $dompdf->loadHtml($html);

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // // output the generated pdf
        $dompdf->stream($filename, array('Attachment' => 0));
    }
}