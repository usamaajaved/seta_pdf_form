<?php echo "<pre>"; print_r($_POST);exit; 
require_once('library/SetaPDF/Autoload.php');
include("config/config.php");

//  Insert Form Data into DB
$form_data = json_encode($_POST);
$checkIfExistsQuery = "SELECT * FROM pdf_form WHERE user_id = ".$_POST['user_id']."";
$res1 = mysqli_query($con_str, $checkIfExistsQuery);
if($res1->num_rows==1){
    $query = "UPDATE `pdf_form` SET `user_id`=".$_POST['user_id'].",`form_data`='".$form_data."' WHERE user_id = ".$_POST['user_id']."";
}else{
    $query = "insert into pdf_form (user_id, form_data) VALUES (".$_POST['user_id'].", '".$form_data."')";
}
$res = mysqli_query($con_str, $query);

if(isset($_POST['submitType']) && $_POST['submitType']=="ajax"){
    return false;
}
if (isset($_POST['id'])) {
    $finisedForm = 'UPDATE `users` set `is_form`="Yes" where `id` ='.$_POST['id'].'';
    $res1 = mysqli_query($con_str,$finisedForm);    
}


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
if (isset($_POST['license_no'])) {
    $fields['DLNo']->setValue($_POST['license_no']);
}
if (isset($_POST['license_province'])) {
    $fields['DLIssue']->setValue($_POST['license_province']);
}
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
$fields['FormI-192[0].#subform[2].Pt2Line10_Country[2]']->setValue($_POST['prev_country_1']);
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
$fields['FormI-192[0].#subform[2].Pt2Line10_Province[3]']->setValue($_POST['prev_province_3']);
$fields['FormI-192[0].#subform[2].Pt2Line10_PostalCode[3]']->setValue($_POST['prev_postal_3']);
$fields['FormI-192[0].#subform[2].Pt2Line10_Country[3]']->setValue($_POST['prev_country_3']);
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
    $fields['CurEmpF1D']->setValue($emp_from_date_day);
    $fields['CurEmpF1M']->setValue($emp_from_date_month);
    $fields['CurEmpF1Y']->setValue($emp_from_date_year);
}
if (isset($_POST['emp_to_date']) && $_POST['emp_to_date'] != null) {
    $emp_to_date = explode('/', $_POST['emp_to_date']);
    $emp_to_date_month = $emp_to_date[0];
    $emp_to_date_day = $emp_to_date[1];
    $emp_to_date_year = $emp_to_date[2];
    $fields['CurEmpT1D']->setValue($emp_to_date_day);
    $fields['CurEmpT1M']->setValue($emp_to_date_month);
    $fields['CurEmpT1Y']->setValue($emp_to_date_year);
}

// PAGE # 04

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

$fields['Employer.0']->setValue($_POST['emp_name3']);
$fields['EmployerStreet.0']->setValue($_POST['emp_address3']);
$fields['EmployerUnit.0']->setValue($_POST['emp_unit3']);
$fields['EmployerCity.0']->setValue($_POST['emp_city3']);
$fields['EmployerState.0']->setValue($_POST['emp_province3']);
$fields['EmployerCountry.0']->setValue($_POST['emp_country3']);
$fields['Occupation.0']->setValue($_POST['emp_occupation3']);
if (isset($_POST['emp_from_date3']) && $_POST['emp_from_date3'] != null) {
    $emp_from_date3 = explode('/', $_POST['emp_from_date3']);
    $emp_from_date_month3 = $emp_from_date3[0];
    $emp_from_date_day3 = $emp_from_date3[1];
    $emp_from_date_year3 = $emp_from_date3[2];
    $fields['PrevEmpF2D']->setValue($emp_from_date_day3);
    $fields['PrevEmpF2M']->setValue($emp_from_date_month3);
    $fields['PrevEmpF2Y']->setValue($emp_from_date_year3);
}
if (isset($_POST['emp_to_date3']) && $_POST['emp_to_date3'] != null) {
    $emp_to_date3 = explode('/', $_POST['emp_to_date3']);
    $emp_to_date_month3 = $emp_to_date3[0];
    $emp_to_date_day3 = $emp_to_date3[1];
    $emp_to_date_year3 = $emp_to_date3[2];
    $fields['PrevEmpT2D']->setValue($emp_to_date_day3);
    $fields['PrevEmpT2M']->setValue($emp_to_date_month3);
    $fields['PrevEmpT2Y']->setValue($emp_to_date_year3);
}

