<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>E-Learning</title>
    <!-- BOOTSTRAP CORE STYLE  -->
  {!!Html::style('assets/css/bootstrap.css')!!}
  {!!Html::style('assets/css/font-awesome.css')!!}
  {!!Html::style('assets/css/style.css')!!}

  {!!Html::script('assets/js/tinymce/tiny_mce.js')!!}

<script type="text/javascript">
tinyMCE.init({
// General options
mode : "textareas",
theme : "advanced",

plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",
 
// Theme options
theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
theme_advanced_toolbar_location : "top",
theme_advanced_toolbar_align : "left",
theme_advanced_statusbar_location : "bottom",
theme_advanced_resizing : true,
 
// Example content CSS (should be your site CSS)
content_css : "css/content.css",
 
// Drop lists for link/image/media/template dialogs
template_external_list_url : "lists/template_list.js",
external_link_list_url : "lists/link_list.js",
external_image_list_url : "lists/image_list.js",
media_external_list_url : "lists/media_list.js",
 
// Style formats
style_formats : [
{title : 'Bold text', inline : 'b'},
{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
{title : 'Example 1', inline : 'span', classes : 'example1'},
{title : 'Example 2', inline : 'span', classes : 'example2'},
{title : 'Table styles'},
{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
],
 
// Replace values for the template plugin
template_replace_values : {
username : "Some User",
staffid : "991234"
}
});
</script>
  

</head>
<body>
    <header>
        <div class="container">
          <div class="btn-group">
                         <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle"> <span class="glyphicon glyphicon-bell" ></span> <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                           <li><a href="#">You have no message</a></li>
                                 </ul>
                                 </div>
                    
                 <div class="btn-group">
                     <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="glyphicon glyphicon-user"></span>&nbsp; {{ Auth::guard('dosen')->user()->nama }} <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                             <li><a href="{{url('/profiledosen')}}"> <span class="glyphicon glyphicon-user"></span> &nbsp; Profile</a></li>
                              <li><a href="{{url('/keluar')}}"> <span class="glyphicon glyphicon-log-out"></span> &nbsp; Logout</a></li>
                                 </ul>
                                 </div>

                </div>

        
    </header>
    <!-- HEADER END-->
      {!! Html::image('img/logo.jpg') !!}

    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="{{ URL::to('/homedosen') }}">Home</a></li>
                             <li><a href="{{ URL::to('/pengumuman') }}">Pengumuman</a></li>
                           <!--  <li><a href="{{ URL::to('/jadwal') }}">Jadwal</a></li> -->
                            <li><a href="{{ URL::to('/bahanajardosen') }}">Bahan Ajar</a></li>
                            <!-- <li><a href="{{ URL::to('/materi') }}">Materi</a></li> -->
                            <li><a href="{{ URL::to('/bahanajartugasdosen') }}">Tugas</a></li>
                            <li><a href="{{ route('kuis') }}">Kuis</a></li>
                                                     

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  
                            @yield('content')
                </div>

            </div>
           
         
           
   
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2018 E-Learning | By : Politeknik Caltex Riau</a>
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
 {!!Html::script('assets/js/jquery-1.11.1.js')!!}
 {!!Html::script('assets/js/bootstrap.js')!!}

</body>
</html>
