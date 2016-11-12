<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"D:\wamp64\www\edu\public/../application/index\view\exam\index.html";i:1478616036;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>考试系统</title>
<link rel="stylesheet" href="__PUBLIC__/css/index.css" type="text/css" />
<style type="text/css">
/*打印时，背景为白色*/
@media print{
body{
font-size:12px;
background-color:#fff;
}

.div_topic{
padding:5px;
border:#000 dashed;
border-width: 0 0 1px 0;
background-color:#fff;
}

.div_topic h4{
font-size:14px;
color:#000;
}

.div_topic h4 span{ display:none}

#answer_last {
background-color:#eee;
border:1px dashed #333;
color:#000000;
display:block;
position: static;
width:auto;
height:auto;
}
}
</style>

<script src="__PUBLIC__/js/jquery.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/topic.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/function.js" type="text/javascript"></script>
<script>


$(document).ready(function(){
	$("#topic_all_num").html(arr_topic.length);

	$("#get_topic").click(function(){
		$("#status").html("");
		if($("#topic_all").html() != ""){
			if(!confirm("是否要重新出题？")){
				return;
			}else{
				$("#topic_all").html("");
			}
		}

		var topic_num = $("#topic_num").val();

		if(isNaN(topic_num)){
			$("#topic_num").val("100");
		}else{
			if(topic_num <= 0){
				$("#topic_num").val("100");
			}

			if(topic_num > arr_topic.length){
				$("#topic_num").val(arr_topic.length);
			}
		}



		topic_num = $("#topic_num").val();

		get_topic(arr_topic,topic_num);
		int();

	});
});

</script>
</head>
<body>
<div id="fixedLayer"><div>
	<p><span id="topic_right">
	<input name="show_answer" id="show_answer" type="button" value=" 答案 " onclick='$("#answer_last").toggle();'/>
	<input name="check_answer" id="check_answer" type="button" value=" 算分 "/></span>
	您的题库一共有<span id="topic_all_num"></span>道题，您要做其中<input name="topic_num" type="text" id="topic_num" value="0" />道。<input name="get_topic" id="get_topic" type="button" value=" 出  题 "/> <span id="status"></span></p>

</div>
</div>
<br/>
<br/>
<br/>
<div id="topic_all"></div>
<div id="answer_last"></div>
</body>
</html>