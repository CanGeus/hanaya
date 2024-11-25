const logo = document.querySelector('#logo').cloneNode(true);
document.querySelector('.logo-client').appendChild(logo);

// scroll
const scrollContainer = document.getElementById('scrollContainer');
const scrollItems = scrollContainer.children;
const paginationDots = document.querySelectorAll('.scroll-pagination span');
let current = 1;

scrollContainer.scrollTo({
            left: scrollItems[1].offsetLeft,
            behavior: 'smooth'
        });

function updatePagination() {
    paginationDots.forEach((dot, index) => {
        dot.classList.toggle('hny-bg-secondary', index == current);
    });
}

function ScrollLeft() {
    if (current > 0) {
        current--;
        scrollContainer.scrollTo({
            left: scrollItems[current].offsetLeft,
            behavior: 'smooth'
        });
        updatePagination();
    }
}

function scrollRight() {
    if (current < scrollItems.length - 1) {
        current++;
        scrollContainer.scrollTo({
            left: scrollItems[current].offsetLeft,
            behavior: 'smooth'
        });
        updatePagination();
    }
}