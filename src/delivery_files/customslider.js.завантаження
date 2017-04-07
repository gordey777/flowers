/*
* Minimal slider v0.4 beta
*
* Autor: Metotron
* http://pr-solution.ru/
* © PR Solution, 2016
*/

Slider = function(obj)
{
	var sldr = this;
	this.slider = $(obj);
	this.slidelist = $('.slider_area', this.slider);			//Контейнер слайдов
	this.slideElement = '.item';								//Оболочка слайда
	this.slides = $(this.slideElement, this.slidelist);

	$('.next', this.slider).click(function() {sldr.slideLeft()});
	$('.prev', this.slider).click(function() {sldr.slideRight()});
	
	this.slideRight = function() {
		var offset= parseInt(this.slides.eq(0).css('width'));
		this.slides.eq(this.slides.length-1).clone(true).prependTo(this.slidelist);
		this.slides = $(this.slideElement, this.slidelist);
		this.slides.eq(0).css('margin-left', -offset).animate(
			{marginLeft: 0},
			500,
			'linear',
			function() {
				sldr.slides.eq(sldr.slides.length-1).remove();
				sldr.slides = $(sldr.slideElement, sldr.slidelist);
			}
		)
	}

	this.slideLeft = function() {
		var offset= parseInt(this.slides.eq(0).css('width'));
		this.slides.eq(0).clone(true).appendTo(this.slidelist);
		this.slides = $(this.slideElement, this.slidelist);
		this.slides.eq(0).animate(
			{marginLeft: -offset},
			500,
			'linear',
			function() {
				sldr.slides.eq(0).remove();
				sldr.slides = $(sldr.slideElement, sldr.slidelist);
			}
		)
	}
}