@extends('layouts.app')
@section('title')
    Fiche categorie
@endsection
@section('content')
<section class="content">
    <div class="container-fluid">
<form method="POST" action="{{url('categorie')}}" enctype="multipart/form-data">
@csrf
@include('pages.categorie.form',['formMode'=>'Ajout'])

</form>
    </div>
</section>
@endsection