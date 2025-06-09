<?php
require_once('vendor/autoload.php');

// data pribadi
$name = $_POST['name'];
$position = $_POST['position'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$explainSelf = $_POST['explainSelf'];

// data pendidikan
$title = $_POST['title'];
$institution = $_POST['institution'];
$description = $_POST['description'];

// data pengalaman
$exPosition = $_POST['exPosition'];
$company = $_POST['company'];
$descCompany = $_POST['descCompany'];

// data keterampilan
$skill1 = $_POST['skill1'];
$skill2 = $_POST['skill2'];
$skill3 = $_POST['skill3'];

$pdf = new TCPDF();
$pdf->setPrintHeader(false); // MATIKAN header
$pdf->setPrintFooter(false); // MATIKAN footer
$pdf->SetMargins(25, 25, 25); // kiri, atas, kanan

$pdf->AddPage();
$pdf->SetFont('Helvetica', 12);

$html = <<<EOD
<!-- Bagian Atas: Nama dan Info Kontak -->
<div style="line-height:1.4; ">
<span style="font-size:20px; font-weight:bold; text-transform:uppercase;">$name</span><br>
<span style="font-size:14px; font-weight:bold;">$position</span><br>
<span style="font-size:11px; color:#555;">$address | $email | $phone</span>
</div>

    <!-- Summary -->
    <div style="line-height:1.4; ">
        <div style="font-size:14px; font-weight:bold; border-bottom:1.5px solid #000; padding-bottom:3px;">DESKRIPSI</div>
    <span style="font-size:11pt; text-align:justify;">$explainSelf</span>
    </div>

    <!-- Pendidikan -->
    <div style="line-height:1.4; ">
        <div style="font-size:14px; font-weight:bold; padding-bottom:3px; border-bottom:1.5px solid #000;">PENDIDIKAN</div>
        <span style="font-size:11pt; "><strong>Gelar:</strong>$title</span><br>
<span style="font-size:11pt; "><strong>Institusi:</strong>$institution</span><br>
<span style="font-size:11pt; text-align:justify;">$description</span>
    </div>

<!-- Pengalaman -->
<div style="line-height:1.4; ">
    <div style="font-size:14px; font-weight:bold; padding-bottom:3px; border-bottom:1.5px solid #000;">PENGALAMAN</div>
<span style="font-size:11pt; "><strong>Posisi:</strong> $exPosition</span><br>
<span style="font-size:11pt; "><strong>Perusahaan:</strong> $company</span><br>
<span style="font-size:11pt; text-align:justify;">$descCompany</span>
</div>

<!-- Keterampilan -->
<div style="line-height:1.4; ">
    <div style="font-size:14px; font-weight:bold; padding-bottom:3px; border-bottom:1.5px solid #000; ">KETERAMPILAN</div>
    <span style="font-size:11pt; ">- $skill1</span><br>
<span style="font-size:11pt; ">- $skill2</span><br>
<span style="font-size:11pt; display:inline-block;">- $skill3</span>
</div>

EOD;

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output("CV_$name.pdf", 'I');
