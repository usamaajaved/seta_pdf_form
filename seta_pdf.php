<?php
require_once('library/SetaPDF/Autoload.php');
include("config/config.php");

//  Insert Form Data into DB
$form_data = json_encode($_POST);
$query = "insert into pdf_form (form_data) VALUES ('".$form_data."')";
$res = mysqli_query($con_str, $query);


// Generate PDF
$file = 'CIF.pdf';

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

//  Page # 1

$fields['gender']->setValue($_POST['gender']);
$fields['OtherName1']->setValue($_POST['oname_1']);
$fields['OtherName2']->setValue($_POST['oname_2']);
$fields['OtherName3']->setValue($_POST['oname_3']);
$fields['OtherName4']->setValue($_POST['oname_4']);
$fields['OtherName5']->setValue($_POST['oname_5']);
$fields['OtherName6']->setValue($_POST['oname_6']);
if (isset($_POST['dob']) && $_POST['dob'] != null) {
    $dob = explode('/', $_POST['dob']);
    $month = $dob[0];
    $day = $dob[1];
    $year = $dob[2];
    $fields['BirthM']->setValue($month);
    $fields['BirthD']->setValue($day);
    $fields['BirthY']->setValue($year);
}
$fields['FormI-192[0].#subform[1].Pt3Line4_CountryOfBirth[2]']->setValue($_POST['nationality']);
$fields['FormI-192[0].#subform[1].Pt3Line4_CityorTown[0]']->setValue($_POST['city']);
$fields['FormI-192[0].#subform[1].Pt3Line4_CountryOfBirth[0]']->setValue($_POST['state']);
$fields['FormI-192[0].#subform[1].Pt3Line4_CountryOfBirth[1]']->setValue($_POST['country']);
$fields['USSocNo']->setValue($_POST['security_no']);

// PAGE # 02

