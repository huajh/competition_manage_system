<?php require_once('db.inc.php');?>
<?php
class News extends DBSQL 
{
	public function __construct()
	{
		parent::__construct();
	}
	/**
	 * ���ܣ���ȡָ����ID����Ŀ�б�
	 * ������$parent_id ��ID
	 * ���أ�����
	 */
	public function GetNewsList(){
		$sql = "SELECT *FROM news_info order by F_ID desc";
		return $this->select($sql);
	}
	/**
	 * ���ܣ���ȡ��Ϣ����
	 * ������$class_id ��ĿID,$keyword �����ؼ���
	 * ���أ���Ϣ����
	 */	
	public function News_total_num(){  //��������
		$query="select * from news_info";
		//mysql_query("set names'GBK'");
		$result=mysql_query($query);
		return mysql_num_rows($result);
	}
	/**
	 * ���ܣ�ɾ����Ϣ
	 * ������$arr ID����,$type ִ������(1Ϊ�������վ,2Ϊ����ɾ��,3Ϊ�ָ���Ϣ)
	 * ���أ�TRUE OR FALSE
	 */
	function DelNews($id)
	{
		$sql = "DELETE FROM news_info WHERE F_ID = '$id'";
		$this->delete($sql);
	}
}
?>
