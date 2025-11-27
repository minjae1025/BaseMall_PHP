<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>베이스몰 - 장바구니</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/cart.css">
</head>

<body>
    <header>
        <div class="header-container">
            <div class="header-top">
                <div class="header-logo">
                    <a href="/BaseMall/" class="header-logo-a"><img src="../img/logo_1.png" alt="베이스몰 로고"
                            height="100px"></a>
                </div>
                <div class="header-user">
                    <?php if (!isset($_SESSION['user_id'])): ?>
                        <a href="./html/login.html" class="header-login">로그인</a>
                        <a href="./html/sign_up.html" class="header-signup">회원가입</a>
                    <?php else: ?>
                        <a href="./php/logout.php" class="header-logout">로그아웃</a>
                        <a href="./php/mypage.php" class="header-mypage">마이페이지</a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="header-bottom">
                <nav class="header-nav">
                    <a class="menu-trigger" href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <div class="nav-menu-box">
                        <ul class="nav-menu-ul">
                            <li class="nav-menu"><a href="/BaseMall/">NEW</a></li>
                            <li class="nav-menu"><a href="/BaseMall/">유니폼</a></li>
                            <li class="nav-menu"><a href="/BaseMall/">모자</a></li>
                            <li class="nav-menu"><a href="/BaseMall/">의류</a></li>
                            <li class="nav-menu"><a href="/BaseMall/">가방</a></li>
                            <li class="nav-menu"><a href="/BaseMall/">야구용품</a></li>
                            <li class="nav-menu"><a href="/BaseMall/">응원용품</a></li>
                            <li class="nav-menu"><a href="/BaseMall/">플레이어</a></li>
                            <li class="nav-menu"><a href="/BaseMall/">캐릭터상품</a></li>
                            <li class="nav-menu"><a href="/BaseMall/">잡화</a></li>
                            <li class="nav-menu"><a href="/BaseMall/">SALE</a></li>
                            <li class="nav-menu"><a href="/BaseMall/">골프용품</a></li>
                        </ul>
                    </div>
                    <div class="nav-user-box">
                        <div class="nav-search-btn">
                            <a href="/BaseMall/"><img src="../img/header/nav_search.svg" alt="" width="100%"></a>
                        </div>
                        <div class="nav-cart-btn">
                            <a href="/BaseMall/php/cart.php"><img src="../img/header/nav_cart.svg" alt="" width="100%"></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <div class="main-container">
            <p class="h2" style="text-align: center;">장바구니</p>
            <div style="min-height: 518px;">
                <div class="item">
                    <div class="item-img">
                        <img src="../img/product/product_1.jpg" alt="">
                    </div>
                    <div class="item-content">
                        <p class="item-name h5">삼성라이온드 SL 팔각 응원봉</p>
                        <p class="item-option">사이즈 : 100</p>
                        <p class="item-price ">₩10,000</p>
                        <div class="item-quantity">
                            <label for="quantity">수량:</label>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="99">
                        </div>
                    </div>
                    <div class="item-control">
                        <div>
                            <button class="btn btn-outline-danger">삭제</button>
                        </div>
                        <div>
                            <p class="item-total-price h5">총 ₩10,000</p>
                        </div>
                        <div>
                            <button class="btn btn-primary">주문하기</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <img src="../img/logo_1.png" alt="" height="100px">
            
        </div>
    </footer>

    <script src="../js/menu_trigger.js"></script>
    <script>
    </script>
</body>

</html>