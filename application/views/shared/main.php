<!DOCTYPE html>
<html lang="en">
    <!-- Header Section -->
    <?php $this->load->view('/shared/header'); ?>
    <!-- /Header Section -->

    <body class="nav-md">
        <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                <a href="#" class="site_title"><span>Amsel Nutraceutical Sales System</span></a>
                </div>

                <div class="clearfix"></div>
                
                <!-- menu profile quick info -->
                <?php $this->load->view('/shared/quick_profile'); ?>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <?php $this->load->view('/shared/sidebar_menu'); ?>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                 <!-- <?php $this->load->view('/shared/menu_footer');?>  -->
                <!-- /menu footer buttons -->
            </div>
            </div>

            <!-- top navigation -->
            <?php $this->load->view('/shared/top_navigation'); ?>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
            <!-- top tiles -->
            <!-- <?php $this->load->view('/home/top_tiles'); ?> -->
            <!-- /top tiles -->
            <?php if(isset($content) && $content != null){ $this->load->view($content); } ?>
            
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <?php $this->load->view('/shared/footer'); ?>
            <!-- /footer content -->
        </div>
        </div>

        <?php $this->load->view('/shared/script');?>
        
    </body>
</html>
