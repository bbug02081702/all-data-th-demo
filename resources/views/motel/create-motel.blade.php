<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 class="text-center mt-4">Them danh sach motel</h1>


    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="/manager-store-motel" method="post" enctype="mutilpart/form-data" >
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title:</label>
                        <input type="text" class="form-control" name= "title" id="exampleFormControlInput1" placeholder="Nhap title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Description:</label>
                        <input type="text" class="form-control" name= "description" id="exampleFormControlInput1" placeholder="Nhap decription">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Price:</label>
                        <input type="text" class="form-control" name= "price" id="exampleFormControlInput1" placeholder="Nhap price">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Area:</label>
                        <input type="text" class="form-control" name= "area" id="exampleFormControlInput1" placeholder="Nhap area">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Count view:</label>
                        <input type="text" class="form-control" name= "count_view" id="exampleFormControlInput1" placeholder="Nhap count view">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Address:</label>
                        <input type="text" class="form-control" name= "address" id="exampleFormControlInput1" placeholder="Nhap address">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Latlng:</label>
                        <input type="text" class="form-control" name= "latlng" id="exampleFormControlInput1" placeholder="Nhap latlng">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">User_id:</label>
                        <input type="text" class="form-control" name= "user_id" id="exampleFormControlInput1" placeholder="Nhap user-id">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Category_id:</label>
                        <input type="text" class="form-control" name= "categroy_id" id="exampleFormControlInput1" placeholder="Nhap category_id">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">District_id:</label>
                        <input type="text" class="form-control" name= "district_id" id="exampleFormControlInput1" placeholder="Nhap district_id">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Utilities:</label>
                        <input type="text" class="form-control" name= "utilities" id="exampleFormControlInput1" placeholder="Nhap utilities">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone:</label>
                        <input type="text" class="form-control" name= "utilities" id="exampleFormControlInput1" placeholder="Nhap phone">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Approve:</label>
                        <input type="text" class="form-control" name= "approve" id="exampleFormControlInput1" placeholder="Nhap approve">
                    </div>
                    <div class="mb-3">
                        <input type="file" class="form-control" name= "images" id="exampleFormControlInput1" >
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Dong y</button>
                    </div>
                    <div class="col-auto">
                        <a href = "/manager-motel" type="button" class="btn btn-success">Tro ve</a>
                    </div>
                </form>
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