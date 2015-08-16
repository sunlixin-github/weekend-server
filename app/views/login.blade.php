<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login Page - Ace Admin</title>
    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {{HTML::style('css/bootstrap.min.css',['rel'=>'stylesheet'])}}

    {{HTML::style('css/bootstrap-responsive.min.css',['rel'=>'stylesheet'])}}

    {{HTML::style('css/font-awesome.min.css',['rel'=>'stylesheet'])}}

    {{HTML::style('css/font-awesome-ie7.min.css',['rel'=>'stylesheet'])}}

    {{HTML::style('css/ace.min.css',['rel'=>'stylesheet'])}}

    {{HTML::style('css/ace-responsive.min.css',['rel'=>'stylesheet'])}}

    {{HTML::style('css/ace-ie.min.css',['rel'=>'stylesheet'])}}

</head>
<body class="login-layout">

<div class="container-fluid" id="main-container">
    <div id="main-content">
        <div class="row-fluid">
            <div class="span12">

                <div class="login-container">
                    <div class="row-fluid">
                        <div class="center">
                            <h1><i class="icon-leaf green"></i> <span class="red">Ace</span> <span class="white">Application</span></h1>
                            <h4 class="blue">&copy; Company Name</h4>
                        </div>
                    </div>
                    <div class="space-6"></div>
                    <div class="row-fluid">
                        <div class="position-relative">
                            <div id="login-box" class="visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header lighter bigger"><i class="icon-coffee green"></i> 用户登录</h4>

                                        <div class="space-6"></div>

                                        {{Form::open(['url'=>'login', 'id'=>'loginfrm', 'name'=>'loginfrm', 'method'=>'post' ])}}
                                            <fieldset>
                                                <label>
						<span class="block input-icon input-icon-right">
							<input type="text" name='username' id="log_email" class="span12" placeholder="Username" />
							<i class="icon-user"></i>
						</span>
                                                </label>
                                                <label>
						<span class="block input-icon input-icon-right">
							<input type="password" name="password" id="password" class="span12" placeholder="Password" />
							<i class="icon-lock"></i>
						</span>
                                                </label>
                                                <div class="space"></div>
                                                <div class="row-fluid">
                                                    <label class="span8">
                                                        <input type="checkbox"><span class="lbl"> Remember Me</span>
                                                    </label>
                                                    <button type="submit" class="span4 btn btn-small btn-primary"><i class="icon-key"></i> 登录</button>
                                                </div>

                                            </fieldset>
                                        </form>
                                        @if(Session::has('failure'))
                                        <span>{{Session::get('failure')}}</span>
                                        @endif
                                    </div><!--/widget-main-->


                                    <div class="toolbar clearfix">
                                        <div>
                                            <a href="#" onclick="show_box('forgot-box'); return false;" class="forgot-password-link"><i class="icon-arrow-left"></i> I forgot my password</a>
                                        </div>
                                        <div>
                                            <a href="#" onclick="show_box('signup-box'); return false;" class="user-signup-link">I want to register <i class="icon-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div><!--/widget-body-->
                            </div><!--/login-box-->






                            <div id="forgot-box" class="widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header red lighter bigger"><i class="icon-key"></i> Retrieve Password</h4>

                                        <div class="space-6"></div>

                                        <p>
                                            Enter your email and to receive instructions
                                        </p>
                                        <form>
                                            <fieldset>
                                                <label>
						<span class="block input-icon input-icon-right">
							<input type="email" class="span12" placeholder="Email" />
							<i class="icon-envelope"></i>
						</span>
                                                </label>

                                                <div class="row-fluid">
                                                    <button onclick="return false;" class="span5 offset7 btn btn-small btn-danger"><i class="icon-lightbulb"></i> Send Me!</button>
                                                </div>

                                            </fieldset>
                                        </form>
                                    </div><!--/widget-main-->

                                    <div class="toolbar center">
                                        <a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">Back to login <i class="icon-arrow-right"></i></a>
                                    </div>
                                </div><!--/widget-body-->
                            </div><!--/forgot-box-->



                            <div id="signup-box" class="widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header green lighter bigger"><i class="icon-group blue"></i> 新用户注册</h4>
                                        <div class="space-6"></div>
                                        <p>
                                            请填写以下内容:
                                        </p>

                                        {{Form::open(['url'=>'signup','id'=>'signupfrm','name'=>'signupfrm'])}}
                                            <fieldset>
                                                <label>
						<span class="block input-icon input-icon-right">
							<input type="email" name="email" id="sign_email" class="span12" placeholder="Email" />
						</span>
                                                </label>
                                                <span id="checkemail"></span>
                                                <label>
						<span class="block input-icon input-icon-right">
							<input type="text" name="alias" id="alias" class="span12" placeholder="Username" />
							<i class="icon-user"></i>
						</span>
                                                </label>
                                                <label>
						<span class="block input-icon input-icon-right">
							<input type="password" id="psw1" name="password1" class="span12" placeholder="Password" />
							<i class="icon-lock"></i>
						</span>
                                                </label>
                                                <label>
						<span class="block input-icon input-icon-right">
							<input type="password" id="psw2" name="password2" class="span12" placeholder="Repeat password" />
							<i class="icon-retweet"></i>
						</span>
                                                </label>

                                                <label>
                                                    <input type="checkbox"><span class="lbl"> I accept the <a href="#">User Agreement</a></span>
                                                </label>

                                                <div class="space-24"></div>

                                                <div class="row-fluid">
                                                    <button type="reset" class="span6 btn btn-small"><i class="icon-refresh"></i> 重写</button>
                                                    <button type="submit" class="span6 btn btn-small btn-success">注册 <i class="icon-arrow-right icon-on-right"></i></button>
                                                </div>

                                            </fieldset>
                                        </form>
                                    </div>

                                    <div class="toolbar center">
                                        <a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link"><i class="icon-arrow-left"></i> Back to login</a>
                                    </div>
                                </div>{{--/widget-body--}}
                            </div>{{--/signup-box--}}


                        </div>{{--/position-relative--}}

                    </div>
                </div>
            </div>{{--/span--}}
        </div>{{--/row--}}
    </div>
</div>{{--/.fluid-container--}}
{{-- basic scripts --}}

{{HTML::script('1.9.1/jquery.min.js')}}
<script type="text/javascript">
    window.jQuery || document.write("<script src='js/jquery-1.9.1.min.js'>\x3C/script>");
</script>
<!-- page specific plugin scripts -->

<!-- inline scripts related to this page -->

<script type="text/javascript">
$(document).ready(function(e) {
    $('#sign_email').blur(function(){
		var email = $(this).val();
		var reg = /\w+[@]{1}\w+[.]\w+/;
		if(reg.test(email)){
			$('#checkemail').html("");
		}else{
			$(this).val('');
			$('#checkemail').html("请输入正确的email地址");
		}
	});
	
	$('#signupfrm').submit(function(){
		var email = $('#sign_email').val();
		var password = $('#psw1').val();
		var alias = $('#alias').val();
		if(email.length==0 || password.length==0 || alias.length==0)
		{
			alert('输入无效');
			return false;
		}else{
			return true;
		}
	});
});

    function show_box(id) {
        $('.widget-box.visible').removeClass('visible');
        $('#'+id).addClass('visible');
    }
</script>
</body>
</html>
