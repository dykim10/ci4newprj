<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>대시보드</title>
</head>
<body>
<h2>대시보드</h2>
<p>환영합니다, <?= session()->get('username') ?>님!</p>
<a href="<?= site_url('/logout') ?>">로그아웃</a>
</body>
</html>
