<!-- 8T59qFRASAOBYkmh2ZIUmXz23If3oSEuxrU5E2OgWp2 -->

<?php

    $header = "iwarnu";
    $firstname = $_POST['location'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $road = $_POST['road'];
    $address = $_POST['address'];
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $Message = $_POST['Message'];

    $message = $hearder.
                "\n". "ที่ตั้ง: " . $location .
                "\n". "จังหวัด: " . $province .
                "\n". "อำเภอ: " . $district .
                "\n". "ถนน: " . $road .
                "\n". "ที่อยู่: " . $address .
                "\n". "ชื่อ: " . $name .
                "\n". "หมายเลขโทรศัพท์: " . $phone_number .
                "\n". "Message: " . $Message ;

    if (isset($_POST["submit"])) {
        if ( $location <> ""||
             $province <> ""||
             $district <> ""||
             $road <> ""||
             $address <> ""||
             $name <> ""||
             $phone_number <> ""||
             $Message <> "" ) {
            sendlinemesg();
            header('Conten-type: text/html; charset=utf8');
            $res = notify_massage($message);
            echo "<script>alert('คุณส่งข้อมูลแล้ว');</script>";
            header("location: indexli.php");
        }else{
            echo "<script>alert('กรุณากรอกข้อมูลให้ครบถ้วน');</script>";
            header("location: indexli.php");
        }
    }

    function sendlinemesg() {
        define('LINE_API', "https://notify-api.line.me/api/notify");
        define('LINE_TOKEN', "8T59qFRASAOBYkmh2ZIUmXz23If3oSEuxrU5E2OgWp2");

        function notify_massage($message) {
            $queryData = array('message' => $message);
            $queryData = http_build_query($queryData,'','&');
            $headerOption = array(
                'http' => array(
                    'method' => 'POST',
                    'header' => "Conten-Type: application/x-www-form-urlencoded\r\n"
                                ."Authorization: Bearer ".LINE_TOKEN."\r\n"
                                ."Content-Lengh: ".strlen($queryData)."\r\n",
                    'content' => $queryData
                )
            );
            $context = stream_context_create($hearderOptions);
            $result = file_get_contents(LINE_API, FALSE, $context);
            $res = json_decode($result);
            return $res;
        }

    }





?>