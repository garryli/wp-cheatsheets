/**
 * Useful funcitons
 */


/**
 * Whether it's a singular post page under an ancestor post. Return true if we are on the ancestor ppost now.
 *
 * @param number $ancestorId
 * @return boolean
 */
function is_child ($ancestorId) {
	global $post;

	if (!is_singular()) {
		return FALSE;
	}

	if ($post->ID == $ancestorId) {
		return TRUE;
	}

	$ancestors = get_post_ancestors( $post->ID );

	foreach($ancestors as $p) {
		if($p == $ancestorId) {
			return TRUE;
		}
	}
}

