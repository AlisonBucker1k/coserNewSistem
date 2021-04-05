<?php 
    $pdf = new \Mpdf\Mpdf(); 
    $pdf->SetHTMLHeader('aaa');
    $pdf->SetHTMLFooter('bbb');
    $pdf->WriteHTML('');
    
    $pdf->AddPage();
    $pdf->Output();
?>
