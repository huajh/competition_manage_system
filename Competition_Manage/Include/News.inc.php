<?php require_once('db.inc.php');?>
<?php
class News extends DBSQL 
{
	public function __construct()
	{
		parent::__construct();
	}
	/**
	 * 功能：提取指定父ID的栏目列表
	 * 参数：$parent_id 父ID
	 * 返回：数组
	 */
	public function GetNewsList(){
		$sql = "SELECT *FROM news_info order by F_ID desc";
		return $this->select($sql);
	}
	/**
	 * 功能：提取信息条数
	 * 参数：$class_id 栏目ID,$keyword 搜索关键字
	 * 返回：信息条数
	 */	
	public function News_total_num(){  //新闻总数
		$query="select * from news_info";
		//mysql_query("set names'GBK'");
		$result=mysql_query($query);
		return mysql_num_rows($result);
	}
	/**
	 * 功能：删除信息
	 * 参数：$arr ID数组,$type 执行类型(1为放入回收站,2为彻底删除,3为恢复信息)
	 * 返回：TRUE OR FALSE
	 */
	function DelNews($id)
	{
		$sql = "DELETE FROM news_info WHERE F_ID = '$id'";
		$this->delete($sql);
	}
}
?>
