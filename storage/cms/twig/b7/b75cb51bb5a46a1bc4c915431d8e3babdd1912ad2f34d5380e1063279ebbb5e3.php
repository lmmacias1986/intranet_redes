<?php

/* /opt/lampp/htdocs/intranet_redes/themes/bootstrap4/partials/indicadores.htm */
class __TwigTemplate_83a491dbe3064a8c3eba5e9b86555f48810e9c1f327ca88c085290c082e91b07 extends Twig_Template
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
        if ((isset($context["indicadores"]) ? $context["indicadores"] : null)) {
            echo "    
    <div class=\"col-md-row\">
        <div class=\"panel panel-danger\"> 
            <div class=\"panel-heading titulo_indicadores\"> 
                <h3 class=\"panel-title\" style=\"font-size:14px; text-align:center\">Casos Help Desk</h3>
            </div> 
            <div class=\"panel-body cuerpo_indicadores\">
                ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["indicadores"]) ? $context["indicadores"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["indicador"]) {
                // line 9
                echo "                    <a href =\"/intranet_redes/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "link", array()), "html", null, true);
                echo "\">
                        <div class=\"col-md-6 col-sm-3 col-xs-6 div_indicadores\"  style=\"background-color:";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "color", array()), "html", null, true);
                echo ";     padding-left: 0px !important;padding-right: 0px !important;\">
                            ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "estado", array()), "html", null, true);
                echo "
                            <h3 style=\"margin:0px !important\"><p>";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["indicador"], "contador", array()), "html", null, true);
                echo "</p></h3>
                        </div>
                    </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['indicador'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            </div>
        </div>    
    </div>    
";
        }
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/intranet_redes/themes/bootstrap4/partials/indicadores.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  46 => 12,  42 => 11,  38 => 10,  33 => 9,  29 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if indicadores %}    
    <div class=\"col-md-row\">
        <div class=\"panel panel-danger\"> 
            <div class=\"panel-heading titulo_indicadores\"> 
                <h3 class=\"panel-title\" style=\"font-size:14px; text-align:center\">Casos Help Desk</h3>
            </div> 
            <div class=\"panel-body cuerpo_indicadores\">
                {% for indicador in indicadores %}
                    <a href =\"/intranet_redes/{{ indicador.link }}\">
                        <div class=\"col-md-6 col-sm-3 col-xs-6 div_indicadores\"  style=\"background-color:{{ indicador.color }};     padding-left: 0px !important;padding-right: 0px !important;\">
                            {{ indicador.estado }}
                            <h3 style=\"margin:0px !important\"><p>{{ indicador.contador }}</p></h3>
                        </div>
                    </a>
                {% endfor %}
            </div>
        </div>    
    </div>    
{% endif %}", "/opt/lampp/htdocs/intranet_redes/themes/bootstrap4/partials/indicadores.htm", "");
    }
}
