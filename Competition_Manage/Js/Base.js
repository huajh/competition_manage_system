/**
 * ���ܣ�ȡ�ö�����
 * �ú�������˵��document.getElementById(id)�ļ򻯵���
 */
function $()
{
    var elements = new Array();
    for (var i = 0; i < arguments.length; i++)
    {
        var element = arguments[i];
        if (typeof element == 'string')
        element = document.getElementById(element);
        if (arguments.length == 1)
        return element;
        elements.push(element);
    }
    return elements;
}
/**
 * Ϊ���ݾɰ汾����������� Array �� push ������
 */
if (!Array.prototype.push)
{
    Array.prototype.push = function()
    {
        var startLength = this.length;
        for (var i = 0; i < arguments.length; i++)
        this[startLength + i] = arguments[i];
        return this.length;
    }
}
/**
 * ����javascriptԭ��trim
 * ������ȥ��ǰ��Ŀո�
 */
String.prototype.trim = function()
{
    return this.replace(/(^\s*)|(\s*$)/g, "");
}
/**
 * ����javascriptԭ��len
 * ������ȡ���ַ����ĳ��ȣ�һ��˫�ֽ��ַ����ȼ�2��ASCII�ַ���1��
 */

String.prototype.len = function(){
	return this.replace(/[^\x00-\xff]/g,"aa").length;
}
