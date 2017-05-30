<?php

/* /opt/lampp/htdocs/intranet_redes/themes/rainlab-vanilla/layouts/default.htm */
class __TwigTemplate_5ee24f5238c49b7cfa0795d41ef92cdd42934b9be7068eda6fc8badc074f28f8 extends Twig_Template
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
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\" class=\"img-responsive\"/></a>
                        </div>
                    </div>
                    <div class=\"collapse navbar-collapse navbar-main-collapse\">
                        <ul class=\"nav navbar-nav \" >
                            ";
        // line 39
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 40
            echo "                            <li class=\"";
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "account")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("account");
            echo "\" style=\"color:#1E5799\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "surname", array()), "html", null, true);
            echo " </a></li>
                            ";
        }
        // line 41
        echo "                            
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            ";
        // line 44
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 45
            echo "                                <li><a href=\"#\" data-request=\"onLogout\" style=\"color:#1E5799\">Salir</a></li>
                            ";
        } else {
            // line 47
            echo "                                 ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("menuUserWidget"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 48
            echo "                            ";
        }
        // line 49
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
        // line 61
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("menus/menu_lateral"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 62
        echo "                    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("notification/notification"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 63
        echo "                </div>
                <div class=\"col-md-8\">
                    ";
        // line 65
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 66
        echo "                </div>
                <div class=\"col-md-3\">
                   
                </div>
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 74
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 75
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 78
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/vendor/bootstrap/js/transition.js", 2 => "assets/vendor/bootstrap/js/alert.js", 3 => "assets/vendor/bootstrap/js/button.js", 4 => "assets/vendor/bootstrap/js/carousel.js", 5 => "assets/vendor/bootstrap/js/collapse.js", 6 => "assets/vendor/bootstrap/js/dropdown.js", 7 => "assets/vendor/bootstrap/js/modal.js", 8 => "assets/vendor/bootstrap/js/tooltip.js", 9 => "assets/vendor/bootstrap/js/popover.js", 10 => "assets/vendor/bootstrap/js/scrollspy.js", 11 => "assets/vendor/bootstrap/js/tab.js", 12 => "assets/vendor/bootstrap/js/affix.js", 13 => "assets/javascript/app.js", 14 => "assets/vendor/jquery/jquery-3.1.1.min.js", 15 => "assets/vendor/jquery/jquery-ui.js"));
        // line 95
        echo "\"></script>
        ";
        // line 96
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 97
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 98
        echo "          
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/intranet_redes/themes/rainlab-vanilla/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 98,  176 => 97,  169 => 96,  166 => 95,  164 => 78,  159 => 75,  155 => 74,  145 => 66,  143 => 65,  139 => 63,  134 => 62,  130 => 61,  116 => 49,  113 => 48,  108 => 47,  104 => 45,  102 => 44,  97 => 41,  83 => 40,  81 => 39,  71 => 34,  49 => 14,  46 => 12,  43 => 11,  39 => 10,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
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
                            <li class=\"{% if this.page.id == 'account' %}active{% endif %}\"><a href=\"{{ 'account'|page }}\" style=\"color:#1E5799\">{{ user.name }} {{ user.surname }} </a></li>
                            {% endif %}                            
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            {% if user %}
                                <li><a href=\"#\" data-request=\"onLogout\" style=\"color:#1E5799\">Salir</a></li>
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
                <div class=\"col-md-8\">
                    {% page %}
                </div>
                <div class=\"col-md-3\">
                   
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
</html>", "/opt/lampp/htdocs/intranet_redes/themes/rainlab-vanilla/layouts/default.htm", "");
    }
}
