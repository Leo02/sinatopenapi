<?php
/**
 * ����΢������ƽ̨������ʹ��ʾ��
 * ������PHP5�����ϰ汾����װcurl��չ��
 * ʹ��HTTP��ͨ��Ȩ(Basic Authentication)��ʽ
 * @copyright http://lvyaozu.sinaapp.com/
 */
header("Content-type:text/html;charset=utf-8");
require('SinaOpenApi.php');
$openapi = new SinaOpenApi('App Key');
$openapi->setUser('΢����¼�˻�', '����');

//�ϴ�ͼƬ����
$upload_params = array(
	'status'=>'This is a upload file',
	'pic'=>'E:\Images\animal\01.jpg',
	'mime_type'=>'image/jpg',
	'filename'=>'01.jpg',
);
//����ƽ̨�ӿ�
$urls = array(
//url:�����ַ��params:�������(���սӿ�˵��)��method:����ʽ��Ŀǰֻ֧��GET��POST����
//	array('url'=>'statuses/public_timeline','params'=>array('page'=>1, 'count'=>5), 'method'=>'GET'),
//	array('url'=>'statuses/friends_timeline','params'=>array(), 'method'=>'GET'),
//	array('url'=>'statuses/user_timeline','params'=>array(), 'method'=>'GET'),
//	array('url'=>'statuses/mentions','params'=>array(), 'method'=>'GET'),
//	array('url'=>'statuses/comments_timeline','params'=>array(), 'method'=>'GET'),
//	array('url'=>'statuses/comments_by_me','params'=>array(), 'method'=>'GET'),
//	array('url'=>'statuses/comments','params'=>array(), 'method'=>'GET'),
//	array('url'=>'statuses/counts','params'=>array(), 'method'=>'GET'),
//	array('url'=>'statuses/unread','params'=>array(), 'method'=>'GET'),
//	array('url'=>'statuses/show/123456','params'=>array('id'=>'123456'), 'method'=>'GET'),
//	array('url'=>'statuses/update','params'=>array('status'=>'This is a test blog!'), 'method'=>'POST'),
//	array('url'=>'statuses/upload','params'=>$upload_params, 'method'=>'POST'),
//	array('url'=>'statuses/destroy/123456','params'=>array('id'=>123456), 'method'=>'POST'),
//	array('url'=>'statuses/repost','params'=>array('id'=>123456, 'status'=>'test repost'), 'method'=>'POST'),
//	array('url'=>'statuses/comment','params'=>array('id'=>123456, 'comment'=>'test comment'), 'method'=>'POST'),
//	array('url'=>'direct_messages','params'=>array('page'=>1, 'count'=>5), 'method'=>'GET'),
//.....
);

foreach ($urls as $url) {
	$content = $openapi->request($url['url'], $url['params'], $url['method']);
	var_dump($content);
}

