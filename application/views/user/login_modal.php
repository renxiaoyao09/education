<!-- 登录弹出对话框 -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">登录</h4>
			</div>
			<div class="modal-body">
				<session class="col-md-8">
					<p><input type="text" name="login_username" placeholder="请输入用户名" class="form-control "></p>
					<p> <input type="password" name="login_password" placeholder="请输入密码" class="form-control"></p>
					<p> <input type="text" name="login_validata" placeholder="请输入验证码" class="form-control">
					<img src=""></p>
					<div id="login_msg"></div>
				</session>
				<session >
					<p>这是一段介绍性的文字，为的就是让你能都加入我们，所以这段文字会很长，长到你们想要加入我们为止..,还是不够长啊，还得长一些才行啊，啊啊啊啊啊</p>
					<div class="text-right"><button type="button" class="btn btn-danger btn-sm">注册</button></div>
				</session>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-success" id="login">登录</button>
				<button type="button" class="btn btn-default"data-dismiss="modal">关闭</button>
			</div>

		</div>
	</div>
</div>
