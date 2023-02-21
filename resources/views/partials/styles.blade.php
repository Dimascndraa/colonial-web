<style>
    @font-face {
	font-family: 'Product Sans Regular';
	font-style: normal;
	font-weight: normal;
	src: local('Product Sans Regular'), url('../fonts/ProductSans-Regular.woff') format('woff');
}

@font-face {
	font-family: 'Product Sans Italic';
	font-style: normal;
	font-weight: normal;
	src: local('Product Sans Italic'), url('../fonts/ProductSans-Italic.woff') format('woff');
}

@font-face {
	font-family: 'Product Sans Thin Regular';
	font-style: normal;
	font-weight: normal;
	src: local('Product Sans Thin Regular'), url('../fonts/ProductSans-Thin.woff') format('woff');
}

@font-face {
	font-family: 'Product Sans Light Regular';
	font-style: normal;
	font-weight: normal;
	src: local('Product Sans Light Regular'), url('../fonts/ProductSans-Light.woff') format('woff');
}

@font-face {
	font-family: 'Product Sans Medium Regular';
	font-style: normal;
	font-weight: normal;
	src: local('Product Sans Medium Regular'), url('../fonts/ProductSans-Medium.woff') format('woff');
}

@font-face {
	font-family: 'Product Sans Black Regular';
	font-style: normal;
	font-weight: normal;
	src: local('Product Sans Black Regular'), url('../fonts/ProductSans-Black.woff') format('woff');
}

@font-face {
	font-family: 'Product Sans Thin Italic';
	font-style: normal;
	font-weight: normal;
	src: local('Product Sans Thin Italic'), url('../fonts/ProductSans-ThinItalic.woff') format('woff');
}

@font-face {
	font-family: 'Product Sans Light Italic';
	font-style: normal;
	font-weight: normal;
	src: local('Product Sans Light Italic'), url('../fonts/ProductSans-LightItalic.woff') format('woff');
}

@font-face {
	font-family: 'Product Sans Medium Italic';
	font-style: normal;
	font-weight: normal;
	src: local('Product Sans Medium Italic'), url('../fonts/ProductSans-MediumItalic.woff') format('woff');
}

@font-face {
	font-family: 'Product Sans Bold';
	font-style: normal;
	font-weight: normal;
	src: local('Product Sans Bold'), url('../fonts/ProductSans-Bold.woff') format('woff');
}

@font-face {
	font-family: 'Product Sans Bold Italic';
	font-style: normal;
	font-weight: normal;
	src: local('Product Sans Bold Italic'), url('../fonts/ProductSans-BoldItalic.woff') format('woff');
}

@font-face {
	font-family: 'Product Sans Black Italic';
	font-style: normal;
	font-weight: normal;
	src: local('Product Sans Black Italic'), url('../fonts/ProductSans-BlackItalic.woff') format('woff');
}

:root {
	--header-height: 3rem;
	--hue: 45;
	--sat: 98%;
	--first-color: hsl(var(--hue), var(--sat), 60%);
	--first-color-light: hsl(var(--hue), var(--sat), 85%);
	--first-color-lighten: hsl(var(--hue), var(--sat), 80%);
	--first-color-alt: hsl(var(--hue), var(--sat), 53%);
	--title-color: hsl(var(--hue), 4%, 15%);
	--text-color: hsl(var(--hue), 4%, 35%);
	--text-color-light: hsl(var(--hue), 4%, 65%);
	--body-color: hsl(var(--hue), 0%, 100%);
	--container-color: #fff;
	--scroll-bar-color: hsl(var(--hue), 4%, 85%);
	--scroll-thumb-color: hsl(var(--hue), 4%, 75%);
	--body-font: "Poppins", sans-serif;
	--biggest-font-size: 2rem;
	--h2-font-size: 1.25rem;
	--h3-font-size: 1.125rem;
	--normal-font-size: 0.938rem;
	--small-font-size: 0.813rem;
	--smaller-font-size: 0.75rem;
	--font-semi-bold: 600;
	--font-bold: 700;
	--mb-0-5: 0.5rem;
	--mb-0-75: 0.75rem;
	--mb-1: 1rem;
	--mb-1-5: 1.5rem;
	--mb-2: 2rem;
	--z-tooltip: 10;
	--z-fixed: 100;
}

@media screen and (min-width: 968px) {
	 :root {
		--biggest-font-size: 3rem;
		--h2-font-size: 1.75rem;
		--h3-font-size: 1.25rem;
		--normal-font-size: 1rem;
		--small-font-size: 0.875rem;
		--smaller-font-size: 0.813rem;
	}
}

