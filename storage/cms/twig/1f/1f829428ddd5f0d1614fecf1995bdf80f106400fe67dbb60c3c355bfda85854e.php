<?php

/* E:\xampp\htdocs\redes_humanas/themes/rainlab-vanilla/pages/guias/guia_detalle.htm */
class __TwigTemplate_bcb66578eae8d2a8291c16c13657b473ceca5fbeebd7e1c2b1aacb5dda6385b6 extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
<link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
<script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script>
\$( function() {
\$( \"#fecha_inscripcion_cc\" ).datepicker({ dateFormat: 'yy-mm-dd' });
} );

</script>
<form data-request=\"onSave\" data-request-update=\"resultados_update: '#resultado'\">
    <div class=\"row\">
        <div class=\"col-md-2 col-md-offset-8\">
            <span for=\"id\">No de registro:</span>
            <input type=\"text\" id=\"id\" name=\"id\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "id", array()), "html", null, true);
        echo "\" readonly class=\"form-control\">
        </div>
        <div class=\"col-md-2\">
            <span for=\"estado_registro\">Estado:</span>
            <select id=\"estado_registro\" name=\"estado_registro\" class=\"form-control\">
            <option value=\"Activo\" ";
        // line 20
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "estado_registro", array()) == "Activo")) {
            echo "selected";
        }
        echo ">Activo</option>
            <option value=\"Inactivo\" ";
        // line 21
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "estado_registro", array()) == "Inactivo")) {
            echo "selected";
        }
        echo ">Inactivo</option>
            </select>
        </div>
    </div>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <span for=\"empresa\">Empresa:</span>
            <input type=\"text\" id=\"empresa\" name=\"empresa\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "empresa", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>

        <div class=\"col-md-3\">
            <span for=\"no_contrato\">No. Contrato:</span>
            <input type=\"text\" id=\"no_contrato\" name=\"no_contrato\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "no_contrato", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>

        <div class=\"col-md-2\">
            <span for=\"nit\">NIT:</span>
            <input type=\"text\" id=\"nit\" readonly name=\"nit\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "nit", array()), "html", null, true);
        echo "\"  class=\"form-control\">
        </div>
        
        <div class=\"col-md-2\">
            <span for=\"aiu\">AIU:</span>
            <input type=\"text\" id=\"aiu\" readonly name=\"aiu\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "aiu", array()), "html", null, true);
        echo "\"  class=\"form-control\">
        </div>
        
        <div class=\"col-md-6\">
            <span for=\"representante\">Representante Cta:</span>
            <input type=\"text\" id=\"responsable_cta\" name=\"responsable_cta\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "responsable_cta", array()), "html", null, true);
        echo "\"  class=\"form-control\">
        </div>

        <div class=\"col-md-6\">
            <span for=\"act_economica\">Act. Económica:</span>
            <input type=\"text\" id=\"act_economica\" name=\"act_economica\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "act_economica", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>

        <div class=\"col-md-6\">
            <span for=\"representante_legal\">Representante legal:</span>
            <input type=\"text\" id=\"representante_legal\" name=\"representante_legal\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "representante_legal", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>
        
        <div class=\"col-md-2\">
            <span for=\"cedula\">Cédula:</span>
            <input type=\"text\" id=\"cedula\" name=\"cedula\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "cedula", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>
        
        <div class=\"col-md-4\">
            <span for=\"cargo_representante\">Cargo representante:</span>
            <input type=\"text\" id=\"cargo_representante\" name=\"cargo_representante\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "cargo_representante", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>

        <div class=\"col-md-6\">
            <span for=\"jefe_rrhh\">Jefe RRHH:</span>
            <input type=\"text\" id=\"jefe_rrhh\" name=\"jefe_rrhh\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "jefe_rrhh", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>
        
        <div class=\"col-md-4\">
            <span for=\"direccion\">Dirección:</span>
            <input type=\"text\" id=\"direccion\" name=\"direccion\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "direccion", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>

        <div class=\"col-md-2\">
            <span for=\"ciudad\">Ciudad:</span>
            <input type=\"text\" id=\"ciudad\" name=\"ciudad\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "ciudad", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>
        
        <div class=\"col-md-3\">
            <span for=\"telefono\">Teĺéfono:</span>
            <input type=\"text\" id=\"telefono\" name=\"telefono\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "telefono", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>
        
        <div class=\"col-md-3\">
            <span for=\"fecha_inscripcion_cc\">Fecha Inscripción CC:</span>
            <input type=\"text\" id=\"fecha_inscripcion_cc\" name=\"fecha_inscripcion_cc\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "fecha_inscripcion_cc", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>

        <div class=\"col-md-6\">
            <span for=\"pagina_web\">Web:</span>
            <input type=\"text\" id=\"pagina_web\" name=\"pagina_web\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "pagina_web", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>
        
        <div class=\"col-md-12\">
            <span for=\"info_gestion_comercial\">Información adicional (Gestión Comercial):</span>
            <textarea class=\"form-control\" id=\"info_gestion_comercial\" name=\"info_gestion_comercial\">";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "info_gestion_comercial", array()), "html", null, true);
        echo "</textarea>
        </div>
        <hr>
        <div class=\"col-md-12\">
            <span for=\"info_servicio_cliente\">Información adicional (Servicio al Cliente):</span>
            <textarea class=\"form-control\" id=\"info_servicio_cliente\" name=\"info_servicio_cliente\">";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "info_servicio_cliente", array()), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"col-md-3\">
            <span for=\"neg_especiales\">Negociaciones especiales de fuero?</span>
            <select id=\"cmb_neg_especiales\" name=\"cmb_neg_especiales\" class=\"form-control\">
                <option value=\"Si\"";
        // line 114
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "cmb_neg_especiales", array()) == "Si")) {
            echo "selected";
        }
        echo ">Si</option>
                <option value=\"No\"";
        // line 115
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "cmb_neg_especiales", array()) == "No")) {
            echo "selected";
        }
        echo ">No</option>
            </select>                    
        </div>
        <div id=\"div_neg_especiales\" ";
        // line 118
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "cmb_neg_especiales", array()) == "No")) {
            echo " style=\"display:none\" ";
        }
        echo " class=\"col-md-9\">
            <span>Cúal?:</span>
            <textarea class=\"form-control\" id=\"neg_especiales\" name=\"neg_especiales\">";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "neg_especiales", array()), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"col-md-12\">
            <span>Profesiograma:</span>
            ";
        // line 124
        if (($this->getAttribute((isset($context["profesiograma"]) ? $context["profesiograma"] : null), "adjunto", array()) == "")) {
            // line 125
            echo "                <a href=\"../profesiograma/";
            echo twig_escape_filter($this->env, (isset($context["id_guia"]) ? $context["id_guia"] : null), "html", null, true);
            echo "\" target=\"_top\" >Agregar profesiograma</a>
            ";
        } else {
            // line 127
            echo "                <a href=\"../profesiograma/";
            echo twig_escape_filter($this->env, (isset($context["id_guia"]) ? $context["id_guia"] : null), "html", null, true);
            echo "\" target=\"_top\" >ver profesiograma</a>
            ";
        }
        // line 129
        echo "        </div>
    </div>
    <hr>
    <div class=\"alert alert-info\" role=\"alert\"><p>SUMINISTROS</p></div>
    <div class=\"row\">
        <div class=\"col-md-8\">
            <span for=\"dotacion\">Tipo dotacion:</span>
            <textarea class=\"form-control\" id=\"dotacion\" name=\"dotacion\">";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "dotacion", array()), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"col-md-4\">
            <span for=\"quien_entrega\">Quién entrega dotación?:</span>
            <select class=\"form-control\" id=\"quien_entrega\" name=\"quien_entrega\">
                <option value =\"\">--Seleccione--</option>
                <option value=\"Redes Humanas\"  ";
        // line 142
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "quien_entrega", array()) == "Redes Humanas")) {
            echo "selected";
        }
        echo ">Redes Humanas</option>
                <option value=\"Empresa Usuaria\"  ";
        // line 143
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "quien_entrega", array()) == "Empresa Usuaria")) {
            echo "selected";
        }
        echo ">Empresa Usuaria</option>
            </select>
        </div>
        <div class=\"col-md-12\">
            <span for=\"info_dotacion\">Información Adicional:</span>
            <textarea class=\"form-control\" id=\"info_dotacion\" name=\"info_dotacion\">";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "info_dotacion", array()), "html", null, true);
        echo "</textarea>
        </div>
    </div>
    <hr>
    <div class=\"alert alert-info\" role=\"alert\"><p>SERVICIO AL CLIENTE</p></div>                
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <span for=\"contacto_atc\">Contacto:</span>
                    <input type=\"text\" id=\"contacto_atc\" name=\"contacto_atc\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "contacto_atc", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
                <div class=\"col-md-6\">
                    <span for=\"frecuencia_visita\">Frecuencia de visita:</span>
                    <input type=\"text\" id=\"frecuencia_visita\" name=\"frecuencia_visita\" value=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "frecuencia_visita", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
                <div class=\"col-md-6\">
                    <span for=\"facilitador\">Se asigna facilitador?:</span>
                    <select id=\"facilitador\" name=\"facilitador\" class=\"form-control\">
                        <option value=\"Si\"";
        // line 165
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "facilitador", array()) == "Si")) {
            echo "selected";
        }
        echo ">Si</option>
                        <option value=\"No\"";
        // line 166
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "facilitador", array()) == "No")) {
            echo "selected";
        }
        echo ">No</option>                        
                    </select>
                    <div id=\"div_facilitador\" ";
        // line 168
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "facilitador", array()) == "No")) {
            echo "style=\"display:none\"";
        }
        echo ">
                        <span>Facilitador:</span>
                        <input type=\"text\" name=\"cual_facilitador\" id=\"cual_facilitador\" value=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "cual_facilitador", array()), "html", null, true);
        echo "\" class=\"form-control\"/>
                    </div>
                </div>                
                <div class=\"col-md-6\">
                    <span for=\"horarios_atencion\">Horarios de atención:</span>
                    <input type=\"text\" id=\"horarios_atencion\" name=\"horarios_atencion\"  value=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "horarios_atencion", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>

                <div class=\"col-md-12\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <u>Sitio de atención 1:</u>
                         </div>       
                    </div>
                    <div class=\"col-md-6\">
                        <span for=\"contacto_sitio_atc1\">Contacto:</span>
                        <input type=\"text\" id=\"contacto_sitio_atc1\" name=\"contacto_sitio_atc1\"  value=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "contacto_sitio_atc1", array()), "html", null, true);
        echo "\" class=\"form-control\">
                    </div>
                    <div class=\"col-md-6\">
                        <span for=\"cargo_sitio_atc1\">Cargo:</span>
                        <input type=\"text\" id=\"cargo_sitio_atc1\" name=\"cargo_sitio_atc1\"  value=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "cargo_sitio_atc1", array()), "html", null, true);
        echo "\" class=\"form-control\">
                    </div>
                    <div class=\"col-md-6\">
                        <span for=\"correo_sitio_atc1\">Correo:</span>
                        <input type=\"text\" id=\"correo_sitio_atc1\" name=\"correo_sitio_atc1\"  value=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "correo_sitio_atc1", array()), "html", null, true);
        echo "\" class=\"form-control\">
                    </div>
                    <div class=\"col-md-6\">
                        <span for=\"tel_sitio_atc1\">Teléfono:</span>
                        <input type=\"text\" id=\"tel_sitio_atc1\" name=\"tel_sitio_atc1\"  value=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "tel_sitio_atc1", array()), "html", null, true);
        echo "\" class=\"form-control\">
                    </div>
                </div>

                <div class=\"col-md-12\">                    
                    <input name=\"chk_mas_sitios\" type=\"checkbox\" value=\"Si\" id=\"chk_mas_sitios\" />
                    <span>Mostrar mas sitios?</span>
                </div>

                <div class=\"col-md-12\" id=\"div_sitio2\" style=\"display:none\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <u>Sitio de atención 2:</u>
                         </div>       
                    </div>
                    <div class=\"col-md-6\">
                        <span for=\"contacto_sitio_atc2\">Contacto:</span>
                        <input type=\"text\" id=\"contacto_sitio_atc2\" name=\"contacto_sitio_atc2\"  value=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "contacto_sitio_atc2", array()), "html", null, true);
        echo "\" class=\"form-control\">
                    </div>
                    <div class=\"col-md-6\">
                        <span for=\"cargo_sitio_atc2\">Cargo:</span>
                        <input type=\"text\" id=\"cargo_sitio_atc2\" name=\"cargo_sitio_atc2\"  value=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "cargo_sitio_atc2", array()), "html", null, true);
        echo "\" class=\"form-control\">
                    </div>
                    <div class=\"col-md-6\">
                        <span for=\"correo_sitio_atc2\">Correo:</span>
                        <input type=\"text\" id=\"correo_sitio_atc2\" name=\"correo_sitio_atc2\"  value=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "correo_sitio_atc2", array()), "html", null, true);
        echo "\" class=\"form-control\">
                    </div>
                    <div class=\"col-md-6\">
                        <span for=\"tel_sitio_atc2\">Teléfono:</span>
                        <input type=\"text\" id=\"tel_sitio_atc2\" name=\"tel_sitio_atc2\"  value=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "tel_sitio_atc2", array()), "html", null, true);
        echo "\" class=\"form-control\">
                    </div>
                </div>

                <div class=\"col-md-12\"  id=\"div_sitio3\" style=\"display:none\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <u>Sitio de atención 3:</u>
                         </div>       
                    </div>
                    <div class=\"col-md-6\">
                        <span for=\"contacto_sitio_atc3\">Contacto:</span>
                        <input type=\"text\" id=\"contacto_sitio_atc3\" name=\"contacto_sitio_atc3\"  value=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "contacto_sitio_atc3", array()), "html", null, true);
        echo "\" class=\"form-control\">
                    </div>
                    <div class=\"col-md-6\">
                        <span for=\"cargo_sitio_atc3\">Cargo:</span>
                        <input type=\"text\" id=\"cargo_sitio_atc3\" name=\"cargo_sitio_atc3\"  value=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "cargo_sitio_atc3", array()), "html", null, true);
        echo "\" class=\"form-control\">
                    </div>
                    <div class=\"col-md-6\">
                        <span for=\"correo_sitio_atc3\">Correo:</span>
                        <input type=\"text\" id=\"correo_sitio_atc3\" name=\"correo_sitio_atc3\"  value=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "correo_sitio_atc3", array()), "html", null, true);
        echo "\" class=\"form-control\">
                    </div>
                    <div class=\"col-md-6\">
                        <span for=\"tel_sitio_atc3\">Teléfono:</span>
                        <input type=\"text\" id=\"tel_sitio_atc3\" name=\"tel_sitio_atc3\"  value=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "tel_sitio_atc3", array()), "html", null, true);
        echo "\" class=\"form-control\">
                    </div>
                </div>

                <div class=\"col-md-12\">
                    <span for=\"info_adiciona_atc\">Comentarios adicionales:</span>
                    <textarea class=\"form-control\" id=\"info_adiciona_atc\" name=\"info_adiciona_atc\">";
        // line 257
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "info_adiciona_atc", array()), "html", null, true);
        echo "</textarea>
                </div>
            </div>
            <hr>
    <div class=\"alert alert-info\" role=\"alert\"><p>HSE - SYSO</p></div>
  
    <div class=\"row\">
        <div class=\"col-md-6\">
            <span for=\"contacto_salud\">Contacto SST:</span>
            <input type=\"text\" id=\"contacto_salud\" name=\"contacto_salud\" value=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "contacto_salud", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>
         <div class=\"col-md-6\">
            <span for=\"cargo_contacto\">Cargo del contacto:</span>
            <input type=\"text\" id=\"cargo_contacto\" name=\"cargo_contacto\" value=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "cargo_contacto", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>
         <div class=\"col-md-6\">
            <span for=\"email_contacto\">Email del contacto:</span>
            <input type=\"text\" id=\"email_contacto\" name=\"email_contacto\" value=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "email_contacto", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>
         <div class=\"col-md-6\">
            <span for=\"telefono_contacto\">Teléfono del contacto:</span>
            <input type=\"text\" id=\"telefono_contacto\" name=\"telefono_contacto\" value=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "telefono_contacto", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>
        <div class=\"col-md-6\">
            <span for=\"arl_base\">ARL base:</span>
            <input type=\"text\" id=\"arl_base\" name=\"arl_base\" value=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "arl_base", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>
         <div class=\"col-md-6\">
            <span for=\"tasa_riesgo\">Tasa de riesgo:</span>
            <input type=\"text\" id=\"tasa_riesgo\" name=\"tasa_riesgo\" value=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "tasa_riesgo", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>
    </div>
    
    <hr>
    <div class=\"alert alert-info\" role=\"alert\"><p>SELECCIÓN</p></div>
    ";
        // line 292
        if ((isset($context["id_perfiles"]) ? $context["id_perfiles"] : null)) {
            // line 293
            echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <a href=\"../ver_perfiles/";
            // line 295
            echo twig_escape_filter($this->env, (isset($context["id_perfiles"]) ? $context["id_perfiles"] : null), "html", null, true);
            echo "\">Click aquí para consultar los perfiles de cargo asociados.</a>
            </div>      
        </div>
    ";
        } else {
            // line 299
            echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <a href=\"../perfiles/";
            // line 301
            echo twig_escape_filter($this->env, (isset($context["id_guia_actual"]) ? $context["id_guia_actual"] : null), "html", null, true);
            echo "\">Click aquí para asociar los perfiles de cargo.</a>
            </div>      
        </div>
    ";
        }
        // line 305
        echo "    <div class=\"row\">
        <div class=\"col-md-4\">
            <span for=\"contacto_seleccion\">Contacto selección:</span>
            <input type=\"text\" id=\"contacto_seleccion\" name=\"contacto_seleccion\" value=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "contacto_seleccion", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>
         <div class=\"col-md-3\">
            <span for=\"cargo_seleccion\">Cargo del contacto:</span>
            <input type=\"text\" id=\"cargo_seleccion\" name=\"cargo_seleccion\" value=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "cargo_seleccion", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>
        <div class=\"col-md-3\">
            <span for=\"email_seleccion\">Email del contacto:</span>
            <input type=\"text\" id=\"email_seleccion\" name=\"email_seleccion\" value=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "email_seleccion", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>
         <div class=\"col-md-2\">
            <span for=\"telefono_seleccion\">Tel del contacto:</span>
            <input type=\"text\" id=\"telefono_seleccion\" name=\"telefono_seleccion\" value=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "telefono_seleccion", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>
        <div class=\"col-md-3\">
                    <span for=\"celular_seleccion\">Celular:</span>
                    <input type=\"text\" id=\"celular_seleccion\" name=\"celular_seleccion\" value=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "celular_seleccion", array()), "html", null, true);
        echo "\" class=\"form-control\">
                </div>
        <div class=\"col-md-3\">
            <span for=\"cargo_proveer\">Cargos a proveer:</span>
            <input type=\"text\" id=\"cargo_proveer\" name=\"cargo_proveer\" value=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "cargo_proveer", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>        
        <div class=\"col-md-3\">
            <span for=\"require_informe\">Requiere informe:</span>
            <select id=\"require_informe\" name=\"require_informe\" class=\"form-control\">
                <option value=\"\">-- Sel --</option>
                <option value=\"Si\" ";
        // line 334
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "require_informe", array()) == "Si")) {
            echo "selected";
        }
        echo ">Si</option>
                <option value=\"No\" ";
        // line 335
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "require_informe", array()) == "No")) {
            echo "selected";
        }
        echo ">No</option>
            </select>
        </div>
        <div class=\"col-md-3\">
            <span for=\"cual_informe\">Cual?:</span>
            <select id=\"cual_informe\" name=\"cual_informe\" class=\"form-control\" ";
        // line 340
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "cual_informe", array()) == "")) {
            echo "disabled";
        }
        echo ">
                <option value=\"\">-- Sel --</option>
                <option value=\"Indicadores\" ";
        // line 342
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "cual_informe", array()) == "Indicadores")) {
            echo "selected";
        }
        echo ">Indicadores</option>
                <option value=\"BD mes anterior\" ";
        // line 343
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "cual_informe", array()) == "BD mes anterior")) {
            echo "selected";
        }
        echo ">BD mes anterior</option>
                <option value=\"Indicadores y BD\" ";
        // line 344
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "cual_informe", array()) == "Indicadores y BD")) {
            echo "selected";
        }
        echo ">Indicadores y BD</option>
            </select>
        </div>
        <div class=\"col-md-3\">
            <span for=\"restriccion_familiares\">Restricción de familiares:</span>
            <select id=\"restriccion_familiares\" name=\"restriccion_familiares\" class=\"form-control\">
                <option value=\"\">-- Sel --</option>
                <option value=\"Si\" ";
        // line 351
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "restriccion_familiares", array()) == "Si")) {
            echo "selected";
        }
        echo ">Si</option>
                <option value=\"No\" ";
        // line 352
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "restriccion_familiares", array()) == "No")) {
            echo "selected";
        }
        echo ">No</option>
            </select>
        </div>
        
        <div class=\"col-md-3\">
            <span for=\"horarios\">Horarios:</span>
            <input type=\"text\" id=\"horarios\" name=\"horarios\" value=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "horarios", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>

        <div class=\"col-md-3\">
            <span for=\"entidad_bancaria\">Entidad bancaria:</span>
            <input type=\"text\" id=\"entidad_bancaria\" name=\"entidad_bancaria\" value=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "entidad_bancaria", array()), "html", null, true);
        echo "\" class=\"form-control\">
        </div>
        <div class=\"col-md-12\">
            <span for=\"pruebas_psicotecnicas\">Pruebas psicotécnicas:</span>
            <ul>
            ";
        // line 368
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pruebas"]) ? $context["pruebas"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["prueba"]) {
            // line 369
            echo "                <li style=\"float:left; list-style:none; margin-left:5px\">                           
                    <input name=\"chk_pruebas_";
            // line 370
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prueba"], "id", array()), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prueba"], "estado", array()), "html", null, true);
            echo " type=\"checkbox\" />
                    <span>";
            // line 371
            echo twig_escape_filter($this->env, $this->getAttribute($context["prueba"], "descripcion", array()), "html", null, true);
            echo "</span>                                     
                </li>                    
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prueba'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 374
        echo "            </ul>
        </div>
        <div class=\"col-md-12\">
            <span for=\"info_adicional_seleccion\">Información adicional selección:</span>
            <textarea class=\"form-control\" id=\"info_adicional_seleccion\" name=\"info_adicional_seleccion\">";
        // line 378
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "info_adicional_seleccion", array()), "html", null, true);
        echo "</textarea>
        </div>
    </div>
    <hr>
        <div class=\"alert alert-info\" role=\"alert\"><p>CONTRATACIÓN</p></div>
      
        <div class=\"row\">
            <div class=\"col-md-4\">
                <span for=\"contacto_contratacion\">Contacto contratación:</span>
                <input type=\"text\" id=\"contacto_contratacion\" name=\"contacto_contratacion\" value=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "contacto_contratacion", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
                <span for=\"cargo_contratacion\">Cargo contacto:</span>
                <input type=\"text\" id=\"cargo_contratacion\" name=\"cargo_contratacion\" value=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "cargo_contratacion", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
                <span for=\"email_contratacion\">Email concacto:</span>
                <input type=\"text\" id=\"email_contratacion\" name=\"email_contratacion\" value=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "email_contratacion", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
                <span for=\"telefono_contratacion\">Telefono contacto:</span>
                <input type=\"text\" id=\"telefono_contratacion\" name=\"telefono_contratacion\" value=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "telefono_contratacion", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
                <span for=\"examen_medico\">Pago exámen médico:</span>
                <input type=\"text\" id=\"examen_medico\" name=\"examen_medico\" value=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "examen_medico", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
                <span for=\"otros_examenes\">Otros exámenes (Facturables):</span>
                <input type=\"text\" id=\"otros_examenes\" name=\"otros_examenes\" value=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "otros_examenes", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
                    <span for=\"quien_paga\">Quién paga el exámen?:</span>
                    <select class=\"form-control\" id=\"quien_paga\" name=\"quien_paga\">
                        <option value =\"\">--Seleccione--</option>
                        <option value=\"Redes Humanas\" ";
        // line 413
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "quien_paga", array()) == "Redes Humanas")) {
            echo "selected";
        }
        echo " >Redes Humanas</option>
                        <option value=\"Empresa Usuaria\"";
        // line 414
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "quien_paga", array()) == "Empresa Usuaria")) {
            echo "selected";
        }
        echo " >Empresa Usuaria</option>
                    </select>
                </div>
            <div class=\"col-md-4\">
                <span for=\"laboratorio\">Laboratorio especificado asignado:</span>
                <input type=\"text\" id=\"laboratorio\" name=\"laboratorio\" value=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "laboratorio", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
                <span for=\"diferentes_centros_costo\">Los trabajadores son asignados a diferentes centros de costo:</span>
                <select id=\"diferentes_centros_costo\" name=\"diferentes_centros_costo\" class=\"form-control\">
                <option>--Seleccione--</option>
                <option value =\"Si\" ";
        // line 425
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "diferentes_centros_costo", array()) == "Si")) {
            echo "selected";
        }
        echo ">Si</option>
                <option value=\"No\" ";
        // line 426
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "diferentes_centros_costo", array()) == "No")) {
            echo "selected";
        }
        echo ">No</option>
                </select>
            </div>
            <div class=\"col-md-4\">
                 Mostrar mas contactos: <input name=\"chk_contactos\" type=\"checkbox\" value=\"Si\" id=\"chk_contactos\" />
            </div>


            <!-- divs ocultos para creacion de mas contactos-->
            <div class=\"col-md-12\" id=\"div_contactos\" style=\"display:none\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <span for=\"nombre_contacto2\">Nombre Contacto 2:</span>
                        <input type=\"text\" id=\"nombre_contacto2\" name=\"nombre_contacto2\" value =\"";
        // line 439
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "nombre_contacto2", array()), "html", null, true);
        echo "\"class=\"form-control\">
                    </div>
                    <div class=\"col-md-4\">
                        <span for=\"telefono_contacto2\">Teléfono:</span>
                        <input type=\"text\" id=\"telefono_contacto2\" name=\"telefono_contacto2\" value =\"";
        // line 443
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "telefono_contacto2", array()), "html", null, true);
        echo "\"class=\"form-control\">
                    </div>
                    <div class=\"col-md-4\">
                        <span for=\"email_contacto2\">Email:</span>
                        <input type=\"text\" id=\"email_contacto2\" name=\"email_contacto2\" value =\"";
        // line 447
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "email_contacto2", array()), "html", null, true);
        echo "\"class=\"form-control\">
                    </div>
                    <div class=\"col-md-4\">
                        <span for=\"nombre_contacto3\">Nombre Contacto 3:</span>
                        <input type=\"text\" id=\"nombre_contacto3\" name=\"nombre_contacto3\" value =\"";
        // line 451
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "nombre_contacto3", array()), "html", null, true);
        echo "\"class=\"form-control\">
                    </div>
                    <div class=\"col-md-4\">
                        <span for=\"telefono_contacto3\">Teléfono:</span>
                        <input type=\"text\" id=\"telefono_contacto3\" name=\"telefono_contacto3\" value =\"";
        // line 455
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "telefono_contacto3", array()), "html", null, true);
        echo "\"class=\"form-control\">
                    </div>
                    <div class=\"col-md-4\">
                        <span for=\"email_contacto3\">Email:</span>
                        <input type=\"text\" id=\"email_contacto3\" name=\"email_contacto3\" value =\"";
        // line 459
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "email_contacto3", array()), "html", null, true);
        echo "\"class=\"form-control\">
                    </div>
                    <div class=\"col-md-4\">
                        <span for=\"nombre_contacto4\">Nombre Contacto 4:</span>
                        <input type=\"text\" id=\"nombre_contacto4\" name=\"nombre_contacto4\" value =\"";
        // line 463
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "nombre_contacto4", array()), "html", null, true);
        echo "\"class=\"form-control\">
                    </div>
                    <div class=\"col-md-4\">
                        <span for=\"telefono_contacto4\">Teléfono:</span>
                        <input type=\"text\" id=\"telefono_contacto4\" name=\"telefono_contacto4\" value =\"";
        // line 467
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "telefono_contacto4", array()), "html", null, true);
        echo "\"class=\"form-control\">
                    </div>
                    <div class=\"col-md-4\">
                        <span for=\"email_contacto4\">Email:</span>
                        <input type=\"text\" id=\"email_contacto4\" name=\"email_contacto4\" value =\"";
        // line 471
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "email_contacto4", array()), "html", null, true);
        echo "\"class=\"form-control\">
                    </div>
                    <div class=\"col-md-4\">
                        <span for=\"nombre_contacto5\">Nombre Contacto 5:</span>
                        <input type=\"text\" id=\"nombre_contacto5\" name=\"nombre_contacto5\" value =\"";
        // line 475
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "nombre_contacto5", array()), "html", null, true);
        echo "\"class=\"form-control\">
                    </div>
                    <div class=\"col-md-4\">
                        <span for=\"telefono_contacto5\">Teléfono:</span>
                        <input type=\"text\" id=\"telefono_contacto5\" name=\"telefono_contacto5\" value =\"";
        // line 479
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "telefono_contacto5", array()), "html", null, true);
        echo "\"class=\"form-control\">
                    </div>
                    <div class=\"col-md-4\">
                        <span for=\"email_contacto5\">Email:</span>
                        <input type=\"text\" id=\"email_contacto5\" name=\"email_contacto5\" value =\"";
        // line 483
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "email_contacto5", array()), "html", null, true);
        echo "\"class=\"form-control\">
                    </div>
                </div>
            </div>

            <div class=\"col-md-12\" id=\"div_costos\" ";
        // line 488
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "diferentes_centros_costo", array()) == "No")) {
            echo "style=\"display:none\" ";
        }
        echo ">
                <span for=\"descripcion_centro_costos\">Descripción centros de costos:</span>
                <textarea id=\"descripcion_centro_costos\" name=\"descripcion_centro_costos\" class=\"form-control\">";
        // line 490
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "descripcion_centro_costos", array()), "html", null, true);
        echo "</textarea>
            </div>
            <div class=\"col-md-12\">
                <span for=\"clausulas_adicionales\">Los trabajadores tienen clausulas adicionales al contrato por al:</span>
                <textarea id=\"clausulas_adicionales\" name=\"clausulas_adicionales\" class=\"form-control\">";
        // line 494
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "clausulas_adicionales", array()), "html", null, true);
        echo "</textarea>
            </div>
            
            <div class=\"col-md-12\">
                <span for=\"info_adicional_contratacion\">Información adicional contratación:</span>
                <textarea id=\"info_adicional_contratacion\" name=\"info_adicional_contratacion\" class=\"form-control\">";
        // line 499
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "info_adicional_contratacion", array()), "html", null, true);
        echo "</textarea>
            </div>

        </div>
        <hr>

        <div class=\"alert alert-info\" role=\"alert\"><p>NOMINAS</p></div>
        <div class=\"row\">
            <div class=\"col-md-4\">
                <span for=\"contacto_nomina\">Contacto nomina:</span>
                <input type=\"text\" id=\"contacto_nomina\" name=\"contacto_nomina\" value=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "contacto_nomina", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
                <span for=\"cargo_nomina\">Cargo contacto:</span>
                <input type=\"text\" id=\"cargo_nomina\" name=\"cargo_nomina\" value=\"";
        // line 513
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "cargo_nomina", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
                <span for=\"porcentaje_admin\">Porcentaje de administración:</span>
                <input type=\"text\" id=\"porcentaje_admin\" name=\"porcentaje_admin\" value=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "porcentaje_admin", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>            
            <div class=\"col-md-4\">
                <span for=\"recuencia_pago\">Recuencia de pago:</span>
                <input type=\"text\" id=\"recuencia_pago\" name=\"recuencia_pago\" value=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "recuencia_pago", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
                <span for=\"fecha_corte\">Fecha de corte de novedades:</span>
                <input type=\"text\" id=\"fecha_corte\" name=\"fecha_corte\" value=\"";
        // line 525
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "fecha_corte", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
                <span for=\"dias_pago_nomina\">Días de pago nomina:</span>
                <input type=\"text\" id=\"dias_pago_nomina\" name=\"dias_pago_nomina\" value=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "dias_pago_nomina", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
                <span for=\"paz_salvo\">Utiliza paz y salvo:</span>
                <select id=\"paz_salvo\" name=\"paz_salvo\" class=\"form-control\">
                    <option value=\"\">--Seleccione--</option>
                    <option value=\"Si\" ";
        // line 535
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "paz_salvo", array()) == "Si")) {
            echo "selected";
        }
        echo ">Si</option>
                    <option value =\"No\" ";
        // line 536
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "paz_salvo", array()) == "No")) {
            echo "selected";
        }
        echo ">No</option>
                </select>
            </div>
            <div class=\"col-md-4\">
                <span for=\"fecha_cierre_factura\">Fecha cierre de factura:</span>
                <input type=\"text\" id=\"fecha_cierre_factura\" name=\"fecha_cierre_factura\" value=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "fecha_cierre_factura", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
                <span for=\"manejo_mes\">Manejo de mes :</span>
                <select id=\"manejo_mes\" name=\"manejo_mes\" class=\"form-control\">
                    <option value=\"\">--Seleccione--</option>
                    <option value=\"Comercial 30 Días\" ";
        // line 547
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "manejo_mes", array()) == "Comercial 30 Días")) {
            echo "selected";
        }
        echo ">Comercial 30 Días</option>
                    <option value =\"Calendario 31 Días\" ";
        // line 548
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "manejo_mes", array()) == "Calendario 31 Días")) {
            echo "selected";
        }
        echo ">Calendario 31 Días</option>
                </select>
            </div>
            <div class=\"col-md-12\">
                <span for=\"info_adicional_nomina\">Información adicional contratación:</span>
                <textarea id=\"info_adicional_nomina\" name=\"info_adicional_nomina\" class=\"form-control\">";
        // line 553
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "info_adicional_nomina", array()), "html", null, true);
        echo "</textarea>
            </div>
        </div>
        <hr>

        <div class=\"alert alert-info\" role=\"alert\"><p>CONTABILIDAD</p></div>
        <div class=\"row\">
            <div class=\"col-md-4\">
                <span for=\"direccion_factura\">Dirección para envío de factura:</span>
                <input type=\"text\" id=\"direccion_factura\" name=\"direccion_factura\" value=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "direccion_factura", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
                <span for=\"regimen_contributivo\">Régimen contributivo:</span>
                <input type=\"text\" id=\"regimen_contributivo\" name=\"regimen_contributivo\" value=\"";
        // line 566
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "regimen_contributivo", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"col-md-2\">
                <span for=\"gran_contribuyente\">Gran contribuyente:</span>
                <select id=\"gran_contribuyente\" name=\"gran_contribuyente\" class=\"form-control\">
                <option value=\"\">--Seleccione--</option>
                    <option value=\"Si\"  ";
        // line 572
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "gran_contribuyente", array()) == "Si")) {
            echo "selected";
        }
        echo ">Si</option>
                    <option value =\"No\"  ";
        // line 573
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "gran_contribuyente", array()) == "No")) {
            echo "selected";
        }
        echo ">No</option>
                </select>
            </div>
            <div class=\"col-md-2\">
                <span for=\"autoretenedor\">Autoretenedor:</span>
                <select id=\"autoretenedor\" name=\"autoretenedor\" class=\"form-control\">
                <option value=\"\">--Seleccione--</option>
                    <option value=\"Si\" ";
        // line 580
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "autoretenedor", array()) == "Si")) {
            echo "selected";
        }
        echo ">Si</option>
                    <option value =\"No\" ";
        // line 581
        if (($this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "autoretenedor", array()) == "No")) {
            echo "selected";
        }
        echo ">No</option>
                </select>
            </div>
            <div class=\"col-md-4\">
                <span for=\"dias_plazo_vencimiento\">Días de plazo vencimiento de facturación:</span>
                <input type=\"text\" id=\"dias_plazo_vencimiento\" name=\"dias_plazo_vencimiento\" value=\"";
        // line 586
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "dias_plazo_vencimiento", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
                <span for=\"dias_radicacion_factura\">Días de radicación factura:</span>
                <input type=\"text\" id=\"dias_radicacion_factura\" name=\"dias_radicacion_factura\" value=\"";
        // line 590
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "dias_radicacion_factura", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
                <span for=\"contacto_gestion_pagos\">Contacto gestión de pagos:</span>
                <input type=\"text\" id=\"contacto_gestion_pagos\" name=\"contacto_gestion_pagos\" value=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "contacto_gestion_pagos", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
                <span for=\"cargo_gestion_pagos\">Cargo de contacto:</span>
                <input type=\"text\" id=\"cargo_gestion_pagos\" name=\"cargo_gestion_pagos\" value=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "cargo_gestion_pagos", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
                <span for=\"email_gestion_pagos\">Email contacto:</span>
                <input type=\"text\" id=\"email_gestion_pagos\" name=\"email_gestion_pagos\" value=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "email_gestion_pagos", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
                <span for=\"telefono_gestion_pagos\">Teléfono contacto:</span>
                <input type=\"text\" id=\"telefono_gestion_pagos\" name=\"telefono_gestion_pagos\" value=\"";
        // line 606
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "telefono_gestion_pagos", array()), "html", null, true);
        echo "\" class=\"form-control\">
            </div>
            <div class=\"col-md-12\">
                <span for=\"info_gestion_pagos\">Información adicional contabilidad:</span>
                <textarea id=\"info_gestion_pagos\" name=\"info_gestion_pagos\" class=\"form-control\">";
        // line 610
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guia"]) ? $context["guia"] : null), "info_gestion_pagos", array()), "html", null, true);
        echo "</textarea>
            </div>
        </div>
        <hr>        
    <div class=\"row\">
        <div id=\"resultado\" class=\"col-md-12\">
            ";
        // line 616
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("resultados_update"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 617
        echo "        </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\redes_humanas/themes/rainlab-vanilla/pages/guias/guia_detalle.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1136 => 617,  1132 => 616,  1123 => 610,  1116 => 606,  1109 => 602,  1102 => 598,  1095 => 594,  1088 => 590,  1081 => 586,  1071 => 581,  1065 => 580,  1053 => 573,  1047 => 572,  1038 => 566,  1031 => 562,  1019 => 553,  1009 => 548,  1003 => 547,  994 => 541,  984 => 536,  978 => 535,  969 => 529,  962 => 525,  955 => 521,  948 => 517,  941 => 513,  934 => 509,  921 => 499,  913 => 494,  906 => 490,  899 => 488,  891 => 483,  884 => 479,  877 => 475,  870 => 471,  863 => 467,  856 => 463,  849 => 459,  842 => 455,  835 => 451,  828 => 447,  821 => 443,  814 => 439,  796 => 426,  790 => 425,  781 => 419,  771 => 414,  765 => 413,  756 => 407,  749 => 403,  742 => 399,  735 => 395,  728 => 391,  721 => 387,  709 => 378,  703 => 374,  686 => 371,  678 => 370,  675 => 369,  658 => 368,  650 => 363,  642 => 358,  631 => 352,  625 => 351,  613 => 344,  607 => 343,  601 => 342,  594 => 340,  584 => 335,  578 => 334,  569 => 328,  562 => 324,  555 => 320,  548 => 316,  541 => 312,  534 => 308,  529 => 305,  522 => 301,  518 => 299,  511 => 295,  507 => 293,  505 => 292,  496 => 286,  489 => 282,  482 => 278,  475 => 274,  468 => 270,  461 => 266,  449 => 257,  440 => 251,  433 => 247,  426 => 243,  419 => 239,  404 => 227,  397 => 223,  390 => 219,  383 => 215,  363 => 198,  356 => 194,  349 => 190,  342 => 186,  328 => 175,  320 => 170,  313 => 168,  306 => 166,  300 => 165,  292 => 160,  285 => 156,  274 => 148,  264 => 143,  258 => 142,  249 => 136,  240 => 129,  234 => 127,  228 => 125,  226 => 124,  219 => 120,  212 => 118,  204 => 115,  198 => 114,  190 => 109,  182 => 104,  174 => 99,  166 => 94,  158 => 89,  150 => 84,  142 => 79,  134 => 74,  126 => 69,  118 => 64,  110 => 59,  102 => 54,  94 => 49,  86 => 44,  78 => 39,  70 => 34,  62 => 29,  49 => 21,  43 => 20,  35 => 15,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\xampp\\htdocs\\redes_humanas/themes/rainlab-vanilla/pages/guias/guia_detalle.htm", "");
    }
}
