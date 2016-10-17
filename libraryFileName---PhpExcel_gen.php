<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Phpexcel_gen
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();

        /** Error reporting */
        error_reporting(E_ALL);
        ini_set('display_errors', TRUE);
        ini_set('display_startup_errors', TRUE);
        date_default_timezone_set('Asia/Dhaka');
        define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

        /** Include PHPExcel */
        require_once 'PHPExcel/PHPExcel.php';
        

    }
    public function gen_excel($fileName, $objPHPExcel){
        /**
         * par fileName: report filename with timestamp
         * par objePHPExcel
         */
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007'); 
        $objWriter->save('report/'.date('Y_m_d_h_i_s').'_'.$fileName.'.xlsx');
    }  

}

/* End of file PhpExcel_gen.php */
/* Location: ./application/libraries/PhpExcel_gen.php */
