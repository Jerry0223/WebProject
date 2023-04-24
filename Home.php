<?php
include("mysqlCon.php");
$user_sql = "SELECT * FROM `一番賞` WHERE 1";

$user_result = mysqli_query($conn, $user_sql);
$user_resultCheck = mysqli_query($conn, $user_sql);

if (is_null(mysqli_fetch_row($user_resultCheck))) {
    $user = 0;
} else {
    while ($row = mysqli_fetch_row($user_result)) {
        $user[] = $row;
    }
}
?>
<!DOCTYPE html>

<html>
<title>一番賞抽獎平台</title>

<head>
    <link href="Home.css" type="text/css" rel="stylesheet" />
    <h1>一番賞抽獎平台</h1>
    <button type="button"><a href="index.php">登入</a></button>

</head>

<body>

    <div class="flex-container">

        <?php
        for ($i = 0; $i < count($user); $i++) {
            ?>
            <div class="img-with-text">
                <a href="https://www.youtube.com/<?php echo "$i" ?>">
                    <img src="<?php echo "{$user[$i][5]}"; ?>"></a>
                <p>
                    <?php echo "{$user[$i][0]}"; ?>
                </p>

            </div>
            <?php
        }
        ?>
    </div>
</body>

</html>