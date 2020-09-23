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

/* themes/rigori/templates/node--view--vista-porque.html.twig */
class __TwigTemplate_cd52b0fb817f80f75ded240dae7d2c213eb782e4a54d8569eee05096212b537d extends \Twig\Template
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
        echo "<div class=\"contenedorPorque imgPorqueBack\"style= \"background-image: url('";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_porque_backgroung_image", [], "any", false, false, true, 1), 0, [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "')\">
<h1 class=\"container tituloPorque\"> ";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_porque_titulo_principal", [], "any", false, false, true, 2), 0, [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo " </h1>
<div class=\"container card-deck \" >
  <div class=\"card\">
    <img class=\"card-img-top imgCard\" src=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_porque_punto_1img", [], "any", false, false, true, 5), 0, [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\" alt=\"Card image cap\">
    <div class=\"card-body\">
      <h5 class=\"card-title subTituloPorque\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_porque_punto_1", [], "any", false, false, true, 7), 0, [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</h5>
    </div>
  </div>
  <div class=\"card\">
    <img class=\"card-img-top imgCard\" src=\"";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_porque_punto_2img", [], "any", false, false, true, 11), 0, [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "\" alt=\"Card image cap\">
    <div class=\"card-body\">
      <h5 class=\"card-title subTituloPorque\">";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_porque_punto_2", [], "any", false, false, true, 13), 0, [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "</h5>
    </div>
  </div>
  <div class=\"card\">
    <img class=\"card-img-top imgCard\" src=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_porque_punto_3img", [], "any", false, false, true, 17), 0, [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "\" alt=\"Card image cap\">
    <div class=\"card-body\">
      <h5 class=\"card-title subTituloPorque\">";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_porque_punto_3", [], "any", false, false, true, 19), 0, [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "</h5>
    </div>
  </div>
</div>
</div>



";
    }

    public function getTemplateName()
    {
        return "themes/rigori/templates/node--view--vista-porque.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 19,  97 => 17,  90 => 13,  85 => 11,  78 => 7,  73 => 5,  67 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"contenedorPorque imgPorqueBack\"style= \"background-image: url('{{ content.field_porque_backgroung_image.0 }}')\">
<h1 class=\"container tituloPorque\"> {{content.field_porque_titulo_principal.0}} </h1>
<div class=\"container card-deck \" >
  <div class=\"card\">
    <img class=\"card-img-top imgCard\" src=\"{{content.field_porque_punto_1img.0}}\" alt=\"Card image cap\">
    <div class=\"card-body\">
      <h5 class=\"card-title subTituloPorque\">{{content.field_porque_punto_1.0}}</h5>
    </div>
  </div>
  <div class=\"card\">
    <img class=\"card-img-top imgCard\" src=\"{{content.field_porque_punto_2img.0}}\" alt=\"Card image cap\">
    <div class=\"card-body\">
      <h5 class=\"card-title subTituloPorque\">{{content.field_porque_punto_2.0}}</h5>
    </div>
  </div>
  <div class=\"card\">
    <img class=\"card-img-top imgCard\" src=\"{{content.field_porque_punto_3img.0}}\" alt=\"Card image cap\">
    <div class=\"card-body\">
      <h5 class=\"card-title subTituloPorque\">{{content.field_porque_punto_3.0}}</h5>
    </div>
  </div>
</div>
</div>



", "themes/rigori/templates/node--view--vista-porque.html.twig", "/var/www/Abogados/AbogadosDev/web/themes/rigori/templates/node--view--vista-porque.html.twig");
    }
}
