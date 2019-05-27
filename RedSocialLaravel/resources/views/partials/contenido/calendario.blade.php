
<style>
html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed,
    figure, figcaption, footer, header, hgroup,
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
        margin: 0;
        padding: 0;
        border: 0;
        vertical-align: baseline;
    }
    body {
        font-size: 100%;
    }
    /* HTML5 display-role reset for older browsers */
    article, aside, details, figcaption, figure,
    footer, header, hgroup, menu, nav, section {
        display: block;
    }
    body {
        line-height: 1.5;
    }
    ol, ul {
        list-style: none;
    }
    blockquote, q {
        quotes: none;
    }
    blockquote:before, blockquote:after,
    q:before, q:after {
        content: '';
        content: none;
    }
    #calendar table {
        border-spacing: 2px;
    }
    .clearfix:before,
    .clearfix:after {
        content: " "; /* 1 */
        display: table; /* 2 */
    }

    .clearfix:after {
        clear: both;
    }
    /**
     * For IE 6/7 only
     * Include this rule to trigger hasLayout and contain floats.
     */
    .clearfix {
        *zoom: 1;
    }
    a, a:hover {
        text-decoration: none;
    }
    .img-responsive {
        max-width: 100%;
        height: auto;
    }

    body{
        font-family: Arial, Helvetica, sans-serif;
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none;
    }

    .elegant-calencar {
        width: 12em;
        height: 10em;
        border: 1px solid #c9c9c9;
        -webkit-box-shadow: 0 0 5px #c9c9c9;
        box-shadow: 0 0 5px #c9c9c9;
        text-align: center;
        margin: auto;
        position: relative;
    }

    #header {
        font-family: 'HelveticaNeue-UltraLight', 'Helvetica Neue UltraLight', 'Helvetica Neue', Arial, Helvetica, sans-serif;
        height: 10em;
        background-color: #2a3246;
        margin-bottom: 1em;
    }

    .pre-button, .next-button {
        margin-top: 2em;
        font-size: 1em;
        -webkit-transition: -webkit-transform 0.5s;
        transition: transform 0.5s;
        cursor: pointer;
        width: 1em;
        height: 1em;
        line-height: 1em;
        color: #e66b6b;
        border-radius: 50%;
    }

    .pre-button:hover, .next-button:hover {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
    }

    .pre-button:active,.next-button:active{
        -webkit-transform: scale(0.7);
        -ms-transform: scale(0.7);
        transform: scale(0.7);
    }

    .pre-button {
        float: left;
        margin-left: 0.5em;
    }

    .next-button {
        float: right;
        margin-right: 0.5em;
    }

    .head-info {
        float: left;
        width: 8em;
    }

    .head-day {
        margin-top: 30px;
        font-size: 2em;
        line-height: 1;
        color: #fff;
    }

    .head-month {
        margin-top: 18px;
        font-size: 1em;
        line-height: 1;
        color: #fff;
    }

    #calendar {
        width: 90%;
        margin: 0 auto;
    }

    #calendar tr {
        height: 2em;
        line-height: 2em;

    }

    #calendar thead tr {
        color: #e66b6b;
        font-weight: 800;
        text-transform: uppercase;
        font-size: 20px;

    }

    #calendar th {
        padding: 0.35em;
    }

    #calendar tbody tr {
        color: #252a25;
    }

    #calendar tbody td{
        width: 14%;
        border-radius: 50%;
        cursor: pointer;
        -webkit-transition:all 0.2s ease-in;
        transition:all 0.2s ease-in;
        font-size: 15px;
    }

    #calendar tbody td:hover, .selected {
        color: #fff;
        background-color: #2a3246;
        border: none;
        font-size: 11px;
    }

    #calendar tbody td:active {
        -webkit-transform: scale(0.7);
        -ms-transform: scale(0.7);
        transform: scale(0.7);
    }

    #today {
        background-color: #e66b6b;
        color: #fff;
        font-family: serif;
        border-radius: 50%;
    }

    #disabled {
        cursor: default;
        background: #fff;
    }

    #disabled:hover {
        background: #fff;
        color: #c9c9c9;
    }

    #reset {
        display: block;
        position: absolute;
        right: 0.3em;
        top: 0.4em;
        z-index: 999;
        color: #fff;
        font-family: serif;
        cursor: pointer;
        padding: 0 0.4em;
        height: 1.45em;
        border: 0.1em solid #fff;
        border-radius: 4px;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
        font-size: 0.8em;

    }

    #reset:hover {
        color: #e66b6b;
        border-color: #e66b6b;
    }

    #reset:active{
        -webkit-transform: scale(0.8);
        -ms-transform: scale(0.8);
        transform: scale(0.8);
    }

    .contenidoCalendar{
        margin-left: -5em;
    }

    </style>

    <script src="{{ asset('js/calendario.js') }}"></script>
<div class="contenidoCalendar">
    <div class="elegant-calencar">
       <p id="reset">reset</p>
        <div id="header" class="clearfix">
           <div class="pre-button"><</div>
                <div class="head-info">
                    <div class="head-day"></div>
                    <div class="head-month"></div>
                 </div>
                    <div class="next-button">></div>
        </div>
        <table id="calendar">
            <thead>
                <tr>
                    <th>D</th>
                    <th>L</th>
                    <th>M</th>
                    <th>X</th>
                    <th>J</th>
                    <th>V</th>
                    <th>S</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                </tr>
                <tr>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                </tr>
                <tr>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                </tr>
                <tr>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                </tr>
                <tr>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                </tr>
                <tr>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                    <td name="calendario"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

