@extends('myGenCore/master')
@section('title', 'Add Theme Support')
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Post Query</h3>
                    <ul>
                        <li><a href="https://developer.wordpress.org/reference/functions/add_theme_support/" target="_blank" class="btn btn-link">Add Theme Support Reference</a></li>
                    </ul>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <pre id="DefaultFunc">function <span id="funname">delowar_default_functions</span>()
{<span id="addthemesupportdata"></span>
}
add_action('after_setup_theme','<span id="funcname">delowar_default_functions</span>');
</pre>     
                </div>
                <div class="col-md-12">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <form action="">
                            <td class="col-md-8">
                                <input type="text" id="funcnameinput" placeholder="Function Name" class="form-control">
                            </td>
                            </form>
                            <td>
                                <button class="btn btn-primary btn-block text-center pull-right" onclick="commentfunc()">
                                    Generate Base Function
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-success defaultfunct" data-clipboard-target="#DefaultFunc">
                                    Copy Function
                                </button>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-stripe table-bordered">
                        <tr>
                            <th colspan="6" class="text-center">Click Any Button to Generate Respective Function</th>
                        </tr>
                        <tr>
                            <td>
                                <button class="btn btn-primary btn-block text-center" onclick="titletag()">
                                    Title Tag
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-block text-center" onclick="postthumbnail()">
                                    Post Thumbnail
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-info btn-block text-center" onclick="custombackground()" title="Can Pass some default arguments">
                                    Custom Background
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-info btn-block text-center" onclick="customheader()" title="Can Pass some default arguments">
                                    Custom Header
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-warning btn-block text-center" onclick="textdomain()" title="not added">
                                    Text Domain
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button class="btn btn-warning btn-block text-center" onclick="postformat()" title="Some default argumetns">
                                    Post Format
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-primary btn-block text-center" onclick="html5()">
                                    HTML5
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-block btn-info text-center" onclick="customlogo()" title="Have some default argumetns">
                                    Custom Logo
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-warning btn-block text-center" onclick="startercontent()" title="not added">
                                    Starter Content
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
            var clipboard = new Clipboard('.defaultfunct');

            function commentfunc()
            {
                document.getElementById("funname").innerHTML = document.getElementById("funcnameinput").value;
                document.getElementById("funcname").innerHTML = document.getElementById("funcnameinput").value;
            }

            function titletag()
            {
                var myVal = "<br/>\tadd_theme_support( 'title-tag' );";
                $("#addthemesupportdata").append(myVal)
            }

            function postthumbnail()
            {
                var myVal = "<br/>\tadd_theme_support( 'post-thumbnails' );";
                $("#addthemesupportdata").append(myVal)
            }

            function custombackground()
            {
                var myVal = "<br/>\tadd_theme_support( 'custom-background' );";
                $("#addthemesupportdata").append(myVal)
            }

            function customheader()
            {
                var myVal = "<br/>\tadd_theme_support( 'custom-header' );";
                $("#addthemesupportdata").append(myVal)
            }

            function postformat()
            {
                var myVal = "<br/>\tadd_theme_support( 'post-formats' );";
                $("#addthemesupportdata").append(myVal)
            }

            function html5()
            {
                var myVal = "<br/>\tadd_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );";
                $("#addthemesupportdata").append(myVal)
            }

            function customlogo()
            {
                var myVal = "<br/>\tadd_theme_support( 'custom-logo' );";
                $("#addthemesupportdata").append(myVal)
            }

            function startercontent()
            {
                var myVal = "<br/>\tadd_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );";
                $("#addthemesupportdata").append(myVal)
            }
            
            function textdomain()
            {
                var myVal = "<br/>\tadd_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );";
                $("#addthemesupportdata").append(myVal)
            }



        </script>
    </body>

    </html>

@endsection