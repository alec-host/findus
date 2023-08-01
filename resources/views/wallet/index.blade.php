<!-- HEADER -->
@include('partials._client_header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="m-0">My Wallet</h1>
                </div><!-- /.col -->
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Wallet</li>
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
                <section class="col-lg-12 col-sm-12 connectedSortable">
                    <div class="row">
                        <div class="col-12">
                            <!-- Custom Tabs -->
                            <div class="card">
                                <div class="card-header d-flex p-0">
                                    <h3 class="card-title p-3">WALLET</h3>
                                    <ul class="nav nav-pills ml-auto p-2">
                                        <li class="nav-item"><a class="nav-link active" href="#instant_deposit" data-toggle="tab">Instant Deposit</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#paybill_instructions" data-toggle="tab">Manual Deposit</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#transaction_history" data-toggle="tab">History</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#legal_policies" data-toggle="tab">Legal Policies</a></li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="instant_deposit">
                                            <!-- form start -->
                                            <form action="/deposit/client->id" method="POST" enctype="multipart/form-data">
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
                                                                <label for="amount">AMOUNT(KES)<span style="color: #ff0000">*</span></label>
                                                                <input type="number" class="form-control" id="amount" placeholder="" name="amount" value="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.card-body -->

                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary float-left">DEPOSIT</button>
                                                    <br />
                                                    <div class="mt-4"><hr class="mb-2">Having difficulties?&nbsp;<button class="btn btn-dark btn-sm" href="#paybill_instructions" data-toggle="tab">Try Manual Deposit</button></div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="paybill_instructions">
                                            <div class="css-59xhet" style="
                                                border-radius: 4px;
                                                border-width: 3px;
                                                border-color: rgb(64, 64, 64);
                                                border-style: solid;
                                                margin-bottom: 12px;
                                                padding: 16px 20px;">
                                                <div>
                                                    <div><strong>NOTE:</strong>
                                                        <ul class="css-ag2rqr" style="font-style: italic;
                                                        padding-inline-start: 16px;
                                                        margin-block-end: 0px">
                                                            <li>Minimum deposit amount is KES 100</li>
                                                            <li>You can ONLY deposit using the same phone number you use to login.</li>
                                                            {{-- <li>You can not deposit while you have an active bonus</li> --}}
                                                        </ul>
                                                    </div>
                                                    <div class="mt-3"><strong>STEPS:</strong>
                                                        <ol class="css-13iqyf4" style="padding-inline-start: 16px;
                                                        margin-block-end: 0px;">
                                                            <li>Go to M-PESA on your phone</li>
                                                            <li>Select Pay Bill option</li>
                                                            <li>Enter Business no. <strong style="font-weight: 700; font-size: 1.1em; color: rgb(229, 137, 41);">XXXXXX</strong> (FINDUSCHIPUS)</li>
                                                            <li>Enter Account no. <strong style="font-weight: 700; font-size: 1.1em; color: rgb(229, 137, 41);">UVUA4</strong></li>
                                                            <li>Enter the Amount</li>
                                                            <li>Enter your M-PESA PIN and Send</li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="transaction_history">
                                            <div class="card-body">
                                                <table id="category_tbl" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Narrationb</th>
                                                        <th>Status</th>
                                                        <th>Amount (KES)</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- @foreach ($pets as $cat) --}}
                                                        {{-- @if ($client_id == $cat->owner_id) --}}
                                                            <tr>
                                                                <td>TXN#001</td>
                                                                <td>Wallet top up</td>
                                                                <td>SUCCESS</td>
                                                                <td><span style="color: green;">100</span></td>
                                                                <td><span class="direct-chat-timestamp">Wed, 1 February 2023 at 21:05:03</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>TXN#002</td>
                                                                <td>Pet Registration</td>
                                                                <td>SUCCESS</td>
                                                                <td><span style="color: red;">-50</span></td>
                                                                <td><span class="direct-chat-timestamp">Wed, 1 February 2023 at 12:11:09</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>TXN#003</td>
                                                                <td>Pet Transfer</td>
                                                                <td>SUCCESS</td>
                                                                <td><span style="color: red;">-50</span></td>
                                                                <td><span class="direct-chat-timestamp">Wed, 1 February 2023 at 12:09:25</span></td>
                                                            </tr>
                                                        {{-- @endif --}}
                                                    {{-- @endforeach --}}
                                                </tbody>
                                                </table>
                                            </div>
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