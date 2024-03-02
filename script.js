function lightMode() {
    $("body").addClass("light-mode");
    $("#toggle").css("animation", "none");
    $(".hero-section .cta .social-media").css("filter", "invert(100%)");
    $(".hero-section .picture img").css("opacity", "0.9");
}

function darkMode() {
    $("body").removeClass("light-mode");
    $("#toggle").css("animation", "rotate-in-2-cw 1s infinite");
    $(".hero-section .cta .social-media").css("filter", "invert(0%)");
    $(".hero-section .picture img").css("opacity", "0.7");
}

$("document").ready(function () {
    darkMode();

    $("#toggle").change(function () {
        if ($("#toggle").is(":checked")) {
            darkMode();
        } else {
            lightMode();
        }
    });

    $("#toggle-btn").change(function () {
        if ($("#toggle-btn").is(":checked")) {
            darkMode();
            $("#toggle-btn").css("color", "hsl(40, 100%, 50%)");
        } else {
            lightMode();
            $("#toggle-btn").css("color", "var(--normal)");
        }
    });

    // toggle menu in mobile version
    $("header nav:first-child > img").click(function () {
        $("header nav:last-child").toggleClass("active-nav");
    });
    $("header nav:last-child ul > *").click(function () {
        $("header nav:last-child").toggleClass("active-nav");
    });

    //? show menu when hover title
    $("h1.title-section").mouseenter(function (e) {
        const target = this;
        $("h1.title-section").each(function (index) {
            if (this == target && $(window).width() >= 768) {
                $("h1.title-section + nav").eq(index).css("display", "flex");
                $("h1.title-section + nav").eq(index).addClass("slide-in-bottom");
                $("h1.title-section + nav").eq(index).css("animation-duration", "0.5s");
            }
        });
    });

    $("h1.title-section + nav").mouseleave(function () {
        $("h1.title-section + nav").css("display", "none");
    });

    //? show element when scrolling
    $(document.body).on("touchmove", onScroll);
    $(window).scroll(onScroll);
});

function onScroll() {
    let scrollPos = 500;
    const skill = $(".skill-section > h1.title-section");
    const academic = $(".academic-section > h1.title-section");
    const project = $(".project-section > h1.title-section");
    const competition = $(".competition-section > h1.title-section");

    scrollPos = $(this).scrollTop();

    // skill
    if (scrollPos + 1000 > skill.offset().top) {
        showSkillSection();
    }
    // academic
    if (scrollPos + 500 > academic.offset().top) {
        showAcademicSection();
    }
    // academic
    if (scrollPos + 500 > project.offset().top) {
        showProjectSection();
    }
    // competition
    if (scrollPos + 500 > competition.offset().top) {
        showCompetitionSection();
    }
}

function showHeroSection() {
    $(".bg-hero").eq(0).css("display", "none");
    $(".hero-section .cta").addClass("slide-in-left");
    $(".hero-section .picture").addClass("slide-in-right");
    $("nav").addClass("slide-in-top");
}

function showSkillSection() {
    $(".bg-hero").eq(1).css("display", "none");
    $("h1.title-section").eq(0).addClass("slide-in-bottom");
    $(".skill-section .container div.main-card").eq(0).addClass("slide-in-left");
    $(".skill-section .container div.main-card").eq(1).addClass("slide-in-right");
    $(".skill-section .container div.main-card").eq(2).addClass("slide-in-left");
    $(".skill-section .container div.main-card").eq(3).addClass("slide-in-right");
}

function showAcademicSection() {
    $(".bg-hero").eq(2).css("display", "none");
    $("h1.title-section").eq(1).addClass("slide-in-bottom");
    $(".academic-section .training").addClass("slide-in-left");
    $(".academic-section .study").addClass("slide-in-right");
}

function showProjectSection() {
    $(".bg-hero").eq(3).css("display", "none");
    $("h1.title-section").eq(2).addClass("slide-in-bottom");
    $(".project-section .cards .card").eq(0).addClass("slide-in-left");
    $(".project-section .cards .card").eq(1).addClass("slide-in-right");
    $(".project-section .cards .card").eq(2).addClass("slide-in-left");
    $(".project-section .cards .card").eq(3).addClass("slide-in-right");
}

function showCompetitionSection() {
    $(".bg-hero").eq(4).css("display", "none");
    $("h1.title-section").eq(3).addClass("slide-in-bottom");
    $(".competition-section .cards .card").eq(0).addClass("slide-in-left");
    $(".competition-section .cards .card").eq(1).addClass("slide-in-bottom");
    $(".competition-section .cards .card").eq(2).addClass("slide-in-right");
}

setTimeout(function () {
    showHeroSection();
}, 500);
