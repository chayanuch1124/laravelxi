<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Chayanuch Kullanitbaworndech</h1>
    <div class="container">

        <div class="col">
            <a href="gallery/ant"><img src="{{ $ant }}" alt="Flowers in Chania" style="width:auto;height:150px"></a>
            <a href="gallery/bird"><img src="{{ $bird }}" alt="Flowers in Chania" style="width:auto;height:150px"></a>
            <a href="gallery/cat"><img src="{{ $cat }}" alt="Flowers in Chania" style="width:auto;height:150px"></a>


            <img src="{{$god }}" alt="Flowers in Chania" style="width:auto;height:150px">

        </div>
    </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>