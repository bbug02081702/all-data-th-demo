<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Quan ly danh sach phong tro</title>
  </head>
  <body>
    <h1 class="text-center mt-4">Quan ly danh sach phong tro</h1>


    <div class="container">
        <div class="card">
            <div class="card-body">
            <a href = "/manager-add-motel" type="button" class="btn btn-success">Them</a>
            @if($message = Session::get('Thongbao'))
            <div class="alert alert-success" role="alert">
                  {{$message}}
            </div>
            @endif
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Images</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Area</th>
                    <th scope="col">Count view</th>
                    <th scope="col">Address</th>
                    <th scope="col">Latlng</th>
                    <th scope="col">User_id</th>
                    <th scope="col">Category_id</th>
                    <th scope="col">District_id</th>
                    <th scope="col">Utilities</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Approve</th>
                    <th scope="col">Action</th>
                    </tr>
     
                </thead>
                @foreach($data as $row)
                <tbody>
                    <tr>
                    <th scope ="row">{{$row->id}}</th>
                    <td>
                      <img src="{{asset('/photocreate' .$row->images)}}" style="width:56px;" alt="">
                    </td>
                    <td>{{$row->title}}</td>
                    <td>{{$row->description}}</td>
                    <td>{{$row->price}}</td>
                    <td>{{$row->area}}</td>
                    <td>{{$row->count_view}}</td>
                    <td>{{$row->address}}</td>
                    <td>{{$row->latlng}}</td>
                    <td>{{$row->user_id}}</td>
                    <td>{{$row->category_id}}</td>
                    <td>{{$row->district_id}}</td>
                    <td>{{$row->utilities}}</td>
                    <td>{{$row->phone}}</td>
                    <td>{{$row->approve}}</td>
                    <td>
                    <a href = "manager-edit-motel/{{$row->id}}" type="button" class="btn btn-info">Sua</a>
                    <a href = "manager-delete-motel/{{$row->id}}" type="button" class="btn btn-danger">Xoa</a>
                    </td>
                    </tr>
                </tbody>
                @endforeach
                </table>
                {{$data->links()}}
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>