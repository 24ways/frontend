---
title: "Sass helpers"
label: "Sass helpers"
---
Sass functions are used to return a value, while mixins are used to create reusable chunks of CSS. Both help us avoid writing repetitive code. The following helpers are used extensively within this component library.

<!--
## mq()
This mixin is used to compose media queries in an elegant way, and forms part of the [sass-mq library](https://github.com/sass-mq/sass-mq). It accepts the variables defined in the [breakpoints token map](/docs/helpers/tokens#breakpoints). Example:

```scss
.foo {
  @include mq($from: small, $until: large) {
    background: red;
  }
  @include mq($from: large) {
    background: green;
  }
}

// Output
@media (min-width: 30em) and (max-width: 44.99em) {
  .foo {
    background: red;
  }
}
@media (min-width: 45em) {
  .foo {
    background: green;
  }
}
```
-->

## palette()
This function returns a HEX value using colours available in the global `$palettes` map:

```scss
palette($palette, $tone)
```

Examples:

```scss
// Use secondary colour (with default tone)
.secondary { color: palette(secondary); }

// Use secondary colour, with the `dark` tone preset
.secondary-dark { color: palette(secondary, dark); }

// Output
.secondary { color: #37a; }
.secondary-dark { color: #265980; }
```

## typeset()
This mixin is used to access the predefined [typographic presets](/docs/styleguide/typography).

```scss
@include typeset($preset, $level, [$line-height])
```

Example:

```scss
.bar {
  @include typeset(title, 3);
}

// Output
.bar {
  text-transform: uppercase;
  letter-spacing: 0.025em;
  line-height: 1;
  font-weight: bolder;
  font-size: 1.5rem;
}
```
<!--
## units()
This function returns a multiple of the global `$sizing-unit`.

```scss
units($mutiple)
```

Examples:

```scss
h1 { margin-bottom: units(3); }
h2 { margin-bottom: units(1/3); }

// Output
h1 { margin-bottom: 2.25rem; }
h2 { margin-bottom: 0.25rem; }
```
-->
