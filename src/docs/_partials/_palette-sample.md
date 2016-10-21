<div class="sample">
{% for key, value in tones -%}
  <div class="color{% if key == 'base' %} color--base{% endif %}" style="color: {{ value }}">
    <code>{{ value }}</code>
    <var>{{ key }}</var>
  </div>
{% endfor -%}
</div>
