<?php

/* @SRVDVServer/Security/login.html.twig */
class __TwigTemplate_54dfeaab9a7710e7ab789c03f5672131b9c80d02650338267035cfe548f114e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "@SRVDVServer/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle:Connexion:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24fffd21f7ad84e5afbbb5c07658b7178ebf4ed40cd21555d34da1dc4e183772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24fffd21f7ad84e5afbbb5c07658b7178ebf4ed40cd21555d34da1dc4e183772->enter($__internal_24fffd21f7ad84e5afbbb5c07658b7178ebf4ed40cd21555d34da1dc4e183772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SRVDVServer/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24fffd21f7ad84e5afbbb5c07658b7178ebf4ed40cd21555d34da1dc4e183772->leave($__internal_24fffd21f7ad84e5afbbb5c07658b7178ebf4ed40cd21555d34da1dc4e183772_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_88d1e1e5e8c63521da37d33bb651cc00e90e350e837f400264cb13901e7a9cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d1e1e5e8c63521da37d33bb651cc00e90e350e837f400264cb13901e7a9cfc->enter($__internal_88d1e1e5e8c63521da37d33bb651cc00e90e350e837f400264cb13901e7a9cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <h3>Connectez-vous :</h3> 
    ";
        // line 7
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
        <p ><a  href=";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo ">Mot de passe oubli&eacute; ?</a></p>
";
        
        $__internal_88d1e1e5e8c63521da37d33bb651cc00e90e350e837f400264cb13901e7a9cfc->leave($__internal_88d1e1e5e8c63521da37d33bb651cc00e90e350e837f400264cb13901e7a9cfc_prof);

    }

    public function getTemplateName()
    {
        return "@SRVDVServer/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle:Connexion:index.html.twig\" %}



{% block fos_user_content %}
    <h3>Connectez-vous :</h3> 
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
        <p ><a  href={{path ('fos_user_resetting_request')}}>Mot de passe oubli&eacute; ?</a></p>
{% endblock fos_user_content %}", "@SRVDVServer/Security/login.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
