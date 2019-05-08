@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form method="POST" action="/save-info" enctype="multipart/form-data">
                        @csrf
                        <div class = "form-group">
                            <label for="name">Name</label>
                            <input class = "form-control" type="text" name="name" placeholder="Name"> 
                        </div>

                        <div class = "form-group">
                            <label for="file">Image</label>
                            <input class = "form-control-file" type="file" name="image"> 
                            <small class = "form-text text-muted" id="fileHelp">Max 3mb size</small> 
                        </div>

                        <button class="btn btn-success" type="submit"> Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
