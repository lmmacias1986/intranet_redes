<?php

/* /opt/lampp/htdocs/intranet_redes/plugins/kurtjensen/mycalendar/components/partials/event.htm */
class __TwigTemplate_02a732378591ccbcd2428988b2f2a0a5d2df012a6b7a45723a21e3bf9f58ebe9 extends Twig_Template
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
        echo "<li";
        if ($this->getAttribute((isset($context["ev"]) ? $context["ev"] : null), "class", array())) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ev"]) ? $context["ev"] : null), "class", array()), "html", null, true);
            echo "\"";
        }
        echo " title=\"";
        if ($this->getAttribute((isset($context["ev"]) ? $context["ev"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ev"]) ? $context["ev"] : null), "title", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute((isset($context["ev"]) ? $context["ev"] : null), "text", array())), 0, 50), "html", null, true);
            echo "...";
        }
        echo "\">
    ";
        // line 2
        if ($this->getAttribute((isset($context["ev"]) ? $context["ev"] : null), "link", array())) {
            echo "<a href=\"";
            echo $this->getAttribute((isset($context["ev"]) ? $context["ev"] : null), "link", array());
            echo "\">";
        }
        echo $this->getAttribute((isset($context["ev"]) ? $context["ev"] : null), "name", array());
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ev"]) ? $context["ev"] : null), "time", array()), "html", null, true);
        if ($this->getAttribute((isset($context["ev"]) ? $context["ev"] : null), "link", array())) {
            echo "</a>";
        }
        // line 3
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/intranet_redes/plugins/kurtjensen/mycalendar/components/partials/event.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 3,  35 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li{% if ev.class %} class=\"{{ ev.class }}\"{% endif %} title=\"{% if ev.title %}{{ ev.title }}{% else %}{{ ev.text|striptags|slice(0,50) }}...{% endif %}\">
    {% if ev.link %}<a href=\"{{ ev.link|raw }}\">{% endif %}{{ ev.name|raw }} {{ ev.time }}{% if ev.link %}</a>{% endif %}
</li>", "/opt/lampp/htdocs/intranet_redes/plugins/kurtjensen/mycalendar/components/partials/event.htm", "");
    }
}
