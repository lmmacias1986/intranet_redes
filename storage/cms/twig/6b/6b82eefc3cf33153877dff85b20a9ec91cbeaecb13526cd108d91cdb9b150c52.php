<?php

/* D:\xampp\htdocs\intranet_redes/themes/rainlab-vanilla/partials/menu_casos.htm */
class __TwigTemplate_8773c83e3d8ef4f0ea31f5cda3de5986e1de9450329f78fb114af202d2e183b9 extends Twig_Template
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
        echo "<div class=\"container\">
  <h4>Administración de solicitudes</h4>  
  <ul class=\"nav nav-tabs\">
    <li ";
        // line 4
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "url", array()) == "/control")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"control\">Nuevos</a></li>
    <li ";
        // line 5
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "url", array()) == "/pendiente")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"pendiente\">Pendientes</a></li>
    <li ";
        // line 6
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "url", array()) == "/curso")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"curso\">En Curso</a></li>
    <li ";
        // line 7
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "url", array()) == "/cerrado")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"cerrado\">Cerrados</a></li>
    <li ";
        // line 8
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "url", array()) == "/resuelto")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"resuelto\">Resueltos</a></li>
  </ul>  
</div>
<hr>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\intranet_redes/themes/rainlab-vanilla/partials/menu_casos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  42 => 7,  36 => 6,  30 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
  <h4>Administración de solicitudes</h4>  
  <ul class=\"nav nav-tabs\">
    <li {% if this.page.url == \"/control\" %} class=\"active\" {% endif %}><a href=\"control\">Nuevos</a></li>
    <li {% if this.page.url == \"/pendiente\" %} class=\"active\" {% endif %}><a href=\"pendiente\">Pendientes</a></li>
    <li {% if this.page.url == \"/curso\" %} class=\"active\" {% endif %}><a href=\"curso\">En Curso</a></li>
    <li {% if this.page.url == \"/cerrado\" %} class=\"active\" {% endif %}><a href=\"cerrado\">Cerrados</a></li>
    <li {% if this.page.url == \"/resuelto\" %} class=\"active\" {% endif %}><a href=\"resuelto\">Resueltos</a></li>
  </ul>  
</div>
<hr>", "D:\\xampp\\htdocs\\intranet_redes/themes/rainlab-vanilla/partials/menu_casos.htm", "");
    }
}
