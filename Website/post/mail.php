<!DOCTYPE html>
<html>
<head>
    <meta charset="GBK">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tuab API | Email Notice</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
    echo "Console log list ---><br>";
    $nd = date("Ymd",strtotime("+1 day"));
    $to = "chenjunyu.qaz@qq.com";
    $title = "Tuba_API_AI_Service";
    $content = "Please_you_upload_to".$nd.".jpg";
    $url = "http://api.guaqb.cn/music/yxkey.php?key=132ecf32a7381d777ee6&my=0cba23cef567a3c17363&email=".$to."&bt=".$title."&nr=".$content;
    /*
    if($to == "")
    {
        echo "Error 601";
    }
    else if($title == "")
    {
        echo "Error 602";
    }
    else if($content == "")
    {
        echo "Error 603";
    }
    else
    {}
    */
    if(date(Hi) > "2200")
    {
        echo "Now time ".date("Y/m/d/ H:i --->")."";
        echo "<br>Search to file is \"".$nd.".jpg\" --->";
        $ch = curl_init();
	    curl_setopt($ch,CURLOPT_URL,"http://api.echocode.club/API/Tuba/files/".$nd.".jpg");
	    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,10);
        $html = curl_exec($ch);
        if($html == "404")
        {
            //$ch = curl_init();
	        curl_setopt($ch,CURLOPT_URL,$url);
	        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
            curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,10);
            echo "<br>Auth error ---><br>Executing command --->";
            $html = curl_exec($ch);
            if(substr_count($html,"�ɹ�") >= "1")
            {
                echo "<br>Command executed";
            }
            else
            {
                echo "<br>Error 604";
            }
        }
        else
        {
            echo "<br>Auth";
        }
    }
    else
    {
        echo "<br>Error 605";
    }
    //echo "<br>��ǰGet�ύ�ӿ����ݵ�ַ ".$url;
    //http://api.echocode.club/test.php?to=
    //�ո� = %20
    //�س� = %0D%0A
    //$to = $_GET["to"];
    //601-603�������� 604����ִ�д��� 605ʱ�����
    ?>
</body>
</html>