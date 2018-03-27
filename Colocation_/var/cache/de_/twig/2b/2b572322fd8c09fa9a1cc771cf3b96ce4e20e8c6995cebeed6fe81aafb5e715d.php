<?php

/* :annonces:new.html.twig */
class __TwigTemplate_bde2fac1947af60449e9aad6b23abefd107319a45c98299c985b0412038b5b08 extends Twig_Template
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
        $__internal_9e037334b44dc21b19f3bc50d956d10a383b5eee31d3cae81f7dfa369f6373e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e037334b44dc21b19f3bc50d956d10a383b5eee31d3cae81f7dfa369f6373e2->enter($__internal_9e037334b44dc21b19f3bc50d956d10a383b5eee31d3cae81f7dfa369f6373e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":annonces:new.html.twig"));

        $__internal_8b6806957e10c59c88b0f54326ac181db432c158e71d929bf47b76957e73587e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6806957e10c59c88b0f54326ac181db432c158e71d929bf47b76957e73587e->enter($__internal_8b6806957e10c59c88b0f54326ac181db432c158e71d929bf47b76957e73587e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":annonces:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e037334b44dc21b19f3bc50d956d10a383b5eee31d3cae81f7dfa369f6373e2->leave($__internal_9e037334b44dc21b19f3bc50d956d10a383b5eee31d3cae81f7dfa369f6373e2_prof);

        
        $__internal_8b6806957e10c59c88b0f54326ac181db432c158e71d929bf47b76957e73587e->leave($__internal_8b6806957e10c59c88b0f54326ac181db432c158e71d929bf47b76957e73587e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b844b9a386d440c8bfe459c3622ea2c4203426441c54958dca467f07d82c864e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b844b9a386d440c8bfe459c3622ea2c4203426441c54958dca467f07d82c864e->enter($__internal_b844b9a386d440c8bfe459c3622ea2c4203426441c54958dca467f07d82c864e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1cd6fe5124681e46b0b1e4bb581abf0a435c3d7bdcf2acab41f07ce605ef593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1cd6fe5124681e46b0b1e4bb581abf0a435c3d7bdcf2acab41f07ce605ef593->enter($__internal_f1cd6fe5124681e46b0b1e4bb581abf0a435c3d7bdcf2acab41f07ce605ef593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f1cd6fe5124681e46b0b1e4bb581abf0a435c3d7bdcf2acab41f07ce605ef593->leave($__internal_f1cd6fe5124681e46b0b1e4bb581abf0a435c3d7bdcf2acab41f07ce605ef593_prof);

        
        $__internal_b844b9a386d440c8bfe459c3622ea2c4203426441c54958dca467f07d82c864e->leave($__internal_b844b9a386d440c8bfe459c3622ea2c4203426441c54958dca467f07d82c864e_prof);

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
