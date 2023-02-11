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
    <script type="text/javascript">
        function closeME() {
            event.preventDefault();
            parent.$.fancybox.close();
            $('#myForm').submit();
        }
    </script>
    <h1>SUCCESS!</h1>
    <p>Message Sent Successful..</p>
    <a href="<?php echo base_url(); ?>IMG1/PDF/DPOINT-Brochure.zip"><img src="<?php echo base_url(); ?>IMG1/brochure_download.jpg" /></a>
    <a href="<?php echo base_url(); ?>main/contact"><img src="<?php echo base_url(); ?>IMG1/cs_miss_jo.jpg" /></a>
</div><!-- success -->
</body>
</html>