<style>
    @charset "UTF-8";
    @import url(https://fonts.googleapis.com/css?family=Fira+Sans:200,400,500);
    * {
        border: 0;
        margin: 0;
        padding: 0;
    }

    html {
        height: 100%;
    }

    body {
        height: inherit;
        display: flex;
        background: #ccc;
        flex-direction: column;
        font-family: 'Fira Sans', sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        color: #000;
    }

    a {
        color: white;
        text-decoration: none;
    }
    a:hover {
        color: #000;
    }

    div.container {
        display: flex;
        flex: auto;
        flex-direction: column;
        max-height: 100%;
    }

    div.item {
        display: flex;
        flex: auto;
        overflow-y: auto;
        padding: 0rem 1rem 0rem 1rem;
    }

    #timeline {
        position: relative;
        display: table;
        height: 100%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 5rem;
    }
    #timeline div:after {
        content: '';
        width: 2px;
        position: absolute;
        top: .5rem;
        bottom: 0rem;
        left: 60px;
        z-index: 1;
        background: #3C699E;
    }
    #timeline h3 {
        width: 139px;
        text-align: center;
        border-radius: 5px;
        position: -webkit-sticky;
        position: sticky;
        top: 4rem;
        color: #fff;
        margin-left: -140px;
        background: #153666;
        padding: 10px 20px;
        font-size: 1em;
        font-weight: 500;
    }
    @media (min-width: 92em) {
        #timeline h3 {
            font-size: 1.1em;
        }
    }
    #timeline section.year {
        position: relative;
    }
    #timeline section.year:first-child section {
        margin-top: -2.7em;
        padding-bottom: 0px;
    }
    #timeline section.year section {
        position: relative;
        padding-bottom: 1.25em;
        margin-bottom: 2.2em;
    }
    #timeline section.year section ul > li {
        list-style: none;
    }
    #timeline section.year section h4 {
        position: absolute;
        bottom: 0;
        font-size: .9em;
        font-weight: 400;
        line-height: 1.2em;
        margin: 0;
        padding: 0 0 0 89px;
        color: #3C699E;
    }
    @media (min-width: 62em) {
        #timeline section.year section h4 {
            font-size: 1em;
        }
    }
    #timeline section.year section ul {
        list-style: none;
        padding: 0 0 0 75px;
        margin: -1.35rem 0 1em;
        max-width: 32rem;
        font-size: 1em;
    }
    @media (min-width: 62em) {
        #timeline section.year section ul {
            font-size: 1.1em;
            padding: 0 0 0 81px;
        }
    }
    #timeline section.year section ul:last-child {
        margin-bottom: 0;
    }
    #timeline section.year section ul:first-of-type:after {
        content: '';
        width: 14px;
        height: 14px;
        background: #9753C8;
        border: 4px solid #9753C8;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
        position: absolute;
        left: 50px;
        top: -7px;
        z-index: 2;
    }
    #timeline section.year section ul li {
        margin-left: .2rem;
        background-color: #fff;
        padding: 10px 15px;
        border-radius: 5px;
        list-style: none !important;
    }
    #timeline section.year section ul li:before {
        content: '·';
        list-style: none;
        margin-left: -.5rem;
        padding-right: .3rem;
        list-style-type: none !important;
    }
    #timeline section.year section ul li:not(:first-child) {
        margin-top: .5rem;
        list-style: none !important;
    }
    #timeline section.year section ul li span.price {
        color: mediumturquoise;
        font-weight: 500;
    }

    #price {
        display: inline;
    }

    svg {
        border: 1px solid white;
        border-radius: 50%;
        box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
    }

</style>
<div class="container">
    <div class="item">
        <div id="timeline">
            <div>
                {foreach from=$exam_list item=exam}
                <section class="year">
                    <h3>{$exam.exams_time}
                        {$exam.exams_date|date_format:"%A, %B %e, %Y"}
                        </h3>
                    <section>
                        <ul>
                            <li>
                                {if $exam.exams_status == "1"}
                                    <img src="../images/over.PNG" width="20" height="20" title="Приключен">
                                {else}
                                    <img src="../images/notover.PNG" width="20" height="20" title="НЕприключен">
                                {/if}


                                {$exam.pi_names}
                                {$exam.exams_idn}
                                {$exam.exams_note}
                            </li>
                        </ul>
                    </section>
                </section>
                {/foreach}
            </div>
        </div>
    </div>
</div>