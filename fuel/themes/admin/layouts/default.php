<!DOCTYPE html>
<html lang="en">
    <head>


        <?php echo $partials['meta']; ?>
    </head>
	<body>

        <!-- START partials/header.html -->
        <?php echo $partials['navigation']; ?>
        <!-- END partials/header.html -->



        <!-- START partials/sidebar.html -->
        <?php echo $partials['sidebar']; ?>
        <!-- END partials/sidebar.html -->


        <div class="container-adminify">
            <!-- START partials/page-header.html -->
            <?php echo $partials['page_header']; ?>
            <!-- END partials/page-header.html -->

            <div class="content">
                <?php echo $partials['alert_messages']; ?>
                <?php echo $content; ?>
            </div>
        </div>

        <!-- START partials/footer.html -->
        <?php echo $partials['footer']; ?>
        <!-- END partials/footer.html -->
	</body>

</html>