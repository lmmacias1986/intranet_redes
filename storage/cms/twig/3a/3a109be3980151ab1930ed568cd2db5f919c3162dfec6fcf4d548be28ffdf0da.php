<?php

/* E:\xampp\htdocs\redes_humanas/themes/rainlab-vanilla/partials/resultados.htm */
class __TwigTemplate_86c90b64da4791a4e7c63a896c3c7154284adad61f20ab53885a53d583f70bbd extends Twig_Template
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
            // line 3
            if (((isset($context["perfiles"]) ? $context["perfiles"] : null) == "si")) {
                // line 4
                echo "    \t<button id=\"perfiles\" name=\"perfiles\" type=\"submit\" data-request=\"onPerfiles\"  class=\"btn btn-primary\">Crear Perfiles</button>
    \t<div style=\"display:none\"><input type=\"text\" name=\"id_guia\" id=\"id_guia\" value=\"";
                // line 5
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\"/></div>
    ";
            }
            // line 7
            echo "    ";
            if (((isset($context["redirect"]) ? $context["redirect"] : null) == "si")) {
                // line 8
                echo "    \t<button id=\"regresar\" name=\"regresar\" type=\"submit\" data-request=\"onRedirect\"  class=\"btn btn-primary\">regresar</button>
    ";
            }
            // line 10
            echo "    ";
            if (((isset($context["profesiograma"]) ? $context["profesiograma"] : null) == "si")) {
                // line 11
                echo "        <button id=\"profesiograma\" name=\"profesiograma\" type=\"submit\" data-request=\"onProfesiograma\"  class=\"btn btn-sucess\">Adjuntar Profesiograma</button>
    ";
            }
            // line 13
            echo "    
";
        } else {
            // line 14
            echo "  
\t";
            // line 15
            if ((isset($context["error"]) ? $context["error"] : null)) {
                // line 16
                echo "\t\t<p> ";
                echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
                echo " </p>
\t";
            }
            // line 18
            echo "    \t<button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-primary\">Guardar</button>
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\redes_humanas/themes/rainlab-vanilla/partials/resultados.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  59 => 16,  57 => 15,  54 => 14,  50 => 13,  46 => 11,  43 => 10,  39 => 8,  36 => 7,  31 => 5,  28 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\xampp\\htdocs\\redes_humanas/themes/rainlab-vanilla/partials/resultados.htm", "");
    }
}