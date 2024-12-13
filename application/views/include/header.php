<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/'); ?>/images/favi-icon.png">
<!-- CSS
         ============================================ -->
<link rel="icon" href="<?php echo base_url(); ?>assets/img/FaviIcon.png" sizes="20x20" type="image/png" />
<!-- animate -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css" />
<!-- bootstrap -->

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
<!-- magnific popup -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css" />
<!-- Slick -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick-theme.css" />
<!-- swiper -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/swiper.min.css" />
<!-- owl carousel -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css" />
<!-- fontawesome -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />
<!-- flaticon -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flaticon.css" />
<!-- Main Stylesheet -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
<!-- responsive Stylesheet -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css" />

<?php
$exeSite = $this->db->get('tbl_site_setting');
$dataSite = $exeSite->result_array()[0];

$this->db->where('tc_status', true);
$this->db->where('tc_is_deleted', false);
$this->db->order_by('tc_display_order', 'asc');
$exeCategory = $this->db->get('tbl_category');
$dataCategory = $exeCategory->result_array();
?>