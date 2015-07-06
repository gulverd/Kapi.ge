<?php get_header();?>
<div class="row" id="middle_header">
    <h2>კონტაქტი</h2>
  </div>
  
  <hr>
    <div class="row" id="middle">
		<div class="span4">   		
         <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1488.8766941554527!2d44.7489211!3d41.725840099999935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4044730e41dc916b%3A0x37058d82c2be3cab!2z4YOV4YOQ4YOf4YOQLeGDpOGDqOGDkOGDleGDlOGDmuGDkOGDoSDhg5Lhg5Dhg5vhg5bhg5jhg6Dhg5g!5e0!3m2!1ska!2sge!4v1403850453065"
         height="350" frameborder="0" style="border:0"></iframe>
    	</div>
        <div class="span4">
              <form name="form1" id="form1" action="" method="post">
            <div class="contact_div">
                <label id="lab">სახელი</label>
                <input type="text" name="fname" placeholder="მაგ: გიორგი გიორგობიანი" id="contact_input">
            </div>
            <div class="contact_div">
                <label id="lab">ელ - ფოსტა</label>
                <input type="text" name="email" placeholder="მაგ: giorgi.giorgobiani@examle.com" id="contact_input">
              </div>
              <div class="contact_div">
                <label id="lab">სათაური</label>    
                <input type="text" name="subject" placeholder="მაგ: შეკითხვა ავტო სესხზე" id="contact_input">
            </div>
            <div class="contact_div">
                <label id="lab">შეტყობინება</label>
                <textarea name="text" id="contact_input_text"></textarea>
            </div>
            <div class="contact_div">
              <td><input type="submit" name="submit" value="გაგზავნა" id="input_submit"></td>
            </div>
   </form>
<?php
if(isset($_POST['submit'])) 
{

$message=
'სრული სახელი:  '.$_POST['fname'].'<br />
სათაური:  '.$_POST['subject'].'<br />
Email:  '.$_POST['email'].'<br />
შეტყონინება:  '.$_POST['text'].'
';
    require "phpmailer/class.phpmailer.php"; //include phpmailer class
      
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "kapicontactform@gmail.com"; // Your full Gmail address
    $mail->Password   = "kapi142536"; // Your Gmail password
      
    // Compose
    $mail->SetFrom($_POST['email'], $_POST['fname']);
    $mail->AddReplyTo($_POST['email'], $_POST['fname']);
    $mail->Subject = "Kapi.ge contact form";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress("info@kapi.ge", "Recipient Name"); // Where to send it - Recipient
    $result = $mail->Send();    // Send!  
  $message = $result ? 'წარმატებით გაიგზავნა!' : 'გაგზავნა ვერ მოხერხდა!';      
  unset($mail);

}
?>
        </div>


 <?php
    $args = array (
     'cat' => '39',
     'showposts' => '1'
    );
?>


        <div class="span4">   
           <?php 
           $query = new WP_Query($args);

          if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>

          <p id="contact_qr">
            <?php the_content();?>
          </p>
        <?php endwhile; else: ?>
             <p>Sorry, no posts matched your criteria.</p>
         <?php endif; ?>
        </div>
</div>

<?php get_footer();?>