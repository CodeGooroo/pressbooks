<?php

namespace Pressbooks\HTMLBook\Component;

/**
 * Based on HTMLBook (Unofficial Draft 16 February 2016)
 *
 * HTML element: <section>
 *
 * Attribute requirements: `data-type="bibliography"`
 *
 * Content model: First child must be either <h1> that contains bibliography title, or Header block that contains
 * bibliography title and optional subtitle content; then zero or more Block Elements; then zero or more Sect1
 * children (<section data-type="sect1">)
 *
 * Example
 *
 *     <section data-type="bibliography">
 *       <h1>Bibliography Title</h1>
 *       <p>Bibliography content</p>
 *       <section data-type="sect1">
 *         <!-- Section content here... -->
 *       </section>
 *     </section>
 *
 * @see http://oreillymedia.github.io/HTMLBook/#_bibliography
 */
class Bibliography {

	/**
	 * @var string
	 */
	protected $tag = 'section';

	/**
	 * @var bool
	 */
	protected $dataTypeRequired = true;

	/**
	 * @var array
	 */
	protected $dataTypes = [
		'bibliography',
	];

}
