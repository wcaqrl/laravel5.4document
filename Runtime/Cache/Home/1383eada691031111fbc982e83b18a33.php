<?php if (!defined('THINK_PATH')) exit();?>
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-Strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=9">

    <!--

    <meta http-equiv="X-UA-Compatible" content="IE=8" />

    -->

    <!--shoutou -->

    <link type="text/css" rel="stylesheet" href="/public/css/y_style.css?v=20170109">

    <script src="/public/js/hm.js"></script><script type="text/javascript" src="/public/js/jquery.min.js"></script>

    <!-- <script type="text/javascript" src="/public/js/topanv.js"></script> -->

    <!--end -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="renderer" content="ie-comp">

    <meta name="viewport" content="width=1100, initial-scale=0.9">

    <link rel="Shortcut icon" href="/Style/H/images/ico.png">

    <meta name="renderer" content="ie-stand">

    <link rel="stylesheet" type="text/css" href="/public/css/index.css?v=20170109">

    <link rel="stylesheet" type="text/css" href="/public/css/css.css?v=20170109">

    <link rel="stylesheet" type="text/css" href="/public/css/kefu.css?v=20170109">

    <link rel="stylesheet" type="text/css" href="/public/css/style.css?v=20170109">

    <link type="text/css" rel="stylesheet" href="/public/css/jbox.css?v=20170109">

    <link rel="stylesheet" type="text/css" href="/public/css/style(1).css?v=20170109">

    

    <link rel="stylesheet" type="text/css" href="/public/css/index(1).css?v=20170109">

    <link rel="stylesheet" type="text/css" href="/public/css/style(2).css?v=20170109">

    <link rel="stylesheet" type="text/css" href="/public/css/font.css"/>

    <!-- <link rel="stylesheet" type="text/css" href="/public/css/headerandfooter.css"> -->

    <script type="text/javascript" src="/public/js/jquery.min(1).js"></script>

    <script type="text/javascript" src="/public/js/jquery.js"></script>

    <script src="/public/js/jquery.jBox.min.js" type="text/javascript"></script>

    <script src="/public/js/jquery.jBoxConfig.js" type="text/javascript"></script>

    <script type="text/javascript" src="/public/js/utils.js"></script>



    <script src="/public/js/jquery.darktooltip.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="/public/css/blue.css">

    <script type="text/javascript" src="/public/js/jquery.artDialog.source.js"></script>

    <!-- <script src="/public/js/jquery-1.8.3.min.js" type="text/javascript"></script> -->

    <script src="/public/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>

    <!-- <script src="/public/js/jquery.darktooltip.min.js" type="text/javascript"></script> -->

    <link rel="stylesheet" href="/public/css/base.css?v=20170109">

<link rel="stylesheet" href="/public/css/style(3).css?v=20170109">



<link rel="stylesheet" type="text/css" href="/public/css/style.css?v=20160824"/>

<script src="/public/js/tab.js"></script>

<script src="/public/js/banner.js"></script>



    <script type="text/javascript">

        var browser=navigator.appName;

        var b_version=navigator.appVersion;

        var version=b_version.split(";");

        if(version.length>1) var trim_Version=version[1].replace(/[ ]/g,"");



        if(browser=="Microsoft Internet Explorer" && (trim_Version=="MSIE5.0" || trim_Version=="MSIE6.0"))

            alert("您正在使用的浏览器版本过低，有些网站效果会显示不出来，建议升级后再使用本网站。");



        function makevar(v){

            var d={};

            for(i in v){

                var id = v[i];

                d[id] = $("#"+id).val();

                if(!d[id]) d[id] = $("input[name='"+id+"']:checked").val();

                if(!d[id]) d[id] = $("input[name='"+id+"']").val();

                if(typeof d[id] == "undefined") d[id] = "";

            }

            return d;

        }

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

                obj.style.behavior = 'url(other/.cn/#default#homepage)'; obj.setHomePage(vrl);

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



        // 修复 IE 下 PNG 图片不能透明显示的问题

        function fixPNG(myImage) {

            var arVersion = navigator.appVersion.split("MSIE");

            var version = parseFloat(arVersion[1]);

            if ((version >= 5.5) && (version < 7) && (document.body.filters))

            {

                var imgID = (myImage.id) ? "id='" + myImage.id + "' " : "";

                var imgClass = (myImage.className) ? "class='" + myImage.className + "' " : "";

                var imgTitle = (myImage.title) ? "title='" + myImage.title   + "' " : "title='" + myImage.alt + "' ";

                var imgStyle = "display:inline-block;" + myImage.style.cssText;

                var strNewHTML = "<span " + imgID + imgClass + imgTitle



                        + " style=\"" + "width:" + myImage.width



                        + "px; height:" + myImage.height



                        + "px;" + imgStyle + ";"



                        + "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"



                        + "(src=\'" + myImage.src + "\', sizingMethod='scale');\"></span>";

                myImage.outerHTML = strNewHTML;

            } }





    </script>



<title>手投网-中国互联网文化金融平台【官网】</title>
<meta name="keywords" content="手投,手投网,手投理财,p2p理财,C2P" />
<meta name="description" content="质押类p2p理财更安全，互联网文化金融创新产品。选手投，随时随地都能投。TEL:400-047-5588" />
<link href="/public/css/edit_201705.css" rel="stylesheet" type="text/css">


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

	background-image:url("/public/images/over_icon.png");



    height: 21px;

    position: absolute;

    right: -10px;

    top: -10px;

    width: 20px;

    z-index: 1003;

}



.zixunbox ul li a {

    background-image: url("/public/images/qq_icon.png");

	background-repeat:no-repeat;

	background-position:0px center;

    color: #858585;

    display: inline-block;

    height: 47px;

    text-indent: 20px;

    width: 92px;

}

