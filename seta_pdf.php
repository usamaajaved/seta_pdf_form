<?php
require_once('library/SetaPDF/Autoload.php');



$file = 'CIF_new.pdf';

// create a reader
$reader = new SetaPDF_Core_Reader_File($file);
// create a temporary file writer
$tempWriter = new SetaPDF_Core_Writer_TempFile();

$document = SetaPDF_Core_Document::load($reader, $tempWriter);


$formFiller = new SetaPDF_FormFiller($document);
// force re-formatting
$formFiller->setNeedAppearances(true);


// get access to the fields
$fields = $formFiller->getFields();

// fill the fields A and B which should be summed up in C
$fields['FN1']->setValue($_POST['fname']); // add some randomness
$fields['GN1']->setValue($_POST['gname']);
$fields['MN1']->setValue($_POST['mname']);
if (isset($_POST['CP']) && $_POST['CP'] == 'on') {
	$fields['CP']->setValue(true);
}
if (isset($_POST['USTW']) && $_POST['USTW'] == 'on') {
	$fields['USTW']->setValue(true);
}
if (isset($_POST['Both']) && $_POST['Both'] == 'on') {
	$fields['Both']->setValue(true);
}
if (isset($_POST['FileDestruction']) && $_POST['FileDestruction'] == 'on') {
	$fields['FileDestruction']->setValue(true);
}
if (isset($_POST['TRP']) && $_POST['TRP'] == 'on') {
	$fields['TRP']->setValue(true);
}
$fields['gender']->setValue($_POST['gender']);

$dob = explode('/', $_POST['dob']);
$day = $dob[0];
$month = $dob[1];
$year = $dob[2];
$fields['BirthM']->setValue($month);
$fields['BirthD']->setValue($day);
$fields['BirthY']->setValue($year);
$fields['CityTown']->setValue($_POST['city']);
$fields['Nationality']->setValue($_POST['nationality']);
$fields['Province']->setValue($_POST['state']);
$fields['Country']->setValue($_POST['country']);
$fields['Home_number']->setValue($_POST['home']);
$fields['ClientNo']->setValue($_POST['cell']);
$fields['WorkNo']->setValue($_POST['work']);
$fields['Mailing address']->setValue($_POST['email']);
$fields['SecondaryEmail']->setValue($_POST['email2']);
$fields['DLNo']->setValue($_POST['license_no']);
$fields['DLIssue']->setValue($_POST['license_province']);
$fields['DL']->setValue($_POST['d_license']);
$fields['OtherName1']->setValue($_POST['oname_1']);
$fields['OtherName2']->setValue($_POST['oname_2']);
$fields['OtherName3']->setValue($_POST['oname_3']);
$fields['OtherName4']->setValue($_POST['oname_4']);
$fields['OtherName5']->setValue($_POST['oname_5']);
$fields['OtherName6']->setValue($_POST['oname_6']);
$fields['USSocNo']->setValue($_POST['security_no']);
$fields['AN1']->setValue($_POST['alien_no']);
//<--------Personal Information----------->
$fields['Current_address']->setValue($_POST['current_address']);
$fields['Current_unit']->setValue($_POST['current_unit']);
$fields['Current_city']->setValue($_POST['current_city']);
$fields['Current_province']->setValue($_POST['current_province']);
$fields['Current_postal_code']->setValue($_POST['current_postal']);
$fields['Current_country']->setValue($_POST['current_country']);

$current_date_from = explode('/', $_POST['current_date_from']);
$current_day = $current_date_from[0];
$current_month = $current_date_from[1];
$current_year = $current_date_from[2];
$fields['CurrentAdD']->setValue($current_day);
$fields['CurrentAdM']->setValue($current_month);
$fields['CurrentAdY']->setValue($current_year);
//<--------Current Address Information Ends--------->
$fields['Mail_address_info']->setValue($_POST['mail_address']);
$fields['Mail_unit']->setValue($_POST['mail_unit']);
$fields['Mail_city']->setValue($_POST['mail_city']);
$fields['Mail_province']->setValue($_POST['mail_province']);
$fields['Mail_postal_code']->setValue($_POST['mail_postal']);
$fields['Mail_country']->setValue($_POST['mail_country']);
//<--------Mailing Address Information Ends--------->
$fields['previous_res_address']->setValue($_POST['prev_address_1']);
$fields['previous_res_unit']->setValue($_POST['prev_unit_1']);
$fields['previous_res_city']->setValue($_POST['prev_city_1']);
$fields['previous_res_province']->setValue($_POST['prev_province_1']);
$fields['previous_res_city']->setValue($_POST['prev_posta_1']);
$fields['previous_res_country']->setValue($_POST['prev_country_1']);

