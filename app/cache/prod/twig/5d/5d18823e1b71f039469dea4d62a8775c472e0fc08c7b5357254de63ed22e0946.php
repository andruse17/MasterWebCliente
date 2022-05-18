<?php

/* FactelBundle:Login:login.html.twig */
class __TwigTemplate_3078add437f3a564785977d6e752288b7f87b042bba3ffc8c85c9cd9b50fa5a7 extends Twig_Template
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
        echo "<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>Iniciar Sesi&oacute;n</title>
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body onload='document.loginForm.username.focus();'>
        <!-- start Login box -->
        <div class=\"container\" id=\"login-block\">
            <div class=\"row\">

                <div class=\"col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4\">
                    <div class=\"login-box clearfix animated flipInY\">
                        <div class=\"login-logo\">
                            <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/img/facilfact-logo.png"), "html", null, true);
        echo "\" alt=\"FacilFact\" />
                        </div>
                   ";
        // line 21
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 22
            echo "                        <div class=\"alert alert-danger alert-dismissable\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                            <h4><strong>Error!</strong></h4>
                            <p>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</p>
                        </div>
                    ";
        }
        // line 28
        echo "
                        <div class=\"login-form\">
                            <form id=\"loginform\" name = \"loginForm\" class=\"form-horizontal\" role=\"form\" action=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method='POST'>
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                    <input id=\"login-username\" type=\"text\" class=\"form-control\" name=\"_username\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Usuario\" required>                                        
                                </div>

                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                                    <input id=\"login-password\" type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Contraseña\" required>
                                </div>

                                <div  class=\"form-group\">
                                    <!-- Button -->

                                    <div class=\"col-sm-12 controls\">
                                        <button type=\"submit\" class=\"btn btn-success\">Iniciar Sesi&oacute;n</button>
                                    </div>
                                </div>
                            </form>     \t
                        </div> \t\t\t        \t
                    </div>
                </div>
            </div>
        </div>

        <!-- End Login box -->
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/js/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 58,  103 => 57,  99 => 56,  73 => 33,  67 => 30,  63 => 28,  57 => 25,  52 => 22,  50 => 21,  45 => 19,  32 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>Iniciar Sesi&oacute;n</title>
        <link href=\"{{asset('recursos/framework/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('recursos/css/login.css')}}\" rel=\"stylesheet\">
    </head>
    <body onload='document.loginForm.username.focus();'>
        <!-- start Login box -->
        <div class=\"container\" id=\"login-block\">
            <div class=\"row\">

                <div class=\"col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4\">
                    <div class=\"login-box clearfix animated flipInY\">
                        <div class=\"login-logo\">
                            <img src=\"{{asset('recursos/img/facilfact-logo.png')}}\" alt=\"FacilFact\" />
                        </div>
                   {% if error %}
                        <div class=\"alert alert-danger alert-dismissable\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                            <h4><strong>Error!</strong></h4>
                            <p>{{ error.message }}</p>
                        </div>
                    {% endif %}

                        <div class=\"login-form\">
                            <form id=\"loginform\" name = \"loginForm\" class=\"form-horizontal\" role=\"form\" action=\"{{ path('login_check') }}\" method='POST'>
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                    <input id=\"login-username\" type=\"text\" class=\"form-control\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"Usuario\" required>                                        
                                </div>

                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                                    <input id=\"login-password\" type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Contraseña\" required>
                                </div>

                                <div  class=\"form-group\">
                                    <!-- Button -->

                                    <div class=\"col-sm-12 controls\">
                                        <button type=\"submit\" class=\"btn btn-success\">Iniciar Sesi&oacute;n</button>
                                    </div>
                                </div>
                            </form>     \t
                        </div> \t\t\t        \t
                    </div>
                </div>
            </div>
        </div>

        <!-- End Login box -->
        <script src=\"{{asset('recursos/js/jquery-1.11.2.min.js')}}\"></script>
        <script src=\"{{asset('recursos/framework/jquery-ui/jquery-ui.min.js')}}\"></script>
        <script src=\"{{asset('recursos/framework/bootstrap/js/bootstrap.min.js')}}\"></script>

    </body>
</html>
", "FactelBundle:Login:login.html.twig", "/var/www/html/sistema/src/FactelBundle/Resources/views/Login/login.html.twig");
    }
}
