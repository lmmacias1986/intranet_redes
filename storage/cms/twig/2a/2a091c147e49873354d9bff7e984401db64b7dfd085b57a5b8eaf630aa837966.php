<?php

/* D:\xampp\htdocs\intranet_redes/themes/rainlab-vanilla/partials/notification/notification.htm */
class __TwigTemplate_9fcd58de362c215722bfa49a997508a8a0d7ed583b9bd042067df4e3eaff02ff extends Twig_Template
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
        if ((($context["total"] ?? null) > 0)) {
            echo "    
    <button type=\"button\" class=\"btn btn-danger btn_notificacion\" data-toggle=\"collapse\" data-target=\"#div_notifications\"><span class=\"span_notificaciones\">";
            // line 2
            echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
            echo "</span> - Notificaciones</button>
    <div id=\"div_notifications\" class=\"collapse\">
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notifications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 5
                echo "            <div class=\"col-md-12\">
                <div style=\"display:none\">
                    <input type=\"text\" name=\"id\" id=\"id\" value=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "id", array()), "html", null, true);
                echo "\"/>
                </div>
                <div class=\"row div_notificacion\">
                    ";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "titulo", array()), "html", null, true);
                echo "                
                    <br>
                    <a href=\"/intranet_redes/notificaciones/";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "id", array()), "html", null, true);
                echo "\">Ver</a>
                </div>    
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </div>    
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\intranet_redes/themes/rainlab-vanilla/partials/notification/notification.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  47 => 12,  42 => 10,  36 => 7,  32 => 5,  28 => 4,  23 => 2,  19 => 1,);
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
    <button type=\"button\" class=\"btn btn-danger btn_notificacion\" data-toggle=\"collapse\" data-target=\"#div_notifications\"><span class=\"span_notificaciones\">{{ total }}</span> - Notificaciones</button>
    <div id=\"div_notifications\" class=\"collapse\">
        {% for notification in notifications %}
            <div class=\"col-md-12\">
                <div style=\"display:none\">
                    <input type=\"text\" name=\"id\" id=\"id\" value=\"{{ notification.id }}\"/>
                </div>
                <div class=\"row div_notificacion\">
                    {{ notification.titulo }}                
                    <br>
                    <a href=\"/intranet_redes/notificaciones/{{ notification.id }}\">Ver</a>
                </div>    
            </div>
        {% endfor %}
    </div>    
{% endif %}", "D:\\xampp\\htdocs\\intranet_redes/themes/rainlab-vanilla/partials/notification/notification.htm", "");
    }
}
