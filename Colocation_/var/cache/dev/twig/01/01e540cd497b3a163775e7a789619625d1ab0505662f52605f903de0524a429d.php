<?php

/* annonces/edit.html.twig */
class __TwigTemplate_25ca3d42098de1a884529076e52b7a0ebbb2c34eed2b019901371396ef90453c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "annonces/edit.html.twig", 1);
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
        $__internal_7786c2fa6141e5123fda294997f6c3654ec3d34592c72c8d8573f3ed4d93447c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7786c2fa6141e5123fda294997f6c3654ec3d34592c72c8d8573f3ed4d93447c->enter($__internal_7786c2fa6141e5123fda294997f6c3654ec3d34592c72c8d8573f3ed4d93447c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/edit.html.twig"));

        $__internal_87c542ac8ce3846bcdf2cf6c7208697ea7292396efee38aa9e24d0aba3204a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c542ac8ce3846bcdf2cf6c7208697ea7292396efee38aa9e24d0aba3204a92->enter($__internal_87c542ac8ce3846bcdf2cf6c7208697ea7292396efee38aa9e24d0aba3204a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "annonces/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7786c2fa6141e5123fda294997f6c3654ec3d34592c72c8d8573f3ed4d93447c->leave($__internal_7786c2fa6141e5123fda294997f6c3654ec3d34592c72c8d8573f3ed4d93447c_prof);

        
        $__internal_87c542ac8ce3846bcdf2cf6c7208697ea7292396efee38aa9e24d0aba3204a92->leave($__internal_87c542ac8ce3846bcdf2cf6c7208697ea7292396efee38aa9e24d0aba3204a92_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d2f096371427d513e015da44966cbb9301928c34a45da3fb4ebf6257e251281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d2f096371427d513e015da44966cbb9301928c34a45da3fb4ebf6257e251281->enter($__internal_8d2f096371427d513e015da44966cbb9301928c34a45da3fb4ebf6257e251281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c82b4f47a60eab5736e7ec06eb7f10fb6089acd8d7c8851a66760202041b60f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82b4f47a60eab5736e7ec06eb7f10fb6089acd8d7c8851a66760202041b60f9->enter($__internal_c82b4f47a60eab5736e7ec06eb7f10fb6089acd8d7c8851a66760202041b60f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Annonce_edit"), "html", null, true);
        echo "</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c82b4f47a60eab5736e7ec06eb7f10fb6089acd8d7c8851a66760202041b60f9->leave($__internal_c82b4f47a60eab5736e7ec06eb7f10fb6089acd8d7c8851a66760202041b60f9_prof);

        
        $__internal_8d2f096371427d513e015da44966cbb9301928c34a45da3fb4ebf6257e251281->leave($__internal_8d2f096371427d513e015da44966cbb9301928c34a45da3fb4ebf6257e251281_prof);

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
        return new Twig_Source("{% extends 'base.html.twig' %}

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