$fields['AN1']->setValue($_POST['alien_no']);
$fields['FormI-192[0].#subform[8].Part9_Line4_InterpreterDaytimeTelephoneNumber[0]']->setValue($_POST['home']);
$fields['FormI-192[0].#subform[8].Part8_Line5_MobileTelephoneNumber[1]']->setValue($_POST['cell']);
$fields['WorkNo']->setValue($_POST['work']);
$fields['FormI-192[0].#subform[7].Part8_Line6_Email[0]']->setValue($_POST['email']);
$fields['SecondaryEmail']->setValue($_POST['email2']);
$fields['DL']->setValue($_POST['d_license']);
$fields['DLNo']->setValue($_POST['license_no']);
$fields['DLIssue']->setValue($_POST['license_province']);
$fields['FormI-192[0].#subform[2].Pt2Line10_StreetNumberName[5]']->setValue($_POST['current_address']);
$fields['FormI-192[0].#subform[2].Pt2Line12_AptSteFlrNumber[0]']->setValue($_POST['current_unit']);
$fields['FormI-192[0].#subform[2].Pt2Line10_CityOrTown[5]']->setValue($_POST['current_city']);
$fields['FormI-192[0].#subform[2].Pt2Line10_Province[5]']->setValue($_POST['current_province']);
$fields['FormI-192[0].#subform[2].Pt2Line10_PostalCode[5]']->setValue($_POST['current_postal']);
$fields['FormI-192[0].#subform[2].Pt2Line10_Country[5]']->setValue($_POST['current_country']);
if (isset($_POST['current_date_from']) && $_POST['current_date_from'] != null) {
    $current_date_from = explode('/', $_POST['current_date_from']);
    $current_month = $current_date_from[0];
    $current_day = $current_date_from[1];
    $current_year = $current_date_from[2];
    $fields['CurrentAdD']->setValue($current_day);
    $fields['CurrentAdM']->setValue($current_month);
    $fields['CurrentAdY']->setValue($current_year);
}
// //<--------Current Address Information Ends--------->
$fields['FormI-192[0].#subform[2].Pt2Line10_StreetNumberName[5]']->setValue($_POST['mail_address']);
$fields['FormI-192[0].#subform[2].Pt2Line12_AptSteFlrNumber[0]']->setValue($_POST['mail_unit']);
$fields['FormI-192[0].#subform[2].Pt2Line10_CityOrTown[5]']->setValue($_POST['mail_city']);
$fields['FormI-192[0].#subform[2].Pt2Line10_Province[5]']->setValue($_POST['mail_province']);
$fields['FormI-192[0].#subform[2].Pt2Line10_PostalCode[5]']->setValue($_POST['mail_postal']);
$fields['FormI-192[0].#subform[2].Pt2Line10_Country[5]']->setValue($_POST['mail_country']);
// //<--------Mailing Address Information Ends--------->
$fields['FormI-192[0].#subform[2].Pt2Line10_StreetNumberName[2]']->setValue($_POST['prev_address_1']);
$fields['FormI-192[0].#subform[2].Pt2Line14_AptSteFlrNumber[0]']->setValue($_POST['prev_unit_1']);
$fields['FormI-192[0].#subform[2].Pt2Line10_CityOrTown[2]']->setValue($_POST['prev_city_1']);
$fields['FormI-192[0].#subform[2].Pt2Line10_Province[2]']->setValue($_POST['prev_province_1']);
$fields['FormI-192[0].#subform[2].Pt2Line10_PostalCode[2]']->setValue($_POST['prev_posta_1']);
$fields['FormI-192[0].#subform[2].Pt2Line10_PostalCode[2]']->setValue($_POST['prev_country_1']);
if (isset($_POST['prev_from_date_1']) && $_POST['prev_from_date_1'] != null) {
    $prev_from_date_1 = explode('/', $_POST['prev_from_date_1']);
    $prev_from_date_month = $prev_from_date_1[0];
    $prev_from_date_day = $prev_from_date_1[1];
    $prev_from_date_year = $prev_from_date_1[2];
    $fields['PrevAdF1D']->setValue($prev_from_date_day);
    $fields['PrevAdF1M']->setValue($prev_from_date_month);
    $fields['PrevAdF1Y']->setValue($prev_from_date_year);
}
if (isset($_POST['prev_to_date_1']) && $_POST['prev_to_date_1'] != null) {
    $prev_to_date_1 = explode('/', $_POST['prev_to_date_1']);
    $prev_to_date_month = $prev_to_date_1[0];
    $prev_to_date_day = $prev_to_date_1[1];
    $prev_to_date_year = $prev_to_date_1[2];
    $fields['PrevAdT1D']->setValue($prev_to_date_day);
    $fields['PrevAdT1M']->setValue($prev_to_date_month);
    $fields['PrevAdT1Y']->setValue($prev_to_date_year);
}
$fields['FormI-192[0].#subform[2].Pt2Line10_StreetNumberName[4]']->setValue($_POST['prev_address_2']);
$fields['FormI-192[0].#subform[2].Pt2Line10_AptSteFlrNumber[1]']->setValue($_POST['prev_unit_2']);

//  Page # 03

$fields['FormI-192[0].#subform[2].Pt2Line10_CityOrTown[4]']->setValue($_POST['prev_city_2']);
$fields['FormI-192[0].#subform[2].Pt2Line10_Province[4]']->setValue($_POST['prev_province_2']);
$fields['FormI-192[0].#subform[2].Pt2Line10_PostalCode[4]']->setValue($_POST['prev_postal_2']);
$fields['FormI-192[0].#subform[2].Pt2Line10_Country[4]']->setValue($_POST['prev_country_2']);
if (isset($_POST['prev_from_date_2']) && $_POST['prev_from_date_2'] != null) {
    $prev_from_date_2 = explode('/', $_POST['prev_from_date_2']);
    $prev_from_date_month1 = $prev_from_date_2[0];
    $prev_from_date_day1 = $prev_from_date_2[1];
    $prev_from_date_year1 = $prev_from_date_2[2];
    $fields['PrevAdF2D']->setValue($prev_from_date_day1);
    $fields['PrevAdF2M']->setValue($prev_from_date_month1);
    $fields['PrevAdF2Y']->setValue($prev_from_date_year1);
}

if (isset($_POST['prev_to_date_2']) && $_POST['prev_to_date_2'] != null) {
    $prev_to_date_2 = explode('/', $_POST['prev_to_date_2']);
    $prev_to_date_month1 = $prev_to_date_2[0];
    $prev_to_date_day1 = $prev_to_date_2[1];
    $prev_to_date_year1 = $prev_to_date_2[2];
    $fields['PrevAdT2D']->setValue($prev_to_date_day1);
    $fields['PrevAdT2M']->setValue($prev_to_date_month1);
    $fields['PrevAdT2Y']->setValue($prev_to_date_year1);
}

