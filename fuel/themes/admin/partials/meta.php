<title><?php echo \Config::get('website.website_title'); ?> <?php echo (($title)) ? ' - '.$title : ''; ?></title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Pseudoagentur">


        <?= \Casset::render_css('css_core'); ?>
        <?= \Casset::render_css('css_plugin'); ?>
        <?= \Casset::render_css('css_theme'); ?>
        <?= \Casset::render_js('js_core'); ?>
    	<?//= \Theme::instance()->asset->render('css_plugin'); ?>
    	<?//= \Theme::instance()->asset->render('js_core'); ?>
        <!-- Bootstrap core CSS -->
        <?php //echo \Theme::instance()->asset->css('bootstrap.min.css'); ?>

        <!-- Custom styles for this template -->
        <?php //echo \Theme::instance()->asset->css('bootstrap-mobile-navigation.css'); ?>
        <?php //echo \Theme::instance()->asset->css('../font-awesome/css/font-awesome.min.css'); ?>
        <?php //echo \Theme::instance()->asset->css('flatui-buttons.css'); ?>
        <?php //echo \Theme::instance()->asset->css('jquery.nestedsortable.css'); ?>
        <?php //echo \Theme::instance()->asset->css('theme-adminify.css'); ?>
        

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->


        <script type="text/javascript">
        {
            <?php
                echo"var baseURL='".Uri::base(false)."';";
            ?>
        }
        </script>   
