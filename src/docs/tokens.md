---
title: "Design tokens"
label: "Design tokens"
---
[Design tokens](https://medium.com/eightshapes-llc/25dd82d58421) are named entities that store visual design information. These are used in place of hard-coded values (such as hex values for color or pixels for spacing) in order to maintain a scalable, consistent system for UI development.

## Borders
Width and radii tokens are used to style element borders.

Variable  | Value
----------|------------
{% for key, value in borders -%}
`${{ key }}` | {{ value }}
{% endfor -%}

## Breakpoints
Breakpoint tokens are used within `@media` queries.

Variable  | Value
----------|------------
{% for key, value in breakpoints -%}
`${{ key }}` | {{ value }}
{% endfor -%}

## Font families
Font family tokens are used for typographic styling.

Variable  | Value
----------|------------
{% for key, value in fonts -%}
`${{ key }}` | {{ value }}
{% endfor -%}

## Layers
Layering tokens set the `z-index` layer value for elements.

Variable  | Value
----------|------------
{% for key, value in layers -%}
`${{ key }}` | {{ value }}
{% endfor -%}

## Sizes
Sizing tokens describe the dimensions of elements.

Variable  | Value
----------|------------
{% for key, value in sizes -%}
`${{ key }}` | {{ value }}
{% endfor -%}

## Spacing
Spacing tokens describe the distance between elements.

Variable  | Value
----------|------------
{% for key, value in spaces -%}
`${{ key }}` | {{ value }}
{% endfor -%}
