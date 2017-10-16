<?php include(pe_tpl('header.html'));?>
<div class="right">
	<div class="d_fk mat15" >
		<div class="d_fk_01">
			<div class="pad10">
				<div class="dfk_img1"><i></i></div>
				<div class="dfk_info1">
					<a href="admin.php?mod=order&state=wpay" target="_blank">
					<p><?php echo $tongji['order_wpay'] ?></p>
					待付款订单
					</a>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="d_fk_01">
			<div class="pad10">
				<div class="dfk_img2"><i></i></div>
				<div class="dfk_info1">
					<a href="admin.php?mod=order&state=wsend" target="_blank">
					<p><?php echo $tongji['order_wsend'] ?></p>
					待发货订单
					</a>
				</div>
			</div>
		</div>
		<div class="d_fk_01">
			<div class="pad10">
				<div class="dfk_img3"><i></i></div>
				<div class="dfk_info1">
					<a href="admin.php?mod=order&state=wget" target="_blank">
					<p><?php echo $tongji['order_wget'] ?></p>
					待确认订单
					</a>
				</div>
			</div>
		</div>
		<div class="d_fk_01">
			<div class="pad10" style="margin-right:0">
				<div class="dfk_img4"><i></i></div>
				<div class="dfk_info1">
					<a href="admin.php?mod=cashout" target="_blank">
					<p><?php echo $tongji['cashout_js'] ?></p>
					待结算提现
					</a>
				</div>
			</div>
		</div>	
	</div>
	<div class="clear"></div>
	<div class="xtxx_fl">
		<div style="padding-right:15px;">
		<div class="xtxx" style="height:auto; border-bottom:0">
			<div class="xt_tt">
				<span>用户统计</span>
			</div>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="wenzhang_bak tj_tb">
			<tr>
				<td class="aright" width="105"><span>今日访客：</span></td>
				<td><?php echo $tongji['iplog_today'] ?> <span>人</span></td>
			</tr>
			<tr style="background:#f9fafc">
				<td class=" aright"><span>昨日访客：</span></td>
				<td><?php echo $tongji['iplog_lastday'] ?> <span>人</span></td>
			</tr>
			<tr>
				<td class=" aright"><span>累计访客：</span></td>
				<td><?php echo $tongji['iplog_all'] ?> <span>人</span></td>
			</tr>
			<tr style="background:#f9fafc">
				<td class=" aright" ><span>今日注册：</span></td>
				<td><?php echo $tongji['user_today'] ?> <span>人</span></td>
			</tr>
			<tr>
				<td class=" aright"><span>昨日注册：</span></td>
				<td><?php echo $tongji['user_lastday'] ?> <span>人</span></td>
			</tr>	
			<tr style="background:#f9fafc">
				<td class=" aright"><span>累计注册：</span></td>
				<td><?php echo $tongji['user_all'] ?> <span>人</span></td>
			</tr>
			</table>
		</div>
		</div>
	</div>
	<div class="xtxx_fl">
		<div class="xtxx" style="height:auto; border-bottom:0">
			<div class="xt_tt">
				<span>订单统计</span>
			</div>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="wenzhang_bak tj_tb">
			<tr>
				<td class=" aright" width="105"><span>今日订单：</span></td>
				<td><?php echo $tongji['order_today'] ?> <span>个</span></td>
			</tr>
			<tr style="background:#f9fafc">
				<td class=" aright"><span>昨日订单：</span></td>
				<td><?php echo $tongji['order_lastday'] ?> <span>个</span></td>
			</tr>
			<tr>
				<td class="aright"><span>累计订单：</span></td>
				<td><?php echo $tongji['order_all'] ?> <span>个</span></td>
			</tr>
			<tr style="background:#f9fafc">
				<td class="aright"><span>产品总数：</span></td>
				<td><?php echo $tongji['product_num'] ?> <span>个</span></td>
			</tr>	
			<tr>
				<td class=" aright"><span>评价总数：</span></td>
				<td><?php echo $tongji['comment_num'] ?> <span>条</span></td>
			</tr>
			<tr style="background:#f9fafc">
				<td class=" aright"><span>提现总数：</span></td>
				<td><?php echo $tongji['cashout_num'] ?> <span>笔</span></td>
			</tr>
			</table>
		</div>
	</div>
	<div class="xtxx_fl mab10">
		<div style="padding-right:15px;">
		<div class="xtxx">
			<div class="xt_tt">
				<span>系统信息</span>
			</div>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="xx_tb">
			<tr>
				<td align="right" width="100"><span>系统版本：</span></td>
				<td style="border-top:0"><a href="http://www.phpshe.com" target="_blank" class="corg">PHPSHE<?php echo $ini['phpshe']['version'] ?>商业版</a><span class="mal5">（授权编号：<span id="license_num">未授权</span>）</span></td>
			</tr>
			<tr>
				<td align="right"><span>购买授权：</span></td>
				<td>
					<a href="http://wpa.qq.com/msgrd?v=3&uin=76265959&site=qq&menu=yes" target="_blank"><img border="0" src="http://www.phpshe.com/template/default/index/images/qq.png" alt="咨询客服" title="咨询客服"/></a>
				</td>
			</tr>
			<tr>
				<td align="right"><span>官方网站：</span></td>
				<td><a class="cblue" href="http://www.phpshe.com" target="_blank">http://www.phpshe.com</a></td>
			</tr>
			<tr>
				<td align="right"><span>咨询热线：</span></td>
				<td>15839823500</td>
			</tr>
			<tr>
				<td align="right"><span>服务器信息：</span></td>
				<td><?php echo $php_os ?> <?php echo $php_apache ?> PHP/<?php echo $php_version ?> <a href="admin.php?mod=index&act=phpinfo" target="_blank" class="c888">[详情]</a></td>
			</tr>
			<tr>
				<td align="right"><span>数据库信息：</span></td>
				<td><?php echo $php_mysql ?></td>
			</tr>
			</table>
			</div>
		</div>
	</div>
	<div class="xtxx_fl mab10">
		<div class="xtxx">
			<div class="xt_tt">
				<span>官方动态</span>
			</div>
			<div class="gfdt">
				<iframe src="http://www.phpshe.com/api/shop?type=news&v=<?php echo $ini['phpshe']['version'] ?>" frameborder="0" width="100%" height="275px"></iframe>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>
<script type="text/javascript">
$(function(){
	$.getJSON("http://www.phpshe.com/index.php?mod=api&act=license&callback=?", function(json){
		if (json.result) $("#license_num").html(json.license_num);
	})
})
</script>
<?php include(pe_tpl('footer.html'));?>