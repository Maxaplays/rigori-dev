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

/* themes/rigori/templates/node--view--vista-integrantes.html.twig */
class __TwigTemplate_0b7573f0b89b81cc92d59dab928f7751e5678d03d1ca8c286f89ecd995b50f02 extends \Twig\Template
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
        echo "<div class=\"container containerPerfil\">
    <div class=\"row\">
        <div class=\"col-sm-12 col-md-6 col-lg-6 col-xl-6 imgPerfilContainer\">
            <img class=\"imgPerfil\"src=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_img_perfil", [], "any", false, false, true, 4), 0, [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "\">
        </div>
        <div class=\"col-sm-12 col-md-6 col-lg-6 col-xl-6 container contenidoPerfilContainer\">
            <div class=\"contenidoPerfil\">
                <h2 class=\"card-title perfilTitle\">";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_titulo", [], "any", false, false, true, 8), 0, [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</h2>
                ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_body", [], "any", false, false, true, 9), 0, [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/rigori/templates/node--view--vista-integrantes.html.twig";
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
        return new Source("<div class=\"container containerPerfil\">
    <div class=\"row\">
        <div class=\"col-sm-12 col-md-6 col-lg-6 col-xl-6 imgPerfilContainer\">
            <img class=\"imgPerfil\"src=\"{{ content.field_img_perfil.0 }}\">
        </div>
        <div class=\"col-sm-12 col-md-6 col-lg-6 col-xl-6 container contenidoPerfilContainer\">
            <div class=\"contenidoPerfil\">
                <h2 class=\"card-title perfilTitle\">{{ content.field_titulo.0 }}</h2>
                {{ content.field_body.0 }}
            </div>
        </div>
    </div>
</div>", "themes/rigori/templates/node--view--vista-integrantes.html.twig", "/var/www/Abogados/AbogadosDev/web/themes/rigori/templates/node--view--vista-integrantes.html.twig");
    }
}
