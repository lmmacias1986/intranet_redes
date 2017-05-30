<?php

/* /opt/lampp/htdocs/intranet_redes/themes/rainlab-vanilla/pages/notificaciones/notificaciones.htm */
class __TwigTemplate_629531636f0499a0092a3a92981061daa9beb692607209737f281f1fdccb10a7 extends Twig_Template
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
        if (((isset($context["total"]) ? $context["total"] : null) > 0)) {
            echo "    
    ";
            // line 2
            if ((isset($context["detalle"]) ? $context["detalle"] : null)) {
                // line 3
                echo "\t<div class=\"panel panel-info\">
\t\t<div class=\"panel-heading\">";
                // line 4
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detalle"]) ? $context["detalle"] : null), "titulo", array()), "html", null, true);
                echo "</div>
\t  \t<div class=\"panel-body\">
\t  \t\t<p><b>Asunto de la solicitud: </b>";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detalle"]) ? $context["detalle"] : null), "asunto", array()), "html", null, true);
                echo "</p>\t  \t\t
\t  \t\t<p><b>descripcion de la solicitud: </b>";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detalle"]) ? $context["detalle"] : null), "descripcion", array()), "html", null, true);
                echo "</p>
\t\t\t<p><b>Notificación enviada por: </b>";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detalle"]) ? $context["detalle"] : null), "notificado_por", array()), "html", null, true);
                echo "</p>
\t\t\t<p><b>Actualizado: </b>";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detalle"]) ? $context["detalle"] : null), "updated_at", array()), "html", null, true);
                echo "</p>
\t\t\t<p><a href=\"../consultar_solicitud/";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detalle"]) ? $context["detalle"] : null), "id_solicitud", array()), "html", null, true);
                echo "\" class=\"btn btn-info\">Ver solicitud</a></p>
\t  \t</div>
\t</div>
\t";
            }
            // line 14
            echo "
\t<div class=\"panel panel-danger\">
\t\t<div class=\"panel-heading\">Otras Notificaciones ( Ult 20 )</div>
\t\t<div class=\"panel-body\">
\t\t\t<div id=\"div_notifications\" class=\"col-md-12\">
\t\t        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 20
                echo "\t\t            <div class=\"col-md-12\">                
\t\t                <div class=\"row div_notificacion\">
\t\t                    ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "titulo", array()), "html", null, true);
                echo "                
\t\t                    <br>
\t\t                    <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "id", array()), "html", null, true);
                echo "\">Ver</a>
\t\t                </div>    
\t\t            </div>
\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t    </div>    
\t  \t</div>
\t</div>
    
";
        }
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/intranet_redes/themes/rainlab-vanilla/pages/notificaciones/notificaciones.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 28,  76 => 24,  71 => 22,  67 => 20,  63 => 19,  56 => 14,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  28 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if total > 0 %}    
    {% if detalle %}
\t<div class=\"panel panel-info\">
\t\t<div class=\"panel-heading\">{{ detalle.titulo }}</div>
\t  \t<div class=\"panel-body\">
\t  \t\t<p><b>Asunto de la solicitud: </b>{{ detalle.asunto }}</p>\t  \t\t
\t  \t\t<p><b>descripcion de la solicitud: </b>{{ detalle.descripcion }}</p>
\t\t\t<p><b>Notificación enviada por: </b>{{ detalle.notificado_por }}</p>
\t\t\t<p><b>Actualizado: </b>{{ detalle.updated_at }}</p>
\t\t\t<p><a href=\"../consultar_solicitud/{{ detalle.id_solicitud }}\" class=\"btn btn-info\">Ver solicitud</a></p>
\t  \t</div>
\t</div>
\t{% endif %}

\t<div class=\"panel panel-danger\">
\t\t<div class=\"panel-heading\">Otras Notificaciones ( Ult 20 )</div>
\t\t<div class=\"panel-body\">
\t\t\t<div id=\"div_notifications\" class=\"col-md-12\">
\t\t        {% for notification in notifications %}
\t\t            <div class=\"col-md-12\">                
\t\t                <div class=\"row div_notificacion\">
\t\t                    {{ notification.titulo }}                
\t\t                    <br>
\t\t                    <a href=\"{{ notification.id }}\">Ver</a>
\t\t                </div>    
\t\t            </div>
\t\t        {% endfor %}
\t\t    </div>    
\t  \t</div>
\t</div>
    
{% endif %}", "/opt/lampp/htdocs/intranet_redes/themes/rainlab-vanilla/pages/notificaciones/notificaciones.htm", "");
    }
}
