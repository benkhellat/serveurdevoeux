<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_4e6c0f5b40c06496698fe2510317cf85070696c856c000781d9b35813abe6990 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_302617a317d7bc396924e3a78a419d5fbb00d1014825f5c4983df04a12ec9b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302617a317d7bc396924e3a78a419d5fbb00d1014825f5c4983df04a12ec9b0f->enter($__internal_302617a317d7bc396924e3a78a419d5fbb00d1014825f5c4983df04a12ec9b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_302617a317d7bc396924e3a78a419d5fbb00d1014825f5c4983df04a12ec9b0f->leave($__internal_302617a317d7bc396924e3a78a419d5fbb00d1014825f5c4983df04a12ec9b0f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bfdf7f27f35191bc284894cd017676a1807ebb8187df6a08f7dc98fd609ddf94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfdf7f27f35191bc284894cd017676a1807ebb8187df6a08f7dc98fd609ddf94->enter($__internal_bfdf7f27f35191bc284894cd017676a1807ebb8187df6a08f7dc98fd609ddf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_bfdf7f27f35191bc284894cd017676a1807ebb8187df6a08f7dc98fd609ddf94->leave($__internal_bfdf7f27f35191bc284894cd017676a1807ebb8187df6a08f7dc98fd609ddf94_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:checkEmail.html.twig", "E:\\Systeme\\wamp64\\www\\serveurDeVoeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/checkEmail.html.twig");
    }
}