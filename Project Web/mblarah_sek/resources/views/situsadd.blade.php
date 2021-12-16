@extends('source/master')
@extends('source/template')
@section('content')



<div class="card-body">
    <div class="card px-2 pb-2">
        <div class="col-md-10 mt-1 mb-2"><button type="button" id="addNewSitus" class="btn btn-success">Add</button>
        </div>
        <div class="card">
            <div class="table-responsive">
                <table class="table">

                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Latitude</th>
                                    <th scope="col">Longitude</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($situses as $situs)
                                    <tr>
                                        <td>{{ $situs->id }}</td>
                                        <td>{{ $situs->nama }}</td>
                                        <td>{{ $situs->alamat}}</td>
                                        <td>{!!substr("$situs->keterangan",0,25)!!}...</td>
                                        <td>{{ $situs->lati }}</td>
                                        <td>{{ $situs->longi }}</td>
                                        <td class="text-center">
                                            <div class="dropdown">
                                                <img src="{{ Storage::url($situs->gambar1)}}" class="rounded"
                                                    style="height: 100px" width="150px">
                                                <div class="dropdown-content">
                                                    <img src="{{ Storage::url($situs->gambar1)}}" class="rounded"
                                                        style="height: 200px" width="350px">

                                                </div>
                                            </div>

                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown">
                                                <img src="{{ Storage::url($situs->gambar2)}}" class="rounded"
                                                    style="height: 100px" width="150px">
                                                <div class="dropdown-content">
                                                    <img src="{{ Storage::url($situs->gambar2)}}" class="rounded"
                                                        style="height: 200px" width="350px">

                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown">
                                                <img src="{{ Storage::url($situs->gambar3)}}" class="rounded"
                                                    style="height: 100px" width="150px">
                                                <div class="dropdown-content">
                                                    <img src="{{ Storage::url($situs->gambar3)}}" class="rounded"
                                                        style="height: 200px" width="350px">

                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown">
                                                <img src="{{ Storage::url($situs->gambar4)}}" class="rounded"
                                                    style="height: 100px" width="150px">
                                                <div class="dropdown-content">
                                                    <img src="{{ Storage::url($situs->gambar4)}}" class="rounded"
                                                        style="height: 200px" width="350px">

                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="dropdown">
                                                <img src="{{ Storage::url($situs->gambar5)}}" class="rounded"
                                                    style="height: 100px" width="150px">
                                                <div class="dropdown-content">
                                                    <img src="{{ Storage::url($situs->gambar5)}}" class="rounded"
                                                        style="height: 200px" width="350px">

                                                </div>
                                            </div>
                                        </td>
                                        <td>{{substr("$situs->created_at",0,10)}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <span>Action</span>
                                                <div class="dropdown-content">
                                                    <div><a href="javascript:void(0)" class="btn btn-primary edit" data-id="{{ $situs->id }}">Edit</a></div>
                                                    <div><a href="javascript:void(0)" class="btn btn-danger delete" data-id="{{ $situs->id }}">Delete</a></div>
                                                </div>
                                            </div>
                                           
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                        </table>
                    </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ajax-situs-model" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ajaxSitusModel"></h4>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0)" id="addEditSitusForm" name="addEditSitusForm"
                        class="form-horizontal" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="Enter Name" value="" maxlength="50" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-5 control-label">Alamat</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    placeholder="Enter Address" value=""  required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">Keterangan</label>
                            <div class="col-sm-12">
                                <textarea class="form-control " id="keterangan" name="keterangan" rows="10" value=""
                                    required=""></textarea>
                    
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-5 control-label">Latitude</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="lati" name="lati"
                                    placeholder="Enter Latitude Coordinate" value=""  required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-5 control-label">Longitude</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="longi" name="longi"
                                    placeholder="Enter longitude Coordinate" value=""  required="">
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="font-weight-bold">GAMBAR1</label>
                                <input type="file" class="form-control" id="gambar1" name="gambar1">
                            
                        </div>
                        <div class="form-group">
                                <label class="font-weight-bold">GAMBAR2</label>
                                <input type="file" class="form-control" id="gambar2" name="gambar2">
                            
                               
                        </div>
                        <div class="form-group">
                                <label class="font-weight-bold">GAMBAR3</label>
                                <input type="file" class="form-control" id="gambar3" name="gambar3">
                            
                        </div>
                        <div class="form-group">
                                <label class="font-weight-bold">GAMBAR4</label>
                                <input type="file" class="form-control" id="gambar4" name="gambar4">
                            
                        </div>
                        <div class="form-group">
                                <label class="font-weight-bold">GAMBAR5</label>
                                <input type="file" class="form-control" id="gambar5" name="gambar5">
                            
                        </div>




                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" id="btn-save" value="addNewSitus">Save
                                changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('extra_script')
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script type="text/javascript">
   
    $(document).ready(function () {
        
        $('#addNewSitus').click(function () {
            $('#addEditSitusForm').trigger("reset");
            $('#ajaxSitusModel').html("Add Situs");
            $('#ajax-situs-model').modal('show');
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

       
      
        $('body').on('click', '.delete', function () {
            if (confirm("Delete Record?") == true) {
                var id = $(this).data('id');

                // ajax
                $.ajax({
                    type: "POST",
                    url: "{{ url('delete-situs') }}",
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function (res) {
                        window.location.reload();
                    }
                });
            }
        });

        $('body').on('click', '#btn-save', function (event) {
           
            $("#btn-save").html('Please Wait...');
            $("#btn-save").attr("disabled", true);

            // ajax
            var ckeditor = CKEDITOR.instances['keterangan'].getData()
            var formData = new FormData($('#addEditSitusForm')[0]);
            formData.set('keterangan', ckeditor);
           
            $.ajax({
                type: "POST",
                url: "{{ url('add-situs') }}",
                data: formData,
                dataType: 'json',
                processData:false,
                contentType:false,
                success: function (res) {
                    window.location.reload();
                    $("#btn-save").html('Submit');
                    $("#btn-save").attr("disabled", false);
                },
                error: function(e) {
                    $("#btn-save").html('Submit');
                    $("#btn-save").attr("disabled", false);
                    alert(e);
                }
            });
        });
        

        CKEDITOR.replace( 'keterangan' );

    });
    

</script>
@endsection
