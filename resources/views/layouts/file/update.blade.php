<!-- Edit File Upload -->
<button type="button"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalCenter{{$file->id}}"> <i
        class="fa fa-edit"></i></button>

<div class="modal fade" id="exampleModalCenter{{$file->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title"><div class="mb-30">
                        <h2>Upload File</h2>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('file.update',$file->id)}}" method="post" autocomplete="off" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    {{--Input hidden id--}}
                    <input type="hidden" name="id" value="{{$file->id}}"/>
                    <div class="row">
                        <div class="col">
                            <label> logo </label>
                            <input type="file" name="file" class="form-control @error('file') is-invalid @enderror">
                            @error('file')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





























