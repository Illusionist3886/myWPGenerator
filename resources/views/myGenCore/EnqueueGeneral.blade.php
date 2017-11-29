@extends('myGenCore/master')
@section('title', 'Enqueque Style and Scripts')
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Base Function</h3>
                    <a href="https://wordpress.stackexchange.com/questions/124354/why-wp-register-style-is-important-while-im-using-a-complete-wp-enqueue-style" class="btn btn-link" target="_blank">Helpful Reference</a>
                    <pre id="basefun">function delowar_wp_generator() {
<span id="general"></span>

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
                    <pre id="wp_register_style_basic"></pre>
                    <pre id="wp_register_style_enqueue"></pre>

                    <table class="table table-striped table-bordered">
                        <thead>
                            <th>Style</th>
                            <th>Source</th>
                            <th>Dependency</th>
                            <th>Version</th>
                            <th>Media</th>
                            <th colspan="2" class="text-center">Action</th>
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
                    <input type="button" value="Theme" class="btn btn-primary btn-sm" onclick="styleone()" title="Generate For Themes">
                                </td>
                                <td>
                                    <input type="button" value="Plugin" class="btn btn-success btn-sm" onclick="styleoneplugin()" title="Generate For Plugins">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                </form>
                <div class="col-md-12">
                    <button class="btn btn-success dell" data-clipboard-target="#wp_register_style_basic">
                        Copy Register
                </button>
                <button class="btn btn-primary styleenqueue" data-clipboard-target="#wp_register_style_enqueue">
                        Copy Enqueue
                </button>
                </div>
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
                    <pre id="wp_enqueue_script_enqueue"></pre>

                    <table class="table table-striped table-bordered">
                        <thead>
                            <th>Script</th>
                            <th>Source</th>
                            <th>Dependency</th>
                            <th>Version</th>
                            <th>In Footer</th>
                            <th colspan="2" class="text-center">Action</th>
                            
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
                    <input type="button" value="Theme" class="btn btn-primary" onclick="scriptone()">
                                </td>
                                <td>
                    <input type="button" value="Plugin" class="btn btn-success" onclick="scriptoneplugin()">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                </form>
                <div class="col-md-12">
                    <button class="btn btn-primary dell2" data-clipboard-target="#wp_enqueue_script_basic">
                        Copy Register
                </button>
                <button class="btn btn-success enqueuescript" data-clipboard-target="#wp_enqueue_script_enqueue">
                        Copy Enqueue
                </button>
                </div>
                <div class="col-md-12">
                    <h2></h2>
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
            var clipboard = new Clipboard('.dell');
            var clipboard = new Clipboard('.dell2');
            var clipboard = new Clipboard('.styleenqueue');
            var clipboard = new Clipboard('.enqueuescript');
            var clipboard = new Clipboard('.base');
            function styleone()
            {
               var stylename = document.getElementById("stylename").value;
               var stylelocation = document.getElementById("stylelocation").value;
               var styledeps = document.getElementById("styledeps").value;
               var styleversion = document.getElementById("styleversion").value;
               var stylemedia = document.getElementById("stylemedia").value;
               
               var data = "wp_register_style( '"+stylename+"', get_theme_file_uri( '"+stylelocation+"' ), array( '"+styledeps+"' ), '"+styleversion+"','"+stylemedia+"' );<br/>";
               var data2 = "wp_enqueue_style('"+stylename+"')<br/>";

               // document.getElementById("wp_enqueue_style_basic").innerHTML=data;
               $( "#wp_register_style_basic" ).append( data );
               $( "#wp_register_style_enqueue" ).append( data2 );
            }

            function styleoneplugin()
            {
               var stylename = document.getElementById("stylename").value;
               var stylelocation = document.getElementById("stylelocation").value;
               var styledeps = document.getElementById("styledeps").value;
               var styleversion = document.getElementById("styleversion").value;
               var stylemedia = document.getElementById("stylemedia").value;
               
               var data = "wp_register_style( '"+stylename+"', plugin_dir_url( __FILE__ ) . '"+stylelocation+"' ), array( '"+styledeps+"' ), '"+styleversion+"','"+stylemedia+"' );<br/>";
               var data2 = "wp_enqueue_style('"+stylename+"');<br/>";


               // document.getElementById("wp_enqueue_style_basic").innerHTML=data;
               $( "#wp_register_style_basic" ).append( data );
               $( "#wp_register_style_enqueue" ).append( data2 );
            }

            function scriptone()
            {
               var scriptname = document.getElementById("scriptname").value;
               var scriptlocation = document.getElementById("scriptlocation").value;
               var scriptdeps = document.getElementById("scriptdeps").value;
               var scriptversion = document.getElementById("scriptversion").value;
               var scriptinfooter = document.getElementById("scriptinfooter").value;

               var scriptdata = "wp_register_script( '"+scriptname+"', get_theme_file_uri( '"+scriptlocation+"' ), array('"+scriptdeps+"'), '"+scriptversion+"', "+scriptinfooter+" );<br/>";

               var scriptdata2 = "wp_enqueue_script('"+scriptname+"');<br/>"

               // document.getElementById("wp_enqueue_style_basic").innerHTML=data;
               $( "#wp_enqueue_script_basic" ).append( scriptdata );
               $( "#wp_enqueue_script_enqueue" ).append( scriptdata2 );
            }

            function scriptoneplugin()
            {
               var scriptname = document.getElementById("scriptname").value;
               var scriptlocation = document.getElementById("scriptlocation").value;
               var scriptdeps = document.getElementById("scriptdeps").value;
               var scriptversion = document.getElementById("scriptversion").value;
               var scriptinfooter = document.getElementById("scriptinfooter").value;

               var scriptdata = "wp_register_script( '"+scriptname+"', plugin_dir_url( __FILE__ ) . '"+scriptlocation+"' ), array('"+scriptdeps+"'), '"+scriptversion+"', "+scriptinfooter+" );<br/>";

                var scriptdata2 = "wp_enqueue_script('"+scriptname+"');<br/>"

               // document.getElementById("wp_enqueue_style_basic").innerHTML=data;
               $( "#wp_enqueue_script_basic" ).append( scriptdata );
               $( "#wp_enqueue_script_enqueue" ).append( scriptdata2 );
            }

            function adminque()
            {
                document.getElementById("admin").innerHTML="admin_enqueue_scripts";
                document.getElementById("general").innerHTML=null;

            }
            function genque()
            {
                document.getElementById("admin").innerHTML="wp_enqueue_scripts";
                document.getElementById("general").innerHTML="      wp_enqueue_style( 'style', get_stylesheet_uri() );";
            }
        </script>
    </body>

    </html>

@endsection