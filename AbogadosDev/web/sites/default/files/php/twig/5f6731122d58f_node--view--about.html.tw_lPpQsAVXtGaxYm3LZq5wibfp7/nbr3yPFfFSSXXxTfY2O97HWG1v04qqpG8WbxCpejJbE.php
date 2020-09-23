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

/* themes/rigori/templates/node--view--about.html.twig */
class __TwigTemplate_33919aa95e3cea92bd2627970296849c194eb8e75f892431407dc773060baf44 extends \Twig\Template
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
        echo "<div class=\"about_container\">
    <div class=\"about_content hideme\">
        <div class=\"container centrarContenido\">
            <h2>";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_titulo_about", [], "any", false, false, true, 4), 0, [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"container textoAbout\">
            <span>";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 7), 0, [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</span>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/rigori/templates/node--view--about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 7,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"about_container\">
    <div class=\"about_content hideme\">
        <div class=\"container centrarContenido\">
            <h2>{{ content.field_titulo_about.0 }}</h2>
        </div>
        <div class=\"container textoAbout\">
            <span>{{ content.body.0 }}</span>
        </div>
    </div>
</div>

", "themes/rigori/templates/node--view--about.html.twig", "/var/www/Abogados/AbogadosDev/web/themes/rigori/templates/node--view--about.html.twig");
    }
}
