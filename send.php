<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone'])&&$_POST['phone']!="")){ //�������� ����������� �� ���� ���� name � �� ������ �� ���
        $to = 'yanafomichevaa@gmail.com'; //����� ����������, ����� ������� ����� ������� ������� ������ �������
        $subject = '�������� ������'; //��������� ���������
        $message = ' ���: '.$_POST['name'].'
                    �������: '.$_POST['phone'].''; //����� ������ ��������� ����� ������������ HTML ����
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //��������� ������
        $headers .= "From: ����������� <yanafomichevaa@gmail.com>\r\n"; //������������ � ����� �����������
        mail($to, $subject, $message, $headers); //�������� ������ � ������� ������� mail
}
?>