<link rel="stylesheet" href="<?php echo base_url();?>public/css/base.css?ver=1.1.0">
<link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css?ver=1.1.0">
<div class="wapper">
<div id="content" class="maze-content clr">
	<div class="ace_mian">
		
		<ul class="thumb-list clearfix">
			<li><a href="javascript:void(0);"><img src="http://gitphoto.qiniudn.com/1.jpg?imageView/1/w/200/h/200" width="200" height="200" /></a></li>
			<li><a href="javascript:void(0);"><img src="http://gitphoto.qiniudn.com/1.jpg?imageView/1/w/200/h/200" width="200" height="200" /></a></li>
			<li><a href="javascript:void(0);"><img src="http://gitphoto.qiniudn.com/1.jpg?imageView/1/w/200/h/200" width="200" height="200" /></a></li>
			<li><a href="javascript:void(0);"><img src="http://gitphoto.qiniudn.com/1.jpg?imageView/1/w/200/h/200" width="200" height="200" /></a></li>
			<li><a href="javascript:void(0);"><img src="http://gitphoto.qiniudn.com/1.jpg?imageView/1/w/200/h/200" width="200" height="200" /></a></li>
			<li><a href="javascript:void(0);"><img src="http://gitphoto.qiniudn.com/1.jpg?imageView/1/w/200/h/200" width="200" height="200" /></a></li>
			<li><a href="javascript:void(0);"><img src="http://gitphoto.qiniudn.com/1.jpg?imageView/1/w/200/h/200" width="200" height="200" /></a></li>
			<li><a href="javascript:void(0);"><img src="http://gitphoto.qiniudn.com/1.jpg?imageView/1/w/200/h/200" width="200" height="200" /></a></li>
		</ul>
		<script type="text/javascript" src="<?php echo base_url();?>public/js/QQPhoto.min.js?ver=1.1.0"></script>
		<script type="text/javascript">
			$( '.thumb-list li' ).QQPhoto({
				url : "<?php echo base_url();?>public/js/data.json",                 //获取相册列表数据的URL地址 需要返回 JSON 格式，请参考文件 data.json 格式来输出
				commentURL : '/api',            //提交评论 Ajax 发送到 服务器端的地址   返回 JSON 格式，请参考文件 comment.json 格式来输出 
				fix : 5,                           //表示相册列表左右间距的距离                 默认 5 
				minTextLen : 3,                    //发送评论时 表单验证，最少不能少于的字符    默认三个字符
				maxTextLen : 140,                  //发送评论时 表单验证，最多不能少于的字符    默认140个字符
				fadeIn : true,                     //图片默认是否开启淡入效果，默认为 false 
				lazyload: 'images/lazyload.gif',   //默认lazyload的图片，默认为1px.gif 透明图片
				loadding : 'images/loading.gif'    //loading.gif 的文件路径
			});
		</script>
			
			<!-- 日记结束 -->
		<div class="clear"></div>
	</div>
</div>