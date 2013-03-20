<?php Session::init() ?>
<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo isset($this->title)? $this->title : "" ?></title>

<link href="<?php echo URL ?>public/css/styles.css" media="screen" rel="stylesheet" type="text/css" />

<!--[if lte IE 7]>
<link rel="stylesheet" type="text/css" href="styles_ie.css" />
<![endif]--> 

<!--<link href="<?php echo URL ?>public/css/blue.css" media="screen" rel="stylesheet" type="text/css" />-->
<!-- Load CSS libraries -->
<?php
    if (isset($this->css)){
        foreach($this->css as $css){
            echo "<link rel='stylesheet' href='".URL."public/css/".$css."' type='text/css' media='screen' />";
        }
    }
?>
<!-- end Load CSS libraries -->
<script type="text/javascript" language="javascript" src="<?php echo URL ?>public/js/jquery.min.1.7.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo URL ?>public/js/jquery.tools.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo URL ?>public/js/general.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo URL ?>public/js/jquery.easing.1.3.js"></script>
<!-- Load Javascripts libraries -->
<?php
    if (isset($this->js)){
        foreach($this->js as $js){
            echo "<script type='text/javascript' language='javascript' src='".$js."'></script>";
        }
    }
?>
<!-- end Load Javascripts libraries -->
</head>
    
<body class="newbg">
    <?php $this->get_content() ?>
</body
></html>
