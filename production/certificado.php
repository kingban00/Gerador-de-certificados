<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

/* require_once __DIR__ . "/lib/start_page.php"; */
// require_once __DIR__ . '/lib/config.php';
// require_once __DIR__ . '/lib/cursos.php';
// require_once __DIR__ . "/../cursos/lib/usuarios.php";
require_once __DIR__ . "/packages/vendor/autoload.php";
// require_once __DIR__ . "/packages/vendor/aferrandini/phpqrcode/lib/PHPQRCode/QRcode.php";

use Mpdf\Mpdf;

// var_dump($_POST);
// exit;

$html_text = $_POST["html_text"];

$dir_img = 'src/img/';
$teste = adicionaImagem($dir_img);
$img_ext = strtolower(pathinfo(basename($_FILES['imagem']['name']), PATHINFO_EXTENSION));
$temp_name = date('Y.m.d-H.i.s') . '.' . $img_ext;

//==============================================================
//============================CONFIG============================
//==============================================================
$filename = "certificado_preview" . time() . ".pdf";
$url = "certificados/$filename";
$codigo = md5(1234233);
// $qrimg = "../assets/img/certificados/QRCODE_TEMP.png";
$data_atual = date('Y-m-d H:i:s');

$background = "src/img/$temp_name"; 
// $img = $_POST['emitir_certificado_preview'];
// echo $img;
// exit;


$mpdf= new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4', 'default_font' => 'Montserrat', 'tempDir' => __DIR__ . '/temp']); 

$mpdf->SetDisplayMode('fullpage','two');
$mpdf->mirrorMargins = 1;

$html = '
<div style="height:800px; font-family: Montserrat; width:100%; background:url(\''.$background.'\'); background-size: cover; padding:3rem;
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
align-content: center;">' 
. $html_text .
'</div>' .
'<div style="position: absolute; right: 20px; bottom: 90px; width: 100px;"></div>
<div style="text-align: right; position: absolute; bottom: 3px; right: 10px; width: 900px; font-size: 7pt; color: #333; padding: 5px 20px;"><p>Este certificado foi gerado em www.institutoammo.org no dia '.date('d/m/Y').' às '.date('H:i').'.</p></div>';

$mpdf->setHeader();	// Clear headers before adding page
$mpdf->AddPage('L','','','','',0,0,0,0,18,12);
$mpdf->WriteHTML($html);
$mpdf->Output("$url", \Mpdf\Output\Destination::FILE);
$mpdf->Output('mpdf.pdf','I');
exit;
//==============================================================
//==============================================================
//==============================================================

function adicionaImagem($dir_img){
    // var_dump($_FILES);
    // exit;
    $up_img = $dir_img . basename($_FILES['imagem']['name']);

    $img_ext = strtolower(pathinfo($up_img, PATHINFO_EXTENSION));

    //Analisa se o tamanho da imagem upada é maior que 5MB
    if ($_FILES['imagem']['size'] > 5000000) {
        echo 'Imagem muito grande';
        exit;
    }

    // if ($img_ext != "jpg" && $img_ext != "png" && $img_ext != "jpeg" && $img_ext != "svg" && $img_ext != "gif") {
    //     echo $img_ext;
    //     echo "Tipo de arquivo incompatível";
    //     exit;
    // } 
    else {
        $temp_name = date('Y.m.d-H.i.s') . '.' . $img_ext;
        $teste = $dir_img . $temp_name;
        move_uploaded_file($_FILES['imagem']['tmp_name'], $teste);
        return $teste;
    }
}
?>