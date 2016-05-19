<?
/* Limit Your Website Excerpt */

function word_limit($string, $max_words){

$post_words = explode(' ', $string);

$count = count($post_words);

$post_words = implode(' ', array_slice($post_words, 0, $max_words));

if($count > $max_words):

return $post_words . '...';

else:

return $post_words;

endif;

}