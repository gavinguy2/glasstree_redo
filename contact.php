<?php
    include("header.php")
?>
        
            <div id="contact_area">
            <div id="top_contact">
                <div id="contact_left">
                <h1 id="h1_1">Contact</h1>
                <p>We want to help you grow your business. Reach out to see how we can help you generate a positive ROI, increase visibility, and find new customers.</p>
                    </div>
                <div id="contact_right">
                <h2>Get In Touch</h2>
                <form action="contact.php" method="post">
                    <fieldset>

                        <label for="name">Name</label>
                        <input type="text" id="name_id" name="name" required>

                        <label for="email">Email</label>
                        <input type="text" id="email_id" name="email" required>
                        
                        <label for="phone">Phone</label>
                        <input type="text" id="phone_id" name="phone" required>
                        
                        <label for="message">Message</label>
                        
                        <input type="text" id="message_id" name="message" required>
                        <div id="submit_padding"></div>

                        <input type="submit" name="submit" id="submit_id">


                        <?php
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $phone = $_POST['phone'];
                            $message = $_POST['message'];

                            $to = 'gavinstringham2@gmail.com';
                            $subject = 'Glasstree email';

                            $body = "From: $name\n Email: $email\n Phone: $phone\n Message: $message";

                            if ('POST' === $_SERVER['REQUEST_METHOD']){
                                if(mail($to, $subject, $body)){
                                    echo "<p>message sent.</p>";
                                }else{
                                    echo "<p>message not sent.</p>";
                                }
                            }
                        ?>
                       
                    </fieldset>
            </form>
             </div>
            </div>
            </div>
            
          
            
            
            <?php
             include("footer2.php")
            ?>



            
        
        
        </div>
    
    
    
    </body>
    
</html>