$fields['Employer.1']->setValue($_POST['emp_name4']);
$fields['EmployerStreet.1']->setValue($_POST['emp_address4']);
$fields['EmployerUnit.1']->setValue($_POST['emp_unit4']);
$fields['EmployerCity.1']->setValue($_POST['emp_city4']);
$fields['EmployerState.1']->setValue($_POST['emp_province4']);
$fields['EmployerCountry.1']->setValue($_POST['emp_country4']);
$fields['Occupation.1']->setValue($_POST['emp_occupation4']);
if (isset($_POST['emp_from_date4']) && $_POST['emp_from_date4'] != null) {
    $emp_from_date4 = explode('/', $_POST['emp_from_date4']);
    $emp_from_date_month4 = $emp_from_date4[0];
    $emp_from_date_day4 = $emp_from_date4[1];
    $emp_from_date_year4 = $emp_from_date4[2];
    $fields['PrevEmpF3D']->setValue($emp_from_date_day4);
    $fields['PrevEmpF3M']->setValue($emp_from_date_month4);
    $fields['PrevEmpF3Y']->setValue($emp_from_date_year4);
}
if (isset($_POST['emp_to_date4']) && $_POST['emp_to_date4'] != null) {
    $emp_to_date4 = explode('/', $_POST['emp_to_date4']);
    $emp_to_date_month4 = $emp_to_date4[0];
    $emp_to_date_day4 = $emp_to_date4[1];
    $emp_to_date_year4 = $emp_to_date4[2];
    $fields['PrevEmpT3D']->setValue($emp_to_date_day4);
    $fields['PrevEmpT3M']->setValue($emp_to_date_month4);
    $fields['PrevEmpT3Y']->setValue($emp_to_date_year4);
}

$fields['Employer.2']->setValue($_POST['emp_name5']);
$fields['EmployerStreet.2']->setValue($_POST['emp_address5']);
$fields['EmployerUnit.2']->setValue($_POST['emp_unit5']);
$fields['EmployerCity.2']->setValue($_POST['emp_city5']);
$fields['EmployerState.2']->setValue($_POST['emp_province5']);
$fields['EmployerCountry.2']->setValue($_POST['emp_country5']);
$fields['Occupation.2']->setValue($_POST['emp_occupation5']);
if (isset($_POST['emp_from_date5']) && $_POST['emp_from_date5'] != null) {
    $emp_from_date5 = explode('/', $_POST['emp_from_date5']);
    $emp_from_date_month5 = $emp_from_date5[0];
    $emp_from_date_day5 = $emp_from_date5[1];
    $emp_from_date_year5 = $emp_from_date5[2];
    $fields['PrevEmpF4D']->setValue($emp_from_date_day5);
    $fields['PrevEmpF4M']->setValue($emp_from_date_month5);
    $fields['PrevEmpF4Y']->setValue($emp_from_date_year5);
}
if (isset($_POST['emp_to_date5']) && $_POST['emp_to_date5'] != null) {
    $emp_to_date5 = explode('/', $_POST['emp_to_date5']);
    $emp_to_date_month5 = $emp_to_date5[0];
    $emp_to_date_day5 = $emp_to_date5[1];
    $emp_to_date_year5 = $emp_to_date5[2];
    $fields['PrevEmpT4D']->setValue($emp_to_date_day5);
    $fields['PrevEmpT4M']->setValue($emp_to_date_month5);
    $fields['PrevEmpT4Y']->setValue($emp_to_date_year5);
}

