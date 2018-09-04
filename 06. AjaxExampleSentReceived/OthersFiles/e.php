<?php

$entries = array(
  'भाग-1' => array(
'heading1' => 'संघ और उसका राज्य क्षेत्र',
'heading2' => '(The Union and its Territories)',

'kavya' => array ('सब राज्यों को मिलाकर, भारत एक संघ होगा,
चाहें तो, नवराष्ट्रों का मिलन, विधि सम्मत होगा।
(अनुच्छेद - 1,2)

संसद चाहे, नये राज्यों का निर्माण कर सकती है,
वर्तमान राज्यों में, परिवर्तन भी कर सकती है।
(अनुच्छेद - 3)'
),
),

  'भाग-1' => array(
    'part' => 'संघ और उसका राज्य क्षेत्र',
    'definition' => '(The Union and its Territories)',
    'quote' => array(
      'सब राज्यों को मिलाकर, भारत एक संघ होगा,
चाहें तो, नवराष्ट्रों का मिलन, विधि सम्मत होगा।
(अनुच्छेद - 1,2)

संसद चाहे, नये राज्यों का निर्माण कर सकती है,
वर्तमान राज्यों में, परिवर्तन भी कर सकती है।
(अनुच्छेद - 3)',
    ),
    'author' => '(अनुच्छेद - 3)',
  ),

  'EDIBLE' => array(
    'part' => 'adj.',
    'definition' => 'Good to eat, and wholesome to digest, as
      a worm to a toad, a toad to a snake, a snake to a pig,
      a pig to a man, and a man to a worm.',
  ),

  'EDUCATION' => array(
    'part' => 'n.',
    'definition' => 'That which discloses to the wise and
      disguises from the foolish their lack of
      understanding.',
  ),

  'ELOQUENCE' => array(
    'part' => 'n.',
    'definition' => 'The art of orally persuading fools that
      white is the color that it appears to be.  It includes
      the gift of making any color appear white.',
  ),

  'ELYSIUM' => array(
    'part' => 'n.',
    'definition' => 'An imaginary delightful country which
      the ancients foolishly believed to be inhabited by the
      spirits of the good.  This ridiculous and mischievous
      fable was swept off the face of the earth by the early
      Christians &mdash; may their souls be happy in Heaven!',
  ),

  'EMANCIPATION' => array(
    'part' => 'n.',
    'definition' => 'A bondman\'s change from the tyranny of
      another to the despotism of himself.',
    'quote' => array(
      'He was a slave:  at word he went and came;',
      'His iron collar cut him to the bone.',
      'Then Liberty erased his owner\'s name,',
      'Tightened the rivets and inscribed his own.',
    ),
    'author' => 'G.J.',
  ),

  'EMOTION' => array(
    'part' => 'n.',
    'definition' => 'A prostrating disease caused by a
      determination of the heart to the head.  It is
      sometimes accompanied by a copious discharge of
      hydrated chloride of sodium from the eyes.',
  ),

  'ENVELOPE' => array(
    'part' => 'n.',
    'definition' => 'The coffin of a document; the scabbard
      of a bill; the husk of a remittance; the bed-gown of a
      love-letter.',
  ),

  'ENVY' => array(
    'part' => 'n.',
    'definition' => 'Emulation adapted to the meanest
      capacity.',
  ),

  'EPITAPH' => array(
    'part' => 'n.',
    'definition' => 'An inscription on a tomb, showing that
      virtues acquired by death have a retroactive effect.
      Following is a touching example:',
    'quote' => array(
      'Here lie the bones of Parson Platt,',
      'Wise, pious, humble and all that,',
      'Who showed us life as all should live it;',
      'Let that be said &mdash; and God forgive it!',
    ),
  ),

  'EVANGELIST' => array(
    'part' => 'n.',
    'definition' => 'A bearer of good tidings, particularly
      (in a religious sense) such as assure us of our own
      salvation and the damnation of our neighbors.',
  ),
  
);

if (isset($entries[strtoupper($_REQUEST['term'])])) {
  $term = strtoupper($_REQUEST['term']);
  $entry = $entries[$term];
  echo build_entry($term, $entry);
} else {
  echo '<div>Sorry, your term was not found.</div>';
}

function build_entry($term, $entry) {
  $html = '<div class="entry">';
  $html .= '<h3 class="term">';
  $html .= $term;
  $html .= '</h3>';

  $html .= '<div class="part">';
  $html .= $entry['part'];
  $html .= '</div>';

  $html .= '<div class="definition">';
  $html .= $entry['definition'];
  if (isset($entry['quote'])) {
    $html .= '<div class="quote">';
    foreach ($entry['quote'] as $line) {
      $html .= '<div class="quote-line">'. $line .'</div>';
    }
    if (isset($entry['author'])) {
      $html .= '<div class="quote-author">';
      $html .= $entry['author'] .'</div>';
    }
    $html .= '</div>';
  }
  $html .= '</div>';
  $html .= '</div>';

  return $html;
}
