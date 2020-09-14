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

/* themes/rigori/templates/node--view--vista-area-derecho.html.twig */
class __TwigTemplate_3edc201998ebea64bbb32c2af438e2127fbb74915a716222e75d6e263d1b75f5 extends \Twig\Template
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
        echo "<div class=\"container-fluid w-100 containerMargin\">
<div class=\"row\">
<div class=\"col container contenidoAreas\">
    <h2 class=\"card-title\">";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_titulo_area_derecho", [], "any", false, false, true, 4), 0, [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</h2>
    <img src=";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_logo_area_derecho", [], "any", false, false, true, 5), 0, [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "}>
    <p>";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 6), 0, [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</p>
</div>
<div class=\"col d-none d-lg-block imgAreas\" style= \"background-image: url('";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_img_area_derecho", [], "any", false, false, true, 8), 0, [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "')\">
</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/rigori/templates/node--view--vista-area-derecho.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 8,  75 => 6,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid w-100 containerMargin\">
<div class=\"row\">
<div class=\"col container contenidoAreas\">
    <h2 class=\"card-title\">{{ content.field_titulo_area_derecho.0 }}</h2>
    <img src={{ content.field_logo_area_derecho.0 }}}>
    <p>{{ content.body.0 }}</p>
</div>
<div class=\"col d-none d-lg-block imgAreas\" style= \"background-image: url('{{ content.field_img_area_derecho.0 }}')\">
</div>
</div>
</div>
", "themes/rigori/templates/node--view--vista-area-derecho.html.twig", "/var/www/abogadosGit/web/themes/rigori/templates/node--view--vista-area-derecho.html.twig");
    }
}
