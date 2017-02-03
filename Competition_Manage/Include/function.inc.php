<?php
/**
 * 功能：解析Url地址，把Page参数去掉组合成一个地址
 * 返回：翻页地址
 */
function ParseUrl()
{
	$url = $_SERVER['REQUEST_URI'];						       //提取当前地址
	if(strpos($url, '?'))										//判断是否有携带参数
	{
		$file = substr($url, 0,strpos($url, '?'));						//取得文件地址
		$para = substr($url,strpos($url,'?')+1,strlen($url));			//取得参数字符串
		$array = explode('&',$para);							//分解参数
		for($i=0;$i<sizeof($array);$i++)							//循环组合参数
		{
			$tmp = array();
			$tmp = explode("=",$array[$i]);						//分解参数名和值
			if($tmp[0] != 'Page')								//判断参数是否为Page
			{											//不是则组合参数
				if($i != 0)									//判断是否为第一个参数,不是则加’&’
					$link .= "&";
				$link .= $array[$i];
			}
		}
		$link = $file . "?" . $link . "&";							//组合成翻页连接地址
	}else{
		$link = $url . "?";
	}
	return $link;
}
/**
 * 功能：输出翻页字符串
 * 参数：$pagecount 总页数,$curr_page 当前页码,$pagesize 每页文章数
 * 返回：翻页字符串
 */

function Page($pagecount,$curr_page,$pagesize)
{
	$url = ParseUrl();
	$prev = $curr_page - 1;
	$next = $curr_page + 1;
	$start = "<a href='" . $url . "Page=1'><font face='黑体'>首页</font></a>";
	$prev_link = ($prev_link >= 1) ? "<a href='" . $url . "Page=$prev'><font face='黑体'>上一页</font></a>" : "上一页";
	$next_link = ($next <= $pagecount) ? "<a href='" . $url . "Page=$next'><font face='黑体'>下一页</font></a>" : "下一页";
	$end = "<a href='" . $url ."Page=$pagecount'><font face='黑体'>尾页</font></a>";
	$str = "<form name='jump' method='get' action=''>";
	$str .= "当前第" . $curr_page . "页 共" . $pagecount . "页 每页" . $pagesize;
	$str .= " " . $start . " " . $prev_link . " " . $next_link . " " . $end;
	$str .= " " . $curr_page . "/" . $pagecount;
	$str .= " 转到<input name='Page' type='text' id='Page' size='5'>页"; 
	$str .= " <input type=\"submit\" name=\"Submit\" value=\"GO\">";
	$str .="</form>";
	return $str; 
}
?>