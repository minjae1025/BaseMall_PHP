var burger = document.querySelector('.menu-trigger');

burger.addEventListener('click', function (e) {
    e.preventDefault();
    burger.classList.toggle('active-1');
});

const slidewrap = document.querySelector(".slidewrap");
const slidescnt = document.querySelectorAll(".slide").length;
const slideContainer = document.getElementsByClassName("slides");
let currentSlide = 0;

function Createpagination() {
    //HTML Tag 생성
    slidewrap.innerHTML += `<div class="pagination"></div>`;
    const pagination = document.querySelector(".pagination");
    for (let i = 1; i < slidescnt; i++) {
        if (i === 1) { pagination.innerHTML += `<li class="act"><a>•</a></li>`; }
        pagination.innerHTML += `<li><a>•</a></li>`;
    }

    //CSS 생성
    const paginationStyle = `
                .pagination {
                    display : flex;
                    position : absolute;
                    left : 50%;
                    transform: translateX(-50%);
                    bottom : 0;
                }
                .pagination li{
                    font-size : 50px;
                    list-style: none;
                    color:  white;
                    opacity: 0.5;
                }
                .pagination .act{
                    opacity: 1;
                }
            `;
    AddStyle(paginationStyle);

    //페이지네이션 이벤트 생성
    const paginationlink = document.querySelectorAll(".pagination li a");
    paginationlink.forEach((link, index) => {
        link.addEventListener('click', (event) => {
            event.preventDefault(); // 기본 앵커 링크 동작을 막습니다.
            goToSlide(index);
        });
    });
}

Createpagination();