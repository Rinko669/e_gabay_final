const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

navLinks.forEach(link => {
    link.addEventListener('click', () => {
        navLinks.forEach(navLink => {
            navLink.classList.remove('active');
        });
        link.classList.add('active');
    });
});