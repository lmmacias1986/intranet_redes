<?php

/* E:\xampp\htdocs\redes_humanas/themes/rainlab-vanilla/pages/incapacidades/consultar_incapacidades.htm */
class __TwigTemplate_6768c1d877b3693d0d1af8e515ce8c0eea0cf54cb28c867b949df1fc8e6ebee7 extends Twig_Template
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
        if (call_user_func_array($this->env->getFunction('can')->getCallable(), array("incapacidades"))) {
            // line 2
            echo "\t<div class=\"row\">
\t\t<div class=\"panel panel-primary\"> 
\t\t\t<div class=\"panel-heading\"> 
\t\t\t\t<h3 class=\"panel-title\">CONSULTA DE INCAPACIDADES</h3>
\t\t\t</div> 
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form data-request=\"onConsulta\" data-request-update=\"incapacidades: '#resultado'\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<label for=\"cedula\">Cédula</label>
\t\t\t\t\t\t<input type=\"text\" id=\"cedula\" name=\"cedula\" class=\"form-control\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<input type=\"submit\" id=\"consultar\" name=\"consultar\" value=\"Consultar\" class=\" btn btn-primary\" style=\"margin-top:25px\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"resultado\">
\t\t\t\t\t\t";
            // line 17
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("incapacidades"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 18
            echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 19
            echo $this->getAttribute((isset($context["incapacidades"]) ? $context["incapacidades"] : null), "render", array());
            echo "
\t\t\t\t</form>
\t\t\t</div> 
\t\t</div>

\t\t<!--div class=\"alert alert-info\" role=\"alert\"><p>CONSULTA DE INCAPACIDADES</p></div-->
\t\t
\t</div>
\t<hr>
\t<div class=\"row\">
\t\t<div class=\"panel panel-danger\"> 
\t\t\t<div class=\"panel-heading\"> 
\t\t\t\t<h3 class=\"panel-title\">INCAPACIDADES EN ALERTA</h3>
\t\t\t</div> 
\t\t\t<div class=\"panel-body\">
\t\t\t\t<!--div class=\"alert alert-danger\" role=\"alert\"><p>INCAPACIDADES EN ALERTA</p></div-->\t
\t\t\t\t<table class=\"table table-hover \">
\t\t\t        <thead> <tr> <th>Tipo</th> <th>Fecha inicio</th> <th>Fecha Final</th><th>Días Acumulados</th><th>EPS</th> <th>Diag.</th> <th>Acción</th>  </tr> </thead>
\t\t\t        <tbody>
\t\t\t            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alertas"]) ? $context["alertas"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["alerta"]) {
                // line 39
                echo "\t\t\t                <tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["alerta"], "tipo_incapacidad", array()), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["alerta"], "fecha_inicial", array()), "html", null, true);
                echo "</td><td> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["alerta"], "fecha_final", array()), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["alerta"], "dias_acumulados", array()), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["alerta"], "eps", array()), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["alerta"], "cod_dx", array())), "html", null, true);
                echo "</td><td><a href=\"editar_incapacidad/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["alerta"], "id", array()), "html", null, true);
                echo "\">Ver</a></td></tr>
\t\t\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alerta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t        </tbody>
\t\t\t    </table>
\t\t\t\t";
            // line 43
            echo $this->getAttribute((isset($context["alertas"]) ? $context["alertas"] : null), "render", array());
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        } else {
            // line 48
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("acceso"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        }
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\redes_humanas/themes/rainlab-vanilla/pages/incapacidades/consultar_incapacidades.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 48,  96 => 43,  92 => 41,  71 => 39,  67 => 38,  45 => 19,  42 => 18,  38 => 17,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%if can('incapacidades') %}
\t<div class=\"row\">
\t\t<div class=\"panel panel-primary\"> 
\t\t\t<div class=\"panel-heading\"> 
\t\t\t\t<h3 class=\"panel-title\">CONSULTA DE INCAPACIDADES</h3>
\t\t\t</div> 
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form data-request=\"onConsulta\" data-request-update=\"incapacidades: '#resultado'\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<label for=\"cedula\">Cédula</label>
\t\t\t\t\t\t<input type=\"text\" id=\"cedula\" name=\"cedula\" class=\"form-control\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<input type=\"submit\" id=\"consultar\" name=\"consultar\" value=\"Consultar\" class=\" btn btn-primary\" style=\"margin-top:25px\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"resultado\">
\t\t\t\t\t\t{% partial 'incapacidades' %}
\t\t\t\t\t</div>
\t\t\t\t\t{{ incapacidades.render|raw }}
\t\t\t\t</form>
\t\t\t</div> 
\t\t</div>

\t\t<!--div class=\"alert alert-info\" role=\"alert\"><p>CONSULTA DE INCAPACIDADES</p></div-->
\t\t
\t</div>
\t<hr>
\t<div class=\"row\">
\t\t<div class=\"panel panel-danger\"> 
\t\t\t<div class=\"panel-heading\"> 
\t\t\t\t<h3 class=\"panel-title\">INCAPACIDADES EN ALERTA</h3>
\t\t\t</div> 
\t\t\t<div class=\"panel-body\">
\t\t\t\t<!--div class=\"alert alert-danger\" role=\"alert\"><p>INCAPACIDADES EN ALERTA</p></div-->\t
\t\t\t\t<table class=\"table table-hover \">
\t\t\t        <thead> <tr> <th>Tipo</th> <th>Fecha inicio</th> <th>Fecha Final</th><th>Días Acumulados</th><th>EPS</th> <th>Diag.</th> <th>Acción</th>  </tr> </thead>
\t\t\t        <tbody>
\t\t\t            {% for alerta in alertas %}
\t\t\t                <tr><td>{{ alerta.tipo_incapacidad }}</td><td>{{ alerta.fecha_inicial }}</td><td> {{ alerta.fecha_final }}</td><td>{{ alerta.dias_acumulados }}</td><td>{{ alerta.eps }}</td><td>{{ alerta.cod_dx|capitalize }}</td><td><a href=\"editar_incapacidad/{{ alerta.id }}\">Ver</a></td></tr>
\t\t\t            {% endfor %}
\t\t\t        </tbody>
\t\t\t    </table>
\t\t\t\t{{ alertas.render|raw }}
\t\t\t</div>
\t\t</div>
\t</div>
{% else %}
    {% partial 'acceso' %}
{% endif %}", "E:\\xampp\\htdocs\\redes_humanas/themes/rainlab-vanilla/pages/incapacidades/consultar_incapacidades.htm", "");
    }
}
