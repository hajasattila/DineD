const sections = document.querySelectorAll("section[id]");
const links = document.querySelectorAll(".nav__link");

function updateActiveLink() {
    const scrollY = window.pageYOffset;

    sections.forEach((section) => {
        const sectionTop = section.offsetTop - 58;
        const sectionHeight = section.offsetHeight;
        const sectionId = section.getAttribute("id");

        if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
            links.forEach((link) => {
                link.classList.remove("active-link");
            });
            document
                .querySelector(`.nav__menu a[href="#${sectionId}"]`)
                .classList.add("active-link");
        }
    });
}

function handleLinkClick(event) {
    event.preventDefault();
    links.forEach((link) => {
        link.classList.remove("active-link");
    });
    event.target.classList.add("active-link");

    const sectionId = event.target.getAttribute("href").slice(1);
    const section = document.getElementById(sectionId);
    const sectionTop = section.offsetTop - 58;

    window.scroll({
        top: sectionTop,
        behavior: "smooth",
    });

    setTimeout(() => {
        updateActiveLink();
    }, 400);
}

links.forEach((link) => {
    link.addEventListener("click", (event) => {
        links.forEach((link) => {
            link.classList.remove("active-link");
        });
        setTimeout(() => {
            event.target.classList.add("active-link");
        }, 500);
    });
});

window.addEventListener("scroll", updateActiveLink);
