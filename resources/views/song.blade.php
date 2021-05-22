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
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ session('status') }}
                        </div>
                 
                        @endif
                
                       
                         <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <h1 class="page-header">
                     
                                {{-- <h1 class="text-center"> --}}
                     <div>
                         
                      
                {{$song[0]->title}}<Br>
                                <small> Author :{{$song[0]->artist}}</small>
                            </h1>  
                        <ul class="list-group">
                           <p>

                            {{$song[0]->lyrics}}
                           </p>
                        
                          </ul>
                          <a href="/songs/{{$song[0]->id}}/delete" onclick="return confirm('Remove this song from SongSite?')"><i class="fa fa-trash fa-2x" style="float:right;" aria-hidden="true"></i></a><a href="/songs/{{$song[0]->id}}/edit" onclick="return confirm('Remove this song from SongSite?')"><i class="fa fa-pencil fa-2x" style="float:right;margin-right:3%;" aria-hidden="true"></i></a>
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
