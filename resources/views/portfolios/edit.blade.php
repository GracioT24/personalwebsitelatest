@extends('layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Portfolios</h1>
                    </div><!-- /.col -->
                    {{-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col --> --}}
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                There's some error(s):
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Add Portfolio</h5>

                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the
                                    card's
                                    content.
                                </p>

                                <div class="card card-warning">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            Edit Portfolio
                                        </h3>
                                    </div>

                                    <form method="post" action="{{ route('portfolios.update', $data->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" placeholder="Enter title"
                                                    name="title" value="{{ $data->title }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" class="form-control" placeholder="Description"
                                                    name="description" value="{{ $data->description }}">
                                            </div>
                                            <div class="form-group">
                                                <label>Image</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="image_file">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Update</button>

                                            <a href="{{ route('portfolios.index') }}" class="btn btn-danger ml-2">Back</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
