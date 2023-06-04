/* Переопределение чистых стилей */
body {
	margin: 0;
	padding: 0;
	background-color: #ffffff;
}
u { display: inline; }
input[type="button"] {
	border: none;
	outline: none;
	background: none;
	cursor: pointer;
}
img {
	 pointer-events: none;
	 user-select: none;
}
/* Главные блоки */
/* Цвета и доп. стили: */
.underline {
	text-decoration: underline;
	text-decoration-skip-ink: none;
}
.blue  { color: #4563D0 }
.black { color: #0C0C0C }
.white { color: #E0E4F3 }
/* Заголовки (свои) */
.titlebig {
	font-size: 72px;
}
.titlemedium {
	font-size: 32px;
}
.titlesmall {
	font-size: 20px;
}
.titlebig, .titlemedium, .titlesmall {
	display: block;
	width: 100%;
	color: #4563D0;
	font-family: "Roboto-Light";
	text-align: center;
}
/* menu */
#menu {
	display: flex;
	width: 100%;
	height: 100px;
	background: linear-gradient(to bottom, #415FD0, #3355D0);
	align-items: center;
	border-bottom: 2px solid #2F4594;
}
#menu #logo {
	display: block;
	width: 200px;
	height: 75px;
	background-color: #E0E4F3;
	margin-left: 30px;
}
#menu a.item {
	color: #E0E4F3;
	font-size: 60px;
	margin-left: 60px;
	font-family: 'Roboto-Light';
}
/* review */
#review {
	display: block;
	width: 100%;
}
#review #parallax {
	display: flex;
	flex-direction: column;
	justify-content: center;
	background: rgba(0,0,0,0.35);
	max-width: 100%;
	height: 100%;
	padding: 30px 10px;
}
#review #parallax .title {
	margin-top: 30px;
	display: block;
	color: #E0E4F3;
	font-size: 72px;
	font-family: 'Roboto-Black';
	letter-spacing: 3px;
	text-align: center;
}
/* info */
#info {
	display: flex;
	flex-direction: column;
	justify-content: center;
	max-width: 100%;
	height: 100%;
	padding: 30px 0px;
	background: #ffffff;
}
#info .titlebig {
	text-decoration: underline;
	text-decoration-skip-ink: none;
	color: #4563D0;
}
#info #advantage {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
}
#info #advantage .item {
	display: inline-flex;
	align-items: center;
	width: calc((100vw - (5vw*2)) / 3);
	margin: 10px;
}
#info .number {
	display: inline-block;
	height: 100%;
	font-family: "OpenSans-ExtraBold";
	font-size: 72px;
	color: #4563D0;
}
#info #advantage .text {
	display: inline-block;
	height: 100%;
	flex-grow: 1;
	color: #2F4594;
	font-family: "Roboto-Black";
	font-size: 20px;
	margin-left: 10px;
}
#info #services {
	display: block;
	overflow: hidden;
	position: relative;
	text-align: center;
	width: 50%;
	margin-left: auto;
	margin-right: auto;
}
#info #services #viewport {
	display: flex;
	flex-direction: row;
	color: #E0E4F3;
	white-space: nowrap;
	align-items: center;
	width: calc(100% - 4px);
	overflow: hidden;
	height: 484px;
	border: 2px solid #2F4594;
	border-radius: 7px;
	border-bottom: none;
	border-bottom-right-radius: 0px;
	border-bottom-left-radius: 0px;
	background-color: #4563D0;
}
#info #services .item {
	display: inline-block;
	text-align: center;
	min-width: calc(100% - 65px * 2 - 2px * 2);
	padding: 16px 65px;
	margin-bottom: 0;
}
#info #services .item img {
	max-width: 350px;
}
#info #services .titlemedium {
	color: inherit;
	font-family: "Roboto-Black";
}
#info #services .text {
	display: block;
	white-space: normal;
	width: 100%;
	color: inherit;
	font-size: 20px;
	font-family: "Roboto-Black";
	overflow: visible;
}
#info #services .time, #info #services .price {
	display: block;
	width: 100%;
	color: inherit;
	font-size: 20px;
	font-family: "Roboto-Black";
	text-decoration: underline;
	text-decoration-skip-ink: none;
}
#info #services .time::before {
	content: "Сроки: ";
}
#info #services .price::before {
	content: "Цена: ";
}
#info #services input[type="button"].buy {
	display: block;
	width: 50%;
	margin: 8px auto;
	margin-bottom: 0;
	height: 30px;
	color: #4563D0;
	background-color: #E0E4F3;
	border-radius: 30px;
	font-size: 20px;
	font-family: "Roboto-Black";
	border: none;
	cursor: pointer;
	box-shadow: 0 0 2px #E0E4F3;
}
#info #services input[type="button"].buy:focus {
	outline: none;
	box-shadow: 0 0 5px #E0E4F3;
}
#info #services input[type="button"].arrow-right {
	display: block;
	position: absolute;
	top: calc(50% - 28px);
	right: 5px;
	width: 60px;
	height: 60px;
	background-image: url("/images/navigation_arrow_right.png");
	z-index: 2;
}
#info #services input[type="button"].arrow-left {
	display: block;
	position: absolute;
	top: calc(50% - 28px);
	left: 5px;
	width: 60px;
	height: 60px;
	background-image: url("/images/navigation_arrow_right.png");
	transform: rotate(180deg);
	z-index: 1;
}
#info #services #switch {
	display: flex;
	justify-content: center;
	align-items: center;
	border-bottom-left-radius: 7px;
	border-bottom-right-radius: 7px;
	border: 2px solid #2F4594;
	border-top: 2px solid #E0E4F3;
	width: calc(100% - 4px);
	height: 28px;
	background-color: #4563D0;	
}
#info #services #switch .rbutton {
	display: block;
	width: 10px;
	height: 10px;
	border: 4px solid #E0E4F3;
	border-radius: 50%;
	margin-left: 5px;
	cursor: pointer;
}
#info #services #switch .rbutton:first-child {
	margin-left: 0;
}
#info #included {
	display: block;
	position: relative;
	margin-top: 100px;
	width: 100%;
	height: 500px;
	background-color: #4563D0;
}
#info #included::after {
	content: "";
	display: block;
	position: absolute;
	width: 100%;
	height: 100px;
	background-color: #4563D0;
	transform: skewY(-3deg);
	margin-top: -3%;
	z-index: -1;
}
#info #included .item {
	display: block;
	
}
#info #included .item::after {
	content: "";
	display: block;
	width: 50px;
	height: 50px;
	background-image: url("/images/check_mark.png");
}
/* Шрифты */
@font-face {
	font-family: 'Roboto-Light';
	src: url('/fonts/Roboto-Light.ttf');
}
@font-face {
	font-family: 'Roboto-Black';
	src: url('/fonts/Roboto-Black.ttf');
}
@font-face {
	font-family: 'OpenSans-ExtraBold';
	src: url('/fonts/OpenSans-ExtraBold.ttf');
}
@font-face {
	font-family: 'Roboto-Regular';
	src: url('/fonts/Roboto-Regular.ttf');
}