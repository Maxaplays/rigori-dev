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

/* themes/rigori/templates/node--view--vista-valores.html.twig */
class __TwigTemplate_4189b9b37edfa1f39953434f143253c8cd8cf8105b17ce858ae3eaa41cdaffeb extends \Twig\Template
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
        $tags = array();
        $filters = array("escape" => 4);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        // line 1
        echo "<div class=\"container contenedorValores\">
<div class=\"row align-items-center\">
<div class=\"col-lg-2 contenedorImgValores\">
<img src=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_valor_icono", [], "any", false, false, true, 4), 0, [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "\" class=\"imgValor\"S align=\"left\" alt=\"icono valor\">
</div>

<div class=\"col text-justify\">
<h2 class=\"tituloValores\">";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_valor_titulo", [], "any", false, false, true, 8), 0, [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</h2>
<p class=\"contenidoValores\">";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 9), 0, [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</p>
</div>
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/rigori/templates/node--view--vista-valores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 9,  74 => 8,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container contenedorValores\">
<div class=\"row align-items-center\">
<div class=\"col-lg-2 contenedorImgValores\">
<img src=\"{{ content.field_valor_icono.0 }}\" class=\"imgValor\"S align=\"left\" alt=\"icono valor\">
</div>

<div class=\"col text-justify\">
<h2 class=\"tituloValores\">{{ content.field_valor_titulo.0 }}</h2>
<p class=\"contenidoValores\">{{ content.body.0 }}</p>
</div>
</div>
</div>

", "themes/rigori/templates/node--view--vista-valores.html.twig", "/var/www/Abogados/AbogadosDev/web/themes/rigori/templates/node--view--vista-valores.html.twig");
    }
}
