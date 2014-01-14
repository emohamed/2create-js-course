$(function() {
	$('.navigation a, .logo a').on('click', function () {
		var request = $.ajax({
			type: "GET",
			url: this.href
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
});