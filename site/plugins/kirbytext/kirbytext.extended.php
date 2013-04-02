<?php

class kirbytextExtended extends kirbytext {

  function __construct($text, $markdown=true) {
    parent::__construct($text, $markdown);

    // define custom tags
    $this->addTags('wikipedia');
    $this->addAttributes('language');
  }

  function wikipedia($params) {
    $search = $params['wikipedia'];

    // define default values for attributes
    $defaults = array(
      'language' => 'en',
      'text'     => $search
    );

    // merge the given parameters with the default values
    $options = array_merge($defaults, $params);

    // build the final url
    $url = 'http://'.$options['language'].'.wikipedia.org/w/index.php?search='.urlencode($search);
 
    // build the link tag
    return '<a href="'.$url.'">'.html($options['text']).' on Wikipedia</a>';
  }
}
?>