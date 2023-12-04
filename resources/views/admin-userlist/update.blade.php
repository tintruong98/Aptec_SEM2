<div class="row">
    <div class="col-12">

        <form method="POST">
            @csrf
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                        <input type="text" class="form-control" value= "{{$u->Email}}" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Telephone</label>
                <div class="col-sm-10">
                        <input type="tel" class="form-control" name= "userTel" value= "{{$u->Telephone}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                        <input type="text" class="form-control" name= "userAddr" value= "{{$u->Address}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Role</label>
                <div class="col-sm-10">
                        <input type="text" class="form-control" name= "userRole" value= "{{$u->Role}}" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                        <input type="text" class="form-control" name= "userPassword" value= "{{$u->Password}}" readonly>
                </div>
            </div>

            <div class="form-group row">
                <button type= "submit" class="btn btn-success">Update</button>
            </div>
        </form>

    </div>
</div>
