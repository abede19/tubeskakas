<div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?php echo base_url()?>inspinia/img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="">Profile</a></li>
                                <li><a href="">Contacts</a></li>
                                <li><a href="">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url('Dashboard')?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Pemesanan')?>"><i class="fa fa-diamond"></i> <span class="nav-label">Pemesanan</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Destinasi')?>"><i class="fa fa-plane"></i> <span class="nav-label">Detinasi</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Penginapan')?>"><i class="fa fa-envelope"></i> <span class="nav-label">Penginapan </span><span class="label label-warning pull-right">16/24</span></a>
                    </li>
                   
                    <li>
                        <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Transfortasi</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                        	<li><a href="<?php echo base_url('Transfortasi/nasional')?>">Nasional</a></li>
                        	<li><a href="<?php echo base_url('Transfortasi/daerah')?>">Daerah</a></li>
                        </ul>
                    </li>
                   
  
                    <li>
                        <a href="<?php echo base_url('Admin')?>"><i class="fa fa-picture-o"></i> <span class="nav-label">Admin</span></a>
                
                    </li>
                   
                </ul>

            </div>
        </nav>