
let currentPage = "HOME";
let header, main;

document.addEventListener("DOMContentLoaded", function(event) {
    header = document.getElementsByTagName("header")[0];
    main = document.getElementsByTagName("main")[0];
});

function switchPage(page) {
    if (page === currentPage) {
        return;
    }
    pageSetups[page]();
    currentPage = page;
}

const pageSetups = {

    HOME: function() {
        header.classList.add("home");
        main.classList.add("home");
        header.classList.remove("sessions");
        main.classList.remove("sessions");
        header.classList.remove("bookings");
        main.classList.remove("bookings");
    },

    SESSIONS: function() {
        header.classList.remove("home");
        main.classList.remove("home");
        header.classList.add("sessions");
        main.classList.add("sessions");
        header.classList.remove("bookings");
        main.classList.remove("bookings");
    },

    BOOKINGS: function() {
        header.classList.remove("home");
        main.classList.remove("home");
        header.classList.remove("sessions");
        main.classList.remove("sessions");
        header.classList.add("bookings");
        main.classList.add("bookings");
    }
}
