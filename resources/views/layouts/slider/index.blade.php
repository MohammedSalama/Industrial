@extends('layouts.admin.master')
@section('css')
@endsection

@section('title')
    Slider Section
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6"> Slider Section <h4 class="mb-0"> </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color"> Slider Section </a></li>
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
                            data-target="#Addslider" >
                        Add</button>
                    @include('layouts.slider.add')
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
                            @foreach($slider as $slider)
                                <tr>
                                    <td>{{ $loop -> iteration }}</td>
                                    <td>{{ $slider -> title}}</td>
                                    <td>{{ $slider -> description }}</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm" data-slider_id="{{$slider->id}}"
                                                data-toggle="modal" data-target="#deletedslider"><i
                                                class="fa fa-trash"></i></button>

                                        <button class="btn btn-success btn-sm" title="Edit" data-toggle="modal"
                                                data-target="#Editslider{{$slider->id}}" ><i
                                                class="fa fa-edit"></i></button>

                                        @include('layouts.slider.deleted')

                                        @include('layouts.slider.edit')


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
        $('#deletedslider').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var slider_id = button.data('slider_id')
            var modal = $(this)
            modal.find('.modal-body #slider_id').val(slider_id);
        })
    </script>
@endsection
