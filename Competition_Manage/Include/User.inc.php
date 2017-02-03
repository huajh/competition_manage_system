<?php require_once('db.inc.php');?>
<?php
class User extends DBSQL 
{
	public function __construct()
	{
		parent::__construct();
	}
	/**
      * ���ܣ���֤��½��Ϣ
      * ������$username �û���,$password ����
      * ���أ�false �� ����
      */
	public function CheckLogin($username,$password)
	{
		$password = md5($password);
		$sql = "SELECT F_ID,F_USER_NAME,F_ID_GROUP_INFO FROM EM_ADMIN_INFO";
		$sql .= " WHERE F_USER_NAME = '$username' AND F_USER_PASSWORD = '$password'";
		$r = $this->select($sql);
		if($r[0]['F_ID'] > 0)										//�ж��Ƿ��м�¼�����򷵻�����
		{
			return $r[0];
		}else{
			return false;
		}
	}
	/**
	 * ���ܣ���ȡ����Ĳ˵�
	 * ������$groupid ��ID,$parentid �˵���ID
	 * ���أ�����
	 */
	public function GetMenuList($groupid,$parentid)
	{
		$sql = "SELECT m.F_MENU_NAME,m.F_MENU_LINK,g.F_ID_MENU_INFO FROM EE_MENU_GROUP g,EM_MENU_INFO m";
		$sql .= " WHERE g.F_ID_GROUP_INFO = $groupid AND g.F_ID_MENU_INFO = m.F_ID AND g.F_PARENT_ID = $parentid";
		return $this->select($sql);
	}
	/**
	 * ���ܣ���ȡ�û����б�
	 * ���أ�����
	 */	
	public function GetGroupList()
	{
		$sql = "SELECT * FROM EM_GROUP_INFO";
		return $this->select($sql);
	}
	/**
	 * ���ܣ��ж��ʺ��Ƿ����
	 * ������$username �ʺ�
	 * ���أ�����
	 */	
	public function CheckAdminExist($username)
	{
		$sql = "SELECT F_ID FROM EM_ADMIN_INFO WHERE F_USER_NAME = '$username'";
		$r = $this->select($sql);
		if($r[0][0] > 0)
			return true;
		else 
			return false;
	}
	/**
	 * ���ܣ���ȡ�˵��б�
	 * ������$parent_id ��ID
	 * ���أ�����
	 */
	public function GetMenu($parent_id=0)
	{
		$sql = "SELECT * FROM EM_MENU_INFO WHERE F_PARENT_ID = '$parent_id'";
		return $this->select($sql);
	}
	/**
	 * ���ܣ������û����Ƿ���ӵ�д˲˵�
	 * ������$group_id ��ID,$menu_id �˵�ID
	 * ���أ�TRUE OR FALSE
	 */
	public function CheckMenuExit($group_id,$menu_id)
	{
		$sql = "SELECT F_ID FROM EE_MENU_GROUP WHERE F_ID_GROUP_INFO = '$group_id' AND F_ID_MENU_INFO = '$menu_id'";
		$r = $this->select($sql);
		if($r[0][0])												//�ж��Ƿ��иü�¼
		{
			return true;
		}else{
			return false;
		}
	}
	/**
	 * ���ܣ������û����Ƿ��Ѵ���
	 * ������$name ������
	 * ���أ�TRUE OR FALSE
	 */	
	public function CheckGroupExit($name)
	{
		$sql = "SELECT F_ID FROM EM_GROUP_INFO WHERE F_GROUP_NAME = '$name'";
		$r = $this->select($sql);
		if($r[0][0]) 											//�ж��Ƿ��иü�¼
		{
			return true;
		}else{
			return false;
		}
	}
	/**
	 * ���ܣ�ɾ���鼰��ز˵����û���Ϣ
	 * ������$id ��ID
	 * ���أ�TRUE OR FALSE
	 */
	public function DelGroup($id)
	{
		$this->begintransaction();									//��ʼ������
		try {
			$sql = "DELETE FROM EM_GROUP_INFO WHERE F_ID = '$id'";
			$this->delete($sql);									//ɾ������Ϣ
			$sql = "DELETE FROM EM_ADMIN_INFO WHERE F_ID_GROUP_INFO = '$id'";
			$this->delete($sql);									//ɾ���û���Ϣ
			$sql = "DELETE FROM EE_MENU_GROUP WHERE F_ID_GROUP_INFO = '$id'";
			$this->delete($sql);									//ɾ���˵���Ϣ
		}catch (Exception $e){									//�����쳣
			echo $e;											//����쳣
			$this->rollback();									//�ع�
			exit();
		}
		$this->commit();										//�ύ
		return true;
	}
	public function GetAdminList() {
		$sql = "SELECT * FROM EM_ADMIN_INFO";
		return $this->select($sql);
	}
}
?>
