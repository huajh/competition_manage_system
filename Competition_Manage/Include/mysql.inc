<?php
class mysql{
	//���ӷ����������ݿ��Լ�ִ��SQL�������
	public $database;
	public $server_username;
	public $server_userpassword;
	function mysql() {
		//���캯����ʼ����Ҫ���ӵ����ݿ�
		$this->server_username="root";
		$this->server_userpassword="root";
	}
	function link($database) {
		//���ӷ����������ݿ�
		//�����������ӵ����ݿ�
		if($database==""){
			$this->database="Competition_data";
		}
		else
			$this->database=$database;
		//���ӷ����������ݿ� 
		$id =@mysql_connect("localhost",$this->server_username,$this->server_userpassword) or die("�����������ݿ�");
		@mysql_select_db($this->database,$id) or die("���ܴ����ݿ�");
		mysql_query("SET CHARSET 'SET CHARSET 'utf-8' ");
	}
	function excu($query) {
		if(@$result=mysql_query($query)){
			return $result;
		}else{
			echo "sql���ִ�д��󣡣��������ԣ�����";
			exit;
		}
	}
}
?>