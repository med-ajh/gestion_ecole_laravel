@extends('base')
@section('contenu')
<h1>Création d'un administratif</h1>

<form action="/administratifs/{{$Admin->id}}" method="post">
    @csrf
    @method("put")
<table>
    <tr>
        <td>Nom</td>
        <td><input type="text" name="nom" value="{{$Admin->nom}}"></td>
    </tr>
    <tr>
        <td>Prénom</td>
        <td><input type="text" name="prenom" value="{{$Admin->prenom}}"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="email" name="email" value="{{$Admin->email}}"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Envoyer"></td>
        <td><input type="reset" value="Annuler"></td>
    </tr>
</table>

</form>
@endsection