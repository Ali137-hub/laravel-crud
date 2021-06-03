<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/regiter.css">
    <title>Laravel Crud | Edit users Page</title>

</head>
<style>
    form {
        border: 1px solid royalblue;
        padding: 10px;
        margin-top: 5rem;
    }
</style>

<body>
    <div class="container">
        @if(isset($response))
        <div class="alert alert-success" role="alert">
            <strong>{{$response}}</strong>
        </div>
        @endif
        <form method="post" action="update">
            @csrf
            <fieldset>
                <legend>
                    <div class="d-flex justify-content-between"">
                        <div>
                            <h1>Register user</h1>
                        </div>
                        <div>
                            <a href=" dashboard" class="btn btn-primary">Users</a>
                    </div>

    </div>

    </legend>
    <input type="hidden" value={{$user['id']}} name="userid" />
    <div class="mb-3 ">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" name="name" placeholder='Your name' class="form-control" id="exampleInputEmail1"
            aria-describedby="emailHelp" value={{$user['name']}}>

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email</label>

        <input type="text" name="email" placeholder='Your email' class="form-control" id="exampleInputPassword1"
            value={{$user['email']}}>
    </div>
    <div class="mb-3 ">
        <label for="exampleInputPassword1" class="form-label">Select your gender</label>
        <select class="form-control" name="gender" id="">
            @if ($user['gender']=='Male')
            <option>Male</option>
            <option>Female</option>
            @else
            <option>Female</option>
            <option>Male</option>
            @endif
        </select>
    </div>
    <button type="submit" class="btn btn-primary">update</button>
    </fieldset>
    </form>
    </div>
</body>

</html>
{{-- @include("inculdes/headscript.blade.php"); --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>