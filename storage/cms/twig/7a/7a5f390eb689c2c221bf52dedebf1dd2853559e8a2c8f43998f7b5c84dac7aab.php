<?php

/* /opt/lampp/htdocs/intranet_redes/themes/bootstrap4/partials/menus/menu_lateral.htm */
class __TwigTemplate_023528d66a8167de3709bbfc54f3716552c2d03552f5c982381cb73c25de0e98 extends Twig_Template
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
        echo "<ul class=\"nav navbar-nav side-nav\">
  ";
        // line 2
        if (call_user_func_array($this->env->getFunction('can')->getCallable(), array("menu_guia"))) {
            // line 3
            echo "  <li>
    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#menu_guia\"><i class=\"fa fa-fw fa-edit\"></i> Guia del cliente<i class=\"fa fa-fw fa-caret-down\"></i></a>
      <ul id=\"menu_guia\" class=\"collapse\">
          <li>
              <a href=\"";
            // line 7
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("guias/guias");
            echo "\">Consultar Guias</a>
          </li>
          ";
            // line 9
            if (call_user_func_array($this->env->getFunction('can')->getCallable(), array("admin_guia"))) {
                // line 10
                echo "          <li>
            <a href=\"";
                // line 11
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("guias/guia_cliente");
                echo "\">Crear Guia Cliente</a>
          </li>
          ";
            }
            // line 14
            echo "      </ul>      
  </li>
   ";
        }
        // line 17
        echo "  ";
        if (call_user_func_array($this->env->getFunction('can')->getCallable(), array("incapacidades"))) {
            // line 18
            echo "  <li>
    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#menu_incapacidad\"><i class=\"fa fa-fw fa-table\"></i> Incapacidades<i class=\"fa fa-fw fa-caret-down\"></i></a>
      <ul id=\"menu_incapacidad\" class=\"collapse\">
          <li><a href=\"";
            // line 21
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("incapacidades/consultar_incapacidades");
            echo "\">Consultar Incapacidad</a></li>
          <li><a href=\"";
            // line 22
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("incapacidades/crear_incapacidad");
            echo "\">Crear Incapacidad</a></li>
          <li><a href=\"";
            // line 23
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("incapacidades/reportes");
            echo "\">Reportes</a></li>
          <li><a href=\"";
            // line 24
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("parametros/listas_dx");
            echo "\">Consultar diagnósticos</a></li>
          <li><a href=\"";
            // line 25
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("parametros/crear_dx");
            echo "\">Crear diagnóstico</a></li>
      </ul>      
  </li>
  ";
        }
        // line 29
        echo "  ";
        if (call_user_func_array($this->env->getFunction('can')->getCallable(), array("incapacidades"))) {
            // line 30
            echo "  <li>
    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#menu_gestion\"><i class=\"fa fa-fw fa-wrench\"></i> Gestión Usuarios<i class=\"fa fa-fw fa-caret-down\"></i></a>
      <ul id=\"menu_gestion\" class=\"collapse\">
        <li><a href=\"";
            // line 33
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("colaboradores/listas_colaboradores");
            echo "\">Consultar usuario</a></li>    
        <li><a href=\"";
            // line 34
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("colaboradores/crear_colaborador");
            echo "\">Crear usuario</a></li> 
      </ul>      
  </li>
  ";
        }
        // line 38
        echo "

  <li>
    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#menu_help\"><i class=\"fa fa-fw fa-desktop\"></i> Help Desk<i class=\"fa fa-fw fa-caret-down\"></i></a>
      <ul id=\"menu_help\" class=\"collapse\">
        ";
        // line 43
        if (call_user_func_array($this->env->getFunction('can')->getCallable(), array("helpdesk"))) {
            // line 44
            echo "          <li><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("sistemas/control");
            echo "\">Abiertas</a></li> 
          <li><a href=\"";
            // line 45
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("sistemas/pendiente");
            echo "\">Pendientes</a></li> 
          <li><a href=\"";
            // line 46
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("sistemas/curso");
            echo "\">En curso</a></li> 
          <li><a href=\"";
            // line 47
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("sistemas/cerrado");
            echo "\">Cerrados</a></li> 
          <li><a href=\"";
            // line 48
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("sistemas/resuelto");
            echo "\">Resueltos</a></li> 
        ";
        }
        // line 50
        echo "        <li><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("sistemas/solicitud");
        echo "\">Crear caso</a></li>   
      </ul>      
  </li>
  <li>
      <a href=\"";
        // line 54
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("directorio/directorio");
        echo "\"><i class=\"fa fa-fw fa-file\"></i> Directorio</a>
  </li>
  ";
        // line 56
        if (call_user_func_array($this->env->getFunction('can')->getCallable(), array("envios"))) {
            // line 57
            echo "  <li>
    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#menu_envios\"><i class=\"fa fa-fw fa-arrows-v\"></i> Envios<i class=\"fa fa-fw fa-caret-down\"></i></a>
      <ul id=\"menu_envios\" class=\"collapse\">
        ";
            // line 60
            if (call_user_func_array($this->env->getFunction('can')->getCallable(), array("admin_envios"))) {
                // line 61
                echo "          <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("envios/envios");
                echo "\">Crear envío</a></li>
          <li><a href=\"";
                // line 62
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("envios/locales");
                echo "\">Consultar envíos</a></li>          
        ";
            }
            // line 64
            echo "      </ul>      
  </li>
  ";
        }
        // line 67
        echo "  ";
        if (call_user_func_array($this->env->getFunction('can')->getCallable(), array("eventos"))) {
            // line 68
            echo "  <li>
    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#menu_eventos\"><i class=\"fa fa-fw fa-calendar\"></i> Eventos<i class=\"fa fa-fw fa-caret-down\"></i></a>
      <ul id=\"menu_eventos\" class=\"collapse\">
        ";
            // line 71
            if (call_user_func_array($this->env->getFunction('can')->getCallable(), array("eventos"))) {
                // line 72
                echo "          <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("calendario/calendario");
                echo "\">Crear evento</a></li>
        ";
            }
            // line 74
            echo "        <li><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("calendario/ver_eventos");
            echo "\">Eventos</a></li>
      </ul>
  </li>
  ";
        }
        // line 78
        echo "