*,
::before,
::after {
	box-sizing: border-box;
	padding: 0;
	margin: 0;
}

html {
	scroll-behavior: smooth;
}

body {
	margin: var(--header-height) 0 0 0;
	font-size: var(--normal-font-size);
	background-color: var(--body-color);
	color: var(--text-color);
	transition: 0.5s;
}

h1,
h2,
h3 {
	font-weight: var(--font-semi-bold);
	color: var(--title-color);
	line-height: 1.5;
}

ul {
	list-style: none;
}

a {
	text-decoration: none;
}

img {
	max-width: 100%;
	height: auto;
}

body.dark-theme {
	--first-color-light: hsl(var(--hue), var(--sat), 75%);
	--title-color: hsl(var(--hue), 4%, 95%);
	--text-color: hsl(var(--hue), 4%, 80%);
	--body-color: hsl(var(--hue), 8%, 13%);
	--container-color: hsl(var(--hue), 8%, 16%);
	--scroll-bar-color: hsl(var(--hue), 4%, 32%);
	--scroll-thumb-color: hsl(var(--hue), 4%, 24%);
}

.change-theme {
	position: absolute;
	right: 1.5rem;
	top: 2.2rem;
	color: var(--title-color);
	font-size: 1.8rem;
	cursor: pointer;
}

.dark-theme .footer {
	background-color: var(--container-color);
}

.section {
	padding: 4.5rem 0 1rem;
}

.svg__color {
	fill: var(--first-color);
}

.svg__blob {
	fill: var(--first-color-light);
}

.svg__img {
	width: 300px;
	justify-self: center;
}

.container {
	max-width: 80%;
	margin-left: var(--mb-1-5);
	margin-right: var(--mb-1-5);
}

.grid {
	display: grid;
	gap: 1.5rem;
}

.header {
	width: 100%;
	background-color: var(--body-color);
	position: fixed;
	top: 0;
	left: 0;
	z-index: var(--z-fixed);
	transition: 0.5s;
}

.nav {
	height: var(--header-height);
	display: flex;
	justify-content: space-between;
	align-items: center;
}

@media screen and (max-width: 767px) {
	.nav__menu {
		position: fixed;
		background-color: var(--container-color);
		box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);
		padding: 2.5rem 0;
		width: 90%;
		top: -100%;
		left: 0;
		right: 0;
		margin: 0 auto;
		transition: 0.4s;
		border-radius: 2rem;
		z-index: var(--z-fixed);
	}
}

.nav__list {
	display: flex;
	flex-direction: column;
	align-items: center;
	row-gap: 1.5rem;
}

.nav__link:hover {
	border-bottom: solid 1px rgba(0, 0, 0, 0.363);
}

.nav__link,
.nav__logo,
.nav__toggle {
	color: var(--title-color);
	font-weight: var(--font-semi-bold);
}

.nav__toggle {
	font-size: 1.3rem;
	cursor: pointer;
}

.show-menu {
	top: calc(var(--header-height) + 1rem);
}

.active-link {
	position: relative;
}

.active-link::before {
	content: "";
	position: absolute;
	bottom: -0.75rem;
	left: 45%;
	width: 5px;
	height: 5px;
	background-color: var(--title-color);
	border-radius: 50%;
}

.scroll-header {
	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
}

.button {
	display: inline-block;
	background-color: #326dee;
	color: #fff;
	padding: 0.75rem 1.5rem;
	border-radius: 3rem;
	font-weight: var(--font-semi-bold);
	transition: 0.3s;
}

.button:hover {
	background-color: #2059d4;
}

.button__header {
	display: none;
}

.button-link {
	background: none;
	padding: 0;
	color: var(--title-color);
}

.button-link:hover {
	background-color: transparent;
}

.button-flex {
	display: inline-flex;
	align-items: center;
	column-gap: 0.5rem;
	padding: 0.75rem 1rem;
}

.button__icon {
	font-size: 1.5rem;
}

.bscontainer {
	width: 100%;
	padding-right: var(--bs-gutter-x, 0.75rem);
	padding-left: var(--bs-gutter-x, 0.75rem);
	margin-right: auto;
	margin-left: auto;
}

@media (min-width: 576px) {
	.bscontainer-sm,
	.bscontainer {
		max-width: 540px;
	}
}

@media (min-width: 768px) {
	.bscontainer-md,
	.bscontainer-sm,
	.bscontainer {
		max-width: 720px;
	}
}

