<!DOCTYPE html>
<html>

<head></head>
<body>
<p> bonjour
    <br/>
    <br/>
    voici la liste des taches:
    <br/>
    <ul>
    @foreach ($taches as $item)
        <li > {{$item}}</li>
    @endforeach
    

    </ul>
</p>

<a href="taches/create" > ajouter </a>
</body>


</html>