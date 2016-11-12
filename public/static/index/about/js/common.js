
$(document).ready(function(){

//导航弹出按钮
$(".daohang03").click(function(){
	$(".tc_nav").stop().animate({opacity:'1',right:"0"},500);
	$("#superContainer").stop().animate({marginRight:"200px"},500);
	$(".aaaa01").hide();
	$(".aaaa02").show();
});	
//导航关闭按钮
$(".aaaa02").click(function(){
	$(".tc_nav").stop().animate({opacity:'0',right:"-280px"},500);
	$("#superContainer").stop().animate({marginRight:"0"},500);
	$(".aaaa02").hide();
	//setTimeout(".aaaa02",300);  
	$(".aaaa01").show();
	
});	



//内页导航弹出按钮
$(".aaaa03").click(function(){
	$(".tc_nav").stop().animate({opacity:'1',right:"0"},500);
	$(".qita_nav").stop().animate({right:"200px"},500);
	$(".wrapper").stop().animate({right:"200px"},500);
	$(".aaaa03").hide();
	$(".aaaa04").show();
});	
//内页导航关闭按钮
$(".aaaa04").click(function(){
	$(".tc_nav").stop().animate({opacity:'0',right:"-280px"},500);
	$(".qita_nav").stop().animate({right:"0"},500);
	$(".wrapper").stop().animate({right:"0"},500);
	$(".aaaa04").hide();
	$(".aaaa03").show();
	
});	

/////////////////////////////内页的内容区域的标签切换
$(function(){
	    var $div_li =$("div.tab_menu>ul>li");
	    $div_li.click(function(){
			$(this).addClass("selected")            //当前<li>元素高亮
				   .siblings().removeClass("selected");  //去掉其它同辈<li>元素的高亮
            var index =  $div_li.index(this);  // 获取当前点击的<li>元素 在 全部li元素中的索引。
			$("div.tab_box > div")   	//选取子节点。不选取子节点的话，会引起错误。如果里面还有div 
					.eq(index).css('visibility','visible')  //显示 <li>元素对应的<div>元素
					.siblings().css('visibility','hidden'); //隐藏其它几个同辈的<div>元素
		}).hover(function(){
			$(this).addClass("hover");
		},function(){
			$(this).removeClass("hover");
		})
	})



/////////////////////////////内页的导航滚动滚动条变化
$(window).scroll( function(){
		//
	      var diffY=$(document).scrollTop();
		  if(diffY > 100){
			$(".qita_nav").fadeIn(150);
		  }
		  else
		  {$(".qita_nav").fadeOut(150);}
	}); 



/////////////////////////////所有内页的头和内容渐进进入//////////////////////////////////////////////////
//联系我们页面
    $(".lx_wz").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_contact01").animate({marginTop:'-10px',opacity:'0'},100);//等待的时间
	$(".sub_contact01").animate({marginTop:'0',opacity:'1'},400);
	
//盘古新闻页面
    $(".sub_news01").animate({marginTop:'-10px',opacity:'0'},100);//等待的时间
	$(".sub_news01").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_news02").animate({marginTop:'-10px',opacity:'0'},200);//等待的时间
	$(".sub_news02").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_news03").animate({marginTop:'-10px',opacity:'0'},300);//等待的时间
	$(".sub_news03").animate({marginTop:'0',opacity:'1'},400);
	
	$(".sub_news15").animate({marginTop:'-10px',opacity:'0'},300);//等待的时间
	$(".sub_news15").animate({marginTop:'0',opacity:'1'},400);
//	
	$(".sub_news04").animate({marginTop:'-10px',opacity:'0'},100);//等待的时间
	$(".sub_news04").animate({marginTop:'0',opacity:'1'},400);

    $(".sub_news10").animate({marginTop:'-10px',opacity:'0'},200);//等待的时间
	$(".sub_news10").animate({marginTop:'0',opacity:'1'},400);
	
	$(".sub_news07").animate({marginTop:'-10px',opacity:'0'},300);//等待的时间
	$(".sub_news07").animate({marginTop:'0',opacity:'1'},400);

//百度糯米
    $(".sub_nuomi01").animate({marginTop:'-10px',opacity:'0'},100);//等待的时间
	$(".sub_nuomi01").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_nuomi10").animate({marginTop:'-10px',opacity:'0'},200);//等待的时间
	$(".sub_nuomi10").animate({marginTop:'0',opacity:'1'},400);
	


//营销会议
    $(".sub_meet01").animate({marginTop:'-10px',opacity:'0'},100);//等待的时间
	$(".sub_meet01").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_meet02").animate({marginTop:'-10px',opacity:'0'},200);//等待的时间
	$(".sub_meet02").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_meet03").animate({marginTop:'-10px',opacity:'0'},300);//等待的时间
	$(".sub_meet03").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_meet04").animate({marginTop:'-10px',opacity:'0'},400);//等待的时间
	$(".sub_meet04").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_meet06").animate({marginTop:'-10px',opacity:'0'},500);//等待的时间
	$(".sub_meet06").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_meet08").animate({marginTop:'-10px',opacity:'0'},600);//等待的时间
	$(".sub_meet08").animate({marginTop:'0',opacity:'1'},400);

//英才培训
    $(".sub_peix01").animate({marginTop:'-10px',opacity:'0'},100);//等待的时间
	$(".sub_peix01").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_peix02").animate({marginTop:'-10px',opacity:'0'},200);//等待的时间
	$(".sub_peix02").animate({marginTop:'0',opacity:'1'},400);

//百度外卖
	$(".sub_wm").animate({marginTop:'-10px',opacity:'0'},100);//等待的时间
	$(".sub_wm").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_wm02").animate({marginTop:'0',width:'0',height:'0',opacity:'0'},200);//等待的时间
	$(".sub_wm02").animate({marginTop:'0',width:'115',height:'115',opacity:'1'},400);
	$(".sub_wm03").animate({marginTop:'0',width:'0',height:'0',opacity:'0'},300);//等待的时间
	$(".sub_wm03").animate({marginTop:'0',width:'115',height:'115',opacity:'1'},400);
	$(".sub_wm04").animate({marginTop:'0',width:'0',height:'0',opacity:'0'},400);//等待的时间
	$(".sub_wm04").animate({marginTop:'0',width:'115',height:'115',opacity:'1'},400);
	$(".sub_wm05").animate({marginTop:'0',width:'0',height:'0',opacity:'0'},500);//等待的时间
	$(".sub_wm05").animate({marginTop:'0',width:'115',height:'115',opacity:'1'},400);
	$(".sub_wm06").animate({marginTop:'0',width:'0',height:'0',opacity:'0'},600);//等待的时间
	$(".sub_wm06").animate({marginTop:'0',width:'115',height:'115',opacity:'1'},400);
	$(".sub_wm01").animate({marginTop:'-0',opacity:'0'},800);//等待的时间
	$(".sub_wm01").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_wm08").animate({marginTop:'-10px',opacity:'0'},900);//等待的时间
	$(".sub_wm08").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_wm09").animate({marginTop:'-10px',opacity:'0'},1000);//等待的时间
	$(".sub_wm09").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_wm10").animate({marginTop:'-10px',opacity:'0'},1100);//等待的时间
	$(".sub_wm10").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_wm11").animate({marginTop:'-10px',opacity:'0'},1200);//等待的时间
	$(".sub_wm11").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_wm12").animate({marginTop:'-10px',opacity:'0'},1300);//等待的时间
	$(".sub_wm12").animate({marginTop:'0',opacity:'1'},400);


	$(".sub_wm14").animate({marginTop:'-10px',opacity:'0'},100);//等待的时间
	$(".sub_wm14").animate({marginTop:'0',opacity:'1'},400);

//付款方式
	$(".sub_pay").animate({marginTop:'-10px',opacity:'0'},100);//等待的时间
	$(".sub_pay").animate({marginTop:'0',opacity:'1'},400);
	
//网络推广
	$(".sub_tg").animate({marginTop:'-10px',opacity:'0'},100);//等待的时间
	$(".sub_tg").animate({marginTop:'0',opacity:'1'},400);
	$(".ttttt01").animate({left:'-100px',opacity:'0'},200);//等待的时间
	$(".ttttt01").animate({left:'0',opacity:'1'},400);
	$(".ttttt02").animate({left:'702px',opacity:'0'},200);//等待的时间
	$(".ttttt02").animate({left:'602px',opacity:'1'},400);
	$(".ttttt03").animate({left:'-100px',opacity:'0'},400);//等待的时间
	$(".ttttt03").animate({left:'0',opacity:'1'},400);
	$(".ttttt04").animate({left:'702px',opacity:'0'},400);//等待的时间
	$(".ttttt04").animate({left:'602px',opacity:'1'},400);


//网站建设
	$(".sub_web02").animate({marginTop:'-10px',opacity:'0'},100);//等待的时间
	$(".sub_web02").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_web01").animate({marginTop:'-10px',opacity:'0'},200);//等待的时间
	$(".sub_web01").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_web03").animate({marginTop:'-10px',opacity:'0'},200);//等待的时间
	$(".sub_web03").animate({marginTop:'0',opacity:'1'},400);
	
	$(".web01").animate({opacity:'0'},400);//等待的时间
	$(".web01").animate({opacity:'1'},400);
	$(".web02").animate({opacity:'0'},500);//等待的时间
	$(".web02").animate({opacity:'1'},400);
	$(".web03").animate({opacity:'0'},600);//等待的时间
	$(".web03").animate({opacity:'1'},400);
	$(".web04").animate({opacity:'0'},700);//等待的时间
	$(".web04").animate({opacity:'1'},400);

    $(".sub_web04").animate({marginTop:'-10px',opacity:'0'},400);//等待的时间
	$(".sub_web04").animate({marginTop:'0',opacity:'1'},400);
    $(".sub_web05").animate({marginTop:'-10px',opacity:'0'},500);//等待的时间
	$(".sub_web05").animate({marginTop:'0',opacity:'1'},400);
    $(".sub_web06").animate({marginTop:'-10px',opacity:'0'},400);//等待的时间
	$(".sub_web06").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_web07").animate({marginTop:'-10px',opacity:'0'},500);//等待的时间
	$(".sub_web07").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_web09").animate({marginTop:'-10px',opacity:'0'},600);//等待的时间
	$(".sub_web09").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_web08").animate({marginTop:'-10px',opacity:'0'},700);//等待的时间
	$(".sub_web08").animate({marginTop:'0',opacity:'1'},400);
//	
	$(".sub_tui").animate({marginTop:'-10px',opacity:'0'},200);//等待的时间
	$(".sub_tui").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_sousuo").animate({marginTop:'-10px',opacity:'0'},300);//等待的时间
	$(".sub_sousuo").animate({marginTop:'0',opacity:'1'},400);
//	
	$(".sub_yidong").animate({marginTop:'-10px',opacity:'0'},200);//等待的时间
	$(".sub_yidong").animate({marginTop:'0',opacity:'1'},400);
	
	
	
	
	
	
	


//效果评估
    $(".sub_effect").animate({marginTop:'-10px',opacity:'0'},400);//等待的时间
	$(".sub_effect").animate({marginTop:'0',opacity:'1'},400);

	$(".ggggg01").animate({left:'655px',opacity:'0'},600);//等待的时间
	$(".ggggg01").animate({left:'555px',opacity:'1'},400);
	$(".ggggg02").animate({left:'910px',opacity:'0'},700);//等待的时间
	$(".ggggg02").animate({left:'810px',opacity:'1'},400);
	$(".ggggg04").animate({left:'-109px',opacity:'0'},800);//等待的时间
	$(".ggggg04").animate({left:'9px',opacity:'1'},400);
	$(".ggggg03").animate({left:'434px',opacity:'0'},900);//等待的时间
	$(".ggggg03").animate({left:'534px',opacity:'1'},400);
	$(".sub_effect06").animate({marginTop:'0',opacity:'0'},1200);//等待的时间
	$(".sub_effect06").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_effect07").animate({marginTop:'0',opacity:'0'},1600);//等待的时间
	$(".sub_effect07").animate({marginTop:'0',opacity:'1'},400);

//公司简介
	$(".jianjie01").animate({marginTop:'-10px',opacity:'0'},200);//等待的时间
	$(".jianjie01").animate({marginTop:'0',opacity:'1'},400);
	
	$(".jian01").animate({marginTop:'80px',opacity:'0'},300);//等待的时间
	$(".jian01").animate({marginTop:'0',opacity:'1'},400);
	$(".jian02").animate({marginLeft:'200px',opacity:'0'},300);//等待的时间
	$(".jian02").animate({marginLeft:'97px',opacity:'1'},400);


//组织架构
	$(".jia01").animate({marginLeft:'-100px',opacity:'0'},300);//等待的时间
	$(".jia01").animate({marginLeft:'77px',opacity:'1'},400);
	$(".jia02").animate({marginLeft:'200px',opacity:'0'},300);//等待的时间
	$(".jia02").animate({marginLeft:'61px',opacity:'1'},400);
	
	$(".jia03").animate({marginLeft:'-100px',opacity:'0'},400);//等待的时间
	$(".jia03").animate({marginLeft:'77px',opacity:'1'},400);
	$(".jia04").animate({marginLeft:'200px',opacity:'0'},400);//等待的时间
	$(".jia04").animate({marginLeft:'61px',opacity:'1'},400);
	
	$(".jia05").animate({marginLeft:'-100px',opacity:'0'},500);//等待的时间
	$(".jia05").animate({marginLeft:'77px',opacity:'1'},400);
	$(".jia06").animate({marginLeft:'200px',opacity:'0'},500);//等待的时间
	$(".jia06").animate({marginLeft:'61px',opacity:'1'},400);


//招贤纳士
	$(".sub_job01").animate({marginTop:'-10px',opacity:'0'},200);//等待的时间
	$(".sub_job01").animate({marginTop:'0',opacity:'1'},400);
	$(".jianli01").animate({marginTop:'-10px',opacity:'0'},300);//等待的时间
	$(".jianli01").animate({marginTop:'0',opacity:'1'},400);
	$(".jianli02").animate({marginTop:'-10px',opacity:'0'},400);//等待的时间
	$(".jianli02").animate({marginTop:'0',opacity:'1'},400);
	
	$(".ggzz01").animate({marginTop:'-10px',opacity:'0'},400);//等待的时间
	$(".ggzz01").animate({marginTop:'0',opacity:'1'},400);
//
	$(".sub_job10").animate({marginTop:'-10px',opacity:'0'},300);//等待的时间
	$(".sub_job10").animate({marginTop:'0',opacity:'1'},400);

//
	$(".sub_job14").animate({marginTop:'-10px',opacity:'0'},200);//等待的时间
	$(".sub_job14").animate({marginTop:'0',opacity:'1'},400);

//
	$(".sub_job18").animate({marginTop:'-10px',opacity:'0'},200);//等待的时间
	$(".sub_job18").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_job19").animate({marginTop:'-10px',opacity:'0'},400);//等待的时间
	$(".sub_job19").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_job20").animate({marginTop:'-10px',opacity:'0'},600);//等待的时间
	$(".sub_job20").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_job21").animate({marginTop:'-10px',opacity:'0'},800);//等待的时间
	$(".sub_job21").animate({marginTop:'0',opacity:'1'},400);

//
	$(".sub_job23").animate({marginTop:'-10px',opacity:'0'},200);//等待的时间
	$(".sub_job23").animate({marginTop:'0',opacity:'1'},400);
	$(".sub_job30").animate({marginTop:'-10px',opacity:'0'},300);//等待的时间
	$(".sub_job30").animate({marginTop:'0',opacity:'1'},400);



















/////////////////////////////百度外卖详细页面
	$(window).scroll( function(){
	      var diffY=$(document).scrollTop();
		  if(diffY > 100){
			$(".waimai01").animate({marginLeft:"0",opacity:'1'},400);
			$(".waimai02").animate({marginLeft:"0",opacity:'1'},400);
		  }
	});
////
	$(window).scroll( function(){
	      var diffY=$(document).scrollTop();
		  if(diffY > 600){
			$(".waimai03").animate({marginLeft:"0",opacity:'1'},400);
			$(".waimai04").animate({marginLeft:"0",opacity:'1'},400);
			$(".waimai05").animate({marginRight:"0",opacity:'1'},400);
		  }
	}); 

////
	$(window).scroll( function(){
	      var diffY=$(document).scrollTop();
		  if(diffY > 1500){
			$(".waimai06").animate({marginLeft:"0",opacity:'1'},400);
			$(".waimai07").animate({marginTop:"0",opacity:'1'},400);
		  }
	}); 
////
	$(window).scroll( function(){
	      var diffY=$(document).scrollTop();
		  if(diffY > 2000){
			$(".waimai08").animate({marginLeft:"0",opacity:'1'},400);
			$(".waimai09").animate({marginTop:"0",opacity:'1'},400);
			$(".waimai10").animate({marginbottom:"0",opacity:'1'},400);
		  }
	}); 


/////////////////////////////关于我们内页的滚动 滚动条变化
$(window).scroll( function(){
	      var diffY=$(document).scrollTop();
		  if(diffY > 200){
			$(".jian03").animate({marginTop:"0",opacity:'1'},400);
			$(".jian04").animate({marginLeft:"97px",opacity:'1'},400);
		  }
});  
$(window).scroll( function(){
	      var diffY=$(document).scrollTop();
		  if(diffY > 500){
			$(".jian05").animate({marginTop:"0",opacity:'1'},400);
			$(".jian06").animate({marginLeft:"97px",opacity:'1'},400);
		  }
});  
$(window).scroll( function(){
	      var diffY=$(document).scrollTop();
		  if(diffY > 950){
			$(".jian07").animate({marginTop:"0",opacity:'1'},400);
			$(".jian08").animate({marginLeft:"97px",opacity:'1'},400);
		  }
});  
$(window).scroll( function(){
	      var diffY=$(document).scrollTop();
		  if(diffY > 1200){
			$(".jian09").animate({marginTop:"0",opacity:'1'},400);
			$(".jian10").animate({marginLeft:"97px",opacity:'1'},400);
		  }
});  













//虚拟主机页面的切换
$(".mmmm01").hover(function(){
	$(".ffttpp01").css('display','block');
	$(".ffttpp02").css('display','none');
});	

$(".mmmm02").hover(function(){
	$(".ffttpp02").css('display','block');
	$(".ffttpp01").css('display','none');
});	





});




















