<?php

/* FactelBundle:Inicio:inicio.html.twig */
class __TwigTemplate_6d42bdc92099d794683ed1fb9945282a8f78efb27a228b1689cd0e37815b5de1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Inicio:inicio.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FactelBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 4
            echo "<div class=\"col-sm-12 alert alert-danger alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    <h4><strong>Ha ocurrido un error!</strong></h4>
    <p>";
            // line 7
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
</div>

 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_EMISOR")) {
            // line 12
            echo "<div class=\"row\">
    <div class=\"col-lg-3 col-md-6\">
        <a href=\"#\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-keyboard-o fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["registrados"]) ? $context["registrados"] : $this->getContext($context, "registrados")), "html", null, true);
            echo "</div>
                            <div>Registrados</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class=\"col-lg-3 col-md-6\">
        <a href=\"#\">
            <div class=\"panel panel-green\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-check-square-o fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["autorizados"]) ? $context["autorizados"] : $this->getContext($context, "autorizados")), "html", null, true);
            echo "</div>
                            <div>Autorizados</div>
                        </div>
                    </div>

                </div>
            </div>
        </a>
    </div>
    <div class=\"col-lg-3 col-md-6\">
        <a href=\"#\">
            <div class=\"panel panel-yellow\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-spinner fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["procesandose"]) ? $context["procesandose"] : $this->getContext($context, "procesandose")), "html", null, true);
            echo "</div>
                            <div>Procesandose</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class=\"col-lg-3 col-md-6\">
        <a href=\"#\">
            <div class=\"panel panel-red\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <span class=\"glyphicon glyphicon-remove-circle fa-5x\"></span>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["noAutorizados"]) ? $context["noAutorizados"] : $this->getContext($context, "noAutorizados")), "html", null, true);
            echo "</div>
                            <div>No Autorizados</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-12\">
        <canvas id=\"line-chart\"  height=\"100\"></canvas>
    </div>
    <div class=\"col-md-12\">
        <canvas id=\"bar-chart\" height=\"100\"></canvas>
    </div>