$fields['LastEmployer']->setValue($_POST['emp_name6']);
$fields['LastEmployerStreet']->setValue($_POST['emp_address6']);
$fields['LastEmployerUnit']->setValue($_POST['emp_unit6']);
$fields['LastEmployerCity']->setValue($_POST['emp_city6']);
$fields['LastEmployerState']->setValue($_POST['emp_province6']);
$fields['LastEmployerCountry']->setValue($_POST['emp_country6']);
$fields['LastOccupation']->setValue($_POST['emp_occupation6']);
if (isset($_POST['emp_from_date6']) && $_POST['emp_from_date6'] != null) {
    $emp_from_date6 = explode('/', $_POST['emp_from_date6']);
    $emp_from_date_month6 = $emp_from_date6[0];
    $emp_from_date_day6 = $emp_from_date6[1];
    $emp_from_date_year6 = $emp_from_date6[2];
    $fields['LastEmpF4D']->setValue($emp_from_date_day6);
    $fields['LastEmpF4M']->setValue($emp_from_date_month6);
    $fields['LastEmpF4Y']->setValue($emp_from_date_year6);
}
if (isset($_POST['emp_to_date6']) && $_POST['emp_to_date6'] != null) {
    $emp_to_date6 = explode('/', $_POST['emp_to_date6']);
    $emp_to_date_month6 = $emp_to_date6[0];
    $emp_to_date_day6 = $emp_to_date6[1];
    $emp_to_date_year6 = $emp_to_date6[2];
    $fields['LastEmpT4D']->setValue($emp_to_date_day6);
    $fields['LastEmpT4M']->setValue($emp_to_date_month6);
    $fields['LastEmpT4Y']->setValue($emp_to_date_year6);
}   
$fields['FormI-192[0].#subform[5].Pt4Line9a_FamilyName[0]']->setValue($_POST['father_family_name']);
$fields['FormI-192[0].#subform[5].Pt4Line9a_FamilyName[2]']->setValue($_POST['mother_family_name']);
$fields['FormI-192[0].#subform[5].Pt4Line9b_FirstName[0]']->setValue($_POST['father_first_name']);
$fields['FormI-192[0].#subform[5].Pt4Line9b_FirstName[2]']->setValue($_POST['mother_first_name']);
if (isset($_POST['father_dob']) && $_POST['father_dob'] != null) {
    $father_dob = explode('/', $_POST['father_dob']);
    $father_dob_month = $father_dob[0];
    $father_dob_day = $father_dob[1];
    $father_dob_year = $father_dob[2];
    $fields['MotherBirthD']->setValue($father_dob_day);
    $fields['MotherBirthM']->setValue($father_dob_month);
    $fields['MotherBirthY']->setValue($father_dob_year);
}
if (isset($_POST['mother_dob']) && $_POST['mother_dob'] != null) {
    $mother_dob = explode('/', $_POST['mother_dob']);
    $mother_dob_month = $mother_dob[0];
    $mother_dob_day = $mother_dob[1];
    $mother_dob_year = $mother_dob[2];
    $fields['FatherBirthD']->setValue($mother_dob_day);
    $fields['FatherBirthM']->setValue($mother_dob_month);
    $fields['FatherBirthY']->setValue($mother_dob_year);
} 
$fields['FormI-192[0].#subform[5].Pt4Line11_CityOrTownOfBirth[0]']->setValue($_POST['father_birth_city']);
$fields['FormI-192[0].#subform[5].Pt4Line11_CityOrTownOfBirth[1]']->setValue($_POST['mother_birth_city']);
$fields['FormI-192[0].#subform[5].Pt4Line20_CountryOfBirth[0]']->setValue($_POST['father_birth_country']);
$fields['FormI-192[0].#subform[5]._CountryOfBirth[0]']->setValue($_POST['mother_birth_country']);
$fields['FormI-192[0].#subform[5].Pt4Line21_CurrentCityOrTownOfRes[0]']->setValue($_POST['father_residence_city']);
$fields['FormI-192[0].#subform[5]._CityOrTownResidence[0]']->setValue($_POST['mother_residence_city']);
$fields['FormI-192[0].#subform[5].Pt4Line22_CurrrentCountryOfRes[0]']->setValue($_POST['father_residence_country']);
$fields['FormI-192[0].#subform[5]._CountryOfResidence[0]']->setValue($_POST['mother_residence_country']);

