<!-- HEADER -->
@include('partials._client_header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="m-0">'{{$name}}' Settings</h1>
                </div><!-- /.col -->
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Settings</li>
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
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <div class="row">
                        <div class="col-12">
                            <!-- Custom Tabs -->
                            <div class="card">
                                <div class="card-header d-flex p-0">
                                    <h3 class="card-title p-3">General Settings</h3>
                                    <ul class="nav nav-pills ml-auto p-2">
                                        <li class="nav-item"><a class="nav-link active" href="#basic_details" data-toggle="tab">Basic Details</a></li>
                                        {{-- <li class="nav-item"><a class="nav-link" href="#contact_information" data-toggle="tab">Contact Information</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#payment_settings" data-toggle="tab">Wallet Settings</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#legal_policies" data-toggle="tab">Legal Policies</a></li> --}}
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="basic_details">
                                            <!-- form start -->
                                            <form action="/update-client/{{$client->id}}" method="POST" enctype="multipart/form-data">
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
                                                    {{-- <div class="form-group">
                                                        <label for="item_image">Company Logo<span style="color: #ff0000">*</span></label>
                                                        <input id="item_image" type="file" name="item_image" required/>
                                                        <br/>
                                                        <img id="preview" class="product-image" style="width:100px;"/>
                                                    </div> --}}
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="reg_no">Registration no.<span style="color: #ff0000">*</span></label>
                                                                <input type="text" class="form-control" id="reg_no" placeholder="" name="reg_no" value="{{$client->reg_no}}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="name">Name<span style="color: #ff0000">*</span></label>
                                                                <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{$client->name}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="item_location">Client Type</label>
                                                                <select id="item_location" name="item_location" class="form-control" required>
                                                                    <option value="{{$client->user_type}}">{{$client->user_type}}</option>
                                                                    <option value="individual">Individual</option>
                                                                    <option value="clinic">Clinic</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="item_package_type">address<span style="color: #ff0000;">*</span></label>
                                                                <input type="text" class="form-control" id="item_package_type" placeholder="" name="item_package_type" required>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="email">Email<span style="color: #ff0000">*</span></label>
                                                                <input type="email" class="form-control" id="email" name="email" placeholder="" value="{{$client->email}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="phone">Phone<span style="color: #ff0000">*</span></label>
                                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="" value="{{$client->phone}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="county">County<span style="color: #ff0000;">*</span></label>
                                                                <select class="form-control" id="county" name="county">
                                                                    <option value="{{$client->county}}">{{$client->county}}</option>
                                                                    <option value="baringo">Baringo</option>
                                                                    <option value="bomet">Bomet</option>
                                                                    <option value="bungoma">Bungoma</option>
                                                                    <option value="busia">Busia</option>
                                                                    <option value="elgeyo marakwet">Elgeyo Marakwet</option>
                                                                    <option value="embu">Embu</option>
                                                                    <option value="garissa">Garissa</option>
                                                                    <option value="homa bay">Homa Bay</option>
                                                                    <option value="isiolo">Isiolo</option>
                                                                    <option value="kajiado">Kajiado</option>
                                                                    <option value="kakamega">Kakamega</option>
                                                                    <option value="kericho">Kericho</option>
                                                                    <option value="kiambu">Kiambu</option>
                                                                    <option value="kilifi">Kilifi</option>
                                                                    <option value="kirinyaga">Kirinyaga</option>
                                                                    <option value="kisii">Kisii</option>
                                                                    <option value="kisumu">Kisumu</option>
                                                                    <option value="kitui">Kitui</option>
                                                                    <option value="kwale">Kwale</option>
                                                                    <option value="laikipia">Laikipia</option>
                                                                    <option value="lamu">Lamu</option>
                                                                    <option value="machakos">Machakos</option>
                                                                    <option value="makueni">Makueni</option>
                                                                    <option value="mandera">Mandera</option>
                                                                    <option value="meru">Meru</option>
                                                                    <option value="migori">Migori</option>
                                                                    <option value="marsabit">Marsabit</option>
                                                                    <option value="mombasa">Mombasa</option>
                                                                    <option value="muranga">Muranga</option>
                                                                    <option value="nairobi">Nairobi</option>
                                                                    <option value="nakuru">Nakuru</option>
                                                                    <option value="nandi">Nandi</option>
                                                                    <option value="narok">Narok</option>
                                                                    <option value="nyamira">Nyamira</option>
                                                                    <option value="nyandarua">Nyandarua</option>
                                                                    <option value="nyeri">Nyeri</option>
                                                                    <option value="samburu">Samburu</option>
                                                                    <option value="siaya">Siaya</option>
                                                                    <option value="taita_taveta">Taita Taveta</option>
                                                                    <option value="tana_river">Tana River</option>
                                                                    <option value="tharaka_nithi">Tharaka Nithi</option>
                                                                    <option value="trans_nzoia">Trans Nzoia</option>
                                                                    <option value="turkana">Turkana</option>
                                                                    <option value="uasin_gishu">Uasin Gishu</option>
                                                                    <option value="vihiga">Vihiga</option>
                                                                    <option value="wajir">Wajir</option>
                                                                    <option value="pokot">West Pokot</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        {{-- contact_person_nam --}}
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="town">Town<span style="color: #ff0000;">*</span></label>
                                                                <input type="text" class="form-control" id="town" name="town" placeholder="" value="{{$client->town}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="form-group"> --}}
                                                        {{-- <label for="item_description">Terms & Conditions</label> --}}
                                                        <!-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> -->
                                                        {{-- <textarea class="form-control" id="item_description" name="item_description"></textarea> --}}
                                                    {{-- </div> --}}
                                                </div>
                                                <!-- /.card-body -->

                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary float-right">UPDATE</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="payment_settings">
                                            Wallet Work in progress...
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="contact_information">
                                            Email, SMS & Social Media Work in progress...
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="legal_policies">
                                            Terms, Privacy, Licensing & Cookie Policies  Work in progress...
                                        </div>
                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->
                            </div>
                            <!-- ./card -->
                        </div>
                        <!-- /.col -->
                    </div>
                </section>
                <!-- /.Left col -->
            </div>
            <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- FOOTER START -->
@include('partials._client_footer')
