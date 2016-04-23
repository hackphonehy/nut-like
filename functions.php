// Customize entry meta in the entry header to show Favorite button for logged in users and Favorites count for non logged in users
add_filter( 'genesis_post_info', 'sk_post_info_filter' );
function sk_post_info_filter( $post_info ) {

	if ( is_user_logged_in() ) {
		$post_info = '[post_date] by [post_author_posts_link] [post_comments] [post_edit] [favorite_button]';
	} else {
		$post_info = '[post_date] by [post_author_posts_link] [post_comments] [post_edit] <span class="favorite-count">Favorited: [favorite_count] times</a>';
	}

	return $post_info;
}