@media (min-width: 992px) {
	.bscontainer-lg,
	.bscontainer-md,
	.bscontainer-sm,
	.bscontainer {
		max-width: 960px;
	}
}

@media (min-width: 1200px) {
	.bscontainer-xl,
	.bscontainer-lg,
	.bscontainer-md,
	.bscontainer-sm,
	.bscontainer {
		max-width: 1140px;
	}
}

@media (min-width: 1400px) {
	.bscontainer-xxl,
	.bscontainer-xl,
	.bscontainer-lg,
	.bscontainer-md,
	.bscontainer-sm,
	.bscontainer {
		max-width: 1320px;
	}
}

.bsrow {
	--bs-gutter-x: 1.5rem;
	--bs-gutter-y: 0;
	display: flex;
	flex-wrap: wrap;
	margin-top: calc(var(--bs-gutter-y) * -1);
	margin-right: calc(var(--bs-gutter-x) * -0.5);
	margin-left: calc(var(--bs-gutter-x) * -0.5);
}

.bsrow>* {
	flex-shrink: 0;
	width: 100%;
	max-width: 100%;
	padding-right: calc(var(--bs-gutter-x) * 0.5);
	padding-left: calc(var(--bs-gutter-x) * 0.5);
	margin-top: var(--bs-gutter-y);
}

@media (min-width: 768px) {
	.bscol-md-6 {
		flex: 0 0 auto;
		width: 50%;
	}
	.bscol-md-2 {
		flex: 0 0 auto;
		width: 16.66666667%;
	}
}

@media (min-width: 576px) and (max-width: 768px) {
	.bscol-md-2,
	.bscol-md-6 {
		flex: 0 0 auto;
		width: 50%;
	}
}

@media (min-width: 376px) and (max-width: 576px) {
	.bscol-md-2,
	.bscol-md-6 {
		flex: 0 0 auto;
		width: 100%;
	}
}

.footer-dark {
	padding: 50px 0;
	color: #f0f9ff;
	background-color: #1a1a1a;
	margin-top: 100px;
}

.footer-dark h3 {
	margin-top: 0;
	margin-bottom: 12px;
	font-weight: bold;
	font-size: 20px;
	color: white;
}

.footer-dark ul {
	padding: 0;
	list-style: none;
	line-height: 1.6;
	font-size: 18px;
	margin-bottom: 0;
}

.footer-dark ul a {
	color: inherit;
	text-decoration: none;
	opacity: 0.6;
}

.footer-dark ul a:hover {
	opacity: 0.8;
}

@media (max-width: 767px) {
	.footer-dark .item:not(.social) {
		text-align: center;
		padding-bottom: 20px;
	}
}

.footer-dark .item.text {
	margin-bottom: 36px;
}

@media (max-width: 767px) {
	.footer-dark .item.text {
		margin-bottom: 0;
	}
}

.footer-dark .item.text p {
	opacity: 0.6;
	margin-bottom: 0;
}

.footer-dark .item.social {
	text-align: center;
	margin: auto;
}

@media (max-width: 991px) {
	.footer-dark .item.social {
		text-align: center;
		margin-top: 20px;
	}
}

.footer-dark .item.social>a {
	font-size: 20px;
	width: 36px;
	height: 36px;
	line-height: 36px;
	display: inline-block;
	text-align: center;
	border-radius: 50%;
	box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.4);
	margin: 0 8px;
	color: #fff;
	opacity: 0.75;
}

.footer-dark .item.social>a:hover {
	opacity: 0.9;
}

.footer-dark .copyright {
	text-align: center;
	padding-top: 24px;
	opacity: 0.3;
	font-size: 15px;
	margin-bottom: 0;
}

.social_links {
	padding: 1rem;
	border-radius: 0rem;
	margin-top: 2rem;
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
}

.social_links .combo {
	transform: scale(0.9);
	transition: 0.4s ease-in;
	margin: 0 0.5rem;
	height: 3em;
	width: 3em;
	line-height: 3em;
}

.combo .circle {
	color: #f9f9f9;
	transition: 0.4s ease-in;
	font-size: 3em;
}

.combo .icon {
	color: #444343;
	font-size: 2rem;
	transform: translateY(1px);
	transition: 0.2s ease-in;
}

.combo:hover {
	transform: scale(1.1);
}

.combo:hover,
.combo:hover .icon {
	color: white;
}

.ig:hover,
.ig:hover .circle {
	color: #e91e63;
}

.fb:hover,
.fb:hover .circle {
	color: #2196f3;
}

