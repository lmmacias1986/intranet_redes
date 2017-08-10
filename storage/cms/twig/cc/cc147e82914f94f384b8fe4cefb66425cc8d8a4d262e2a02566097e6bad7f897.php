<?php

/* /opt/lampp/htdocs/intranet_redes/themes/bootstrap4/layouts/default.htm */
class __TwigTemplate_4313573fc2d3886848a2c1dd2ee956872666226d4e72dbd3386992ca8131c9f0 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>Redes Humanas - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"Redes Humanas\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <script src=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/jquery.js", 1 => "assets/js/bootstrap.min.js", 2 => "assets/js/app.js", 3 => "assets/vendor/jquery/jquery-3.1.1.min.js", 4 => "assets/vendor/jquery/jquery-ui.js"));
        // line 19
        echo "\"></script>

    ";
        // line 21
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 22
        echo "    ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 23
        echo "
    

    <link href=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/bootstrap.css", 1 => "assets/css/sb-admin.css", 2 => "assets/css/plugins/morris.css", 3 => "assets/font-awesome/css/font-awesome.min.css", 4 => "assets/vendor/jquery/jquery-ui.css"));
        // line 32
        echo "\" rel=\"stylesheet\">

    ";
        // line 34
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 35
        echo "
  </head>
";
        // line 37
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 38
            echo "    ";
            if (call_user_func_array($this->env->getFunction('can')->getCallable(), array("helpdesk"))) {
                echo " 
        <body onLoad='setInterval(\"actualizar_notificaciones(1)\",60000);'>
    ";
            } else {
                // line 41
                echo "        <body onLoad='setInterval(\"actualizar_notificaciones(0)\",60000);'>
    ";
            }
            // line 43
            echo "        <div style=\"display:none\">
            <button
                data-request=\"onStart\"
                data-request-update=\"indicadores: '#div_notifica'\" id=\"btn_update1\">
                Go
            </button>
            <button
                data-request=\"onRun\"
                data-request-update=\"notification: '#div_notifica'\" id=\"btn_update0\">
                Go
            </button>
        </div>
