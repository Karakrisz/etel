$(window).on("load", function () {
    $('#largeModal').modal('show');
});
// Ajax calls -------------;

$("#dailyofferSubmit").submit(function (event) {
    event.preventDefault();
    var dailyoffer_name = $("#dailyoffer_name").val();
    var dailyoffer_price = $("#dailyoffer_price").val();
    var dailyoffer_characterization = $("#dailyoffer_characterization").val();
    $.ajax({
        type: "POST",
        url: "/dailyOfferSubmit",
        data: "dailyoffer_name=" + dailyoffer_name + "&dailyoffer_price=" + dailyoffer_price + "&dailyoffer_characterization=" + dailyoffer_characterization,
        success: function () {
            $('.inserted-alert-success').fadeIn();
            $('#inserted').text('Sikeres étel rögzítés!');
            window.setTimeout('location.reload()', 3500);
        }
    });
});

$("#mondaySubmit").submit(function (event) {
    event.preventDefault();
    var monday_name = $("#monday_name").val();
    var monday_price = $("#monday_price").val();
    var monday_characterization = $("#monday_characterization").val();
    $.ajax({
        type: "POST",
        url: "/mondaySubmit",
        data: "monday_name=" + monday_name + "&monday_price=" + monday_price + "&monday_characterization=" + monday_characterization,
        success: function () {
            $('.inserted-alert-success').fadeIn();
            $('#monday-inserted').text('Sikeres étel rögzítés!');
            window.setTimeout('location.reload()', 3500);
        }
    });
});

$("#tuesdaySubmit").submit(function (event) {
    event.preventDefault();
    var tuesday_name = $("#tuesday_name").val();
    var tuesday_price = $("#tuesday_price").val();
    var tuesday_characterization = $("#tuesday_characterization").val();
    $.ajax({
        type: "POST",
        url: "/tuesdaySubmit",
        data: "tuesday_name=" + tuesday_name + "&tuesday_price=" + tuesday_price + "&tuesday_characterization=" + tuesday_characterization,
        success: function () {
            $('.inserted-alert-success').fadeIn();
            $('#tuesday-inserted').text('Sikeres étel rögzítés!');
            window.setTimeout('location.reload()', 3500);
        }
    });
});

$("#wednesdaySubmit").submit(function (event) {
    event.preventDefault();
    var wednesday_name = $("#wednesday_name").val();
    var wednesday_price = $("#wednesday_price").val();
    var wednesday_characterization = $("#wednesday_characterization").val();
    $.ajax({
        type: "POST",
        url: "/wednesdaySubmit",
        data: "wednesday_name=" + wednesday_name + "&wednesday_price=" + wednesday_price + "&wednesday_characterization=" + wednesday_characterization,
        success: function () {
            $('.inserted-alert-success').fadeIn();
            $('#wednesday-inserted').text('Sikeres étel rögzítés!');
            window.setTimeout('location.reload()', 3500);
        }
    });
});

$("#thursdaySubmit").submit(function (event) {
    event.preventDefault();
    var thursday_name = $("#thursday_name").val();
    var thursday_price = $("#thursday_price").val();
    var thursday_characterization = $("#thursday_characterization").val();
    $.ajax({
        type: "POST",
        url: "/thursdaySubmit",
        data: "thursday_name=" + thursday_name + "&thursday_price=" + thursday_price + "&thursday_characterization=" + thursday_characterization,
        success: function () {
            $('.inserted-alert-success').fadeIn();
            $('#thursday-inserted').text('Sikeres étel rögzítés!');
            window.setTimeout('location.reload()', 3500);
        }
    });
});

$("#fridaySubmit").submit(function (event) {
    event.preventDefault();
    var friday_name = $("#friday_name").val();
    var friday_price = $("#friday_price").val();
    var friday_characterization = $("#friday_characterization").val();
    $.ajax({
        type: "POST",
        url: "/fridaySubmit",
        data: "friday_name=" + friday_name + "&friday_price=" + friday_price + "&friday_characterization=" + friday_characterization,
        success: function () {
            $('.inserted-alert-success').fadeIn();
            $('#friday-inserted').text('Sikeres étel rögzítés!');
            window.setTimeout('location.reload()', 3500);
        }
    });
});

$(document).ready(function () {
    $.ajax({
        url: '/functions', // your php file
        type: 'GET', // type of the HTTP request
        success: function (data) {
            var obj = jQuery.parseJSON(data);
            console.log(obj);
        }
    });
});
// karaKrisz function calls -------------;

jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
jQuery('.quantity').each(function () {
    var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

    btnUp.click(function () {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
            var newVal = oldValue;
        } else {
            var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
    });

    btnDown.click(function () {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
            var newVal = oldValue;
        } else {
            var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
    });

});


// document.querySelectorAll(".check-soup-one").forEach(checkboxSoupOne => {
//     checkboxSoupOne.addEventListener('click', e => {
//         let text = document.getElementsByClassName("soup-one-checkbox-text");
//         var i;
//         for (i = 0; i < text.length; i++) {
//             if (checkboxSoupOne.checked == true) {
//                 text[i].style.display = "block";
//             } else {
//                 text[i].style.display = "none";
//             }
//         }
//     });
// });


// Get the modal
var modal = document.getElementById("placingContentImgModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("placingContentImgShow");
var test = document.getElementById("test");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("placing-content-img-modal-caption");
img.onclick = function () {
    modal.style.display = "block";
    modalImg.src = test.src;
    captionText.innerHTML = test.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("placing-content-close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}