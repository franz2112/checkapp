// $("document").ready(function () {
//   $("#doctorSlideshow").owlCarousel({
//     nav: true,
//     dots: false,
//     navText: [
//       "<span class='fa-solid fa-arrow-back'></span>",
//       "<span class='fa-solid fa-arrow-forward'></span>",
//     ],
//     responsive: {
//       0: {
//         items: 1,
//       },
//       576: {
//         items: 2,
//       },
//       992: {
//         items: 3,
//       },
//     },
//   });
// });

$("document").ready(function () {
    $("a[data-role='smoothscroll']").click(function (e) {
        e.preventDefault();

        var position = $($(this).attr("href")).offset().top - nav_height;

        $("body, html").animate(
            {
                scrollTop: position,
            },
            1000
        );
        return false;
    });
});

$("document").ready(function () {
    // Back to top
    var backTop = $(".back-to-top");

    $(window).scroll(function () {
        if ($(document).scrollTop() > 100) {
            backTop.css("visibility", "visible");
        } else if ($(document).scrollTop() < 100) {
            backTop.css("visibility", "hidden");
        }
    });

    backTop.click(function () {
        $("html").animate(
            {
                scrollTop: 0,
            },
            1000
        );
        return false;
    });
});

$("document").ready(function () {
    // Tooltips
    $('[data-toggle="tooltip"]').tooltip();

    // Popovers
    $('[data-toggle="popover"]').popover();

    // Page scroll animate
    // new WOW().init();
});

// progress
$("document").ready(function () {
    const prevBtns = document.querySelectorAll(".btn-prev");
    const nextBtns = document.querySelectorAll(".btn-next");
    const progress = document.getElementById("progress");
    const formSteps = document.querySelectorAll(".form-step");
    const progressSteps = document.querySelectorAll(".progress-step");
    // const btn = document.querySelector("#btn");
    const output = document.querySelector("#output");
    const radioButtons = document.querySelectorAll('input[name="doctor"]');
    const radioButtonss = document.querySelectorAll(
        'input[name="consultation"]'
    );
    const inputCmplnts = document.querySelectorAll(
        'textarea[name="inputCmplnts"]'
    );

    let formStepsNum = 0;

    nextBtns.forEach((btn) => {
        // btn.addEventListener("click", () => {
        //   formStepsNum++;
        //   updateFormSteps();
        //   updateProgressbar();
        // });
        btn.addEventListener("click", () => {
            // let selectedSize;
            for (const btndoctor of radioButtons) {
                if (btndoctor.checked) {
                    // selectedSize = radioButton.value;
                    formStepsNum++;
                    updateFormSteps();
                    updateProgressbar();
                    rmvTxt();
                    break;
                } else {
                    output.innerHTML = `You have to select <span class="fw-bold">Doctor</span>  and <span class="fw-bold">Consultation Type</span>`;
                }
            }
        });
    });

    prevBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            formStepsNum--;
            updateFormSteps();
            updateProgressbar();
        });
    });

    function rmvTxt() {
        output.parentNode.removeChild(output);
    }

    function updateFormSteps() {
        formSteps.forEach((formStep) => {
            formStep.classList.contains("f-active") &&
                formStep.classList.remove("f-active");
        });

        formSteps[formStepsNum].classList.add("f-active");
    }

    function updateProgressbar() {
        progressSteps.forEach((progressStep, idx) => {
            if (idx < formStepsNum + 1) {
                progressStep.classList.add("p-active");
            } else {
                progressStep.classList.remove("p-active");
            }
        });

        const progressActive = document.querySelectorAll(".p-active");

        progress.style.width =
            ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 +
            "%";
    }
});
//progress end

// calender
$("document").ready(function () {
    const date = new Date();

    const renderCalendar = () => {
        date.setDate(1);

        const monthDays = document.querySelector(".days");

        const lastDay = new Date(
            date.getFullYear(),
            date.getMonth() + 1,
            0
        ).getDate();

        const prevLastDay = new Date(
            date.getFullYear(),
            date.getMonth(),
            0
        ).getDate();

        const firstDayIndex = date.getDay();

        const lastDayIndex = new Date(
            date.getFullYear(),
            date.getMonth() + 1,
            0
        ).getDay();

        const nextDays = 7 - lastDayIndex - 1;

        const months = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December",
        ];

        document.querySelector(".date h1").innerHTML = months[date.getMonth()];

        document.querySelector(".date p").innerHTML = new Date().getFullYear();

        let days = "";

        for (let x = firstDayIndex; x > 0; x--) {
            days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
        }

        for (let i = 1; i <= lastDay; i++) {
            if (
                i === new Date().getDate() &&
                date.getMonth() === new Date().getMonth()
            ) {
                days += `<div class="today">${i}</div>`;
            } else {
                days += `<div><a href="../index.html" class="nav-title">
      ${i}</a></div>`;
            }
        }

        for (let j = 1; j <= nextDays; j++) {
            days += `<div class="next-date">${j}</div>`;
            monthDays.innerHTML = days;
        }
    };

    document.querySelector(".prev").addEventListener("click", () => {
        date.setMonth(date.getMonth() - 1);
        renderCalendar();
    });

    document.querySelector(".next").addEventListener("click", () => {
        date.setMonth(date.getMonth() + 1);
        renderCalendar();
    });

    renderCalendar();
});
// calendar end

$("document").ready(function () {
    if (document.location.pathname == "/clinics") {
        $(".nav-item").removeClass("active");
        $("#active-c").addClass("active-clinic");
    } else if (document.location.pathname == "/appointments") {
        $(".nav-item").removeClass("active");
        $("#active-c").addClass("active-appoint");
    }
});

// line clinic
$("document").ready(function () {
    let likeBtn = document.querySelector(".like-btn");
    let likeIcon = document.querySelector("#icon");

    let clicked = false;

    likeBtn.addEventListener("click", () => {
        if (!clicked) {
            clicked = true;
            likeIcon.innerHTML = `<i class="fas fa-star"></i>`;
        } else {
            clicked = false;
            likeIcon.innerHTML = `<i class="far fa-star"></i>`;
        }
    });
});
