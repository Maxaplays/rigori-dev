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

/* core/themes/seven/templates/classy/form/datetime-wrapper.html.twig */
class __TwigTemplate_045e62055732dbd2f02d14aaf3089e4446ae966a3a347d9881bec3deb2428acb extends \Twig\Template
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
        $tags = array("set" => 17, "if" => 23);
        $filters = array("escape" => 24);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
        // line 17
        $context["title_classes"] = [0 => "label", 1 => ((        // line 19
($context["required"] ?? null)) ? ("js-form-required") : ("")), 2 => ((        // line 20
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 23
        if (($context["title"] ?? null)) {
            // line 24
            echo "  <h4";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 24), 24, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 24, $this->source), "html", null, true);
            echo "</h4>
";
        }
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 26, $this->source), "html", null, true);
        echo "
";
        // line 27
        if (($context["errors"] ?? null)) {
            // line 28
            echo "  <div class=\"form-item--error-message\">
    <strong>";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 29, $this->source), "html", null, true);
            echo "</strong>
  </div>
";
        }
        // line 32
        if (($context["description"] ?? null)) {
            // line 33
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description_attributes"] ?? null), "addClass", [0 => "description"], "method", false, false, true, 33), 33, $this->source), "html", null, true);
            echo ">
    ";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 34, $this->source), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/classy/form/datetime-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  93 => 33,  91 => 32,  85 => 29,  82 => 28,  80 => 27,  76 => 26,  68 => 24,  66 => 23,  64 => 20,  63 => 19,  62 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override of a datetime form wrapper.
 *
 * Available variables:
 * - content: The form element to be output, usually a datelist, or datetime.
 * - title: The title of the form element.
 * - title_attributes: HTML attributes for the title wrapper.
 * - description: Description text for the form element.
 * - required: An indicator for whether the associated form element is required.
 *
 * @see template_preprocess_datetime_wrapper()
 */
#}
{%
  set title_classes = [
    'label',
    required ? 'js-form-required',
    required ? 'form-required',
  ]
%}
{% if title %}
  <h4{{ title_attributes.addClass(title_classes) }}>{{ title }}</h4>
{% endif %}
{{ content }}
{% if errors %}
  <div class=\"form-item--error-message\">
    <strong>{{ errors }}</strong>
  </div>
{% endif %}
{% if description %}
  <div{{ description_attributes.addClass('description') }}>
    {{ description }}
  </div>
{% endif %}
", "core/themes/seven/templates/classy/form/datetime-wrapper.html.twig", "/var/www/Abogados/AbogadosDev/web/core/themes/seven/templates/classy/form/datetime-wrapper.html.twig");
    }
}
