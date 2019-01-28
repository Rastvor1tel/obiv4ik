new WOW().init();
// Калькулятор
var calculatorStep = 1;
var currentFurniture = 'calc-1'; // Диван
function calcCheckStep() {
    for (var i=1; i<7; i++) {
        if (calculatorStep == i) {
            if (i > 1) {
                $('.furChoose').hide();
                $('.ourCalc__nav').show();
            } else {
                $('.furChoose').show();
                $('.ourCalc__nav').hide();
            }
            if (i > 4) {
                $('.ourCalc__totalPrice').show();
            } else {
                $('.ourCalc__totalPrice').hide();
            }
            $('.js-calcStep').hide();
            $('.ourCalc__'+i+'step').show();
            $('.ourCalc__navTab').removeClass('is-active');
            $('.ourCalc__navTab:eq('+(i-2)+')').addClass('is-active');
            $('.calc-option').hide();
            $('.' + currentFurniture).show();
        }
    }
}
calcCheckStep();

$('.minus').click(function () {
    var $input = $(this).siblings('input');
    var count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
    return false;
});
$('.plus').click(function () {
    var $input = $(this).siblings('input');
    $input.val(parseInt($input.val()) + 1);
    $input.change();
    return false;
});


$('.deliveryTabs #deliveryTab-2').click(function() {
    $('.option.region').show();
});
$('.deliveryTabs #deliveryTab-1').click(function() {
    $('.option.region').hide();
});

$('.ourCalc__1step > div .calc-label').click(function() {
    currentFurniture = $(this).parent().find('input').attr('id');
    var img = $(this).children('.img').children('img').prop('src');
    var title = $(this).text();
    calculatorStep = 2;
    $('.ourCalc__2step .calc-label').text(title);
    $('.ourCalc__2step .calc-label').append('<div class="img"><img src="'+img+'"></div>')
    calcCheckStep();
});

$('.ourCalc .step-prev').click(function() {
    calculatorStep -= 1;
    calcCheckStep();
});
$('.ourCalc .step-next').click(function() {
    calculatorStep += 1;
    calcCheckStep();
});

$('.ourCalc__navTab').click(function() {
    calculatorStep = $(this).index() + 2;
    calcCheckStep();
});

// --------------------------------------------------