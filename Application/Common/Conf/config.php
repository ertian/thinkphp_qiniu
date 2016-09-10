<?php
return array(
	//'配置项'=>'配置值'
	'UPLOAD_SITEIMG_QINIU' => array ( 
        'maxSize' => 5 * 1024 * 1024,
        'rootPath' => './Uploads/',
        'saveName' => array ('uniqid', ''),
        'driver' => 'Qiniu',
        'driverConfig' => array (
            'secretKey' => 'your qiniu sk'  //七牛sk
            'accessKey' => 'your qiniu ak'  //七牛ak
            'domain' => 'your qiniu domain', //域名
            'bucket' => 'your qiniu bucket', //空间名称
        )
    )
);