<?php

/* /opt/lampp/htdocs/intranet_redes/themes/rainlab-vanilla/layouts/formularios.htm */
class __TwigTemplate_313b48935a56b9355530ca3c6d4ff72196921d04172788e77a691938fe32042d extends Twig_Template
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
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - ";
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
        <meta name=\"author\" content=\"October CMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\" />
        ";
        // line 11
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 12
        echo "        <link href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/less/theme.less"));
        // line 14
        echo "\" rel=\"stylesheet\">        
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            <!-- Nav -->
            <nav id=\"layout-nav\" class=\" barra_titulo navbar navbar-default navbar-fixed-top\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <div class=\"fondo_logo col-md-2\">
                            <a href=\"";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\" class=\"img-responsive\"/></a>
                        </div>
                    </div>
                    <div class=\"collapse navbar-collapse navbar-main-collapse\">
                        <ul class=\"nav navbar-nav \" >
                            ";
        // line 36
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 37
            echo "                            <li class=\"";
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "account")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("account");
            echo "\" style=\"color:#1E5799; background-color: transparent !important;\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "surname", array()), "html", null, true);
            echo " - Intranet</a></li>
                            ";
        }
        // line 38
        echo "                            
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            ";
        // line 41
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 42
            echo "                                <li><a href=\"#\" data-request=\"onLogout\" style=\"color:#1E5799\"><< Salir >></a></li>
                            ";
        } else {
            // line 44
            echo "                                 ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("menuUserWidget"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 45
            echo "                            ";
        }
        // line 46
        echo "                        </ul>
                    </div>
                </div>
            </nav>

        </header>    
        <hr>    
        <!-- Content -->
        <section id=\"layout-content\" class=\"seccion_fondo\">            
            <div class=\"container contenedor_fondo\">
                <div class=\"col-md-2\">
                    ";
        // line 57
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("menus/menu_lateral"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 58
        echo "                    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("notification/notification"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 59
        echo "                </div>
                <div class=\"col-md-10 borde_menu\">                    
                    ";
        // line 61
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 62
        echo "                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 68
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 69
        echo "        </footer>
        
        <!-- Scripts -->
        <script src=\"";
        // line 72
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/vendor/bootstrap/js/transition.js", 2 => "assets/vendor/bootstrap/js/alert.js", 3 => "assets/vendor/bootstrap/js/button.js", 4 => "assets/vendor/bootstrap/js/carousel.js", 5 => "assets/vendor/bootstrap/js/collapse.js", 6 => "assets/vendor/bootstrap/js/dropdown.js", 7 => "assets/vendor/bootstrap/js/modal.js", 8 => "assets/vendor/bootstrap/js/tooltip.js", 9 => "assets/vendor/bootstrap/js/popover.js", 10 => "assets/vendor/bootstrap/js/scrollspy.js", 11 => "assets/vendor/bootstrap/js/tab.js", 12 => "assets/vendor/bootstrap/js/affix.js", 13 => "assets/javascript/app.js", 14 => "assets/vendor/jquery/jquery-3.1.1.min.js", 15 => "assets/vendor/jquery/jquery-ui.js"));
        // line 89
        echo "\"></script>
        ";
        // line 90
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 91
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 92
        echo "          
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/intranet_redes/themes/rainlab-vanilla/layouts/formularios.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 92,  170 => 91,  163 => 90,  160 => 89,  158 => 72,  153 => 69,  149 => 68,  141 => 62,  139 => 61,  135 => 59,  130 => 58,  126 => 57,  113 => 46,  110 => 45,  105 => 44,  101 => 42,  99 => 41,  94 => 38,  80 => 37,  78 => 36,  68 => 31,  49 => 14,  46 => 12,  43 => 11,  39 => 10,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
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
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"October CMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\" />
        {% styles %}
        <link href=\"{{ [
            'assets/less/theme.less'
        ]|theme }}\" rel=\"stylesheet\">        
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            <!-- Nav -->
            <nav id=\"layout-nav\" class=\" barra_titulo navbar navbar-default navbar-fixed-top\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <div class=\"fondo_logo col-md-2\">
                            <a href=\"{{ 'home'|page }}\"><img src=\"{{ 'assets/images/october.png'|theme }}\" class=\"img-responsive\"/></a>
                        </div>
                    </div>
                    <div class=\"collapse navbar-collapse navbar-main-collapse\">
                        <ul class=\"nav navbar-nav \" >
                            {% if user %}
                            <li class=\"{% if this.page.id == 'account' %}active{% endif %}\"><a href=\"{{ 'account'|page }}\" style=\"color:#1E5799; background-color: transparent !important;\">{{ user.name }} {{ user.surname }} - Intranet</a></li>
                            {% endif %}                            
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            {% if user %}
                                <li><a href=\"#\" data-request=\"onLogout\" style=\"color:#1E5799\"><< Salir >></a></li>
                            {% else %}
                                 {% component 'menuUserWidget' %}
                            {% endif %}
                        </ul>
                    </div>
                </div>
            </nav>

        </header>    
        <hr>    
        <!-- Content -->
        <section id=\"layout-content\" class=\"seccion_fondo\">            
            <div class=\"container contenedor_fondo\">
                <div class=\"col-md-2\">
                    {% partial \"menus/menu_lateral\"%}
                    {% partial \"notification/notification\"%}
                </div>
                <div class=\"col-md-10 borde_menu\">                    
                    {% page %}
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial \"footer\" %}
        </footer>
        
        <!-- Scripts -->
        <script src=\"{{ [
            'assets/javascript/jquery.js',
            'assets/vendor/bootstrap/js/transition.js',
            'assets/vendor/bootstrap/js/alert.js',
            'assets/vendor/bootstrap/js/button.js',
            'assets/vendor/bootstrap/js/carousel.js',
            'assets/vendor/bootstrap/js/collapse.js',
            'assets/vendor/bootstrap/js/dropdown.js',
            'assets/vendor/bootstrap/js/modal.js',
            'assets/vendor/bootstrap/js/tooltip.js',
            'assets/vendor/bootstrap/js/popover.js',
            'assets/vendor/bootstrap/js/scrollspy.js',
            'assets/vendor/bootstrap/js/tab.js',
            'assets/vendor/bootstrap/js/affix.js',
            'assets/javascript/app.js',
            'assets/vendor/jquery/jquery-3.1.1.min.js',
            'assets/vendor/jquery/jquery-ui.js'
        ]|theme }}\"></script>
        {% framework extras %}
        {% scripts %}
          
    </body>
</html>", "/opt/lampp/htdocs/intranet_redes/themes/rainlab-vanilla/layouts/formularios.htm", "");
    }
}
