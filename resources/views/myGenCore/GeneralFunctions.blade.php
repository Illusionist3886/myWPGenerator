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
&lt;?php comments_template(); ?&gt;
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
                <div class="col-md-12" id="amarbal">
                    <div class="inner">1</div>
<div class="inner2">1</div>
<div class="inner">1</div>
                </div>
                <button class="btn btn-success ambal" data-clipboard-target="#amarbal">
                                    Copy Function
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
            var clipboard = new Clipboard('.postqugen');
            var clipboard = new Clipboard('.ambal');
        </script>
        <script>
            $(function () {
    $(".inner, .inner2").dblclick(function (e) {
        e.stopPropagation();
        var currentEle = $(this);
        var value = $(this).html();
        updateVal(currentEle, value);
    });
});

function updateVal(currentEle, value) {
    $(currentEle).html('<input class="thVal" type="text" value="' + value + '" />');
    $(".thVal").focus();
    $(".thVal").keyup(function (event) {
        if (event.keyCode == 13) {
            $(currentEle).html($(".thVal").val().trim());
        }
    });

    $(document).click(function () {
            $(currentEle).html($(".thVal").val().trim());
    });
}
        </script>
    </body>

    </html>

@endsection