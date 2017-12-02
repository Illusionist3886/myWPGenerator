@extends('myGenCore/master')
@section('title', 'Register Nav Menu')
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Basic Menus</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <pre id="register">if(function_exists('register_nav_menu')){
    register_nav_menu('<span id="singid">main-menu</span>',__('<span id="singdesc">Main Menu</span>','<span id="singdom">tweentyseven</span>'));
}</pre>     
                </div>
                <div class="col-md-12">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <form action="">
                            <td>
                                <input type="text" id="singlemenuid" placeholder="Menu ID" class="form-control">
                            </td>
                            <td>
                                <input type="text" id="singlemenuname" placeholder="Menu Name" class="form-control">
                            </td>
                            <td>
                                <input type="text" id="singlemenutextdomain" placeholder="Text Domain" class="form-control">
                            </td>
                            </form>
                            <td colspan="2">
                                <button class="btn btn-primary pull-right" onclick="singlemenugen()">
                                    Generate Menu
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-success single" data-clipboard-target="#register">
                                    Copy Function
                                </button>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <pre id="registernavmenus">register_nav_menus( array(
<span id="multimenu"></span>) );</pre>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <td>
                                <input type="text" id="multimenuid" placeholder="Menu ID" class="form-control">
                            </td>
                            <td>
                                <input type="text" id="multimenuname" placeholder="Menu Name" class="form-control">
                            </td>
                            <td>
                                <input type="text" id="multimenutextdomain" placeholder="Text Domain" class="form-control">
                            </td>
                            <td colspan="2">
                                <button class="btn btn-primary pull-right" onclick="multimenugen()">
                                    Generate Menu
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-success multi" data-clipboard-target="#registernavmenus">
                                    Copy Function
                                </button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /.row -->
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
            <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{ url('/') }}/userDash/assets/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ url('/') }}/userDash/assets/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ url('/') }}/userDash/assets/metisMenu/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <!-- <script src="{{ url('/') }}/userDash/assets/raphael/raphael.min.js"></script> -->
        <!-- <script src="{{ url('/') }}/userDash/assets/morrisjs/morris.min.js"></script> -->
        <!-- <script src="../data/morris-data.js"></script> -->

        <!-- Custom Theme JavaScript -->
        <script src="{{ url('/') }}/userDash/assets/js/sb-admin-2.js"></script>
        <script src="{{ url('/') }}/userDash/assets/js/clipboard.min.js"></script>
        <script>
            var clipboard = new Clipboard('.single');
            var clipboard = new Clipboard('.multi');

            function singlemenugen()
            {
                document.getElementById("singid").innerHTML = document.getElementById("singlemenuid").value;
                document.getElementById("singdesc").innerHTML = document.getElementById("singlemenuname").value;
                document.getElementById("singdom").innerHTML = document.getElementById("singlemenutextdomain").value;


            }

            function multimenugen()
            {
                var multiid = document.getElementById("multimenuid").value;
                var multiname = document.getElementById("multimenuname").value;
                var multitextdom = document.getElementById("multimenutextdomain").value;

                var multivalue = "   '"+multiid+"'    => __( '"+multiname+"', '"+multitextdom+"' ),<br/>";

                $( "#multimenu" ).append( multivalue );
            }

        </script>
    </body>

    </html>

@endsection