<?php
class myfunction{
	function str_to($str){	//字符装换：向数据库中插入或更新时用
		$str=str_replace(" ","&nbsp;",$str);	//空格替换html的字符串空格
		$str=str_replace("<","&lt;",$str);    //把html的输出标记正常输出
		$str=str_replace(">","&gt;",$str);	//把html的输出标记正常输出
		$str=nl2br($str);						//回车替换html的br
		return $str;
	}
	
	
	function news_read_times($news_id){  //返回竞赛新闻被浏览次数
		$aa=new mysql;
		$aa->link("");
		$query="select * from news_info where F_ID ='$news_id'";
		$rst=$aa->excu($query);
		$news=mysql_fetch_array($rst,MYSQL_ASSOC);
		return $news[times];
	}
	function page($query,$page_id,$add,$num_per_page) {  //分页函数
	include "/include/mysql.inc";
	//使用方法为:
	//	$myf=new myfunction
	//	$query="";
	//	$myf->page($query,$page_id,$add,&num_per_page);
	//	$bb=$aa->excu($query);
	$bb=new mysql;
	global $query;	//声明全局变量
	$bb->link("");
	$page_id=$_GET[page_id];  //接收page_id
	if($page_id==""){
		$page_id=1;
	}
	$rst=$bb->excu($query);
	$num=mysql_num_rows($rst);
	if($num==0){
		echo "没有查到相关记录";
	}
	$page_num=ceil($num/$num_per_page);
	for($i=1;$i<=$page_num;$i++){
		echo "&nbsp;[<a href=?".$add."page_id=$i>".$i."</a>]";
	}
	$page_up=$page_id-1;
	$page_down=$page_id+1;
	if($page_id==1){
		echo "<a href=?".$add."page_id=$page_down>下一页</a>&nbsp;&nbsp;第".$page_id."页,共".$page_num."页";
	}
	else if($page_id>=$page_num-1){
		echo "<a href=?".$add."page_id=$page_up>上一页</a>&nbsp;&nbsp;
		第".$page_id."页，共".$page_num."页";
	}
	else{
		echo "<a href=?".$add."page_id=$page_up>上一页</a>&nbsp;&nbsp;
		第".$page_id."页，共".$page_num."页";
	}
	$page_jump=$num_per_page*($page_id-1);
	$query=$query." limit $page_jump, $num_per_page";
	}
}
?>


