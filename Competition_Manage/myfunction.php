<?php
class myfunction{
	function str_to($str){	//�ַ�װ���������ݿ��в�������ʱ��
		$str=str_replace(" ","&nbsp;",$str);	//�ո��滻html���ַ����ո�
		$str=str_replace("<","&lt;",$str);    //��html���������������
		$str=str_replace(">","&gt;",$str);	//��html���������������
		$str=nl2br($str);						//�س��滻html��br
		return $str;
	}
	
	
	function news_read_times($news_id){  //���ؾ������ű��������
		$aa=new mysql;
		$aa->link("");
		$query="select * from news_info where F_ID ='$news_id'";
		$rst=$aa->excu($query);
		$news=mysql_fetch_array($rst,MYSQL_ASSOC);
		return $news[times];
	}
	function page($query,$page_id,$add,$num_per_page) {  //��ҳ����
	include "/include/mysql.inc";
	//ʹ�÷���Ϊ:
	//	$myf=new myfunction
	//	$query="";
	//	$myf->page($query,$page_id,$add,&num_per_page);
	//	$bb=$aa->excu($query);
	$bb=new mysql;
	global $query;	//����ȫ�ֱ���
	$bb->link("");
	$page_id=$_GET[page_id];  //����page_id
	if($page_id==""){
		$page_id=1;
	}
	$rst=$bb->excu($query);
	$num=mysql_num_rows($rst);
	if($num==0){
		echo "û�в鵽��ؼ�¼";
	}
	$page_num=ceil($num/$num_per_page);
	for($i=1;$i<=$page_num;$i++){
		echo "&nbsp;[<a href=?".$add."page_id=$i>".$i."</a>]";
	}
	$page_up=$page_id-1;
	$page_down=$page_id+1;
	if($page_id==1){
		echo "<a href=?".$add."page_id=$page_down>��һҳ</a>&nbsp;&nbsp;��".$page_id."ҳ,��".$page_num."ҳ";
	}
	else if($page_id>=$page_num-1){
		echo "<a href=?".$add."page_id=$page_up>��һҳ</a>&nbsp;&nbsp;
		��".$page_id."ҳ����".$page_num."ҳ";
	}
	else{
		echo "<a href=?".$add."page_id=$page_up>��һҳ</a>&nbsp;&nbsp;
		��".$page_id."ҳ����".$page_num."ҳ";
	}
	$page_jump=$num_per_page*($page_id-1);
	$query=$query." limit $page_jump, $num_per_page";
	}
}
?>


