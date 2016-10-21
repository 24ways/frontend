---
title: Colour
order: 1
---
## Palettes
The following palettes can be accessed via the `palette()` function, [described here](/docs/helpers/sass).

{% for palette, tones in palettes %}
### {{ palette | capitalize }}
{% include "@palette-sample" %}
{% endfor %}
