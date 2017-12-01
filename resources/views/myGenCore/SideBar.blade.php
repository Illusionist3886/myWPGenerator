@extends('myGenCore/master')
@section('title', 'SideBar')
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">SideBar Registration</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <pre id="sidebarfunction">function <span id="sidebarfunc">my_sidebar</span>()
{
<span id="sidebars"></span>
}
add_action('widgets_init','<span id="sidebarfunchook">my_sidebar</span>');</pre>
                </div>
            </div>
            <div class="row">
                <form action="">
                <div class="col-md-2">
                    <input type="text" name="" id="funcname" class="form-control" placeholder="Function Name" >
                    
                </div>
                </form>
                <div class="col-md-2">
                    <button class="btn btn-primary" onclick="sidebarfun()">
                        Generate Function
                    </button>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary sidebarfuncreg" data-clipboard-target="#sidebarfunction">
                        Copy to clipboard
                    </button>
                </div>
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <form action="">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th class="col-md-3">Name</th>
                                <td class="col-md-9">
                                    <input type="text" name="" id="sidebarname" placeholder="SideBar Name" class="form-control">
                                </td>
                            </tr>
                             <tr>
                                <th class="col-md-3">Description</th>
                                <td class="col-md-9">
                                    <textarea name="" id="sidebardescription" cols="30" rows="2" placeholder="SideBar Description" class="form-control"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-3">ID</th>
                                <td class="col-md-9">
                                    <input type="text" name="" id="sidebarid" placeholder="SideBar ID" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-3">Before Widget</th>
                                <td class="col-md-9">
                                    <input type="text" name="" id="sidebarbeforewidget" placeholder="Before Widget" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-3">After Widget</th>
                                <td class="col-md-9">
                                    <input type="text" name="" id="sidebarafterwidget" placeholder="After Widget" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-3">Before Title</th>
                                <td class="col-md-9">
                                    <input type="text" name="" id="sidebarbeforetitle" placeholder="Before Title" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-3">After Title</th>
                                <td class="col-md-9">
                                    <input type="text" name="" id="sidebaraftertitle" placeholder="After Title" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th class="col-md-3">Theme Text Domain</th>
                                <td class="col-md-9">
                                    <input type="text" name="" id="textdomain" placeholder="Text-Domain" class="form-control">
                                </td>
                            </tr>
                        </table>
                    </form>
                    <button class="btn btn-primary" onclick="sidebarfungen()" style="margin-bottom: 20px;">
                        Generate SideBar
                    </button>
                </div>
            </div>
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
            var clipboard = new Clipboard('.sidebarfuncreg');
            function sidebarfun()
            {
                document.getElementById("sidebarfunc").innerHTML = document.getElementById("funcname").value;
                document.getElementById("sidebarfunchook").innerHTML = document.getElementById("funcname").value;
            }

            function noobreplace(pass)
            {
                pass = pass.replace(/>/gi,"&gt;");
                pass = pass.replace(/</gi,"&lt;");

                return pass;
            }

            function sidebarfungen()
            {
                var name = document.getElementById("sidebarname").value;
                var id = document.getElementById("sidebarid").value;
                var description = document.getElementById("sidebardescription").value;
                var before_widgets = document.getElementById("sidebarbeforewidget").value;
                var after_widgets = document.getElementById("sidebarafterwidget").value;
                var before_title = document.getElementById("sidebarbeforetitle").value;
                var after_title = document.getElementById("sidebaraftertitle").value;
                var text_domain = document.getElementById("textdomain").value;

                var data = "    register_sidebar( array(<br/>\
        'name'          => __( '"+name+"', '"+text_domain+"' ),<br/>\
        'id'            => '"+id+"',<br/>\
        'description'   => __( '"+noobreplace(description)+"', '"+text_domain+"' ),<br/>\
        'before_widget' => '"+noobreplace(before_widgets)+"',<br/>\
        'after_widget'  => '"+noobreplace(after_widgets)+"',<br/>\
        'before_title'  => '"+noobreplace(before_title)+"',<br/>\
        'after_title'   => '"+noobreplace(after_title)+"',<br/>\
    ) );<br/>";

               $( "#sidebars" ).append( data );

            }


        </script>
    </body>

    </html>

@endsection