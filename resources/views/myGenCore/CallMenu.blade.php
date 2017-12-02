@extends('myGenCore/master')
@section('title', 'Calling Menu')
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Call Menu</h3>
                    <a href="https://developer.wordpress.org/reference/functions/wp_nav_menu/" class="btn btn-link" target="_blank">
                        Reference Here
                    </a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <pre id="register">&lt;?php 
if(function_exists('wp_nav_menu')){
    wp_nav_menu(array(
        <span id="mydata"></span>
    ));
}
?&gt;</pre>     
                </div>
                <div class="col-md-12">
                    <table class="table table-striped table-bordered">
                        <form action="">
                        <tr>
                            <td>
                                <input type="text" id="themelocationinput" placeholder="Theme Location (string)" class="form-control">
                            </td>
                            <td>
                                <input type="text" id="menuinput" placeholder="Menu (int| string| WP_Term)" class="form-control">
                            </td>
                            <td>
                                <input type="text" id="menuclassinput" placeholder="Menu Class (string)" class="form-control">
                            </td>
                            <td>
                                <input type="text" id="menuidinput" placeholder="Menu ID (string)" class="form-control">
                            </td>
                        </tr>
                        <tr>

                            <td>
                                <input type="text" id="containerinput" placeholder="Container (string)" class="form-control">
                            </td>
                            <td>
                                <input type="text" id="containerclassinput" placeholder="Container Class (string)" class="form-control">
                            </td>
                            <td>
                                <input type="text" id="containeridinput" placeholder="Container ID (string)" class="form-control">
                            </td>
                            <td>
                                <input type="text" id="fallbackinput" placeholder="Fallback CB (callable| bool)" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" id="beforeinput" placeholder="Before (string)" class="form-control">
                            </td>
                            <td>
                                <input type="text" id="afterinput" placeholder="After (string)" class="form-control">
                            </td>
                            <td>
                                <input type="text" id="linkbeforeinput" placeholder="Link Before (string)" class="form-control">
                            </td>
                            <td>
                                <input type="text" id="linkafterinput" placeholder="Link After (string)" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" id="echoinput" placeholder="Echo (bool)" class="form-control">
                            </td>
                            <td>
                                <input type="text" id="depthinput" placeholder="Depth (int)" class="form-control">
                            </td>
                            <td>
                                <input type="text" id="walkerinput" placeholder="Walker (object)" class="form-control">
                            </td>
                            <td>
                                <input type="text" id="itemswrapinput" placeholder="Items Wrap (string)" class="form-control">
                            </td>
                        </tr>
                        </form>
                        <tr>
                            <td>
                                <input type="text" id="itemspacinginput" placeholder="Item Spacing (string)" class="form-control">
                            </td>
                            <td colspan="3" class="text-center">
                                <button class="btn btn-primary " onclick="wpnavgen()">
                                    Generate Menu
                                </button>
                                <button class="btn btn-success wpnav" data-clipboard-target="#register">
                                    Copy Function
                                </button>
                            </td>
                        </tr>
                    </table>
                    
                </div>

            </div>
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
            var clipboard = new Clipboard('.wpnav');

            function wpnavgen()
            {
                var themeloca = document.getElementById("themelocationinput").value
                var menu = document.getElementById("menuinput").value
                var menuclass = document.getElementById("menuclassinput").value
                var menuid = document.getElementById("menuidinput").value
                var container = document.getElementById("containerinput").value
                var containerclass = document.getElementById("containerclassinput").value
                var containerid = document.getElementById("containeridinput").value
                var fallback = document.getElementById("fallbackinput").value
                var before = document.getElementById("beforeinput").value
                var after = document.getElementById("afterinput").value
                var linkbefore = document.getElementById("linkbeforeinput").value
                var linkafter = document.getElementById("linkafterinput").value
                var echo = document.getElementById("echoinput").value
                var depth = document.getElementById("depthinput").value
                var walker = document.getElementById("walkerinput").value
                var itemswrap = document.getElementById("itemswrapinput").value
                var itemspacing = document.getElementById("itemspacinginput").value


                if(themeloca != "")
                {
                    var valueToInsert = "'theme_location'\t=>  '"+themeloca+"',";
                    $( "#mydata" ).append( valueToInsert );
                }
                if(menu != "")
                {
                    var valueToInsert = "<br/>\t'menu'\t\t\t=>  "+menu+",";
                    $( "#mydata" ).append( valueToInsert );
                }
                if(menuclass != "")
                {
                    var valueToInsert = "<br/>\t'menu_class'\t\t=>  '"+menuclass+"',";
                    $( "#mydata" ).append( valueToInsert );
                }
                if(menuid != "")
                {
                    var valueToInsert = "<br/>\t'menu_id'\t\t=>  '"+menuid+"',";
                    $( "#mydata" ).append( valueToInsert );
                }
                if(container != "")
                {
                    var valueToInsert = "<br/>\t'container'\t\t=>  '"+container+"',";
                    $( "#mydata" ).append( valueToInsert );
                }
                if(containerclass != "")
                {
                    var valueToInsert = "<br/>\t'container_class'\t=>  '"+containerclass+"',";
                    $( "#mydata" ).append( valueToInsert );
                }
                if(containerid != "")
                {
                    var valueToInsert = "<br/>\t'container_id'\t\t=>  '"+containerid+"',";
                    $( "#mydata" ).append( valueToInsert );
                }
                if(fallback != "")
                {
                    var valueToInsert = "<br/>\t'fallback_cb'\t\t=>  "+fallback+",";
                    $( "#mydata" ).append( valueToInsert );
                }
                if(before != "")
                {
                    var valueToInsert = "<br/>\t'before'\t\t=>  '"+before+"',";
                    $( "#mydata" ).append( valueToInsert );
                }
                if(after != "")
                {
                    var valueToInsert = "<br/>\t'after'\t\t\t=>  '"+after+"',";
                    $( "#mydata" ).append( valueToInsert );
                }
                if(linkbefore != "")
                {
                    var valueToInsert = "<br/>\t'link_before'\t\t=>  '"+linkbefore+"',";
                    $( "#mydata" ).append( valueToInsert );
                }
                if(linkafter != "")
                {
                    var valueToInsert = "<br/>\t'link_after'\t\t=>  '"+linkafter+"',";
                    $( "#mydata" ).append( valueToInsert );
                }
                if(echo != "")
                {
                    var valueToInsert = "<br/>\t'echo'\t\t\t=>  "+echo+",";
                    $( "#mydata" ).append( valueToInsert );
                }
                if(depth != "")
                {
                    var valueToInsert = "<br/>\t'depth'\t\t\t=>  "+depth+",";
                    $( "#mydata" ).append( valueToInsert );
                }
                if(walker != "")
                {
                    var valueToInsert = "<br/>\t'walker'\t\t=>  "+walker+",";
                    $( "#mydata" ).append( valueToInsert );
                }
                if(itemswrap != "")
                {
                    var valueToInsert = "<br/>\t'items_wrap'\t\t=>  '"+itemswrap+"',";
                    $( "#mydata" ).append( valueToInsert );
                }
                if(itemspacing != "")
                {
                    var valueToInsert = "<br/>\t'item_spacing'\t\t=>  '"+itemspacing+"',";
                    $( "#mydata" ).append( valueToInsert );
                }


            }

            


        </script>
    </body>

    </html>

@endsection