<?php 
    public function genExcel(){
        /*load phpexcel_gen*/
        $this->load->library("phpexcel_gen");
        $objPHPExcel = new PHPExcel; /* object create*/

        /*Start: attribut of excel property*/
        $objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
                             ->setLastModifiedBy("Maarten Balliauw")
                             ->setTitle("PHPExcel Test Document")
                             ->setSubject("PHPExcel Test Document")
                             ->setDescription("Test document for PHPExcel, generated using PHP classes.")
                             ->setKeywords("office PHPExcel php")
                             ->setCategory("Test result file");
        $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Hello')
            ->setCellValue('B2', 'world!')
            ->setCellValue('C1', 'Hello')
            ->setCellValue('D2', 'world!');
        // Rename worksheet
        //echo date('H:i:s') , " Rename worksheet" , EOL;
        $objPHPExcel->getActiveSheet()->setTitle('Simple');
        /*end excle property*/

        /*Generate excel file with two parameter first fileName, second object*/
        $this->phpexcel_gen->gen_excel("fileName", $objPHPExcel);
        
    }
?>