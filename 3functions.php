add_filter('the_content', 'the_content_replace_tags', 10, 20);
function the_content_replace_tags($content){

$patterns = array("#(<img.*title=\")[^\"]*(\"[^>]*>)#", "#(<img.*alt=\")[^\"]*(\"[^>]*>)#");
$replacements = array("\\1\\2", "\\1\\2");

$content = preg_replace($patterns, $replacements, $content);

return $content;
} 
