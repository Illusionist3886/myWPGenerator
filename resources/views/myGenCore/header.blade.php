@extends('myGenCore/master')
@section('title', 'header.php Generator')
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Basic header.php Page</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    
                    <pre id="header-basic">&lt;!DOCTYPE html&gt;
    &lt;html &lt;?php language_attributes(); ?&gt; class="no-js no-svg"&gt;
        &lt;head&gt;
                &lt;meta charset="&lt;?php bloginfo( 'charset' ); ?&gt;"&gt;
                &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
                &lt;?php wp_head(); ?&gt;
        &lt;/head>
        &lt;body &lt;?php body_class(); ?&gt;                       
                    </pre>
                    <button class="btn btn-success dell" data-clipboard-target="#header-basic">
                        Copy to clipboard
                    </button>
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
        </script>
        

    </body>

    </html>

@endsection