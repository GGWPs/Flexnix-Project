<?php

include '../php/databaseconnection.php';


$abonnement = $_POST["abonnement"];
$email = $_POST["email"];
$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];
$land = $_POST["land"];
$geboortejaar = date("Y-m-d");
$betaalMethode = $_POST["betaalMethode"];
$rekeningnummer = $_POST["rekeningnummer"];
$gebruikersnaam = $_POST["gebruikersnaam"];
$wachtwoord = $_POST["wachtwoord"];
$wachtwoord2 = $_POST["wachtwoord2"];
$subscription_start = date("Y-m-d") ;
$land = "Netherlands";

//date("Y-m-d") ;
//new DateTime($_POST["geboortejaar"]);

//$sql = "insert into Customer (customer_mail_address,firstname,lastname,payment_method,payment_card_number,contract_type,subscription_start,subscription_end,user_name,password, country_name, gender)
//         values (:email,:voornaam,:achternaam,:betaalmethode,:rekeningnummer,:abonnement,:datumregistratie,null,:gebruikersnaam,:wachtwoord, :land, null)";
$sql = $dbh ->query ("insert into Customer (customer_mail_address,firstname,lastname,payment_method,payment_card_number,contract_type,subscription_start,subscription_end,user_name,password, country_name, gender)
         values ('$email','$voornaam','$achternaam','$betaalMethode','$rekeningnummer','$abonnement','$subscription_start',null,'$gebruikersnaam','$wachtwoord', '$land', null)");

echo 'Uw registratie is gelukt! Klik <a href="../php/index.php">hier</a>  om terug te gaan'
//$result = $dbh->insertQuery($sql);
//if(!empty($result)) {
//    $error_message = "";
//    $success_message = "You have registered successfully!";
//    unset($_POST);
//} else {
//    $error_message = "Problem in registration. Try Again!";
//}
//print_r($sql);
//$query->execute(
//    array( ':email' => $email, 	':voornaam' => $voornaam, ':achternaam' => $achternaam, ':betaalmethode' => $betaalMethode, ':rekeningnummer' => $rekeningnummer, ':abonnement' => $abonnement, ':datumregistratie' => $subscription_start, ':gebruikersnaam' => $gebruikersnaam, ':wachtwoord' => $wachtwoord, ':land' => $land));
//



//$zetnieuwaccountindb = "insert into Customer (customer_mail_address,firstname,lastname,payment_method,payment_card_number,contract_type,subscription_start,subscription_end,user_name,password,country_name)
//                        values ('a@b.nl','asdf','fdasfa','Mastercard',12312312412312,'basic',getdate(),null,'johnanana123','Pass123','Netherlands')";
?>