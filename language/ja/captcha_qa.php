<?php
/**
*
* captcha_qa [Japanese]
*
* @package language
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> '答えを正確に入力してください。答えられるかどうかでスパムボットか否かを判定します。',
	'CONFIRM_QUESTION_WRONG'	=> 'クイズの答え が不正解です',

	'QUESTION_ANSWERS'			=> '答え',
	'ANSWERS_EXPLAIN'			=> '答えを正確に入力してください。答えは複数設定することが可能です。その場合、１行につき１つの答えを入力してください。',
	'CONFIRM_QUESTION'			=> 'クイズ',

	'ANSWER'					=> '答え',
	'EDIT_QUESTION'				=> '答えの編集',
	'QUESTIONS'					=> 'クイズ',
	'QUESTIONS_EXPLAIN'			=> 'ここで作成された “クイズ” と “答え” が CAPTCHA として使用されます。掲示板のデフォルト言語で少なくとも１つ “クイズ” を作成するまでこの CAPTCHA は有効化されない点にご注意ください。“クイズ” はユーザーが答えられるぐらい簡単で且つスパムボットが答えられないくらい難しいものが望ましいです。この CAPTCHA プラグインは “クイズ” の数が多ければ多いほど、また “クイズ” を定期的に更新すればするほど効果を発揮します。',
	'QUESTION_DELETED'			=> 'クイズを削除しました',
	'QUESTION_LANG'				=> '言語',
	'QUESTION_LANG_EXPLAIN'		=> 'どの言語でクイズを作成するか指定してください。できれば言語毎にクイズを作成してください。',
	'QUESTION_STRICT'			=> '厳密にチェック',
	'QUESTION_STRICT_EXPLAIN'	=> '“はい” にした場合、大文字・小文字の違いと半角スペースの有無がチェックされます',

	'QUESTION_TEXT'				=> 'クイズ',
	'QUESTION_TEXT_EXPLAIN'		=> 'ユーザーに表示されるクイズです',

	'QA_ERROR_MSG'				=> '全てのクイズに答えてください',
	'QA_LAST_QUESTION'			=> 'この CAPTCHA プラグインが有効な間は “クイズ” を1つ残らず削除することはできません',
	
));

?>