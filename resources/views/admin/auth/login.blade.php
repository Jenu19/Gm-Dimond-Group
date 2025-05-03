<!DOCTYPE html>
<html>

<head>
    <title>GM Dimond Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Favicon -->
    <link href="{{ url(env('ASSETPATHURL') . 'admin/images/placeholder.jpg') }}" rel="icon">
    <link href="{{ url(env('ASSETPATHURL') . 'admin/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url(env('ASSETPATHURL') . 'admin/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="auth-main-content d-flex h-100 justify-content-center align-items-center">
        <div class="row justify-content-center align-items-center g-0 w-100">
            <div class="col-xl-4 col-lg-6 col-md-8 px-md-5 px-2">
                <div class="card box-shadow overflow-hidden border-0">
                    <div class="bg-secondary-light">
                        <div class="text-primary p-3">
                            <h4>Welcome Back !</h4>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        @if (Session::has('error'))
                            <div class="alert alert-danger my-2 p-1">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <form class="my-3" method="POST" action="{{ route('check_login') }}">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control p-2" name="email" placeholder="Enter email"
                                    required>
                            </div>
                            <div class="form-group">
                                <div class="form-control d-flex align-items-center gap-3 p-2">
                                    <input type="password" class="form-control border-0 p-0" name="password"
                                        placeholder="Enter password" id="password" required>
                                    <span>
                                        <a href="javascript:void(0);">
                                            <i class="fa-regular fa-eye-slash" id="eye"></i></a>
                                    </span>
                                </div>
                            </div>
                            <button class="btn btn-primary w-100 my-3" type="submit">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url(env('ASSETPATHURL') . 'admin/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{ url(env('ASSETPATHURL') . 'admin/js/jquery/jquery-3.7.0.min.js') }}"></script>
    <script>
        var alertBoxes = document.getElementsByClassName('alert'); // Returns a collection of elements
        if (alertBoxes.length > 0) { // Check if any elements are found
            Array.from(alertBoxes).forEach(function(alertBox) {
                setTimeout(function() {
                    alertBox.style.display = 'none';
                }, 5000); // 5000ms = 5 seconds
            });
        }

        // password eye hide
        $(function() {
            $('#eye').click(function() {
                if ($(this).hasClass('fa-eye-slash')) {
                    $(this).removeClass('fa-eye-slash');
                    $(this).addClass('fa-eye');
                    $('#password').attr('type', 'text');
                } else {
                    $(this).removeClass('fa-eye');
                    $(this).addClass('fa-eye-slash');
                    $('#password').attr('type', 'password');
                }
            });
        });
    </script>
</body>

</html>
