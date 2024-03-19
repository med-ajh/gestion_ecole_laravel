<h1>La liste des étudiants</h1>
<table border="1" width="460">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Note</th>
        <th>Age</th>
    </tr>
    @foreach ($etds as $E)
    <tr>
        <td>{{$E->id}}</td>
        <td>{{$E->nom}}</td>
        <td>{{$E->prenom}}</td>
        <td>{{$E->note}}</td>
        <td>{{$E->age}}</td>
    </tr>
    @endforeach
</table>