<?php if (!defined('THINK_PATH')) exit();?> <div style="position: relative; height:100%;">

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/public/admin/css/css.css" />
<link type="text/css" rel="stylesheet" href="/public/admin/css/jbox.css"/>
<link href="/public/admin/css/Mbmber.css?2016031605" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/public/admin/css/style.css" />
<link rel="stylesheet" type="text/css" href="/public/admin/css/style.css">
<!-- qingfu -->
<link type="text/css" rel="stylesheet" href="/public/admin/css/y_style.css"/> 
<!--end -->
	<link rel="stylesheet" type="text/css" href="/public/admin/css/kefu.css" />
<link rel="stylesheet" type="text/css" href="/public/admin/css/headerandfooter.css">
<script language=javascript type="text/javascript" src="/public/admin/js/jquery.js"></script>
<script language=javascript src="/public/admin/js/jquery.jBox.min.js" type=text/javascript></script>
<script language=javascript src="/public/admin/js/jquery.jBoxConfig.js" type=text/javascript></script>
<script  type="text/javascript" src="/public/admin/js/ui.core.js"></script>
<script  type="text/javascript" src="/public/admin/js/ui.tabs.js"></script>
<script type="text/javascript" src="/public/admin/js/WdatePicker.js" language="javascript"></script>
<script language="javaScript" type="text/javascript" src="/public/admin/js/backtotop.js"></script>
<script type="text/javascript" src="/public/admin/js/utils.js"></script>
<script type="text/javascript" src="/public/admin/js/jquery.artDialog.source.js?skin=aero"></script>
<script type="text/javascript">
	function makevar(v){
		var d={};
		for(i in v){
			var id = v[i];
			d[id] = $("#"+id).val();
			if(!d[id]) d[id] = $("input[name='"+id+"']:checked").val();
		}
		return d;
	}
	function ajaxGetData(url,targetid,data){
			if(!url) return;
			data = data||{};
			var thtml = '<div class="loding"><img src="/public/admin/images/008.gif"align="absmiddle" /></div>';
			$("#"+targetid).html(thtml);
			
			$.ajax({
				url: url,
				data: data,
				timeout: 10000,
				cache: true,
				type: "get",
				dataType: "json",
				success: function (d, s, r) {
					if(d) $("#"+targetid).html(d.html);
				},
				error: '',
				complete: ''
			});
		
	}
	var currentUrl = window.location.href.toLowerCase();
	$(document).ready(function() {
		$('#rotate > ul').tabs();/* 第一个TAB渐隐渐现（{ fx: { opacity: 'toggle' } }），第二个TAB是变换时间（'rotate', 2000） */
		$('.dw_navlist li a').click(function() { // 绑定单击事件
			var nowurl = $(this).attr('href');
			var vid = nowurl.split("#");
			try{
				if(currentUrl.indexOf(vid[0]) != -1 ){
					$('#rotate > ul').tabs('select', "#"+vid[1]); // 切换到第三个选项卡标签
					var geturl= $('#rotate > ul li a [href="#'+vid[1]+'"]').attr("ajax_href");
					ajaxGetData(geturl,vid[1]);
					return false;
				}
			}catch(ex){};
				return true;
		});
		
		$('.ajaxdata a').click(function(){
			var geturl = $(this).attr('ajax_href');
			var hasget = $(this).attr('get')||0;
			var nowurl = $(this).attr('href');
			var vid = nowurl.split("#");
			if(hasget!=1) ajaxGetData(geturl,vid[1]);
			$(this).attr('get','1');
			$('html,body').animate({scorllTop:0},1000);
			return false;
		})
	});
	//ui
    function addBookmark(title, url) {
        if (window.sidebar) {
            window.sidebar.addPanel(title, url, "");
        }
        else if (document.all) {
            window.external.AddFavorite(url, title);
        }
        else if (window.opera && window.print) {
            return true;
        }
    }
    function SetHome(obj, vrl) {
        try {
            obj.style.behavior = 'url(other/.cn/member/#default#homepage)'; obj.setHomePage(vrl);
            NavClickStat(1);
        }
        catch (e) {
            if (window.netscape) {
                try {
                    netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
                }
                catch (e) {
                    alert("抱歉！您的浏览器不支持直接设为首页。请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为“true”，点击“加入收藏”后忽略安全提示，即可设置成功。");
                }
                var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
                prefs.setCharPref('browser.startup.homepage', vrl);
            }
        }
    }
        $(function() {
            $(".dw_navlist li,.dv_r_5 li").mousemove(function() {
                $(this).addClass("current");
            }).mouseout(function() {
                $(this).removeClass("current");
            });
        });
</script>
<body>
    
<!-- <div class="sub_banner" style="width:100%; height:320px; background:url(/Style/Stock/img/sub_bannerr.jpg) no-repeat center;">
</div> -->

<title>我的账户-- 手投网</title>

<!---->

<link rel="stylesheet" type="text/css" href="/public/admin/css/evaluate.css" />

<link rel="stylesheet" type="text/css" href="/public/admin/css/tip-yellowsimple.css" />

<script language=javascript type="text/javascript" src="/public/admin/js/jquery.js"></script>

<script language="javascript" src="/public/admin/js/jquery.poshytip.js" type="text/javascript"></script>

<script type="text/javascript">

  $(function(){

  $('.xtitle').poshytip({

    className: 'tip-yellowsimple',

    showOn: 'hover',

    alignTo: 'target',

    alignX: 'center',

    alignY: 'top',

    offsetX: 0,

    offsetY: 5 

  });

}); 



</script>



<!--风险承受能力评估弹出层B-->

<script>

	$(function(){

		$(".cha").click(function(){ 

			$('.alert_winBox').hide();

			$('.bgDiv').hide();

		});

	});

</script>



<!--风险承受能力评估弹出层E-->



<style>

.zixunbox {

    background: none repeat scroll 0 0 #fff;

    left: 50%;

    margin-left: -116px;

    margin-top: -256px;

    position: fixed;

    top: 50%;

    z-index: 1004;

}