$fields['FormI-192[0].#subform[2].Pt2Line10_StreetNumberName[3]']->setValue($_POST['prev_address_3']);
$fields['FormI-192[0].#subform[2].Pt2Line18_AptSteFlrNumber[0]']->setValue($_POST['prev_unit_3']);
$fields['FormI-192[0].#subform[2].Pt2Line10_CityOrTown[3]']->setValue($_POST['prev_city_3']);
$fields['FormI-192[0].#subform[2].Pt2Line10_CityOrTown[3]']->setValue($_POST['prev_province_3']);
$fields['FormI-192[0].#subform[2].Pt2Line10_PostalCode[3]']->setValue($_POST['prev_postal_3']);
$fields['prev_postal_3']->setValue($_POST['prev_country_3']);
if (isset($_POST['prev_from_date_3']) && $_POST['prev_from_date_3'] != null) {
    $prev_from_date_3 = explode('/', $_POST['prev_from_date_3']);
    $prev_from_date_month3 = $prev_from_date_3[0];
    $prev_from_date_day3 = $prev_from_date_3[1];
    $prev_from_date_year3 = $prev_from_date_3[2];
    $fields['PrevAdF3D']->setValue($prev_from_date_day3);
    $fields['PrevAdF3M']->setValue($prev_from_date_month3);
    $fields['PrevAdF3Y']->setValue($prev_from_date_year3);
}
if (isset($_POST['prev_to_date_3']) && $_POST['prev_to_date_3'] != null) {
    $prev_to_date_3 = explode('/', $_POST['prev_to_date_3']);
    $prev_to_date_month3 = $prev_to_date_3[0];
    $prev_to_date_day3 = $prev_to_date_3[1];
    $prev_to_date_year3 = $prev_to_date_3[2];
    $fields['PrevAdT3D']->setValue($prev_to_date_day3);
    $fields['PrevAdT3M']->setValue($prev_to_date_month3);
    $fields['PrevAdT3Y']->setValue($prev_to_date_year3);
}

$fields['ResidenceStreet1']->setValue($_POST['prev_address_4']);
$fields['ResidenceAU1']->setValue($_POST['prev_unit_4']);
$fields['ResidenceCity1']->setValue($_POST['prev_city_4']);
$fields['Text1']->setValue($_POST['prev_province_4']);
$fields['Text2']->setValue($_POST['prev_postal_4']);
$fields['ResidenceCountry1']->setValue($_POST['prev_country_4']);
if (isset($_POST['prev_from_date_4']) && $_POST['prev_from_date_4'] != null) {
    $prev_from_date_4 = explode('/', $_POST['prev_from_date_4']);
    $prev_from_date_month4 = $prev_from_date_4[0];
    $prev_from_date_day4 = $prev_from_date_4[1];
    $prev_from_date_year4 = $prev_from_date_4[2];
    $fields['PrevAdF4D']->setValue($prev_from_date_day4);
    $fields['PrevAdF4M']->setValue($prev_from_date_month4);
    $fields['PrevAdF4Y']->setValue($prev_from_date_year4);
}
if (isset($_POST['prev_to_date_4']) && $_POST['prev_to_date_4'] != null) {
    $prev_to_date_4 = explode('/', $_POST['prev_to_date_4']);
    $prev_to_date_month4 = $prev_to_date_4[0];
    $prev_to_date_day4 = $prev_to_date_4[1];
    $prev_to_date_year4 = $prev_to_date_4[2];
    $fields['PrevAdT4D']->setValue($prev_to_date_day4);
    $fields['PrevAdT4M']->setValue($prev_to_date_month4);
    $fields['PrevAdT4Y']->setValue($prev_to_date_year4);
}
$fields['ResidenceStreet2']->setValue($_POST['prev_address_5']);
$fields['ResidenceAU2']->setValue($_POST['prev_unit_5']);
$fields['ResidenceCity2']->setValue($_POST['prev_city_5']);
$fields['ResidenceState2']->setValue($_POST['prev_province_5']);
$fields['ResidenceZip2']->setValue($_POST['prev_postal_5']);
$fields['ResidenceCountry2']->setValue($_POST['prev_country_5']);
if (isset($_POST['prev_from_date_5']) && $_POST['prev_from_date_5'] != null) {
    $prev_from_date_5 = explode('/', $_POST['prev_from_date_5']);
    $prev_from_date_month5 = $prev_from_date_5[0];
    $prev_from_date_day5 = $prev_from_date_5[1];
    $prev_from_date_year5 = $prev_from_date_5[2];
    $fields['PrevAdF5D']->setValue($prev_from_date_day5);
    $fields['PrevAdF5M']->setValue($prev_from_date_month5);
    $fields['PrevAdF5Y']->setValue($prev_from_date_year5);
}
if (isset($_POST['prev_to_date_5']) && $_POST['prev_to_date_5'] != null) {
    $prev_to_date_5 = explode('/', $_POST['prev_to_date_5']);
    $prev_to_date_month5 = $prev_to_date_5[0];
    $prev_to_date_day5 = $prev_to_date_5[1];
    $prev_to_date_year5 = $prev_to_date_5[2];
    $fields['PrevAdT5D']->setValue($prev_to_date_day5);
    $fields['PrevAdT5M']->setValue($prev_to_date_month5);
    $fields['PrevAdT5Y']->setValue($prev_to_date_year5);
}
$fields['Employed']->setValue($_POST['employed']);
if (isset($_POST['Employment']) && $_POST['Employment'] == 'on') {
    $fields['Employment']->setValue(true);
}



