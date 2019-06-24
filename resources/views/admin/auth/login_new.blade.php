<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>登录 | {{config('app.name')}}</title>
    @include('admin.layouts.css_new')
    <link rel="stylesheet" href="{{asset('atrio1.4/assets/css/pages/extra_pages.css')}}">
</head>

<body>
	<div class="limiter">
        <!-- <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30">
                    <img class="loading-img-spin" src="assets/images/loading.png" alt="admin">
                </div>
                <p>Please wait...</p>
            </div>
        </div> -->
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="{{route('admin.doLogin')}}" method="post" autocomplete="off" class="login100-form validate-form">
                {{csrf_field()}}
					<span class="login100-form-title p-b-45">
                    {{config('app.name')}}
					</span>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username" value="">
						<span class="focus-input100"></span>
						<span class="label-input100">用户名</span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">密码</span>
					</div>
					<div class="flex-sb-m w-full p-t-15 p-b-20">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" value=""> 记住我
								<span class="form-check-sign">
									<span class="check"></span>
								</span>
							</label>
						</div>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
                            登录
						</button>
					</div>
				</form>
				<div class="login100-more" style='background-image: url("{{asset('atrio1.4/assets/images/pages/bg-01.png')}}");'>
				</div>
			</div>
		</div>
	</div>
    @include('admin.layouts.js_new')
</body>

</html>