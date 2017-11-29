@extends('myGenCore/master')
@section('title', 'Enqueque Style and Scripts')
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Base Function</h3>
                    <pre id="basefun">function delowar_wp_generator() {

}
add_action( '<span id="admin">wp_enqueue_scripts</span>', 'delowar_wp_generator' );</pre>
                <button class="btn btn-success base" data-clipboard-target="#basefun">
                        Copy to clipboard
                </button>
                <button class="btn btn-primary" onclick="adminque()">Admin</button>
                <button class="btn btn-primary" onclick="genque()">General</button>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Generate Styles</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <form action="">
                <div class="col-md-12">
                    
                    <h4 class="text-muted">
                        wp_enqueue_style( 'twentyseventeen-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'twentyseventeen-style' ), '1.0' );
                    </h4>
                    <pre id="wp_enqueue_style_basic"></pre>

                    <table class="table table-striped table-bordered">
                        <thead>
                            <th>Style</th>
                            <th>Source</th>
                            <th>Dependency</th>
                            <th>Version</th>
                            <th>Media</th>
                            <th>Generate</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                    <input type="text" name="" id="stylename" placeholder="Style Name" class="form-control">
                                </td>
                                <td>
                    <input type="text" name="" id="stylelocation" placeholder="Source" class="form-control">
                                </td>
                                <td>
                    <input type="text" name="" id="styledeps" placeholder="Dependency" class="form-control">
                                </td>
                                <td>
                    <input type="text" name="" id="styleversion" placeholder="Version" class="form-control">
                                </td>
                                <td>
                    <input type="text" name="" id="stylemedia" placeholder="Media" class="form-control">
                                </td>
                                <td>
                    <input type="button" value="Generate" class="btn btn-primary" onclick="styleone()">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                </form>
                <button class="btn btn-success dell" data-clipboard-target="#wp_enqueue_style_basic">
                        Copy to clipboard
                </button>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Generate Scripts</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <form action="">
                <div class="col-md-12">
                    
                    <h4 class="text-muted">
                        wp_enqueue_script( 'twentyseventeen-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true ); <br>
                        <span class="text-info">wp_enqueue_script( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, bool $in_footer = false );</span>
                    </h4>
                    <pre id="wp_enqueue_script_basic"></pre>

                    <table class="table table-striped table-bordered">
                        <thead>
                            <th>Script</th>
                            <th>Source</th>
                            <th>Dependency</th>
                            <th>Version</th>
                            <th>In Footer</th>
                            <th>Generate</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                    <input type="text" name="" id="scriptname" placeholder="Script Name" class="form-control">
                                </td>
                                <td>
                    <input type="text" name="" id="scriptlocation" placeholder="Source" class="form-control">
                                </td>
                                <td>
                    <input type="text" name="" id="scriptdeps" placeholder="Dependency" class="form-control">
                                </td>
                                <td>
                    <input type="text" name="" id="scriptversion" placeholder="Version" class="form-control">
                                </td>
                                <td>
                    <input type="text" name="" id="scriptinfooter" placeholder="Footer" class="form-control">
                                </td>
                                <td>
                    <input type="button" value="Generate" class="btn btn-primary" onclick="scriptone()">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                </form>
                <button class="btn btn-success dell2" data-clipboard-target="#wp_enqueue_script_basic">
                        Copy to clipboard
                </button>
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
            var clipboard = new Clipboard('.dell');
            var clipboard = new Clipboard('.dell2');
            var clipboard = new Clipboard('.base');
            function styleone()
            {
               var stylename = document.getElementById("stylename").value;
               var stylelocation = document.getElementById("stylelocation").value;
               var styledeps = document.getElementById("styledeps").value;
               var styleversion = document.getElementById("styleversion").value;
               var stylemedia = document.getElementById("stylemedia").value;
               
               var data = "wp_enqueue_style( '"+stylename+"', get_theme_file_uri( '"+stylelocation+"' ), array( '"+styledeps+"' ), '"+styleversion+"','"+stylemedia+"' );<br/>"

               // document.getElementById("wp_enqueue_style_basic").innerHTML=data;
               $( "#wp_enqueue_style_basic" ).append( data );
            }

            function scriptone()
            {
               var scriptname = document.getElementById("scriptname").value;
               var scriptlocation = document.getElementById("scriptlocation").value;
               var scriptdeps = document.getElementById("scriptdeps").value;
               var scriptversion = document.getElementById("scriptversion").value;
               var scriptinfooter = document.getElementById("scriptinfooter").value;

               var scriptdata = "wp_enqueue_script( '"+scriptname+"', get_theme_file_uri( '"+scriptlocation+"' ), array('"+scriptdeps+"'), '"+scriptversion+"', "+scriptinfooter+" );<br/>"

               // document.getElementById("wp_enqueue_style_basic").innerHTML=data;
               $( "#wp_enqueue_script_basic" ).append( scriptdata );
            }

            function adminque()
            {
                document.getElementById("admin").innerHTML="admin_enqueue_scripts";
            }
            function genque()
            {
                document.getElementById("admin").innerHTML="wp_enqueue_scripts";
            }
        </script>
    </body>

    </html>

@endsection