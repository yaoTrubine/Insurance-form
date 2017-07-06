<?php

$radio = $_POST["raido"];
$checkbox = $_POST["checkbox"];
// print_r($radio);
// print_r($checkbox);
$url1 = "upload1.html";
$url2 = "upload2.html";
$url3 = "upload3.html";
$url4 = "upload4.html";

$result = null;
for ($i=0; $i < count($radio); $i++) { 
        $result = $radio[$i];
    for ($i=0; $i < count($checkbox); $i++) { 
        $result .= $checkbox[$i];
    }
    switch ($result) {
        case "意外门诊医疗":
            header("Location: $url1");
            $result = null;
            break;
        case "意外住院医疗住院津贴":
            header("Location: $url2");
            $result = null;
            break;
        case "疾病住院医疗住院津贴":
            header("Location: $url3");
            $result = null;
            break;
        case "意外门诊医疗住院医疗住院津贴":
            header("Location: $url4");
            $result = null;
            break;
        default:
            break;
    }
}

echo $result;

?>