画像へのリンクをクリックしたらFancyboxでポップアップするプリロード
バージョン: 0.02   掲載日:  2012/11/25

====================
説明
====================
その名のとおり、画像へのリンクをクリックしたらjQueryのプラグイン fancybox でポップアップするプリロードです。a要素のリンク先にJPG画像が指定されている場合に、自動的に動作するように設定しています。

また、指定したa要素をポップアップiframeで表示することも出来るようになっています。
その際、そのa要素に class="iframe" を追記してください。

ポップアップするサイズなど、詳細設定については jQueryFancybox.4preload.js をカスタマイズしてください。

d3forumのコメント投稿欄をポップアップ対応にするには、Altsysのテンプレート管理にて、inc_post_form_quick.html を次のように修正してください。（marine add 部分を追加）


<!-- comment input form -->
<a class="fancybox" title="quick post" href="#d3f_post_form_quick">Comment</a><{* -- marine add *}>
<div id="d3f_post_form_quick_div"><{* -- marine add *}>
<div id="d3f_post_form_quick"><{* -- marine add *}>

<h2 class="head"><{$h2_title|default:$smarty.const._MD_D3FORUM_POSTASCOMMENTTOP}></h2>

・・・フォームの内容・・・

</div><{* -- marine add *}>
</div><{* -- marine add *}>


====================
履歴
====================
2012.11.25
　とりあえず公開してみる。

2012.12.23
　d3forumのコメント欄ポップアップ機能を追加

