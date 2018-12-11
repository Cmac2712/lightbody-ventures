import { tween, styler } from 'popmotion'
import $ from 'jquery'
import _ from 'lodash'


function hoverExpand () {

	$(window).resize(_.debounce(_animate, 500))

	_animate()

	function _animate () {
		const $element = $('.hover-expand')

		$element.each(function () {
			const container = this.querySelector('.work-item__container');
			const maskStyler = styler(container)
			const $container = $(container)
			const thisHeight = $(this).outerHeight()
			const $title = $(this).find('.work-item__title')
			const titleStyler = styler($title[0])
			const titleHeight = $title.position().top + $title.outerHeight(true)
			const height = thisHeight - titleHeight
			const offset = -($container.width() - $title.width()) 

			maskStyler.set({ y: height, x: offset })
			titleStyler.set({ y: 0, x: ( $container.width() - $title.width() )})

			if ( $(window).width() < 768 ) {
				return;
			}

			$(this).hover(() => {

				tween({
					from: { y: height, x: offset }, 
					to : { y: 0, x: 0 }, 
					duration: 250
				}).start(maskStyler.set)

				tween({
					from: { y: 0, x: ( $container.width() - $title.width() ) }, 
					to : { y: 0, x: 0 }, 
					duration: 250
				}).start(titleStyler.set)

			}, () => {

				tween({
					from: { y: 0, x: 0 }, 
					to : { y: height, x: offset }, 
					duration: 250
				}).start(maskStyler.set)

				tween({
					from: { y: 0, x: 0 }, 
					to : { y: 0, x: ( $container.width() - $title.width() ) }, 
					duration: 250
				}).start(titleStyler.set)
			})
		})

	}

}

export default hoverExpand
