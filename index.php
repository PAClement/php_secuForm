<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <?php include 'includes/_nav.html' ?>

    <div class="container">
        <div class="row">
            <div class="col-6 ">
                <form method="post" action="action.php">
                    <div class="mb-3 col-12">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="inputPassword5" class="form-label">Password</label>
                        <input type="password" id="inputPassword5" name="pass" class="form-control" aria-describedby="passwordHelpBlock" required>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">last name</label>
                            <input type="text" name="lastname" class="form-control" id="exampleFormControlInput1" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info text-white">Send information</button>
                </form>
            </div>
            <div class="col-6">
                <div class="d-flex flex-column align-items-center">

                    <h2>Condition to respect</h2>
                    <ul class="mt-5 list-group list-group-flush">
                        <li class="list-group-item"><strong>Email : </strong>Your email must be conform like <i>clementpaquentin@hotmail.fr</i></li>
                        <li class="list-group-item"><strong>Password :</strong> Must be at leat 8 characters , 1 special characters and lower / upper case characters good luck. </li>
                        <li class="list-group-item"><strong>Name & Last Name : </strong> Don't use number on your name or lastname.</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</body>

</html>