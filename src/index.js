window.onload = () => {
	function throttle(func, timeFrame) {
		var lastTime = 0;
		return function() {
			var now = new Date();
			if (now - lastTime >= timeFrame) {
				func();
				lastTime = now;
			}
		}
	}

	const nav = document.querySelector('.header-nav');
	const hero = document.querySelector('.hero');
	const heroText = document.querySelector('.hero-inner');

	function handleScroll(e) {
		const pxUntilHero = window.pageYOffset - hero.offsetHeight;

		if (pxUntilHero >= -nav.offsetHeight) {
			nav.classList.add('is-fixed');
		}

		else {
			nav.classList.remove('is-fixed');
		}

	  var fade = (((hero.offsetHeight * 0.75) - window.pageYOffset) / (hero.offsetHeight * 0.75));
	  var scale = (((hero.offsetHeight * 4) - window.pageYOffset) / (hero.offsetHeight * 4));

	  heroText.style.opacity = fade >= 0 ? fade : 0;
	  heroText.style.transform = `translateY(${window.pageYOffset <= window.innerHeight ? window.pageYOffset / 2 : 0}px) scale(${scale >= 0 ? scale : 0})`;
	}

	// ready
	document.querySelector('html').classList = '';

	// scrolling
	if (window.innerWidth >= 756) {
		document.querySelector('html').classList = 'is-big-enough';

		document.addEventListener("scroll", throttle(function(e) {
			handleScroll(e)
		}, 60));
	};
}