$fields['FormI-192[0].#subform[6].Pt4Line9a_FamilyName[5]']->setValue($_POST['cfamily_name']);
$fields['FormI-192[0].#subform[6].Pt4Line9a_FamilyName[4]']->setValue($_POST['ffamily_name']);
$fields['FormI-192[0].#subform[6].Pt4Line9b_FirstName[5]']->setValue($_POST['c_first_name']);
$fields['FormI-192[0].#subform[6].Pt4Line9b_FirstName[4]']->setValue($_POST['f_f_name']);
if (isset($_POST['c_dob']) && $_POST['c_dob'] != null) {
    $c_dob = explode('/', $_POST['c_dob']);
    $c_dob_month = $c_dob[0];
    $c_dob_day = $c_dob[1];
    $c_dob_year = $c_dob[2];
    $fields['CurSpouseBirthD']->setValue($c_dob_day);
    $fields['CurSpouseBirthM']->setValue($c_dob_month);
    $fields['CurSpouseBirthY']->setValue($c_dob_year);
} 
if (isset($_POST['f_dob']) && $_POST['f_dob'] != null) {
    $f_dob = explode('/', $_POST['f_dob']);
    $f_dob_month = $f_dob[0];
    $f_dob_day = $f_dob[1];
    $f_dob_year = $f_dob[2];
    $fields['PriorSpouseBirthD']->setValue($f_dob_day);
    $fields['PriorSpouseBirthM']->setValue($f_dob_month);
    $fields['PriorSpouseBirthY']->setValue($f_dob_year);
} 
$fields['FormI-192[0].#subform[6].Pt4Line29a_CityOrTown[0]']->setValue($_POST['current_spouse_birth_city']);
$fields['Text49']->setValue($_POST['former_spouse_birth_city']);
$fields['FormI-192[0].#subform[6].Pt4Line29c_Country[0]']->setValue($_POST['current_spouse_birth_country']);
$fields['Text50']->setValue($_POST['former_spouse_birth_country']);
$fields['FormI-192[0].#subform[6].Pt4Line30a_CityOrTown[2]']->setValue($_POST['current_spouse_marriage_city']);
$fields['FormI-192[0].#subform[6].Pt4Line30a_CityOrTown[0]']->setValue($_POST['former_spouse_marriage_city']);
$fields['FormI-192[0].#subform[6].Pt4Line30b_StateOrProvince[2]']->setValue($_POST['current_spouse_marriage_state']);
$fields['FormI-192[0].#subform[6].Pt4Line30b_StateOrProvince[0]']->setValue($_POST['former_spouse_marriage_state']);
$fields['FormI-192[0].#subform[6].Pt4Line30c_Country[2]']->setValue($_POST['current_spouse_marriage_country']);
$fields['FormI-192[0].#subform[6].Pt4Line30c_Country[0]']->setValue($_POST['former_spouse_marriage_country']);
if (isset($_POST['c_dom']) && $_POST['c_dom'] != null) {
    $c_dom = explode('/', $_POST['c_dom']);
    $c_dom_month = $c_dom[0];
    $c_dom_day = $c_dom[1];
    $c_dom_year = $c_dom[2];
    $fields['CurMarriageD']->setValue($c_dom_day);
    $fields['CurMarriageM']->setValue($c_dom_month);
    $fields['CurMarriageY']->setValue($c_dom_year);
} 
if (isset($_POST['f_dom']) && $_POST['f_dom'] != null) {
    $f_dom = explode('/', $_POST['f_dom']);
    $f_dom_month = $f_dom[0];
    $f_dom_day = $f_dom[1];
    $f_dom_year = $f_dom[2];
    $fields['PriorMarriageD']->setValue($f_dom_day);
    $fields['PriorMarriageM']->setValue($f_dom_month);
    $fields['PriorMarriageY']->setValue($f_dom_year);
} 
if (isset($_POST['t_m_dob']) && $_POST['t_m_dob'] != null) {
    $t_m_dob = explode('/', $_POST['t_m_dob']);
    $t_m_dob_month = $t_m_dob[0];
    $t_m_dob_day = $t_m_dob[1];
    $t_m_dob_year = $t_m_dob[2];
    $fields['DivorceD']->setValue($t_m_dob_day);
    $fields['DivorceM']->setValue($t_m_dob_month);
    $fields['DivorceY']->setValue($t_m_dob_year);
} 
$fields['FormI-192[0].#subform[6].Pt4Line30a_CityOrTown[1]']->setValue($_POST['terminate_marriage']);

