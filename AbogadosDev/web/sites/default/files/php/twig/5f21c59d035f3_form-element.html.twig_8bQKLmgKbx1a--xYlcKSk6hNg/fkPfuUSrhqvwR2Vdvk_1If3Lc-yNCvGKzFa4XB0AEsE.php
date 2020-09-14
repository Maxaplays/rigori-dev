<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/bootstrap_barrio/templates/form/form-element.html.twig */
class __TwigTemplate_100c5720c7930fee3df7adc4d8d172aac811b02c77abc3e693567cbf6bbc14b2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 48, "set" => 50);
        $filters = array("clean_class" => 79, "escape" => 97, "raw" => 108);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['clean_class', 'escape', 'raw'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "
";
        // line 48
        if ((($context["type"] ?? null) == "checkbox")) {
            // line 49
            echo "  ";
            if ((($context["customtype"] ?? null) == "custom")) {
                // line 50
                echo "    ";
                $context["wrapperclass"] = "custom-control custom-checkbox";
                // line 51
                echo "    ";
                $context["labelclass"] = "custom-control-label";
                // line 52
                echo "    ";
                $context["inputclass"] = "custom-control-input";
                // line 53
                echo "  ";
            } elseif ((($context["customtype"] ?? null) == "switch")) {
                // line 54
                echo "    ";
                $context["wrapperclass"] = "custom-control custom-switch";
                // line 55
                echo "    ";
                $context["labelclass"] = "custom-control-label";
                // line 56
                echo "    ";
                $context["inputclass"] = "custom-control-input";
                // line 57
                echo "  ";
            } else {
                // line 58
                echo "    ";
                $context["wrapperclass"] = "form-check";
                // line 59
                echo "    ";
                $context["labelclass"] = "form-check-label";
                // line 60
                echo "    ";
                $context["inputclass"] = "form-check-input";
                // line 61
                echo "  ";
            }
        }
        // line 63
        echo "
";
        // line 64
        if ((($context["type"] ?? null) == "radio")) {
            // line 65
            echo "  ";
            if ((($context["customtype"] ?? null) == "custom")) {
                // line 66
                echo "    ";
                $context["wrapperclass"] = "custom-control custom-radio";
                // line 67
                echo "    ";
                $context["labelclass"] = "custom-control-label";
                // line 68
                echo "    ";
                $context["inputclass"] = "custom-control-input";
                // line 69
                echo "  ";
            } else {
                // line 70
                echo "    ";
                $context["wrapperclass"] = "form-check";
                // line 71
                echo "    ";
                $context["labelclass"] = "form-check-label";
                // line 72
                echo "    ";
                $context["inputclass"] = "form-check-input";
                // line 73
                echo "  ";
            }
        }
        // line 75
        echo "
";
        // line 77
        $context["classes"] = [0 => "js-form-item", 1 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 79
($context["type"] ?? null), 79, $this->source))), 2 => ((twig_in_filter(        // line 80
($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 80, $this->source))) : (("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 80, $this->source))))), 3 => ((twig_in_filter(        // line 81
($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) ? (($context["wrapperclass"] ?? null)) : ("")), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 82
($context["name"] ?? null), 82, $this->source))), 5 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 83
($context["name"] ?? null), 83, $this->source))), 6 => ((!twig_in_filter(        // line 84
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 7 => (((        // line 85
($context["disabled"] ?? null) == "disabled")) ? ("disabled") : ("")), 8 => ((        // line 86
($context["errors"] ?? null)) ? ("has-error") : (""))];
        // line 90
        $context["description_classes"] = [0 => "description", 1 => "text-muted", 2 => (((        // line 93
($context["description_display"] ?? null) == "invisible")) ? ("sr-only") : (""))];
        // line 96
        if (twig_in_filter(($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) {
            // line 97
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 97), 97, $this->source), "html", null, true);
            echo ">
    ";
            // line 98
            if ( !twig_test_empty(($context["prefix"] ?? null))) {
                // line 99
                echo "      <span class=\"field-prefix\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 99, $this->source), "html", null, true);
                echo "</span>
    ";
            }
            // line 101
            echo "    ";
            if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 101))) {
                // line 102
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                echo ">
        ";
                // line 103
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 106
            echo "    ";
            if ((($context["label_display"] ?? null) == "before")) {
                // line 107
                echo "      <label ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["labelclass"] ?? null)], "method", false, false, true, 107), "setAttribute", [0 => "for", 1 => twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 107)], "method", false, false, true, 107), 107, $this->source), "html", null, true);
                echo ">
        ";
                // line 108
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["input_title"] ?? null), 108, $this->source));
                echo "
      </label>
    ";
            }
            // line 111
            echo "    <input";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "addClass", [0 => ($context["inputclass"] ?? null)], "method", false, false, true, 111), 111, $this->source), "html", null, true);
            echo ">
    ";
            // line 112
            if ((($context["label_display"] ?? null) == "after")) {
                // line 113
                echo "      <label ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["labelclass"] ?? null)], "method", false, false, true, 113), "setAttribute", [0 => "for", 1 => twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 113)], "method", false, false, true, 113), 113, $this->source), "html", null, true);
                echo ">
        ";
                // line 114
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["input_title"] ?? null), 114, $this->source));
                echo "
      </label>
    ";
            }
            // line 117
            echo "    ";
            if ( !twig_test_empty(($context["suffix"] ?? null))) {
                // line 118
                echo "      <span class=\"field-suffix\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 118, $this->source), "html", null, true);
                echo "</span>
    ";
            }
            // line 120
            echo "    ";
            if (($context["errors"] ?? null)) {
                // line 121
                echo "      <div class=\"invalid-feedback\">
        ";
                // line 122
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 122, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 125
            echo "    ";
            if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 125))) {
                // line 126
                echo "      <small";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 126), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 126), 126, $this->source), "html", null, true);
                echo ">
        ";
                // line 127
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
                echo "
      </small>
    ";
            }
            // line 130
            echo "  </div>
