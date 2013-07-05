<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>
<?php echo to_entities($site_name.' :: '.$title)?>
</title>
<meta name="Description" content="<?php echo to_entities($meta_description)?>" />
<meta name="Keywords" content="<?php echo to_entities($meta_keywords)?>" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="copyright" content="Copyright GPB" />
<meta name="distribution" content="Global" />
<meta name="rating" content="general" />
<meta name="language" content="en" />
<meta http-equiv="Content-language" content="en" />
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
<link href="<?php echo base_url();?>public/css/styles.css" rel="stylesheet" type="text/css" media="all" />
<?php $this->load->view($js_variables);?>
</head>
<body>
    
   <div id="wrap">
              <?php $this->load->view($flashdata)?>
                <?php if($this->session->userdata('is-gpblogged-in') !== FALSE) {;?>
                    <div class="menu-wrap">
                        <?php echo anchor('home','home');?>
                        <?php echo anchor('home/truckout','truck out');?>
                        <?php echo anchor('login/out','logout');?>
                    </div>
                    <div class="clear"></div>
                <?php } ;?>
        <?php $this->load->view($content_template) ;?>  
    </div>
            
</body>
</html>