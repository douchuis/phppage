<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require '../lib/PHPMailer/Exception.php';
require '../lib/PHPMailer/PHPMailer.php';
require '../lib/PHPMailer/SMTP.php';
require 'Database.php';

// TODO$
// config.ini
$config = parse_ini_file('../../conf/config.ini', true);
//    var_dump($config['Mailer']['mail_lastName']);
/**
 * Retrieve the data from $_POST and store them in an array ($registration_form[])
 * Use the isset() function to check if the array key exists in $_POST['XXX']
 *  - If yes, get the value for the key
 *  - Otherwise, store an empty string, null or false (choose what is best for you)
 */
// isset() returns false or true
if(isset($_POST['registration-form']['last-name'])){
    $lastname = $_POST['registration-form']['last-name'];
}else {
    $lastname ='';
}

if(isset($_POST['registration-form']['first-name'])) {
    $firstname = $_POST['registration-form']['first-name'];
}else {
    $firstname ='';
}

if(isset($_POST['registration-form']['email'])) {
    $email = $_POST['registration-form']['email'];
}else {
    $email ='';
}

if(isset($_POST['registration-form']['birth-date'])) {
    $birthday = $_POST['registration-form']['birth-date'];
}else {
    $birthday ='';
}

if(isset($_POST['registration-form']['sex'])) {
    $gender= $_POST['registration-form']['sex'];
}else {
    $gender ='';
}

if(isset($_POST['registration-form']['civil-status'])) {
    $civilstatus = $_POST['registration-form']['civil-status'];
}else {
    $civilstatus ='';
}

// address

if(isset($_POST['registration-form']['address']['street-address'])) {
    $streetaddress = $_POST['registration-form']['address']['street-address'];
}else {
    $streetaddress ='';
}

if(isset($_POST['registration-form']['address']['postal-code'])) {
    $postalcode = $_POST['registration-form']['address']['postal-code'];
}else {
    $postalcode ='';
}

if(isset($_POST['registration-form']['address']['locality'])) {
    $locality = $_POST['registration-form']['address']['locality'];
}else {
    $locality ='';
}

// avs number

if(isset($_POST['registration-form']['avs-number'])) {
    $avsnumber= $_POST['registration-form']['avs-number'];
}else {
    $avsnumber='';
}

// it-knowledge

if(isset($_POST['registration-form']['it-knowledge']['0'])) {
    $knowledge0 = $_POST['registration-form']['it-knowledge']['0'];
}else {
    $knowledge0 ='';
}

if(isset($_POST['registration-form']['it-knowledge']['1'])) {
    $knowledge1 = $_POST['registration-form']['it-knowledge']['1'];
}else {
    $knowledge1 ='';
}

if(isset($_POST['registration-form']['it-knowledge']['2'])) {
    $knowledge2 = $_POST['registration-form']['it-knowledge']['2'];
}else {
    $knowledge2 ='';
}

if(isset($_POST['registration-form']['it-knowledge']['3'])) {
    $knowledge3 = $_POST['registration-form']['it-knowledge']['3'];
}else {
    $knowledge3 ='';
}

// study

if(isset($_POST['registration-form']['study'])) {
    $study= $_POST['registration-form']['study'];
}else {
    $study='';
}

// comment

if(isset($_POST['registration-form']['comment'])) {
    $comment = $_POST['registration-form']['comment'];
}else {
    $comment='';
}

/**
 * Validate the data in $registration_form[] with the same constraints as for the web form
 *  - The following functions will help you: empty(), filter_var(), DateTime::createFromFormat() and preg_match()
 */

$is_error = false;
// Validate last name
// TODO
if(empty($lastname)==true){
    $is_error = true;
}
//var_dump($is_error);
// Validate first name
// TODO
if(empty($firstname)==true){
    $is_error =true;
}
//var_dump($is_error);
// Validate email
// TODO
if(empty($email)){
    $is_error=true;
}
elseif(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
    $is_error =true;
}
//var_dump($is_error);

// Validate birth date
// TODO
$format ='y-m-d';

if(empty($birthday)){
    $is_error =true;
}
elseif(preg_match('/^(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))$/',$birthday)==false){
    $is_error=true;
}

// Validate sex
//var_dump($is_error);
// TODO
if(empty($gender)){
    $is_error =true;
}
elseif((preg_match('/^([wm])$/',$gender))==false){
    $is_error = true;
}

// Validate civil status
//var_dump($is_error);
// TODO
if(empty($civilstatus)){
    $is_error =true;
}
elseif(preg_match('/^(single|maried|divorced|separated|widowed)$/',$civilstatus)==false) {
    $is_error = true;
}
// Validate street address
//var_dump($is_error);
// TODO
if(empty($streetaddress) ==true){
    $is_error =true;
}
//var_dump($is_error);
// Validate postal code
// TODO
if(empty($postalcode)){
    $is_error =true;
}elseif (filter_var($postalcode,FILTER_VALIDATE_INT, array("option" => array("min"=>1000, "max"=>9999)))==false){
    $is_error =true;
}
//var_dump($is_error);
// Validate locality
// TODO
if(empty($locality)==true){
    $is_error =true;
}
//var_dump($is_error);
// Validate avs number
// TODO
$pattern='/^(756\.[0-9][0-9][0-9][0-9]\.[0-9][0-9][0-9][0-9]\.[0-9][0-9])$/';
if(empty($avsnumber)){
    $is_error = true;
}
elseif(preg_match('/^(756.[0-9]{4}.[0-9]{4}.[0-9]{2})$/', $avsnumber)==false){
    $is_error =true;
}
//var_dump($is_error);
// Validate IT knowledge
// TODO
if(empty($knowledge0)){
}else{
    if (preg_match('/^(programming|network|system|support)$/', $knowledge0)==false) {
        $is_error = true;
    }
}

