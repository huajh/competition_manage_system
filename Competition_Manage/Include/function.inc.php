<?php
/**
 * ���ܣ�����Url��ַ����Page����ȥ����ϳ�һ����ַ
 * ���أ���ҳ��ַ
 */
function ParseUrl()
{
	$url = $_SERVER['REQUEST_URI'];						       //��ȡ��ǰ��ַ
	if(strpos($url, '?'))										//�ж��Ƿ���Я������
	{
		$file = substr($url, 0,strpos($url, '?'));						//ȡ���ļ���ַ
		$para = substr($url,strpos($url,'?')+1,strlen($url));			//ȡ�ò����ַ���
		$array = explode('&',$para);							//�ֽ����
		for($i=0;$i<sizeof($array);$i++)							//ѭ����ϲ���
		{
			$tmp = array();
			$tmp = explode("=",$array[$i]);						//�ֽ��������ֵ
			if($tmp[0] != 'Page')								//�жϲ����Ƿ�ΪPage
			{											//��������ϲ���
				if($i != 0)									//�ж��Ƿ�Ϊ��һ������,������ӡ�&��
					$link .= "&";
				$link .= $array[$i];
			}
		}
		$link = $file . "?" . $link . "&";							//��ϳɷ�ҳ���ӵ�ַ
	}else{
		$link = $url . "?";
	}
	return $link;
}
/**
 * ���ܣ������ҳ�ַ���
 * ������$pagecount ��ҳ��,$curr_page ��ǰҳ��,$pagesize ÿҳ������
 * ���أ���ҳ�ַ���
 */

function Page($pagecount,$curr_page,$pagesize)
{
	$url = ParseUrl();
	$prev = $curr_page - 1;
	$next = $curr_page + 1;
	$start = "<a href='" . $url . "Page=1'><font face='����'>��ҳ</font></a>";
	$prev_link = ($prev_link >= 1) ? "<a href='" . $url . "Page=$prev'><font face='����'>��һҳ</font></a>" : "��һҳ";
	$next_link = ($next <= $pagecount) ? "<a href='" . $url . "Page=$next'><font face='����'>��һҳ</font></a>" : "��һҳ";
	$end = "<a href='" . $url ."Page=$pagecount'><font face='����'>βҳ</font></a>";
	$str = "<form name='jump' method='get' action=''>";
	$str .= "��ǰ��" . $curr_page . "ҳ ��" . $pagecount . "ҳ ÿҳ" . $pagesize;
	$str .= " " . $start . " " . $prev_link . " " . $next_link . " " . $end;
	$str .= " " . $curr_page . "/" . $pagecount;
	$str .= " ת��<input name='Page' type='text' id='Page' size='5'>ҳ"; 
	$str .= " <input type=\"submit\" name=\"Submit\" value=\"GO\">";
	$str .="</form>";
	return $str; 
}
?>