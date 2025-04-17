<!-- THE STYLINGS -->

<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Poppins", serif;
        scrollbar-width: thin;
        scrollbar-color: rgba(255, 255, 255, 0.1) #0e0e0e;
    }

    html {
        scroll-behavior: smooth;
    }

    :root {
        --btn-color: linear-gradient(to right, #58BAF7, #22A0EF);
        --main-color: #22A0EF;
        --text-color: #BAC5C5;
        --semi-textcolor: #EEEEEE;
    }

    body {
        background: #0E0E0E;
        overflow-x: hidden;
        z-index: 0;
        position: relative;
    }

    /* ======================= */
    /* THE WEB LOADER */
    /* ======================= */

    #webloader {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        width: 100%;
        position: fixed;
        z-index: 3000;
        background-color: #060606;
    }

    .loader {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        display: inline-block;
        border-top: 4px solid #FFF;
        border-right: 4px solid transparent;
        box-sizing: border-box;
        animation: rotation 1s linear infinite;
    }

    .loader::after {
        content: '';
        box-sizing: border-box;
        position: absolute;
        left: 0;
        top: 0;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        border-bottom: 4px solid var(--main-color);
        border-left: 4px solid transparent;
    }

    @keyframes rotation {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* ======================= */
    /* BACK TO TOP BUTTON */
    /* ======================= */

    .BTT .bttdiv i {
        padding: 8px 11px;
        border-radius: 5px;
        color: #EEEEEE;
        background: var(--btn-color);
        font-size: 30px;
        position: absolute;
        bottom: 15%;
        right: 1%;
        animation: breathe 2s infinite;
        position: fixed;
        z-index: 1999;
    }

    .linkcontainer .contactlink {
        display: none;
    }

    .linkcontainer {
        display: flex;
        align-items: center;
    }


    @keyframes breathe {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }
    }

    /* ======================= */
    /* THE LIVE BUTTON */
    /* ======================= */

    .live .icon i {
        padding: 7px 7px;
        border-radius: 50%;
        color: #EEEEEE;
        background: var(--btn-color);
        font-size: 30px;
        position: absolute;
        bottom: 1.1%;
        right: 1.5%;
    }

    .live {
        padding: 12px 50px 12px 10px;
        border-radius: 25px;
        color: #EEEEEE;
        background: var(--btn-color);
        font-size: 15px;
        position: absolute;
        bottom: 5%;
        right: 1.5%;
        position: fixed;
        z-index: 2000;
    }

    .response {
        color: green;
        text-decoration: none;
    }

    /* ======================= */
    /* THE HEADER SECTION BEGINS */
    /* ======================= */

    .mainheader {
        display: flex;
        align-items: center;
        background-color: #0E0E0E;
        justify-content: space-around;
        padding: 20px 0px;
        gap: 100px;
    }

    header .headercontact {
        display: flex;
        justify-content: center;
    }

    .headercontainer {
        display: flex;
        align-items: center;
        gap: 50px;
    }

    .headercontainer a {
        text-decoration: none;
        color: var(--text-color);
    }

    header i {
        color: var(--text-color);
        font-size: 20px;
    }

    .secondicon i {
        margin: 0px 50px 0px 0px;
    }

    .logocontainer {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* ======================= */
    /* THE NAV SECTION BEGINS */
    /* ======================= */


    nav a {
        text-decoration: none;
        color: var(--text-color);
    }

    .second-nav {
        display: flex;
        align-items: center;
        justify-content: space-around;
        width: 100%;
        background-color: #0E0E0E;
        color: var(--text-color);
        border: 1.3px solid #828282;
        border-left: none;
        border-right: none;
        padding: 9px 0px;
        position: fixed;
        z-index: 2999;
        position: relative;
        transition: all 0.4s ease-in-out;
        box-shadow: none;
    }

    .second-nav.fixed {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        transform: translateY(-20px);
        animation: slideDown 0.5s ease forwards;
    }

    @keyframes slideDown {
        from {
            transform: translateY(-20px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .logocontainer .logo img {
        width: 60px;
        height: 60px;
        border: none;
        border-radius: 50%;
    }

    .menu {
        display: none;
    }

    .linkcontainer a {
        margin: 0px 20px;
    }

    .firstsection {
        padding: 0px 0px 0px 100px;
    }

    .maincontainer {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .firstcontainer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%
    }

    /* THE LOGIN BUTTON */

    .linkcontainer button {
        background: var(--btn-color);
        padding: 5px 10px;
        font-size: 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin: 5px 0px;
    }

    .linkcontainer .registerbutton {
        background: transparent;
        padding: 5px 10px;
        font-size: 17px;
        color: var(--semi-textcolor);
        border: 2px solid var(--main-color);
        border-radius: 5px;
        cursor: pointer;

    }

    .linkcontainer a {
        gap: 10px;
        text-align: left;
    }

    .maincontainer .firstcontainer .textside h1 {
        color: var(--text-color);
        font-size: 50px;
        font-weight: 400;
    }

    .imageside {
        position: relative;
    }

    /* ======================= */
    /* HERO SECTION BEGINS */
    /* ======================= */

    .firstsection {
        background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9)), url("https://www.proinvestly.com/asset/theme2/images/bg/banner-candle.png");
        background-size: cover;
        height: 100vh;
    }

    .firstcontainer .mainimage {
        width: 600px;
        height: auto;
    }

    .firstcontainer .subimage {
        width: 300px;
        height: 300px;
        position: absolute;
        top: 13%;
        right: 12%;
        border-radius: 50%;
    }

    .hometext .homebtn .firstbutton {
        padding: 10px 20px;
        margin: 0px 10px;
        border: 1px solid var(--main-color);
        border-radius: 5px;
        font-size: 17px;
        color: var(--main-color);
        background: transparent;
        overflow: hidden;
        cursor: pointer;
        position: relative;
    }

    .hometext .homebtn .firstbutton::before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: var(--btn-color);
        transition: left 0.4s ease;
    }

    .hometext .homebtn .firstbutton span {
        position: relative;
        z-index: 1;
        transition: color 0.1s ease;
    }


    .hometext .homebtn .firstbutton:hover {
        color: var(--semi-textcolor);
    }

    .hometext .homebtn .firstbutton:hover::before {
        left: 0;
    }

    .hometext .homebtn .firstbutton:not(:hover)::before {
        right: 100%;
    }

    .homeinvestments .generalwidthdraw {
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--text-color);
        gap: 20px;
    }

    .homeinvestments {
        display: flex;
        align-items: center;
        color: var(--text-color);
        gap: 20px;
        margin: 30px 0px 0px 0px;
    }

    .totalinvestors {
        border-right: 1px solid var(--text-color);
        border-left: 1px solid var(--text-color);
        padding: 0px 10px;
    }

    .homeinvestments h3 {
        font-size: 30px;
        text-align: center;
        color: var(--main-color);
    }


    .tradingview-widget-copyright {
        font-size: 13px !important;
        line-height: 32px !important;
        text-align: center !important;
        vertical-align: middle !important;
        /* @mixin sf-pro-display-font; */
        font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
        color: #B2B5BE !important;
    }

    .tradingview-widget-copyright .blue-text {
        color: #2962FF !important;
    }

    .tradingview-widget-copyright a {
        text-decoration: none !important;
        color: #B2B5BE !important;
    }

    .tradingview-widget-copyright a:visited {
        color: #B2B5BE !important;
    }

    .tradingview-widget-copyright a:hover .blue-text {
        color: #1E53E5 !important;
    }

    .tradingview-widget-copyright a:active .blue-text {
        color: #1848CC !important;
    }

    .tradingview-widget-copyright a:visited .blue-text {
        color: #2962FF !important;
    }


    /* ================================= */
    /* THE CALCULATION SECTION BEGINS */
    /* =============================== */

    .secondsection {
        padding: 30px 100px;
    }

    .secondsection .imagesource {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 100px 0px 0px 0px;
    }

    .calculation {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
        margin: 100px 0px 0px 0px;
    }

    .calculation label {
        display: flex;
        flex-direction: column;
    }

    .calculation label {
        color: var(--text-color);
    }

    .contacticon .icon a {
        color: var(--text-color);
    }

    .calculation .input input {
        padding: 15px 10px;
        width: 300px;
        border: none;
        border-radius: 5px;
        outline: none;
        background: #0B1015;
        border: 2px solid #0B1015;
        color: var(--text-color);
    }


    .calculation .options select {
        padding: 15px 10px;
        width: 300px;
        border: none;
        border-radius: 5px;
        background: #0B1015;
        outline: none;
        color: var(--text-color);
        border: 2px solid #0B1015;
        font-size: 17px;
    }

    .calculation .input input:focus {
        border: 2px solid var(--main-color);
    }

    .calculation .option select:focus {
        border: 2px solid var(--main-color);
    }

    .calculation .caculationbtn button {
        color: #0B1015;
        margin: 25px 0px 0px 0px;
        padding: 15px 10px;
        border-radius: 7px;
        background: var(--btn-color);
        overflow: hidden;
        position: relative;
        cursor: pointer;
        border: none;
    }

    .calculation .caculationbtn span {
        display: inline-block;
        transform: translatex(+200%);
        font-size: 20px;
        font-weight: 800;
        transition: transform 0.3s ease;
    }

    .calculation .caculationbtn:hover span {
        transform: translateX(0);
    }

    /* ====================================== */
    /* THE INVESTMENT PLAN SECTION BEGINS */
    /* ======================================= */

    .thirdsection {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #1C1C1C;
        text-align: center;
        padding: 100px 0px 100px 0px;
    }

    .thirdcontainer .plans {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .thirdcontainer .plans .grid .topicons {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .thirdcontainer .plans .grid {
        width: 350px;
        height: 520px;
        background: #060606;
        color: var(--text-color);
        padding: 20px 0px 20px 20px;
        border-radius: 10px;
    }

    .plans .grid .topone {
        background: var(--btn-color);
        padding: 13.5px 17px;
        border-radius: 50%;
        box-shadow: inset 0px 0px 80px #060606;
        border: 2px solid var(--main-color);
    }

    .plans .grid .topone i {
        margin: 5px 0px 0px 0px;
        font-size: 30px;
        color: var(--main-color);
    }

    .thirdcontainer .thirdheader h1 {
        font-size: 50px;
        color: var(--text-color);
        font-weight: 400;
        padding: 20px;
    }

    .thirdcontainer .toptwo .design {
        background: var(--btn-color);
        padding: 10px 20px;
        border-bottom-left-radius: 20px;
    }

    .plans .grid .minamount {
        text-align: left;
        margin: 20px 0px 0px 0px;
    }

    .plans .grid .minamount h3 {
        font-weight: 500;
        font-size: 25px;
    }

    .grid .line {
        margin: 20px 0px 0px 0px;
        padding: 0px 20px 0px 0px;
    }

    .grid .linecolor {
        background-color: #1C1C1C;
        width: 100%;
        height: 1px;
    }

    .generalusage .usage {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 15px 0px 0px 0px;
    }

    .generalusage .usage i {
        color: var(--main-color);
    }

    .plans .usagebtn {
        padding: 0px 20px 0px 0px;
    }

    /* ======================= */
    /* INVESTMENT PLAN BUTTON */
    /* ======================= */

    .plans .usagebtn button {
        padding: 10px;
        width: 100%;
        border-radius: 5px;
        border: none;
        margin: 60px 0px 0px 0px;
        background: var(--btn-color);
        cursor: pointer;
        font-size: 16px;
        position: relative;
        transition: color 0.3s ease;
    }

    .plans .usagebtn button::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: white;
        transform: scaleX(0);
        transform-origin: bottom right;
        transition: transform 0.3s ease;
    }

    .plans .usagebtn button:hover {
        color: var(--semi-textcolor);
    }

    .plans .usagebtn button:hover::after {
        transform: scaleX(1);
        transform-origin: bottom left;
    }

    .plans .usagebtn button span {
        position: relative;
        z-index: 1;
        transition: color 0.4s ease;
    }

    .design p {
        color: #0B1015;
    }

    .thirdcontainer .plans .gridfirst {
        width: 350px;
        height: 550px;
    }

    .thirdcontainer .plans .gridfirst .usagebtn button {
        margin: 100px 0px 0px 0px;
    }

    .thirdcontainer .plans .gridfirst .lastbutton button {
        margin: 0px 0px 0px 0px;
    }

    .calcpercent {
        display: flex;
        align-items: center;
        text-align: center;
        gap: 10px;
        margin: 10px 0px;
    }

    .calcpercent .percent {
        background: var(--btn-color);
        padding: 13px 13px;
        border-radius: 50%;
        box-shadow: inset 0px 0px 80px #060606;
        border: 2px solid var(--main-color);
    }

    /* ======================= */
    /* HOW IT WORKS SECTION BEGINS */
    /* ======================= */

    .fourthsection {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 100px 20px 100px 20px;
    }

    .fourthcontainer .fourthHeader {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .fourthcontainer .fourthHeader h2 {
        font-size: 50px;
        font-weight: 500;
        color: var(--text-color);
    }

    .fourthcontainer .fourthbody {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
        margin: 50px 0px 0px 0px;
    }

    .fourthcontainer .fourthbody .workBox {
        width: 370px;
        height: auto;
        box-shadow: inset 0 0px 20px var(--main-color);
        border: 2px solid var(--main-color);
        border-radius: 7px;
        padding: 20px 20px 20px 50px;
        color: #BAC5C5;
        font-size: 17px;
        z-index: 1;
        position: relative;

    }

    .fourthcontainer .fourthbody .workBox .pheader {
        font-size: 18px;
        font-weight: 600;
        margin: 10px 0px 20px 0px;
    }

    .fourthbody .workBox .usericon i {
        background-color: #060606;
        box-shadow: inset 0 0px 20px var(--main-color);
        padding: 30px;
        border: 10px solid #0B1015;
        border-radius: 50%;
        position: absolute;
        top: 20%;
        right: 87%;
        z-index: 99;
        color: var(--main-color);
        font-size: 25px;
        font-weight: 700;
    }

    /* ======================= */
    /* THE ABOUT SECTION BEGINS */
    /* ======================= */

    .fifthsection {
        padding: 100px 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #1C1C1C;
    }

    .fifthcontainer {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 60px;
    }

    .abouttext h2 {
        color: var(--text-color);
        font-size: 35px;
        font-weight: 500;
    }

    .abouttext p {
        color: var(--text-color);
    }

    /* ABOUT BUTTON */

    .abouttext button {
        padding: 15px;
        background: var(--btn-color);
        border-radius: 7px;
        border: none;
        font-size: 20px;
        color: #0B1015;
        margin: 20px 0px 0px 0px;
        position: relative;
        cursor: pointer;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0);
        transition: box-shadow 0.3s ease-in-out;
    }


    .abouttext button:hover {
        box-shadow: 0 0 15px rgb(24, 155, 207);
        color: rgb(255, 255, 255);
    }

    /* ======================= */
    /* THE CONNECTION FLOW */
    /* ======================= */
    /* ======================= */
    /* THE WHY CHOOSE US SECTION */
    /* ======================= */

    .sixthsection {
        background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9)), url("https://www.proinvestly.com/asset/theme2/images/bg/banner-candle.png");
        background-size: cover;
        height: auto;
        width: 100%;
    }

    .WCUsheader {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;

    }

    .WCUsheader h2 {
        color: var(--text-color);
        font-size: 50px;
        font-weight: 500;
    }

    .sixthcontainer {
        padding: 100px;
    }

    .firstcon i,
    h4,
    p {
        color: white;
    }

    .firstcon {
        display: flex;
        align-items: center;
        background: #1C1C1C;
        width: 350px;
        gap: 1px;
        height: auto;
        padding: 20px;
        border-radius: 7px;
        margin: 50px 0px;
        position: relative;
        /* z-index: 1000; */
    }


    .firstcon .icon {
        display: flex;
        align-items: center;
        width: 100%px;
        height: 100%;
        padding: 15px;
        font-size: 40px;
        box-shadow: inset 0px 3px 7px var(--main-color);
        background: #0e0e0e;
        border-radius: 50%;
    }

    .mainconnection {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 100px;
        position: relative;
    }

    .mainconnection .connector {
        position: relative;
        z-index: 1000;
    }

    .mainconnection .connector img {
        width: 250px;
        border-radius: 50%;
    }

    .lineone {
        background-color: blue;
        width: 2px;
        height: 150px;
        position: absolute;
        right: 60.5%;
        bottom: 55%;
        transform: rotate(-35deg);
        border-radius: 50%;
        z-index: 0;
    }

    .linetwo {
        background-color: blue;
        width: 150px;
        height: 2px;
        position: absolute;
        right: 64%;
        bottom: 83.5%;
        transform: rotate(15deg);
        border-radius: 10px;
        z-index: 0;
    }

    .linefour {
        background-color: blue;
        width: 2px;
        height: 150px;
        position: absolute;
        right: 59.1%;
        bottom: 16.5%;
        border-radius: 50%;
        transform: rotate(35.5deg);
        z-index: 1;
    }

    .linefive {
        background-color: blue;
        width: 150px;
        height: 2px;
        position: absolute;
        right: 62.5%;
        bottom: 15%;
        transform: rotate(-17.5deg);
        border-radius: 0px 10px 0px 0px;
    }

    .linesix {
        background-color: blue;
        width: 2px;
        height: 150px;
        position: absolute;
        right: 40%;
        bottom: 58%;
        transform: rotate(40deg);
        border-radius: 50%;
    }

    .lineseven {
        background-color: blue;
        width: 140px;
        height: 2px;
        position: absolute;
        right: 24%;
        bottom: 85.5%;
        transform: rotate(-15deg);
        border-radius: 0px 10px 0px 0px;
    }

    .linenine {
        background-color: blue;
        width: 2px;
        height: 150px;
        position: absolute;
        right: 38.9%;
        bottom: 16.8%;
        transform: rotate(-35.5deg);
        border-radius: 50%;
    }

    .lineten {
        background-color: blue;
        width: 150px;
        height: 2px;
        position: absolute;
        right: 22.7%;
        bottom: 14.9%;
        transform: rotate(20deg);
        border-radius: 0px 10px 0px 0px;
    }

    .middleline {
        background-color: blue;
        width: 150px;
        height: 2px;
        position: absolute;
        right: 58%;
        bottom: 50%;
        border-radius: 0px 10px 0px 0px;
    }

    .middle2line {
        background-color: blue;
        width: 150px;
        height: 2px;
        position: absolute;
        bottom: 50%;
        right: 28%;
        border-radius: 0px 10px 0px 0px;
    }


    /* ======================= */
    /* THE FAQ SECTION BEGINS */
    /* ======================= */

    .seventhsection {
        background-image: linear-gradient(to bottom right, rgba(0, 0, 0, 0.8), rgba(17, 17, 17, 0.9)), url("./images/faq.png");
        background-repeat: none;
    }

    .seventhcontainer i {
        color: var(--text-color);
        font-size: 25px;
    }

    .questions {
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
    }

    .question {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0px 0px 15px 0px;

    }

    .questionicon {
        display: flex;
        align-items: center;
    }

    .questionline {
        width: 100%;
        height: 2px;
        background-color: #1C1C1C;
    }

    .faqcontainer {
        background-color: #060606;
        padding: 20px;
    }

    .questioncontainer {
        padding: 10px;
    }

    .FAQ h1 {
        text-align: center;
        color: var(--text-color);
        font-size: 40px;
        margin: 0px 0px 30px 0px;
    }


    .questiontext h4 {
        font-size: 20px;

    }

    .answers {
        max-height: 0;
        overflow: hidden;
        padding: 0px 15px;
        transition: max-height 0.5s ease, padding 0.5s ease;
    }

    .answers p {
        color: #828282;

    }

    .answers.open {
        max-height: 200px;
        padding: 15px;
    }

    .seventhcontainer {
        padding: 100px 120px;

    }

    /* ======================= */
    /* TABLE SECTION BEGINS */
    /* ======================= */
    /* ======================= */
    /* RECENT TRANSACTIONS */
    /* ======================= */

    .eightsection {
        background-image: linear-gradient(to bottom right, rgba(0, 0, 0, 0.8), rgba(17, 17, 17, 0.9)), url("./images/tradelikebackground.png");
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        padding: 60px 0px;

    }

    .table {
        color: var(--semi-textcolor);
        padding: 10px 20px;
    }

    table thead {
        border-radius: 20px;
    }

    .tableheader h1 {
        margin: 30px 0px;
        font-size: 40px;
        text-align: center;
    }

    .generaltable {
        color: var(--semi-textcolor);
        background-color: #101010;
        border-radius: 7px;

    }

    .history {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 25px;

    }

    /* RECENT TRANSACTION BUTTON */
    /* TABLE BUTTON */

    .latesthistory {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .invest {
        background: transparent;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .invest p {
        margin: 0;
        color: var(--semi-textcolor);
        font-weight: bold;
    }

    /* Active button styles */
    .active {
        background: var(--btn-color);
    }

    .active p {
        color: black;
    }

    td {
        border-bottom: 2px solid #0e0e0e;
    }

    table th {
        border-right: none;
    }

    th {
        color: #101010;
    }

    tr th:first-child {
        text-align: left;
        padding: 10px 200px 10px 10px;
        border-radius: 7px 0px 0px 0px;


    }

    tr th:last-child {
        text-align: right;
        padding: 10px 10px 10px 200px;
        border-radius: 0px 7px 0px 0px;

    }

    tr th:nth-child(2) {
        text-align: center;
        padding: 10px 100px;

    }

    tr th:nth-child(3) {
        text-align: center;
        padding: 10px 100px;
    }

    tr td:first-child {
        text-align: left;
        padding: 10px 50px 10px 15px;

    }

    tr td:last-child {
        text-align: right;
        padding: 10px 10px 10px 50px;

    }

    tr td:nth-child(2) {
        text-align: center;
        padding: 10px 50px;

    }

    tr td:nth-child(3) {
        padding: 15px 50px;
        text-align: center;
    }

    thead tr {
        background: var(--btn-color);
        border: #22A0EF;
        border-radius: 7px 7px 0px 0px;
    }

    table {
        border-style: none;
        border-collapse: collapse;
    }

    .maingeneraltable {
        display: flex;
        align-items: center;
        justify-content: center;
    }


    /* ======================= */
    /* WHAT MY CLIENTS SAY */
    /* ======================= */

    .ninthsection {
        background-color: #101010;
        padding: 50px 0px;
    }

    .ninthcontainer {
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        width: 100vw;
        position: relative;
    }

    .ninthcontainer p {
        color: var(--text-color);
        font-size: 16px;
    }

    .ninthcontainer h1,
    h4 {
        color: var(--semi-textcolor);
    }

    .ninthcontainer .header {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;

    }

    .ninthcontainer .header h1 {
        margin: 0px 0px 50px 0px;
        font-weight: 400;
        font-size: 50px;
    }

    .rates {
        padding: 10px 25px;
        width: 350px;
        height: auto;
        background-color: #0e0e0e;
        border-radius: 7px;


    }

    .ratesicons {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 20px 0px;
    }

    .ratesicons i {
        font-size: 20px;
        color: #FFA500;
    }

    .ratesicons .normalicons i {
        color: #1C1C1C;
        font-size: 25px;
    }

    .ratesline {
        width: 100%;
        height: 2px;
        background: rgb(17, 17, 17);
        margin: 25px 0px;
    }

    .rateprofile {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .rateface img {
        width: 60px;
        border-radius: 50%;
    }

    .ratingcontainer {
        display: flex;
        gap: 20px;
        transition: transform 0.5s ease-in-out;
    }

    .firstrate {
        height: 370px;
    }

    .secondrate {
        height: 430px;
    }

    .thirdrate {
        height: 680px;
    }

    .carousel-container {
        width: 80vw;
        overflow: hidden;
        position: relative;
    }

    .carousel {
        display: flex;
        transition: transform 1s ease-in-out;
        width: 400%;
        position: relative;
    }

    .carousel-item {
        width: 25.5vw;
        font-size: 18px;
        padding: 30px;
        color: white;
        min-height: 50vh;
        transition: transform 1s ease-in-out, opacity 0.5s ease-in-out;
    }

    /* ======================= */
    /* LINE BTW BLOG AND CAROUSEL */
    /* ======================= */

    .endline {
        background-color: rgb(53, 51, 51);
        width: 100%;
        height: 2px;
    }

    /* ======================= */
    /* BLOG SECTION BEGINS */
    /* ======================= */

    .tenthsection {
        padding: 50px 0px 100px 0px;
        background-color: #101010;
    }

    .tenthcontainer {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .blogheader {
        text-align: center;
        margin: 10px 0px 50px 0px;

    }

    .blogheader h2 {
        font-size: 50px;
        font-weight: 500;
        color: var(--semi-textcolor);
    }

    .blogexperince {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .blogicon {
        display: flex;
        align-items: center;
        gap: 5px;
        margin: 2px 0px 20px 0px;
    }

    .blogicon p {
        color: var(--text-color);

    }

    .blogicon i {
        font-size: 20px;
        color: var(--main-color);
    }

    .blogtexts {
        margin: 20px 0px 0px 0px;
    }

    .blogtexts a {
        text-decoration: none;
        color: var(--semi-textcolor);
        cursor: pointer;
        font-size: 12px;
    }

    .blogimage img {
        border-radius: 10px;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .blogimage {
        height: 225px;
    }

    .blogparagraph {
        width: 25vw;
    }

    .blogparagraph p {
        color: var(--text-color);
    }

    .blogimage {
        position: relative;
    }

    .blogimage .imagetext {
        position: absolute;
        bottom: -5px;
        left: 5%;
        background: var(--btn-color);
        border-radius: 20px;
        padding: 0.5px 7px;

    }

    .blogsection {
        display: flex;
        justify-content: center;
        gap: 3%;

    }

    /* ======================= */
    /* FOOTER SECTION BEGINS */
    /* ======================= */

    .footer {
        padding: 50px 0px 0px 0px;
        background-color: #060606;
    }


    .footerinfo {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .footer .footertext {
        color: var(--text-color);
    }

    .footerp {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .footerheader h2 {
        color: var(--semi-textcolor);
        font-size: 45px;
        font-weight: 600;
    }

    .footerheader {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .footertext p {
        margin: 10px 0px 0px 0px;
        width: 40vw;
        color: var(--text-color);
    }

    .footerinput {
        display: flex;
        align-items: center;
        width: 600px;
        height: auto;
    }

    .generalfooterinput {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 50px 0px;
    }

    .footerinput input {
        background: transparent;
        border: .5px solid rgb(2, 22, 34);
        outline: none;
        color: #BAC5C5;
        width: 440px;
        height: 50px;
        padding: 0px 0px 0px 10px;
        border-radius: 7px 0px 0px 7px;
    }

    .footerinput input:focus {
        border: 2px solid var(--main-color);
    }

    .footerinput input::placeholder {
        font-size: 17px;
    }

    /* ======================= */
    /* SUBSCRIBE BUTTON */
    /* ======================= */

    .footerinput button {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        background: var(--btn-color);
        border: none;
        width: 150px;
        height: 50px;
        border-radius: 0px 7px 7px 0px;
        position: relative;
        overflow: hidden;
        cursor: pointer;

    }

    .footerinput .button .icon i {
        color: var(--semi-textcolor);
        font-size: 25px;
        animation: float 2s ease-in-out infinite;
    }

    /* ANIMATION FOR SUBSCRIBE BUTTON */

    @keyframes float {

        0%,
        100% {
            transform: translatex(0);
        }

        50% {
            transform: translatex(-5px);
        }
    }

    .footerinput .button .text h4 {
        font-size: 20px;
    }

    .footercontact {
        color: #EEEEEE;
        display: flex;
        align-items: center;
        justify-content: space-around;
        background-color: rgb(14, 13, 13);
        padding: 25px 0px;
    }

    .footercontact .contacts {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .generalcontact {
        display: flex;
        align-items: center;
        gap: 100px;
    }

    .footeremail {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .footerphone {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .contacts a {
        text-decoration: none;
    }

    .contacticon {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .footercontact .contacticon .icon {
        border: 1px solid rgb(2, 32, 51);
        padding: 6px 8px;
    }

    .footerlink {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 120px;
    }

    .footerlink .navigators a {
        text-decoration: none;
        color: var(--semi-textcolor);

    }

    @media (max-width: 1263px) {
        .mainconnection {
            display: flex;
            align-items: center;
        }


    }

    @media (max-width: 1200px) {

        body {
            overflow-x: hidden;
            z-index: 0;
            position: relative;
        }

        .menu {
            display: block;
        }

        .menu i{
            color: var(--main-color);
            font-size: 30px;
        }

        #menu-close {
            display: none;
        }

        .genlogo {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0px 10px;
            width: 100%;
        }

        .second-nav {
            border: none;
        }

        .linkcontainer {
            display: block;
        }

        .linkcontainer {
            position: absolute;
            top: 60px;
            right: 0;
            width: 100%;
            height: 0;
            text-align: center;
            max-height: 0;
            overflow: hidden;
            background: linear-gradient(to right bottom, rgb(0, 16, 26), rgb(0, 0, 0) 50%, rgb(1, 27, 43) 90%);
            opacity: 0;
            transition: transform 0.5s ease-out, opacity 0.5s ease-in-out;
            transform: translateX(100%) scale(0.8);
        }

        .linkcontainer.show {
            max-height: 50vh;
            height: 50vh;
            opacity: 1;
            padding: 30px 10px;
            transform: translateX(0) scale(1);
            transition: transform 0.5s ease-out, opacity 0 ease-out;

        }

        .linkcontainer .linkbtns {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .linkcontainer .linkbtns button {
            padding: 10px 20px;
            margin: 0px 10px;
            border: 1px solid var(--main-color);
            border-radius: 5px;
            font-size: 17px;
            color: var(--main-color);
            background: transparent;
            overflow: hidden;
            cursor: pointer;
            position: relative;
        }

        .linkcontainer .worklink {
            display: none;
        }

        .linkcontainer .faqlink {
            display: none;
        }

        .linkcontainer .worklink {
            display: none;
        }

        .linkcontainer .chooselink {
            display: none;
        }

        .linkcontainer .testimoniallink {
            display: none;
        }

        .linkcontainer .contactlink {
            display: block;
        }

        .linkcontainer a {
            display: block;
            margin: 30px 0px;
        }

        .linkcontainer {
            margin: 20px 0px;
        }

        .linkcontainer a {
            color: var(--textcol);
        }

        .firstcontainer {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            height: 100vh;
            width: 100%
        }

        .maincontainer .firstcontainer .textside {
            text-align: center;
            margin: 0px 0px 20px 0px;
        }

        .maincontainer .firstcontainer .textside h1 {
            color: var(--text-color);
            font-size: 40px;
            font-weight: 400;
        }

        .firstcontainer .mainimage {
            display: none;
        }

        .firstcontainer .subimage {
            display: none;
        }

        .firstsection {
            padding: 100px 10px;
        }

        .hometext .homebtn {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .homeinvestments {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: var(--text-color);
            gap: 20px;
            margin: 30px 0px 0px 0px;
        }

        .totalinvestors {
            border-right: none;
            border-left: 1px solid var(--text-color);
            padding: 0px 10px;
        }

        .secondsection {
            padding: 30px 10px;
        }

        .calculation label {
            display: flex;
            flex-direction: column;
            margin: 10px 0px;
        }

        .calculation .options select {
            padding: 15px 10px;
            margin: 0px 0px 0px 0px;
            width: 100%;
            border: none;
            border-radius: 5px;
            background: #0B1015;
            outline: none;
            color: var(--text-color);
            border: 2px solid #0B1015;
            font-size: 17px;
        }

        .calculation {
            display: flex;
            align-items: center;
        }

        .calculation .caculationbtn {
            width: 30%;
        }

        .calculation .caculationbtn button {
            color: #0B1015;
            margin: 50px 0px 0px 0px;
            padding: 15px 10px;
            border-radius: 7px;
            background: var(--btn-color);
            overflow: hidden;
            position: relative;
            cursor: pointer;
            border: none;
            width: 100%;
            font-size: 20px;
        }

        .calculation .caculationbtn span {
            display: inline-block;
            transform: translatex(+1000%);
            font-size: 20px;
            font-weight: 800;
            transition: transform 0.3s ease;
        }

        .calculation .caculationbtn:hover span {
            transform: translateX(0);
        }

        .calculation .input input {
            padding: 15px 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
            outline: none;
            background: #0B1015;
            border: 2px solid #0B1015;
            color: var(--text-color);
        }

        .thirdcontainer .plans {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .plans .grid .minamount h3 {
            font-weight: 500;
            font-size: 20px;
        }

        .thirdcontainer .thirdheader h1 {
            font-size: 30px;
            color: var(--text-color);
            font-weight: 400;
            padding: 20px;
        }

        .thirdcontainer .thirdheader {
            margin: -80px 0px 20px 0px;
            padding: 20px;
        }

        .secondsection .imagesource {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 0px 0px 0px;
        }

        .thirdsection {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #1C1C1C;
            text-align: center;
            padding: 100px 0px 50px 0px;
        }

        .fourthcontainer .fourthbody {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 100px 0px 0px 0px;
        }

        .fourthbody .workBox .usericon i {
            background-color: #060606;
            box-shadow: inset 0 0px 20px var(--main-color);
            padding: 30px 30px;
            border: 10px solid #0B1015;
            border-radius: 50%;
            position: absolute;
            top: -30%;
            right: 60%;
            z-index: 99;
            color: var(--main-color);
            font-size: 30px;
            font-weight: 700;
        }

        .fourthcontainer .fourthbody .workBox {
            width: 350px;
            height: auto;
            box-shadow: inset 0 0px 20px var(--main-color);
            border: 2px solid var(--main-color);
            border-radius: 7px;
            padding: 30px 30px 30px 50px;
            color: #BAC5C5;
            font-size: 15px;
            z-index: 1;
            position: relative;
            margin: 10px 0px 0px 0px;

        }

        .fifthcontainer {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 60px;
        }

        .fifthsection {
            padding: 100px 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #1C1C1C;
        }

        .fifthsection .abouttext {
            text-align: left;
        }

        .aboutImage {
            display: none;
        }

        .abouttext button {
            padding: 10px 15px;
            background: var(--btn-color);
            border-radius: 7px;
            border: none;
            font-size: 20px;
            color: #0B1015;
            width: 50%;
            margin: 20px 0px 0px 0px;
            position: relative;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0);
            transition: box-shadow 0.3s ease-in-out;
        }

        .lineone,
        .linetwo,
        .linefour,
        .linefive {
            display: none;
        }

        .linesix,
        .lineseven,
        .linenine,
        .lineten {
            display: none;
        }

        .middleline,
        .middle2line {
            display: none;
        }

        .connector {
            display: none;
        }

        .WCUsheader h2 {
            font-size: 20px;
        }

        .mainconnection {
            display: flex;
            align-items: center;
        }

        .firstcon {
            margin: 20px 0px 0px 0px;
        }

        .connection2 {
            margin: 0px 0px 0px 0px;

        }

        .seventhcontainer {
            padding: 10px 10px;

        }

        .questiontext h4 {
            font-size: 15px;
            font-weight: 400;

        }

        .answers.open {
            max-height: 500px;
            padding: 5px 15px;
        }

        .faqcontainer {
            padding: 0px;
        }

        .generaltable {
            overflow-x: auto;
            white-space: nowrap;
            scrollbar-width: thin;
        }

        .table {
            padding: 5px;
        }

        .transhistory {
            display: none;
        }

        table {
            width: 100%;
            min-width: 500px;
            border-collapse: collapse;
        }

        .mainhistory {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100% !important;
            gap: 100px;
        }

        .history {
            display: flex;
            align-items: center;
            width: 100%;
            justify-content: space-between;

        }

        .tableheader {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .tableheader h1 {
            font-size: 20px;
        }

        .ratecontaniner .header h1 {
            font-size: 20px;
        }

        .ninthsection {
            display: none;
        }

        .blogsection {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 0px 10px;
        }

        .blogparagraph {
            width: 100%;
        }

        .blogheader h2 {
            font-size: 30px;
            font-weight: 500;
            color: var(--semi-textcolor);
        }

        .blogs {
            margin: 10px 0px;
            width: 50%;
        }

        .blogtexts a {
            text-decoration: none;
            color: var(--semi-textcolor);
            cursor: pointer;
            font-size: 12px;
        }

        .footerheader h2 {
            color: var(--semi-textcolor);
            font-size: 25px;
            font-weight: 600;
        }

        .footertext p {
            margin: 10px 0px 0px 0px;
            width: 90%;
            color: var(--text-color);
        }

        .footerinput {
            display: flex;
            align-items: center;
            width: 100%;
            height: auto;
        }

        .generalfooterinput {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 50px 0px;
        }

        .mainfooterinput {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .footerinput input {
            background: transparent;
            border: .5px solid rgb(2, 22, 34);
            outline: none;
            color: #BAC5C5;
            width: 100%;
            height: 50px;
            padding: 0px 0px 0px 10px;
            border-radius: 7px 0px 0px 7px;
        }

        .footerinput button {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            background: var(--btn-color);
            border: none;
            width: 100px;
            height: 50px;
            border-radius: 0px 7px 7px 0px;
            position: relative;
            overflow: hidden;
            cursor: pointer;

        }


        .footerinput input::placeholder {
            font-size: 14px;
        }

        .footerinput .button .icon i {
            font-size: 10px;
        }

        .footerinput .button .text h4 {
            font-size: 10px;
        }

        .footeremailtext a {
            text-decoration: none;
        }

        .generalfooterinput {
            align-items: center;
            justify-content: right;
            margin: 50px 0px;
        }

        .generalcontact {
            display: flex;
            flex-direction: column;
        }

        .footercontact .contacticon .icon {
            border: 2px solid rgb(2, 32, 51);
            padding: 6px 8px;
            background-color: #060606;
            border-radius: 5px;
        }

        .footercontact .contacticon .icon a {
            color: var(--text-color);
        }

        .footercontact {
            display: flex;
            flex-direction: column;
        }

        .footerlink {
            display: none;
        }

        .generalcontact .contacts {
            display: flex;
            flex-direction: column;
        }

        .footerlogo {
            margin: -100px 0px 0px 0px;
        }

        .footer {
            padding: 50px 0px;
            background-color: #060606;
            height: auto;
        }




    }

    @media (max-width: 1030px) {

        body {
            overflow-x: hidden;
            z-index: 0;
            position: relative;
        }

        .first-nav {
            display: none;
        }

        .firstcontainer {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            height: 100vh;
            width: 100%
        }

        .maincontainer .firstcontainer .textside {
            text-align: center;
            margin: 0px 0px 20px 0px;
        }

        .maincontainer .firstcontainer .textside h1 {
            color: var(--text-color);
            font-size: 40px;
            font-weight: 400;
        }

        .firstcontainer .mainimage {
            display: none;
        }

        .firstcontainer .subimage {
            display: none;
        }

        .firstsection {
            padding: 100px 10px;
        }

        .hometext .homebtn {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .homeinvestments {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: var(--text-color);
            gap: 20px;
            margin: 30px 0px 0px 0px;
        }

        .totalinvestors {
            border-right: none;
            border-left: 1px solid var(--text-color);
            padding: 0px 10px;
        }

        .secondsection {
            padding: 30px 10px;
        }

        .calculation label {
            display: flex;
            flex-direction: column;
            margin: 10px 0px;
        }

        .calculation .options select {
            padding: 15px 10px;
            margin: 0px 0px 0px 0px;
            width: 100%;
            border: none;
            border-radius: 5px;
            background: #0B1015;
            outline: none;
            color: var(--text-color);
            border: 2px solid #0B1015;
            font-size: 17px;
        }

        .calculation {
            display: flex;
            align-items: center;
        }

        .calculation .caculationbtn {
            width: 30%;
        }

        .calculation .caculationbtn button {
            color: #0B1015;
            margin: 50px 0px 0px 0px;
            padding: 15px 10px;
            border-radius: 7px;
            background: var(--btn-color);
            overflow: hidden;
            position: relative;
            cursor: pointer;
            border: none;
            width: 100%;
            font-size: 20px;
        }

        .calculation .caculationbtn span {
            display: inline-block;
            transform: translatex(+1000%);
            font-size: 20px;
            font-weight: 800;
            transition: transform 0.3s ease;
        }

        .calculation .caculationbtn:hover span {
            transform: translateX(0);
        }

        .calculation .input input {
            padding: 15px 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
            outline: none;
            background: #0B1015;
            border: 2px solid #0B1015;
            color: var(--text-color);
        }

        .thirdcontainer .plans {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .plans .grid .minamount h3 {
            font-weight: 500;
            font-size: 20px;
        }

        .thirdcontainer .thirdheader h1 {
            font-size: 30px;
            color: var(--text-color);
            font-weight: 400;
            padding: 20px;
        }

        .thirdcontainer .thirdheader {
            margin: -80px 0px 20px 0px;
            padding: 20px;
        }

        .secondsection .imagesource {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 0px 0px 0px;
        }

        .thirdsection {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #1C1C1C;
            text-align: center;
            padding: 100px 0px 50px 0px;
        }

        .fourthcontainer .fourthbody {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 100px 0px 0px 0px;
        }

        .fourthbody .workBox .usericon i {
            background-color: #060606;
            box-shadow: inset 0 0px 20px var(--main-color);
            padding: 30px 30px;
            border: 10px solid #0B1015;
            border-radius: 50%;
            position: absolute;
            top: -30%;
            right: 60%;
            z-index: 99;
            color: var(--main-color);
            font-size: 30px;
            font-weight: 700;
        }

        .fourthcontainer .fourthbody .workBox {
            width: 350px;
            height: auto;
            box-shadow: inset 0 0px 20px var(--main-color);
            border: 2px solid var(--main-color);
            border-radius: 7px;
            padding: 30px 30px 30px 50px;
            color: #BAC5C5;
            font-size: 15px;
            z-index: 1;
            position: relative;
            margin: 10px 0px 0px 0px;

        }

        .fifthcontainer {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 60px;
        }

        .fifthsection {
            padding: 100px 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #1C1C1C;
        }

        .fifthsection .abouttext {
            text-align: left;
        }

        .aboutImage {
            display: none;
        }

        .abouttext button {
            padding: 10px 15px;
            background: var(--btn-color);
            border-radius: 7px;
            border: none;
            font-size: 20px;
            color: #0B1015;
            width: 50%;
            margin: 20px 0px 0px 0px;
            position: relative;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0);
            transition: box-shadow 0.3s ease-in-out;
        }

        .lineone,
        .linetwo,
        .linefour,
        .linefive {
            display: none;
        }

        .linesix,
        .lineseven,
        .linenine,
        .lineten {
            display: none;
        }

        .middleline,
        .middle2line {
            display: none;
        }

        .connector {
            display: none;
        }

        .WCUsheader h2 {
            font-size: 20px;
        }

        .mainconnection {
            display: flex;
            align-items: center;
        }

        .firstcon {
            margin: 20px 0px 0px 0px;
        }

        .connection2 {
            margin: 0px 0px 0px 0px;

        }

        .seventhcontainer {
            padding: 10px 10px;

        }

        .questiontext h4 {
            font-size: 15px;
            font-weight: 400;

        }

        .answers.open {
            max-height: 500px;
            padding: 5px 15px;
        }

        .faqcontainer {
            padding: 0px;
        }

        .generaltable {
            overflow-x: auto;
            white-space: nowrap;
            scrollbar-width: thin;
        }

        .table {
            padding: 5px;
        }

        .transhistory {
            display: none;
        }

        table {
            width: 100%;
            min-width: 500px;
            border-collapse: collapse;
        }

        .mainhistory {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100% !important;
            gap: 100px;
        }

        .history {
            display: flex;
            align-items: center;
            width: 100%;
            justify-content: space-between;

        }

        .tableheader {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .tableheader h1 {
            font-size: 20px;
        }

        .ratecontaniner .header h1 {
            font-size: 20px;
        }

        .ninthsection {
            display: none;
        }

        .blogsection {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 0px 10px;
        }

        .blogparagraph {
            width: 100%;
        }

        .blogheader h2 {
            font-size: 30px;
            font-weight: 500;
            color: var(--semi-textcolor);
        }

        .blogs {
            margin: 10px 0px;
            width: 50%;
        }

        .blogtexts a {
            text-decoration: none;
            color: var(--semi-textcolor);
            cursor: pointer;
            font-size: 12px;
        }

        .footerheader h2 {
            color: var(--semi-textcolor);
            font-size: 25px;
            font-weight: 600;
        }

        .footertext p {
            margin: 10px 0px 0px 0px;
            width: 90%;
            color: var(--text-color);
        }

        .footerinput {
            display: flex;
            align-items: center;
            width: 100%;
            height: auto;
        }

        .generalfooterinput {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 50px 0px;
        }

        .mainfooterinput {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .footerinput input {
            background: transparent;
            border: .5px solid rgb(2, 22, 34);
            outline: none;
            color: #BAC5C5;
            width: 100%;
            height: 50px;
            padding: 0px 0px 0px 10px;
            border-radius: 7px 0px 0px 7px;
        }

        .footerinput button {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            background: var(--btn-color);
            border: none;
            width: 100px;
            height: 50px;
            border-radius: 0px 7px 7px 0px;
            position: relative;
            overflow: hidden;
            cursor: pointer;

        }


        .footerinput input::placeholder {
            font-size: 14px;
        }

        .footerinput .button .icon i {
            font-size: 10px;
        }

        .footerinput .button .text h4 {
            font-size: 10px;
        }

        .footeremailtext a {
            text-decoration: none;
        }

        .generalfooterinput {
            align-items: center;
            justify-content: right;
            margin: 50px 0px;
        }

        .generalcontact {
            display: flex;
            flex-direction: column;
        }

        .footercontact .contacticon .icon {
            border: 2px solid rgb(2, 32, 51);
            padding: 6px 8px;
            background-color: #060606;
            border-radius: 5px;
        }

        .footercontact .contacticon .icon a {
            color: var(--text-color);
        }

        .footercontact {
            display: flex;
            flex-direction: column;
        }

        .footerlink {
            display: none;
        }

        .generalcontact .contacts {
            display: flex;
            flex-direction: column;
        }

        .footerlogo {
            margin: -100px 0px 0px 0px;
        }

        .footer {
            padding: 50px 0px;
            background-color: #060606;
            height: auto;
        }

    }

    @media (max-width: 600px) {

        body {
            overflow-x: hidden;
            z-index: 0;
            position: relative;
        }

        .first-nav {
            display: none;
        }

        .firstcontainer {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            height: 100vh;
            width: 100%
        }

        .maincontainer .firstcontainer .textside {
            text-align: center;
            margin: 0px 0px 20px 0px;
        }

        .maincontainer .firstcontainer .textside h1 {
            color: var(--text-color);
            font-size: 40px;
            font-weight: 400;
        }

        .firstcontainer .mainimage {
            display: none;
        }

        .firstcontainer .subimage {
            display: none;
        }

        .firstsection {
            padding: 100px 10px;
        }

        .hometext .homebtn {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .homeinvestments {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: var(--text-color);
            gap: 20px;
            margin: 30px 0px 0px 0px;
        }

        .totalinvestors {
            border-right: none;
            border-left: 1px solid var(--text-color);
            padding: 0px 10px;
        }

        .secondsection {
            padding: 30px 10px;
        }

        .calculation label {
            display: flex;
            flex-direction: column;
            margin: 10px 0px;
        }

        .calculation .options select {
            padding: 15px 10px;
            margin: 10px 0px 0px 0px;
            width: 100%;
            border: none;
            border-radius: 5px;
            background: #0B1015;
            outline: none;
            color: var(--text-color);
            border: 2px solid #0B1015;
            font-size: 17px;
        }

        .calculation {
            display: block;
        }

        .calculation .caculationbtn {
            width: 100%;
        }

        .calculation .caculationbtn button {
            color: #0B1015;
            margin: 25px 0px 0px 0px;
            padding: 15px 10px;
            border-radius: 7px;
            background: var(--btn-color);
            overflow: hidden;
            position: relative;
            cursor: pointer;
            border: none;
            width: 100%;
            font-size: 20px;
        }

        .calculation .caculationbtn span {
            display: inline-block;
            transform: translatex(+1000%);
            font-size: 20px;
            font-weight: 800;
            transition: transform 0.3s ease;
        }

        .calculation .caculationbtn:hover span {
            transform: translateX(0);
        }

        .calculation .input input {
            padding: 15px 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
            outline: none;
            background: #0B1015;
            border: 2px solid #0B1015;
            color: var(--text-color);
        }

        .thirdcontainer .plans {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 20px;
        }

        .plans .grid .minamount h3 {
            font-weight: 500;
            font-size: 20px;
        }

        .thirdcontainer .thirdheader h1 {
            font-size: 30px;
            color: var(--text-color);
            font-weight: 400;
            padding: 20px;
        }

        .thirdcontainer .thirdheader {
            margin: -80px 0px 20px 0px;
            padding: 20px;
        }

        .secondsection .imagesource {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 0px 0px 0px;
        }

        .thirdsection {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #1C1C1C;
            text-align: center;
            padding: 100px 0px 50px 0px;
        }

        .fourthcontainer .fourthbody {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 100px 0px 0px 0px;
        }

        .fourthbody .workBox .usericon i {
            background-color: #060606;
            box-shadow: inset 0 0px 20px var(--main-color);
            padding: 30px 30px;
            border: 10px solid #0B1015;
            border-radius: 50%;
            position: absolute;
            top: -30%;
            right: 60%;
            z-index: 99;
            color: var(--main-color);
            font-size: 30px;
            font-weight: 700;
        }

        .fourthcontainer .fourthbody .workBox {
            width: 350px;
            height: auto;
            box-shadow: inset 0 0px 20px var(--main-color);
            border: 2px solid var(--main-color);
            border-radius: 7px;
            padding: 30px 30px 30px 50px;
            color: #BAC5C5;
            font-size: 15px;
            z-index: 1;
            position: relative;
            margin: 10px 0px 0px 0px;

        }

        .fifthcontainer {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 60px;
        }

        .fifthsection {
            padding: 100px 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #1C1C1C;
        }

        .fifthsection .abouttext {
            text-align: left;
        }

        .aboutImage {
            display: none;
        }

        .abouttext button {
            padding: 10px 15px;
            background: var(--btn-color);
            border-radius: 7px;
            border: none;
            font-size: 20px;
            color: #0B1015;
            width: 50%;
            margin: 20px 0px 0px 0px;
            position: relative;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0);
            transition: box-shadow 0.3s ease-in-out;
        }

        .lineone,
        .linetwo,
        .linefour,
        .linefive {
            display: none;
        }

        .linesix,
        .lineseven,
        .linenine,
        .lineten {
            display: none;
        }

        .middleline,
        .middle2line {
            display: none;
        }

        .connector {
            display: none;
        }

        .WCUsheader h2 {
            font-size: 20px;
        }

        .mainconnection {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .firstcon {
            margin: 20px 0px 0px 0px;
        }

        .connection2 {
            margin: -100px 0px 0px 0px;

        }

        .seventhcontainer {
            padding: 10px 10px;

        }

        .questiontext h4 {
            font-size: 15px;
            font-weight: 400;

        }

        .answers.open {
            max-height: 500px;
            padding: 5px 15px;
        }

        .faqcontainer {
            padding: 0px;
        }

        .generaltable {
            overflow-x: auto;
            white-space: nowrap;
            scrollbar-width: thin;
        }

        .table {
            padding: 5px;
        }

        .transhistory {
            display: none;
        }

        table {
            width: 100%;
            min-width: 500px;
            border-collapse: collapse;
        }

        .mainhistory {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100% !important;
            gap: 100px;
        }

        .history {
            display: flex;
            align-items: center;
            width: 100%;
            justify-content: space-between;

        }

        .tableheader {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .tableheader h1 {
            font-size: 20px;
        }

        .ratecontaniner .header h1 {
            font-size: 20px;
        }

        .ninthsection {
            display: none;
        }

        .blogsection {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 0px 10px;
        }

        .blogparagraph {
            width: 100%;
        }

        .blogheader h2 {
            font-size: 30px;
            font-weight: 500;
            color: var(--semi-textcolor);
        }

        .blogs {
            margin: 10px 0px;
            width: 100%;
        }

        .blogtexts a {
            text-decoration: none;
            color: var(--semi-textcolor);
            cursor: pointer;
            font-size: 12px;
        }

        .footerheader h2 {
            color: var(--semi-textcolor);
            font-size: 25px;
            font-weight: 600;
        }

        .footertext p {
            margin: 10px 0px 0px 0px;
            width: 90%;
            color: var(--text-color);
        }

        .footerinput {
            display: flex;
            align-items: center;
            width: 100%;
            height: auto;
        }

        .generalfooterinput {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 50px 0px;
        }

        .mainfooterinput {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .footerinput input {
            background: transparent;
            border: .5px solid rgb(2, 22, 34);
            outline: none;
            color: #BAC5C5;
            width: 100%;
            height: 50px;
            padding: 0px 0px 0px 10px;
            border-radius: 7px 0px 0px 7px;
        }

        .footerinput button {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            background: var(--btn-color);
            border: none;
            width: 100px;
            height: 50px;
            border-radius: 0px 7px 7px 0px;
            position: relative;
            overflow: hidden;
            cursor: pointer;

        }


        .footerinput input::placeholder {
            font-size: 14px;
        }

        .footerinput .button .icon i {
            font-size: 10px;
        }

        .footerinput .button .text h4 {
            font-size: 10px;
        }

        .footeremailtext a {
            text-decoration: none;
        }

        .generalfooterinput {
            align-items: center;
            justify-content: right;
            margin: 50px 0px;
        }

        .generalcontact {
            display: flex;
            flex-direction: column;
        }

        .footercontact .contacticon .icon {
            border: 2px solid rgb(2, 32, 51);
            padding: 6px 8px;
            background-color: #060606;
            border-radius: 5px;
        }

        .footercontact .contacticon .icon a {
            color: var(--text-color);
        }

        .footercontact {
            display: flex;
            flex-direction: column;
        }

        .footerlink {
            display: none;
        }

        .generalcontact .contacts {
            display: flex;
            flex-direction: column;
        }

        .footerlogo {
            margin: -100px 0px 0px 0px;
        }

        .footer {
            padding: 50px 0px;
            background-color: #060606;
            height: auto;
        }


    }
</style>