<!-- HEADER -->
@include('partials._client_header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="m-0">'{{$name}}' Pets</h1>
                </div><!-- /.col -->
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Pets</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if (Session::has('success'))
                        <div class="alert alert-success text-[#16a34a]" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-success text-[#ff0000]" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                </div>
            </div>

            <!-- New Category row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-4 col-sm-12 connectedSortable">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">New Pet</h3>
                            </div>
                            <!-- /.card-header -->

                            <!-- form start -->
                            <form action="/add-pet" method="POST">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger text-[#ff0000]">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="category_name">Pet Name<span style="color: #ff0000;">*</span></label>
                                        <input type="text" class="form-control" id="name" placeholder="" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="category_name">Pet microchip no.<span style="color: #ff0000;">*</span></label>
                                        <input type="text" class="form-control" id="microchip_no" placeholder="" name="microchip_no" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="category_name">Pet Coat Color<span style="color: #ff0000;">*</span></label>
                                        <input type="text" class="form-control" id="coat_color" placeholder="" name="coat_color" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="category_name">Pet Age<span style="color: #ff0000;">*</span></label>
                                        <input type="text" class="form-control" id="age" placeholder="" name="age" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="category_name">Pet Gender<span style="color: #ff0000;">*</span></label>
                                        <input type="text" class="form-control" id="gender" placeholder="" name="gender" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="category_name">Pet Species<span style="color: #ff0000;">*</span></label>
                                        <input type="text" class="form-control" id="species" placeholder="" name="species" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="category_name">Pet Breed<span style="color: #ff0000;">*</span></label>
                                        <input type="text" class="form-control" id="breed" placeholder="" name="breed" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="category_name">Clinic Registered<span style="color: #ff0000;">*</span></label>
                                        <input type="text" class="form-control" id="clinic_registered" placeholder="" name="clinic_registered" required>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <!-- /.Left col -->
                <!-- Right col -->
                <section class="col-lg-8 col-sm-12 connectedSortable">
                    <!-- Categories Table -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Categories</h3>
                            <!-- <a href="/new-category" class="btn btn-sm btn-primary float-right">Add New Category</a> -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="category_tbl" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Microchip no.</th>
                                    <th>Time Added</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pets as $cat)
                                    @if ($client_id == $cat->owner_id)
                                        <tr>
                                            <td>PET#{{$cat->id}}</td>
                                            <td>{{$cat->name}}</td>
                                            <td>{{$cat->microchip_no}}</td>
                                            <td><span class="direct-chat-timestamp">{{$cat->created_at}}</span></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#transfer_pet_{{$cat->id}}_modal"><i class="fas fa-exchange-alt"></i></a>
                                                    <div class="modal fade" id="transfer_pet_{{$cat->id}}_modal">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h4 class="modal-title">Pet Transfer Form</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- form start -->
                                                                    <form action="/transfer-pet/{{$cat->id}}" method="POST">
                                                                        @csrf
                                                                        <div class="card-body">
                                                                            <div class="form-group">
                                                                                <label for="pet_owner"><span style="color: #ff0000;">*</span>Transfer "{{ $cat->name }}" to: <span style="color: #ff0000;">*</span></label>
                                                                                {{-- <input type="text" class="form-control" id="name" placeholder="" name="name" value=""> --}}
                                                                                <select id="pet_owner" class="form-control" name="pet_owner" required>
                                                                                    <option value="">--</option>
                                                                                    @foreach($pet_owners as $pet_owner)
                                                                                        <option value="{{$pet_owner->email}}">{{$pet_owner->name}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.card-body -->

                                                                        <div class="card-footer">
                                                                            <button type="submit" class="btn btn-primary justify-right">TRANSFER</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>

                                                    <!-- <a href="/update-category/{{$cat->id}}" class="btn btn-primary"><i class="far fa-edit"></i></a> -->
                                                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#edit_pet_{{$cat->id}}_modal"><i class="far fa-edit"></i></a>
                                                    <div class="modal fade" id="edit_pet_{{$cat->id}}_modal">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h4 class="modal-title">'{{$cat->name}}' Profile</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- form start -->
                                                                    <form action="/update-pet/{{$cat->id}}" method="POST">
                                                                        @csrf
                                                                        <div class="card-body">
                                                                            <div class="form-group">
                                                                                <label for="category_name">Pet Name<span style="color: #ff0000;">*</span></label>
                                                                                <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{$cat->name}}">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="category_name">Pet microchip no.<span style="color: #ff0000;">*</span></label>
                                                                                <input type="text" class="form-control" id="microchip_no" placeholder="" name="microchip_no" value="{{$cat->microchip_no}}">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="category_name">Pet Coat Color<span style="color: #ff0000;">*</span></label>
                                                                                <input type="text" class="form-control" id="coat_color" placeholder="" name="coat_color" value="{{$cat->coat_color}}">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="category_name">Pet Age<span style="color: #ff0000;">*</span></label>
                                                                                <input type="text" class="form-control" id="age" placeholder="" name="age" value="{{$cat->age}}">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="category_name">Pet Gender<span style="color: #ff0000;">*</span></label>
                                                                                <input type="text" class="form-control" id="gender" placeholder="" name="gender" value="{{$cat->gender}}">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="category_name">Pet Species<span style="color: #ff0000;">*</span></label>
                                                                                <input type="text" class="form-control" id="species" placeholder="" name="species" value="{{$cat->species}}">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="category_name">Pet Breed<span style="color: #ff0000;">*</span></label>
                                                                                <input type="text" class="form-control" id="breed" placeholder="" name="breed" value="{{$cat->breed}}">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="category_name">Clinic Registered<span style="color: #ff0000;">*</span></label>
                                                                                <input type="text" class="form-control" id="clinic_registered" placeholder="" name="clinic_registered" value="{{$cat->clinic_registered}}">
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.card-body -->

                                                                        <div class="card-footer">
                                                                            <button type="submit" class="btn btn-primary ">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->
                                                    <!-- <a class="btn btn-danger" onclick="delete_category_fxn()">Delete</a> -->
                                                    <a href="/delete-pet/{{$cat->id}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                            <!-- <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Time Added</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot> -->
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <a onclick="history.go(-1)" href="javascript:void(0)" class="btn btn-sm btn-warning float-left">Back</a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </section>
                <!-- /.right col -->
            </div>
            <!-- /.row ( New Category row) -->

            <!-- Main row -->
            <div class="row">
            </div>
            <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- FOOTER START -->
@include('partials._client_footer')
