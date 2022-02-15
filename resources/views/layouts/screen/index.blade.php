@extends('layouts.admin.master')
@section('css')
@endsection

@section('title')
    Screen Section
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6"> Screen Section <h4 class="mb-0"> </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color"> Screen Section </a></li>
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
                    @include('layouts.screen.add')
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Processes</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($screen as $screen)
                                <tr>
                                    <td>{{ $loop -> iteration }}</td>
                                    <td>{{ $screen -> title}}</td>
                                    <td>{{ $screen -> description }}</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm" data-screen_id="{{$screen->id}}"
                                                data-toggle="modal" data-target="#deletedscreen"><i
                                                class="fa fa-trash"></i></button>

                                        <button class="btn btn-success btn-sm" title="Edit" data-toggle="modal"
                                                data-target="#Editscreen{{$screen->id}}" ><i
                                                class="fa fa-edit"></i></button>

                                        @include('layouts.screen.deleted')

                                        @include('layouts.screen.edit')


                                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter {{$us->id}}"> Launch demo modal </button>--}}

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
