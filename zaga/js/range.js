$(document).ready(function () {
    $('.noUi-handle').on('click', function () { $(this).width(50); }); var rangeSlider = document.getElementById('slider-range'); var rangeSlider2 = document.getElementById('slider-range2'); noUiSlider.create(rangeSlider, { start: [200, 1000], step: 1, range: { 'min': [200], 'max': [1000] }, connect: true }); noUiSlider.create(rangeSlider2, { start: 50, step: 1, behaviour: 'snap', tooltips: [true], range: { 'min': 50, 'max': 240 }, connect: [true, false] }); rangeSlider.noUiSlider.on('update', function (values, handle) { document.getElementById('slider-range-value1').innerHTML = parseInt(values[0]); document.getElementById('slider-range-value2').innerHTML = parseInt(values[1]); }); rangeSlider2.noUiSlider.on('update', function (values, handle) { document.getElementById('slider-range-value3').innerHTML = parseInt(values[0]); }); var range1 = document.getElementById('slider-range-value1').innerHTML; var range2 = document.getElementById('slider-range-value2').innerHTML; var range3 = document.getElementById('slider-range-value3').innerHTML; $(document).ready(function () { $("#calculator__button").click(function () { sendAjaxForm('result_form', 'ajax_form', 'send.php'); return false; }); }); console.log(range1, range2, range3)
    function sendAjaxForm(result_form, ajax_form, url) { $.ajax({ url: url, type: "POST", dataType: "html", data: $("#" + ajax_form).serialize(), success: function (response) { result = $.parseJSON(response); $('#result_form').html('Имя: ' + result.first_name + '<br>Телефон: ' + result.phone + '<br> ціна від: ' + result.range1 + '<br> до : ' + result.range2 + '<br>  та людей: : ' + result.range3); }, error: function (response) { $('#result_form').html('Ошибка. Данные не отправлены.'); } }); }
});