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
                                <button class="btn btn-info btn-block text-center" data-toggle="modal" data-target="#custombg" title="Can Pass some default arguments">
                                    Custom Background
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-info btn-block text-center" data-toggle="modal" data-target="#customhead" title="Can Pass some default arguments">
                                    Custom Header
                                </button>
                            </td>
                            <td>
                                <button class="btn btn-info btn-block text-center" data-toggle="modal" data-target="#textdom" title="Can Pass some default arguments">
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
                                <button class="btn btn-info btn-block text-center" data-toggle="modal" data-target="#customlog" title="Can Pass some default arguments">
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
            <div class="row">
                <div class="col-md-8">
                      <!-- Modal Custom Background -->
                      <div class="modal fade" id="custombg" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Custom Background</h4>
                            </div>
                            <div class="modal-body">
                              <p>Some text in the modal.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" onclick="custombackground()" data-dismiss="modal">Generate Basic</button>
                                <button type="button" class="btn btn-primary">Generate Advance</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>

                      <!-- Modal Custom Header-->
                      <div class="modal fade" id="customhead" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Custom Header</h4>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                  <div class="col-md-4">
                                      <input type="text" id="defaultimageinput" class="form-control" placeholder="default-image" /> <br>
                                  </div>
                                  <div class="col-md-4">
                                      <input type="text" id="randomdefaultinput" class="form-control" placeholder="random-default[boolean]" /> <br>
                                  </div>
                                  <div class="col-md-4">
                                      <input type="text" id="headerwidthinput" class="form-control" placeholder="Width [No px]" /> <br>
                                  </div>
                                  <div class="col-md-4">
                                      <input type="text" id="headerheightinput" class="form-control" placeholder="Height [No px]" /> <br>
                                  </div>
                                  <div class="col-md-4">
                                      <input type="text" id="headerflexheightinput" class="form-control" placeholder="Flex Height [boolean]" /> <br>
                                  </div>
                                  <div class="col-md-4">
                                      <input type="text" id="headerflexwidthinput" class="form-control" placeholder="Flex Width [boolean]" /> <br>
                                  </div>
                                  <div class="col-md-4">
                                      <input type="text" id="headerdefaulttextcolor" class="form-control" placeholder="Default Text Color" /> <br>
                                  </div>
                                  <div class="col-md-4">
                                      <input type="text" id="" class="form-control" placeholder="" /> <br>
                                  </div>
                                  <div class="col-md-4">
                                      <input type="text" id="" class="form-control" placeholder="" /> <br>
                                  </div>
                                  <div class="col-md-4">
                                      <input type="text" id="" class="form-control" placeholder="" /> <br>
                                  </div>
                                  <div class="col-md-4">
                                      <input type="text" id="" class="form-control" placeholder="" /> <br>
                                  </div>
                                  <div class="col-md-4">
                                      <input type="text" id="" class="form-control" placeholder="" /> <br>
                                  </div>
                                  <div class="col-md-4">
                                      <input type="text" id="" class="form-control" placeholder="" /> <br>
                                  </div>
                                  <div class="col-md-4">
                                      <input type="text" id="" class="form-control" placeholder="" /> <br>
                                  </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" onclick="customheader()" data-dismiss="modal">Generate Basic</button>
                                <button type="button" class="btn btn-primary" onclick="customheaderadvance()" data-dismiss="modal">Generate Advance</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>

                      <!-- Modal Text Domain -->
                      <div class="modal fade" id="textdom" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Theme Text Domain</h4>
                            </div>
                            <div class="modal-body">
                              <input type="text" id="mydomaininput" placeholder="Text Domain Name" class="form-control" > <br>
                              <input type="text" id="folderinput" placeholder="Directory Name" class="form-control" >
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" onclick="textdomain()"  data-dismiss="modal">Generate</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>

                      <!-- Modal Custom Logo-->
                      <div class="modal fade" id="customlog" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Custom Logo</h4>
                            </div>
                            <div class="modal-body">
                              <input type="number" name="" id="logoheightinput" placeholder="Height [Don't put px]" class="form-control"> <br>
                              <input type="number" name="" id="logowidthinput" placeholder="Width [Don't put px]" class="form-control"> <br>
                              <input type="text" name="" id="logoflexheightinput" placeholder="Flex Height [Boolean]" class="form-control"> <br>
                              <input type="text" name="" id="logoflexwidthinput" placeholder=" Flex Width [Boolean]" class="form-control"> <br>
                            </div>
                            <div class="modal-footer">
                               <button type="button" class="btn btn-success" onclick="customlogo()" data-dismiss="modal">Generate Basic</button>
                                <button type="button" class="btn btn-primary" onclick="customlogoadvance()" data-dismiss="modal">Generate Advance</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
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

            function customheaderadvance()
            {
                var getheight = document.getElementById("logoheightinput").value;
                var getwidth = document.getElementById("logowidthinput").value;
                var getflexheight = document.getElementById("logoflexheightinput").value;
                var getflexwidth = document.getElementById("logoflexwidthinput").value;

                var myVal = "<br/>\tadd_theme_support( 'custom-logo', array(<br/>\
                \t'height'\t=>"+getheight+",<br/>\
                \t'width'\t\t=>"+getwidth+",<br/>\
                \t'flex-height'\t=>"+getflexheight+",<br/>\
                \t'flex-width'\t=>"+getflexwidth+",<br/>\
                \t'header-text'\t=>array('site-title','site-description'),<br/>\
                ) );";
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

            function customlogoadvance()
            {
                var getheight = document.getElementById("logoheightinput").value;
                var getwidth = document.getElementById("logowidthinput").value;
                var getflexheight = document.getElementById("logoflexheightinput").value;
                var getflexwidth = document.getElementById("logoflexwidthinput").value;
                var myVal = "<br/>\tadd_theme_support( 'custom-logo', array(<br/>\
                \t'height'\t=>"+getheight+",<br/>\
                \t'width'\t\t=>"+getwidth+",<br/>\
                \t'flex-height'\t=>"+getflexheight+",<br/>\
                \t'flex-width'\t=>"+getflexwidth+",<br/>\
                \t'header-text'\t=>array('site-title','site-description'),<br/>\
                ) );";
                $("#addthemesupportdata").append(myVal)
            }

            function startercontent()
            {
                var myVal = "<br/>\tadd_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );";
                $("#addthemesupportdata").append(myVal)
            }
            
            function textdomain()
            {
                var mydomain = document.getElementById("mydomaininput").value;
                var folder = document.getElementById("folderinput").value;
                var myVal = "<br/>\tload_theme_textdomain( '"+mydomain+"', get_theme_file_uri('"+folder+"' );";
                $("#addthemesupportdata").append(myVal)
            }



        </script>
    </body>

    </html>

@endsection