.zixunbox ul li {

    border-bottom: 1px dashed #c8c8c8;

    height: 47px;

    line-height: 47px;

    margin: 0 20px;

    overflow: hidden;

}

.zixunbox .over_icon{

	background-image:url("/public/admin/images/over_icon.png");



    height: 21px;

    position: absolute;

    right: -10px;

    top: -10px;

    width: 20px;

    z-index: 1003;

}



.zixunbox ul li a {

    background-image: url("/public/admin/images/qq_icon.png");

	background-repeat:no-repeat;

	background-position:0px center;

    color: #858585;

    display: inline-block;

    height: 47px;

    text-indent: 20px;

    width: 92px;

}

.zixunbox p {

    background: url("/public/admin/images/dianh.png");

	background-repeat:no-repeat;

	background-position:40px center;

    color: #2382ba;

    font-size: 16px;

    padding-bottom: 20px;

    padding-left: 30px;

    padding-top: 20px;

    text-align: center;

}

.zixunbox h3 {

    margin-bottom: 10px;

    margin-top: 20px;

    text-align: center;

}

.zixunbox span {

    display: block;

    padding-bottom: 20px;

    

    text-align: center;

}



.NewYear{

    width: 100%;

    position: relative;

    height: 112px;

    overflow: hidden;

    background: url(images/NewYear_01_02.png) no-repeat center center;

    background-size: 1920px 112px;

    filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/NewYear_01_02.png',sizingMethod='scale'); 

}



.NewYear>img.NewYear_close{

    position: absolute;

    display: block;

    width: 35px;

    right: 5px;

    top: 5px;

    cursor: pointer;

    opacity: 0.8;

    filter:alpha(opacity=80);       /* IE */

    -moz-opacity:0.8;              /* 老版Mozilla */

    -khtml-opacity:0.8;              /* 老版Safari */

}

.NewYear>img.NewYear_close:hover{

    opacity: 1;

    filter:alpha(opacity=100);       /* IE */

    -moz-opacity:100;              /* 老版Mozilla */

    -khtml-opacity:100;              /* 老版Safari */

    

}

/*奥运标志*/

    .nav_main .OlympicBox{float:left;margin-left:15px;padding:20px 0;}

</style>

<!-- <div class="NewYear">

        <img src="/public/admin/images/NewYear2_03.png" class="NewYear_close"/>

    </div>

    <script>

        $(".NewYear_close").on("click",function(){

            $(".NewYear").animate({

                "height":"0"

            })

        })

    </script> -->

<!--导航-->



<div class="top">

	<div class="top_main">

		<span class="top_l"><img style="vertical-align: middle;" src="/public/admin/images/phone.png" width="15" height="15">客服热线：400-047-5588</span>

        <span class="top_m">

            <em class="wx_fade_box"><img src="/public/admin/images/index_new_5_1a.png" width="18" height="15" style="margin-right:5px;vertical-align: middle;">微信<img src="/public/admin/images/index_new_5_2a.png" width="6" height="3" style="margin-left:5px;vertical-align: middle;"></em>

            <em class="wx_fade_box2" style="display:none;"><img src="/public/admin/images/index_new_5_1b.png" width="18" height="15" style="margin-right:5px;vertical-align: middle;">微信<img src="/public/admin/images/index_new_5_2b.png" width="6" height="3" style="margin-left:5px;vertical-align: middle;"></em>

            <em class="wx_fadeinbox" style="display:none;line-height: 20px;">

                <img src="/public/admin/images/index_new_6.jpg" width="124" height="124">

                <i>扫码注册，领<strong style="font-weight:normal;color:#f52f1b;">百元红包</strong></i> 

                <i><a href="/help/weixin" target="_blank" style="color:#0ca1d2;">查看详情>></a></i>

            </em>

        </span>

        <span class="top_r">

            <a href="/help/help" >帮助中心</a>

            <a href="/member/index" class="new_name">17610770080</a>&nbsp;&nbsp;

            <a href="/member/msg#fragment-1" >消息(10)</a>

            <a href="/Member/common/actlogout" >退出</a>

        </span>

	</div>        

</div>

<script type="text/javascript">

	//顶部微信

    $(".top_main .top_m").hover(function(){

        $(this).find(".wx_fade_box2").show();

        $(this).find(".wx_fade_box").hide();

        $(this).find(".wx_fadeinbox").show();

    },function(){

        $(this).find(".wx_fade_box2").hide();

        $(this).find(".wx_fade_box").show();

        $(this).find(".wx_fadeinbox").hide();

    });

</script>

    <div class="nav">

	<div class="nav_main">

    	<div class="logo"><a href="/" target="_blank"><p><img alt="" style="height: 65px; width: 309px; float: none; margin: 0px;" src="/public/admin/images/20170307223459.jpg" /></p></a></div>

<div class="nav_list">

<div id="topnavbar" style="display: block;">

    <div id="topnanv">

	<div class="my_zh"></div>

<div class="defu nav_cur"> <a href="/index.html">首页</a> </div>

<div class="defu nav_cur"><a href="/freestock/index" target="_blank">热销活动</a></div>

<div  class="defu nav_cur" class="posbox"> <a  id="invest" href="/invest/index">我要出借</a></div>

<div  class="defu nav_cur"><a id="borrow" href="/capital/index">我要借款</a></div>

<div class="defu nav_cur"> <a  id="xinshou"  href="/Help/novice" target="_blank">新手指引</a> </div>

<div id="anvlfteb">

<div selec="youhui" class="posbox nav_cur"><a  id="jianjie" href="/aboutus/jianjie.html">信息披露</a> <i></i></div>

<div id="seledbox" class="posiabox" style="display: none; left: 1px;"></div>

                </div>

              </div>

            </div>

        </div>

    </div>

</div>



<script type="text/javascript">



/* 导航 */

