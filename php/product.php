<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>베이스몰 - 상세페이지</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/product.css">
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
                            <a href="/BaseMall/php/cart.php"><img src="../img/header/nav_cart.svg" alt=""
                                    width="100%"></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <div class="product-container">
            <div class="product-main">
                <div class="product-image">
                    <img src="../img/product/product_1.jpg" alt="상품 이미지" width="100%">
                </div>
                <div class="product-content">
                    <div class="product-details">
                        <p class="product-title h2">삼성라이온드 SL 팔각 응원봉</p>
                        <p class="product-price h5">₩10,000</p>
                        <p class="product-delivery">배송비: 무료</p>
                        <p class="product-description">본 상품은 학습을 위해 만들어진 모의 상품입니다.</p>
                    </div>
                    <div class="product-buy">
                        <div class="product-quantity">
                            <label for="quantity" class="form-label">수량:</label>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" class="form-control"
                                style="width: 80px; display: inline-block;">
                        </div>
                        <div class="product-buttons">
                            <button class="btn btn-outline-primary">장바구니에 추가</button>
                            <button class="btn btn-primary">구매하기</button>   
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