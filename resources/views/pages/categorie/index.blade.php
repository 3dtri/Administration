@extends('layouts.app')
@section('title')
    Lises des Categories
@endsection
@section('content')
<h2>Listes des categories</h2>
<form method="GET" action="{{url('categorie')}}">
<input type="text" value="{{Request::get('search')}}" name="search" placeholder="Search">

<input type="submit" value="Recherche">
</form>
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
        <th>Nom</th>
        <th>Action</th>
        </tr>
        
        </thead>
        <tbody>
        @foreach ($categories as $key=>$cat)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$cat->name}}</td>
                <td>
                <a href="{{url('categorie').'/'.$cat->id.'/edit'}}" class="btn btn-success">Modifier</a>
                 <form method="POST" action="{{ url('categorie').'/'.$cat->id}}"   >
               {{method_field('DELETE')}}
                    @csrf
                    <input type="submit" value="supprimer">
               
                 </form>
                </td>
        
        
            </tr>
        @endforeach
        
        </tbody>
        
        
        </table>
</div>

{{$categories->appends(['search'=> Request::get('search')])->render()}}
<hr />
<a href="{{url('categorie/create')}}" class="btn btn-default">Ajouter</a>
@endsection