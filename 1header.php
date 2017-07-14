Как Добавлять Виджеты WordPress В Шапку Сайта
Сначала нам потребуется создать собственную область виджетов. На этом шаге мы добавим произвольную область, которую будет видно на странице Внешний вид » Виджеты в консоли сайта.
Для этого добавляем следующий код в файл functions.php темы:


function wpb_widgets_init() {

	register_sidebar( array(
		'name'          => 'Произвольная область для виджетов в хидере',
		'id'            => 'custom-header-widget',
		'before_widget' => '<div class="chw-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="chw-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );


Этот код регистрирует новый сайдбар или область для виджетов в вашей теме.
Теперь можно перейти на страницу Внешний вид » Виджеты и вы увидите новую область под названием ‘Произвольная область для виджетов в хидере’.

Вам потребуется отредактировать файл header.php своей темы и добавить следующий код в то место, где нужно вывести область для виджетов.

<?php

if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
    <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
	<?php dynamic_sidebar( 'custom-header-widget' ); ?>
    </div>

<?php endif; ?>

Не забудьте сохранить изменения.

Вкладка произвольного CSS в кастомайзере позволит вам добавить собственный CSS и сразу видеть эти изменения.

div#header-widget-area {
    width: 100%;
    background-color: #f7f7f7;
border-bottom:1px solid #eeeeee;
    text-align: center;
}
h2.chw-title {
    margin-top: 0px;
    text-align: left;
    text-transform: uppercase;
    font-size: small;
    background-color: #feffce;
    width: 130px;
    padding: 5px;
    }


