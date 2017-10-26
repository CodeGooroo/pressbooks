<?php

namespace Pressbooks\HTMLBook\Interactive;

/**
 * Based on HTMLBook (Unofficial Draft 16 February 2016)
 *
 * HTML element: <canvas>
 *
 * Notes: Should include fallbacks for environments that don’t support HTML5 or JavaScript (e.g., link or image).
 * You may include <script> elements in your HTMLBook document <head> elements to include/reference JS code
 * for Canvas handling.
 *
 * Examples:
 *
 *     <canvas id="canvas" width="400" height="400">
 *       Your browser does not support the HTML 5 Canvas. See the interactive example at http://example.com.
 *     </canvas>
 *
 * @see https://oreillymedia.github.io/HTMLBook/#_canvas
 */
class Canvas {

	/**
	 * @var string
	 */
	protected $tag = 'canvas';

	/**
	 * @var bool
	 */
	protected $dataTypeRequired = false;

	/**
	 * @var array
	 */
	protected $dataTypes = [];

}
