<?php
if (is_category() ||
    is_tag()):
  echo get_template_part('_t-kategoria', 'Kategoria');
endif ?>