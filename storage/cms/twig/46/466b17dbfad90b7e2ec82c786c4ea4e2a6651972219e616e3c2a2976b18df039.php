<?php

/* D:\xampp\htdocs\intranet_redes/themes/rainlab-vanilla/pages/home.htm */
class __TwigTemplate_e085b270ae63cb44845b6d4e2283a93f9c6831098f0459eee23bb0ed7b1007e3 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/plugin-user.png");
        echo "\" alt=\"RainLab.User\" />
            <div class=\"caption\">
                <h3>Account management</h3>
                <p>The user plugin <em>RainLab.User</em> provides the basic account management features.</p>
                <br />
                <p>
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("account");
        echo "\" class=\"btn btn-lg btn-info\" role=\"button\">View Account</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/plugin-blog.png");
        echo "\" alt=\"RainLab.Blog\" />
            <div class=\"caption\">
                <h3>Blog articles</h3>
                <p>The user plugin <em>RainLab.Blog</em> provides robust authoring features.</p>
                <br />
                <p>
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
        echo "\" class=\"btn btn-lg btn-success\" role=\"button\">View Blog</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/plugin-forum.png");
        echo "\" alt=\"RainLab.Forum\" />
            <div class=\"caption\">
                <h3>Discussion forum</h3>
                <p>The forum plugin <em>RainLab.Forum</em> provides community discussion features.</p>
                <br />
                <p>
                    <a href=\"";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("forum");
        echo "\" class=\"btn btn-lg btn-warning\" role=\"button\">View Forum</a>
                </p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\intranet_redes/themes/rainlab-vanilla/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 41,  67 => 35,  55 => 26,  46 => 20,  34 => 11,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"{{ 'assets/images/plugin-user.png'|theme }}\" alt=\"RainLab.User\" />
            <div class=\"caption\">
                <h3>Account management</h3>
                <p>The user plugin <em>RainLab.User</em> provides the basic account management features.</p>
                <br />
                <p>
                    <a href=\"{{ 'account'|page }}\" class=\"btn btn-lg btn-info\" role=\"button\">View Account</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"{{ 'assets/images/plugin-blog.png'|theme }}\" alt=\"RainLab.Blog\" />
            <div class=\"caption\">
                <h3>Blog articles</h3>
                <p>The user plugin <em>RainLab.Blog</em> provides robust authoring features.</p>
                <br />
                <p>
                    <a href=\"{{ 'blog'|page }}\" class=\"btn btn-lg btn-success\" role=\"button\">View Blog</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"{{ 'assets/images/plugin-forum.png'|theme }}\" alt=\"RainLab.Forum\" />
            <div class=\"caption\">
                <h3>Discussion forum</h3>
                <p>The forum plugin <em>RainLab.Forum</em> provides community discussion features.</p>
                <br />
                <p>
                    <a href=\"{{ 'forum'|page }}\" class=\"btn btn-lg btn-warning\" role=\"button\">View Forum</a>
                </p>
            </div>
        </div>
    </div>
</div>", "D:\\xampp\\htdocs\\intranet_redes/themes/rainlab-vanilla/pages/home.htm", "");
    }
}
