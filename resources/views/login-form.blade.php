<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login Form</title>
  </head>
  <body>
    <div class="row mt-5">
        <div class="col-lg-4 offset-4">
            <div class="card"> 
            <div class="card-header">
                Login Form

            </div>
            <form method="post" action="{{ route('admin.logins')}}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                        @error('email') <p class="text text-danger">{{ $message }}</p> @enderror
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                        @error('password') <p class="text text-danger">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div clas="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>



                </div>
            </form>
        </div>
    </div>
    <div class="card"></div>
    <div class="card-body"></div>
  </body>
</html>