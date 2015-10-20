<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "Spread Electric s.a." }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{ asset("bower_components/admin-lte/plugins/ionicons-2.0.1/css/ionicons.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("bower_components/admin-lte/plugins/font-awesome-4.4.0/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("css/app.css") }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("css/adminLTE.css")}}" rel="stylesheet" type="text/css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
    <!-- AdminLTE Admin-ltee have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset("css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue sidebar-mini sidebar-collapse fixed">
<div class="wrapper">
    <!-- Header -->
    @include('header')

            <!-- Sidebar -->
    @include('sidebar')
            <!-- The sidebar container -->
    <!-- Two skins are available control-sidebar-dark and control-sidebar-light -->
    <div class="control-sidebar control-sidebar-dark">
        <!-- Place the content of the sidebar here -->
    </div>
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar and should be left empty. -->
    <div class='control-sidebar-bg'></div>
            <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $page_title or "Page Title" }}
                <small>{{ $page_description or null }}</small>
            </h1>
            <!-- You can dynamically generate breadcrumbs here -->
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
            @include('partials.menu')
        </section>

        <!-- Main content -->
        <section class="content row">

            <!-- Your Page Content Here -->
            @yield('content')

        </section><!-- /.content -->


    </div><!-- /.content-wrapper -->



</div><!-- ./wrapper -->
<!-- Footer -->
@include('footer')
<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.3 -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/admin-lte/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("/bower_components/admin-lte/plugins/slimScroll/jquery.slimscroll.js") }}" type="text/javascript"></script>
<!-- AdminLTE admin-lte-->
<script src="{{ asset ("/bower_components/admin-lte/dist/js/app.js") }}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
            <script src="{{asset("/bower_components/admin-lte/plugins/select2/select2.js") }}"></script>
                <script>
                    $('#flash-overlay-modal').modal();
//                    $('div.alert').not('.alert-important').delay(3000).slideup(300);
                    $('select').select2({width:'100%'});
                    function fillSelect(data, object) {
                        object.empty();
                        $.each(data, function (key, element) {
                            object.append($('<option>', {
                                value: key,
                                text: element
                            }));
                        });
                    }
                    function getLIstForSelect(reference,url,fillable) {
                        var id = reference.val();
                        return  $.ajax({
                            url: url + id,
                            type: "GET",
                            dataType: 'json',
                            success: function (data) {

                                fillSelect(data,fillable);
                            }
                        });
                    }
                        function deleter (element){

                       var url = '/'+$(element).attr('deleter')+'/'+$(element).val();
                        $.ajax({
                            url: url,
                            type: "POST",
                            data: {
                                _method: 'DELETE',
                                _token: $(element).attr('token'),
                                id:$(element).val()
                            },
                            success: function (data) {
                                var urlredirect = '/'+$(element).attr('deleter')
                         }
                        });
                    }
                    $('button[name=delete]').click(function(){
                       deleter(this);
                        $($(this).attr('container')+'#'+$(this).attr('value')).remove();
                    });
                </script>
        @yield('jscript')

    </body>
</html>
