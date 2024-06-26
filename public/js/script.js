// toggle class active
const navbarNav = document.querySelector(".navbar-nav");
//press menu
document.querySelector("#Hmenu").onclick = () => {
  navbarNav.classList.toggle("active");
};

var myCarousel = document.querySelector('#carouselExampleIndicators')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 4000, // Interval perubahan gambar dalam milidetik
        wrap: true // Mengaktifkan perputaran gambar
    })

const Hmenu = document.querySelector("#Hmenu");

document.addEventListener("click", function (e) {
  if (!Hmenu.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

//search bar
// Fungsi untuk melakukan pencarian
function search() {
  const searchInput = document.getElementById("searchInput").value;

  console.log("Pencarian untuk: " + searchInput);
  window.location.href = "/search?q=" + encodeURIComponent(searchInput);
}

anime({
  targets: '.row svg',
  translateY: 10,
  autoplay: true,
  loop: true,
  easing: 'easeInOutSine',
  direction: 'alternate'
});

anime({
  targets: '#zero',
  translateX: 10,
  autoplay: true,
  loop: true,
  easing: 'easeInOutSine',
  direction: 'alternate',
  scale: [{value: 1}, {value: 1.4}, {value: 1, delay: 250}],
    rotateY: {value: '+=180', delay: 200},
});