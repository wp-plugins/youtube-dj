<?php

class Youtubedj_Deck {
	function __construct() {
		
	}

	function html( $id, $title, $movie_code = false, $queue = false ) {
		$html  = '<div id="' . $id . '" class="deck gear">';
		$html .= '<h2>' . $title . '</h2>';

		$html .= '<div id="' . $id . '-player" class="player"';

		if( $movie_code )
			$html .= ' movie="' . $movie_code . '"';

		if( $queue )
			$html .= ' queue="' . $queue . '"';

		$html .= '></div>';

		$html .= '<div class="btns">';
		$html .= '<a class="play">Play</a>';
		$html .= '<a class="pause">Pause</a>';
		$html .= '<a class="stop">Stop</a>';
		$html .= '</div>';
	
		$html .= '<div class="fader"><div class="gain"></div></div>';

		$html .= '</div>';

		return $html;
	}
}