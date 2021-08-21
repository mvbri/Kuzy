$(document).ready(() => {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        center: true,
        nav: true,
        navText: [
            "<img class='img-prev' src='_private/img/arrow-left-carousel.svg'>", "<img class='img-next' src='_private/img/arrow-right-carousel.svg'>"
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
});

let modal = document.getElementById("myModal");

let img_base = "";
let img_modelo = "";
let slideIndex = 1;

// Open the Modal
function openModal(base, modelo) {
    window.base = base;
    window.modelo = modelo;

    document
        .getElementById("myModal")
        .style
        .display = "block";

    drawSlide();

}

// Close the Modal
function closeModal() {
    document
        .getElementById("myModal")
        .style
        .display = "none";
}

showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    slideIndex = n;
    drawSlide();
    // showSlides(slideIndex = n);
}

function drawSlide() {
    let img_base = window.base;
    let img_modelo = window.modelo;

    let display = document.getElementById("modalDisplay");
    let thumbnails = document.getElementsByClassName("demo");
    slideIndex = Math.min(Math.max(1, slideIndex), 4); // Clamp the index between 0 and 4

    display.src = img_base + "/" + img_modelo + "/" + img_modelo + "." +
            slideIndex + ".jpg";
    for (let i = 0; i < thumbnails.length; i++) {
        thumbnails[i].src = img_base + "/" + img_modelo + "/" + img_modelo + "." + (
            i + 1
        ) + ".jpg";
    }

}

function nextSlide() {
    slideIndex++;
    drawSlide();
}

function prevSlide() {
    slideIndex--;
    drawSlide();
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("demo");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i]
            .className
            .replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
}

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
        window
        .location
        .href
        .indexOf = '#ufhdz';
    }
}

$(document).keyup(function (e) {
    if (e.which == 27) {
        $("#myModal").hide();
    }
});

// init Isotope
var iso = new Isotope('.grid', {
    itemSelector: '.element-item',
    percentPosition: true,
    layoutMode: 'fitRows'
});

var $grid = $('.grid').isotope({
    itemSelector: '.element-item',
    layoutMode: 'masonry',
    masonry: {
        columnWidth: 110
    },
    cellsByRow: {
        columnWidth: 220,
        rowHeight: 220
    },
    masonryHorizontal: {
        rowHeight: 110
    },
    cellsByColumn: {
        columnWidth: 220,
        rowHeight: 220
    }
});

// filter functions
var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function (itemElem) {
        var number = itemElem
            .querySelector('.number')
            .textContent;
        return parseInt(number, 10) > 50;
    },
    // show if name ends with -ium
    ium: function (itemElem) {
        var name = itemElem
            .querySelector('.name')
            .textContent;
        return name.match(/ium$/);
    }
};

// bind filter button click
var filtersElem = document.querySelector('.filters-button-group');
filtersElem.addEventListener('click', function (event) {
    // only work with buttons
    if (!matchesSelector(event.target, 'button')) {
        return;
    }
    var filterValue = event
        .target
        .getAttribute('data-filter');
    // use matching filter function
    filterValue = filterFns[filterValue] || filterValue;
    iso.arrange({filter: filterValue});
});

// change is-checked class on buttons
var buttonGroups = document.querySelectorAll('.button-group');
for (var i = 0, len = buttonGroups.length; i < len; i++) {
    var buttonGroup = buttonGroups[i];
    radioButtonGroup(buttonGroup);
}

function radioButtonGroup(buttonGroup) {
    buttonGroup.addEventListener('click', function (event) {
        // only work with buttons
        if (!matchesSelector(event.target, 'button')) {
            return;
        }
        buttonGroup
            .querySelector('.is-checked')
            .classList
            .remove('is-checked');
        event
            .target
            .classList
            .add('is-checked');
    });
}

let hash = window.location.hash;
$('.my-tabs a[href="' + hash + '"]').show();

$('.my-tabs a').click(function (e) {
    $(this).show();
    let scrollmem = $('body').scrollTop();
    window.location.hash = this.hash;
    $('html,body').scrollTop(scrollmem);

    e.preventDefault()
});

(function (window) {

    // salir si el navegador implementa el evento
    if ("onhashchange" in window) {
        return;
    }

    var location = window.location,
        oldURL = location.href,
        oldHash = location.hash;

    // revisa el hash cada 100ms
    setInterval(function () {
        var newURL = location.href,
            newHash = location.hash;

        // si el hash ha cambiado y un controlador ha sido ligado...
        if (newHash != oldHash && typeof window.onhashchange === "function") {
            // ejecuta el controlador
            window.onhashchange({type: "hashchange", oldURL: oldURL, newURL: newURL});

            oldURL = newURL;
            oldHash = newHash;
        }
    }, 100);

})(window);

$(document).ready(function () {

    let modelos = document.getElementsByClassName('galeria-img');
    let number_model = 1;
    for (i = 0; i < modelos.length; i++) {
        let num = number_model + i;
        if (window.location.href.indexOf('#modelo-' + num.toString()) != -1) {
            let modelo = 'modelo-' + num.toString();
            openModal('_private/img/modelos', modelo);
        }
    }

    let groupFilters = document.getElementById('filter_group');

    groupFilters.addEventListener('click', clean_hash);

   function clean_hash() {
    window.location.hash = '';
   }
});
