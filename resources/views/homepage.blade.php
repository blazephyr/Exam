<!DOCTYPE html>
<html lang="en">

    @include('layouts.head')

<body>

    <div id="wrapper">

     @include('layouts.nav')

        <div id="page-wrapper">

            <div class="container-fluid">
             
                <!-- Page Heading -->
                <div class="row center-block">
                    <div class="col-lg-12" style="min-height:100vh">
                        {{-- <h1 class="page-header"> --}}
                        <br>   <br>   <br>   <br>   <br> 
                            <h1 class="text-center">
                       Welcome to SongSite<Br>
                            <small>{{ auth()->user()->name }}</small>
                        </h1>
                        {{-- <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol> --}}
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
