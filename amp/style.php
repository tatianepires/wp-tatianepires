<?php
// Get content width
$content_max_width       = absint( $this->get( 'content_max_width' ) );
?>

.amp-wp-content, .amp-wp-title-bar div {
	<?php if ( $content_max_width > 0 ) : ?>
	margin: 0 auto;
	max-width: <?php echo sprintf( '%dpx', $content_max_width ); ?>;
	<?php endif; ?>
}

.amp-wp-iframe-placeholder {
	background: #eee url( <?php echo esc_url( $this->get( 'placeholder_image_url' ) ); ?> ) no-repeat center 40%;
	background-size: 48px 48px;
	min-height: 48px;
}

a,a:visited,h1,h2,h3,h4{color:#552746}.amp-wp-unknown-size img,amp-carousel>amp-img>img{object-fit:contain}.alignright{float:right}.alignleft{float:left}.aligncenter{display:block;margin-left:auto;margin-right:auto}.amp-wp-enforced-sizes{max-width:100%;margin:0 auto}html{background:#552746}body{background:#fff;color:#111;font-family:'Open Sans',sans-serif;font-weight:300;line-height:1.75em}.amp-wp-meta,.wp-caption .wp-caption-text{line-height:1.5em;color:#777;font-size:.875em}figure,ol,p,ul{margin:0 0 1em;padding:0}a:active,a:focus,a:hover{color:#5e294a}h1,h2,h3,h4{font-family:'Open Sans Condensed',sans-serif;font-weight:400}blockquote{color:#111;background:rgba(127,127,127,.125);border-left:2px solid #552746;margin:8px 0 24px;padding:16px}blockquote p:last-child{margin-bottom:0}.amp-wp-comments-link,.amp-wp-footer p,.amp-wp-header div,.amp-wp-meta,.amp-wp-tax-category,.amp-wp-tax-tag,.amp-wp-title,.back-to-top,.wp-caption-text{font-family:'Open Sans',sans-serif}.amp-wp-header{background-color:#552746}.amp-wp-header div{color:#fff;font-size:1em;font-weight:400;margin:0 auto;max-width:calc(840px - 32px);padding:.875em 16px;position:relative}.amp-wp-header a{color:#fff;font-family:'Dancing Script',Serif;font-size:2em;text-decoration:none}.amp-wp-header .amp-wp-site-icon{background-color:#fff;border:1px solid #fff;border-radius:50%;position:absolute;right:18px;top:10px}.amp-wp-article{color:#111;font-weight:400;margin:1.5em auto;max-width:840px;overflow-wrap:break-word;word-wrap:break-word}.amp-wp-article-header{align-items:center;align-content:stretch;display:flex;flex-wrap:wrap;justify-content:space-between;margin:1.5em 16px}.amp-wp-title{color:#111;display:block;font-family:'Open Sans Condensed',sans-serif;flex:1 0 100%;font-size:2em;font-weight:400;margin:0 0 .625em;width:100%}.amp-wp-meta{display:inline-block;flex:2 1 50%;margin:0;padding:0}.amp-wp-article-header .amp-wp-meta:last-of-type{text-align:right}.amp-wp-article-header .amp-wp-meta:first-of-type{text-align:left}.amp-wp-byline .amp-wp-author,.amp-wp-byline amp-img{display:inline-block;vertical-align:middle}.amp-wp-byline amp-img{border:1px solid #552746;border-radius:50%;position:relative;margin-right:6px}.amp-wp-posted-on{text-align:right}.amp-wp-article-featured-image{margin:0 0 1em}.amp-wp-article-featured-image amp-img{margin:0 auto}.amp-wp-article-featured-image.wp-caption .wp-caption-text{margin:0 18px}.amp-wp-article-content{margin:0 16px}.amp-wp-article-content ol,.amp-wp-article-content ul{margin-left:1em}.amp-wp-article-content amp-img{margin:0 auto}.amp-wp-article-content amp-img.alignright{margin:0 0 1em 16px}.amp-wp-article-content amp-img.alignleft{margin:0 16px 1em 0}.wp-caption{padding:0}.wp-caption.alignleft{margin-right:16px}.wp-caption.alignright{margin-left:16px}.wp-caption .wp-caption-text{margin:0;padding:.66em 10px .75em}.amp-wp-article-content .tps-alert,.amp-wp-article-content .tps-download,.amp-wp-article-content .tps-editorial,.amp-wp-article-content .tps-info,.amp-wp-article-content .tps-note,.amp-wp-article-content .tps-warning{display:block;margin:10px 0;padding:10px;position:relative;border-width:1px;border-style:solid;border-radius:5px}.amp-wp-article-content .tps-alert{color:#5F3A06;background-color:#FFE5BF;border-color:#FFC875}.amp-wp-article-content .tps-alert a{color:#5F3A06}.amp-wp-article-content .tps-download{color:#3C4F00;background-color:#E5F2BF;border-color:#C2E069}.amp-wp-article-content .tps-download a{color:#3C4F00}.amp-wp-article-content .tps-info{color:#00426F;background-color:#BFE5FF;border-color:#4AB7FF}.amp-wp-article-content .tps-info a{color:#00426F}.amp-wp-article-content .tps-note{color:#6F5900;background-color:#FFF2BF;border-color:#FFE375}.amp-wp-article-content .tps-note a{color:#6F5900}.amp-wp-article-content .tps-warning{color:#7F0014;background-color:#FFBFC8;border-color:#F88}.amp-wp-article-content .tps-warning a{color:#7F0014}.amp-wp-article-content .tps-editorial{color:#212121;background-color:#e0e0e0;border-color:#9e9e9e}.amp-wp-article-content .tps-editorial a{color:#212121}amp-carousel,amp-iframe,amp-instagram,amp-vine,amp-youtube{background:#5e294a;margin:0 -16px 1.5em}.amp-wp-article-content amp-carousel amp-img{border:none}.sharing-links ul{list-style:none;margin:0 16px;padding:0}.sharing-links li{display:inline-block;margin-right:5px}.sharing-links .text{color:#777;font-size:.875em;line-height:23px}.sharing-links a{text-decoration:none;display:inline-block;font-size:12px;font-family:'Open Sans',sans-serif;font-weight:400;border-radius:3px;color:#777;background:#f8f8f8;border:1px solid #ccc;box-shadow:0 1px 0 rgba(0,0,0,.08);text-shadow:none;line-height:23px;padding:1px 8px 0 5px}.amp-wp-article-footer .amp-wp-meta{display:block}.amp-wp-tax-category,.amp-wp-tax-tag{color:#777;font-size:.875em;line-height:1.5em;margin:1.5em 16px}.amp-wp-comments-link{color:#777;font-size:.875em;line-height:1.5em;text-align:center;margin:2.25em 0 1.5em}.amp-wp-comments-link a{border-style:solid;border-color:#5e294a;border-width:1px 1px 2px;border-radius:4px;background-color:transparent;color:#552746;cursor:pointer;display:block;font-size:14px;font-weight:600;line-height:18px;margin:0 auto;max-width:200px;padding:8px 16px;text-decoration:none;width:50%;-webkit-transition:background-color .2s ease;transition:background-color .2s ease}.related-post.clear{border:1px solid #eee;border-radius:5px;box-shadow:1px 1px 2px #ccc;padding:10px;margin-bottom:16px}.related-post.clear:after{content:"";display:table;clear:both}.wpcf7-mailing{border:1px solid #eee;border-radius:5px;box-shadow:1px 1px 2px #ccc;padding:20px 0}.wpcf7-mailing h4{font-size:22px;margin-top:0;margin-bottom:16px;text-align:center}.wpcf7-mailing input{padding:6px 8px;border-radius:3px}.wpcf7-mailing .wpcf7-75p-col{margin:8px 32px}.wpcf7-mailing .wpcf7-submit-col{margin-left:32px}.wpcf7-mailing .wpcf7-submit-col input{background:#552746;border:1px solid #552746;color:#fff}.wpcf7-mailing .wpcf7-submit-col input:hover{background:#913f77;border-color:#913f77}.wpcf7-mailing .wpcf7-email{width:100%;box-sizing:border-box;border:1px solid #ccc}.amp-wp-footer{background-color:#222;border-top:6px solid #e9eaee;color:#fff;margin:calc(1.5em - 1px) 0 0}.amp-wp-footer div{margin:0 auto;max-width:calc(840px - 32px);padding:1.25em 16px;position:relative}.amp-wp-footer h2{color:#fff;font-family:'Dancing Script',serif;font-size:1.5em;font-weight:400;line-height:1.375em;margin:0 0 .5em}.amp-wp-footer p{color:#777;font-size:.8em;line-height:1.5em;margin:0 85px 0 0}.amp-wp-footer .social-icons a{display:inline-block;margin-right:8px}.amp-wp-footer a{color:#eee;text-decoration:none}.amp-wp-footer a:hover{color:#ddd}.back-to-top{bottom:1.275em;font-size:.8em;font-weight:400;line-height:2em;position:absolute;right:16px}