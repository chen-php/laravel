<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>基于PHP的考试成绩查询和评教系统</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.default.css" id="theme-stylesheet">
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>欢迎登录</h1>
                  </div>
                  <p>基于PHP的考试成绩查询和评教系统</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form method="post" action="" class="form-validate" id="login-from" name="loginForm">
                    <div class="form-group">
                      <input id="login-username" type="text" name="userName" placeholder="用户名"  class="input-material">
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="passWord" placeholder="密码" class="input-material">
                    </div>
                    <button id="login" type="submit" class="btn btn-primary" onclick="check()">登录</button>
                     </form>
                    <div style="margin-top: -40px;"> 
											<div class="custom-control custom-checkbox " style="float: right;">
											    <input type="checkbox" class="custom-control-input" id="check1" >
											    <label class="custom-control-label" for="check1">记住密码&nbsp;&nbsp;</label>
											</div> 
                    </div>
                  <br />
                  <div style="float: left;">
                  	<small>忘记密码?</small><a href="register.html" class="signup">&nbsp;联系管理员</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
    	function check(){
    		var name=document.getElementById("login-username").value;
    		if(name==null||name="")
    		{
    			alert("用户名不能为空！！！");
    			return false;
    		}
    		var password=document.getElementById("login-password").value;
    		if(password==null||password="")
    		{
    			alert("请填写密码！！！");
    			return false;
    		}

    	}
    </script>
  </body>
</html>