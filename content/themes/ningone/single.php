<?



the_post();
if (get_post_format()=='link') {
	$content = get_the_content();
	if (preg_match('/^http|https/i', $content)) {
		wp_redirect($content);
	}
}