.zixunbox p {

    background: url("/public/images/dianh.png");

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

    background: url(/public/images/NewYear_01_02.png) no-repeat center center;

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

        <img src="/public/images/NewYear2_03.png" class="NewYear_close"/>

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

	<div class="top_main index_top_main">

    	<span class="top_l"><img src="/public/images/phone.png" width="15" height="15">客服热线：400-047-5588</span>

        <span class="top_m">

            <em class="wx_fade_box"><img src="/public/images/index_new_5_1a.png" width="18" height="15" style="margin-right:5px;">微信<img src="/public/images/index_new_5_2a.png" width="6" height="3" style="margin-left:5px;"></em>

            <em class="wx_fade_box2" style="display:none;"><img src="/public/images/index_new_5_1b.png" width="18" height="15" style="margin-right:5px;">微信<img src="/public/images/index_new_5_2b.png" width="6" height="3" style="margin-left:5px;"></em>

            <em class="wx_fadeinbox" style="display:none;line-height: 20px;">

                <img src="/public/images/index_new_6.jpg" width="124" height="124">

                <i>扫码注册，领<strong style="font-weight:normal;color:#f52f1b;">百元红包</strong></i> 

                <i><a href="/help/weixin" target="_blank" style="color:#0ca1d2;">查看详情>></a></i>

            </em>

        </span>

        <span class="top_r" >

            <a href="/help/help">帮助中心</a>

            <a href="/member/common/register/">免费注册</a>

            <a href="/member/common/login/">立即登录</a>

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

</script><div class="nav">

	<div class="nav_main index_nav_main">

    	<div class="logo"><a href="/" target="_blank"><p><img alt="" style="height: 65px; width: 309px; float: none; margin: 0px;" src="/public/images/20170307223459.jpg" /></p></a> </div>

        

<div class="nav_list">

<div id="topnavbar" style="display: block;">

<div id="topnanv">

<div class="my_zh"></div>

<div class="defu nav_cur"><a id="index" href="">首页</a></div>

<div class="defu nav_cur"><a href="<?php echo U('home/rexiao/index');?>" target="_blank">热销活动</a></div>

<div class="defu nav_cur" class="posbox"><a id="invest" href="<?php echo U('home/chujie/index');?>">我要出借</a></div>

<!-- <div class="defu nav_cur" class="posbox"><a id="debt" href="/debt/index">债权转让</a></div>

 --><div class="defu nav_cur"><a id="borrow" href="<?php echo U('home/jiekuan/index');?>">我要借款</a></div>

<div class="defu nav_cur"><a id="xinshou"  href="<?php echo U('home/xinshou/index');?>" target="_blank">新手指引</a></div>

<div id="anvlfteb">

    <div selec="youhui" class="posbox"><a id="jianjie" href="<?php echo U('home/about/index');?>">信息披露</a> <i></i></div>

    <div id="seledbox" class="posiabox" style="display: none; left: 1px;"></div></div>

</div>

</div>

        </div>

    </div>

</div>

</div>

<script type="text/javascript">

    function click(that,link){

        $that.addClass("current");

    }

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

            }else {

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
<style type="text/css">
            /*金银铜牌  B*/
    .wrap{overflow:visible;}
    .h_left_main{overflow:visible;}
    .ist_index_tjxm_box_con h2 span.gold_area,.ist_index_tjxm_box_con h2 span.gold_box,.ist_index_tjxm_box_con h2 span .gold_con,.ist_index_tjxm_box_con h2 span .gold_top,.ist_index_tjxm_box_con h2 span .gold_bottom{line-height:0;padding-left:0px;padding-right:0px;}
    .ist_index_tjxm_box_con h2 span.gold_area{width:48px;height:27px;margin-left:10px;position:relative;}
    .ist_index_tjxm_box_con h2 span .gold_box{display:block;width:528px;height:auto;border:1px solid #5ebddf;border-radius:5px;position:absolute;left:-240px;top:34px;z-index: 10;background:#fff;box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);}
    .ist_index_tjxm_box_con h2 span .point_icon{display:block;float:none;width:15px;height:8px;line-height: 8px;margin:0;position:absolute;left:256px;top:-9px;background:none;}
    .ist_index_tjxm_box_con h2 span .gold_con{width:100%;}
    .ist_index_tjxm_box_con h2 span .silver_medal,.ist_index_tjxm_box_con h2 span .gold_medal,.ist_index_tjxm_box_con h2 span .copper_medal{float:left;width:128px;height:208px;margin:23px 0 0 36px;}
    .ist_index_tjxm_box_con h2 span .silver_medal{background:url("/public/images/gold_1.png") no-repeat;}
    .ist_index_tjxm_box_con h2 span .gold_medal{background:url("/public/images/gold_2.png") no-repeat;}
    .ist_index_tjxm_box_con h2 span .copper_medal{background:url("/public/images/gold_3.png") no-repeat;}
    .ist_index_tjxm_box_con h2 span .state1,.h_laya h1 span .state2{float:none;margin:0;}
    .ist_index_tjxm_box_con h2 span .state1{display:block;width:100%;height:28px;line-height:28px;margin-top:124px;text-align:center;font-size:14px;font-weight:bold;}
    .ist_index_tjxm_box_con h2 span .silver_medal .state1,.ist_index_tjxm_box_con h2 span .silver_medal .state2{color:#5c616e;}
    .ist_index_tjxm_box_con h2 span .gold_medal .state1,.ist_index_tjxm_box_con h2 span .gold_medal .state2{color:#b25000;}
    .ist_index_tjxm_box_con h2 span .copper_medal .state1,.ist_index_tjxm_box_con h2 span .copper_medal .state2{color:#864046;}
    .ist_index_tjxm_box_con h2 span .state2{display:block;width:100%;margin-top:115px;text-align:center;font-size:14px;font-weight:bold;}
    .ist_index_tjxm_box_con h2 i.tit1,.h_left_main table th h2 i.tit2,.h_left_main table th h2 i.tit3{float:none;display:block;margin:0;}
    .ist_index_tjxm_box_con h2 i.tit1{line-height:28px;}
    .ist_index_tjxm_box_con h2 i.num{height:16px;line-height:16px;font-size:12px;font-weight: normal;}
    .ist_index_tjxm_box_con h2 i.tit3{line-height:18px;}
    .ist_index_tjxm_box_con h2 span .state2 i{width:100%;height:auto;background:none;}
    .ist_index_tjxm_box_con h2 span .state2.a1 i{color:#5c616e;}
    .ist_index_tjxm_box_con h2 span .state2.a2 i{color:#b25000;}
    .ist_index_tjxm_box_con h2 span .state2.a3 i{color:#864046;}
    .ist_index_tjxm_box_con h2 span .gold_bottom{width:425px;height:51px;line-height:41px;margin-left:51px;text-align:right;border-top:1px solid #ddd;}
    .ist_index_tjxm_box_con h2 span .gold_bottom .xq{color:#178bbf;font-size:12px;}
    .ist_index_tjxm_box_con h2 span .gold_bottom .xq:hover{text-decoration:underline;}
    /*金银铜牌  E*/
     /*加息券活动首页弹窗  B*/
    *{
            margin:0;
            padding:0;
        }
        .jxq_pop_bg{
            position: fixed;
            top:0;
            left:0;
            bottom:0;
            right:0;
            background: #0e0e1f;
            opacity:0.65;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=65);
            filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=65);
            z-index: 10000;
        }
        .jxq_pop{
            width: 669px;
            height:586px;
            position: fixed;
            top:0;
            right:0;
            bottom:0;
            left:0;
            margin:auto;
            z-index: 10001;
        }
        .jxq_pop img{
            width:100%;
        }
        .close_jxq_pop{
            width:68px;
            height:68px;
            position: absolute;
            right:0;
            top:0;
            background: url("/public/images/cha01_06.png") no-repeat;
        }
        .close_jxq_pop_hover{
            background: url("/public/images/cha02_06.png") no-repeat;
        }
     /*加息券活动首页弹窗  E*/
        </style>
        <script>
          $(function(){
              //推荐项目
        $(".ist_index_tjxm_box_con h2 .gold_area").hover(
                function(){
                    $(this).find(".gold_box").show();
                },
                function(){
                    $(this).find(".gold_box").hide();
                });
        $(".ist_index_tjxm_box_list1 li").hover(
                function(){
                    $(this).css("background","#f3fcfe");
                },
                function(){
                    $(this).css("background","none");
                }
        );
        //i主播
         //i主播
        $(".ist_index_izb_video").hover(
                function(){
                    $(this).find(".ist_index_izb_vcon2").show();
                    $(this).find(".ist_index_izb_vcon").hide();
                },
                function(){
                    $(this).find(".ist_index_izb_vcon").show();
                    $(this).find(".ist_index_izb_vcon2").hide();
                }
        );
        $(".ist_index_izb_r li").hover(
                function(){
                    $(this).find(".ist_index_izb_rcon2").show();
                    $(this).find(".ist_index_izb_rcon").hide();
                },
                function(){
                    $(this).find(".ist_index_izb_rcon").show();
                    $(this).find(".ist_index_izb_rcon2").hide();
                }
        );
        /*加息券活动首页弹窗  B*/
        $(".close_jxq_pop").hover(function(){
            $(this).addClass("close_jxq_pop_hover");
        },function () {
            $(this).removeClass("close_jxq_pop_hover");
        })
        $(".close_jxq_pop").on("click",function(){
            $(".jxq_pop_bg").hide();
            $(".jxq_pop").hide();
        })
        /*加息券活动首页弹窗  E*/
          })
      </script>
<div class="h_ban">
   <ul style="background:#00CCFF">
      <li style="background: url(/public/images/20170816180416395.jpg) center no-repeat"><a target="_blank" href="http://www.ishoutou.cn/help/sign" >&nbsp;</a> </li>
         <!-- <li> <a href="http://www.ishoutou.cn/help/sign"><img src="/public/images/20170816180416395.jpg" /></a> </li> --><li style="background: url(/public/images/20170731151441641.jpg) center no-repeat"><a target="_blank" href="http://www.ishoutou.cn/freestock/index" >&nbsp;</a> </li>
         <!-- <li> <a href="http://www.ishoutou.cn/freestock/index"><img src="/public/images/20170731151441641.jpg" /></a> </li> --><li style="background: url(/public/images/20170615093909964.jpg) center no-repeat"><a target="_blank" href="http://www.ishoutou.cn/gonggao/news/3573.html" >&nbsp;</a> </li>
         <!-- <li> <a href="http://www.ishoutou.cn/gonggao/news/3573.html"><img src="/public/images/20170615093909964.jpg" /></a> </li> --><li style="background: url(/public/images/20170309105736458.jpg) center no-repeat"><a target="_blank" href="http://www.ishoutou.cn/Help/yaoqing" >&nbsp;</a> </li>
         <!-- <li> <a href="http://www.ishoutou.cn/Help/yaoqing"><img src="/public/images/20170309105736458.jpg" /></a> </li> --><li style="background: url(/public/images/20170309105417770.jpg) center no-repeat"><a target="_blank" href="http://www.ishoutou.cn/gonggao/news/3366.html" >&nbsp;</a> </li>
         <!-- <li> <a href="http://www.ishoutou.cn/gonggao/news/3366.html"><img src="/public/images/20170309105417770.jpg" /></a> </li> --><li style="background: url(/public/images/20170309105831976.jpg) center no-repeat"><a target="_blank" href="http://www.ishoutou.cn/help/weixin" >&nbsp;</a> </li>
         <!-- <li> <a href="http://www.ishoutou.cn/help/weixin"><img src="/public/images/20170309105831976.jpg" /></a> </li> -->   </ul>
   <div class="fix_wrap" style="position:relative;">
      <div class="h_loginbg"></div>
      <div class="h_login">
         <p class="font18">手投网预期年化收益率</p>
         <p>最高<i class="red font40">18.00%</i></p>
         
                     <p class="h_login_btn"><a href="/member/common/register.html">立即注册</a></p>
            <p class="h_long2">已有账号？<a href="/member/common/login.html"><u>立即登录</u></a></p>      </div>
   </div>
</div>
<div style="clear: both;"></div>
<div class="h_ban_btm index_box1_new">
   <ul class="fix_wrap" style="width:1200px;">
      <li class="fl h_ban_btm1"><p><img src="/public/images/index_new_1_1.gif" width="17" height="19">服务用户数：<i class="red font18">44274</i>人</p></li>
      <li class="fl h_ban_btm2"><p><img src="/public/images/index_new_1_2.gif" width="21" height="19">成交金额：<i class="red font18">66288.2万</i>元</p></li>
      <li class="fl h_ban_btm3"><p><img src="/public/images/index_new_1_3.gif" width="17" height="19">赚取收益：<i class="red font18">24497271.35</i>元</p></li>
      <li class="fr h_ban_btm4"><p><a href="/help/platform_data" target="_blank">更多数据&gt;&gt;</a></p></li>
   </ul>
</div>
<div class="h_ban_btm index_box2_new">
    <div class="ist_index_notice_main">
        <ul class="fl index_box2_new_con">
            <li class="fl"><a href="/aboutus/jianjie.html" target="_blank">
                <i class="h_licona">
                    <img class="anim_fade1" src="/public/images/index_new_2_1a.jpg" width="70" height="70">
                    <img src="/public/images/index_new_2_1b.jpg" width="70" height="70">
                </i>
                <span class="fl" style="font-size:16px;"><h2 class="font16">微信理财</h2><p>灵活便捷</p></span></a></li>
            <li class="fl"><a href="/aboutus/jianjie.html#wenhua" target="_blank">
                <i class="h_liconb">
                    <img class="anim_fade2" src="/public/images/index_new_2_2a.jpg" width="70" height="70">
                <img src="/public/images/index_new_2_2b.jpg" width="70" height="70">
                </i>
                <span class="fl" style="font-size:16px;"><h2 class="font16">文化金融</h2><p>潜力之选</p></span></a></li>
            <li class="fl last"><a href="/aboutus/jianjie.html#hangye" target="_blank">
                <i class="h_liconc">
                    <img class="anim_fade3" src="/public/images/index_new_2_3a.jpg" width="70" height="70">
                    <img src="/public/images/index_new_2_3b.jpg" width="70" height="70">
                </i>
                <span class="fl" style="font-size:16px;"><h2 class="font16">创新模式</h2><p>安全之选</p></span></a></li>
        </ul>
        <div class="fr ist_index_notice_box" style="margin-right: 30px;">
            <h2>最新公告<a class="ist_more" href="/gonggao/gonggao.html" target="_blank">更多>></a></h2>
            <ul class="ist_index_notice_list">
                                <li><a class="ist_tit" target="_blank" href="/gonggao/news/3644.html">再加息：8月18日到8月20日，全场加息0.8…</a><em class="ist_time">2017-08-17</em></li>
                               <li><a class="ist_tit" target="_blank" href="/gonggao/news/3573.html">手投网与厦门国际银行正式签署银行存管合作协议</a><em class="ist_time">2017-06-15</em></li>
                               <li><a class="ist_tit" target="_blank" href="/gonggao/news/3647.html">8月19、20、21发标预告</a><em class="ist_time">2017-08-18</em></li>
               
                
            </ul>
        </div>
    </div>
</div>
<div class="h_main wrap">
   <!--邀请好友 B-->
    <div class="invite_friends_main">
        <ul>
            <li class="fl"><a href="/Help/yaoqing" target="_blank"><span class="fl" style="font-size:14px;"><h2 class="font18">邀请好友</h2><p>天天有奖励，奖励无封顶</p></span><i><img src="/public/images/index_new_3_1.png" width="68" height="68"></i></a></li>
            <li class="fl"><a href="/freestock/index" target="_blank"><span class="fl" style="font-size:14px;"><h2 class="font18">本月活动</h2><p>现金、实物，大奖送不停</p></span><i><img src="/public/images/index_new_3_2.png" width="68" height="68"></i></a></li>
            <li class="fl last" style="padding-left: 34px;">
                <div class="wechat_area">
                    <a href="/help/weixin" target="_blank">
                        <span class="fl" style="font-size:14px;"><h2 class="font18">微信理财</h2><p>随时随地，快人一步</p></span>
                        <i class="if1"><img src="/public/images/index_new_3_3.png" width="68" height="68"></i>
                        <p class="wechat_con">
                            <em>微信注册：<i>百元红包</i>等你拿</em>
                            <em>微信投标：首次投标，奖励<i>2‰</i></em>
                        </p>
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <!--邀请好友 E-->
    <!--推荐项目start-->
    <div class="ist_index_tjxm_main1">
        <div class="fl ist_index_tjxm_sidebar">
            <h2>推荐项目</h2>
            <p>轻松投标  坐享收益</p>
            <a class="ist_tjxm_more" href="/invest/index" target="_blank">更多>></a>
        </div>
        <div class="fr ist_index_tjxm_box1">
            <ul class="ist_index_tjxm_box_list1">
			<li class="">
                    <div class="ist_index_tjxm_box_con1">
                        <h2 class="fl ist_t1_con">
															<em class="fl wen" title="文物质押借款"></em>                            <a class="new_tit" href="/invest/2535.html" title="定投宝DS170802535" style="fl" target="_blank">定投宝DS170802535</a>
								
								<span title="该债权安全等级为AAA级，本金和收益相对稳定">AAA级</span>								
                        </h2>
                        <p class="fl ist_t2_con" style="line-height: 86px;"><span style="display: block; height: 22px;">12.80<i>％</i></span><i style="color: #999999; font-size: 13px;">预期年化率</i></p>
                        <p class="fl ist_t3_con" style="line-height: 86px;"><span style="display: block; height: 22px;">1<i>个月</i></span><i style="color: #999999; font-size: 13px;">借款期限</i></p>
                        <p class="fl ist_t3_con" style="line-height: 86px;"><span style="display: block; height: 22px;">20.00<i>万元</i></span><i style="color: #999999; font-size: 13px;">借款金额</i></p>
                        <span class="fl ist_t4_con">
                            <em class="rote2"></em>
                        </span>
													<span class="fl ist_t5_con"><a class="ist_t5_btn hui" href="/invest/2535.html" target="_blank">还款中</a></span>
							
                        <p class="clear"></p>
                    </div>
				</li><li class="">
                    <div class="ist_index_tjxm_box_con1">
                        <h2 class="fl ist_t1_con">
															<em class="fl wen" title="文物质押借款"></em>                            <a class="new_tit" href="/invest/2536.html" title="定投宝DS170802536" style="fl" target="_blank">定投宝DS170802536</a>
								
								<span title="该债权安全等级为AAA级，本金和收益相对稳定">AAA级</span>								
                        </h2>
                        <p class="fl ist_t2_con" style="line-height: 86px;"><span style="display: block; height: 22px;">12.80<i>％</i></span><i style="color: #999999; font-size: 13px;">预期年化率</i></p>
                        <p class="fl ist_t3_con" style="line-height: 86px;"><span style="display: block; height: 22px;">1<i>个月</i></span><i style="color: #999999; font-size: 13px;">借款期限</i></p>
                        <p class="fl ist_t3_con" style="line-height: 86px;"><span style="display: block; height: 22px;">20.00<i>万元</i></span><i style="color: #999999; font-size: 13px;">借款金额</i></p>
                        <span class="fl ist_t4_con">
                            <em class="rote2"></em>
                        </span>
													<span class="fl ist_t5_con"><a class="ist_t5_btn hui" href="/invest/2536.html" target="_blank">还款中</a></span>
							
                        <p class="clear"></p>
                    </div>
				</li><li class="">
                    <div class="ist_index_tjxm_box_con1">
                        <h2 class="fl ist_t1_con">
															<em class="fl wen" title="文物质押借款"></em>                            <a class="new_tit" href="/invest/2537.html" title="定投宝DS170802537" style="fl" target="_blank">定投宝DS170802537</a>
								
								<span title="该债权安全等级为AAA级，本金和收益相对稳定">AAA级</span>								
                        </h2>
                        <p class="fl ist_t2_con" style="line-height: 86px;"><span style="display: block; height: 22px;">12.80<i>％</i></span><i style="color: #999999; font-size: 13px;">预期年化率</i></p>
                        <p class="fl ist_t3_con" style="line-height: 86px;"><span style="display: block; height: 22px;">1<i>个月</i></span><i style="color: #999999; font-size: 13px;">借款期限</i></p>
                        <p class="fl ist_t3_con" style="line-height: 86px;"><span style="display: block; height: 22px;">20.00<i>万元</i></span><i style="color: #999999; font-size: 13px;">借款金额</i></p>
                        <span class="fl ist_t4_con">
                            <em class="rote2"></em>
                        </span>
													<span class="fl ist_t5_con"><a class="ist_t5_btn hui" href="/invest/2537.html" target="_blank">还款中</a></span>
							
                        <p class="clear"></p>
                    </div>
				</li><li class="last">
                    <div class="ist_index_tjxm_box_con1">
                        <h2 class="fl ist_t1_con">
															<em class="fl wen" title="文物质押借款"></em>                            <a class="new_tit" href="/invest/2538.html" title="定投宝DS170802538" style="fl" target="_blank">定投宝DS170802538</a>
								
								<span title="该债权安全等级为AAA级，本金和收益相对稳定">AAA级</span>								
                        </h2>
                        <p class="fl ist_t2_con" style="line-height: 86px;"><span style="display: block; height: 22px;">14.80<i>％</i></span><i style="color: #999999; font-size: 13px;">预期年化率</i></p>
                        <p class="fl ist_t3_con" style="line-height: 86px;"><span style="display: block; height: 22px;">3<i>个月</i></span><i style="color: #999999; font-size: 13px;">借款期限</i></p>
                        <p class="fl ist_t3_con" style="line-height: 86px;"><span style="display: block; height: 22px;">20.00<i>万元</i></span><i style="color: #999999; font-size: 13px;">借款金额</i></p>
                        <span class="fl ist_t4_con">
                            <em class="rote2"></em>
                        </span>
													<span class="fl ist_t5_con"><a class="ist_t5_btn hui" href="/invest/2538.html" target="_blank">还款中</a></span>
							
                        <p class="clear"></p>
                    </div>
				</li>	
        	</ul>
        </div>
    </div>
    <!--推荐项目end-->	
    <!--i主播 B-->
    <div class="ist_index_izb_main">
        <div class="fl ist_index_tjxm_sidebar ist_index_izb_sidebar">
            <h2>i主播</h2>
            <p style="color:#f5fce3;">行业动态  及时掌控</p>
            <a class="ist_tjxm_more" href="/Help/index_zhubo" target="_blank">更多>></a>
        </div>
        <div class="fr ist_index_izb_box">
            <div class="fl ist_index_izb_video">
                <a href="http://v.youku.com/v_show/id_XMjk1NDU2MDA0MA==.html" target="_blank">
                    <img src="/public/images/20170809154723640.jpg" width="480" height="270" />
                    <div class="ist_index_izb_vcon">
                        <h2>i主播第二十五季</h2>
                        <p class="vcon_hide">手投网2周年庆典圆满收官，成千上万手族们领奖嗨翻天…</p>
                    </div>
                    <div class="ist_index_izb_vcon2" style="display:none;">
                        <h2>i主播第二十五季</h2>
                        <p class="vcon_show">手投网2周年庆典圆满收官，成千上万手族们领奖嗨翻天，8月手投网会有啥惊喜呢，i主播给您一一道来。</p>
                        <span class="ist_index_izb_btn">
                            <em onclick="javascript:window.open('http://v.youku.com/v_show/id_XMjk1NDU2MDA0MA==.html')">立即播放</em>
                        </span>
                    </div>
                </a>
            </div>
            <ul class="fr ist_index_izb_r">
                <li>
                     <a href="http://v.youku.com/v_show/id_XMTM3OTIzMjU0NA==.html" target="_blank">
                        <img src="/public/images/20160819165955187.jpg" width="230" height="130" />
                        <div class="ist_index_izb_rcon">
                            <h2>手投网CEO对话世界资本巨头罗杰斯</h2>
                        </div>
                        <div class="ist_index_izb_rcon2" style="display:none;">
                            <h2>手投网CEO对话世界资本巨头罗杰斯</h2>
                            <p class="vcon_show">世界金融领域最富盛名的资本巨头吉姆 罗杰斯与手投网CEO杨清华的…</p>
                            <span class="ist_index_izb_btn">
                                <em onclick="javascript:window.open('http://v.youku.com/v_show/id_XMTM3OTIzMjU0NA==.html')">立即播放</em>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="http://v.youku.com/v_show/id_XMTQxNTgyMTAwOA==.html" target="_blank">
                        <img  src="/public/images/20160819170013224.png" width="230" height="130"/>
                        <div class="ist_index_izb_rcon">
                            <h2>网贷之家专访手投网CEO杨清华</h2>
                        </div>
                        <div class="ist_index_izb_rcon2" style="display:none;">
                            <h2>网贷之家专访手投网CEO杨清华</h2>
                            <p class="vcon_show">2015年互金高峰论坛中，网贷之家专访手投网CEO杨清华</p>
                            <span class="ist_index_izb_btn">
                                <em onclick="javascript:window.open('http://v.youku.com/v_show/id_XMTQxNTgyMTAwOA==.html')">立即播放</em>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="http://v.youku.com/v_show/id_XMTM1Nzk5Nzg3Mg==.html" target="_blank">
                        <img  src="/public/images/20160819170036954.png" width="230" height="130" />
                        <div class="ist_index_izb_rcon">
                            <h2>i主播走进钱邮仓储金库</h2>
                        </div>
                        <div class="ist_index_izb_rcon2" style="display:none;">
                            <h2>i主播走进钱邮仓储金库</h2>
                            <p class="vcon_show">手投网合作伙伴金马甲首次举办第三方仓储金库开放日活动，手投网i主…</p>
                            <span class="ist_index_izb_btn">
                                <em onclick="javascript:window.open('http://v.youku.com/v_show/id_XMTM1Nzk5Nzg3Mg==.html')">立即播放</em>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="http://v.youku.com/v_show/id_XMTI4ODg1NTYyOA==.html" target="_blank">
                        <img src="/public/images/20160819170051693.png" width="230" height="130" />
                        <div class="ist_index_izb_rcon">
                            <h2>为爱回报，手投网走进希望小学</h2>
                        </div>
                        <div class="ist_index_izb_rcon2" style="display:none;">
                            <h2>为爱回报，手投网走进希望小学</h2>
                            <p class="vcon_show">手投网设立梦想基金，愿孩子们健康快乐成长</p>
                            <span class="ist_index_izb_btn">
                                <em onclick="javascript:window.open('http://v.youku.com/v_show/id_XMTI4ODg1NTYyOA==.html')">立即播放</em>
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--i主播 E-->
    <!--走近钱邮 B-->
    <!--<div class="ist_index_ybk_main">
        <div class="fl ist_index_tjxm_sidebar ist_index_ybk_sidebar">
            <h2>走近钱邮</h2>
            <p style="color:#f5fce3;">了解钱邮</p>
        </div>
        <div class="fr ist_index_ybk_box">
            <ul class="ist_index_ybk_Tab">
                <li id="conTab1" class="current" onmouseover="TabMove('con',1,4)"><a href="javascript:;" hideFocus="true">纵览钱邮市场</a></li>
                <li id="conTab2" onmouseover="TabMove('con',2,4)"><a href="javascript:;" hideFocus="true">解读C2P模式</a></li>
                <li id="conTab3" onmouseover="TabMove('con',3,4)"><a href="javascript:;" hideFocus="true">揭秘真伪鉴定</a></li>
                <li id="conTab4" onmouseover="TabMove('con',4,4)"><a href="javascript:;" hideFocus="true">探访钱邮仓储</a></li>
            </ul>
            <div class="ist_index_ybk_con">
                <div class="ist_index_ybk_con_list" id="con_1">
                    <a href="/help/ybsc" target="_blank">
                        <img src="/public/images/index_new_11_1.jpg"  width="959" height="202">
                    </a>
                    <em class="ist_index_ybk_tit">
                        在“互联网+”时代，传统文化收藏开启跨越式转型升级之路，钱邮市场火爆来袭。
                        <a href="/help/ybsc" class="look_more" target="_blank">阅读更多</a>
                    </em>
                </div>
                <div class="ist_index_ybk_con_list" id="con_2" style="display:none;">
                    <a href="/help/jdms" target="_blank">
                        <img src="/public/images/index_new_11_2.jpg" width="959" height="202">
                    </a>
                    <em class="ist_index_ybk_tit">
                        在新兴的钱邮市场，互联网金融与文化联姻，以现货质押为交易基础保障利益双方资金安全。
                        <a href="/help/jdms" class="look_more" target="_blank">阅读更多</a>
                    </em>
                </div>
                <div class="ist_index_ybk_con_list" id="con_3" style="display:none;">
                    <a href="/help/jmzw" target="_blank">
                        <img src="/public/images/index_new_11_3.jpg" width="959" height="202">
                    </a>
                    <em class="ist_index_ybk_tit">
                        在频繁的市场交易中，权威、专业的真伪鉴别方法保障钱邮真伪，是完成交易的关键。
                        <a href="/help/jmzw" class="look_more" target="_blank">阅读更多</a>
                    </em>
                </div>
                <div class="ist_index_ybk_con_list" id="con_4" style="display:none;">
                    <a href="/help/ybcc" target="_blank">    
                        <img src="/public/images/index_new_11_4.jpg" width="959" height="202">
                    </a>
                    <em class="ist_index_ybk_tit">
                        钱邮仓储犹如银行金库，但仓储条件却比银行金库更加苛刻与挑剔，对于环境有着更高的要求。
                        <a href="/help/ybcc" class="look_more" target="_blank">阅读更多</a>
                    </em>
                </div>
            </div>
        </div>
    </div>-->	
    <!--走近钱邮 E-->
    <!--文投学院 B-->
    <div class="ist_index_wmx_main">
        <div class="fl ist_index_wmx_box">
            <h2>文投学院<a class="ist_more" href="/xueyuan/redian.html" target="_blank">更多>></a></h2>
            <ul class="ist_index_wmx_list">
                 <li><a class="ist_tit" target="_blank" href="/gonggao/news/3637.html">钱邮：极具投资潜力的文化商品</a><em class="ist_time">2017-08-09</em></li><li><a class="ist_tit" target="_blank" href="/gonggao/news/3636.html">南方钱邮藏品之《九运会小全张》背后的…</a><em class="ist_time">2017-08-09</em></li><li><a class="ist_tit" target="_blank" href="/gonggao/news/3345.html">8家企业挂牌深圳文交所“文化四板”</a><em class="ist_time">2016-12-13</em></li><li><a class="ist_tit" target="_blank" href="/gonggao/news/3339.html">湖南文交所与湖南省演艺集团战略合作</a><em class="ist_time">2016-12-08</em></li>                
            </ul>
        </div>
        <div class="fl ist_index_wmx_box wmx_mid">
            <h2>媒体报道<a class="ist_more" href="/gonggao/meitibaodao.html" target="_blank">更多>></a></h2>
            <ul class="ist_index_wmx_list">
                <li><a class="ist_tit" target="_blank" href="/gonggao/news/3579.html">搜狐财经：手投网与厦门国际银行正式签…</a><em class="ist_time">2017-06-21</em></li>
                     </a><li><a class="ist_tit" target="_blank" href="/gonggao/news/3341.html">张家界网：手投网CEO杨清华：关注世…</a><em class="ist_time">2016-12-08</em></li>
                     </a><li><a class="ist_tit" target="_blank" href="/gonggao/news/3340.html">搜狐：网贷备案指引曝光 手投网：行业…</a><em class="ist_time">2016-12-08</em></li>
                     </a><li><a class="ist_tit" target="_blank" href="/gonggao/news/3313.html">搜狐：全国多地大雪初至 手投网提醒大…</a><em class="ist_time">2016-11-23</em></li>
                     </a>                
            </ul>
        </div>
        <div class="fl wmx_r">
            <h2 style="width:auto;">新手指引<a class="ist_more last_more" href="/Help/novice" target="_blank">更多>></a></h2>
            <ul class="ist_index_wmx_list">
                <li><a class="ist_tit" href="/Help/novice#actOne" target="_blank">手投网的优势</a></li>
                <li><a class="ist_tit" href="/Help/novice#actTwo" target="_blank">手投网的C2P模式</a></li>
                <li class="last"><a class="ist_tit" href="/Help/novice#actThree" target="_blank">有哪些出借产品？</a></li>
            </ul>
			<div class="ist_index_edu"><a href="/Help/help/showBlock/actSix" target="_blank">网贷风险防范教育</a></div>
        </div>
    </div>
    <!--文投学院 E-->
    <!--加息券活动首页弹窗  B-->
    
<!--     <div class="jxq_pop_bg"></div>
    <div class="jxq_pop">
        <a href="http://www.ishoutou.cn/gonggao/news/3644.html" target="_blank"><img src="/public/images/nr_04.png" alt="818理财节"></a>
        <a href="/member/common/login" target="_blank"><img src="/public/images/nr_03.png" alt="送你十张加息券"></a>
        <a href="javascript:;" class="close_jxq_pop"></a>
    </div> -->
    <!--加息券活动首页弹窗  E--></div>
<div class="clear"></div>
<script type="text/javascript">
    function bodyTop(){
        $("html,body").animate({
            scrollTop:"0px"
        },1000);
    }
    $(".header .main .fr dl dd").css("float","none");
    //走进钱邮
    function TabMove(name,cursel,n){
        n = n || 50;
        for (i=1;i<=n;i++){
            var menu=document.getElementById(name+"Tab"+i);
            var con=document.getElementById(name+"_"+i);
            menu.className=i==cursel?"current":"";
            con.style.display=i==cursel?"block":"none";
            $('#rank_'+i).hide();
        }
        $('#rank_'+cursel).show();
    }
</script>
<script type="text/javascript"> var width = document.body.offsetWidth;
$(".h_ban").yxMobileSlider({width:width,during:3000})
$(function () {
   function loadImg(obj, data) {
      var i = 0;
      setInterval(function () {
         i++
         if (i > data) {
            i = data
         }
         var imgLeft = -(i * 44 + (i * 4)) + 'px';
         var imgLeft = imgLeft + '\t' + '0px';
         obj.css("backgroundPosition", imgLeft);
         obj.html(i + '%');
      }, 1)
   }
   var arr = [100,100,100,100];
   if(arr){
      $(".rote2").each(function (index, element) {
         loadImg($(element),arr[index]);
      });
   }
})
</script>
 <div class="VdFooter">

        <div class="footer index_footer">

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

                        <span><a class="wb" ><img style="float:none;margin:0px;" alt="" src="/public/images/20150709172433.png" /></a></span>

                        <span><a class="wx" ><img alt="" style="float:none;margin:0px;" src="/public/images/20150716110549.jpg" />&nbsp;</a></span>

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

                    <span style="width: 130px;"><a style="width: 130px;" class="tu2" id='___szfw_logo___' href='javascript:;' target="_blank"></a></span>

                    <span><a class="tu6" href="javascript:;" target="_blank"></a></span>

                    <span><a class="tu7" href="javascript:;" target="_blank"></a></span>

                    <span style="display: none"><a class="tu3" href="http://kx.zw.cn" target="_blank"></a></span>

                    <span style="display: none"><a class="tu4" href="http://www.cec9000.com" target="_blank"></a></span>

                    <span style="display: none;"><a class="tu5" href="http://www.ccig.org.cn" target="_blank"></a></span></p>

                    <p></p>

                    <p>©2015&nbsp;手投网 (www.ishoutou.cn) All&nbsp;Rights&nbsp;Reserved　|　北京手投网投资控股有限公司　|　京ICP备15028302号　|　京ICP证160127号　|　<font style="cursor:pointer;" onclick="javascript:window.open('http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010702001418')" ><img alt="" src="/public/images/beian.png" /> 京公网安备 11010702001418号</font></p>

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

            <a class="icon5" href="http://www.ishoutou.cn/Help/yaoqing" target="_blank"><img src="/public/images/invite.png" width="123" height="130"></a>

        </li>

    </ul>

</div>

<!--弹出层 B-->

<!--<style>

    .Christmas_popBox{

        width:750px;

        height:498px;

        position: fixed;

        top: 50%;

        left: 50%;

        margin:-249px 0 0 -375px;

        z-index: 501;

        background: url(/public/images/skin_8.png)no-repeat;

        background-size: 100% 100%;

        filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images/skin_8.png',sizingMethod='scale');

    }

    .Christmas_popBox span{

         display: block;

        width:750px;

        height:498px;

        position: absolute;

        top: 0;

        left: 0;

        border:0;

        overflow: hidden;

    }

    .Christmas_popBox span a{

        display: block;

        width: 100%;

        height: 100%;

    }

    .cha_2{

        display: block;

        position: absolute;

        width:36px;

        right:76px;

        top: 76px;

        filter:alpha(opacity=80);       /* IE */

        -moz-opacity:0.8;              /* 老版Mozilla */

        -khtml-opacity:0.8;              /* 老版Safari */

        opacity: 0.8;

        cursor: pointer;

        z-index:502;

    }

    .Christmas_popBox .cha_2:hover{

        filter:alpha(opacity=100);       /* IE */

        -moz-opacity:1;              /* 老版Mozilla */

        -khtml-opacity:1;              /* 老版Safari */

        opacity: 1;

    }

    #Christmas_zhe{

        position: absolute;

        top: 0;

        bottom: 0;

        width: 100%;

        background: #0c0412;

        filter:alpha(opacity=50);       /* IE */

        -moz-opacity:0.5;              /* 老版Mozilla */

        -khtml-opacity:0.5;              /* 老版Safari */

        opacity: 0.5;

        z-index: 500;

    }

</style>

<div class="Christmas_popBox" style="visibility: hidden;">

    <img src="/public/images/newCha_03.png" class="cha_2" />

    <span><a href="http://cj.ishoutou.com" target="_blank">&nbsp;</a></span>

</div>-->

<!--遮罩B-->

<div id="Christmas_zhe" style="display:none;"></div>

<script type='text/javascript'>(function(){document.getElementById('___szfw_logo___').oncontextmenu = function(){return false;}})();</script>

<link type="text/css" rel="stylesheet" href="/public/css/kf.css?v=20160829"/>

<!--<script src="/public/js/jquery.cookie.js"></script>-->



<script>

    $(function(){



         //2017抽奖弹窗

        /*var zheH=$(document).height();

        var href = window.location.host;

        var ishow =  $.cookie('ishow'); 

        if(!ishow){

            $.cookie('ishow', 'true', { expires: 1, path: '/' });

            $("#Christmas_zhe").css({"height":zheH,"display":"block"});

            $(".Christmas_popBox").css({"display":"block","visibility":"inherit"});

        }else{

            $(".Christmas_popBox").css({"display":"none"});

            $("#Christmas_zhe").css("display","none");

        }

        



        $(".Christmas_popBox .cha_2").on("click",function(){

            $(".Christmas_popBox").css({"display":"none"});

            $("#Christmas_zhe").css("display","none");

        })

        */

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