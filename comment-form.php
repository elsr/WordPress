
/* ========================================================================== *
 * Настройка формы комментирования
 * ========================================================================== */
// Убираем поле Url
add_filter( 'basic_comment_form_defaults', 'artabr_comment_form', 10 );
function artabr_comment_form( $fields ) {
	unset( $fields['url'] );
	
	return $fields;
}

// Изменяем надпись над формой
add_filter( 'comment_form_defaults', 'artabr_comment_form_notice', 10 );
function artabr_comment_form_notice( $fields ) {
	$fields['comment_notes_before'] = '<p class="comment-notes"><span id="email-notes">Ваш e-mail не будет опубликован. Все поля обязательны к заполнению</span></p>';
	
	return $fields;
}