</ul>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/intranet_redes/themes/bootstrap4/partials/menus/menu_lateral.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 78,  185 => 74,  179 => 72,  177 => 71,  172 => 68,  169 => 67,  164 => 64,  159 => 62,  154 => 61,  152 => 60,  147 => 57,  145 => 56,  140 => 54,  132 => 50,  127 => 48,  123 => 47,  119 => 46,  115 => 45,  110 => 44,  108 => 43,  101 => 38,  94 => 34,  90 => 33,  85 => 30,  82 => 29,  75 => 25,  71 => 24,  67 => 23,  63 => 22,  59 => 21,  54 => 18,  51 => 17,  46 => 14,  40 => 11,  37 => 10,  35 => 9,  30 => 7,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav navbar-nav side-nav\">
  {% if can('menu_guia') %}
  <li>
    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#menu_guia\"><i class=\"fa fa-fw fa-edit\"></i> Guia del cliente<i class=\"fa fa-fw fa-caret-down\"></i></a>
      <ul id=\"menu_guia\" class=\"collapse\">
          <li>
              <a href=\"{{ 'guias/guias'|page }}\">Consultar Guias</a>
          </li>
          {% if can('admin_guia') %}
          <li>
            <a href=\"{{ 'guias/guia_cliente'|page }}\">Crear Guia Cliente</a>
          </li>
          {% endif %}
      </ul>      
  </li>
   {% endif %}
  {% if can('incapacidades') %}
  <li>
    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#menu_incapacidad\"><i class=\"fa fa-fw fa-table\"></i> Incapacidades<i class=\"fa fa-fw fa-caret-down\"></i></a>
      <ul id=\"menu_incapacidad\" class=\"collapse\">
          <li><a href=\"{{ 'incapacidades/consultar_incapacidades'|page }}\">Consultar Incapacidad</a></li>
          <li><a href=\"{{ 'incapacidades/crear_incapacidad'|page }}\">Crear Incapacidad</a></li>
          <li><a href=\"{{ 'incapacidades/reportes'|page }}\">Reportes</a></li>
          <li><a href=\"{{ 'parametros/listas_dx'|page }}\">Consultar diagnósticos</a></li>
          <li><a href=\"{{ 'parametros/crear_dx'|page }}\">Crear diagnóstico</a></li>
      </ul>      
  </li>
  {% endif %}
  {% if can('incapacidades') %}
  <li>
    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#menu_gestion\"><i class=\"fa fa-fw fa-wrench\"></i> Gestión Usuarios<i class=\"fa fa-fw fa-caret-down\"></i></a>
      <ul id=\"menu_gestion\" class=\"collapse\">
        <li><a href=\"{{ 'colaboradores/listas_colaboradores'|page }}\">Consultar usuario</a></li>    
        <li><a href=\"{{ 'colaboradores/crear_colaborador'|page }}\">Crear usuario</a></li> 
      </ul>      
  </li>
  {% endif %}


  <li>
    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#menu_help\"><i class=\"fa fa-fw fa-desktop\"></i> Help Desk<i class=\"fa fa-fw fa-caret-down\"></i></a>
      <ul id=\"menu_help\" class=\"collapse\">
        {% if can('helpdesk') %}
          <li><a href=\"{{ 'sistemas/control'|page }}\">Abiertas</a></li> 
          <li><a href=\"{{ 'sistemas/pendiente'|page }}\">Pendientes</a></li> 
          <li><a href=\"{{ 'sistemas/curso'|page }}\">En curso</a></li> 
          <li><a href=\"{{ 'sistemas/cerrado'|page }}\">Cerrados</a></li> 
          <li><a href=\"{{ 'sistemas/resuelto'|page }}\">Resueltos</a></li> 
        {% endif %}
        <li><a href=\"{{ 'sistemas/solicitud'|page }}\">Crear caso</a></li>   
      </ul>      
  </li>
  <li>
      <a href=\"{{ 'directorio/directorio'|page }}\"><i class=\"fa fa-fw fa-file\"></i> Directorio</a>
  </li>
  {% if can('envios') %}
  <li>
    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#menu_envios\"><i class=\"fa fa-fw fa-arrows-v\"></i> Envios<i class=\"fa fa-fw fa-caret-down\"></i></a>
      <ul id=\"menu_envios\" class=\"collapse\">
        {%if can('admin_envios') %}
          <li><a href=\"{{ 'envios/envios'|page }}\">Crear envío</a></li>
          <li><a href=\"{{ 'envios/locales'|page }}\">Consultar envíos</a></li>          
        {% endif %}
      </ul>      
  </li>
  {% endif %}
  {% if can('eventos') %}
  <li>
    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#menu_eventos\"><i class=\"fa fa-fw fa-calendar\"></i> Eventos<i class=\"fa fa-fw fa-caret-down\"></i></a>
      <ul id=\"menu_eventos\" class=\"collapse\">
        {%if can('eventos') %}
          <li><a href=\"{{ 'calendario/calendario'|page }}\">Crear evento</a></li>
        {% endif %}
        <li><a href=\"{{ 'calendario/ver_eventos'|page }}\">Eventos</a></li>
      </ul>
  </li>
  {% endif %}

</ul>", "/opt/lampp/htdocs/intranet_redes/themes/bootstrap4/partials/menus/menu_lateral.htm", "");
    }
}