$(function(){

	var $anvlfteb=$('#anvlfteb'),

		$posbox=$anvlfteb.find('div.posbox'),

		$seledbox=$("#seledbox"),

		anvjson={

			bbs:'<a href="/invest/index">出借产品</a>'

				/*+'<a href="/invest/index?type=search&&stock_type=2">月月盈</a>'+

				'<a href="/invest/index?type=search&&stock_type=4">打新宝</a>'+

                '<a href="/debt/index">债权转让</a>'*/

				,

        	news:'<a href="/daystock/index">按天融资</a>'+

				'<a href="/Monthstock/index">按月融资</a>'+

				'<a href="/Imtrader/index">我是操盘手</a>',

        	 post:'<a href="/Help/novice">新手指引</a>',

			youhui:'<a href="/aboutus/jianjie.html">公司简介</a>'+

			'<a href="/aboutus/anquan.html">安全保障</a>'+

			'<a href="/aboutus/tdjs.html">团队介绍</a>'+

			'<a href="/aboutus/zizhi.html">证件资质</a>'+

			'<a href="/aboutus/licheng.html">发展历程</a>'+

			'<a href="/aboutus/lianxi.html">联系我们</a>'+

			'<a href="/aboutus/yingcai.html">诚聘英才</a>'+

			'<a href="/aboutus/partner.html">友情链接</a>'+

			'<a href="/help/platform_data">平台数据</a>'

		};

		 



		$posbox.mouseover(function(){

           var i=$(this).index();

           $(this).addClass("anvh").siblings().removeClass("anvh");

                  //$seledbox.find(".new_point").show();

           var selec=$(this).attr("selec");

           if($seledbox.is(":hidden")){

              $seledbox.show(200).css("left",100*i+1).html("<em class='new_point'>"+"</em>"+"<div>"+anvjson[selec]+"</div>")



           }else{

              $seledbox.show(200).animate({left:100*i+1},200,function(){

                 $("#seledbox").html("<em class='new_point'>"+"</em>"+"<div>"+anvjson[selec]+"</div>")

              })

           }

        });

		$anvlfteb.mouseleave(function(){

			$seledbox.hide();

			$posbox.removeClass("anvh");

		});

        var href = window.location.href;

        var a=$(".nav_cur")[0].getElementsByTagName("a");

        for(var i=0;i<a.length;i++){

            a[i].className="";

            if(href.indexOf('invest')>0){

                $("#invest").addClass("current");

            }else if(href.indexOf('capital')>0){

                $("#borrow").addClass("current");

            }else if(href.indexOf('novice')>0){

                $("#xinshou").addClass("current");

            }else if(href.indexOf('aboutus')>0){

                $("#jianjie").addClass("current");

            }else{

                $("#index").addClass("current");

            }

        }

})



/*微博二维码显示效果*/



$(document).ready(function() {

 	$(".footer .footerC .guanzhu span a").hover(function() {

 		$(this).children('img').show()

 	}, function() {

 		$(this).children('img').hide()

 	});



 })



</script>

<script type="text/javascript">



    var dl_num=$(".header .main dl").length;

    for(var i=0;i<dl_num;i++){

        var dd_num=$(".header .main dl:eq("+i+") dd").length;

        if(dd_num<=1){

            $(".header .main dl:eq("+i+") dd").remove();

            $(".header .main dl:eq("+i+") dt em").remove();

        }

    }



</script>





<script type="text/javascript">

    function bodyTop(){

        $("html,body").animate({

            scrollTop:"0px"

        },1000);

    }

	$(".header .main .fr dl dd").css("float","none");

</script>

<script type="text/javascript">

$(function(){

	$(".kefu").click(function(){

		$(".zixunbox").fadeIn("slow");

		$(".body_box").fadeIn("slow");

	});

	$(".liuyan").click(function(){

		$(".liuy_box").fadeIn("slow");

		$(".body_box").fadeIn("slow");

	});

	

	$(".over_icon").click(function(){

		$(".zixunbox").fadeOut("slow");

		$(".body_box").fadeOut("slow");

		$(".liuy_box").fadeOut("slow");

	});

	

	$(".over_cionn").click(function(){

		$(".video").fadeOut("slow");

	});

});



    $(".header .fr dl").hover(function(){

        $(".header .fr dl dd").stop();

        $(".header .fr dl dd").hide();

        $(this).children("dd").fadeIn(500);

    },function(){

        $(this).children("dd").fadeOut(500);

    });

$(window).scroll(function(){

    var topnum=$(window).scrollTop();

    if(topnum>510){

        $(".header").addClass("header-on");

    }else{

        $(".header").removeClass("header-on");

    }

});

</script>







<div class="float-box"></div>

<script type="text/javascript">

    var w_width= $(window).width();

    $(window).resize(function(){

        w_width= $(window).width();

        fix_hie(w_width);

    });

    function fix_hie(w_wid){

        if(w_wid<1340){

            $("body").addClass("body-small");

            $(".float-login").fadeOut(500);

        }else{

            $("body").removeClass("body-small");

            $(".float-login").fadeIn(500);



        }

    }

    fix_hie(w_width);



    $(".float-box").click(function(){

        if($(".float-login").css("display")=="none"){

            $(".float-login").fadeIn(500);

        }else{

            $(".float-login").fadeOut(500);

        }

    });

</script>







<!--页眉end-->

	 <!--风险能力评估弹出层  （签章 and $sign eq 'yes'签章)暂时屏蔽   B-->

        <!--风险能力评估弹出层 E-->



<!--中部开始-->

