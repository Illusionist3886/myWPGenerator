@extends('myGenCore/master')
@section('title', 'style.css Generator')
@section('content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Style CSS</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <form action="">
                    <div class="col-md-6">
                        
                            <input type="text" name="" id="themenamei" class="form-control" placeholder="Theme Name"> <br>
                            <input type="text" name="" id="themeurii" class="form-control" placeholder="Theme URI"> <br>
                            <input type="text" name="" id="authori" class="form-control" placeholder="Author"> <br>
                            <input type="text" name="" id="authorurii" class="form-control" placeholder="Author URI"> <br>
                            <input type="text" name="" id="versioni" class="form-control" placeholder="Version"> <br>
                            <textarea class="form-control" placeholder="Description" id="descriptioni"></textarea><br>
                            <input type="button" value="Generate" class="btn btn-primary" onclick="delowar()">
                            

                    </div>
                    <div class="col-md-6">
                        
                            <input type="text" name="" id="licensei" class="form-control" placeholder="License"> <br>
                            <input type="text" name="" id="licenseurii" class="form-control" placeholder="License URI"> <br>
                            <textarea class="form-control" placeholder="Tags" id="tagsi"></textarea><br>
                            <input type="text" name="" id="textdomaini" class="form-control" placeholder="Text Domain"> <br>
                            <textarea class="form-control" placeholder="Extra Description" id="extradesci"></textarea><br>
                    </div>
                </form>
                    
                
            </div>
            <div class="row">
                <div class="col-md-12">
                    <pre id="style-basic">/*
Theme Name: <span id="themename"></span>
Theme URI: <span id="themeuri"></span>
Author: <span id="author"></span>
Author URI: <span id="authoruri"></span>
Description: <span id="description"></span>
Version: <span id="version"></span>
License: <span id="license"></span>
License URI: <span id="licenseuri"></span>
Tags: <span id="tags"></span>
Text Domain: <span id="textdomain"></span>

<span id="extradesc"></span>
*/
                    </pre>
                    <button class="btn btn-success dell" data-clipboard-target="#style-basic">
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
        <script>
            function delowar()
            {
                document.getElementById("themename").innerHTML=document.getElementById("themenamei").value;
                document.getElementById("themeuri").innerHTML=document.getElementById("themeurii").value;
                document.getElementById("author").innerHTML=document.getElementById("authori").value;
                document.getElementById("authoruri").innerHTML=document.getElementById("authorurii").value;
                document.getElementById("description").innerHTML=document.getElementById("descriptioni").value;
                document.getElementById("version").innerHTML=document.getElementById("versioni").value;
                document.getElementById("license").innerHTML=document.getElementById("licensei").value;
                document.getElementById("licenseuri").innerHTML=document.getElementById("licenseurii").value;
                document.getElementById("tags").innerHTML=document.getElementById("tagsi").value;
                document.getElementById("textdomain").innerHTML=document.getElementById("textdomaini").value;
                document.getElementById("extradesc").innerHTML=document.getElementById("extradesci").value;
            }
        </script>

    </body>

    </html>

@endsection