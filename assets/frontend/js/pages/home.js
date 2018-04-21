$("#partner-slick").slick({
	infinite: true,
	slidesToShow: 5,
	slidesToScroll: 1,
	autoplay: true,
	nextArrow: false,
	prevArrow: false,
	autoplaySpeed: 2500,
	responsive: [
	{
		breakpoint: 1024,
		settings: {
			slidesToShow: 5,
			slidesToScroll: 1,
			infinite: true,
		}
	},
	{
		breakpoint: 600,
		settings: {
			slidesToShow: 3,
			slidesToScroll: 1
		}
	},
	{
		breakpoint: 480,
		settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		}
	}
	]
});