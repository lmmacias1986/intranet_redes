<?php

/* E:\xampp\htdocs\redes_humanas/themes/rainlab-vanilla/partials/acceso.htm */
class __TwigTemplate_44697581dfb0d66b9a686f064f463c0ade240af392200b088b731100f1b7cac3 extends Twig_Template
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
        echo "<div class=\"alert alert-danger\" role=\"alert\"><p>No tiene permisos de acceder a esta sección</p></div>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\redes_humanas/themes/rainlab-vanilla/partials/acceso.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"alert alert-danger\" role=\"alert\"><p>No tiene permisos de acceder a esta sección</p></div>", "E:\\xampp\\htdocs\\redes_humanas/themes/rainlab-vanilla/partials/acceso.htm", "");
    }
}
