@extends('layouts.app')
@section('title')
    Modilfer {{$categorie->name}}
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
<form method="POST" action="{{url('categorie').'/'.$categorie->id}}" enctype="multipart/form-data">
{{method_field('PATCH')}}
    @csrf
@include('pages.categorie.form',['formMode'=>'Update'])

</form>
    </div>
</section>
@endsection