$fields['FormI-192[0].#subform[4].EmployerName[0]']->setValue($_POST['emp_name']);
$fields['FormI-192[0].#subform[4].Pt2Line10_StreetNumberName[6]']->setValue($_POST['emp_address']);
$fields['FormI-192[0].#subform[4].Pt2Line10_AptSteFlrNumber[2]']->setValue($_POST['emp_unit']);
$fields['FormI-192[0].#subform[4].Pt2Line10_CityOrTown[6]']->setValue($_POST['emp_city']);
$fields['FormI-192[0].#subform[4].Pt2Line10_Province[6]']->setValue($_POST['emp_province']);
$fields['FormI-192[0].#subform[4].Pt2Line10_Country[6]']->setValue($_POST['emp_country']);
$fields['FormI-192[0].#subform[4].Occupation[0]']->setValue($_POST['emp_occupation']);
if (isset($_POST['emp_from_date']) && $_POST['emp_from_date'] != null) {
    $emp_from_date = explode('/', $_POST['emp_from_date']);
    $emp_from_date_month = $emp_from_date[0];
    $emp_from_date_day = $emp_from_date[1];
    $emp_from_date_year = $emp_from_date[2];
    $fields['empAdF5D']->setValue($emp_from_date_day);
    $fields['empAdF5M']->setValue($emp_from_date_month);
    $fields['empAdF5Y']->setValue($emp_from_date_year);
}
if (isset($_POST['emp_to_date']) && $_POST['emp_to_date'] != null) {
    $emp_to_date = explode('/', $_POST['emp_to_date']);
    $emp_to_date_month = $emp_to_date[0];
    $emp_to_date_day = $emp_to_date[1];
    $emp_to_date_year = $emp_to_date[2];
    $fields['empAdT5D']->setValue($emp_to_date_day);
    $fields['empAdT5M']->setValue($emp_to_date_month);
    $fields['empAdT5Y']->setValue($emp_to_date_year);
}



// 2

