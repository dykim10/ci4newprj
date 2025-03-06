<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>로그인</title>
</head>
<body>
<h2>로그인</h2>

<?php if (session()->getFlashdata('error')): ?>
    <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
<?php endif; ?>

<form action="<?= site_url('/login') ?>" method="post">
    <label>userId:</label>
    <input type="text" name="userId" required>

    <label>비밀번호:</label>
    <input type="password" name="userPassword" required>

    <button type="submit">로그인</button>
</form>
</body>
</html>
