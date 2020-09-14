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

/* themes/rigori/templates/node--view--hero-main.html.twig */
class __TwigTemplate_23731fd24168468725925877dd6a654603c986d127285793e8580e93c73c0107 extends \Twig\Template
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
        $filters = array("escape" => 1);
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
        echo "<div class=\"background_hero\" style=\"background-image:url('";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_background_image", [], "any", false, false, true, 1), 0, [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "')\">
\t<div class=\"texto_hero\" id=\"textHero\">
    <h1>";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_title", [], "any", false, false, true, 3), 0, [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "</h1>
    <h2>";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_subtitle", [], "any", false, false, true, 4), 0, [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</h2>
    <div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/rigori/templates/node--view--hero-main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 4,  68 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"background_hero\" style=\"background-image:url('{{ content.field_background_image.0 }}')\">
\t<div class=\"texto_hero\" id=\"textHero\">
    <h1>{{ content.field_hero_title.0 }}</h1>
    <h2>{{ content.field_hero_subtitle.0 }}</h2>
    <div>
</div>", "themes/rigori/templates/node--view--hero-main.html.twig", "/var/www/abogadosGit/web/themes/rigori/templates/node--view--hero-main.html.twig");
    }
}
