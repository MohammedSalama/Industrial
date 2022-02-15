@extends('layouts.admin.master')
@section('css')
@endsection

@section('title')
    Upload Logo
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6"> Upload Logo <h4 class="mb-0"> </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color"> Upload Logo </a></li>
                    <li class="breadcrumb-item active">Settings</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    @include('message')
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    <button class="btn btn-success btn-sm" title="Add" data-toggle="modal"
                            data-target="#Addscreen" >
                        Add</button>
                    @include('layouts.file.add')
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Logo</th>
                                <th>Processes</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($files as $file)
                                <tr>
                                    <td>{{ $loop -> iteration }}</td>
                                    <td>
                                        <img style="width: 40%; height: 32%;"
                                             src="
                                                {{--  مسار الصور --}}
                                                    {{asset('uploads/'.$file->logo)}}"
                                        ></td>
                                    <td>

                                        @include('layouts.file.update')

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <script>
        $('#deletedscreen').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var screen_id = button.data('screen_id')
            var modal = $(this)
            modal.find('.modal-body #screen_id').val(screen_id);
        })
    </script>
@endsection
