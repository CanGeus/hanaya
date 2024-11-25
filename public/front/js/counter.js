// counter
(() => {
    const counter = document.querySelectorAll('.counter');
    // covert to array
    const array = Array.from(counter);
    
    // Fungsi untuk memulai counter
    function startCounter(item) {
        let counterInnerText = item.textContent;
        let count = 1;
        let speed = item.dataset.speed / counterInnerText;

        function counterUp() {
            item.textContent = count++;
            if (counterInnerText < count) {
                clearInterval(stop);
            }
        }
        const stop = setInterval(() => {
            counterUp();
        }, speed);
    }

    // Menggunakan Intersection Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startCounter(entry.target);
                observer.unobserve(entry.target); // Hentikan pengamatan setelah counter dimulai
            }
        });
    });

    // Mengamati setiap elemen counter
    array.forEach(item => {
        observer.observe(item);
    });
})()