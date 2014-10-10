$(document).ready(function(){

	$("#login").click(function(){
	  	$.post("/index_controller/login",
	  		{"username":$("input[name='login_username']").val(),"password":$("input[name='login_password']").val()},
	  		function(data){
	  			$("#login_msg").text(data);
	  	});
  	});
});