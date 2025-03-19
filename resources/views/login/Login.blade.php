<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
        <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    </head>
   {{-- <!-- Tailwind CSS CDN -->
   <script src="https://cdn.tailwindcss.com"></script> --}}
</head>
<body>
    <div class="title">
        @include('layout.navbar')
    </div>
	<form  method="post">
		<label class="title-login">Login</label>
		<div class="form-login">
			<div class="form-login-title">
				<h1>Login</h1>
				
                @if ($errors->has('login'))
                    <div class="div-errorMessage">
                        <label id="errorMessage"> 
                            {{ $errors->first('login') }}
                        </label>
                    </div>
                @endif
			</div>

			<div class="form-item">
				<label>UserId:</label> 
				<input id="userId" type="text" name="username" placeholder="Tên đăng nhập" required maxlength="111"></input>
			</div>
			<div class="form-item">
				<label>Password: </label> 
				<input id="password" type="password" name="password" placeholder="Mật khẩu" required maxlength="8"></input>
			</div>

			<div class="form-button">
				
				<input type="submit" class="button" value="Login"/>
				<input type="button" class="button" onclick="clearForm()()" value="Clear" />
			</div>
		</div>
	</form>
    <!-- Footer -->
    <div class="footer">
        @include('layout.footer')
    </div> <!-- Footer -->
        
</body>
</html>