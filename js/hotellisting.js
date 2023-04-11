let closeFilter = document.querySelector(".colse-filter");
let filtersSection = document.querySelector(".filters");
let openFilter = document.querySelector(".open-filter");
closeFilter.addEventListener("click", () => {
  filtersSection.classList.remove("show");
  closeFilter.classList.add("d-none");
});
openFilter.addEventListener("click", () => {
  filtersSection.classList.add("show");
  closeFilter.classList.remove("d-none");
});

// datepicker

if (window.innerWidth > 992) {
  $(function () {
    var dateFormat = "mm/dd/yy",
      from = $("#checkindate")
        .datepicker({
          defaultDate: "+1w",
          numberOfMonths: 2,
        })
        .on("change", function () {
          to.datepicker("option", "minDate", getDate(this));
        }),
      to = $("#checkoutdate")
        .datepicker({
          defaultDate: "+1w",
          numberOfMonths: 2,
        })
        .on("change", function () {
          from.datepicker("option", "maxDate", getDate(this));
        });

    function getDate(element) {
      var date;
      try {
        date = $.datepicker.parseDate(dateFormat, element.value);
      } catch (error) {
        date = null;
      }

      return date;
    }
  });
} else {
  $(function () {
    var dateFormat = "mm/dd/yy",
      from = $("#checkindate")
        .datepicker({
          defaultDate: "+1w",
          numberOfMonths: 1,
        })
        .on("change", function () {
          to.datepicker("option", "minDate", getDate(this));
        }),
      to = $("#checkoutdate")
        .datepicker({
          defaultDate: "+1w",
          numberOfMonths: 1,
        })
        .on("change", function () {
          from.datepicker("option", "maxDate", getDate(this));
        });

    function getDate(element) {
      var date;
      try {
        date = $.datepicker.parseDate(dateFormat, element.value);
      } catch (error) {
        date = null;
      }

      return date;
    }
  });
}

// multi slider
$(function () {
  $("#slider-range").slider({
    range: true,
    min: 0,
    max: 250,
    values: [0, 140],
    slide: function (event, ui) {
      $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
    },
  });
  $("#amount").val(
    "$" +
      $("#slider-range").slider("values", 0) +
      " - $" +
      $("#slider-range").slider("values", 1)
  );
});

document.querySelector(".rooms-select").addEventListener("click", () => {
  document.querySelector(".rooms-num").classList.toggle("d-none");
});

// collapse
document.querySelectorAll(".fa-angle-up").forEach((item) =>
  item.addEventListener("click", function () {
    this.classList.toggle("fa-rotate-180");
  })
);

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
} else {
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
