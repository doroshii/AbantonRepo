@extends('layouts.datatable')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Resolutions<h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('resolutions.index') }}">Resolutions</a></li>
                        <li class="breadcrumb-item active"> Resolution and Issuance Details</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Display Resolution and Issuance Details -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Resolution and Issuance Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <!-- Display Resolution and Issuance Details -->
                            <div>
                                <h5>Title: {{ $resolution->title }}</h5>
                                <p>Memorandum Number: {{ $resolution->memorandum_number }}</p>
                                <p>Description: {{ $resolution->description }}</p>

                                @if ($resolution->photo)
                                    <img src="{{ asset('backend/dist/img/' . $resolution->photo) }}"
                                         alt="Resolution and Issuance Photo" class="img-fluid rounded mx-auto d-block"
                                         style="max-width: 300px; max-height: 300px;">
                                @else
                                    <div class="bg-light d-flex justify-content-center align-items-center rounded"
                                         style="width: 300px; height: 300px;">
                                        <span class="text-muted">No Photo Available</span>
                                    </div>
                                @endif

                                <p>Category: {{ $resolution->category }}</p>
                                <p>File {{ $resolution->file_upload }}</p>

                                <!-- You can add more details based on your actual fields -->

                            </div>

                            <!-- Add additional sections as needed -->

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

<!-- Additional scripts or styles if needed -->