";
        } else {
            // line 56
            echo "    <body>
";
        }
        // line 58
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <!-- Navigation -->
            <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 71
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/logo_imp.png");
        echo "\" class=\"img-responsive\"/></a>                
                </div>
                <!-- Top Menu Items -->
                <ul class=\"nav navbar-right top-nav\">                
                    <li class=\"dropdown\">
                        ";
        // line 76
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 77
            echo "
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "surname", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>                    
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <a href=\"";
            // line 81
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("account");
            echo "\"><i class=\"fa fa-fw fa-user\"></i> Mi Cuenta</a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"#\" data-request=\"onLogout\" ><i class=\"fa fa-fw fa-power-off\"></i> Salir</a>
                                </li>
                            </ul>                       
                        ";
        } else {
            // line 89
            echo "                             ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("menuUserWidget"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 90
            echo "                        ";
        }
        echo "                                                        
                    </li>
                </ul>                 
            </nav>
        </div>
    </div>
    
    <div class=\"row\">
        <div class=\"col-md-2\"> 
            <div class=\"row\">
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->            
                <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                    ";
        // line 102
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array())) {
            echo "                    
                        ";
            // line 103
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("menus/menu_lateral"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            echo "                        
                    ";
        }
        // line 104
        echo "   
                </div>   
             </div>               
        </div>

        <div class=\"col-md-8\">                       
            <div class=\"row\">           
                ";
        // line 111
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array())) {
            echo "   
                <div id=\"page-wrapper\" class=\"div_central\">                
                    <div class=\"container-fluid\">                       
                        ";
            // line 114
            echo $this->env->getExtension('CMS')->pageFunction();
            echo "                                                    
                    </div>
                </div>
                ";
        } else {
            // line 118
            echo "                <div class=\"col-md-6 col-md-offset-3 div_login\">
                    <div class=\"row\">
                        ";
            // line 120
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("account"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 121
            echo "                        <div class=\"col-md-12\">
                            <img src=\"";
            // line 122
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
            echo "\" class=\"img-responsive pull-right\"/>
                        </div>    
                    </div>                    
                </div>
                ";
        }
        // line 126
        echo " 
            </div>
        </div>
        <div class=\"col-md-2\">            
            <div class=\"row\">
                ";
        // line 131
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array())) {
            echo "                
                    <div class=\"col-md-12\"  id=\"div_calendar\">    
                        <div class=\"panel panel-danger\"> 
                            <div class=\"panel-heading\"> 
                                <h3 class=\"panel-title\" style=\"    color: #1E427C;text-align:center\">Calendario Eventos</h3>
                            </div> 
                            <div class=\"panel-body\" style=\"padding:0px 10px 10px 0px !important\">
                              ";
            // line 138
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("ListEvents"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 139
            echo "                            </div>
                        </div>                        
                    </div>
                ";
        }
        // line 142
        echo "         
                ";
        // line 143
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array())) {
            echo "                              
                    <div class=\"col-md-12\">
                      ";
            // line 145
            if (call_user_func_array($this->env->getFunction('can')->getCallable(), array("helpdesk"))) {
                echo "                                        
                          ";
                // line 146
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('CMS')->partialFunction("indicadores"                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 147
                echo "                      ";
            } else {
                echo "                            
                          ";
                // line 148
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('CMS')->partialFunction("notification"                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 149
                echo "                      ";
            }
            echo "                          
                    </div>
                ";
        }
        // line 151
        echo "                    
            </div>
        </div>
    </div>
    <!-- /#wrapper -->
</div>
 <!-- jQuery --> 

  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/intranet_redes/themes/bootstrap4/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 151,  286 => 149,  282 => 148,  277 => 147,  273 => 146,  269 => 145,  264 => 143,  261 => 142,  255 => 139,  251 => 138,  241 => 131,  234 => 126,  226 => 122,  223 => 121,  219 => 120,  215 => 118,  208 => 114,  202 => 111,  193 => 104,  186 => 103,  182 => 102,  166 => 90,  161 => 89,  150 => 81,  142 => 78,  139 => 77,  137 => 76,  127 => 71,  112 => 58,  108 => 56,  93 => 43,  89 => 41,  82 => 38,  80 => 37,  76 => 35,  73 => 34,  69 => 32,  67 => 26,  62 => 23,  58 => 22,  51 => 21,  47 => 19,  45 => 13,  38 => 9,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>Redes Humanas - {{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"author\" content=\"Redes Humanas\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">

    <script src=\"{{ [
    'assets/js/jquery.js',
    'assets/js/bootstrap.min.js',
    'assets/js/app.js',
    'assets/vendor/jquery/jquery-3.1.1.min.js',
    'assets/vendor/jquery/jquery-ui.js'
    ]|theme }}\"></script>

    {% framework extras %}
    {% scripts %}

    

    <link href=\"{{ [
      'assets/css/bootstrap.css',
      'assets/css/sb-admin.css',
      'assets/css/plugins/morris.css',
      'assets/font-awesome/css/font-awesome.min.css',
      'assets/vendor/jquery/jquery-ui.css'
    ]|theme }}\" rel=\"stylesheet\">

    {% styles %}

  </head>
{% if user %}
    {% if can('helpdesk') %} 
        <body onLoad='setInterval(\"actualizar_notificaciones(1)\",60000);'>
    {% else %}
        <body onLoad='setInterval(\"actualizar_notificaciones(0)\",60000);'>
    {% endif %}
        <div style=\"display:none\">
            <button
                data-request=\"onStart\"
                data-request-update=\"indicadores: '#div_notifica'\" id=\"btn_update1\">
                Go
            </button>
            <button
                data-request=\"onRun\"
                data-request-update=\"notification: '#div_notifica'\" id=\"btn_update0\">
                Go
            </button>
        </div>
{% else %}
    <body>
{% endif %}
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <!-- Navigation -->
            <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\"><img src=\"{{ 'assets/images/logo_imp.png'|theme }}\" class=\"img-responsive\"/></a>                
                </div>
                <!-- Top Menu Items -->
                <ul class=\"nav navbar-right top-nav\">                
                    <li class=\"dropdown\">
                        {% if user %}

                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> {{ user.name }} {{ user.surname }} <b class=\"caret\"></b></a>                    
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <a href=\"{{ 'account'|page }}\"><i class=\"fa fa-fw fa-user\"></i> Mi Cuenta</a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a href=\"#\" data-request=\"onLogout\" ><i class=\"fa fa-fw fa-power-off\"></i> Salir</a>
                                </li>
                            </ul>                       
                        {% else %}
                             {% component 'menuUserWidget' %}
                        {% endif %}                                                        
                    </li>
                </ul>                 
            </nav>
        </div>
    </div>
    
    <div class=\"row\">
        <div class=\"col-md-2\"> 
            <div class=\"row\">
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->            
                <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                    {%if user.name %}                    
                        {% partial \"menus/menu_lateral\" %}                        
                    {% endif %}   
                </div>   
             </div>               
        </div>

        <div class=\"col-md-8\">                       
            <div class=\"row\">           
                {%if user.name %}   
                <div id=\"page-wrapper\" class=\"div_central\">                
                    <div class=\"container-fluid\">                       
                        {% page %}                                                    
                    </div>
                </div>
                {% else %}
                <div class=\"col-md-6 col-md-offset-3 div_login\">
                    <div class=\"row\">
                        {% component 'account' %}
                        <div class=\"col-md-12\">
                            <img src=\"{{ 'assets/images/october.png'|theme }}\" class=\"img-responsive pull-right\"/>
                        </div>    
                    </div>                    
                </div>
                {% endif %} 
            </div>
        </div>
        <div class=\"col-md-2\">            
            <div class=\"row\">
                {%if user.name %}                
                    <div class=\"col-md-12\"  id=\"div_calendar\">    
                        <div class=\"panel panel-danger\"> 
                            <div class=\"panel-heading\"> 
                                <h3 class=\"panel-title\" style=\"    color: #1E427C;text-align:center\">Calendario Eventos</h3>
                            </div> 
                            <div class=\"panel-body\" style=\"padding:0px 10px 10px 0px !important\">
                              {% component 'ListEvents' %}
                            </div>
                        </div>                        
                    </div>
                {% endif %}         
                {%if user.name %}                              
                    <div class=\"col-md-12\">
                      {% if can('helpdesk') %}                                        
                          {% partial \"indicadores\"%}
                      {% else %}                            
                          {% partial 'notification' %}
                      {% endif %}                          
                    </div>
                {% endif %}                    
            </div>
        </div>
    </div>
    <!-- /#wrapper -->
</div>
 <!-- jQuery --> 

  </body>
</html>", "/opt/lampp/htdocs/intranet_redes/themes/bootstrap4/layouts/default.htm", "");
    }
}
