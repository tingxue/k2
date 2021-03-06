<?php
require_once("../../_assets/demo.php");
?>
<html>
<head>
  <?php echo_html_charset() ?>
  <title>k2-eg</title>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <?php echo_default_css() ?>
	<style>
		.k2-fix-float:after{
			content:".";
			display:block;
			height:0;
			clear:both;
			visibility:hidden;
		}
		.k2-fix-float{
			zoom:1;
		}
		#wrap {
			border:1px solid black;
			height:250px;
			width:200px;
			overflow:hidden;
			margin-bottom:20px;
		}
		#wrap .ul-wrap{
			position:relative;
		}

		#wrap .ul-wrap li{
			position:absolute;
			overflow:hidden;
		}

		#wrap .ul-wrap li p{
			position:absolute;
			bottom:0;
			padding-left:10px;
			line-height:27px;
			height:30px;
			width:190px;
			background:transparent;
			border-bottom:1px solid #eee;
			z-index:2;
		}
		#wrap .ul-wrap li:last-child p{
			border:none;
		}
		#wrap .ul-wrap li p a,
		#wrap .ul-wrap li p a:link,
		#wrap .ul-wrap li p a:hover{
			color:#333;
		}
		#wrap .ul-wrap li.show p a,
		#wrap .ul-wrap li.show p a:link,
		#wrap .ul-wrap li.show p a:hover{
			color:#fff;
			font-weight:bold;
		}
		
		#wrap .ul-wrap li p.bg{
			z-index:1;
			background:#fff;
		}
		#wrap .ul-wrap li.show p.bg{
			filter:alpha(opacity=30); /*IE滤镜，透明度50%*/
			-moz-opacity:0.3; /*Firefox私有，透明度50%*/
			opacity:0.3;/*其他，透明度50%*/
			background:#000;
		}

		#wrap-2 {
			border:1px solid black;
			width:800px;
		}

		#wrap-2 li{
			float:left;
			position:relative;
		}
		#wrap-2 .ul-wrap li p{
			position:absolute;
			bottom:0;
			padding-left:10px;
			line-height:27px;
			height:30px;
			width:190px;
			background:transparent;
			z-index:2;
		}
		#wrap-2 .ul-wrap li p.bg{
			z-index:1;
			background:#000;
			filter:alpha(opacity=30); /*IE滤镜，透明度50%*/
			-moz-opacity:0.3; /*Firefox私有，透明度50%*/
			opacity:0.3;/*其他，透明度50%*/
		}
		#wrap-2 .ul-wrap li.show p.bg{
			filter:alpha(opacity=70); /*IE滤镜，透明度50%*/
			-moz-opacity:0.7; /*Firefox私有，透明度50%*/
			opacity:0.7;/*其他，透明度50%*/
			background:#0691e3;
		}
		#wrap-2 .ul-wrap li img {
			filter:alpha(opacity=15); /*IE滤镜，透明度50%*/
			-moz-opacity:0.15; /*Firefox私有，透明度50%*/
			opacity:0.15;/*其他，透明度50%*/
		}
		#wrap-2 .ul-wrap li.show img {
			filter:alpha(opacity=100); /*IE滤镜，透明度50%*/
			-moz-opacity:1; /*Firefox私有，透明度50%*/
			opacity:1;/*其他，透明度50%*/
		}
		#wrap-2 .ul-wrap li p a,
		#wrap-2 .ul-wrap li p a:link,
		#wrap-2 .ul-wrap li p a:hover{
			color:#fff;
		}

  </style>
</head>
<body>
<!--
  <h1>k2-eg</h1>
  <h2>说明</h2>
  <ol>
    <li>
    <pre class="brush:css">
      .demo{
        property : value;  
      }
    </pre> 
    </li>
    <li>description</li>
  </ol>
  <h2>Code</h2>
  <pre class="brush:javascript;">
YUI().use('k2-eg',function(Y){
  Y.K2eg.method();
});
  </pre>nIndex
  <h2>参数</h2>
    <table>
      <tr><th>参数</th><th>默认值</th><th>含义</th></tr>
      <tr><td>eg</td><td>eg</td><td>eg</td></tr>
		</table>
-->
  <h2>例子</h2>
	<div id='wrap'>
		<ul class='ul-wrap'>
			<li><img src='../asset/1.jpg' width='200'  data='{"url":"#","text":"外婆家马腾路店"}'></li>
			<li><img src='../asset/4.jpg' width='200'  data='{"url":"#","text":"外婆家马腾路店"}'></li>
			<li><img src='../asset/5.jpg' width='200'  data='{"url":"#","text":"外婆家马腾路店"}'></li>
		</ul>
	</div>
	<div id='wrap-2'>
		<ul class='ul-wrap k2-fix-float'>
			<li><img src='../asset/1.jpg' width='200' height='300' data='{"url":"#","text":"外婆家马腾路店"}'></li>
			<li><img src='../asset/2.jpg' width='200' height='300' data='{"url":"#","text":"外婆家马腾路店"}'></li>
			<li><img src='../asset/4.jpg' width='200' height='300' data='{"url":"#","text":"外婆家马腾路店"}'></li>
			<li><img src='../asset/5.jpg' width='200' height='300' data='{"url":"#","text":"外婆家马腾路店"}'></li>
		</ul>
	</div>
<script>
//仅用于开发环境
if(typeof K2_config === 'undefined'){
  var K2_config = {
    noCombine : true,//是否使用combo功能，开发环境下支持combo需要配置minfy，默认使用
    noCache : true,//是否在js或css文件尾部增加随机函数来防止浏览器缓存，默认使用
    console : true,//是否使用通用的console控制台，这样就可以在页面显示Y.log内容，默认使用
                   //失效时，请查看对应的YUI实例需要使用event-custom-base模块
    noVersion : true,//是否使用不带版本号的文件，这样就可以直接调用本地开发文件，因为这些文件都是不带版本号的，默认使用
    syntaxHighlight : true,//是否格式化代码显示，默认使用
    local : true //是否使用本地路径，即类似/k2/seed/seed.js这样的绝对路径，这样无论你是什么本地域名都可以使用，
                 //否则使用类似http://k.kbcdn.com/k2/seed/seed.js这样的绝对路径，默认使用
  }  
}
</script>
<?php echo_default_js(); ?>
<script>
cached = function(source, cache, refetch){
    cache = cache || {};

    return function(arg1, arg2) {
				//console.log(Array.prototype.join.call(arguments, '__'));
        var k = (arg2) ? Array.prototype.join.call(arguments, '__') : arg1;

        if (!(k in cache) || (refetch && cache[k] == refetch)) {
						console.log('no cache');
            cache[k] = source.apply(source, arguments);
        }else{
					console.log('cached');
				}
        return cache[k];
    };

};

var a = function(b,c){
	//console.log(b);
	//console.log(c);
}

e = cached(a);
e(2,{top:2});
e(2,{top:3});

</script>
</body>
</html>
