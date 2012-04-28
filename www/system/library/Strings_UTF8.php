<?php
/**
 *	FVAL PHP Framework for Web Applications\n
 *	Copyright (c) 2007-2011 FVAL Consultoria e Informática Ltda.\n
 *	Copyright (c) 2007-2011 Fernando Val
 *
 *	\warning Este arquivo é parte integrante do framework e não pode ser omitido
 *
 *	\version 1.2.1
 *
 *	\brief Classe para tratamento de strings em formato UTF-8
 */

class Strings_UTF8 extends Strings {

	/**
	 *	\brief Troca caracteres acentuados por não acentuado
	 */
	public static function remove_accented_chars($txt) {
		$txt = preg_replace('/[áàâãåäªÁÀÂÄÃª]/u', 'a', $txt);
		$txt = preg_replace('/[éèêëÉÈÊË]/u',      'e', $txt);
		$txt = preg_replace('/[íìîïÍÌÎÏ]/u',      'i', $txt);
		$txt = preg_replace('/[óòôõöºÓÒÔÕÖº]/u',  'o', $txt);
		$txt = preg_replace('/[úùûüÚÙÛÜµ]/u',     'u', $txt);
		$txt = preg_replace('/[ñÑ]/u',            'n', $txt);
		$txt = preg_replace('/[çÇ]/u',            'c', $txt);
		$txt = preg_replace('/[ÿ¥]/u',            'y', $txt);
		$txt = preg_replace('/[¹]/u',             '1', $txt);
		$txt = preg_replace('/[²]/u',             '2', $txt);
		$txt = preg_replace('/[³]/u',             '3', $txt);
		$txt = preg_replace('/[Ææ]/u',           'ae', $txt);
		$txt = preg_replace('/[Øø]/u',            '0', $txt);
		$txt = preg_replace('/[†°¢£§•¶ß®©™´¨≠±≤≥∂∑∏π∫Ω]/u', '', $txt);

		return $txt;
	}

	/**
	 *	/brief Converte uma string UTF-8 para Windows-CP-1252
	 */
	public static function convert_to_windowscp1252($string) {
		$chars = array( 'Ç', 'Ä', '£', 'Ä', 'Å', 'Ç', 'É', 'Ñ', 'Ö', 'Ü', 'á', 'à', 'â', 'ä', 'ã', 'å', 'ç', 'é', 'è', 'ê', 'ë', 'í', 'ì', 'î', 'ï', 'ñ', 'ó', 'ò', 'ô', 'ö', 'õ', 'ú', 'ù', 'û', 'ü', '†', '°', '¢', '£', '§', '•', '¶', 'ß', '®', '©', '™', '´', '¨', '≠', 'Æ', 'Ø', '∞', '±', '≤', '≥', '¥', 'µ', '∂', '∑', '∏', 'π', '∫', 'ª', 'º', 'Ω', 'æ', 'ø', );
		$cp1252 = array( chr(128), chr(146), chr(163), chr(192), chr(193), chr(194), chr(195), chr(196), chr(197), chr(198), chr(199), chr(200), chr(201), chr(202), chr(203), chr(204), chr(205), chr(206), chr(207), chr(208), chr(209), chr(210), chr(211), chr(212), chr(213), chr(214), chr(215), chr(216), chr(217), chr(218), chr(219), chr(220), chr(221), chr(222), chr(223), chr(224), chr(225), chr(226), chr(227), chr(228), chr(229), chr(230), chr(231), chr(232), chr(233), chr(234), chr(235), chr(236), chr(237), chr(238), chr(239), chr(240), chr(241), chr(242), chr(243), chr(244), chr(245), chr(246), chr(247), chr(248), chr(249), chr(250), chr(251), chr(252), chr(253), chr(254), chr(255), );

		return str_replace($chars, $cp1252, $string);
	}
}