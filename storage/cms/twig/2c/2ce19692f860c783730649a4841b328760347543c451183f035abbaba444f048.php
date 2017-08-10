<?php

/* /opt/lampp/htdocs/intranet_redes/themes/bootstrap4/pages/home.htm */
class __TwigTemplate_6e3fc1407295e8498c3caa62a14db5e701446b57531ff612080fd3481b2cef34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row contenedor_noticias\">
\t<div class=\"col-md-12 titulo_home\">
\t\t<p>ACTUALIDAD - REDES HUMANAS </p>
\t</div>
    <div class=\"col-md-12\">
        ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("blog/posts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "    </div>
    <div class=\"col-md-12\">
        ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("blog/categories"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/intranet_redes/themes/bootstrap4/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  34 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row contenedor_noticias\">
\t<div class=\"col-md-12 titulo_home\">
\t\t<p>ACTUALIDAD - REDES HUMANAS </p>
\t</div>
    <div class=\"col-md-12\">
        {% partial 'blog/posts' %}
    </div>
    <div class=\"col-md-12\">
        {% partial 'blog/categories' %}
    </div>
</div>", "/opt/lampp/htdocs/intranet_redes/themes/bootstrap4/pages/home.htm", "");
    }
}