.yt:hover,
.yt:hover .circle {
	color: #f44336;
}

.tw:hover,
.tw:hover .circle {
	color: #2196f3;
}

.gt:hover,
.gt:hover .circle {
	color: #1f1f1f;
}

.scrollup {
	position: fixed;
	background: #1185d3;
	right: 1rem;
	bottom: -20%;
	display: inline-flex;
	padding: 0.3rem;
	border-radius: 0.25rem;
	z-index: var(--z-tooltip);
	opacity: 0.8;
	transition: 0.4s;
}

.scrollup:hover {
	background-color: #2059d4;
	opacity: 1;
}

.scrollup__icon {
	font-size: 1.6rem;
	color: #fff;
}

.show-scroll {
	bottom: 3rem;
}

::-webkit-scrollbar {
	width: 0.6rem;
	border-radius: 0.5rem;
	background-color: var(--scroll-bar-color);
}

::-webkit-scrollbar-thumb {
	background-color: var(--scroll-thumb-color);
	border-radius: 0.5rem;
}

::-webkit-scrollbar-thumb:hover {
	background-color: var(--text-color-light);
}

@media screen and (max-width: 360px) {
	.section {
		padding: 3.5rem 0 1rem;
	}
}

@media screen and (min-width: 576px) {
	.section__title-center {
		text-align: initial;
	}
	.footer__container {
		grid-template-columns: repeat(2, 1fr);
	}
}

@media screen and (min-width: 767px) {
	body {
		margin: 0;
	}
	.section {
		padding: 6rem 0 2rem;
	}
	.nav {
		height: calc(var(--header-height) + 1.5rem);
	}
	.nav__list {
		flex-direction: row;
		column-gap: 2.5rem;
	}
	.nav__toggle {
		display: none;
	}
	.change-theme {
		position: initial;
	}
}


@media screen and (min-width: 968px) {
	.button__header {
		display: block;
	}
	.footer__container {
		grid-template-columns: repeat(5, 1fr);
	}
	.footer__social {
		align-items: flex-start;
	}
	.footer__social-link {
		font-size: 1.45rem;
	}
}

@media screen and (min-width: 1024px) {
	.container {
		margin-left: auto;
		margin-right: auto;
	}
	.footer__container {
		column-gap: 3rem;
	}
	.scrollup {
		right: 2rem;
	}
}

.banner {
	padding-top: 200px;
	width: 100%;
	height: 87vh;
    background-image: url('/img/bg-dark.jpg');
	background-attachment: fixed;
	background-size: cover;
	background-position: center;
}

.content {
	text-align: center;
}

.top-subtitle {
	margin-top: 33px;
}

.content .subtitle {
	font-family: Inter;
	font-style: normal;
	font-weight: 500;
	font-size: 30px;
	line-height: 140.62%;
	letter-spacing: -0.04em;
	color: #fff;
}

.content .title {
	font-family: Product Sans Bold;
	margin-top: 83px;
	font-weight: 700;
	font-size: 110px;
	line-height: 105px;
	letter-spacing: -0.04em;
	color: #fff;
}

.banner-subtitle {
	margin-top: 13px;
	position: absolute;
	width: 506px;
	display: flex;
	align-items: center;
	text-align: center;
	left: calc(50% - 506px / 2);
}

.search-box {
	width: 80%;
	border-radius: 15px;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-wrap: wrap;
	background: #fff;
	padding: 30px 50px;
	min-height: 200px;
	box-shadow: 0 2px 25px rgba(114, 114, 114, 0.1);
	border: 1px solid #d8d8d8;
	z-index: 99;
	margin: auto;
	margin-top: 15%;
}

.search-box .input-box {
	margin: 0 20px;
}

.search-box .input-box p {
	color: #222;
	margin-bottom: 10px;
	font-size: 18.5px;
	font-weight: 500;
	letter-spacing: -.02rem;
	font-family: Inter;
}

.search-box .input-box input {
	border: .6px solid rgb(219, 219, 219);
	border-radius: 5px;
	outline: none;
	padding: 10px;
	width: 100%;
	font-size: 1em;
	font-family: Inter;
}

.search-box .input-box input[type="Submit"] {
	outline: none;
	border: none;
	background: #2563eb;
	color: white;
	cursor: pointer;
	padding: 14px;
	width: 100px;
}

.sec-head {
	font-family: Product Sans Bold;
	font-size: 60px;
	letter-spacing: -0.04em;
}

.hotels {
	margin-top: 130px;
}

#hotels-head {
	text-align: center;
	margin-bottom: 30px;
}

