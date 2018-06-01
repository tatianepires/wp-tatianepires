<?php
/*
 * Set daily Akismet spam queue cleanup
 */

function tps_akismet_empty_spam_queue_daily() {
  return 1;
}
add_filter( 'akismet_delete_comment_interval', 'tps_akismet_empty_spam_queue_daily' );
