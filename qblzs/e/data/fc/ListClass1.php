<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=2></td><td onMouseUp='turnit(classdiv2);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>2</td><td><input type=checkbox name=reclassid[] value=2> <a href='/product/' target=_blank>定制整装</a></td><td align=center>0</td><td><a href='#e' onclick=editc(2)>修改</a> <a href='#e' onclick=copyc(2)>复制</a> <a href='#e' onclick=delc(2)>删除</a></td><td><a href='#e' onclick=relist(2)>刷新</a> <a href='#e' onclick=renews(2,'news')>信息</a> <a href='#e' onclick=rejs(2)>JS</a> <a href='#e' onclick=tvurl(2)>调用</a></td></tr><tbody id='classdiv2' style='display:none'></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=3></td><td onMouseUp='turnit(classdiv3);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>3</td><td><input type=checkbox name=reclassid[] value=3> <a href='/design/' target=_blank>量房设计</a></td><td align=center>0</td><td><a href='#e' onclick=editc(3)>修改</a> <a href='#e' onclick=copyc(3)>复制</a> <a href='#e' onclick=delc(3)>删除</a></td><td><a href='#e' onclick=relist(3)>刷新</a> <a href='#e' onclick=renews(3,'news')>信息</a> <a href='#e' onclick=rejs(3)>JS</a> <a href='#e' onclick=tvurl(3)>调用</a></td></tr><tbody id='classdiv3' style='display:none'></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=4></td><td onMouseUp='turnit(classdiv4);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>4</td><td><input type=checkbox name=reclassid[] value=4> <a href='/quote/' target=_blank>智能报价</a></td><td align=center>0</td><td><a href='#e' onclick=editc(4)>修改</a> <a href='#e' onclick=copyc(4)>复制</a> <a href='#e' onclick=delc(4)>删除</a></td><td><a href='#e' onclick=relist(4)>刷新</a> <a href='#e' onclick=renews(4,'news')>信息</a> <a href='#e' onclick=rejs(4)>JS</a> <a href='#e' onclick=tvurl(4)>调用</a></td></tr><tbody id='classdiv4' style='display:none'></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=5></td><td onMouseUp='turnit(classdiv5);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>5</td><td><input type=checkbox name=reclassid[] value=5> <a href='/case/' target=_blank>实景样板间</a></td><td align=center>0</td><td><a href='#e' onclick=editc(5)>修改</a> <a href='#e' onclick=copyc(5)>复制</a> <a href='#e' onclick=delc(5)>删除</a></td><td><a href='#e' onclick=relist(5)>刷新</a> <a href='#e' onclick=renews(5,'news')>信息</a> <a href='#e' onclick=rejs(5)>JS</a> <a href='#e' onclick=tvurl(5)>调用</a></td></tr><tbody id='classdiv5' style='display:none'></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=6></td><td onMouseUp='turnit(classdiv6);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>6</td><td><input type=checkbox name=reclassid[] value=6> <a href='/process/' target=_blank>德系工艺</a></td><td align=center>0</td><td><a href='#e' onclick=editc(6)>修改</a> <a href='#e' onclick=copyc(6)>复制</a> <a href='#e' onclick=delc(6)>删除</a></td><td><a href='#e' onclick=relist(6)>刷新</a> <a href='#e' onclick=renews(6,'news')>信息</a> <a href='#e' onclick=rejs(6)>JS</a> <a href='#e' onclick=tvurl(6)>调用</a></td></tr><tbody id='classdiv6' style='display:none'></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=7></td><td onMouseUp='turnit(classdiv7);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>7</td><td><input type=checkbox name=reclassid[] value=7> <a href='/about/' target=_blank>关于我们</a></td><td align=center>0</td><td><a href='#e' onclick=editc(7)>修改</a> <a href='#e' onclick=copyc(7)>复制</a> <a href='#e' onclick=delc(7)>删除</a></td><td><a href='#e' onclick=relist(7)>刷新</a> <a href='#e' onclick=renews(7,'news')>信息</a> <a href='#e' onclick=rejs(7)>JS</a> <a href='#e' onclick=tvurl(7)>调用</a></td></tr><tbody id='classdiv7' style='display:none'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=8></td><td>&nbsp;&nbsp;&nbsp;<img src='../data/images/dir.gif'></td><td align=center>8</td><td><input type=checkbox name=reclassid[] value=8> <a href='/about/contact/' target=_blank>联系我们</a></td><td align=center>0</td><td><a href='#e' onclick=editc(8)>修改</a> <a href='#e' onclick=copyc(8)>复制</a> <a href='#e' onclick=delc(8)>删除</a></td><td><a href='#e' onclick=relist(8)>刷新</a> <a href='#e' onclick=renews(8,'news')>信息</a> <a href='#e' onclick=rejs(8)>JS</a> <a href='#e' onclick=tvurl(8)>调用</a></td></tr></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=9></td><td onMouseUp='turnit(classdiv9);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>9</td><td><input type=checkbox name=reclassid[] value=9> <a href='/mobile/' target=_blank>手机站首页</a></td><td align=center>0</td><td><a href='#e' onclick=editc(9)>修改</a> <a href='#e' onclick=copyc(9)>复制</a> <a href='#e' onclick=delc(9)>删除</a></td><td><a href='#e' onclick=relist(9)>刷新</a> <a href='#e' onclick=renews(9,'news')>信息</a> <a href='#e' onclick=rejs(9)>JS</a> <a href='#e' onclick=tvurl(9)>调用</a></td></tr><tbody id='classdiv9' style='display:none'><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=11></td><td>&nbsp;&nbsp;&nbsp;<img src='../data/images/dir.gif'></td><td align=center>11</td><td><input type=checkbox name=reclassid[] value=11> <a href='/mobile/design/' target=_blank>免费设计</a></td><td align=center>0</td><td><a href='#e' onclick=editc(11)>修改</a> <a href='#e' onclick=copyc(11)>复制</a> <a href='#e' onclick=delc(11)>删除</a></td><td><a href='#e' onclick=relist(11)>刷新</a> <a href='#e' onclick=renews(11,'news')>信息</a> <a href='#e' onclick=rejs(11)>JS</a> <a href='#e' onclick=tvurl(11)>调用</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=12></td><td>&nbsp;&nbsp;&nbsp;<img src='../data/images/dir.gif'></td><td align=center>12</td><td><input type=checkbox name=reclassid[] value=12> <a href='/mobile/product/' target=_blank>定制整装</a></td><td align=center>0</td><td><a href='#e' onclick=editc(12)>修改</a> <a href='#e' onclick=copyc(12)>复制</a> <a href='#e' onclick=delc(12)>删除</a></td><td><a href='#e' onclick=relist(12)>刷新</a> <a href='#e' onclick=renews(12,'news')>信息</a> <a href='#e' onclick=rejs(12)>JS</a> <a href='#e' onclick=tvurl(12)>调用</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=14></td><td>&nbsp;&nbsp;&nbsp;<img src='../data/images/dir.gif'></td><td align=center>14</td><td><input type=checkbox name=reclassid[] value=14> <a href='/mobile/quote/' target=_blank>智能报价</a></td><td align=center>0</td><td><a href='#e' onclick=editc(14)>修改</a> <a href='#e' onclick=copyc(14)>复制</a> <a href='#e' onclick=delc(14)>删除</a></td><td><a href='#e' onclick=relist(14)>刷新</a> <a href='#e' onclick=renews(14,'news')>信息</a> <a href='#e' onclick=rejs(14)>JS</a> <a href='#e' onclick=tvurl(14)>调用</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=15></td><td>&nbsp;&nbsp;&nbsp;<img src='../data/images/dir.gif'></td><td align=center>15</td><td><input type=checkbox name=reclassid[] value=15> <a href='/mobile/activity/' target=_blank>最新优惠</a></td><td align=center>0</td><td><a href='#e' onclick=editc(15)>修改</a> <a href='#e' onclick=copyc(15)>复制</a> <a href='#e' onclick=delc(15)>删除</a></td><td><a href='#e' onclick=relist(15)>刷新</a> <a href='#e' onclick=renews(15,'news')>信息</a> <a href='#e' onclick=rejs(15)>JS</a> <a href='#e' onclick=tvurl(15)>调用</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=16></td><td>&nbsp;&nbsp;&nbsp;<img src='../data/images/dir.gif'></td><td align=center>16</td><td><input type=checkbox name=reclassid[] value=16> <a href='/mobile/drops/' target=_blank>滴滴接驾</a></td><td align=center>0</td><td><a href='#e' onclick=editc(16)>修改</a> <a href='#e' onclick=copyc(16)>复制</a> <a href='#e' onclick=delc(16)>删除</a></td><td><a href='#e' onclick=relist(16)>刷新</a> <a href='#e' onclick=renews(16,'news')>信息</a> <a href='#e' onclick=rejs(16)>JS</a> <a href='#e' onclick=tvurl(16)>调用</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=17></td><td>&nbsp;&nbsp;&nbsp;<img src='../data/images/dir.gif'></td><td align=center>17</td><td><input type=checkbox name=reclassid[] value=17> <a href='/mobile/tel/' target=_blank>在线咨询</a></td><td align=center>0</td><td><a href='#e' onclick=editc(17)>修改</a> <a href='#e' onclick=copyc(17)>复制</a> <a href='#e' onclick=delc(17)>删除</a></td><td><a href='#e' onclick=relist(17)>刷新</a> <a href='#e' onclick=renews(17,'news')>信息</a> <a href='#e' onclick=rejs(17)>JS</a> <a href='#e' onclick=tvurl(17)>调用</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=18></td><td>&nbsp;&nbsp;&nbsp;<img src='../data/images/dir.gif'></td><td align=center>18</td><td><input type=checkbox name=reclassid[] value=18> <a href='/mobile/stores_nav/' target=_blank>门店导航</a></td><td align=center>0</td><td><a href='#e' onclick=editc(18)>修改</a> <a href='#e' onclick=copyc(18)>复制</a> <a href='#e' onclick=delc(18)>删除</a></td><td><a href='#e' onclick=relist(18)>刷新</a> <a href='#e' onclick=renews(18,'news')>信息</a> <a href='#e' onclick=rejs(18)>JS</a> <a href='#e' onclick=tvurl(18)>调用</a></td></tr><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=19></td><td>&nbsp;&nbsp;&nbsp;<img src='../data/images/dir.gif'></td><td align=center>19</td><td><input type=checkbox name=reclassid[] value=19> <a href='/mobile/loans/' target=_blank>装修贷款</a></td><td align=center>0</td><td><a href='#e' onclick=editc(19)>修改</a> <a href='#e' onclick=copyc(19)>复制</a> <a href='#e' onclick=delc(19)>删除</a></td><td><a href='#e' onclick=relist(19)>刷新</a> <a href='#e' onclick=renews(19,'news')>信息</a> <a href='#e' onclick=rejs(19)>JS</a> <a href='#e' onclick=tvurl(19)>调用</a></td></tr></tbody>