@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Tong quan</h1>
        <!-- <p class="lead">Only authenticated users can access this section.</p>
        <a class="btn btn-lg btn-primary" href="#" role="button">View more tutorials here &raquo;</a> -->
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
                    <!-- <th scope="col">Latlng</th>
                    <th scope="col">User_id</th>
                    <th scope="col">Category_id</th>
                    <th scope="col">District_id</th>
                    <th scope="col">Utilities</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Approve</th> -->
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
                    <!-- <td>{{$row->latlng}}</td>
                    <td>{{$row->user_id}}</td>
                    <td>{{$row->category_id}}</td>
                    <td>{{$row->district_id}}</td>
                    <td>{{$row->utilities}}</td>
                    <td>{{$row->phone}}</td>
                    <td>{{$row->approve}}</td> -->
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
        
        @endauth

        @guest
        <!-- <h1>Homepage</h1>
        <p class="lead">test data</p> -->
        <figure class="figure">
            <img src="images/data-images-696x512.jpg" title="images phong tro demo" class="figure-img img-fluid rounded" alt="data-images-696x512.jpg" style="width: 250px; height:auto;">
            <figcaption class="figure-caption"><a href="#">
                <h3>Phong tro tang 2</h3>
            </a>
            <p>
             test phong tro
            </p>
            </figcaption>
        </figure>
        <figure class="figure">
            <img src="images/data-images-696x512.jpg" title="images phong tro demo" class="figure-img img-fluid rounded" alt="data-images-696x512.jpg" style="width: 250px; height:auto;">
            <figcaption class="figure-caption"><a href="#">
                <h3>Phong tro tang 2</h3>
            </a>
            <p>
             test phong tro
            </p>
            </figcaption>
        </figure>
        <figure class="figure">
            <img src="images/data-images-696x512.jpg" title="images phong tro demo" class="figure-img img-fluid rounded" alt="data-images-696x512.jpg" style="width: 250px; height:auto;">
            <figcaption class="figure-caption"><a href="#">
                <h3>Phong tro tang 2</h3>
            </a>
            <p>
             test phong tro
            </p>
            </figcaption>
        </figure>
        <figure class="figure">
            <img src="images/data-images-696x512.jpg" title="images phong tro demo" class="figure-img img-fluid rounded" alt="data-images-696x512.jpg" style="width: 250px; height:auto;">
            <figcaption class="figure-caption"><a href="#">
                <h3>Phong tro tang 2</h3>
            </a>
            <p>
             test phong tro
            </p>
            </figcaption>
        </figure>
        @endguest
    </div>
@endsection
