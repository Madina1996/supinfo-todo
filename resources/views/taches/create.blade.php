<!DOCTYPE html>
<html>

<head></head>
<body>
    <h1> Ajout de tache</h1>

<form method="post" action="{{route('taches.store')}}">
        @csrf
        @method('post')
        <input type="text" name="tache" id="tache">
        <button type="submit"> terminer </button>

    </form>

</body>


</html>