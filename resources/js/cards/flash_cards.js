$(document).ready(function(){
  if ($('#deck').length) {
    // FLIP
    $('#flipper').bind('click', function(){
      $('.flash-card.current').toggleClass('flip');
    });

    // CYCLE
    $('#deck').cycle({
      after:   onAfter,
      before:  onBefore,
      fx:      'shuffle',
      next:    '#next',
      prev:    '#prev',
      shuffle: {
        top:   -300,
        left:  20
      },
      speed:   'fast',
      timeout: 0,
      width: 0,
      containerResize: 0,
      slideResize: 0
    });
    function onBefore(){
      $(this).parent().find('.current').removeClass('current');
    }
    function onAfter(){
      $(this).addClass('current');

      var cardNum = $(this).data("card-number");

      $("#current-card").html( cardNum );
    }
    // Keyboard Nav
    $(document).keydown(function (e) {
      var keyCode = e.keyCode || e.which;
      key = {left: 37, up: 38, right: 39, down: 40, enter: 13, space: 32, questionMark: 191 };

      switch (keyCode) {
        case key.left:
          $('#deck').cycle('prev');
          e.preventDefault();
          break;
        case key.right:
          $('#deck').cycle('next');
          e.preventDefault();
          break;
        case key.up:
        case key.down:
        case key.enter:
        case key.space:
          $('.current').toggleClass('flip');
          e.preventDefault();
          break;
        case key.questionMark:
          $('#keyboard_shortcuts').fadeToggle();
          e.preventDefault();
          break;
      }
    });
    $('#keyboard_shortcuts_toggle').click(function(){
      $('#keyboard_shortcuts').fadeToggle();
    });
  } 
});