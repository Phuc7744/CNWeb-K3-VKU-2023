<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<?php 
    function pt_bac_2($a, $b, $c) {
        $delta = $b*$b - 4*$a*$c;
        $ketqua = "";
        if ($delta>0) {
            $sqrt_delta = sqrt($delta);
            $x1         = (-$b+$sqrt_delta)/2*$a;
            $x2         = (-$b-$sqrt_delta)/2*$a;
            $ketqua     = "x1 = ".$x1."; x2 = ".$x2;
            return $ketqua; 
        }
        else if ($delta==0) {
            $nghiem = -$b / 2*$a;
            $ketqua = "x1 = x2 = ".$nghiem;
            return $ketqua;
        } 
        else {
            $ketqua = "vo nghiem";
            return $ketqua;
        }
    }

    $ketqua = "";

    if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"]))
        $ketqua = pt_bac_2($_POST["a"],$_POST["b"],$_POST["c"]);
?>

<body>
    <form action="index.php" method="post">
        <table width="806" border="1">
            <tr>
                <td colspan="4" bgcolor="#336699"><strong>Giải phương trình bậc 2</strong></td>
            </tr>
            <tr>
                <td width="83">Phương trình </td>
                <td width="236">
                    <input name="a" type="text" />
                    X^2 +
                </td>
                <td width="218"><label for="textfield3"></label>
                    <input type="text" name="b" id="textfield3" />
                    X+
                </td>
                <td width="241"><label for="textfield"></label>
                    <input type="text" name="c" id="textfield" />
                    =0
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    Nghiệm
                    <label for="textfield2"></label>
                    <input name="textfield" type="text" id="textfield2" width="400" value="<?php echo $ketqua ?>" />
            </tr>Trang 21
            <tr>
                <td colspan="4" align="center" valign="middle"><input type="submit" name="chao" id="chao"
                        value="Xuất" /></td>
            </tr>
        </table>
    </form>
</body>

</html