";
        } else {
            // line 132
            echo "  <fieldset";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "form-group"], "method", false, false, true, 132), 132, $this->source), "html", null, true);
            echo ">
    ";
            // line 133
            if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
                // line 134
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 134, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 136
            echo "    ";
            if (( !twig_test_empty(($context["prefix"] ?? null)) ||  !twig_test_empty(($context["suffix"] ?? null)))) {
                // line 137
                echo "      <div class=\"input-group\">
    ";
            }
            // line 139
            echo "    ";
            if ( !twig_test_empty(($context["prefix"] ?? null))) {
                // line 140
                echo "      <div class=\"input-group-prepend\">
        <span class=\"field-prefix input-group-text\">";
                // line 141
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 141, $this->source), "html", null, true);
                echo "</span>
      </div>
    ";
            }
            // line 144
            echo "    ";
            if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 144))) {
                // line 145
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
                echo ">
        ";
                // line 146
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 149
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 149, $this->source), "html", null, true);
            echo "
    ";
            // line 150
            if ( !twig_test_empty(($context["suffix"] ?? null))) {
                // line 151
                echo "      <div class=\"input-group-append\">
        <span class=\"field-suffix input-group-text\">";
                // line 152
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 152, $this->source), "html", null, true);
                echo "</span>
      </div>
    ";
            }
            // line 155
            echo "    ";
            if (( !twig_test_empty(($context["prefix"] ?? null)) ||  !twig_test_empty(($context["suffix"] ?? null)))) {
                // line 156
                echo "      </div>
    ";
            }
            // line 158
            echo "    ";
            if ((($context["label_display"] ?? null) == "after")) {
                // line 159
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 159, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 161
            echo "    ";
            if (($context["errors"] ?? null)) {
                // line 162
                echo "      <div class=\"invalid-feedback\">
        ";
                // line 163
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 163, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 166
            echo "    ";
            if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 166))) {
                // line 167
                echo "      <small";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 167), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 167), 167, $this->source), "html", null, true);
                echo ">
        ";
                // line 168
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
                echo "
      </small>
    ";
            }
            // line 171
            echo "  </fieldset>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_barrio/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 171,  354 => 168,  349 => 167,  346 => 166,  340 => 163,  337 => 162,  334 => 161,  328 => 159,  325 => 158,  321 => 156,  318 => 155,  312 => 152,  309 => 151,  307 => 150,  302 => 149,  296 => 146,  291 => 145,  288 => 144,  282 => 141,  279 => 140,  276 => 139,  272 => 137,  269 => 136,  263 => 134,  261 => 133,  256 => 132,  252 => 130,  246 => 127,  241 => 126,  238 => 125,  232 => 122,  229 => 121,  226 => 120,  220 => 118,  217 => 117,  211 => 114,  206 => 113,  204 => 112,  199 => 111,  193 => 108,  188 => 107,  185 => 106,  179 => 103,  174 => 102,  171 => 101,  165 => 99,  163 => 98,  158 => 97,  156 => 96,  154 => 93,  153 => 90,  151 => 86,  150 => 85,  149 => 84,  148 => 83,  147 => 82,  146 => 81,  145 => 80,  144 => 79,  143 => 77,  140 => 75,  136 => 73,  133 => 72,  130 => 71,  127 => 70,  124 => 69,  121 => 68,  118 => 67,  115 => 66,  112 => 65,  110 => 64,  107 => 63,  103 => 61,  100 => 60,  97 => 59,  94 => 58,  91 => 57,  88 => 56,  85 => 55,  82 => 54,  79 => 53,  76 => 52,  73 => 51,  70 => 50,  67 => 49,  65 => 48,  62 => 47,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a form element.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - errors: (optional) Any errors for this form element, may not be set.
 * - prefix: (optional) The form element prefix, may not be set.
 * - suffix: (optional) The form element suffix, may not be set.
 * - required: The required marker, or empty if the associated form element is
 *   not required.
 * - type: The type of the element.
 * - name: The name of the element.
 * - label: A rendered label element.
 * - label_display: Label display setting. It can have these values:
 *   - before: The label is output before the element. This is the default.
 *     The label includes the #title and the required marker, if #required.
 *   - after: The label is output after the element. For example, this is used
 *     for radio and checkbox #type elements. If the #title is empty but the
 *     field is #required, the label will contain only the required marker.
 *   - invisible: Labels are critical for screen readers to enable them to
 *     properly navigate through forms but can be visually distracting. This
 *     property hides the label for everyone except screen readers.
 *   - attribute: Set the title attribute on the element to create a tooltip but
 *     output no label element. This is supported only for checkboxes and radios
 *     in \\Drupal\\Core\\Render\\Element\\CompositeFormElementTrait::preRenderCompositeFormElement().
 *     It is used where a visual label is not needed, such as a table of
 *     checkboxes where the row and column provide the context. The tooltip will
 *     include the title and required marker.
 * - description: (optional) A list of description properties containing:
 *    - content: A description of the form element, may not be set.
 *    - attributes: (optional) A list of HTML attributes to apply to the
 *      description content wrapper. Will only be set when description is set.
 * - description_display: Description display setting. It can have these values:
 *   - before: The description is output before the element.
 *   - after: The description is output after the element. This is the default
 *     value.
 *   - invisible: The description is output after the element, hidden visually
 *     but available to screen readers.
 * - disabled: True if the element is disabled.
 * - title_display: Title display setting.
 *
 * @see template_preprocess_form_element()
 */
