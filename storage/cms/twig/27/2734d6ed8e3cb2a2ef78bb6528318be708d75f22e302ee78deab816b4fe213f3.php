<?php

/* E:\xampp\htdocs\redes_humanas/themes/rainlab-vanilla/partials/resultado_guias.htm */
class __TwigTemplate_0146383a8f11fc4c9925efcd784d9e65b44dd406d69ea67ede8d1bd6113bf953 extends Twig_Template
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
        echo "<table class=\"table table-hover \">
    <thead> <tr> <th>Nit</th> <th>Empresa</th> <th>Ciudad</th> <th>Telefono</th> <th>Creación</th> <th>Acción</th>  </tr> </thead>
    <tbody>
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["guias"]) ? $context["guias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["guia"]) {
            // line 5
            echo "            <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["guia"], "nit", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["guia"], "empresa", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["guia"], "ciudad", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["guia"], "telefono", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["guia"], "created_at", array()), "d/m/Y"), "html", null, true);
            echo "</td><td><a href=\"guia_detalle/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["guia"], "id", array()), "html", null, true);
            echo "\">Ver</a></td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\redes_humanas/themes/rainlab-vanilla/partials/resultado_guias.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\xampp\\htdocs\\redes_humanas/themes/rainlab-vanilla/partials/resultado_guias.htm", "");
    }
}
