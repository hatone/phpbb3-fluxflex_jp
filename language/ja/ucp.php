<?php
/**
*
* ucp [Japanese]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translator: ocean=Yohsuke < n/a > ( n/a ) http://bbmods.info/bbs/
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> ' “%1$s” （ 以下 “私達”, “掲示板”, “当サイト”, “%1$s”, “%2$s” ） を利用するに当たって、あなたは以下の規約に同意しているものと見なされます。規約に同意しない場合、 “%1$s” の利用を行わないでください。私達はいつでもこの規約を変更できます。更新・変更された後も “%1$s” を利用している間、あなたは常にこれらの規約に同意しているものと見なされます。<br />
	<br />
	当サイトは phpBB （以下 “phpBBソフトウェア”, “www.phpbb.com”, “phpBB Group”, “phpBB Teams” ） によって構築されています。phpBBソフトウェア は “<a href="http://opensource.org/licenses/gpl-license.php">General Public License</a>” （以下 “GPL” ） 下でリリースされたフォーラムソリューションであり、<a href="http://www.phpbb.com/">www.phpbb.com</a> にてダウンロードできます。phpBBソフトウェア はインターネットでの議論やコミュニケーションをより円滑に行うために phpBB Group によって開発されましたが、phpBB Group は phpBBソフトウェア 上でなされた議論の内容やユーザーの行為には一切責任を負いません。phpBB に関する詳細な情報を知るには <a href="http://www.phpbb.com/">http://www.phpbb.com/</a> をご覧ください。<br />
	<br />
	口汚い記事、猥褻な言葉、品性を欠く記事、他人を中傷する記事、嫌悪感を与える記事、脅迫的な記事、性的差別につながる記事、 “%1$s” のホストサーバが存在する国の法律または国際法に違反する記事、以上を投稿しないことをあなたは同意します。この規約を破った場合、対象ユーザーのアカウント停止が即座に行われます（場合によっては対象ユーザーのプロバイダに報告されます）。この措置を実行するため、全ての投稿記事には投稿者の IPアドレス が記録されます。 “%1$s” は必要と判断すればいつでも掲示板の投稿記事を削除、編集、移動、凍結、閉鎖できることをあなたは同意します。あなたが掲示板で入力した情報はデータベースに保管されることをあなたは同意します。あなたの同意がない限りこの情報は第三者に公開されることはありませんが、ハッキング等によるデータの損傷や盗難があった場合、 “%1$s” と phpBB はその責任を一切負いません。
	',

	'PRIVACY_POLICY'		=> 'このポリシーは “%1$s” とその関連団体 （以下 “私達”, “掲示板”, “当サイト”, “%1$s”, “%2$s” ） さらには phpBB （以下 “phpBBソフトウェア”, “www.phpbb.com”, “phpBB Group”, “phpBB Teams” ） が、あなたが当サイトへアクセスすることによって発生した情報あるいはあなたが当サイトで入力し送信した情報 （以下 “あなたの情報” ） をどのように利用するかを述べたものです。<br />
	<br />
	あなたの情報は２つの方法で発生します。１つは、 “%1$s” のページを閲覧することによって phpBBソフトウェア が cookie をいくつか作成します。cookie 情報はウェブサーバ上にテキストファイルとして作成され、このファイルは閲覧要求の際にあなたのローカルコンピュータのウェブブラウザにダウンロードされます。作成される cookie の１番目と２番目は ユーザーID （以下 “user-id” ） と 匿名セッションID （以下 “session-id” ） であり、これら ID情報 は phpBBソフトウェア によって自動的にあなたに割り当てられます。作成される cookie の３番目は “%1$s” 内のトピックを閲覧した時に作成されます。この cookie はトピックの既読情報を保管するのに使用され、サイト閲覧の利便性を向上させます。<br />
	<br />
	“%1$s” には、phpBBソフトウェア 以外のソフトウェア （MODなど） によって動作するページがあるかもしれません。それらの中にはアクセスすることによって cookie を作成するものもあるでしょう。しかしこのドキュメントは phpBBソフトウェア の使用によって発生するあなたの情報の取り扱いについて述べたものであり、他のソフトウェアの使用によって発生するあなたの情報については関知しない点にご注意ください。<br />
	<br />
	当サイトへアクセスすることによって発生するあなたの情報の残りもう１つは、あなたが私達に送信するデータです。具体的には、ゲストユーザーとして投稿したデータ （以下 “ゲストの投稿記事”） 、“%1$s” にユーザー登録する際に送信したデータ （以下 “あなたのアカウント情報”） 、登録ユーザーとして投稿したデータ （以下 “あなたの投稿記事” ） です。<br />
	<br />
	あなたのアカウント情報には一意的に判別できる名前 （以下 “あなたのユーザー名” ） 、ログインに必要なパスワード （以下 “あなたのパスワード” ） 、有効なメールアドレス （以下 “あなたのメールアドレス” ） が含まれています。 “%1$s” におけるこれらあなたの情報は、当サイトのホストサーバが存在する国・地域のデータ保護法によって守られています。ユーザー登録の際に要求される、あなたのユーザー名、パスワード、メールアドレス以外の情報はオプション的なものであり入力しなくてもかまいません。あなたはご自分のアカウント情報のどの情報を公開するかをご自分で選択できます。さらにあなたは phpBBソフトウェア からの自動送信メールについて、許可・不許可を選択できます。<br />
	<br />
	あなたのパスワードは暗号 （一方向性ハッシュ） 化されているため安全です。しかし複数のサイトで同じパスワードを使用することは望ましくありません。あなたのパスワードは “%1$s” のあなたのアカウントにアクセスする唯一の手段なので大切に管理してください。いかなる状況においても “%1$s” の関係者、phpBB Group または phpBB Group の関連団体があなたのパスワードをあなたに問い合わせるようなことはありません。もしパスワードを忘れるようなことがあればログインページ内の “パスワードを忘れてしまいました” リンクをクリックしてください。移動先のページであなたのユーザー名とメールアドレスを入力し送信が完了し次第、phpBBソフトウェア はあなたのアカウントのための新しいパスワードを発行します。<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'アカウントは有効化されました。ユーザー登録して頂きありがとうございます。',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'アカウントは有効化されました',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'アカウントは再有効化されました',
	'ACCOUNT_ADDED'					=> 'ユーザー登録して頂きありがとうございます。アカウントは作成されました。ユーザー名とパスワードを入力すればログインできます。',
	'ACCOUNT_COPPA'					=> 'アカウントは作成されました。ログインするにはアカウントの有効化が必要です。詳細はメールをご確認ください。',
	'ACCOUNT_EMAIL_CHANGED'			=> 'アカウントは更新されました。ログインするにはアカウントの再有効化が必要です。有効化キーは既にあなたの新しいメールアドレスに送信済みです。詳細はメールをご確認ください。',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'アカウントは更新されました。ログインするには管理人によるアカウントの再有効化が必要です。アカウント再有効化の要請メールは既に管理人に送信済みです。あなたのアカウントが再有効化され次第、その旨の通知メッセージがあなたに送信されます。',
	'ACCOUNT_INACTIVE'				=> 'アカウントは作成されました。ログインするにはアカウントの有効化が必要です。有効化キーは既にあなたのメールアドレスに送信済みです。詳細はメールをご確認ください。',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'アカウントは作成されました。ログインするには管理人によるアカウントの再有効化が必要です。アカウント再有効化の要請メールは既に管理人に送信済みです。あなたのアカウントが再有効化され次第、その旨の通知メッセージがあなたに送信されます。',
	'ACTIVATION_EMAIL_SENT'			=> 'アカウント有効化メールをあなたのメールアドレスへ送信しました',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'アカウント有効化メールを Admin のメールアドレスへ送信しました',
	'ADD'							=> '追加',
	'ADD_BCC'						=> '追加 [ BCC ]',
	'ADD_FOES'						=> 'ブロックユーザーの追加',
	'ADD_FOES_EXPLAIN'				=> '１行につき１つのユーザー名を入力してください',
	'ADD_FOLDER'					=> 'フォルダの追加',
	'ADD_FRIENDS'					=> 'フレンドユーザーの追加',
	'ADD_FRIENDS_EXPLAIN'			=> '１行につき１つのユーザー名を入力してください',
	'ADD_NEW_RULE'					=> '新しいルールの追加',
	'ADD_RULE'						=> 'ルールの追加',
	'ADD_TO'						=> '追加 [ To ]',
	'ADD_USERS_UCP_EXPLAIN'			=> 'ここではユーザーをグループに追加できます。追加したユーザーのデフォルトグループをこのグループに変更することもできます。１行につき１つのユーザー名を入力してください。',
	'ADMIN_EMAIL'					=> '管理人からの通知をメールで受信する',
	'AGREE'							=> '規約に同意します',
	'ALLOW_PM'						=> 'プライベートメッセージを受信する',
	'ALLOW_PM_EXPLAIN'				=> ' “いいえ” に設定した場合でも管理人とモデレータからの受信は拒否できない点にご注意ください',
	'ALREADY_ACTIVATED'				=> 'あなたのアカウントは既に有効化されています',
	'ATTACHMENTS_EXPLAIN'			=> '添付ファイルのリストです',
	'ATTACHMENTS_DELETED'			=> '添付ファイルの削除に成功しました',
	'ATTACHMENT_DELETED'			=> '添付ファイルの削除に成功しました',
	'AVATAR_CATEGORY'				=> 'カテゴリ',
	'AVATAR_EXPLAIN'				=> '使用できる最大サイズ; <br />横幅: %1$d px, 高さ: %2$d px, ファイルサイズ: %3$.2f KiB',
	'AVATAR_FEATURES_DISABLED'		=> 'アバター機能は無効化されています',
	'AVATAR_GALLERY'				=> 'アバターギャラリー',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'アバターを %s へアップロードできませんでした',
	'AVATAR_NOT_ALLOWED'			=> 'アバター機能が無効化されているため、このアバターは表示されません',
	'AVATAR_PAGE'					=> 'ページ',
	'AVATAR_TYPE_NOT_ALLOWED'		=> 'アバターのタイプが許可されていないため、このアバターは表示されません',

	'BACK_TO_DRAFTS'			=> '下書きのリストに戻る',
	'BACK_TO_LOGIN'				=> 'ログインページに戻る',
	'BIRTHDAY'					=> '誕生日',
	'BIRTHDAY_EXPLAIN'			=> ' “年” を指定すると誕生日に年齢が表示されます',
	'BOARD_DATE_FORMAT'			=> '日付フォーマット',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'フォーマットは PHP の <a href="http://www.php.net/date">date()</a> 関数で使われているものと同様です',
	'BOARD_DST'					=> 'サマータイム/<abbr title="Daylight Saving Time">DST</abbr> を有効にする',
	'BOARD_LANGUAGE'			=> '掲示板の言語',
	'BOARD_STYLE'				=> '掲示板のスタイル',
	'BOARD_TIMEZONE'			=> 'タイムゾーン',
	'BOOKMARKS'					=> 'ブックマーク',
	'BOOKMARKS_EXPLAIN'			=> 'ここではトピックのブックマーク （お気に入り） を管理できます。ブックマークを削除する場合はチェックボックスを選択し、<em>ブックマークを削除する</em> ボタンをクリックしてください。',
	'BOOKMARKS_DISABLED'		=> 'この掲示板のブックマーク機能は無効化されています。',
	'BOOKMARKS_REMOVED'			=> 'ブックマークの削除に成功しました',

	'CANNOT_EDIT_MESSAGE_TIME'	=> '有効期限が過ぎたため、メッセージを 編集/削除 できません',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> '削除するフォルダにメッセージを移動させることはできません',
	'CANNOT_MOVE_FROM_SPECIAL'	=> '送信ボックス内のメッセージを移動させることはできません',
	'CANNOT_RENAME_FOLDER'		=> 'このフォルダをリネームすることはできません',
	'CANNOT_REMOVE_FOLDER'		=> 'このフォルダを削除することはできません',
	'CHANGE_DEFAULT_GROUP'		=> 'デフォルトグループの変更',
	'CHANGE_PASSWORD'			=> 'パスワードの変更',
	'CLICK_GOTO_FOLDER'			=> '%1$sフォルダ “%3$s” へ移動する%2$s',
	'CLICK_RETURN_FOLDER'		=> '%1$sフォルダ “%3$s” に戻る%2$s',
	'CONFIRMATION'				=> '認証コードの入力',
	'CONFIRM_CHANGES'			=> '変更の確認',
	'CONFIRM_EMAIL'				=> 'メールアドレス （確認）',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'メールアドレスを変更している場合のみ入力してください',
	'CONFIRM_EXPLAIN'			=> '不正プログラムによるログインを防ぐため、ユーザー登録するには認証コードの入力が必要です。認証コードは画像に表示されています。画像が表示されない、もしくは視覚的に問題がある場合は%s管理人%sにご連絡ください。',
	'VC_REFRESH'				=> 'リフレッシュ',
	'VC_REFRESH_EXPLAIN'		=> 'もし認証コードを判読できない場合、"リフレッシュ" ボタンをクリックしてください',
	
	'CONFIRM_PASSWORD'			=> 'パスワード （確認）',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'パスワードを変更している場合のみ入力してください',
	'COPPA_BIRTHDAY'			=> 'このサイトは COPPA （児童・オンラインプライバシー保護法） に準拠しているため、登録ユーザーの年齢を確認する必要があります。ユーザー登録するにはあなたがいつ生まれたかを私達に教えてください。',
	'COPPA_COMPLIANCE'			=> 'COPPA の準拠',
	'COPPA_EXPLAIN'				=> '送信ボタンをクリックすればアカウントの登録は完了しますが、両親または保護者に承諾してもらうまでアカウントは有効化されません。両親または保護者のサインを記入してもらうするためのフォームを記載したメールが送信されますのでそちらをご覧ください。サイン記入済みフォームの送り先もそのメールに記載されています。',
	'CREATE_FOLDER'				=> 'フォルダの追加…',
	'CURRENT_IMAGE'				=> '現在の画像',
	'CURRENT_PASSWORD'			=> '現在のパスワード',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'パスワード、メールアドレス、ユーザー名を変更するには現在のパスワードを入力する必要があります',
	'CUR_PASSWORD_ERROR'		=> '現在のパスワードが正しくありません',
	'CUSTOM_DATEFORMAT'			=> 'カスタム…',

	'DEFAULT_ACTION'			=> 'デフォルト動作',
	'DEFAULT_ACTION_EXPLAIN'	=> '上記動作を実行できない場合、この動作が実行されます',
	'DEFAULT_ADD_SIG'			=> '常にサインを追加する',
	'DEFAULT_BBCODE'			=> '常に BBCode を有効にする',
	'DEFAULT_NOTIFY'			=> '常に返信を通知する',
	'DEFAULT_SMILIES'			=> '常にスマイリーを有効にする',
	'DEFINED_RULES'				=> '作成したルール',
	'DELETED_TOPIC'				=> 'トピックは削除されました',
	'DELETE_ATTACHMENT'			=> '添付ファイルの削除',
	'DELETE_ATTACHMENTS'		=> '添付ファイルの削除',
	'DELETE_ATTACHMENT_CONFIRM'	=> '添付ファイルを本当に削除してもよろしいですか？',
	'DELETE_ATTACHMENTS_CONFIRM'=> '添付ファイルを本当に削除してもよろしいですか？',
	'DELETE_AVATAR'				=> 'このアバター画像を削除する',
	'DELETE_COOKIES_CONFIRM'	=> 'この掲示板のすべての cookie を本当に消去してもよろしいですか？',
	'DELETE_MARKED_PM'			=> 'メッセージの削除',
	'DELETE_MARKED_PM_CONFIRM'	=> '選択したメッセージを本当に削除してもよろしいですか？',
	'DELETE_OLDEST_MESSAGES'	=> '一番古いメッセージを削除する',
	'DELETE_MESSAGE'			=> 'メッセージの削除',
	'DELETE_MESSAGE_CONFIRM'	=> 'プライベートメッセージを本当に削除してもよろしいですか？',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'フォルダ内のメッセージもすべて削除する',
	'DELETE_RULE'				=> 'ルールの削除',
	'DELETE_RULE_CONFIRM'		=> 'ルールを本当に削除してもよろしいですか？',
	'DEMOTE_SELECTED'			=> 'グループリーダーを辞任する',
	'DISABLE_CENSORS'			=> '言語フィルタを有効にする',
	'DISPLAY_GALLERY'			=> 'アバターギャラリーの表示',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> '入力したメールアドレスのドメインは有効な MXレコード ではありません',
	'DOWNLOADS'					=> 'ダウンロード',
	'DRAFTS_DELETED'			=> '選択した下書きをすべて削除しました',
	'DRAFTS_EXPLAIN'			=> 'ここではセーブした下書きのロード （読み込み） 、閲覧・編集、削除を行うことができます',
	'DRAFT_UPDATED'				=> '下書きの更新に成功しました',

	'EDIT_DRAFT_EXPLAIN'		=> 'ここでは下書きの編集を行うことができます。添付ファイルと投票を下書きに含めることはできません。',
	'EMAIL_BANNED_EMAIL'		=> '入力した メールアドレス は禁止されています',
	'EMAIL_INVALID_EMAIL'		=> '入力した メールアドレス は無効です',
	'EMAIL_REMIND'				=> 'このフォーラムサイトであなたが登録したユーザーアカウントのメールアドレスを入力してください。ユーザーCP でメールアドレスを変更していない場合、ユーザー登録した際に入力したメールアドレスを入力してください。',
	'EMAIL_TAKEN_EMAIL'			=> '入力した メールアドレス は既に他のユーザーによって使用されています',
	'EMPTY_DRAFT'				=> '下書きをセーブするにはメッセージ本文を入力する必要があります',
	'EMPTY_DRAFT_TITLE'			=> '下書きの件名が入力されていません',
	'EXPORT_AS_XML'				=> 'XML 形式',
	'EXPORT_AS_CSV'				=> 'CSV 形式',
	'EXPORT_AS_CSV_EXCEL'		=> 'CSV 形式 （ Excel ）',
	'EXPORT_AS_TXT'				=> 'TXT 形式',
	'EXPORT_AS_MSG'				=> 'MSG 形式',
	'EXPORT_FOLDER'				=> 'フォルダのエクスポート',

	'FIELD_REQUIRED'					=> 'フィールド “%s” は必ず入力・指定する必要があります',
	'FIELD_TOO_SHORT'					=> 'フィールド “%1$s” の値が短すぎます。%2$d 字以上である必要があります。',
	'FIELD_TOO_LONG'					=> 'フィールド “%1$s” の値が長すぎます。%2$d 字以下である必要があります。',
	'FIELD_TOO_SMALL'					=> 'フィールド “%1$s” の値が小さすぎます。%2$d 以上である必要があります。',
	'FIELD_TOO_LARGE'					=> 'フィールド “%1$s” の値が大きすぎます。%2$d 以下である必要があります。',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'フィールド “%s” の値は無効です。数字のみ使用可能です。',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'フィールド “%s” の値は無効です。アルファベット・数字のみ使用可能です。',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'フィールド “%s” の値は無効です。アルファベット・数字・スペースと符号 -+_[] のみ使用可能です。',
	'FIELD_INVALID_DATE'				=> 'フィールド “%s” の値は正しい日付フォーマットではありません',
	'FIELD_INVALID_VALUE'				=> 'フィールド “%s” の値は不正です',

	'FOE_MESSAGE'				=> 'ブロックユーザーからのメッセージ',
	'FOES_EXPLAIN'				=> 'ユーザーをブロックリストに追加するとそのユーザーを無視できます： ブロックユーザーが投稿した記事はデフォルトで非表示になります。ブロックユーザーがあなたにプライベートメッセージを送信することは依然可能ですが、あなたはそれを自ら作成したルールによってブロックできます。モデレータと Admin をブロックリストに追加することはできない点にご注意ください。',
	'FOES_UPDATED'				=> 'ブロックリストの更新に成功しました',
	'FOLDER_ADDED'				=> 'フォルダの作成に成功しました',
	'FOLDER_MESSAGE_STATUS'		=> 'メッセージ件数: %1$d ／ %2$d',
	'FOLDER_NAME_EMPTY'			=> 'フォルダ名が空です',
	'FOLDER_NAME_EXIST'			=> 'フォルダ <strong>%s</strong> は既に存在します',
	'FOLDER_OPTIONS'			=> 'フォルダオプション',
	'FOLDER_RENAMED'			=> 'フォルダ名の変更に成功しました',
	'FOLDER_REMOVED'			=> 'フォルダの削除に成功しました',
	'FOLDER_STATUS_MSG'			=> 'フォルダ使用率: %1$d%% （メッセージ件数: %2$d ／ %3$d）',
	'FORWARD_PM'				=> 'メッセージの転送',
	'FORCE_PASSWORD_EXPLAIN'	=> '掲示板を閲覧する前にパスワードの変更を完了してください',
	'FRIEND_MESSAGE'			=> 'フレンドユーザーからのメッセージ',
	'FRIENDS'					=> 'フレンドユーザー',
	'FRIENDS_EXPLAIN'			=> 'ユーザーをフレンドリストに追加するとそのユーザーに素早くアクセスできます。頻繁に連絡を取り合うユーザーをフレンドリストに追加しておくと便利です。また掲示板のスタイルによりますが、フレンドユーザーが投稿した記事はハイライト表示されます。',
	'FRIENDS_OFFLINE'			=> 'オフライン',
	'FRIENDS_ONLINE'			=> 'オンライン',
	'FRIENDS_UPDATED'			=> 'フレンドリストの更新に成功しました',
	'FULL_FOLDER_OPTION_CHANGED'=> 'フォルダが満杯時の動作の変更に成功しました',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- オリジナルメッセージ --------',
	'FWD_SUBJECT'				=> '件名: %s',
	'FWD_DATE'					=> '日付: %s',
	'FWD_FROM'					=> '送信者: %s',
	'FWD_TO'					=> '受取人: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'グローバル告知トピック',

	'HIDE_ONLINE'				=> 'オンライン状態を隠す',
	'HIDE_ONLINE_EXPLAIN'		=> '次に掲示板にアクセスするまで反映されません',
	'HOLD_NEW_MESSAGES'			=> '新しいメッセージを受け取らない （新しいメッセージはフォルダに十分なスペースが空くまで待機させられます）',
	'HOLD_NEW_MESSAGES_SHORT'	=> '新しいメッセージを待機させる',

	'IF_FOLDER_FULL'			=> 'フォルダが満杯の時',
	'IMPORTANT_NEWS'			=> '重要な告知トピック',
	'INVALID_USER_BIRTHDAY'			=> '誕生日の日付が有効ではありません',
	'INVALID_CHARS_USERNAME'	=> 'ユーザー名に禁止文字が含まれています',
	'INVALID_CHARS_NEW_PASSWORD'=> '必要な文字が含まれていないため、そのパスワードは無効です',
	'ITEMS_REQUIRED'			=> '* でマークされているプロフィールフィールドは必ず入力する必要があります',

	'JOIN_SELECTED'				=> 'グループへ参加する',

	'LANGUAGE'					=> '言語',
	'LINK_REMOTE_AVATAR'		=> '他サイトのアバター画像にリンクする',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'アバター画像の URL を入力してください。リンク経由で表示されます。',
	'LINK_REMOTE_SIZE'			=> 'アバター画像のサイズ',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'アバター画像の横幅と高さを入力してください。空白（または 0 x 0 ）にした場合、自動で判別されます。',
	'LOGIN_EXPLAIN_UCP'			=> 'ユーザーCP へ入室するにはログインが必要です',
	'LOGIN_REDIRECT'			=> 'ログインに成功しました',
	'LOGOUT_FAILED'				=> 'HTTPリクエスト がセッションと一致しなかったため、ログアウトできませんでした。この症状が頻繁に起こるようなら管理人にこの事をご連絡ください。',
	'LOGOUT_REDIRECT'			=> 'ログアウトに成功しました',

	'MARK_IMPORTANT'				=> '重要視 する / しない',
	'MARKED_MESSAGE'				=> '重要視しているメッセージ',
	'MAX_FOLDER_REACHED'			=> 'これ以上フォルダを作成することはできません',
	'MESSAGE_BY_AUTHOR'				=> 'by',
	'MESSAGE_COLOURS'				=> 'メッセージカラー',
	'MESSAGE_DELETED'				=> 'メッセージの削除に成功しました',
	'MESSAGE_HISTORY'				=> 'メッセージの履歴',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'このメッセージは受信前に送信者によって既に削除されています',
	'MESSAGE_SENT_ON'				=> 'on',
	'MESSAGE_STORED'				=> 'メッセージの送信に成功しました',
	'MESSAGE_TO'					=> '受取人',
	'MESSAGES_DELETED'				=> 'メッセージの削除に成功しました',
	'MOVE_DELETED_MESSAGES_TO'		=> 'フォルダ内のメッセージを次のフォルダへ移動させる',
	'MOVE_DOWN'						=> '下へ移動',
	'MOVE_MARKED_TO_FOLDER'			=> 'フォルダ %s へ移動する',
	'MOVE_PM_ERROR'					=> 'メッセージを新しいフォルダに移動している最中にエラーが発生しました。全 %2d 件の内 %1d 件のメッセージの移動を完了しています。',
	'MOVE_TO_FOLDER'				=> 'フォルダ移動',
	'MOVE_UP'						=> '上へ移動',

	'NEW_EMAIL_ERROR'				=> 'メールアドレスが不一致です',
	'NEW_FOLDER_NAME'				=> '新しいフォルダ名',
	'NEW_PASSWORD'					=> '新しいパスワード',
	'NEW_PASSWORD_ERROR'			=> 'パスワードが不一致です',
	'NOTIFY_METHOD'					=> '通知方法',
	'NOTIFY_METHOD_BOTH'			=> '両方',
	'NOTIFY_METHOD_EMAIL'			=> 'メールのみ',
	'NOTIFY_METHOD_EXPLAIN'			=> '掲示板からの通知メッセージをどの方法で受け取りますか？',
	'NOTIFY_METHOD_IM'				=> 'Jabber のみ',
	'NOTIFY_ON_PM'					=> '新着プライベートメッセージをメールまたは Jabber で通知する',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'ゲストをフレンドリストに追加することはできません',
	'NOT_ADDED_FRIENDS_BOTS'		=> 'ボットをフレンドリストに追加することはできません',
	'NOT_ADDED_FRIENDS_FOES'		=> 'ブロックリストに追加されているユーザーをフレンドリストに追加することはできません',
	'NOT_ADDED_FRIENDS_SELF'		=> '自分自身をフレンドリストに追加することはできません',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> '管理人とモデレータをブロックリストに追加することはできません',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'ゲストをブロックリストに追加することはできません。',
	'NOT_ADDED_FOES_BOTS'			=> 'ボットをブロックリストに追加することはできません',
	'NOT_ADDED_FOES_FRIENDS'		=> 'フレンドユーザーをブロックリストに追加することはできません',
	'NOT_ADDED_FOES_SELF'			=> '自分自身をブロックリストに追加することはできません',
	'NOT_AGREE'						=> '規約に同意しません',
	'NOT_ENOUGH_SPACE_FOLDER'		=> '送信先フォルダ “%s” が満杯だったため、アクションは実行されませんでした',
	'NOT_MOVED_MESSAGE'				=> 'フォルダが満杯のため、1 件のプライベートメッセージが待機状態にあります',
	'NOT_MOVED_MESSAGES'			=> 'フォルダが満杯のため、%d 件のプライベートメッセージが待機状態にあります',
	'NO_ACTION_MODE'				=> 'アクションが指定されていません',
	'NO_AUTHOR'						=> '送信者が指定されていません',
	'NO_AVATAR_CATEGORY'			=> 'なし',

	'NO_AUTH_DELETE_MESSAGE'		=> 'プライベートメッセージを削除するにはパーミッションが必要です',
	'NO_AUTH_EDIT_MESSAGE'			=> 'プライベートメッセージを編集するにはパーミッションが必要です',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'プライベートメッセージを転送するにはパーミッションが必要です',
	'NO_AUTH_GROUP_MESSAGE'			=> 'プライベートメッセージをグループに送信するにはパーミッションが必要です',
	'NO_AUTH_PASSWORD_REMINDER'		=> '新しいパスワードを発行するにはパーミッションが必要です',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> '待機状態のプライベートメッセージを閲覧するにはパーミッションが必要です',
	'NO_AUTH_READ_MESSAGE'			=> 'プライベートメッセージを閲覧するにはパーミッションが必要です',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> '送信される前に送信者がメッセージを削除したため、メッセージを閲覧できません',
	'NO_AUTH_SEND_MESSAGE'			=> 'プライベートメッセージを送信するにはパーミッションが必要です',
	'NO_AUTH_SIGNATURE'				=> 'サインを作成するにはパーミッションが必要です',

	'NO_BCC_RECIPIENT'			=> 'なし',
	'NO_BOOKMARKS'				=> 'ブックマークはありません',
	'NO_BOOKMARKS_SELECTED'		=> 'ブックマークが選択されていません',
	'NO_EDIT_READ_MESSAGE'		=> '既に受取人が閲覧したため、このプライベートメッセージを編集することはできません',
	'NO_EMAIL_USER'				=> '指定されたユーザー名とメールアドレスのセットを持つアカウントが見つかりませんでした',
	'NO_FOES'					=> 'ブロックユーザーはいません',
	'NO_FRIENDS'				=> 'フレンドユーザーはいません',
	'NO_FRIENDS_OFFLINE'		=> 'オフライン状態のフレンドユーザーはいません',
	'NO_FRIENDS_ONLINE'			=> 'オンライン状態のフレンドユーザーはいません',
	'NO_GROUP_SELECTED'			=> 'グループが指定されていません',
	'NO_IMPORTANT_NEWS'			=> '重要な告知トピックはありません',
	'NO_MESSAGE'				=> 'プライベートメッセージが見つかりませんでした',
	'NO_NEW_FOLDER_NAME'		=> '新しいフォルダ名を入力する必要があります',
	'NO_NEWER_PM'				=> 'これ以上新しいメッセージはありません',
	'NO_OLDER_PM'				=> 'これ以上古いメッセージはありません',
	'NO_PASSWORD_SUPPLIED'		=> 'パスワードが入力されていません',
	'NO_RECIPIENT'				=> '受取人が指定されていません',
	'NO_RULES_DEFINED'			=> 'ルールはありません',
	'NO_SAVED_DRAFTS'			=> 'セーブした下書きはありません',
	'NO_TO_RECIPIENT'			=> 'なし',
	'NO_WATCHED_FORUMS'			=> 'ウォッチ中のフォーラムはありません',
	'NO_WATCHED_SELECTED'		=> 'ウォッチ中のトピックまたはフォーラムが１つも選択されていません',
 	'NO_WATCHED_TOPICS'			=> 'ウォッチ中のトピックはありません',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'パスワードは %1$d 字以上 %2$d 字以下にする必要があります。大文字アルファベットと小文字アルファベット、さらに数字を含めてください。',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'パスワードは %1$d 字以上 %2$d 字以下にする必要があります',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'パスワードは %1$d 字以上 %2$d 字以下にする必要があります。大文字アルファベットと小文字アルファベットを含めてください。',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'パスワードは %1$d 字以上 %2$d 字以下にする必要があります。大文字アルファベットと小文字アルファベット、さらに数字と記号を含めてください。',
	'PASSWORD'					=> 'パスワード',
	'PASSWORD_ACTIVATED'		=> '新しいパスワードは有効化されました',
	'PASSWORD_UPDATED'			=> 'あなたのメールアドレス宛てにパスワードを記載したメールを送信しました',
	'PERMISSIONS_RESTORED'		=> 'パーミッションテストを終了しました',
	'PERMISSIONS_TRANSFERRED'	=> 'パーミッションテストを開始しました。今からあなたはユーザー <strong>%s</strong> のパーミッションセットで掲示板へアクセスすることになります。<br />Adminパーミッション をテストすることはできない点にご注意ください。パーミッションテストはいつでも終了できます。',
	'PM_DISABLED'				=> '掲示板のプライベートメッセージ機能が無効に設定されているため、プライベートメッセージを使用できません',
	'PM_FROM'					=> '送信者',
	'PM_FROM_REMOVED_AUTHOR'	=> 'メッセージを送信したユーザーのアカウントが既に削除されています',
	'PM_ICON'					=> 'PMアイコン',
	'PM_INBOX'					=> '受信ボックス',
	'PM_NO_USERS'				=> 'ユーザーが存在しません',
	'PM_OUTBOX'					=> '送信ボックス',
	'PM_SENTBOX'				=> '送信済みボックス',
	'PM_SUBJECT'				=> 'メッセージの件名',
	'PM_TO'						=> 'メッセージ送信',
	'PM_USERS_REMOVED_NO_PM'	=> 'プライベートメッセージの受信を拒否しているため送信リストに追加できなかったユーザーが存在します',
	'POPUP_ON_PM'				=> '新着プライベートメッセージをポップアップウィンドウで通知する',
	'POST_EDIT_PM'				=> 'メッセージの編集',
	'POST_FORWARD_PM'			=> 'メッセージの転送',
	'POST_NEW_PM'				=> 'メッセージの作成',
	'POST_PM_LOCKED'			=> 'プライベートメッセージを送信するにはパーミッションが必要です',
	'POST_PM_POST'				=> '記事の引用',
	'POST_QUOTE_PM'				=> 'メッセージの引用',
	'POST_REPLY_PM'				=> 'メッセージの返信',
	'PRINT_PM'					=> '印刷ビュー',
	'PREFERENCES_UPDATED'		=> 'ユーザー設定の更新に成功しました',
	'PROFILE_INFO_NOTICE'		=> 'この情報は他のユーザーに表示されるため、個人情報を入力しないようご注意ください。* でマークされているフィールドは必ず入力する必要があります。',
	'PROFILE_UPDATED'			=> 'プロフィールの更新に成功しました',

	'RECIPIENT'							=> '受取人',
	'RECIPIENTS'						=> '受取人',
	'REGISTRATION'						=> 'ユーザー登録',
	'RELEASE_MESSAGES'					=> '%s待機中のメッセージを開放しています%s…開放されたメッセージはフォルダに十分なスペースがあればそれらフォルダに適切に振り分けられます',
	'REMOVE_ADDRESS'					=> 'アドレスの削除',
	'REMOVE_SELECTED_BOOKMARKS'			=> '選択したブックマークの削除',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> '選択したブックマークを本当に削除してもよろしいですか？',
	'REMOVE_BOOKMARK_MARKED'			=> 'ブックマークを削除する',
	'REMOVE_FOLDER'						=> 'フォルダの削除',
	'REMOVE_FOLDER_CONFIRM'				=> 'このフォルダを本当に削除してもよろしいですか？',
	'RENAME'							=> '名前変更',
	'RENAME_FOLDER'						=> 'フォルダ名の変更',
	'REPLIED_MESSAGE'					=> '返信済みメッセージ',
	'RESIGN_SELECTED'					=> 'グループから脱退する',
	'REPLY_TO_ALL'						=> '送信者と受取人全てに返信する',
	'REPORT_PM'							=> 'プライベートメッセージを通報する',
	'RETURN_FOLDER'						=> '%1$sフォルダに戻る%2$s',
	'RETURN_UCP'						=> '%sユーザーCP に戻る%s',
	'RULE_ADDED'						=> 'ルールの追加に成功しました',
	'RULE_ALREADY_DEFINED'				=> 'このルールは既に存在しています',
	'RULE_DELETED'						=> 'ルールの削除に成功しました',
	'RULE_NOT_DEFINED'					=> 'ルールが正しく作成されませんでした',
	'RULE_REMOVED_MESSAGE'				=> 'PMルール によって 1 件のプライベートメッセージを削除しました',
	'RULE_REMOVED_MESSAGES'				=> 'PMルール によって %d 件のプライベートメッセージを削除しました',

	'SAME_PASSWORD_ERROR'		=> '入力したパスワードが現在のパスワードと同一です',
	'SEARCH_YOUR_POSTS'			=> '投稿記事を表示する',
	'SEND_PASSWORD'				=> 'パスワードの送信',
	'SENT_AT'					=> '送信日時',			// Used before dates in private messages
	'SHOW_EMAIL'				=> 'メールアドレスを公開する',
	'SIGNATURE_EXPLAIN'			=> 'サインとは、自分が投稿した記事に自動的に追加されるテキストブロックのことです。最大 %d 字まで入力できます。',
	'SIGNATURE_PREVIEW'			=> 'サインは記事でこのように表示されます',
	'SIGNATURE_TOO_LONG'		=> 'サインが長すぎます。',
	'SORT'						=> 'ソート',
	'SORT_COMMENT'				=> 'ファイルのコメント',
	'SORT_DOWNLOADS'			=> 'ダウンロード数',
	'SORT_EXTENSION'			=> '拡張子',
	'SORT_FILENAME'				=> 'ファイル名',
	'SORT_POST_TIME'			=> '投稿日時',
	'SORT_SIZE'					=> 'ファイルサイズ',

	'TIMEZONE'					=> 'タイムゾーン',
	'TO'						=> '受取人',
	'TOO_MANY_RECIPIENTS'		=> '受取人が多過ぎます',
	'TOO_MANY_REGISTERS'		=> 'ユーザー登録に何度も失敗したため、このセッションによるアクセスを強制的に制限しました。しばらく時間が経ってからもう一度ユーザー登録してください。',

	'UCP'						=> 'ユーザーCP',
	'UCP_ACTIVATE'				=> '有効アカウント',
	'UCP_ADMIN_ACTIVATE'		=> '有効なメールアドレスをご入力ください。入力したメールアドレスへアカウント有効化メールが送信されます。',
	'UCP_AIM'					=> 'AOL インスタントメッセンジャ',
	'UCP_ATTACHMENTS'			=> '添付ファイル',
	'UCP_COPPA_BEFORE'			=> '%s より前',
	'UCP_COPPA_ON_AFTER'		=> '%s 以後',
	'UCP_EMAIL_ACTIVATE'		=> '有効なメールアドレスをご入力ください。入力したメールアドレスへアカウント有効化メールが送信されます。',
	'UCP_ICQ'					=> 'ICQ 番号',
	'UCP_JABBER'				=> 'Jabber アドレス',

	'UCP_MAIN'					=> 'メイン',
	'UCP_MAIN_ATTACHMENTS'		=> '添付ファイルの管理',
	'UCP_MAIN_BOOKMARKS'		=> 'ブックマークの管理',
	'UCP_MAIN_DRAFTS'			=> '下書きの管理',
	'UCP_MAIN_FRONT'			=> 'フロントページ',
	'UCP_MAIN_SUBSCRIBED'		=> 'ウォッチの管理',

	'UCP_MSNM'					=> 'WL/MSN Messenger',
	'UCP_NO_ATTACHMENTS'		=> '添付ファイルはありません',

	'UCP_PREFS'					=> 'ユーザー設定',
	'UCP_PREFS_PERSONAL'		=> 'グローバル設定の変更',
	'UCP_PREFS_POST'			=> '投稿設定の変更',
	'UCP_PREFS_VIEW'			=> '表示オプションの変更',

	'UCP_PM'					=> 'プライベートメッセージ',
	'UCP_PM_COMPOSE'			=> 'メッセージの作成',
	'UCP_PM_DRAFTS'				=> '下書きの管理',
	'UCP_PM_OPTIONS'			=> 'ルール &amp; フォルダ',
	'UCP_PM_POPUP'				=> 'プライベートメッセージ',
	'UCP_PM_POPUP_TITLE'		=> 'プライベートメッセージのポップアップ',
	'UCP_PM_UNREAD'				=> '未読メッセージ',
	'UCP_PM_VIEW'				=> 'メッセージの閲覧',

	'UCP_PROFILE'				=> 'プロフィール',
	'UCP_PROFILE_AVATAR'		=> 'アバター画像の編集',
	'UCP_PROFILE_PROFILE_INFO'	=> 'プロフィールの編集',
	'UCP_PROFILE_REG_DETAILS'	=> 'アカウント情報の編集',
	'UCP_PROFILE_SIGNATURE'		=> 'サインの編集',

	'UCP_USERGROUPS'			=> 'グループ',
	'UCP_USERGROUPS_MEMBER'		=> 'メンバーの管理',
	'UCP_USERGROUPS_MANAGE'		=> 'グループの管理',

	'UCP_REGISTER_DISABLE'			=> '現在、新しいアカウントを作成することはできません',
	'UCP_REMIND'					=> 'パスワードの送信',
	'UCP_RESEND'					=> 'アカウント有効化メールの送信',
	'UCP_WELCOME'					=> 'ユーザーコントロールパネル （ユーザーCP） へようこそ。ここではプロフィール、ユーザー設定、ウォッチ中のフォーラムまたはトピックについて確認、閲覧、編集を行うことができます。他のユーザーに （管理人が許可していれば） プライベートメッセージを送ることもできます。また、グローバル告知トピックがあればここで表示されますので未読の場合は必ず確認するようにしてください。',
	'UCP_YIM'						=> 'Yahoo! Messenger',
	'UCP_ZEBRA'						=> 'フレンドユーザー &amp; ブロックユーザー',
	'UCP_ZEBRA_FOES'				=> 'ブロックリストの管理',
	'UCP_ZEBRA_FRIENDS'				=> 'フレンドリストの管理',
	'UNDISCLOSED_RECIPIENT'			=> 'Undisclosed Recipient',
	'UNKNOWN_FOLDER'				=> '不明なフォルダ',
	'UNWATCH_MARKED'				=> 'ウォッチを解除する',
	'UPLOAD_AVATAR_FILE'			=> 'アバター画像をアップロードする [ ローカルコンピュータ ]',
	'UPLOAD_AVATAR_URL'				=> 'アバター画像をアップロードする [ リモートコンピュータ ]',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'アバター画像の URL を入力してください。このサイトにコピーされます。',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'ユーザー名は %1$d 字以上 %2$d 字以下にする必要があります。アルファベットと数字のみ使用できます。',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'ユーザー名は %1$d 字以上 %2$d 字以下にする必要があります。アルファベット、数字、半角スペース、記号 -+_[] のみ使用できます。',
	'USERNAME_ASCII_EXPLAIN'		=> 'ユーザー名は %1$d 字以上 %2$d 字以下にする必要があります。ASCII文字 （半角英数字、限られた記号） のみ使用できます。特殊な記号は使用できません。',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'ユーザー名は %1$d 字以上 %2$d 字以下にする必要があります。ラテン文字と数字のみ使用できます。特殊な記号は使用できません。',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'ユーザー名は %1$d 字以上 %2$d 字以下にする必要があります。ラテン文字、数字、半角スペース、記号 -+_[] のみ使用できます。特殊な記号は使用できません。',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'ユーザー名は %1$d 字以上 %2$d 字以下にする必要があります',
	'USERNAME_TAKEN_USERNAME'		=> '入力した ユーザー名 は既に使用されています。別のユーザー名を入力してください。',
	'USERNAME_DISALLOWED_USERNAME'	=> '入力した ユーザー名 はアクセス禁止リストか言語フィルタリストに登録されています。別のユーザー名を入力してください。',
	'USER_NOT_FOUND_OR_INACTIVE'	=> '入力した ユーザー名 は登録されていないかまたはアカウントが無効です',

	'VIEW_AVATARS'				=> 'アバター画像を表示する',
	'VIEW_EDIT'					=> '閲覧/編集',
	'VIEW_FLASH'				=> 'Flashムービーを表示する',
	'VIEW_IMAGES'				=> '添付画像を表示する',
	'VIEW_NEXT_HISTORY'			=> '次の履歴へ',
	'VIEW_NEXT_PM'				=> '次の PM へ',
	'VIEW_PM'					=> 'メッセージを閲覧する',
	'VIEW_PM_INFO'				=> 'メッセージの詳細データ',
	'VIEW_PM_MESSAGE'			=> '1 件のメッセージ',
	'VIEW_PM_MESSAGES'			=> '%d 件のメッセージ',
	'VIEW_PREVIOUS_HISTORY'		=> '１つ前の履歴へ',
	'VIEW_PREVIOUS_PM'			=> '１つ前の PM へ',
	'VIEW_SIGS'					=> 'サインを表示する',
	'VIEW_SMILIES'				=> 'スマイリーを表示する',
	'VIEW_TOPICS_DAYS'			=> 'トピックの表示 [ 期間 ]',
	'VIEW_TOPICS_DIR'			=> 'トピックの表示 [ 並び順 ]',
	'VIEW_TOPICS_KEY'			=> 'トピックの表示 [ ソート ]',
	'VIEW_POSTS_DAYS'			=> '記事の表示 [ 期間 ]',
	'VIEW_POSTS_DIR'			=> '記事の表示 [ 並び順 ]',
	'VIEW_POSTS_KEY'			=> '記事の表示 [ ソート ]',

	'WATCHED_EXPLAIN'			=> 'ここではウォッチ中のフォーラムとトピックを管理できます。ウォッチ中のフォーラムまたはトピックに新しい記事が投稿されると通知メールが送信されます。ウォッチを解除するにはフォーラムまたはトピックをマークして <em>ウォッチを解除する</em> ボタンをクリックしてください。',
	'WATCHED_FORUMS'			=> 'ウォッチ中のフォーラム',
	'WATCHED_TOPICS'			=> 'ウォッチ中のトピック',
	'WRONG_ACTIVATION'			=> '有効化キーがデータベース内のどれとも一致しませんでした',

	'YOUR_DETAILS'				=> '活動状況',
	'YOUR_FOES'					=> 'ブロックユーザー',
	'YOUR_FOES_EXPLAIN'			=> '削除するにはユーザー名を選択し送信ボタンをクリックしてください',
	'YOUR_FRIENDS'				=> 'フレンドユーザー',
	'YOUR_FRIENDS_EXPLAIN'		=> '削除するにはユーザー名を選択し送信ボタンをクリックしてください',
	'YOUR_WARNINGS'				=> '警告された回数',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> '次のフォルダへ送る',
		'MARK_AS_READ'		=> '既読にする',
		'MARK_AS_IMPORTANT'	=> '重要視する',
		'DELETE_MESSAGE'	=> '削除する'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> '件名が',
		'SENDER'	=> '送信者が',
		'MESSAGE'	=> 'メッセージ本文が',
		'STATUS'	=> 'メッセージの種類が',
		'TO'		=> '宛先が'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> '次のワードを含むなら： ',
		'IS_NOT_LIKE'	=> '次のワードを含まないなら： ',
		'IS'			=> '次のワードと一致するなら： ',
		'IS_NOT'		=> '次のワードと一致しないなら： ',
		'BEGINS_WITH'	=> '次のワードで始まるなら： ',
		'ENDS_WITH'		=> '次のワードで終わるなら： ',
		'IS_FRIEND'		=> 'フレンドユーザーなら',
		'IS_FOE'		=> 'ブロックユーザーなら',
		'IS_USER'		=> '次のユーザーなら： ',
		'IS_GROUP'		=> '次のグループのメンバーなら： ',
		'ANSWERED'		=> '返信なら',
		'FORWARDED'		=> '転送なら',
		'TO_GROUP'		=> '私のデフォルトグループなら',
		'TO_ME'			=> '私なら'
	),


	'GROUPS_EXPLAIN'	=> '複数のグループに所属している場合、（管理人がデフォルトグループの変更を許可していれば） それらグループの中から１つだけデフォルトグループを選択できます。デフォルトグループとは、他のユーザーに対してあなたがどのように見えるか、例えばユーザー名の色、アバター画像、ランクなどを決定するためのグループです。（管理人が許可していれば） 他のグループに参加することもできます。参加するグループによっては、それまでアクセスできなかったフォーラムへアクセスできるようになったり使えなかった機能が使えたりするようになるでしょう。',
	'GROUP_LEADER'		=> 'グループリーダー',
	'GROUP_MEMBER'		=> 'グループメンバー',
	'GROUP_PENDING'		=> '承認待ちグループ',
	'GROUP_NONMEMBER'	=> '非メンバーグループ',
	'GROUP_DETAILS'		=> 'グループの詳細',

	'NO_LEADER'		=> 'グループなし [ リーダー ]',
	'NO_MEMBER'		=> 'グループなし [ メンバー ]',
	'NO_PENDING'	=> 'グループなし [ 承認待ち ]',
	'NO_NONMEMBER'	=> 'グループなし [ 非メンバー ]',
));

?>