---
layout: page
permalink: /submit.php
title: Contact
menuorder: 0
---

{% include sendmail.php %}

<div>
{% raw %}
<?php
  if ($success) {
   echo "<p>Merci pour votre message !</p>";
  } else {
   echo "<p>Erreur ! Merci de contacter info@helene-wang.fr</p>";
  }
?>
{% endraw %}
</div>
