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
                        
                         <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <h1 class="page-header">
                     
                                {{-- <h1 class="text-center"> --}}
                     Add a Song on SongSite<Br>
                       
                            </h1>   
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ session('status') }}
                            </div>
                            @elseif(session('failed'))
                            <div class="alert alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ session('failed') }}
                            </div>
                            @endif
                            <form action="{{url('songs')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label for="title">Title:</label>
                                  <input type="text" class="form-control" name="title" id="title">
                                </div>
                                <div class="form-group">
                                  <label for="artist">Artist:</label>
                                  <input type="text" class="form-control" name="artist" id="artist">
                                </div>
                                <div class="form-group">
                                    <label for="lyrics">Lyrics:</label>
                                    <textarea  class="form-control" id="lyrics"  name="lyrics" style="min-height:70vh"></textarea>
                                  </div>
                                <div class="checkbox">
                                 
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                              </form>


                        </div>  <div class="col-md-2"></div>
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
