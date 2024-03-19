@extends('base')
@section('contenu')
    

<h1>
    La liste dess administratifs</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th colspan="2"><a href="/administratifs/create">Ajouter</a></th>
    </tr>
 @foreach ($admins as $A)
     
  
    <tr>
        <td>{{$A->id}}</td>
        <td>{{$A->nom}}</td>
        <td>{{$A->prenom}}</td>
        <td>{{$A->email}}</td>
       <td><a href="/administratifs/{{$A->id}}/edit">Edit</a></td>
       <td>
        <form action="/administratifs/{{$A->id}}" method="post">
        @csrf
        @method("delete")
        <input type="submit" value="Delete">
        </form>
       </td>
    </tr>

    @endforeach 
</table>

@endsection