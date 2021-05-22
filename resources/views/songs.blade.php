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
                        <h1 class="page-header">
                     
                            {{-- <h1 class="text-center"> --}}
                     All Songs on SongSite<Br>
                   
                        </h1>     
                         {{-- <div class="col-md-2"></div> --}}
                        <div class="col-md-12">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ session('status') }}
                            </div>
                     
                            @endif


                            <table id="example" class="table table-bordered table-hover" style="width:100%">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Song Title</th>
                                        <th>Artist</th>
                                        <th>Date Added/Created</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($songs as $song)
                                    <tr data-link="{{'songs/'.$song->id}}">
                                        <td>{{$song->title}}</td>
                                       <td>{{$song->artist}}</td>
                                      <td>{{$song->created_at}}</td>
                                       
                                    </tr>
                                    @endforeach
                                   
                         
                                </tbody>
                               
                            </table>


                        {{-- <ul class="list-group">
                            @foreach ($songs as $song)
                           <a href="{{'songs/'.$song->id}}" style="text-decoration:none;"><li class="list-group-item">{{$song->title}}</li></a> 
                           @endforeach
                        
                          </ul> --}}
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

    <script>



$(function() {
  $("table tr").click(function(e) {
    var u = $(this).data("link");
   
  
   
      window.location.href = u;
  
  });
});
    </script>

</body>

</html>
