<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<form action="{{route('product.save')}}" method="post" enctype="multipart/form-data">
    @csrf
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Product Name</label>
            <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Name">
        </div>

    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">Created By</label>
            <select class="form-control" id="exampleFormControlSelect1" name="created_by">
                <option value="0">Select Created By</option>
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="exampleFormControlSelect1">Created By</label>
            <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                <option value="0">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputPassword4">Price</label>
            <input type="text" class="form-control" id="inputPassword4"  name="price" placeholder="Price">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