if(empty($knowledge1)){
}else{
    if (preg_match('/^(programming|network|system|support)$/', $knowledge1)==false) {
        $is_error = true;
    }
}

if(empty($knowledge2)){
}else{
    if (preg_match('/^(programming|network|system|support)$/', $knowledge2)==false) {
        $is_error = true;
    }
}

if(empty($knowledge3)){
}else{
    if (preg_match('/^(programming|network|system|support)$/', $knowledge3)==false) {
        $is_error = true;
    }
}

// the knowledges should be not emtpy, because the function array_unique will delete, if for exemple there are two emtpy variables
if (!empty($knowledge0) && !empty($knowledge1) && !empty($knowledge2) && !empty($knowledge3)) {
//check if there are the same choices
    $tabitknowledge = [
        $knowledge0,
        $knowledge1,
        $knowledge2,
        $knowledge3,
    ];
    $tabittocompare = array_unique($tabitknowledge);
    if (count($tabitknowledge) != count($tabittocompare)) {
        $is_error = true;
    }
}


//var_dump($is_error);
// Validate study
// TODO
$studytest=(empty($study));
if($studytest){
    $is_error=true;
}else{
    $pattern='/^(chemistry|electrical-engineering|computer-science|telecommunications)$/';
    $studying = (preg_match('/^(chemistry|electrical-engineering|computer-science|telecommunications)$/',$study)==false);
    if(preg_match('/^(chemistry|electrical-engineering|computer-science|telecommunications)$/',$study)==false) {
        $is_error = true;
    }
}
var_dump($is_error);


if (!$is_error) {
    /**
     * Generate the unique ID and the date of registration
     *  - The date format must be as follows: 2019-12-24 23:59:59
     */
    // TODO
    $id = uniqid();
    $format = 'Y-m-d H:i:s';
    $date = DateTime::createFromFormat($format,date($format));
    $date->setTimezone(new DateTimeZone('Europe/zurich'));
    $date = $date->format('Y-m-d H:i:s');

    // add one week
    setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
    $dateweek = strftime('%A %#d %B %Y', strtotime("+1 week"));

    /**
     * Store data in the CSV file
     */
    // TODO
    // create a new table
    $registrationform = [
        1 => $id,
        2 => $date,
        3 => $lastname,
        4 => $firstname,
        5 => $email,
        6 => $birthday,
        7 => $gender,
        8 => $civilstatus,
        9 => $streetaddress,
        10 => $postalcode,
        11 => $locality,
        12 => $avsnumber,
        13 => $knowledge0,
        14 => $knowledge1,
        15 => $knowledge2,
        16 => $knowledge3,
        17 => $study,
        18 => $comment,
    ];
    // il faut donner accès au serveur aussi dans vps pourqu'il puisse ajouter les données dans le fichier
    // sudo chmod 646 form-data.csv
//    $fichier = fopen('../form-data.csv', 'a');
//    if($fichier!=null){
//        fputcsv($fichier,$registrationform,';');
//        fclose($fichier);
//    }else{
//        echo "Error ! Not found server!";
//    }
    $testdatadase = new DataForm();
    $testdatadase->addDataIntoDB($id, $date, $lastname,
        $firstname, $email, $birthday,
        $gender, $civilstatus, $streetaddress,
        $postalcode, $locality, $avsnumber,
        $knowledge0, $knowledge1, $knowledge2,
        $knowledge3, $study,$comment);


    /***
     Send registration confirmation email
     ***/

    $mail = new PHPMailer(TRUE);
    try {
        $mail->CharSet='utf-8';
        $mail->setFrom( "{$config['Mailer']['address']}","{$config['Mailer']['name']}");
        $mail->addAddress($email, $lastname);


        /* Set the subject. */
        $mail->Subject = 'HEIA-FR Année passerelle ingénierie - Inscription';

        /* Set the mail message body. */
        if ($gender == 'm') {
            $gender = 'Monsieur';
        } elseif ($gender == 'w') {
            $gender = 'Madame';
        }
        $name = strtoupper($lastname);

        $mail->Body = "Bonjour " . $gender ." ". $name .",\n\n".
            "Nous vous confirmons la bonne réception de votre formulaire d'inscription.\n".
            "Votre candidature sera traitée dans les 7 prochains jours.\n".
            "Vous recevrez donc une décision définitive le ".$dateweek." au plus tard.\n\n".
            "Avec nos meilleures salutations,\n".
            "Le service académique";

        /* SMTP parameters. */

        /* Tells PHPMailer to use SMTP. */
        $mail->isSMTP();

        /* SMTP server address. */
        $mail->Host = $config['Mailer']['mail_host'];

        /* Use SMTP authentication. */
        $mail->SMTPAuth = $config['Mailer']['SMTPAuth'];

        /* Set the encryption system. */
        $mail->SMTPSecure = $config['Mailer']['SMTPSecure'];

        /* SMTP authentication username. */
        $mail->Username = $config['Mailer']['username'];

        /* SMTP authentication password. */
        $mail->Password = $config['Mailer']['password'];

        /* Set the SMTP port. */
        $mail->Port = $config['Mailer']['mail_port'];

        /* Finally send the mail. */
        $mail->send();
    }
    catch (Exception $e) {
        echo $e->errorMessage();
    }
    catch (\Exception $e){
       echo $e->getMessage();
    }

    //valid.html
    header('Location: ../../form-valid.html');
}
else{
    header('Location: ../../form-error.html');
}

/**
 * Redirect to error or confirmation page
 *  - Error page: form-error.html
 *  - Confirmation page: form-valid.html
 */
// TODO

//if($is_error==false){
//    header('Location: ../../form-error.html');
//}else{
//    header('Location: ../../form-valid.html');
//}


