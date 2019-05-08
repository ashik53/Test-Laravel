@extends('layouts.app')

@section('content')
<div class="container">
    


    <form action ="/upload-pdf" method="post" enctype="multipart/form-data">
        <label>  Insert Your CV</label>
        <input type="text" name="doc_name">
        <input type="file" name="file">
        <input type ="submit" name="submit" value="Upload">
    </form>











</div>
@endsection