//  PAGE #  06

$fields['Group9']->setValue($_POST['force_member']);
$fields['LevelofService']->setValue($_POST['force']);
$fields['MilitaryStreet']->setValue($_POST['military_address']);
$fields['MilitaryCity']->setValue($_POST['military_city']);
$fields['MilitaryProvince']->setValue($_POST['military_province']);
$fields['MilitaryPostal']->setValue($_POST['military_postal']);
$fields['MilitaryCountry']->setValue($_POST['military_country']);
$fields['MilitaryID']->setValue($_POST['service_num']);
$fields['MilitaryUnit']->setValue($_POST['military_unit']);
if (isset($_POST['military_from']) && $_POST['military_from'] != null) {
    $military_from = explode('/', $_POST['military_from']);
    $military_from_month = $military_from[0];
    $military_from_day = $military_from[1];
    $military_from_year = $military_from[2];
    $fields['MilitaryFD']->setValue($military_from_day);
    $fields['MilitaryFM']->setValue($military_from_month);
    $fields['MilitaryFY']->setValue($military_from_year);
} 
if (isset($_POST['military_to']) && $_POST['military_to'] != null) {
    $military_to = explode('/', $_POST['military_to']);
    $military_to_month = $military_to[0];
    $military_to_day = $military_to[1];
    $military_to_year = $military_to[2];
    $fields['MilitaryTD']->setValue($military_to_day);
    $fields['MilitaryTM']->setValue($military_to_month);
    $fields['MilitaryTY']->setValue($military_to_year);
} 
$fields['arrested']->setValue($_POST['arrested']);
$fields['Arrested']->setValue($_POST['Arrested_textarea']);
$fields['arrestedCA']->setValue($_POST['arrested_outside_canada']);
$fields['ArrestedOutsideCA']->setValue($_POST['ArrestedOutsideCA']);

$fields['CourtHouse.0']->setValue($_POST['convicted_court_house_1']);
$fields['CourtHouseCity.0']->setValue($_POST['court_conviction_city_1']);
$fields['CourtHouseProvince.0']->setValue($_POST['court_conviction_province_1']);
$fields['Police.0']->setValue($_POST['convicted_police_department_1']);
$fields['PoliceCity.0']->setValue($_POST['police_conviction_city_1']);
$fields['PoliceProvince.0']->setValue($_POST['police_conviction_province_1']);
$fields['Charge.0']->setValue($_POST['conviction_charge_1']);
if (isset($_POST['sentenced_date_1']) && $_POST['sentenced_date_1'] != null) {
    $sentenced_date_1 = explode('/', $_POST['sentenced_date_1']);
    $sentenced_date_1_month = $sentenced_date_1[0];
    $sentenced_date_1_day = $sentenced_date_1[1];
    $sentenced_date_1_year = $sentenced_date_1[2];
    $fields['Conviction1D']->setValue($sentenced_date_1_day);
    $fields['Conviction1M']->setValue($sentenced_date_1_month);
    $fields['Conviction1Y']->setValue($sentenced_date_1_year);
} 
$fields['SentenceReceived.0']->setValue($_POST['actual_sentence_1']);
$fields['ConvictionCourts.0']->setValue($_POST['court_after_1992_1']);

