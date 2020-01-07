@if ($message = Session::get('success'))
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
            </div>
        </div>
    </div>
</div>
@endif
@if ($message = Session::get('error'))
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
            </div>
        </div>
    </div>
</div>
@endif
@if ($message = Session::get('warning'))
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
            </div>
        </div>
    </div>
</div>
@endif
@if ($message = Session::get('info'))
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="alert alert-info alert-dismissible fade show mt-4" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
            </div>
        </div>
    </div>
</div>
@endif
@if ($errors->any())
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                Please check the form below for errors
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
            </div>
        </div>
    </div>
</div>
@endif
