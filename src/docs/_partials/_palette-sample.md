<div class="palette">
{% for key, value in values -%}
  <figure class="color{% if key == 'base' %} color--base{% endif %}">
    <svg aria-label="{{ value }}">
      <rect fill="{{ value }}" width="100%" height="100%"/>
      <text fill="white" x="10" y="10" alignment-baseline="hanging">{{ value }}</text>
    </svg>
    <figcaption><code>{{ key }}</code></figcaption>
  </figure>
{% endfor -%}
</div>
