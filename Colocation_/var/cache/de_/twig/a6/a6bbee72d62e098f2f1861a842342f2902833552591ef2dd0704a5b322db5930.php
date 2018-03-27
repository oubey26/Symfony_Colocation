<?php

/* annonces/new.html.twig */
class __TwigTemplate_fe5f6e8ddc16e1b97f84d1fb99d4da8c147d0fe402edad79fa36b52ccdd3b5a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "annonces/new.html.twig", 1);
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
        $__internal_b1e52a58528c6b1cc58cf521803924df131c9ed06e3027c4eccee2cb6a48f844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e52a58528c6b1cc58cf521803924df131c9ed06e3027c4eccee2cb6a48f844->enter($__internal_b1e52a58528c6b1cc58cf521803924df131c9ed06e3027c4eccee2cb6a48f844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/new.html.twig"));

        $__internal_747fd0bfe4f39c97e0321f5c6e9f2d2f64f6c3b04fc85c553ed1536d38084471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747fd0bfe4f39c97e0321f5c6e9f2d2f64f6c3b04fc85c553ed1536d38084471->enter($__internal_747fd0bfe4f39c97e0321f5c6e9f2d2f64f6c3b04fc85c553ed1536d38084471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1e52a58528c6b1cc58cf521803924df131c9ed06e3027c4eccee2cb6a48f844->leave($__internal_b1e52a58528c6b1cc58cf521803924df131c9ed06e3027c4eccee2cb6a48f844_prof);

        
        $__internal_747fd0bfe4f39c97e0321f5c6e9f2d2f64f6c3b04fc85c553ed1536d38084471->leave($__internal_747fd0bfe4f39c97e0321f5c6e9f2d2f64f6c3b04fc85c553ed1536d38084471_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c3ecf125a6f5814e2cbbfc35b77a04357a3d4c267297f93a53c0203767e2688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c3ecf125a6f5814e2cbbfc35b77a04357a3d4c267297f93a53c0203767e2688->enter($__internal_2c3ecf125a6f5814e2cbbfc35b77a04357a3d4c267297f93a53c0203767e2688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d26d98c28732d53fd5f103c9e55c942909d8cee17eb56851ab3b9349b4fcf36b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26d98c28732d53fd5f103c9e55c942909d8cee17eb56851ab3b9349b4fcf36b->enter($__internal_d26d98c28732d53fd5f103c9e55c942909d8cee17eb56851ab3b9349b4fcf36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d26d98c28732d53fd5f103c9e55c942909d8cee17eb56851ab3b9349b4fcf36b->leave($__internal_d26d98c28732d53fd5f103c9e55c942909d8cee17eb56851ab3b9349b4fcf36b_prof);

        
        $__internal_2c3ecf125a6f5814e2cbbfc35b77a04357a3d4c267297f93a53c0203767e2688->leave($__internal_2c3ecf125a6f5814e2cbbfc35b77a04357a3d4c267297f93a53c0203767e2688_prof);

    }

    public function getTemplateName()
    {
        return "annonces/new.html.twig";
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
", "annonces/new.html.twig", "C:\\wamp64\\www\\Colocation\\app\\Resources\\views\\annonces\\new.html.twig");
    }
}
