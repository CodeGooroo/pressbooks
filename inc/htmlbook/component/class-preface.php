<?php

namespace Pressbooks\HTMLBook\Component;

/**
 * Based on HTMLBook (Unofficial Draft 16 February 2016)
 *
 * HTML element: <section>
 *
 * Attribute requirements: `data-type="preface"`, `data-type="foreword"`, or `data-type="introduction"`, depending on content
 *
 * Content model: First child must be either <h1> that contains preface title, or Header block that contains preface
 * title and optional subtitle content; then zero or more Block Elements; then zero or more Sect1 children (<section
 * data-type="sect1">)
 *
 * Example
 *
 *     <section data-type="preface">
 *       <h1>Preface Title</h1>
 *       <p>Preface content</p>
 *       <section data-type="sect1">
 *         <!-- Section content here... -->
 *       </section>
 *     </section>
 *
 * @see http://oreillymedia.github.io/HTMLBook/#_preface
 */
class Preface {

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
		'preface',
		'foreword',
		'introduction',
	];

}
