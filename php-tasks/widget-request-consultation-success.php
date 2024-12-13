<?php
    header('Content-Type: text/html; charset=UTF-8');
?>
<style>
    :root {
        --color-primary: #1864ab;
        --color-primary-hover: #296eaf;
        --bg-white: #ffffff;
        --color-dark-light: rgba(0, 26, 52, 0.6);
        --color-white-rgba: rgba(255, 255, 255, 1);
        --mainBgColor: #ffffff;
        --canvasColor: var(--mainBgColor);
        --mainFont: "GTEestiPro", arial, sans-serif;
        --bodyMFont: 0.875rem;
        --fontBold: 700;
        --fontMedium: 500;
        --fontNormal: 400;
        --bodyMLine: 1.125rem;
        --mainTxtColor: #001a34;
        --scroll-webkit-scrollbar-width: 7px;
        --color-text-success: rgba(16, 196, 76, 1);
        --color-text-warning: rgba(247, 147, 0, 1);
        --color-text-danger: #eb4650;
        --color-icon-warning: rgba(247, 147, 0, 1);
        --color-icon-danger: #eb4650;
        --color-icon-success: #080;
        --color-white: #ffffff;
    }
    html {
        font-size: 100.1%;
    }
    body {
        background: var(--canvasColor);
        background-color: var(--mainBgColor);
        font-family: var(--mainFont);
        font-size: var(--bodyMFont);
        font-weight: var(--fontNormal);
        line-height: var(--bodyMLine);
        color: var(--mainTxtColor);
        width: 100%;
        text-transform: none;
        -webkit-text-size-adjust: none;
        -moz-text-size-adjust: none;
        text-size-adjust: none;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        word-spacing: normal;
        letter-spacing: normal;
    }
    *::after,
    *::before,
    :after,
    :before {
        box-sizing: border-box;
    }
    body,
    div,
    html,
    span {
        margin: 0;
        padding: 0;
    }
    .mb-8-a {
        margin-bottom: 8px;
    }
    .mb-16-a {
        margin-bottom: 16px;
    }

    .flex-container-center {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .d-inline-flex {
        display: inline-flex;
    }
    .w-100 {
        width: 100%;
    }
    .w-100-i {
        width: 100% !important;
    }
    .min-w-auto {
        min-width: auto;
    }
    .border-radius-12 {
        border-radius: 12px;
    }

    /*#region UI KIT DS BUTTONS */
    .btn {
        -webkit-touch-callout: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background: transparent;
        border: none;
        color: inherit;
        cursor: pointer;
        display: block;
        font-size: inherit;
        font-weight: inherit;
        height: inherit;
        line-height: 0;
        margin: 0;
        padding: 0;
        position: relative;
        text-decoration: none;
        white-space: normal;
    }
    .btn-text {
        align-items: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .btn-primary {
        align-items: center;
        background-color: var(--color-primary);
        border-color: var(--color-primary);
        color: var(--color-white);
        box-sizing: border-box;
        display: inline-flex;
        font-family: var(--mainFont);
        font-size: 14px;
        font-weight: 500;
        height: inherit;
        justify-content: center;
        line-height: 18px;
        min-height: 32px;
        min-width: 96px;
        padding: 0 12px;
        text-align: center;
        transition: color 0.15s ease-in-out, background 0.15s ease-in-out, opacity 0.3s ease-in-out;
        z-index: 9999;
    }
    .btn-block {
        min-width: auto;
        width: 100% !important;
    }

    @media (hover: hover) {
        .btn-primary:hover {
            background-color: var(--color-primary-hover);
            border-color: var(--color-primary-hover);
            color: var(--color-white);
        }
    }
    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active {
        background-position: 0;
    }
    .btn-xl {
        min-height: 56px;
        min-width: 224px;
        padding: 0 24px;
    }
    /*#endregion UI KIT DS BUTTONS */

    .widget-window {
        width: inherit;
    }

    /*#region components-rich-string */
    .components-rich-string-light {
        color: var(--color-dark-light);
    }
    /*#endregion components-rich-string */

    /*#region atoms-text */
    .atoms-text {
        align-items: center;
        box-sizing: border-box;
        display: flex;
        width: 100%;
        word-break: break-word;
    }

    .atoms-text-default {
        color: var(--mainTxtAtomsTextColor);
    }
    /*#endregion atoms-text */

    /*#region typography-desktop - v 1.0.3 */
    .tsHeadline600Medium {
        line-height: 30px;
    }
    .tsHeadline600Medium {
        font-size: 27px;
        font-weight: 700;
        letter-spacing: 0.4px;
    }
    .tsBody500Medium {
        font-weight: 400;
        letter-spacing: 0.2px;
    }
    .tsBody500Medium {
        font-size: 16px;
        line-height: 24px;
    }
    /*#endregion typography-desktop - v 1.0.3 */

    /*#region ui kit ds icon button */
    .ui-kit-icon-btn-container {
        background-color: rgb(255, 255, 255);
    }

    .ui-kit-icon-btn {
        -webkit-touch-callout: none;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        align-items: center;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background: transparent;
        border: none;
        border-radius: 8px;
        box-sizing: border-box;
        color: inherit;
        cursor: pointer;
        display: inline-flex;
        font-family: var(--mainFont);
        font-size: inherit;
        font-weight: inherit;
        height: 44px;
        justify-content: center;
        margin: 0;
        min-width: 44px;
        padding: 0;
        position: relative;
        text-decoration: none;
        transition: transform 0.1s cubic-bezier(0.55, 0, 1, 0.45);
        white-space: normal;
    }
    .ui-kit-icon-btn-md {
        height: 32px;
        min-width: 32px;
    }
    .ui-kit-icon-btn-round {
        border-radius: 50%;
    }
    .ui-kit-icon-btn-theme-colors {
        background-color: rgba(204, 214, 228, 0.6);
        color: rgb(255, 255, 255);
    }
    @media (hover: hover) {
        .ui-kit-icon-btn-theme-colors:hover {
            opacity: 0.8;
        }
    }
    /*#endregion ui kit ds icon button */

    /*#region  ui-dialog ui-kit-ds-dialog */
    .ui-dialog-container {
        bottom: 0;
        left: 0;
        outline: none;
        overflow: hidden;
        position: fixed;
        top: 0;
        width: 100vw;
        /*z-index: 1200;*/
        z-index: calc(var(--z-index-popover) + 2);
    }
    .ui-dialog-bg {
        background-color: rgba(3, 8, 13, 0.24);
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
    }
    .modal-layout-container {
        /* background: #fff; */
        min-height: 100px;
        min-width: 288px;
    }
    .modal-layout-wrapper {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        width: auto;
    }
    .ui-close-dialog {
        position: absolute !important;
        z-index: 5;
    }
    .ui-dialog-wrapper {
        -ms-scroll-chaining: none;
        -webkit-overflow-scrolling: touch;
        height: 100%;
        overflow-y: auto;
        overscroll-behavior: contain;
        position: relative;
    }
    .ui-dialog-content {
        padding-right: var(--scroll-webkit-scrollbar-width);
        align-items: flex-start;
        display: flex;
        justify-content: center;
        min-height: calc(100vh - env(safe-area-inset-top, 0) - env(safe-area-inset-bottom, 0));
    }
    .ui-dialog-content-center {
        align-items: center;
    }
    .ui-dialog-content:after {
        content: "";
        display: block;
        font-size: 0;
        min-height: inherit;
    }
    .ui-dialog-content-wrapper {
        background-color: var(--bg-white);
        box-sizing: border-box;
        /* margin: 50px 0; */
        max-width: 960px;
        min-width: 340px;
        position: relative;
    }
    .ui-dialog-content-wrapper.ui-close-dialog-md {
        border-radius: var(--cardBorderRadius, var(--border-radius-xl));
        border-radius: 32px;
        padding: 10px;
    }
    .ui-close-dialog.ui-close-dialog-md {
        right: 14px;
        top: 14px;
    }

    @media (min-width: 768px){ 
        .ui-dialog-content-wrapper.ui-close-dialog-md {
            padding: 46px;
        }
        .ui-close-dialog.ui-close-dialog-md {
            right: 18px;
            top: 18px;
        }
    }
    /*#endregion ui-dialog ui-kit-ds-dialog */

    /*#region app */
    :root {
        --color-picker-bg: #fff;
        --color-picker-ui-bg: rgba(204, 214, 228, 0.6);
        --color-bg-sun: #e2db00;
        --color-bg-moon: #fff74d;
        --color-bg-star: #f1ff21;
        --bg-image-night-1: linear-gradient(#8f8d96 10%, #626262 80%);
        --bg-image-night-2: linear-gradient(#130149 10%, #550086 80%);
    }
    .wannaConsultation-container {
        max-width: 384px;
        width: 100%;
        box-sizing: border-box;
        margin: 0 auto;
        -o-object-fit: contain;
        object-fit: contain;
        padding: 35px 10px 10px;
    }

    @media (min-width: 768px) {
        .wannaConsultation-container {
            padding: 30px 10px 20px;
        }
        .zxc-time-picker-image {
            height: 9em;
        }
    }
    /*#endregion app */

    /*#region callback */
    .app-request-consultation-callback-success {
        background-color: rgba(255, 255, 255, 1);
        border-radius: 16px;
        bottom: 1rem;
        opacity: 1;
        left: 1rem;
        padding: 1.5rem;
        right: 1rem;
        top: 1rem;
    }
    .app-request-consultation-callback-content {
        box-sizing: border-box;
        -o-object-fit: contain;
        object-fit: contain;
        padding: 30px 10px 20px;
        margin: 0 auto;
    }
    .app-request-consultation-callback-content-description {
        display: flex;
        flex-direction: column;
        row-gap: 24px;
    }

    @media (min-width: 768px) {
        .app-request-consultation-callback-success {
            padding: 1rem;
        }
        .app-request-consultation-callback-content {
            padding: 10px;
        }
    }
    /*#endregion callback */
</style>
<div class="widget-window">
    <div class="found-cheaper-widget">
        <div tabindex="-1" class="ui-dialog-container">
            <div class="ui-dialog-bg"></div>
            <div class="ui-dialog-wrapper" style="overflow-y: auto">
                <div class="ui-dialog-content ui-dialog-content-center">
                    <div class="ui-dialog-content-wrapper ui-close-dialog-md">
                        <div class="ui-close-dialog ui-close-dialog-md ui-kit-icon-btn ui-kit-icon-btn-round ui-kit-icon-btn-md ui-kit-icon-btn-theme-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="ui-kit-icon-btn-svg">
                                <path fill="currentColor" d="M2.533 2.533a1.25 1.25 0 0 1 1.768 0l3.7 3.7 3.699-3.7A1.25 1.25 0 0 1 13.466 4.3L9.767 8l3.7 3.7a1.25 1.25 0 1 1-1.768 1.767L8 9.767l-3.7 3.7A1.25 1.25 0 1 1 2.534 11.7L6.233 8l-3.7-3.7a1.25 1.25 0 0 1 0-1.767Z"></path>
                            </svg>
                            <div class="ui-kit-icon-btn-container"></div>
                        </div>
                        <div class="modal-layout-container">
                            <!-- Widget -->
                            <div class="modal-layout-wrapper">
                                <div class="wannaConsultation-container">
                                    <!-- Callback Success -->
                                    <div id="app-request-consultation-callback-success" class="app-request-consultation-callback-success">
                                        <div class="app-request-consultation-callback-wrapper">
                                            <div class="app-request-consultation-callback-content">
                                                <div class="atoms-text atoms-text-default mb-8-a">
                                                    <span class="tsHeadline600Medium">Запрос отправлен</span>
                                                </div>
                                                <div class="app-request-consultation-callback-content-description">
                                                    <div class="atoms-text components-rich-string-light mb-16-a">
                                                        <span class="tsBody500Medium">Благодарим за обращение в наш интернет магазин.</span>
                                                    </div>
                                                    <div class="flex-container-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" data-name="Layer 1" width="300" height="180.058784396" viewBox="0 0 717.67004 430.74265">
                                                            <path d="M361.25422,634.29461a2.80741,2.80741,0,0,1-2.03464-4.86593l.19237-.76477q-.038-.09187-.07644-.18358a7.53909,7.53909,0,0,0-13.90673.05168c-2.27452,5.4781-5.17037,10.96553-5.8834,16.7577a22.30336,22.30336,0,0,0,.39152,7.67061,89.4194,89.4194,0,0,1-8.13413-37.13874,86.307,86.307,0,0,1,.53535-9.62829q.44349-3.93128,1.23055-7.80653a90.45569,90.45569,0,0,1,17.93812-38.33731A24.07269,24.07269,0,0,0,361.5186,549.6621a18.36288,18.36288,0,0,0,1.67-5.0179c-.48739.06393-1.83779-7.3591-1.47018-7.81452-.67924-1.03071-1.895-1.54307-2.6368-2.54885-3.68944-5.00211-8.77254-4.12872-11.42613,2.66875-5.6687,2.861-5.72357,7.60578-2.24528,12.16916,2.2129,2.90325,2.517,6.83168,4.45862,9.93984-.1998.25572-.40756.50345-.6073.75916a91.04013,91.04013,0,0,0-9.50223,15.05379,37.84589,37.84589,0,0,0-2.25945-17.5787c-2.16268-5.21725-6.21632-9.61123-9.786-14.12153-4.2878-5.41757-13.08033-3.05324-13.83575,3.81438q-.011.09975-.02141.19942.79531.44866,1.55706.95247a3.808,3.808,0,0,1-1.53533,6.92992l-.07765.012a37.88983,37.88983,0,0,0,.99876,5.66515c-4.57949,17.71009,5.30731,24.16047,19.42432,24.45023.31164.15979.61531.31957.927.47144a92.9244,92.9244,0,0,0-5.00193,23.53931,88.13549,88.13549,0,0,0,.06392,14.23066l-.024-.16778a23.28917,23.28917,0,0,0-7.95036-13.44763c-6.11822-5.0259-14.76211-6.87666-21.36259-10.9165a4.37072,4.37072,0,0,0-6.69422,4.252q.01328.08819.027.17642a25.57886,25.57886,0,0,1,2.86848,1.38225q.79533.44877,1.55706.95247a3.80809,3.80809,0,0,1-1.53533,6.93l-.07772.01194c-.05591.008-.10387.016-.15972.024a37.92262,37.92262,0,0,0,6.97545,10.92265c2.86344,15.46021,15.16195,16.927,28.31753,12.42487h.008a92.89768,92.89768,0,0,0,6.24043,18.21782h22.2928c.08-.24769.15185-.50341.22379-.75114a25.32943,25.32943,0,0,1-6.16855-.36744c1.654-2.02958,3.308-4.07513,4.962-6.10463a1.38552,1.38552,0,0,0,.10388-.11987c.839-1.03867,1.68595-2.06946,2.52491-3.10816l.00045-.00127a37.1011,37.1011,0,0,0-1.08711-9.45126Z" transform="translate(-240.82477 -224.27489)" fill="#f2f2f2" />
                                                            <path d="M826.87639,634.29461a2.80741,2.80741,0,0,0,2.03464-4.86593l-.19237-.76477q.038-.09187.07644-.18358a7.53909,7.53909,0,0,1,13.90673.05168c2.27452,5.4781,5.17037,10.96553,5.8834,16.7577a22.30336,22.30336,0,0,1-.39152,7.67061,89.4194,89.4194,0,0,0,8.13413-37.13874,86.307,86.307,0,0,0-.53535-9.62829q-.44349-3.93128-1.23055-7.80653a90.45569,90.45569,0,0,0-17.93812-38.33731A24.07267,24.07267,0,0,1,826.612,549.6621a18.36254,18.36254,0,0,1-1.67-5.0179c.48738.06393,1.83778-7.3591,1.47017-7.81452.67924-1.03071,1.895-1.54307,2.63681-2.54885,3.68943-5.00211,8.77253-4.12872,11.42612,2.66875,5.6687,2.861,5.72357,7.60578,2.24528,12.16916-2.2129,2.90325-2.51695,6.83168-4.45862,9.93984.1998.25572.40756.50345.6073.75916a91.04013,91.04013,0,0,1,9.50223,15.05379,37.84589,37.84589,0,0,1,2.25945-17.5787c2.16269-5.21725,6.21632-9.61123,9.786-14.12153,4.2878-5.41757,13.08033-3.05324,13.83575,3.81438q.011.09975.02142.19942-.79533.44866-1.55706.95247a3.808,3.808,0,0,0,1.53532,6.92992l.07765.012a37.88983,37.88983,0,0,1-.99876,5.66515c4.57949,17.71009-5.30731,24.16047-19.42432,24.45023-.31163.15979-.61531.31957-.92694.47144a92.92556,92.92556,0,0,1,5.00193,23.53931,88.13663,88.13663,0,0,1-.06393,14.23066l.024-.16778a23.28917,23.28917,0,0,1,7.95036-13.44763c6.11822-5.0259,14.76211-6.87666,21.36259-10.9165a4.37072,4.37072,0,0,1,6.69422,4.252q-.01328.08819-.027.17642a25.57816,25.57816,0,0,0-2.86849,1.38225q-.79533.44877-1.55706.95247a3.80809,3.80809,0,0,0,1.53533,6.93l.07772.01194c.05591.008.10387.016.15972.024a37.92262,37.92262,0,0,1-6.97545,10.92265c-2.86344,15.46021-15.162,16.927-28.31753,12.42487h-.008a92.897,92.897,0,0,1-6.24043,18.21782H827.435c-.08-.24769-.15184-.50341-.22379-.75114a25.32943,25.32943,0,0,0,6.16855-.36744c-1.654-2.02958-3.308-4.07513-4.962-6.10463a1.38552,1.38552,0,0,1-.10388-.11987c-.839-1.03867-1.686-2.06946-2.52491-3.10816l-.00045-.00127a37.1011,37.1011,0,0,1,1.08711-9.45126Z" transform="translate(-240.82477 -224.27489)" fill="#f2f2f2" />
                                                            <path d="M386.895,653.69939h35.97354c6.1526-20.71624.03286-69.67537,8.14252-89.68646,15.55874-38.36872,35.43533-78.85282,72.53425-97.5874,15.84013-7.99951,33.11135-11.124,50.74951-10.95382,24.36562.231,49.41629,6.77167,72.35082,15.4399,9.38173,3.53784,18.67782,7.42815,27.93727,11.40364,34.885,14.99008,69.39075,31.31745,106.9055,35.73059,47.47141,5.5802,103.28488-15.65873,116.25051-61.407,9.89551-35.02544-7.92615-71.38816-26.6163-102.66918-18.69007-31.28094-39.58192-64.75027-36.16921-100.96711.01217-.12155.02441-.25533.0489-.37688,1.28432-13.00842,9.05145-22.3572,19.90108-28.35078H787.6643c-.62376,33.78536,18.92255,63.60722,36.51181,93.05238,18.69007,31.26885,36.51174,67.64374,26.6163,102.66918-12.9657,45.7361-120.32735-7.87608-167.79876-13.46852-13.40595-1.56828,7.88949,4.01192-4.8927,0-20.04785-6.28542-22.27039,51.36316-41.78,42.90159-12.14612-5.27634-24.30448-10.51617-36.62186-15.1724-5.10062-1.93306-10.31136-3.7445-15.58324-5.42222-.01224,0-.01224,0-.02448-.01217-35.39868-11.20908-74.11212-15.57362-106.8198.63221-.22017.10937-.45257.21882-.67281.3282-37.09884,18.72241-56.97543,59.2065-72.53425,97.57523C391.20889,559.077,393.231,620.24223,386.895,653.69939Z" transform="translate(-240.82477 -224.27489)" fill="#f2f2f2" />
                                                            <circle cx="346.2124" cy="263.14042" r="165.22325" fill="#fff" />
                                                            <path d="M586.56531,653.69939C423.09348,657.4548,419.509,579.791,419.509,487.41469c0-92.37408,75.153-167.52705,167.52817-167.52705s167.52818,75.153,167.52818,167.52705C754.56531,579.791,678.94051,653.69939,586.56531,653.69939Zm.47182-329.202c-89.834,0-161.40566,73.0972-162.91848,162.91736-1.4071,83.544,87.34448,187.795,162.91846,162.91958,40.5282-44.63489,155.11224-92.70923,162.91852-162.91958C759.88244,398.132,676.87114,324.49734,587.03713,324.49734Z" transform="translate(-240.82477 -224.27489)" fill="#3f3d56" />
                                                            <path d="M564.49731,573.40632a18.37348,18.37348,0,0,1-14.70157-7.353l-45.07543-60.10157a18.37838,18.37838,0,1,1,29.40612-22.0531l29.48989,39.31686,75.741-113.60995a18.37916,18.37916,0,0,1,30.58477,20.38984L579.79118,565.22166a18.38663,18.38663,0,0,1-14.78233,8.17868C564.83833,573.40333,564.66782,573.40632,564.49731,573.40632Z" transform="translate(-240.82477 -224.27489)" fill="#f2f2f2" />
                                                            <path d="M240.82477,653.82754a1.18647,1.18647,0,0,0,1.19007,1.19h715.29a1.19,1.19,0,1,0,0-2.38h-715.29A1.18651,1.18651,0,0,0,240.82477,653.82754Z" transform="translate(-240.82477 -224.27489)" fill="#ccc" />
                                                            <polygon points="451.72 417.887 442.046 417.887 437.444 380.57 451.723 380.571 451.72 417.887" fill="#ffb6b6" />
                                                            <path d="M692.88615,652.25464l-29.75045-.00112v-.37625a11.58034,11.58034,0,0,1,11.5797-11.57952h.00072l5.4343-4.12274,10.13921,4.12337,2.597.00009Z" transform="translate(-240.82477 -224.27489)" fill="#2f2e41" />
                                                            <polygon points="409.66 371.639 400.724 375.345 382.177 342.638 395.367 337.169 409.66 371.639" fill="#ffb6b6" />
                                                            <path d="M654.666,605.10608l-27.4814,11.39569-.14413-.34754a11.58034,11.58034,0,0,1,6.26051-15.13212l.00066-.00027,3.44042-5.89,10.94532-.07527,2.39894-.99477Z" transform="translate(-240.82477 -224.27489)" fill="#2f2e41" />
                                                            <path d="M703.60706,429.88431,634.949,437.05755l-9.18415,30.9327L593.959,519.10356s22.19352,37.35431,20.10975,36.9474,2.08141,9.77544,4.99882,9.18427,5.95114,6.048,3.93428,7.22839,6.075,11.16148,6.075,11.16148l12.36745-11.10062c2.63064-19.84259-.54767-37.5025-11.87134-52.10187l35.43311-38.25276,6.71872-2.78791h0l5.33346,141.94681,19.72672.324c5.44319-28.001,8.17765-53.20264,3.92306-71.181,0,0,.61121-54.00878,2.9441-53.41821s.35522-6.44533.35522-6.44533-2.04311-5.99228.46727-8.47819.94283-17.10681.94283-17.10681C709.56529,451.18649,708.31675,439.76183,703.60706,429.88431Z" transform="translate(-240.82477 -224.27489)" fill="#2f2e41" />
                                                            <path d="M650.81656,315.73317l18.9806-4.91844,8.86-12.22,21.0413,2.58668,4.47906,16.66817,14.9797,8.69511s-8.27947,87.57154-6.31006,92.38,9.03083,4.41151,3.00012,10.61-6.82952,3.70179-5.43011,10.45013,11.60059,13.89007,0,13.81921-81.6006-1.07087-79.6006-9.07087,1.96851-5.9685,4.98426-10.98425,5.0454-2.21287,4.03057-9.61431-.01483-12.40144-.01483-16.40144,3.3506-40.34856,3.3506-40.34856Z" transform="translate(-240.82477 -224.27489)" fill="#e6e6e6" />
                                                            <circle cx="448.30022" cy="49.76351" r="22.29759" fill="#ffb6b6" />
                                                            <path d="M665.761,260.54392c1.9577,1.58218,1.5097,9.27681,3.69127,8.02262s2.63553-3.50015,5.1476-3.5237a8.22527,8.22527,0,0,1,5.41668,2.4512c.26741.24165.52174.495.76872.74549.226-.07921.449-.151.68382-.20986a7.08488,7.08488,0,0,1,5.19618.73165,6.95153,6.95153,0,0,0-3.95779,1.59587c.47948.53741.96621,1.07776,1.47774,1.57719,4.27031,4.18489,13.02635-.27172,18.91376-1.27734-4.90352,5.354-3.93673,8.34287-2.71726,15.49909l.0051.39093c.25083-1.65034,5.53628-1.56808,4.665.62174a28.15028,28.15028,0,0,1-4.07379,5.98859c7.20187-4.98919,13.01589-11.86644,14.30056-20.17385.26377-1.7467.77842-3.52883.28077-5.23186a4.01217,4.01217,0,0,0-3.832-3.05507A14.78354,14.78354,0,0,0,693.54552,246.048a56.49984,56.49984,0,0,0-6.83938,2.952,12.29375,12.29375,0,0,1-7.24377,1.2269c-1.54693-.31955-3.11368-1.12051-4.63-.667-1.75693.52692-2.51211,2.38246-3.21641,4.17371a7.07691,7.07691,0,0,1,3.29711,2.48709,6.92471,6.92471,0,0,0-4.26009-.1731.43242.43242,0,0,0-.07579.02057C668.98635,258.91875,668.89427,259.61774,665.761,260.54392Z" transform="translate(-240.82477 -224.27489)" fill="#2f2e41" />
                                                            <path d="M673.11347,304.84175c-11.42071-.91945-21.84882,7.81481-26.60321,18.23948s-5.06584,22.25071-5.29663,33.70605l-.71739,35.60854c-.10616,5.26925-.21234,10.53942-.47487,15.80318a77.26919,77.26919,0,0,1-1.92322,15.2123c-2.32856,9.16483-7.45061,17.33176-12.49784,25.32813a342.46661,342.46661,0,0,0,39.35687,9.39941c6.63833-21.47143,13.3526-43.55978,11.72065-65.97466-.86356-11.8611-4.05373-23.44151-5.26637-35.272-1.71744-16.75527.55885-33.634,2.83092-50.32311" transform="translate(-240.82477 -224.27489)" fill="#3f3d56" />
                                                            <path d="M700.836,306.8445c11.31237,1.81894,19.36805,12.77972,21.51088,24.03522s-.36294,22.81721-2.85906,33.99967q-3.87954,17.38016-7.7591,34.76031c-1.14817,5.14373-2.29652,10.28836-3.29149,15.4639-.96657,5.02779,3.08172,11.47615,3.12806,16.59579.08557,9.45564-1.75062,17.24335,1.25333,26.20954a342.46592,342.46592,0,0,1-40.46314-.21555c-1.34962-22.43364-2.62649-45.48459,4.28164-66.87074,3.65552-11.31675,9.50443-21.80833,13.49178-33.01246,5.6472-15.86815,7.44422-32.80461,9.2003-49.55587" transform="translate(-240.82477 -224.27489)" fill="#3f3d56" />
                                                            <path d="M708.37724,468.4959a6.48017,6.48017,0,0,1,2.2432-8.75562,6.21606,6.21606,0,0,1,.92551-.44679l-1.44243-49.11577,15.62627-3.97739L719.771,463.42225a6.4622,6.4622,0,0,1-2.82961,7.36445,6.18428,6.18428,0,0,1-8.47911-2.14374Q708.41874,468.57,708.37724,468.4959Z" transform="translate(-240.82477 -224.27489)" fill="#ffb6b6" />
                                                            <path d="M707.2365,326.4663s10.90751-9.22413,20.0858,9.21932,4.04923,60.57764,2.75719,62.82636-2.08039-.88383-1.37283,5.1103c.57547,4.875-2.84614,4.26527-1.61876,5.30556,3.2365,2.74318-5.8266,3.05552-1.172,5.47258s-16.17825,2.86969-16.17825,2.86969-2.51965-1.7996-.76967-8.58563c.9829-3.81144,3.44377-5.20575.819-6.96947s2.71136-7.21624,2.715-8.41264-8.32057-27.36332-8.32057-27.36332Z" transform="translate(-240.82477 -224.27489)" fill="#3f3d56" />
                                                            <path d="M616.97678,553.67405a18.37353,18.37353,0,0,1-14.70157-7.353l-45.07543-60.10157a18.37838,18.37838,0,1,1,29.40612-22.0531l29.48989,39.31685,75.741-113.61a18.37915,18.37915,0,1,1,30.58476,20.38984l-90.15086,135.2263a18.38665,18.38665,0,0,1-14.78234,8.17867C617.3178,553.67105,617.14729,553.67405,616.97678,553.67405Z" transform="translate(-240.82477 -224.27489)" fill="var(--color-text-success)" />
                                                            <path d="M651.33681,459.96439a6.48015,6.48015,0,0,0-1.75587-8.86621,6.21784,6.21784,0,0,0-.89941-.49726l4.1547-48.961L637.45366,396.805l2.78725,57.46379a6.46219,6.46219,0,0,0,2.41828,7.50958,6.18429,6.18429,0,0,0,8.58463-1.67185Q651.29128,460.0361,651.33681,459.96439Z" transform="translate(-240.82477 -224.27489)" fill="#ffb6b6" />
                                                            <path d="M660.3391,318.31573s-10.381-9.81286-20.56461,8.09515-7.391,60.26128-6.22519,62.578,2.12606-.7675,1.0883,5.17836c-.844,4.8358,2.60606,4.41605,1.32307,5.38692-3.38316,2.56012,5.64883,3.37286.8677,5.529s15.99493,3.75942,15.99493,3.75942,2.61526-1.65759,1.243-8.53c-.77075-3.85993-3.1508-5.38811-.43259-7.00407s-2.3084-7.35506-2.24591-8.54984,9.82013-26.86165,9.82013-26.86165Z" transform="translate(-240.82477 -224.27489)" fill="#3f3d56" />
                                                        </svg>
                                                    </div>
                                                    <div class="atoms-text components-rich-string-light mb-16-a">
                                                        <span class="tsBody500Medium">Ваш запрос успешно отправлен. Мы свяжемся с Вами в указанное Вами время.</span>
                                                    </div>
                                                    <div class="d-inline-flex w-100 app-request-consultation-close-callback-success">
                                                        <div class="tj6 d-inline-flex min-w-auto w-100-i">
                                                            <button tabindex="0" type="button" class="btn btn-block border-radius-12">
                                                                <span class="btn-primary btn-xl btn-block border-radius-12">
                                                                    <span class="btn-text">Понятно</span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / Callback Success -->
                                </div>
                            </div>
                            <!-- / Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>