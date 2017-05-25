<?php

/* D:\xampp\htdocs\intranet_redes/themes/rainlab-vanilla/partials/menus/menu_lateral.htm */
class __TwigTemplate_51b0ac06f15b3e815252ade3c596dc92f6fa15bf3c9233218d0d0c6415c718fd extends Twig_Template
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
        echo "<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\" style=\"font-size:12px !important\">
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
      <h4 class=\"panel-title\">
        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
          Guia del cliente
        </a>
      </h4>
    </div>
    <div id=\"collapseOne\" class=\"panel-collapse collapse \" role=\"tabpanel\" aria-labelledby=\"headingOne\">
      <div class=\"panel-body\">
        \t<ul style=\"padding-left: 12px !important;\">
\t\t\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("guias/guias");
        echo "\">Consultar Guias</a></li>
\t\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("guias/guia_cliente");
        echo "\">Crear Guia Cliente</a></li>
\t\t\t</ul>
      </div>
    </div>
  </div>
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
      <h4 class=\"panel-title\">
        <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
          Incapacidades
        </a>
      </h4>
    </div>
    <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
      <div class=\"panel-body\">
        \t<ul style=\"padding-left: 12px !important;\">\t\t\t
\t\t\t\t<li><a href=\"";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("incapacidades/consultar_incapacidades");
        echo "\">Consultar Incapacidad</a></li>
\t\t\t\t<li><a href=\"";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("incapacidades/crear_incapacidad");
        echo "\">Registrar Incapacidad</a></li>
\t\t\t\t<li><a href=\"";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("parametros/listas_dx");
        echo "\">Consultar diagnósticos</a></li>
\t\t\t\t<li><a href=\"";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("parametros/crear_dx");
        echo "\">Crear diagnóstico</a></li>
\t\t\t</ul>
      </div>
    </div>
  </div>
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\" role=\"tab\" id=\"headingThree\">
      <h4 class=\"panel-title\">
        <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
          \tGestión de usuarios
        </a>
      </h4>
    </div>
    <div id=\"collapseThree\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
      <div class=\"panel-body\">
        \t<ul style=\"padding-left: 12px !important;\">
\t\t\t\t<li><a href=\"";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("colaboradores/listas_colaboradores");
        echo "\">Consultar usuario</a></li>\t\t
\t\t\t\t<li><a href=\"";
        // line 50
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("colaboradores/crear_colaborador");
        echo "\">Crear usuario</a></li>\t
\t\t\t</ul>
      </div>
    </div>
  </div>
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\" role=\"tab\" id=\"headingFour\">
      <h4 class=\"panel-title\">
        <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
          \tHelp_desk
        </a>
      </h4>
    </div>
    <div id=\"collapseFour\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
      <div class=\"panel-body\">
        \t<ul style=\"padding-left: 12px !important;\">
            ";
        // line 66
        if (call_user_func_array($this->env->getFunction('can')->getCallable(), array("helpdesk"))) {
            // line 67
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("sistemas/control");
            echo "\">Abiertas</a></li> 
              <li><a href=\"";
            // line 68
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("sistemas/pendiente");
            echo "\">Pendientes</a></li> 
              <li><a href=\"";
            // line 69
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("sistemas/curso");
            echo "\">En curso</a></li> 
              <li><a href=\"";
            // line 70
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("sistemas/cerrado");
            echo "\">Cerrados</a></li> 
              <li><a href=\"";
            // line 71
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("sistemas/resuelto");
            echo "\">Resueltos</a></li> 
            ";
        }
        // line 73
        echo "    \t\t\t\t<li><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("sistemas/solicitud");
        echo "\">Crear caso</a></li>\t        
\t\t\t</ul>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\intranet_redes/themes/rainlab-vanilla/partials/menus/menu_lateral.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 73,  129 => 71,  125 => 70,  121 => 69,  117 => 68,  112 => 67,  110 => 66,  91 => 50,  87 => 49,  68 => 33,  64 => 32,  60 => 31,  56 => 30,  37 => 14,  33 => 13,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\" style=\"font-size:12px !important\">
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
      <h4 class=\"panel-title\">
        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
          Guia del cliente
        </a>
      </h4>
    </div>
    <div id=\"collapseOne\" class=\"panel-collapse collapse \" role=\"tabpanel\" aria-labelledby=\"headingOne\">
      <div class=\"panel-body\">
        \t<ul style=\"padding-left: 12px !important;\">
\t\t\t\t<li><a href=\"{{ 'guias/guias'|page }}\">Consultar Guias</a></li>
\t\t\t\t<li><a href=\"{{ 'guias/guia_cliente'|page }}\">Crear Guia Cliente</a></li>
\t\t\t</ul>
      </div>
    </div>
  </div>
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
      <h4 class=\"panel-title\">
        <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
          Incapacidades
        </a>
      </h4>
    </div>
    <div id=\"collapseTwo\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
      <div class=\"panel-body\">
        \t<ul style=\"padding-left: 12px !important;\">\t\t\t
\t\t\t\t<li><a href=\"{{ 'incapacidades/consultar_incapacidades'|page }}\">Consultar Incapacidad</a></li>
\t\t\t\t<li><a href=\"{{ 'incapacidades/crear_incapacidad'|page }}\">Registrar Incapacidad</a></li>
\t\t\t\t<li><a href=\"{{ 'parametros/listas_dx'|page }}\">Consultar diagnósticos</a></li>
\t\t\t\t<li><a href=\"{{ 'parametros/crear_dx'|page }}\">Crear diagnóstico</a></li>
\t\t\t</ul>
      </div>
    </div>
  </div>
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\" role=\"tab\" id=\"headingThree\">
      <h4 class=\"panel-title\">
        <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
          \tGestión de usuarios
        </a>
      </h4>
    </div>
    <div id=\"collapseThree\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
      <div class=\"panel-body\">
        \t<ul style=\"padding-left: 12px !important;\">
\t\t\t\t<li><a href=\"{{ 'colaboradores/listas_colaboradores'|page }}\">Consultar usuario</a></li>\t\t
\t\t\t\t<li><a href=\"{{ 'colaboradores/crear_colaborador'|page }}\">Crear usuario</a></li>\t
\t\t\t</ul>
      </div>
    </div>
  </div>
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\" role=\"tab\" id=\"headingFour\">
      <h4 class=\"panel-title\">
        <a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
          \tHelp_desk
        </a>
      </h4>
    </div>
    <div id=\"collapseFour\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
      <div class=\"panel-body\">
        \t<ul style=\"padding-left: 12px !important;\">
            {% if can('helpdesk') %}
              <li><a href=\"{{ 'sistemas/control'|page }}\">Abiertas</a></li> 
              <li><a href=\"{{ 'sistemas/pendiente'|page }}\">Pendientes</a></li> 
              <li><a href=\"{{ 'sistemas/curso'|page }}\">En curso</a></li> 
              <li><a href=\"{{ 'sistemas/cerrado'|page }}\">Cerrados</a></li> 
              <li><a href=\"{{ 'sistemas/resuelto'|page }}\">Resueltos</a></li> 
            {% endif %}
    \t\t\t\t<li><a href=\"{{ 'sistemas/solicitud'|page }}\">Crear caso</a></li>\t        
\t\t\t</ul>
      </div>
    </div>
  </div>
</div>", "D:\\xampp\\htdocs\\intranet_redes/themes/rainlab-vanilla/partials/menus/menu_lateral.htm", "");
    }
}
