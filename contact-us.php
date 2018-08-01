<title></title>

<?php
    include 'includes/header.php';
?>

<body>

<div id="contact-us-title-img">

    <h1>CONTACT US</h1>

</div>  
    
<div class="secondary-content">
    
    <div class="space"></div>
    
    <div class="row">
        
        <div class="col-lg-6 col-md-6 col-sm-12">
    
            <h2>Contact Information</h2>

            <p>N86 W18330 Main Street Menomonee Falls, WI 53051</p>

            <p><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:262-255-1580" class="phone-number">262-255-1580</a><br>
            <i class="fa fa-envelope" aria-hidden="true"></i><a href="pete@villagebowl.com" class="phone-number">pete@villagebowl.com</a><br>
            Fax: 262-255-4428</p>
            
        </div>
        
        <div class="col-lg-6 col-md-6 col-sm-12">
            
        <h2>Hours</h2>
            
            <p>Sunday - Thursday: 11am - 10pm</p>
            
            <p>Friday &amp; Saturday: 11am - Midnight</p>
            
            <p>Sunday: Closed starting May12th</p>
            
        </div>
        
    </div>
    
</div>
    
    <form id="myForm" method="post" action="contact-us.php">
        
        <div class="row contact">
        
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                <label for="fname">Name *</label><br>
                <input type="text" onfocus = "colorChange(this)" onfocusout = "focusOut(this)" name="fullname" size="14" placeholder="Full Name" value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname'];?>">
                <p class="error"><?php if(isset($errors['fullname'])) echo $errors['fullname']; ?></p>
                <p class="error"><?php if(isset($errors['valid_fullname'])) echo $errors['valid_fullname']; ?></p>
                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                
                <label for="email">Email *</label><br>
                <input type="email" name="email" onfocus = "colorChange(this)" onfocusout = "focusOut(this)" placeholder="Email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
                <p class="error"><?php if(isset($errors['email'])) echo $errors['email']; ?></p>
                
            </div>
            
        </div>
        
        <div class="row contact">
        
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                     
                <label for="phone">Phone</label><br>
                <input type="text" name="phone" onfocus = "colorChange(this)" onfocusout = "focusOut(this)" placeholder="Phone" value="<?php if(isset($_POST['phone'])) echo $_POST['phone'];?>">
                <p class="error"><?php if(isset($errors['phone'])) echo $errors['phone']; ?></p>

            </div>
            
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 
                <label for="eventType">Event * &nbsp;</label><br>
                    <select name="eventType">
                        <option selected disabled hidden style='display: none' value=""></option> 
                        <option value="Banquet Hall Reservation" <?php if ($_POST['eventType'] == 'Banquet Hall Reservation') echo 'selected="selected"';?>>Banquet Hall Reservation</option>
                        <option value="Birthday Party" <?php if ($_POST['eventType'] == 'Birthday Party') echo 'selected="selected"';?>>Birthday Party</option>
                        <option value="Company Outing" <?php if ($_POST['eventType'] == 'Company Outing') echo 'selected="selected"';?>>Company Outing</option>
                        <option value="Other" <?php if ($_POST['eventType'] == 'Other') echo 'selected="selected"';?>>Other</option>
                    </select>
                 
                 
                 
            </div>
            
        </div>

        <label for="message">Message *</label>
        <textarea rows="5" style="width:100%" name="message" onfocus = "colorChange(this)" onfocusout = "focusOut(this)" placeholder="Message" value="<?php if(isset($_POST['message'])) echo $_POST['message'];?>"></textarea>
        <p class="error"><?php if(isset($errors['message'])) echo $errors['message']; ?></p>
        <br />
                     
        <input type="submit" value="Submit" name="Submit" id="submit">
        <input type="hidden" name="submitted" value="TRUE" />
        
    </form>
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11638.545956296844!2d-88.138021!3d43.175154!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5da6dbf03bc87132!2sVillage+Bowl!5e0!3m2!1sen!2sus!4v1532368528716" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    
</body>

<?php

    include 'includes/footer.php';

?>
    
