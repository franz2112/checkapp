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
            formStepsNum++;
            updateFormSteps();
            updateProgressbar();
            // for (const btndoctor of radioButtons) {
            //     if (btndoctor.checked) {
            //         // selectedSize = radioButton.value;
            //         formStepsNum++;
            //         updateFormSteps();
            //         updateProgressbar();
            //         rmvTxt();
            //         break;
            //     } else {
            //         output.innerHTML = `You have to select <span class="fw-bold">Doctor</span>  and <span class="fw-bold">Consultation Type</span>`;
            //     }
            // }
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

$("document").ready(function () {
    if (document.location.pathname == "/user/clinics") {
        $(".nav-item").removeClass("active");
        $("#active-c").addClass("active-clinic");
    } else if (document.location.pathname == "/user/appointment") {
        $(".nav-item").removeClass("active");
        $("#active-a").addClass("active-appoint");
    } else if (document.location.pathname == "/user/notifications") {
        $(".nav-item").removeClass("active");
        $("#active-n").addClass("active-notif");
    } else if (document.location.pathname == "/user/my-records") {
        $(".nav-item").removeClass("active");
        $("#active-r").addClass("active-rec");
    }
});

// line clinic
// $("document").ready(function () {
//     var likesBtn = document.querySelector(".like-btn");
//     var likeIcon = document.querySelector("#icon");

//     var clicked = false;

//     likesBtn.addEventListener("click", () => {
//         if (!clicked) {
//             clicked = true;
//             likeIcon.innerHTML = `<i class="fas fa-star"></i>`;
//         } else {
//             clicked = false;
//             likeIcon.innerHTML = `<i class="far fa-star"></i>`;
//         }
//     });
// });
