<?php

ini_set("display_errors", 0);
session_start();


if(isset($_SESSION['ind1'])){
echo '<script language="javascript">alert("Pichon");
</script>';

}



if(isset($_SESSION['ind2'])){
echo '<script language="javascript">alert("cod");
</script>';

}

echo "<script>setTimeout('document.location.reload()',2000); </script>";
unset($_SESSION['ind1']);
unset($_SESSION['ind2']);
?>