#}

{% if type == 'checkbox' %}
  {% if customtype == 'custom' %}
    {% set wrapperclass = \"custom-control custom-checkbox\" %}
    {% set labelclass = \"custom-control-label\" %}
    {% set inputclass = \"custom-control-input\" %}
  {% elseif customtype == 'switch' %}
    {% set wrapperclass = \"custom-control custom-switch\" %}
    {% set labelclass = \"custom-control-label\" %}
    {% set inputclass = \"custom-control-input\" %}
  {% else %}
    {% set wrapperclass = \"form-check\" %}
    {% set labelclass = \"form-check-label\" %}
    {% set inputclass = \"form-check-input\" %}
  {% endif %}
{% endif %}

{% if type == 'radio' %}
  {% if customtype == 'custom' %}
    {% set wrapperclass = \"custom-control custom-radio\" %}
    {% set labelclass = \"custom-control-label\" %}
    {% set inputclass = \"custom-control-input\" %}
  {% else %}
    {% set wrapperclass = \"form-check\" %}
    {% set labelclass = \"form-check-label\" %}
    {% set inputclass = \"form-check-input\" %}
  {% endif %}
{% endif %}

{%
  set classes = [
    'js-form-item',
    'js-form-type-' ~ type|clean_class,
    type in ['checkbox', 'radio'] ? type|clean_class : 'form-type-' ~ type|clean_class,
    type in ['checkbox', 'radio'] ? wrapperclass,
    'js-form-item-' ~ name|clean_class,
    'form-item-' ~ name|clean_class,
    title_display not in ['after', 'before'] ? 'form-no-label',
    disabled == 'disabled' ? 'disabled',
    errors ? 'has-error',
  ]
%}
{%
  set description_classes = [
    'description',
\t  'text-muted',
    description_display == 'invisible' ? 'sr-only',
  ]
%}
{% if type in ['checkbox', 'radio'] %}
  <div{{ attributes.addClass(classes) }}>
    {% if prefix is not empty %}
      <span class=\"field-prefix\">{{ prefix }}</span>
    {% endif %}
    {% if description_display == 'before' and description.content %}
      <div{{ description.attributes }}>
        {{ description.content }}
      </div>
    {% endif %}
    {% if label_display == 'before' %}
      <label {{ attributes.addClass(labelclass).setAttribute('for', input_attributes.id) }}>
        {{ input_title | raw }}
      </label>
    {% endif %}
    <input{{ input_attributes.addClass(inputclass) }}>
    {% if label_display == 'after' %}
      <label {{ attributes.addClass(labelclass).setAttribute('for', input_attributes.id) }}>
        {{ input_title | raw }}
      </label>
    {% endif %}
    {% if suffix is not empty %}
      <span class=\"field-suffix\">{{ suffix }}</span>
    {% endif %}
    {% if errors %}
      <div class=\"invalid-feedback\">
        {{ errors }}
      </div>
    {% endif %}
    {% if description_display in ['after', 'invisible'] and description.content %}
      <small{{ description.attributes.addClass(description_classes) }}>
        {{ description.content }}
      </small>
    {% endif %}
  </div>
{% else %}
  <fieldset{{ attributes.addClass(classes, 'form-group') }}>
    {% if label_display in ['before', 'invisible'] %}
      {{ label }}
    {% endif %}
    {% if (prefix is not empty) or (suffix is not empty) %}
      <div class=\"input-group\">
    {% endif %}
    {% if prefix is not empty %}
      <div class=\"input-group-prepend\">
        <span class=\"field-prefix input-group-text\">{{ prefix }}</span>
      </div>
    {% endif %}
    {% if description_display == 'before' and description.content %}
      <div{{ description.attributes }}>
        {{ description.content }}
      </div>
    {% endif %}
    {{ children }}
    {% if suffix is not empty %}
      <div class=\"input-group-append\">
        <span class=\"field-suffix input-group-text\">{{ suffix }}</span>
      </div>
    {% endif %}
    {% if (prefix is not empty) or (suffix is not empty) %}
      </div>
    {% endif %}
    {% if label_display == 'after' %}
      {{ label }}
    {% endif %}
    {% if errors %}
      <div class=\"invalid-feedback\">
        {{ errors }}
      </div>
    {% endif %}
    {% if description_display in ['after', 'invisible'] and description.content %}
      <small{{ description.attributes.addClass(description_classes) }}>
        {{ description.content }}
      </small>
    {% endif %}
  </fieldset>
{% endif %}
", "themes/bootstrap_barrio/templates/form/form-element.html.twig", "/var/www/abogadosGit/web/themes/bootstrap_barrio/templates/form/form-element.html.twig");
    }
}
