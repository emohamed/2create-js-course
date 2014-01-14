$(function() {
	$(window).on('statechange', function() {
		var state = History.getState();

		var request = $.ajax({
			type: "GET",
			url: state.url
		});

		request.done(function(response) {
			var $response = $(response);
			var $content = $response.find('.content-container > *');
			$('.content-container')
				.empty()
				.append($content);
		});

		return false;
	});
	$('.navigation a, .logo a').on('click', function () {
		History.pushState(null, this.title || "", this.href);
		return false;
	});
});