<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        .custom-file-label::after {
            content: "Rasmni tanlang";
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin-top: 10%;">
                <h2>Rasmni tanlash</h2>
                <form method="post" action="{{route('image')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group form-check">
                        <input type="file" name="my_image" class="custom-file-input" id="exampleCheck1" required accept="image/*">
                        <label class="custom-file-label" for="exampleCheck1"></label>
                    </div>
                    <div style="display: flex;flex-direction: column;">
                        <button type="submit" class="btn btn-primary">Tasdiqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
