<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/generalstyles.css">
    <title>The Software Office</title>
</head>

<body>
    <h1>Edit Your Query</h1>
    <form method="POST" action="edit.php" class="row">
        <div class="col-lg-3 col-sm-2"></div>
        <div class="col-lg-6 col-sm-8">
            <fieldset disabled>
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
            </fieldset>
            <div class="mb-3">
                <textarea class="form-control" name="message" rows="3" placeholder="Message..."></textarea>
            </div>
            <button type="submit" class="btn-general">UPDATE</button>
            <div> OR </div>
            <button class="btn-general">CANCEL</button>
        </div>
        <div class="col-lg-3 col-sm-2"></div>
    </form>
</body>

</html>