$fields['CourtHouse.1']->setValue($_POST['convicted_court_house_2']);
$fields['CourtHouseCity.1']->setValue($_POST['court_conviction_city_2']);
$fields['CourtHouseProvince.1']->setValue($_POST['court_conviction_province_2']);
$fields['Police.1']->setValue($_POST['convicted_police_department_2']);
$fields['PoliceCity.1']->setValue($_POST['police_conviction_city_2']);
$fields['PoliceProvince.1']->setValue($_POST['police_conviction_province_2']);
$fields['Charge.1']->setValue($_POST['conviction_charge_2']);
if (isset($_POST['sentenced_date_2']) && $_POST['sentenced_date_2'] != null) {
    $sentenced_date_2 = explode('/', $_POST['sentenced_date_2']);
    $sentenced_date_2_month = $sentenced_date_2[0];
    $sentenced_date_2_day = $sentenced_date_2[1];
    $sentenced_date_2_year = $sentenced_date_2[2];
    $fields['Conviction2D']->setValue($sentenced_date_2_day);
    $fields['Conviction2M']->setValue($sentenced_date_2_month);
    $fields['Conviction2Y']->setValue($sentenced_date_2_year);
} 
$fields['SentenceReceived.1']->setValue($_POST['actual_sentence_2']);
$fields['ConvictionCourts.1']->setValue($_POST['court_after_1992_2']);

//  PAge # 08

$fields['inadmissible']->setValue($_POST['inadmissible']);
$fields['Text72']->setValue($_POST['immigration_textarea1']);
$fields['Text73']->setValue($_POST['immigration_textarea2']);
$fields['RefusedEntryUS']->setValue($_POST['refused']);
$fields['Text74']->setValue($_POST['immigration_textarea3']);

//   Page # 09
$fields['DeportedUS']->setValue($_POST['deported']);
$fields['Text75']->setValue($_POST['immigration_textarea4']);
$fields['permission']->setValue($_POST['filled_application_before']);
$fields['FormI-192[0].#subform[3].Pt9Line3_DateFrom[0]']->setValue($_POST['filled_application_date']);
$fields['FormI-192[0].#subform[3].Pt4Line15_CityOrTown[0]']->setValue($_POST['filed_application_city']);
$fields['FormI-192[0].#subform[3].Part4Line15_StateorProvince[0]']->setValue($_POST['filed_application_province']);
$fields['FormI-192[0].#subform[3].Part4Line15_Country[0]']->setValue($_POST['filed_application_country']);
$fields['FormI-192[0].#subform[3].#area[0].Pt3Line1_ReceiptNumber[0]']->setValue($_POST['filed_application_receipt_no']);

