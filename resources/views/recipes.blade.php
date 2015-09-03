<!DOCTYPE html>
<html>
    <head>
        <title>Recipes</title>
    </head>
    <body>

        @foreach ($recipes as $recipe)
		    <p><a href="/recipe/{{$recipe->id}}">{{ $recipe->name }}</a>
		    </p>
		@endforeach
    </body>
</html>
