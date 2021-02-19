$(document).ready(function () {
    $('.header-panel__left-btn a').on('click', function () {
        $('.left-panel').toggleClass('active');
        $('.header-panel__left-logo').toggleClass('active');
    });
});

$(document).ready(function () {
    $('.left-panel__link-open').on('click', function () {
        $(".left-panel__users-dropdown").toggleClass('open');
    });
});

var someDiv = $('.left-panel a');
someDiv.on('click', function() {
	someDiv.removeClass('open');
  $(this).addClass('open');
});



var elem = document.documentElement;
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}

function closeFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.webkitExitFullscreen) { /* Safari */
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) { /* IE11 */
    document.msExitFullscreen();
  }
}



const name = 'László Horváth';

let getMonogram = (name) => {
  const words = name.toUpperCase().split(' ');
  let result = '';
  
  words.forEach(value => {
    result += value[0];
  });
  
  return result;
};

const monogram = getMonogram(name);

$('.profile__monogram').text(monogram);
$('.profile__name').text(name);