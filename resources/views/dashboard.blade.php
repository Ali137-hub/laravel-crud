<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/regiter.css">
        <title>Laravel Crud | Dash Page</title>
    </head>
</head>
<style>
    .outer-container {
        border: 1px solid royalblue;
        padding: 10px;
    }
</style>

<body>
    <div class="container mt-5 outer-container">
        <table class="table  ">
            <fieldset>
                <legend>
                    <div class="d-flex justify-content-between"">
                        <div>
                            <h1>Registered user</h1>
                        </div>
                        <div>
                            <a href="/" class="btn btn-primary">Register</a>
                    </div>

    </div>

    </legend>

    <thead>

        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr scope="row">
            <td>{{$user['id']}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td>{{$user['gender']}}</td>
            <td>
                <a href="/edit/{{$user['id']}}" class="btn btn-primary">Edit</a>
                <a href="/delete/{{$user['id']}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>

    </fieldset>
    </table>

    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>