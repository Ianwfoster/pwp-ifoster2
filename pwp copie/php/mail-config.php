

<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param string $mailgunDomain your mailgun private api key.
 * @param string $mailgunApiKey your mailgun domain relay.
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

//mailgun API Key authorization

$mailgunApiKey = "743a1d72a8d8f06d02e281d3708c5a54";
$mailgunDomain = "sandbox5328146bfa6144ca88fa3ce08ee092dd.mailgun.org";


// your Google reCAPTCHA keys here
// your Google reCAPTCHA keys here
$siteKey = '6LdrK8QUAAAAAJii9lRPMOQU2x5lH8-tUl9PnTDp';
$secret = '6LdrK8QUAAAAAIW7jELCojGJfyxFC-GI9f4l1NSh';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = [ "ian.foster95@gmail.com" => "Ian Foster"];
$MAIL_RECIPIENT = ["ian.foster95@gmail.com"];