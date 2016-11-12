// JavaScript Document
// Download by http://www.codefans.net
//元素的隐藏与呈现
function showHide(obj){
    var obj=document.getElementById(obj);
	obj.style.display=obj.style.display=="block"?"none":"block";
}

//初始化事件绑定
function int(){
	$("#status").html("");
	$('.div_topic').removeClass('odd');
	$('.div_topic:even').addClass('odd');
	$('.div_topic p').click(function(){
		if($(this).find('input[type="radio"]').val() != undefined){
			$(this).find('input[type="radio"]').attr('checked','checked');
			var name = $(this).find('input[type="radio"]').attr('name');//获得名称
			$('input[type="radio"][name="' + name + '"]').parents("p").removeClass('selected');
			$('input[type="radio"][name="' + name + '"]:checked').parents("p").addClass('selected');
		}
	});

	$("#check_answer").click(function(){
		$("#status").html("");
		$("h4").css("color","#22536A");
		var answer_this_tip,set_answer,_temp_tip;
		_temp_tip = "yes";

		var tall = 0;

		$(".div_topic").each(function(i){
			if($(this).find('input[type="radio"]:checked').val() == undefined){
				_temp_tip = "no";
				$(this).find("h4").css("color","green");
			}
			tall++;
		});

		if(_temp_tip == "no"){
			$("#status").html("还有题目没完成！");
			return;
		}

		var err = 0;

		$(".div_topic").each(function(i){
			answer_this_tip = $(this).find(".answer_this_tip").html();
			set_answer = $(this).find('input[type="radio"]:checked').val();
			//$(this).find('input[type="radio"]').val() != undefined
			if(answer_this_tip != set_answer){
				$(this).find("h4").css("color","red");
				err++;
			}
		});
		$("h4 span").show();

		$("#status").html("错误：" + err + "个！错误率：" + (err / tall * 100).toFixed(2) + "%");
	});



}

function set_str_len(str,len){
	str = str + "";
	var temp = "";
	for(i = 0; i < (len - str.length); i++){
		temp += "0";
	}

	return temp + str;
}

//随即返回一个范围的随机数
function Grandom(m,n){
	return Math.round(Math.random() * (n - m) + m);
}

function get_topic(_arr_topic,_topic_num){

	var _all_num, //总题目数
	_this_num, //总题随即一个数
	_topic, //题目
	_topic_temp, //临时题目
	_topic_str, //题目字符串
	i, //当前题目数

	_arr_answer,  //答案数组
	_arr_answer_length, //答案长度
	_this_answer_num, //答案随即一个数
	_temp_answer,  //临时答案
	_arr_answer_last, //最终答案数列
	_answer_last_str,//最终答案字符串
	_answer_str, //答案字符串
	_answer_tip, //答案前头的ABCD
	_answer_this_tip,//当前题目的答案
	_arr_answer_type;

	_all_num = _arr_topic.length;  //总题目数
	_arr_answer_last = new Array();//最终答案数列

	_topic_str = "";
	for(y = 0; y < _topic_num; y++){
		i = y + 1; //当前题目数

		_this_num = Grandom(0,(_arr_topic.length - 1)); //随即一个数

		_topic_temp = _arr_topic.splice(_this_num,1);
		_topic = _topic_temp[0][0]; //题目

		_arr_answer = _topic_temp[0][1];//答案数组

		_arr_answer_length = _arr_answer.length; //答案长度

		//获得答案字符串 begin  _answer_str  _answer_this_tip
		_answer_str = "";
		if(_arr_answer_length == 4){
			for(j = 0; j < 4; j++){
				try{
					_this_answer_num = Grandom(0,(_arr_answer.length - 1));
					_temp_answer = _arr_answer.splice(_this_answer_num,1);

					switch (j) {
					   case 0 :
						   _answer_tip = "A";break;
					   case 1 :
						   _answer_tip = "B";break;
					   case 2 :
						   _answer_tip = "C";break;
					   case 3 :
						   _answer_tip = "D";break;
					}

					if(_temp_answer[0][1] == "yes"){
						_answer_this_tip = _answer_tip;
					}

					_answer_str += '<p><input name="topic' + i + '" type="radio" value="' + _answer_tip + '">' + _answer_tip + '、' + _temp_answer[0][0] + '</p>';
				}catch(e){
					alert(e);
				}
			}

		}else{
			try{
				if(_arr_answer[0][1] == "yes"){_answer_this_tip = "A";}
				if(_arr_answer[1][1] == "yes"){_answer_this_tip = "B";}

				_answer_str = '<p><input name="topic' + i + '" type="radio" value="A">A、' + _arr_answer[0][0] + '</p><p><input name="topic' + i + '" type="radio" value="B">B、' + _arr_answer[1][0] + '</p>';
	    	}catch(e){
				alert(e);
			}
		}

		_arr_answer_last.push(_answer_this_tip);
		//获得答案字符串 end

		//组合题目字符串 begin
		_topic_str = '<div id="topic' + i + '" class="div_topic"><h4>' + i + '、' + _topic + '<span>答案：<span class="answer_this_tip">' + _answer_this_tip + '</span></span></h4>' + _answer_str + '</div>';

		$(_topic_str).appendTo("#topic_all");
		//组合题目字符串 end
	}

	//组合last答案字符串 begin _arr_answer_last _answer_last_str

	var _answer_last_str = "";

	var tap10 = 1;

	var _answer_all_num =  _arr_answer_last.length;

	for(z = 0; z < _answer_all_num; z++){
		y = z + 1;

		if(y == 1){
			if(_answer_all_num == 1){
				_answer_last_str = '<p>001'
				_answer_last_str += '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>'
			}else{
				_answer_last_str = '<p>001-';
				if(_answer_all_num <= 10){
					_answer_last_str += set_str_len(_answer_all_num,3) + ' <b>';

				}else{
					_answer_last_str += '010 <b>';
				}
			}
		}

		if(y%10 == 0){
			if(_answer_all_num > 10 && y < _answer_all_num){

				_answer_last_str += '</b></p>\n';
				_answer_last_str += '<p>' + set_str_len((tap10 * 10 + 1),3);

				if((tap10 * 10 + 1) == _answer_all_num){
					_answer_last_str += '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>'

				}else if(_answer_all_num < ((tap10 + 1) * 10)){
					_answer_last_str += '-' + set_str_len(_answer_all_num,3) + ' <b>';

				}else{
					_answer_last_str += '-' + set_str_len(((tap10 + 1) * 10),3) + ' <b>';
					tap10++;
				}
			}

		}else if(y%5 == 0){
			_answer_last_str += _arr_answer_last[z] + " ";
		}else{
			_answer_last_str += _arr_answer_last[z];
		}

	}

	_answer_last_str += '</b></p>\n';

	$("#answer_last").html("");
	$("#answer_last").hide();
	//组合last答案字符串 end
	$("#answer_last").html(_answer_last_str);


}