$prev_from_date_1 = explode('/', $_POST['prev_from_date_1']);
$prev_from_date_day = $prev_from_date_1[0];
$prev_from_date_month = $prev_from_date_1[1];
$prev_from_date_year = $prev_from_date_1[2];
$fields['PrevAdF1D']->setValue($prev_from_date_day);
$fields['PrevAdF1M']->setValue($prev_from_date_month);
$fields['PrevAdF1Y']->setValue($prev_from_date_year);

$prev_to_date_1 = explode('/', $_POST['prev_to_date_1']);
$prev_to_date_day = $prev_to_date_1[0];
$prev_to_date_month = $prev_to_date_1[1];
$prev_to_date_year = $prev_to_date_1[2];
$fields['PrevAdT1D']->setValue($prev_to_date_day);
$fields['PrevAdT1M']->setValue($prev_to_date_month);
$fields['PrevAdT1Y']->setValue($prev_to_date_year);

$fields['previous_res_street_name']->setValue($_POST['prev_address_2']);
$fields['previous_res_street_name']->setValue($_POST['prev_unit_2']);
$fields['previous_res_city2']->setValue($_POST['prev_city_2']);
$fields['previous_res_province2']->setValue($_POST['prev_province_2']);
$fields['previous_res_postal2']->setValue($_POST['prev_postal_2']);
$fields['previous_res_country2']->setValue($_POST['prev_country_2']);

$prev_from_date_2 = explode('/', $_POST['prev_from_date_2']);
$prev_from_date_day1 = $prev_from_date_2[0];
$prev_from_date_month1 = $prev_from_date_2[1];
$prev_from_date_year1 = $prev_from_date_2[2];
$fields['PrevAdF2D']->setValue($prev_from_date_day1);
$fields['PrevAdF2M']->setValue($prev_from_date_month1);
$fields['PrevAdF2Y']->setValue($prev_from_date_year1);

$prev_to_date_2 = explode('/', $_POST['prev_to_date_2']);
$prev_to_date_day1 = $prev_to_date_2[0];
$prev_to_date_month1 = $prev_to_date_2[1];
$prev_to_date_year1 = $prev_to_date_2[2];
$fields['PrevAdT2D']->setValue($prev_to_date_day1);
$fields['PrevAdT2M']->setValue($prev_to_date_month1);
$fields['PrevAdT2Y']->setValue($prev_to_date_year1);
// modify the document...

// save it
$document->save()->finish();
// copy it over
$saved_file = copy($tempWriter->getPath(), $_POST['fname'].".pdf");
$to = 'usama-javed@hotmail.com'

//sender
$from = 'sender@example.com';
$fromName = 'Seta PDF';

//email subject
$subject = 'PHP Email with Attachment by Seta PDF'; 

//attachment file path
$file = $_POST['fname'].".pdf";

//email body content
$htmlContent = '<h1>PHP Email with Attachment by Seta PDF</h1>
    <p>This email has sent from PHP script with attachment.</p>';

//header for sender info
$headers = "From: $fromName"." <".$from.">";

//boundary 
$semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

//headers for attachment 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

//multipart boundary 
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 

//preparing attachment
if(!empty($file) > 0){
    if(is_file($file)){
        $message .= "--{$mime_boundary}\n";
        $fp =    @fopen($file,"rb");
        $data =  @fread($fp,filesize($file));

        @fclose($fp);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . 
        "Content-Description: ".basename($file)."\n" .
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . 
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    }
}
$message .= "--{$mime_boundary}--";
$returnpath = "-f" . $from;

//send email
$mail = @mail($, $subject, $message, $headers, $returnpath);

$TY_subject = 'Thank You for reaching us!'
$TY_to = $_POST['email'];
$TY_messages = '<h1>Thank You for submitting the form. We will respond to you quickly.</h1>';
$TY_headers = "From: $fromName"." <".$from.">";




unlink($_POST['fname'].".pdf");

$TY_subject = 'Thank You for reaching us!'
$TY_to = $_POST['email'];

$thankyou_email = @mail($to, $TY_subject, $TY_messages, $TY_headers);

//email sending status
echo $mail?"<h1 style='text-align: center;margin-top: 18%;'>Mail sent to your mail address.</h1>":"<h1>Mail sending failed.</h1>";
echo "<SCRIPT type='text/javascript'>
        setTimeout(function(){ window.location.replace('index.php'); }, 2000);
    </SCRIPT>";
//echo $mail?"<h1 class='text-center'>Mail sent.</h1>":"<h1>Mail sending failed.</h1>";
//header('Location: index.php');