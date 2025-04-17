<script>
    // FOR MY PRELOADER
    window.addEventListener("load", function() {
        let preloader = document.getElementById("webloader");
        let content = document.getElementById("content");

        // HIDE THE PRELOADER
        preloader.style.display = "none";
        // SHOW MY CONTENTS
        content.style.display = "block";
    });

    // for the secondNavBar

    document.addEventListener("DOMContentLoaded", function() {
        const secondNav = document.querySelector(".second-nav");
        const body = document.body;
        const triggerHeight = 100; // Adjust based on when you want the effect

        window.addEventListener("scroll", function() {
            if (window.scrollY > triggerHeight) {
                secondNav.classList.add("fixed");
                body.classList.add("scrolled");
            } else {
                secondNav.classList.remove("fixed");
                body.classList.remove("scrolled");
            }
        });
    });

    // mobileview

    let menuOpen = document.getElementById("menu-open");
    let menuClose = document.getElementById("menu-close");
    let link = document.getElementById("links");
    let mainmenu = document.getElementById("menushow");
    let navLinks = document.querySelectorAll(".linkcontainer a");

    function showMenu() {
        link.classList.add("show");
        menuOpen.style.display = "none";
        menuClose.style.display = "block";
    }

    function hideMenu() {
        link.classList.remove("show");
        menuOpen.style.display = "block";
        menuClose.style.display = "none";
    }

    menuOpen.addEventListener("click", showMenu);
    menuClose.addEventListener("click", hideMenu);

    navLinks.forEach((navLink) => {
        navLink.addEventListener("click", hideMenu);
    });


    document.addEventListener("click", function(event) {
        if (!link.contains(event.target) && !menuOpen.contains(event.target) && !menuClose.contains(event.target)) {
            hideMenu();
        }
    });


    // FOR THE BACK TO TOP
    document.addEventListener("DOMContentLoaded", function() {
        const goBackToTopButton = document.getElementById("backToTop");

        // USED WINDOW AS MY SELECTOR
        window.addEventListener("scroll", function() {

            if (window.scrollY > 100) {
                goBackToTopButton.style.display = "block";
            } else {
                goBackToTopButton.style.display = "none";
            }
        });


        // on click it should go back to the top
        goBackToTopButton.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    });

    // for the faq section
    const questions = document.querySelectorAll('.questions');

    questions.forEach(question => {
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling;


            // Toggle the open class
            answer.classList.toggle('open');

            // close other opened answers
            document.querySelectorAll('.answers').forEach(otherAnswer => {
                if (otherAnswer !== answer && otherAnswer.classList.contains('open')) {
                    otherAnswer.classList.remove('open');
                }
            });
        });
    });

    const item1 = document.getElementById("item1");
    const item2 = document.getElementById("item2");
    const item3 = document.getElementById("item3");
    const item4 = document.getElementById("item4");
    const carousel = document.getElementById("carousel");
    const container = document.getElementById("carouselContainer");

    let interval;
    let showingItem1 = true;

    function startCarousel() {
        interval = setInterval(() => {
            if (showingItem1) {
                // Move everything left to hide Item 1
                item1.style.transform = "translateX(-100%)";
                item1.style.opacity = "0";

                item2.style.transform = "translateX(-27vw)";
                item3.style.transform = "translateX(-27vw)";

                // Slide in Item 4 from the right
                setTimeout(() => {
                    item4.style.transform = "translateX(-27vw)";
                    item4.style.opacity = "1";
                }, 500);

            } else {
                // Slide Item 4 out & Bring back Item 1
                item4.style.transform = "translateX(100%)";
                item4.style.opacity = "0";

                item2.style.transform = "translateX(0)";
                item3.style.transform = "translateX(0)";

                setTimeout(() => {
                    item1.style.transform = "translateX(0)";
                    item1.style.opacity = "1";
                }, 500);
            }

            showingItem1 = !showingItem1; // Toggle
        }, 4000);
    }

    startCarousel();

    // Pause on hover
    container.addEventListener("mouseenter", () => clearInterval(interval));

    // Resume when mouse leaves
    container.addEventListener("mouseleave", startCarousel);

    // BUTTONS SECTION FOR TABLES

    function makeitactive(clickedButton) {
        document.querySelector('.active').classList.remove('active');

        clickedButton.classList.add('active');
    }

    var buttonshow = document.getElementById('yes');

    var firstTable = document.getElementById("firstTable");
    var secondTable = document.getElementById("secondtable");
    secondTable.style.display = "none";
    buttonshow.onclick = () => {
        secondTable.style.display = "none";
        firstTable.style.display = "block";
        buttonshow.classList.add("active");
        buttonsho.classList.remove("active");

    }


    var buttonsho = document.getElementById('no');
    buttonsho.onclick = () => {
        secondTable.style.display = "block";
        firstTable.style.display = "none";
        buttonshow.classList.remove("active");
        buttonsho.classList.add("active")
    }

    let menuIcon = document.getElementById("menuToggle");
    let sidebar = document.getElementById("contents");
    menuIcon.addEventListener("click", (event) => {
        event.stopPropagation();
        sidebar.classList.toggle("show");
    });

    document.addEventListener("click", (event) => {
        if (!sidebar.contains(event.target) && !menuIcon.contains(event.target)) {
            sidebar.classList.remove("show");
        }
    });
    sidebar.addEventListener("click", (event) => event.stopPropagation());
</script>