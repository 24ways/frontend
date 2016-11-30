<div class="palette">
{% for key, value in values -%}
  <div class="color{% if key == 'base' %} color--base{% endif %}" style="color: {{ value }}">
    <span>{{ value }}</span>
    <code>{{ key }}</code>
  </div>
{% endfor -%}
</div>