<div class="Cmm" style="margin-top:10px"> <div class="user_list" > <a class="dw_top" href="/member" style=" background:#e74a4a; border:0px; color:#fff; font-size:18px;">帐户总览</a>
  <div id="dw_m_left">
  
    <div class="dv_r_5" > <a class="bt3"><span></span>资金管理</a> </div>
    <div class="dw_navlist">
      <ul>
        <li><a href="/member/capital#fragment-2">资金流水</a></li>     
        <li><a href="/member/charge#fragment-1">我要充值</a></li>
        <li><a href="/member/withdraw#fragment-1">我要提现</a></li>
        <li><a href="/member/bank#fragment-1">银行帐户</a></li>
        <li><a href="/member/myinterestrate#fragment-1">我的加息券<img src="/Style/images/quan.gif" style="display: inline-block;height:16px;vertical-align: middle;margin: -2px 0 0 2px;"></a></li>
      </ul>
    </div>
    
    <div class="dv_r_5"> <a class="bt5"><span></span>理财管理</a> </div>
    <div class="dw_navlist">
      <ul>
        <li><a href="/member/tendout#fragment-3">投标记录</a></li>
        <!-- <li><a href="/member/current#fragment-1">活期理财</a></li> -->
		<li><a href="/member/borrowin#fragment-3">借款记录</a></li>
<!-- 		<li><a href="/member/debt#fragment-1">债权转让</a></li> 
 -->        <!--<li  class="last"><a href="/member/auto/index.html">自动投标</a></li>-->
      </ul>
    </div>
	
  
  <!---
	<div class="dv_r_5"> <a class="bt4"><span></span>股票配资</a> </div>
    <div class="dw_navlist">
      <ul>
        <li><a href="/member/daystock#fragment-1">按天配资</a></li>
        <li><a href="/member/Monthstock#fragment-1">按月配资</a></li>
        <li><a href="/member/Imtrader#fragment-1">我是操盘手</a></li>
        <li><a href="/member/Freestock#fragment-1">免费体验</a></li>
      </ul>
    </div>
	-->
	<div class="dv_r_5" > <a class="bt7"><span></span>邀请好友</a></div>
    <div class="dw_navlist">
      <ul>
        <li><a href="/member/promotion#fragment-1">邀请好友<img src="/public/admin/images/mac-xin.gif" style="display: inline-block;height:16px;vertical-align: middle;margin: -2px 0 0 2px;"></a></a></li>
        <li><a href="/member/promotion#fragment-2">奖金记录</a></li>
      </ul>
    </div>
	
    <div class="dv_r_5" > <a class="bt6"><span></span>基本设置</a> </div>
    <div class="dw_navlist">
		<ul>
			<li><a href="/member/memberinfo#fragment-1">基本资料</a></li>
			<li><a href="/member/user#fragment-1">头像与密码</a></li>
			<li><a href="/member/verify?id=1#fragment-2">认证中心</a></li>
	   <li><a href="/member/sign">电子签章</a></li> 
	 
	    <li><a href="/member/index/doevaluate">风险承受能力评估</a></li>
				</ul>
    </div>
  
  </div>
