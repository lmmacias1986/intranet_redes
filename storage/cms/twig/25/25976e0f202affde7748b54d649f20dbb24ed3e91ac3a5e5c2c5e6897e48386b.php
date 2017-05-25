<?php

/* D:\xampp\htdocs\intranet_redes/plugins/esroyo/userprofile/components/menuuserwidget/default.htm */
class __TwigTemplate_d3d027ae82b52f684be924d0ba792679681ec245f45e44bd065bcfc878697271 extends Twig_Template
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
        echo "<ul class=\"nav navbar-nav navbar-right menu-user-widget\">
    ";
        // line 2
        if (($context["user"] ?? null)) {
            // line 3
            echo "    <li class=\"dropdown menu-user-widget\">
        <a class=\"dropdown-toggle menu-user-widget-switch\" style=\"padding: 7px 15px\" href=\"#\" data-toggle=\"dropdown\">
            <img class=\"img-circle\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "getAvatarThumb", array(0 => 36, 1 => array("extension" => "png")), "method"), "html", null, true);
            echo "\">
            &nbsp; ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "name", array()), "html", null, true);
            echo " <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu\" style=\"padding:17px;\">
            <li><a href=\"";
            // line 9
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(($context["accountPage"] ?? null));
            echo "\"><i class=\"icon-cog\"></i> &nbsp; ";
            echo call_user_func_array($this->env->getFunction('_')->getCallable(), array("account", "rainlab.user::lang.account"));
            echo "</a></li>
            <li><a href=\"#\" data-request=\"onLogout\" data-request-data=\"redirect: '";
            // line 10
            echo twig_escape_filter($this->env, ($context["redirect"] ?? null), "html", null, true);
            echo "'\"><i class=\"icon-signout\"></i> &nbsp; ";
            echo call_user_func_array($this->env->getFunction('_')->getCallable(), array("sign_out"));
            echo "</a></li>
    </li>
    </li>
    ";
        } else {
            // line 14
            echo "    <li class=\"dropdown menu-user-widget-signin\">
        <a class=\"dropdown-toggle menu-user-widget-signin-switch\" href=\"#\" data-toggle=\"dropdown\">Ingresar &nbsp; <i class=\"icon-off\"></i></a>
        <div class=\"dropdown-menu\" style=\"padding: 17px\">
            <form class=\"menu-user-widget-sigin-form\" data-request=\"onSignin\">
                <div class=\"form-group menu-user-widget-signin-login\">
                    <input name=\"login\" type=\"text\" placeholder=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["loginAttributeLabel"] ?? null), "html", null, true);
            echo "\">
                </div>
                <div class=\"form-group menu-user-widget-signin-password\">
                    <input name=\"password\" id=\"password\" type=\"password\" placeholder=\"";
            // line 22
            echo call_user_func_array($this->env->getFunction('_')->getCallable(), array("password", "rainlab.user::lang.account"));
            echo "\">
                </div>
                <div class=\"pull-right\">
                    <a class=\"btn btn-default\" href=\"";
            // line 25
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(($context["accountPage"] ?? null));
            echo "\" title=\"";
            echo call_user_func_array($this->env->getFunction('_')->getCallable(), array("register", "rainlab.user::lang.account"));
            echo "\"><i class=\"icon-pencil\"></i></a> &nbsp;
                    <a class=\"btn btn-default\" href=\"";
            // line 26
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(($context["forgotPasswordPage"] ?? null));
            echo "\" title=\"";
            echo call_user_func_array($this->env->getFunction('_')->getCallable(), array("reset_password", "rainlab.user::lang.reset_password"));
            echo "\"><i class=\"icon-question\"></i></a>
                </div>
                <button type=\"submit\" class=\"btn btn-primary menu-user-widget-signin-btn\">";
            // line 28
            echo call_user_func_array($this->env->getFunction('_')->getCallable(), array("login", "rainlab.user::lang.account"));
            echo "</button>

            </form>
        </div>
    </li>
    ";
        }
        // line 34
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\intranet_redes/plugins/esroyo/userprofile/components/menuuserwidget/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 34,  85 => 28,  78 => 26,  72 => 25,  66 => 22,  60 => 19,  53 => 14,  44 => 10,  38 => 9,  32 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav navbar-nav navbar-right menu-user-widget\">
    {% if user %}
    <li class=\"dropdown menu-user-widget\">
        <a class=\"dropdown-toggle menu-user-widget-switch\" style=\"padding: 7px 15px\" href=\"#\" data-toggle=\"dropdown\">
            <img class=\"img-circle\" src=\"{{ user.getAvatarThumb(36, {'extension': 'png'}) }}\">
            &nbsp; {{ user.name }} <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu\" style=\"padding:17px;\">
            <li><a href=\"{{ accountPage|page }}\"><i class=\"icon-cog\"></i> &nbsp; {{ _('account', 'rainlab.user::lang.account') }}</a></li>
            <li><a href=\"#\" data-request=\"onLogout\" data-request-data=\"redirect: '{{ redirect }}'\"><i class=\"icon-signout\"></i> &nbsp; {{ _('sign_out') }}</a></li>
    </li>
    </li>
    {% else %}
    <li class=\"dropdown menu-user-widget-signin\">
        <a class=\"dropdown-toggle menu-user-widget-signin-switch\" href=\"#\" data-toggle=\"dropdown\">Ingresar &nbsp; <i class=\"icon-off\"></i></a>
        <div class=\"dropdown-menu\" style=\"padding: 17px\">
            <form class=\"menu-user-widget-sigin-form\" data-request=\"onSignin\">
                <div class=\"form-group menu-user-widget-signin-login\">
                    <input name=\"login\" type=\"text\" placeholder=\"{{ loginAttributeLabel }}\">
                </div>
                <div class=\"form-group menu-user-widget-signin-password\">
                    <input name=\"password\" id=\"password\" type=\"password\" placeholder=\"{{ _('password', 'rainlab.user::lang.account') }}\">
                </div>
                <div class=\"pull-right\">
                    <a class=\"btn btn-default\" href=\"{{ accountPage|page }}\" title=\"{{ _('register', 'rainlab.user::lang.account') }}\"><i class=\"icon-pencil\"></i></a> &nbsp;
                    <a class=\"btn btn-default\" href=\"{{ forgotPasswordPage|page }}\" title=\"{{ _('reset_password', 'rainlab.user::lang.reset_password') }}\"><i class=\"icon-question\"></i></a>
                </div>
                <button type=\"submit\" class=\"btn btn-primary menu-user-widget-signin-btn\">{{ _('login', 'rainlab.user::lang.account') }}</button>

            </form>
        </div>
    </li>
    {% endif %}
</ul>
", "D:\\xampp\\htdocs\\intranet_redes/plugins/esroyo/userprofile/components/menuuserwidget/default.htm", "");
    }
}
