@extends('myGenCore/master')
@section('title', 'General Blog Post Query')
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Post Query</h3>
                    <ul>
                        <li><a href="https://codex.wordpress.org/Function_Reference/comments_popup_link" target="_blank" class="btn btn-link">comments_popup_link</a></li>
                        <li><a href="https://codex.wordpress.org/Function_Reference/the_time" target="_blank" class="btn btn-link">the_time</a></li>
                        <li><a href="http://php.net/manual/en/function.date.php" target="_blank" class="btn btn-link">Time Function</a></li>
                    </ul>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <pre id="PostQuery">&lt;?php 
if ( have_posts() ) :
while(have_posts()) : the_post();
?&gt;

&lt;?php the_post_thumbnail();?&gt;
&lt;?php the_permalink();?&gt;
&lt;?php the_title();?&gt;
&lt;?php the_author();?&gt;
&lt;?php the_time('F d, Y');?&gt;

&lt;?php comments_popup_link('<span id="nocomnt">No Comments</span>','<span id="onecomnt">Single Comment</span>','<span id="multicomments">% comments</span>','<span id="comntclass">Class</span>','<span id="disablecomnt">Comments Off</span>');?&gt;

&lt;?php endwhile;?&gt;
&lt;?php endif;?&gt;
</pre>     
                </div>
                <div class="col-md-12">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <form action="">
                            <td>
                                <input type="text" id="nocomment" placeholder="No Comment" class="form-control">
                            </td>
                            <td>
                                <input type="text" id="singlecomment" placeholder="Single Comment" class="form-control">
                            </td>
                            <td>
                                <input type="text" id="morecomments" placeholder="More Comments" class="form-control">
                            </td>
                            <td>
                                <input type="text" id="commentclass" placeholder="Class" class="form-control">
                            </td>
                            <td>
                                <input type="text" id="commentsoff" placeholder="Comments Off" class="form-control">
                            </td>
                            </form>
                            <td colspan="2">
                                <button class="btn btn-primary pull-right" onclick="commentfunc()">
                                    Generate Menu
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-success postqugen" data-clipboard-target="#PostQuery">
                                    Copy Function
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
            var clipboard = new Clipboard('.postqugen');

            function commentfunc()
            {
                document.getElementById("nocomnt").innerHTML = document.getElementById("nocomment").value;
                document.getElementById("onecomnt").innerHTML = document.getElementById("singlecomment").value;
                document.getElementById("multicomments").innerHTML = document.getElementById("morecomments").value;
                document.getElementById("comntclass").innerHTML = document.getElementById("commentclass").value;
                document.getElementById("disablecomnt").innerHTML = document.getElementById("commentsoff").value;


            }

        </script>
    </body>

    </html>

@endsection