<?php
class Mail
{
  function send($to="",$subject="",$message="",$attach="",$errors="")
  { 
    $ci =& get_instance();

    $config = array(
      'protocol'     => 'smtp',
      'smtp_host'    => 'mail.digital-nusantara.com',
      'smtp_port'    => '25',
      'smtp_user'    => 'noreply@digital-nusantara.com',
      'smtp_pass'    => 'n0r3ply',
      'mailtype'     => 'html', 
      'charset'      => 'UTF-8',
      'smtp_timeout' => '5'
      );

    $ci->load->library('email', $config);
    $ci->email->set_newline("\r\n");
    $ci->email->from("noreply@digital-nusantara.com", "Korps Brimob Polri");
    $ci->email->to($to);
    $ci->email->subject($subject);
    $ci->email->message($message);

    if ($attach) {
      $ci->email->attach($attach);
    }

        // $ci->email->send();
    if (!$ci->email->send()) {
     return "FAILED";
            //return "attach : ,$errors=""".$ci->email->print_debugger();           
   } else {
     return "SUCCESS";
   }

 }
}