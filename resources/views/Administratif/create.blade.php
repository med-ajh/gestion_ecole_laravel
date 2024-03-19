<h1>Création d'un administratif</h1>

<form action="/administratifs" method="post">
    @csrf
<table>
    <tr>
        <td>Nom</td>
        <td><input type="text" name="nom" id=""></td>
    </tr>
    <tr>
        <td>Prénom</td>
        <td><input type="text" name="prenom" id=""></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="email" name="email" id=""></td>
    </tr>
    <tr>
        <td><input type="submit" value="Envoyer"></td>
        <td><input type="reset" value="Annuler"></td>
    </tr>
</table>

</form>