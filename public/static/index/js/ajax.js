/*
	var data = ajax({
		url:'json.php',
		type:'get',
		data:{username:'liwenkai',password:123456},
		async:true,
		success:function(json){
			
		}
	});

*/

function ajax(obj)
{
	//叫做实例化ajax对象
	var xhr = (function(){
		
		//ajax也存在兼容性问题 
		if (typeof XMLHttpRequest != 'undefined') {
			
			return new XMLHttpRequest();
			
		} else if(typeof ActiveXObject != 'undefined') {
			//ActiveXObject
			var versions = ['Microsoft.XMLHTTP','MSXML2.XMLHttp.6.0','MSXML2.XMLHttp','MSXML2.XMLHttp.3.0'];
			
			for (var i = 0 ; i < versions.length; i++) {
				try {
					return new ActiveXObject(versions[i]);
				} catch(e) {
					
				}
			}
			
		} else {
			
			throw new Error('当前浏览器不支持ajax功能');
		}
	})();
	
	//定义url,加上?rand = Math.random();
	obj.url = obj.url + '?rand=' + Math.random();
	
	//username=123&password=456
	obj.data = (function(data){
		
		var arr = [];
		
		for (var temp in data) {
				
				arr.push(encodeURIComponent(temp) + '=' + encodeURIComponent(data[temp]));
		}
		
		return arr.join('&');
		
	})(obj.data);
	
	//判断是get的两种处理情况
	//处理的方式略有不同
	
	if (obj.type == 'get') {
		
		if (obj.url.indexOf('?') == -1) {
			obj.url += '?' + obj.data;
		} else {
			obj.url += '&' + obj.data;
		}
	}
	
	//异步处理的时候怎么办
	if (obj.async == true) {
		xhr.onreadystatechange = function(){
			if (xhr.readyState == 4) {
				callback();
			}
			
		};
		
	}
	
	//打开
	xhr.open(obj.type, obj.url, obj.async);
	
	
	//分为post发送数据和get发送数据两种情况
	if (obj.type == 'post') {
		xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
		xhr.send(obj.data);
	} else {
		xhr.send(null);
	}
	
	if (obj.async === false) {
		
		callback();
			
	}
	
	//异步处理完成后的回调
	function callback()
	{
		
		if (xhr.status == 200) {
			obj.success(xhr.responseText);
		} else {
			alert('获取数据失败' + xhr.status);
		}
		
	}
	
	
	
	
	
	
	
}