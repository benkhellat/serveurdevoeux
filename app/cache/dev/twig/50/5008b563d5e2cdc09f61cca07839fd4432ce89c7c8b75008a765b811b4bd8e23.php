<?php

/* FormTemplate/bootstrap.html.twig */
class __TwigTemplate_6ba3555ecea4597e0de6353b8f7d7d497e2f6b87ffbf93f372459ff4f6ecd901 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2e3817c7b184e9784c452a95f1346700b9ab0171f5faf5b1d6c1aadd3c47e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e3817c7b184e9784c452a95f1346700b9ab0171f5faf5b1d6c1aadd3c47e78->enter($__internal_d2e3817c7b184e9784c452a95f1346700b9ab0171f5faf5b1d6c1aadd3c47e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FormTemplate/bootstrap.html.twig"));

        // line 1
        echo "<?php";
        // line 3
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 8
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        
        $__internal_d2e3817c7b184e9784c452a95f1346700b9ab0171f5faf5b1d6c1aadd3c47e78->leave($__internal_d2e3817c7b184e9784c452a95f1346700b9ab0171f5faf5b1d6c1aadd3c47e78_prof);

    }

    // line 3
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_9e1d74e5a219c7ca4d015d413660b9e0db2dd53a39a0052cb018f92895c6b4b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1d74e5a219c7ca4d015d413660b9e0db2dd53a39a0052cb018f92895c6b4b8->enter($__internal_9e1d74e5a219c7ca4d015d413660b9e0db2dd53a39a0052cb018f92895c6b4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 4
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 5
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo " class=\"form-control\" />";
        
        $__internal_9e1d74e5a219c7ca4d015d413660b9e0db2dd53a39a0052cb018f92895c6b4b8->leave($__internal_9e1d74e5a219c7ca4d015d413660b9e0db2dd53a39a0052cb018f92895c6b4b8_prof);

    }

    // line 8
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_19cec9ab16f61ca7ce5f97861850d3ac8f54dbdb6484b40caa4bb34cd49c8833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19cec9ab16f61ca7ce5f97861850d3ac8f54dbdb6484b40caa4bb34cd49c8833->enter($__internal_19cec9ab16f61ca7ce5f97861850d3ac8f54dbdb6484b40caa4bb34cd49c8833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 9
        if (((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple"))) && ( !$this->getAttribute(($context["attr"] ?? null), "size", array(), "any", true, true) || ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 10
            $context["required"] = false;
        }
        // line 12
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo " class=\"form-control\">";
        // line 13
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 14
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 16
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 17
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 18
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 19
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 20
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 23
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 24
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 25
        echo "</select>";
        
        $__internal_19cec9ab16f61ca7ce5f97861850d3ac8f54dbdb6484b40caa4bb34cd49c8833->leave($__internal_19cec9ab16f61ca7ce5f97861850d3ac8f54dbdb6484b40caa4bb34cd49c8833_prof);

    }

    public function getTemplateName()
    {
        return "FormTemplate/bootstrap.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  107 => 25,  105 => 24,  103 => 23,  97 => 20,  95 => 19,  93 => 18,  91 => 17,  89 => 16,  80 => 14,  78 => 13,  71 => 12,  68 => 10,  66 => 9,  60 => 8,  43 => 5,  41 => 4,  35 => 3,  28 => 8,  26 => 3,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %} class=\"form-control\" />
{%- endblock form_widget_simple -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %} class=\"form-control\">
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}", "FormTemplate/bootstrap.html.twig", "D:\\wamp64\\www\\serveurDeVoeux\\app\\Resources\\views\\FormTemplate\\bootstrap.html.twig");
    }
}
