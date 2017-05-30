<?php

/* /opt/lampp/htdocs/intranet_redes/themes/rainlab-vanilla/pages/sistemas/solicitud.htm */
class __TwigTemplate_2a6c4a0a968dd0b3396bce0c4b524fbc4818bc6531916ad36518d6db66281a2a extends Twig_Template
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
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array())) {
            // line 2
            echo "    <div class=\"panel panel-primary\"> 
        <div class=\"panel-heading\"> 
            <h3 class=\"panel-title\">REGISTRO DE SOLICITUDES HELP DESK</h3>
        </div> 
        <div class=\"panel-body\">
            <form data-request=\"onSave\" data-request-update=\"resultados: '#resultado'\">
                <div class=\"row\">            \t\t
                    <div class=\"col-md-6\">
                        <span for=\"asunto\">Asunto:</span>
                        <input type=\"text\" id=\"asunto\" name=\"asunto\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-md-3\">
                        <span for=\"tipificacion\">Tipificación:</span>
                        <select id=\"tipificacion\" name=\"tipificacion\" class=\"form-control\">
                        \t<option value=\"\">--Seleccione--</option>
                        \t<option value=\"Solicitud\">Solicitud</option>
                        \t<option value=\"Problema\">Problema</option>
                        \t<option value=\"Asesoría\">Asesoría</option>
                        \t<option value=\"Consulta\">Consulta</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <span for=\"prioridad\">Prioridad:</span>
                        <select id=\"prioridad\" name=\"prioridad\" class=\"form-control\">
                        \t<option value=\"\">--Seleccione--</option>
                        \t<option value=\"Baja\">Baja</option>
                        \t<option value=\"Media\">Media</option>
                        \t<option value=\"Alta\">Alta</option>
                        \t<option value=\"Urgente\">Urgente</option>
                        </select>
                    </div>
                    <div class=\"col-md-12\">
                    \t<span for=\"descripcion\">Descripción de la solicitud:</span>
                        <textarea id=\"descripcion\" name=\"descripcion\" class=\"form-control\"></textarea>
                    </div>   
                    <div class=\"col-md-12\" style=\"display:none\">
                    \t<input type=\"text\" id=\"reportado_por\" name=\"reportado_por\" class=\"form-control\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
            echo "\"/>
                    </div> 
                </div>   
                <hr>
                <div class=\"row\">
                    <div id=\"resultado\" class=\"col-md-12\">
                        ";
            // line 44
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("resultados"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 45
            echo "                    </div>
                </div>
            </form>
        </div>
    </div>
    <hr>
    
    ";
            // line 52
            if ((isset($context["solicitudes"]) ? $context["solicitudes"] : null)) {
                // line 53
                echo "        <div class=\"panel panel-danger\"> 
            <div class=\"panel-heading\"> 
                <h3 class=\"panel-title\">SOLICITUDES EN PROCESO</h3>
            </div> 
            <div class=\"panel-body\">
                <table class=\"table table-hover \">
                    <thead><tr><th>Actualización</th><th>Creación</th><th>Asunto</th><th>Prioridad</th><th>Estado</th><th>Acción</th></tr></thead>
                    <tbody>
                        ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["solicitudes"]) ? $context["solicitudes"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
                    // line 62
                    echo "                            <tr><td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "actualizacion", array()), "html", null, true);
                    echo "</td><td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "creacion", array()), "html", null, true);
                    echo "</td><td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "asunto", array()), "html", null, true);
                    echo "</td><td> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "prioridad", array()), "html", null, true);
                    echo "</td><td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "estado", array()), "html", null, true);
                    echo "</td><td><a href=\"consultar_solicitud/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "id", array()), "html", null, true);
                    echo "\">Ver</a></td></tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "                    </tbody>
                </table>
                ";
                // line 66
                echo $this->getAttribute((isset($context["solicitudes"]) ? $context["solicitudes"] : null), "render", array());
                echo "
            </div>
        </div>
    ";
            } else {
                // line 70
                echo "        <label>No tiene solicitudes pendientes.</label>
    ";
            }
        } else {
            // line 73
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("acceso"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        }
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/intranet_redes/themes/rainlab-vanilla/pages/sistemas/solicitud.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 73,  127 => 70,  120 => 66,  116 => 64,  97 => 62,  93 => 61,  83 => 53,  81 => 52,  72 => 45,  68 => 44,  59 => 38,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%if user.name %}
    <div class=\"panel panel-primary\"> 
        <div class=\"panel-heading\"> 
            <h3 class=\"panel-title\">REGISTRO DE SOLICITUDES HELP DESK</h3>
        </div> 
        <div class=\"panel-body\">
            <form data-request=\"onSave\" data-request-update=\"resultados: '#resultado'\">
                <div class=\"row\">            \t\t
                    <div class=\"col-md-6\">
                        <span for=\"asunto\">Asunto:</span>
                        <input type=\"text\" id=\"asunto\" name=\"asunto\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-md-3\">
                        <span for=\"tipificacion\">Tipificación:</span>
                        <select id=\"tipificacion\" name=\"tipificacion\" class=\"form-control\">
                        \t<option value=\"\">--Seleccione--</option>
                        \t<option value=\"Solicitud\">Solicitud</option>
                        \t<option value=\"Problema\">Problema</option>
                        \t<option value=\"Asesoría\">Asesoría</option>
                        \t<option value=\"Consulta\">Consulta</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <span for=\"prioridad\">Prioridad:</span>
                        <select id=\"prioridad\" name=\"prioridad\" class=\"form-control\">
                        \t<option value=\"\">--Seleccione--</option>
                        \t<option value=\"Baja\">Baja</option>
                        \t<option value=\"Media\">Media</option>
                        \t<option value=\"Alta\">Alta</option>
                        \t<option value=\"Urgente\">Urgente</option>
                        </select>
                    </div>
                    <div class=\"col-md-12\">
                    \t<span for=\"descripcion\">Descripción de la solicitud:</span>
                        <textarea id=\"descripcion\" name=\"descripcion\" class=\"form-control\"></textarea>
                    </div>   
                    <div class=\"col-md-12\" style=\"display:none\">
                    \t<input type=\"text\" id=\"reportado_por\" name=\"reportado_por\" class=\"form-control\" value=\"{{ user.username }}\"/>
                    </div> 
                </div>   
                <hr>
                <div class=\"row\">
                    <div id=\"resultado\" class=\"col-md-12\">
                        {% partial 'resultados' %}
                    </div>
                </div>
            </form>
        </div>
    </div>
    <hr>
    
    {% if solicitudes %}
        <div class=\"panel panel-danger\"> 
            <div class=\"panel-heading\"> 
                <h3 class=\"panel-title\">SOLICITUDES EN PROCESO</h3>
            </div> 
            <div class=\"panel-body\">
                <table class=\"table table-hover \">
                    <thead><tr><th>Actualización</th><th>Creación</th><th>Asunto</th><th>Prioridad</th><th>Estado</th><th>Acción</th></tr></thead>
                    <tbody>
                        {% for solicitud in solicitudes %}
                            <tr><td>{{ solicitud.actualizacion }}</td><td>{{ solicitud.creacion }}</td><td>{{ solicitud.asunto }}</td><td> {{ solicitud.prioridad }}</td><td>{{ solicitud.estado }}</td><td><a href=\"consultar_solicitud/{{ solicitud.id }}\">Ver</a></td></tr>
                        {% endfor %}
                    </tbody>
                </table>
                {{ solicitudes.render|raw }}
            </div>
        </div>
    {%else%}
        <label>No tiene solicitudes pendientes.</label>
    {% endif %}
{% else %}
    {% partial 'acceso' %}
{% endif %}", "/opt/lampp/htdocs/intranet_redes/themes/rainlab-vanilla/pages/sistemas/solicitud.htm", "");
    }
}
