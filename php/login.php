<?php
include 'db_conn.php';
$user_id = $_POST['user_id'];
$user_passwd = $_POST['user_passwd'];

$sql = "SELECT * FROM user WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($user_passwd, $row['user_passwd'])) {
        session_start();
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['user_email'] = $row['user_email'];
        $_SESSION['user_phone'] = $row['user_phone'];
        $_SESSION['user_address'] = $row['user_address'];
        echo "<script>alert('로그인 성공'); location.href='../';</script>";
    } else {
        echo "<script>alert('비밀번호가 틀렸습니다.'); history.back();</script>";
    }
} else {
    echo "<script>alert('존재하지 않는 아이디입니다.'); history.back();</script>";
}
?>