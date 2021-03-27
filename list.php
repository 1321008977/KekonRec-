
<body>

<?php
$dir="/mnt/file/www/api.chinjufu.club/file/bilibili_Kekon_433494"; //指定的路径
$sitepath = 'https://api.chinjufu.club/file/bilibili_Kekon_433494/';

//遍历文件夹下所有文件
if (false != ($handle = opendir ( $dir ))) {
    echo " 录播：<BR/>录播顺序由时间排序</BR>";
    echo " TODO: </BR>1.关键字搜索</BR>2.老录播转移</BR>3.优化UI</BR>";
    echo " 已做: 在线播放没法获取视频长度的问题解决了</BR>";
    echo "不管是谁在dos我，不得不说你有点";
    echo "<h1 style='color:red'>菜</h1>";
    echo "<img src='https://api.chinjufu.club/picture/low.jpg'/></BR>";
    $i = 0;
    $idnum = 0;
    while (false !== ($file = readdir($handle))) {
        
        if ($file != "." && $file != ".." && !is_dir($dir.'/'.$file)) {
        	
        $path = $dir.'/'.$file;
        //新建数组赋值文件name,time,size
        $fileinfo[$idnum]['name'] = $file;
        $fileinfo[$idnum]['time'] = date("Y-m-d H:i:s",filemtime($path));
        $fileinfo[$idnum]['size'] = round((filesize($path)/1024/1024),2);
        $fileinfo[$idnum]['url'] = $sitepath . $file;
        $fileinfo[$idnum]['playerurl'] = 'https://api.chinjufu.club/player.php?pathurl='.$sitepath.$file;
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
			echo '<a href="' . $fileinfo[$k]['url'] . '"id="'.$k.'">' . $fileinfo[$k]['name']  . '</a>';
			echo '大小 '.$fileinfo[$k]["size"].'MiB   ';
			echo '修改时间 '.$fileinfo[$k]["time"];
			echo '<a href="' . $fileinfo[$k]['playerurl'] . '"><button>在线播放</button></a> </br>';
	}
}
?>
	
<?php
$dir="/mnt/file/www/api.chinjufu.club/file2/bilibili_Kekon_433494"; //指定的路径
$sitepath = 'https://api.chinjufu.club/file2/bilibili_Kekon_433494/';

//遍历文件夹下所有文件
if (false != ($handle = opendir ( $dir ))) {
    echo " 冷数据</BR>";
    $i = 0;
    $idnum = 0;
    while (false !== ($file = readdir($handle))) {
        
        if ($file != "." && $file != ".." && !is_dir($dir.'/'.$file)) {
        	
        $path = $dir.'/'.$file;
        //新建数组赋值文件name,time,size
        $fileinfo[$idnum]['name'] = $file;
        $fileinfo[$idnum]['time'] = date("Y-m-d H:i:s",filemtime($path));
        $fileinfo[$idnum]['size'] = round((filesize($path)/1024/1024),2);
        $fileinfo[$idnum]['url'] = $sitepath . $file;
        $fileinfo[$idnum]['playerurl'] = 'https://api.chinjufu.club/player.php?pathurl='.$sitepath.$file;
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
			echo '<a href="' . $fileinfo[$k]['url'] . '"id="'.$k.'">' . $fileinfo[$k]['name']  . '</a>';
			echo '大小 '.$fileinfo[$k]["size"].'MiB   ';
			echo '修改时间 '.$fileinfo[$k]["time"];
			echo '<a href="' . $fileinfo[$k]['playerurl'] . '"><button>在线播放</button></a> </br>';
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