<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_213bd1ea0583a09d5b89fb750d39bd42ea8347fd37228a418546693fb74a7e60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle:Connexion:index.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_cd26af137c017bd43fc07c9283ee4b9c4d06def1121ecec622f2efadb611a25a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd26af137c017bd43fc07c9283ee4b9c4d06def1121ecec622f2efadb611a25a->enter($__internal_cd26af137c017bd43fc07c9283ee4b9c4d06def1121ecec622f2efadb611a25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd26af137c017bd43fc07c9283ee4b9c4d06def1121ecec622f2efadb611a25a->leave($__internal_cd26af137c017bd43fc07c9283ee4b9c4d06def1121ecec622f2efadb611a25a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cdd948fc889f53b714cc1eca2c33432451772c442008a6ebaedf4ab2c43c2083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd948fc889f53b714cc1eca2c33432451772c442008a6ebaedf4ab2c43c2083->enter($__internal_cdd948fc889f53b714cc1eca2c33432451772c442008a6ebaedf4ab2c43c2083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_cdd948fc889f53b714cc1eca2c33432451772c442008a6ebaedf4ab2c43c2083->leave($__internal_cdd948fc889f53b714cc1eca2c33432451772c442008a6ebaedf4ab2c43c2083_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
{% endblock fos_user_content %}", "FOSUserBundle:Security:login.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\src\\SRVDV\\ServerBundle/Resources/views/Security/login.html.twig");
    }
}
