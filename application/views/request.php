<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>CSS/style-v1.5.css" />
<title>Untitled Document</title>
</head>

<body>
<div class="request">
	<form action="" method="post" id="myForm">
         <!--form fields here-->
        <button onclick="closeME();">
        <span>Close</span>
        </button>
    </form>
    <h1>SEND REQUEST</h1>
    <p>Please fill-up form for request..</p>
    

    <script type="text/javascript">
        function closeME() {
            event.preventDefault();
            parent.$.fancybox.close();
            $('#myForm').submit();
        }
    </script>
    <form action="<?php echo base_url().'main/send1'; ?>" method="post">
        <p>Name : <input placeholder="Fullname" required="required" name="name" type="text" /></p>
        <p>Contact Info. : <input placeholder="Contact Info." required="required" name="contact" type="text" /></p>
        <p>Company Name : <input placeholder="Company Name" required="required" name="company" type="text" /></p>
        <p>Company Address : <input placeholder="Company Address" required="required" name="address" type="text" /></p>
        <p>Email Address : <input placeholder="Company Address" required="required" name="email" type="email" /></p>
        <p>Request for : 
        <select name="request">
            <option <?php if($this->uri->segment('3')=="quote") echo 'selected="selected"';?> value="Quotation">Quotation</option>
            <option <?php if($this->uri->segment('3')=="demo") echo 'selected="selected"';?> value="Demo">Demo</option>
        </select></p>
        
        <p>Service :
        <select name="service">
            <option <?php if($this->uri->segment('4')=="ITSolution") echo 'selected="selected"';?> value="IT Solutions">IT Solutions</option>
            <option <?php if($this->uri->segment('4')=="ITSupport") echo 'selected="selected"';?> value="IT Support">IT Support</option>
            <option <?php if($this->uri->segment('4')=="SSolution") echo 'selected="selected"';?> value="Software Solutions">Software Solutions</option>
            <option <?php if($this->uri->segment('4')=="Hosting") echo 'selected="selected"';?> value="Hosting">Hosting</option>
            <option <?php if($this->uri->segment('4')=="Communication") echo 'selected="selected"';?> value="Communications">Communications</option>
            <option <?php if($this->uri->segment('4')=="Security") echo 'selected="selected"';?> value="Security">Security</option>
        </select></p>
     
        <p>Details: <textarea name="details" placeholder="Details goes here..."></textarea></p><br />
        <input  class="hot" type="submit" value="Send" />
    </form>
</div><!-- success -->
</body>
</html>