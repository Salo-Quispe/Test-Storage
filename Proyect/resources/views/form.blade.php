<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="eow justify-content-center">
            <div class="col-md-8">
                <form action="/save" method="post" enctype= "multipart/form-data">
                    @csrf
                    <input type="file" name="url">
                    <input type="submit" value="save">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
