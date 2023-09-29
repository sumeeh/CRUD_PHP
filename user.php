<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <form style="margin-top:50px" method="post" action="formhandler.php">
        <div class="mb-3">
            <label class="form-label">User name</label>
            <input type="text" class="form-control" placeholder="Enter your username" name="name">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email">
        </div>

        <div class="mb-3">
            <label class="form-label">Phone no.</label>
            <input type="text" class="form-control" placeholder="Enter your phone number" name="phone">
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Enter your password" name="pwd">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
            </div>
</body>
</html>