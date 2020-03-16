$(document).ready(function () {
	$('.navbar-burger').click(function (event) {
		$('.navbar-burger, .navbar').toggleClass('active');
		$('body').toggleClass('lock');
	})
})
