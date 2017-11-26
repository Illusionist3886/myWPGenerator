@extends('myGenCore/master')
@section('title', 'welcome to wp generator')
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Template File List</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="">style.css</a></li>
                        <li><a href="">rtl.css</a></li>
                        <li><a href="">index.php</a></li>
                        <li><a href="">comments-popup.php</a></li>
                        <li><a href="">header.php</a></li>
                        <li><a href="">sidebar.php</a></li>
                        <li><a href="">footer.php</a></li>
                        <li><a href="">comments.php</a></li>
                        <li><a href="">front-page.php</a></li>
                        <li><a href="">home.php</a></li>
                        <li><a href="">single.php</a></li>
                        <li><a href="">single-{post-type}.php</a></li>
                        <li><a href="">page.php</a></li>
                        <li><a href="">category.php</a></li>
                        <li><a href="">tag.php</a></li>
                        <li><a href="" class="text-danger">taxonomy.php</a></li>
                        <li><a href="">author.php</a></li>
                        <li><a href="">date.php</a></li>
                        <li><a href="">archive.php</a></li>
                        <li><a href="">search.php</a></li>
                        <li><a href="">attachment.php</a></li>
                        <li><a href="">image.php</a></li>
                        <li><a href="">404.php</a></li>
                        <li><a href="">screenshot.png [600X450]</a></li>
                    </ul>
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

    </body>

    </html>

@endsection