<!DOCTYPE html>
<html lang="zh-CN">
<!-- http://localhost:8080/page3/ -->
<head>
	<title>php sql测试</title>
    <script type="text/javascript" src="jquery-3.6.1.min.js"></script>
</head>
<body>
	<h2>TOP3 SIMILAR DESCRIPTION</h2>
    <?php
    
    function add($input){    
        // 根据ip获得sql的连接
        $servername = "localhost";
        $username = "root";
        $password = "";
        $con = new mysqli($servername, $username, $password);
        if ($con->connect_error) {
            //echo "连接失败: " . $con->connect_error . "<br>";
        } else {
           // echo "连接成功<br>";
        }
        //创建数据库 db1
        $sql = "CREATE DATABASE db1";
        if($con->query($sql) == 1) {
            //echo "数据库 db1 创建成功！<br>";
        } else {
            //echo "数据库 db1 创建失败！<br>";
        }
        // $con->close();

        // if (!($con instanceof mysqli_con)) //这里没改，维持原状
        // return $con;


        // 此时需要连接到数据库db1下，第四个参数是数据库名
        $dbname = "db1";
        $con = new mysqli($servername, $username, $password, $dbname);
        // 创建数据表 cve2，一定要指定一个 primary key
        $sql = "CREATE TABLE cve2 (
            CVE VARCHAR(32) PRIMARY KEY,
            Description TEXT(40000)
        )";
        // if ($con->query($sql) == 1) {
        //     echo "数据表 cve2 创建成功！<br>";
        // } else {
        //     echo "数据表 cve2 创建失败！<br>";
        // }

        // 因为刚刚已经连接到db1下，我们仍可以复用这个con对象，这里添加数据字段
        $sql = "INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-12771', 'Adobe Acrobat and Reader 2018.011.20040 and earlier, 2017.011.30080 and earlier, and 2015.006.30418 and earlier versions have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user.')";
       
        $sql = $con -> query("insert into cve2  values('CVE-2018-12771', 'Adobe Acrobat and Reader 2018.011.20040 and earlier, 2017.011.30080 and earlier, and 2015.006.30418 and earlier versions have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user.')");
        $sql = $con -> query("INSERT INTO cve2  VALUES ('CVE-2018-12773', 'Adobe Acrobat and Reader 2018.011.20040 and earlier, 2017.011.30080 and earlier, and 2015.006.30419 and earlier versions have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user.')");
        $sql = $con -> query("INSERT INTO cve2  VALUES ('CVE-2018-12774', 'Adobe Acrobat and Reader 2018.011.20040 and earlier, 2017.011.30080 and earlier, and 2015.006.30420 and earlier versions have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user.')");
        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-12777', 'Adobe Acrobat and Reader 2018.011.20040 and earlier, 2017.011.30080 and earlier, and 2015.006.30421 and earlier versions have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user.')");
        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-12787', 'Adobe Acrobat and Reader 2018.011.20040 and earlier, 2017.011.30080 and earlier, and 2015.006.30422 and earlier versions have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user.')");
        
        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-12792', 'Adobe Acrobat and Reader 2018.011.20040 and earlier, 2017.011.30080 and earlier, and 2015.006.30423 and earlier versions have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user.')");
        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-12793', 'Adobe Acrobat and Reader 2018.011.20040 and earlier, 2017.011.30080 and earlier, and 2015.006.30424 and earlier versions have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user.')");
        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-12797', 'Adobe Acrobat and Reader 2018.011.20040 and earlier, 2017.011.30080 and earlier, and 2015.006.30425 and earlier versions have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user.')");
        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-12798', 'Adobe Acrobat and Reader 2018.011.20040 and earlier, 2017.011.30080 and earlier, and 2015.006.30426 and earlier versions have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user.')");
        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-12816', 'Adobe Acrobat and Reader 2018.011.20040 and earlier, 2017.011.30080 and earlier, and 2015.006.30427 and earlier versions have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user.')");

        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-5010', 'Adobe Acrobat and Reader 2018.011.20040 and earlier, 2017.011.30080 and earlier, and 2015.006.30428 and earlier versions have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user.')");
        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-5012', 'Adobe Acrobat and Reader 2018.011.20040 and earlier, 2017.011.30080 and earlier, and 2015.006.30429 and earlier versions have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user.')");
        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-5066', 'Adobe Acrobat and Reader 2018.011.20040 and earlier, 2017.011.30080 and earlier, and 2015.006.30430 and earlier versions have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user.')");
        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-12757', 'Adobe Acrobat and Reader 2018.011.20040 and earlier, 2017.011.30080 and earlier, and 2015.006.30431 and earlier versions have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user.')");
        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-4933', 'Adobe Flash Player versions 29.0.0.113 and earlier have an exploitable Use-After-Free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user. ')");

        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-4953', 'Adobe Acrobat and Reader versions 2018.011.20038 and earlier, 2017.011.30079 and earlier, and 2015.006.30417 and earlier have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user.')");
        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-4955', 'Adobe Acrobat and Reader versions 2018.011.20038 and earlier, 2017.011.30079 and earlier, and 2015.006.30418 and earlier have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user. ')");
        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-4959', 'Adobe Acrobat and Reader versions 2018.011.20038 and earlier, 2017.011.30079 and earlier, and 2015.006.30419 and earlier have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user. ')");
        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-4960', 'Adobe Acrobat and Reader versions 2018.011.20038 and earlier, 2017.011.30079 and earlier, and 2015.006.30420 and earlier have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user. ')");
        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-4962', 'Adobe Acrobat and Reader versions 2018.011.20038 and earlier, 2017.011.30079 and earlier, and 2015.006.30421 and earlier have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user. ')");

        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-4972', 'Adobe Acrobat and Reader versions 2018.011.20038 and earlier, 2017.011.30079 and earlier, and 2015.006.30422 and earlier have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user. ')");
        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-4975', 'Adobe Acrobat and Reader versions 2018.011.20038 and earlier, 2017.011.30079 and earlier, and 2015.006.30423 and earlier have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user. ')");
        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-4978', 'Adobe Acrobat and Reader versions 2018.011.20038 and earlier, 2017.011.30079 and earlier, and 2015.006.30424 and earlier have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user. ')");
        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-4981', 'Adobe Acrobat and Reader versions 2018.011.20038 and earlier, 2017.011.30079 and earlier, and 2015.006.30425 and earlier have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user. ')");
        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-4984', 'Adobe Acrobat and Reader versions 2018.011.20038 and earlier, 2017.011.30079 and earlier, and 2015.006.30426 and earlier have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user. ')");

        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-4989', 'Adobe Acrobat and Reader versions 2018.011.20038 and earlier, 2017.011.30079 and earlier, and 2015.006.30427 and earlier have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user. ')");
        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-4990', 'Adobe Acrobat and Reader versions 2018.011.20038 and earlier, 2017.011.30079 and earlier, and 2015.006.30428 and earlier have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user. ')");
        $sql = $con -> query("INSERT INTO cve2 (CVE, Description) VALUES ('CVE-2018-4997', 'Adobe Acrobat and Reader versions 2018.011.20038 and earlier, 2017.011.30079 and earlier, and 2015.006.30429 and earlier have a Use-after-free vulnerability. Successful exploitation could lead to arbitrary code execution in the context of the current user. ')");


        // if($con->query($sql) == 1) {
        //     echo "数据插入成功！<br>";
        // } else {
        //     echo "插入失败！";
        // }
        
        $sql = "SELECT CVE, Description FROM cve2";
         $result = $con->query($sql);
        //  $listAnswers=new inputay();
        
        
        if ($result->num_rows > 0) {
            // 输出数据
            while($row = $result->fetch_assoc()) {
                //echo "CVE: " . $row["CVE"];
                //echo "CVE: " . $row["CVE"]. " Description: " . $row["Description"]."<br>";
                $cveid[]=$row["CVE"];
                $description[]=$row["Description"];

                //echo var_dump($row["CVE"]);
                // echo $row;
    
            }
        } else {
            echo "0 结果";
        }
        //echo var_dump($input);
        $con->close(); 

        
   

   

    //var_dump($description);

        

        
   

    
     
    class LCS {
      var $str1;
      var $str2;
      var $c = array();
      /*返回串一和串二的最长公共子序列
    */
      function getLCS($str1, $str2, $len1 = 0, $len2 = 0) {
        $this->str1 = $str1;
        $this->str2 = $str2;
        if ($len1 == 0) $len1 = strlen($str1);
        if ($len2 == 0) $len2 = strlen($str2);
        $this->initC($len1, $len2);
        return $this->printLCS($this->c, $len1 - 1, $len2 - 1);
      }
      /*返回两个串的相似度
    */
      function getSimilar($str1, $str2) {
        $len1 = strlen($str1);
        $len2 = strlen($str2);
        $len = strlen($this->getLCS($str1, $str2, $len1, $len2));
        return $len * 2 / ($len1 + $len2);
      }
      function initC($len1, $len2) {
        for ($i = 0; $i < $len1; $i++) $this->c[$i][0] = 0;
        for ($j = 0; $j < $len2; $j++) $this->c[0][$j] = 0;
        for ($i = 1; $i < $len1; $i++) {
          for ($j = 1; $j < $len2; $j++) {
            if ($this->str1[$i] == $this->str2[$j]) {
              $this->c[$i][$j] = $this->c[$i - 1][$j - 1] + 1;
            } else if ($this->c[$i - 1][$j] >= $this->c[$i][$j - 1]) {
              $this->c[$i][$j] = $this->c[$i - 1][$j];
            } else {
              $this->c[$i][$j] = $this->c[$i][$j - 1];
            }
          }
        }
      }
      function printLCS($c, $i, $j) {
        if ($i == 0 || $j == 0) {
          if ($this->str1[$i] == $this->str2[$j]) return $this->str2[$j];
          else return "";
        }
        if ($this->str1[$i] == $this->str2[$j]) {
          return $this->printLCS($this->c, $i - 1, $j - 1).$this->str2[$j];
        } else if ($this->c[$i - 1][$j] >= $this->c[$i][$j - 1]) {
          return $this->printLCS($this->c, $i - 1, $j);
        } else {
          return $this->printLCS($this->c, $i, $j - 1);
        }
      }
    } 
     
    $lcs = new LCS();
    //返回最长公共子序列
    // $lcs->getLCS("hello word","hello china");
    //返回相似度
    // echo $lcs->getSimilar();
    
    //$input="Adobe Acrobat and Reader 2018.011.20040";
    $listAnswers=$description;
    // $i=0;
    //echo sizeof($listAnswers)."<br>";
    $similar=[];
    $index=[];
    $m=[];
    
    //var_dump($similar);
    // echo $input;
    // echo "<br/> ";
    // echo $listAnswers[$i=0];
    // echo "<br/> ";
    // echo $lcs->getSimilar($input,$listAnswers[$i=1]);
    // echo "<br/> ";
    // echo sizeof($listAnswers);
    // echo "<br/> ";
    
    //var_dump($lcs);
    //for ($i=0;$i<sizeof($listAnswers);$i++){
    for ($i=0;$i<4;$i++){
        //var_dump($listAnswers[$i]);
        $lcs = new LCS();
        // echo "<br/>i是这么多: ".$i;
        // echo "<br/> 这个是similar:";
        // echo $lcs->getSimilar($input,$listAnswers[$i]);
        //var_dump($lcs->getSimilar($input,$listAnswers[$i]));
        
        // echo "<br/> 这个是m:";
        // var_dump($m);
        // echo "<br/>";
        // echo "<br/> 这个是similar:";
        array_push($m,$lcs->getSimilar($input,$listAnswers[$i]));
        //var_dump($m);
        echo "<br/>";
        if (sizeof($similar)<4){
            array_push($similar,$lcs->getSimilar($input,$listAnswers[$i]));
            //var_dump($similar);
            //echo "这个是原始位置的index：<br/>";
            //var_dump($similar);
            //echo "<br/>";
            arsort($similar,1);
            // echo "这个是排号位置的index：<br/>";
            // foreach($similar as $x=>$x_value)
            // {
            //     echo "Key=" . $x . ", Value=" . $x_value;
            //     echo "<br>";
            // }
    
    
    
    
        }else {
            array_push($similar,$lcs->getSimilar($input,$listAnswers[$i]));
            arsort($similar,1); 
            array_splice($similar,3,1,"");
            echo "这个是排号位置的index：";
            var_dump($similar);
        }
    
    
    }   
    // rsort(array,1);    
    // $index=array_search($small,$a);
    // echo $index;
    //listCount.splice(index,1)
    // array_splice($listCount,$index,1);
    // list.splice(index,1)
    // array_splice($list,$index,1); 
    
    $b=array_keys($similar);
    //echo "这个是index：";
    //var_dump($b);
    echo "<br/>THE MOST SIMILAR：<br/>";
    echo $listAnswers[$b[0]];
    echo "<br/>THE SECOND：<br/>";
    echo $listAnswers[$b[1]];
    echo "<br/>THE THIRD：<br/>";
    echo $listAnswers[$b[2]];
    //echo $listAnswers[$b[0]];
    // 
    //$con->close(); 
   
}   
    ?>



</body>
</html>