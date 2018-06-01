<?php
$permalink = get_permalink();
$title = get_the_title();
$encoded_link = rawurlencode($permalink);
$encoded_title = rawurlencode($title);
$share_wpp = rawurlencode($title.' '.$permalink);
?>
<div class="sharing-links">
  <ul>
    <li><span class="text">Compartilhe:</span></li>
    <li>
      <a rel="nofollow" href="<?php printf('https://twitter.com/share?url=%s&via=tatianepires&text=%s', $encoded_link, $encoded_title); ?>" target="_blank" title="Compartilhar no Twitter">
        Twitter
      </a>
    </li>
    <li>
      <a rel="nofollow" href="<?php printf('https://www.facebook.com/dialog/share?app_id=638145059723806&href=%s', $encoded_link); ?>" target="_blank" title="Compartilhar no Facebook">
        Facebook
      </a>
    </li>
    <li>
      <a rel="nofollow" href="<?php printf('https://plus.google.com/share?url=%s', $encoded_link); ?>" target="_blank" title="Compartilhe no Google+">
        Google
      </a>
    </li>
    <li>
      <a rel="nofollow" href="<?php printf('https://telegram.me/share/url?url=%s&text=%s', $encoded_link, $encoded_title); ?>" target="_blank" title="Compartilhar no Telegram">
        Telegram
      </a>
    </li>
    <li>
      <a rel="nofollow" href="<?php printf('whatsapp://send?text=%s', $share_wpp); ?>" target="_blank" title="Compartilhar no WhatsApp">
        WhatsApp
      </a>
    </li>
  </ul>
</div>