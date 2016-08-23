<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<!-- Mirrored from themes.3rdwavemedia.com/college-green/1.5.2/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Jan 2016 01:40:22 GMT -->
<head>
    <title><?php $this->load->view('V_title'); ?></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php $this->load->view('V_description'); ?>">
	<meta name="keywords" content="<?php $this->load->view('V_meta'); ?>">
    <meta name="author" content="Nufan Balafif">    
    <link rel="shortcut icon" href="<?php echo base_url(); ?>favico.png" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>   
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/template/assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="<?php echo base_url(); ?>/template/assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/template/assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/template/assets/plugins/pretty-photo/css/prettyPhoto.css"> 
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="<?php echo base_url(); ?>/template/assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 
<body class="home-page">
    <div class="wrapper">
        <!-- ******HEADER****** --> 
        <header class="header">  
            <div class="top-bar">
                <div class="container">                            
                    <ul class="social-icons col-md-6 col-sm-6 col-xs-12 hidden-xs">
					<?php
						foreach ($icon as $icon_sosial){
							echo "<li><a href='#' ><i class='fa fa-$icon_sosial->Icon'></i></a></li>";
						}
					?>					
                    </ul><!--//social-icons-->
                    <form class="pull-right search-form" role="search" method="post" action="<?php echo base_url(); ?>pencarian">
                        <div class="form-group">
                            <input type="text" name="cari" class="form-control" placeholder="Pencarian...">
                        </div>
                        <button type="submit" class="btn btn-theme">Go</button>
                    </form> 
                    <form class="pull-right search-form" role="search" method="post" action="<?php echo base_url(); ?>pencarian">
                       <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'id', includedLanguages: 'ar,en,fr,ja,th', layout: google.translate.TranslateElement.FloatPosition.TOP_CENTER, multilanguagePage: true}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>                       
                    </form>                      
                </div>                          
            </div><!--//to-bar-->            
            <div class="header-main container">
                <h1 class="logo col-md-4 col-sm-4">
                    <a href="<?php echo site_url(); ?>"><img id="logo" src="<?php echo base_url(); ?>template/assets/images/logo.png" alt="Logo"></a>
                </h1><!--//logo-->       
                <div class="info col-md-8 col-sm-8">
                    <ul class="menu-top navbar-right hidden-xs">
					<li><a href='<?php echo site_url(); ?>' Target=' >Home</a></li>
					<?php
						foreach ($top_menu as $menu_atas){
							echo "<li><a href='$menu_atas->Link' Target='$menu_atas->Target' >$menu_atas->Nama</a></li>";
						}
					?>
                    </ul><!--//menu-top-->
                    <br />  
                    <div class="contact pull-right">
                        <p class="phone"><i class="fa fa-phone"></i>0321 876771</p> 
                        <p class="email"><i class="fa fa-envelope"></i><a href="#">humas@unipdu.ac.id</a></p>
                    </div><!--//contact-->
                </div><!--//info-->
            </div><!--//header-main-->           
        </header><!--//header-->
        
        <!-- ******NAV****** -->
        <nav class="main-nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->            
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
						<li class='nav-item active'>
							<a href='<?php echo site_url(); ?>'>Beranda</a>
						</li>
						<?php
							foreach ($main_menu as $menu_utama){
								$tm = $menu_utama->Target=='B'?"_blank":"_self";
								if($menu_utama->SubMenu=='N'){
									if($menu_utama->Tipe=="L"){
										echo "<li class='nav-item'><a href='$menu_utama->Link' target='$tm'>$menu_utama->Nama</a></li>";
									}else{
										echo "<li class='nav-item'><a href='".base_url()."$menu_utama->Link' target='$tm'>$menu_utama->Nama</a></li>";
									}
								}else{
									echo "<li class='nav-item dropdown'>
										<a class='dropdown-toggle' data-toggle='dropdown' data-hover='dropdown' data-delay='0' data-close-others='false' href='#'>$menu_utama->Nama <i class='fa fa-angle-down'></i></a>";
										echo "<ul class='dropdown-menu'>";
										foreach ($submain_menu as $submenu_utama){
											$tmm = $submenu_utama->Target=='B'?"_blank":"_self";
											if($submenu_utama->MenuID == $menu_utama->MenuID){
												if($submenu_utama->Tipe=="L"){
													echo "<li><a href='$submenu_utama->Link' target='$tmm'>$submenu_utama->Nama</a></li>";
												}else{
													echo "<li><a href='".base_url()."$submenu_utama->Link' target='$tmm'>$submenu_utama->Nama</a></li>";
												}
												
											}
										}
										echo "</ul>";
									echo "</li>";										
								}
							}
						?>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div><!--//container-->
        </nav><!--//main-nav-->