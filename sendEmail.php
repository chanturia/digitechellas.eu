<?php
/**
 Programmer: George chanturia
 */



if(isset($_POST['submit'])){
    $to = "info@digitechellas.eu"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
/*    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";*/
    // You can also use header('Location: thank_you.php'); to redirect to another page.



?>
    <div style="
    position: absolute;
    left: 0;
    right: 0;
    margin: 0 auto;
    top: 50%;
    transform: translateY(-50%);
    width: 50%;
    text-align: center;
    background: linear-gradient(to right, #000000 0%,#3f3f3f 36%,#3f3f3f 51%,#3f3f3f 64%,#131313 100%);
    border: 3px solid #FECA00;

">
        <h1 style="
    font-size: 3em;
    color: #FECA00;
">Mail Sent. Thank you <?php echo $first_name; ?> we will contact you as soon as we can</h1>
        <div style="
    color: #ff7c7c;
    font-size: 2em;
">Please check also your spam directory, since the Mail can be throne there</div>
    </div>


<?php
    header( "refresh:5;url=Contact.html" );

}
?>
