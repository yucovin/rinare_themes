<div class="jaggedUpside"></div>	
<aside id="comments" class="clearfix">
	<h1>Comment</h1>
	
	<!-- コメント表示欄 -->
	<div class="show">
	<?php if ( have_comments() ) : ?>
		<h2>Comments for this post</h2>
		<p class="thisPost">『<?php echo mb_substr($post->post_title, 0, 50).'…'; ?>』へのコメント</p>
	
		<ol class="commentList">
			<!-- functionsでカスタマイズ -->
			<?php wp_list_comments('type=comment&callback=rinare_comment');?>
		</ol>

	<?php else : // this is displayed if there are no comments so far ?>
	<?php endif; ?>
	</div>
	
	<!-- コメント投稿欄 -->
	<div class="submit">
		<h2>Comment Form</h2>
		
		<div class="message">
			<?php if ( comments_open() ) : ?><!-- If comments are open, but there are no comments. -->
				<p class="opencomments">※ コメントは認証制です。一度認証された方は即時認証されるようになります。</p>
			<?php else : ?><!-- If comments are closed. -->
				<p class="closedcomments"><?php _e('Comments are closed.'); ?></p>
			<?php endif; ?> 
		</div>
		
		<div class="jet">
			<!-- コメントフォームはjetpackの形式を変更すること能わず。例えばタイトルっぽいものはh3の指定など -->
			<?php comment_form(); ?>
		</div>
		
		<div class="notice">
			<h4>初めての方へ ／ コメントフォームの使い方とお約束</h4>
				<dl>
					<dt>コメントフォームの使い方</dt>
						<dd>「Twitter」「Facebook」「Google+」「WordPress」のいずれかのアカウントをお持ちの方 ▶ 各アカウントと連携することでコメントできます。コメントしたことはSNSに流れませんので、アカウントをお持ちの方はこちらの方法でコメントを投稿して下さると嬉しいです。</dd>
						<dd>上記のアカウントをお持ちでない方 ▶ メールアドレスと名前を入力することでコメント出来ます（自サイトをお持ちの方はサイトURLも是非ご記入下さい）。入力頂いたメールアドレスには確認のメールが送られる事があります。その場合はお手数ですが内容にしたがって返信して下さい。確認がとれないメールアドレスでの投稿は認証されない事があります。</dd>
					<dt>お約束 他</dt>
						<dd>宣伝目的や明らかに内容にそぐわないもの、いわゆる公序良俗に反することや誹謗中傷めいたもの、管理人及びブログ読者を不快にさせる表現などを含むものは、内容にかかわらず削除されます。</dd>
						<dd>顔の見えないインターネット上のやり取りは誤解が生じることが多々あります。諍いに発展する事は本意ではありませんのでご理解下さい。内容も言葉も少し気をつけて頂くだけで、コメント欄はとても有意義な交流の場になります。ご協力お願いします。</dd>
						<dd>管理人多忙のため、コメントの返信が出来ないことがあります、ご了承下さい。</dd>
						<dd>旧サイトにあった非公開コメントシステムはなくなりました。以前のようにちょっとした情報や個人的なお話して下さる方は、<a href="<?php echo home_url('/contact') ?>">Contactフォーム</a>からお気軽にどうぞ。</dd>
				</dl>
		</div>
		
	</div><!-- end.submit -->
	

</aside>
<div class="jaggedUpsideDown"></div>