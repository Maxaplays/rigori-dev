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

/* themes/rigori/templates/node--view--vista-main-equipo.html.twig */
class __TwigTemplate_fb1738dbfbecc6eb40ee583bcfd7c9ed83c01bca36298ed1872bd773d5b8872a extends \Twig\Template
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
        echo "<div class=\"seccion_equipo_container\">

    <div class=\"card equipo_content_card \">
        <img class=\"card-img-top imgCardEquipo\" src=";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_equipo_imagen", [], "any", false, false, true, 4), 0, [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo " alt=\"Card image cap\">
        <div class=\"card-body text-justify equipo_body\">
            <h2 class=\"card-title equipo_title\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_equipo_titulo", [], "any", false, false, true, 6), 0, [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h2>
            <p class=\"card-text\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_equipo_descripcion", [], "any", false, false, true, 7), 0, [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/rigori/templates/node--view--vista-main-equipo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 7,  72 => 6,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"seccion_equipo_container\">

    <div class=\"card equipo_content_card \">
        <img class=\"card-img-top imgCardEquipo\" src={{ content.field_equipo_imagen.0 }} alt=\"Card image cap\">
        <div class=\"card-body text-justify equipo_body\">
            <h2 class=\"card-title equipo_title\">{{ content.field_equipo_titulo.0 }}</h2>
            <p class=\"card-text\">{{ content.field_equipo_descripcion.0 }}</p>
        </div>
    </div>
</div>", "themes/rigori/templates/node--view--vista-main-equipo.html.twig", "/var/www/Abogados/AbogadosDev/web/themes/rigori/templates/node--view--vista-main-equipo.html.twig");
    }
}
