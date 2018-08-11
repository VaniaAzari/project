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
                         <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="glyphicon glyphicon-user"></span>&nbsp; {{ Auth::guard('admin')->user()->nama }} <span class="caret"></span></button>
                        <ul class="dropdown-menu">
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
                            <li><a href="{{ URL::to('/admin') }}">Home</a></li>
                            <li><a href="{{ URL::to('/dosen') }}">Dosen</a></li>
                            <li><a href="{{ URL::to('/mahasiswa') }}">Mahasiswa</a></li>
                            <li><a href="{{ URL::to('/prodi') }}">Data</a></li>
                            <li><a href="{{ URL::to('/matakuliahkelas') }}">Matakuliah Kelas</a></li>

                          
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
