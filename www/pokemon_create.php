<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create pokemon card</title>
</head>
<body>
    <form action="pokemon_create_process.php" method="post">
        <div class="form-group">
            <label for="">name *</label>
            <input type="text" name="name" required> <br>
        
            <label for="">type *</label>
            <input type="text" name="type" required> <br>

            <label for="">description</label>
            <input type="text" name="description"> <br>

            <label for="">Pokedex ID *</label>
            <input type="text" name="image" required> <br>

            <label for="">height</label>
            <input type="text" name="height"> <br>
            
            <label for="">weight</label>
            <input type="text" name="weight"> <br>

            <label for="">abilities</label>
            <input type="text" name="abilities"> <br>

            <label for="">evolution stage</label>
            <input type="text" name="evolution_stage"> <br>

            <label for="">hp</label>
            <input type="text" name="hp"> <br>

            <label for="">attack</label>
            <input type="text" name="attack"> <br>

            <label for="">defense</label>
            <input type="text" name="defense"> <br>

            <button type="submit">Create</button>
            <br>
            <br>
            * is verplicht
        </div>
    </form>

</body>
</html>