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

/* themes/rigori/templates/node--view--vista-footer.html.twig */
class __TwigTemplate_bfc1db3096faaeb513b057d26708a70dce39beb6868e1b94316584279493a2eb extends \Twig\Template
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
        $filters = array("escape" => 6);
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
        echo "<div class=\"row w-100 inner_footer_container\">
    <div class=\"container footer_contact\">
        <h3 class=\"footer_primary_label\" id=\"contact_label\">Contáctanos</h3>
    <div class=\"direction_container\">
        <i class='fas fa-map-marker-alt'></i>
        <span>";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_direccion", [], "any", false, false, true, 6), 0, [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</span>
    </div>

    <div class=\"telf_container\">
        ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_telf_contact", [], "any", false, false, true, 10), 0, [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "
    </div>
    </div>

    <div class=\"container col-sm-12 col-md-4 col-lg-4 col-xl-4 footer_column first_column\">

        <div class=\"col-sm\">
            <a href=\"https://www.facebook.com\"><img src=";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_red_facebook", [], "any", false, false, true, 17), 0, [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo " alt='facebook_logo' id=\"f_net_logo\" class=\"img-fluid net_logo\"></a>
        </div>
        <div class=\"col-sm\">
            <a href=\"https://www.instagram.com\"><img src=";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_red_instagram", [], "any", false, false, true, 20), 0, [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo " alt='instagram_logo' id=\"i_net_logo\" class=\"img-fluid net_logo\"></a>
        </div>
        <div class=\"col-sm\">
            <a href=\"https://www.linkedin.com\"><img src=";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_red_linkedin", [], "any", false, false, true, 23), 0, [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo " alt='linkedin_logo' id=\"l_net_logo\" class=\"img-fluid net_logo\"></a>
        </div>
        <div class=\"col-sm\">
            <a href=\"https://twitter.com\"><img src=";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_red_twitter", [], "any", false, false, true, 26), 0, [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo " alt='twitter_logo' id=\"t_net_logo\" class=\"img-fluid net_logo\"></a>  
        </div>
    </div>

<div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-12 footer_copyright\">
    <span>";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_copyright", [], "any", false, false, true, 31), 0, [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "</span>
</div>

<div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-12 developer_brand\">
    <span>";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_descripcion_desarrollo", [], "any", false, false, true, 35), 0, [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "</span>
</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "themes/rigori/templates/node--view--vista-footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  112 => 31,  104 => 26,  98 => 23,  92 => 20,  86 => 17,  76 => 10,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row w-100 inner_footer_container\">
    <div class=\"container footer_contact\">
        <h3 class=\"footer_primary_label\" id=\"contact_label\">Contáctanos</h3>
    <div class=\"direction_container\">
        <i class='fas fa-map-marker-alt'></i>
        <span>{{ content.field_direccion.0 }}</span>
    </div>

    <div class=\"telf_container\">
        {{ content.field_telf_contact.0 }}
    </div>
    </div>

    <div class=\"container col-sm-12 col-md-4 col-lg-4 col-xl-4 footer_column first_column\">

        <div class=\"col-sm\">
            <a href=\"https://www.facebook.com\"><img src={{ content.field_red_facebook.0 }} alt='facebook_logo' id=\"f_net_logo\" class=\"img-fluid net_logo\"></a>
        </div>
        <div class=\"col-sm\">
            <a href=\"https://www.instagram.com\"><img src={{ content.field_red_instagram.0 }} alt='instagram_logo' id=\"i_net_logo\" class=\"img-fluid net_logo\"></a>
        </div>
        <div class=\"col-sm\">
            <a href=\"https://www.linkedin.com\"><img src={{ content.field_red_linkedin.0 }} alt='linkedin_logo' id=\"l_net_logo\" class=\"img-fluid net_logo\"></a>
        </div>
        <div class=\"col-sm\">
            <a href=\"https://twitter.com\"><img src={{ content.field_red_twitter.0 }} alt='twitter_logo' id=\"t_net_logo\" class=\"img-fluid net_logo\"></a>  
        </div>
    </div>

<div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-12 footer_copyright\">
    <span>{{ content.field_copyright.0 }}</span>
</div>

<div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-12 developer_brand\">
    <span>{{ content.field_descripcion_desarrollo.0 }}</span>
</div>
</div>


", "themes/rigori/templates/node--view--vista-footer.html.twig", "/var/www/Abogados/AbogadosDev/web/themes/rigori/templates/node--view--vista-footer.html.twig");
    }
}
