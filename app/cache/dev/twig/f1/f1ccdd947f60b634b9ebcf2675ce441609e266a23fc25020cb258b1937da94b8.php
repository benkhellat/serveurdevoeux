<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_6d36fa824ac1d2bd519b760264ecc0c15d66f14c78e437abb395ac7cd0f4d87f extends Twig_Template
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
        $__internal_8e2445c80d1b2ddb923732818173ea0454698bebc4ac3b17e9d7393613ef271a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2445c80d1b2ddb923732818173ea0454698bebc4ac3b17e9d7393613ef271a->enter($__internal_8e2445c80d1b2ddb923732818173ea0454698bebc4ac3b17e9d7393613ef271a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_8e2445c80d1b2ddb923732818173ea0454698bebc4ac3b17e9d7393613ef271a->leave($__internal_8e2445c80d1b2ddb923732818173ea0454698bebc4ac3b17e9d7393613ef271a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "D:\\wamp64\\www\\serveurDeVoeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
