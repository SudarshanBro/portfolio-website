<?php
  
  $receiving_email_address = 'avilashisudarshan@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_GET['name'];
  $contact->from_email = $_GET['email'];
  $contact->subject = $_GET['subject'];

  
  $contact->add_message( $_GET['name'], 'From');
  $contact->add_message( $_GET['email'], 'Email');
  $contact->add_message( $_GET['message'], 'Message', 10);

  echo $contact->send();
?>