</div>
<!--<script type="text/javascript">
dw_solid =function (a,b,c){
var a1=$(a).children(),
b1=$(a).children(b),
c1=$(a).children(c),
lh=location.href;
lh=lh.split(location.host)[1];
c1.hide();
lh=="/member/verify?id=1#fragment-3" && a1.eq(1).show();
b1.each(function(){
var next=$(this).next(),
index=next.index(),
sp=$('span',this),
sibp=$('span',$(this).siblings(b)),
aa=$('a',next);
aa.each(function(){
var ah=$(this).attr('href');
if(lh==ah){
a1.eq(index).show();
sp.addClass('on');
}
});
$(this).click(function(){
sp.toggleClass('on');
sibp.removeClass('on');
next.slideToggle().siblings(c).slideUp();
})
});
}
dw_solid("#dw_m_left",".dv_r_5",".dw_navlist");
$(window).load(function(){
$('body,html').animate({scrollTop:0},1);
});
</script>-->


  <div id="hy_right">

    <!--个人中心修改开始-->

    <div class="dw_list">

      

      <div class="dw_dierheng">

        <div style="overflow:visible">

          <div class="touxiang"> <a href="/member/user#fragment-1" title="点击进行头像更换">

           <img style="width: 114px; height: 114px; border: 1px solid #dedede; border-radius:4px;" alt="点击进行头像更换" src="/public/admin/images/noavatar_middle.gif"></a> </div>

          <div class="touxiang_right">

            <div class="dw_p1">

              <p>17610770080</p>

            </div>

            <div class="dw_p3">

              <div class="dw_tip">

                  <div class="dw_tip2">还未设支付密码<span ></span> <a  style="color:#0099DD" href="/member/user#fragment-3">[点此设置]</a><span ></span></div>

                  <div class="dw_tip3"> </div>

                  <div class="dw_tip5" id="dwtipkff"> </div>

                </div>

                <script type="text/javascript">

                $('#dwtipkff').click(function(){

                $(this).parent().hide();

                });

                </script>                                          <a href="/member/verify#fragment-3"><img alt="实名认证未通过"  title="实名认证未通过" style="vertical-align:middle"; src="/public/admin/images/id_0.gif"/></a>&nbsp;<a href="/member/verify#fragment-2"><img alt="手机认证通过"  style="vertical-align:middle"; title="手机认证通过" src="/public/admin/images/phone.gif"/>&nbsp;<a  href="/member/user#fragment-3"><img alt="支付密码未设置"  style="vertical-align:middle"; title="支付密码未设置" src="/public/admin/images/mima_0.gif"/></a>&nbsp;<a  href="/member/sign"><img alt="电子签章未设置"  style="vertical-align:middle"; title="电子签章未设置" src="/public/admin/images/pc_qian1_03.png"/></a>&nbsp;			  <!--风险承受能力评估图标B-->

				<a href="/member/index/doevaluate" style="vertical-align:middle"><img alt="风险承受能力未评估" title="风险承受能力未评估" src="/public/admin/images/anquan.png"></a>&nbsp; 

								<!--风险承受能力评估图标E-->

                <!--<a href="/member/memberauth/index" style="vertical-align:middle"><img alt="银行监管" title="银行监管" src="/public/admin/images/jianguan01.png"></a>-->

			  </div>

          </div>

        </div>

        <div class="heng2" style="overflow: inherit;">

          <div>

            <p style="margin-bottom: 20px;">可用资金：<em style="color: #ff5301;font-size: 20px;">￥0.00</em><span class="chongzhi" onclick="javascript:location.href=('/member/withdraw#fragment-1')" >提现</span><span onclick="javascript:location.href=('/member/charge#fragment-1')" class="chongzhi" style="margin-right: 10px;background: #f34e3d;border: 1px solid #f34e3d;color: #fff;">充值</span></p>

            <div>

              <img src="/public/admin/images/wenhao.png" style="display: block; float: left;margin: 7px 5px 0 0;cursor: pointer;" class="zichan_wen"/>

              资产总额：<em>￥0.00</em> 元

              <p class="zichan">

                资产总额 = 可用资金 + 冻结资金 + 待收本金 + 待收利息；详情请见下方的资产负债表

              </p>

            </div>

            <div style="margin-bottom: 0;position: relative;">

              <img src="/public/admin/images/wenhao.png" style="display: block; float: left;margin: 7px 5px 0 0;cursor: pointer;" class="shouyi_wen"/>

              今日收益：<em>￥0.00</em> 元

              <span onclick="javascript:location.href=('/member/capital?start_time=2017-08-20&end_time=2017-08-20#fragment-2')"  style="margin-left: 16px; font-size: 12px;color: #008cb4;cursor: pointer;">查看详情</span>

              <p class="shouyi" style="top: -66px;">

                今日收益包括今日的回款利息、邀请好友奖励、投标奖励、微信注册红包、其他奖励；可在资金流水中查看详情

              </p>

            </div>

            <script>

                $(".zichan_wen").on("mouseover",function(){

                  $(".zichan").css({"display":"block"})

                }).on("mouseout",function(){

                  $(".zichan").css({"display":"none"})

                });

                $(".shouyi_wen").on("mouseover",function(){

                  $(".shouyi").css({"display":"block"})

                }).on("mouseout",function(){

                  $(".shouyi").css({"display":"none"})

                })

              </script>

          </div>

      <br>

     <!-- <span style="margin-left:10px;">您有<b style="color:red;">&nbsp;￥0.00&nbsp;</b>注册奖励，<span style="color:red">（不可提现）</span></span>-->

        </div>

      </div>

    </div>

    <!--个人中心修改结束-->

      <!--后增加的banner图开始-->

    <style>

          .zhzlBox{height:80px;padding:5px;font-size:14px;overflow:hidden;-webkit-font-smoothing: antialiased;font-smoothing: antialiased;}

          .zhzlBox ul{width: 100%;}

          .zhzlBox ul li{float: left;width:443px;height:80px;margin-right:4px;position: relative;}

          .zhzlBox ul li img{display: block;width: 100%;}

          .zhzlBox ul li .zhzlCon{width:245px; text-align: center; position: absolute;top:39px;left:100px;color:#0387c8;font-size:12px;line-height: 18px;}

          .zhzlBox ul li .zhzlCon span{ color: #f0882c;}

          .zhzlBox ul li .zhzlCon span{ font-weight: bold; margin:0 5px;}

          .zhzlBox ul li p.One{display:none;position: absolute;right:0px;bottom:0px; width:95px;height:27px;line-height:27px;border-radius:3px;overflow: hidden; text-align: center;color: #fff;cursor: pointer;background-color:#0387c8;}

          .zhzlBox ul li p.Two{display:none;position: absolute;right:0px;bottom:0px; width:120px;height:27px;line-height:27px;border-radius:3px;overflow: hidden; text-align: center;color: #fff;cursor: pointer;background-color:#01a99a;}

          .zhzlBox ul li p.One a,.zhzlBox ul li p.Two a{color:#ffffff;}

          .zhzlBox ul li p.One a:hover,.zhzlBox ul li p.Two a:hover{color:#fbff9a !important;text-decoration: underline;}

          .zhzlBox ul li:hover p.One,.zhzlBox ul li:hover p.Two{display: block;}

          .zhzlBox ul li p.One span,.zhzlBox ul li p.Two span{position: absolute;display: block;width: 100%;height: 100%;color: #fff600; font-size:12px;line-height: 27px;}

      </style>

	<div class="dw_list dw_list_list">

        <div class="zhzlBox">

          <ul>

              <!--每周投标都有奖<li>

                <img src="/public/admin/images/center_l2.jpg" width="443" height="80">

                <div class="zhzlCon" style="top:40px;">目前您本周期投标总额<span>0</span>元，<br/>投3万奖50，最高奖1888元</div>

                <p class="One"><span><a href="/freestock/index#actTwo" target="_blank">我要拿奖 >></a></span></p>

              </li>-->

              <li>

                <img src="/public/admin/images/center_r2.jpg" width="443" height="80">

                <p class="Two"><span><a href="/member/myinterestrate#fragment-1" target="_blank">查看我的加息券 >></a></span></p>

              </li>

              <li style="margin-right:0">

                <img src="/public/admin/images/center_r3.jpg" width="443" height="80">

                <div class="zhzlCon" style="left: 112px;">8月，目前您的加权投标总额<span>0</span>元，排名第<span>20+</span>，加油！</div>

                <p class="One"><span><a href="/freestock/index#actThree" target="_blank">我要冲榜 >></a></span></p>

              </li>

          </ul>

        </div>

    </div>

    <div class="clr"></div>

    

    <!--后增加的banner图结束-->

    

    <!-- <div class="dw_list dw_list_list">

        <div class="zhzlBox">

          <ul>

              <li>

                <img src="/public/admin/images/geren1.png"/>

                <p><span>每周投标都奖现金</span></p>

                <p style="top: 30px;">本周期（<a style='font-size: 12px;' >活动未开始</a>）</p>

                <p style="top: 50px;">您累计投标<em>活动未开始</em>元</p>

                <p class="One"><em></em><span onclick="javascript:window.open('/freestock/index#actOne')">查看详情</span></p>

              </li>

              <li style="margin-right: 0">

                <img src="/public/admin/images/geren2.png"/>

                <p style="left: 130px;"><span>6月加权投标前十奖“壕”礼：</span></p>

                <p style="top: 30px;left: 130px;">您目前加权投标总额<em>0</em>元，当前排名<em>20+</em>位，</p>

                <p style="top: 50px;left: 130px;">活动未开始</p>

                <p class="Two"><em></em><span onclick="javascript:window.open('/freestock/index#actTwo')">查看详情</span></p>

              </li>

          </ul>

            <script type="text/javascript">

               

                $(".zhzlBox li p.One,.zhzlBox li p.Two").on("mouseover",function(){

                    $(this).find('span').css({"text-decoration":"underline"})

                }).on("mouseout",function(){

                    $(this).find('span').css({"text-decoration":"none"})

                })

            </script>

        </div>

    </div>

    <div class="clr"></div> -->

    <!--后增加的banner图结束-->

    

    

    <div class="dw_list">

      <div id="dw_huadong">

        <ul class="title">

          <li class="on"><a>资产负债表</a></li>

          <li><a>损益表</a></li>

        </ul>

        <div class="dw_2_show">

          <div class="eq1">

            <div class="dw_2_kuang eq1">

              <div class="dw_2_title"> 资产总额<span style="float:right">￥0.00</span> </div>

              <div class="dw_3_list">

                <p><span style="float:left;">可用资金:</span><span style="float:right">￥0.00</span></p>

                <p><span style="float:left;">冻结资金:</span><span style="float:right">￥0.00</span></p>

                <p><span class="xtitle" style="float:left;" title="待收总额=待收本金+待收利息">待收总额:</span><span style="float:right">￥0.00</span></p>

                <p><span style="float:left;">待收本金:</span><span style="float:right">￥0.00</span></p>

                <p><span style="float:left;">待收利息:</span><span style="float:right">￥0.00</span></p>

                <p><span style="float:left;">待收加息:</span><span style="float:right">￥0.00</span></p>

              </div>

            </div>

            <div class="dw_2_kuang eq2">

              <div class="dw_2_title"> 负债总额<span style="float:right">￥0.00</span> </div>

              <div class="dw_3_list">

                <p><span class="xtitle" style="float:left;" title="待还总额=待还本金+待还利息">待还总额:</span><span style="float:right">￥0.00</span></p>

                <p><span style="float:left;">待还本金:</span><span style="float:right">￥0.00</span></p>

                <p><span style="float:left;">待还利息:</span><span style="float:right">￥0.00</span></p>

                <p>&nbsp;</p>

                <p>&nbsp;</p>

              </div>

            </div>

            <div style="clear:both"></div>

          </div>

          <div class="eq2" style="display:none">

            <div class="dw_2_kuang eq1">

              <div class="dw_2_title"> 收入总额 <span style="float:right">￥0.00</span> </div>

              <div class="dw_3_list">

                <p><span style="float:left;">已赚利息:</span><span style="float:right">￥0.00</span></p>

                <p><span style="float:left;">投标奖励:</span><span style="float:right">￥0.00</span></p>

                <p><span style="float:left;">续投奖励:</span><span style="float:right">￥0.00</span></p>

                <p ><span style="float:left;">推广奖励:</span><span style="float:right">￥0.00</span></p>

                <p ><span style="float:left;">红包奖励:</span><span style="float:right">￥0.00</span></p>

                <p ><span style="float:left;">加息劵奖励:</span><span style="float:right">￥0.00</span></p>

                <p ><span style="float:left;">其他奖励:</span><span style="float:right">￥0.00</span></p>

               

              </div>

            </div>

            <div class="dw_2_kuang eq2">

              <div class="dw_2_title"> 支出总额<span style="float:right">￥0.00</span> </div>

              <div class="dw_3_list">

                <p><span style="float:left;">支付利息:</span><span style="float:right">￥0.00</span></p>

                <p><span style="float:left;">支付投标奖励:</span><span style="float:right">￥0.00</span></p>

                <p><span style="float:left;">提现手续费:</span><span style="float:right">￥0.00</span></p>

                <p ><span style="float:left;">会员及认证费用:</span><span style="float:right">￥0.00</span></p>

                <p ><span style="float:left;">借款管理费:</span><span style="float:right">￥0.00</span></p>

                <p ><span style="float:left;">逾期及催收费用:</span><span style="float:right">￥0.00</span></p>

              </div>

            </div>

            <div style="clear:both"></div>

          </div>

        </div>

        <div style="clear:both"></div>

      </div>

    </div>

    <div class="dw_list" style="padding-bottom:5px">

      <div style="font-size:18px"> 交易记录<a style="float:right;margin-right:20px;font-size:12px;padding-top:6px" href="/member/capital#fragment-2">查看详情</a> </div>

      <div class="dw_3_jilu">

        <ul class="tou">

          <li class="eq1">发生日期</li>

          <li class="eq2">类型</li>

          <li class="eq3">影响金额</li>

          <li class="eq4">冻结资金</li>

          <li class="eq5">待收金额</li>

          <li class="eq6">可用资金</li>

        </ul>

              </div>

    </div>

  </div>

  <div style="clear:both"></div>

  <script type="text/javascript">

  $('#dwtipkff').click(function(){

  $(this).parent().hide();

  });

function huandong(a){

var a1=$(a).children('ul').children();

var a2=$(a).children('div').children();



a1.click(function(){

var index=$(this).index();

$(this).addClass('on').siblings().removeClass("on");

a2.hide().eq(index).show();

});

}

huandong('#dw_huadong');

function jfun_dogetpaypass(){

  var ux = $("#payemailname").val();

  if(ux==""){

    $.jBox.tip('请输入用户名或者邮箱','tip');

    return;

  }

  $.jBox.tip("邮件发送中......","loading");

  $.ajax({

    url: "/Member/index/dogetpaypass",

    data: {"u":ux},

    //timeout: 5000,

    cache: false,

    type: "post",

    dataType: "json",

    success: function (d, s, r) {

      if(d){

        if(d.status==1){

          $.jBox.tip("发送成功，请去邮箱查收",'success');

          $.jBox.close(true);

        }else{

          $.jBox.tip("发送失败，请重试",'error');

        }

      }

    }

  });



}



function getpaypassword() {

  $.jBox("get:/Member/index/getpaypassword", {

    title: "找回支付密码",

    width: "auto",

    buttons: {'发送邮件':'jfun_dogetpaypass()','关闭': true }

  });   

}

</script>

</div>





<div class="index-zy-bj" style="position: fixed;width: 100%;height: 100%;top: 0px;left: 0px;z-index: 1000001;background-image: url('/Style/Stock/img/header_bjtm1.png');">

</div>

<div class="index-zy-bj" style="position: fixed;width: 805px;height: 612px;top: 13px;left: 50%;z-index: 1000002;background-image: url('/Style/Stock/img/index-bj-zhiyin1.png');margin-left:-466px">

</div>



<script type="text/javascript">



$(".index-zy-bj").click(function(){

  $(".index-zy-bj").fadeOut(500);

});



setTimeout(function(){

  $(".index-zy-bj").fadeOut(500);

},5000);



  $(".index-zy-bj").hide();

function openpopup(){ 

  $(".index-zy-bj").show();

}

function get_cookie(Name) 

{ 

   var search = Name + "=" 

   var returnvalue = ""; 

   if (document.cookie.length > 0) { 

     offset = document.cookie.indexOf(search) 

     if (offset != -1) {                            

        offset += search.length                     

        end = document.cookie.indexOf(";", offset); 

        if (end == -1)                              

           end = document.cookie.length;            

        returnvalue=unescape(document.cookie.substring(offset, end)) 

      } 

   }   

   return returnvalue; 

} 

function loadpopup(){ 

  if (get_cookie("poppeds")==""){   

     openpopup();           

     document.cookie="poppeds=yes"

    } 

}

loadpopup();

</script>



<!--弹出加遮罩B-->

<style type="text/css">

    #Christmas_zhe{

        position: absolute;

        top: 0;

        bottom: 0;

        width: 100%;

        background: #666;

        filter:alpha(opacity=60);       /* IE */

        -moz-opacity:0.6;              /* 老版Mozilla */

        -khtml-opacity:0.6;              /* 老版Safari */

        opacity: 0.6;

        z-index: 9998;

        display: none;

    }

    .tan_box{

        display: none;

        position: fixed;

        width: 573px;

        height:312px;

        left: 50%;

        top: 50%;

        margin: -156px 0 0 -287px;

         z-index: 9999;

        background: url(images/pc_tanchu_03.png) no-repeat;

        background-size: 100% 100%;

        filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(

        src='images/pc_tanchu_03.png',sizingMethod='scale');

    }

    .tan_box .tan_cha{

        position: absolute;

        display: block;

        width: 14px;

        height: 12px;

        top: 80px;

        right: 68px;

        background: url(images/pc_tanchu1_03.png) no-repeat;

        background-size:auto 100%;

        filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(

        src='images/pc_tanchu1_03.png',sizingMethod='scale');

        cursor: pointer;

    }

    .tan_box .tan_cha:hover{

        background: url(images/pc_tanchu2_03.png) no-repeat;

        background-size:auto 100%;

        filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(

        src='images/pc_tanchu2_03.png',sizingMethod='scale');

    }

    .tan_box p.op1{

        position: absolute;

        font-size: 13px;

        color:#475058;

        left: 182px;

        top: 118px;

    }

    .tan_box p.op1 a{

        font-size: 13px;

        color:#178cb5;

        text-decoration: underline;

    }

    .tan_box p.op2{

        width: 476px;

        font-size: 12px;

        color: #909090;

        line-height: 22px;

        margin: 210px 0 0 55px;

    }

    .tan_box p.op3{

        width: 477px;

        font-size: 12px;

        color: #909090;

        line-height: 22px;

        margin: 0px 0 0 55px;

    }

</style>



<div id="Christmas_zhe" style="display: none;"></div>

<div class="tan_box"> 

    <span class="tan_cha"></span>

    <p class="op1">您还未设置电子签章，请<a target="_blank" href="/member/sign">立即设置</a>后再来投标。</p>

    <p class="op2">·为了给投资者带来全方位的安全保障，手投网携手国内领先的第三方电子签章平台推出<span style="padding-left: 9px;">电子签章服务… <a target="_blank" href="http://www.ishoutou.com/gonggao/news/2753.html" style="color: #178cb5;">查看详情</a></span></p>

    <p class="op3">·电子签章将用于用户在手投网平台签署的各项正式合同中，以保证电子合同的法律效力。</p>

</div> 



<script type="text/javascript">

    $(function(){       

        var status = '';

        var sign = 'no';

        var isFirstLog ='no';

        console.log(isFirstLog);

       if (status == "login" || sign =='yes' || isFirstLog =='no') {

            $(".tan_box").css({"display":"none"})

            $("#Christmas_zhe").css("display","none");

        }else{

             var zheH=$(document).height();

            $("#Christmas_zhe").css({"height":zheH,"display":"block"});

            $(".tan_box").css({"display":"block"})

            $("#Christmas_zhe").css("display","block");

        }

        $(".tan_cha").on("click",function(){

            $(".tan_box").css({"display":"none"})

            $("#Christmas_zhe").css("display","none");

        })

        

        

    })

</script>

<!--弹出加遮罩E-->



<div class="VdFooter">
        <div class="footer">
            <!-- <div class="footerT">
                <span class="yqlj">友情链接:</span>
                <p>
                                </p>
            </div> -->
            <div class="footerC">
                <div class="f_l">
                    <p><span><a href="/aboutus/partner.html" target="_blank">友情链接</a></span>
                    <span><a href="/aboutus/yingcai.html" target="_blank">诚聘英才</a></span>
                    <span><a href="/aboutus/lianxi.html" target="_blank">联系我们</a></span>
                    <span style="display: none"><a href="/Index/download" target="_blank">交易软件</a></span>
                    <span><a href="/aboutus/anquan.html" target="_blank">安全保障</a></span>
                    <span><a href="/xueyuan/redian.html" >文投学院</a></span>
                    </p>
                    <div class="guanzhu">
                        <span class="txt1">关注我们</span>
                        <span><a class="wb" ><img style="float:none;margin:0px;" alt="" src="/public/admin/images/20150709172433.png" /></a></span>
                        <span><a class="wx" ><img alt="" style="float:none;margin:0px;" src="/public/admin/images/20150716110549.jpg" />&nbsp;</a></span>
                        <span class="txt2" style="display: none">手机手投</span>
                        <span style="display: none"><a class="pg" >广告未上传或已过期</a></span>
                        <span style="display: none"><a class="az">广告未上传或已过期</a></span>
                    </div>
                </div>
                <div class="kefu">
                    <span>客服电话</span><br/>
                    <span class="nber">400-047-5588</span><br/>
                    <span class="wangzhi"><p>kf@ishoutou.com</p></span>
                    <p><span style="padding:0;">网贷有风险，投资需谨慎</span></p>
                </div>
            </div>
            <div class="footerB">
                <p>
                    <span style="display: none"><a class="tu1" href="http://http://webscan.360.cn/" target="_blank"></a></span>
                    <span style="width: 130px;"><a style="width: 130px;" class="tu2" id='___szfw_logo___' href='javascript:;' ></a></span>
                    <span><a class="tu6" href="javascript:;" ></a></span>
                    <span><a class="tu7" href="javascript:;" ></a></span>
                    <span style="display: none"><a class="tu3" href="http://kx.zw.cn" target="_blank"></a></span>
                    <span style="display: none"><a class="tu4" href="http://www.cec9000.com" target="_blank"></a></span>
                    <span style="display: none;"><a class="tu5" href="http://www.ccig.org.cn" target="_blank"></a></span></p>
                    <p></p>
                    <p>©2015&nbsp;手投网 (www.ishoutou.cn) All&nbsp;Rights&nbsp;Reserved&nbsp;|&nbsp;北京手投网投资控股有限公司&nbsp;|&nbsp;京ICP备15028302号&nbsp;|&nbsp;京ICP证160127号&nbsp;|&nbsp;<font style="cursor:pointer;" onclick="javascript:window.open('http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010702001418')" ><img alt="" src="/public/admin/images/beian.png" /> 京公网安备 11010702001418号</font></p>
                    <p>版权所有：手投网</p>
                    <p></p>
                    <p></p>
            </div>
        </div>
    </div>
    
<!-- new kefu -->
<div class="tools_bar" id="tools_bar">
    <ul class="kfBox">
        <li class="qqKf">
            <a class="icon1" href="javascript:;"></a>
            <div class="qqKf_list" style="display: none;">
                <p><a href="tencent://Message/?Uin=2853950306&websiteName=客服1号&Menu=yes">客服1号</a></p><p><a href="tencent://Message/?Uin=2853950300&websiteName=客服2号&Menu=yes">客服2号</a></p><p><a href="tencent://Message/?Uin=2853950301&websiteName=客服3号&Menu=yes">客服3号</a></p>                <span></span>
                <p class="last"><a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=0b54bf9b1e47d54b596651b0539ef7ee0a04c8f7cdcab2d03a3a1da1b1a32c7a">QQ群：239166306</a></p>            </div>
        </li>
        <li class="hotLine">
            <a class="icon2" href="javascript:;"></a>
            <div class="qqKf_list2" style="display: none;">
                <p class="first">400-047-5588</p><span></span>
                <p>工作日9:00-18:00</p>
            </div>
        </li>
        <li class="index_calculator">
            <a class="icon3" href="/tool/tool2.html" target="_blank"></a>
        </li>
        <li class="index_top">
            <a class="icon4" href="javascript:;" style="display:none;"></a>
        </li>
        <li class="index_invite">
            <a class="icon5" href="http://www.ishoutou.cn/Help/yaoqing" target="_blank"><img src="/public/admin/images/invite.png" width="123" height="130"></a>
        </li>
    </ul>
</div>
<script type='text/javascript'>(function(){document.getElementById('___szfw_logo___').oncontextmenu = function(){return false;}})();</script>
<link type="text/css" rel="stylesheet" href="/public/admin/css/kf.css?v=20160829"/>
<script>
    $(function(){
        $(".kfBox .qqKf").hover(
                function(){
                    $(this).find(".icon1").addClass("on");
                    $(this).find(".qqKf_list").show();
                },
                function(){
                    $(this).find(".icon1").removeClass("on");
                    $(this).find(".qqKf_list").hide();
                }
        );
        $(".kfBox .hotLine").hover(
                function(){
                    $(this).find(".icon2").addClass("on");
                    $(this).find(".qqKf_list2").show();
                },
                function(){
                    $(this).find(".icon2").removeClass("on");
                    $(this).find(".qqKf_list2").hide();
                }
        );
        $(".kfBox .index_calculator").hover(
                function(){
                    $(this).find(".icon3").addClass("on");
                },
                function(){
                    $(this).find(".icon3").removeClass("on");
                }
        );
        $(".kfBox .index_top").hover(
                function(){
                    $(this).find(".icon4").addClass("on");
                },
                function(){
                    $(this).find(".icon4").removeClass("on");
                }
        );
    });
    $(function(){ 
        $(function () {
            $(window).scroll(function(){
                if ($(window).scrollTop()>100){
                    $(".index_top .icon4").fadeIn(0);
                }
                else
                {
                    $(".index_top .icon4").fadeOut(0);
                }
            });
            $(".index_top .icon4").click(function(){
                $('body,html').animate({scrollTop:0},0);
                return false;
            });
        });
    });
</script>
<!-- en kefu-->
    <div style="display: none"><!-- 百度监控代码 -->

<script>

var _hmt = _hmt || [];

(function() {

  var hm = document.createElement("script");

  hm.src = "https://hm.baidu.com/hm.js?fa25924969831380d1c11ec35ee65b5f";

  var s = document.getElementsByTagName("script")[0]; 

  s.parentNode.insertBefore(hm, s);

})();

</script></div>

</div>