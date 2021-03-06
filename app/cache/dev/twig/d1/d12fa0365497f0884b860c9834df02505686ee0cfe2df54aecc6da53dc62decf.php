<?php

/* @SRVDVServer/admin/MenuAdmin.html.twig */
class __TwigTemplate_ee0953b441521b629d15e397cc38944e2a012ea7fed76330b743f89774c8ccf6 extends Twig_Template
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
        $__internal_a6650788fc03d3ffce65b7505fcdd360dfc0431b9c879588417c3cbc2b382083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6650788fc03d3ffce65b7505fcdd360dfc0431b9c879588417c3cbc2b382083->enter($__internal_a6650788fc03d3ffce65b7505fcdd360dfc0431b9c879588417c3cbc2b382083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/admin/MenuAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <title>SVEDI - Admin</title>
        <link rel=stylesheet type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/home.css"), "html", null, true);
        echo "\"/>
        <link rel=stylesheet type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/jquery-2.1.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/search.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/VerifFormulaire.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Desinscription.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Notification.js\"></script>


        <link rel=stylesheet type=\"text/css\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\"/>
        <link rel=stylesheet type=\"text/css\" href=\"https://cdn.datatables.net/1.10.13/css/dataTables.jqueryui.min.css\"/>
        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.12.4.js\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.13/js/dataTables.jqueryui.min.js\"></script>

        <style>

            .centreVerticalement {
                display: inline-block;
                vertical-align: top;
                float: none;
            }


        </style>

    </head>
    <body>


<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a  href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"> <img alt=\"serveur_voeux\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/SVEDI-small.png"), "html", null, true);
        echo "\" /></a>
        </div>
        &nbsp;
        <div class=\"container\" style=\"font-size:17px\">
            <ul class=\"nav navbar-nav\" >
                <li ><a href=\"#\"><span class=\"glyphicon glyphicon-home\"></span>&nbsp;  Accueil</a></li>
                <li ><a href=\"#\"> <span class=\"glyphicon glyphicon-list\"></span> &nbsp; Liste des utilisateurs</a></li>
                <li ><a href=\"#\"><span class=\"glyphicon glyphicon-folder-close\"></span>&nbsp; Liste des filière</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\" >
                <li class=\"active\"  ><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("form_profile_user");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> 
                        ";
        // line 49
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 50
            echo "                             ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo "
                        ";
        }
        // line 51
        echo "</a></li>
                <li><a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                        ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "
                        <span class=\"glyphicon glyphicon-log-out\"></span>

                    </a></li>
            </ul>
        </div>
    </div>
</nav>";
        
        $__internal_a6650788fc03d3ffce65b7505fcdd360dfc0431b9c879588417c3cbc2b382083->leave($__internal_a6650788fc03d3ffce65b7505fcdd360dfc0431b9c879588417c3cbc2b382083_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/admin/MenuAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 53,  99 => 52,  96 => 51,  88 => 50,  86 => 49,  82 => 48,  67 => 38,  32 => 6,  28 => 5,  22 => 1,);
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
<html lang=\"fr\">
    <head>
        <title>SVEDI - Admin</title>
        <link rel=stylesheet type=\"text/css\" href=\"{{ asset('assets/css/home.css') }}\"/>
        <link rel=stylesheet type=\"text/css\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\"/>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/jquery-2.1.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/search.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/VerifFormulaire.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Desinscription.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:8181/serveurdevoeux/web/assets/javascript/Notification.js\"></script>


        <link rel=stylesheet type=\"text/css\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\"/>
        <link rel=stylesheet type=\"text/css\" href=\"https://cdn.datatables.net/1.10.13/css/dataTables.jqueryui.min.css\"/>
        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-1.12.4.js\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.13/js/dataTables.jqueryui.min.js\"></script>

        <style>

            .centreVerticalement {
                display: inline-block;
                vertical-align: top;
                float: none;
            }


        </style>

    </head>
    <body>


<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a  href=\"{{ path('home')}}\"> <img alt=\"serveur_voeux\" src=\"{{ asset ('assets/images/SVEDI-small.png') }}\" /></a>
        </div>
        &nbsp;
        <div class=\"container\" style=\"font-size:17px\">
            <ul class=\"nav navbar-nav\" >
                <li ><a href=\"#\"><span class=\"glyphicon glyphicon-home\"></span>&nbsp;  Accueil</a></li>
                <li ><a href=\"#\"> <span class=\"glyphicon glyphicon-list\"></span> &nbsp; Liste des utilisateurs</a></li>
                <li ><a href=\"#\"><span class=\"glyphicon glyphicon-folder-close\"></span>&nbsp; Liste des filière</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\" >
                <li class=\"active\"  ><a href=\"{{path('form_profile_user')}}\"><span class=\"glyphicon glyphicon-user\"></span> 
                        {% if is_granted(\"ROLE_ADMIN\") %}
                             {{ app.user.nom }} {{ app.user.prenom }}
                        {% endif %}</a></li>
                <li><a href=\"{{ path('fos_user_security_logout') }}\">
                        {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                        <span class=\"glyphicon glyphicon-log-out\"></span>

                    </a></li>
            </ul>
        </div>
    </div>
</nav>", "@SRVDVServer/admin/MenuAdmin.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\admin\\MenuAdmin.html.twig");
    }
}
