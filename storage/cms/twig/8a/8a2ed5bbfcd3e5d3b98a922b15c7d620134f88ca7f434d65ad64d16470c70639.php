<?php

/* E:\xampp\htdocs\redes_humanas/themes/rainlab-vanilla/partials/resultados_update.htm */
class __TwigTemplate_7875bdc2611d8d10191e3e76d50718c4f92db4dffeb4e96452734d19c17a9706 extends Twig_Template
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
        if ((isset($context["mensaje"]) ? $context["mensaje"] : null)) {
            // line 2
            echo "    <p> ";
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : null), "html", null, true);
            echo " </p>
";
        }
        // line 4
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 5
            echo "\t<p> ";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo " </p>
";
        }
        // line 7
        echo "<button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-primary\">Actualizar</button>
";
        // line 8
        if ((isset($context["id_perfiles"]) ? $context["id_perfiles"] : null)) {
            // line 9
            echo "
";
        } else {
            // line 11
            echo "\t<button id=\"perfiles\" name=\"perfiles\" type=\"submit\" data-request=\"onPerfiles\"  class=\"btn btn-success\">Crear Perfiles</button>    
";
        }
        // line 13
        echo "<button id=\"eliminar\" name=\"eliminar\" type=\"submit\" data-request-confirm=\"Esta seguro de eliminar este registro?\" data-request=\"onDelete\" data-request-update=\"resultados_update: '#resultado'\" class=\"btn btn-danger\">Eliminar</button>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\redes_humanas/themes/rainlab-vanilla/partials/resultados_update.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  44 => 11,  40 => 9,  38 => 8,  35 => 7,  29 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\xampp\\htdocs\\redes_humanas/themes/rainlab-vanilla/partials/resultados_update.htm", "");
    }
}
