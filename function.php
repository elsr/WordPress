add_filter( 'comment_form_after_fields', 'add_consent_personal_data_comment' );
function add_consent_personal_data_comment(){
	?>
	<small style="font-size: 12px;line-height: 1.1;margin: 10px 0;display: block;"> Нажимая на кнопку отправить, я принимаю условия <a href="#" target="_blank">пользовательского соглашения</a> , а также ознакомлен и согласен с <a href="#" target="_blank">политикой конфиденциальности</a> и даю согласие на обработку моих персональных данных</small>
<?php
}
