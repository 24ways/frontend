---
title: Styleguide
order: 1
---
## Colour Palettes
{% for palette, values in colors %}
### {{ palette | capitalize }}
{% include "@palette-sample" %}
{% endfor %}

* * *

## Typography
We use a selection fonts, each chosen to perform a specific task. Their combination gives us a contemporary, sharp look that’s also friendly, informal and approachable.

{% for key, value in fonts %}
{% include "@font-sample" %}
{% endfor %}

* * *

## Iconography
We use iconography throughout the interface to aid users’ understanding of controls and functionality and to add visual interest to the interface.

### Topic icons
<div class="icons">
{% include "topic-business.svg" %}
{% include "topic-code.svg" %}
{% include "topic-content.svg" %}
{% include "topic-design.svg" %}
{% include "topic-process.svg" %}
{% include "topic-ux.svg" %}
</div>

### Navigation icons
<div class="icons">
{% include "menu.svg" %}
{% include "prev.svg" %}
{% include "next.svg" %}
{% include "search.svg" %}
</div>
