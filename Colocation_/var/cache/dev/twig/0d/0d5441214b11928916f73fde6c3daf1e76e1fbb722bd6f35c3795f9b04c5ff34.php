<?php

/* :annonces:new.html.twig */
class __TwigTemplate_ba56f9346fbf482ab2be043d83f1a3ad810ac9ed769ef24b61a67135abd77e53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":annonces:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e2379dc1d37d34dbaa8527d033787c521ef4cf9c8e9e2c34e84e4769bf13294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e2379dc1d37d34dbaa8527d033787c521ef4cf9c8e9e2c34e84e4769bf13294->enter($__internal_8e2379dc1d37d34dbaa8527d033787c521ef4cf9c8e9e2c34e84e4769bf13294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":annonces:new.html.twig"));

        $__internal_a013e2007a9200148f4db02be7c69155085f5b5e8773e8febf531759aae2a05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a013e2007a9200148f4db02be7c69155085f5b5e8773e8febf531759aae2a05f->enter($__internal_a013e2007a9200148f4db02be7c69155085f5b5e8773e8febf531759aae2a05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":annonces:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e2379dc1d37d34dbaa8527d033787c521ef4cf9c8e9e2c34e84e4769bf13294->leave($__internal_8e2379dc1d37d34dbaa8527d033787c521ef4cf9c8e9e2c34e84e4769bf13294_prof);

        
        $__internal_a013e2007a9200148f4db02be7c69155085f5b5e8773e8febf531759aae2a05f->leave($__internal_a013e2007a9200148f4db02be7c69155085f5b5e8773e8febf531759aae2a05f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fe3953086f009722a7e5db934676071ce184b6fb6d3aafea956c511eeda0272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fe3953086f009722a7e5db934676071ce184b6fb6d3aafea956c511eeda0272->enter($__internal_7fe3953086f009722a7e5db934676071ce184b6fb6d3aafea956c511eeda0272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fd1db03682f4dbee8bc4e25d9c7f2a19dae24c6233eeda9d416c6c4edc97882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd1db03682f4dbee8bc4e25d9c7f2a19dae24c6233eeda9d416c6c4edc97882->enter($__internal_9fd1db03682f4dbee8bc4e25d9c7f2a19dae24c6233eeda9d416c6c4edc97882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("se déconnecter"), "html", null, true);
        echo " </a>
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Annonce creation"), "html", null, true);
        echo "</h1>
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
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
    </ul>
";
        
        $__internal_9fd1db03682f4dbee8bc4e25d9c7f2a19dae24c6233eeda9d416c6c4edc97882->leave($__internal_9fd1db03682f4dbee8bc4e25d9c7f2a19dae24c6233eeda9d416c6c4edc97882_prof);

        
        $__internal_7fe3953086f009722a7e5db934676071ce184b6fb6d3aafea956c511eeda0272->leave($__internal_7fe3953086f009722a7e5db934676071ce184b6fb6d3aafea956c511eeda0272_prof);

    }

    public function getTemplateName()
    {
        return ":annonces:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 13,  69 => 9,  64 => 7,  60 => 6,  56 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <a href=\"{{ path('fos_user_security_logout') }}\"> {{'se déconnecter'|trans}} </a>
    <h1>{{'Annonce creation'|trans}}</h1>
    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('annonces_index') }}\">{{'Back to the list'|trans}}</a>
        </li>
    </ul>
{% endblock %}
", ":annonces:new.html.twig", "C:\\wamp64\\www\\Colocation\\app/Resources\\views/annonces/new.html.twig");
    }
}
