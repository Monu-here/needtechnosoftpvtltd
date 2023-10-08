<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Admin-Login</title>
</head>

<body>
    <style>
        .contain {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 430px;
            width: 90%;
            background: #fff;
            border-radius: 7px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
        }

        .contain .registration {
            display: none;
        }

        #check:checked~.registration {
            display: block;
        }

        #check:checked~.login {
            display: none;
        }

        #check {
            display: none;
        }

        .contain .form {
            padding: 2.5rem;

        }

        .form header {
            font-size: 2rem;
            font-weight: 500;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .form input {
            height: 60px;
            width: 91%;
            padding: 0 15px;
            font-size: 17px;
            margin-bottom: 1.3rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            outline: none;
        }

        .form input:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
        }

        .form a {
            font-size: 16px;
            color: #009579;
            text-decoration: none;
        }

        .form a:hover {
            text-decoration: underline;
        }

        .button {
            color: #fff;
            background: #009579;
            font-size: 1.2rem;
            font-weight: 500;
            width: 100%;
            padding: 15px 10px;
            border: none;
            text-align: center;
            letter-spacing: 1px;
            margin-top: 1.7rem;
            cursor: pointer;
            transition: 0.4s;
        }

        .button:hover {
            background: #006653;
        }
    </style>



    <div class="container contain">
        <input type="checkbox" id="check">
        <div class="login form">
            <header>Admin Login</header>
            <form action="{{ route('adminLogin.login') }}" method="POST">
                @csrf
                <input type="text" placeholder="Enter your email" name="email">
                <input type="password" placeholder="Enter your password" name="password">
                <button class="button">Login</button>
            </form>
            <br>

        </div>
    </div>
</body>


</html>
