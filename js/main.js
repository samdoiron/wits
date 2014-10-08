
$(function () {
	var CONFIG = {
		selectors: {
			imageSection: '.red-section'
		}
	},
		$imageSection = $(CONFIG.selectors.imageSection),
		i, j,  $image;

	for (i = 0; i < 50; ++i) {
		for (j = 0; j < 50; ++j) {
			$image = $('<img>')
				.attr('src', 'http://placekitten.com/g/50/50')
				.css({
					position: 'absolute',
					top: i * 50,
					left: j * 50,
					zIndex: 0,
					opacity: 0.125
				});
			$imageSection.append($image);
		}
	}
});

