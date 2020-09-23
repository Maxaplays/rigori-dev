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

/* themes/rigori/templates/node--view--vista-areas.html.twig */
class __TwigTemplate_ae40d649f6b3f3bf39dd696fe1f5a2a9cc1ecc7643e67b4b8ae8c468c9ace1d1 extends \Twig\Template
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
        $filters = array("escape" => 3);
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
        echo "<div class=\"container-fluid w-100 containerMarginCom\">
<div class=\"row\">
<div class=\"col d-none d-lg-block imgAreas\" style=\"background-image:url('";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_img_areas", [], "any", false, false, true, 3), 0, [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "')\">
</div>
<div class=\"col container contenidoAreas\">
    <h2 class=\"card-title\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_titulo_areas", [], "any", false, false, true, 6), 0, [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h2>
    <img src=";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_logo", [], "any", false, false, true, 7), 0, [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo ">
    <p >";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 8), 0, [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</p>
</div>
</div>
</div>



";
    }

    public function getTemplateName()
    {
        return "themes/rigori/templates/node--view--vista-areas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 8,  76 => 7,  72 => 6,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid w-100 containerMarginCom\">
<div class=\"row\">
<div class=\"col d-none d-lg-block imgAreas\" style=\"background-image:url('{{ content.field_img_areas.0 }}')\">
</div>
<div class=\"col container contenidoAreas\">
    <h2 class=\"card-title\">{{ content.field_titulo_areas.0 }}</h2>
    <img src={{ content.field_logo.0 }}>
    <p >{{ content.body.0 }}</p>
</div>
</div>
</div>



", "themes/rigori/templates/node--view--vista-areas.html.twig", "/var/www/Abogados/AbogadosDev/web/themes/rigori/templates/node--view--vista-areas.html.twig");
    }
}
