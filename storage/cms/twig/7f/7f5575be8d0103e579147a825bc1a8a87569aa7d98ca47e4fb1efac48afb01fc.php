<?php

/* D:\xampp\htdocs\intranet_redes/themes/rainlab-vanilla/pages/sistemas/consultar_solicitud.htm */
class __TwigTemplate_dc53e072d4fb3bac7ab21c8447bba83f4ed2722a95b046ce7e28670721832274 extends Twig_Template
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
        if ($this->getAttribute(($context["user"] ?? null), "name", array())) {
            // line 2
            echo "    ";
            if (call_user_func_array($this->env->getFunction('can')->getCallable(), array("helpdesk"))) {
                // line 3
                echo "        <div class=\"panel panel-primary\"> 
            <div class=\"panel-heading\"> 
                <h3 class=\"panel-title\">ATENCION DE SOLICITUDES HELP DESK</h3>
            </div> 
            <div class=\"panel-body\">
                <form data-request=\"onSave\" data-request-update=\"resultados: '#resultado'\">
                    <div class=\"row\">                   
                        <div class=\"col-md-4\">
                            <p>
                                <label>Id:</label>
                                <span>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute(($context["control"] ?? null), "id", array()), "html", null, true);
                echo "</span>
                            </p>
                            <p>
                                <label>Fecha de creación:</label>
                                <span>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute(($context["control"] ?? null), "creacion", array()), "html", null, true);
                echo "</span>
                            </p>
                            <p>
                                <label>Usuario:</label>
                                <span>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute(($context["control"] ?? null), "reportado_por", array()), "html", null, true);
                echo "</span>
                            </p>
                        </div>
                        <div class=\"col-md-3\">
                            
                            <p>
                                <label>Tipificación:</label>
                                <span>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute(($context["control"] ?? null), "tipificacion", array()), "html", null, true);
                echo "</span>
                            </p>
                            <p>
                                <label>Asunto:</label>
                                <span>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute(($context["control"] ?? null), "asunto", array()), "html", null, true);
                echo "</span>
                            </p>
                        </div>
                        
                        <div class=\"col-md-5\">                            
                            <p>
                                <label>Descripción de la solicitud:</label>
                                <span>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute(($context["control"] ?? null), "descripcion", array()), "html", null, true);
                echo "</span>
                            </p>
                        </div>                        
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <label for=\"reportado_por\">Reportado por:</label>
                            <input type=\"text\" id=\"reportado_por\" name=\"reportado_por\" class=\"form-control\" value=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute(($context["control"] ?? null), "reportado_por", array()), "html", null, true);
                echo "\"/>
                        </div>
                        <div class=\"col-md-4\">
                            <label for=\"clasificacion\">Clasificación:</label>
                            <select id=\"clasificacion\" name=\"clasificacion\" class=\"form-control\">
                                <option value=\"\">--Seleccione--</option>
                                <option value=\"Aplicación Antares\" ";
                // line 52
                if (($this->getAttribute(($context["control"] ?? null), "clasificacion", array()) == "Aplicación Antares")) {
                    echo " selected ";
                }
                echo ">Aplicación Antares</option>
                                <option value=\"Aplicación SAP\" ";
                // line 53
                if (($this->getAttribute(($context["control"] ?? null), "clasificacion", array()) == "Aplicación SAP")) {
                    echo " selected ";
                }
                echo ">Aplicación SAP</option>
                                <option value=\"Aplicación 360\" ";
                // line 54
                if (($this->getAttribute(($context["control"] ?? null), "clasificacion", array()) == "Aplicación 360")) {
                    echo " selected ";
                }
                echo ">Aplicación 360</option>
                                <option value=\"Aplicación Core Manager\" ";
                // line 55
                if (($this->getAttribute(($context["control"] ?? null), "clasificacion", array()) == "Aplicación Core Manager")) {
                    echo " selected ";
                }
                echo ">Aplicación Core Manager</option>
                                <option value=\"Intranet\" ";
                // line 56
                if (($this->getAttribute(($context["control"] ?? null), "clasificacion", array()) == "Intranet")) {
                    echo " selected ";
                }
                echo ">Intranet</option>
                                <option value=\"Docunet\" ";
                // line 57
                if (($this->getAttribute(($context["control"] ?? null), "clasificacion", array()) == "Docunet")) {
                    echo " selected ";
                }
                echo ">Docunet</option>
                                <option value=\"Comunicaciones\" ";
                // line 58
                if (($this->getAttribute(($context["control"] ?? null), "clasificacion", array()) == "Comunicaciones")) {
                    echo " selected ";
                }
                echo ">Comunicaciones</option>
                                <option value=\"Correo Google Apps\" ";
                // line 59
                if (($this->getAttribute(($context["control"] ?? null), "clasificacion", array()) == "Correo Google Apps")) {
                    echo " selected ";
                }
                echo ">Correo Google Apps</option>
                                <option value=\"Correo Historico Zimbra\" ";
                // line 60
                if (($this->getAttribute(($context["control"] ?? null), "clasificacion", array()) == "Correo Historico Zimbra")) {
                    echo " selected ";
                }
                echo ">Correo Historico Zimbra</option>
                                <option value=\"Computador de Escritorio\" ";
                // line 61
                if (($this->getAttribute(($context["control"] ?? null), "clasificacion", array()) == "Computador de Escritorio")) {
                    echo " selected ";
                }
                echo ">Computador de Escritorio</option>
                                <option value=\"Computador de Portatil\" ";
                // line 62
                if (($this->getAttribute(($context["control"] ?? null), "clasificacion", array()) == "Computador de Portatil")) {
                    echo " selected ";
                }
                echo ">Computador de Portatil</option>
                                <option value=\"Impresora\" ";
                // line 63
                if (($this->getAttribute(($context["control"] ?? null), "clasificacion", array()) == "Impresora")) {
                    echo " selected ";
                }
                echo ">Impresora</option>
                                <option value=\"Dispositivos\" ";
                // line 64
                if (($this->getAttribute(($context["control"] ?? null), "clasificacion", array()) == "Dispositivos")) {
                    echo " selected ";
                }
                echo ">Dispositivos</option>
                                <option value=\"Partes\" ";
                // line 65
                if (($this->getAttribute(($context["control"] ?? null), "clasificacion", array()) == "Partes")) {
                    echo " selected ";
                }
                echo ">Partes</option>
                                <option value=\"Insumos\" ";
                // line 66
                if (($this->getAttribute(($context["control"] ?? null), "clasificacion", array()) == "Insumos")) {
                    echo " selected ";
                }
                echo ">Insumos</option>
                                <option value=\"Ofimática\" ";
                // line 67
                if (($this->getAttribute(($context["control"] ?? null), "clasificacion", array()) == "Ofimática")) {
                    echo " selected ";
                }
                echo ">Ofimática</option>
                                <option value=\"Creación ARL\" ";
                // line 68
                if (($this->getAttribute(($context["control"] ?? null), "clasificacion", array()) == "Creación ARL")) {
                    echo " selected ";
                }
                echo ">Creación ARL</option>
                                <option value=\"Instalación Software\" ";
                // line 69
                if (($this->getAttribute(($context["control"] ?? null), "clasificacion", array()) == "Instalación Software")) {
                    echo " selected ";
                }
                echo ">Instalación Software</option>
                                <option value=\"Otros\" ";
                // line 70
                if (($this->getAttribute(($context["control"] ?? null), "clasificacion", array()) == "Otros")) {
                    echo " selected ";
                }
                echo ">Otros</option>
                            </select>
                        </div>
                        <div class=\"col-md-4\">
                            <label for=\"medio\">Medio de reporte:</label>
                            <select id=\"medio\" name=\"medio\" class=\"form-control\">
                                <option value=\"\">--Seleccione--</option>
                                <option value=\"Intranet\" ";
                // line 77
                if (($this->getAttribute(($context["control"] ?? null), "medio", array()) == "Intranet")) {
                    echo " selected ";
                }
                echo ">Intranet</option>
                                <option value=\"Correo Electrónico\" ";
                // line 78
                if (($this->getAttribute(($context["control"] ?? null), "medio", array()) == "Correo Electrónico")) {
                    echo " selected ";
                }
                echo ">Correo Electronico</option>
                                <option value=\"Llamada Telefónica\" ";
                // line 79
                if (($this->getAttribute(($context["control"] ?? null), "medio", array()) == "Llamada Telefónica")) {
                    echo " selected ";
                }
                echo ">Llamada Telefonica</option>
                                <option value=\"Mensaje de Texto\" ";
                // line 80
                if (($this->getAttribute(($context["control"] ?? null), "medio", array()) == "Mensaje de Texto")) {
                    echo " selected ";
                }
                echo ">Mensaje de Texto</option>
                                <option value=\"Lineamiento de la dirección\" ";
                // line 81
                if (($this->getAttribute(($context["control"] ?? null), "medio", array()) == "Lineamiento de la dirección")) {
                    echo " selected ";
                }
                echo ">Lineamiento de la Direccion</option>
                            </select>
                        </div>
                        <div class=\"col-md-12\">
                            <label for=\"actividades\">Actividades realizadas:</label>
                            <textarea id=\"actividades\" name=\"actividades\" class=\"form-control\">";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute(($context["control"] ?? null), "actividades", array()), "html", null, true);
                echo "</textarea>
                        </div>  
                        <div class=\"col-md-4\">
                            <label for=\"estado\">Estado:</label>
                            <select id=\"estado\" name=\"estado\" class=\"form-control\">
                                <option value=\"Abierto\" ";
                // line 91
                if (($this->getAttribute(($context["control"] ?? null), "estado", array()) == "Abierto")) {
                    echo " selected ";
                }
                echo ">Abierto</option>
                                <option value=\"Pendiente\" ";
                // line 92
                if (($this->getAttribute(($context["control"] ?? null), "estado", array()) == "Pendiente")) {
                    echo " selected ";
                }
                echo ">Pendiente</option>
                                <option value=\"En curso\" ";
                // line 93
                if (($this->getAttribute(($context["control"] ?? null), "estado", array()) == "En curso")) {
                    echo " selected ";
                }
                echo ">En curso</option>
                                <option value=\"Cerrado\" ";
                // line 94
                if (($this->getAttribute(($context["control"] ?? null), "estado", array()) == "Cerrado")) {
                    echo " selected ";
                }
                echo ">Cerrado</option>
                                <option value=\"Resuelto\" ";
                // line 95
                if (($this->getAttribute(($context["control"] ?? null), "estado", array()) == "Resuelto")) {
                    echo " selected ";
                }
                echo ">Resuelto</option>
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <label for=\"prioridad\">Prioridad:</label>
                            <select id=\"prioridad\" name=\"prioridad\" class=\"form-control\">
                                <option value=\"Baja\" ";
                // line 101
                if (($this->getAttribute(($context["control"] ?? null), "prioridad", array()) == "Baja")) {
                    echo " selected ";
                }
                echo ">Baja</option>
                                <option value=\"Media\" ";
                // line 102
                if (($this->getAttribute(($context["control"] ?? null), "prioridad", array()) == "Media")) {
                    echo " selected ";
                }
                echo ">Media</option>
                                <option value=\"Alta\" ";
                // line 103
                if (($this->getAttribute(($context["control"] ?? null), "prioridad", array()) == "Alta")) {
                    echo " selected ";
                }
                echo ">Alta</option>
                                <option value=\"Urgente\" ";
                // line 104
                if (($this->getAttribute(($context["control"] ?? null), "prioridad", array()) == "Urgente")) {
                    echo " selected ";
                }
                echo ">Urgente</option>
                            </select>
                        </div>
                    </div>   
                    <hr>
                    <div class=\"row\">
                        <div id=\"resultado\" class=\"col-md-12\">
                            ";
                // line 111
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('CMS')->partialFunction("resultados"                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 112
                echo "                            <input type=\"submit\" name=\"regresar\" id=\"regresar\" data-request=\"onRegresaradm\" class=\"btn btn-success\" value=\"Regresar\"/>
                        </div>
                        <div class=\"col-md-12\">
                            <span for=\"atendido\">Atendido por:</span>
                            <label>";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "surname", array()), "html", null, true);
                echo "</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr>
    ";
            } else {
                // line 124
                echo "    
        <div class=\"panel panel-primary\"> 
            <div class=\"panel-heading\"> 
                <h3 class=\"panel-title\">Consulta de solicitud</h3>
            </div> 
            <div class=\"panel-body\">            
                <div class=\"row\">            \t\t
                    <div class=\"col-md-4\">
                    \t<p>
                        \t<label>Id:</label>
                        \t<span>";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute(($context["solicitud"] ?? null), "id", array()), "html", null, true);
                echo "</span>
                        </p>
                        <p>
                        \t<label>Fecha de creación:</label>
                        \t<span>";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute(($context["solicitud"] ?? null), "creacion", array()), "html", null, true);
                echo "</span>
                        </p>
                        <p>
                        \t<label>Usuario:</label>
                        \t<span>";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute(($context["solicitud"] ?? null), "reportado_por", array()), "html", null, true);
                echo "</span>
                        </p>
                    </div>
                    <div class=\"col-md-3\">
                        
                        <p>
                        \t<label>Tipificación:</label>
                        \t<span>";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute(($context["solicitud"] ?? null), "tipificacion", array()), "html", null, true);
                echo "</span>
                        </p>
                        <p>
                            <label>Prioridad:</label>
                            <span>";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute(($context["solicitud"] ?? null), "prioridad", array()), "html", null, true);
                echo "</span>
                        </p>
                    </div>
                    
                    <div class=\"col-md-5\">
                    \t<p>
                        \t<label>Asunto:</label>
                        \t<span>";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute(($context["solicitud"] ?? null), "asunto", array()), "html", null, true);
                echo "</span>
                        </p>
                    \t<p>
                        \t<label>Descripción de la solicitud:</label>
    \t                    <span>";
                // line 164
                echo twig_escape_filter($this->env, $this->getAttribute(($context["solicitud"] ?? null), "descripcion", array()), "html", null, true);
                echo "</span>
    \t                </p>
                    </div>
                    <div class=\"col-md-12\" style=\"display:none\">
                    \t<input type=\"text\" id=\"reportado_por\" name=\"reportado_por\" class=\"form-control\" value=\"";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
                echo "\"/>
                    </div>
                </div>
                <div class=\"row\" ";
                // line 171
                if (($this->getAttribute(($context["solicitud"] ?? null), "clasificacion", array()) == "")) {
                    echo " style=\"display:none\" ";
                }
                echo ">
                \t<div class=\"alert alert-info\" role=\"alert\"><p>Atención de la solicitud</p></div>
                    <div class=\"col-md-4\">
                    \t<p>
                        \t<label>Clasificación:</label>
                        \t<span>";
                // line 176
                echo twig_escape_filter($this->env, $this->getAttribute(($context["solicitud"] ?? null), "clasificacion", array()), "html", null, true);
                echo "</span>
                        </p>
                        <p>
                        \t<label>Ultima actualización:</label>
                        \t<span>";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute(($context["solicitud"] ?? null), "actualizacion", array()), "html", null, true);
                echo "</span>
                        </p>
                        <p>
                        \t<label>Medio de reporte:</label>
                        \t<span>";
                // line 184
                echo twig_escape_filter($this->env, $this->getAttribute(($context["solicitud"] ?? null), "medio", array()), "html", null, true);
                echo "</span>
                        </p>
                    </div>
                    <div class=\"col-md-3\">                        
                        <p>
                        \t<label>Estado:</label>
                        \t<span>";
                // line 190
                echo twig_escape_filter($this->env, $this->getAttribute(($context["solicitud"] ?? null), "estado", array()), "html", null, true);
                echo "</span>
                        </p>
                        <p>
                            <label>Atendida por:</label>
                            <span>";
                // line 194
                echo twig_escape_filter($this->env, $this->getAttribute(($context["solicitud"] ?? null), "atendido", array()), "html", null, true);
                echo "</span>
                        </p>
                    </div>
                    <div class=\"col-md-5\">
                    \t<p>
                        \t<label>Descripción de la atención:</label>
    \t                    <span>";
                // line 200
                echo twig_escape_filter($this->env, $this->getAttribute(($context["solicitud"] ?? null), "actividades", array()), "html", null, true);
                echo "</span>
    \t                </p>
                    </div>
                </div>
                <div class=\"row\">
                \t<form data-request=\"onRegresar\">
                    \t<div class=\"col-md-12\">
                    \t\t<input type=\"submit\" name=\"regresar\" id=\"regresar\" class=\"btn btn-primary\" value=\"Regresar\"/>
                    \t</div>
                \t</form>
                </div>
                
            </div>
        </div>
    ";
            }
        } else {
            // line 216
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("acceso"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        }
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\intranet_redes/themes/rainlab-vanilla/pages/sistemas/consultar_solicitud.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 216,  468 => 200,  459 => 194,  452 => 190,  443 => 184,  436 => 180,  429 => 176,  419 => 171,  413 => 168,  406 => 164,  399 => 160,  389 => 153,  382 => 149,  372 => 142,  365 => 138,  358 => 134,  346 => 124,  333 => 116,  327 => 112,  323 => 111,  311 => 104,  305 => 103,  299 => 102,  293 => 101,  282 => 95,  276 => 94,  270 => 93,  264 => 92,  258 => 91,  250 => 86,  240 => 81,  234 => 80,  228 => 79,  222 => 78,  216 => 77,  204 => 70,  198 => 69,  192 => 68,  186 => 67,  180 => 66,  174 => 65,  168 => 64,  162 => 63,  156 => 62,  150 => 61,  144 => 60,  138 => 59,  132 => 58,  126 => 57,  120 => 56,  114 => 55,  108 => 54,  102 => 53,  96 => 52,  87 => 46,  77 => 39,  67 => 32,  60 => 28,  50 => 21,  43 => 17,  36 => 13,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%if user.name %}
    {% if can('helpdesk') %}
        <div class=\"panel panel-primary\"> 
            <div class=\"panel-heading\"> 
                <h3 class=\"panel-title\">ATENCION DE SOLICITUDES HELP DESK</h3>
            </div> 
            <div class=\"panel-body\">
                <form data-request=\"onSave\" data-request-update=\"resultados: '#resultado'\">
                    <div class=\"row\">                   
                        <div class=\"col-md-4\">
                            <p>
                                <label>Id:</label>
                                <span>{{ control.id }}</span>
                            </p>
                            <p>
                                <label>Fecha de creación:</label>
                                <span>{{ control.creacion }}</span>
                            </p>
                            <p>
                                <label>Usuario:</label>
                                <span>{{ control.reportado_por }}</span>
                            </p>
                        </div>
                        <div class=\"col-md-3\">
                            
                            <p>
                                <label>Tipificación:</label>
                                <span>{{ control.tipificacion }}</span>
                            </p>
                            <p>
                                <label>Asunto:</label>
                                <span>{{ control.asunto }}</span>
                            </p>
                        </div>
                        
                        <div class=\"col-md-5\">                            
                            <p>
                                <label>Descripción de la solicitud:</label>
                                <span>{{ control.descripcion }}</span>
                            </p>
                        </div>                        
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <label for=\"reportado_por\">Reportado por:</label>
                            <input type=\"text\" id=\"reportado_por\" name=\"reportado_por\" class=\"form-control\" value=\"{{ control.reportado_por }}\"/>
                        </div>
                        <div class=\"col-md-4\">
                            <label for=\"clasificacion\">Clasificación:</label>
                            <select id=\"clasificacion\" name=\"clasificacion\" class=\"form-control\">
                                <option value=\"\">--Seleccione--</option>
                                <option value=\"Aplicación Antares\" {% if control.clasificacion ==\"Aplicación Antares\" %} selected {% endif %}>Aplicación Antares</option>
                                <option value=\"Aplicación SAP\" {% if control.clasificacion ==\"Aplicación SAP\" %} selected {% endif %}>Aplicación SAP</option>
                                <option value=\"Aplicación 360\" {% if control.clasificacion ==\"Aplicación 360\" %} selected {% endif %}>Aplicación 360</option>
                                <option value=\"Aplicación Core Manager\" {% if control.clasificacion ==\"Aplicación Core Manager\" %} selected {% endif %}>Aplicación Core Manager</option>
                                <option value=\"Intranet\" {% if control.clasificacion ==\"Intranet\" %} selected {% endif %}>Intranet</option>
                                <option value=\"Docunet\" {% if control.clasificacion ==\"Docunet\" %} selected {% endif %}>Docunet</option>
                                <option value=\"Comunicaciones\" {% if control.clasificacion ==\"Comunicaciones\" %} selected {% endif %}>Comunicaciones</option>
                                <option value=\"Correo Google Apps\" {% if control.clasificacion ==\"Correo Google Apps\" %} selected {% endif %}>Correo Google Apps</option>
                                <option value=\"Correo Historico Zimbra\" {% if control.clasificacion ==\"Correo Historico Zimbra\" %} selected {% endif %}>Correo Historico Zimbra</option>
                                <option value=\"Computador de Escritorio\" {% if control.clasificacion ==\"Computador de Escritorio\" %} selected {% endif %}>Computador de Escritorio</option>
                                <option value=\"Computador de Portatil\" {% if control.clasificacion ==\"Computador de Portatil\" %} selected {% endif %}>Computador de Portatil</option>
                                <option value=\"Impresora\" {% if control.clasificacion ==\"Impresora\" %} selected {% endif %}>Impresora</option>
                                <option value=\"Dispositivos\" {% if control.clasificacion ==\"Dispositivos\" %} selected {% endif %}>Dispositivos</option>
                                <option value=\"Partes\" {% if control.clasificacion ==\"Partes\" %} selected {% endif %}>Partes</option>
                                <option value=\"Insumos\" {% if control.clasificacion ==\"Insumos\" %} selected {% endif %}>Insumos</option>
                                <option value=\"Ofimática\" {% if control.clasificacion ==\"Ofimática\" %} selected {% endif %}>Ofimática</option>
                                <option value=\"Creación ARL\" {% if control.clasificacion ==\"Creación ARL\" %} selected {% endif %}>Creación ARL</option>
                                <option value=\"Instalación Software\" {% if control.clasificacion ==\"Instalación Software\" %} selected {% endif %}>Instalación Software</option>
                                <option value=\"Otros\" {% if control.clasificacion ==\"Otros\" %} selected {% endif %}>Otros</option>
                            </select>
                        </div>
                        <div class=\"col-md-4\">
                            <label for=\"medio\">Medio de reporte:</label>
                            <select id=\"medio\" name=\"medio\" class=\"form-control\">
                                <option value=\"\">--Seleccione--</option>
                                <option value=\"Intranet\" {% if control.medio ==\"Intranet\" %} selected {% endif %}>Intranet</option>
                                <option value=\"Correo Electrónico\" {% if control.medio ==\"Correo Electrónico\" %} selected {% endif %}>Correo Electronico</option>
                                <option value=\"Llamada Telefónica\" {% if control.medio ==\"Llamada Telefónica\" %} selected {% endif %}>Llamada Telefonica</option>
                                <option value=\"Mensaje de Texto\" {% if control.medio ==\"Mensaje de Texto\" %} selected {% endif %}>Mensaje de Texto</option>
                                <option value=\"Lineamiento de la dirección\" {% if control.medio ==\"Lineamiento de la dirección\" %} selected {% endif %}>Lineamiento de la Direccion</option>
                            </select>
                        </div>
                        <div class=\"col-md-12\">
                            <label for=\"actividades\">Actividades realizadas:</label>
                            <textarea id=\"actividades\" name=\"actividades\" class=\"form-control\">{{ control.actividades }}</textarea>
                        </div>  
                        <div class=\"col-md-4\">
                            <label for=\"estado\">Estado:</label>
                            <select id=\"estado\" name=\"estado\" class=\"form-control\">
                                <option value=\"Abierto\" {% if control.estado ==\"Abierto\" %} selected {% endif %}>Abierto</option>
                                <option value=\"Pendiente\" {% if control.estado ==\"Pendiente\" %} selected {% endif %}>Pendiente</option>
                                <option value=\"En curso\" {% if control.estado ==\"En curso\" %} selected {% endif %}>En curso</option>
                                <option value=\"Cerrado\" {% if control.estado ==\"Cerrado\" %} selected {% endif %}>Cerrado</option>
                                <option value=\"Resuelto\" {% if control.estado ==\"Resuelto\" %} selected {% endif %}>Resuelto</option>
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <label for=\"prioridad\">Prioridad:</label>
                            <select id=\"prioridad\" name=\"prioridad\" class=\"form-control\">
                                <option value=\"Baja\" {% if control.prioridad ==\"Baja\" %} selected {% endif %}>Baja</option>
                                <option value=\"Media\" {% if control.prioridad ==\"Media\" %} selected {% endif %}>Media</option>
                                <option value=\"Alta\" {% if control.prioridad ==\"Alta\" %} selected {% endif %}>Alta</option>
                                <option value=\"Urgente\" {% if control.prioridad ==\"Urgente\" %} selected {% endif %}>Urgente</option>
                            </select>
                        </div>
                    </div>   
                    <hr>
                    <div class=\"row\">
                        <div id=\"resultado\" class=\"col-md-12\">
                            {% partial 'resultados' %}
                            <input type=\"submit\" name=\"regresar\" id=\"regresar\" data-request=\"onRegresaradm\" class=\"btn btn-success\" value=\"Regresar\"/>
                        </div>
                        <div class=\"col-md-12\">
                            <span for=\"atendido\">Atendido por:</span>
                            <label>{{ user.name }} {{ user.surname }}</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr>
    {% else %}
    
        <div class=\"panel panel-primary\"> 
            <div class=\"panel-heading\"> 
                <h3 class=\"panel-title\">Consulta de solicitud</h3>
            </div> 
            <div class=\"panel-body\">            
                <div class=\"row\">            \t\t
                    <div class=\"col-md-4\">
                    \t<p>
                        \t<label>Id:</label>
                        \t<span>{{ solicitud.id }}</span>
                        </p>
                        <p>
                        \t<label>Fecha de creación:</label>
                        \t<span>{{ solicitud.creacion }}</span>
                        </p>
                        <p>
                        \t<label>Usuario:</label>
                        \t<span>{{ solicitud.reportado_por }}</span>
                        </p>
                    </div>
                    <div class=\"col-md-3\">
                        
                        <p>
                        \t<label>Tipificación:</label>
                        \t<span>{{ solicitud.tipificacion }}</span>
                        </p>
                        <p>
                            <label>Prioridad:</label>
                            <span>{{ solicitud.prioridad }}</span>
                        </p>
                    </div>
                    
                    <div class=\"col-md-5\">
                    \t<p>
                        \t<label>Asunto:</label>
                        \t<span>{{ solicitud.asunto }}</span>
                        </p>
                    \t<p>
                        \t<label>Descripción de la solicitud:</label>
    \t                    <span>{{ solicitud.descripcion }}</span>
    \t                </p>
                    </div>
                    <div class=\"col-md-12\" style=\"display:none\">
                    \t<input type=\"text\" id=\"reportado_por\" name=\"reportado_por\" class=\"form-control\" value=\"{{ user.username }}\"/>
                    </div>
                </div>
                <div class=\"row\" {% if solicitud.clasificacion==\"\" %} style=\"display:none\" {% endif %}>
                \t<div class=\"alert alert-info\" role=\"alert\"><p>Atención de la solicitud</p></div>
                    <div class=\"col-md-4\">
                    \t<p>
                        \t<label>Clasificación:</label>
                        \t<span>{{ solicitud.clasificacion }}</span>
                        </p>
                        <p>
                        \t<label>Ultima actualización:</label>
                        \t<span>{{ solicitud.actualizacion }}</span>
                        </p>
                        <p>
                        \t<label>Medio de reporte:</label>
                        \t<span>{{ solicitud.medio }}</span>
                        </p>
                    </div>
                    <div class=\"col-md-3\">                        
                        <p>
                        \t<label>Estado:</label>
                        \t<span>{{ solicitud.estado }}</span>
                        </p>
                        <p>
                            <label>Atendida por:</label>
                            <span>{{ solicitud.atendido }}</span>
                        </p>
                    </div>
                    <div class=\"col-md-5\">
                    \t<p>
                        \t<label>Descripción de la atención:</label>
    \t                    <span>{{ solicitud.actividades }}</span>
    \t                </p>
                    </div>
                </div>
                <div class=\"row\">
                \t<form data-request=\"onRegresar\">
                    \t<div class=\"col-md-12\">
                    \t\t<input type=\"submit\" name=\"regresar\" id=\"regresar\" class=\"btn btn-primary\" value=\"Regresar\"/>
                    \t</div>
                \t</form>
                </div>
                
            </div>
        </div>
    {% endif %}
{% else %}
    {% partial 'acceso' %}
{% endif %}", "D:\\xampp\\htdocs\\intranet_redes/themes/rainlab-vanilla/pages/sistemas/consultar_solicitud.htm", "");
    }
}
