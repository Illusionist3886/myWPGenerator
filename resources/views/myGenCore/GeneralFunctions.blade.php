@extends('myGenCore/master')
@section('title', 'Some Common Functions')
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Some Common Functions</h3>
                    
                        <pre>&lt;?php bloginfo('home'); ?&gt;
&lt;?php bloginfo('charset'); ?&gt;
&lt;?php bloginfo('description'); ?&gt;
                        </pre>
                        <pre id="readmore">function read_more($limit)
{
    $post_content = explode(" ", get_the_content());
    $less_content = array_slice($post_content, 0, $limit);
    echo implode(" ", $less_content);
}</pre>
<button class="btn btn-success postqugen" data-clipboard-target="#readmore">
                                    Copy Function
                                </button>
                    
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                
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
            var clipboard = new Clipboard('.postqugen');
        </script>
    </body>

    </html>

@endsection