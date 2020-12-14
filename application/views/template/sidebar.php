<!-- Main sidebar -->
<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user-material">
            <div class="category-content">
                <div class="sidebar-user-material-content">
                    <a href="#"><img src="<?= base_url('assets2/'); ?>images/placeholder.jpg" class="img-circle img-responsive" alt=""></a>
                    <h6>Wiwin Atmaja</h6>
                    <span class="text-size-small">Admin</span>
                </div>

                <div class="sidebar-user-material-menu">
                    <a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>
                </div>
            </div>

            <div class="navigation-wrapper collapse" id="user-nav">
                <ul class="navigation">
                    <li><a href="#"><i class="icon-switch2"></i> <span>Logout</span></a></li>
                </ul>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="navigation-header"><span>Admin</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li class=""><a href="<?= site_url('Backend/index') ?>"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                    <!-- /page kits -->
                    <li class="navigation-header"><span>Wisata</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li><a href="<?=site_url('Backend/daftar_wisata') ?>"><i class="icon-map"></i> <span>Data Wisata</span></a></li>
                    <li><a href="<?=site_url('Backend/daftar_hotel') ?>"><i class="icon-home5"></i> <span>Data Hotel</span></a></li>

                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->