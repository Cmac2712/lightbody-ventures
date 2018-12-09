function Menu () {
  var menuButton = document.getElementsByClassName('hamburger')[0];
  var slideout = new Slideout({
    'panel': document.getElementById('panel'),
    'menu': document.getElementById('mobile-nav'),
    'padding': 256,
    'tolerance': 70
  });

	slideout.on('beforeopen', function() {
		menuButton.classList.add('is-active');
	});

	slideout.on('beforeclose', function() {
		menuButton.classList.remove('is-active');
	});

	window.onresize = function () {
		var windowWidth = window.innerWidth;
  		var menuOpen = document.getElementsByTagName('html')[0].classList.contains('slideout-open');

		if (windowWidth > 768 && menuOpen) {
			menuButton.classList.remove('is-active');
			slideout.close();
		}
	}

  // Toggle button
  menuButton.addEventListener('click', function() {
      slideout.toggle();
  });

}

export default Menu;
