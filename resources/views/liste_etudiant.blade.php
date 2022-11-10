@extends('layout')
@section('content')
<h3>LISTE DES CLIENTS</h3>
<div class="table-wrapper">
    <style>
        table, th, td {
  border: 1px solid black;
  color: #000eee;
}
</style>

<table class="f1-table" border="5" >
    <tr>
        <th width="100">Nom</th>
        <th width="100">Prènom</th>
        <th width="100">email</th>
        <th width="100">genre</th>
                
    </tr>
</thead>
    <tbody>
        @foreach($etudiants as $etudiant)
    <tr>
        <td>{{ $etudiant->nom}}</td>
        <td>{{$etudiant->prenom}}</td>
        <td>{{$etudiant->email}}</td>
        <td>{{$etudiant->genre}}</td>
        
       
    </tr>
@endforeach
    </tbody>
    </table>
</div>
@endsection
