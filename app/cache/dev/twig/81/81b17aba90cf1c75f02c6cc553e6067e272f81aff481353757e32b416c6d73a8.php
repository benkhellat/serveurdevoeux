<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_f9440a9fe15db23d6cec66ac89001115a50eaf34cb82f3da1fd729af2b3fcb88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc126ada7f60b6e2038c9290c46a00ac6da187e9a202bd6a0f964a81a69fb31e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc126ada7f60b6e2038c9290c46a00ac6da187e9a202bd6a0f964a81a69fb31e->enter($__internal_bc126ada7f60b6e2038c9290c46a00ac6da187e9a202bd6a0f964a81a69fb31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc126ada7f60b6e2038c9290c46a00ac6da187e9a202bd6a0f964a81a69fb31e->leave($__internal_bc126ada7f60b6e2038c9290c46a00ac6da187e9a202bd6a0f964a81a69fb31e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58a1b2ba309c28cc27dc600285361f34fe6c574e394cad17d651450d1ba444b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58a1b2ba309c28cc27dc600285361f34fe6c574e394cad17d651450d1ba444b1->enter($__internal_58a1b2ba309c28cc27dc600285361f34fe6c574e394cad17d651450d1ba444b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_58a1b2ba309c28cc27dc600285361f34fe6c574e394cad17d651450d1ba444b1->leave($__internal_58a1b2ba309c28cc27dc600285361f34fe6c574e394cad17d651450d1ba444b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
