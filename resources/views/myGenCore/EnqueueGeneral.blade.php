@extends('myGenCore/master')
@section('title', 'Welcome')
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Generate Styles</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <form action="">
                <div class="col-md-12">
                    
                    <pre id="err-basic">wp_enqueue_style( 'twentyseventeen-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'twentyseventeen-style' ), '1.0' );
                    </pre>
                    <input type="text" name="" id="stylename" placeholder="Style Name">
                    <input type="text" name="" id="stylelocation" placeholder="Source">
                    <input type="text" name="" id="styledeps" placeholder="Dependency">
                    <input type="text" name="" id="styleversion" placeholder="Version">
                    <input type="text" name="" id="stylemedia" placeholder="Media>

                    <table class="table table-striped table-bordered">
                        <thead>
                            <th>Style</th>
                            <th>Source</th>
                            <th>Dependency</th>
                            <th>Version</th>
                            <th>Media</th>
                        </thead>
                    </table>
                    <input type="button" value="Generate" class="btn btn-primary" onclick="delowar()">
                    
                </div>
                </form>
                <button class="btn btn-success dell" data-clipboard-target="#err-basic">
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
                    
                    <pre id="err-basic">wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
                    </pre>
                    <input type="text" name="" id="" placeholder="">
                    <input type="text" name="" id="" placeholder="">
                    <input type="text" name="" id="" placeholder="">
                    <input type="text" name="" id="" placeholder="">
                    <input type="text" name="" id="" placeholder="">
                    <input type="button" value="Generate" class="btn btn-primary" onclick="delowar()">
                    
                </div>
                </form>
                <button class="btn btn-success dell" data-clipboard-target="#err-basic">
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

    </body>

    </html>

@endsection