$fields['6mos']->setValue($_POST['sixmos']);
if (isset($_POST['entered_date']) && $_POST['entered_date'] != null) {
    $entered_date = explode('/', $_POST['entered_date']);
    $entered_date_month = $entered_date[0];
    $entered_date_day = $entered_date[1];
    $entered_date_year = $entered_date[2];
    $fields['EnteredUSAFM']->setValue($entered_date_day);
    $fields['EnteredUSAFM']->setValue($entered_date_month);
    $fields['EnteredUSAFY']->setValue($entered_date_year);
}
if (isset($_POST['entered_date_from']) && $_POST['entered_date_from'] != null) {
    $entered_date_from = explode('/', $_POST['entered_date_from']);
    $entered_date_from_month = $entered_date_from[0];
    $entered_date_from_day = $entered_date_from[1];
    $entered_date_from_year = $entered_date_from[2];
    $fields['EnteredUSAFD']->setValue($entered_date_from_day);
    $fields['EnteredUSAFM']->setValue($entered_date_from_month);
    $fields['EnteredUSAFY']->setValue($entered_date_from_year);
}
if (isset($_POST['exit_date_to']) && $_POST['exit_date_to'] != null) {
    $exit_date_to = explode('/', $_POST['exit_date_to']);
    $exit_date_to_month = $exit_date_to[0];
    $exit_date_to_day = $exit_date_to[1];
    $exit_date_to_year = $exit_date_to[2];
    $fields['LeftUSATD']->setValue($exit_date_to_day);
    $fields['LeftUSATM']->setValue($exit_date_to_month);
    $fields['LeftUSATY']->setValue($exit_date_to_year);
}
$fields['ImmigrationStatus']->setValue($_POST['immigration_status']);

//  Page # 10

$fields['benefits']->setValue($_POST['filed_application_for_immigration_benifit']);
$fields['ApplicationFiled.0']->setValue($_POST['application_type_filed_1']);
$fields['LocationFiled.0']->setValue($_POST['filed_application_location_1']);
$fields['Outcome.0']->setValue($_POST['filed_application_outcome_1']);

$fields['ApplicationFiled.1']->setValue($_POST['application_type_filed_2']);
$fields['LocationFiled.1']->setValue($_POST['filed_application_location_2']);
$fields['Outcome.1']->setValue($_POST['filed_application_outcome_2']);

$fields['ApplicationFiled.2']->setValue($_POST['application_type_filed_3']);
$fields['LocationFiled.2']->setValue($_POST['filed_application_location_3']);
$fields['Outcome.2']->setValue($_POST['filed_application_outcome_3']);

$fields['ApplicationFiled.3']->setValue($_POST['application_type_filed_4']);
$fields['LocationFiled.3']->setValue($_POST['filed_application_location_4']);
$fields['Outcome.3']->setValue($_POST['filed_application_outcome_4']);

$fields['ApplicationFiled.4']->setValue($_POST['application_type_filed_5']);
$fields['LocationFiled.4']->setValue($_POST['filed_application_location_5']);
$fields['Outcome.4']->setValue($_POST['filed_application_outcome_5']);
$fields['deniedbenefits']->setValue($_POST['immigration_refused']);
$fields['Text82']->setValue($_POST['immigration_textarea8']);

//  Page # 11
$fields['Jarvis']->setValue($_POST['jarvis_st_court']);
$fields['UniversityAve']->setValue($_POST['university_avenue_court']);
$fields['Eglington']->setValue($_POST['aglinton_avenue_court']);
$fields['Yonge']->setValue($_POST['yonge_st_court']);
$fields['1000Finch']->setValue($_POST['1000_finch_avenue_court']);
$fields['2201Finch']->setValue($_POST['2201_finch_avenue_court']);
$fields['Queen']->setValue($_POST['queen_st_west_court']);

