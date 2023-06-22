<?php
              
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $organization = $_POST['organization'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $query = $_POST['query'];
    
        
       
        $emailID = "info@superceuticals.in";
        $subject = "Contact request from $name";
$body = <<<EOD
       
        <table cellspacing="0" cellpadding="1" border="1">
            <tbody>
                <tr>
                    <td style="padding: 5px 10px;" width="150">Name: </td>
                    <td style="padding: 5px 10px;">$name</td>
                </tr>
                <tr>
                    <td style="padding: 5px 10px;" width="150">Organization: </td>
                    <td style="padding: 5px 10px;">$organization</td>
                </tr>
                <tr>
                    <td style="padding: 5px 10px;" width="150">Contact: </td>
                    <td style="padding: 5px 10px;">$contact</td>
                </tr>
                <tr>
                    <td style="padding: 5px 10px;" width="150">Email: </td>
                    <td style="padding: 5px 10px;">$email</td>
                </tr>                               
                <tr>
                    <td style="padding: 5px 10px;" width="150">Query: </td>
                    <td style="padding: 5px 10px;">$query</td>
                </tr>
                
            </tbody>
        </table>
       
EOD;
   
        $headers = "From: info@superceuticals.in\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\n";
        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";

       
        mail($emailID, $subject, $body, $headers );
        
	      echo '<script language="javascript">';
              echo 'alert("Message sent successfully!");';
              echo 'window.location.href="https://superceuticals.in/contact.php";';
              echo '</script>';
    } else {
              echo '<script language="javascript">';
              echo 'alert("Something wrong!");';
              echo 'window.location.href="https://superceuticals.in/contact.php";';
              echo '</script>';
    };
?>