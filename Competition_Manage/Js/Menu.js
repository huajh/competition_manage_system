/**
 * ���ܣ�ָ���˵�����
 * �������˵�ID
 * ���أ�FALSE
 */
function Tree(ID){
	obj=document.getElementById("cate_"+ID);			//��ȡ�Ӳ˵�����	
	img=document.getElementById("img_"+ID);			//��ȡ�˵�����ͼƬ����
	if(obj.style.display=="none"){						//�ж��Ӳ˵��Ƿ�������
		obj.style.display="";							//������չ
		img_re=new RegExp("_open\\.gif$");				//����������ʽ����ͼƬ�滻
		img.src=img.src.replace(img_re,'_fold.gif');		//�滻��ʾͼƬ
	}else{
		obj.style.display="none";						//��������
		img_re=new RegExp("_fold\\.gif$");				//����������ʽ����ͼƬ�滻
		img.src=img.src.replace(img_re,'_open.gif');		//�滻��ʾͼƬ
	}
	return false;
}
/**
 * ���ܣ���չ���в˵�
 * ������count �˵���
 * ���أ�FALSE
 */
function Clear(count){
	var i;
	for(i=0;i<count;i++){								//ѭ�����в˵�
		obj=document.getElementById("cate_"+"a"+i);		//��ȡ�Ӳ˵�����
		img=document.getElementById("img_"+"a"+i);		//��ȡ�˵�����ͼƬ����
		if(obj && obj.style.display=="none"){				//�ж��Ӳ˵��Ƿ�������
			obj.style.display="";						//������չ
			img_re=new RegExp("_open\\.gif$");			//����������ʽ����ͼƬ�滻
			img.src=img.src.replace(img_re,'_fold.gif');	//�滻��ʾͼƬ
		}
	}
	return false;
}
/**
 * ���ܣ��������в˵�
 * ������count �˵���
 * ���أ�FALSE
 */
function SetAdminDeploy(count){
	var i;
	for(i=0;i<count;i++){								//ѭ�����в˵�
		obj=document.getElementById("cate_"+"a"+i);		//��ȡ�Ӳ˵�����
		img=document.getElementById("img_"+"a"+i);		//��ȡ�˵�����ͼƬ����
		if(obj && obj.style.display==""){					//�ж��Ӳ˵��Ƿ�����չ
			obj.style.display="none";					//��������
			img_re=new RegExp("_fold\\.gif$");			//����������ʽ����ͼƬ�滻
			img.src=img.src.replace(img_re,'_open.gif');	//�滻��ʾͼƬ
		}
	}
	return false;
}