</div>
<!-- /.row -->
</div>
";
        }
    }

    // line 96
    public function block_javascript($context, array $blocks = array())
    {
        // line 97
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_EMISOR")) {
            // line 98
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/js/Chart.min.js"), "html", null, true);
            echo "\"></script>
<script>
    


    new Chart(document.getElementById(\"line-chart\"), {
        type: 'line',
        data: {
            labels: [\"Ene\", \"Feb\", \"Mar\", \"Abr\", \"May\", \"Jun\", \"Jul\", \"Ago\", \"Sep\", \"Oct\", \"Nov\", \"Dic\"],
            datasets: [{
                    data: [";
            // line 108
            echo twig_escape_filter($this->env, (isset($context["ventaTotalActual"]) ? $context["ventaTotalActual"] : $this->getContext($context, "ventaTotalActual")), "html", null, true);
            echo "],
                    label: \"2018\",
                    borderColor: \"#3e95cd\",
                    fill: false
                }, {
                    data: [";
            // line 113
            echo twig_escape_filter($this->env, (isset($context["ventaTotalAnnoAnterior"]) ? $context["ventaTotalAnnoAnterior"] : $this->getContext($context, "ventaTotalAnnoAnterior")), "html", null, true);
            echo "],
                    label: \"2017\",
                    borderColor: \"#3cba9f\",
                    fill: false
                },
            ]
        },
        options: {
            title: {
                display: true,
                text: 'Ventas Año Actual VS Año Anterior'
            }
        }
    });

    new Chart(document.getElementById(\"bar-chart\"), {
        type: 'bar',
        data: {
            labels: [\"1\", \"2\", \"3\", \"4\", \"5\",\"6\", \"7\", \"8\", \"9\", \"10\",\"11\", \"12\", \"13\", \"14\", \"15\",\"16\", \"17\", \"18\", \"19\", \"20\",\"21\", \"22\", \"23\", \"24\", \"25\",\"26\", \"27\", \"28\", \"29\", \"30\",\"31\"],
            datasets: [
                {
                    label: \"Ventas del Dia\",
                    backgroundColor: [\"#3e95cd\", \"#8e5ea2\", \"#3cba9f\", \"#e8c3b9\", \"#c45850\",\"#3e95cd\", \"#8e5ea2\", \"#3cba9f\", \"#e8c3b9\", \"#c45850\",\"#3e95cd\", \"#8e5ea2\", \"#3cba9f\", \"#e8c3b9\", \"#c45850\",\"#3e95cd\", \"#8e5ea2\", \"#3cba9f\", \"#e8c3b9\", \"#c45850\",\"#3e95cd\", \"#8e5ea2\", \"#3cba9f\", \"#e8c3b9\", \"#c45850\",\"#3e95cd\", \"#8e5ea2\", \"#3cba9f\", \"#e8c3b9\", \"#c45850\",\"#c45850\"],
                    data: [";
            // line 136
            echo twig_escape_filter($this->env, (isset($context["ventaXDiaTotal"]) ? $context["ventaXDiaTotal"] : $this->getContext($context, "ventaXDiaTotal")), "html", null, true);
            echo "]
                }
            ]
        },
        options: {
            legend: {display: false},
            title: {
                display: true,
                text: 'Ventas por dia mes actual'
            }
        }
    });
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "FactelBundle:Inicio:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 136,  179 => 113,  171 => 108,  157 => 98,  155 => 97,  152 => 96,  127 => 74,  107 => 57,  86 => 39,  66 => 22,  54 => 12,  52 => 11,  42 => 7,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FactelBundle::Layout.html.twig\" %}
{% block content %}
                            {% for flashMessage in app.session.flashbag.get('notice') %}
<div class=\"col-sm-12 alert alert-danger alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    <h4><strong>Ha ocurrido un error!</strong></h4>
    <p>{{ flashMessage }}</p>
</div>

 {% endfor %}
{% if is_granted('ROLE_EMISOR') %}
<div class=\"row\">
    <div class=\"col-lg-3 col-md-6\">
        <a href=\"#\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-keyboard-o fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">{{registrados}}</div>
                            <div>Registrados</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class=\"col-lg-3 col-md-6\">
        <a href=\"#\">
            <div class=\"panel panel-green\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-check-square-o fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">{{autorizados}}</div>
                            <div>Autorizados</div>
                        </div>
                    </div>

                </div>
            </div>
        </a>
    </div>
    <div class=\"col-lg-3 col-md-6\">
        <a href=\"#\">
            <div class=\"panel panel-yellow\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <i class=\"fa fa-spinner fa-5x\"></i>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">{{procesandose}}</div>
                            <div>Procesandose</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class=\"col-lg-3 col-md-6\">
        <a href=\"#\">
            <div class=\"panel panel-red\">
                <div class=\"panel-heading\">
                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            <span class=\"glyphicon glyphicon-remove-circle fa-5x\"></span>
                        </div>
                        <div class=\"col-xs-9 text-right\">
                            <div class=\"huge\">{{noAutorizados}}</div>
                            <div>No Autorizados</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-12\">
        <canvas id=\"line-chart\"  height=\"100\"></canvas>
    </div>
    <div class=\"col-md-12\">
        <canvas id=\"bar-chart\" height=\"100\"></canvas>
    </div>
</div>
<!-- /.row -->
</div>
{% endif %}
{% endblock %}

{% block javascript %}
{% if is_granted('ROLE_EMISOR') %}
<script src=\"{{asset('recursos/js/Chart.min.js')}}\"></script>
<script>
    


    new Chart(document.getElementById(\"line-chart\"), {
        type: 'line',
        data: {
            labels: [\"Ene\", \"Feb\", \"Mar\", \"Abr\", \"May\", \"Jun\", \"Jul\", \"Ago\", \"Sep\", \"Oct\", \"Nov\", \"Dic\"],
            datasets: [{
                    data: [{{ventaTotalActual}}],
                    label: \"2018\",
                    borderColor: \"#3e95cd\",
                    fill: false
                }, {
                    data: [{{ventaTotalAnnoAnterior}}],
                    label: \"2017\",
                    borderColor: \"#3cba9f\",
                    fill: false
                },
            ]
        },
        options: {
            title: {
                display: true,
                text: 'Ventas Año Actual VS Año Anterior'
            }
        }
    });

    new Chart(document.getElementById(\"bar-chart\"), {
        type: 'bar',
        data: {
            labels: [\"1\", \"2\", \"3\", \"4\", \"5\",\"6\", \"7\", \"8\", \"9\", \"10\",\"11\", \"12\", \"13\", \"14\", \"15\",\"16\", \"17\", \"18\", \"19\", \"20\",\"21\", \"22\", \"23\", \"24\", \"25\",\"26\", \"27\", \"28\", \"29\", \"30\",\"31\"],
            datasets: [
                {
                    label: \"Ventas del Dia\",
                    backgroundColor: [\"#3e95cd\", \"#8e5ea2\", \"#3cba9f\", \"#e8c3b9\", \"#c45850\",\"#3e95cd\", \"#8e5ea2\", \"#3cba9f\", \"#e8c3b9\", \"#c45850\",\"#3e95cd\", \"#8e5ea2\", \"#3cba9f\", \"#e8c3b9\", \"#c45850\",\"#3e95cd\", \"#8e5ea2\", \"#3cba9f\", \"#e8c3b9\", \"#c45850\",\"#3e95cd\", \"#8e5ea2\", \"#3cba9f\", \"#e8c3b9\", \"#c45850\",\"#3e95cd\", \"#8e5ea2\", \"#3cba9f\", \"#e8c3b9\", \"#c45850\",\"#c45850\"],
                    data: [{{ventaXDiaTotal}}]
                }
            ]
        },
        options: {
            legend: {display: false},
            title: {
                display: true,
                text: 'Ventas por dia mes actual'
            }
        }
    });
</script>
{% endif %}
{% endblock %}
", "FactelBundle:Inicio:inicio.html.twig", "C:\\xampp\\htdocs\\FactelWebCliente\\src\\FactelBundle/Resources/views/Inicio/inicio.html.twig");
    }
}
