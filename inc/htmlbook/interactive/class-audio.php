<?php

namespace Pressbooks\HTMLBook\Interactive;

/**
 * Based on HTMLBook (Unofficial Draft 16 February 2016)
 *
 * HTML element: <audio>
 *
 * Note: Fallback content is strongly recommended for output formats that do not support HTML5 interactive content
 *
 * Example:
 *
 *     <audio id="new_slang">
 *       <source src="audio/new_slang.wav" type="audio/wav"/>
 *       <source src="audio/new_slang.mp3" type="audio/mp3"/>
 *       <source src="audionew_slang.ogg" type="audio/ogg"/>
 *       <em>Sorry, the &lt;audio&gt; element is not supported in your
 *       reading system. Hear the audio online at http://example.com.</em>
 *     </audio>
 *
 * @see http://oreillymedia.github.io/HTMLBook/#_audio
 */
class Audio {

	/**
	 * @var string
	 */
	protected $tag = 'audio';

	/**
	 * @var bool
	 */
	protected $dataTypeRequired = false;

	/**
	 * @var array
	 */
	protected $dataTypes = [];

}
