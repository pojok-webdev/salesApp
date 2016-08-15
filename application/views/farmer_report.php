<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SalesApp</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>src/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>src/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url();?>src/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url();?>src/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>src/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>src/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- Padi CSS -->
	<link rel='stylesheet' href='<?php echo base_url();?>src/padi/padistylesheet.css'>
</head>

<body>
	<?php $this->load->view("farmermodals");?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Home</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
				<li>
                    <a href="#">
                        <i class="fa fa-gear fa-fw"></i>
                    </a>

				</li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Farmer Report</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <span class='padileftnav'>Laporan Farmer</span>
                    <span class='padirightnav'>
						<button type="button" class="btn btn-default" id="btnAdd">Add</button>
						<button type="button" class="btn btn-default btn-circle"><i class="fa fa-plus"></i>
                    </span>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="tFarmer">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Divisi</th>
                                            <th>PIC Padi</th>
                                            <th>PIC Pelanggan</th>
                                            <th>Jenis Kegiatan</th>
                                            <th>Detail Kegiatan Teknis</th>
                                            <th>Sales</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php foreach($result as $res){?>
                                        <tr class="odd gradeX" myid="<?php echo $res->id;?>">
                                            <td><?php echo $res->actdate;?></td>
                                            <td><?php echo $res->division;?></td>
                                            <td><?php echo $res->padipic;?></td>
                                            <td class="center"><?php echo $res->clientpic;?></td>
                                            <td class="center act"><?php echo $res->actname;?></td>
                                            <td class="center actdetail"><?php echo $res->techdetail;?></td>
                                            <td class="center"><?php echo $res->sales;?></td>
                                            <td class="center">
											<div class="btn-group">
												<button data-toggle="dropdown" class="btn dropdown-toggle"  >Action <span class="caret"></span></button>
												<ul class="dropdown-menu pull-right">
													<li class='btn_edit pointer'   ><a><i class="fa fa-pencil"></i>&nbsp;Edit</a></li>
													<li class="divider"></li>
													<li class='btn_remove pointer'><a><i class="fa fa-trash"></i>&nbsp;Remove</a></li>
												</ul>
											</div>

                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <!--<script src="<?php echo base_url();?>src/bower_components/jquery/dist/jquery.min.js"></script>-->
    <script src="<?php echo base_url();?>src/js/jquery-3.1.0.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>src/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <!--<script src="<?php echo base_url();?>src/bower_components/metisMenu/dist/metisMenu.min.js"></script>-->

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>src/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <!--<script src="<?php echo base_url();?>src/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>-->
    <script src="<?php echo base_url();?>src/bower_components/datatables-responsive/js/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <!--<script src="<?php echo base_url();?>src/dist/js/sb-admin-2.js"></script>-->
    <script src="<?php echo base_url();?>src/bootstraps/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url();?>src/padi/padi.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        tFarmer = $('#tFarmer').DataTable({
                responsive: true
        });
        $("#btnAdd").click(function(){
			$("#dAdd").modal();
		});
        $("#tFarmer").on("click",".btn_edit",function(){
			$("#dAdd").modal();
		});
        $("#tFarmer").on("click",".btn_remove",function(){
			selected = $(this).stairUp({level:4});
			$("#tFarmer tbody tr").removeClass("selected");
			selected.addClass("selected");
			$("#act").html(selected.find(".act").html());
			$("#actdetail").html(selected.find(".actdetail").html());
			$("#dConfirm").modal();
		});
		$("#actdate").datepicker();
		$("#btnSaveAct").click(function(){
			console.log("save Act clicked");
			$.ajax({
				url:thisdomain+"Main/save_act",
				data:{
					"actdate":$("#aactdate").val(),
					"division":"farmer",
					"padipic":"jojon",
					"clientpic":$("#aclientpic").val(),
					"actname":$("#aact").val(),
					"techdetail":$("#aactdetail").val(),
					"sales":$("#asales").val(),
					"createuser":"acreateuser"
				},
				type:"post"
			})
			.done(function(res){
				console.log(res);
			})
			.fail(function(err){
				console.log(err);
			});
		});
		$("#btnRemoveAct").click(function(){
			console.log("btn remove act clicked",$("tFarmer tbody tr.selected").attr("myid"));
			$.ajax({
				url:thisdomain+"Main/remove_act",
				data:{"id":$("#tFarmer tbody tr.selected").attr("myid")},
				type:"post"
			})
			.done(function(res){
				console.log(res);

				newRow = tFarmer.fnAddData([$("#aactdate").val(), "farmer", "joojoon",$("#aclientpic").val(),$("#aact").val(), $("#atechdetail").val(),$("#asales").val(),'<div class="btn-group"><button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button><ul class="dropdown-menu pull-right">z<li class="btntroubleshoot"><a href="#">Troubleshoot</a></li><li class="btnfollowup pointer"><a>Follow Up Ticket</a></li></ul></div>']);

			})
			.fail(function(err){
				console.log(err);
			});
		});
		$(".closebutton").click(function(){
			$(this).stairUp({level:4}).modal("hide");
		});
    });
    </script>

</body>

</html>