.wrapper {
	width: 100%;
}

.carousel {
	max-width: 70%;
	margin: auto;
	padding: 0 30px;
}

.carousel .card {
	color: #fff;
	text-align: center;
	margin: 20px 0;
	line-height: 250px;
	font-size: 90px;
	font-weight: 600;
	border-radius: 10px;
	background: #d1d1d1;
	height: 400px;
}

.carousel .card-1 {
	background-image: url(../img/h1.jpg);
	background-size: cover;
	background-position: center;
}

.carousel .card-2 {
	background-image: url(../img/h2.jpg);
	background-size: cover;
	background-position: center;
}

.carousel .card-3 {
	background-image: url(../img/h3.jpg);
	background-size: cover;
	background-position: center;
}

.carousel .card-4 {
	background-image: url(../img/h4.jpg);
	background-size: cover;
	background-position: center;
}

.carousel .card-5 {
	background-image: url(../img/h5.jpg);
	background-size: cover;
	background-position: center;
}

.carousel .card-6 {
	background-image: url(../img/h6.jpg);
	background-size: cover;
	background-position: center;
}

.carousel .card-7 {
	background-image: url(../img/h7.jpg);
	background-size: cover;
	background-position: center;
}

.carousel .card-8 {
	background-image: url(../img/h8.jpg);
	background-size: cover;
	background-position: center;
}

.owl-dots {
	text-align: center;
	margin-top: 40px;
}

.owl-dot {
	height: 15px;
	width: 15px;
	margin: 0 5px;
	outline: none;
	border-radius: 50%;
	border: 2px solid #0072bc!important;
	transition: all 0.3s ease;
}

.owl-dot.active,
.owl-dot:hover {
	background: #0072bc!important;
}

.vision {
	font-family: Inter;
	background-color: #d2d2d2;
	background-image: url(../img/bg-pattern.svg);
	background-position: center;
	background-size: cover;
	text-align: center;
	padding: 100px;
	margin-top: 150px;
	height: auto;
}

.row {
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	width: 50%;
	margin-left: 25%;
	justify-content: center;
	align-items: center
}

.column {
	display: flex;
	flex-direction: column;
	flex-basis: 100%;
	flex: 1
}

.vision-column {
	background-color: #fff;
	padding: 40px;
	height: auto;
	border-radius: 10px;
	box-shadow: rgba(0, 0, 0, 0.16) 0 10px 36px 0, rgba(0, 0, 0, 0.06) 0 0 0 1px
}

.vision-column p {
	font-size: 1.09rem;
	text-align: justify;
	padding: 20px
}

@media screen and (max-width:1205px) {
	.vision-column p {
		font-size: 1.1rem;
		text-align: center
	}
	.vision-column {
		width: 500px
	}
}

@media screen and (max-width:613px) {
	.vision-column {
		width: 400px
	}
}

@media screen and (max-width:500px) {
	.vision-column {
		width: 300px
	}
}

.wrapper-rev {
	max-width: 1200px;
	margin: auto;
	padding: 0 20px;
	display: flex;
	flex-wrap: wrap;
	align-items: center;
	justify-content: space-between;
	font-family: Inter;
}

.wrapper-rev .box {
	background: #fff;
	width: calc(33% - 10px);
	padding: 25px;
	border-radius: 10px;
	border: 1px solid #c3c3c3a4;
}

.wrapper-rev .box i.quote {
	font-size: 20px;
	color: #40a1e2;
}

.wrapper-rev .box .content {
	display: flex;
	flex-wrap: wrap;
	align-items: center;
	justify-content: space-between;
	padding-top: 10px;
}

.box .info .name {
	font-weight: 600;
	font-size: 17px;
}

.box .info .job {
	font-size: 16px;
	font-weight: 500;
	color: #40a1e2;
}

.box .info .stars {
	margin-top: 2px;
}

.box .info .stars i {
	color: #40a1e2;
	font-size: 20px;
}

.box .content .image {
	height: 75px;
	width: 75px;
	padding: 3px;
	background: #40a1e2;
	border-radius: 50%;
}

.content .image img {
	height: 100%;
	width: 100%;
	object-fit: cover;
	border-radius: 50%;
	border: 2px solid #fff;
}

.box:hover .content .image img {
	border-color: #fff;
}

@media (max-width: 1045px) {
	.wrapper-rev .box {
		width: calc(50% - 10px);
		margin: 10px 0;
	}
}

@media (max-width: 702px) {
	.wrapper-rev .box {
		width: 100%;
	}
}
</style>