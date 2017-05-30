<?php

/* /opt/lampp/htdocs/intranet_redes/themes/rainlab-vanilla/pages/sistemas/control.htm */
class __TwigTemplate_6cdad02955823ba8d30bb258e7ed6ea8e85e3b699b405008ee34c9e10ee5b6f7 extends Twig_Template
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
        if (call_user_func_array($this->env->getFunction('can')->getCallable(), array("helpdesk"))) {
            // line 2
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("menu_casos"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 3
            echo "    ";
            if (((isset($context["cont_nuevas"]) ? $context["cont_nuevas"] : null) > 0)) {
                // line 4
                echo "        <div class=\"panel panel-primary\"> 
            <div class=\"panel-heading\"> 
                <h3 class=\"panel-title\">Solicitudes Nuevas (Estado: Abierto)</h3>
            </div> 
            <div class=\"panel-body\">
                <table class=\"table table-hover \">
                    <thead><tr><th>creación</th><th>Asunto</th><th>Prioridad</th><th>Usuario</th><th>Acción</th></tr></thead>
                    <tbody>
                        ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["nuevas"]) ? $context["nuevas"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["nueva"]) {
                    // line 13
                    echo "                            <tr><td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["nueva"], "creacion", array()), "html", null, true);
                    echo "</td><td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["nueva"], "asunto", array()), "html", null, true);
                    echo "</td><td> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["nueva"], "prioridad", array()), "html", null, true);
                    echo "</td><td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["nueva"], "reportado_por", array()), "html", null, true);
                    echo "</td><td><a href=\"consultar_solicitud/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["nueva"], "id", array()), "html", null, true);
                    echo "\">Ver</a></td></tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nueva'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "                    </tbody>
                </table>
                ";
                // line 17
                echo $this->getAttribute((isset($context["nuevas"]) ? $context["nuevas"] : null), "render", array());
                echo "
            </div>
        </div>
    ";
            } else {
                // line 21
                echo "        <label>No hay solicitudes nuevas.</label>
    ";
            }
            // line 22
            echo "    
";
        }
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/intranet_redes/themes/rainlab-vanilla/pages/sistemas/control.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  70 => 21,  63 => 17,  59 => 15,  42 => 13,  38 => 12,  28 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if can('helpdesk') %}
{% partial 'menu_casos' %}
    {% if cont_nuevas > 0 %}
        <div class=\"panel panel-primary\"> 
            <div class=\"panel-heading\"> 
                <h3 class=\"panel-title\">Solicitudes Nuevas (Estado: Abierto)</h3>
            </div> 
            <div class=\"panel-body\">
                <table class=\"table table-hover \">
                    <thead><tr><th>creación</th><th>Asunto</th><th>Prioridad</th><th>Usuario</th><th>Acción</th></tr></thead>
                    <tbody>
                        {% for nueva in nuevas %}
                            <tr><td>{{ nueva.creacion }}</td><td>{{ nueva.asunto }}</td><td> {{ nueva.prioridad }}</td><td>{{ nueva.reportado_por }}</td><td><a href=\"consultar_solicitud/{{ nueva.id }}\">Ver</a></td></tr>
                        {% endfor %}
                    </tbody>
                </table>
                {{ nuevas.render|raw }}
            </div>
        </div>
    {%else%}
        <label>No hay solicitudes nuevas.</label>
    {% endif %}    
{% endif %}", "/opt/lampp/htdocs/intranet_redes/themes/rainlab-vanilla/pages/sistemas/control.htm", "");
    }
}
