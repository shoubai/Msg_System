<?php require_once('./config.php');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>退出逻辑实现</title>
</head>

<body>
	<?php
		$id = intval($_POST['id']);
		$comment = $_POST['comment'];
		if (!$comment){
            exit('<script>alert("请输入留言");history.back();</script>');
        }
        $sql = "update guestbook set comment= '".$comment."' where id=".$id." and uid = ".$_SESSION['uid'];
        $query = $db->query($sql);
        if($query){
            exit('<script>alert("编辑成功");window.location.href="guestbook.php";</script>');
        }else{
            exit('<script>alert("编辑失败");history.back();</script>');
        }
	?>
</body>
</html>