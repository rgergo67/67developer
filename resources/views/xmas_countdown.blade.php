<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mountains+of+Christmas:wght@700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #time {
            display: flex;
            gap: 40px;
            color: #FFF;
        }
        #time .circle {
            position: relative;
            width: 150px;
            height: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #time .circle svg {
            position: relative;
            width: 150px;
            height: 150px;
            transform: rotate(270deg);
        }
        #time .circle svg circle {
            width: 100%;
            height: 100%;
            fill: transparent;
            stroke: #191919;
            stroke-width: 4;
            /*transform: translate(5px, 5px);*/
        }
        #time .circle svg circle:nth-child(2) {
            stroke: var(--clr);
            stroke-dasharray: 440;
        }
        #time div {
            position: absolute;
            text-align: center;
            font-weight: 500;
            font-size: 1.5em;
        }
        #time div span {
            position: absolute;
            transform: translate(-50%, -10px);
            font-size: 0.35em;
            font-weight: 300;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }
        .dots {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 10;
            display: flex;
            justify-content: center;
        }
        .dots::before {
            content: '';
            position: absolute;
            top: -3px;
            width: 15px;
            height: 15px;
            background: var(--clr);
            border-radius: 50%;
            box-shadow: 0 0 20px var(--clr), 0 0 60px var(--clr);
        }
        .title {
            color: #008866;
            font-family: 'Mountains of Christmas', cursive;
            text-shadow: 0 0 27px #06aa74ab;
        }
    </style>
</head>
<body>
<div class="min-h-screen" style="background-image: url('{{ asset('images/desktop-bg.jpg') }}'); background-size: cover; background-repeat: no-repeat;background-position: center;">
    @php
        $nextXmasDateTime = strtotime((date("m") == 12 && date("d") > 25) ? (date("Y") + 1) . "-12-25" : date("Y") . "-12-25");
    @endphp
    <div class="max-w-xl lg:max-w-4xl mx-auto flex flex-col justify-evenly min-h-screen py-12 space-y-12">
        <div>
            <h1 class="text-5xl leading-tight lg:text-8xl text-center lg:leading-tight title">
                <span class="block">Karácsonyi</span>
                <span class="block">visszaszámlálás</span>
            </h1>
            <div class="text-xl text-center text-white mt-12">{{ date('Y-m-d', $nextXmasDateTime) }}</div>
        </div>
        <div id="time" class="justify-center flex-col md:flex-row items-center">
            <div class="circle" style="--clr: #ef3b24">
                <div class="dots day_dot"></div>
                <svg>
                    <circle cx="75" cy="75" r="70"></circle>
                    <circle cx="75" cy="75" r="70" id="dd"></circle>
                </svg>
                <div id="days">00</div>
            </div>
            <div class="circle" style="--clr: #d5ad55">
                <div class="dots hr_dot"></div>
                <svg>
                    <circle cx="75" cy="75" r="70"></circle>
                    <circle cx="75" cy="75" r="70" id="hh"></circle>
                </svg>
                <div id="hours">00</div>
            </div>
            <div class="circle" style="--clr: #f7e19d">
                <div class="dots min_dot"></div>
                <svg>
                    <circle cx="75" cy="75" r="70"></circle>
                    <circle cx="75" cy="75" r="70" id="mm"></circle>
                </svg>
                <div id="minutes">00</div>
            </div>
            <div class="circle" style="--clr: #008866">
                <div class="dots sec_dot"></div>
                <svg>
                    <circle cx="75" cy="75" r="70"></circle>
                    <circle cx="75" cy="75" r="70" id="ss"></circle>
                </svg>
                <div id="seconds">00</div>
            </div>
        </div>
        <div>
            <div class="text-center"><a class="text-white" href="https://lospolo.hu/pandaart">Nézd meg a többi pólómintám!</a></div>
            <div class="text-center"><a class="text-white" href="https://lospolo.hu/pandaart">https://lospolo.hu/pandaart</a></div>
        </div>
    </div>

</div>
<script type="text/javascript">

    setInterval(() => {
        //Get today's date.
        let now = new Date();

        //Get the current month. Add a +1 because
        //getMonth starts at 0 for January.
        let currentMonth = (now.getMonth() + 1);

        //Get the current day of the month.
        let currentDay = now.getDate();

        //Work out the year that the next Christmas
        //day will occur on.
        let nextChristmasYear = now.getFullYear();
        if(currentMonth == 12 && currentDay > 25){
            //This year's Christmas Day has already passed.
            nextChristmasYear = nextChristmasYear + 1;
        }

        let nextChristmasDate = nextChristmasYear + '-12-25T00:00:00.000Z';
        let christmasDay = new Date(nextChristmasDate);

        // this helps to create utc time
        let timezoneOffset = christmasDay.getTimezoneOffset() * 60000;
        // Get the difference in seconds between the two days.
        let diffSeconds = Math.floor((christmasDay.getTime() + timezoneOffset - now.getTime()) / 1000);

        let d = 0;
        let h = 0;
        let m = 0;
        let s = 0;

        //Don't calculate the time left if it is Christmas day.
        if(currentMonth != 12 || (currentMonth == 12 && currentDay != 25)){
            //Convert these s into d, h, m, s.
            d = Math.floor(diffSeconds / (3600*24));
            diffSeconds  -= d * 3600 * 24;
            h   = Math.floor(diffSeconds / 3600);
            diffSeconds  -= h * 3600;
            m = Math.floor(diffSeconds / 60);
            diffSeconds  -= m * 60;
            s = diffSeconds;
        }
        let days = document.getElementById('days');
        let hours = document.getElementById('hours');
        let minutes = document.getElementById('minutes');
        let seconds = document.getElementById('seconds');
        let dd = document.getElementById('dd');
        let hh = document.getElementById('hh');
        let mm = document.getElementById('mm');
        let ss = document.getElementById('ss');
        let day_dot = document.querySelector('.day_dot');
        let hr_dot = document.querySelector('.hr_dot');
        let min_dot = document.querySelector('.min_dot');
        let sec_dot = document.querySelector('.sec_dot');
        // add zero before single digit number
        h = (h < 10) ? "0" + h : h;
        m = (m < 10) ? "0" + m : m;
        s = (s < 10) ? "0" + s : s;
        days.innerHTML = d + "<br/><span>Nap</span>";
        hours.innerHTML = h + "<br/><span>Óra</span>";
        minutes.innerHTML = m + "<br/><span>Perc</span>";
        seconds.innerHTML = s + "<br/><span>Másodperc</span>";
        dd.style.strokeDashoffset = 440 - (440 * d) / 365;
        hh.style.strokeDashoffset = 440 - (440 * h) / 24;
        mm.style.strokeDashoffset = 440 - (440 * m) / 60;
        ss.style.strokeDashoffset = 440 - (440 * s) / 60;
        day_dot.style.transform = `rotate(${d * 360/365}deg)`;
        hr_dot.style.transform = `rotate(${h * 15}deg)`;
        min_dot.style.transform = `rotate(${m * 6}deg)`;
        sec_dot.style.transform = `rotate(${s * 6}deg)`;
    });
</script>
</body>
</html>