//$fields['FormI-192[0].#subform[4].Pt3Line1_Ethnicity[1]']->setValue($_POST['hispanic_latino']);
if (isset($_POST['hispanic_latino']) && $_POST['hispanic_latino'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line1_Ethnicity[1]']->setValue(true);
}
if (isset($_POST['not_hispanic_latino']) && $_POST['not_hispanic_latino'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line1_Ethnicity[0]']->setValue(true);
}

if (isset($_POST['white']) && $_POST['white'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line2_Race[4]']->setValue(true);
}
if (isset($_POST['asian']) && $_POST['asian'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line2_Race[1]']->setValue(true);
}
if (isset($_POST['black']) && $_POST['black'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line2_Race[0]']->setValue(true);
}
if (isset($_POST['american_indian']) && $_POST['american_indian'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line2_Race[3]']->setValue(true);
}
if (isset($_POST['native_hawaiian']) && $_POST['native_hawaiian'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line2_Race[2]']->setValue(true);
}

$fields['FormI-192[0].#subform[4].Pt3Line3_HeightFeet[0]']->setValue($_POST['feet']);
$fields['FormI-192[0].#subform[4].Pt3Line3_HeightInches[0]']->setValue($_POST['inches']);
if (isset($_POST['pound']) && $_POST['pound'] != "") {
    $pounds = $_POST['pound'];
    $pound1 = $pounds[0];
    $pound2 = $pounds[1];
    $pound3 = $pounds[2];
    $fields['FormI-192[0].#subform[4].Pt3Line4_Pound1[0]']->setValue($pound1);
    $fields['FormI-192[0].#subform[4].Pt3Line4_Pound2[0]']->setValue($pound2);
    $fields['FormI-192[0].#subform[4].Pt3Line4_Pound3[0]']->setValue($pound3);
}
//$fields['FormI-192[0].#subform[4].Pt3Line5_EyeColor[7]']->setValue($_POST['eye_colour']);

if (isset($_POST['black_eye_color']) && $_POST['black_eye_color'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line5_EyeColor[7]']->setValue(true);
}
if (isset($_POST['blue_eye_color']) && $_POST['blue_eye_color'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line5_EyeColor[0]']->setValue(true);
}
if (isset($_POST['brown_eye_color']) && $_POST['brown_eye_color'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line5_EyeColor[1]']->setValue(true);
}
if (isset($_POST['gray_eye_color']) && $_POST['gray_eye_color'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line5_EyeColor[6]']->setValue(true);
}
if (isset($_POST['green_eye_color']) && $_POST['green_eye_color'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line5_EyeColor[2]']->setValue(true);
}
if (isset($_POST['hazel_eye_color']) && $_POST['hazel_eye_color'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line5_EyeColor[2]']->setValue(true);
}
if (isset($_POST['maroon_eye_color']) && $_POST['maroon_eye_color'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line5_EyeColor[4]']->setValue(true);
}
if (isset($_POST['pink_eye_color']) && $_POST['pink_eye_color'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line5_EyeColor[3]']->setValue(true);
}
if (isset($_POST['unknown_eye_color']) && $_POST['unknown_eye_color'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line5_EyeColor[8]']->setValue(true);
}

if (isset($_POST['bald']) && $_POST['bald'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line6_HairColor[0]']->setValue(true);
}if (isset($_POST['black_hair_colour']) && $_POST['black_hair_colour'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line6_HairColor[1]']->setValue(true);
}if (isset($_POST['blonde_hair_color']) && $_POST['blonde_hair_color'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line6_HairColor[2]']->setValue(true);
}if (isset($_POST['brown_hair_colour']) && $_POST['brown_hair_colour'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line6_HairColor[3]']->setValue(true);
}if (isset($_POST['gray_hair_colour']) && $_POST['gray_hair_colour'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line6_HairColor[4]']->setValue(true);
}if (isset($_POST['red_hair_color']) && $_POST['red_hair_color'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line6_HairColor[5]']->setValue(true);
}if (isset($_POST['sandy_hair_color']) && $_POST['sandy_hair_color'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line6_HairColor[6]']->setValue(true);
}if (isset($_POST['white_hair_colour']) && $_POST['white_hair_colour'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line6_HairColor[7]']->setValue(true);
}if (isset($_POST['unknown_hair_colour']) && $_POST['unknown_hair_colour'] == 'on') {
    $fields['FormI-192[0].#subform[4].Pt3Line6_HairColor[8]']->setValue(true);
}


//$fields['arrested']->setValue($_POST['hair_colour']);

// save it
$document->save()->finish();
// copy it over
copy($tempWriter->getPath(), $_POST['fname'].".pdf");
// $to = '.base_email.'

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