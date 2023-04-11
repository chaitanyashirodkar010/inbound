let serchInput = document.querySelector("header .search-box input");
let serchBox = document.querySelector("header .search-box");
let serchClose = document.querySelector("header  .close");
let serchinfo = document.querySelector("header .search-info");
let serchBoxinfo = document.querySelector("header .search-box-info");
if (serchClose.classList.contains("d-none")) {
  serchBox.addEventListener("click", () => {
    serchInput.focus();
    serchBox.classList.add("active");
    serchinfo.classList.add("d-none");
    serchBoxinfo.classList.remove("d-none");
    serchInput.classList.remove("fs-22");
    serchInput.classList.add("fs-16");
    serchClose.classList.remove("d-none");
  });
}
else {
  serchBox.addEventListener("click", () => {
    serchInput.blur();
  });
}
serchInput.addEventListener("blur", () => {
  serchBox.classList.remove("active");
  serchInput.classList.add("fs-22");
  serchInput.classList.remove("fs-16");
  serchBoxinfo.classList.add("d-none");
  serchinfo.classList.remove("d-none");
  serchClose.classList.add("d-none");
});
serchClose.addEventListener("click", () => {
  serchInput.blur();
  serchBox.classList.remove("active");
});

// end search

// light box
document.querySelector(".lightbox .close").addEventListener("click", () => {
  document.querySelector(".lightbox ").classList.add("d-none");
  document.querySelector(".lightbox ").classList.remove("position-fixed");
});
document.querySelectorAll(".carousel-item").forEach((el) =>
  el.addEventListener("click", () => {
    document.querySelector(".lightbox ").classList.remove("d-none");
    document.querySelector(".lightbox ").classList.add("position-fixed");
  })
);
document
  .querySelector(".lightbox .like")
  .addEventListener("click", function () {
    this.classList.toggle("text-primary");
  });

$(".owl-carousel").owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  navText: [
    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
    '<i class="fa fa-angle-right" aria-hidden="true"></i>',
  ],

  responsive: {
    0: {
      items: 4,
    },
    600: {
      items: 6,
    },
    1000: {
      items: 7,
    },
  },
});

//   end light box

// add photos
let addPhoto = document.querySelector(".add-photo");
let closePhoto = addPhoto.querySelector(".close-photo");
let addphBtn = document.querySelector(".addph");
addphBtn.addEventListener("click", () => {
  addPhoto.classList.remove("d-none");
});
closePhoto.addEventListener("click", () => {
  addPhoto.classList.add("d-none");
});

// add tip
let addTip = document.querySelector(".add-tip");
let closeTip = addTip.querySelector(".close-tip");
let addtipBtn = document.querySelectorAll(".addtip");
addtipBtn.forEach((el) =>
  el.addEventListener("click", () => {
    addTip.classList.remove("d-none");
  })
);
closeTip.addEventListener("click", () => {
  addTip.classList.add("d-none");
});

// ==================================
let showmoreBtns = document.querySelectorAll(".showmore");

showmoreBtns.forEach((el) =>
  el.addEventListener("click", function () {
    if (el.innerHTML == "Show More") {
      el.innerHTML = "Show Less";
    } else if (el.innerHTML == "Show Less") {
      el.innerHTML = "Show More";
    }
  })
);


