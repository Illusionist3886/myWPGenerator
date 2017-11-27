@extends('myGenCore/master')
@section('title', 'Welcome')
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Basic 404</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <form action="">
                <div class="col-md-12">
                    
                    <pre id="err-basic">    &lt;?php get_header(); ?&gt;
        &lt;?php _e( 'Oops! That page can&rsquo;t be found.', '<span id="texdom">twentyseventeen</span>' ); ?&gt;
    &lt;?php get_footer(); ?&gt;</pre>
    <input type="text" id="textdomain" placeholder="TextDomain">
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
        <script src="{{ url('/') }}/userDash/assets/js/clipboard.min.js"></script>
        <script>
            var clipboard = new Clipboard('.dell');
            function delowar()
            {
                document.getElementById("texdom").innerHTML=document.getElementById("textdomain").value;
                document.getElement
            }
        </script>


    </body>

    </html>

@endsection