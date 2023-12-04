<div class="row">
    <div class="col-12">

        <form method="POST">
            @csrf
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Staff Name</label>
                <div class="col-sm-10">
                        <input type="text" class="form-control" value= "{{$s->StaffName}}" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Telephone</label>
                <div class="col-sm-10">
                        <input type="tel" class="form-control" name= "Telephone" value= "{{$s->Telephone}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                        <input type="text" class="form-control" name= "Address" value= "{{$s->Address}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Role</label>
                <div class="col-sm-10">
                        <input type="text" class="form-control" name= "Role" value= "{{$s->Role}}" readonly>
                </div>
            </div>

            <div class="form-group row">
                <button type= "submit" class="btn btn-success">Update</button>
            </div>
        </form>

    </div>
</div>
