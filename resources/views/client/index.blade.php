<!-- HEADER -->
@include('partials._client_header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="m-0">'{{ $name }}' Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
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
            <!-- Small boxes (Stat box) -->
            <div class="row">
                {{-- <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#top_up_modal">Top up Wallet</a>
                <div class="modal fade" id="top_up_modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Wallet Top up Form</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form action="/topup/" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="pet_owner">Payment Method</label>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary justify-right">Top up</button>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- <p>Modules</p> -->
                <!-- <a class="btn btn-app bg-success" href="/suppliers">
                  <span class="badge bg-purple">11</span>
                  <i class="fas fa-users"></i> categories
                </a>
                <a class="btn btn-app bg-primary" href="/suppliers">
                  <span class="badge bg-purple">11</span>
                  <i class="fas fa-users"></i> Suppliers
                </a>
                <a class="btn btn-app bg-secondary" href="/item">
                  <span class="badge bg-success">300</span>
                  <i class="fas fa-barcode"></i> Items
                </a>
                <a class="btn btn-app bg-warning" href="/receive">
                  <span class="badge bg-info">12</span>
                  <i class="fas fa-envelope"></i> Receivings
                </a>
                <a class="btn btn-app bg-danger" href="/sale">
                  <span class="badge bg-teal">67</span>
                  <i class="fas fa-inbox"></i> Requisition
                </a> -->
                <!-- <a class="btn btn-app bg-success">
                  <span class="badge bg-purple">891</span>
                  <i class="fas fa-users"></i> Clients
                </a> -->
                <!-- <a class="btn btn-app bg-info">
                  <span class="badge bg-danger">531</span>
                  <i class="fas fa-heart"></i> Sale
                </a> -->
            </div>
        </div>
        <hr>
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $total_pets }}</h3>

                        <p>Pets</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-paw"></i>
                    </div>
                    <a href="/pets" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                {{-- <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                    <div class="inner"></div>
                        <h3>{{ $total_items }}</h3>
                        <p>Items</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="/item" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div> --}}
                <!-- ./col -->
                {{-- <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $total_suppliers }}</h3>

                        <p>Suppliers</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="/suppliers" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div> --}}
                <!-- ./col -->
                {{-- <div class="col-lg-3 col-6">
                    <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3>{{ $total_requisitions }}</h3>

                        <p>Requisitions</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-plus"></i>
                    </div>
                    <a href="/requisitions" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div> --}}
                <!-- ./col -->
                {{-- <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $total_receivings }}</h3>

                        <p>Receivings</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div> --}}
                <!-- ./col -->
            </div>
            <!-- /.row -->

            <hr>

            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 col-sm-12 connectedSortable">
                    {!! $pets_registration_chart->container() !!}
                    <script src="{{ $pets_registration_chart->cdn() }}"></script>
                    {{ $pets_registration_chart->script() }}
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
