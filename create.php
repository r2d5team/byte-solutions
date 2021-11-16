<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
    <form method="POST" action="add.php">
        <div class="mb-3">

            <input type="text" class="form-control" name="name" placeholder="Name/Surname">
        </div>
        <div class="mb-3">

            <input type="email" class="form-control" name="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">

            <input type="title" class="form-control" name="querytitle" aria-describedby="emailHelpId"
                placeholder="title">
        </div>
        <div class="mb-3">

            <textarea class="form-control" name="message" rows="3" placeholder="Message..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>