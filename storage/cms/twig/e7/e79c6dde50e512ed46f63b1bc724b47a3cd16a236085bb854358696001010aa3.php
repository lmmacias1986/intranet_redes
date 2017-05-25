<?php

/* E:\xampp\htdocs\redes_humanas/themes/rainlab-vanilla/pages/guias/guias.htm */
class __TwigTemplate_0fa31b67ef9ab4c9a9b35af24d521abed825c68d59d52b38211b371a8163b7ae extends Twig_Template
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
        if (call_user_func_array($this->env->getFunction('can')->getCallable(), array("guia_cliente"))) {
            // line 2
            echo "\t<div class=\"panel panel-primary\"> 
\t    <div class=\"panel-heading\"> 
\t        <h3 class=\"panel-title\">CONSULTA DE GUIAS</h3>
\t    </div> 
\t    <div class=\"panel-body\">
\t    \t<div class=\"row\">
\t    \t\t<form data-request=\"onFind\" data-request-update=\"resultado_guias: '#resultado'\">
\t\t    \t\t<div class=\"col-md-3\">
\t\t\t    \t\t<input type=\"text\" name=\"buscador\" id=\"buscador\" placeholder=\"Buscar por NIT\" class=\"form-control\"/>
\t\t\t    \t</div>\t\t
\t\t\t    \t<div class=\"col-md-4\">
\t\t\t    \t\t<input type=\"text\" name=\"nombre_buscar\" id=\"nombre_buscar\" placeholder=\"Buscar por nombre de empresa\" class=\"form-control\"/>
\t\t\t    \t</div>\t\t
\t\t\t    \t<div class=\"col-md-2\">
\t\t\t    \t\t<input type=\"submit\" name=\"buscar_btn\" id=\"buscar_btn\" class=\"btn btn-primary\"  value =\"Buscar\"/>
\t\t\t    \t</div>\t\t
\t\t\t    </form>
\t    \t</div>
\t    \t<hr>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\" id=\"resultado\">
\t\t\t\t\t";
            // line 23
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("resultado_guias"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 24
            echo "\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t</div>
\t</div>

\t";
            // line 29
            echo $this->getAttribute((isset($context["guias"]) ? $context["guias"] : null), "render", array());
            echo "
";
        } else {
            // line 31
            echo "\t";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("acceso"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        }
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\redes_humanas/themes/rainlab-vanilla/pages/guias/guias.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 31,  55 => 29,  48 => 24,  44 => 23,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if can('guia_cliente') %}
\t<div class=\"panel panel-primary\"> 
\t    <div class=\"panel-heading\"> 
\t        <h3 class=\"panel-title\">CONSULTA DE GUIAS</h3>
\t    </div> 
\t    <div class=\"panel-body\">
\t    \t<div class=\"row\">
\t    \t\t<form data-request=\"onFind\" data-request-update=\"resultado_guias: '#resultado'\">
\t\t    \t\t<div class=\"col-md-3\">
\t\t\t    \t\t<input type=\"text\" name=\"buscador\" id=\"buscador\" placeholder=\"Buscar por NIT\" class=\"form-control\"/>
\t\t\t    \t</div>\t\t
\t\t\t    \t<div class=\"col-md-4\">
\t\t\t    \t\t<input type=\"text\" name=\"nombre_buscar\" id=\"nombre_buscar\" placeholder=\"Buscar por nombre de empresa\" class=\"form-control\"/>
\t\t\t    \t</div>\t\t
\t\t\t    \t<div class=\"col-md-2\">
\t\t\t    \t\t<input type=\"submit\" name=\"buscar_btn\" id=\"buscar_btn\" class=\"btn btn-primary\"  value =\"Buscar\"/>
\t\t\t    \t</div>\t\t
\t\t\t    </form>
\t    \t</div>
\t    \t<hr>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\" id=\"resultado\">
\t\t\t\t\t{% partial 'resultado_guias' %}
\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t</div>
\t</div>

\t{{ guias.render|raw }}
{% else %}
\t{% partial 'acceso' %}
{% endif %}", "E:\\xampp\\htdocs\\redes_humanas/themes/rainlab-vanilla/pages/guias/guias.htm", "");
    }
}
