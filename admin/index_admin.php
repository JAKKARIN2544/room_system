<?php include "../include/admin/header_admin.php"; ?>
<!------------------------------------------------------------------------------------------------------------------->

<body class="body-all hold-transition skin-yellow-light sidebar-mini">
    <div class="wrapper">
        <?php include "../include/admin/menu_admin.php"; ?>
        <!-- Content Wrapper. Contains page content -->
        <!------------------------------------------------------------------------------------------------------------------->
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>150</h3>
                                <p>New Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">เพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>53<sup style="font-size: 20px">%</sup></h3>
                                <p>Bounce Rate</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">เพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>44</h3>
                                <p>User Registrations</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">เพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>65</h3>
                                <p>Unique Visitors</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">เพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div><!-- ./col -->
                </div><!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="box ">
                            <div class="box-header with-border">
                                <h3 class="box-title">Monthly Recap Report</h3>
                                <div class="box-tools pull-right">
                                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    <div class="btn-group">
                                        <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p class="text-center">
                                            <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                                        </p>
                                        <div class="chart">
                                            <!-- Sales Chart Canvas -->
                                            <canvas id="salesChart" style="height: 180px;"></canvas>
                                        </div><!-- /.chart-responsive -->
                                    </div><!-- /.col -->
                                    <div class="col-md-4">
                                        <p class="text-center">
                                            <strong>Goal Completion</strong>
                                        </p>
                                        <div class="progress-group">
                                            <span class="progress-text">Add Products to Cart</span>
                                            <span class="progress-number"><b>160</b>/200</span>
                                            <div class="progress sm">
                                                <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                                            </div>
                                        </div><!-- /.progress-group -->
                                        <div class="progress-group">
                                            <span class="progress-text">Complete Purchase</span>
                                            <span class="progress-number"><b>310</b>/400</span>
                                            <div class="progress sm">
                                                <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                                            </div>
                                        </div><!-- /.progress-group -->
                                        <div class="progress-group">
                                            <span class="progress-text">Visit Premium Page</span>
                                            <span class="progress-number"><b>480</b>/800</span>
                                            <div class="progress sm">
                                                <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                                            </div>
                                        </div><!-- /.progress-group -->
                                        <div class="progress-group">
                                            <span class="progress-text">Send Inquiries</span>
                                            <span class="progress-number"><b>250</b>/500</span>
                                            <div class="progress sm">
                                                <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                                            </div>
                                        </div><!-- /.progress-group -->
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                            </div><!-- ./box-body -->
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                                            <h5 class="description-header">$35,210.43</h5>
                                            <span class="description-text">TOTAL REVENUE</span>
                                        </div><!-- /.description-block -->
                                    </div><!-- /.col -->
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                                            <h5 class="description-header">$10,390.90</h5>
                                            <span class="description-text">TOTAL COST</span>
                                        </div><!-- /.description-block -->
                                    </div><!-- /.col -->
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="description-block border-right">
                                            <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                                            <h5 class="description-header">$24,813.53</h5>
                                            <span class="description-text">TOTAL PROFIT</span>
                                        </div><!-- /.description-block -->
                                    </div><!-- /.col -->
                                    <div class="col-sm-3 col-xs-6">
                                        <div class="description-block">
                                            <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                                            <h5 class="description-header">1200</h5>
                                            <span class="description-text">GOAL COMPLETIONS</span>
                                        </div><!-- /.description-block -->
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.box-footer -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div>
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-7 connectedSortable">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="nav-tabs-custom">
                            <!-- Tabs within a box -->
                            <ul class="nav nav-tabs pull-right">
                                <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
                            </ul>
                            <div class="tab-content no-padding">
                                <!-- Morris chart - Sales -->
                                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
                            </div>
                        </div><!-- /.nav-tabs-custom -->

                        <!-- Chat box -->
                        <!-- /.box (chat box) -->
                    </section><!-- /.Left col -->
                    <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    <section class="col-lg-5 connectedSortable">

                        <!-- Map box -->
                        <div class="box box-solid bg-light">

                            <div class="box-body">
                                <!-- Info Boxes Style 2 -->
                                <div class="info-box ">
                                    <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Inventory</span>
                                        <span class="info-box-number">5,200</span>
                                        <span class="progress-description">
                                            50% Increase in 30 Days
                                        </span>
                                    </div><!-- /.info-box-content -->
                                </div><!-- /.info-box -->
                                <div class="info-box bg-light">
                                    <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Mentions</span>
                                        <span class="info-box-number">92,050</span>
                                        <span class="progress-description">
                                            20% Increase in 30 Days
                                        </span>
                                    </div><!-- /.info-box-content -->
                                </div><!-- /.info-box -->
                                <div class="info-box bg-light">
                                    <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Downloads</span>
                                        <span class="info-box-number">114,381</span>
                                        <span class="progress-description">
                                            70% Increase in 30 Days
                                        </span>
                                    </div><!-- /.info-box-content -->
                                </div><!-- /.info-box -->
                                <div class="info-box bg-light">
                                    <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Direct Messages</span>
                                        <span class="info-box-number">163,921</span>
                                        <span class="progress-description">
                                            40% Increase in 30 Days
                                        </span>
                                    </div><!-- /.info-box-content -->
                                </div><!-- /.info-box -->
                                <!-- /.box -->
                            </div><!-- /.box-body-->
                        </div>

                    </section><!-- right col -->
                </div><!-- /.row (main row) -->

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
        <?php include "../include/admin/footer_admin.php";