$fields['FormI-192[0].#subform[5].EmployerName[1]']->setValue($_POST['emp_name2']);
$fields['FormI-192[0].#subform[5].Pt2Line10_StreetNumberName[7]']->setValue($_POST['emp_address2']);
$fields['FormI-192[0].#subform[5].Pt4Line6_AptSteFlrNumber[0]']->setValue($_POST['emp_unit2']);
$fields['FormI-192[0].#subform[5].Pt2Line10_CityOrTown[7]']->setValue($_POST['emp_city2']);
$fields['FormI-192[0].#subform[5].Pt2Line10_Province[7]']->setValue($_POST['emp_province2']);
$fields['FormI-192[0].#subform[5].Pt2Line10_Country[7]']->setValue($_POST['emp_country2']);
$fields['FormI-192[0].#subform[5].Occupation[1]']->setValue($_POST['emp_occupation2']);
if (isset($_POST['emp_from_date2']) && $_POST['emp_from_date2'] != null) {
    $emp_from_date2 = explode('/', $_POST['emp_from_date2']);
    $emp_from_date_month2 = $emp_from_date2[0];
    $emp_from_date_day2 = $emp_from_date2[1];
    $emp_from_date_year2 = $emp_from_date2[2];
    $fields['PrevEmpF1D']->setValue($emp_from_date_day2);
    $fields['PrevEmpF1M']->setValue($emp_from_date_month2);
    $fields['PrevEmpF1Y']->setValue($emp_from_date_year2);
}
if (isset($_POST['emp_to_date2']) && $_POST['emp_to_date2'] != null) {
    $emp_to_date2 = explode('/', $_POST['emp_to_date2']);
    $emp_to_date_month2 = $emp_to_date2[0];
    $emp_to_date_day2 = $emp_to_date2[1];
    $emp_to_date_year2 = $emp_to_date2[2];
    $fields['PrevEmpT1D']->setValue($emp_to_date_day2);
    $fields['PrevEmpT1M']->setValue($emp_to_date_month2);
    $fields['PrevEmpT1Y']->setValue($emp_to_date_year2);
}

// 3
$fields['']->setValue($_POST['emp_name3']);
$fields['']->setValue($_POST['emp_address3']);
$fields['']->setValue($_POST['emp_unit3']);
$fields['']->setValue($_POST['emp_city3']);
$fields['']->setValue($_POST['emp_province3']);
$fields['']->setValue($_POST['emp_country3']);
$fields['']->setValue($_POST['emp_occupation3']);
if (isset($_POST['emp_from_date3']) && $_POST['emp_from_date3'] != null) {
    $emp_from_date3 = explode('/', $_POST['emp_from_date3']);
    $emp_from_date_month3 = $emp_from_date3[0];
    $emp_from_date_day3 = $emp_from_date3[1];
    $emp_from_date_year3 = $emp_from_date3[2];
    $fields['empAdF5D']->setValue($emp_from_date_day3);
    $fields['empAdF5M']->setValue($emp_from_date_month3);
    $fields['empAdF5Y']->setValue($emp_from_date_year3);
}
if (isset($_POST['emp_to_date3']) && $_POST['emp_to_date3'] != null) {
    $emp_to_date3 = explode('/', $_POST['emp_to_date3']);
    $emp_to_date_month3 = $emp_to_date3[0];
    $emp_to_date_day3 = $emp_to_date3[1];
    $emp_to_date_year3 = $emp_to_date3[2];
    $fields['empAdT5D']->setValue($emp_to_date_day3);
    $fields['empAdT5M']->setValue($emp_to_date_month3);
    $fields['empAdT5Y']->setValue($emp_to_date_year3);
}


//4
$fields['']->setValue($_POST['emp_name4']);
$fields['']->setValue($_POST['emp_address4']);
$fields['']->setValue($_POST['emp_unit4']);
$fields['']->setValue($_POST['emp_city4']);
$fields['']->setValue($_POST['emp_province4']);
$fields['']->setValue($_POST['emp_country4']);
$fields['']->setValue($_POST['emp_occupation4']);
if (isset($_POST['emp_from_date4']) && $_POST['emp_from_date4'] != null) {
    $emp_from_date4 = explode('/', $_POST['emp_from_date4']);
    $emp_from_date_month4 = $emp_from_date4[0];
    $emp_from_date_day4 = $emp_from_date4[1];
    $emp_from_date_year4 = $emp_from_date4[2];
    $fields['PrevAdF5D']->setValue($emp_from_date_day4);
    $fields['PrevAdF5M']->setValue($emp_from_date_month4);
    $fields['PrevAdF5Y']->setValue($emp_from_date_year4);
}
if (isset($_POST['emp_to_date4']) && $_POST['emp_to_date4'] != null) {
    $emp_to_date4 = explode('/', $_POST['emp_to_date4']);
    $emp_to_date_month4 = $emp_to_date4[0];
    $emp_to_date_day4 = $emp_to_date4[1];
    $emp_to_date_year4 = $emp_to_date4[2];
    $fields['PrevAdT5D']->setValue($emp_to_date_day4);
    $fields['PrevAdT5M']->setValue($emp_to_date_month4);
    $fields['PrevAdT5Y']->setValue($emp_to_date_year4);
}

