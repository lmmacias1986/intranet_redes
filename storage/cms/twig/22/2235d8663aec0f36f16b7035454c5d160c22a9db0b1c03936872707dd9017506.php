<?php

/* /opt/lampp/htdocs/intranet_redes/plugins/kurtjensen/mycalendar/components/listevents/default.htm */
class __TwigTemplate_5c0b5270f0db0e4f91cb2a5bfb7f56ec6d2a4fc583db55a81a223eeaaa220e1c extends Twig_Template
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
        echo "<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\" id=\"EventDetail\">
  </div>
</div>
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("@list"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/opt/lampp/htdocs/intranet_redes/plugins/kurtjensen/mycalendar/components/listevents/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\" id=\"EventDetail\">
  </div>
</div>
{% partial \"@list\" %}", "/opt/lampp/htdocs/intranet_redes/plugins/kurtjensen/mycalendar/components/listevents/default.htm", "");
    }
}
