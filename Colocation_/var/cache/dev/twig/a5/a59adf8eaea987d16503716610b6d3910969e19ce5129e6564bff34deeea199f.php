<?php

/* annonces/edit.html.twig */
class __TwigTemplate_ba6d00ffe288db9e1500c029aa106092c75dd72fd0ef49fefc0b8d0204825166 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "annonces/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24dd372629f4b4f0da931beade7ebf9f7fce06e557acd3121b3cc735946aeb83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24dd372629f4b4f0da931beade7ebf9f7fce06e557acd3121b3cc735946aeb83->enter($__internal_24dd372629f4b4f0da931beade7ebf9f7fce06e557acd3121b3cc735946aeb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/edit.html.twig"));

        $__internal_19b47e3b8fc61f1a7dbfde8b0c37c9c0a6829db23650046b455c1da696d0ea15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b47e3b8fc61f1a7dbfde8b0c37c9c0a6829db23650046b455c1da696d0ea15->enter($__internal_19b47e3b8fc61f1a7dbfde8b0c37c9c0a6829db23650046b455c1da696d0ea15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24dd372629f4b4f0da931beade7ebf9f7fce06e557acd3121b3cc735946aeb83->leave($__internal_24dd372629f4b4f0da931beade7ebf9f7fce06e557acd3121b3cc735946aeb83_prof);

        
        $__internal_19b47e3b8fc61f1a7dbfde8b0c37c9c0a6829db23650046b455c1da696d0ea15->leave($__internal_19b47e3b8fc61f1a7dbfde8b0c37c9c0a6829db23650046b455c1da696d0ea15_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c4fa51f43ff0c2fd29be7fbbc33710eafe4ff5b3d6130300efd2cb37dbff708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c4fa51f43ff0c2fd29be7fbbc33710eafe4ff5b3d6130300efd2cb37dbff708->enter($__internal_9c4fa51f43ff0c2fd29be7fbbc33710eafe4ff5b3d6130300efd2cb37dbff708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_98dad892afcdaec4b657ce2056ea8f6b44bc811463034117e4e829caf9531cb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98dad892afcdaec4b657ce2056ea8f6b44bc811463034117e4e829caf9531cb1->enter($__internal_98dad892afcdaec4b657ce2056ea8f6b44bc811463034117e4e829caf9531cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Annonce_edit"), "html", null, true);
        echo "</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonces_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to the list"), "html", null, true);
        echo "</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_98dad892afcdaec4b657ce2056ea8f6b44bc811463034117e4e829caf9531cb1->leave($__internal_98dad892afcdaec4b657ce2056ea8f6b44bc811463034117e4e829caf9531cb1_prof);

        
        $__internal_9c4fa51f43ff0c2fd29be7fbbc33710eafe4ff5b3d6130300efd2cb37dbff708->leave($__internal_9c4fa51f43ff0c2fd29be7fbbc33710eafe4ff5b3d6130300efd2cb37dbff708_prof);

    }

    public function getTemplateName()
    {
        return "annonces/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  79 => 16,  71 => 13,  64 => 9,  59 => 7,  55 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

{% block body %}
    <h1>{{'Annonce_edit'|trans}}</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('annonces_index') }}\">{{'Back to the list'|trans}}</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "annonces/edit.html.twig", "C:\\wamp64\\www\\Colocation\\app\\Resources\\views\\annonces\\edit.html.twig");
    }
}
