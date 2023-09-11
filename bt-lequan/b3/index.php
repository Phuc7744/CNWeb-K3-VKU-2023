<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Xuất số thành chữ</title>
</head>

<?php 
    $inp_num = filter_input(INPUT_POST, 'so');
    $out_str = "";
    if($inp_num) {
        switch($inp_num) {
            case 0:
                $out_str = "khong";
                break;
            case 1:
                $out_str = "mot";
                break;
            case 2:
                $out_str = "hai";
                break;
            case 3:
                $out_str = "ba";
                break;
            case 4:
                $out_str = "bon";
                break;
            case 5:
                $out_str = "nam";
                break;
            case 6:
                $out_str = "sau";
                break;
            case 7:
                $out_str = "bay";
                break;                  
            case 8:
                $out_str = "tam";
                break;   
            case 9:
                $out_str = "chin";
                break;   
            default:
                $out_str = "gia tri khong dung";
                break;
        }
    }
?>

<body>
    <form action="index.php" method="POST">
        <table width="519" border="1">
            <tr>
                <td colspan="3">Đọc số</td>
            </tr>
            <tr>
                <td>Nhập số (0-9)</td>
                <td width="69" rowspan="2"><input type="submit" name="button" id="button" value="Submit" /></td>
                <td> Bằng chữ</td>
            </tr>
            <tr>
                <td width="177">
                    <p>
                        <label for="textfield"></label>
                        <input type="text" name="so" id="inp-num" />
                    </p>
                </td>
                <td width="232"><label for="textfield2"></label>
                    <input type="text" name="chu" id="outp-str" value="<?php echo $out_str ?>" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>