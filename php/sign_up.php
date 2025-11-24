<?php
// sign_up.php
include 'db_conn.php';
$user_id = $_POST['user_id'];
$user_passwd = $_POST['user_passwd'];
$user_passwd_check = $_POST['user_passwd_check'];
$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];

if ($user_passwd !== $user_passwd_check) {
    echo "<script>alert('비밀번호가 일치하지 않습니다.'); history.back();</script>";
    exit;
}

if (strlen(trim($user_id)) > 30) {
    echo "<script>alert('아이디는 최대 30자입니다.'); history.back();</script>";
    exit;
}

$sql = "SELECT * FROM user WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('존재하는 아이디입니다.'); history.back();</script>";
} else {
    $user_passwd = password_hash($user_passwd, PASSWORD_BCRYPT);
    $user_phone = $_POST['user_phone'] ?? null;
    $user_address = $_POST['user_address'] ?? null;
    $insert_sql = "INSERT INTO user VALUES(null, '$user_id', '$user_passwd', '$user_name', '$user_email', '$user_phone', '$user_address')";
    $result = mysqli_query($conn, $insert_sql);
    if ($result) {
        echo "<script>alert('회원가입이 완료되었습니다.'); location.href='../index.html';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>