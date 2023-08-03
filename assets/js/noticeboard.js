$('.notice').easyTicker({

  // or 'down'
  direction: 'up',

  // easing function
  easing: 'swing',

  // animation speed
  speed: 'slow',

  // animation delay
  interval: 3000,

  // height
  height: '180px',

  // the number of visible elements of the list
  visible: 0,

  // enables pause on hover
  mousePause: true,

  // enables autoplay
  autoplay: true,

  // custom controls
  controls: {
    up: '',
    down: '',
    toggle: '',
    playText: 'Play',
    stopText: 'Stop'
  },

  // callbacks
  callbacks: {
    before: function(ul, li){
      // do something
    },
    after: function(ul, li){
      // do something
    },
    finish: function(ul, li){
      // do something
    }
  }
  
});