//5
$fields['']->setValue($_POST['emp_name5']);
$fields['']->setValue($_POST['emp_address5']);
$fields['']->setValue($_POST['emp_unit5']);
$fields['']->setValue($_POST['emp_city5']);
$fields['']->setValue($_POST['emp_province5']);
$fields['']->setValue($_POST['emp_country5']);
$fields['']->setValue($_POST['emp_occupation5']);
if (isset($_POST['emp_from_date5']) && $_POST['emp_from_date5'] != null) {
    $emp_from_date5 = explode('/', $_POST['emp_from_date5']);
    $emp_from_date_month5 = $emp_from_date5[0];
    $emp_from_date_day5 = $emp_from_date5[1];
    $emp_from_date_year5 = $emp_from_date5[2];
    $fields['PrevAdF5D']->setValue($emp_from_date_day5);
    $fields['PrevAdF5M']->setValue($emp_from_date_month5);
    $fields['PrevAdF5Y']->setValue($emp_from_date_year5);
}
if (isset($_POST['emp_to_date5']) && $_POST['emp_to_date5'] != null) {
    $emp_to_date5 = explode('/', $_POST['emp_to_date5']);
    $emp_to_date_month5 = $emp_to_date5[0];
    $emp_to_date_day5 = $emp_to_date5[1];
    $emp_to_date_year5 = $emp_to_date5[2];
    $fields['PrevAdT5D']->setValue($emp_to_date_day5);
    $fields['PrevAdT5M']->setValue($emp_to_date_month5);
    $fields['PrevAdT5Y']->setValue($emp_to_date_year5);
}


// save it
$document->save()->finish();
// copy it over
copy($tempWriter->getPath(), $_POST['fname'].".pdf");
// $to = 'usama-javed@hotmail.com'

// //sender
// $from = 'sender@example.com';
// $fromName = 'Seta PDF';

// //email subject
// $subject = 'PHP Email with Attachment by Seta PDF'; 

// //attachment file path
// $file = $_POST['fname'].".pdf";

// //email body content
// $htmlContent = '<h1>PHP Email with Attachment by Seta PDF</h1>
//     <p>This email has sent from PHP script with attachment.</p>';

// //header for sender info
// $headers = "From: $fromName"." <".$from.">";

// //boundary 
// $semi_rand = md5(time()); 
// $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

// //headers for attachment 
// $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

// //multipart boundary 
// $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
// "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 

// //preparing attachment
// if(!empty($file) > 0){
//     if(is_file($file)){
//         $message .= "--{$mime_boundary}\n";
//         $fp =    @fopen($file,"rb");
//         $data =  @fread($fp,filesize($file));

//         @fclose($fp);
//         $data = chunk_split(base64_encode($data));
//         $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . 
//         "Content-Description: ".basename($file)."\n" .
//         "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . 
//         "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
//     }
// }
// $message .= "--{$mime_boundary}--";
// $returnpath = "-f" . $from;

// //send email
// $mail = @mail($, $subject, $message, $headers, $returnpath);

// $TY_subject = 'Thank You for reaching us!'
// $TY_to = $_POST['email'];
// $TY_messages = '<h1>Thank You for submitting the form. We will respond to you quickly.</h1>';
// $TY_headers = "From: $fromName"." <".$from.">";




// unlink($_POST['fname'].".pdf");

// $TY_subject = 'Thank You for reaching us!'
// $TY_to = $_POST['email'];

// $thankyou_email = @mail($to, $TY_subject, $TY_messages, $TY_headers);

// //email sending status
// echo $mail?"<h1 style='text-align: center;margin-top: 18%;'>Mail sent to your mail address.</h1>":"<h1>Mail sending failed.</h1>";
// echo "<SCRIPT type='text/javascript'>
//         setTimeout(function(){ window.location.replace('index.php'); }, 2000);
//     </SCRIPT>";
// //echo $mail?"<h1 class='text-center'>Mail sent.</h1>":"<h1>Mail sending failed.</h1>";
// //header('Location: index.php');