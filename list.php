
<body>

<?php
$dir="/mnt/file/www/api.chinjufu.club/file/bilibili_Kekon_433494"; //指定的路径
$sitepath = 'https://api.chinjufu.club/file/bilibili_Kekon_433494/';
//遍历文件夹下所有文件
if (false != ($handle = opendir ( $dir ))) {
    echo " 录播：<BR/>暂时不考虑美化界面<BR/>可能会抽时间加入筛选，排序功能<BR/>";
    $i = 0;
    $idnum = 0;
    while (false !== ($file = readdir($handle))) {
        
        if ($file != "." && $file != ".." && !is_dir($dir.'/'.$file)) {
        	
        $path = $dir.'/'.$file;
        //新建数组赋值文件name,time,size
        $fileinfo[$idnum]['name'] = $file;
        $fileinfo[$idnum]['time'] = date("Y-m-d H:i:s",filemtime($path));
        $fileinfo[$idnum]['size'] = round((filesize($path)/1024),2);
        $filesize =  round((filesize($path)/1024),2);//获取文件大小              
        $filename = $path;//获取文件名称                                   
        $filetime = date("Y-m-d H:i:s",filemtime($path));//获取文件最近修改日期
		       
        $return =  $url.'/'.$file;
        
        
            
        }
        $idnum = $idnum + 1;
    }
    //关闭句柄
    closedir($handle);
    
    foreach($fileinfo as $k=>$v){
        $size[$k] = $v['size'];
        $time[$k] = $v['time'];
        $name[$k] = $v['name'];
    }
    
    array_multisort($time,SORT_DESC,SORT_STRING, $fileinfo);//按时间排序
    //array_multisort($name,SORT_DESC,SORT_STRING, $fileinfo);//按名字排序
    //array_multisort($size,SORT_DESC,SORT_NUMERIC, $fileinfo);//按大小排序
	foreach($fileinfo as $k=>$v){ 
		foreach($fileinfo as $key=>$value){ 
			echo '<a href="' . $sitepath . $file . '"id="'.$idnum.'">'.$file.'    '.'大小'.$fileinfo[$k]['size'].'  MiB':</a><br/>';
		}
	}
}
?>
<script>

        function updatea(){
           document.getElementById('1').href="https://www.baidu.com";
           document.getElementById('1').="";
            };

</script>
</body>